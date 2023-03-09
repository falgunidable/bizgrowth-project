<script src="../js/cities.js"></script>
<style>
    #customnotification {
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

#customnotification.success{
background-color: #2bdb31;
}
#customnotification.error{
background-color: #f44336;
}
</style>
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
                <div id="customnotification" class="p-2 fw-bold fst-italic"></div>
                <form id="gstForm" class="row g-3 p-3">
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
                            type="button"
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
<script src="../js/validation.js"></script>
<script>
    print_state('formState');
    print_sector('formSector');

    $(document).ready(function(){
        $('#formFillA').on('hidden.bs.modal', function () {
        // Reset the form
            $('#gstForm')[0].reset();
            $(this).find('input').removeClass('is-invalid');
            $(this).find('input').removeClass('is-valid');
            $('.error-message').hide();
        });
    });

    $('#gstSubmit').on('click', function(event) {
        event.preventDefault();

        // if ($('#fullname').val() === '' || $('#businessname').val() === '' || $('#pan').val() === '') {

        //     $('#customnotification').removeClass('success').addClass('error').text('Please fill in all fields.').show();
            
        //     setTimeout(function() {
        //         $('#customnotification').hide();
        //     }, 4000);
            
        //     return false; // prevent form submission
        // }

        $.ajax({
            url: '<?php echo BASEURL ?>db/gst_form',
            method: 'POST',
            data: $('#gstForm').serialize(),
            success: function(response) {
                var isFormValid = true;

                if (fullnameInput.classList.contains('is-invalid') || businessnameInput.classList.contains('is-invalid') 
                || panInput.classList.contains('is-invalid') || pincodeInput.classList.contains('is-invalid') 
                || emailInput.classList.contains('is-invalid') || mobileInput.classList.contains('is-invalid')) {
                    isFormValid = false;
                }
                if(response === 'notagree'){
                        $('#customnotification').removeClass('success').addClass('error').text('Except Terms & conditions for Form Submit').show();
                        setTimeout(function() {
                            $('#customnotification').hide();
                        }, 3000);
                }else if(response === 'success' && isFormValid){
                        // $('#custom-notification').removeClass('error').addClass('success').text('Registered Successfully !').show();
                        // setTimeout(function() {
                        //     $('#custom-notification').hide();
                        // }, 50000);
                        window.location.href="<?php echo BASEURL ?>gst/gst_register";
                    // Hide the first modal
                }else{
                    $('#customnotification').removeClass('success').addClass('error').text('Please fill in all fields.').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 3000);
                }
            }
        });
    });
    </script>