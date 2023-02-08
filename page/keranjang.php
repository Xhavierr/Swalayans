<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Keranjang</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Admin
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-12 col-md-6 order-md-2 d-flex justify-content-end">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <a href="admin.php?page=keranjang" class="btn btn-primary float-end">
                        <i class="bi bi-cart"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row shadow-sm">
    <div class="col-md-8 bg-white rounded">
        <h5 class="fa fa-cart fs-3 fw-bolder ps-4 pt-4">SHOPING CART</h5>
        <div class="col-12 border-bottom">
            <div class="row p-4">
                <div class="col-md-3">
                    <img src="gambar/hoodie.webp" alt="" width="220px" height="220px">
                </div>
                <div class="col-md-3 p-5 mt-2">
                    <h3 class="fw-bold mb-1"><i class="fa fa" aria-hidden="true">HOODIE</i></h3>
                    <p class="text-muted mb-0">The best clothes u ever buys</p>
                </div>
                <div class="col-md-3 p-5 mt-2">
                    <h3 class="fw-bold mb-1"><i class="fa fa" aria-hidden="true">
                            <?php  
                        echo "Rp. " . number_format(70000, 0, ".", ".");
                    ?>
                        </i></h3>
                    <p class="text-muted mb-0">Harga</p>
                </div>
                <div class="col-md-3 p-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h6>1</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h6>X</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 border-bottom">
            <div class="row p-4">
                <div class="col-md-3">
                    <img src="gambar/hoodie.webp" alt="" width="220px" height="220px">
                </div>
                <div class="col-md-3 p-5 mt-2">
                    <h3 class="fw-bold mb-1"><i class="fa fa" aria-hidden="true">HOODIE</i></h3>
                    <p class="text-muted mb-0">The best clothes u ever buys</p>
                </div>
                <div class="col-md-3 p-5 mt-2">
                    <h3 class="fw-bold mb-1"><i class="fa fa" aria-hidden="true">
                            <?php  
                        echo "Rp. " . number_format(70000, 0, ".", ".");
                    ?>
                        </i></h3>
                    <p class="text-muted mb-0">Harga</p>
                </div>
                <div class="col-md-3 p-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h6>1</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h6>X</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 border border-1 bg-primary text-white rounded" style="max-height: 800px;">
        <div class="fa fa-cart fs-3 fw-bolder p-4">PAYMENT</div>
    </div>
</div>