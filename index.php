<?php
include('Navbar/nav.php');

if (isset($_SESSION['notification'])) {
	$message = $_SESSION['notification'];
	$type = $_SESSION['notification_type'];
	// display notification using the appropriate CSS class
  echo '<div style="position:relative" class="d-flex justify-content-center"><div style="position:absolute" class="p-3 fst-italic notification ' . $type . '">' . $message . '</div></div>';
	// unset session variables to prevent displaying the notification multiple times
	unset($_SESSION['notification']);
	unset($_SESSION['notification_type']);
}

?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<link rel="stylesheet" href="./styles/style.css"/>
<title>Bizgrowthh</title>
<body class="">
<div class="topImg">
  <div id="topContainer">
    <div id="outerCont">
      <h2 id="headCont"><b>Discover/Find solution to support your business</b></h2>
      <div class="containers">
        <div class="row g-1 align-items-center">
          <div class="col">
          <div class="dropdown">
            <button id="sector" class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Select Sector
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">All</a></li>
              <li><a class="dropdown-item" href="#">Food</a></li>
              <li><a class="dropdown-item" href="#">Other Than Food</a></li>
            </ul>
          </div>
          </div>
          <div class="col">
          <div class="dropdown">
            <button id="busiStage" class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Select Business Stage
            </button>
            <ul class="dropdown-menu" style="width:250px" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Start</a></li>
              <li><a class="dropdown-item" href="#">Manage</a></li>
              <li><a class="dropdown-item" href="#">Grow</a></li>
            </ul>
          </div>
          </div>
          <div class="col">
          <div class="dropdown">
            <button id="geography" class="btn dropdown-toggle" type="button">
              Maharashtra
            </button>
          </div>
          </div>
          <div class="col">
          <div class="dropdown">
            <button id="category" class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Select Category
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Legal Compliances</a></li>
              <li><a class="dropdown-item" href="#">Proposal Creating & Funding</a></li>
              <li><a class="dropdown-item" href="#">Business Performance Improvement</a></li>
              <li><a class="dropdown-item" href="#">Professional Services</a></li>
              <li><a class="dropdown-item" href="#">Marketing</a></li>
            </ul>
          </div>
          </div>
        </div>
      </div><br/>
      <div style="display: flex;
          justify-content: center;
          align-items: center;">
        <button class="go">
          <span class='text'>Go</span>
          <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="icon bi bi-arrow-right-short"
              viewBox="0 0 16 16">
              <path
                  fill-rule="evenodd"
                  d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>

<div id="popularservices" style="background-color:#f2f2f2;padding:60px">
  <h4 style="font-weight: bolder;">Popular Services</h4><br/>
   <div class="carousel owl-carousel">
      <div class="col">
        <a href="services/msme_loan/msme_loan">
          <div class="card h-50 shadow">
            <div class="card-body">
              <h5 class="card-title"><b>Compare Options & Apply for MSME Business Loan</b></h5><br/>
              <p class="card-text">
              We understand that there are various options available when it comes to MSME loans, and choosing the right one can be overwhelming. 
              Our goal is to simplify the process for you by comparing different loan options available in the market and helping you make an informed decision.
              </p>
            </div>
            <div class="card-footer">
              <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">₹ 600</small>
              <small style="float:right" class="text-muted">Get in 3 days</small>
            </div>
            <div class="imgHover">
              <img src="./images/icon1.png" alt="your-image-alt-text" class="shadow hover-img">
              <button class="hover-btn btn btn-outline-primary">AVAIL SERVICE</button>
            </div>
          </div> 
        </a>
      </div>
      <div class="col">
        <a href="services/gst/gst_register">
          <div class="card h-50 shadow">
              <div class="card-body">
                <h5 class="card-title"><b>GST Registration</b></h5><br/>
                <p class="card-text">
                We also provide consultation services to help you determine whether your business is eligible for GST registration, and if so, which registration option is best suited for your business.
                Our team of experts will guide you through the entire process, from preparing the necessary documents to submitting the application and obtaining the GST registration certificate.
                </p>
              </div>
              <div class="card-footer">
                <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">₹ 590</small>  
                <small style="float:right" class="text-muted">Get in 30 days</small>
              </div>
              <div class="imgHover">
                <img src="./images/icon2.png" alt="your-image-alt-text" class="shadow hover-img">
                <button class="hover-btn btn btn-outline-primary">AVAIL SERVICE</button>
              </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="services/udyam/udyam_register">
          <div class="card h-50 shadow">
              <div class="card-body">
                <h5 class="card-title"><b>Udyam Registration</b></h5><br/>
                <p class="card-text">
                Our experts also provide Udyam registration services to micro, small, and medium enterprises (MSMEs) to ensure compliance with the new MSME classification and registration process.
                Therefore, our team of experts is here to help you navigate the entire process, from preparing the necessary documents to submitting the application and obtaining the Udyam registration certificate.
                </p>
              </div>
              <div class="card-footer shadow">
                <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">₹ 750</small>
                <small style="float:right"class="text-muted">Get in 7 to 8 days</small>
              </div>
              <div class="imgHover">
                <img src="./images/icon3.png" alt="your-image-alt-text" class="shadow hover-img">
                <button class="hover-btn btn btn-outline-primary">AVAIL SERVICE</button>
              </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="services/socialmedia/socialmedia">
          <div class="card h-50 shadow">
              <div class="card-body">
                <h5 class="card-title"><b>Social Media Management</b></h5><br/>
                <p class="card-text">
                We offer a range of social media management services, including content creation, scheduling, and posting, as well as monitoring and analyzing social media metrics to ensure maximum engagement and growth. 
                Our team works with you to develop a customized social media strategy that aligns with your business goals and target audience.
                </p>
              </div>
              <div class="card-footer">
                <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">₹ 5310</small>
                <small style="float:right"class="text-muted">1 month</small>
              </div>
              <div class="imgHover">
                <img src="./images/icon4.png" alt="your-image-alt-text" class="shadow hover-img">
                <button class="hover-btn btn btn-outline-primary">AVAIL SERVICE</button>
              </div>
          </div>
        </a>
      </div>
      <div class="col">
        <div class="card h-50 shadow">
          <div class="card-body">
            <h5 class="card-title"><b>Online Starter Pack</b></h5><br/>
            <p class="card-text">
            We specialize in creating and managing online presence for businesses of all sizes. In today's digital world, having a strong online presence is crucial for businesses looking to reach a wider audience and expand their customer base.
            That's where our team of experts comes in. We work with you to develop a comprehensive online presence strategy that aligns with your business goals and target audience.
            </p>
          </div>
          <div class="card-footer">
            <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">₹ 1652</small>
            <small style="float:right"class="text-muted">Get in 18 days</small>
          </div>
          <div class="imgHover">
            <img src="./images/icon4.png" alt="your-image-alt-text" class="shadow hover-img">
            <button class="hover-btn btn btn-outline-primary">AVAIL SERVICE</button>
          </div>
        </div>
      </div>
  </div>
</div>

<div id="allservices" style="padding:60px">
  <h4 style="font-weight: bolder;">All Services</h4><br/>
  <div class="row" id="filterservice">
    <div class="col-md-2 slist actives" id="ele1">
      <a href="javascript:;"><h6 class="p-2" style="font-weight:bolder;">Legal Compliances</h6></a>
    </div>
    <div class="col-md-3 slist" id="ele3">
      <h6 class="p-2" style="font-weight:bolder;">Business Performance Improvement</h6>
    </div>
    <div class="col-md-2 slist" id="ele2">
      <a href="javascript:;"><h6 class="p-2" style="font-weight:bolder;">Professional Services</h6></a>
    </div>
    <div class="col-md-2 slist" id="ele4">
      <h6 class="p-2" style="font-weight:bolder;">Marketing</h6>
    </div>
    <div class="col-md-3 slist" id="ele2">
      <h6 class="p-2" style="font-weight:bolder;">Consult an Expert</h6>
    </div>
  </div><hr/>
  <div id="listall" class="contentEle row row-cols-1 row-cols-md-3 g-4">
    <div class="col content ele1" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon5.png" width="13%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">Shop Act Intimation</h6></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">Shop Act Intimation is a mandatory Labor Law compliance for all businesses located within municipal limits of Maharashtra. It is a legal compliance requirement for businesses in Maharashtra.</p>
        </div>
        <div class="card-footer">
        <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">₹ 300</small>
          <small style="float:right" class="text-muted">Get in 2 days</small>
        </div>
      </div>
    </div>
    <div class="col content ele1" style="margin-top:50px">
      <a href="services/udyam/udyam_register">
        <div class="card h-100 shadow">
            <div style="padding: 20px 0px 0px 20px">
                  <img src="./images/icon3.png" width="13%"/>
                  <span style="float: right;padding: 20px 20px 0px 0px;"><h6 style="font-weight:bolder">Udyam Registration</h6></span>
            </div>
            <div class="card-body" style="margin-top: 20px;">
              <p class="card-text">Udyam Registration is a new and simplified process that helps your business get the identity of an MSME. It is mandatory only if you want to avail the Government schemes launched specially for Micro, Small and Medium Enterprises.</p>
            </div>
            <div class="card-footer">
            <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">₹ 750</small>  
            <small style="float:right" class="text-muted">Get in 7 to 8 days</small>
            </div>
        </div>
      </a>
    </div>
    <div class="col content ele1" style="margin-top:50px">
      <a href="services/rent/rent_agree">
        <div class="card h-100 shadow">
            <div style="padding: 20px 0px 0px 20px">
                  <img src="./images/icon6.png" width="12%"/>
                  <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">Rent Agreement Registration</h6></span>
            </div>
            <div class="card-body" style="margin-top: 20px;">
              <p class="card-text">A quick and hassle-free service which helps you get your online rent agreement registration.</p>
            </div>
            <div class="card-footer">
            <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">-</small>
              <small style="float:right; font-style: italic;" class="text-muted">View Details</small>
            </div>
        </div>
      </a>
    </div>
    <div class="col content ele1" style="margin-top:50px">
      <a href="services/gst/gst_register">
        <div class="card h-100 shadow">
            <div style="padding: 20px 0px 0px 20px">
                  <img src="./images/icon2.png" width="13%"/>
                  <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">GST Registration</h6></span>
            </div>
            <div class="card-body" style="margin-top: 20px;">
              <p class="card-text">GST Registration enables your business to charge and/or collect GST (Goods and Services Tax). The Goods & Services Tax (GST) is a value-added tax levied on most goods and services sold for domestic use.</p>
            </div>
            <div class="card-footer">
            <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">₹ 590</small>
              <small style="float:right" class="text-muted">Get in 30 days</small>
            </div>
        </div>
      </a>
    </div>
    <div class="col content ele2" style="margin-top:50px">
      <a href="services/itrfilling/">
        <div class="card h-100 shadow">
          <div style="padding: 20px 0px 0px 20px">
                <img src="./images/icon11.png" width="13%"/>
                <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">ITR Filing</h6></span>
          </div>
          <div class="card-body" style="margin-top: 20px;">
            <p class="card-text">A hassle-free service which will help you with filing all the monthly, quarterly and yearly GST Returns depending on your business. Get your business GST compliant.</p>
          </div>
          <div class="card-footer">
            <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">₹ 899</small>
            <small style="float:right;font-style: italic;" class="text-muted">View Details</small>
          </div>
        </div>
      </a>
    </div>
    <div class="col content ele1" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon8.png" width="13%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">FSSAI Licence</h6></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">FSSAI is a mandatory compliance for all food businesses in India. Applicability of FSSAI Licence depends on the factors such as annual turnover, production capacity, nature of business etc.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">-</small>
          <small style="float:right;font-style: italic;" class="text-muted">View Details</small>
        </div>
      </div>
    </div>
    <div class="col content ele1" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon7.png" width="13%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">Copyright Registration</h6></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">Copyright is the exclusive and assignable legal right given to the originator for a fixed number of years to print, publish, perform, film or record literary, artistic or musical material. Copyright provides legal evidence of ownership.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">₹ 3999*</small>
          <small style="float:right;" class="text-muted">Get in 3 Days</small>
        </div>
      </div>
    </div>
    <div class="col content ele1" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon12.png" width="13%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">Trademark Application Filing</h6></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">A trademark is a recognizable sign, design, or expression which identifies products or services of a particular activity. It is in the form of a logo, image, symbol, word(s), letter(s) or colour(s). It is a recognition of the company’s ownership of the brand.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">₹ 1999*</small>
          <small style="float:right;" class="text-muted">Get in 2 Days</small>
        </div>
      </div>
    </div> 
    <div class="col content ele1" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon8.png" width="13%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">FSSAI Registration</h6></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">FSSAI is a mandatory registration/ licence for business entities that engage in food and related activities. Food Safety and Standards Authority of India (FSSAI) is an autonomous body established under the Ministry of Health and Family Welfare, Government of India.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">₹ 800* to ₹ 1100*</small>
          <small style="float:right;font-style: italic;" class="text-muted">View Details</small>
        </div>
      </div>
    </div>
    <div class="col content ele3" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon9.png" width="13%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">Cash Flow Management</h6></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">Cash flow management for business is the process of monitoring, analysing, and optimizing the net amount of cash receipts minus the cash expenses.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">₹ 236*</small>
          <small style="float:right;font-style: italic;" class="text-muted">View Details</small>
        </div>
      </div>
    </div>
    <div class="col content ele3" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon10.png" width="13%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">Existing Business Performance Assessment</h6></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">For running a business successfully and ensuring growth in your business you need to assess the position of your business.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">₹ 236*</small>
          <small style="float:right;font-style: italic;" class="text-muted">View Details</small>
        </div>
      </div>
    </div>
    <div class="col content ele4" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon4.png" width="15%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">Online Starter Pack</h6></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">Creating a presence on different social media platforms gives your business the ability to reach a larger audience.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">₹ 1652*</small>
          <small style="float:right;" class="text-muted">Get in 18 days</small>
        </div>
      </div>
    </div>
    <div class="col content ele4" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon4.png" width="15%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder">Social Media Management</h6></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">
            We offer a range of social media management services, including content creation, scheduling, and posting, as well as monitoring and analyzing social media metrics to ensure maximum engagement and growth.
          </p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">₹ 5310*</small>
          <small style="float:right;font-style: italic;" class="text-muted">1 month</small>
        </div>
      </div>
    </div>
    <div class="col content ele4" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon13.png" width="13%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h6 style="font-weight:bolder;">Google My Business Listing Management</h6></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">Assistance in listing on Google My Business page by giving it a professional touch. It also includes content that will improve the visibility of the business on Google and on Google Maps making your business easy to locate.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">₹ 3186*</small>
          <small style="float:right;font-style: italic;" class="text-muted">View Details</small>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center">
    <a href="javascript:;" class="load-more">Load more</a>
    <a href="javascript:;" class="load-less" style="display:none">Hide</a>
  </div>
</div>
<div style="background-color:#f2f2f2;padding:60px">
  <h4 style="font-weight:bolder;text-align:center;">FAQ's</h4><br/>
  <div class="row justify-content-evenly">
      <div class="col-sm-4" style="border:1px solid #76287C;padding:20px;" data-bs-toggle="collapse" href="#collapseExample"><li class="faq">What is “Feasibility” and “Viability” of a business?</li>
        <div class="collapse" id="collapseExample"><br/><b>“Feasibility”</b> is examining the possibility of manufacturing the product or delivering the service. 
        <br/><b>“Viability”</b> is examining the sustainability of the proposed business activity in the coming years.</div>
      </div>
      <div class="col-sm-4" style="border:1px solid #76287C;padding:20px;cursor:pointer" data-bs-toggle="collapse" data-bs-target="#collapseExample1"><li class="faq">How long does it take deAsra to create a Business Plan?</li>
        <div class="collapse" id="collapseExample1"><br/>It takes approximately 4 working days once all documents along with the required information is received. </div>
      </div>
  </div><br/>
  <div class="row justify-content-evenly">
      <div class="col-sm-4" style="border:1px solid #76287C;padding:20px;cursor:pointer" data-bs-toggle="collapse" href="#collapseExample2"><li class="faq">Why should I create a Business Plan and Project Report?</li>
        <div class="collapse" id="collapseExample2"><br/>Writing a business plan is an opportunity to carefully think through every step of starting your business and helps in a number of ways including:
          <ul>
            <li>Validating your assumptions and determining the need for your product or service in the market.</li>
            <li>Giving a structure to your idea and saving time and resources in the long run.</li>
            <li>Making projections that give you a good understanding of how your business will operate in the future.</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4" style="border:1px solid #76287C;padding:20px;cursor:pointer" data-bs-toggle="collapse" href="#collapseExample3"><li class="faq">When can a Business Plan be prepared?</li>
        <div class="collapse" id="collapseExample3"><br/><br/>Business Plan can be prepared when you are planning to start a business, so as to understand the ‘Viability’ and ‘Feasibility’ of the proposed business idea. Also, for existing businesses  when the entrepreneur is planning to expand the business or while introducing a new line of service or product or while opening a new branch etc.</div>
      </div>
  </div>
</div>
<div style="text-align:center;padding:10px;background-color:hite"></div>
</body>
<script>
  $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
               items:2,
               nav: false
             },
             1000:{
               items:3,
               nav: false
             }
           }
         });

  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("filterservice");
  var btns = btnContainer.getElementsByClassName("slist");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("actives");
      current[0].className = current[0].className.replace(" actives", "");
      this.className += " actives";
    });
  }

  jQuery(function($) {
    var $els = $('.contentEle .content').hide(),
      $curr;

    $('.slist').on('click', function() {
      var $this = $(this);
      $this.addClass('actives');
      $curr = $els.filter('.' + this.id).hide();
      $curr.slice(0, 6).show();
      $els.not($curr).hide();

      // check the number of filtered rows
      if ($curr.length < 5) {
        $('.load-more, .load-less').hide(); // hide the load more and load less buttons
      } else{
        $('.load-more').show();
      }

    }).filter('.actives').click();

    $('.load-more').click(function() {
      $curr.filter(':hidden').slice(0, 3).show();
     
      // check if there are any hidden elements left to show
      if ($curr.filter(':hidden').length == 0) {
        $('.load-more').hide(); // hide the load more button
        $('.load-less').show();
      }
    });

    $('.load-less').click(function() {
      $curr.filter(':visible').slice(-2).hide();
      // check if there are any hidden elements left to show
      if ($curr.filter(':visible').length == 6) {
        $('.load-less').hide(); // hide the load more button
        $('.load-more').show();
      }
    });
  });

  function displayFaq(){
    document.getElementById('faq1').style.display = 'block'
  }

</script>
<?php
include('Footer/footer.php')
?>