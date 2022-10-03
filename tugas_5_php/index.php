<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bidang Datar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center mt-4 ">
        <h1>TABLE BIDANG</h1>
        <br>
<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <?php
        require_once "object.php";
        $nomor = 1;
        $judul_table = ["NOMOR","NAMA BIDANG","KETERANGAN","LUAS BIDANG", "KELILING BIDANG"];
        foreach ($judul_table as $judul) {?>
            <th><?= $judul ?></th>
       <?php } ?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $nomor++ ?></td>
      <td><?= $circle -> namaBidang()?></td>
      <td>Memiliki jari jari 18cm</td>
      <td><?= $circle -> luasBidang()?> cm</td>
      <td><?= $circle -> kelilingBidang()?> cm</td>
    </tr>
    <tr>
      <td ><?= $nomor++ ?></td>
      <td><?= $triangle -> namaBidang()?></td>
      <td>Memiliki alas 15cm dan tinggi 16cm</td>
      <td><?= $triangle -> luasBidang()?> cm</td>
      <td><?= $triangle -> kelilingBidang()?>cm</td>
 
    </tr>
    <tr>
       <td><?= $nomor++ ?></td>
      <td><?= $cube -> namaBidang()?></td>
      <td>memiliki panjanng 15cm dan lebar 16cm</td>
      <td><?= $cube -> luasBidang()?> cm</td>
      <td><?= $cube -> kelilingBidang()?> cm</td>
      

    </tr>
  </tbody>
</table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>