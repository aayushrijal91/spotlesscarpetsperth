<?php
include __DIR__ . '/env.php';

$site = "Spotless Carpet Cleaning";
$phone_number = "1300 606 543";
$admin_email = 'arijal@aiims.com.au'; // 'info@spotlesscleaningsolutions.com.au';
$bcc_email = "";
$no_reply_email = 'info@spotlesscleaningsolutions.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;
$facebook = "https://www.facebook.com/Spotless-Cleaning-Solutions-199935896712524/";
// $instagram = "";

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
