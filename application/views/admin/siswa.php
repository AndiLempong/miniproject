<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body class="min-vh-100 d-flex align-items-center">
<nav class="navbar navbar-dark bg-dark fixed-top">
   <div class="container-fluid">
      <a class="navbar-brand" href="#">𝐒𝐈𝐒𝐓𝐄𝐌 𝐈𝐍𝐅𝐎𝐑𝐌𝐀𝐒𝐈 𝐒𝐄𝐊𝐎𝐋𝐀𝐇</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">𝐇𝐎𝐌𝐄</h5>
         <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class></div>
      <div class="offcanvas-body">
         <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="">𝐃𝐀𝐒𝐇𝐁𝐎𝐀𝐑𝐃</a>
            </li>

         <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="<?php echo base_url('admin/siswa') ?>">𝐃𝐀𝐅𝐓𝐀𝐑 𝐒𝐈𝐒𝐖𝐀</a>
            </li>

         <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="<?php echo base_url('admin/guru') ?>">𝐃𝐀𝐅𝐓𝐀𝐑 𝐆𝐔𝐑𝐔</a>
            </li>
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="<?php echo base_url('admin/home') ?>">Log Out</a>
            </li>
         

         <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search Data" aria-label="Search">
            <button class="btn btn-info" type="submit">Search</button>

         </form>
      </div>
   </div>
</div>
</nav>
    <div class="card w-70 m-auto p-3">
        <table class="table table-striped">
  <thead>
      <th scope="col">Siswa</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">NISN</th>
      <th scope="col">Gender</th>
      <th scope="col">Kelas</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">  <?php $no= 0; foreach ($siswa as $row) : $no++?>
  <tr>
      <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $no ?></td>
         <td class="whitespace-nowrap px-4 py-2 text-gray-700">
            <?php echo $row->nama_siswa ?></td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nisn ?></td>
         <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->gender ?>
         </td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
               <?php echo tampil_full_kelas_byid($row->id_kelas) ?>
         </td>
               <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                  <a href="<?php echo base_url('admin/ubah_siswa/').$row->id_siswa?>" class="btn btn-secondary">Ubah</a>
            <button onclick="hapus(<?php echo $row->id_siswa?>)" class="btn btn-dark">Hapus</button>
         
         </td>
      </tr><?php endforeach ?>
   </table>
  <a href="<?php echo base_url('admin/tambah_siswa') ?>" class="btn btn-light">Tambah</a>
</div>
</tbody>
</html>
    <script>
        function hapus(id) {
            var yes = confirm('Benar Anda Ingin Menghapus?');
            if (yes == true) {
                window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id;
            }
        }
    </script>
