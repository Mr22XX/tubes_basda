<?php
session_start();
if(isset($_SESSION['login'])){
    header("Location:index.php");
    exit;
}

include 'conn.php';

if(isset($_POST['login'])){
    $NPM  = strtolower($_POST['NPM']);
    $password  = trim($_POST['password']);

    $query  = "SELECT * FROM users WHERE NPM  = '$NPM'";
    $result  = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)  === 1){
        $row  = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){
            $_SESSION['login'] = true;
            $_SESSION['NPM'] = $NPM;
            header("Location:index.php");
            exit;
            }
            else{
                echo "
                <script>
                 alert('Password salah: " . $row['password'] . " | Entered: " . $password . "');
                </script>
                ";
            }
    }
    else{
        echo "
        <script>
        alert('login gagal');
        window.location.href  = 'login.php';
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
    <title>Login page</title>
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
            <div class="bg-slate-500 h-96 rounded-lg w-96 p-11 flex  flex-col">
                <div class="text-center pb-5">
                    <h3 class="text-xl text-white">Login</h3>
                </div>
                <div class="py-2 ">
                    <form method="post" class="flex flex-col gap-5 ">
                        <label for="NPM" class="text-white">
                            NPM
                        </label>
                        <input type="text" class="rounded-md border-none" name="NPM" id="NPM">
                        <label for="password" class="text-white">Password</label>
                        <input class="rounded-md border-none" type="password" name="password" id="password">
                        <button type="submit" name="login" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-blue-600 active:bg-blue-700 cursor-pointer"> Login   </button>
                        <div class="flex justify-center">
                            <p class="text-white text-sm mr-2">Dont have an account ? </p>
                            <a href="regist.php" class="text-white text-sm underline">Sign Up here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>
</html>