var ptitle = document.getElementById('cptitle');
var tileError = ptitle.nextElementSibling;
var experience = document.getElementById('experience');
var expError = experience.nextElementSibling;
var age = document.getElementById('age');
var ageError = age.nextElementSibling;
var cemail = document.getElementById('cemail');
var emailError = cemail.nextElementSibling;
var pincode = document.getElementById('cpincode');
var pincodeError = pincode.nextElementSibling;
var address = document.getElementById('caddress');
var addressError = address.nextElementSibling;
var mobile = document.getElementById('cphone');
var mobileError = mobile.nextElementSibling;
var cusername = document.getElementById('cusername');
var usernameError = cusername.nextElementSibling;
var cpassword = document.getElementById('cpassword');
var passwordError = cpassword.nextElementSibling;


ptitle.addEventListener('input', function() {
    let patternb =/^[A-Za-z]*\s{1}[A-Za-z]*$/;
    if (ptitle.value.trim() === '') {
        tileError.textContent = 'Business Name cannot be empty';
        tileError.style.display = 'block';
        ptitle.classList.add('is-invalid');
    } else if(!patternb.test(ptitle.value)){
        tileError.textContent = 'Enter valid Businessname';
        tileError.style.display = 'block';
        ptitle.classList.add('is-invalid');
    }else {
        tileError.style.display = 'none';
        ptitle.classList.remove('is-invalid');
        ptitle.classList.add('is-valid');
    }
});
experience.addEventListener('input', function() {
    let panRegex = /^([A-Z]{5})(\d{4})([A-Z]{1})$/;
    if (experience.value.trim() === '') {
        expError.textContent = 'PAN cannot be empty';
        expError.style.display = 'block';
        experience.classList.add('is-invalid');
    }else if(!panRegex.test(experience.value)){
        expError.textContent = 'Invalid PAN';
        expError.style.display = 'block';
        experience.classList.add('is-invalid');
    } else {
        expError.style.display = 'none';
        experience.classList.remove('is-invalid');
        experience.classList.add('is-valid');
    }
});
age.addEventListener('input', function() {
    let regex = /^\d{6}$/;
    if (age.value.trim() === '') {
        ageError.textContent = 'Enter pincode';
        ageError.style.display = 'block';
        age.classList.add('is-invalid');
    }else if(!regex.test(age.value)){
        ageError.textContent = 'Invalid pincode';
        ageError.style.display = 'block';
        age.classList.add('is-invalid');
    } else {
        ageError.style.display = 'none';
        age.classList.remove('is-invalid');
        age.classList.add('is-valid');
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
mobile.addEventListener('input', function() {
    let mobileRegex = /^[6-9]\d{9}$/;
    if (mobile.value.trim() === '') {
        mobileError.textContent = 'Enter Mobile number';
        mobileError.style.display = 'block';
        mobile.classList.add('is-invalid');
    }else if(!mobileRegex.test(mobile.value)){
        mobileError.textContent = 'Invalid Number';
        mobileError.style.display = 'block';
        mobile.classList.add('is-invalid');
    } else {
        mobileError.style.display = 'none';
        mobile.classList.remove('is-invalid');
        mobile.classList.add('is-valid');
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