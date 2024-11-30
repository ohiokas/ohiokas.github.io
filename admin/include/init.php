<?php
ob_start();
date_default_timezone_set('Asia/Jakarta'); // Set timezone ke Jakarta

// Sesuaikan root folder proyek
$webroot = "C:/xamppp/htdocs/nikahh"; // Pastikan path ini sesuai dengan lokasi proyek Anda

// Definisi konstanta
define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', $webroot.DS.'admin'); // Ubah path admin ke dalam folder proyek
define('INCLUDES_PATH', SITE_ROOT.DS.'include'); // Folder "include" di dalam admin

// Menyertakan file yang diperlukan
require_once(INCLUDES_PATH.DS."Helper.php");
require_once(INCLUDES_PATH.DS."config.php");
require_once(INCLUDES_PATH.DS."database.php");
require_once(INCLUDES_PATH.DS."db_object.php");
require_once(INCLUDES_PATH.DS."Session.php");
require_once(INCLUDES_PATH.DS."Accounts.php");
require_once(INCLUDES_PATH.DS."Account_Details.php");
require_once(INCLUDES_PATH.DS."Booking.php");
require_once(INCLUDES_PATH.DS."Guest.php");
require_once(INCLUDES_PATH.DS."Categories.php");
require_once(INCLUDES_PATH.DS."Features.php");
require_once(INCLUDES_PATH.DS."EventWedding.php");
require_once(INCLUDES_PATH.DS."Gallery.php");
require_once(INCLUDES_PATH.DS."Users.php");
require_once(INCLUDES_PATH.DS."Events.php");
require_once(INCLUDES_PATH.DS."Liquidation.php");
?>
