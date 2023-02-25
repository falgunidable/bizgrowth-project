<?php
include('Navbar/nav.php');
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    *{
        font-family: 'Montserrat', sans-serif;
    }
    a, a:hover{
      color: black;
    }
    .circle {
        border-radius: 50%;
        width: 70px;
        height: 70px;
        padding: 17px;
        background: #fff;
        color: #000;
        text-align: center;
        font: 32px Arial, sans-serif;
        border: 2px solid #E8E8E8
      }
    .circleModal {
      border-radius: 50%;
      width: 40px;
      height: 40px;
      padding: 10px;
      background: #fff;
      color: #000;
      text-align: center;
      font: 32px Arial, sans-serif;
      border: 2px solid #fe7f10
    }
</style>
<div style="background-color:#FFE7D2">
  <div class="container">
    <div class="row">
      <div class="col-6 p-5">
        <h2 style="color:#fe7f10"><b>GST REGISTRATION</b></h2><br/>
        <h6><b>GST Registration enables your business to charge and/or collect GST (Goods and Services Tax).<br/><br/>
          The Goods & Services Tax (GST) is a value-added tax levied on most goods and services sold for domestic use.</b>
        </h6><br/>
        <h6><b>Get in 30 Days <span style="font-size:20px;color:#fe7f10">@  590</span></b></h6>
      </div>
      <div class="col-6 p-4">
        <div style="text-align:center;background-color:white;border:2px solid #fe7f10;border-radius:10px;padding:50px">
          <div id="eligibility">
            <img src="./images/clipboard.png"/><br/><br/>
            <button class="p-2 border-0" style="background-color:#fe7f10;color:white" onclick="bankAcc()"><b>Check Eligibility To Apply</b></button>
          </div>
          <div id="wrong1" style="display:none">
            <div class="d-flex justify-content-end">
              <img src="./images/remove.png" onclick="document.getElementById('wrong1').style.display='none';document.getElementById('bank').style.display='block';"/>
            </div><br/>
            <div class="align-item-center">
              <h6 style="text-align:left"><b>Having a bank account is mandatory to proceed to the next step</b></h6><br/><br/>
              <a class="btn p-2 border-0" href="legal_app" style="background-color:#fe7f10;color:white"><b>Explore Other Compliances</b></a>
            </div><br/>
          </div>
          <div id="wrong2" style="display:none">
            <div class="d-flex justify-content-end">
              <img src="./images/remove.png" onclick="document.getElementById('wrong2').style.display='none';document.getElementById('pan').style.display='block';"/>
            </div>
            <div class="align-item-center">
              <h6 style="text-align:left;">
                  <b>Apply for a 
                    <a style="color:black" href="https://www.onlineservices.nsdl.com/paam/endUserRegisterContact.html" target="_blanck">
                      <span class="text-decoration-underline">PAN Card</span>
                    </a>online
                  </b>
              </h6>
              <br/><br/><br/>
              <a class="btn p-2 border-0" href="legal_app" style="background-color:#fe7f10;color:white"><b>Explore Other Compliances</b></a>
            </div><br/>
          </div>
          <div id="wrong3" style="display:none">
            <div class="d-flex justify-content-end">
              <img src="./images/remove.png" onclick="document.getElementById('wrong3').style.display='none';document.getElementById('add').style.display='block';"/>
            </div><br/>
            <div class="align-item-center">
              <h6 style="text-align:left"><b>Proof of address in the name of the business is mandatory for all types of concerns. If a proprietorship business is run from a relative’s/friend’s premises, both parties must enter into a rent agreement to have proof in your name.</b></h6>
              <br/><br/>
              <a class="btn p-2 border-0" href="legal_app" style="background-color:#fe7f10;color:white"><b>Explore Other Compliances</b></a>
            </div><br/>
          </div>
          <div id="bank" style="display:none">
            <div class="d-flex justify-content-between">
              <h6 style="color:#fe7f10"><b>Check Eligibility</b></h6>
              <h6 class="text-muted"><b>1/3</b></h6>
            </div><br/>
            <div class="d-flex justify-content-around">
              <div><img onclick="document.getElementById('bank').style.display='none';document.getElementById('eligibility').style.display='block';" src="./images/left-arrow.png"/></div>
              <h6 style="text-align:left;margin-left:10px"><b>You have a Bank Account in the name of Business/Business Owner ?</b></h6><br/>
            </div><br/>
            <img src="./images/bank.png"/><br/><br/>
            <div class="d-flex justify-content-evenly">
              <img src="./images/checked.png" style="cursor:pointer" onclick="openPan()" onmouseover="chover(this);" onmouseout="cunhover(this);"/>
              <img src="./images/cancel.png" style="cursor:pointer" onclick="closebank()" onmouseover="whover(this);" onmouseout="wunhover(this);"/>
            </div>
          </div>
          <div id="pan" style="display:none">
            <div class="d-flex justify-content-between">
              <h6 style="color:#fe7f10"><b>Check Eligibility</b></h6>
              <h6 class="text-muted"><b>2/3</b></h6>
            </div><br/>
            <div class="d-flex justify-content-around">
              <div><img onclick="document.getElementById('pan').style.display='none';document.getElementById('bank').style.display='block';" src="./images/left-arrow.png"/></div>
              <h6 style="text-align:left;margin-left:10px"><b>You have a PAN Card in the name of your Business OR yours is a Proprietorship firm ?</b></h6><br/>
            </div>
            <img src="./images/pan.png"/><br/>
            <div class="d-flex justify-content-evenly">
              <img src="./images/checked.png" style="cursor:pointer" onclick="openAdd()" onmouseover="chover(this);" onmouseout="cunhover(this);"/>
              <img src="./images/cancel.png" style="cursor:pointer" onclick="closepan()" onmouseover="whover(this);" onmouseout="wunhover(this);"/>
            </div>
          </div>
          <div id="add" style="display:none">
            <div class="d-flex justify-content-between">
              <h6 style="color:#fe7f10"><b>Check Eligibility</b></h6>
              <h6 class="text-muted"><b>3/3</b></h6>
            </div><br/>
            <div class="d-flex justify-content-around">
              <div><img src="./images/left-arrow.png" onclick="document.getElementById('add').style.display='none';document.getElementById('pan').style.display='block';"/></div>
              <h6 style="text-align:left;margin-left:10px"><b>You have a proof of the Business Address OR your Business and Residential Addresses are the same</b></h6><br/>
            </div>
            <img src="./images/add.png" width="170px"/><br/>
            <div class="d-flex justify-content-evenly">
              <img src="./images/checked.png" style="cursor:pointer" onmouseover="chover(this);" onmouseout="cunhover(this);"/>
              <img src="./images/cancel.png" style="cursor:pointer" onclick="closeadd()" onmouseover="whover(this);" onmouseout="wunhover(this);"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="p-1" style="background-color:#fe7f10"></div>
<div class="p-4" style="background-color:#f2f2f2;text-align:center">
  <h5><b>Details about GST Registration</b></h5>
</div>
<div style="text-align:center;padding:50px;">
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <a href="gst_checklist">
          <div class="d-flex justify-content-center">
            <div class="circle shadow"><img src="./images/list.png" /></div>
          </div><br/>
          <h6>Checklist</h6>
        </a>
      </div>
      <div class="col-sm">
          <div class="d-flex justify-content-center ">
            <div class="circle shadow"><img src="./images/tools.png" /></div>
          </div><br/>
          <h6>Tools</h6>
      </div>
      <div class="col-sm" data-bs-toggle="modal" data-bs-target="#callModal">
          <div class="d-flex justify-content-center">
            <div class="circle shadow"><img src="./images/call.png" /></div>
          </div><br/>
          <h6>Call Expert</h6>
      </div>
      <div class="col-sm">
          <div class="d-flex justify-content-center">
            <div class="circle shadow" style="padding-left:20px"><img src="./images/play.png" /></div>
          </div><br/>
          <h6>View Video</h6>
      </div>
      <div class="col-sm" data-bs-toggle="modal" data-bs-target="#includedModal">
          <div class="d-flex justify-content-center">
            <div class="circle shadow" style="padding:13px"><img src="./images/rightwrong.png" width="40"/></div>
          </div><br/>
          <h6>What is Included?</h6>
      </div>
      <div class="col-sm">
          <div class="d-flex justify-content-center">
            <div class="circle shadow"><img src="./images/checklist.png" width="36"/></div>
          </div><br/>
          <h6>View Sample</h6>
      </div>
    </div>
  </div><br/><br/>
  <button class="p-2 border-0" style="background-color:#fe7f10;color:white" onclick="toTop()"><b>GET GST REGISTRATION</b></button>
</div>
<div class="container p-4" style="text-align:center">
  <div class="row g-4">
    <div class="col-6">
      <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
        <img src="./images/gst_1.svg" /><br/><br/>
        <h6>You can voluntarily apply for GST registration even if your turnover is less than the prescribed limit</h6>
      </div>
    </div>
    <div class="col-6">
      <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
        <img src="./images/gst_2.svg" /><br/><br/>
        <h6>GST registration does not have an expiry date and does not require renewal</h6>
      </div>
    </div>
    <div class="col-6">
      <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
        <img src="./images/gst_3.svg" /><br/><br/>
        <h6>Once you have a GST registration, it is mandatory to file GST returns</h6>
      </div>
    </div>
    <div class="col-6">
      <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
        <img src="./images/gst_4.svg" /><br/><br/>
        <h6>GST registration is highly preferred while conducting business with GST-registered businesses.</h6>
      </div>
    </div>
  </div>
</div>
<div class="p-1" style="background-color:#fe7f10"></div>
<div class="p-4" style="background-color:#f2f2f2;text-align:center">
  <h5><b>FAQ's</b></h5>
</div>
<div style="padding:60px">
  <div class="row justify-content-evenly">
      <div class="col-4" style="border:1px solid #fe7f10;padding:20px;cursor: pointer;" data-bs-toggle="collapse" href="#collapseExample"><li class="faq">Are all goods and services taxable under GST?</li>
        <div class="collapse" id="collapseExample"><br/>Supplies of all goods and services are taxable except alcoholic liquor for human consumption.</div>
      </div>
      <div class="col-4" style="border:1px solid #fe7f10;padding:20px;cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#collapseExample1"><li class="faq">Are the transaction in securities taxable under GST?</li>
        <div class="collapse" id="collapseExample1"><br/>Securities are excluded from the definition of goods and services. Hence, the transaction in securities is not taxable under GST.</div>
      </div>
  </div><br/>
  <div class="row justify-content-evenly">
      <div class="col-4" style="border:1px solid #fe7f10;padding:20px;cursor: pointer;" data-bs-toggle="collapse" href="#collapseExample2"><li class="faq">How are imports being taxed under GST?</li>
        <div class="collapse" id="collapseExample2"><br/>Imports of goods and services are treated as interstate supplies and IGST is levied on import of goods and services into the country.<br/>
          <ul>
            <li>If SGST is accrued to the state, the incidence tax will consider destination principle and the tax revenue where the imported goods and services are consumed.</li>
            <li>Full and complete set-off is available on the GST paid on import on goods and services.</li>
          </ul>
        </div>
      </div>
      <div class="col-4" style="border:1px solid #fe7f10;padding:20px;cursor: pointer;" data-bs-toggle="collapse" href="#collapseExample3"><li class="faq">How are exports treated under GST?</li>
        <div class="collapse" id="collapseExample3"><br/><br/>Exports are treated as zero-rated supplies. No tax is payable on exports of goods or services. However, credit of input tax credit is available.<br/>
          <ul>
            <li>The exporter has an option to either pay tax on the output and claim refund of IGST</li>
          OR
            <li>He can export under the bond of without payment of IGST and later claim a refund of Input Tax Credit (ITC)</li>
          </ul>
        </div>
      </div>
  </div><br/>
</div>
<!-- Modal -->
<div class="modal fade" id="callModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border:1px solid #fe7f10">
      <div class="modal-header">
        <div class="circleModal"><img src="./images/call.png" width="16px"/></div>
        <h6 class="modal-title" id="exampleModalLabel" style="margin-left:10px"><b>Contact an Expert</b></h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row row-cols-lg-auto g-3 align-items-center">
          <div class="col-12">
            <input type="text" class="form-control" id="autoSizingInput" placeholder="Email Id">
          </div>
          <div class="col-12">
            <div class="input-group">
              <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Whatsapp / Mobile number *">
            </div>
          </div>
          <div class="col-12">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="I have a question regarding GST Registration"></textarea>
          </div>
          <div class="col-12">
            <button class="btn" style="width:100%;background-color:#fe7f10;color:white;font-weight:bolder">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="includedModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border:1px solid #fe7f10">
      <div class="modal-header">
        <div class="circleModal"><img src="./images/rightwrong.png" width="16px"/></div>
        <h6 class="modal-title" id="exampleModalLabel" style="margin-left:10px"><b>GST Registration Service Inclusions and Exclusions</b></h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6 style="color:#fe7f10"><b>Inclusions</b></h6>
          <ul>
            <li>GST registration.</li>
            <li>Information on the process.</li>
          </ul>          
        <h6 style="color:#fe7f10"><b>Exclusions</b></h6>
          <ul>
            <li>Follow-ups with the associated government department.</li>
            <li>Digital Signature Certificate (DSC) if required shall be charged extra.</li>
            <li>Filing of GST returns.</li>
          </ul>
      </div>
    </div>
  </div>
</div>
<script>
  function chover(element) {element.setAttribute('src', './images/checkedHover.png');}
  function cunhover(element) {element.setAttribute('src', './images/checked.png');}

  function whover(element) {element.setAttribute('src', './images/cancelHover.png');}
  function wunhover(element) {element.setAttribute('src', './images/cancel.png');}

  function bankAcc(){
    document.getElementById('eligibility').style.display = 'none';
    document.getElementById('bank').style.display = 'block';
  }

  function openPan(){
    document.getElementById('bank').style.display = 'none';
    document.getElementById('pan').style.display = 'block';
  }

  function openAdd(){
    document.getElementById('pan').style.display = 'none';
    document.getElementById('add').style.display = 'block';
  }

  function closebank(){
    document.getElementById('bank').style.display = 'none';
    document.getElementById('wrong1').style.display = 'block';
  }
  function closepan(){
    document.getElementById('pan').style.display = 'none';
    document.getElementById('wrong2').style.display = 'block';
  }
  function closeadd(){
    document.getElementById('add').style.display = 'none';
    document.getElementById('wrong3').style.display = 'block';
  }

  function toTop(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  }
</script>
<?php
include('Footer/footer.php');
?>