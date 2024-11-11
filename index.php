<?php
session_start();

if(!isset($_SESSION['login'])){
  header("Location:login.php");
  exit;
}

$page = $_GET['page'] ?? "";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Informatika</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="h-screen bg-[url('img/bg.png')] bg-no-repeat bg-center bg-cover">
        <div class="bg-gradient-to-r from-slate-800 to-slate-500 h-16 flex w-full justify-between items-center p-3">
            <div class="flex justify-between items-center">
                    <h3 class="font-sans text-lg text-white">Selamat Datang <?= $_SESSION['NPM'] ?></h3>
                    <a  href="logout.php" class=" absolute end-0 mr-3 bg-red-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-red-600 active:bg-red-700 cursor-pointer">Logout</a>
            </div>

        </div>


        <div class=" flex  items-center lg:justify-start md:justify-center sm:justify-center ml-10 h-[calc(100%-4rem)] p-1">
            <div class=" h-72  rounded-lg w-96 lg:p-36 md:p-10 flex justify-center  flex-col gap-3">
               <h3 class="text-4xl text-white w-96 ">E-Learning Informatika</h3>
               <p class="text-white w-96 text-justify">E-learning Informatika adalah sebuah platform pembelajaran daring yang digunakan mahasiswa Informatika, digunakan untuk mendukung proses belajar-mengajar secara online.</p>
               <div class="flex gap-4 w-80 lg:h-20  text-center">
                   <a  href="jadwal.php" class=" text-center w-32 bg-green-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-green-600 active:bg-green-700 cursor-pointer">Jadwal Kelas</a>
                   <a  href="materi.php" class=" text-center w-32 bg-blue-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-blue-600 active:bg-blue-700 cursor-pointer">Lihat Materi</a>
                </div>

            </div>
        </div>
    </div>



</body>

</html>