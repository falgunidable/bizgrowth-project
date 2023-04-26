<?php
// if(!session_id()) session_start();
include('../../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
include(ROOT_FOLDER.'authentication/login.php');

if (isset($_SESSION['notification'])) {
	$message = $_SESSION['notification'];
	$type = $_SESSION['notification_type'];
	// display notification using the appropriate CSS class
    echo '<div style="position:relative" class="d-flex justify-content-center"><div style="position:absolute" class="p-3 fst-italic notification ' . $type . '">' . $message . '</div></div>';
	// unset session variables to prevent displaying the notification multiple times
	unset($_SESSION['notification']);
	unset($_SESSION['notification_type']);
}
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
    .gst:hover {
        cursor: pointer;
        background-color: #372863  !important;
        color:white !important;
    }
    .list {
        line-height: 2.0;
        list-style-type: none;
        list-style-image: url("<?php echo BASEURL ?>images/checked.png");
    }
    .row input, .row select, label {
        font-size: 14px;
    }
    .notification {
        border-radius: 5px;
        background-color: #333;
	    color: #fff;
        padding: 10px;
        animation: fadeOut 5s ease-out forwards;
        z-index: 9999;
    }

    @keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
    }

    .notification.success {
        background-color: #4CAF50;
    }

    .notification.error {
        background-color: #f44336;
    }
    .form-group {
        position: relative;
    }
    .errormessage {
    display: none;
    font-size: 12px;
    color: red;
    margin-top: 5px;
    }

</style>
<body>
    <div>
        <div class="container p-4" style="position: relative;">
            <a onclick="history.back()" style="cursor:pointer;color:#7058B9">
                <img src="<?php echo BASEURL ?>images/home.png" width="20px"/><b> Home / Services</b>
            </a><br/><br/>
            <div class="row border border-dark border-2" style="border-radius:20px">
                <div class="col-md-8 p-5">
                    <h2><b>GST REGISTRATION</b></h2>
                    <br/>
                    <h6 style="line-height: 1.7;">
                        <b>GST Registration enables your business to charge and/or collect GST (Goods
                            and Services Tax).</b><br/><br/>
                            The Goods & Services Tax (GST) is a value-added tax levied on most goods and
                            services sold for domestic use.
                    </h6>
                </div>
                <div class="col-md-4 p-5" style="background-color:#7058B9;border-radius:0 15px 15px 0;">
                    <div class="bg-white p-4" style="border-radius:10px;box-shadow: 5px 5px 10px #f2f2f2">
                        <h5><b>GST REGISTRATION</b></h5>    
                        <h6><b>Get in 30 Days</b></h6><br/>
                        <h4 style="color:#7058B9"><b>₹ 590</b></h4>
                    </div><br/><br/>
                    <div style="text-align:center">
                        <?php if(isset($_SESSION['username'])){?>
                        <button
                            type="button"
                            class="col-md-10 gst p-1 text-white border-0"
                            data-bs-toggle="modal"
                            data-bs-target="#gstFormModal"
                            style="background-color:#5A41A0;border-radius:10px">
                            <h5><b>CONTINUE</b></h5>
                            </button>
                        <?php }else { ?>
                        <button
                            type="button"
                            class="col-md-10 gst p-1 text-white border-0"
                            data-bs-toggle="modal"
                            data-bs-target="#loginModal"
                            style="background-color:#5A41A0;border-radius:10px">
                            <h5><b>CONTINUE</b></h5>
                        </button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-4">
        <div class="row border border-dark border-2" style="border-radius:20px">
            <div class="col-md-5 p-5 text-white" style="background-color:#7058B9;border-radius:20px 0 0 20px">
                <h4><b>Details about GST Registration</b></h4><br/>
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
                    </li><br/>
                    <li class="p-2">
                        <div class="row" data-bs-toggle="modal" data-bs-target="#viewsampleModal" style="cursor:pointer">
                            <div class="col-md-4 circle shadow"><img src="<?php echo BASEURL ?>images/checklist.png" width="70"/></div>
                            <h6 class="col-md-8 d-flex align-items-center"><b>View Sample</b></h6>
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
                                <h6><b>Are all goods and services taxable under GST?</b></h6>
                                <p>Supplies of all goods and services are taxable except alcoholic liquor for human consumption.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>Are the transaction in securities taxable under GST?</b></h6>
                                <p>Securities are excluded from the definition of goods and services. Hence, the transaction in securities is not taxable under GST.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>How are imports being taxed under GST?</b></h6>
                                <p>Imports of goods and services is levied by IGST into the country.</p>
                                <ul style="list-style-type:circle">
                                    <li>If SGST is accrued to the state, the incidence tax will consider destination
                                        principle and the tax revenue where the imported goods and services are
                                        consumed.</li>
                                    <li>Full and complete set-off is available on the GST paid on import on goods
                                        and services.</li>
                                </ul>
                            </div>
                            </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>How are exports treated under GST?</b></h6>
                                <p>Exports are treated as zero-rated supplies. No tax is payable on exports of goods or services.</p>
                                <ul style="list-style-type:circle">
                                    <li>The exporter has an option to either pay tax on the output and claim refund
                                        of IGST</li>
                                    OR
                                    <li>He can export under the bond of without payment of IGST and later claim a
                                        refund of Input Tax Credit (ITC)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-4" style="text-align:center">
        <div class="row g-4">
            <div class="col-6">
                <div class="p-5 border border-2 border-dark" style="border-radius:10px;">
                    <img src="<?php echo BASEURL ?>images/gst_1.png" width="100"/><br/><br/>
                    <h6>You can voluntarily apply for GST registration even if your turnover is less
                        than the prescribed limit</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5 border border-2 border-dark" style="border-radius:10px;">
                    <img src="<?php echo BASEURL ?>images/gst_2.png" width="100"/><br/><br/>
                    <h6>GST registration does not have an expiry date and does not require renewal</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5 border border-2 border-dark" style="border-radius:10px;">
                    <img src="<?php echo BASEURL ?>images/gst_3.png" width="100"/><br/><br/>
                    <h6>Once you have a GST registration, it is mandatory to file GST returns</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5 border border-2 border-dark" style="border-radius:10px;">
                    <img src="<?php echo BASEURL ?>images/gst_4.png" width="100"/><br/><br/>
                    <h6>GST registration is highly preferred while conducting business with
                        GST-registered businesses.</h6>
                </div>
            </div>
        </div>
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
                                placeholder="I have a question regarding GST Registration"></textarea>
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
                            <h5 style="margin-top:12px" class="d-flex align-items-center"><b>GST Registration Service Inclusions and Exclusions</b></h5>
                        </div>
                    </div>
                    <div class="container px-4">
                        <div class="row gx-4 p-2">
                            <div class="col">
                                <div class="p-3 border border-2 border-success h-100 d-flex flex-column" style="border-radius:20px">
                                    <h6><b>Inclusions</b></h6>
                                    <ul>
                                        <li>GST registration.</li>
                                        <li>Information on the process.</li>
                                    </ul><br/><br/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 border border-2 border-danger h-100 d-flex flex-column" style="border-radius:20px">
                                    <h6><b>Exclusions</b></h6>
                                    <ul>
                                        <li>Follow-ups with the associated government department.</li>
                                        <li>Digital Signature Certificate (DSC) if required shall be charged extra.</li>
                                        <li>Filing of GST returns.</li>
                                    </ul><br/><br/>
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
                    <iframe src="./gst_sample.pdf" width="100%" height="600px"></iframe>
                </div>
            </div>
        </div>
    </div>
    
   <?php include('./gstservice.php')?>