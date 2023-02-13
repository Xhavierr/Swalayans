
    <div class="row px-3" style="margin-top: 10rem;">
        <?php 
        include 'auth/../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from barang");
        while($d = mysqli_fetch_array($data)){
    ?>
        <div id="animasi" class="col-3 text-center">
            <a href="user.php?page=detail_shop&id_barang=<?php echo $d['id_barang']?>" class="text-black">
                <img src="gambar/<?= $d['gambar']?>" alt="img" class="img-fluid p-5">
                <div class="fa fa fs-6 fw-bold mt-3"><?= $d['nama_barang']?></div>
            <p class="text-danger">$.<?= $d['harga']?></p>
        </a>
        </div>
            
        <?php } ?>
    </div>