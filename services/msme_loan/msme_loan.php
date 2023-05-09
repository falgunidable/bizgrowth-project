<?php
include('../../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
include(ROOT_FOLDER.'authentication/login.php');
?>

<script src="<?php echo BASEURL ?>js/cities.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    *{
        font-family: 'Montserrat', sans-serif;
    }
    .textFont{
        color: white;
        font-weight: bolder;
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
  
  .pack{
        border-radius:10px;
        border:1px solid #5A41A0;
        cursor:pointer;
        text-align:left
    }
    .selected-row,.selected-row:hover{
        background-color:#5A41A0 !important;
        box-shadow: 5px 5px 10px #f2f2f2;
        color:white !important;
        cursor:pointer;
    }
    .selected-proff,.selected-proff:hover{
        background-color:#5A41A0 !important;
        box-shadow: 5px 5px 10px #f2f2f2;
        color:white !important;
        cursor:pointer;
    }
    .selected-br,.selected-br:hover{
        background-color:#5A41A0 !important;
        box-shadow: 5px 5px 10px #f2f2f2;
        color:white !important;
        cursor:pointer;
    }
    .selected-transact,.selected-transact:hover{
        background-color:#5A41A0 !important;
        box-shadow: 5px 5px 10px #f2f2f2;
        color:white !important;
        cursor:pointer;
    }
    .selected-payment,.selected-payment:hover{
        background-color:#5A41A0 !important;
        box-shadow: 5px 5px 10px #f2f2f2;
        color:white !important;
        cursor:pointer;
    }
    .pack:hover{
        background-color:#372863;
        cursor:pointer;
        color:white;
        box-shadow: none;
    }
    #next{
        background-color:#5A41A0;
        margin-top:30px;
        border-radius:10px
    }
    #next:hover {
        cursor: pointer;
        background-color:#372863;
        color: white !important;
    }
    #options{
        background-color:#5A41A0;
        margin-top:30px;
        border-radius:10px
    }
    #options:hover {
        cursor: pointer;
        background-color:#372863;
        color: white !important;
    }
    .backop:hover{
      cursor: pointer;
      background-color: #372863 !important;
      color:white !important;
    }
    .list {
        line-height: 2.0;
        list-style-type: none;
        list-style-image: url("<?php echo BASEURL ?>images/checked.png");
    }
    #customnotify {
      z-index:6364899999;
    display: none;
    width:400px;
    text-align:center;
    position: fixed;
    top: 15px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 5px;
    background-color: #fff;
    color: white;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }
    #customnotify.success{
    background-color: #2bdb31;
    }
    #customnotify.error{
    background-color: #f44336;
    }

    .error-message {
        display: none;
        font-size: 12px;
        color: red;
        margin-top: 5px;
    }
</style>
<div class="text-white fw-bold fs-5" style="padding: 10px 10px 10px 120px;background-color:#7058B9;text-align:left">Compare Options & Apply for MSME Business Loan</div>
<div class="container p-4"><br/>
  <div id="customnotify" class="p-2 fw-bold fst-italic"></div>
  <a onclick="history.back()" style="cursor:pointer;color:#7058B9">
    <img src="<?php echo BASEURL ?>images/home.png" width="20px"/><b> Home / Services</b>
  </a><br/><br/>
  <div class="row border-2 border-dark border" style="border-radius:10px">
    <div class="col-md-6 p-4" style="background-color:#7058B9;border-radius:10px 0px 0px 10px">
      <img src="<?php echo BASEURL ?>images/loan.jpeg" width="600px"/>
      <br/><br/><br/>
      <p class="text-white" style="font-size:18px;font-weight:bolder;width:380px">Discover options to fund your business</p>
      <div class="row">
          <div id="restart" class="col-4 p-2" style="cursor:pointer;color:white;background-color:#5A41A0;margin-left:12px;" onclick="showDiv()">Restart Loan</div>
          <div id="start" style="cursor:pointer;" class="col-5 p-2 border-bottom border-secondary" onclick="showDiv2()">Start or Grow</div>
      </div>
      <div id="re" class="shadow-sm" style="display:block;padding:20px;background-color:white;width:500px;border:1px solid #e8ebe9">
          Have you been running a business for more than a year?
          <ul class="list">
              <li> Interest rate ranging from 16% to 20%</li>
              <li> For working capital needs, up to Rs 1 Lakh</li>
          </ul>
      </div>
      <div id="st" class="shadow-sm" style="display:none;padding: 20px;background-color:white;width:500px;border:1px solid #e8ebe9">
          New business? Or, looking for funds to grow?
          <ul class="list">
              <li> Get a fund-ready proposal for banks.</li>
              <li> Consultation with banking experts for growth funds.</li>
          </ul>
      </div><br/>
      <div class="" style="color:white;background-color:#5A41A0;width:570px">
          <h6 style="padding: 10px;">Want to help small and local businesses?</h6>
      </div><br/>
      <div class="text-white" style="width:550px;height:180px;">
        <img class="rounded float-start" src="<?php echo BASEURL ?>images/helping.svg" width="200px"/><br/>
        <h6 style="line-height:1.4">These are trying times for small and local business owners.
        <br/>If you wish to lend money and support, please drop a mail at <b>info@innobytes.in</b></h6>
      </div><br/>
    </div>
    <div class="col-md-6 p-0" style="border-radius:0px 10px 10px 0px">
      <div class="text-white border-1 border-dark border" style="background-color:#7058B9;border-radius:0px 10px 0px 0px">
        <h5 class="p-2" style="font-weight:bolder;text-align:center;"><b>CHECK YOUR ELIGIBILITY</b></h5>
      </div>
      <form class="p-4">
        <div id="firstForm">
          <h6 style="font-weight:bolder;color:#7058B9;"><b>ABOUT YOURSELF</b></h6>
          <hr style="background-color:black;height:3px"/>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control border-2 border-dark" name="mfirstname" id="mfirstname" placeholder="First Name*">
              <div class="error-message"></div>
            </div>
            <div class="col">
              <input type="text" class="form-control border-2 border-dark" name="mlastname" id="mlastname" placeholder="Last Name*">
              <div class="error-message"></div>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-12">
              <input type="text" class="form-control border-2 border-dark" name="memail" id="memail" placeholder="Email"/>
              <div class="error-message"></div>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-2">
              <input type="text" class="form-control border-2 border-dark"
                placeholder="+91">
              <div class="error-message"></div>
            </div>
            <div class="col-10">
              <input type="text" class="form-control border-2 border-dark" maxlength="10" id="mcontact" name="mcontact"
                placeholder="98xxxxxxxx"
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                pattern="[0-9]{10}">
              <div class="error-message"></div>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-12">
              <input type="text" class="form-control border-2 border-dark" placeholder="Date of Birth" id="mdob" name="mdob"
                onfocus="(this.type='date')"
                onblur="(this.type='text')">
            </div>
          </div><br/>
          <div class="row mb-3">
            <div class="container">
              <div class="row">
                <div class="col">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Gender</b></label>
                </div>
                <div class="col">
                </div>
                <div class="col">
                  <div class="row">
                    <div class="pack col p-1" onclick="selectPackage(this)">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="mgender" id="mmale" value="male" hidden/>
                          <label class="form-check-label"><b>Male</b></label>
                      </div>
                    </div>
                    <div class="pack col p-1" onclick="selectPackage(this)">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="mgender" id="mfemale" value="female" hidden/>
                          <label class="form-check-label"><b>Female</b></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h6 style="font-weight:bolder;color:#5A41A0"><b>ABOUT YOUR BUSINESS</b></h6>
          <hr style="background-color:black;height:3px"/>
          <div class="row">
            <div class="col-12">
              <input type="text" class="form-control border-2 border-dark" placeholder="Pincode - Business Location *"
                id="mpincode" name="mpincode"
                maxlength="6"
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                pattern="[0-9]{6}">
              <div class="error-message"></div>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-12">
              <textarea class="form-control border-2 border-dark" placeholder="Address" id="maddress" name="maddress" rows="2"></textarea>
              <div class="error-message"></div>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-12">
              <input type="text" class="form-control border-2 border-dark" placeholder="Business Name" id="mnameBusiness" name="mnameBusiness">
              <div class="error-message"></div>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-12">
              <select id="mformSector" name="msector" class="form-control border-2 border-dark p-2 form-select"></select>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-12">
              <select class="form-select border-2 border-dark" id="businessType" name="businessType">
                <option selected disabled>Select Business Type *</option>
                <option value="Individual / Proprietor">Individual / Proprietor</option>
                <option value="Parternship Firm">Parternship Firm</option>
                <option value="LLP">LLP</option>
                <option value="OPC">OPC</option>
                <option value="Private Limited Company<">Private Limited Company</option>
              </select>
            </div>
          </div><br/>
          <div class="row mb-3">
            <div class="container">
              <div class="row">
                <div class="col-7">
                <b>Do you have a business address proof for the current location?</b>
                </div>
                <div class="col-2">
                </div>
                <div class="col">
                  <div class="row">
                    <div class="pack col p-1" onclick="selectProff(this)">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="addproff" id="addproff" value="yes" hidden/>
                          <label class="form-check-label"><b>Yes</b></label>
                      </div>
                    </div>
                    <div class="pack col p-1" onclick="selectProff(this)">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="addproff" id="addproff" value="no" hidden/>
                          <label class="form-check-label"><b>No</b></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <small class="text-muted">(For e.g: Light bill, MTNL/BSNL bill, GST, Shop Act Certificate, Rent Agreement or Property Tax receipt etc.)</small>
            </div>
          </div>
          <div class="d-flex justify-content-end">
              <?php if(isset($_SESSION['email'])){?>
                  <button type="button" id="next" class="col-md-4 btn p-2 text-white" onclick ="showbankdetails();"><b>NEXT</b></button>
              <?php }else{ ?>
                  <button id="next" type="button" class="col-md-4 btn p-2 text-white" data-bs-toggle="modal" data-bs-target="#loginModal">NEXT</button>
              <?php } ?>
          </div>
        </div>
        <div id="secondForm" style="display:none">
          <h6 style="font-weight:bolder;color:#7058B9;"><b>ABOUT YOUR FUND NEEDS AND SECURITY</b></h6>
          <hr style="background-color:black;height:3px"/>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control border-2 border-dark" placeholder="Required Loan Amount - upto Rs. 1 Crore*"/>
              <div class="error-message"></div>
            </div>
          </div><br/>
          <div class="row mb-3">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <label for="inputEmail3" class="col-form-label"><b>Can you provide a Co-borrower?</b></label>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="pack col-md-4 p-1 selected-br" onclick="selectBorrower(this)">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="co" checked value="yes" hidden/>
                          <label class="form-check-label"><b>Yes</b></label>
                      </div>
                    </div>
                    <div class="pack col-md-4 p-1" onclick="selectBorrower(this)">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="co" value="no" hidden/>
                          <label class="form-check-label"><b>No</b></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <select class="form-select border-2 border-dark" id="inlineFormSelectPref">
                <option selected>Can you provide gurantors ?</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">None</option>
              </select>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-12">
              <select class="form-select border-2 border-dark" id="inlineFormSelectPref">
                <option selected>How much margin money can you raise ?</option>
                <option value="1">15% to 24%</option>
                <option value="2">25% or more</option>
                <option value="3">Cannot raise margin money</option>
              </select>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-12">
              <select class="form-select border-2 border-dark" id="inlineFormSelectPref">
                <option selected>My Cibil score is</option>
                <option value="1">Less than 650</option>
                <option value="2">650 to 700</option>
                <option value="3">700 or more</option>
                <option value="3">Not sure</option>
              </select>
            </div>
          </div><br/>
          <h6 style="font-weight:bolder;color:#7058B9;"><b>ABOUT YOUR BUSINESS BANKING</b></h6>
          <hr style="background-color:black;height:3px"/>
          <div class="row mb-3">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <label for="inputEmail3" class="col-form-label"><b>Can you provide the Bank Statement of your business transactions?</b></label>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="pack col-md-4 p-1 selected-transact" onclick="selectTransact(this)">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="transact" checked value="yes" hidden/>
                          <label class="form-check-label"><b>Yes</b></label>
                      </div>
                    </div>
                    <div class="pack col-md-4 p-1" onclick="selectTransact(this)">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="transact" value="no" hidden/>
                          <label class="form-check-label"><b>No</b></label>
                      </div>
                    </div>
                  </div>
                </div>
                <small class="text-muted">(UPI such as; Google Pay, BHIM, Paytm, etc.)</small>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <label for="inputEmail3" class="col-form-label"><b>Do you have any of the following set up, like NEFT/ RTGS/ UPI/ NACH?</b></label>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="pack col-md-4 p-1" onclick="selectPayment(this)">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="payment" value="yes" hidden/>
                          <label class="form-check-label"><b>Yes</b></label>
                      </div>
                    </div>
                    <div class="pack col-md-4 p-1" onclick="selectPayment(this)">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="payment" value="no" hidden/>
                          <label class="form-check-label"><b>No</b></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input p-2 border-2 border-dark" type="checkbox" value="accepted" id="political">
            <label class="form-check-label" for="flexCheckChecked">
              I declare that I do not have direct/indirect close contacts with any Political party/ Leaders/ Police or Advocates.
            </label>
          </div><br/>
          <div class="form-check">
            <input class="form-check-input p-2 border-2 border-dark" type="checkbox" value="agree" id="agree">
            <label class="form-check-label" for="flexCheckChecked">
              I agree to the terms and conditions and authorise deAsra and deAsra's Partners to contact me. This will override the registry with DNC/ NDNC.
            </label>
          </div>
          <div class="row">
            <button type="button" onclick="showPerDet();" class="backop col-md-4 btn p-2" 
              style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;"><b>BACK</b></button>
            <button type="submit" id="options" class="col-md-4 btn p-2 text-white"><b>GET OPTIONS</b></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="container p-4">
    <div class="row border border-dark border-2" style="border-radius:20px">
        <div class="col-md-4 p-5 text-white" style="background-color:#7058B9;border-radius:20px 0 0 20px">
            <h4><b>5 Simple Steps To Select The Best Option</b></h4><br/>
            <ul class="text-white" style="list-style:none">
                <li class="p-2">
                  <div class="row">
                      <div class="col-md-4 circle shadow">1</div>
                      <h6 class="col-md-8 d-flex align-items-center text-white"><b>Share business information</b></h6>
                  </div>
                </li><br/>
                <li class="p-2">
                  <div class="row" style="cursor:pointer">
                      <div class="col-md-4 circle shadow">2</div>
                      <h6 class="col-md-8 d-flex align-items-center"><b>Discover & compare options</b></h6>
                  </div>
                </li><br/>
                <li class="p-2">
                  <div class="row" style="cursor:pointer">
                      <div class="col-md-4 circle shadow">3</div>
                      <h6 class="col-md-8 d-flex align-items-center"><b>Decide what works best</b></h6>
                  </div>
                </li><br/>
                <li class="p-2">
                  <div class="row" style="cursor:pointer">
                      <div class="col-md-4 circle shadow">4</div>
                      <h6 class="col-md-8 d-flex align-items-center"><b>Select the best match</b></h6>
                  </div>
                </li>
                <li class="p-2">
                  <div class="row" style="cursor:pointer">
                      <div class="col-md-4 circle shadow">5</div>
                      <h6 class="col-md-8 d-flex align-items-center"><b>Start: The Process</b></h6>
                  </div>
                </li>
            </ul>
        </div>
        <div class="col-md-8 p-4" style="border-radius:10px">
            <div class="fw-bold p-2" style="margin-top:30px;border-radius:5px 5px 0px 0px"><h4><b>FAQs</b></h4></div>
            <div class="container">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                            <h6><b>How is interest calculated under different loan schemes?</b></h6>
                            <p>Under different loan schemes, interest is calculated either on the basis of reducing balance or fixed balance.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                            <h6><b>How much moratorium period is made available by NBFCs/Banks?</b></h6>
                            <p>Usually, NBFCs/Banks offer the initial 1 to 3 months as the moratorium period after disbursing the loan amount.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                            <h6><b>Are there any delayed/ penalty/ prepayment charges for loans provided by the NBFCs/banks?</b></h6>
                            <p>It depends on the NBFCs/banks providing the loan. Default EMI/EWI charges may be applicable.</p>
                        </div>
                        </div>
                    <div class="col-6">
                        <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                            <h6><b>What is the payment mode for Equated Weekly Instalments (EWIs) or EMIs?</b></h6><Br/>
                            <p>The payment of EWIs/EMIs should be made through UPI, NEFT/RTGS or NACH.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                            <h6><b>Is the CIBIL score criteria important? What happens if the CIBIL score is low?</b></h6>
                            <p>Yes, your CIBIL score is an important factor. NBFCs & banks check the borrower’s credit history and assess the business based on factors such as past loan track record, repayment history, etc. They then come up with individual assessment results.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                            <h6><b>Are business entities (other than proprietary concerns such as partnership firms and Private Limited Companies) eligible for this emergency loan scheme?</b></h6>
                            <p>Yes, a business that has entity-specific documentation in place, such as partnership deed, MOA, AOA are eligible for this loan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container p-4" style="text-align:center">
  <h4 class="textFont p-3 text-dark" style="margin:0px;text-align:left">Features and Benefits</h4><br/>
  <div class="row g-4 justify-content-center">
      <div class="col-4">
          <div class="p-4 border border-2 border-dark" style="border-radius:10px;">
              <img src="<?php echo BASEURL ?>images/msme1.png" width="90"/><br/>
              <h5><b>PURPOSE</b></h5>
              <h6>To start or, grow a business, or to meet working capital needs.</h6>
          </div>
      </div>
      <div class="col-4">
          <div class="p-4 border border-2 border-dark" style="border-radius:10px;">
              <img src="<?php echo BASEURL ?>images/msme2.png" width="90"/><br/>
              <h5><b>ELIGIBLE ENTITIES</b></h5>
              <h6>Individuals/Proprietors, Partnership Firms, LLP and Private Limited Companies.</h6>
          </div>
      </div>
      <div class="col-4">
          <div class="p-4 border border-2 border-dark" style="border-radius:10px;">
              <img src="<?php echo BASEURL ?>images/msme3.png" width="90"/><br/>
              <h5><b>SECURITY</b></h5>
              <h6>Scheme-dependent with collateral or collateral free, with or without a guarantor.</h6>
          </div>
      </div>
      <div class="col-4">
          <div class="p-4 border border-2 border-dark" style="border-radius:10px;">
              <img src="<?php echo BASEURL ?>images/msme4.png" width="90"/><br/>
              <h5><b>REPAYMENT METHOD</b></h5>
              <h6>Scheme dependent maximum repayment period is up to 5 years</h6>
          </div>
      </div>
      <div class="col-4">
          <div class="p-4 border border-2 border-dark" style="border-radius:10px;">
              <img src="<?php echo BASEURL ?>images/msme5.png" width="90"/><br/>
              <h5><b>REPAYMENT SCHEDULE</b></h5>
              <h6>Equated Weekly Installments or Equated Monthly Installments.</h6>
          </div>
      </div>
  </div>
</div>

<div class="p-1" style="display: flex;
  justify-content: right;
  align-items: right;">
      <button class="noselect bg-transparent border-0" onclick="toTop()" id="arrowup" style="display:none" data-bs-toggle="tooltip" data-bs-placement="right" title="Click to go on Top">
        <span class='text'><i class="bi bi-arrow-up-circle-fill" style="font-size: 3em;"></i></span>
      </button>
</div>
<br/>
<script>

print_sector('mformSector');

// var firstname = document.getElementById('mfirstname');
// var businesserror = firstname.nextElementSibling;
// var lastname = document.getElementById('mlastname');
// var errorContainer2 = firstname.nextElementSibling;
var mpincode = document.getElementById('mpincode');
var pincodeerror = mpincode.nextElementSibling;
var memail = document.getElementById('memail');
var emailerror = memail.nextElementSibling;
var mmobile = document.getElementById('mcontact');
var mobileerror = mmobile.nextElementSibling;
var maddress = document.getElementById('maddress');
var addresserror = maddress.nextElementSibling;
var businessname = document.getElementById('mnameBusiness');
var businesserror = businessname.nextElementSibling;

mpincode.addEventListener('input', function() {
    let regex = /^\d{6}$/;
    if (mpincode.value.trim() === '') {
        pincodeerror.textContent = 'Enter pincode';
        pincodeerror.style.display = 'block';
        mpincode.classList.add('is-invalid');
    }else if(!regex.test(mpincode.value)){
        pincodeerror.textContent = 'Invalid pincode';
        pincodeerror.style.display = 'block';
        mpincode.classList.add('is-invalid');
    } else {
        pincodeerror.style.display = 'none';
        mpincode.classList.remove('is-invalid');
        mpincode.classList.add('is-valid');
    }
});
memail.addEventListener('input', function() {
    let emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if (memail.value.trim() === '') {
        emailerror.textContent = 'Email cannot be empty';
        emailerror.style.display = 'block';
        memail.classList.add('is-invalid');
    }else if(!emailRegex.test(memail.value)){
        emailerror.textContent = 'Invalid Email';
        emailerror.style.display = 'block';
        memail.classList.add('is-invalid');
    } else {
        emailerror.style.display = 'none';
        memail.classList.remove('is-invalid');
        memail.classList.add('is-valid');
    }
});
mmobile.addEventListener('input', function() {
    let mobileRegex = /^[6-9]\d{9}$/;
    if (mmobile.value.trim() === '') {
        mobileerror.textContent = 'Enter Mobile number';
        mobileerror.style.display = 'block';
        mmobile.classList.add('is-invalid');
    }else if(!mobileRegex.test(mmobile.value)){
        mobileerror.textContent = 'Invalid Number';
        mobileerror.style.display = 'block';
        mmobile.classList.add('is-invalid');
    } else {
        mobileerror.style.display = 'none';
        mmobile.classList.remove('is-invalid');
        mmobile.classList.add('is-valid');
    }
});
maddress.addEventListener('input', function() {
      if (maddress.value.trim() === '') {
          addresserror.textContent = 'Address cannot be empty';
          addresserror.style.display = 'block';
          maddress.classList.add('is-invalid');
      } else {
          addresserror.style.display = 'none';
          maddress.classList.remove('is-invalid');
          maddress.classList.add('is-valid');
      }
  });
businessname.addEventListener('input', function() {
    let patternb =/^[A-Za-z]*\s{1}[A-Za-z]*$/;
    if (businessname.value.trim() === '') {
        businesserror.textContent = 'Business Name cannot be empty';
        businesserror.style.display = 'block';
        businessname.classList.add('is-invalid');
    } else if(!patternb.test(businessname.value)){
        businesserror.textContent = 'Enter valid Businessname';
        businesserror.style.display = 'block';
        businessname.classList.add('is-invalid');
    }else {
        businesserror.style.display = 'none';
        businessname.classList.remove('is-invalid');
        businessname.classList.add('is-valid');
    }
});

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("arrowup").style.display = "block";
    } else {
      document.getElementById("arrowup").style.display = "none";
    }
  }

  function selectPackage(div) {
      // get the radio button inside the clicked div
      const radio = div.querySelector('input[type="radio"]');

      // Remove the 'selected-row' class from all rows
      $('.pack').removeClass('selected-row');
      
      // Add the 'selected-row' class to the selected row
      $(div).addClass('selected-row');
      
      // trigger a click event on the radio button
      radio.click();
      
  }
  function selectProff(div){
    const radio = div.querySelector('input[type="radio"]');

      // Remove the 'selected-row' class from all rows
      $('.pack').removeClass('selected-proff');
      
      // Add the 'selected-row' class to the selected row
      $(div).addClass('selected-proff');
      
      // trigger a click event on the radio button
      radio.click();
  }
  function selectBorrower(div){
    const radio = div.querySelector('input[type="radio"]');

      // Remove the 'selected-row' class from all rows
      $('.pack').removeClass('selected-br');
      
      // Add the 'selected-row' class to the selected row
      $(div).addClass('selected-br');
      
      // trigger a click event on the radio button
      radio.click();
  }
  function selectTransact(div){
    const radio = div.querySelector('input[type="radio"]');

      // Remove the 'selected-row' class from all rows
      $('.pack').removeClass('selected-transact');
      
      // Add the 'selected-row' class to the selected row
      $(div).addClass('selected-transact');
      
      // trigger a click event on the radio button
      radio.click();
  }
  function selectPayment(div){
    const radio = div.querySelector('input[type="radio"]');

      // Remove the 'selected-row' class from all rows
      $('.pack').removeClass('selected-payment');
      
      // Add the 'selected-row' class to the selected row
      $(div).addClass('selected-payment');
      
      // trigger a click event on the radio button
      radio.click();
  }

  function showbankdetails(){
    var sector = document.getElementById('mformSector');
    var btype = document.getElementById('businessType');
    var mgender= $('input[name=mgender]:checked').val();
    var addproff= $('input[name=addproff]:checked').val();
    
    if($('#mfirstname').val() == '' || $('#mlastname').val() == '' || $('#memail').val() == '' || $('#mcontact').val() == '' || $('#maddress').val() == '' ||
    $('#mdob').val() == '' || $('#mpincode').val() == '' || mgender === undefined || addproff === undefined || sector.value == 'Select Business Sector *' || btype.value == 'Select Business Type *' || $('#mnameBusiness').val() == ''){
        $('#customnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
        setTimeout(function() {
            $('#customnotify').hide();
        }, 4000);
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }else{
      $('#firstForm').hide();
      $('#secondForm').show();
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  }
  function showPerDet(){
    $('#secondForm').hide();
    $('#firstForm').show();
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  function showDiv(){
      document.getElementById('st').style.display = 'none'
      document.getElementById('re').style.display = 'block'
      document.getElementById('start').style.backgroundColor = ''
      document.getElementById('start').style.color = 'black'
      document.getElementById('start').style.border = '0 0 1px 0 solid black'
      document.getElementById('restart').style.backgroundColor = '#5A41A0'
      document.getElementById('restart').style.border = 'none'
      document.getElementById('restart').style.color = 'white'
  }
  function showDiv2(){
      document.getElementById('restart').style.backgroundColor = ''
      document.getElementById('restart').style.color = 'black'
      document.getElementById('restart').style.borderBottom = '1px solid black'
      document.getElementById('start').style.backgroundColor = '#5A41A0'
      document.getElementById('start').style.border = 'none'
      document.getElementById('start').style.color = 'white'
      document.getElementById('re').style.display = 'none'
      document.getElementById('st').style.display = 'block'
  }

function toTop(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  }

</script>
<?php
include(ROOT_FOLDER.'Footer/footer.php');
?>