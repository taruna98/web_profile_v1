<?php require('template/layout_top.php') ?>
<!-- Article Header -->
<header class="art-head" id="art-head" style="background-image: url('assets/img/<?= substr($response['id'], 0, 11) ?>-bg-article-dtl.png')">
    <div class="container">
        <div class="masthead-heading text-uppercase"><?= $response['ttl'] ?></div>
        <div class="masthead-subheading"><a class="text-decoration-none text-white" href="<?= $this->baseUrl ?>?proid/<?= substr($response['id'], 0, 11) ?>"><b>Home</b></a> / <a class="text-decoration-none text-white" href="<?= $this->baseUrl ?>?art/<?= substr($response['id'], 0, 11) ?>"><b>Article</b></a> / Detail</div>
    </div>
</header>
<!-- Article Body -->
<section class="art-body" id="art-body">
    <div class="container ff-inter text-justify">
        <?= $response['dsc'] ?>
    </div>
</section>
<?php require('template/layout_bottom.php') ?>