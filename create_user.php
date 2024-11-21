<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $NPM = $_POST['NPM'];
    $nama = $_POST['nama'];
    $tl = $_POST['tl'];
    $pw = $_POST['pw'];
    $role = $_POST['role'];

    $cek  = "SELECT * FROM users WHERE NPM = '$NPM'";
    $cekk  = mysqli_query($conn, $cek);
    if(mysqli_num_rows($cekk) > 0){
        echo"
        <script>
        alert('NPM Telah TERDAFTAR');
        window.location.href = 'admin.php?page=manage_user'
        </script>
        ";
        return false;
    }
    else{

        
        
        $password = password_hash($pw, PASSWORD_DEFAULT);
        $query = "INSERT INTO users VALUES ('$NPM','$nama','$tl','$password','$role')";
        $result = mysqli_query($conn, $query);
        
        if($result){
            echo "<script>
            Swal.fire({
                title: 'Berhasil!',
                text: 'User berhasil ditambahkan.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'admin.php?page=manage_user';
                }
            });
            </script>";
    }
    else{
        echo"
        <script>
        alert('user gagal ditambahkan');
        window.location.href = 'admin.php?page=manage_user'
        </script>
        ";
    }
}
}


?>
<div class="mt-8">

    <form class="max-w-md mx-auto" method="post">
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="NPM" id="NPM" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
      <label for="NPM" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NPM</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
      <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="date" name="tl" id="tl" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
      <label for="tl" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Lahir</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="pw" id="pw" min="0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
      <label for="pw" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="role" id="role"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
      <label for="role" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Role</label>
  </div>
   
    
  </div>
  <div class="flex justify-center">
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </div>
</form>
</div>
