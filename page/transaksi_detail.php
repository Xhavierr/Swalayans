<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            DataTable
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-12 col-md-6 order-md-2 d-flex justify-content-end">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                        data-bs-target="#primary">
                        <i class="bi bi-person-plus-fill"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php  
    include 'koneksi.php';
    $id_barang = $_GET['id_barang'];
    $query = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang = '$id_barang'");
    $data = mysqli_fetch_array($query);
?>
<div class="card">
    <div class="card-body">
        <form action="proses/transaksi.php?aksi=simpan" method="post">
            <div class="row">
                <div class="col-md-5" style="height: 550px;">
                    <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']?>" class="form-control">
                    <input type="hidden" name="harga" id="harga" value="<?php echo $data['harga']?>"
                        class="form-control">
                    <img src="gambar/<?php echo $data['gambar']?>" class="rounded img-fluid p-3"
                        style="width:100%;height:100%">
                </div>
                <div class="col-md-7 p-5">
                    <h1 class="fw-bold mb-1 px-3 mt-3"><i class="fa fa" aria-hidden="true">
                            <?php echo $data['nama_barang']?></i></h1>
                    <div class="row px-3 py-1">
                        <div class="col-3 d-none d-sm-block border-end border-primary d-flex justify-content-start">
                            <h5 class="fa fs-6 fa-user"> Najm Xhavier</h5>
                        </div>
                        <div class="col-3 d-none d-sm-block border-end border-primary text-center">
                            <h5 class="fa fs-6 fa-calendar"> 2 hours ago</h5>
                        </div>
                        <div class="col-3 d-none d-sm-block d-flex justify-content-center text-center">
                            <h5 class="fa fa-eye"> 445</h5>
                        </div>
                    </div>
                    <!-- responsive -->
                    <div class="row px-3 py-1">
                        <div class="col-4 d-block d-sm-none border-end border-primary d-flex justify-content-start">
                            <h6 class="fa fa-user"> Najm Xhavier</h6>
                        </div>
                        <div class="col-4 d-block d-sm-none border-end border-primary d-flex justify-content-center">
                            <h6 class="fa fa-calendar"> 2 hours ago</h6>
                        </div>
                        <div class="col-4 d-block d-sm-none d-flex justify-content-center">
                            <h6 class="fa fa-eye"> 445</h6>
                        </div>
                    </div>
                    <div class="col-12">
                        <h2 class="fw-bold mb-1 px-3 text-black"><i class="fa fa" aria-hidden="true">
                                <?php  
                            echo "Rp. " . number_format($data['harga'], 0, ".", ".") ;
                            echo" - Rp. 100.000"
                        ?>
                            </i></h2>
                    </div>
                    <!-- end responsive -->
                    <div class="col-12 px-3 mt-4">
                        <div class="row mb-4">
                            <div class="col-2">
                                <h4 class="fa fa fs-5 text-secondary">Pengiriman</h4>
                            </div>
                            <div class="col-6">
                                <h4 class="fa fa-truck fs-5 text-success"> Gratis Ongkir</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <h4 class="fa fa fs-5 text-secondary py-2">Pelanggan</h4>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select class="choices form-select form-select-xl" name="id_pelanggan">
                                        <?php 
                                        include 'auth/../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi,"select * from pelanggan");
                                        while($d = mysqli_fetch_array($data)){
                                    ?>
                                        <option class="text-black" name="id_pelanggan"
                                            value="<?= $d['id_pelanggan'] ?>"><?=$d['nama_pelanggan'] ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-1 text-center">
                                <h4 class="fa fa text-secondary fs-5 py-2">Jumlah</h4>
                            </div>
                            <?php 
                            include 'koneksi.php';
                            $querykode = mysqli_query($koneksi, 
                            "SELECT max(id_transaksi) as idterbesar FROM transaksi");
                            $data = mysqli_fetch_array($querykode);
                            $id_transaksi = $data['idterbesar'];
                            $urutan = (int) substr($id_transaksi, 3, 3);
                            $urutan++;
                            $huruf = "PLG";
                            $id_transaksi = $huruf . sprintf("%03s", $urutan);

                            $Now = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
                        ?>
                            <div class="col-3 mx-2">
                                <input type="number" name="jumlah" id="jumlah" onchange="hitung()" class="form-control">
                                <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>"
                                    class="form-control">
                                <input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>"
                                    class="form-control">
                                <input type="hidden" name="tanggal" value="<?= $Now->format('Y-m-d H:i:s') ?>"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6" style="margin-top: 100px;">
                                <h4 class="fa fs-4 fa text-black">Total <div class="text-success fa fa fs-4">Rp.</div>
                                </h4><input type="text" name="total" readonly class="text-success border-0 fa fa fs-4"
                                    id="total"></input>
                                <input type="hidden" name="id_barang" value="<?= $id_barang ?>">
                            </div>
                            <div class="col-3 d-flex justify-content-end" style="margin-top: 100px;">
                                <button type="submit" class="btn btn-lg btn-primary fa fa-cart-plus"></button>
                            </form>
                            <form action="">
                                <input type="hidden" name="id_barang" value="<?= $id_barang ?>">
                                <button type="submit" class="btn btn-lg btn-success fa fa-dolar mx-2"> Buys</button>
                            </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>


<script>
    function hitung() {
        var harga = document.getElementById('harga').value;
        var jumlah = document.getElementById('jumlah').value;
        var total = harga * jumlah;
        document.getElementById('total').value = total;
    }
</script>