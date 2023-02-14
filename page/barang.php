
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <nav
                    aria-label="breadcrumb"
                    class="breadcrumb-header float-start float-lg-start"
                >
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
                <form action="admin.php?page=barang" class="d-flex" role="search">
                    <input class="form-control me-2" type="text" name="cari" placeholder="Search" aria-label="Search">
                    <button type="button" class="btn btn-primary float-end" name="cari">
                        <i class="fa fa-search"></i>
                    </button>
                    <button type="button" class="btn btn-primary float-end mx-2" data-bs-toggle="modal"data-bs-target="#primary">
                        <i class="bi bi-person-plus-fill"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 


if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>


<section class="section">
    <?php 
        include 'auth/../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from barang");
        while($d = mysqli_fetch_array($data)){
    ?>
    <div class="list-group list-group-light shadow-sm rounded my-2">
        <div class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2">
            <div class="row">
                <div class="col-sm-3 p-3 d-flex justify-content-center">
                    <img src="gambar/<?php echo $d['gambar']?>" class="rounded" width="180px" height="180px">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <h7><i class="fa fa" aria-hidden="true"><?php echo $d['id_barang']?></i></h7>
                        </div>
                        <div class="col-md-3 py-5">
                            <h5 class="fw-bold mb-1"><i class="fa fa" aria-hidden="true"> <?php echo $d['nama_barang']?></i></h5>
                            <p class="text-muted mb-0"><small>The best clothes u ever buys</small></p>
                        </div>
                        <div class="col-md-1 py-5">
                            <h5 class="fw-bold mb-1"><i class="fa fa" aria-hidden="true"> <?php echo $d['stok']?></i></h5>
                            <p class="text-muted mb-0"><small>Stok</small></p>
                        </div>
                        <div class="col-md-4 py-5">
                            <h5 class="fw-bold mb-1"><i class="fa fa" aria-hidden="true">
                            <?php  
                                echo "Rp. " . number_format($d['harga'], 0, ".", ".");
                            ?>
                            </i></h5>
                            <p class="text-muted mb-0"><small>Harga</small></p>
                        </div>
                        <div class="col-md-4 mt-5">
                            <a href="proses/barang.php?aksi=show&id_barang=<?php echo $d['id_barang'] ?>" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                            <a href="admin.php?page=edit_barang&id_barang=<?php echo $d['id_barang'] ?>" class="btn btn-warning mx-1"><i class="bi bi-pencil-fill"></i></a>
                            <a onclick="swalDelete('proses/barang.php?aksi=delete&id_barang=<?php echo $d['id_barang'] ?>')" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</section>


<div class="modal-primary me-1 mb-1 d-inline-block">
<?php 
    include 'koneksi.php';
    $querykode = mysqli_query($koneksi, 
    "SELECT max(id_barang) as idterbesar FROM barang");
    $data = mysqli_fetch_array($querykode);
    $id_barang = $data['idterbesar'];
    $urutan = (int) substr($id_barang, 3, 3);
    $urutan++;
    $huruf = "BRG";
    $idbarang = $huruf . sprintf("%03s", $urutan);
?>

  <!--primary theme Modal -->
  <div
    class="modal fade text-left"
    id="primary"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myModalLabel160"
    aria-hidden="true"
  >
    <div
      class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
      role="document"
    >
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5
            class="modal-title white"
            id="myModalLabel160"
          >
          Form Edit
          </h5>
          <button
            type="button"
            class="close"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <i data-feather="x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form action="proses/barang.php?aksi=simpan" method="post" enctype="multipart/form-data">
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="text"
                class="form-control"
                placeholder="Nama Barang"
                name="nama_barang"
                required
                autofocus
              />
              <input
                type="hidden"
                class="form-control"
                name="id_barang"
                value="<?php echo $idbarang ?>"
                required
                autofocus
              />
              <div class="form-control-icon">
                <i class="bi bi-people-fill"></i>
              </div>
            </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="text"
                  class="form-control"
                  placeholder="stok"
                  name="stok"
                  required
                />
                <div class="form-control-icon">
                  <i class="bi bi-person"></i>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="text"
                  class="form-control"
                  placeholder="harga"
                  name="harga"
                  required
                />
                <div class="form-control-icon">
                  <i class="bi bi-shield-lock"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group position-relative has-icon-left mb-4">
            <input
              type="file"
              class="form-control"
              placeholder="gambar"
              name="gambar"
              required
            />
            <div class="form-control-icon">
              <i class="bi bi-phone"></i>
            </div>
          </div>
          </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-light-secondary"
            data-bs-dismiss="modal"
          >
            <i class="bx bx-x d-block d-sm-none"></i>
            <span class="d-none d-sm-block"
              >Close</span
            >
          </button>
          <input
            type="submit"
            class="btn btn-primary ml-1"
            data-bs-dismiss="modal"
          />
            <i
              class="bx bx-check d-block d-sm-none"
            ></i>
        </div>
      </div>
    </div>
  </div>
</form>
</div>



