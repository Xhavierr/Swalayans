<?php
include 'koneksi.php';
$id_barang = $_GET['id_barang'];
$query = mysqli_query(
    $koneksi,
    "SELECT * FROM barang WHERE id_barang = '$id_barang'"
);
$data = mysqli_fetch_array($query);
?>
<form action="proses/keranjang.php?aksi=simpan" method="post">
<div class="row px-3" style="margin-top: 9rem;">
    <div class="col-md-8 text-center">
            <img src="gambar/<?= $data[
                'gambar'
            ] ?>" alt="img" class="img-fluid p-5">
    </div>
    <div class="col-md-4">
        <input type="hidden" name="id_barang" value="<?=$id_barang?>">
        <input type="hidden" name="id_user" value="<?=$_SESSION['id_user']?>">
        <div class="fa fa fs-3 mt-5 pt-5"><?= $data['nama_barang'] ?></div>
        <p class="text-secondary">1017 ALYX 9SM Buckled Zipped Gilet</p>
        <p class="text-danger fs-6 mb-3">$.<?= $data['harga'] ?></p>
        <div class="text-black">
            <label for="jumlah" class="fa fa-calculator py-3 fs-6 text-secondary"> Jumlah</label>
            <input id="jumlah" type="number" name="jumlah" class="w-100 mb-2" style="height: 45px;" required autofocus/>
        </div>
        <button type="submit" class="btn w-100" style="background-color: black;"><h6 class=" text-white py-1 mt-2"> Add to bag</h6></button>

        <ul class="nav nav-tabs mb-3 mt-5" id="myTab0" role="tablist">
  <li class="nav-item" role="presentation">
    <button
      class="nav-link active"
      id="home-tab0"
      data-mdb-toggle="tab"
      data-mdb-target="#home0"
      type="button"
      role="tab"
      aria-controls="home"
      aria-selected="true"
    >
      Description
    </button>
  </li>
  <li class="nav-item" role="presentation">
    <button
      class="nav-link"
      id="profile-tab0"
      data-mdb-toggle="tab"
      data-mdb-target="#profile0"
      type="button"
      role="tab"
      aria-controls="profile"
      aria-selected="false"
    >
      Shipping and Return
    </button>
  </li>
</ul>
<div class="tab-content" id="myTabContent0">
  <div
    class="tab-pane fade show active"
    id="home0"
    role="tabpanel"
    aria-labelledby="home-tab0"
  >
  <p>
      100% Polyester, 55% Polyamide, 45% CottonMade in Italy
  </p>
  <p>
      Designer Model Number: AXMOU0396FA01
    </p>
    <p>
        Designer Colour: BLK0001

    </p>
  </div>
  <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
    Tab 2 content
  </div>
</div>
    </div>
</div>
</form>

