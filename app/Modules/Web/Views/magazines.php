<?php $this->extend('layouts/layout_web') ?>

<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<!-- Content section -->
<?php $this->section('content') ?>
<div class="container">
    <h4 style="font-weight:bold; font-size:2.4em; text-align:center; margin-top:5px">Tous nos Magazines</h4>
    <hr />
    <img style="width: 100%; height:300px; border-radius:20px;" src="<?= base_url('espagnora_assets/images/hero-home-wide-fr_be@2x.jpg') ?>" />
    <hr />
    <div class="row">
        <?php foreach($magazines as $magazine):?>
        <div class="col-md-3 col-sm-12 mt-3">
            <div class="magazine-card">
                <div class="magazine-card-image">
                    <img src="<?= base_url('uploads/'.$magazine['Media_Image_4']) ?>" />
                </div>
                <span><?=$magazine['Title_2']?></span>
                <p>à partir de <span><?=$magazine['prix_magazine']?>$</span></p>
                <button class="btn-order">Commandez</button>
            </div>
        </div>
       <?php endforeach; ?>

    </div>
</div>
<?php $this->endSection(); ?>