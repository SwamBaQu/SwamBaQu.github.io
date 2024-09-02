// Variables
const contra = document.getElementById("password");
const contraRep = document.getElementById("passwordconfirm");
const form = document.querySelector("form");
const error = document.getElementById("error");

// Comprobar contraseña si tiene al menos 8 caracteres, una letra mayúscula, una letra minúscula, un número y un carácter especial
function validatePassword(password) {
    const errors = [];
    if (password.length < 8) {
        errors.push("- Al menos 8 caracteres.\n");
    }
    if (!/[a-z]/.test(password)) {
        errors.push("- Al menos una letra minúscula.\n");
    }
    if (!/[A-Z]/.test(password)) {
        errors.push("- Al menos una letra mayúscula.\n");
    }
    if (!/\d/.test(password)) {
        errors.push("- Al menos un número.\n");
    }
    if (!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password)) {
        errors.push("- Al menos un carácter especial.\n");
    }
    return errors;
}

// Al enviar el formulario
form.addEventListener('submit', (e) => {

    // Comprobar si las contraseñas coinciden
    if (contra.value !== contraRep.value) {
        error.innerText = "Las contraseñas no coinciden.";
        e.preventDefault()
    } else {
        // Validar la contraseña y obtener los mensajes de error
        const passwordErrors = validatePassword(contra.value.trim());
        if (passwordErrors.length > 0) {
            error.innerText = "La contraseña debe tener:\n"
            error.innerText += passwordErrors.join("");
            e.preventDefault()
        }
    }
});
