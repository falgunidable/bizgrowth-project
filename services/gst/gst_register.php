<?php
// if(!session_id()) session_start();
include('../../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
include(ROOT_FOLDER.'authentication/login.php');

if (isset($_SESSION['notification'])) {
	$message = $_SESSION['notification'];
	$type = $_SESSION['notification_type'];
	// display notification using the appropriate CSS class
	echo '<div class="p-3 fst-italic notification ' . $type . '">' . $message . '</div>';
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
    .gst:hover {
        cursor: pointer;
        background-color: #76287C !important;
        border: none;
        color: white !important;
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
        width:400px;
        position: fixed;
        top: 40px;
        right: 500px;
        border-radius: 5px;
        background-color: #333;
	    color: #fff;
        padding: 10px;
        text-align: center;
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
    <div style="background-color:#FFE7D2">
        <div class="container" style="position: relative;">
            <div class="p-5">
                <div class="row">
                    <div class="col-md-4">
                        <h2 style="color:#fe7f10">
                            <b>GST REGISTRATION</b>
                        </h2>
                    </div>
                    <div class="col-md-4">
                        <b>( Get in 30 Days
                            <span style="font-size:20px;color:#fe7f10">@ 590</span>
                            )</b>
                    </div>
                </div>
                <br/>
                <h6>
                    <b>GST Registration enables your business to charge and/or collect GST (Goods
                        and Services Tax).<br/><br/>
                        The Goods & Services Tax (GST) is a value-added tax levied on most goods and
                        services sold for domestic use.</b>
                </h6>
            </div>
            <div style="text-align:center;padding:20px 10px 30px 10px">
                <?php if(isset($_SESSION['username'])){?>
                <button
                    type="button"
                    class="gst p-2"
                    data-bs-toggle="modal"
                    data-bs-target="#gstFormModal"
                    style="background-color:transparent;border-radius:10px">
                    <b>GST REGISTER</b>
                    </button>
                <?php }else { ?>
                <button
                    type="button"
                    class="gst p-2"
                    data-bs-toggle="modal"
                    data-bs-target="#loginModal"
                    style="background-color:transparent;border-radius:10px">
                    <b>GST REGISTER</b>
                </button>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="p-1" style="background-color:#fe7f10"></div>
    <div class="p-4" style="background-color:#f2f2f2;text-align:center">
        <h5>
            <b>Details about GST Registration</b>
        </h5>
    </div>
    <div style="text-align:center;padding:40px;">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <a href="./gst_checklist">
                        <div class="d-flex justify-content-center">
                            <div class="circle shadow"><img src="<?php echo BASEURL ?>images/list.png"/></div>
                        </div><br/>
                        <h6>Checklist</h6>
                    </a>
                </div>
                <div class="col-sm" data-bs-toggle="modal" data-bs-target="#callModal">
                    <div class="d-flex justify-content-center">
                        <div class="circle shadow"><img src="<?php echo BASEURL ?>images/call.png"/></div>
                    </div><br/>
                    <h6>Call Expert</h6>
                </div>
                <div class="col-sm" data-bs-toggle="modal" data-bs-target="#includedModal">
                    <div class="d-flex justify-content-center">
                        <div class="circle shadow" style="padding:13px"><img src="<?php echo BASEURL ?>images/include.png" width="40"/></div>
                    </div><br/>
                    <h6>What is Included?</h6>
                </div>
                <div class="col-sm" data-bs-toggle="modal" data-bs-target="#viewsampleModal">
                    <div class="d-flex justify-content-center">
                        <div class="circle shadow"><img src="<?php echo BASEURL ?>images/checklist.png" width="36"/></div>
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
                    <img src="<?php echo BASEURL ?>images/gst_1.svg"/><br/><br/>
                    <h6>You can voluntarily apply for GST registration even if your turnover is less
                        than the prescribed limit</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
                    <img src="<?php echo BASEURL ?>images/gst_2.svg"/><br/><br/>
                    <h6>GST registration does not have an expiry date and does not require renewal</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
                    <img src="<?php echo BASEURL ?>images/gst_3.svg"/><br/><br/>
                    <h6>Once you have a GST registration, it is mandatory to file GST returns</h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
                    <img src="<?php echo BASEURL ?>images/gst_4.svg"/><br/><br/>
                    <h6>GST registration is highly preferred while conducting business with
                        GST-registered businesses.</h6>
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
                <li class="faq">Are all goods and services taxable under GST?</li>
                <div class="collapse" id="collapseExample"><br/><br/>Supplies of all goods and
                    services are taxable except alcoholic liquor for human consumption.</div>
            </div>
            <div
                class="col-4"
                style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                data-bs-target="#collapseExample1">
                <li class="faq">Are the transaction in securities taxable under GST?</li>
                <div class="collapse" id="collapseExample1"><br/>Securities are excluded from
                    the definition of goods and services. Hence, the transaction in securities is
                    not taxable under GST.</div>
            </div>
        </div><br/>
        <div class="row justify-content-evenly">
            <div
                class="col-4"
                style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                href="#collapseExample2">
                <li class="faq">How are imports being taxed under GST?</li>
                <div class="collapse" id="collapseExample2"><br/>Imports of goods and services
                    are treated as interstate supplies and IGST is levied on import of goods and
                    services into the country.<br/>
                    <ul style="list-style-type:circle">
                        <li>If SGST is accrued to the state, the incidence tax will consider destination
                            principle and the tax revenue where the imported goods and services are
                            consumed.</li>
                        <li>Full and complete set-off is available on the GST paid on import on goods
                            and services.</li>
                    </ul>
                </div>
            </div>
            <div
                class="col-4"
                style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                href="#collapseExample3">
                <li class="faq">How are exports treated under GST?</li>
                <div class="collapse" id="collapseExample3"><br/>Exports are treated as
                    zero-rated supplies. No tax is payable on exports of goods or services. However,
                    credit of input tax credit is available.<br/>
                    <ul style="list-style-type:circle">
                        <li>The exporter has an option to either pay tax on the output and claim refund
                            of IGST</li>
                        OR
                        <li>He can export under the bond of without payment of IGST and later claim a
                            refund of Input Tax Credit (ITC)</li>
                    </ul>
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
                                placeholder="I have a question regarding GST Registration"></textarea>
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
                    <div class="circleModal"><img src="<?php echo BASEURL ?>images/include.png" width="16px"/></div>
                    <h6 class="modal-title" style="margin-left:10px">
                        <b>GST Registration Service Inclusions and Exclusions</b>
                    </h6>
                </div>
                <div class="modal-body">
                    <h6 style="color:#fe7f10">
                        <b>Inclusions</b>
                    </h6>
                    <ul>
                        <li>GST registration.</li>
                        <li>Information on the process.</li>
                    </ul>
                    <h6 style="color:#fe7f10">
                        <b>Exclusions</b>
                    </h6>
                    <ul>
                        <li>Follow-ups with the associated government department.</li>
                        <li>Digital Signature Certificate (DSC) if required shall be charged extra.</li>
                        <li>Filing of GST returns.</li>
                    </ul>
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