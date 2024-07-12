 <?php include("../assets/php/header-nav.html");?>



  <section>
<div class="video-container">
 <video id="myVideo" class="" controls>
  <source src="../video/how-to-manage-garbage.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
</div>
    </section>
<?php include("../assets/php/footer.html");?>
<script>
  const video = document.getElementById('myVideo');

  function playPause() {
    if (video.paused) {
      video.play();
    } else {
      video.pause();
    }
  }

  // You can also add event listeners to control playback
  video.addEventListener('click', playPause);
</script>