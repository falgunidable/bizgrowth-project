<?php
include_once(dirname(__FILE__) .'\db\defineUrl.php');
?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<style>
  #custom-notification {
display: none;
width:400px;
text-align:center;
position: fixed;
top: 0px;
left: 50%;
transform: translateX(-50%);
border-radius: 5px;
background-color: #fff;
color: white;
box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}

#custom-notification.success{
background-color: #2bdb31;
}
#custom-notification.error{
background-color: #f44336;
}
</style>
<form id="consultForm" method="post" action="upload.php" enctype="multipart/form-data">
  <div id="custom-notification" class="p-2 fw-bold fst-italic"></div>
  <div class="row g-3 p-2">
      <div class="col-md-4">
          <input type="text" class="form-control" id="cfirstname" name="cfirstname" placeholder="Full Name" />
          <div class="error-message"></div>
      </div>
      <div class="col-md-4">
          <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Email">
          <div class="error-message"></div>
      </div>
      <div class="col-md-4">
          <input type="text" class="form-control" id="cptitle" name="cptitle" placeholder="Professional Title (Eg. Web Developer)"/>
          <div class="error-message"></div>
      </div>
  </div>
  <div class="row g-3 p-2">
      <div class="col-md-4">
          <input type="text" class="form-control" id="cexperience" name="cexperience" placeholder="Work Experience (in months)"
          oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2);"
          pattern="[0-9]{1,2}"/>
          <div class="error-message"></div>
      </div>
      <div class="col-md-3">
          <input type="text" class="form-control" id="cage" name="cage" placeholder="Age"
          maxlength="2"
          oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2);"
          pattern="[0-9]{1,2}"/>
          <div class="error-message"></div>
      </div>
      <div class="col-md-5">
          Gender <span style="color:red">*</span> -  
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="cgender" id="cgender" value="male">
              <label class="form-check-label">Male</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="cgender" id="cgender" value="female">
              <label class="form-check-label">Female</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="cgender" id="cgender" value="other">
              <label class="form-check-label">Other</label>
          </div>
      </div>
  </div>
  <div class="row g-3 p-2">
      <div class="col-md-3">
          <input type="text" class="form-control" id="cqualification" name="cqualification" placeholder="Highest Qualification"/>
      </div>
      <div class="col-md-3">
          <select class="form-control" id="csector" name="csector">
              <option selected disabled>Sector of Consultancy</option>
              <option value="Marketing">Marketing</option>
              <option value="Sales">Sales</option>
              <option value="HR">Human Resources</option>
              <option value="Operations">Operations</option>
              <option value="Finance">Finance</option>
              <option value="Technology">Technology</option>
          </select>
      </div>
      <div class="col-md-4">
          <div class="form-group row">
              <label for="resume" class="col-sm-3 col-form-label">Resume</label>
              <div class="col-sm-9">
                  <input type="file" accept="application/pdf" id="resume" name="resume"/>
              </div>
          </div>
      </div>
  </div>
  <div class="row g-3 p-2">
      <div class="col-md-4">
          <input type="text" class="form-control" id="csalary" name="csalary" placeholder="Current Salary"
          oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6);"
          pattern="[0-9]{1,6}"/>
          <div class="error-message"></div>
      </div>
      <div class="col-md-4">
          <input type="text" class="form-control" id="esalary" name="esalary" placeholder="Expected Salary"
          oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6);"
          pattern="[0-9]{1,6}"/>
          <div class="error-message"></div>
      </div>
      <div class="col-md-4">
          <div class="form-group row">
              <label for="photo" class="col-sm-3 col-form-label">Photo</label>
              <div class="col-sm-9">
                  <input type="file" class="form-control" name="image_file" accept="image/*" />
              </div>
          </div>
      </div>
  </div>
  <div class="row g-3 p-2">
      <div class="col-md-6">
          <textarea type="text" class="form-control" rows="1" placeholder="Skills" name="skills" id="skills"></textarea>
      </div>
      <div class="col-md-6">
          <div class="form-group row">
              <label for="certificates" class="col-sm-5 col-form-label">Certificates <span class="text-muted">(Optional)</span></label>
              <div class="col-sm-7">
                  <input type="file" class="form-control form-control-sm" id="certificates" name="certificates"/>
              </div>
          </div>
      </div>
  </div>
  <div class="row g-3 p-2">
      <div class="col-md-3">
          <select
              id="formState"
              name="cstate"
              class="form-control"
              onchange="print_city('formCity',this.selectedIndex);"></select>
      </div>
      <div class="col-md-3">
          <select id="formCity" name="ccity" class="form-control"></select>  
      </div>
      <div class="col-md-2">
          <input type="text" class="form-control" placeholder="Pincode"
              id="cpincode"
              name="cpincode"
              maxlength="6"
              oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
              pattern="[0-9]{6}"/>
              <div class="error-message"></div>
      </div>
      <div class="col-md-4">
          <input type="text" class="form-control" id="caddress" name="caddress" placeholder="Address (1 line)"/>
          <div class="error-message"></div>
      </div>
  </div>
  <div class="row g-3 p-2">
      <div class="col-md-4">
          <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin Link"/>
          <div class="error-message"></div>
      </div>
      <div class="col-md-4">
          <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter Link"/>
          <div class="error-message"></div>
      </div>
      <div class="col-md-4">
          <input type="text" class="form-control" id="cphone" name="cphone" placeholder="Contact No."
          oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
          maxlength="10"
          pattern="[0-9]{10}"/>
          <div class="error-message"></div>
      </div>
  </div>
  <div class="row g-3 p-2">
      <div class="col-md-4">
          <input type="text" class="form-control" id="cusername" name="cusername" placeholder="Username"/>
          <div class="error-message"></div>
      </div>
      <div class="col-md-4">
          <input type="text" class="form-control" id="cpassword" name="cpassword" placeholder="Password"/>
          <div class="error-message"></div>
      </div>
      <div class="col">
          <div class="input-group date" id="datepicker">
              <span class="input-group-append">
                  <span class="input-group-text bg-light d-block">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" fill="currentColor" class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
                          <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                  </span>
              </span>
              <input type="text" class="form-control" placeholder="Book an Appointment" id="date" name="date"
              onfocus="(this.type='date')"
              onblur="(this.type='text')"/>
          </div>     
      </div>
  </div>
  <input type="file" class="form-control" name="image_file" accept="image/*">
  <div class="text-center">
    <button type="button" class="btn consult" data-bs-target="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal"
    style="background-color:transparent;border-radius:10px;color:#fe7f10"><b>Back to Login</b></button>
    <button type="submit" id="consultSubmit" class="btn consult" name="consultSubmit"
    style="background-color:transparent;border-radius:10px;color:#fe7f10"><b>Register</b></button>
  </div>
</form>
<script src="<?php echo BASEURL ?>js/cities.js"></script>
<script>
  print_state('formState');

  $(document).ready(function() {
  $('#consultForm').submit(function(event) {
    // Prevent the form from submitting
    event.preventDefault();

    // Validate each input field
    var firstName = $('#cfirstname').val();
    var email = $('#cemail').val();
    var title = $('#cptitle').val();
    var experience = $('#cexperience').val();
    var age = $('#cage').val();
    var gender = $('input[name=cgender]:checked', '#consultForm').val();
    var qualification = $('#cqualification').val();
    var sector = $('#csector').val();
    var salary = $('#csalary').val();

    // Check if any field is empty
    if (firstName == '' || email == '' || title == '' || experience == '' || age == '' || gender == undefined || qualification == '' || sector == null || resume == '' || salary == '') {
      // Show an error message
      $('#custom-notification').removeClass('success').addClass('error').text('Username Already Exist !').show();
                        setTimeout(function() {
                            $('#custom-notification').hide();
                        }, 3000);
    } else {
      // Submit the form if all fields are filled
      $('#consultForm').unbind('submit').submit();
    }
  });
});
</script>