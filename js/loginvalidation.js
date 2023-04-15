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