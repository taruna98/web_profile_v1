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
            <h2 class="section-heading ff-inter text-center text-white my-4">ABOUT ME</h2>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-12 col-md-12 col-lg-2 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded-circle border border-2" src="assets/img/img-profile.png" alt="img-profile" style="border-color: #F66B0E !important">
                        </div>
                        <div class="col col-12 col-md-12 col-lg-10 d-flex align-items-center">
                            <div class="ff-inter text-justify text-white fs-5">
                                <p class="lh-sm"><?= $response['profile']['mds'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row skills">
                <ul class="nav" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-white active" id="skill-tab" data-bs-toggle="tab" data-bs-target="#skill" type="button" role="tab" aria-controls="skill" aria-selected="true">SKILL</a>
                    </li>
                    <li class="nav-item ms-2" role="presentation">
                        <a class="nav-link text-white" id="tool-tab" data-bs-toggle="tab" data-bs-target="#tool" type="button" role="tab" aria-controls="tool" aria-selected="false">TOOL</a>
                    </li>
                </ul>
                <div class="tab-content my-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="skill" role="tabpanel" aria-labelledby="skill-tab">
                        <div class="row row-cols-2 row-cols-md-4">
                            <div class="col d-flex p-1">
                                <span class="w-100 p-2 rounded d-flex align-item-center">SKILL 1</span>
                            </div>
                            <div class="col d-flex p-1">
                                <span class="w-100 p-2 rounded d-flex align-item-center">SKILL 2</span>
                            </div>
                            <div class="col d-flex p-1">
                                <span class="w-100 p-2 rounded d-flex align-item-center">SKILL 3</span>
                            </div>
                            <div class="col d-flex p-1">
                                <span class="w-100 p-2 rounded d-flex align-item-center">SKILL 4</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tool" role="tabpanel" aria-labelledby="tool-tab">
                        <div class="row row-cols-2 row-cols-md-4">
                            <div class="col d-flex p-1">
                                <span class="w-100 p-2 rounded d-flex align-item-center">TOOL 1</span>
                            </div>
                            <div class="col d-flex p-1">
                                <span class="w-100 p-2 rounded d-flex align-item-center">TOOL 2</span>
                            </div>
                            <div class="col d-flex p-1">
                                <span class="w-100 p-2 rounded d-flex align-item-center">TOOL 3</span>
                            </div>
                            <div class="col d-flex p-1">
                                <span class="w-100 p-2 rounded d-flex align-item-center">TOOL 4</span>
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
    <section class="page-section" id="portfolio">
        <div class="container">
            <div class="text-center text-white">
                <h2 class="section-heading ff-inter text-uppercase">PORTFOLIO</h2>
                <p class="ff-inter text-uppercase fs-5 mb-4">LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND
                    TYPESCRIPTING INDUSTRY</p>
            </div>
            <div class="row">
                <?php for ($k = 0; $k < 3; $k++) { ?>
                    <div class="col-lg-4 col-sm-6 my-3 port-item">
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
                    <a href="<?= $this->baseUrl ?>?por/<?= $response['profile']['cod'] ?>" class="btn port-btn-load text-decoration-none mt-3 ff-inter" style="height: 40px; width: 180px;" type="button"><span class="text-white m-auto">MORE PORTFOLIO</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Article -->
    <section class="page-section" id="article">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading ff-inter text-uppercase text-light">ARTICLE</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 my-3 artcl-item">
                    <!-- article items -->
                    <div class="card">
                        <img src="assets/img/port-1.png" class="card-img-top" alt="th-article">
                        <div class="card-body row">
                            <div class="col col-9">
                                <h4 class="card-title ff-inter text-capitalize">article 1</h4>
                                <p class="card-text ff-inter text-uppercase"><span class="fw-bold text-capitalize">04 Oct 2023</span> music</p>
                            </div>
                            <div class="col col-3 d-flex">
                                <a href="#" class="my-auto ms-auto btn btn-detail rounded-circle">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3 artcl-item">
                    <!-- article items -->
                    <div class="card">
                        <img src="assets/img/port-1.png" class="card-img-top" alt="th-article">
                        <div class="card-body row">
                            <div class="col col-9">
                                <h4 class="card-title ff-inter text-capitalize">article 2</h4>
                                <p class="card-text ff-inter text-uppercase"><span class="fw-bold text-capitalize">04 Oct 2023</span> coding</p>
                            </div>
                            <div class="col col-3 d-flex">
                                <a href="#" class="my-auto ms-auto btn btn-detail rounded-circle">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3 artcl-item">
                    <!-- article items -->
                    <div class="card">
                        <img src="assets/img/port-1.png" class="card-img-top" alt="th-article">
                        <div class="card-body row">
                            <div class="col col-9">
                                <h4 class="card-title ff-inter text-capitalize">article 3</h4>
                                <p class="card-text ff-inter text-uppercase"><span class="fw-bold text-capitalize">04 Oct 2023</span> music</p>
                            </div>
                            <div class="col col-3 d-flex">
                                <a href="#" class="my-auto ms-auto btn btn-detail rounded-circle">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3 d-flex justify-content-center">
                    <a href="" class="btn artcl-btn-load text-decoration-none mt-3 ff-inter" style="height: 40px; width: 180px;" type="button"><span class="text-white m-auto">MORE ARTICLE</span></a>
                </div>
            </div>
        </div>
    </section>
<?php require('template/layout_bottom.php') ?>