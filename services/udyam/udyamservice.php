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
</style>
<!-- Modal -->
<div
class="modal fade"
id="udyamFormModal"
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
                        <b>Your Aadhaar Card is linked to your mobile number or your business is other
                            than a proprietorship concern</b><br/>
                        Official instructions to update Aadhaar details
                    </li>
                </ul>
                <div style="text-align:center;padding:20px">
                    <button
                        type="button"
                        class="udyam p-2 border-0"
                        data-bs-target="#formFillB"
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
id="formFillB"
aria-hidden="true"
tabindex="-1">
    <div class="modal-dialog modal-dialog-top modal-lg" style="position: relative;">
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
                <div id="customnotify" class="p-2 fw-bold fst-italic"></div>
                <form id="udyamForm" class="row g-3 p-3">
                    <input type="hidden" name="udyamserviceForm" />
                    <div class="form-group col-md-6">
                        <input
                            type="text"
                            id="fullname"
                            class="form-control shadow-sm"
                            name="fullname"
                            placeholder="Full Name as on Aadhar Card *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input
                            type="text"
                            id="aadhar"
                            class="form-control shadow-sm"
                            name="aadhar"
                            maxlength="12"
                            placeholder="Aadhar No - No data will be disclosed *"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 12);"
                            pattern="[0-9]{12}"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input
                            type="text"
                            class="form-control shadow-sm"
                            id="businessname"
                            name="businessName"
                            placeholder="Legal Name of the Business *"/>
                            <div class="error-message"></div>
                        <small class="text-muted fst-italic">(As mentioned in PAN)</small>
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            class="form-control shadow-sm"
                            id="pan"
                            name="panNo"
                            placeholder="Permanent Account Number (PAN) *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-6" style="font-size:14px">
                        GST Registered <span style="red">*</span> - 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gstradio" id="gstYes" value="yes">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gstradio" id="gstNo" value="no">
                            <label class="form-check-label">No</label>
                        </div><br/>
                        <small class="text-muted">
                        The option should be selected 
                        based on the maximum percentage of members.
                        </small>
                    </div>
                    <div class="col-md-6">
                        <select id="formSector" name="sector" class="form-control shadow-sm"></select>
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
                    <div class="col-md-6">
                        <input
                            type="text"
                            class="form-control shadow-sm"
                            id="sc"
                            name="sc"
                            placeholder="Soical Category *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" 
                            class="form-control shadow-sm"
                            id="startDate"
                            name="startDate"
                            placeholder="Date of incorporation *"
                            onfocus="(this.type='date')"
                            onblur="(this.type='text')"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-6">
                        <textarea type="text" 
                            class="form-control shadow-sm"
                            id="address"
                            name="address"
                            rows="1"
                            placeholder="Address *"></textarea>
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
                            placeholder="Pincode - Business Location *"
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
                            value="<?php echo $_SESSION['email']?>" disabled>
                    </div>
                    <div class="col-md-6">
                        <input
                            type="text"
                            id="mobile"
                            class="form-control shadow-sm"
                            name="mobile"
                            maxlength="10"
                            placeholder="Mobile No. *"
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
                                I agree to the terms and conditions and authorise Bizgrowth to contact me.
                            </label>
                        </div>
                    </div>
                    <div style="text-align:center;padding:0px 20px 0px 20px">
                        <button
                            class="udyam p-2 border-0"
                            data-bs-target="#udyamFormModal"
                            data-bs-toggle="modal"
                            data-bs-dismiss="modal"
                            type="button"
                            style="background-color:transparent;border-radius:10px;color:#fe7f10">
                            <b>BACK</b>
                        </button>
                        <button
                            id="udyamSubmit"
                            class="udyam p-2 border-0"
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
<script src="<?php echo BASEURL ?>js/validation.js"></script>
<script>
    print_state('formState');
    print_sector('formSector');

    var addressInput = document.getElementById('address');
    var errorContainer12 = addressInput.nextElementSibling;
    var aadharInput = document.getElementById('aadhar');
    var errorContainer11 = aadharInput.nextElementSibling;
    
    addressInput.addEventListener('input', function() {
        if (addressInput.value.trim() === '') {
            errorContainer12.textContent = 'Address cannot be empty';
            errorContainer12.style.display = 'block';
            addressInput.classList.add('is-invalid');
        } else {
            errorContainer12.style.display = 'none';
            addressInput.classList.remove('is-invalid');
            addressInput.classList.add('is-valid');
        }
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

    $('#udyamSubmit').on('click', function(event) {
        event.preventDefault();

        if ($('#fullname').val() === '' || $('#aadhar').val() === '' || $('#businessname').val() === '' || $('#pan').val() === '' ||
        $('#sc').val() === '' || $('#address').val() === '' || $('#pincode').val() === '' || $('#email').val() === '' || $('#mobile').val() === '') {

            $('#customnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
            
            setTimeout(function() {
                $('#customnotify').hide();
            }, 4000);
            
            return false; // prevent form submission
        }

        $.ajax({
            url: '<?php echo BASEURL ?>db/services_form',
            method: 'POST',
            data: $('#udyamForm').serialize(),
            success: function(result) {
                var isFormValid = true;

                if (fullnameInput.classList.contains('is-invalid') || businessnameInput.classList.contains('is-invalid') 
                || panInput.classList.contains('is-invalid') || pincodeInput.classList.contains('is-invalid') 
                || emailInput.classList.contains('is-invalid') || mobileInput.classList.contains('is-invalid') ||
                aadharInput.classList.contains('is-invalid') || addressInput.classList.contains('is-invalid')) {
                    isFormValid = false;
                }
                if(result === 'notagree'){
                        $('#customnotify').removeClass('success').addClass('error').text('Except Terms & conditions for Form Submit').show();
                        setTimeout(function() {
                            $('#customnotify').hide();
                        }, 3000);
                }else if(result === 'success' && isFormValid){
                        window.location.href="<?php echo BASEURL ?>services/udyam/udyam_register";
                }else{
                    $('#customnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
                    setTimeout(function() {
                        $('#customnotify').hide();
                    }, 3000);
                }
            }
        });
    });
    </script>