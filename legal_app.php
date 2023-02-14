<?php
include('Navbar/nav.php');
?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    *{
        font-family: 'Montserrat', sans-serif;
    }

    .progresses{
      display: flex;
      align-items: center;
   }

   .line{
      width: 40px;
      height: 6px;
      background: lightgrey;
   }

   .steps{
    display: flex;
    background-color: lightgrey;
    color: #fff;
    font-size: 12px;
    width: 20px;
    height: 20px;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
   }

</style>
<div style="background-color:#FFE7D2">
  <div class="container">
    <div class="row">
      <div class="col-6 p-5">
        <h2 style="color:#fe7f10"><b>LEGAL COMPLIANCES</b></h2><br/>
        <h6><b>Learn all about legal compliances for businesses: Which ones do you need to apply for and how to do it</b>
        </h6><br/>
        <h6><b>Get in 30 Days <span style="font-size:20px;color:#fe7f10">@  590</span></b></h6>
      </div>
      <div class="col-6 p-2">
        <div style="text-align:center;background-color:white;border:2px solid #fe7f10;">
          <div style="background-color:#fe7f10;padding:10px">
            <h5 style="color:white"><b>Discover licences & solutions best-suited for your business</b></h5>
          </div><br/>
          <div id="selecBusi">
            <h5><b>Select Stage</b></h5><br/>
            <div class="d-flex justify-content-evenly">
              <div style="cursor:pointer">
                <img src="./images/legal1.svg" onclick="startBus(this);" id="start"/><br/><br/>
                <input class="form-check-input" type="checkbox" value="" id="startCheck"/>
                <h6 id="startText"><b>Starting a Business</b></h6>
              </div>
              <div style="cursor:pointer">
                <img src="./images/legal2.svg" onclick="existBus(this);" id="exist"/>
                <input class="form-check-input" type="checkbox" value="" id="existCheck"/>
                <br/><br/><h6 id="existText"><b>Existing Business</b></h6>
              </div>
            </div><br/>
            <button id="continueBtn" class="p-2 border-0" onclick="nextStep()" disabled><b>Continue</b></button><br/><br/>
          </div>
          <div id="selecBusiNext" style="display:none">
            <h5><b>Do you know what you are looking for?</b></h5><br/>
            <div class="d-flex justify-content-evenly">
              <div style="cursor:pointer">
                <img src="./images/checked.png" id="tick" onclick="checkClick(this)" /><br/><br/>
                <h6 id="yes"><b>Yes</b></h6>
              </div>
              <div style="cursor:pointer">
                <img src="./images/cancel.png" id="wrong" onclick="cancelClick(this)"/>
                <br/><br/><h6 id="no"><b>No</b></h6>
              </div>
            </div><br/>
            <button onclick="backBtn()" class="p-2" style="border:2px solid #76287C;background-color:white"><b>Back</b></button>  
            <button id="continueBtn1" onclick="nextLoc()" class="p-2 border-0" disabled><b>Continue</b></button><br/><br/>
          </div>
          <div id="selectLoc" style="display:none">
            <h5><b>Select Location</b></h5><br/>
            <div class="d-flex justify-content-evenly">
              <div style="cursor:pointer">
                <img src="./images/state.svg" id="state" onclick="stateClick(this)" /><br/><br/>
                <h6 id="stateText"><b>Maharashtra</b></h6>
              </div>
              <div style="cursor:pointer">
                <img src="./images/location.svg" id="loc" onclick="locationClick(this)"/>
                <br/><br/><h6 id="locationText"><b>Another State</b></h6>
              </div>
            </div><br/>
            <button onclick="backBtn1()" class="p-2" style="border:2px solid #76287C;background-color:white"><b>Back</b></button>  
            <button onclick="nextCat()" id="continueBtn2" class="p-2 border-0" disabled><b>Continue</b></button><br/><br/>
          </div>
          <div id="selectCat" style="display:none">
            <h5><b>Select Business Category</b></h5><br/>
            <div class="d-flex justify-content-evenly">
              <div style="cursor:pointer">
                <img src="./images/foodCat.svg" id="food" onclick="foodClick(this)" /><br/><br/>
                <h6 id="foodText"><b>Food Business</b></h6>
              </div>
              <div style="cursor:pointer">
                <img src="./images/otherCat.svg" id="other" onclick="otherClick(this)"/>
                <br/><br/><h6 id="otherText"><b>Other Business</b></h6>
              </div>
            </div><br/>
            <button onclick="backBtn2()" class="p-2" style="border:2px solid #76287C;background-color:white"><b>Back</b></button> <br/><br/> 
          </div>
          <div class="container d-flex justify-content-center align-items-center">
            <div class="progresses">
              <div class="steps" style="background-color: greenyellow"></div>
              <span class="line" id="line1"></span>
              <div class="steps" id="step1"></div>
              <span class="line" id="line2"></span>
              <div class="steps" id="step2"></div>
              <span class="line" id="line3"></span>
              <div class="steps" id="step3"></div>
            </div>    
          </div>
          <br/>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="servicesStart" style="display:none">
  Shop Act
</div>
<div id="servicesExist" style="display:none">
  Pvt
</div>
<script>

   var startCheckBusiness = document.getElementById('startCheck');
   var existCheckBusiness = document.getElementById('existCheck');

  function startBus(element) {
    element.setAttribute('src', './images/legalhover1.svg');
    document.getElementById('exist').src = './images/legal2.svg';
    document.getElementById('startText').style.color = '#6348b5';
    document.getElementById('existText').style.color = 'black';
    document.getElementById('continueBtn').disabled = false;
    document.getElementById('continueBtn').style.backgroundColor='#76287C';
    document.getElementById('continueBtn').style.color='white';
    startCheckBusiness.checked = true;
    existCheckBusiness.checked = false;
  }

  function existBus(element) {
    element.setAttribute('src', './images/legalhover2.svg');
    document.getElementById('start').src = './images/legal1.svg';
    document.getElementById('existText').style.color = '#6348b5';
    document.getElementById('startText').style.color = 'black';
    document.getElementById('continueBtn').disabled = false;
    startCheckBusiness.checked = false;
    existCheckBusiness.checked = true;
  }
  function checkClick(element) {
    document.getElementById('wrong').src = './images/cancel.png';
    element.setAttribute('src', './images/checkClick.png');
    document.getElementById('yes').style.color = '#76287C';
    document.getElementById('no').style.color = 'black';
    document.getElementById('continueBtn1').style.display='none';
    if(startCheckBusiness.checked == true){
      document.getElementById('servicesStart').style.display='block';
      document.getElementById('servicesExist').style.display='none';
    }else if(existCheckBusiness.checked == true){
      document.getElementById('servicesStart').style.display='none';
      document.getElementById('servicesExist').style.display='block';}
  }

  function cancelClick(element) {
    document.getElementById('tick').src = './images/checked.png';
    element.setAttribute('src', './images/removeClick.png');
    document.getElementById('yes').style.color = 'black';
    document.getElementById('no').style.color = '#76287C';
    document.getElementById('continueBtn1').style.display='inline-block';
    document.getElementById('continueBtn1').disabled = false;
    document.getElementById('continueBtn1').style.backgroundColor='#76287C';
    document.getElementById('continueBtn1').style.color='white';}

  function nextStep(){
    document.getElementById('selecBusi').style.display = 'none';
    document.getElementById('selecBusiNext').style.display = 'block';
    document.getElementById('step1').style.backgroundColor = 'greenyellow';
    document.getElementById('line1').style.backgroundColor = 'greenyellow';
  }

  function backBtn(){
      document.getElementById('selecBusiNext').style.display = 'none';
      document.getElementById('selecBusi').style.display = 'block';
      document.getElementById('step1').style.backgroundColor = 'lightgrey';
      document.getElementById('line1').style.backgroundColor = 'lightgrey';
      document.getElementById('tick').src = './images/checked.png';
      document.getElementById('wrong').src = './images/cancel.png';
      document.getElementById('yes').style.color = 'black';
      document.getElementById('no').style.color = 'black';
      document.getElementById('servicesStart').style.display='none';
      document.getElementById('servicesExist').style.display='none';
    }
    function backBtn1(){
      document.getElementById('selectLoc').style.display = 'none';
      document.getElementById('selecBusiNext').style.display = 'block';
      document.getElementById('step2').style.backgroundColor = 'lightgrey';
      document.getElementById('line2').style.backgroundColor = 'lightgrey';
    }
    function backBtn2(){
      document.getElementById('selectCat').style.display = 'none';
      document.getElementById('selectLoc').style.display = 'block';
      document.getElementById('step3').style.backgroundColor = 'lightgrey';
      document.getElementById('line3').style.backgroundColor = 'lightgrey';
    }

    function stateClick(element){
      document.getElementById('loc').src = './images/location.svg';
      element.setAttribute('src', './images/stateSelected.svg');
      document.getElementById('locationText').style.color='black';
      document.getElementById('stateText').style.color='#76287C';
      document.getElementById('continueBtn2').disabled = false;
      document.getElementById('continueBtn2').style.backgroundColor='#76287C';
    document.getElementById('continueBtn2').style.color='white';
    }
    function locationClick(element){
      document.getElementById('state').src = './images/state.svg';
      element.setAttribute('src', './images/locationSelected.svg');
      document.getElementById('stateText').style.color='black';
      document.getElementById('locationText').style.color='#76287C';
      document.getElementById('continueBtn2').disabled = false;
      document.getElementById('continueBtn2').style.backgroundColor='#76287C';
    document.getElementById('continueBtn2').style.color='white';
      }

      function foodClick(element){
      document.getElementById('other').src = './images/otherCat.svg';
      element.setAttribute('src', './images/foodClick.svg');
      document.getElementById('otherText').style.color='black';
      document.getElementById('foodText').style.color='#76287C';
    }
    function otherClick(element){
      document.getElementById('food').src = './images/foodCat.svg';
      element.setAttribute('src', './images/otherClick.svg');
      document.getElementById('foodText').style.color='black';
      document.getElementById('otherText').style.color='#76287C';
      }

  function nextLoc(){
    document.getElementById('selecBusiNext').style.display = 'none';
    document.getElementById('selectLoc').style.display = 'block';
    document.getElementById('step2').style.backgroundColor = 'greenyellow';
    document.getElementById('line2').style.backgroundColor = 'greenyellow';
    }

  function nextCat(){
    document.getElementById('selectLoc').style.display = 'none';
    document.getElementById('selectCat').style.display = 'block';
    document.getElementById('step3').style.backgroundColor = 'greenyellow';
    document.getElementById('line3').style.backgroundColor = 'greenyellow';
  }
</script>
<?php
include('Footer/footer.php');
?>