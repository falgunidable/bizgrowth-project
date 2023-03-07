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
        border: 2px solid #fe7f10;
    }
    .udyam:hover {
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
    /* .tick {
        list-style-image: url(BASEURL."images/checkedBullet.png");
    } */
    .row input, .row select, label {
        font-size: 14px;
    }
</style>
<body>
    <div style="background-color:#FFE7D2">
        <div class="container" style="position: relative;">
            <div class="p-5">
                <div class="row">
                    <div class="col-md-6">
                        <h2 style="color:#fe7f10">
                            <b>UDYAM REGISTRATION</b>
                        </h2>
                    </div>
                    <div class="col-md-4">
                        <b>( Get in 7 to 8 days
                            <span style="font-size:20px;color:#fe7f10">@ 590</span>
                            )</b>
                    </div>
                </div>
                <br/>
                <h6>
                    <b>Udyam Registration is a new and simplified process that helps your business get the identity of an MSME.<br/><br/>
                    It is mandatory only if you want to avail the Government schemes launched specially for Micro, Small and Medium Enterprises.</b><br/>
                </h6>
            </div>
            <div style="text-align:center;padding:20px 10px 30px 10px">
                <?php if(isset($_SESSION['username'])){?>
                <button
                    type="button"
                    class="udyam p-2"
                    data-bs-toggle="modal"
                    data-bs-target="#gstFormModal"
                    style="background-color:transparent;border-radius:10px">
                    <b>UDYAM REGISTRATION</b>
                    </button>
                <?php }else { ?>
                <button
                    type="button"
                    class="udyam p-2"
                    data-bs-toggle="modal"
                    data-bs-target="#loginModal"
                    style="background-color:transparent;border-radius:10px">
                    <b>UDYAM REGISTRATION</b>
                </button>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="p-1" style="background-color:#fe7f10"></div>
    <div class="p-4" style="background-color:#f2f2f2;text-align:center">
        <h5>
            <b>Details about Udyam Registration</b>
        </h5>
    </div>
    <div style="text-align:center;padding:40px;">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <a href="./udyam_checklist">
                        <div class="d-flex justify-content-center">
                            <div class="circle shadow"><img src="../images/list.png"/></div>
                        </div><br/>
                        <h6>Checklist</h6>
                    </a>
                </div>
                <div class="col-sm" data-bs-toggle="modal" data-bs-target="#callModal">
                    <div class="d-flex justify-content-center">
                        <div class="circle shadow"><img src="../images/call.png"/></div>
                    </div><br/>
                    <h6>Call Expert</h6>
                </div>
                <div class="col-sm">
                    <div id="video" class="d-flex justify-content-center">
                        <div class="circle shadow" style="padding-left:20px"><img src="../images/play.png"/></div>
                    </div><br/>
                    <h6>View Video</h6>
                </div>
                <div class="col-sm" data-bs-toggle="modal" data-bs-target="#includedModal">
                    <div class="d-flex justify-content-center">
                        <div class="circle shadow" style="padding:13px"><img src="../images/rightwrong.png" width="40"/></div>
                    </div><br/>
                    <h6>What is Included?</h6>
                </div>
                <div class="col-sm" data-bs-toggle="modal" data-bs-target="#viewsampleModal">
                    <div class="d-flex justify-content-center">
                        <div class="circle shadow"><img src="../images/checklist.png" width="36"/></div>
                    </div><br/>
                    <h6>View Sample</h6>
                </div>
            </div>
        </div><br/><br/>
    </div>
    <div class="container p-4" style="text-align:center">
        <div class="row g-4">
            <div class="col-6">
                <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
                    <img src="../images/gst_1.svg"/><br/><br/>
                    <h6>Only existing businesses are eligible</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
                    <img src="../images/gst_2.svg"/><br/><br/>
                    <h6>It does not have an expiry date and does not require renewal</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
                    <img src="../images/gst_3.svg"/><br/><br/>
                    <h6>Registration must be updated when your business crosses into another MSME category (Micro to Small, or Small to Medium)</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
                    <img src="../images/gst_4.svg"/><br/><br/>
                    <h6>Classification of businesses as a Medium, Small or Micro Enterprise is based on their turnover and investment</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="p-1" style="background-color:#fe7f10"></div>
    <div class="p-4" style="background-color:#f2f2f2;text-align:center">
        <h5>
            <b>FAQ's</b>
        </h5>
    </div>
    <div style="padding:60px">
        <div class="row justify-content-evenly">
            <div
                class="col-4"
                style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                href="#collapseExample">
                <li class="faq">Is it mandatory to get Udyam Registration?</li>
                <div class="collapse" id="collapseExample"><br/>
                    It is not mandatory to get Udyam Registration. However, you may avail all MSME-related benefits and schemes if you are registered.
                </div>
            </div>
            <div
                class="col-4"
                style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                data-bs-target="#collapseExample1">
                <li class="faq">Can new businesses apply for Udyam Registration?</li>
                <div class="collapse" id="collapseExample1"><br/>
                    No, only existing businesses can apply for Udyam Registration.</div>
            </div>
        </div><br/>
        <div class="row justify-content-evenly">
            <div
                class="col-4"
                style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                href="#collapseExample2">
                <li class="faq">I already had ‘Udyog Aadhaar’, do I still need to get ‘Udyam Registration’?</li>
                <div class="collapse" id="collapseExample2"><br/>
                    Yes, after the 31st of March 2021 ‘Udyog Aadhaar Registration’ has been invalidated.
                </div>
            </div>
            <div
                class="col-4"
                style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                href="#collapseExample3">
                <li class="faq">Can a business have more than one Udyam Registration?</li>
                <div class="collapse" id="collapseExample3"><br/>
                    No, a business cannot have more than one Udyam Registration.
                </div>
            </div>
        </div><br/>
    </div>
</body>
<?php
    include(ROOT_FOLDER.'Footer/footer.php');
?>

<!-- Modal -->
<div
        class="modal fade"
        id="callModal"
        tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border:1px solid #fe7f10">
                <div class="modal-header">
                    <div class="circleModal"><img src="../images/call.png" width="16px"/></div>
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
                                placeholder="I have a question regarding Udyam Registration"></textarea>
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border:1px solid #fe7f10">
                <div class="modal-header">
                    <div class="circleModal"><img src="../images/rightwrong.png" width="16px"/></div>
                    <h6 class="modal-title" style="margin-left:10px">
                        <b>GST Registration Service Inclusions and Exclusions</b>
                    </h6>
                </div>
                <div class="modal-body">
                    <h6 style="color:#fe7f10">
                        <b>Inclusions</b>
                    </h6>
                    <ul>
                        <li>Assistance in applying for Udyam Registration.</li>
                        <li>Information on document requirements.</li>
                        <li>Information on the process.</li>
                        <li>Follow-ups with the associated government department.</li>
                    </ul>
                    <h6 style="color:#fe7f10">
                        <b>Exclusions</b>
                    </h6>
                    <ul>
                        <li>Nil.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>