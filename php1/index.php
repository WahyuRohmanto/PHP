<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <div class="container px-5 my-5">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="#" method="POST">
            <div class=" form-floating mb-3">
                <!-- Nama Pegawai -->
                <input class="form-control" id="namaPegawai" name="namaPegawai" type=" text" placeholder="Nama Pegawai"
                    data-sb-validations="required" />
                <label for="namaPegawai">Nama Pegawai</label>
                <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
            </div>
            <div class="form-floating mb-3">
                <!-- Agama -->
                <select class="form-select" id="agama" aria-label="Agama" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select>
                <label for="agama">Agama</label>
            </div>
            <div class="mb-3">
                <!-- Jabatan -->
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input value="manager" class="form-check-input" id="manager" type="radio" name="jabatan"
                        data-sb-validations="" />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="asisten" type="radio" name="jabatan" value="asisten"
                        data-sb-validations="" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="kabag"
                        data-sb-validations="" />
                    <label class="form-check-label" for="kabag">Kabag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="staff" type="radio" name="jabatan" value="staff"
                        data-sb-validations="" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
            </div>

            <div class="mb-3">
                <!-- Status -->
                <label class="form-label d-block">Status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="sudahMenikah" value="Sudah Menikah" type="radio" name="status"
                        data-sb-validations="" />
                    <label class="form-check-label" for="sudahMenikah">Sudah Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="belumMenikah" value="Belum Menikah" type="radio" name="status"
                        data-sb-validations="" />
                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                </div>
            </div>

            <div class="form-floating mb-3">
                <!-- Jumlah Anak -->
                <input class="form-control" id="jumlahAnak" name="jumlah" type="text" placeholder="Jumlah Anak"
                    data-sb-validations="required" />
                <label for="jumlahAnak">Jumlah Anak</label>
                <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
            </div>
            <div class="d-grid">
                <button type="button" class="btn btn-primary" name="submit" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Launch demo modal
                </button>

            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <?php

    $nama = $_POST['namaPegawai'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jumlah_anak = $_POST['jumlah'];
    $tombol = $_POST['submit'];
    
  switch ($jabatan) {
    case 'manager': $gapok = 20000000; break;
    case 'asisten': $gapok = 15000000; break;
    case 'kabag': $gapok = 10000000; break;
    case 'staff': $gapok = 4000000; break;
    default: $gapok = 0;
  }
  $tunjangan_jabatan = 0.2 * $gapok;
  
  if ($status = "Sudah Menikah" && $jumlah_anak <= 2 ) {
    $tunjangan_keluarga = 0.05 * $gapok;
  }
  else if ($status = "Sudah Menikah" && $jumlah_anak > 2 && $jumlah_anak <=5 ){
    $tunjangan_keluarga = 0.1 * $gapok;
  }
  else if ($status = "Sudah Menikah" && $jumlah_anak > 5){
    $tunjangan_keluarga = 0.15 * $gapok;
  }
  else $tunjangan_keluarga = "";

  $gaji_kotor = $gapok + $tunjangan_jabatan + $tunjangan_keluarga;

  if($agama = "Islam" && $gaji_kotor >= 6000000) $zakat_profesi = 0.025 * $gaji_kotor;
  else $zakat_profesi = "" ;

  $THP = ($gapok + $tunjangan_jabatan + $tunjangan_keluarga) - $zakat_profesi;
  


  
    echo $nama;
    echo "</br>";  
    echo $agama ;
    echo "</br>";  
    echo $jabatan;
    echo "</br>";  
    echo $status;
    echo "</br>";  
    echo $jumlah_anak;
    echo "</br>";  
    echo $gapok;
    echo "</br>";  
    echo $tunjangan_jabatan;

    
    if(isset($tombol)){ ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <?php }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>