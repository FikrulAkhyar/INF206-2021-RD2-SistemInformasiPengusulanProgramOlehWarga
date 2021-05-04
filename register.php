<?php
// define variables and set to empty values
$nikErr = $namaErr = $emailErr = $nohpErr = "";
$nik = $nama = $gender = $comment = $website = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nik"])) {
        $nikErr = "Nik Tidak Boleh Kosong";
    } else {
        $nik = test_input($_POST["nik"]);
    }

    if (empty($_POST["nama"])) {
        $namaErr = "Nama Tidak Boleh Kosong";
    } else {
        $nama = test_input($_POST["nama"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email Tidak Boleh Kosong";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["nohp"])) {
        $nohpErr = "Nomor Hp Tidak Boleh Kosong";
    } else {
        $nohp = test_input($_POST["nohp"]);
    }

    if (empty($_POST["password1"])) {
        $passwordErr = "Password Tidak Boleh Kosong";
    } else {
        $password = test_input($_POST["password1"]);
    }

    if ($_POST["password1"] != $_POST["password2"]) {
        $passwordErr = "Password Tidak Sama";
    } else {
        $password = test_input($_POST["password1"]);
    }
}
