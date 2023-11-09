<?php require('template/layout_top.php') ?>
<!-- Portfolio Body -->
<section class="page-section" id="portfolio">
    <div class="container ff-inter">
        <div class="d-flex justify-content-between text-white">
            <div class="d-flex align-items-center">
                <a class="text-decoration-none text-white" href=""><b>Home</b></a> &nbsp;/ Portfolio
            </div>
            <div class="d-flex">
                <input class="form-control" id="searchPortfolio" type="search" placeholder="search portfolio here" aria-label="Search">
            </div>
        </div>
        <div class="row row-portfolio mt-4">
            <?php for ($i = 0; $i < count($response); $i++) { ?>
                <div class="col-lg-4 col-sm-6 my-3 port-item">
                    <!-- portfolio items -->
                    <div class="card">
                        <img src="assets/img/<?= substr($response[$i]['id'], 0, 11) ?>-port-<?= $i + 1 ?>.jpg" class="card-img-top" alt="th-portfolio">
                        <div class="card-body row">
                            <div class="col col-9">
                                <h4 class="card-title ff-inter text-capitalize"><?= $response[$i]['ttl'] ?></h4>
                                <p class="card-text ff-inter text-uppercase"><?= $response[$i]['ctg'] ?> <span class="fw-bold text-capitalize"><?= date("d M Y", strtotime($response[$i]['cat'])) ?></span></p>
                            </div>
                            <div class="col col-3 d-flex">
                                <a href="<?= $this->baseUrl ?>?porid/<?= $response[$i]['id'] ?>" class="my-auto ms-auto btn btn-detail rounded-circle">
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