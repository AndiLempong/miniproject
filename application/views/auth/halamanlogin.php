<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex align-items-center bg-info">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">𝐒𝐈𝐒𝐓𝐄𝐌 𝐈𝐍𝐅𝐑𝐎𝐌𝐀𝐒𝐈 𝐒𝐄𝐊𝐎𝐋𝐀𝐇</h3>
        <center>
        <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="" width="180px" height="150px">
</center>
        <form action="<?php echo base_url(); ?>Auth/aksi_login" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">𝐄𝐦𝐚𝐢𝐥</label>
                <input type="text" class="form-control" placeholder="𝘔𝘢𝘴𝘶𝘬𝘢𝘯 𝘌𝘮𝘢𝘪𝘭" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">𝐏𝐚𝐬𝐬𝐰𝐨𝐫𝐝</label>
                <input type="password" class="form-control" placeholder="𝘔𝘢𝘴𝘶𝘬𝘢𝘯 𝘗𝘢𝘴𝘴𝘸𝘰𝘳𝘥" id="password" name="password">
            </div>
            <button class="btn btn-primary" type="submit">𝐋𝐎𝐆𝐈𝐍</button>

</form>
            
</body>
</html>
