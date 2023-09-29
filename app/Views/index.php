<?php require('template/layout_top.php') ?>
    <!-- Masthead -->
    <header class="masthead" style="background-image: url('assets/img/bg-home.png')">
        <div class="container">
            <div class="masthead-heading ff-pacifico text-capitalize">hello iam <?= $response['profile']['nme'] ?></div>
            <div class="masthead-subheading title-type ff-inter" id="title-type">-</div>
        </div>
    </header>
    <!-- About -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-12 col-md-12 col-lg-2 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded-circle border border-2" src="assets/img/img-profile.png"
                                alt="img-profile" style="border-color: #F66B0E !important">
                        </div>
                        <div class="col col-12 col-md-12 col-lg-10">
                            <h2 class="section-heading ff-inter text-center text-white my-2">ABOUT ME</h2>
                            <div class="ff-inter text-justify text-white fs-5">
                                <p class="lh-sm"><?= $response['profile']['mds'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <h4 class="ff-inter text-center text-white my-3">SKILL</h4>
                        <div class="col d-flex">
                            <div class="row row-cols-auto justify-content-center mx-auto">
                                <?php for ($i = 0; $i < count(explode('|', $response['profile']['msk'])); $i++) { ?>
                                    <div class="col">
                                        <p class="ff-inter text-center text-white fs-5">
                                            <i class="fa-solid <?= (explode('-', explode('|', $response['profile']['msk'])[$i])[0] == '1') ? 'fa-circle-check' : 'fa-circle-exclamation' ?> fa-xl"></i> <?= explode('-', explode('|', $response['profile']['msk'])[$i])[1] ?>
                                        </p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="page-section" id="services" style="background-image: url('assets/img/bg-service.png')">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading ff-inter text-white text-uppercase">SERVICE</h2>
                <p class="ff-inter text-white text-uppercase fs-5"><?= $response['profile']['ssb'] ?></p>
            </div>
            <div class="row text-center">
                <?php for ($j = 0; $j < count(explode('|', $response['profile']['sci'])); $j++) { ?>
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <span class="fa-stack fa-4x my-4 mx-auto">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="<?= explode('|', $response['profile']['sci'])[$j] ?> fa-stack-1x fa-inverse"></i>
                            </span>
                            <div class="card-body">
                                <h4 class="ff-inter text-white text-uppercase"><?= explode('|', $response['profile']['sct'])[$j] ?></h4>
                                <p class="ff-inter text-white fs-5 my-4"><?= explode('|', $response['profile']['scd'])[$j] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading ff-inter text-uppercase">PORTFOLIO</h2>
                <p class="ff-inter text-uppercase fs-5 mb-4">LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND
                    TYPESCRIPTING INDUSTRY</p>
            </div>
            <div class="row">
                <?php for ($k = 0; $k < count($response['portfolio']); $k++) { ?>
                    <div class="col-lg-4 col-sm-6 my-3 port-item" style="display: none">
                        <!-- portfolio items -->
                        <div class="card">
                            <img src="assets/img/port-<?= $k + 1 ?>.png" class="card-img-top" alt="th-portfolio">
                            <div class="card-body row">
                                <div class="col col-9">
                                    <h4 class="card-title ff-inter text-capitalize"><?= $response['portfolio'][$k]['ttl'] ?></h4>
                                    <p class="card-text ff-inter text-uppercase"><?= $response['portfolio'][$k]['ctg'] ?> <span class="fw-bold text-capitalize"><?= date("d M Y", strtotime($response['portfolio'][$k]['cat'])) ?></span></p>
                                </div>
                                <div class="col col-3 d-flex">
                                    <a href="<?= $this->baseUrl ?>?porid/<?= $response['portfolio'][$k]['id'] ?>" class="my-auto ms-auto btn btn-detail rounded-circle">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-12 my-3 d-flex justify-content-center">
                    <a class="btn port-btn-load text-decoration-none mt-3 ff-inter" style="height: 40px; width: 160px; display: flex;" type="button"><span class="text-white m-auto">LOAD MORE</span></a>
                    <a class="btn port-btn-less text-decoration-none mt-3 ff-inter" style="height: 40px; width: 160px; display: none;" type="button"><span class="text-white m-auto">SEE LESS</span></a>
                </div>
            </div>
        </div>
    </section>
<?php require('template/layout_bottom.php') ?>