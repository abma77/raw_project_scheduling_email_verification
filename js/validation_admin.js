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
//STUDENT REGISTRATION FORM VALIDATION
setInputFilter(document.getElementById("add-student-ctuid"), function (value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 9999999);
}, "Must be your CTUID a 7-digit Number");
setInputFilter(document.getElementById("add-student-phone-number"), function (value) {
    return /^\d*$/.test(value);
}, "Numbers Only");
setInputFilter(document.getElementById("add-student-first-name"), function (value) {
    return /^[A-Za-zÑñ ]*$/i.test(value);
}, "Letters, Hyphen(Dash) and Period Only");
setInputFilter(document.getElementById("add-student-last-name"), function (value) {
    return /^[A-Za-zÑñ ]*$/i.test(value);
}, "Letters Hyphen(Dash) and Period Only");
setInputFilter(document.getElementById("add-student-middle-name"), function (value) {
    return /^[A-Za-zÑñ ]*$/i.test(value);
}, "Letters Hyphen(Dash) and Period Only");
setInputFilter(document.getElementById("add-student-email"), function (value) {
    return /^[A-Za-zÑñ0-9_.-@]*$/i.test(value);
}, "Letters, Numbers, Period, Dash, Underscore, and At-Sign Only");


//TEACHER REGISTRATION FORM VALIDATION
setInputFilter(document.getElementById("add-teacher-ctuid"), function (value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 99999);
}, "Must be your CTUID a 5-digit Number");
setInputFilter(document.getElementById("add-teacher-phone-number"), function (value) {
    return /^\d*$/.test(value);
}, "Numbers Only");
setInputFilter(document.getElementById("add-teacher-first-name"), function (value) {
    return /^[A-Za-zÑñ ]*$/i.test(value);
}, "Letters, Hyphen(Dash) and Period Only");
setInputFilter(document.getElementById("add-teacher-last-name"), function (value) {
    return /^[A-Za-zÑñ ]*$/i.test(value);
}, "Letters Hyphen(Dash) and Period Only");
setInputFilter(document.getElementById("add-teacher-middle-name"), function (value) {
    return /^[A-Za-zÑñ ]*$/i.test(value);
}, "Letters Hyphen(Dash) and Period Only");
setInputFilter(document.getElementById("add-teacher-email"), function (value) {
    return /^[A-Za-zÑñ0-9_.-@]*$/i.test(value);
}, "Letters, Numbers, Period, Dash, Underscore, and At-Sign Only");



