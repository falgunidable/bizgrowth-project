<?php
include('../../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
include(ROOT_FOLDER.'authentication/login.php');
?>
<style>
  .circle {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        background: #fff;
        color: #000;
        padding: 20px;
        text-align: center;
        font: 32px Arial, sans-serif;
      }
      #continue{
        background-color:#5A41A0;
        margin-top:30px;
        border-radius:10px
    }
    #continue:hover {
        cursor: pointer;
        background-color:#372863;
        color: white !important;
    }
</style>
<div class="container p-4"><br/>
  <a onclick="history.back()" style="cursor:pointer;color:#7058B9">
    <img src="<?php echo BASEURL ?>images/home.png" width="20px"/><b> Home / Services</b>
  </a><br/><br/>
  <div class="row border-2 border-dark border" style="border-radius:10px">
    <div class="col-md-6 p-4 text-white" style="background-color:#7058B9;border-radius:10px 0px 0px 10px">
      <h4 class="text-white" style="font-weight:bolder;width:380px"><b>Rent Agreement Registration</b></h4>
      <small class="text-white fst-italic"><b>(Only if the property is in Maharashtra)</b></small><br/><br/>
      <p>A quick and hassle-free service which helps you get your Rent Agreement registered online.</p><br/>
      <h6><b>What is included in this service?</b></h6>
      <div class="container px-0">
        <div class="row gx-3">
          <div class="col-sm-4">
            <div class="p-3 border border-dark border-2" style="text-align:center;background-color:white;border-radius:10px">
                <img src="<?php echo BASEURL ?>images/rentimg1.png" width="80"/>
                <b class="text-dark">Assistance in Documentation</b>  
            </div>
          </div>
          <div class="col-sm-4" style="border-radius:10px">
            <div class="p-3 border border-dark border-2" style="text-align:center;background-color:white;border-radius:10px">
                <img src="<?php echo BASEURL ?>images/rentimg1.png" width="80"/>
                <b class="text-dark">Guidance in Registration</b> 
            </div>
          </div>
        </div>
      </div><br/> 
      <div class="p-2" style="background-color:#5A41A0;color:white">
          <h5>
              <b>Details about Rent Agreement</b>
          </h5>
      </div>
      <div style="text-align:center;padding:40px;">
          <div class="container">
              <div class="row">
                  <div class="col-sm-4" data-bs-toggle="modal" data-bs-target="#includedModal">
                      <div class="d-flex justify-content-center" style="cursor:pointer">
                          <div class="circle shadow p-0"><img src="<?php echo BASEURL ?>images/includeMedia.png" width="80"/></div>
                      </div><br/>
                      <h6><b>What is Included?</b></h6>
                  </div>
                  <div class="col-sm-4" data-bs-toggle="modal" data-bs-target="#viewsampleModal">
                      <div class="d-flex justify-content-center" style="cursor:pointer">
                          <div class="circle shadow p-0"><img src="<?php echo BASEURL ?>images/checklist.png" width="80"/></div>
                      </div><br/>
                      <h6><b>View Sample</b></h6>
                  </div>
              </div>
          </div><br/>
        </div>
    </div>
    <div class="col-md-6 p-0" style="border-radius:0px 10px 10px 0px">
      <div class="text-white border-1 border-dark border" style="background-color:#7058B9;border-radius:0px 10px 0px 0px">
        <h5 class="p-2" style="font-weight:bolder;text-align:center;"><b>CHECK YOUR ELIGIBILITY</b></h5>
      </div>
      <form class="p-4">
        <h6 style="font-weight:bolder;color:#7058B9"><b>ABOUT YOURSELF</b></h6>
        <hr style="background-color:black;height:3px"/>
        <div class="row" style="margin-bottom:10px">
          <div class="col-12">
            <select class="form-select border-2 border-dark" id="city">
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
            <input type="text" class="form-control border-2 border-dark" placeholder="Duration of Agreement(In Months) *"/>
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <select class="form-select border-2 border-dark" id="property">
              <option selected disabled>Property Area</option>
              <option value="1">Rural</option>
              <option value="2">Urban</option>
            </select>
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <small class="text-muted">Purpose</small>
            <input type="text" class="form-control border-2 border-dark" placeholder="Non-Residential" disabled/>
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <input type="text" class="form-control border-2 border-dark" placeholder="Average Monthly Rent (In Rupees) *"/>
          </div>
        </div><br/>
        <div class="row">
          <div class="col-12">
            <input type="text" class="form-control border-2 border-dark" placeholder="Refundable Deposit (In Rupees) *" />
          </div>
        </div><br/>
        <div class="d-flex justify-content-end">
            <?php if(isset($_SESSION['email'])){?>
                <button type="submit" id="continue" class="col-md-4 btn p-2 text-white"><b>CONTINUE</b></button>
            <?php }else{ ?>
                <button id="continue" type="button" class="col-md-4 btn p-2 text-white" data-bs-toggle="modal" data-bs-target="#loginModal">CONTINUE</button>
            <?php } ?>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container p-4">
    <div class="row border border-dark border-2" style="border-radius:20px">
        <div class="col-md-4 p-5 text-white" style="background-color:#7058B9;border-radius:20px 0 0 20px">
            <h4><b>Steps to get your Online Rent Agreement Registration in 6 working days</b></h4><br/>
            <ul class="text-white" style="list-style:none">
                <li class="p-2">
                  <div class="row">
                      <div class="col-md-4 circle shadow">1</div>
                      <h6 class="col-md-8 d-flex align-items-center text-white"><b>Sign up & pay advance</b></h6>
                  </div>
                </li>
                <li class="p-2">
                  <div class="row" style="cursor:pointer">
                      <div class="col-md-4 circle shadow">2</div>
                      <h6 class="col-md-8 d-flex align-items-center"><b>Submit documents & information</b></h6>
                  </div>
                </li>
                <li class="p-2">
                  <div class="row" style="cursor:pointer">
                      <div class="col-md-4 circle shadow">3</div>
                      <h6 class="col-md-8 d-flex align-items-center"><b>Service deliverable gets ready</b></h6>
                  </div>
                </li>
                <li class="p-2">
                  <div class="row" style="cursor:pointer">
                      <div class="col-md-4 circle shadow">4</div>
                      <h6 class="col-md-8 d-flex align-items-center"><b>Pay balance amount</b></h6>
                  </div>
                </li>
                <li class="p-2">
                  <div class="row" style="cursor:pointer">
                      <div class="col-md-4 circle shadow">5</div>
                      <h6 class="col-md-8 d-flex align-items-center"><b>Order Delivered</b></h6>
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
                            <h6><b>What are the mandatory documents required for Rent Agreement E-registration?</b></h6>
                            <p>Valid Aadhaar Card and PAN Card of Owner, Tenant and their Two witnesses are mandatory for Rent Agreement E-registration.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                            <h6><b>What is E-Registration or online registration of Rent Agreement?</b></h6>
                            <p>E-registration is a new facility by the Maharashtra government to register your Rent Agreement online without visiting the sub-registrar office. Signatures are captured using the biometric device and user details are verified using the Aadhaar system.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                            <h6><b>How much time will it take to register the Rent Agreement?</b></h6>
                            <p>Generally, within 6 working days, the rent agreement gets registered. In case the government website is down or not working it might take a few extra days to get the agreement registered.</p>
                        </div>
                        </div>
                    <div class="col-6">
                        <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                            <h6><b>Is the E-Registered copy of the rent agreement considered as a valid address proof?</b></h6>
                            <p>Yes, an E-registered Rent Agreement works as a valid document as an address proof.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                            <h6><b>Can movable items like furniture & fittings be added in E-registered Rent Agreement?</b></h6>
                            <p>Yes, as per the current E-registration norms these can be added in the agreement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container p-4" style="text-align:center">
  <h4 class="textFont p-3 text-dark" style="margin:0px;text-align:left"><b>Benefits of Online Rent Agreement Registration</b></h4>
  <div class="row g-4 justify-content-center">
      <div class="col-6">
          <div class="p-4 border border-2 border-dark" style="border-radius:10px;">
              <img src="<?php echo BASEURL ?>images/icon21.png" width="90"/><br/><br/>
              <h5><b>Minimum Documentation</b></h5>
              <h6>A minimum of documents are required for all the parties (e.g landlord, tenant & two witnesses). 1) Aadhaar Number /card. 2) PAN (Permanent Account Number).</h6>
          </div>
      </div>
      <div class="col-6">
          <div class="p-4 border border-2 border-dark" style="border-radius:10px;">
              <img src="<?php echo BASEURL ?>images/icon20.png" width="90"/><br/><br/>
              <h5><b>Hassle Free Registration</b></h5>
              <h6>E-registration is a new facility by the Maharashtra government to register your Leave and Licence (Rent) Agreement online without visiting the sub-registrar office.</h6>
          </div>
      </div>
      <div class="col-6">
          <div class="p-4 border border-2 border-dark" style="border-radius:10px;">
              <img src="<?php echo BASEURL ?>images/icon22.png" width="90"/><br/><br/>
              <h5><b>Valid Address Proof</b></h5>
              <h6>An E-registered rent agreement is considered as a valid document for address proof.</h6>
          </div>
      </div>
      <div class="col-6">
          <div class="p-4 border border-2 border-dark" style="border-radius:10px;">
              <img src="<?php echo BASEURL ?>images/icon23.png" width="90"/><br/><br/>
              <h5><b>Movable Items</b></h5>
              <h6>E-registration norms of leave and licence system allows the customer to add movable items such as furniture & fittings.</h6>
          </div>
      </div>
  </div>
</div>

<?php
include(ROOT_FOLDER.'Footer/footer.php');
?>
<script>
  function toTop(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  }
</script>
<div
        class="modal fade"
        id="includedModal"
        tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content border-2 border-dark">
            <div class="modal-body">
              <div class="row p-3">
                  <div class="col-md-1">
                      <div class="circleModal"><img src="<?php echo BASEURL ?>images/includeMedia.png" width="55px"/></div>
                  </div>
                  <div class="col-md-10">
                      <h5 style="margin-top:12px" class="d-flex align-items-center"><b>Rent Agreement Inclusions and Exclusions</b></h5>
                  </div>
              </div>
              <div class="container px-4">
                  <div class="row gx-4 p-2">
                      <div class="col">
                          <div class="p-3 border border-2 border-success h-100 d-flex flex-column" style="border-radius:20px">
                              <h6><b>Inclusions</b></h6>
                              <ul>
                                <li>Soft Copy of registered Rent Agreement will be sent on registered email id.</li>
                                <li>One visit by the representative for biometric verification.</li>
                              </ul>
                          </div>
                      </div>
                      <div class="col">
                          <div class="p-3 border border-2 border-danger h-100 d-flex flex-column" style="border-radius:20px">
                              <h6><b>Exclusions</b></h6>
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
