<?php
session_start();
if(!isset($_SESSION['dosen'])){
    header("Location : login.php");
    exit;
}



include "conn.php";

$page = $_GET['page'] ?? "";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<div class="h-screen  bg-slate-200">
        <div class="bg-gradient-to-r from-slate-800 to-slate-500 h-16 flex w-full justify-between items-center p-3">
            <div class="flex justify-between items-center">
                    <h3 class="font-sans text-lg text-white">DASHBOARD DOSEN</h3>
                    <a  href="logout.php" class=" absolute end-0 mr-16 bg-red-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-red-600 active:bg-red-700 cursor-pointer">Logout</a>
                    <img src="img/undraw_profile.svg" class="absolute end-0 mr-3 w-9" alt="">
            </div>
            
        </div>


        <div class="h-screen w-full flex">

        <div class="h-screen bg-gradient-to-b from-slate-800 to-slate-500 w-64">
            <div class="flex justify-center items-center text-white gap-4">
                <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path  stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                </svg>
                <h3 class="text-white text-xl font-semibold text-center pt-4  pb-4">Manage</h3>
            </div>
            <hr>

            <hr>
            <div class="flex justify-center items-center text-white gap-4 hover:text-slate-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
            </svg>
                <a href="?page=manage_materi" class="text-white text-xl font-semibold text-center pt-4  pb-4">Materi</a>
            </div>
            <hr>
        </div>

        <div class="h-screen bg-slate-100 w-full ">
            <?php
            if($page == "manage_materi"){
                require "manage_materi.php";
            }
            else if($page == "edit_materi"){
                require "edit_materi.php";
            }
            else if($page == "create_materi"){
                require "create_materi.php";
            }   
            else{

            
            ?>
            <div class="h-full w-full flex justify-center items-center text-black text-xl">Pick what u want to manage :)</div>
            <?php
        }
        ?>
        </div>
        </div>



       
    </div>

</body>
</html>