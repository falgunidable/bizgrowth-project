<?php
include('Navbar/nav.php');
?>
<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->

<link rel="stylesheet" href="./styles/style.css"/>
<title>Bizgrowthh</title>
<style>
  #listall .col{ 
    display:none;
  }
  #loadMore {
    margin-top:50px;
    font-weight: bold;
    text-align:center;
      color:black;
      cursor:pointer;
      font-size: 18px;
  }
  #loadMore:hover {
      color:#fe7f10;
  }
  #showLess {
    margin-top:50px;
    font-weight: bold;
    text-align:center;
      color:black;
      cursor:pointer;
      font-size: 18px;
      display:none;
  }
  #showLess:hover {
      color:#fe7f10;
  }
</style>
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
            <button id="geography" class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Select Geography
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Maharashtra</a></li>
              <li><a class="dropdown-item" href="#">Other Than Maharashtra</a></li>
            </ul>
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
<h4 style="font-weight: bolder;">Popular Services</h4><br/><br/><br/>
  <div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <a href="services/msme_loan/msme_loan">
          <div class="card h-100">
            <div class="blockquote-custom-icon shadow">
                  <img src="./images/icon1.png" width="40%"/>
            </div>
            <div class="card-body" style="margin-top: 70px;">
              <h5 class="card-title">Compare Options & Apply for MSME Business Loan</h5><br/>
              <p class="card-text">An unsecured loan for micro-entreprenuers and small busonesses, which will be useful to meet thw working capital needs of the business only.</p>
            </div>
            <div class="card-footer">
            <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">$600</small>
              <small style="float:right" class="text-muted">Get in 3 days</small>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="services/gst/gst_register">
          <div class="card h-100">
              <div class="blockquote-custom-icon shadow">
                    <img src="./images/icon2.png" width="50%"/>
              </div>
              <div class="card-body" style="margin-top: 70px;">
                <h5 class="card-title">GST Registration</h5><br/>
                <p class="card-text">GST Registration enables your business to charge and/orf collect GST (Goods and Services Tax).The Goods and Services Tax (GST) is a value-added tax leveled on most goods and services for domestic use.</p>
              </div>
              <div class="card-footer">
              <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">$590</small>  
              <small style="float:right" class="text-muted">Get in 30 days</small>
              </div>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="services/udyam/udyam_register">
          <div class="card h-100">
              <div class="blockquote-custom-icon shadow">
                    <img src="./images/icon3.png" width="50%"/>
              </div>
              <div class="card-body" style="margin-top: 70px;">
                <h5 class="card-title">Udya Registration</h5><br/>
                <p class="card-text">Udyam Registration is a new and simplified process that helps your business get the identity of an MSME. It is mandatory only if you want to avail the Government schemes launched specially for Micro, Small and Medium Enterprises.</p>
              </div>
              <div class="card-footer">
              <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">$750</small>
                <small style="float:right"class="text-muted">Get in 7 to 8 days</small>
              </div>
          </div>
        </a>
      </div>
      <div class="col" style="margin-top:70px">
        <a href="services/socialmedia/socialmedia">
          <div class="card h-100">
              <div class="blockquote-custom-icon shadow">
                    <img src="./images/icon4.png" width="50%"/>
              </div>
              <div class="card-body" style="margin-top: 70px;">
                <h5 class="card-title">Social Media Management</h5><br/>
                <p class="card-text">In this digital era, a strong Social Media presence is just what your business needs! Social Media Marketing is a rapidly growing practice which includes marketing, branding and improving sales via different channels. This service includes the management of Social Media pages on Facebook & Instagram. It includes activities like content creation, promotion, etc.</p>
              </div>
              <div class="card-footer">
              <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">$5310</small>
                <small style="float:right"class="text-muted">1 month</small>
              </div>
          </div>
        </a>
      </div>
      <div class="col" style="margin-top:70px">
        <div class="card h-100">
          <div class="blockquote-custom-icon shadow">
                <img src="./images/icon5.png" width="50%"/>
          </div>
          <div class="card-body" style="margin-top: 70px;">
            <h5 class="card-title">Online Starter Pack</h5><br/>
            <p class="card-text">Creating a presence on different social media platforms gives your business the ability to reach a larger audience.</p>
          </div>
          <div class="card-footer">
          <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">$1652</small>
            <small style="float:right"class="text-muted">Get in 18 days</small>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<div id="allservices" style="padding:60px">
  <h4 style="font-weight: bolder;">All Services</h4><br/>
  <div class="row">
    <div class="col">
      <h6 style="font-weight:bolder;">Legal Compliances</h6>
    </div>
    <div class="col">
      <h6 style="font-weight:bolder;">Proposal Creation & Funding</h6>
    </div>
    <div class="col">
      <h6 style="font-weight:bolder;">Business Performance Improvement</h6>
    </div>
    <div class="col">
      <h6 style="font-weight:bolder;">Professional Services</h6>
    </div>
    <div class="col">
      <h6 style="font-weight:bolder;">Marketing</h6>
    </div>
  </div><hr/>
  <div id="listall" class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon6.png" width="15%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h5 style="font-weight:bolder">Shop Act Intimation</h5></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">Shop Act Intimation is a mandatory Labor Law compliance for all businesses located within municipal limits of Maharashtra. It is a legal compliance requirement for businesses in Maharashtra.</p>
        </div>
        <div class="card-footer">
        <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">??? 300</small>
          <small style="float:right" class="text-muted">Get in 2 days</small>
        </div>
      </div>
    </div>
    <div class="col" style="margin-top:50px">
      <a href="services/udyam/udyam_register">
        <div class="card h-100 shadow">
            <div style="padding: 20px 0px 0px 20px">
                  <img src="./images/icon3.png" width="15%"/>
                  <span style="float: right;padding: 20px 20px 0px 0px;"><h5 style="font-weight:bolder">Udyam Registration</h5></span>
            </div>
            <div class="card-body" style="margin-top: 20px;">
              <p class="card-text">Udyam Registration is a new and simplified process that helps your business get the identity of an MSME. It is mandatory only if you want to avail the Government schemes launched specially for Micro, Small and Medium Enterprises.</p>
            </div>
            <div class="card-footer">
            <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">??? 750</small>  
            <small style="float:right" class="text-muted">Get in 7 to 8 days</small>
            </div>
        </div>
      </a>
    </div>
    <div class="col" style="margin-top:50px">
      <a href="services/rent/rent_agree">
        <div class="card h-100 shadow">
            <div style="padding: 20px 0px 0px 20px">
                  <img src="./images/icon1.png" width="10%"/>
                  <span style="float: right;padding: 20px 20px 0px 0px"><h5 style="font-weight:bolder">Rent Agreement Registration</h5></span>
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
    <div class="col" style="margin-top:50px">
      <a href="services/gst/gst_register">
        <div class="card h-100 shadow">
            <div style="padding: 20px 0px 0px 20px">
                  <img src="./images/icon2.png" width="15%"/>
                  <span style="float: right;padding: 20px 20px 0px 0px"><h5 style="font-weight:bolder">GST Registration</h5></span>
            </div>
            <div class="card-body" style="margin-top: 20px;">
              <p class="card-text">GST Registration enables your business to charge and/or collect GST (Goods and Services Tax). The Goods & Services Tax (GST) is a value-added tax levied on most goods and services sold for domestic use.</p>
            </div>
            <div class="card-footer">
            <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">??? 590</small>
              <small style="float:right" class="text-muted">Get in 30 days</small>
            </div>
        </div>
      </a>
    </div>
    <div class="col" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon7.png" width="13%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h5 style="font-weight:bolder">GST Returns Filing</h5></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">A hassle-free service which will help you with filing all the monthly, quarterly and yearly GST Returns depending on your business. Get your business GST compliant.</p>
        </div>
        <div class="card-footer">
          <small class="" style="color:#76287C;font-weight:bolder;font-size:18px">-</small>
          <small style="float:right;font-style: italic;" class="text-muted">View Details</small>
        </div>
      </div>
    </div>
    <div class="col" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon8.png" width="15%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h5 style="font-weight:bolder">FSSAI Licence</h5></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <small class="text-muted"><span style="color: red;">* </span>For Maharashtra only...</small>
          <p class="card-text">FSSAI is a mandatory compliance for all food businesses in India. Applicability of FSSAI Licence depends on the factors such as annual turnover, production capacity, nature of business etc.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">-</small>
          <small style="float:right;font-style: italic;" class="text-muted">View Details</small>
        </div>
      </div>
    </div>
    <div class="col" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon9.png" width="15%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h5 style="font-weight:bolder">Copyright Registration</h5></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">Copyright is the exclusive and assignable legal right given to the originator for a fixed number of years to print, publish, perform, film or record literary, artistic or musical material. Copyright provides legal evidence of ownership.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">??? 3999*</small>
          <small style="float:right;" class="text-muted">Get in 3 Days</small>
        </div>
      </div>
    </div>
    <div class="col" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon10.png" width="15%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h5 style="font-weight:bolder">Trademark Application Filing</h5></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">A trademark is a recognizable sign, design, or expression which identifies products or services of a particular activity. It is in the form of a logo, image, symbol, word(s), letter(s) or colour(s). It is a recognition of the company???s ownership of the brand.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">??? 1999*</small>
          <small style="float:right;" class="text-muted">Get in 2 Days</small>
        </div>
      </div>
    </div> 
    <div class="col" style="margin-top:50px">
      <div class="card h-100 shadow">
        <div style="padding: 20px 0px 0px 20px">
              <img src="./images/icon8.png" width="15%"/>
              <span style="float: right;padding: 20px 20px 0px 0px"><h5 style="font-weight:bolder">FSSAI Registration</h5></span>
        </div>
        <div class="card-body" style="margin-top: 20px;">
          <p class="card-text">FSSAI is a mandatory registration/ licence for business entities that engage in food and related activities. Food Safety and Standards Authority of India (FSSAI) is an autonomous body established under the Ministry of Health and Family Welfare, Government of India.</p>
        </div>
        <div class="card-footer">
          <small style="color:#76287C;font-weight:bolder;font-size:18px">??? 800* to ??? 1100*</small>
          <small style="float:right;font-style: italic;" class="text-muted">View Details</small>
        </div>
      </div>
    </div>
  </div>
  <div id="loadMore">Load more</div>
  <div id="showLess">Show less</div>
</div>
<div style="background-color:#f2f2f2;padding:60px">
  <h4 style="font-weight:bolder;text-align:center;">FAQ's</h4><br/>
  <div class="row justify-content-evenly">
      <div class="col-sm-4" style="border:1px solid #76287C;padding:20px;" data-bs-toggle="collapse" href="#collapseExample"><li class="faq">What is ???Feasibility??? and ???Viability??? of a business?</li>
        <div class="collapse" id="collapseExample"><br/><b>???Feasibility???</b> is examining the possibility of manufacturing the product or delivering the service. 
        <br/><b>???Viability???</b> is examining the sustainability of the proposed business activity in the coming years.</div>
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
        <div class="collapse" id="collapseExample3"><br/><br/>Business Plan can be prepared when you are planning to start a business, so as to understand the ???Viability??? and ???Feasibility??? of the proposed business idea. Also, for existing businesses  when the entrepreneur is planning to expand the business or while introducing a new line of service or product or while opening a new branch etc.</div>
      </div>
  </div>
</div>
<div style="text-align:center;padding:60px">
  <h4><b>Our Partners</b></h4>
  <p style="padding: 0 60px 0 60px">deAsra, in association with several organisations, has taken up the cause of promoting mass entrepreneurship.
Such organisations include funding partners, service partners, like-minded NGOs and CSRs that work
towards generating jobs through entrepreneurship, and entrepreneur clubs.</p><br/><br/>
<?php include('Carosel/bottomCarosel.php') ?>
</div>
</body>
<script>
  function displayFaq(){
  document.getElementById('faq1').style.display = 'block'
  }
  $(document).ready(function () {
    size_li = $("#listall .col").length;
    console.log(size_li);
    x=6;
    $('#listall .col:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+4 <= size_li) ? x+4 : size_li;
        $('#listall .col:lt('+x+')').show();
         $('#showLess').show();
        if(x == size_li){
            $('#loadMore').hide();
        }
    });
    $('#showLess').click(function () {
        x=(x-5<0) ? 3 : x-3;
        $('#listall .col').not(':lt('+x+')').hide();
        $('#loadMore').show();
         $('#showLess').hide();
        if(x == 3){
            $('#showLess').hide();
        }
    });
});
</script>
<?php
include('Footer/footer.php')
?>