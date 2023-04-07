<?php
include('../../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    *{
        font-family: 'Montserrat', sans-serif;
    }
    .textFont{
        color: white;
        font-weight: bolder;
    }
    .go {
	width: 220px;
	height: 40px;
	cursor: pointer;
	display: flex;
	align-items: center;
	border: 2px solid #76287C;
	border-radius: 5px;
	box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
	background: none;
}
.goNext {
	width: 100px;
  height: 40px;
	cursor: pointer;
	display: flex;
	align-items: center;
	border: 2px solid #76287C;
	border-radius: 5px;
	box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
	background: none;
}


.go .text, .goNext .text {
	transform: translateX(5px);
	color: black;
	font-weight: bold;
}

.goNext .icon{
  position: absolute;
	border:none;
	transform: translateX(55px);
	height: 36px;
	width: 35px;
	display: flex;
	align-items: center;
	justify-content: center;
  background-color: yellow;
}

.go .icon{
	position: absolute;
	border:none;
	transform: translateX(175px);
	height: 36px;
	width: 35px;
	display: flex;
	align-items: center;
	justify-content: center;
  background-color: yellow;
}

.go svg, .goNext svg {
	width: 15px;
	fill: #76287C;
  font-weight: bold;
}

.go:hover svg, .goNext:hover svg {
	fill: white;
}

.goNext:hover .icon{
    width: 35px;
    border-left: none;
    background-color:purple;
    transform: translateX(55px);
}

.go:hover .icon{
    width: 35px;
    border-left: none;
    background-color:purple;
    transform: translateX(175px);
}
.circle {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        padding: 20px;
        background: #fff;
        color: #000;
        text-align: center;
        font: 32px Arial, sans-serif;
      }

      .faq{
        color:#76287C;font-weight:bolder;
      }  
</style>

<div style="padding:40px 0px 20px 100px;color:#6348b5;font-weight:bolder;">
  <a onclick="history.back()" style="cursor:pointer;color:#76287C">
    <img src="<?php echo BASEURL ?>images/home.png" width="20px"/><b> Home / Services</b>
  </a><br/><br/>
  <h4>Compare Options & Apply for MSME Business Loan</h4>
</div>
<div class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6"><br/><br/>
        <div class="row">
          <div class="col-md-8 bg-light" style="padding:5px">
              <img src="<?php echo BASEURL ?>images/loan.svg" width="600px"/>
              <br/><br/>
              <p style="font-size:18px;color:#6348b5;font-weight:bolder;width:380px">Discover options to fund your business</p>
              <div class="row">
                  <div id="restart" class="col-4 p-2" style="cursor:pointer;color:white;background-color:#6348b5;margin-left:12px;" onclick="showDiv()">Restart Loan</div>
                  <div id="start" style="cursor:pointer;" class="col-6 p-2 border-bottom border-secondary" onclick="showDiv2()">Start or Grow</div>
              </div>
              <div id="re" class="shadow-sm" style="display:block;padding:20px;background-color:white;width:500px;border:1px solid #e8ebe9">
                  Have you been running a business for more than a year?
                  <ul style="list-style: none;">
                      <li>✓ Interest rate ranging from 16% to 20%</li>
                      <li>✓ For working capital needs, up to Rs 1 Lakh</li>
                  </ul>
              </div>
              <div id="st" class="shadow-sm" style="display:none;padding: 20px;background-color:white;width:500px;border:1px solid #e8ebe9">
                  New business? Or, looking for funds to grow?
                  <ul style="list-style: none;">
                      <li>✓ Get a fund-ready proposal for banks.</li>
                      <li>✓ Consultation with banking experts for growth funds.</li>
                  </ul>
              </div><br/>
              <div class="" style="color:white;background-color:#6348b5;width:570px">
                  <h6 style="padding: 10px;">Want to help small and local businesses?</h6>
              </div><br/>
              <div style="width:550px;height:180px;">
                <img class="rounded float-start" src="<?php echo BASEURL ?>images/helping.svg" width="200px"/><br/>
                <h6 style="line-height:1.4">These are trying times for small and local business owners.
                <br/>If you wish to lend money and support, please drop a mail at wecare@deAsra.co.in</h6>
              </div><br/>
              <h6 style="width:500px;font-style:italic">*deAsra Foundation does not provide any loan. We only assist eligible borrowers and 
                RBI-approved lending partners (NBFCs, banks, crowdfunding P2P NBFCs) to connect with one another.</h6>
          </div>
        </div>
      </div>
      <div class="col-md-6" style="background-color:white;padding:20px;border:2px solid #6348b5;border-radius:10px">
        <h6 style="font-weight:bolder;color:black;text-align:center">CHECK YOUR ELIGIBILITY</h6>
        <hr style="background-color:#6348b5;height: 3px;"/>
        <h6 style="font-weight:bolder;color:#6348b5">ABOUT YOURSELF</h6>
        <hr/>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="First Name*" aria-label="First name" style="border:1px solid #6348b5">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Last Name*" aria-label="Last name" style="border:1px solid #6348b5">
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <input type="text" class="form-control" placeholder="Email" aria-label="First name" style="border:1px solid #6348b5">
          </div>
        </div><br/>
        <div class="row">
          <div class="col-2">
            <input type="text" class="form-control" placeholder="+91" aria-label="First name" style="border:1px solid #6348b5">
          </div>
          <div class="col-10">
            <input type="text" class="form-control" placeholder="Whatsapp / Mobile No. *" aria-label="First name" style="border:1px solid #6348b5">
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <input type="text" class="form-control" placeholder="Date of Birth" aria-label="First name" style="border:1px solid #6348b5">
          </div>
        </div><br/>
        <div class="row mb-3">
          <div class="container">
            <div class="row">
              <div class="col">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
              </div>
              <div class="col">
              </div>
              <div class="col">
                <div class="row">
                  <div class="col-5">
                    <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btn-check-outlined">Male</label>
                  </div>
                  <div class="col-2">
                    <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btn-check-outlined">Female</label>
                  </div>
                </div>
              </div>
            </div>
            <hr/>
          </div>
        </div>
        <h6 style="font-weight:bolder;color:#6348b5">ABOUT YOUR BUSINESS</h6>
        <hr/>
        <div class="row">
          <div class="col-12">
            <input type="text" class="form-control" placeholder="Pincode - Business Location *" aria-label="First name" style="border:1px solid #6348b5">
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <textarea class="form-control rounded-0" placeholder="Address" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <input type="text" class="form-control" placeholder="Business Name" style="border:1px solid #6348b5">
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <select class="form-select" id="inlineFormSelectPref" style="border:1px solid #6348b5">
              <option selected> -- Choose the Business Sector * --</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <select class="form-select" id="inlineFormSelectPref" style="border:1px solid #6348b5">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div><br/>
        <div class="row mb-3">
          <div class="container">
            <div class="row">
              <div class="col-5">
              Do you have a business address proof for the current location?
              </div>
              <div class="col-4">
              </div>
              <div class="col">
                <div class="row">
                  <div class="col-5">
                    <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btn-check-outlined">Yes</label>
                  </div>
                  <div class="col-2">
                    <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btn-check-outlined">No</label>
                  </div>
                </div>
              </div>
            </div>
            <small class="text-muted">(For e.g: Light bill, MTNL/BSNL bill, GST, Shop Act Certificate, Rent Agreement or Property Tax receipt etc.)</small>
          </div>
        </div><hr/>
        <div style="display: flex;
        justify-content: right;">
          <button class="goNext">
            <span class='text'>Next</span>
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
</div>
<div class="p-1" style="background-color:#fe7f10"></div>
<div style="text-align:center;padding:80px;">
  <h4><b>5 Simple Steps To Select The Best Option</b></h4><br/><br/>
  <div class="container">
    <div class="row">
      <div class="col-sm border-start border-end border-3">
          <div class="d-flex justify-content-center"><div class="circle" style="border: 3px solid yellow;">1</div></div><br/>
          <h6>Share business information</h6>
      </div>
      <div class="col-sm border-end border-3">
          <div class="d-flex justify-content-center "><div class="circle" style="border: 3px solid orange">2</div></div><br/>
          <h6>Discover & compare options</h6>
      </div>
      <div class="col-sm border-end border-3">
          <div class="d-flex justify-content-center"><div class="circle" style="border: 3px solid #fc0097">3</div></div><br/>
          <h6>Decide what works best</h6>
      </div>
      <div class="col-sm border-end border-3">
          <div class="d-flex justify-content-center"><div class="circle" style="border: 3px solid  #006dfc">4</div></div><br/>
          <h6>Select the best match</h6>
      </div>
      <div class="col-sm border-end border-3">
          <div class="d-flex justify-content-center"><div class="circle" style="border: 3px solid darkblue">5</div></div><br/>
          <h6>Start: The Process</h6>
      </div>
    </div>
  </div>
</div>
<div class="p-1" style="background-color:#fe7f10"></div>
<div style="text-align:center;background-color:#fff8f2;padding:10px">
  <img src="<?php echo BASEURL ?>images/faq.svg" width="70px"/>
  <span>Got questions about MSME Loan?We have the answers</span>
</div>
<div style="text-align:center;background-color:#6348b5;">
<h6 class="textFont p-3" style="margin:0px">Features and Benefits</h6>
</div>
<div class="container" style="text-align:center;">
    <div class="row">
        <div class="col-sm p-3" style="background-color:#FFE7D2">
            <img src="<?php echo BASEURL ?>images/1.svg" width="70px"/>
            <h6 style="margin-top:20px;color:#6348b5;font-weight:bolder">PURPOSE</h6><br/>
            <p>To start or, grow a business, or to meet working capital needs.</p>
        </div>
        <div class="col-sm p-3" style="background-color:#fff8f2">
            <img src="<?php echo BASEURL ?>images/2.svg" width="70px"/>
            <h6 style="margin-top:20px;color:#6348b5;font-weight:bolder">ELIGIBLE ENTITIES</h6><br/>
            <p>Individuals/Proprietors, Partnership Firms, LLP and Private Limited Companies.<p>
        </div>
        <div class="col-sm p-3" style="background-color:#FFE7D2">
            <img src="<?php echo BASEURL ?>images/3.svg" width="70px"/>
            <h6 style="margin-top:20px;color:#6348b5;font-weight:bolder">SECURITY</h6><br/>
            <p>Scheme-dependent with collateral or collateral free, with or without a co-borrower / guarantor.<p>
        </div>
        <div class="col-sm p-3" style="background-color:#fff8f2">
            <img src="<?php echo BASEURL ?>images/4.svg" width="70px"/>
            <h6 style="margin-top:20px;color:#6348b5;font-weight:bolder">REPAYMENT METHOD</h6><br/>
            <p>Scheme dependent maximum repayment period is up to 5 years</p>
        </div>
        <div class="col-sm p-3" style="background-color:#FFE7D2">
            <img src="<?php echo BASEURL ?>images/5.svg" width="70px"/>
            <h6 style="margin-top:20px;color:#6348b5;font-weight:bolder">REPAYMENT SCHEDULE</h6><br/>
            <p>Equated Weekly Installments or Equated Monthly Installments.</p>
        </div>
    </div>
</div><br/>
<div style="display: flex;
  justify-content: center;
  align-items: center;">
      <button class="go noselect" onclick="toTop()">
        <span class='text'>Request this Service</span>
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
<br/><br/>
<div class="p-1" style="background-color:#fe7f10"></div>
<div style="padding:60px">
  <h4 style="font-weight:bolder;text-align:center;">FAQ's</h4><br/>
  <div class="row justify-content-evenly">
      <div class="col-4 text-dark" style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"><li class="faq" data-bs-toggle="collapse" href="#collapseExample">How is interest calculated under different loan schemes?</li>
        <div class="collapse" id="collapseExample"><br/>Under different loan schemes, interest is calculated either on the basis of reducing balance or fixed balance.</div>
      </div>
      <div class="col-4 text-dark" style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"><li class="faq" data-bs-toggle="collapse" data-bs-target="#collapseExample1">How much moratorium period is made available by NBFCs/Banks?</li>
        <div class="collapse" id="collapseExample1"><br/>Usually, NBFCs/Banks offer the initial 1 to 3 months as the moratorium period after disbursing the loan amount.</div>
      </div>
  </div><br/>
  <div class="row justify-content-evenly">
      <div class="col-4" style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"><li class="faq" data-bs-toggle="collapse" href="#collapseExample2">Are there any delayed/ penalty/ prepayment charges for loans provided by the NBFCs/banks?</li>
        <div class="collapse" id="collapseExample2"><br/>It depends on the NBFCs/banks providing the loan. Default EMI/EWI charges may be applicable.</div>
      </div>
      <div class="col-4" style="border:1px solid #fe7f10;padding:20px"><li class="faq" data-bs-toggle="collapse" href="#collapseExample3">What is the payment mode for Equated Weekly Instalments (EWIs) or EMIs?</li>
        <div class="collapse" id="collapseExample3"><br/><br/>The payment of EWIs/EMIs should be made through UPI, NEFT/RTGS or NACH.</div>
      </div>
  </div><br/>
  <div class="row justify-content-evenly">
      <div class="col-4" style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"><li class="faq"data-bs-toggle="collapse" href="#collapseExample4">Is the CIBIL score criteria important? What happens if the CIBIL score is low?</li>
        <div class="collapse" id="collapseExample4"><br/>Yes, your CIBIL score is an important factor. NBFCs & banks check the borrower’s credit history and assess the business based on factors such as past loan track record, repayment history, etc. They then come up with individual assessment results.</div>
      </div>
      <div class="col-4" style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"><li class="faq" data-bs-toggle="collapse" href="#collapseExample5">Are business entities (other than proprietary concerns such as partnership firms and Private Limited Companies) eligible for this emergency loan scheme?</li>
        <div class="collapse" id="collapseExample5"><br/><br/>Yes, a business that has entity-specific documentation in place, such as partnership deed, MOA, AOA are eligible for this loan.</div>
      </div>
  </div>
</div>
<script>
  function showDiv(){
      document.getElementById('st').style.display = 'none'
      document.getElementById('re').style.display = 'block'
      document.getElementById('start').style.backgroundColor = ''
      document.getElementById('start').style.color = 'black'
      document.getElementById('start').style.border = '0 0 1px 0 solid black'
      document.getElementById('restart').style.backgroundColor = '#6348b5'
      document.getElementById('restart').style.border = 'none'
      document.getElementById('restart').style.color = 'white'
  }
  function showDiv2(){
      document.getElementById('restart').style.backgroundColor = ''
      document.getElementById('restart').style.color = 'black'
      document.getElementById('restart').style.borderBottom = '1px solid black'
      document.getElementById('start').style.backgroundColor = '#6348b5'
      document.getElementById('start').style.border = 'none'
      document.getElementById('start').style.color = 'white'
      document.getElementById('re').style.display = 'none'
      document.getElementById('st').style.display = 'block'
  }

  var rangeSlider = document.getElementById("rs-range-line");
var rangeBullet = document.getElementById("rs-bullet");

rangeSlider.addEventListener("input", showSliderValue, false);

function showSliderValue() {
  rangeBullet.innerHTML = rangeSlider.value;
  var bulletPosition = (rangeSlider.value /rangeSlider.max);
  rangeBullet.style.left = (bulletPosition * 578) + "px";
}

function toTop(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  }

</script>
<?php
include(ROOT_FOLDER.'Footer/footer.php');
?>