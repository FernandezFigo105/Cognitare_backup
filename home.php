<?php  include('header.php')?>

<section>
  <div class="hero" id="about">
  <video src="images/background.mp4" autoplay muted loop width="250%" height="250%"></video>
    <div class="hero-description">
      <div class="hero-text">
      <div class="content">
        
        <h2>Cognitaire</h2>
        <h4 class="hero-title">Discover Yourself</h4>
        <p>
          Take our free personality and career tests to learn more about who you are and what you should be
          doing. </p>
          
        <span class="w3-text-white social" style="margin-top:050px">
          <p>Follow us on Social media</p>
          <div class="w3-margin-top">
            <a href="#"> <i class="fa fa-facebook-official w3-hover-opacity icons"></i></a>
            <a href="#"><i class="fa fa-instagram w3-hover-opacity icons"></i></a>
            <a href="#"><i class="fa fa-snapchat w3-hover-opacity icons"></i></a>
            <a href="#"><i class="fa fa-pinterest-p w3-hover-opacity icons"></i></a>
            <a href="#"><i class="fa fa-twitter w3-hover-opacity icons"></i></a>
            <a href="#"><i class="fa fa-linkedin w3-hover-opacity icons"></i></a>
          </div>
        </span>
      </div>
    </div>
  </div>
</section>
<main style="padding-bottom:40px;">
  <h2 class="title" id="tests">List of Tests</h2>
  <div class="tests">
    <div class="test-list">
      <?php if(isset($_SESSION['u_id'])) { ?>
        <a href="take-test.php">
          <img src="images/careertest.jpg" style="width:100px; height: 100px;" >
          <h3>Career Test</h3>
        </a>
      <?php } else { ?>
        <span>
          <img src="img/careertest.jpg" style="width:100px; height: 100px;" >
          <h3>Career Test</h3>
          <a href="login.php"></a>
        </span>
      <?php } ?>

<?php  include('footer.php')?>
