<?php
include_once(dirname(__FILE__) .'/../db/defineUrl.php');
include(ROOT_FOLDER.'authentication/login.php');
?>
<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
            
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <style type="text/css">
                @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap');
                *{
                    font-family:  'Montserrat', Fallback, sans-serif;
                }
                .navBg {
                    /* z-index: 9724790009779!important; */
                    box-shadow: 2px 3px 2px #888888;
                    padding: 10px;
                    background-color:white;
                }
                nav .navbar-nav li {
                    margin-right: 15px;
                }
                nav .navbar-nav li a {
                    color: black;
                    font-weight:bold; 
                }
                nav .navbar-nav li a:hover {
                    color: #6348b5 !important;
                }
                nav .navbar-nav > .active > a {
                    color: #6348b5 !important;
                }
                @media all and (min-width: 992px) {
                  .navbar .nav-item .dropdown-menu{ display: none; }
                  .navbar .nav-item:hover .nav-link{   }
                  .navbar .nav-item:hover .dropdown-menu{ display: block; border: none;font-size: 14px;padding: 5px;}
                  .navbar .nav-item .dropdown-menu{ margin-top:0; }
                }
                .custom-toggler .navbar-toggler-icon {
                    background-image: url(
                    "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 1)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
                }
  .VIpgJd-ZVi9od-aZ2wEe-wOHMyf{
   z-index: 9724790009779!important;
   top:0;
   left:unset;
   right:-5px;
   display:none!important;
   border-radius:50%;
   border:2px solid gold;
  }
  .VIpgJd-ZVi9od-aZ2wEe-OiiCO{
    width:80px;
    height:80px;
  }
  /*hide google translate link | logo | banner-frame */
  .goog-logo-link,.gskiptranslate,.goog-te-gadget span,.goog-te-banner-frame,#goog-gt-tt, .goog-te-balloon-frame,div#goog-gt-{
    display: none!important;
  }
  .goog-te-gadget {
    color: transparent!important;
    font-size:0px;
  }

  .goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
  }
   
 /*google translate Dropdown */
 
 #google_translate_element select{
    font-family:  'Montserrat', Fallback, sans-serif;
 background:transparent;
 font-weight:bolder;
 border: none;
 border-radius:0px;
 padding:0px;
 outline: none; /* Remove outline on focus */
    box-shadow: none
 }

 /* CSS to customize the dropdown items */
 #google_translate_element select option {
    font-weight: bolder;
    border: none;
    padding: 10px;
  }

 .translate-container {
    display: flex;
    align-items: center;
  }

  .translate-image {
    margin-right: 5px;
  }
            </style>
        </head>
        <body>
        <nav class="navbar navbar-expand-lg sticky-top navBg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo BASEURL ?>./" style="margin-left:50px">
                    <img src="<?php echo BASEURL ?>images/logo.png" alt="" width="150" height="45"></a>
                    <button
                        class="navbar-toggler custom-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02"
                        aria-controls="navbarTogglerDemo02"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                        <div
                            class="d-flex"
                            style="margin-right:20px;
                            font-family: 'Open Sans', sans-serif;
                            font-size: 16px;">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown" style="border:1px solid black;border-radius:10px">
                                    <div class="translate-container p-2">
                                        <img src="<?php echo BASEURL ?>images/language.png" class="translate-image dropdown-toggle" alt="Language">
                                        <div id="google_translate_element"></div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                  <a
                                      class="nav-link dropdown-toggle"
                                      href="#"
                                      data-bs-toggle="dropdown">
                                      Offerings
                                  </a>
                                  <ul
                                      class="dropdown-menu">
                                      <li>
                                          <a class="dropdown-item" href="#">Business Planning and Expansion</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Funding</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Marketing</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Expert Consultations</a>
                                      </li>
                                  </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                      More
                                    </a>
                                    <ul
                                      class="dropdown-menu"
                                      aria-labelledby="Business" style="border: none;">
                                      <li>
                                          <a class="dropdown-item" href="#">About Us</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">FAQs</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="<?php echo BASEURL ?>others/contact_us">Contact Us</a>
                                      </li>
                                    </ul>
                                </li>
                                <?php if(isset($_SESSION['username'])){ ?>
                                <li class="nav-item dropdown">
                                    <a
                                     class="notranslate nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"
                                     style="background-color:#76287C;border-radius:10px">
                                        <b><?php echo $_SESSION['username'] ?></b>
                                    </a>
                                    <ul
                                      class="dropdown-menu w-20" style="border: none;">
                                      <li>
                                          <a class="dropdown-item" href="<?php echo BASEURL ?>userdash">Profile</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="<?php echo BASEURL ?>authentication/logout">Logout</a>
                                      </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link"><img src="<?php echo BASEURL ?>images/bell.png" width="25px"/></a>
                                </li>
                                <?php
                                }else{
                                
                                echo '<li class="nav-item"><button class="nav-link border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#loginModal">
                                    <h6 style="color:#7058B9;important!"><b>Log In | Sign Up</b></h6>
                                </button></li>';
                                 } ?>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
                                </body>
            <!-- <script type="text/javascript"   
    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">  
    </script>   -->

    <script type="text/javascript">
  // JavaScript code to initialize Google Translate
  function googleTranslateElementInit() {
    new google.translate.TranslateElement(
      {
        pageLanguage: 'en',
        autoDisplay: true,
        layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
        includedLanguages: 'hi,en,mr',
        suppressWarning: true
      },
      'google_translate_element'
    );
    removeGoogleTranslateBanner();
  }

  // Remove the Google Translate banner
  function removeGoogleTranslateBanner() {
    var googleTranslateBanner = document.querySelector('.goog-te-banner-frame');
    if (googleTranslateBanner) {
      googleTranslateBanner.style.display = 'none';
    }
  }

  // Load the Google Translate API and initialize the translation element
  function loadGoogleTranslateAPI() {
    var script = document.createElement('script');
    script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
    document.body.appendChild(script);
  }

  // Call the function to load Google Translate API
  loadGoogleTranslateAPI();
</script>