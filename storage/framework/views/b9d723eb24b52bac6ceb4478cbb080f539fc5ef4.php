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
    <h1 class="text-center">Data Mahasiswa</h1>
    <h1 class="text-center mb-4">by Salsabilla Putri Saharani</h1>

    <a href="/tambahpelajar" class="btn btn-success">Tambah Data</a>
    <div class="container">
        <div class="  row">
            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e($message); ?>

            </div>
            <?php endif; ?>

    <table class="table table-bordered border-success">
   
  <thead>
    <tr>
      <th scope="col">#</th>
      <th class="text-center" scope="col">Nama</th>
      <th class="text-center" scope="col">NIM</th>
      <th class="text-center" scope="col">Jenis Kelamin</th>
      <th class="text-center" scope="col">Alamat</th>
      <th class="text-center" scope="col">Kota</th>
      <th class="text-center" scope="col">Email</th>
      <th class="text-center" scope="col">Dibuat Pada</th>
      <th class="text-center" scope="col">Foto</th>
      <th class="text-center" scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no = 1;

      ?>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
    <tr>
      <th scope="row"><?php echo e($no++); ?></th>
      <td><?php echo e($row->nama); ?></td>
      <td><?php echo e($row->nim); ?></td>
      <td><?php echo e($row->jeniskelamin); ?></td>
      <td><?php echo e($row->alamat); ?></td>
      <td><?php echo e($row->kota); ?></td>
      <td><?php echo e($row->email); ?></td>
      <td><?php echo e($row->created_at->format('D M Y')); ?></td>
      <td>
          <img src="<?php echo e(asset('fotopelajar/'.$row->foto)); ?>" alt="" style="width: 100px;">
      </td>
      <td>
      <a href="/tampilkandata/<?php echo e($row->id); ?>"  class="btn btn-info">Edit</a>
      <a href="/delete/<?php echo e($row->id); ?>" class="btn btn-danger">Hapus</a>
    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
  </tbody>

</table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\tugaspbocrudlaravel\resources\views/datapelajar.blade.php ENDPATH**/ ?>