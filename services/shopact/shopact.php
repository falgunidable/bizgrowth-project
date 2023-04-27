<?php
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
    .udyam:hover {
        cursor: pointer;
        background-color: #372863 !important;
        color:white !important;
    }
    .list {
        line-height: 2.3;
        list-style-type: none;
        list-style-image: url("<?php echo BASEURL ?>images/checked.png");
    }
    /* .tick {
        list-style-image: url(BASEURL."images/checkedBullet.png");
    } */
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
    .error-message {
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
                    <h2><b>SHOP ACT INTIMATION</b></h2>
                    <br/>
                    <h6 style="line-height: 1.7;">
                        <br/>
                        Shop Act Intimation is a mandatory Labor Law compliance for all businesses located within municipal limits of Maharashtra. It is a legal compliance requirement for businesses in Maharashtra.<br/>
                    </h6>
                </div>
                <div class="col-md-4 p-5" style="background-color:#7058B9;border-radius:0 15px 15px 0;">
                    <div class="bg-white p-4" style="border-radius:10px;box-shadow: 5px 5px 10px #f2f2f2">
                        <h5><b>SHOP ACT INTIMATION</b></h5>
                        <h6><b>Get in 2 days</b></h6><br/>
                        <h4 style="color:#7058B9"><b>₹ 300</b></h4>
                    </div><br/><br/>
                    <div style="text-align:center">
                        <?php if(isset($_SESSION['username'])){?>
                        <button
                            type="button"
                            class="col-md-10 udyam p-1 text-white border-0"
                            data-bs-toggle="modal"
                            data-bs-target="#shopactFormModal"
                            style="background-color:#5A41A0;border-radius:10px;">
                            <h5><b>CONTINUE</b></h5>
                            </button>
                        <?php }else { ?>
                        <button
                            type="button"
                            class="col-md-10 udyam p-1 text-white border-0"
                            data-bs-toggle="modal"
                            data-bs-target="#loginModal"
                            style="background-color:#5A41A0;border-radius:10px;">
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
                <h4><b>Details about Udyam Registration</b></h4><br/>
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
                                <h6><b>Is the applicability of Shop Act the same all over India?</b></h6>
                                <p>Shop Act is a state-implemented act, hence, its applicability will change from state to state.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>Can deAsra assist with Shop Act application for businesses set up outside Maharashtra?</b></h6>
                                <p>Currently, deAsra assists in Shop Act application for businesses located in Maharashtra only.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>What should a food business prioritise – Shop Act or FSSAI?</b></h6>
                                <p>In the case of a food business, you must first apply for FSSAI Registration or License and then for Shop Act.</p>
                            </div>
                            </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>In Maharashtra, is Shop Act a valid address proof for business?</b></h6>
                                <p>Shop Act is a legal document, wherein, the entrepreneur informs the Labour Department about the existence of his business. It is not a piece of evidence specifying the location of business. Hence, Shop Act cannot be used as a business address proof.</p>
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
                    <img src="<?php echo BASEURL ?>images/shop1.png" width="100"/><br/><br/>
                    <h6><b>Applicability and obligations vary from State to State</b></h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5 border border-2 border-dark" style="border-radius:10px;">
                    <img src="<?php echo BASEURL ?>images/shop2.png" width="100"/><br/><br/>
                    <h6><b>Online applications accepted in Maharashtra</b></h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5 border border-2 border-dark" style="border-radius:10px;">
                    <img src="<?php echo BASEURL ?>images/shop3.png" width="100"/><br/><br/>
                    <h6><b>Mandatory for businesses operating within municipal limits in Maharashtra</b></h6>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5 border border-2 border-dark" style="border-radius:10px;">
                    <img src="<?php echo BASEURL ?>images/shop4.png" width="100"/><br/><br/>
                    <h6><b>deAsra offers Shop Act assistance to businesses in Maharashtra only</b></h6>
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
                                placeholder="I have a question regarding Shop Act Intimation "></textarea>
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
                            <h5 style="margin-top:12px" class="d-flex align-items-center"><b>Shop Act Intimation Inclusions and Exclusions</b></h5>
                        </div>
                    </div>
                    <div class="container px-4">
                        <div class="row gx-4 p-2">
                            <div class="col">
                                <div class="p-3 border border-2 border-success h-100 d-flex flex-column" style="border-radius:20px">
                                    <h6><b>Inclusions</b></h6>
                                    <ul>
                                        <li>Applying for Shop Act Intimation</li>
                                        <li>Information on documents Required</li>
                                        <li>Follow-up with government department</li>
                                    </ul><br/><br/><br/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 border border-2 border-danger h-100 d-flex flex-column" style="border-radius:20px">
                                    <h6><b>Exclusions</b></h6>
                                    <ul>
                                        <li>Government Fees.</li>
                                    </ul><br/><br/><br/>
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
                    <iframe src="./shopact_sample.pdf" width="100%" height="600px"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include('./shopactservice.php')?>