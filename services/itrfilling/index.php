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
        padding: 17px;
        background: #fff;
        color: #000;
        text-align: center;
        font: 32px Arial, sans-serif;
        border: 2px solid #E8E8E8;
    }
    .social:hover {
        cursor: pointer;
        background-color: #76287C !important;
        border: none;
        color: white !important;
    }
</style>
<body>
    <div style="background-color:#FFE7D2">
        <div class="container" style="position: relative;">
            <div class="p-5">
                <div class="row">
                    <div class="col-md-4">
                        <h2 style="color:#fe7f10">
                            <b>ITR FILING</b>
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <b>( Duration: On Documents Availability )<span style="font-size:20px;color:#fe7f10">@ 899</span></b>
                    </div>
                </div>
                <br/>
                <h6 style="line-height: 1.7;">
                    <b>Filing Income Tax Returns is essential, whether you want to claim income tax refund, be eligible for easy loan<br/> processing or simply avoid penalties. Subject to certain conditions, ITR Filing is mandatory. 
                        <br/>We offer professional assistance to file returns for your business in a hassle-free way!</b>
                </h6>
            </div>
            <div style="text-align:center;padding:20px 10px 30px 10px">
                <?php if(isset($_SESSION['username'])){?>
                <button
                    type="button"
                    class="social p-2"
                    data-bs-toggle="modal"
                    data-bs-target="#gstFormModal"
                    style="background-color:transparent;border-radius:10px">
                    <b>ITR REGISTER</b>
                    </button>
                <?php }else { ?>
                <button
                    type="button"
                    class="social p-2"
                    data-bs-toggle="modal"
                    data-bs-target="#loginModal"
                    style="background-color:transparent;border-radius:10px">
                    <b>ITR REGISTER</b>
                </button>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="p-1" style="background-color:#fe7f10"></div>
    <div class="p-4" style="background-color:#f2f2f2;text-align:center">
        <h5>
            <b>Details about ITR Filing</b>
        </h5>
    </div>
    <div style="text-align:center;padding:40px;">
        <div class="container">
            <div class="row">
                <div class="col-sm" data-bs-toggle="modal" data-bs-target="#callModal">
                    <div class="d-flex justify-content-center">
                        <div role="button" class="circle shadow"><img src="<?php echo BASEURL ?>images/call.png"/></div>
                    </div><br/>
                    <h6>Call Expert</h6>
                </div>
                <div class="col-sm" data-bs-toggle="modal" data-bs-target="#includedModal">
                    <div class="d-flex justify-content-center">
                        <div role="button" class="circle shadow" style="padding:13px"><img src="<?php echo BASEURL ?>images/include.png" width="40"/></div>
                    </div><br/>
                    <h6>What is Included?</h6>
                </div>
                <div class="col-sm" data-bs-toggle="modal" data-bs-target="#viewsampleModal">
                    <div class="d-flex justify-content-center">
                        <div role="button" class="circle shadow"><img src="<?php echo BASEURL ?>images/checklist.png" width="36"/></div>
                    </div><br/>
                    <h6>View Sample</h6>
                </div>
            </div>
        </div><br/><br/><br/>
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
                <li class="faq">What is the Financial Year and Assessment Year ?</li>
                <div class="collapse" id="collapseExample"><br/><br/>“Financial Year (FY)” is the year starting on 1st April and ending on 31st March. The “Assessment Year (AY)” is the year coming after the FY. Financial Year is the year in which the income is earned 
                and the Assessment Year is the year in which the income is assessed and tax returns are filed.</div>
            </div>
            <div
                class="col-4"
                style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                data-bs-target="#collapseExample1">
                <li class="faq">Should we keep a copy of the returns filed as proof and for how long ?</li>
                <div class="collapse" id="collapseExample1"><br/>Yes, if possible you should always keep digital copies of filed ITR as they might be required for reference purposes. 
                However, if it is not possible to maintain them in such a format, then you should keep their copies at least for the next 8 years.</div>
            </div>
        </div><br/>
        <div class="row justify-content-evenly">
            <div
                class="col-4"
                style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                href="#collapseExample2">
                <li class="faq">Is the ITR filing process online?</li>
                <div class="collapse" id="collapseExample2"><br/>Yes, the entire process is online and it can be filed through the official website www.incometaxindiaefiling.gov.in. Also, you can pay your income tax liability online. 
                Furthermore, the acknowledgement copy of the filed ITR can also be downloaded through the official website.
                </div>
            </div>
            <div
                class="col-4"
                style="border:1px solid #fe7f10;padding:20px;cursor: pointer;"
                data-bs-toggle="collapse"
                href="#collapseExample3">
                <li class="faq">What are the ITR forms to be filed by small businesses?</li>
                <div class="collapse" id="collapseExample3">Few important forms are as follows:<br/>
                    <ul style="list-style-type:circle">
                        <li>ITR 3: For individuals and HUFs having income from a proprietary business or profession</li>
                        <li>ITR 4: For Business & Profession to whom presumptive taxation is applicable and hence, are not required to maintain books of accounts.</li>
                        <li>ITR 6: For Companies</li>
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
                                placeholder="I have a question regarding ITR Filing"></textarea>
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
                    <div class="circleModal"><img src="<?php echo BASEURL ?>images/include.png" width="20px"/></div>
                    <h6 class="modal-title" style="margin-left:10px">
                        <b>GST Registration Service Inclusions and Exclusions</b>
                    </h6>
                </div>
                <div class="modal-body">
                    <h6 style="color:#fe7f10">
                        <b>Inclusions</b>
                    </h6>
                    <ul>
                        <li>Assistance in filing the ITR of your business.</li>
                    </ul>
                    <h6 style="color:#fe7f10">
                        <b>Exclusions</b>
                    </h6>
                    <ul>
                        <li>Revisions to the already filed ITRs.</li>
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
                    <iframe src="./itr_sample.pdf" width="100%" height="600px"></iframe>
                </div>
            </div>
        </div>
    </div>