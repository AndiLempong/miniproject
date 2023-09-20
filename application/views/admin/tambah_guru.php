<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Data</h3>
        <form action="<?php echo base_url('admin/aksi_tambah_siswa') ?>"
        enctype="multipart/form-data"
        method="post" class="row">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Guru</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn">
            </div>
            <div class="mb-3 col-6">
                <label for="mapepl" class="form-label">Mapel</label>
                <select name="mapel" class="form-select">
                    <option selected>Pilih Mapel</option>
                    <option value="TIK">TIK</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="id_kelas" class="form-select">
                    <option selected>Pilih Guru</option>
                    <?php foreach($guru as $row): ?>
                    <option value="<?php echo $row->id ?>">
                    <?php echo $row->id_mapel.' '.$row->guru_mapel; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="submit">Ubah</button>
                </div>
                </div>
        </form>

    </div>
</body>

</html>