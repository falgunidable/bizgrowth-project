<?php 
if(isset($_SESSION['email']))
    $email = $_SESSION['email']; ?>
<script src="<?php echo BASEURL ?>js/cities.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
id="itrFormModal"
tabindex="-1"
aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius:10px">
            <div class="modal-body">
                <h5
                    class="modal-title p-2"
                    id="exampleModalLabel"
                    style="margin-left:10px;">
                    <b>ITR Filing Requirements</b>
                </h5><br/>
                <ul class="list">
                    <li>
                        <b>You can provide financial records of the year for which the ITR has to be filed.</b>
                    </li>
                    <li>
                        <b>You can provide supporting documents such as bank statements or invoices etc.<br/>(If required)</b>
                    </li>
                </ul>
                <div style="text-align:right;padding:20px">
                    <button
                        type="button"
                        class="col-md-2 itr p-2 border-0 text-white"
                        data-bs-target="#itrfilingformModal"
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
id="itrfilingformModal"
aria-hidden="true"
tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl" style="position: relative;">
        <div class="modal-content">
            <div class="modal-body">
                <div id="customnotify" class="p-2 fw-bold fst-italic"></div>
                <form id="itrForm" class="row g-3 p-3">
                    <input type="hidden" name="itrserviceForm" value="ITR Service"/>
                    <input type="hidden" name="itrprice" value="899" />
                    <div class="row g-3" id="personalDet">
                        <div style="color:#5A41A0" class="p-3"> 
                            <h5><b>Personal Details</b></h5>
                            <div class="line-container">
                                <hr style="width:100%;height:2px;text-align:center;color:#5A41A0">
                                <small class="line-text"><b>All Fields are mandatory*</b></small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="firstname" class="form-label h6"><b>First Name*</b></label>
                            <input
                                type="text"
                                id="firstname"
                                class="form-control border-2 border-dark p-2"
                                name="firstname"
                                placeholder="First Name *"/>
                                <div class="error-message"></div>
                        </div>
                        <div class="col-md-3">
                            <label for="middlename" class="form-label h6"><b>Middle Name*</b></label>
                            <input
                                type="text"
                                id="middlename"
                                class="form-control border-2 border-dark p-2"
                                name="middlename"
                                placeholder="Middle Name *"/>
                                <div class="error-message"></div>
                        </div>
                        <div class="col-md-3">
                            <label for="lastname" class="form-label h6"><b>Last Name*</b></label>
                            <input
                                type="text"
                                id="lastname"
                                class="form-control border-2 border-dark p-2"
                                name="lastname"
                                placeholder="Last Name *"/>
                                <div class="error-message"></div>
                        </div>
                        <div class="col-md-3">
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
                                placeholder="Mobile Number *"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                                pattern="[0-9]{10}"/>
                                <div class="error-message"></div>
                        </div>
                        <div class="col-md-4">
                            <label for="datebirth" class="form-label h6"><b>Date of Birth*</b></label>
                            <input type="text" 
                                class="form-control border-2 border-dark p-2"
                                id="datebirth"
                                name="datebirth"
                                placeholder="Date of Birth *"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')"/>
                                <div class="error-message"></div>
                        </div>
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 25%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px;margin-top:40px">
                            <button
                                class="col-md-2 itr p-2"
                                data-bs-target="#itrFormModal"
                                data-bs-toggle="modal"
                                data-bs-dismiss="modal"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                onclick="showBusiness();"
                                class="col-md-2 itr p-2 border-0 text-white"
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
                            <label for="aadhar" class="form-label h6"><b>Aadhar Number*</b></label>
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
                            <label for="panNo" class="form-label h6"><b>Permanent Account Number (PAN)*</b></label>
                            <input
                                type="text"
                                class="form-control shadow-sm"
                                id="panNo"
                                name="panNo"
                                placeholder="PAN Number *"/>
                                <div class="error-message"></div>
                        </div>
                        <div class="col-md-4" style="font-size:14px">
                            <label for="itrgender" class="form-label h6"><b>Gender</b></label><br/>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input border-2 border-dark p-2" type="radio" name="itrgender" id="itrgender" value="male">
                                <label class="form-check-label h6">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input border-2 border-dark p-2" type="radio" name="itrgender" id="itrgender" value="female">
                                <label class="form-check-label h6">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input border-2 border-dark p-2" type="radio" name="itrgender" id="itrgender" value="other">
                                <label class="form-check-label h6">Other</label>
                            </div></br>
                        </div>
                        <div class="col-md-3">
                            <label for="formState" class="form-label h6"><b>State*</b></label>
                            <select
                                id="formState"
                                name="state"
                                class="form-control border-2 border-dark p-2"
                                onchange="print_city('formCity',this.selectedIndex);"></select>
                        </div>
                        <div class="col-md-3">
                            <label for="formCity" class="form-label h6"><b>City*</b></label>
                            <select id="formCity" name="city" class="form-control border-2 border-dark p-2"></select>
                        </div>
                        <div class="col-md-2">
                            <label for="pincode" class="form-label h6"><b>Pincode*</b></label>
                            <input
                                type="text"
                                class="form-control border-2 border-dark p-2"
                                id="pincode"
                                name="pincode"
                                placeholder="Pincode *"
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
                                placeholder="Address *"></textarea>
                                <div class="error-message"></div>
                        </div>
                        <div class="col-md-12" style="font-size:14px">
                            <label for="itrmarriage" class="form-label h6"><b>Martial Status</b></label><br/>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input border-2 border-dark p-2" type="radio" name="itrmarriage" id="itrmarriage" value="Married">
                                <label class="form-check-label h6">Married</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input border-2 border-dark p-2" type="radio" name="itrmarriage" id="itrmarriage" value="UnMarried">
                                <label class="form-check-label h6">Unmarried</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input border-2 border-dark p-2" type="radio" name="itrmarriage" id="itrmarriage" value="No Disclosure">
                                <label class="form-check-label h6">No Disclosure</label>
                            </div>
                        </div>
                        <div class="progress" style="height: 5px;margin-top:40px">
                            <div class="progress-bar" role="progressbar" style="width: 50%;background-color:#7058B9" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div style="text-align:right;padding:0px 20px 0px 20px;margin-top:40px">
                            <button
                                class="col-md-2 itr p-2"
                                onclick="showPersonal();"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                onclick="showAddress();"
                                class="col-md-2 itr p-2 border-0 text-white"
                                type="button"
                                style="background-color:#5A41A0;border-radius:10px;">
                                <b>NEXT</b>
                            </button>
                        </div>
                    </div>
                    <div id="addressDet" class="row g-3" style="display:none">
                        <div style="color:#5A41A0" class="p-3"> 
                            <h5><b>Bank Details</b></h5>
                            <div class="line-container">
                                <hr style="width:100%;height:2px;text-align:center;color:#5A41A0">
                                <small class="line-text"><b>All Fields are mandatory*</b></small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="bankname" class="form-label h6"><b>Bank Name*</b></label>
                            <input
                                type="text"
                                id="bankname"
                                class="form-control border-2 border-dark p-2"
                                name="bankname"
                                placeholder="Bank Name *"/>
                                <div class="error-message"></div>
                        </div>
                        <div class="col-md-3">
                            <label for="accno" class="form-label h6"><b>Account Number*</b></label>
                            <input
                                type="text"
                                id="accno"
                                class="form-control border-2 border-dark p-2"
                                name="accno"
                                placeholder="Account Number *"/>
                                <div class="error-message"></div>
                        </div>
                        <div class="col-md-3">
                            <label for="ifsc" class="form-label h6"><b>IFSC Code*</b></label>
                            <input
                                type="text"
                                id="ifsc"
                                class="form-control border-2 border-dark p-2"
                                name="ifsc"
                                placeholder="IFSC Code *"/>
                                <div class="error-message"></div>
                        </div>
                        <div class="col-md-3">
                            <label for="acctype" class="form-label h6"><b>Account Type*</b></label>
                            <textarea type="text" 
                                class="form-control border-2 border-dark p-2"
                                id="acctype"
                                name="acctype"
                                rows="1"
                                placeholder="Account Type*"></textarea>
                                <div class="error-message"></div>
                        </div>
                        <h5 style="color:#5A41A0;margin-top:30px"><b>Income Information</b></h5>
                        <hr style="width:100%;height:2px;text-align:center;color:#5A41A0">
                        <div class="row" id="sigma-id">
                            <div class="col-md-6">
                                <label for="siname" class="form-label h6"><b>Organization Name *</b></label>
                                <input
                                    type="text"
                                    id="siname"
                                    class="form-control border-2 border-dark p-2"
                                    name="siname[]"
                                    placeholder="Praveen Technologies"/>
                                    <div class="error-message"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="siprice" class="form-label h6"><b>Salary *</b></label>
                                <input
                                    type="text"
                                    id="siprice"
                                    class="form-control border-2 border-dark p-2"
                                    name="siprice[]"
                                    placeholder="1,00,000"/>
                                    <div class="error-message"></div>
                            </div>
                            <div class="col-md-2">
                                <br/>
                                <button type="button" class="form-control itr border-0 text-white p-2 addmore"
                                style="background-color:#5A41A0;border-radius:10px;"><b>Add +</b></button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="form-control itr border-0 text-white p-2" 
                            style="background-color:#5A41A0;border-radius:5px;"
                            data-bs-target="#docfrom16" data-bs-toggle="modal" data-bs-dismiss="modal">Upload Form 16</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="form-control itr border-0 text-white p-2" 
                            style="background-color:#5A41A0;border-radius:5px;">Upload Tax Document</button>
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
                                class="col-md-2 itr p-2"
                                onclick="showBusiness();"
                                type="button"
                                style="background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;margin-right:10px">
                                <b>BACK</b>
                            </button>
                            <button
                                class="col-md-2 itr p-2 border-0 text-white"
                                type="button"
                                style="background-color:5A41A0;border-radius:10px;">
                                <b>SUBMIT</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="docfrom16" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2"><b>Upload Form</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <label for="formFile" class="form-label">Form 16</label>
            <input class="form-control" type="file" id="formFile">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#itrfilingformModal" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
     $(".addmore").on('click', function() {
        // var count = $('$sigma-id div').length - 1;
        var data = "<div class='input-group col-md-12' style='margin-top:10px'><input type='text' class='form-control prompt border-2 border-dark' name='siname[]' placeholder='Organization Name'/>";
        data += "<textarea type='text' class='form-control border-2 border-dark completion' name='siprice[]' rows='1' placeholder='Salary'></textarea><button class='remCF btn btn-outline-danger m-3 rounded'>Remove</button></div>";
        $('#sigma-id').append(data);
        // count++;
    });
    $("#sigma-id").on("click",'.remCF',function(){                
        $(this).closest('div').remove(); 
    });
    print_state('formState');
    print_sector('formSector');

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
        // if ($('#aadhar').val() === '' || $('#businessName').val() === '' || $('#panNo').val() === '' || $('#gstradio').val() === '' || $('#itrgender').val() === '' || $('#startDate').val() === '' || $('#formSector').val() === '') {
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

</script>