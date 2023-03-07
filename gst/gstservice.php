<script src="../js/cities.js"></script>
<!-- Modal -->
<div
class="modal fade"
id="gstFormModal"
tabindex="-1"
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
                    <li>
                        <b>You have a Business Formation Document or yours is a proprietorship firm</b><br/>
                        Get assistance from service provider in business entity formation
                    </li>
                    <li>
                        <b>You have a digital signature certificate (DSC) or you are a proprietor</b><br/>
                        Get support from service provider in acquiring a DSC
                    </li>
                    <li>
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
                <form class="row g-3 p-3" action="<?php echo BASEURL ?>db/gst_form" method="post">
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
</div>
<script>
        print_state('formState');
        print_sector('formSector');
    </script>
    <script src="../js/validation.js"></script>