            title: "Pengajuan " + flashData,
const flashData = $('#flash').data('flashdata');
console.log(flashData);

if (flashData) {
    if (flashData == "Berhasil") {
        Swal.fire({
            title: "Pengajuan " + flashData,
            text: "Usulan Akan Diseleksi Untuk Ditambahkan Ke Program Kerja",
            icon: "success",
            button: "OK"
        });
    } else {
        Swal.fire({
            title: "Pengajuan " + flashData,
            text: "Harap Mengisi Semua Form",
            icon: "warning",
            button: "OK"
        });
    }
}

$('#vote').click(function () {
    document.getElementById('like').style.color = "#137F7F";
});
