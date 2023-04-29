<?php
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
    .itr:hover {
        cursor: pointer;
        background-color: #372863 !important;
        color: white !important;
    }
    .list {
        line-height: 2.0;
        list-style-type: none;
        list-style-image: url("<?php echo BASEURL ?>images/checked.png");
    }
    .error-message {
        display: none;
        font-size: 12px;
        color: red;
        margin-top: 5px;
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
</style>
<body>
    <div>
        <div class="container p-4" style="position: relative;">
            <a onclick="history.back()" style="cursor:pointer;color:#7058B9">
                <img src="<?php echo BASEURL ?>images/home.png" width="20px"/><b> Home / Services</b>
            </a><br/><br/>
            <div class="row border border-dark border-2" style="border-radius:20px">
                <div class="col-md-8 p-5">
                    <h2><b>ITR FILING</b></h2>
                    <br/>
                    <h6 style="line-height: 1.7;">
                        <b>Filing Income Tax Returns is essential, whether you want to claim income tax refund, be eligible for easy loan<br/> processing or simply avoid penalties. Subject to certain conditions, ITR Filing is mandatory. 
                        <br/>We offer professional assistance to file returns for your business in a hassle-free way!</b>
                    </h6>
                </div>
                <div class="col-md-4 p-5" style="background-color:#7058B9;border-radius:0 15px 15px 0;">
                    <div class="bg-white p-4" style="border-radius:10px;box-shadow: 5px 5px 10px #f2f2f2">
                        <h5><b>ITR FILING</b></h5>
                        <h6><b>Duration - Based on Documents</b></h6><br/>
                        <h4 style="color:#7058B9"><b>₹ 899</b></h4>
                    </div><br/><br/>
                    <div style="text-align:center">
                        <?php if(isset($_SESSION['username'])){?>
                        <button
                            type="button"
                            class="col-md-10 itr p-1 text-white border-0"
                            data-bs-toggle="modal"
                            data-bs-target="#itrFormModal"
                            style="background-color:#5A41A0;border-radius:10px;">
                            <h5><b>CONTINUE</b></h5>
                            </button>
                        <?php }else { ?>
                        <button
                            type="button"
                            class="col-md-10 itr p-1 text-white border-0"
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
                <h4><b>Details about ITR Filing</b></h4><br/>
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
                                <h6><b>What is the Financial Year and Assessment Year ?</b></h6><br/>
                                <p>“Financial Year (FY)” is the year starting on 1st April and ending on 31st March. The “Assessment Year (AY)” is the year coming after the FY. Financial Year is the year in which the income is earned 
                                and the Assessment Year is the year in which the income is assessed and tax returns are filed.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>Should we keep a copy of the returns filed as proof and for how long ?</b></h6>
                                <p>Yes, if possible you should always keep digital copies of filed ITR as they might be required for reference purposes. However, if it is not possible to maintain them in such a format, then you should keep their copies at least for the next 8 years.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>Is the ITR filing process online?</b></h6><br/>
                                <p>Yes, the entire process is online and it can be filed through the official website www.incometaxindiaefiling.gov.in. Also, you can pay your income tax liability online. Furthermore, the acknowledgement copy of the filed ITR can also be downloaded through the official website.</p>
                            </div>
                            </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>What are the ITR forms to be filed by small businesses?</b></h6>
                                <p>Few important forms are as follows:
                                    <ul><li>ITR 3: For individuals and HUFs having income from a proprietary business or profession.</li>
                                    <li>ITR 4: For Business & Profession to whom presumptive taxation is applicable and hence, are not required to maintain books of accounts.</li>
                                    <li>ITR 6: For Companies.</li></ul></p>
                            </div>
                        </div>
                    </div>
                </div>
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
</body>
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
</script>
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
                                placeholder="I have a question regarding ITR Filing"></textarea>
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
                            <h5 style="margin-top:12px" class="d-flex align-items-center"><b>ITR Filing Service Inclusions and Exclusions</b></h5>
                        </div>
                    </div>
                    <div class="container px-4">
                        <div class="row gx-4 p-2">
                            <div class="col">
                                <div class="p-3 border border-2 border-success h-100 d-flex flex-column" style="border-radius:20px">
                                    <h6><b>Inclusions</b></h6>
                                    <ul>
                                        <li>Assistance in filing the ITR of your business.</li>
                                    </ul><br/><br/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 border border-2 border-danger h-100 d-flex flex-column" style="border-radius:20px">
                                    <h6><b>Exclusions</b></h6>
                                    <ul>
                                        <li>Revisions to the already filed ITRs.</li>
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
                    <iframe src="./itr_sample.pdf" width="100%" height="600px"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include('./itrservice.php') ?>