<?php require('template/layout_top.php') ?>
    <!-- Article Body -->
    <section class="page-section" id="article" style="background-color: #13232D">
        <div class="container ff-inter">
            <div class="d-flex justify-content-between text-white">
                <div class="d-flex align-items-center">
                    <a class="text-decoration-none text-white" href=""><b>Home</b></a> &nbsp;/ Article
                </div>
                <div class="d-flex">
                    <input class="form-control" type="search" placeholder="search article here" aria-label="Search">
                </div>
            </div>
            <div class="row mt-4">
                <?php for ($i = 0; $i < count($response); $i++) { ?>
                    <div class="col-lg-4 col-sm-6 my-3 art-item">
                        <!-- article items -->
                        <div class="card">
                            <img src="assets/img/art-<?= $i + 1 ?>.png" class="card-img-top" alt="th-article">
                            <div class="card-body row">
                                <div class="col col-9">
                                    <h4 class="card-title ff-inter text-capitalize"><?= $response[$i]['ttl'] ?></h4>
                                    <p class="card-text ff-inter text-uppercase"><?= $response[$i]['ctg'] ?> <span class="fw-bold text-capitalize"><?= date("d M Y", strtotime($response[$i]['cat'])) ?></span></p>
                                </div>
                                <div class="col col-3 d-flex">
                                    <a href="<?= $this->baseUrl ?>?artid/<?= $response[$i]['id'] ?>" class="my-auto ms-auto btn btn-detail rounded-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
           </div>
        </div>
    </section>
<?php require('template/layout_bottom.php') ?>