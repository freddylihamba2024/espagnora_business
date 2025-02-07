<?php $this->extend('layouts/layout_web') ?>

<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<!-- Content section -->
<?php $this->section('content') ?>
<div class="container">
    <h4 style="font-weight:bold; font-size:2.4em; text-align:center;"><?= (isset($param)) ? $medias[0]['category'] : "Actualités"; ?></h4>
    <hr />
    <div class="row">
        <div class="col-md-9 col-sm-12">
            <div class="container-fluid">
                <div class="row">
                    <?php foreach ($medias as $media): ?>
                        <div class="col-md-4 col-sm-12">
                            <a href="<?= base_url("web/article/" . $media['media_slug']) ?>">
                                <div class="actualite-box">
                                    <?php if ($media['media_type'] == "Actualites"): ?>
                                        <img src="<?= base_url('uploads/' . $media['image']) ?>" />
                                    <?php elseif($media['media_type'] == "Videos") : ?>
                                        <div class="video-box">
                                            <img src="<?= base_url('uploads/' . $media['image']) ?>" />
                                            <div class="video-box-play">
                                                <span class="fa fa-play"></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <h5><?= $media['title'] ?></h5>
                                    <div>
                                        <span><?= $media['category'] ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <ul class="pagination-nav">
                    <li class="pagination-item pagination-navigation"><a href="<?= base_url('web/actualites?page=' . ($current_page >= 1) ?? $current_page - 1) ?>"><span>
                                << </span></a></li>
                    <?php                 // Pagination range logic with ellipses
                    $range = 2; // Number of pages to show around the current page
                    $start_page = max(1, $current_page - $range);
                    $end_page = min($total_pages, $current_page + $range);

                    // Show the first page and ellipsis if there are pages before the range
                    if ($start_page > 1) {
                        echo "<li class='pagination-item'><a class='' href='index.php?page=1'>1</a></li>";
                        if ($start_page > 2) {
                            echo "<li class='pagination-item disabled'><span class=''>...</span></li>";
                        }
                    }

                    // Loop through the pages to show the visible range
                    for ($page = $start_page; $page <= $end_page; $page++) {
                        if ($page == $current_page) {
                            echo "<li class='pagination-item pagination-item-active'><a href='" . base_url('web/actualites?page=' . $page) . "'>$page</a></li>";
                        } else {
                            echo "<li class='pagination-item'><a href='" . base_url('web/actualites?page=' . $page) . "'>$page</a></li>";
                        }
                    }

                    // Show the last page and ellipsis if there are pages after the range
                    if ($end_page < $total_pages) {
                        if ($end_page < $total_pages - 1) {
                            echo "<li class='pagination-item disabled'><span class='pagination-item'>...</span></li>";
                        }
                        echo "<li class='pagination-item'><a href='web/actualites?page=$total_pages'>$total_pages</a></li>";
                    }
                    ?>
                    <li class="pagination-item pagination-navigation"><a href="<?= base_url('web/actualites?page=' . ($current_page <= 1) ?? $current_page + 1) ?>"><span>>></span></a></li>
                </ul>

            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="news-block">
                <div class="news-block-header">
                    <div class="news-block-title">
                        A LA UNE
                    </div>
                </div>
                <div class="news-block-body">
                    Mouvements sociaux: les gilets jaunes vont-ils revenir en force à la faveur d'un contexte social tendu?
                </div>
            </div>
            <!-- <div class="most-seen-container">
                <div class="most-seen-">

                </div>
            </div> -->
        </div>
    </div>

</div>
<?php $this->endSection(); ?>