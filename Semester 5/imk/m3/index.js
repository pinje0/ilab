function checkInput(inputId) {
    const inputElement = document.getElementById(inputId);
    if (inputElement.value.trim() !== "") {
        inputElement.classList.add("filled");
    } else {
        inputElement.classList.remove("filled");
    }
}

function clickedAlert() {
    alert("Terima kasih telah mendaftar!");
}
