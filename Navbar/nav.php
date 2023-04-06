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
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
                *{
                    font-family:  'Montserrat', Fallback, sans-serif;
                }
                .navBg {
                    box-shadow: 2px 3px 2px #888888;
                    padding: 10px;
                    background-color:white
                }
                nav .navbar-nav li a {
                    color: #777 
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
            </style>
        </head>
        <nav class="navbar navbar-expand-lg sticky-top  navBg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo BASEURL ?>./" style="margin-left:50px">
                    <img src="<?php echo BASEURL ?>images/logo.png" alt="" width="170" height="50"></a>
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
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                      Select Language
                                    </a>
                                    <ul
                                      class="dropdown-menu"
                                      aria-labelledby="language" style="border: none;">
                                      <li>
                                          <a class="dropdown-item" href="#">English</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Hindi</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Marathi</a>
                                      </li>
                                    </ul>
                                </li>
                                <?php if(isset($_SESSION['username'])){ ?>
                                <li class="nav-item">
                                        <a class="nav-link"><img src="<?php echo BASEURL ?>images/bell.png"/></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a
                                     class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"
                                     style="background-color:#6348b5;border-radius:10px">
                                        <b><?php echo $_SESSION['username'] ?></b>
                                    </a>
                                    <ul
                                      class="dropdown-menu"
                                      aria-labelledby="language" style="border: none;">
                                      <li>
                                          <a class="dropdown-item" href="<?php echo BASEURL ?>userdash.php">Profile</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="<?php echo BASEURL ?>authentication/logout.php">Logout</a>
                                      </li>
                                    </ul>
                                <?php
                                }else{
                                
                                echo '<button class="nav-link border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#loginModal">
                                    <b style="color:#6348b5;important!">Log In | Sign Up</b>
                                </button>';
                                 } ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>