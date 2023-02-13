<form action="proses/transaksi.php?aksi=simpan" method="post">
<div class="row px-4" style="margin-top: 10rem;">
    <div class="col-md-8">
        <?php
        include 'koneksi.php';
        $id_user = $_SESSION['id_user'];
        $query=mysqli_query($koneksi,"SELECT * FROM keranjang INNER JOIN barang ON keranjang.id_barang=barang.id_barang WHERE id_user = '$id_user'");
        $data = mysqli_fetch_array($query);
        $total = 0;
        $tot_bayar = 0;

        while ($d = $query->fetch_assoc()) {
        $total = $d['harga'] * $d['jumlah'];
        $tot_bayar += $total;
        ?>
        <div class="col-11 pe-3 border-bottom border-black border-1">
            <div class="row">
                <div class="col-3 d-flex justify-content-center">
                    <img src="gambar/<?=$d['gambar'] ?>" alt="img" class="img-fluid py-3" style="width: 110px;height:180px">
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-5 mt-4 ">
                            <input type="hidden" name="id_user" value="<?=$_SESSION['id_user']?>">
                            <input type="hidden" name="total" value="<?=$tot_bayar?>">
                            <?php
                            $querykode = mysqli_query(
                                $koneksi,
                                'SELECT max(id_transaksi) as idterbesar FROM transaksi'
                            );
                            $data = mysqli_fetch_array($querykode);
                            $id_transaksi = $data['idterbesar'];
                            $urutan = (int) substr($id_transaksi, 3, 3);
                            $urutan++;
                            $huruf = 'TRS';
                            $id_transaksi = $huruf . sprintf('%03s', $urutan);

                            $Now = new DateTime(
                                'now',
                                new DateTimeZone('Asia/Jakarta')
                            );
                            ?>
                            <input type="hidden" name="id_transaksi" value="<?=$id_transaksi ?>">
                            <input type="hidden" name="tanggal" value="<?= $Now->format(
                                    'Y-m-d H:i:s'
                                ) ?>">
                            <h7 class="text-black fw-bold"><?=$d['nama_barang'] ?></h7>
                            <p class="text-secondary">1017 ALYX 9SM Buckled Zipped Gilet</p>
                        </div>
                        <div class="col-5 mt-4">
                            <h7 class="text-black fw-bold">Qty</h7>
                            <p class="text-secondary"><?=$d['jumlah'] ?></p>
                        </div>
                        <div class="col-2 mt-4 text-end">
                            <h7 class="text-black"><span class="fa fa-close fs-3"></span></h7>
                        </div>   
                        <div class="col-12 mt-4">
                            <div class="text-black fw-bold">$.<?= $d['harga']?></div>
                        </div>
                    </div>           
                </div>
              
            </div>
        </div>
        <?php } ?>
        
    </div>
    <div class="col-md-4">
        <div class="text-black border-bottom fw-bold py-2">Summary</div>
            <div class="row">
                <div class="col-6">
                    <div class="text-black py-3">Subtotal</div>
                </div>
                <div class="col-6 text-end">
                    <div class="text-black fw-bold py-3">USD $.<?= $tot_bayar?></div>
                </div>
            </div>
            <p><small>Shipping & taxes calculated at checkout</small></p>
            <div class="col-12 text-center">
                <button type="submit" class="bg-black py-3 w-100">
                    <h6 class="text-white">Continue to Checkout</h6>
                </button>
            </div>
    </div>
</div>
</form>