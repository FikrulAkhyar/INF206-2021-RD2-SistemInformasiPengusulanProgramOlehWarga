<?php
require_once "config.php";
if (!$_SESSION["id"]) {
    header("Location: login");
    exit();
}

include_once "header.php";
include_once "sidebar.php";
include_once "topbar.php";
?>
