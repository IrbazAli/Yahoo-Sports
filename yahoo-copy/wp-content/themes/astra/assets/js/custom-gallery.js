document.addEventListener("DOMContentLoaded", function () {
  const thumbs = document.querySelectorAll(".epyt-gallery-thumb");

  thumbs.forEach(thumb => {
    thumb.addEventListener("click", function (e) {
      e.preventDefault();

      // Get video ID
      const videoId = this.getAttribute("data-videoid");
      if (!videoId) return;

      // Create the YouTube embed iframe
      const iframe = document.createElement("iframe");
      iframe.width = "100%";
      iframe.height = "315";
      iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
      iframe.title = "YouTube video player";
      iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
      iframe.allowFullscreen = true;
      iframe.frameBorder = 0;

      // Clear the thumbnail and insert iframe
      this.innerHTML = ""; // Remove thumbnail image & title
      this.appendChild(iframe);
    });
  });
});
