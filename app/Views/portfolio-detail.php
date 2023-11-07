<?php require('template/layout_top.php') ?>
<!-- Portfolio Header -->
<header class="port-head" id="port-head" style="background-image: url('assets/img/bg-portfolio.png')">
    <div class="container">
        <div class="masthead-heading text-uppercase"><?= $response['ttl'] ?></div>
        <div class="masthead-subheading"><a class="text-decoration-none text-white" href="<?= $this->baseUrl ?>?proid/<?= substr($response['id'], 0, 11) ?>"><b>Home</b></a> / <a class="text-decoration-none text-white" href="<?= $this->baseUrl ?>?por/<?= substr($response['id'], 0, 11) ?>"><b>Portfolio</b></a> / Detail</div>
    </div>
</header>
<!-- Portfolio Body -->
<section class="port-body" id="port-body">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-12 col-lg-8 my-3">
                <div id="carouselExampleCaptions" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php for ($i = 0; $i < count(explode('|', $response['sbt'])); $i++) { ?>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>" class="<?= ($i == 0) ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?= $i + 1 ?>"></button>
                        <?php } ?>
                    </div>
                    <div class="carousel-inner rounded">
                        <?php for ($j = 0; $j < count(explode('|', $response['sbt'])); $j++) { ?>
                            <div class="carousel-item <?= ($j == 0) ? 'active' : '' ?>">
                                <img src="assets/img/1dGV4dCBkdW-port-001-<?= ($j + 1) ?>.jpg" class="d-block w-100" alt="img-slider">
                                <div class="carousel-caption d-none d-md-block ff-inter">
                                    <h5 class="text-capitalize"><?= explode('|', $response['sbt'])[$j] ?></h5>
                                    <p><?= explode('|', $response['dsc'])[$j] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col col-12 col-md-12 col-lg-4 my-3">
                <div class="card h-100">
                    <div class="card-body ff-inter">
                        <h2 class="text-center">INFORMATION</h2>
                        <hr class="border border-1 border-white">
                        <div class="item">
                            <h5>category</h5>
                            <p class="text-uppercase" style="margin-top: -10px"><?= $response['ctg'] ?></p>
                        </div>
                        <div class="item">
                            <h5>client</h5>
                            <p class="text-capitalize" style="margin-top: -10px"><?= $response['cln'] ?></p>
                        </div>
                        <div class="item">
                            <h5>create date</h5>
                            <p style="margin-top: -10px"><?= date("d M Y", strtotime($response['cat'])) ?></p>
                        </div>
                        <div class="item">
                            <h5>link</h5>
                            <p style="margin-top: -10px"><a class="text-decoration-none text-white" href="<?= $response['lnk'] ?>" target="_blank"><?= $response['lnk'] ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('template/layout_bottom.php') ?>