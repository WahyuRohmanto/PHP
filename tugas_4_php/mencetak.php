
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1 class = "text-center" style="color: #D61C4E" > DAFTAR PEGAWAI</h1>
    <div class="container text-center mt-4 ">
    <table class="table table-bordered">
  <thead>
    <tr style = "color : white; background-color : #293462;">
      <th scope="col">No</th>
      <th scope="col">NIP</th>
      <th scope="col">NAMA</th>
      <th scope="col">JABATAN</th>
      <th scope="col">AGAMA</th>
      <th scope="col">STATUS</th>
      <th scope="col">GAPOK</th>
      <th scope="col">TUNJANGAN JABATAN</th>
      <th scope="col">TUNJANGAN KELUARGA</th>
      <th scope="col">ZAKAT PROFESI</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    require "tugas_4_php.php";
    $no = 1;
    foreach ($nama_var as $name) {
    if ($no % 2 == 1) {
        $color = "#1CD6CE";
    }
    else $color = "#FEDB39";
        ?>
    <tr style="background-color:<?=$color ?>">
        <td><?= $no++?></td>
    <?php $name -> Cetak();?>
    </tr>
   <?php }; ?>  
  </tbody>
</table>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>