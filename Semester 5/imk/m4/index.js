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
        var nama = document.getElementById("nama");
        var kelas = document.getElementById("kelas");
        var npm = document.getElementById("npm");
        var tanggal = document.getElementById("tanggal");

        if (nama.value.trim() === "" || kelas.value.trim() === "") {
            throw new Error("Form belum lengkap!");
        }

        if (npm.value.trim() === "" || tanggal.value.trim() === "") {
            throw new Error("Form belum lengkap!");
        }

        alert("Terimakasih sudah absen!");
    } catch (error) {
        alert(error.message);
    }
}
