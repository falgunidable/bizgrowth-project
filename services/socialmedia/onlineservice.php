<?php 
if(isset($_SESSION['email'])){ $email = $_SESSION['email']; } ?>
<script src="<?php echo BASEURL ?>js/cities.js"></script>
<style>
    #customnotify {
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

    #customnotify.success{
    background-color: #2bdb31;
    }
    #customnotify.error{
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
id="udyamFormModal"
tabindex="-1"
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-body">
                <h5
                    class="modal-title p-2"
                    id="exampleModalLabel"
                    style="margin-left:10px;">
                    <b>Online Starter Pack Requirements</b>
                </h5><br/>
                <ul class="list">
                    <li>
                        <b>You have an existing business or you have finalised your business idea</b>
                    </li>
                </ul>
                <div style="text-align:right;padding:20px">
                    <button
                        type="button"
                        class="col-md-2 udyam p-2 border-0 text-white"
                        data-bs-target="#formFillB"
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
id="formFillB"
aria-hidden="true"
tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-xl" style="position: relative;">
        <div class="modal-content">
            <div class="modal-body">
                <div id="customnotify" class="p-2 fw-bold fst-italic"></div>
                <form id="udyamForm" class="p-3">
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
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 25%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px;margin-top:40px">
                            <button
                                class="col-md-2 udyam p-2"
                                data-bs-target="#udyamFormModal"
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
                            <label for="fullname" class="form-label h6"><b>Aadhar Number*</b></label>
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
                            <label for="businessname" class="form-label h6"><b>Legal Name of the Business*</b></label>
                            <input
                                type="text"
                                class="form-control border-2 border-dark p-2"
                                id="businessname"
                                name="businessName"
                                placeholder="(As mentioned in PAN)"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="formSector" class="form-label h6"><b>Sector*</b></label>
                            <select id="formSector" name="sector" class="form-control border-2 border-dark p-2"></select>
                        </div>
                        <div class="col-md-6">
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
                        <div class="col-md-4">
                            <label for="formState" class="form-label h6"><b>State*</b></label>
                            <select
                                id="formState"
                                name="state"
                                class="form-control border-2 border-dark p-2"
                                onchange="print_city('formCity',this.selectedIndex);"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="formCity" class="form-label h6"><b>City*</b></label>
                            <select id="formCity" name="city" class="form-control border-2 border-dark p-2"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="pincode" class="form-label h6"><b>Pincode - Business Location*</b></label>
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
                        <div class="col-md-12" style="margin-top:20px">
                            <div class="form-check">
                                <input
                                    class="form-check-input border-2 border-dark p-2"
                                    type="checkbox"
                                    name="agreecond"
                                    id="agree"/>
                                <label class="form-check-label" for="flexCheckDefault"> I agree to the terms and conditions and authorise Bizgrowth to contact me.
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
                                id="udyamSubmit"
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
    print_sector('formSector');

    // var addressInput = document.getElementById('address');
    // var errorContainer12 = addressInput.nextElementSibling;
    // var aadharInput = document.getElementById('aadhar');
    // var errorContainer11 = aadharInput.nextElementSibling;
    
    // addressInput.addEventListener('input', function() {
    //     if (addressInput.value.trim() === '') {
    //         errorContainer12.textContent = 'Address cannot be empty';
    //         errorContainer12.style.display = 'block';
    //         addressInput.classList.add('is-invalid');
    //     } else {
    //         errorContainer12.style.display = 'none';
    //         addressInput.classList.remove('is-invalid');
    //         addressInput.classList.add('is-valid');
    //     }
    // });
    // aadharInput.addEventListener('input', function() {
    //     let aadhaar = /^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/;
    //     if (aadharInput.value.trim() === '') {
    //         errorContainer11.textContent = 'Aadhar Number cannot be empty';
    //         errorContainer11.style.display = 'block';
    //         aadharInput.classList.add('is-invalid');
    //     } else if(!aadhaar.test(aadharInput.value)){
    //         errorContainer11.textContent = 'Invalid Aadhar Number';
    //         errorContainer11.style.display = 'block';
    //         aadharInput.classList.add('is-invalid');
    //     }else {
    //         errorContainer11.style.display = 'none';
    //         aadharInput.classList.remove('is-invalid');
    //         aadharInput.classList.add('is-valid');
    //     }
    // });

    $(document).ready(function(){
        $('#formFillB').on('hidden.bs.modal', function () {
        // Reset the form
            $('#udyamForm')[0].reset();
            $(this).find('input').removeClass('is-invalid');
            $(this).find('input').removeClass('is-valid');
            $(this).find('textarea').removeClass('is-invalid');
            $(this).find('textarea').removeClass('is-valid');
            $('.error-message').hide();
        });
    });

    function showBusiness(){
        // if ($('#fullname').val() === '' || $('#mobile').val() === '' || $('#sc').val() === '') {
        //     $('#customnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
        //     setTimeout(function() {
        //         $('#customnotify').hide();
        //     }, 4000);
        // }else if (fullnameInput.classList.contains('is-invalid') || mobileInput.classList.contains('is-invalid')) {
        //     $('#customnotify').removeClass('success').addClass('error').text('Please Remove errors').show();
        //     setTimeout(function() {
        //         $('#customnotify').hide();
        //     }, 3000);
        // }else{
            $('#personalDet').hide();
            $('#addressDet').hide();
            $('#businessDet').show();
        // }
    }
    function showAddress(){
        // if ($('#aadhar').val() === '' || $('#businessname').val() === '' || $('#pan').val() === '' || $('#gstradio').val() === '' || $('#gstgender').val() === '' || $('#startDate').val() === '' || $('#formSector').val() === '') {
        //     $('#customnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
        //     setTimeout(function() {
        //         $('#customnotify').hide();
        //     }, 4000);
        // }else if (businessnameInput.classList.contains('is-invalid') || panInput.classList.contains('is-invalid') || aadharInput.classList.contains('is-invalid')) {
        //     $('#customnotify').removeClass('success').addClass('error').text('Please Remove errors').show();
        //     setTimeout(function() {
        //         $('#customnotify').hide();
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

    // $('#udyamSubmit').on('click', function(event) {
    //     event.preventDefault();

    //     if ($('#fullname').val() === '' || $('#aadhar').val() === '' || $('#businessname').val() === '' || $('#pan').val() === '' ||
    //     $('#gstradio').val() === '' || $('#gstgender').val() === '' || $('#sc').val() === '' || $('#startDate').val() === '' || $('#address').val() === '' || 
    //     $('#formState').val() === '' || $('#formCity').val() === '' || $('#pincode').val() === '' || $('#mobile').val() === '') {

    //         $('#customnotify').removeClass('success').addClass('error').text('Please fill fields.').show();
            
    //         setTimeout(function() {
    //             $('#customnotify').hide();
    //         }, 4000);
            
    //         return false; // prevent form submission
    //     }

    //     $.ajax({
    //         url: '<?php echo BASEURL ?>db/services_form',
    //         method: 'POST',
    //         data: $('#udyamForm').serialize(),
    //         success: function(response) {

    //             if (fullnameInput.classList.contains('is-invalid') || businessnameInput.classList.contains('is-invalid') 
    //             || panInput.classList.contains('is-invalid') || pincodeInput.classList.contains('is-invalid') 
    //             || mobileInput.classList.contains('is-invalid') || aadharInput.classList.contains('is-invalid') 
    //             || addressInput.classList.contains('is-invalid')) {
    //                 $('#customnotify').removeClass('success').addClass('error').text('Please Remove errors').show();
    //                 setTimeout(function() {
    //                     $('#customnotify').hide();
    //                 }, 3000);
    //             }else if(response === 'notagree'){
    //                     $('#customnotify').removeClass('success').addClass('error').text('Except Terms & conditions for Form Submit').show();
    //                     setTimeout(function() {
    //                         $('#customnotify').hide();
    //                     }, 3000);
    //             }else if(response === 'success'){
    //                     window.location.href="<?php echo BASEURL ?>payment/";
    //             }else{
    //                 $('#customnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
    //                 setTimeout(function() {
    //                     $('#customnotify').hide();
    //                 }, 3000);
    //             }
    //         }
    //     });
    // });
    </script>