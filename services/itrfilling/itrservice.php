<?php 
if(isset($_SESSION['email']))
    $email = $_SESSION['email']; ?>
<script src="<?php echo BASEURL ?>js/cities.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
                    </div><br/>
                    <div style="text-align:center;padding:0px 20px 0px 20px">
                        <button
                            type="button"
                            class="itr p-2 border-0"
                            style="background-color:transparent;border-radius:10px;color:#fe7f10"
                            data-bs-target="#bankdet" data-bs-toggle="modal" data-bs-dismiss="modal">
                            <b>NEXT</b>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div
class="modal fade"
id="bankdet"
aria-hidden="true"
tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="position: relative;">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #fe7f10;color:white">
                <h5 class="modal-title fw-bold" id="exampleModalToggleLabel2">Bank Details</h5>
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
                    <div class="form-group col-md-6">
                        <input
                            type="text"
                            id="bankname"
                            class="form-control shadow-sm"
                            name="bankname"
                            placeholder="Bank Name *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input
                            type="text"
                            id="accno"
                            class="form-control shadow-sm"
                            name="accno"
                            placeholder="Account Number *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input
                            type="text"
                            id="ifsc"
                            class="form-control shadow-sm"
                            name="ifsc"
                            placeholder="IFSC Code *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <textarea type="text" 
                            class="form-control shadow-sm"
                            id="acctype"
                            name="acctype"
                            rows="1"
                            placeholder="Account Type*"></textarea>
                            <div class="error-message"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input
                            type="text"
                            id="siname"
                            class="form-control shadow-sm"
                            name="siname"
                            placeholder="Salary Income - Organization Name *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="form-group col-md-4">
                        <input
                            type="text"
                            id="siprice"
                            class="form-control shadow-sm"
                            name="siprice"
                            placeholder="Salary Income - Price *"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="form-group col-md-2">
                        <button type="button" class="form-control btn btn-primary">Add +</button>
                    </div>

                    <div class="container" id="sigma-id">
                        <div class='input-group col-12'>
                            <input type='text' class='form-control col-md-6' name='prompt[]' placeholder='some prompt'/>
                            <input type='text' class='form-control col-md-4' name='completion[]' placeholder='some completion'/>
                            <button type="button" class="addmore btn btn-outline-success m-2">+ Add Row</button>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <button type="button" class="form-control btn btn-outline-secondary" 
                        data-bs-target="#docfrom16" data-bs-toggle="modal" data-bs-dismiss="modal">Upload Form 16</button>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="button" class="form-control btn btn-outline-secondary">Upload Tax Document</button>
                    </div><br/>
                    <div style="text-align:center;padding:0px 20px 0px 20px">
                        <button
                            class="itr p-2 border-0"
                            type="button"
                            style="background-color:transparent;border-radius:10px;color:#fe7f10"
                            data-bs-target="#itrform" data-bs-toggle="modal" data-bs-dismiss="modal">
                            <b>BACK</b>
                        </button>
                        <button
                            class="itr p-2 border-0"
                            type="button"
                            style="background-color:transparent;border-radius:10px;color:#fe7f10">
                            <b>SUBMIT</b>
                        </button>
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
        <button class="btn btn-primary" data-bs-target="#bankdet" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
     $(".addmore").on('click', function() {
        // var count = $('$sigma-id div').length - 1;
        var data = "<div class='input-group col-12'><input type='text' class='form-control form-input prompt col-6' name='prompt[]' placeholder='some prompt'/>";
        data += "<textarea type='text' class='form-control form-input completion col-6' name='completion[]' rows='2' placeholder='some completion'></textarea><button class='remCF btn btn-outline-danger m-3'>Remove</button></div>";
        $('#sigma-id').append(data);
        // count++;
    });
    // $(".addmore").click(function(){
    //     $("#sigma-id").append("<div class='input-group col-12'><input type='text' class='form-control form-input prompt col-6' name='prompt[]' placeholder='some prompt'/><textarea type='text' class='form-control form-input completion col-6' name='completion[]' rows='2' placeholder='some completion'></textarea><a href='javascript:void(0);' class='remCF'>Remove</a></div>");
    // });
    $("#sigma-id").on("click",'.remCF',function(){                
        $(this).closest('div').remove(); 
    });
    print_state('formState');
    print_sector('formSector');
</script>