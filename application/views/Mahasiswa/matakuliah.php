<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
</head>
<body>
<h3>Mahasiswa</h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>SKS</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mk as $mk){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mk->kode ?></td>
                <td><?php echo $mk->nama ?></td>
                <td><?php echo $mk->sks ?></td>
                
            </tr>    
            <?php
            $nomor++;
            }
            ?>
        </tbody>

    </table>
</body>
</body>
</html>