<?php

include "conn.php";

?>




<div class="relative overflow-x-auto shadow-md ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Kode Matkul
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Matkul
                </th>
                <th scope="col" class="px-6 py-3">
                    Dosen
                </th>
                <th scope="col" class="px-6 py-3">
                    SKS 
                </th>
                <th scope="col" class="px-6 py-3">
                    Ruangan
                </th>
                <th scope="col" class="px-6 py-3">
                    Hari / Tanggal
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $query = "SELECT * FROM jadwal";
            $hasil = mysqli_query($conn, $query);

            while($data = mysqli_fetch_assoc($hasil)){

            
            
            ?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?=$data['kode_matkul']?>
                </th>
                <td class="px-6 py-4">
                    <?=$data['nama_matkul']?>
                </td>
                <td class="px-6 py-4">
                    <?=$data['dosen']?>
                </td>
                <td class="px-6 py-4">
                    <?=$data['SKS']?>
                </td>
                <td class="px-6 py-4">
                    <?=$data['ruangan']?>
                </td>
                <td class="px-6 py-4">
                    <?=$data['hari'] . " ". $data['tanggal']?>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
            </tr>
          <?php
            }
            ?>
        </tbody>
    </table>
</div>
<div class="flex end-0 justify-end p-5">
    <a  href="jadwal.php" class=" text-center w-36 h-10 bg-green-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-green-600 active:bg-green-700 cursor-pointer" >Add</a>
</div>