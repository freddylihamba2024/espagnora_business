<?php echo view("Modules\Web\Views_v2\header") ?>
<?php echo $this->renderSection("navbar") ?>
<!-- Wrapper start -->
<div id="wrapper" class="wrap overflow-hidden-x">
    <?php echo $this->renderSection("content") ?>
</div>
<!-- Wrapper end -->
<?php echo view("Modules\\Web\\Views_v2\\footer") ?>