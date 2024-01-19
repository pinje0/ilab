function checkInput(inputId) {
    const inputElement = document.getElementById(inputId);
    if (inputElement.value.trim() !== "") {
        inputElement.classList.add("filled");
    } else {
        inputElement.classList.remove("filled");
    }
}

function checkInput(id) {
    var input = document.getElementById(id);
    if (input.value.trim() === "") {
        input.setCustomValidity("Field ini harus diisi");
    } else {
        input.setCustomValidity("");
    }
}

function clickedAlert() {
    try {
        var email = document.getElementById("email");
        var message = document.getElementById("message");

        if (email.value.trim() === "" || message.value.trim() === "") {
            throw new Error("Lengkapi data anda!!!");
        }

        alert("Pesan anda terkirim");
    } catch (error) {
        alert(error.message);
    }
}
