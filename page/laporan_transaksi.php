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
          <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#primary">
            <i class="bi bi-person-plus-fill"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
    include "auth/koneksi.php";
    $sql = "SELECT * FROM `V_transaksi` ORDER BY `V_transaksi`.`id_transaksi` DESC";
    $query = mysqli_query($koneksi, $sql);
    $no = 0; 
    while ($d = mysqli_fetch_array($query)) {
    $no++
?>
<div class="accordion accordion-flush py-2" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="animasi" id="flush-headingOne">
      <div class="accordion-button collapsed bg-white rounded text-black" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#flush-collapseOne-<?php echo $d['id_transaksi'] ?>" aria-expanded="false"
        aria-controls="flush-collapseOne">

        <div class="col-9 mx-3">
          <h6><i class="fa fa-user" aria-hidden="true"> <?php echo ucfirst($d['nama_pelanggan']) ?></i></h6>
        </div>
        <div class="col-2 d-flex justify-content-end">
          <div class="row">
            <div class="col-10 text-end">
              <h6><i class="fa fa-calendar p-3" aria-hidden="true"> <?php echo $d['tanggal']?></i></h6>
            </div>
            <div class="col-2 text-end">
              <a href="page/cetak_laporan.php?id_transaksi=<?php echo $d['id_transaksi'] ?>" target="_blank">
                <div class="btn btn-success p-2 mt-2 fa fa-print"></div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </h2>
    <div id="flush-collapseOne-<?php echo $d['id_transaksi'] ?>" class="accordion-collapse collapse"
      aria-labelledby="flush-headingOne" data-mdb-parent="#accordionFlushExample">
      <div class="accordion-body bg-white text-black">

        <div class="list-group list-group-light rounded my-2">
          <div class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2">
            <div class="row">
              <div class="col-sm-3 d-flex justify-content-center">
                <img src="gambar/<?php echo $d['gambar']?>" class="rounded" width="250px" height="250px">
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-12">
                    <div class="row border py-3">
                      <div class="col-1 border-1 border-end border-primary">
                        <h6><i class="fa fa-user" aria-hidden="true"> <?php echo $d['nama_user']?></i></h6>
                      </div>
                      <div class="col-9 border-1 mx-3 border-end border-primary">
                        <h6><i class="fa fa-calendar" aria-hidden="true"> <?php echo $d['tanggal']?></i></h6>
                      </div>
                      <div class="col-1">
                        <h6><i class="fa fa" aria-hidden="true"><?php echo $d['id_transaksi']?></i></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 py-4">
                    <h3 class="fw-bold mb-1"><i class="fa fa" aria-hidden="true"> <?php echo $d['nama_barang']?></i>
                    </h3>
                    <p class="text-muted mb-0">Jumlah Pembelian = <?= $d['jumlah'] ?></p>
                  </div>
                  <div class="col-md-3 py-4">
                    <h3 class="fw-bold mb-1"><i class="fa fa" aria-hidden="true"> <?php echo $d['nama_pelanggan']?></i>
                    </h3>
                    <p class="text-muted mb-0">Pelanggan</p>
                  </div>
                  <div class="col-md-4 py-4">
                    <h3 class="fw-bold mb-1"><i class="fa fa" aria-hidden="true">
                        <?php  
                            echo "Rp. " . number_format($d['total'], 0, ".", ".");
                        ?>
                      </i></h3>
                    <p class="text-muted mb-0">Total</p>
                  </div>
                  <div class="col-md-2 py-4">
                    <!-- <a href="/swalayan/page/cetak_laporan.php">
                      <div class="btn btn-success mt-3 fa fa-print"> Cetak</div>
                    </a> -->
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>