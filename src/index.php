<!-- 
  Author: Callum-James Smith (sudo-make)
  Date Created: 20-11-2019
  Last Updated: 16-07-2020
 -->
<!DOCTYPE html>
<html class="no-js" lang="en">
<!-- 
                                                         ____________
                                 (`-..________....---''  ____..._.-`
                                  \\`._______.._,.---'''     ,'
                                  ; )`.      __..-'`-.      /
                                 / /     _.-' _,.;;._ `-._,'
                                / /   ,-' _.-'  //   ``--._``._
                              ,','_.-' ,-' _.- (( =-    -. `-._`-._____
                            ,;.''__..-'   _..--.\\.--'````--.._``-.`-._`.
             _          |\,' .-''        ```-'`---'`-...__,._  ``-.`-.`-.`.
  _     _.-,'(__)\__)\-'' `     ___  .          `     \      `--._
,',)---' /|)          `     `      ``-.   `     /     /     `     `-.
\_____--.  '`  `               __..-.  \     . (   < _...-----..._   `.
 \_,--..__. \\ .-`.\----'';``,..-.__ \  \      ,`_. `.,-'`--'`---''`.  )
           `.\`.\  `_.-..' ,'   _,-..'  /..,-''(, ,' ; ( _______`___..'__
                   ((,(,__(    ((,(,__,'  ``'-- `'`.(\  `.,..______   SSt
                                                      ``--------..._``--.__
                                                      Here be dragons.....
 -->
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
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
  <div class="container-fluid home-page" id="gradient">
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
        </ul>
        <script>
          $("#navbarSupportedContent").dynamicMenu();
        </script>
    </nav> <!-- End of navigation -->
    <div class="jumbotron demo">
      <div class="jumbo-info">
        <h1 class="display-4">Callum-James Smith</h1>
        <p class="lead">Student <i class="fa fa-university" aria-hidden="true"></i> and Game Developer <i class="fa fa-gamepad" aria-hidden="true"></i></p>
        <div class="btn" aria-label="Social media links">
          <button type="button" class="btn btn-light btn-social">
            <a class="text-dark" href="https://www.linkedin.com/in/callum-james-smith/" aria-label="External link to my LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <span>LinkedIn Profile</span>
          </button>
          <button type="button" class="btn btn-light btn-social">
            <a class="text-dark" href="https://github.com/sudo-make" aria-label="External link to my GitHub page"><i class="fa fa-github" aria-hidden="true"></i></a>
            <span>GitHub Profile</span>
          </button>
        </div>
      </div>
    </div>
    <!-- Project thingy -->
    <div class="folder" id="js_folder">
      <div class="folder-summary" id="js_toggle-folder">
        <div class="folder-summary__start">
          <button class="folder-collapse-button" id="js_folder-collapse-button">
            <svg id="js_folder-collapse-button-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
              <polyline points="18 15 12 9 6 15"></polyline>
            </svg>
          </button>
          <div class="folder-summary__file-count" id="js_folder-summary-amount">
            <span class="folder-summary__file-count__amount">5</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
              <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
            </svg>
          </div>
        </div>
        <div class="folder-summary__details">
          <div class="folder-summary__details__name">
            Projects
          </div>
          <div class="folder-summary__details__share">
            Widget Design by
            <a class="shared-user" href="https://dribbble.com/7ahang" target="_blank" rel="noopener noreferrer">
              <svg class="shared-user__avatar" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="12" fill="#1C213E" />
                <circle cx="12" cy="12" fill="#BFBFC0" r="6.168" />
                <circle cx="12.561" cy="11.439" r="5.607" fill="url(#paint0_radial)" fill-opacity=".5" />
                <defs>
                  <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(109.486 3.244 10.282) scale(7.73263)">
                    <stop stop-color="#758EA9" />
                    <stop offset="1" stop-color="#668097" stop-opacity="0" />
                  </radialGradient>
                </defs>
              </svg>
              <span class="shared-user__name">7ahang</span>
            </a>
          </div>
        </div>
        <div class="folder-summary__end">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M6 12c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3zm9 0c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3zm9 0c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z" /></svg>
        </div>
      </div>

      <ul class="folder-content" id="js_folder-content">
        <!-- Micro RPG -->
        <li class="folder-item js_folder-item">
          <div class="folder-item__icon">
            <svg width="2433" height="2500" viewBox="0 0 256 263" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet">
              <path d="M166.872 131.237l45.91-79.275 22.184 79.275-22.185 79.256-45.909-79.256zm-22.376 12.874l45.916 79.262-79.966-20.486-57.77-58.776h91.82zm45.906-105.033l-45.906 79.275h-91.82l57.77-58.78 79.956-20.495zm65.539 65.18L227.933.06l-104.54 27.925-15.475 27.207-31.401-.225L0 131.244l76.517 76.259h.003l31.388-.232 15.497 27.207 104.528 27.92L255.94 158.22l-15.906-26.982 15.906-26.978z" fill="#222C37" /></svg>
          </div>
          <div class="folder-item__details">
            <div class="folder-item__details__name">
              <a href="https://github.com/sudo-make/micro-rpg">Micro RPG</a>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ecc31c" stroke-widt class="feather feather-star">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
              </svg>
            </div>
            <div class="folder-item__details__date">A 2D rougelike game I'm currently working on; again, made using Unity3D. ;)</div>
          </div>
        </li>
        <!-- Nihil -->
        <li class="folder-item js_folder-item">
          <div class="folder-item__icon">
            <svg width="2433" height="2500" viewBox="0 0 256 263" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet">
              <path d="M166.872 131.237l45.91-79.275 22.184 79.275-22.185 79.256-45.909-79.256zm-22.376 12.874l45.916 79.262-79.966-20.486-57.77-58.776h91.82zm45.906-105.033l-45.906 79.275h-91.82l57.77-58.78 79.956-20.495zm65.539 65.18L227.933.06l-104.54 27.925-15.475 27.207-31.401-.225L0 131.244l76.517 76.259h.003l31.388-.232 15.497 27.207 104.528 27.92L255.94 158.22l-15.906-26.982 15.906-26.978z" fill="#222C37" /></svg>
          </div>
          <div class="folder-item__details">
            <div class="folder-item__details__name">
              <a href="https://github.com/sudo-make/Nihil---Game">Nihil</a>
            </div>
            <div class="folder-item__details__date">
              A 3D horror game made using Unity3D
            </div>
          </div>
        </li>
        <!-- Global Game Jam 2019 -->
        <li class="folder-item js_folder-item">
          <div class="folder-item__icon">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 535" style="enable-background:new 0 0 1000 535;" xml:space="preserve">
              <style type="text/css">
                .st0 {
                  fill: #252162;
                }

                .st1 {
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  fill: #FFFFFF;
                }

                .st2 {
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  fill: #22A9E0;
                }

                .st3 {
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  fill: #F3EB33;
                }
              </style>
              <g>
                <path class="st0" d="M66.7,500.9v16.6c0,2.9-0.8,5.1-2.9,7.1c-6.7,6.1-15.5,10-26.3,10C16.8,534.5,0,519.5,0,497
                  c0-22.6,16.8-37.4,37.6-37.4c10.9,0,18.8,3.8,24.9,9.9c1,0.9,1.5,2.2,1.5,3.6c0,2.8-2.3,5-5.1,5c-1.3,0-2.6-0.5-3.6-1.4
                  c-4.4-4.4-10.6-7.4-17.7-7.4c-15.1,0-26.4,11.5-26.4,27.8c0,16.2,11.3,27.9,26.4,27.9c8,0,14.9-3.9,18.3-7.2v-13h-19
                  c-2.6,0-4.8-2.2-4.8-4.9c0-2.6,2.2-4.7,4.8-4.7H61C64.7,495.1,66.7,497.2,66.7,500.9z" />
                <path class="st0" d="M80.6,527.4v-61.8c0-2.9,2.5-5.4,5.5-5.4c2.9,0,5.3,2.5,5.3,5.4v58H120c2.6,0,4.9,2.1,4.9,4.7
                  c0,2.7-2.3,4.9-4.9,4.9H86.5C82.7,533.1,80.6,531,80.6,527.4z" />
                <path class="st0" d="M166.3,459.5c21.6,0,36.5,16,36.5,37.4c0,21.5-14.9,37.4-36.5,37.4s-36.5-16-36.5-37.4
                  C129.8,475.5,144.7,459.5,166.3,459.5z M166.3,469.2c-15.5,0-25.3,11.8-25.3,27.8c0,15.8,9.8,27.8,25.3,27.8
                  c15.3,0,25.3-11.9,25.3-27.8C191.6,481,181.6,469.2,166.3,469.2z" />
                <path class="st0" d="M215.9,527.4v-60.9c0-3.7,2.1-5.8,5.9-5.8h28.1c12.9,0,20.4,7.9,20.4,18.4c0,9.1-6,15.2-12.6,16.6
                  c7.7,1.2,14,9,14,17.8c0,11.4-7.6,19.5-20.9,19.5h-29C218,533.1,215.9,531,215.9,527.4z M247.8,491.4c7.3,0,11.3-4.6,11.3-10.5
                  c0-6-4-10.6-11.3-10.6h-21.1v21.2H247.8z M248.3,523.6c7.6,0,12.2-4.3,12.2-11.4c0-6-4.1-11.2-12.2-11.2h-21.6v22.6H248.3z" />
                <path class="st0" d="M346.4,528.1c0,3-2.5,5.5-5.5,5.5c-2.4,0-4.4-1.5-5.1-3.5l-4.6-12h-35.9l-4.6,12c-0.8,2-2.8,3.5-5.1,3.5
                  c-3,0-5.5-2.5-5.5-5.5c0-0.7,0.2-1.4,0.4-2.1l23.9-59.8c1.3-3.5,4.8-6.1,8.8-6.1c4.1,0,7.5,2.6,8.9,6.1l23.9,59.8
                  C346.1,526.6,346.4,527.4,346.4,528.1z M327.6,508.5l-14.4-38.3l-14.3,38.3H327.6z" />
                <path class="st0" d="M357.4,527.4v-61.8c0-2.9,2.5-5.4,5.5-5.4c2.9,0,5.3,2.5,5.3,5.4v58h28.5c2.6,0,4.9,2.1,4.9,4.7
                  c0,2.7-2.3,4.9-4.9,4.9h-33.5C359.5,533.1,357.4,531,357.4,527.4z" />
                <path class="st0" d="M504.8,500.9v16.6c0,2.9-0.8,5.1-2.9,7.1c-6.7,6.1-15.5,10-26.3,10c-20.7,0-37.6-15-37.6-37.6
                  c0-22.6,16.8-37.4,37.6-37.4c10.9,0,18.8,3.8,24.9,9.9c1,0.9,1.5,2.2,1.5,3.6c0,2.8-2.3,5-5.1,5c-1.3,0-2.6-0.5-3.6-1.4
                  c-4.4-4.4-10.6-7.4-17.7-7.4c-15.1,0-26.4,11.5-26.4,27.8c0,16.2,11.3,27.9,26.4,27.9c8,0,14.9-3.9,18.3-7.2v-13h-19
                  c-2.6,0-4.8-2.2-4.8-4.9c0-2.6,2.2-4.7,4.8-4.7h24.1C502.8,495.1,504.8,497.2,504.8,500.9z" />
                <path class="st0" d="M579.5,528.1c0,3-2.5,5.5-5.5,5.5c-2.4,0-4.4-1.5-5.1-3.5l-4.6-12h-35.9l-4.6,12c-0.8,2-2.8,3.5-5.1,3.5
                  c-3,0-5.5-2.5-5.5-5.5c0-0.7,0.2-1.4,0.4-2.1l23.9-59.8c1.3-3.5,4.8-6.1,8.8-6.1c4.1,0,7.5,2.6,8.9,6.1l23.9,59.8
                  C579.3,526.6,579.5,527.4,579.5,528.1z M560.7,508.5l-14.4-38.3L532,508.5H560.7z" />
                <path class="st0" d="M652.9,528.2v-52.6l-22.8,56c-0.5,1.3-1.6,2.1-2.9,2.1c-1.4,0-2.5-0.8-2.9-2.1l-22.8-56v52.6
                  c0,2.9-2.4,5.4-5.3,5.4c-3,0-5.5-2.5-5.5-5.4v-59c0-4.9,4-9,9.1-9c3.8,0,7.2,2.3,8.5,5.6l19,47l19-47c1.3-3.4,4.7-5.6,8.5-5.6
                  c5.1,0,9.1,4.1,9.1,9v59c0,2.9-2.5,5.4-5.5,5.4C655.3,533.6,652.9,531.2,652.9,528.2z" />
                <path class="st0" d="M679.8,527.4v-60.9c0-3.7,2.1-5.8,5.9-5.8h38.4c2.6,0,4.9,2.2,4.9,4.9c0,2.6-2.3,4.7-4.9,4.7h-33.4v21.2h32.7
                  c2.6,0,4.9,2.1,4.9,4.7c0,2.7-2.3,4.9-4.9,4.9h-32.7v22.6h33.4c2.6,0,4.9,2.1,4.9,4.7c0,2.7-2.3,4.9-4.9,4.9h-38.4
                  C681.9,533.1,679.8,531,679.8,527.4z" />
                <path class="st0" d="M764,525.3c0-2.8,2.2-5,4.9-5c1,0,2,0.3,2.7,0.9c2.6,2.2,5.6,3.6,9.7,3.6c8.4,0,13.6-5.6,13.6-14.1v-45
                  c0-2.9,2.5-5.4,5.4-5.4c3,0,5.4,2.5,5.4,5.4v45.1c0,16.1-10.2,23.7-23.7,23.7c-6.1,0-11.3-1.5-16-5.2
                  C764.8,528.3,764,526.9,764,525.3z" />
                <path class="st0" d="M880.1,528.1c0,3-2.5,5.5-5.5,5.5c-2.4,0-4.4-1.5-5.1-3.5l-4.6-12h-35.9l-4.6,12c-0.8,2-2.8,3.5-5.1,3.5
                  c-3,0-5.5-2.5-5.5-5.5c0-0.7,0.2-1.4,0.4-2.1l23.9-59.8c1.3-3.5,4.8-6.1,8.8-6.1c4.1,0,7.5,2.6,8.9,6.1l23.9,59.8
                  C879.8,526.6,880.1,527.4,880.1,528.1z M861.3,508.5l-14.4-38.3l-14.3,38.3H861.3z" />
                <path class="st0" d="M953.4,528.2v-52.6l-22.8,56c-0.5,1.3-1.6,2.1-2.9,2.1c-1.4,0-2.5-0.8-2.9-2.1l-22.8-56v52.6
                  c0,2.9-2.4,5.4-5.3,5.4c-3,0-5.5-2.5-5.5-5.4v-59c0-4.9,4-9,9.1-9c3.8,0,7.2,2.3,8.5,5.6l19,47l19-47c1.3-3.4,4.7-5.6,8.5-5.6
                  c5.1,0,9.1,4.1,9.1,9v59c0,2.9-2.5,5.4-5.5,5.4C955.8,533.6,953.4,531.2,953.4,528.2z" />
              </g>
              <g>
                <path class="st1" d="M681.2,206.6c0,113.3-90.7,202.9-203.9,202.9s-205.1-90.4-205.1-203.7S363.4,0.5,476.6,0.5
                  S681.2,93.4,681.2,206.6z" />
                <g>
                  <path class="st2" d="M294.7,215c-2-19.2-16.4-26.2-18.3-51.9c-2.8,13.5-4.3,27.6-4.3,41.9c0,28.2,5.7,55.1,16.1,79.6
                    C284.8,253.5,297.4,240.3,294.7,215z" />
                  <path class="st2" d="M375.9,27c-24.1,13.7-45.2,32.1-62,54.1c38.6-32.6,77.5-28.4,84.4-34.4c8.8-7.7-29.5-10.8-29.5-10.8
                    S370.3,32,375.9,27z" />
                  <path class="st2" d="M538.6,388.7c-40.6-20.8-11.1-50.8,0.3-61.9c11.4-11.1,44.6-46.5,17.8-73.9c-26.8-27.4-30.8-57.6-16.4-85.6
                    c14.4-28,42.7-21.9,58.6-9.2c15.9,12.8,39.1,34.8,50.9,27.8c18.4-11.2-0.5-34.5-0.5-34.5s-0.7,23.6-5.9,23.6
                    c-5.3,0-6.3-25.1-9.8-27.4c-10-3.7-3.7,18.5-22,8.5c-18.3-10-11.7-33.8-3.4-44.1c8.3-10.3,22.2,5.1,26,8.4
                    c3.7,3.3,11,7.1,19.2,7.1c5.8,0,18.4,29,25.3,46.1c-15.2-98-99.9-173-202.1-173c-17.5,0-34.5,2.2-50.8,6.4
                    c6.7-1.2,14.2-2.2,22.6-2.8c69.5-5.6,92.9,12.5,90.7,21.5c-2.2,9-4.7,13.4-13.6,12.5c-8.8-0.9-17.9-4.4-23.4,2.7
                    c-5.5,7.2-10.9,6.3-16.4,4c-5.5-2.3-9.3-0.5-12.7,4.6c-3.4,5.1-10.7,19.1-16.1,13.8c-5.4-5.3-4.4-2.9-2.7-8.1
                    c1.7-5.3,8.9-10.8,5.6-11.3c-3.3-0.5-38.2-1.1-61.7,23.7c25.8,0,59.1,4.8,53.6,44.6c-5.5,39.8-38.3,59.3-73.7,89.4
                    c-35.4,30.1-76.4,97.9-29.8,141.7c-8.9,0.9-17.4-0.1-25.1-3.2c37.5,42.7,92.4,69.6,153.7,69.6c28.3,0,55.3-5.8,79.9-16.2
                    C550.2,393,544.1,391.5,538.6,388.7z M480.5,70.7c-5.9,10.6-16.2,10-19,8.3c-2.8-1.7-3.8-1.4,4.3-8.6
                    C473.9,63.2,486.4,60.1,480.5,70.7z" />
                </g>
                <path class="st3" d="M711.3,207.6c-12.4-1.9-24.5-1.8-30.2-1.6c0,0.2,0,0.4,0,0.6c0,11.5-1,22.8-2.8,33.8
                  c5.6-0.5,18.4-1.1,32.9,2.5c65.1,18.7,60.2,97.7-13.3,97.7c-172.8,0-240.3-301.4-401.3-301.4c-68.5,0-123.2,47.6-123.2,99.1
                  c0,46,29.7,98.3,95.9,109.2l7.4,1.2c-2.5-11.3-4-23-4.5-34.9l-2.9-0.4c-100.5-20-68.6-142.6,25-142.6
                  c141.7,0,209.8,301.7,405.6,301.7c39.7,0,90.8-23.1,90.8-76.5C790.8,250.4,757.1,215.9,711.3,207.6z" />
              </g>
              <g>
                <path class="st0" d="M987.1,459.5c7.2,0,12.9,5.7,12.9,12.9c0,7.1-5.7,12.9-12.9,12.9c-7.1,0-12.9-5.8-12.9-12.9
                  C974.3,465.2,980,459.5,987.1,459.5z M987.1,461.3c-6.1,0-11.1,4.9-11.1,11c0,6.1,5,11.1,11.1,11.1c6.1,0,11-5,11-11.1
                  C998.2,466.2,993.3,461.3,987.1,461.3z M987.3,474h-3.1v5.1c0,0.5-0.4,1-0.9,1c-0.6,0-1-0.4-1-1v-12.8c0-0.7,0.5-1.2,1.2-1.2h4.8
                  c2.5,0,4.7,1.8,4.7,4.5c0,2.9-2.3,4.1-3.3,4.3l3.2,4.7c0.1,0.2,0.2,0.4,0.2,0.5c0,0.6-0.5,1.1-1.1,1.1c-0.4,0-0.7-0.2-0.9-0.5
                  L987.3,474z M988.2,466.8h-4.1v5.3h4.1c1.3,0,2.7-1.1,2.7-2.6C990.9,467.9,989.5,466.8,988.2,466.8z" />
              </g>
            </svg>
          </div>
          <div class="folder-item__details">
            <div class="folder-item__details__name">
              <a href="https://github.com/sudo-make/Global-Game-Jam-2019---Memories">Global Game Jam 2019</a>
            </div>
            <div class="folder-item__details__date">
              My submission to the 2019 Global Game Jam event. This was also make in Unity3D; and was a team effort.
            </div>
          </div>
        </li>
        <!-- 2D Java "Bejeweled" clone-->
        <li class="folder-item js_folder-item">
          <div class="folder-item__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="1344" height="2500" viewBox="6.527 4.399 290.829 540.906">
              <path d="M285.104 430.945h-2.037v-1.14h5.486v1.14h-2.025v5.688h-1.424v-5.688zm10.942.297h-.032l-2.02 5.393h-.924l-2.006-5.393h-.024v5.393h-1.343v-6.828h1.976l1.86 4.835 1.854-4.835h1.969v6.828h-1.311l.001-5.393z" fill="#e76f00" />
              <path d="M102.681 291.324s-14.178 8.245 10.09 11.035c29.4 3.354 44.426 2.873 76.825-3.259 0 0 8.518 5.341 20.414 9.967-72.63 31.128-164.376-1.803-107.329-17.743M93.806 250.704s-15.902 11.771 8.384 14.283c31.406 3.24 56.208 3.505 99.125-4.759 0 0 5.937 6.018 15.271 9.309-87.815 25.678-185.624 2.025-122.78-18.833" fill="#5382a1" />
              <path d="M168.625 181.799c17.896 20.604-4.701 39.146-4.701 39.146s45.439-23.458 24.571-52.833c-19.491-27.395-34.438-41.005 46.479-87.934.001-.001-127.013 31.721-66.349 101.621" fill="#e76f00" />
              <path d="M264.684 321.369s10.492 8.646-11.555 15.333c-41.923 12.7-174.488 16.535-211.314.507-13.238-5.76 11.587-13.752 19.396-15.429 8.144-1.766 12.798-1.437 12.798-1.437-14.722-10.371-95.157 20.363-40.857 29.166 148.084 24.015 269.944-10.814 231.532-28.14M109.499 208.617s-67.431 16.016-23.879 21.832c18.389 2.462 55.047 1.905 89.192-.956 27.906-2.354 55.928-7.358 55.928-7.358s-9.84 4.214-16.959 9.074c-68.475 18.01-200.756 9.631-162.674-8.79 32.206-15.568 58.392-13.802 58.392-13.802M230.462 276.231c69.608-36.171 37.425-70.932 14.96-66.248-5.506 1.146-7.961 2.139-7.961 2.139s2.045-3.202 5.947-4.588c44.441-15.624 78.619 46.081-14.346 70.521 0 0 1.079-.962 1.4-1.824" fill="#5382a1" />
              <path d="M188.495 4.399s38.55 38.562-36.563 97.862c-60.233 47.567-13.735 74.689-.025 105.678-35.158-31.723-60.96-59.647-43.65-85.637 25.406-38.151 95.792-56.648 80.238-117.903" fill="#e76f00" />
              <path d="M116.339 374.246c66.815 4.277 169.417-2.373 171.846-33.987 0 0-4.67 11.984-55.219 21.503-57.027 10.731-127.364 9.479-169.081 2.601.002-.002 8.541 7.067 52.454 9.883" fill="#5382a1" />
              <path d="M105.389 495.049c-6.303 5.467-12.96 8.536-18.934 8.536-8.527 0-13.134-5.113-13.134-13.314 0-8.871 4.937-15.357 24.739-15.357h7.328l.001 20.135m17.392 19.623V453.93c0-15.518-8.85-25.756-30.188-25.756-12.457 0-23.369 3.076-32.238 6.999l2.56 10.752c6.983-2.563 16.022-4.949 24.894-4.949 12.292 0 17.58 4.949 17.58 15.181v7.678h-6.135c-29.865 0-43.337 11.593-43.337 28.993 0 15.018 8.878 23.554 25.594 23.554 10.745 0 18.766-4.437 26.264-10.929l1.361 9.221 13.645-.002zM180.824 514.672h-21.691l-26.106-84.96h18.944l16.198 52.199 3.601 15.699c8.195-22.698 13.992-45.726 16.891-67.898h18.427c-4.938 27.976-13.822 58.684-26.264 84.96M264.038 495.049c-6.315 5.467-12.983 8.536-18.958 8.536-8.512 0-13.131-5.113-13.131-13.314 0-8.871 4.947-15.357 24.748-15.357h7.341v20.135m17.39 19.623V453.93c0-15.518-8.871-25.756-30.186-25.756-12.465 0-23.381 3.076-32.246 6.999l2.557 10.752c6.985-2.563 16.041-4.949 24.906-4.949 12.283 0 17.579 4.949 17.579 15.181v7.678h-6.146c-29.873 0-43.34 11.593-43.34 28.993 0 15.018 8.871 23.554 25.584 23.554 10.752 0 18.77-4.437 26.28-10.929l1.366 9.221 13.646-.002zM36.847 529.099c-4.958 7.239-12.966 12.966-21.733 16.206L6.527 535.2c6.673-3.424 12.396-8.954 15.055-14.104 2.3-4.581 3.252-10.485 3.252-24.604v-96.995h18.478v95.666c-.001 18.875-1.51 26.5-6.465 33.936" fill="#e76f00" /></svg>
          </div>
          <div class="folder-item__details">
            <div class="folder-item__details__name">
              <a href="https://github.com/sudo-make/Java-Game-CE203-A2-">2D Java "Bejeweled" clone</a>
            </div>
            <div class="folder-item__details__date">
              This is a 2D game made using Java swing; as part of an assignment in my 2nd year at university.
            </div>
          </div>
        </li>
        <!-- Portfolio Website -->
        <li class="folder-item js_folder-item">
          <div class="folder-item__icon">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
              <g>
                <g>
                  <g>
                    <path d="M108.382,0h23.077v22.8h21.11V0h23.078v69.044H152.57v-23.12h-21.11v23.12h-23.077L108.382,0L108.382,0z" />
                    <path d="M205.994,22.896h-20.316V0h63.72v22.896h-20.325v46.148h-23.078L205.994,22.896L205.994,22.896z" />
                    <path d="M259.511,0h24.063l14.802,24.26L313.163,0h24.072v69.044h-22.982V34.822l-15.877,24.549h-0.397l-15.888-24.549v34.222 h-22.58V0z" />
                    <path d="M348.72,0h23.084v46.222h32.453v22.822H348.72V0z" />
                  </g>
                </g>
              </g>
              <g id="Guides_to_delete">
                <g>
                  <polygon fill="#E34E26" points="107.125,470.727 74.012,99.297 437.703,99.297 404.549,470.755 255.769,512 		" />
                  <polygon fill="#EF662A" points="255.857,129.657 255.857,480.449 376.164,447.101 404.51,129.657 		" />
                  <polygon fill="#FFFFFF" points="141.761,175.217 154.041,312.978 311.936,312.978 306.637,372.066 255.799,385.811 205.057,372.085 201.664,334.146 155.937,334.146 162.476,407.282 255.787 433.199 349.219,407.282 361.744,267.429 195.706,267.429 191.538,220.777 365.732,220.777 365.873,220.777 369.953,175.217 		" />
                  <g>
                    <polygon fill="#EBEBEB" points="255.857,175.217 141.761,175.217 154.041,312.978 255.857,312.978 255.857,267.429 195.706,267.429 191.538,220.777 255.857,220.777 			" />
                    <polygon fill="#EBEBEB" points="255.857,385.791 255.799,385.811 205.057,372.085 201.664,334.146 155.937,334.146 162.476,407.282 255.787,433.199 255.857,433.179 			" />
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="folder-item__details">
            <div class="folder-item__details__name">
              <a href="https://github.com/sudo-make/Portfolio-Website">Portfolio Website</a>
            </div>
            <div class="folder-item__details__date">
              If your seeing this; then you already know all about it :) This website was created using Bootstrap, JQuery, SCSS, PHP and HTML5
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>

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
            <!-- C.V Download -->
            <button type="submit" class="btn btn-outline-info" onclick="window.open('https://docs.google.com/document/d/e/2PACX-1vTeBsoP5b7dVH8GO_JlLbKgrj0-iR3od015JFOtAfJOrl8_5Gre6IbRK3U9JjVkObbzd-7RjRrupS_K/pub')"><i class="far fa-file"></i> View my C.V</button>
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
          <div id="contact_results" class="alert-danger"></div>
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
            <button type="submit" class="btn btn-outline-info">Send</button>
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
  <!-- Folder Effect -->
  <script src="js/folder_effect.js"></script>

  <!-- Cool background effect -->
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js"></script>
  <script src="js/effect.js"></script>
</body>

</html>