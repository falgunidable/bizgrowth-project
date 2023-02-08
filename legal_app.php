<?php
include('Navbar/nav.php');
?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    *{
        font-family: 'Montserrat', sans-serif;
    }
    .continue:hover{
      background-color:#fe7f10 !important;;
      color:white
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
          <h5><b>Select Stage</b></h5><br/>
          <div class="d-flex justify-content-evenly">
            <div>
              <img src="./images/legal1.svg" onclick="startBus(this);" id="start"/><br/><br/>
              <h6 id="startText"><b>Starting a Business</b></h6>
            </div>
            <div>
              <img src="./images/legal2.svg" onclick="existBus(this);" id="exist"/>
              <br/><br/><h6 id="existText"><b>Existing Business</b></h6>
            </div>
          </div><br/>
          <button class="p-2 disabled border-0"><b>Continue</b></button><br/><br/>
          <div style="padding:0px 10px 0px 10px">
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">90%</div>
            </div><br/>
          </div>
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
  }
  function existBus(element) {
    element.setAttribute('src', './images/legalhover2.svg');
    document.getElementById('start').src = './images/legal1.svg';
    document.getElementById('existText').style.color = '#6348b5';
    document.getElementById('startText').style.color = 'black';
  }
</script>
<?php
include('Footer/footer.php');
?>