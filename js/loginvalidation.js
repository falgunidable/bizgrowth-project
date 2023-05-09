var lusernameInput = document.getElementById('lusername');
var errorContainer6 = lusernameInput.nextElementSibling;
var lpasswordInput = document.getElementById('lpassword');
var errorContainer7 = lpasswordInput.nextElementSibling;
var susernameInput = document.getElementById('susername');
var errorContainer8 = susernameInput.nextElementSibling;
var semailInput = document.getElementById('semail');
var errorContainer9 = semailInput.nextElementSibling;
var spasswordInput = document.getElementById('spassword');
var errorContainer10 = spasswordInput.nextElementSibling;

//consultant validation 
var cfullname = document.getElementById('cfirstname');
var nameError = cfullname.nextElementSibling;
var ptitle = document.getElementById('cptitle');
var titleError = ptitle.nextElementSibling;
var cusername = document.getElementById('cusername');
var usernameError = cusername.nextElementSibling;
var cpassword = document.getElementById('cpassword');
var passwordError = cpassword.nextElementSibling;
var cemail = document.getElementById('cemail');
var emailError = cemail.nextElementSibling;
var cage = document.getElementById('cage');
var ageError = cage.nextElementSibling;
var cexperience = document.getElementById('cexperience');
var expError = cexperience.nextElementSibling;
var pincode = document.getElementById('cpincode');
var pincodeError = pincode.nextElementSibling;
var address = document.getElementById('caddress');
var addressError = address.nextElementSibling;
var csalary = document.getElementById('csalary');
var csalaryError = csalary.nextElementSibling;
var esalary = document.getElementById('esalary');
var esalaryError = esalary.nextElementSibling;
var fee = document.getElementById('fee');
var feeError = fee.nextElementSibling;
var cmobile = document.getElementById('cphone');
var mobileError = cmobile.nextElementSibling;
var linkedin = document.getElementById('linkedin');
var linkedinError = linkedin.nextElementSibling;
var twitter = document.getElementById('twitter');
var twitterError = twitter.nextElementSibling;

lusernameInput.addEventListener('input', function() {
    if (lusernameInput.value.trim() === '') {
        errorContainer6.textContent = 'Username is empty';
        errorContainer6.style.display = 'block';
        lusernameInput.classList.add('is-invalid');
    } else {
        errorContainer6.style.display = 'none';
        lusernameInput.classList.remove('is-invalid');
        lusernameInput.classList.add('is-valid');
    }
});
lpasswordInput.addEventListener('input', function() {
    if (lpasswordInput.value.trim() === '') {
        errorContainer7.textContent = 'Password is empty';
        errorContainer7.style.display = 'block';
        lpasswordInput.classList.add('is-invalid');
    } else {
        errorContainer7.style.display = 'none';
        lpasswordInput.classList.remove('is-invalid');
        lpasswordInput.classList.add('is-valid');
    }
});
susernameInput.addEventListener('input', function() {
    const re = /^[a-zA-Z][\w]*$/;
    if (susernameInput.value.trim() === '') {
        errorContainer8.textContent = 'Username cannot be empty';
        errorContainer8.style.display = 'block';
        susernameInput.classList.add('is-invalid');
    } else if (susernameInput.value.length < 5 || susernameInput.value.length > 20) {
        errorContainer8.textContent = 'Username must be between 5 and 20 characters long.';
        errorContainer8.style.display = 'block';
        susernameInput.classList.add('is-invalid');
    } else if (!re.test(susernameInput.value)) {
        errorContainer8.textContent = 'First character should contain an alphabet and then a number or underscore.';
        errorContainer8.style.display = 'block';
        susernameInput.classList.add('is-invalid');
    }else {
        errorContainer8.style.display = 'none';
        susernameInput.classList.remove('is-invalid');
        susernameInput.classList.add('is-valid');
    }
});
semailInput.addEventListener('input', function() {
    let emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if (semailInput.value.trim() === '') {
        errorContainer9.textContent = 'Email cannot be empty';
        errorContainer9.style.display = 'block';
        semailInput.classList.add('is-invalid');
    } else if(!emailRegex.test(semailInput.value)){
        errorContainer9.textContent = 'Invalid Email';
        errorContainer9.style.display = 'block';
        semailInput.classList.add('is-invalid');
    } else {
        errorContainer9.style.display = 'none';
        semailInput.classList.remove('is-invalid');
        semailInput.classList.add('is-valid');
    }
});
spasswordInput.addEventListener('input', function() {
    const regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/;
    if (spasswordInput.value.trim() === '') {
        errorContainer10.textContent = 'Password cannot be empty';
        errorContainer10.style.display = 'block';
        spasswordInput.classList.add('is-invalid');
    } else if (spasswordInput.value.length < 8) {
        errorContainer10.textContent = 'Password must be 8 characters long';
        errorContainer10.style.display = 'block';
        spasswordInput.classList.add('is-invalid');
    } else if (!regex.test(spasswordInput.value)) {
        errorContainer10.textContent = 'Password must contain at least one uppercase letter, one lowercase letter,  one digit and one special character';
        errorContainer10.style.display = 'block';
        spasswordInput.classList.add('is-invalid');
    } else {
        errorContainer10.style.display = 'none';
        spasswordInput.classList.remove('is-invalid');
        spasswordInput.classList.add('is-valid');
    }
});
cfullname.addEventListener('input', function() {
    let numpattern = /[0-9]/;
    let fullnamepattern = /^[A-Z][a-z]+\s[A-Z][a-z]+$/;

    if(cfullname.value.trim() === '') {
        nameError.textContent = 'Fullname cannot be empty';
        nameError.style.display = 'block';
        cfullname.classList.add('is-invalid');
    }else if(numpattern.test(cfullname.value)){
        nameError.textContent = 'Cannot contain numbers';
        nameError.style.display = 'block';
        cfullname.classList.add('is-invalid');
    }else if(!fullnamepattern.test(cfullname.value)){
        nameError.textContent = 'Invalid Fullname';
        nameError.style.display = 'block';
        cfullname.classList.add('is-invalid');
    }else {
        nameError.style.display = 'none';
        cfullname.classList.remove('is-invalid');
        cfullname.classList.add('is-valid');
    }
});
ptitle.addEventListener('input', function() {
    if (ptitle.value.trim() === '') {
        titleError.textContent = 'Title Empty';
        titleError.style.display = 'block';
        ptitle.classList.add('is-invalid');
    }else {
        titleError.style.display = 'none';
        ptitle.classList.remove('is-invalid');
        ptitle.classList.add('is-valid');
    }
});
cexperience.addEventListener('input', function() {
    if (cexperience.value.trim() === '') {
        expError.textContent = 'Experience is Empty';
        expError.style.display = 'block';
        cexperience.classList.add('is-invalid');
    }else {
        expError.style.display = 'none';
        cexperience.classList.remove('is-invalid');
        cexperience.classList.add('is-valid');
    }
});
cusername.addEventListener('input', function() {
    const re = /^[a-zA-Z][\w]*$/;
    if (cusername.value.trim() === '') {
        usernameError.textContent = 'Username cannot be empty';
        usernameError.style.display = 'block';
        cusername.classList.add('is-invalid');
    } else if (cusername.value.length < 5 || cusername.value.length > 20) {
        usernameError.textContent = 'Username must be between 5 and 20 characters long.';
        usernameError.style.display = 'block';
        cusername.classList.add('is-invalid');
    } else if (!re.test(cusername.value)) {
        usernameError.textContent = 'First character should contain an alphabet and then a number or underscore.';
        usernameError.style.display = 'block';
        cusername.classList.add('is-invalid');
    }else {
        usernameError.style.display = 'none';
        cusername.classList.remove('is-invalid');
        cusername.classList.add('is-valid');
    }
});
cpassword.addEventListener('input', function() {
    const regex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/;
    if (cpassword.value.trim() === '') {
        passwordError.textContent = 'Password cannot be empty';
        passwordError.style.display = 'block';
        cpassword.classList.add('is-invalid');
    } else if (cpassword.value.length < 8) {
        passwordError.textContent = 'Password must be 8 characters long';
        passwordError.style.display = 'block';
        cpassword.classList.add('is-invalid');
    } else if (!regex.test(cpassword.value)) {
        passwordError.textContent = 'Password must contain at least one uppercase letter, one lowercase letter,  one digit and one special character';
        passwordError.style.display = 'block';
        cpassword.classList.add('is-invalid');
    } else {
        passwordError.style.display = 'none';
        cpassword.classList.remove('is-invalid');
        cpassword.classList.add('is-valid');
    }
});
cemail.addEventListener('input', function() {
    let emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if (cemail.value.trim() === '') {
        emailError.textContent = 'Email cannot be empty';
        emailError.style.display = 'block';
        cemail.classList.add('is-invalid');
    }else if(!emailRegex.test(cemail.value)){
        emailError.textContent = 'Invalid Email';
        emailError.style.display = 'block';
        cemail.classList.add('is-invalid');
    } else {
        emailError.style.display = 'none';
        cemail.classList.remove('is-invalid');
        cemail.classList.add('is-valid');
    }
});
cage.addEventListener('input', function() {
    let regex = /^\d{1,2}$/;
    if (cage.value.trim() === '') {
        ageError.textContent = 'Age cannot be empty';
        ageError.style.display = 'block';
        cage.classList.add('is-invalid');
    }else if (!regex.test(cage.value)) {
        ageError.textContent = 'Invalid age';
        ageError.style.display = 'block';
        cage.classList.add('is-invalid');
    } else {
        ageError.style.display = 'none';
        cage.classList.remove('is-invalid');
        cage.classList.add('is-valid');
    }
});
pincode.addEventListener('input', function() {
    let regex = /^\d{6}$/;
    if (pincode.value.trim() === '') {
        pincodeError.textContent = 'Enter pincode';
        pincodeError.style.display = 'block';
        pincode.classList.add('is-invalid');
    }else if(!regex.test(pincode.value)){
        pincodeError.textContent = 'Invalid pincode';
        pincodeError.style.display = 'block';
        pincode.classList.add('is-invalid');
    } else {
        pincodeError.style.display = 'none';
        pincode.classList.remove('is-invalid');
        pincode.classList.add('is-valid');
    }
});
address.addEventListener('input', function() {
    if (address.value.trim() === '') {
        addressError.textContent = 'Empty Address';
        addressError.style.display = 'block';
        address.classList.add('is-invalid');
    }else {
        addressError.style.display = 'none';
        address.classList.remove('is-invalid');
        address.classList.add('is-valid');
    }
});
csalary.addEventListener('input', function() {
    let regex = /^\d{1,6}$/;
    if (csalary.value.trim() === '') {
      csalaryError.textContent = 'Enter Current salary';
      csalaryError.style.display = 'block';
      csalary.classList.add('is-invalid');
    } else if (!regex.test(csalary.value)) {
      csalaryError.textContent = 'Invalid salary';
      csalaryError.style.display = 'block';
      csalary.classList.add('is-invalid');
    } else {
      csalaryError.style.display = 'none';
      csalary.classList.remove('is-invalid');
      csalary.classList.add('is-valid');
    }
  });
  esalary.addEventListener('input', function() {
    let regex = /^\d{1,6}$/;
    if (esalary.value.trim() === '') {
      esalaryError.textContent = 'Enter Expected salary';
      esalaryError.style.display = 'block';
      esalary.classList.add('is-invalid');
    } else if (!regex.test(esalary.value)) {
      esalaryError.textContent = 'Invalid salary';
      esalaryError.style.display = 'block';
      esalary.classList.add('is-invalid');
    } else {
      esalaryError.style.display = 'none';
      esalary.classList.remove('is-invalid');
      esalary.classList.add('is-valid');
    }
  });
fee.addEventListener('input', function() {
    let regex = /^\d{1,6}$/;
    if (fee.value.trim() === '') {
        feeError.textContent = 'Enter Your Fee';
        feeError.style.display = 'block';
        fee.classList.add('is-invalid');
    } else if (!regex.test(fee.value)) {
        feeError.textContent = 'Invalid Fee';
        feeError.style.display = 'block';
        fee.classList.add('is-invalid');
    } else {
        feeError.style.display = 'none';
        fee.classList.remove('is-invalid');
        fee.classList.add('is-valid');
    }
});
cmobile.addEventListener('input', function() {
    let mobileRegex = /^[6-9]\d{9}$/;
    let mobileStartRegex = /^[1-5]\d{9}$/;

    if (cmobile.value.trim() === '') {
        mobileError.textContent = 'Enter Mobile number';
        mobileError.style.display = 'block';
        cmobile.classList.add('is-invalid');
    }else if (!mobileRegex.test(cmobile.value) && !mobileStartRegex.test(cmobile.value)) {
        mobileError.textContent = 'Invalid Number';
        mobileError.style.display = 'block';
        cmobile.classList.add('is-invalid');
    }else if (!mobileRegex.test(cmobile.value)) {
        mobileError.textContent = 'Number should start with 6-9';
        mobileError.style.display = 'block';
        cmobile.classList.add('is-invalid');
    }else {
        mobileError.style.display = 'none';
        cmobile.classList.remove('is-invalid');
        cmobile.classList.add('is-valid');
    }
});
linkedin.addEventListener('input', function() {
    let pattern = /^(https?:\/\/)?(www\.)?linkedin\.com\/in\/[a-zA-Z0-9_-]+\/?$/;
    if(linkedin.value.trim() === '') {
        // The input is a valid Facebook link
        linkedinError.textContent = 'Link Cannot be Empty';
        linkedinError.style.display = 'block';
        linkedin.classList.add('is-invalid');
    }else if (!pattern.test(linkedin.value)) {
        // The input is a valid Facebook link
        linkedinError.textContent = 'Invalid Link';
        linkedinError.style.display = 'block';
        linkedin.classList.add('is-invalid');
    }else {
        linkedinError.style.display = 'none';
        linkedin.classList.remove('is-invalid');
        linkedin.classList.add('is-valid');
    }
});
twitter.addEventListener('input', function() {
    let pattern = /^(https?:\/\/)?(www\.)?twitter\.com\/[a-zA-Z0-9_]+\/?$/;
    if(twitter.value.trim() === '') {
        twitterError.textContent = 'Link Cannot be Empty';
        twitterError.style.display = 'block';
        twitter.classList.add('is-invalid');
    }else if (!pattern.test(twitter.value)) {
        twitterError.textContent = 'Invalid Link';
        twitterError.style.display = 'block';
        twitter.classList.add('is-invalid');
    }else {
        twitterError.style.display = 'none';
        twitter.classList.remove('is-invalid');
        twitter.classList.add('is-valid');
    }
});