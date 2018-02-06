window.addEventListener("DomContentLoaded", function (e) {
    console.log('DOM content loaded');
    var form_being_submitted = false;

    var checkForm = function (e) {
        var form = e.target;
        if (form_being_submitted) {

            console.log(form.firstname.value);
            console.log(form.lastname.value);
            alert("The form is being submitted, please wait a moment");
            form.submit_button.disabled = true;
            e.preventDefault();
            return;
        }
        if (form.firstname.value == "") {
            alert("Please enter your first name");
            form.firstname.focus();
            e.preventDefault();
            return;
        }
        if(form.lastname.value == "") {
            alert("Please nter yout lastname");
            form.lastname.focus();
            e.preventDefault();
            return;
        }
        form.submit_button.value = "Submitting form...";
        form_being_submitted = true;
    };

    var resetForm = function (e) {
        var form = e.target.form;
        form.submit_button.disabled = false;
        form.submit_button.value = "Submit";
        form_being_submitted = false;
    };
    document.getElementById("test_form").addEventListener("submit", checkForm, false);
    document.getElementsByName("reset_button").addEventListener("click", resetForm false);

}, false);