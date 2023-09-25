<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">

        <h3 class="text-center">Data</h3>
        <?php foreach ($siswa as $data_siswa) : ?>
        <form action="<?php echo base_url('admin/aksi_ubah_siswa') ?>"
        enctype="multipart/form-data"
        method="post" class="row">
        <input name="id_siswa" type="hidden" value="<?php echo $data_siswa->id_siswa?>">
        <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_siswa->nama_siswa ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $data_siswa->nisn ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option selected value="<?php echo $data_siswa->gender ?>">
                </option>
                <option selected>Pilih Gender</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="id_kelas" class="form-select">
                            <option selected value="<?php echo $data_siswa->id_kelas ?>">
                                <?php echo tampil_full_kelas_byid($data_siswa->id_kelas) ?>
                            </option>
                            <?php foreach ($kelas as $row) : ?>
                            <option value="<?php echo $row->id ?>">
                                <?php echo $row->tingkat_kelas . ' ' . $row->jurusan_kelas ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                    <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-primary px-3 btn-lg" name="submit">Ubah</button>
                    </div>
                </div>
            </form>
            <?php endforeach ?>
            
        </div>
</body>

</html>