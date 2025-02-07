<?php $this->extend('layouts/layout_web') ?>

<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<!-- Content section -->
<?php $this->section('content') ?>
<div class="container">
    <h4 style="font-weight:bold; font-size:2.4em; margin-top:5px">Nos replays</h4>
    <hr />
    <div class="row">
        <?php foreach ($replays as $replay): ?>
            <div class="col-md-3 col-sm-12">
                <a href="<?= base_url("web/article/" . $replay['Media_Id_1']) ?>">
                    <div class="actualite-box">

                        <div class="video-box">
                            <img src="<?= base_url('uploads/' . $replay['Media_Image_4']) ?>" />
                            <div class="video-box-play">
                                <span class="fa fa-play"></span>
                            </div>
                        </div>
                        <h5><?= $replay['Title_2'] ?></h5>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>

    </div>
</div>
<?php $this->endSection(); ?>