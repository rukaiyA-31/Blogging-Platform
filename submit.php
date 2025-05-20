<html>
    <head>
        <title>Rich Text Editor with User Authentication</title>
        <link rel="stylesheet" type="text/css" href="../css/mycs.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            .auth-container {
                border: 1px solid #ccc;
                padding: 15px;
                max-width: 400px;
                margin-bottom: 30px;
            }
            .auth-container h2 {
                margin-top: 0;
            }
            .auth-container form {
                margin-top: 10px;
            }
            .auth-container label {
                display: block;
                margin-bottom: 5px;
            }
            .auth-container input[type="text"],
            .auth-container input[type="email"],
            .auth-container input[type="password"] {
                width: 100%;
                padding: 8px;
                margin-bottom: 15px;
                box-sizing: border-box;
            }
            .auth-container button {
                padding: 8px 15px;
                cursor: pointer;
            }
            #editor {
                border: 1px solid #ccc;
                min-height: 200px;
                padding: 10px;
                font-family: Arial, sans-serif;
                margin-top: 10px;
                overflow-y: auto;
                max-width: 600px;
            }
            .toolbar button {
                margin-right: 5px;
                padding: 5px 10px;
                cursor: pointer;
            }
            .toggle-link {
                color: blue;
                cursor: pointer;
                text-decoration: underline;
                margin-top: 5px;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <h1>Rich Text Editor with User Authentication</h1>

        <!-- Authentication Section -->
        <div class="auth-container">
            <h2 id="formTitle">Login</h2>

            <!-- Login Form -->
            <form id="loginForm" action="forget.html" method="POST">
                <label for="loginEmail">Email</label>
                <input type="email" id="loginEmail" name="email" placeholder="Enter your email" required>

                <label for="loginPassword">Password</label>
                <input type="password" id="loginPassword" name="password" placeholder="Enter your password" required>

                <button type="submit">Login</button>
            </form>

            <!-- Signup Form (hidden by default) -->
            <form id="signupForm" action="register.html" method="POST" style="display:none;">
                <label for="signupEmail">Email</label>
                <input type="email" id="signupEmail" name="email" placeholder="Enter your email" required>

                <label for="signupPassword">Password</label>
                <input type="password" id="signupPassword" name="password" placeholder="Enter your password" required>

                <label for="signupConfirmPassword">Confirm Password</label>
                <input type="password" id="signupConfirmPassword" name="confirmPassword" placeholder="Confirm your password" required>

                <button type="submit">Sign Up</button>
            </form>

            <span class="toggle-link" id="toggleAuth">Don't have an account? Sign Up</span>
        </div>

        <!-- Rich Text Editor Section -->
        <div>
            <h2>Write Your Content</h2>
            <div class="toolbar">
                <button type="button" onclick="formatText('bold')"><b>Bold</b></button>
                <button type="button" onclick="formatText('italic')"><i>Italic</i></button>
                <button type="button" onclick="formatText('underline')"><u>Underline</u></button>
                <button type="button" onclick="formatText('insertUnorderedList')">• List</button>
                <button type="button" onclick="formatText('insertOrderedList')">1. List</button>
                <button type="button" onclick="formatText('formatBlock', '<h1>')">H1</button>
                <button type="button" onclick="formatText('formatBlock', '<h2>')">H2</button>
                <button type="button" onclick="addLink()">Link</button>
                <button type="button" onclick="clearFormatting()">Clear</button>
            </div>
            
            <div id="editor" contenteditable="true" placeholder="Start typing here..."></div>
            
            <form id="editorForm" action="submit.html" method="POST">
                <input type="hidden" name="content" id="contentInput">
                <button type="submit" onclick="prepareSubmit(event)">Submit Content</button>
            </form>
        </div>

        <script>
            // Toggle between login and signup forms
            const loginForm = document.getElementById('loginForm');
            const signupForm = document.getElementById('signupForm');
            const toggleAuth = document.getElementById('toggleAuth');
            const formTitle = document.getElementById('formTitle');

            toggleAuth.addEventListener('click', () => {
                if(loginForm.style.display !== 'none') {
                    // Show signup, hide login
                    loginForm.style.display = 'none';
                    signupForm.style.display = 'block';
                    formTitle.textContent = 'Sign Up';
                    toggleAuth.textContent = 'Already have an account? Login';
                } else {
                    // Show login, hide signup
                    loginForm.style.display = 'block';
                    signupForm.style.display = 'none';
                    formTitle.textContent = 'Login';
                    toggleAuth.textContent = "Don't have an account? Sign Up";
                }
            });

            // Rich Text Editor functions
            function formatText(command, value = null) {
                document.execCommand(command, false, value);
            }

            function addLink() {
                const url = prompt("Enter the link URL:", "https://");
                if(url) {
                    formatText('createLink', url);
                }
            }

            function clearFormatting() {
                formatText('removeFormat');
            }

            function prepareSubmit(e) {
                e.preventDefault();
                const content = document.getElementById('editor').innerHTML;
                document.getElementById('contentInput').value = content;
                e.target.form.submit();
            }
        </script>
    </body>
</html>
