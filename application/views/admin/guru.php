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
<div class="card w-70 m-auto p-3">
        <table class="table table-striped">
  <thead>
      <th scope="col">Guru</th>
      <th scope="col">Nama Guru</th>
      <th scope="col">NIK</th>
      <th scope="col">Gender</th>
      <th scope="col">Mapel</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">  <?php $no= 0; foreach ($guru as $row) : $no++?>
  <tr>
      <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $no ?></td>
         <td class="whitespace-nowrap px-4 py-2 text-gray-700">
            <?php echo $row->nama_guru ?></td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->nik ?></td>
         <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row->gender ?>
         </td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
               <?php echo tampil_full_mapel($row->id_mapel) ?>
         </td>
               <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                  <a href="<?php echo base_url('admin/ubah_guru/').$row->id_guru?>" class="btn btn-outline-warning">Ubah</a>
            <button onclick="hapus(<?php echo $row->id_guru?>)" class="btn btn-outline-danger">Hapus</button>
         
         </td>
      </tr><?php endforeach ?>
   </table>
  <a href="<?php echo base_url('admin/tambah_guru') ?>" class="btn btn-outline-success">Tambah</a>
</div>
</tbody>
</html>
    <script>
        function hapus(id) {
            var yes = confirm('Benar Anda Ingin Menghapus Nya?');
            if (yes == true) {
                window.location.href = "<?php echo base_url('admin/hapus_guru/')?>" + id;
            }
        }
    </script>
</body>
