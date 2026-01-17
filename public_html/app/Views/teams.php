<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="section innerpage-banner">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center page-intro">
            <div class="breadcrumb-wrap mb-2 ">
                <a href="#">Home /</a>
                <a href="#" class="active">Teams</a>
            </div>
            <div class="page-desc text-center">
                <h1 class=" mb-4 ">
                Our Teams
                </h1>
                <p class=" f-s-18">
                Here is our Expert and Experienced team
                </p>
            </div>
        </div>
    </div>
    </div>
</section>
  <!-- doctors list start -->
  <?php if ($team_list && count($team_list) > 0) { ?>
            <section class="doc-list-sec pt-50 pb-50">
            <div class="container">
                    <div class="row">
                       
                        <?php foreach ($team_list as $dt) { ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="doctor-profile mb-4">
                                    <div class="doc-img-wrap">
                                        <img src="<?= base_url(); ?>uploads/<?= $dt->image ?>" alt="Doctor">
                                    </div>
                                    <div class="doc-name">
                                        <h5><?= $dt->name ?></h5>
                                        <p><?= $dt->designation ?></p>
                                        <p class="para"><?= $dt->details ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php } ?>

<?= $this->endSection() ?> 