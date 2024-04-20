<?php require('template/layout_top.php') ?>
<!-- Article Body -->
<section class="page-section" id="article" style="background-color: #13232D">
    <div class="container ff-inter">
        <div class="d-flex justify-content-between text-white">
            <div class="d-flex align-items-center">
                <a class="text-decoration-none text-white" href="<?= $this->baseUrl ?>?proid/<?= $this->proId ?>"><b>Home</b></a> &nbsp;/ Article
            </div>
            <div class="d-flex">
                <input class="form-control" id="searchArticle" type="search" placeholder="search article here" aria-label="Search">
            </div>
        </div>
        <div class="row row-article mt-4">
            <?php for ($i = 0; $i < count($response); $i++) { ?>
                <div class="col-lg-4 col-sm-6 my-3 art-item">
                    <!-- article items -->
                    <div class="card">
                        <img src="assets/img/<?= $response[$i]['cod'] ?>-art-<?= $response[$i]['id'] ?>.jpg" class="card-img-top" alt="th-article">
                        <div class="card-body row">
                            <div class="col col-9">
                                <h4 class="card-title ff-inter text-capitalize"><?= strlen($response[$i]['ttl']) > 20 ? substr($response[$i]['ttl'], 0, 20) . '...' : $response[$i]['ttl'] ?></h4>
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