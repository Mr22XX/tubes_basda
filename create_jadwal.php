<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $kode = $_POST['kode'];
    $nama = $_POST['nama_matkul'];
    $dosen = $_POST['dosen'];
    $sks = $_POST['sks'];
    $ruangan = $_POST['ruangan'];
    $hari = $_POST['hari'];
    $date = $_POST['date'];

    $query = "INSERT INTO jadwal VALUES ('$kode','$nama','$dosen','$sks','$ruangan','$date', '$hari')";
    $result = mysqli_query($conn, $query);

    if($result){
        echo"
        <script>
        alert('Jadwal berhasil ditambahkan');
        window.location.href = 'admin.php?page=manage_jadwal'
        </script>
        ";
    }
    else{
        echo"
        <script>
        alert('Jadwal gagal ditambahkan');
        window.location.href = 'admin.php?page=manage_jadwal'
        </script>
        ";
    }
}


?>
<div class="mt-8">

    <form class="max-w-md mx-auto" method="post">
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="kode" id="kode" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
      <label for="kode" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">kode</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="nama_matkul" id="nama_matkul" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
      <label for="nama_matkul" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Matkul</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="dosen" id="dosen" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
      <label for="dosen" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Dosen</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="number" name="sks" id="sks" min="0" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
      <label for="sks" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah SKS</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="ruangan" id="ruangan"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
      <label for="ruangan" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ruangan</label>
  </div>
   
 
  
  <div class="grid md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
        <input type="text"  name="hari" id="hari" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
        <label for="hari" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hari</label>
    </div>
      <div class="relative z-0 w-full mb-5 group">
        <input type="date"  name="date" id="date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required />
        <label for="date" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal</label>
    </div>
    
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
</div>
