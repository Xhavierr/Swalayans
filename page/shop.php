<div class="container">
    <div class="row">
        <?php 
        include 'auth/../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from barang");
        while($d = mysqli_fetch_array($data)){
    ?>
        <div class="col-md-3">
            <a href="admin.php?page=transaksi_detail&id_barang=<?php echo $d['id_barang'] ?>">
                <div class="card shadow-sm" id="animasi">
                    <div class="card-body d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="gambar/<?php echo $d['gambar']?>" class="rounded p-2 mb-3" width="100%"
                                    height="280px">
                            </div>
                            <div class="col-12">
                                <h3 class="fw-bold px-3"><i class="fa fa" aria-hidden="true">
                                        <?php echo $d['nama_barang']?></i></h3>
                                <!-- <p class="text-muted mb-0 px-3">The best clothes u ever buys</p> -->
                            </div>
                            <div class="col-12">
                                <h5 class="fw-bold mb-1 px-3 text-secondary"><i class="fa fa" aria-hidden="true">
                                        <?php  
                                echo "Rp. " . number_format($d['harga'], 0, ".", ".") ;
                                echo" - Rp. 100.000"
                            ?>
                                    </i></h5>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
            <!-- <button type="submit" class="btn btn-lg btn-primary fa fa-cart-plus"></button> -->
        </div>
        <?php } ?>
    </div>
</div>