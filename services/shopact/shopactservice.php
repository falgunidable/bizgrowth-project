<?php 
if(isset($_SESSION['email'])){ $email = $_SESSION['email']; } ?>
<script src="<?php echo BASEURL ?>js/cities.js"></script>
<style>
    #customshopnotify {
    display: none;
    width:400px;
    text-align:center;
    position: fixed;
    top: 15px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 5px;
    background-color: #fff;
    color: white;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }

    #customshopnotify.success{
    background-color: #2bdb31;
    }
    #customshopnotify.error{
    background-color: #f44336;
    }
    .line-container {
    position: relative;
    }

    .line-text {
    position: absolute;
    top: -0.5em;
    left: 7%;
    font-size:12px;
    transform: translateX(-50%);
    background-color: white;
    padding: 0 0.5em;
    }
</style>
<!-- Modal -->
<div
class="modal fade"
id="shopactFormModal"
tabindex="-1"
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-body">
                <h5
                    class="modal-title p-2"
                    id="exampleModalLabel"
                    style="margin-left:10px;">
                    <b>Shop Act Intimation Requirements</b>
                </h5><br/>
                <ul class="list">
                    <li>
                        <b>Your business is located within the State of Maharashtra and within municipal limits.</b>
                    </li>
                    <li>
                        <b>Your business is located within the State of Maharashtra but in Gram Panchayat, then Shop Act is not applicable.</b>
                    </li>
                    <li>
                        <b>You have less than 10 employees, otherwise it will require ShopAct Registration.</b>
                    </li>
                </ul>
                <div style="text-align:right;padding:20px">
                    <button
                        type="button"
                        class="col-md-2 udyam p-2 border-0 text-white"
                        data-bs-target="#shopForm"
                        data-bs-toggle="modal"
                        data-bs-dismiss="modal"
                        style="background-color:#5A41A0;border-radius:10px;">
                        <b>NEXT</b>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div
class="modal fade"
id="shopForm"
aria-hidden="true"
tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-xl" style="position: relative;">
        <div class="modal-content">
            <div class="modal-body">
                <div id="customshopnotify" class="p-2 fw-bold fst-italic"></div>
                <form id="shopactform" class="p-3">
                    <input type="hidden" name="udyamserviceForm" value="Udyam Service"/>
                    <input type="hidden" name="udyamprice" value="750" />
                    <div class="row g-3" id="personalDet">
                        <div style="color:#5A41A0" class="p-3"> 
                            <h5><b>Personal Details</b></h5>
                            <div class="line-container">
                                <hr style="width:100%;height:2px;text-align:center;color:#5A41A0">
                                <small class="line-text"><b>All Fields are mandatory*</b></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="fullname" class="form-label h6"><b>Full Name as on Aadhar Card*</b></label>
                            <input
                            type="text"
                            id="fullname"
                            class="form-control border-2 border-dark p-2"
                            name="fullname"
                            placeholder="Name"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label h6"><b>Email*</b></label>
                            <input
                                type="text"
                                id="email"
                                class="form-control border-2 border-dark p-2"
                                name="email"
                                style="background-color:lightgray"
                                value="<?php echo $email; ?>"/>
                        </div>
                        <div class="col-md-4">
                            <label for="mobile" class="form-label h6"><b>Mobile No.*</b></label>
                            <input
                                type="text"
                                id="mobile"
                                class="form-control border-2 border-dark p-2"
                                name="mobile"
                                maxlength="10"
                                placeholder="98xxxxxxxx"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                                pattern="[0-9]{10}"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="dob" class="form-label h6"><b>Date of Birth*</b></label>
                            <input type="text" 
                                class="form-control border-2 border-dark p-2"
                                id="dob"
                                name="dob"
                                placeholder="Date"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')"/>
                        </div>
                        <div class="col-md-4">
                            <label for="age" class="form-label h6"><b>Age</b></label>
                            <input type="text" 
                                class="form-control border-2 border-dark p-2"
                                id="age"
                                name="age"
                                placeholder="Age"
                                maxlength="2"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2);"
                                pattern="[0-9]{1,2}"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="photo" class="h6 form-label"><b>Photograph</b><small>(5 KB and 20KB)</small></label>
                            <input type="file" class="form-control border-2 border-dark p-2" name="image_file" accept="image/*" />
                        </div>
                        <div class="col-md-3">
                            <label for="formState" class="form-label h6"><b>State*</b></label>
                            <select
                                id="formState"
                                name="state"
                                class="form-select border-2 border-dark p-2"
                                onchange="print_city('formCity',this.selectedIndex);"></select>
                        </div>
                        <div class="col-md-3">
                            <label for="formCity" class="form-label h6"><b>City*</b></label>
                            <select id="formCity" name="city" class="form-select border-2 border-dark p-2"></select>
                        </div>
                        <div class="col-md-2">
                            <label for="pincode" class="form-label h6"><b>Pincode*</b></label>
                            <input
                                type="text"
                                class="form-control border-2 border-dark p-2"
                                id="pincode"
                                name="pincode"
                                placeholder="412345"
                                maxlength="6"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                                pattern="[0-9]{6}"/>
                            <div class="error-message"></div>
                        </div>    
                        <div class="col-md-4">
                            <label for="address" class="form-label h6"><b>Resedential Address*</b></label>
                            <textarea type="text" 
                                class="form-control border-2 border-dark p-2"
                                id="address"
                                name="address"
                                rows="1"
                                placeholder=""></textarea>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="resadd" class="form-label h6"><b>Resedential Address is* </b></label><br/>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input border-2 border-dark p-2" type="radio" name="resadd" id="resadd" value="rented">
                                <label class="form-check-label h6">Rented</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input border-2 border-dark p-2" type="radio" name="resadd" id="resadd" value="owned">
                                <label class="form-check-label h6">Owned</label>
                            </div>
                        </div>
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 25%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px;margin-top:40px">
                            <button
                                class="col-md-2 udyam p-2"
                                data-bs-target="#shopactFormModal"
                                data-bs-toggle="modal"
                                data-bs-dismiss="modal"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                onclick="showBusiness();"
                                class="col-md-2 udyam p-2 border-0 text-white"
                                type="button"
                                style="background-color:#5A41A0;border-radius:10px;">
                                <b>NEXT</b>
                            </button>
                        </div>
                    </div>
                    <div id="businessDet" class="row g-3" style="display:none">
                        <div style="color:#5A41A0" class="p-3"> 
                            <h5><b>Business Details</b></h5>
                            <div class="line-container">
                                <hr style="width:100%;height:2px;text-align:center;color:#5A41A0">
                                <small class="line-text"><b>All Fields are mandatory*</b></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="aadhar" class="form-label h6"><b>Aadhar Number*</b></label>
                            <input
                                type="text"
                                id="aadhar"
                                class="form-control border-2 border-dark p-2"
                                name="aadhar"
                                maxlength="12"
                                placeholder="Aadhar No - No data will be disclosed *"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 12);"
                                pattern="[0-9]{12}"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="pan" class="form-label h6"><b>Permanent Account Number (PAN)*</b></label>
                            <input
                                type="text"
                                class="form-control border-2 border-dark p-2"
                                id="panNo"
                                name="panNo"
                                placeholder="ABCFZ1234D"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="businessName" class="form-label h6"><b>Legal Name of the Business*</b></label>
                            <input
                                type="text"
                                class="form-control border-2 border-dark p-2"
                                id="businessName"
                                name="businessName"
                                placeholder="(As mentioned in PAN)"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="formSector" class="form-label h6"><b>Sector*</b></label>
                            <select id="formSector" name="formSector" class="form-select border-2 border-dark p-2"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="busiEntity" class="form-label h6"><b>Type of Business entity*</b></label>
                            <select class="form-select border-2 border-dark p-2" id="busiEntity" name="busiEntity">
                                <option selected disabled>Choose Business Type</option>
                                <option value="1">Individual / Proprietor</option>
                                <option value="2">Parternship Firm</option>
                                <option value="3">LLP</option>
                                <option value="3">OPC</option>
                                <option value="3">Private Limited Company</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="startDate" class="form-label h6"><b>Date of incorporation*</b></label>
                            <input type="text" 
                                class="form-control border-2 border-dark p-2"
                                id="startDate"
                                name="startDate"
                                placeholder="Date"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-5">
                            <label for="noemp" class="form-label h6"><b>Total No. of Employees</b><small class="text-muted">
                            (Cannot be more than 10)
                            </small></label>
                            <input type="number" 
                                class="form-control border-2 border-dark p-2"
                                id="noemp"
                                name="noemp"
                                placeholder="4"
                                oninput="if(this.value.length > 2) this.value = this.value.slice(0,2); if(Number(this.value) > 10) this.value = '10';"
                                min="1"
                                max="10"
                                />
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-7">
                            <label for="gstgender" class="form-label h6"><b>Gender* </b><small class="text-muted">
                            (Number of employees individually)
                            </small></label><br/> 
                            <div class="form-check form-check-inline">
                                <input class="form-control border-2 border-dark p-2" id="nomale" name="nomale" placeholder="Male"
                                maxlength="1"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2);"
                                pattern="[0-9]{1}"/>
                                <div class="error-message"></div>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-control border-2 border-dark p-2" id="nofemale" name="nofemale" placeholder="Female"
                                maxlength="1"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2);"
                                pattern="[0-9]{1}"/>
                                <div class="error-message"></div>
                            </div>
                        </div> 
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 50%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px;margin-top:40px">
                            <button
                                class="col-md-2 udyam p-2"
                                onclick="showPersonal();"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                onclick="showAddress();"
                                class="col-md-2 udyam p-2 border-0 text-white"
                                type="button"
                                style="background-color:#5A41A0;border-radius:10px;">
                                <b>NEXT</b>
                            </button>
                        </div>
                    </div>
                    <div id="addressDet" class="row g-3" style="display:none">
                        <div style="color:#5A41A0" class="p-3"> 
                            <h5><b>Business Address Details</b></h5>
                            <div class="line-container">
                                <hr style="width:100%;height:2px;text-align:center;color:#5A41A0">
                                <small class="line-text"><b>All Fields are mandatory*</b></small>
                            </div>
                        </div>           
                        <div class="col-md-3">
                            <label for="bformState" class="form-label h6"><b>State*</b></label>
                            <select
                                id="bformState"
                                name="bformState"
                                class="form-control border-2 border-dark p-2"
                                onchange="print_city('bformCity',this.selectedIndex);"></select>
                        </div>
                        <div class="col-md-3">
                            <label for="bformCity" class="form-label h6"><b>City*</b></label>
                            <select id="bformCity" name="bformCity" class="form-control border-2 border-dark p-2"></select>
                        </div>
                        <div class="col-md-2">
                            <label for="bpincode" class="form-label h6"><b>Pincode*</b></label>
                            <input
                                type="text"
                                class="form-control border-2 border-dark p-2"
                                id="bpincode"
                                name="bpincode"
                                placeholder="412345"
                                maxlength="6"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                                pattern="[0-9]{6}"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="baddress" class="form-label h6"><b>Address*</b></label>
                            <textarea type="text" 
                                class="form-control border-2 border-dark p-2"
                                id="baddress"
                                name="baddress"
                                rows="1"
                                placeholder=""></textarea>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="lbill" class="h6 form-label"><b>Light-Bill</b></label>
                            <input type="file" class="form-control border-2 border-dark p-2" name="lbill_file" accept="image/*" />
                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="h6 form-label"><b>Photo of Sign Board of Business</b><small>(75 KB and 100 KB)</small></label>
                            <input type="file" class="form-control border-2 border-dark p-2" name="sign_file" accept="image/*" />
                        </div>
                        <div class="col-md-12" style="margin-top:40px">
                            <div class="form-check">
                                <input
                                    class="form-check-input border-2 border-dark p-2"
                                    type="checkbox"
                                    name="agreecond"
                                    id="agreecond"/>
                                <label class="form-check-label" for="agreecond"> I agree to the terms and conditions and authorise Bizgrowth to contact me.
                                </label>
                            </div>
                        </div>
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 100%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px">
                            <button
                                class="col-md-2 udyam p-2"
                                onclick="showBusiness();"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                id="shopactSubmit"
                                class="col-md-2 udyam p-2 border-0 text-white"
                                type="submit"
                                style="background-color:#5A41A0;border-radius:10px;color:#fe7f10">
                                <b>SUBMIT</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo BASEURL ?>js/validation.js"></script>
<script>
    print_state('formState');
    print_state('bformState');
    print_sector('formSector');

    var addressInput = document.getElementById('address');
    var errorContainer12 = addressInput.nextElementSibling;
    var baddressInput = document.getElementById('baddress');
    var errorContainer18 = baddressInput.nextElementSibling;
    var ageInput = document.getElementById('age');
    var errorContainer13 = ageInput.nextElementSibling;
    var bpincodeInput = document.getElementById('bpincode');
    var errorContainer17 = bpincodeInput.nextElementSibling;
    var aadharInput = document.getElementById('aadhar');
    var errorContainer11 = aadharInput.nextElementSibling;
    var noEmpInput = document.getElementById('noemp');
    var errorContainer14 = noEmpInput.nextElementSibling;
    var nomaleInput = document.getElementById('nomale');
    var errorContainer15 = nomaleInput.nextElementSibling;
    var nofemaleInput = document.getElementById('nofemale');
    var errorContainer16 = nofemaleInput.nextElementSibling;
    
    addressInput.addEventListener('input', function() {
        if (addressInput.value.trim() === '') {
            errorContainer12.textContent = 'Address cannot be empty';
            errorContainer12.style.display = 'block';
            addressInput.classList.add('is-invalid');
        }else if (addressInput.value.length < 20) {
            errorContainer12.textContent = 'Enter characters less than 20';
            errorContainer12.style.display = 'block';
            addressInput.classList.add('is-invalid');
        } else {
            errorContainer12.style.display = 'none';
            addressInput.classList.remove('is-invalid');
            addressInput.classList.add('is-valid');
        }
    });
    baddressInput.addEventListener('input', function() {
        if (baddressInput.value.trim() === '') {
            errorContainer18.textContent = 'Address cannot be empty';
            errorContainer18.style.display = 'block';
            baddressInput.classList.add('is-invalid');
        }else if (baddressInput.value.length < 20) {
            errorContainer18.textContent = 'Enter characters less than 20';
            errorContainer18.style.display = 'block';
            addressInput.classList.add('is-invalid');
        }else {
            errorContainer18.style.display = 'none';
            baddressInput.classList.remove('is-invalid');
            baddressInput.classList.add('is-valid');
        }
    });
    ageInput.addEventListener('input', function() {
        if (ageInput.value.trim() === '') {
            errorContainer13.textContent = 'Age cannot be empty';
            errorContainer13.style.display = 'block';
            ageInput.classList.add('is-invalid');
        } else {
            errorContainer13.style.display = 'none';
            ageInput.classList.remove('is-invalid');
            ageInput.classList.add('is-valid');
        }
    });
    function checkEmployeeNumbers() {
        var totalEmployees = parseInt(noEmpInput.value);
        var maleEmployees = parseInt(nomaleInput.value);
        var femaleEmployees = parseInt(nofemaleInput.value);
        if (totalEmployees !== maleEmployees + femaleEmployees) {
            errorContainer16.textContent = 'Total no of male and female employees != Total no of employees';
            errorContainer16.style.display = 'block';
            nofemaleInput.classList.add('is-invalid');
            nomaleInput.classList.add('is-invalid');
        } else {
            errorContainer16.style.display = 'none';
            nofemaleInput.classList.remove('is-invalid');
            nomaleInput.classList.remove('is-invalid');
            nofemaleInput.classList.add('is-valid');
            nomaleInput.classList.add('is-valid');
        }
    }
    noEmpInput.addEventListener('input', function() {
        if (noEmpInput.value.trim() === '') {
            errorContainer14.textContent = 'No. of Employees cannot be empty';
            errorContainer14.style.display = 'block';
            noEmpInput.classList.add('is-invalid');
        }else if(noEmpInput.value == '0') {
            errorContainer14.textContent = 'Enter greater than 0';
            errorContainer14.style.display = 'block';
            noEmpInput.classList.add('is-invalid');
        }else {
            errorContainer14.style.display = 'none';
            noEmpInput.classList.remove('is-invalid');
            noEmpInput.classList.add('is-valid');
        }
        checkEmployeeNumbers();
    });
    nomaleInput.addEventListener('input', function() {
        if(nomaleInput.value.trim() === '') {
            errorContainer15.textContent = 'No. of Male Employees is empty';
            errorContainer15.style.display = 'block';
            nomaleInput.classList.add('is-invalid');
        }else {
            errorContainer15.style.display = 'none';
            nomaleInput.classList.remove('is-invalid');
            nomaleInput.classList.add('is-valid');
        }
        checkEmployeeNumbers();
    });
    nofemaleInput.addEventListener('input', function() {
        if(nofemaleInput.value.trim() === '') {
            errorContainer16.textContent = 'No. of Male Employees is empty';
            errorContainer16.style.display = 'block';
            nofemaleInput.classList.add('is-invalid');
        }else {
            errorContainer16.style.display = 'none';
            nofemaleInput.classList.remove('is-invalid');
            nofemaleInput.classList.add('is-valid');
        }
        checkEmployeeNumbers();
    });
    aadharInput.addEventListener('input', function() {
        let aadhaar = /^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/;
        if (aadharInput.value.trim() === '') {
            errorContainer11.textContent = 'Aadhar Number cannot be empty';
            errorContainer11.style.display = 'block';
            aadharInput.classList.add('is-invalid');
        } else if(!aadhaar.test(aadharInput.value)){
            errorContainer11.textContent = 'Invalid Aadhar Number';
            errorContainer11.style.display = 'block';
            aadharInput.classList.add('is-invalid');
        }else {
            errorContainer11.style.display = 'none';
            aadharInput.classList.remove('is-invalid');
            aadharInput.classList.add('is-valid');
        }
    });
    bpincodeInput.addEventListener('input', function() {
        let regex = /^\d{6}$/;
        if (bpincodeInput.value.trim() === '') {
            errorContainer17.textContent = 'Enter pincode';
            errorContainer17.style.display = 'block';
            bpincodeInput.classList.add('is-invalid');
        }else if(!regex.test(bpincodeInput.value)){
            errorContainer17.textContent = 'Invalid pincode';
            errorContainer17.style.display = 'block';
            bpincodeInput.classList.add('is-invalid');
        } else {
            errorContainer17.style.display = 'none';
            bpincodeInput.classList.remove('is-invalid');
            bpincodeInput.classList.add('is-valid');
        }
    });
    $(document).ready(function(){
        $('#shopForm').on('hidden.bs.modal', function () {
        // Reset the form
            $('#shopactform')[0].reset();
            $(this).find('input').removeClass('is-invalid');
            $(this).find('input').removeClass('is-valid');
            $(this).find('textarea').removeClass('is-invalid');
            $(this).find('textarea').removeClass('is-valid');
            $('.error-message').hide();
            $('#personalDet').show();
            $('#businessDet').hide();
            $('#addressDet').hide();
        });
    });

    function showBusiness(){
        var stateSelect = document.getElementById("formState");
        var citySelect = document.getElementById("formCity");
        var resAddValue = $('input[name=resadd]:checked').val();

        if ($('#fullname').val() === '' || $('#mobile').val() === '' || $('#age').val() === '' || $('#dob').val() === '' || 
        stateSelect.value === 'Select State *' || citySelect.value === 'Select City *' || $('#pincode').val() === '' || 
        $('#address').val() === '' || resAddValue === undefined) {
            $('#customshopnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
            setTimeout(function() {
                $('#customshopnotify').hide();
            }, 4000);
        }else if (fullnameInput.classList.contains('is-invalid') || mobileInput.classList.contains('is-invalid') || ageInput.classList.contains('is-invalid')
        || pincodeInput.classList.contains('is-invalid') || addressInput.classList.contains('is-invalid')) {
            $('#customshopnotify').removeClass('success').addClass('error').text('Please Remove errors').show();
            setTimeout(function() {
                $('#customshopnotify').hide();
            }, 3000);
        }else{
            $('#personalDet').hide();
            $('#addressDet').hide();
            $('#businessDet').show();
        }
    }
    function showAddress(){
        var sectorSelect = document.getElementById("formSector");
        var entitySelect = document.getElementById("busiEntity");

        if ($('#aadhar').val() === '' || $('#businessName').val() === '' || sectorSelect.value === 'Select Business Sector *' || entitySelect.value === 'Choose Business Type' || 
        $('#noemp').val() === '' || $('#startDate').val() === '' || $('#nomale').val() === '' || $('#nofemale').val() === '') {
            $('#customshopnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
            setTimeout(function() {
                $('#customshopnotify').hide();
            }, 4000);
        }else if (businessnameInput.classList.contains('is-invalid') || panInput.classList.contains('is-invalid') || aadharInput.classList.contains('is-invalid') ||
        noEmpInput.classList.contains('is-invalid') || nomaleInput.classList.contains('is-invalid') || nofemaleInput.classList.contains('is-invalid')) {
            $('#customshopnotify').removeClass('success').addClass('error').text('Please Remove errors').show();
            setTimeout(function() {
                $('#customshopnotify').hide();
            }, 3000);
        }else{
            $('#personalDet').hide();
            $('#businessDet').hide();
            $('#addressDet').show();
        }
    }
    function showPersonal(){
        $('#businessDet').hide();
        $('#addressDet').hide();
        $('#personalDet').show();
    }

    $('#shopactSubmit').on('click', function(event) {
        event.preventDefault();

        var bstateSelect = document.getElementById("bformState");
        var bcitySelect = document.getElementById("bformcity");

        if ($('#baddress').val() === '' || $('#bpincode').val() === '' || bstateSelect.value === 'Select State *' || bcitySelect.value === 'Select City *') {

            $('#customshopnotify').removeClass('success').addClass('error').text('Please fill fields.').show();
            
            setTimeout(function() {
                $('#customshopnotify').hide();
            }, 4000);
            
            return false; // prevent form submission
        }

        $.ajax({
            url: '<?php echo BASEURL ?>db/services_form',
            method: 'POST',
            data: $('#shopactform').serialize(),
            success: function(response) {

                if (bpincodeInput.classList.contains('is-invalid') || baddressInput.classList.contains('is-invalid')) {
                    $('#customshopnotify').removeClass('success').addClass('error').text('Please Remove errors').show();
                    setTimeout(function() {
                        $('#customshopnotify').hide();
                    }, 3000);
                }else if(response === 'notagree'){
                        $('#customshopnotify').removeClass('success').addClass('error').text('Except Terms & conditions for Form Submit').show();
                        setTimeout(function() {
                            $('#customshopnotify').hide();
                        }, 3000);
                }else if(response === 'success'){
                        window.location.href="<?php echo BASEURL ?>payment/";
                }else{
                    $('#customshopnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
                    setTimeout(function() {
                        $('#customshopnotify').hide();
                    }, 3000);
                }
            }
        });
    });
    </script>