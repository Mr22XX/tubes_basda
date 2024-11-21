<?php

$vkode = "";
$vjudul = "";
$vdesk = "";
$vdown = "";

if(isset($_GET['hal'])){
    if($_GET['hal'] == 'edit'){
        $query = "SELECT * FROM materi WHERE kode_materi = '$_GET[kode_materi]'";
        $hasil = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($hasil);
        if($data){
            $vkode = $data['kode_materi'];
            $vjudul = $data['judul'];
            $vdesk = $data['desk'];
            $vdown = $data['download'];
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $query = "UPDATE materi SET 
    kode_materi = '$_POST[kode]',
    judul = '$_POST[judul]',
    desk = '$_POST[desk]',
    download = '$_POST[down]'
    WHERE kode_materi = '$_GET[kode_materi]'
    ";
    $hasil = mysqli_query($conn, $query);

    if($hasil){
        echo "<script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Materi berhasil diedit.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = 'dosen.php?page=manage_materi';
            }
        });
        </script>";
    }
    else{
        echo"
        <script>
        alert('Materi gagal diedit');
        window.location.href = 'dosen.php?page=manage_materi'
        </script>
        ";
    }

}


?>
<div class="mt-8">

    <form class="max-w-md mx-auto" method="post">
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="kode" id="kode" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required value="<?=$vkode?>" />
      <label for="kode" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">kode</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="judul" id="judul" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required value="<?=$vjudul?>" />
      <label for="judul" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Judul Materi</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="desk" id="desk" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required value="<?=$vdesk?>"/>
      <label for="desk" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
  </div>
    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="down" id="down"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-white dark:border-gray-900 dark:focus:border-gray-900 focus:outline-none focus:ring-0 focus:border-gray-900 peer" placeholder=" " required value="<?=$vdown?>"/>
      <label for="down" class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-800 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-gray-900 peer-focus:dark:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Link Materi</label>
  </div>
   
 
  
    
  <button type="submit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
  </div>
  
</form>
</div>
