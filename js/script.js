const popup = $('#popup').data('popup');

if (popup) {
    if (popup == "Success") {
        Swal.fire({
            title: popup,
            icon: "success",
            button: "OK"
        });
    }
    else {
        Swal.fire({
            title: popup,
            icon: "warning",
            button: "OK"
        });
    }
}