document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('edit-profile-student-password');
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
    const passwordInput = document.getElementById('edit-profile-teacher-password');
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

