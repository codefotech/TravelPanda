function errorToast(message) {
    Toastify({
        text: message,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "linear-gradient(to right, #E82020, #750000)",
    }).showToast();
}

function successToast(message) {
    Toastify({
        text: message,
        duration: 3000,
        close: true,
        gravity: "top", // Position from top
        position: "right", // Position on the right
        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
    }).showToast();
}
