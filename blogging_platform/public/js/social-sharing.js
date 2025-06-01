function share(platform) {
  const postTitle = encodeURIComponent("Check out this blog post!");
  const postUrl = encodeURIComponent(window.location.href);

  let url = "";
  switch (platform) {
    case 'facebook':
      url = `https://www.facebook.com/sharer/sharer.php?u=${postUrl}`;
      break;
    case 'twitter':
      url = `https://twitter.com/intent/tweet?text=${postTitle}&url=${postUrl}`;
      break;
    case 'linkedin':
      url = `https://www.linkedin.com/shareArticle?mini=true&url=${postUrl}&title=${postTitle}`;
      break;
  }
  window.open(url, "_blank");
}
