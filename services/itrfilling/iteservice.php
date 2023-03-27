<?php $email = $_SESSION['email']; ?>
<script src="<?php echo BASEURL ?>js/cities.js"></script>
<div
class="modal fade"
id="itrform"
aria-hidden="true"
tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="position: relative;">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #fe7f10;color:white">
                <h5 class="modal-title fw-bold" id="exampleModalToggleLabel2">Personal Information</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="customnotify" class="p-2 fw-bold fst-italic"></div>
                <form id="udyamForm" class="row g-3 p-3">
                    <input type="hidden" name="itrserviceForm" />
                    <div class="form-group col-md-4">
                        <input
                            type="text"
                            id="firstname"
                            class="form-control shadow-sm"
                            name="firstname"
                            placeholder="First Name *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="form-group col-md-4">
                        <input
                            type="text"
                            id="middlename"
                            class="form-control shadow-sm"
                            name="middlename"
                            placeholder="Middle Name *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="form-group col-md-4">
                        <input
                            type="text"
                            id="lastname"
                            class="form-control shadow-sm"
                            name="lastname"
                            placeholder="Last Name *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" 
                            class="form-control shadow-sm"
                            id="datebirth"
                            name="datebirth"
                            placeholder="Date of Birth *"
                            onfocus="(this.type='date')"
                            onblur="(this.type='text')"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-6" style="font-size:14px">
                        Gender <span style="color:red">*</span> -  
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gstgender" id="male" value="male">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gstgender" id="female" value="female">
                            <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gstgender" id="other" value="other">
                            <label class="form-check-label">Other</label>
                        </div></br>
                    </div>
                    <div class="col-md-4">
                        <input
                            type="text"
                            class="form-control shadow-sm"
                            id="pan"
                            name="panNo"
                            placeholder="PAN Number *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-8" style="font-size:14px">
                        Martial Status <span style="color:red">*</span> - 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gstradio" id="gstYes" value="yes">
                            <label class="form-check-label">Married</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gstradio" id="gstNo" value="no">
                            <label class="form-check-label">Unmarried</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gstradio" id="gstNo" value="other">
                            <label class="form-check-label">No Disclosure</label>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <input
                            type="text"
                            id="aadhar"
                            class="form-control shadow-sm"
                            name="aadhar"
                            maxlength="12"
                            placeholder="Aadhar Number *"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 12);"
                            pattern="[0-9]{12}"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-4">
                        <input
                            type="text"
                            id="email"
                            class="form-control shadow-sm"
                            name="email"
                            value="<?php echo $email; ?>"/>
                    </div>
                    <div class="col-md-4">
                        <input
                            type="text"
                            id="mobile"
                            class="form-control shadow-sm"
                            name="mobile"
                            maxlength="10"
                            placeholder="Mobile Number *"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                            pattern="[0-9]{10}"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-4">
                        <select
                            id="formState"
                            name="state"
                            class="form-control shadow-sm"
                            onchange="print_city('formCity',this.selectedIndex);"></select>
                    </div>
                    <div class="col-md-4">
                        <select id="formCity" name="city" class="form-control shadow-sm"></select>
                    </div>
                    <div class="col-md-4">
                        <input
                            type="text"
                            class="form-control shadow-sm"
                            id="pincode"
                            name="pincode"
                            placeholder="Pincode *"
                            maxlength="6"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                            pattern="[0-9]{6}"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-12">
                        <textarea type="text" 
                            class="form-control shadow-sm"
                            id="address"
                            name="address"
                            rows="1"
                            placeholder="Address *"></textarea>
                            <div class="error-message"></div>
                    </div>           
                    <div class="col-md-12">
                        <div class="form-check">
                            <input
                                class="form-check-input shadow-sm"
                                type="checkbox"
                                name="agreecond"
                                id="agree"/>
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree to the terms and conditions and authorise Bizgrowth to contact me.
                            </label>
                        </div>
                    </div>
                    <div style="text-align:center;padding:0px 20px 0px 20px">
                        <button
                            id="itrSubmit"
                            class="itr p-2 border-0"
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