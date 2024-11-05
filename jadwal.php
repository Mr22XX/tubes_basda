<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelajaran</title>
    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.1.2/b-html5-3.1.2/fc-5.0.4/fh-4.0.1/r-3.0.3/sb-1.8.1/datatables.min.css" rel="stylesheet">
 


</head>
<body>
    

    <div class="table-responsive">
        <table class="table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kode Matkul</th>
                    <th scope="col">Nama Matkul</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Ruangan</th>
                </tr>
            </thead>    
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
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