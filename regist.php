<?php

include 'conn.php';

if(isset($_POST['regist'])){
    $nama = $_POST['Nama'];
    $NPM = strtolower(stripcslashes($_POST['NPM']));
    $tglLahir = $_POST['tgl'];
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $cekNPM = mysqli_query($conn, "SELECT NPM FROM users WHERE NPM = '$NPM' ");

    if(mysqli_fetch_assoc($cekNPM)){
        echo "
        <script>
        alert('NPM Telah terdaftar');
        window.location.href = 'regist.php';
        </script>
        ";
        return false;
    }

    else if($NPM && $password && $tglLahir && $nama != ""){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users VALUES ('$NPM', '$nama', '$tglLahir', '$password'  )";
        $hasil = mysqli_query($conn, $query);

        if($hasil){
            echo "
            <script>
            alert('Berhasil mendaftar');
            window.location.href = 'login.php';
            </script>
            ";
        }
        else {
            echo "
            <script>
            alert('Gagal mendaftar');
            window.location.href = 'regist.php';
            </script>
            ";
        }
    }
    else{
        echo "
        <script>
        alert('Data tidak boleh kosong')
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning Informatika</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="h-screen bg-[url('bg.png')] bg-no-repeat bg-center bg-cover">
        <div class="bg-gradient-to-r from-slate-800 to-slate-500 h-16 flex  items-center p-3">
            <div class="">
                <h3 class="font-sans text-lg text-white">E-Learning Informatika</h3>
            </div>

        </div>


        <div class=" flex  items-center justify-center h-[calc(100%-4rem)] p-2">
            <div class="bg-slate-500 h-5/6 rounded-lg w-96 p-11 flex  flex-col">
                <div class="text-center pb-5">
                    <h3 class="text-xl text-white">Sign Up</h3>
                </div>
                <div class="py-2 ">
                    <form method = "post" class="flex flex-col gap-5 ">
                        <label for="Nama" class="text-white">
                            Nama
                        </label>
                        <input type="text" class="rounded-md border-none text-lg" name="Nama" id="Nama">
                        <label for="NPM" class="text-white">
                            NPM
                        </label>
                        <input type="text" class="rounded-md border-none text-lg" name="NPM" id="NPM">
                        <label for="tgl" class="text-white">
                            Tanggal Lahir
                        </label>
                        <input type="date" class="rounded-md border-none text-lg" name="tgl" id="tgl">
                        <label for="password" class="text-white">Password</label>
                        <input class="rounded-md border-none text-lg" type="password" name="password" id="password">
                        <button type="submit" name="regist" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-blue-600 active:bg-blue-700 cursor-pointer"> SIGN UP </button>
                        <div class="flex justify-center">
                            <p class="text-white text-sm mr-2">Already have an account ?</p>
                            <a href="login.php" class="text-white text-sm underline">Sign In here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>
</html>