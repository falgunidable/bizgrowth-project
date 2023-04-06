<?php
include('../../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
include(ROOT_FOLDER.'authentication/login.php');
?>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
    a, a:hover {
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
        border: 2px solid #E8E8E8;
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
        border: 2px solid #76287C;
    }
    .gst:hover {
        cursor: pointer;
        background-color: #76287C !important;
        border: none;
        color: white !important;
    }
    .list {
        line-height: 2.0;
        list-style-type: none;
        list-style-image: url("../images/checked.png");
    }
    #continue:hover {
        cursor: pointer;
        background-color: #fe7f10 !important;
        border: none;
        color: white !important;
    }
</style>
<body>
    <div class="text-white fw-bold fs-5" style="padding: 10px 10px 10px 120px;background-color:#76287C;text-align:left">Social Media Management</div>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-7">
                <a class="fst-italic" onclick="history.back()" style="cursor:pointer;color:#76287C">
                    <b>Home / Services</b>
                </a><br/><br/>
                <div class="p-3" style="border:2px solid #76287C;border-radius:10px">
                    <h6 class="fs-5 fw-bold" style="color:#76287C">About Social Media Management</h6><br/>
                    <p>The Social Media Management service (of 1 month) and package (of 3 months) offer expert support for your business’ social media accounts. 
                        Your profiles are managed by professionals and optimised for maximum visibility.</p>
                        <p>
                        At our company, we believe in providing transparent and efficient services to our clients. We keep you informed and up-to-date on your social media presence with regular reports and analysis. 
                        Our team stays up-to-date with the latest social media trends and algorithms to ensure that your content is always optimized for maximum engagement.
                        </p>
                    <b class="fs-6" style="color:#76287C">Note:</b> Social Media Management covers any one channel of your choice – Instagram or Facebook. 
                        The selected channel will be managed for the offered period of 1 month (service) or 3 months (package).
                </div><br/>
                <div class="p-3" style="border:2px solid #76287C;border-radius:10px">
                    <h6 class="fs-5 fw-bold" style="color:#76287C">Benefits of Social Media Management</h6><br/>
                    <ul>
                        <li>Generate unique, relevant and consistent content across social media platforms</li>
                        <li>Enjoy expert management of activities such as posting and boosting</li>
                        <li>Improve visibility among potential customers and broaden your client base</li>
                        <li>Create and maintain brand identity</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 p-0" style="border:2px solid #76287C;border-radius:10px">
                <div class="text-white fw-bold p-2" style="background-color:#76287C;border-radius:5px 5px 0px 0px">Social Media Management Offerings</div>
                <form class="p-0">
                <div class="container">
                    <div class="row p-5" style="border-bottom:2px solid #76287C">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                            <label class="form-check-label" for="flexRadioDefault1" style="color:#76287C">
                                <b>1-Month Service</b>
                            </label><br/><br/><br/>
                            <h6><i class='far fa-clock' style='color:#76287C;font-size:16px'></i> Valid for <span class="fw-bold" style="color:#76287C">1 month</span></h6>
                            <h6>@ <span class="fw-bold" style="color:#76287C">₹ 5,310</span> (Inclusive of GST)</h6>
                        </div><br/><br/>
                    </div>
                    <div class="row p-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                            <label class="form-check-label" for="flexRadioDefault1" style="color:#76287C">
                                <b>3-Months Package</b>
                            </label><br/><br/><br/>
                            <h6><i class='far fa-clock' style='color:#76287C;font-size:16px'></i> Valid for <span class="fw-bold" style="color:#76287C">3 months</span></h6>
                            <h6>@ <span style="color:#76287C" class="fw-bold">₹ 10,310</span> (Inclusive of GST)</h6>
                        </div>
                        <input id="continue" class="p-1 fw-bold" type="submit" value="CONTINUE" style="margin-top:50px;background-color:transparent;border-radius:10px"/>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="p-1" style="background-color:#fe7f10"></div>
    <div class="p-3" style="background-color:#f2f2f2;text-align:center">
        <h5>
            <b>Details about Social Media Marketing</b>
        </h5>
    </div>
    <div style="padding:40px;">
        <div class="container">
            <div class="row d-flex justify-content-evenly" style="text-align:center">
                <div class="col-sm-2">
                    <a href="./social_checklist">
                        <div class="d-flex justify-content-center">
                            <div class="circle shadow"><img src="<?php echo BASEURL ?>images/listMedia.png"/></div>
                        </div><br/>
                        <h6>Checklist</h6>
                    </a>
                </div>
                <div class="col-sm-2" data-bs-toggle="modal" data-bs-target="#callModal">
                    <div class="d-flex justify-content-center">
                        <div class="circle shadow"><img src="<?php echo BASEURL ?>images/callMedia.png"/></div>
                    </div><br/>
                    <h6>Call Expert</h6>
                </div>
                <div class="col-sm-2" data-bs-toggle="modal" data-bs-target="#includedModal">
                    <div class="d-flex justify-content-center">
                        <div class="circle shadow" style="padding:13px"><img src="<?php echo BASEURL ?>images/includeMedia.png" width="40"/></div>
                    </div><br/>
                    <h6>What is Included?</h6>
                </div>
            </div>
        </div><br/><br/>
    </div>
    <div class="p-1" style="background-color:#fe7f10"></div>
    <div class="p-3" style="background-color:#f2f2f2;text-align:center">
        <h5>
            <b>FAQ's</b>
        </h5>
    </div>
    <div style="padding:60px">
        <div class="row justify-content-evenly">
            <div
                class="col-4"
                style="border:1px solid #76287C;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                href="#collapseExample">
                <li class="faq">How can I avail social media management after the end of these 3 months?</li>
                <div class="collapse" id="collapseExample"><br/>You can either avail this package again (for 3 months) or take up the individual service which is available for 1 month.</div>
            </div>
            <div
                class="col-4"
                style="border:1px solid #76287C;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                data-bs-target="#collapseExample1">
                <li class="faq">Do the service charges include boosting of ads?</li>
                <div class="collapse" id="collapseExample1"><br/>Yes, a total amount of Rs. 600 per month is included in the fee for the purpose of boosting ads.</div>
            </div>
        </div><br/>
        <div class="row justify-content-evenly">
            <div
                class="col-4"
                style="border:1px solid #76287C;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                href="#collapseExample2">
                <li class="faq">Does this service include business promotion on WhatsApp?</li>
                <div class="collapse" id="collapseExample2"><br/>
                    This service focuses on Facebook or Instagram. For WhatsApp and Google My Business marketing, explore our Online Starter Pack service<br/>
                </div>
            </div>
            <div
                class="col-4"
                style="border:1px solid #76287C;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                href="#collapseExample3">
                <li class="faq">Does social media management improve customer engagement?</li>
                <div class="collapse" id="collapseExample3"><br/><br/>Yes, by creating interesting and relevant content, you will be able to establish a strong customer base.<br/>
                </div>
            </div>
        </div><br/>
    </div>
    <?php
    include(ROOT_FOLDER.'Footer/footer.php');
    ?>
    <div
        class="modal fade"
        id="callModal"
        tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border:1px solid #fe7f10">
                <div class="modal-header">
                    <div class="circleModal"><img src="<?php echo BASEURL ?>images/call.png" width="16px"/></div>
                    <h6 class="modal-title" style="margin-left:10px">
                        <b>Contact an Expert</b>
                    </h6>
                </div>
                <div class="modal-body">
                    <form class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Email Id">
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Whatsapp / Mobile number *">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea
                                class="form-control"
                                rows="5"
                                placeholder="Question (25 to 250 Characters) *"></textarea>
                        </div>
                        <div class="col-12">
                            <button
                                class="btn"
                                style="width:100%;background-color:#fe7f10;color:white;font-weight:bolder">Submit</button>
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
            <div class="modal-content" style="border:2px solid #76287C">
                <div class="modal-header">
                    <div class="circleModal"><img src="<?php echo BASEURL ?>images/includeMedia.png" width="16px"/></div>
                    <h6 class="modal-title" style="margin-left:0px">
                        <b>Social Media Management Inclusions and Exclusions</b>
                    </h6>
                </div>
                <div class="modal-body">
                    <h6 style="color:#76287C">
                        <b>Inclusions</b>
                    </h6>
                    <ul>
                        <li>Creating/enhancing social media pages.</li>
                        <li>Creating monthly campaign plans.</li>
                        <li>Creating & uploading 2 posts per week (a total of 8 posts).</li>
                        <li>Paid promotions for posts.</li>
                        <li>Royalty-free stock images for posts.</li>
                        <li>3 posts boosted by social media experts.</li>
                        <li>Monthly ad performance report.</li>
                    </ul>
                    <h6 style="color:#76287C">
                        <b>Exclusions</b>
                    </h6>
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
</body>