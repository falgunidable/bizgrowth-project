<?php
include('../../db/defineUrl.php');
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
    <div class="text-white fw-bold fs-5" style="padding: 10px 10px 10px 120px;background-color:#7058B9;text-align:left">Social Media Management</div>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-7">
                <a onclick="history.back()" style="cursor:pointer;color:#7058B9">
                    <img src="<?php echo BASEURL ?>images/home.png" width="20px"/><b> Home / Services</b>
                </a><br/><br/>
                <div class="p-3" style="border:2px solid black;border-radius:10px">
                    <h6 class="fs-5 fw-bold" style="color:#7058B9">About</h6><br/>
                    <p>The Social Media Management service (of 1 month) and package (of 3 months) offer expert support for your business’ social media accounts. 
                        Your profiles are managed by professionals and optimised for maximum visibility.</p>
                        <p>
                        At our company, we believe in providing transparent and efficient services to our clients. We keep you informed and up-to-date on your social media presence with regular reports and analysis. 
                        Our team stays up-to-date with the latest social media trends and algorithms to ensure that your content is always optimized for maximum engagement.
                        </p>
                    <b class="fs-6" style="color:#7058B9">Note:</b><br/> Social Media Management covers any one channel of your choice – Instagram or Facebook. 
                        The selected channel will be managed for the offered period of 1 month (service) or 3 months (package).
                </div><br/>
                <div class="p-3" style="border:2px solid black;border-radius:10px">
                    <h6 class="fs-5 fw-bold" style="color:#7058B9">Benefits</h6><br/>
                    <ul class="list">
                        <li> Generate unique, relevant and consistent content across social media platforms</li>
                        <li> Enjoy expert management of activities such as posting and boosting</li>
                        <li> Improve visibility among potential customers and broaden your client base</li>
                        <li> Create and maintain brand identity</li>
                    </ul><br/>
                </div>
            </div>
            <div class="col-md-5 p-0" style="background-color:#7058B9;border-radius:10px">
                <div class="text-white fw-bold p-2 text-center" style="margin-top:30px;border-radius:5px 5px 0px 0px"><h4><b>Social Media Management Packages</b></h4></div>
                <form id="socialmediaForm" class="p-0">
                    <input type="hidden" name="socialform" value="Social Service"/>
                    <div class="container p-5">
                        <div class="pack row p-5 selected-row" onclick="selectPackage(this)">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="servicecharge" checked value="1 month" hidden/>
                                <label class="form-check-label">
                                    <h4><b>1-Month Service</b></h4>
                                </label>
                                <h6><b><i class='far fa-clock'></i> Valid for 1 month</b></h6><br/>
                                <h5 style="color:#7058B9"><span class="fw-bolder"><b>₹ 5,310</b></span> (Inclusive of GST)</h5>
                            </div>
                        </div><br/>
                        <div class="pack row p-5" onclick="selectPackage(this)">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="servicecharge" value="3 month" hidden/>
                                <label class="form-check-label">
                                    <h4><b>3-Months Package</b></h4>
                                </label>
                                <h6><b><i class='far fa-clock'></i> Valid for 3 months</b></h6><br/>
                                <h5 style="color:#7058B9"><span class="fw-bolder"><b>₹ 10,310</b></span> (Inclusive of GST)</h5>
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
        </div><br/><br/>
        <div class="row border border-dark border-2" style="border-radius:20px">
            <div class="col-md-5 p-5 text-white" style="background-color:#7058B9;border-radius:20px 0 0 20px">
                <h4><b>Details about Social Media Marketing</b></h4><br/>
                <ul class="text-white" style="list-style:none">
                    <li class="p-2">
                        <div class="row" data-bs-toggle="modal" data-bs-target="#includedModal" style="cursor:pointer">
                            <div class="col-md-4 circle shadow"><img src="<?php echo BASEURL ?>images/includeMedia.png" width="70"/></div>
                            <h6 class="col-md-8 d-flex align-items-center"><b>What is Included ?</b></h6>
                        </div>
                    </li><br/>
                    <li class="p-2">
                        <div class="row" data-bs-toggle="modal" data-bs-target="#callModal" style="cursor:pointer">
                            <div class="col-md-4 circle shadow"><img src="<?php echo BASEURL ?>images/callMedia.png" width="70"/></div>
                            <h6 class="col-md-8 d-flex align-items-center"><b>Contact an Expert</b></h6>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 p-4" style="border-radius:10px">
                <div class="fw-bold p-2" style="margin-top:30px;border-radius:5px 5px 0px 0px"><h4><b>FAQs</b></h4></div>
                <div class="container">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>How can I avail social media management after the end of these 3 months?</b></h6>
                                <p>You can either avail this package again (for 3 months) or take up the individual service which is available for 1 month.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>Do the service charges include boosting of ads?</b></h6><br/>
                                <p>Yes, a total amount of Rs. 600 per month is included in the fee for the purpose of boosting ads.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>Does this service include business promotion on WhatsApp?</b></h6>
                                <p>This service focuses on Facebook or Instagram. For WhatsApp and Google My Business marketing, explore our Online Starter Pack service</p>
                            </div>
                            </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>Does social media management improve customer engagement?</b></h6>
                                <p>Yes, by creating interesting and relevant content, you will be able to establish a strong customer base.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4" style="display: flex;
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
    <div
        class="modal fade"
        id="callModal"
        tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-dark border-2" style="border-radius:10px">
                <div class="modal-body">
                    <div class="row p-3">
                        <div class="col-md-2">
                            <div class="circleModal"><img src="<?php echo BASEURL ?>images/callMedia.png" width="55px"/></div>
                        </div>
                        <div class="col-md-10">
                            <h5 class="d-flex align-items-center"><b>Contact an Expert</b></h5>
                            <small class="text-muted">Write your queries/ questions to an expert and they’ll return to you with a solution.</small>
                        </div>
                    </div><br/>
                    <form class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <input
                                type="text"
                                class="form-control border-dark border-2 rounded"
                                placeholder="Email Id">
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control border-dark border-2 rounded"
                                    placeholder="Whatsapp / Mobile number *">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea
                                class="form-control border-dark border-2 rounded"
                                rows="5"
                                placeholder="Question (25 to 250 Characters) *"></textarea>
                        </div>
                        <div class="col-12">
                            <button
                                class="btn"
                                style="width:100%;background-color:#5A41A0;color:white;font-weight:bolder">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="includedModal"
        tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-2 border-dark">
                <div class="modal-body">
                    <div class="row p-3">
                        <div class="col-md-1">
                            <div class="circleModal"><img src="<?php echo BASEURL ?>images/includeMedia.png" width="55px"/></div>
                        </div>
                        <div class="col-md-10">
                            <h5 style="margin-top:12px" class="d-flex align-items-center"><b>Social Media Management Inclusions and Exclusions</b></h5>
                        </div>
                    </div>
                    <div class="container px-4">
                        <div class="row gx-4 p-2">
                            <div class="col">
                                <div class="p-3 border border-2 border-success h-100 d-flex flex-column" style="border-radius:20px">
                                    <h6><b>Inclusions</b></h6>
                                    <ul>
                                        <li>Creating/enhancing social media pages.</li>
                                        <li>Creating monthly campaign plans.</li>
                                        <li>Creating & uploading 2 posts per week (a total of 8 posts).</li>
                                        <li>Paid promotions for posts.</li>
                                        <li>Royalty-free stock images for posts.</li>
                                        <li>3 posts boosted by social media experts.</li>
                                        <li>Monthly ad performance report.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 border border-2 border-danger h-100 d-flex flex-column justify-content-center" style="border-radius:20px">
                                    <h6><b>Exclusions</b></h6>
                                    <ul>
                                        <li>Managing communication with your customers (e-mail, SMS, etc.).</li>
                                        <li>Photography or video shoots for your business.</li>
                                        <li>Promoting content on any platform besides the ones selected.</li>
                                        <li>Rechecking each and every content (copy and creative).</li>
                                        <li>More than 2 edits/rework.</li>
                                        <li>Additional/ad-hoc content (as the month’s content is planned in advance).</li>
                                        <li>Lead generation</li>
                                        <li>Daily assistance over call</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>