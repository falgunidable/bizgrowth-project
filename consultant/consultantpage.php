<?php
include('../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
include(ROOT_FOLDER.'authentication/login.php');
?>
<style>
    a, a:hover {
        color: black;
    }
    .circle {
        border-radius: 50%;
        width: 70px;
        height: 70px;
        padding: 0px;
        background: #fff;
        color: #000;
        text-align: center;
        font: 32px Arial, sans-serif;
    }
    .circleModal {
        border-radius: 50%;
        width: 60px;
        height: 60px;
        background: #fff;
        color: #000;
        text-align: center;
        font: 32px Arial, sans-serif;
    }
    .list {
        line-height: 2.0;
        list-style-type: none;
        list-style-image: url("<?php echo BASEURL ?>images/checked.png");
        background-size: 10px 10px
    }
    #continue,#continuebtn{
        background-color:#5A41A0;
        margin-top:30px;
        border-radius:10px
    }
    #continue:hover,#continuebtn:hover  {
        cursor: pointer;
        background-color:#372863;
        border: none;
        color: white !important;
    }
    #customnotification {
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

    #customnotification.success{
    background-color: #2bdb31;
    }
    #customnotification.error{
    background-color: #f44336;
    }
    .pack{
        border-radius:20px;
        background-color:#5A41A0;
    }
    .selected-row,.selected-row:hover{
        background-color:white !important;
        box-shadow: 5px 5px 10px #f2f2f2;
        color:black !important;
    }
    .pack:hover{
        background-color:#372863;
        cursor:pointer;
        color:white;
        box-shadow: none;
    }

</style>
<body>
    <div class="text-white fw-bold fs-5" style="padding: 10px 10px 10px 120px;background-color:#7058B9;text-align:left">EXPERT CONSULTATION</div>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-7">
                <a onclick="history.back()" style="cursor:pointer;color:#7058B9">
                    <img src="<?php echo BASEURL ?>images/home.png" width="20px"/><b> Home / Services</b>
                </a><br/><br/>
                <div class="p-3" style="border:2px solid black;border-radius:10px">
                    <h6 class="fs-5 fw-bold" style="color:#7058B9">About Expert Consultation</h6><br/>
                        <p>Bizgrowth brings years of expertise in various business verticals like operations, management and more. Achieve your business goals effectively with their guidance and knowledge.</p>
                        <b class="fs-6" style="color:#7058B9">Note:</b><br/> 
                        Expert Consultation Service offers you a 1-hour consultation session. However, the package of 3 sessions is valid for 3 months wherein you can meet a maximum of 3 experts for 1 hour per session.
                    <br/><br/>
                    <div class="text-white border-1 border-dark border p-1" style="background-color:#7058B9;">
                        <h6 class="fs-5 fw-bold">Inclusions / Exclusions</h6>
                    </div><br/>
                    <h6><b>Inclusions:</b></h6>
                    <ul class="list">
                        <li>Expert guidance</li>
                        <li>Corrective actions</li>
                    </ul>
                    <h6><b>Exclusions:</b></h6>
                    <ul class="list">
                        <li>Time extension beyond the 1 hour allotted for each session</li>
                        <li>Extra sessions beyond those offered in the package</li>
                        <li>Expert’s on-field contribution</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 p-0" style="background-color:#7058B9;border-radius:10px">
                <div class="text-white fw-bold text-center" style="margin-top:20px;border-radius:5px 5px 0px 0px"><h4><b>Expert Consultation Packages</b></h4></div>
                <form id="socialmediaForm">
                    <input type="hidden" name="expert" value="Expert Consultation"/>
                    <div class="container p-4">
                        <div class="pack row p-3 selected-row" onclick="selectPackage(this)">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="servicecharge" checked value="1 month" hidden/>
                                <label class="form-check-label">
                                    <h5><b>Xpert Consultation (One time)</b></h5>
                                </label>
                                <h6><b><i class='far fa-clock'></i> Valid for 1 day</b></h6>
                                <h6 style="color:#7058B9;margin-top:20px"><span class="fw-bolder h5"><b>₹ 500</b></span> (Taxes as applicable)</h6>
                            </div>
                        </div><br/>
                        <div class="pack row p-3" onclick="selectPackage(this)">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="servicecharge" value="3 month" hidden/>
                                <label class="form-check-label">
                                    <h5><b>Xpert Consultation (3-Session Package) </b></h5>
                                </label>
                                <h6><b><i class='far fa-clock'></i> Valid for 3 months</b></h6>
                                <h6 style="color:#7058B9;margin-top:20px"><span class="fw-bolder h5"><b>₹ 1300</b></span> (Taxes as applicable)</h6>
                            </div>
                        </div><br/>
                        <div class="pack row p-3" onclick="selectPackage(this)">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="servicecharge" value="12 month" hidden/>
                                <label class="form-check-label">
                                    <h5><b> Xpert Coaching</b></h5>
                                </label>
                                <h6><b><i class='far fa-clock'></i> Valid for 1 - 12 months</b></h6>
                                <h6 style="color:#7058B9;margin-top:20px"><span class="fw-bolder h5"><b>₹ 2999 Onwards</b></span> (Taxes as applicable)</h6>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <?php if(isset($_SESSION['email'])){?>
                                <button type="submit" id="continue" class="col-md-8 btn p-2 text-white">CONTINUE</button>
                            <?php }else{ ?>
                                <button id="continuebtn" type="button" class="col-md-8 btn p-2 text-white" data-bs-toggle="modal" data-bs-target="#loginModal">CONTINUE</button>
                            <?php } ?>
                        </div>
                    </div>
                </form>
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
    <?php
    include(ROOT_FOLDER.'Footer/footer.php');
    ?>
    <script>
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

        function toTop(){
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

         $('#continue').on('click', function(event) {
            event.preventDefault();

            $.ajax({
                url: '<?php echo BASEURL ?>db/services_form',
                method: 'POST',
                data: $('#socialmediaForm').serialize(),
                success: function(response) {
                    if (response == 'success') {
                        window.location.href="<?php echo BASEURL ?>payment/";
                    }else{
                        $('#customnotification').removeClass('success').addClass('error').text('Payment Rejected').show();
                        setTimeout(function() {
                            $('#customnotification').hide();
                        }, 3000);
                    }
                }
            });
        });
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
    </script>
</body>