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
                <h6 id="startText"><b>Starting a Business</b></h6>
              </div>
              <div style="cursor:pointer">
                <img src="./images/legal2.svg" onclick="existBus(this);" id="exist"/>
                <br/><br/><h6 id="existText"><b>Existing Business</b></h6>
              </div>
            </div><br/>
            <button id="continueBtn" class="p-2 border-0" onclick="nextStep()" disabled><b>Continue</b></button><br/><br/>
          </div>
          <div id="selecBusiNext" style="display:none">
            <h5><b>Do you know what you are looking for?</b></h5><br/>
            <div class="d-flex justify-content-evenly">
              <div style="cursor:pointer">
                <img src="./images/legal1.svg" onclick="startBus(this);" id="start"/><br/><br/>
                <h6 id="startText"><b>Starting a Business</b></h6>
              </div>
              <div style="cursor:pointer">
                <img src="./images/legal2.svg" onclick="existBus(this);" id="exist"/>
                <br/><br/><h6 id="existText"><b>Existing Business</b></h6>
              </div>
            </div><br/>
            <button id="continueBtn" class="p-2" style="border:1px solid #fe7f10;background-color:white"><b>Back</b></button>  
            <button id="continueBtn" class="p-2 disabled border-0" disabled><b>Continue</b></button><br/><br/>
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
<script>
  function startBus(element) {
    element.setAttribute('src', './images/legalhover1.svg');
    document.getElementById('exist').src = './images/legal2.svg';
    document.getElementById('startText').style.color = '#6348b5';
    document.getElementById('existText').style.color = 'black';
    document.getElementById('continueBtn').disabled = false;
    document.getElementById('continueBtn').style.backgroundColor='#fe7f10';
    document.getElementById('continueBtn').style.color='white';
  }
  function existBus(element) {
    element.setAttribute('src', './images/legalhover2.svg');
    document.getElementById('start').src = './images/legal1.svg';
    document.getElementById('existText').style.color = '#6348b5';
    document.getElementById('startText').style.color = 'black';
    document.getElementById('continueBtn').disabled = false;
  }
  function nextStep(){
    document.getElementById('selecBusi').style.display = 'none';
    document.getElementById('selecBusiNext').style.display = 'block';
    document.getElementById('step1').style.backgroundColor = 'greenyellow';
    document.getElementById('line1').style.backgroundColor = 'greenyellow';
  }
</script>
<?php
include('Footer/footer.php');
?>