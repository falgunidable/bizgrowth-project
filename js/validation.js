console.log('hey there');

var fullnameInput = document.getElementById('fullname');
var errorContainer = fullnameInput.nextElementSibling;
var businessnameInput = document.getElementById('businessname');
var errorContainer1 = businessnameInput.nextElementSibling;
var panInput = document.getElementById('pan');
var errorContainer2 = panInput.nextElementSibling;
var pincodeInput = document.getElementById('pincode');
var errorContainer3 = pincodeInput.nextElementSibling;
var emailInput = document.getElementById('email');
var errorContainer4 = emailInput.nextElementSibling;
var mobileInput = document.getElementById('mobile');
var errorContainer5 = mobileInput.nextElementSibling;

fullnameInput.addEventListener('input', function() {
    if (fullnameInput.value.trim() === '') {
        errorContainer.textContent = 'Username cannot be empty';
        errorContainer.style.display = 'block';
        fullnameInput.classList.add('is-invalid');
    } else {
        errorContainer.style.display = 'none';
        fullnameInput.classList.remove('is-invalid');
        fullnameInput.classList.add('is-valid');
    }
});
businessnameInput.addEventListener('input', function() {
    if (businessnameInput.value.trim() === '') {
        errorContainer1.textContent = 'Business Name cannot be empty';
        errorContainer1.style.display = 'block';
        businessnameInput.classList.add('is-invalid');
    } else {
        errorContainer1.style.display = 'none';
        businessnameInput.classList.remove('is-invalid');
        businessnameInput.classList.add('is-valid');
    }
});
panInput.addEventListener('input', function() {
    let panRegex = /^([A-Z]{5})(\d{4})([A-Z]{1})$/;
    if (panInput.value.trim() === '') {
        errorContainer2.textContent = 'PAN cannot be empty';
        errorContainer2.style.display = 'block';
        panInput.classList.add('is-invalid');
    }else if(!panRegex.test(panInput.value)){
        errorContainer2.textContent = 'Invalid PAN';
        errorContainer2.style.display = 'block';
        panInput.classList.add('is-invalid');
    } else {
        errorContainer2.style.display = 'none';
        panInput.classList.remove('is-invalid');
        panInput.classList.add('is-valid');
    }
});
pincodeInput.addEventListener('input', function() {
    let regex = /^\d{6}$/;
    if (pincodeInput.value.trim() === '') {
        errorContainer3.textContent = 'Enter pincode';
        errorContainer3.style.display = 'block';
        pincodeInput.classList.add('is-invalid');
    }else if(!regex.test(pincodeInput.value)){
        errorContainer3.textContent = 'Invalid pincode';
        errorContainer3.style.display = 'block';
        pincodeInput.classList.add('is-invalid');
    } else {
        errorContainer3.style.display = 'none';
        pincodeInput.classList.remove('is-invalid');
        pincodeInput.classList.add('is-valid');
    }
});
emailInput.addEventListener('input', function() {
    let emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if (emailInput.value.trim() === '') {
        errorContainer4.textContent = 'Email cannot be empty';
        errorContainer4.style.display = 'block';
        emailInput.classList.add('is-invalid');
    }else if(!emailRegex.test(emailInput.value)){
        errorContainer4.textContent = 'Invalid Email';
        errorContainer4.style.display = 'block';
        emailInput.classList.add('is-invalid');
    } else {
        errorContainer4.style.display = 'none';
        emailInput.classList.remove('is-invalid');
        emailInput.classList.add('is-valid');
    }
});
mobileInput.addEventListener('input', function() {
    let mobileRegex = /^[6-9]\d{9}$/;
    if (mobileInput.value.trim() === '') {
        errorContainer5.textContent = 'Enter Mobile number';
        errorContainer5.style.display = 'block';
        mobileInput.classList.add('is-invalid');
    }else if(!mobileRegex.test(mobileInput.value)){
        errorContainer5.textContent = 'Invalid Number';
        errorContainer5.style.display = 'block';
        mobileInput.classList.add('is-invalid');
    } else {
        errorContainer5.style.display = 'none';
        mobileInput.classList.remove('is-invalid');
        mobileInput.classList.add('is-valid');
    }
});