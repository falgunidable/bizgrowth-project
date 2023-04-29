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
id="trademarkModal"
tabindex="-1"
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-body">
                <h5
                    class="modal-title p-2"
                    style="margin-left:10px;">
                    <b>Trademark Registration Requirements</b>
                </h5><br/>
                <ol>
                    <li><b>In case of Sole Proprietorship concern</b></li> 
                    <ul class="list">           
                        <li>Copy of the logo, preferably in black & white (Optional).</li>     
                        <li>Signed Form-48.</li>            
                        <li>Identity Proof of the individual or Proprietor.</li>         
                        <li>Address Proof of the individual or Proprietor.</li>
                    </ul>
                    <li><b>In case of Partnership/LLP/Company</b></li>  
                    <ul class="list">           
                        <li>Copy of Logo (Optional)</li>     
                        <li>Signed Form-48.</li>     
                        <li>Udyog Aadhar Registration Certificate, if applicable.</li>     
                        <li>Incorporation Certificate in case of a Company.</li>
                        <li>Registered Partnership Deed for Partnership Companies.</li>            
                        <li>LLP deed in the case of LLP.</li>     
                        <li>Identity Proof of Signatory.</li>     
                        <li>Address Proof of Signatory.</li>     
                        <li>KYC documents of the business (PAN, Address proof).</li>
                    </ul>
                </ol>
                <div style="text-align:right;padding:20px">
                    <button
                        type="button"
                        class="col-md-2 udyam p-2 border-0 text-white"
                        data-bs-target="#trademarkFormModal"
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
id="trademarkFormModal"
aria-hidden="true"
tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-xl" style="position: relative;">
        <div class="modal-content">
            <div class="modal-body">
                <div id="customshopnotify" class="p-2 fw-bold fst-italic"></div>
                <form id="trademarkform" class="p-3">
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
                        <div class="col-md-6">
                            <label for="fullname" class="form-label h6"><b>Full Name*</b><small class="text-muted"> (The applicant on behalf of the business)</small></label>
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
                        <div class="col-md-2">
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
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 25%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px;margin-top:40px">
                            <button
                                class="col-md-2 copyright p-2"
                                data-bs-target="#trademarkModal"
                                data-bs-toggle="modal"
                                data-bs-dismiss="modal"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                onclick="showBusiness();"
                                class="col-md-2 copyright p-2 border-0 text-white"
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
                            <label for="businessName" class="form-label h6"><b>Name of the Business*</b></label>
                            <input
                                type="text"
                                class="form-control border-2 border-dark p-2"
                                id="businessName"
                                name="businessName"
                                placeholder="Praveen Agencies"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="panNo" class="form-label h6"><b>Permanent Account Number (PAN)*</b></label>
                            <input
                                type="text"
                                class="form-control border-2 border-dark p-2"
                                id="panNo"
                                name="panNo"
                                placeholder="ABCFZ1234D"/>
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
                            <label for="bemail" class="form-label h6"><b>Business Email Id*</b></label>
                            <input
                                type="text"
                                class="form-control border-2 border-dark p-2"
                                id="bemail"
                                name="bemail"
                                placeholder="pravinAgency@co.in"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 50%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px;margin-top:40px">
                            <button
                                class="col-md-2 copyright p-2"
                                onclick="showPersonal();"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                onclick="showAddress();"
                                class="col-md-2 copyright p-2 border-0 text-white"
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
                            <label for="formState" class="form-label h6"><b>State*</b></label>
                            <select
                                id="formState"
                                name="formState"
                                class="form-control border-2 border-dark p-2"
                                onchange="print_city('formCity',this.selectedIndex);"></select>
                        </div>
                        <div class="col-md-3">
                            <label for="formCity" class="form-label h6"><b>City*</b></label>
                            <select id="formCity" name="formCity" class="form-control border-2 border-dark p-2"></select>
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
                            <label for="address" class="form-label h6"><b>Address*</b></label>
                            <textarea type="text" 
                                class="form-control border-2 border-dark p-2"
                                id="address"
                                name="address"
                                rows="1"
                                placeholder=""></textarea>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="briefd" class="form-label h6"><b>Brief description of the products/services offered by the Business*</b></label>
                            <textarea type="text" 
                                class="form-control border-2 border-dark p-2"
                                id="briefd"
                                name="briefd"
                                rows="2"
                                placeholder=""></textarea>
                            <div class="error-message"></div>
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
                                class="col-md-2 copyright p-2"
                                onclick="showBusiness();"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                id="trademarkSubmit"
                                class="col-md-2 copyright p-2 border-0 text-white"
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
    print_sector('formSector');

    var bemailInput = document.getElementById('bemail');
    var errorContainer4 = bemailInput.nextElementSibling;
    var addressInput = document.getElementById('address');
    var errorContainer12 = addressInput.nextElementSibling;
    var briefdInput = document.getElementById('briefd');
    var errorContainer20 = briefdInput.nextElementSibling;
    
    bemailInput.addEventListener('input', function() {
        let emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if (bemailInput.value.trim() === '') {
            errorContainer4.textContent = 'Email cannot be empty';
            errorContainer4.style.display = 'block';
            bemailInput.classList.add('is-invalid');
        }else if(!emailRegex.test(bemailInput.value)){
            errorContainer4.textContent = 'Invalid Email';
            errorContainer4.style.display = 'block';
            bemailInput.classList.add('is-invalid');
        } else {
            errorContainer4.style.display = 'none';
            bemailInput.classList.remove('is-invalid');
            bemailInput.classList.add('is-valid');
        }
    });
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
    briefdInput.addEventListener('input', function() {
        if (briefdInput.value.trim() === '') {
            errorContainer20.textContent = 'Description cannot be empty';
            errorContainer20.style.display = 'block';
            briefdInput.classList.add('is-invalid');
        }else if (briefdInput.value.length < 20) {
            errorContainer20.textContent = 'Enter atleast 20 characters';
            errorContainer20.style.display = 'block';
            briefdInput.classList.add('is-invalid');
        } else {
            errorContainer20.style.display = 'none';
            briefdInput.classList.remove('is-invalid');
            briefdInput.classList.add('is-valid');
        }
    });

    $(document).ready(function(){
        $('#trademarkFormModal').on('hidden.bs.modal', function () {
        // Reset the form
            $('#trademarkform')[0].reset();
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
        var nationalSelect = document.getElementById("nationality");

        if ($('#fullname').val() === '' || $('#mobile').val() === '') {
            $('#customshopnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
            setTimeout(function() {
                $('#customshopnotify').hide();
            }, 4000);
        }else if (fullnameInput.classList.contains('is-invalid') || mobileInput.classList.contains('is-invalid')) {
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

        if ($('#businessName').val() === '' || $('#panNo').val() === '' || sectorSelect.value === 'Select Business Sector *' || entitySelect.value === 'Choose Business Type'
        || $('#bemail').val() === '') {
            $('#customshopnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
            setTimeout(function() {
                $('#customshopnotify').hide();
            }, 4000);
        }else if (businessnameInput.classList.contains('is-invalid') || panInput.classList.contains('is-invalid') || bemailInput.classList.contains('is-invalid')) {
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

    $('#trademarkSubmit').on('click', function(event) {
        event.preventDefault();

        var stateSelect = document.getElementById("formState");
        var citySelect = document.getElementById("formcity");

        if ($('#address').val() === '' || $('#pincode').val() === '' || $('#briefd').val() === '' || stateSelect.value === 'Select State *' || citySelect.value === 'Select City *') {

            $('#customshopnotify').removeClass('success').addClass('error').text('Please fill fields.').show();
            
            setTimeout(function() {
                $('#customshopnotify').hide();
            }, 4000);
            
            return false; // prevent form submission
        }

        $.ajax({
            url: '<?php echo BASEURL ?>db/services_form',
            method: 'POST',
            data: $('#trademarkform').serialize(),
            success: function(response) {

                if (pincodeInput.classList.contains('is-invalid') || addressInput.classList.contains('is-invalid') || briefdInput.classList.contains('is-invalid')) {
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