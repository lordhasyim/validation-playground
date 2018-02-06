

var submitButton = document.getElementById('submitBtn');
var firstName = document.getElementById('firstName');
var lastName = document.getElementById('lastName');
submitButton.addEventListener('click', submitHandler, false);

function submitHandler () {
    console.log(this);

    if (firstName.value == "") {
            alert("Please enter your first name");
            firstName.focus();
            this.preventDefault();
            return;
        }
    if(lastName.value == "") {
        alert("Please enter yout lastname");
        lastName.focus();
        this.preventDefault();
        return;
    }
    alert("The form is being submitted, please wait a moment");

    submitButton.disabled=true;
    this.preventDefault();
}