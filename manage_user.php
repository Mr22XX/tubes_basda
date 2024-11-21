<?php

include "conn.php";

if(isset($_GET['hal'])){
    if($_GET['hal'] == "hapus" ){
        $query = "DELETE FROM users WHERE NPM = '$_GET[NPM]'";
        $hasil = mysqli_query($conn, $query);

        if($hasil){
            echo "<script>
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data berhasil dihapus.',
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
            echo "<script>
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Hapus data gagal.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'admin.php?page=manage_user';
                    }
                });
                </script>";
        }
    }
}


?>




<div class="relative overflow-x-auto h-screen shadow-md ">
<div class="flex end-0 justify-end p-5 bg-white">
    <a  href="admin.php?page=create_user" class=" text-center w-36 h-10 bg-green-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-green-600 active:bg-green-700 cursor-pointer" >Add</a>
</div>
    <table class="w-full text-sm text-left  h-48 rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NPM
                </th>
                <th scope="col" class="px-6 py-3">
                    nama
                </th>
                <th scope="col" class="px-6 py-3">
                    tanggal lahir
                </th>
                <th scope="col" class="px-6 py-3">
                    password
                </th>
                <th scope="col" class="px-6 py-3">
                    role
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $query = "SELECT * FROM users";
            $hasil = mysqli_query($conn, $query);

            while($data = mysqli_fetch_assoc($hasil)){

            
            
            ?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?=$data['NPM']?>
                </th>
                <td class="px-6 py-4">
                    <?=$data['nama']?>
                </td>
                <td class="px-6 py-4">
                    <?=$data['tanggal_lahir']?>
                </td>
                <td class="px-6 py-4">
                    <?=$data['password']?>
                </td>
                <td class="px-6 py-4">
                    <?=$data['role']?>
                </td>
                <td class="px-6 py-4">
                    <a href="admin.php?page=manage_user&hal=hapus&NPM=<?=$data['NPM']?>" class="font-medium text-red-600 dark:text-red-500 hover:underline" >Delete</a>
                </td>
            </tr>
        <?php
            }
            ?>
        </tbody>
    </table>
</div>



