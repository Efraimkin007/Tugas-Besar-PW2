<?php
include_once 'util/PDOUtil.php';

include_once 'entity/BahanBakar.php';
include_once 'entity/DetailBahanBakar.php';
include_once 'entity/Member.php';
include_once 'entity/Pegawai.php';
include_once 'entity/Pelanggan.php';
include_once 'entity/Transaksi.php';
include_once 'entity/User.php';

include_once 'DAO/BahanBakarDAOimpl.php';
include_once 'DAO/MemberDAOimpl.php';
include_once 'DAO/PelangganDAOimpl.php';
include_once 'DAO/TransaksiDAOimpl.php';
include_once 'DAO/UserDAOimpl.php';
include_once 'DAO/PegawaiDAOimpl.php';


include_once 'controller/bahanBakarController.php';
include_once 'controller/pelangganController.php';
include_once 'controller/pegawaiController.php';

?>

<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/metaOilANS.css">
<link rel="stylesheet" type="text/css" href="css/datatables.css">
<link rel="stylesheet" type="text/css" href="css/web_style.css">



<header>
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <logo>MetaOil <a style="color:red;">A</a><a style="color:white;">N</a><a style="color:blue;">S</a></logo>
        </div>
        <div class="navbar-collapse collapse" id="myNavbar" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=bahanBakar">Bahan Bakar</a></li>
                <li><a href="?page=transaksi">Transaksi</a></li>
                <li><a href="?page=member">Member</a></li>
                <li><a href="?page=dataPegawai">Data Pegawai</a></li>
                <li><a href="?page=calendar">Calendar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="?page=signUp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</header>

<!--Tag for content-->
<main>
    <?php
    $nav = filter_input(INPUT_GET, "page");
    $title = '';
    switch ($nav) {
        //Navigasi Beranda
        case 'home':
            include_once './page/home.php';
            $title = 'Beranda';
            break;

        //Navigasi Transaksi
        case 'transaksi':
            include_once './page/transaksi.php';
            $title = 'Transaksi';
            break;

        //Navigasi Bahan Bakar
        case 'bahanBakar':
            $bahanBakarController = new bahanBakarController();
            $bahanBakarController->index();
            break;

        //Navigasi Bahan Bakar
        case 'bahanBakarUpdate':
            $bahanBakarController = new bahanBakarController();
            $bahanBakarController->update();
            break;

        //Navigasi Data Pegawai
        case 'dataPegawai':
            $pegawaiController = new pegawaiController();
            $pegawaiController->index();
            break;

        //Navigasi Member
        case 'member':
            include_once './page/member.php';
            $title = 'Member';
            break;


        //Navigasi Kalender
        case 'calendar':
            include_once './page/calendar.php';
            $title = 'Kalender';
            break;

        //Navigasi Sign Up
        case 'signUp':
            $pelangganController = new pelangganController();
            $pelangganController->index();
            break;

        //Navigasi Login
        case 'login':
            include_once './page/login.php';
            $title = 'Login';
            break;

        //Default Beranda
        default:
            include_once './page/home.php';
            $title = 'Beranda';
            break;
    }
    ?>
</main>

<title><?php  echo $title; ?> - MetaOil ANS</title>

<footer>
    <h6 align="right">Dibuat oleh Anthony, Efraim, dan Ray</h6>
</footer>
</html>