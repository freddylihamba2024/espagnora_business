<?php $this->extend('layouts/layout_web') ?>

<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<!-- Content section -->
<?php $this->section('content') ?>
<div class="container">
    <h4 class="post-header-title">Podcasts</h4>
    <hr />
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($podcasts as $podcast): ?>
                <div class="col-md-4 col-sm-12">
                    <div class="podcast-grid-item">
                        <div class="podcast-grid-item-content">
                            <div class='podcast-grid-item-content-image'>
                                <img src="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?>" />
                            </div>
                            <div class='podcast-grid-item-content-text'>
                                <p>
                                    <?= $podcast['Title_2'] ?>
                                </p>
                                <a href="<?=base_url('web/article/'.$podcast['Media_Id_1'])?>"><span><i class="fa fa-play"></i></span><span>Jouer</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</div>
<?php $this->endSection(); ?>