<?php $this->extend('layouts/layout_web') ?>
<!-- navbar section -->
<?php $this->Section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar', $active_data) ?>
<?php $this->endSection() ?>

<?php $this->Section('content') ?>
	<div style="width:60%;margin-left:20%;text-align:center;padding-top:35px;padding-bottom:100px;">
        <img src="<?= base_url("espagnora_assets/images/404-error.png") ?>" style="width:45%;margin:auto;">
        <a href="<?= base_url("/") ?>" style="background:#052d66;color:#fff;font-size:13px;padding:13px 25px;border-radius:20px;">Retourner à l'accueil</a>
    </div>
<?php $this->endSection() ?>