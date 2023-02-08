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
                .navBg {
                    box-shadow: 2px 3px 2px #888888;
                    padding: 10px;
                    background-color:white
                }
                .navBgUp {
                    height: 35px;
                    background-color: #f2f2f2;
                }
                nav .navbar-nav li a {
                    color: #777 !important;
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
            </style>
        </head>
        <nav class="navbar navbar-expand-lg sticky-top navbar-light navBgUp">
            <div class="container-fluid">
                <a
                    class="navbar-brand"
                    href="#"
                    style="margin-left:120px;color:#6348b5;font-size:16px">
                    <b>Log In | Sign Up</b>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    <div
                        class="d-flex"
                        style="margin-right:80px;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;margin-top:15px">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1">
                                    <form>
                                        <select style="border: none;padding:3px">
                                            <option disabled="disabled">Select Language</option>
                                            <option>English</option>
                                            <option>Hindi</option>
                                            <option>Marathi</option>
                                        </select>
                                    </form>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1"><img src="./images/social/twitter.png"/></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#" tabindex="-1"><img src="./images/social/facebook.png"/></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1"><img src="./images/social/linkedin.png"/></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1"><img src="./images/social/youtube.png"/></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1"><img src="./images/social/quora.png"/></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1"><img src="./images/social/instagram.png"/></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1"><img src="./images/social/call.png"/></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1"><img src="./images/social/whatsapp.png"/></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg sticky-top  navBg">
            <div class="container-fluid">
                <a class="navbar-brand" href="./" style="margin-left:100px">
                    <img src="./images/logo.png" alt="" width="170" height="50"></a>
                    <button
                        class="navbar-toggler"
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
                            style="margin-right:80px;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">About Us</a>
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
                                          <a class="dropdown-item" href="#">Legal Compliances</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Marketing</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">All Services</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Expert Consultations</a>
                                      </li>
                                  </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" 
                                      data-bs-toggle="dropdown">
                                      Businesses
                                    </a>
                                    <ul
                                      class="dropdown-menu"
                                      aria-labelledby="Business" style="border: none;">
                                      <li>
                                          <a class="dropdown-item" href="#">Food Business</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Fashion Business</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Beauty Business</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Home Business</a>
                                      </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                      Community
                                    </a>
                                    <ul
                                      class="dropdown-menu"
                                      aria-labelledby="Business" style="border: none;">
                                      <li>
                                          <a class="dropdown-item" href="#">Business Listing</a>
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
                                          <a class="dropdown-item" href="#">FAQs</a>
                                      </li>
                                      <li>
                                          <a class="dropdown-item" href="#">Contact Us</a>
                                      </li>
                                    </ul>
                                </li>
                                <li class="nav-item" style="margin-top:3px">
                                    <img src="./images/social/search.png" alt=""/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>