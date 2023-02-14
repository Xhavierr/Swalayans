
    <div class="row px-3" style="margin-top: 10rem;">
    <div class="col-12 border-bottom px-3 py-3"><h5 class="text-black fa fa-cart-plus fs-3"> S h o p</h5></div>

        <?php 
        include 'auth/../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from barang");
        while($d = mysqli_fetch_array($data)){
    ?>
        <div id="animasi" class="col-md-3 text-center">
            <a href="user.php?page=detail_shop&id_barang=<?php echo $d['id_barang']?>" class="text-black">
                <img src="gambar/<?= $d['gambar']?>" alt="img" class="img-fluid p-5">
                <div class="fa fa fs-6 fw-bold mt-3"><?= $d['nama_barang']?></div>
            <p class="text-danger">$.<?= $d['harga']?></p>
        </a>
        </div>
            
        <?php } ?>
    </div>

    

<script src="assets/extensions/toastify-js/src/toastify.js"></script>
<script>
<?php
if (isset($_SESSION['simpan_transaksi'])) {
    if ($_SESSION['simpan_transaksi'] === "sukses") {
        ?>
        Toastify({
            text: "Add to Bag!!",
            duration: 3000,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            },
        }).showToast();
        <?php unset($_SESSION['simpan_transaksi']);
    } else if ($_SESSION['simpan_transaksi'] === "gagal") {
        ?>
        Toastify({
            text: "Data Gagal Disimpan!!",
            duration: 3000,
            close: true,
            style: {
                background: "#d9534f",
            }
        }).showToast();
       <?php unset($_SESSION['simpan_transaksi']);
    }
}
 ?>
 </script>