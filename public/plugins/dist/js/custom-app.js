(function() {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
})()

function viewDatePassword() {
    if ($('#view_password').is(':checked')) {
        $('#password_old').attr('type', 'text');
        $('#password').attr('type', 'text');
        $('#password_confirmation').attr('type', 'text');
    } else {
        $('#password_old').attr('type', 'password');
        $('#password').attr('type', 'password');
        $('#password_confirmation').attr('type', 'password');
    }
}