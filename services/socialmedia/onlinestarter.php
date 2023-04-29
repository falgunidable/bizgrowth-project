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
    .starter:hover {
        cursor: pointer;
        background-color: #372863 !important;
        color:white !important;
    }
    .list {
        line-height: 2.0;
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
                    <h2><b>ONLINE STARTER PACK</b></h2>
                    <br/>
                    <h6 style="line-height: 1.7;">
                        <b>Creating a presence on different social media platforms gives your business the ability to reach a larger audience.</b><br/><br/>
                        We specialize in creating and managing online presence for businesses of all sizes. 
                        We work to develop a comprehensive online strategy that aligns with your business goals and target audience.
                        <br/>
                    </h6>
                </div>
                <div class="col-md-4 p-5" style="background-color:#7058B9;border-radius:0 15px 15px 0;">
                    <div class="bg-white p-4" style="border-radius:10px;box-shadow: 5px 5px 10px #f2f2f2">
                        <h5><b>ONLINE STARTER PACK</b></h5>
                        <h6><b>Get in 18 days</b></h6><br/>
                        <h4 style="color:#7058B9"><b>₹ 1652</b></h4>
                    </div><br/><br/>
                    <div style="text-align:center">
                        <?php if(isset($_SESSION['username'])){?>
                        <button
                            type="button"
                            class="col-md-10 starter p-1 text-white border-0"
                            data-bs-toggle="modal"
                            data-bs-target="#udyamFormModal"
                            style="background-color:#5A41A0;border-radius:10px;">
                            <h5><b>CONTINUE</b></h5>
                            </button>
                        <?php }else { ?>
                        <button
                            type="button"
                            class="col-md-10 starter p-1 text-white border-0"
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
                <h4><b>Details about Online Starter Pack</b></h4><br/>
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
                                <h6><b>Does this service include logo creation?</b></h6><br/>
                                <p>No, you must share the existing logo, along with relevant business photos that will be included in the WhatsApp and Facebook creatives</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>Will the ‘Smart Marketer’s Handbook’ help me create social media strategies?</b></h6>
                                <p>Yes, the Smart Marketer’s Handbook includes expert social media strategies to help your business grow</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>Does listing my business on Google Maps & Google My Business give access to online selling?</b></h6>
                                <p>Listing your business on Google Maps and Google My Business improves business visibility and offers visitors information like work hours, prices, etc.</p>
                            </div>
                            </div>
                        <div class="col-6">
                            <div class="p-3 border border-dark border-2 h-100 d-flex flex-column" style="border-radius:20px">
                                <h6><b>What is the difference between a Facebook business page and personal page?</b></h6>
                                <p>On a Facebook personal page, you tell people about yourself.A Facebook business page marks the digital presence of your business. This page offers tools that will help you grow your business, connect with customers, and more.</p>
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
                                placeholder="I have a question regarding Online Starter Service"></textarea>
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
                            <h5 style="margin-top:12px" class="d-flex align-items-center"><b>Online Starter Inclusions and Exclusions</b></h5>
                        </div>
                    </div>
                    <div class="container px-4">
                        <div class="row gx-4 p-2">
                            <div class="col">
                                <div class="p-3 border border-2 border-success h-100 d-flex flex-column" style="border-radius:20px">
                                    <h6><b>Inclusions</b></h6>
                                    <ul>
                                        <li>Creating a Facebook page</li>
                                        <li>Creating a Google My Business page (guidance on call)</li>
                                        <li>Creating a professional look for your existing Facebook page and Google My Business page</li>
                                        <li>Listing on Google Maps (after Google verification)</li>
                                        <li>Adding a profile photo and cover photo</li>
                                        <li>Creating a total of 4 posts (not ads) – 2 posts per week, based on information sent by you</li>
                                        <li>WhatsApp creative with a message for you to share with your network (at the end of the service period)</li>
                                        <li>Using stock photos (free photos available online)</li>
                                    </ul><br/><br/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 border border-2 border-danger h-100 d-flex flex-column" style="border-radius:20px">
                                    <h6><b>Exclusions</b></h6>
                                    <ul>
                                        <li>Running paid ads.</li>
                                        <li>Increasing Facebook page likes</li>
                                        <li>Increasing post likes, comments & shares</li>
                                        <li>Reaching more people (only those people who like your Facebook page can see the posts)</li>
                                        <li>Marketing consultation</li>
                                        <li>Photography</li>
                                        <li>Video creation</li>
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
                    <img src="./onlinestarter.png" class="img-fluid" style="max-height: 80vh; max-width: 100%;" />
                </div>
            </div>
        </div>
    </div>
    <?php include('./onlineservice.php')?>