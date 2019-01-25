<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Buku</h1>
    <h3>
        <?php
            if($this->session->flashdata('sukses') == TRUE)
            {
                echo $this->session->flashdata('sukses');
            }
        ?>
    </h3>
    <form action="<?php echo base_url('Buku/search') ?>" method="get" class"form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari Data" aria-label="Search" name="keyword">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">CARI</button>
    </form>
</body>
</html>