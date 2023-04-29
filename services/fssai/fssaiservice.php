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
id="fssaiModal"
tabindex="-1"
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-body">
                <h5
                    class="modal-title p-2"
                    id="exampleModalLabel"
                    style="margin-left:10px;">
                    <b>FSSAI Registration Requirements</b>
                </h5><br/>
                <ul class="list"> 
                    <li>
                        <b>Identity Proof - Voter’s ID Card, PAN Card, Driving Licence, Passport, AadhaarCard, Senior Citizen Card, IDs issued by a government department.</b>
                    </li>
                    <li>
                        <b>Scanned copy of the applicant’s photograph.</b>
                    </li>
                    <li>
                        <b>Proof of Address of businesses activity (if address is other than thatmentioned in the Photo ID Card).</b>
                    </li>
                    <li>
                        <b>Trade license/ NOC from oOwner or Municipal or society or gram panchayat.Health NOC is required on a case- to- case basis.</b>
                    </li>
                </ul>
                <div style="text-align:right;padding:20px">
                    <button
                        type="button"
                        class="col-md-2 fssai p-2 border-0 text-white"
                        data-bs-target="#fssaiFormModal"
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
id="fssaiFormModal"
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
                            <h5><b>Business Contact Details</b></h5>
                            <div class="line-container">
                                <hr style="width:100%;height:2px;text-align:center;color:#5A41A0">
                                <small class="line-text"><b>All Fields are mandatory*</b></small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="fullname" class="form-label h6"><b>Name of the Business*</b></label>
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
                            <label for="dateCommence" class="form-label h6"><b>Date of Commencement of Business*</b></label>
                            <input type="text" 
                                class="form-control border-2 border-dark p-2"
                                id="dateCommence"
                                name="dateCommence"
                                placeholder="Date"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 25%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px;margin-top:40px">
                            <button
                                class="col-md-2 fssai p-2"
                                data-bs-target="#fssaiModal"
                                data-bs-toggle="modal"
                                data-bs-dismiss="modal"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                onclick="showBusiness();"
                                class="col-md-2 fssai p-2 border-0 text-white"
                                type="button"
                                style="background-color:#5A41A0;border-radius:10px;">
                                <b>NEXT</b>
                            </button>
                        </div>
                    </div>
                    <div id="businessDet" class="row g-3" style="display:none">
                        <div style="color:#5A41A0" class="p-3"> 
                            <h5><b>Additional Details</b></h5>
                            <div class="line-container">
                                <hr style="width:100%;height:2px;text-align:center;color:#5A41A0">
                                <small class="line-text"><b>All Fields are mandatory*</b></small>
                            </div>
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
                            <label for="language" class="form-label h6"><b>Type of Business Entity*</b></label>
                            <select class="form-select border-2 border-dark p-2" id="language" name="language">
                                <option selected disabled>Choose Language</option>
                                <option value="1">English</option>
                                <option value="2">Hindi</option>
                                <option value="3">Marathi</option>
                                <option value="3">Gujrati</option>
                                <option value="3">Sanskrit</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="turnover" class="form-label h6"><b>Turnover of the business.*</b></label>
                            <select class="form-select border-2 border-dark p-2" id="turnover" name="turnover">
                                <option selected disabled>Choose Language</option>
                                <option value="1">English</option>
                                <option value="2">Hindi</option>
                                <option value="3">Marathi</option>
                                <option value="3">Gujrati</option>
                                <option value="3">Sanskrit</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="productCategory" class="form-label h6"><b>Product category of manufacture or trade.*</b></label>
                            <select class="form-select border-2 border-dark p-2" id="productCategory" name="productCategory">
                                <option selected disabled>Choose Language</option>
                                <option value="1">English</option>
                                <option value="2">Hindi</option>
                                <option value="3">Marathi</option>
                                <option value="3">Gujrati</option>
                                <option value="3">Sanskrit</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="quantity" class="form-label h6"><b>Annual quantity of production*</b></label>
                            <input
                                type="text"
                                class="form-control border-2 border-dark p-2"
                                id="quantity"
                                name="quantity"
                                placeholder="5"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 50%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px;margin-top:40px">
                            <button
                                class="col-md-2 fssai p-2"
                                onclick="showPersonal();"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                onclick="showAddress();"
                                class="col-md-2 fssai p-2 border-0 text-white"
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
                        <div class="col-md-12">
                            <label for="briefd" class="form-label h6"><b>Brief description of the Business activity*</b></label>
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
                                <label class="form-check-label h6" for="agreecond"> I agree to the terms and conditions and authorise Bizgrowth to contact me.
                                </label>
                            </div>
                        </div>
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 100%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px">
                            <button
                                class="col-md-2 fssai p-2"
                                onclick="showBusiness();"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                id="shopactSubmit"
                                class="col-md-2 fssai p-2 border-0 text-white"
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
    print_nationality('nationality');
    print_state('formState');
    

    var addressInput = document.getElementById('address');
    var errorContainer12 = addressInput.nextElementSibling;
    
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
        // if ($('#fullname').val() === '' || $('#mobile').val() === '' || nationalSelect.value === 'Select Nationality *') {
        //     $('#customshopnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
        //     setTimeout(function() {
        //         $('#customshopnotify').hide();
        //     }, 4000);
        // }else if (fullnameInput.classList.contains('is-invalid') || mobileInput.classList.contains('is-invalid')) {
        //     $('#customshopnotify').removeClass('success').addClass('error').text('Please Remove errors').show();
        //     setTimeout(function() {
        //         $('#customshopnotify').hide();
        //     }, 3000);
        // }else{
            $('#personalDet').hide();
            $('#addressDet').hide();
            $('#businessDet').show();
        // }
    }
    function showAddress(){
        // if ($('#businessName').val() === '') {
        //     $('#customshopnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
        //     setTimeout(function() {
        //         $('#customshopnotify').hide();
        //     }, 4000);
        // }else if (businessnameInput.classList.contains('is-invalid')) {
        //     $('#customshopnotify').removeClass('success').addClass('error').text('Please Remove errors').show();
        //     setTimeout(function() {
        //         $('#customshopnotify').hide();
        //     }, 3000);
        // }else{
            $('#personalDet').hide();
            $('#businessDet').hide();
            $('#addressDet').show();
        // }
    }
    function showPersonal(){
        $('#businessDet').hide();
        $('#addressDet').hide();
        $('#personalDet').show();
    }

    $('#shopactSubmit').on('click', function(event) {
        event.preventDefault();

        var bstateSelect = document.getElementById("formState");
        var bcitySelect = document.getElementById("formcity");

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