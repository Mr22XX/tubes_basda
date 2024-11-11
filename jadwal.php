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
    <title>Jadwal Pelajaran</title>
    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.1.2/b-html5-3.1.2/fc-5.0.4/fh-4.0.1/r-3.0.3/sb-1.8.1/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    

    <div class="table-auto m-2 ">
        <table border="1" class="hover:table-fixed w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="myTable">
            <thead class="thead-dark bg-slate-400 text-white rounded-sm">
                <tr>
                    <th scope="col">Kode Matkul</th>
                    <th scope="col">Nama Matkul</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Tanggal / Hari</th>
                </tr>
            </thead>    
            <tbody class="bg-slate-600 text-white">
                <?php 
                
                $query = "SELECT * FROM jadwal";
                $hasil = mysqli_query($conn, $query);

                while($data = mysqli_fetch_assoc($hasil)){


                
                
                
                ?>
                <tr>
                    <td><?= $data['kode_matkul']?></td>
                    <td><?= $data['nama_matkul']?></td>
                    <td><?= $data['dosen']?></td>
                    <td><?= $data['SKS']?></td>
                    <td><?= $data['ruangan']?></td>
                    <td><?= $data['hari'] . ", " . $data['tanggal']?></td>
                </tr>

                <?php }?>
            </tbody>
        </table>
        <a  href="logout.php" class=" absolute end-0 mr-3 bg-red-500 text-white font-semibold py-2 px-4 rounded shadow hover:bg-red-600 active:bg-red-700 cursor-pointer">Logout</a>
    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.1.2/b-html5-3.1.2/fc-5.0.4/fh-4.0.1/r-3.0.3/sb-1.8.1/datatables.min.js"></script>
<script>
     new DataTable('#myTable', {
    layout: {
        topStart: {
            buttons: [
                {
                    extend : 'copy',
                    className : 'btn btn-primary'

                }, 
                {
                    extend: 'excel',
                    className : 'btn btn-primary'

                },
                {
                    extend : 'pdfHtml5',
                    orientation : 'landscape',
                    className : 'btn btn-primary'
                }
            ]
        }
    }
});
</script>
</body>

</html>