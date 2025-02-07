<?php echo view('Modules\Web\Views\header') ?>
<?= $this->renderSection('navbar') ?>
<div class="content">
    <?= $this->renderSection('content') ?>
</div>
<?php echo view('Modules\Web\Views\footer') ?>