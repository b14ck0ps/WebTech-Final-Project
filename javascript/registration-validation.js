// get elements
const f_name = document.querySelector('input[type="f_name"]');
const l_name = document.querySelector('input[type="l_name"]');
const username = document.querySelector('input[type="username"]');
const password = document.querySelector('input[type="password"]');
const re_rpassword = document.querySelector('input[id="re_password"]');
const email = document.querySelector('input[type="email"]');
const phone = document.querySelector('input[type="phone"]');
const address = document.querySelector('input[type="address"]');
const reg_form = document.getElementById('registration-form');

//errors
const f_name_error = document.getElementById('f_name-error');
const l_name_error = document.getElementById('l_name-error');
const username_error = document.getElementById('username-error');
const password_error = document.getElementById('password-error');
const re_password_error = document.getElementById('re_password-error');
const re_password_null_error = document.getElementById('re_password_null-error');
const email_error = document.getElementById('email-error');
const phone_error = document.getElementById('phone-error');
const address_error = document.getElementById('address-error');

function required(input, errorId) {
    input.addEventListener('input', function () {
        if (this.value.length <= 0) {
            errorId.style.display = "block";
        }
        if (this.value.length > 0) {
            errorId.style.display = "none";
        }
    });
}

function matchPass(input, errorId) {
    input.addEventListener('input', function () {
        if (this.value != password.value && this.value.length > 0) {
            errorId.style.display = "block";
            if (re_password_null_error.style.display == "block") {
                errorId.style.display = "none";
            }
        }
        if (this.value == password.value) {
            errorId.style.display = "none";
        }
    });
}
reg_form.addEventListener('submit', (e) => {
    let ulangth = f_name.value.length;
    let plangth = password.value.length;
    let fnlangth = f_name.value.length;
    let lnlangth = l_name.value.length;
    let unlangth = username.value.length;
    let emlangth = email.value.length;
    let phlangth = phone.value.length;
    let adlangth = address.value.length;
    let passlangth = password.value.length;
    let repasslangth = re_rpassword.value.length;
    if (ulangth <= 0 || plangth <= 0 || fnlangth <= 0 || lnlangth <= 0 || unlangth <= 0 || emlangth <= 0 || phlangth <= 0 || adlangth <= 0 || passlangth <= 0 || repasslangth <= 0) {
        e.preventDefault();
        if (ulangth <= 0) {
            f_name_error.style.display = "block";
        }
        if (plangth <= 0) {
            password_error.style.display = "block";
        }
        if (fnlangth <= 0) {
            f_name_error.style.display = "block";
        }
        if (lnlangth <= 0) {
            l_name_error.style.display = "block";
        }
        if (unlangth <= 0) {
            username_error.style.display = "block";
        }
        if (emlangth <= 0) {
            email_error.style.display = "block";
        }
        if (phlangth <= 0) {
            phone_error.style.display = "block";
        }
        if (adlangth <= 0) {
            address_error.style.display = "block";
        }
    }
});
required(f_name, f_name_error);
required(l_name, l_name_error);
required(username, username_error);
required(password, password_error);
required(re_rpassword, re_password_null_error);
required(email, email_error);
required(phone, phone_error);
required(address, address_error);

matchPass(re_rpassword, re_password_error);