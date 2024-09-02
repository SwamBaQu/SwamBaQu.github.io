let iconoojo = document.getElementById("iconoojo");
let password = document.getElementById("password");

iconoojo.addEventListener("click", e => {
    if (password.type == "password") {
        password.type = "text";
        iconoojo.classList.add('fa-eye');
        iconoojo.classList.remove('fa-eye-slash');
    }
    else {
        password.type = "password";
        iconoojo.classList.add('fa-eye-slash');
        iconoojo.classList.remove('fa-eye');
    }
    
})