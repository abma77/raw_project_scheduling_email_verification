
const roleCheckbox = document.getElementById('roleCheckbox');
const studentForm = document.getElementById('register-student');
const teacherForm = document.getElementById('register-teacher');

// Initially hide teacher form
teacherForm.hidden = true;

roleCheckbox.addEventListener('change', function () {
    if (roleCheckbox.checked) {
        studentForm.hidden = false;
        teacherForm.hidden = true;
    } else {
        studentForm.hidden = true;
        teacherForm.hidden = false;
    }
});

//RESTRICTIONS ON FORMS
// Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter, errMsg) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(function (event) {
        textbox.addEventListener(event, function (e) {
            if (inputFilter(this.value)) {
                // Accepted value
                if (["keydown", "mousedown", "focusout"].indexOf(e.type) >= 0) {
                    this.classList.remove("input-error");
                    this.setCustomValidity("");
                }
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                // Rejected value - restore the previous one
                this.classList.add("input-error");
                this.setCustomValidity(errMsg);
                this.reportValidity();
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                // Rejected value - nothing to restore
                this.value = "";
            }
        });
    });
}
setInputFilter(document.getElementById("register-teacher-ctuid"), function (value) {
    return /^-?\d*$/.test(value);
}, "Must be an integer");

document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('register-student-password');
    const toggleIcon = document.createElement('span');
    toggleIcon.classList.add('toggle-icon');
    toggleIcon.innerHTML = '<i class="fa fa-eye"></i>';

    toggleIcon.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('show-password');
            toggleIcon.classList.add('hide-password');
            toggleIcon.innerHTML = ' <i class="fa fa-eye-slash"></i>';
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('hide-password');
            toggleIcon.classList.add('show-password');
            toggleIcon.innerHTML = ' <i class="fa fa-eye"></i>';
        }
    });

    passwordInput.parentNode.classList.add('password-toggle');
    passwordInput.parentNode.appendChild(toggleIcon);
});


document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('register-teacher-password');
    const toggleIcon = document.createElement('span');
    toggleIcon.classList.add('toggle-icon');
    toggleIcon.innerHTML = '<i class="fa fa-eye"></i>';

    toggleIcon.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('show-password');
            toggleIcon.classList.add('hide-password');
            toggleIcon.innerHTML = ' <i class="fa fa-eye-slash"></i>';
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('hide-password');
            toggleIcon.classList.add('show-password');
            toggleIcon.innerHTML = ' <i class="fa fa-eye"></i>';
        }
    });

    passwordInput.parentNode.classList.add('password-toggle');
    passwordInput.parentNode.appendChild(toggleIcon);
});
