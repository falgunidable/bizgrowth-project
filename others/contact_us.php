<?php
include('../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    *{
        font-family: 'Montserrat', sans-serif;
    }
    .goNext {
	width: 150px;
  height: 40px;
	cursor: pointer;
	display: flex;
	align-items: center;
	border: 2px solid #6348b5;
	border-radius: 5px;
	box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
	background: none;
}
.goNext .text {
	transform: translateX(5px);
	color: black;
	font-weight: bold;
}
.goNext .icon{
  position: absolute;
	border:none;
	transform: translateX(105px);
	height: 36px;
	width: 35px;
	display: flex;
	align-items: center;
	justify-content: center;
  background-color: #6348b5;
}
.goNext svg {
	width: 15px;
	fill: white;
  font-weight: bold;
}
.goNext:hover svg {
	fill: white;
}
.goNext:hover .icon{
    width: 35px;
    border-left: none;
    background-color:#fe7f10;
    transform: translateX(105px);
}

</style>
<div>
  <h3 style="padding:40px 0px 0px 100px;font-weight:bolder;">Contact Us</h3>
</div>
<div style="background-color:#F6F6F6">
    <div class="container">
        <div class="row">
            <div class="col-md-6"><br/><br/>
                <div class="row">
                    <div class="col-md-8" style="background-color:#F6F6F6;padding:5px">
                        <b>Address:</b>
                        Row House No. C-101, SwapnaShilp, Five Gardens Soc, near Jagtap Dairy, near Balaji Tyres, Pune, Maharashtra 411017<br/><br/>

                        <b>Phone: </b> +91 8999825013<br/><br/>

                        <b>Mail: </b> info@innobytes.in 
                        <br/><br/>
                    </div>
                </div>
                <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
                <iframe style="border:1px solid lightgrey" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3781.5132301798376!2d73.78209011454439!3d18.59597162171803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRow%20House%20No.%20C-101%2C%20SwapnaShilp%2C%20Five%20Gardens%20Soc%2C%20near%20Jagtap%20Dairy%2C%20near%20Balaji%20Tyres%2C%20Pune%2C%20Maharashtra%20411017!5e0!3m2!1sen!2sin!4v1675943621400!5m2!1sen!2sin" width="520" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6 shadow-lg" style="background-color:white;padding:20px;border:2px solid #6348b5;border-radius:10px">
                <small class="float-end text-danger">*Fields are mandatory</small>
                <h5 style="font-weight:bolder;color:#6348b5;">Fill Details</h5>
                <br/>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First Name*" aria-label="First name" style="border:1px solid #6348b5">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last Name*" aria-label="Last name" style="border:1px solid #6348b5">
                    </div>
                </div><br/>
                <div class="row">
                    <div class="col-2">
                        <input type="text" class="form-control" placeholder="+91" style="border:1px solid #6348b5">
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Whatsapp / Mobile No. *" style="border:1px solid #6348b5">
                    </div>
                </div><br/>
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Email*" style="border:1px solid #6348b5">
                    </div>
                </div><br/>
                <div class="row">
                    <div class="col-12">
                        <textarea type="text" class="form-control" placeholder="Message*" style="border:1px solid #6348b5" rows="4"></textarea>
                    </div>
                    <small class="text-muted float-end">0 of 999 max characters</small>
                </div><br/>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I agree to the terms and conditions and authorise Bizgrowth to contact me on the number provided.</label>
                </div>
                <div>
                    <button class="goNext">
                    <span class='text'>Contact Us</span>
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
<?php
include(ROOT_FOLDER.'Footer/footer.php');
?>