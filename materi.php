<?php

session_start();

if(!isset($_SESSION['login'])){
  header("Location:login.php");
  exit;
}

include "conn.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi</title>
    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.1.2/b-html5-3.1.2/fc-5.0.4/fh-4.0.1/r-3.0.3/sb-1.8.1/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
<div class="h-auto bg-slate-600">
        <div class="bg-gradient-to-r from-slate-800 to-slate-500 h-16 flex w-full justify-between items-center p-3">
            <div class="flex justify-between items-center">
                    <h3 class="font-sans text-lg text-white">Selamat Datang <?= $_SESSION['NPM'] ?></h3>
                    <a  href="logout.php" class=" absolute end-0 mr-3 bg-red-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-red-600 active:bg-red-700 cursor-pointer">Logout</a>
            </div>

        </div>

        <div class="flex flex-wrap">
            <div class=" flex p-2">
                    <div class=" p-3 flex gap-3 flex-col border-white border-solid border-2 rounded">
                        <h3 class="text-2xl text-white w-96 ">E-Learning Informatika</h3>
                        <p class="text-white w-96 text-justify">E-learning Informatika adalah sebuah platform pembelajaran daring yang digunakan mahasiswa Informatika, digunakan untuk mendukung proses belajar-mengajar secara online.</p>
                        <div class="flex gap-4 w-80 lg:h-20 justify-end ml-12 text-center">
                            <a  href="jadwal.php" class=" text-center w-36 h-10 bg-yellow-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-yellow-600 active:bg-yellow-700 cursor-pointer" download="">Download</a>
                        </div>
                    </div>
                </div>
            </div>


   
</body>
</html>