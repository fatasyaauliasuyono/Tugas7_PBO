<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tugas PBO</title>
  </head>
  <body>
    <h1 class="text-center">Edit Data Mahasiswa</h1>
    <h1 class="text-center mb-4">by Fatasya Aulia Suyono</h1>

   
    <div class="container">
        <div class="  row justify-content-center">
          <div class="col-8">

            
              <form action="/updatedata/<?php echo e($data->id); ?>" method='POST'enctype='multipost/form-data'>
              <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
    <input type="text" name="nama" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" value="<?php echo e($data->nama); ?>"> 
    <div id="namaHelp" class="form-text">Contoh : Fatasya Aulia Suyono</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNIM" class="form-label">NIM</label>
    <input type="number" name="nim" class="form-control" id="exampleInputNIM" aria-describedby="nimHelp"value="<?php echo e($data->nim); ?>">
    <div id="nimlHelp" class="form-text">Contoh : 20051214076</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputJenisKelamin" class="form-label">Jenis Kelamin</label>
    <select name ="jeniskelamin" class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected><?php echo e($data->jeniskelamin); ?></option>
  <option value="1">Perempuan</option>
  <option value="2">Laki-Laki</option>
 
</select>

</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputAlamat" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleInputAlamat" aria-describedby="alamatHelp"value="<?php echo e($data->alamat); ?>">
    <div id="alamatlHelp" class="form-text">Contoh : Desa Bungah, Kecamatan Bungah, Kabupaten Gresik, Jawa Timur</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputKota" class="form-label">Kota</label>
    <input type="text" name="kota" class="form-control" id="exampleInputKota" aria-describedby="kotaHelp" value="<?php echo e($data->kota); ?>">
    <div id="kotalHelp" class="form-text">Contoh : Gresik</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($data->email); ?>">
    <div id="emailHelp" class="form-text">Contoh : Fatasya@mhs.unesa.ac.id</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Masukkan Data</button>
</form>
              
          
          </div>
         
          </div> 
</div>
</div><?php /**PATH C:\xampp\htdocs\tugaspbocrudlaravel-Fatasya\resources\views/tampildata.blade.php ENDPATH**/ ?>