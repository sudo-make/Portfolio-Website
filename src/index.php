<!-- 
  Author: Callum-James Smith (sudo-make)
  Date Created: 20-11-2019
  Last Updated: 17-04-2020
 -->
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <title>$ ls ~/ | Callum-James Smith</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- include Google hosted jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <!-- Obtained from https://www.jqueryscript.net/menu/Highlight-Nav-Bootstrap-jQuery-Dynamic-Menu.html -->
  <script src="js/dynamic-menu.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800" />
  <!-- Below is the API for Fontawesome, this provides some icons that allow for quicker load times and better responsiveness -->
  <script src="https://kit.fontawesome.com/6598dc23bc.js" crossorigin="anonymous"></script>
  <!-- These are the css files for the website, bootstrap.css has the complete bootstrap suite.-->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <!-- This css file overrides the defaults set by bootstrap -->
  <link rel="stylesheet" href="css/main.css" />

  <!-- reCaptcha3 -->
  <script src="https://www.google.com/recaptcha/api.js?render=6Lc0X7EZAAAAABJW8qMCa-6YUCx6kk-gegiCEePu"></script>
</head>

<body>
  <?php
  if (isset($_GET['contact'])) {
    if ($_GET['contact'] == "success") {
      echo ("<div class='alert alert-success'>Thanks for contacting</div>");
    }
  }
  ?>
  <!-- Navigation bar/header -->
  <div class="container-fluid home-page">
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Start of navigation -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item navigation-links">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item navigation-links">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#aboutModal">About me</a>
          </li>
          <li class="nav-item navigation-links">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#contactModal">Contact</a>
          </li>
          <li class="nav-item navigation-links">
            <a href="projects.html" class="nav-link">Projects</a>
          </li>
        </ul>
      </div>
      <script>
        $("#navbarSupportedContent").dynamicMenu();
      </script>
    </nav> <!-- End of navigation -->

    <canvas id="demo-canvas"></canvas>
    <div class="jumbotron demo">
      <div class="jumbo-info">
        <h1 class="display-4">Callum-James Smith</h1>
        <p class="lead">Student <i class="fa fa-university" aria-hidden="true"></i> and Game Developer <i class="fa fa-gamepad" aria-hidden="true"></i></p>
        <div class="btn-group" role="group" aria-label="Social media links">
          <button type="button" class="btn btn-light btn-social">
            <a class="text-dark" href="https://www.linkedin.com/in/callum-james-smith/" aria-label="External link to my LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </button>
          <button type="button" class="btn btn-light btn-social">
            <a class="text-dark" href="https://github.com/sudo-make" aria-label="External link to my GitHub page"><i class="fa fa-github" aria-hidden="true"></i></a>
          </button>
        </div>
      </div>
    </div>

    <div class="card mb-3 home-featured" style="max-width: 500px; float: right; margin: 8px; width: auto;">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Featured Project</h5>
            <p class="card-text">Micro RPG | A 2D RPG game being made with the powa of Unity....</p>
            <a href="#" class="btn btn-outline-light">Go to project</a>
            <!-- TODO: Make a system that will grab the date/time of the last commit for this project -->
            <p class="card-text"><small class="text-muted">Last updated 1 day 3 hours ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End of page container-->

  <!-- About Modal -->
  <div class="modal fade" id="aboutModal" tabindex="0" role="dialog" aria-labelledby="aboutModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aboutModalTitle">About Me</h5>
          <button type="button" class="close" data-dismiss="modal" tabindex="0" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card mb-3" style="max-width: 650px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="images/profile_img.gif" class="card-img" alt="A GIF of a disco cockroach.">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Hey!</h5>
                  <p class="card-text">3rd year student at the university of essex and game developer.</p>
                  <p class="small">I also love dragons! <i class="fas fa-dragon"></i></p>
                </div>
              </div>
            </div>
            <div class="card text-center card-about">
              <!-- The card bodies, these are shown when user clicks on corresponding tab -->
              <div class="card-body">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                    My name is Callum-James Smith; I am a 3rd year student at the university of essex; studying computer science.
                    I make games, create websites, and mess around with linux.
                  </div>
                </div>
              </div> <!-- End of content in tabbed pane -->
            </div> <!-- End of Tabbed Pane Body -->
          </div> <!-- End of Tabbed Pane -->
        </div> <!-- End of Modal Body -->
      </div> <!-- End of Modal Content -->
    </div> <!-- End of Modal Dialog -->
  </div><!-- End of About Modal -->

  <!-- Contact Modal -->
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Send me a message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="contact_body">
          <div id="contact_results"></div>
          <form id="contact_form" method="post" action="contact.php">
            <div class="form-group">
              <label for="from-email" class="col-form-label">Your email:</label>
              <input type="email" class="form-control" id="user_email" name="user_email" required="true">
            </div>
            <div class="form-group">
              <label for="subject" class="col-form-label">Subject:</label>
              <input type="text" class="form-control" id="subject" name="subject" required="true">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message" name="message" required="true"></textarea>
            </div>
            <button type="submit" class="btn btn-light">Send</button>
            <input type="hidden" id="token" name="token">
          </form>
          <!-- Start jQuery code -->
          <script>
            grecaptcha.ready(function() {
              grecaptcha.execute('6Lc0X7EZAAAAABJW8qMCa-6YUCx6kk-gegiCEePu', {
                action: 'homepage'
              }).then(function(token) {
                document.getElementById('token').value = token;
              });
            });
          </script>
        </div>
      </div>
    </div>
  </div> <!-- End of Contact Modal -->

  <script src="js/jquery.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> <!-- Bootstrap Javascript stuff, animations etc. -->

  <!-- Cool background effect -->
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js"></script>
  <script src="js/effect.js"></script>
</body>

</html>