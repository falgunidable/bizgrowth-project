<?php
include('../../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
?>
<style>
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
.goNext svg {
	width: 15px;
	fill: #76287C;
  font-weight: bold;
}
.goNext:hover svg {
	fill: white;
}

.goNext:hover .icon{
    width: 35px;
    border-left: none;
    background-color:purple;
    transform: translateX(55px);
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
</style>
<div style="background-color:#eaffd4;padding:40px 0px 20px 0px">
  <div class="container">
    <div class="row">
      <div class="col-md-6"><br/><br/>
        <div class="row">
          <div style="background-color:#eaffd4;padding:5px">
              <h4 style="color:#6348b5;font-weight:bolder;width:380px">Rent Agreement Registration</h4>
              <small class="text-muted fst-italic"><b>(Only if the property is in Maharashtra)</b></small><br/><br/>
              <p>A quick and hassle-free service which helps you get your Rent Agreement registered online.</p><br/>
              <h6><b>What is included in this service?</b></h6>
              <div class="container px-0">
                <div class="row gx-3">
                    <div class="col-sm-4">
                        <div class="p-3 border" style="text-align:center;background-color:white;border:1px solid #e8ebe9">
                            <img src="<?php echo BASEURL ?>images/rentimg1.png" width="80"/>
                            <b>Assistance in Documentation</b>  
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-3 border" style="text-align:center;background-color:white;border:1px solid #e8ebe9">
                            <img src="<?php echo BASEURL ?>images/rentimg1.png" width="80"/>
                            <b>Guidance in Registration</b> 
                        </div>
                    </div>
                </div>
              </div><br/> 
          </div>
        </div>
        <div class="p-2" style="background-color:#f2f2f2;">
            <h5>
                <b>Details about Rent Agreement</b>
            </h5>
        </div>
        <div style="text-align:center;padding:40px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4" data-bs-toggle="modal" data-bs-target="#includedModal">
                        <div class="d-flex justify-content-center">
                            <div class="circle shadow" style="padding:18px"><img src="<?php echo BASEURL ?>images/includeMedia.png" width="45"/></div>
                        </div><br/>
                        <h6>What is Included?</h6>
                    </div>
                    <div class="col-sm-4" data-bs-toggle="modal" data-bs-target="#viewsampleModal">
                        <div class="d-flex justify-content-center">
                            <div class="circle shadow"><img src="<?php echo BASEURL ?>images/sampleList.png" width="40"/></div>
                        </div><br/>
                        <h6>View Sample</h6>
                    </div>
                </div>
            </div><br/>
        </div>
      </div>
      <div class="col-md-6" style="background-color:white;padding:20px;border:2px solid #6348b5;border-radius:10px">
        <h6 style="font-weight:bolder;color:black;text-align:center">CHECK YOUR ELIGIBILITY</h6>
        <hr style="background-color:#6348b5;height: 3px;"/>
        <h6 style="font-weight:bolder;color:#6348b5">ABOUT YOURSELF</h6>
        <hr/>
        <div class="row" style="margin-bottom:10px">
          <div class="col-12">
            <select class="form-select" id="inlineFormSelectPref" style="border:1px solid #6348b5">
              <option selected disabled>City</option>   
              <option value="aur">Aurangabad</option>
              <option value="mum">Mumbai</option>
              <option value="nan">Nanded</option>
              <option value="ng">Nagpur</option>
              <option value="nak">Nashik</option>
              <option value="pun">Pune</option>
              <option value="rai">Raigad</option>
              <option value="sol">Solapur</option>
              <option value="tha">Thane</option>
            </select>
          </div>
          <small class="p-2 text-muted fst-italic">Note :- If your property is located in the city other than those specified above, please call us on 8669985599.</small>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Duration of Agreement(In Months) *" style="border:1px solid #6348b5">
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <select class="form-select" id="inlineFormSelectPref" style="border:1px solid #6348b5">
              <option selected disabled>Property Area</option>
              <option value="1">Rural</option>
              <option value="2">Urban</option>
            </select>
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <small class="text-muted">Purpose</small>
            <input type="text" class="form-control" placeholder="Non-Residential" style="border:1px solid #6348b5" disabled>
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <input type="text" class="form-control" placeholder="Average Monthly Rent (In Rupees) *" style="border:1px solid #6348b5">
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <input type="text" class="form-control" placeholder="Refundable Deposit (In Rupees) *" aria-label="First name" style="border:1px solid #6348b5">
          </div>
        </div><br/>
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
<div style="text-align:center;padding:80px;background-color:#f2f2f2">
  <h5><b>Steps to get your Online Rent Agreement Registration in 6 working days</b></h5>
  <small class="text-muted">*after sharing the documents and information with us.</small>
  <br/><br/>
  <div class="container">
    <div class="row">
      <div class="col-sm border-start border-end border-3">
          <div class="d-flex justify-content-center"><div class="circle" style="border: 3px solid yellow;">1</div></div><br/>
          <h6>Sign up & pay advance</h6>
      </div>
      <div class="col-sm border-end border-3">
          <div class="d-flex justify-content-center "><div class="circle" style="border: 3px solid orange">2</div></div><br/>
          <h6>Submit documents & information</h6>
      </div>
      <div class="col-sm border-end border-3">
          <div class="d-flex justify-content-center"><div class="circle" style="border: 3px solid #fc0097">3</div></div><br/>
          <h6>Service deliverable gets ready</h6>
      </div>
      <div class="col-sm border-end border-3">
          <div class="d-flex justify-content-center"><div class="circle" style="border: 3px solid  #006dfc">4</div></div><br/>
          <h6>Pay balance amount</h6>
      </div>
      <div class="col-sm border-end border-3">
          <div class="d-flex justify-content-center"><div class="circle" style="border: 3px solid darkblue">5</div></div><br/>
          <h6>Order Delivered</h6>
      </div>
    </div>
  </div>
</div>
<?php
include(ROOT_FOLDER.'Footer/footer.php');
?>

<div
        class="modal fade"
        id="includedModal"
        tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="border:1px solid #fe7f10">
                <div class="modal-header">
                    <div class="circleModal"><img src="<?php echo BASEURL ?>images/include.png" width="16px"/></div>
                    <h6 class="modal-title" style="margin-left:10px">
                        <b>Rent Agreement Inclusions and Exclusions</b>
                    </h6>
                </div>
                <div class="modal-body">
                    <h6 style="color:#fe7f10">
                        <b>Inclusions</b>
                    </h6>
                    <ul>
                        <li>Soft Copy of registered Rent Agreement will be sent on registered email id.</li>
                        <li>One visit by the representative for biometric verification.</li>
                    </ul>
                    <h6 style="color:#fe7f10">
                        <b>Exclusions</b>
                    </h6>
                    <ul>
                        <li>Registration of rent agreement for premises located outside Maharashtra.</li>
                        <li>Additional visits for biometric shall be charged additionally.</li>
                        <li>Multiple visits for biometric verification in case of multiple tenants.</li>
                        <li>Bio-metric verification of the owner in case he is residing out of Maharashtra.</li>
                        <li>Printed hard copy of registered rent agreement on legal paper.</li>
                        <li>Police intimation of tenant at the nearest police station.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div
    class="modal fade"
    id="viewsampleModal"
    tabindex="-1"
    aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe src="./rent_agreement.pdf" width="100%" height="600px"></iframe>
                </div>
            </div>
        </div>
    </div>
