
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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"data-bs-target="#primary">
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

<div class="row">
    <div class="col-md-4">
    <div class="card shadow-sm">
                <div class="card-header">
                    <div class="card-body text-center">
                        <img src="gambar/<?php echo $data['gambar']?>" class="rounded-circle border border-2" width="180px" height="180px">
                        <h6 class="mt-3"><?php echo $data['nama_barang']?></h6>
                        <ul class="list-group list-group-unbordered mt-3">
                            <li class="list-group-item" style="border-top: 2px; border-left:2px; border-right:2px;">
                            <b class="pull-left">Username</b><a class="pull-right"><?php echo $data['nama_barang']?></a>
                            </li>
                            <li class="list-group-item" style="border-top: 2px; border-left:2px; border-right:2px;">
                            <b class="pull-left">Email</b><a class="pull-right"><?php echo $data['stok']?></a>
                            </li>
                            <li class="list-group-item" style="border-top: 2px; border-left:2px; border-right:2px;">
                            <b class="pull-left">Bio</b><a class="pull-right"><?php echo $data['harga']?></a>
                            </li>
                        </ul>
                    </div>
                </div>
             </div>
    </div>
    <div class="col-md-8">
      <h3>Edit Barang</h3>
        <div class="card shadow-sm">
            <div class="card-body">
            <form class="form form-horizontal p-5">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label>Nama Barang</label>
                            </div>
                            <div class="col-md-8">
                              <div class="form-group has-icon-left">
                                <div class="position-relative">
                                  <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nama Barang"
                                    id="first-name-icon"
                                    name="nama_barang"
                                  />
                                  <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <label>Stok</label>
                            </div>
                            <div class="col-md-8">
                              <div class="form-group has-icon-left">
                                <div class="position-relative">
                                  <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Stok"
                                    id="first-name-icon"
                                    name="stok"
                                  />
                                  <div class="form-control-icon">
                                    <i class="bi bi-envelope"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <label>Harga</label>
                            </div>
                            <div class="col-md-8">
                              <div class="form-group has-icon-left">
                                <div class="position-relative">
                                  <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Mobile"
                                    name="harga"
                                  />
                                  <div class="form-control-icon">
                                    <i class="bi bi-phone"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                              <button
                                type="submit"
                                class="btn btn-primary me-1 mb-1"
                              >
                                Submit
                              </button>
                              <button
                                type="reset"
                                class="btn btn-light-secondary me-1 mb-1"
                              >
                                Reset
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
            </div>
        </div>
    </div>
</div>