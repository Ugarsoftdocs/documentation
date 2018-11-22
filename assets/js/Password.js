
function myFunction() {
    var x = document.getElementById("pwd1");

    if (x.type === "password") {
        x.type = "text";
        document.getElementById("eye").className = "fa fa-eye";
    } else {
        x.type = "password";
        document.getElementById("eye").className = "fa fa-eye-slash";
    }
}
 