<?php
session_start();
include('Navbar/nav.php');

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/cities.js"></script>

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
        background-color: #76287C !important;
        border: none;
        color: white !important;
    }
    .list {
        line-height: 2.0;
        list-style-type: none;
    }
    .tick {
        list-style-image: url("./images/checkedBullet.png");
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
        animation: fadeOut 4s ease-out forwards;
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
            <button
                type="button"
                class="gst p-2"
                data-bs-toggle="modal"
                data-bs-target="#gstFormModal"
                style="background-color:transparent;border-radius:10px">
                <b>GST REGISTER</b>
            </button>
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
                <a href="gst_checklist">
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
            <div class="col-sm" data-bs-toggle="modal" data-bs-target="#sampleModal">
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
                <h6>You can voluntarily apply for GST registration even if your turnover is less
                    than the prescribed limit</h6>
            </div>
        </div>
        <div class="col-6">
            <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
                <img src="../images/gst_2.svg"/><br/><br/>
                <h6>GST registration does not have an expiry date and does not require renewal</h6>
            </div>
        </div>
        <div class="col-6">
            <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
                <img src="../images/gst_3.svg"/><br/><br/>
                <h6>Once you have a GST registration, it is mandatory to file GST returns</h6>
            </div>
        </div>
        <div class="col-6">
            <div class="p-5" style="border-radius:10px;background-color:#f2f2f2">
                <img src="../images/gst_4.svg"/><br/><br/>
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
            <div class="collapse" id="collapseExample"><br/>Supplies of all goods and
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
                <ul>
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
            <div class="collapse" id="collapseExample3"><br/><br/>Exports are treated as
                zero-rated supplies. No tax is payable on exports of goods or services. However,
                credit of input tax credit is available.<br/>
                <ul>
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

<?php
include('Footer/footer.php')
?>

<!-- Modal -->
<div
    class="modal fade"
    id="gstFormModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #fe7f10">
                <h5
                    class="modal-title"
                    id="exampleModalLabel"
                    style="margin-left:10px;color:white">
                    <b>GST Registration Requirements</b>
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list">
                    <li class="tick">
                        <b>You have a Business Formation Document or yours is a proprietorship firm</b><br/>
                        Get assistance from service provider in business entity formation
                    </li>
                    <li class="tick">
                        <b>You have a digital signature certificate (DSC) or you are a proprietor</b><br/>
                        Get support from service provider in acquiring a DSC
                    </li>
                    <li class="tick">
                        <b>Your Aadhaar Card is linked to your mobile number or your business is other
                            than a proprietorship concern</b><br/>
                        Official instructions to update Aadhaar details
                    </li>
                </ul>
                <div style="text-align:center;padding:20px">
                    <button
                        type="button"
                        class="gst p-2 border-0"
                        data-bs-target="#formFillA"
                        data-bs-toggle="modal"
                        data-bs-dismiss="modal"
                        style="background-color:transparent;border-radius:10px;color:#fe7f10">
                        <b>NEXT</b>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div
    class="modal fade"
    id="formFillA"
    aria-hidden="true"
    aria-labelledby="formFillA"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="position: relative;">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #fe7f10;color:white">
                <h5 class="modal-title fw-bold" id="exampleModalToggleLabel2">Business Details</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 p-3" action="../db/gst_form" method="post">
                    <div class="form-group col-md-6">
                        <input
                            type="text"
                            id="fullname"
                            class="form-control shadow-sm"
                            name="fullname"
                            placeholder="Full Name">
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-6">
                        <select id="myType" class="form-control shadow-sm" name="nameYourself">
                            <option selected="selected" disabled="disabled">You call Yourself a
                            </option>
                            <option>Taxpayer</option>
                            <option>Tax Deductor</option>
                            <option>Tax Collector (e-Commerce)</option>
                            <option>GST Practitioner</option>
                            <option>Non Resident Taxable Person</option>
                            <option>United Nation Body</option>
                            <option>Other Notified Person</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input
                            type="text"
                            class="form-control shadow-sm"
                            id="businessname"
                            name="panName"
                            placeholder="Legal Name of the Business">
                            <div class="error-message"></div>
                        <small class="text-muted fst-italic">(As mentioned in PAN)</small>
                    </div>
                    <div class="col-md-6">
                        <select id="formSector" name="sector" class="form-control shadow-sm"></select>
                    </div>
                    <div class="col-md-6">
                        <select
                            id="formState"
                            name="state"
                            class="form-control shadow-sm"
                            onchange="print_city('formCity',this.selectedIndex);"></select>
                    </div>
                    <div class="col-md-6">
                        <select id="formCity" name="city" class="form-control shadow-sm"></select>
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            class="form-control shadow-sm"
                            id="pan"
                            name="panNo"
                            placeholder="Permanent Account Number (PAN)">
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            class="form-control shadow-sm"
                            id="pincode"
                            name="pincode"
                            placeholder="Pincode - Business Location"
                            maxlength="6"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                            pattern="[0-9]{6}">
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            id="email"
                            class="form-control shadow-sm"
                            name="email"
                            placeholder="Email">
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            id="mobile"
                            class="form-control shadow-sm"
                            name="mobile"
                            maxlength="10"
                            placeholder="Mobile No."
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                            pattern="[0-9]{10}">
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-check">
                            <input
                                class="form-check-input shadow-sm"
                                type="checkbox"
                                name="agree"
                                id="agree">
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree to the terms and conditions and authorise Bizgrowth to contact me. This
                                will override the registry with DNC/ NDNC.
                            </label>
                        </div>
                    </div>
                    <div style="text-align:center;padding:10px 20px 5px 20px">
                        <button
                            class="gst p-2 border-0"
                            data-bs-target="#gstFormModal"
                            data-bs-toggle="modal"
                            data-bs-dismiss="modal"
                            style="background-color:transparent;border-radius:10px;color:#fe7f10">
                            <b>BACK</b>
                        </button>
                        <button
                            id="gstSubmit"
                            class="gst p-2 border-0"
                            type="submit"
                            style="background-color:transparent;border-radius:10px;color:#fe7f10">
                            <b>SUBMIT</b>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        print_state('formState');
        print_sector('formSector');
    </script>
    <script src="../js/validation.js"></script>

    <div
        class="modal fade"
        id="callModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border:1px solid #fe7f10">
                <div class="modal-header">
                    <div class="circleModal"><img src="../images/call.png" width="16px"/></div>
                    <h6 class="modal-title" id="exampleModalLabel" style="margin-left:10px">
                        <b>Contact an Expert</b>
                    </h6>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <input
                                type="text"
                                class="form-control"
                                id="autoSizingInput"
                                placeholder="Email Id">
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="autoSizingInputGroup"
                                    placeholder="Whatsapp / Mobile number *">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea
                                class="form-control"
                                id="exampleFormControlTextarea1"
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
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border:1px solid #fe7f10">
                <div class="modal-header">
                    <div class="circleModal"><img src="../images/rightwrong.png" width="16px"/></div>
                    <h6 class="modal-title" id="exampleModalLabel" style="margin-left:10px">
                        <b>GST Registration Service Inclusions and Exclusions</b>
                    </h6>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
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
    id="sampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <iframe src="../assets/gst_sample.pdf" width="100%" height="600px"></div>
            </div>
        </div>
    </div>
    </body>