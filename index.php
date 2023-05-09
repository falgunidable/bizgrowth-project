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
<style>
  #goBtn{
    background-color:#5A41A0
  }
  #goBtn:hover {
    background-color:#372863
  }
</style>
<body>
  <div style="background-color:#7058B9">
    <div class="p-5">
      <div class="row gx-5 p-4">
        <div class="topbar col-sm-4 p-5 text-white" style="background-color:#7A60C7;border-radius:15px">
          <h2><b>Find the best solution to support your business</b></h2><br/><br/>
          <div class="dropdown mb-3 p-1">
            <button id="geography" class="rounded bg-white text-dark p-2 w-100 border-0" disabled>
              Maharashtra
            </button>
          </div>
          <div class="dropdown mb-3 p-1">
            <select id="sector" class="rounded bg-white p-2 dropdown-toggle w-100 border-0 custom-select-arrow">
              <option selected disabled>Select Sector</option>
              <option value="all">All</option>
              <option value="food">Food</option>
              <option value="other">Other Than Food</option>
            </select>
          </div>
          <div class="dropdown mb-3 p-1">
            <select id="busiStage" class="rounded bg-white p-2 dropdown-toggle w-100 border-0">
              <option selected disabled>Select Business Stage</option>
              <option value="start">Start</option>
              <option value="manage">Manage</option>
              <option value="grow">Grow</option>
            </select>
          </div>
          <div class="dropdown mb-3 p-1">
            <select id="category" class="rounded bg-white p-2 dropdown-toggle w-100 border-0">
              <option selected disabled>Select Category</option>
              <option value="lc">Legal Compliances</option>
              <option value="pc">Proposal Creating & Funding</option>
              <option value="bp">Business Performance Improvement</option>
              <option value="ps">Professional Services</option>
              <option value="market">Marketing</option>
            </select>
          </div>
          <button id="goBtn" class="col-md-12 btn p-1 text-white"><h4><b>GO</b></h4></button>
        </div>
        <div class="col-sm-8">
          <div>
            <img src="<?php echo BASEURL ?>images/car1.jpg" style="max-width:100%; height:auto;border-radius:15px"/>
          </div>
        </div>
      </div>
    </div>
  </div>

<div id="popularservices" style="background-color:#FE7F10;padding:60px">
  <h3 class="text-white" style="font-weight: bolder;">Popular Services</h3><br/>
   <div class="carousel owl-carousel">
      <div class="col">
        <div class="card h-50 shadow" style="border-radius:30px">
          <div class="card-body">
            <img class="mx-auto" src="<?php echo BASEURL ?>images/icon1.png" style="max-width:100px; height:auto;"/><br/>
            <h5 class="card-title p-2"><b>Compare & Apply for MSME Business Loan</b></h5>
            <p class="card-text p-2" style="font-size:14px">
              Our goal is to simplify the process for you by comparing different loan options available in the market and helping you make an informed decision.
            </p>
            <div class="p-2">
              <h5 style="float:left"><b><span style="color:#fe7f10">₹ 600</span> - Get in 3 days</b></h5>
              <a href="services/msme_loan/msme_loan" style="float:right" class="p-2 hover-btn btn btn-primary">KNOW MORE</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-50 shadow" style="border-radius:30px">
            <div class="card-body">
              <img class="mx-auto" src="<?php echo BASEURL ?>images/icon2.png" style="max-width:100px; height:auto;"/><br/>
              <h5 class="card-title p-2"><b>GST Registration</b></h5>
              <p class="card-text p-2" style="font-size:14px">
              Our team of experts will provide consultation services, with guiding them through the entire process, from preparing the necessary documents to obtaining the GST Registration certificate.
              </p>
              <div class="p-2">
                <h5 style="float:left" class="p-2"><b><span style="color:#fe7f10">₹ 590</span> - Get in 30 days</b></h5>
                <a href="services/gst/gst_register" class="p-2 hover-btn btn btn-primary" style="float:right">KNOW MORE</a>
              </div>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-50 shadow" style="border-radius:30px">
            <div class="card-body">
              <img class="mx-auto" src="<?php echo BASEURL ?>images/icon3.png" style="max-width:100px; height:auto;"/><br/>
              <h5 class="card-title p-2"><b>Udyam Registration</b></h5>
              <p class="card-text p-2" style="font-size:14px">
              Our experts provide Udyam registration services to micro, small, and medium enterprises (MSMEs) to ensure compliance with the new MSME classification and registration process.
              </p>
              <div class="p-2">
                <h5 style="float:left" class="p-2"><b><span style="color:#fe7f10">₹ 750</span> - Get in 7 - 8 days</b></h5>
                <a href="services/udyam/udyam_register" class="p-2 hover-btn btn btn-primary" style="float:right">KNOW MORE</a>
              </div>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-50 shadow" style="border-radius:30px">
            <div class="card-body">
              <img class="mx-auto" src="<?php echo BASEURL ?>images/icon4.png" style="max-width:100px; height:auto;"/><br/>
              <h5 class="card-title p-2"><b>Social Media Management</b></h5>
              <p class="card-text p-2" style="font-size:14px">
              We offer a range of social media management services, including content creation, scheduling, and posting, as well as monitoring and analyzing social media metrics to ensure engagement and growth. 
              </p>
              <div class="p-2">
                <h5 style="float:left" class="p-2"><b><span style="color:#fe7f10">₹ 5310</span> - 1 month</b></h5>
                <a href="services/socialmedia/socialmedia" class="p-2 hover-btn btn btn-primary" style="float:right">KNOW MORE</a>
              </div>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-50 shadow" style="border-radius:30px">
          <div class="card-body">
            <img class="mx-auto" src="<?php echo BASEURL ?>images/icon15.png" style="max-width:100px; height:auto;"/><br/>
            <h5 class="card-title p-2"><b>Online Starter Pack</b></h5>
            <p class="card-text p-2" style="font-size:14px">
            We specialize in creating and managing online presence for businesses of all sizes. 
            We work to develop a comprehensive online strategy that aligns with your business goals and target audience.
            </p>
            <div class="p-2">
              <h5 style="float:left" class="p-2"><b><span style="color:#fe7f10">₹ 1652</span> - Get in 18 days</b></h5>
              <a href="services/socialmedia/onlinestarter" class="p-2 hover-btn btn btn-primary" style="float:right">KNOW MORE</a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<div id="allservices" style="padding:60px">
<div>
  <h3 style="font-weight: bolder;">All Services <span id="displaytext" style="margin-left:80px;font-size:20px"></span></h3>
</div><br/>
<div class="row" id="filterservice" style="border-bottom:3px solid #FE7F10;">
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
  <div class="col-md-3 slist" id="ele5">
    <h6 class="p-2" style="font-weight:bolder;">Consult an Expert</h6>
  </div>
</div>
<div id="listall" class="contentEle row row-cols-1 row-cols-md-4 g-4">
  <div id="all-start-lc" class="col content ele1" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon5.png" style="max-width:120px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Shop Act Intimation</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">Shop Act Intimation is a mandatory Labor Law compliance for all businesses located within municipal limits of Maharashtra. It is a legal compliance requirement for businesses in Maharashtra.</p>
        <div class="p-3">
            <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 300</h5>
            <h6 style="float:right;font-weight:bolder">Get in 2 days</h6><br/>
        </div>
        <a href="services/shopact/shopact" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div>
  <div id="manage-lc" class="col content ele1" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon3.png" style="max-width:120px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Udyam Registration</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">Our experts provide Udyam registration services to micro, small, and medium enterprises (MSMEs) to ensure compliance with the new MSME classification and registration process.</p>
        <div class="p-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 750</h5>
          <h6 style="float:right;font-weight:bolder">Get in 7 to 8 days</h6><br/>
        </div>
        <a href="services/udyam/udyam_register" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div>
  <div id="all-start-lc" class="col content ele1" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon6.png" style="max-width:120px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Rent Agreement Registration</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">A quick and hassle-free service which helps you get your online rent agreement registration.</p><br/>
        <div class="p-3 mt-3">
            <h5 style="font-weight:bolder;float:left;color:#fe7f10">-</h5>
            <h6 style="float:right;font-weight:bolder">Condition Based</h6><br/>
        </div>
        <a href="services/rent/rent_agree" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div>
  <div id="all-start-lc" class="col content ele1" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon2.png" style="max-width:120px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>GST Registration</b></h5>
        <div class="card-body">
          <p class="card-text" style="font-size:14px">Our team of experts will provide consultation services, with guidance through the entire process, from preparing the documents to obtaining the Registration certificate.</p>
          <div class="p-3">
            <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 590</h5>
            <h6 style="float:right;font-weight:bolder">Get in 30 days</h6><br/>
          </div>  
          <a href="services/gst/gst_register" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
        </div>
    </div>
  </div>
  <div id="all-bp" class="col content ele2" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon8.png" style="max-width:100px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>ITR Filing</b></h5>
      <div class="card-body" style="margin-top: 20px;">
        <p class="card-text" style="font-size:14px">A hassle-free service which will help you with filing all the monthly, quarterly and yearly GST Returns depending on your business. Get your business GST compliant.</p>
        <div class="p-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 899</h5>
          <h6 style="float:right;font-weight:bolder">Condition Based</h6><br/>
        </div> 
        <a href="services/itrfilling/" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div>
  <div id="other-lc" class="col content ele5" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/consulting.png" style="max-width:120px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Consult an Expert</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">Where like minds meet like minds.</p>
        <div class="p-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">-</h5>
          <h6 style="float:right;font-weight:bolder"></h6><br/>
        </div> 
        <a href="consultant/consultantpage" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div>
  <div id="start-lc" class="col content ele1" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon7.png" style="max-width:100px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Copyright Registration</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">Copyright is the exclusive and assignable legal right given to the originator for a fixed number of years to print, publish, perform, film or record literary, artistic or musical material. Copyright provides legal evidence of ownership.</p><br/>
        <div class="p-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 3999</h5>
          <h6 style="float:right;font-weight:bolder">Get in 3 days</h6><br/>
        </div> 
        <a href="services/copyright/copyright" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div>
  <div id="start-lc" class="col content ele1" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon12.png" style="max-width:100px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Trademark Application Filing</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">A trademark is a recognizable sign, design, or expression which identifies products or services of a particular activity. It is in the form of a logo, image, symbol, word(s), letter(s) or colour(s). It is a recognition of the company’s ownership of the brand.</p><br/>
        <div class="p-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 1999</h5>
          <h6 style="float:right;font-weight:bolder">Get in 2 days</h6><br/>
        </div> 
        <a href="services/trademark/" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div> 
  <div id="all-start-lc" class="col content ele1" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon11.png" style="max-width:100px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>FSSAI Registration</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">FSSAI is a mandatory registration/ licence for business entities that engage in food and related activities. Food Safety and Standards Authority of India (FSSAI) is an autonomous body established under the Ministry of Health and Family Welfare, Government of India.</p>
        <div class="p-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 800 - ₹ 1100</h5>
          <h6 style="float:right;font-weight:bolder">Get in 45 days</h6><br/>
        </div> 
        <a href="services/fssai/" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div>
  <div id="all-bp" class="col content ele3" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon9.png" style="max-width:100px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Cash Flow Management</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">Cash flow management for business is the process of monitoring, analysing, and optimizing the net amount of cash receipts minus the cash expenses.</p>
        <div class="p-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 236</h5>
          <h6 style="float:right;font-weight:bolder">Condition Based</h6><br/>
        </div> 
        <a href="services/cashflow/" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div>
  <!-- <div id="other-lc" class="col content ele3" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon1.png" style="max-width:100px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Current Business Evaluation</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">For running a business successfully and ensuring growth in your business you need to assess the position of your business.</p>
        <div class="p-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 236</h5>
          <h6 style="float:right;font-weight:bolder">-</h6><br/>
        </div> 
        <a href="#" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div> -->
  <div id="manage-bp" class="col content ele4" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon4.png" style="max-width:120px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Online Starter Pack</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">Creating a presence on different social media platforms gives your business the ability to reach a larger audience.</p><br/><br/>
        <div class="p-3 mt-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 1652</h5>
          <h6 style="float:right;font-weight:bolder">Get in 18 days</h6><br/>
        </div> 
        <a href="#" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
      </div>
    </div>
  </div>
  <div id="other-lc" class="col content ele4" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon4.png" style="max-width:120px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Social Media Management</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">
          We offer a range of social media management services, including content creation, scheduling, and posting, as well as monitoring and analyzing social media metrics to ensure maximum engagement and growth.
        <div class="p-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 5310</h5>
          <h6 style="float:right;font-weight:bolder">1 month</h6><br/>
        </div> 
        <a href="#" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
        </p>
      </div>
    </div>
  </div>
  <div id="all-bp" class="col content ele4" style="margin-top:50px">
    <div class="card h-100 shadow">
      <img class="mx-auto" src="<?php echo BASEURL ?>images/icon13.png" style="max-width:120px;padding: 20px 0px 0px 0px;height:auto;"/><br/>
      <h5 class="p-3" style="font-weight:bolder"><b>Google My Business</b></h5>
      <div class="card-body">
        <p class="card-text" style="font-size:14px">Assistance in listing on Google My Business page by giving it a professional touch. It also includes content that will improve the visibility of the business on Google and on Google Maps making your business easy to locate.</p>
        <div class="p-3">
          <h5 style="font-weight:bolder;float:left;color:#fe7f10">₹ 3186</h5>
          <h6 style="float:right;font-weight:bolder">-</h6><br/>
        </div> 
        <a href="services/socialmedia/googlemybusiness" class="p-2 hover-btn btn btn-primary" style="width:100%">KNOW MORE</a>
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

const goButton = document.getElementById("goBtn");
const services = document.querySelectorAll(".content");
const displaydiv = document.getElementById("displaytext");

goButton.addEventListener("click", () => {
  document.getElementById('filterservice').style.display = 'none';
  const service1Selection = document.getElementById("sector").value;
  const service2Selection = document.getElementById("busiStage").value;
  const service3Selection = document.getElementById("category").value;

  services.forEach(service => {
    if (service.id === `${service1Selection}-${service2Selection}-${service3Selection}`) {
      displaydiv.scrollIntoView({behavior: "smooth"});
      service.style.display = "block";
    } else {
      service.style.display = "none";
    }
  });

  if(service1Selection && service2Selection  && service3Selection){
    displaydiv.innerHTML = `${service1Selection}, ${service2Selection}, ${service3Selection}`;
  }else if(service1Selection && service2Selection){
    displaydiv.innerHTML = `${service1Selection}, ${service2Selection}`;
  }else if(service1Selection){
    displaydiv.innerHTML = `${service1Selection}`;
  }else if(service2Selection){
    displaydiv.innerHTML = `${service2Selection}`;
  }else{
    displaydiv.innerHTML ='';
  }
});


  $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 4000,
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
      $curr.slice(0, 4).show();
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
      $curr.filter(':visible').slice(-1).hide();
      // check if there are any hidden elements left to show
      if ($curr.filter(':visible').length == 4) {
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