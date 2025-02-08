<?php $this->extend('layouts/layout_web') ?>

<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<!-- Content section -->
<?php $this->section('content') ?>
<?php
$slug_cover = $medias[0]['media_slug'];
?>
<main class="main_wrapper rubrique_page" id="main_wrapper">
    <div class="grid_wrapper">
        <div class="grid_column grid_column_ab">
            <article class="content content_rubrique">
                <header class="content_header" id="content_header">
                    <nav role="breadcrumb" class="breadcrumb" id="breadcrumb">
                        <ul class="list_inbl">
                            <li class="breadcrumb_item breadbrumb_home"><a href="<?= base_url() ?>"
                                    title="Espagnora"><span>Espagnora</span></a></li>
                            <li class="breadcrumb_item"><a href="<?= base_url() ?>"
                                    title="Actualités"><span>Actualités</span></a></li>
                            <li class="breadcrumb_item breadcrumb_last_item"><span><?= (isset($param)) ? $medias[0]['category'] : "Actualités"; ?></span></li>
                        </ul>
                    </nav>
                    <h1 class="content_title" id="contain_title"><?= (isset($param)) ? $medias[0]['category'] : "Actualités"; ?></h1>
                    <div id="nav_container" class="rubrique_categories_list">
                        <ul style="height: 41px;" class="">
                            <li><a href="france/index.html" title="France">France</a></li>
                            <li><a href="monde/index.html" title="Monde">Monde</a></li>
                            <li><a href="union-europeenne/index.html" title="Union européenne">Union européenne</a>
                            </li>
                            <li><a href="social/index.html" title="Social">Social</a></li>
                            <li><a href="finances-publiques/index.html" title="Finances publiques">Finances
                                    publiques</a></li>
                            <li class="mea_dossier_item"><a
                                    href="../../societe/colere-des-agriculteurs_DN-202401230398.html"
                                    class="list_item_nav" title="Colère des agriculteurs">Colère des
                                    agriculteurs</a></li>
                            <li class="mea_dossier_item"><a href="reforme-des-retraites_DN-202108310622.html"
                                    class="list_item_nav" title="Réforme des retraites">Réforme des retraites</a>
                            </li>
                            <script>
                                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                                    cutText("#nav_container", ".mea_dossier_item .list_item_nav", 40)
                                }));
                            </script>
                        </ul><span class="see_more"></span>
                    </div>
                    <script>
                        window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                            if (window.deviceSize !== "S") topicNavigationHeight("nav_container")
                        }));
                    </script>
                </header>
                <div class="block_une" id="block_une_rubrique_fleuve_1579094843273">
                    <article class="une_item icon_big content_item eco"><a
                            href="../replay-emissions/bfm-bourse/culture-bourse-st-micro-faut-il-profiter-de-la-correction-par-antoine-larigaudrie-04-02_VN-202502040604.html"
                            title="Culture Bourse : &quot;ST Micro, faut-il profiter de la correction ?&quot;, par Antoine Larigaudrie - 04/02">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="2" height="1"
                                    srcset="<?= base_url('uploads/' . $medias[0]['image']) ?>, <?= base_url('uploads/' . $medias[0]['image']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="2" height="1"
                                    srcset="<?= base_url('uploads/' . $medias[0]['image']) ?>, <?= base_url('uploads/' . $medias[0]['image']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="4" height="3"
                                    srcset="<?= base_url('uploads/' . $medias[0]['image']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="4" height="3"
                                    srcset="<?= base_url('uploads/' . $medias[0]['image']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="4" height="3"
                                    srcset="<?= base_url('uploads/' . $medias[0]['image']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="4" height="3"
                                    srcset="<?= base_url('uploads/' . $medias[0]['image']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="4" height="3"
                                    srcset="<?= base_url('uploads/' . $medias[0]['image']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="4" height="3"
                                    srcset="<?= base_url('uploads/' . $medias[0]['image']) ?> 2x"
                                    type="image/jpeg"><img width="2" height="1"
                                    src="<?= base_url('uploads/' . $medias[0]['image']) ?>"
                                    alt="<?= $medias[0]['title'] ?>">
                            </picture>
                            <div class="une_caption">
                                <h2 class="title_une_item"><?= $medias[0]['title'] ?></h2>
                            </div>
                        </a></article>
                    <p class="content_description"><span class="item_chapo item_chapo_une"><?= $medias[0]['description'] ?></span></p>
                </div>
                <div id="before_duo"></div>
                <div class="block_fleuve icon_middle" id="bloc_duo_rubrique_fleuve_1579094843273">
                    <?php foreach ($medias as $media): ?>
                        <?php if ($media['media_slug'] != $slug_cover): ?>
                            <article class="duo_liste content_item content_type <?php if ($media['media_type'] == "Videos"): ?>content_type_video<?php endif; ?>">
                                <a
                                    href="../replay-emissions/bfm-bourse/usa-today-palantir-s-envole-une-nouvelle-fois-par-eric-lafreniere-04-02_VN-202502040589.html"
                                    title="<?= $media['title'] ?>">
                                    <figure class="duo_caption">
                                        <picture class="content_item_cover with-js">
                                            <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                                srcset="<?= base_url('uploads/' . $media['image']) ?>, <?= base_url('uploads/' . $media['image']) ?> 2x"
                                                type="image/webp" data-ll-status="entered">
                                            <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                                srcset="<?= base_url('uploads/' . $media['image']) ?>, <?= base_url('uploads/' . $media['image']) ?> 2x"
                                                type="image/jpeg" data-ll-status="entered">
                                            <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                                srcset="<?= base_url('uploads/' . $media['image']) ?> 2x"
                                                type="image/webp" data-ll-status="entered">
                                            <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                                srcset="<?= base_url('uploads/' . $media['image']) ?> 2x"
                                                type="image/jpeg" data-ll-status="entered">
                                            <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                                srcset="<?= base_url('uploads/' . $media['image']) ?> 2x"
                                                type="image/webp" data-ll-status="entered">
                                            <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                                srcset="<?= base_url('uploads/' . $media['image']) ?> 2x"
                                                type="image/jpeg" data-ll-status="entered">
                                            <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                                srcset="<?= base_url('uploads/' . $media['image']) ?> 2x"
                                                type="image/webp" data-ll-status="entered">
                                            <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                                srcset="<?= base_url('uploads/' . $media['image']) ?> 2x"
                                                type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                                class="lozad entered loaded"
                                                data-srcset="<?= base_url('uploads/' . $media['image']) ?>"
                                                src="<?= base_url('uploads/' . $media['image']) ?>"
                                                alt="USA Today : &quot;Palantir s'envole une nouvelle fois !&quot; par Éric Lafrenière - 04/02"
                                                data-ll-status="loaded"
                                                srcset="<?= base_url('uploads/' . $media['image']) ?>">
                                        </picture><noscript>
                                            <picture class="content_item_cover">
                                                <source type="image/webp" media="(min-width: 441px)"
                                                    srcset="<?= base_url('uploads/' . $media['image']) ?>, <?= base_url('uploads/' . $media['image']) ?> 2x">
                                                <source type="image/jpeg" media="(min-width: 441px)"
                                                    srcset="<?= base_url('uploads/' . $media['image']) ?>, <?= base_url('uploads/' . $media['image']) ?> 2x">
                                                <source type="image/webp" media="(min-width: 361px)"
                                                    srcset="<?= base_url('uploads/' . $media['image']) ?>, <?= base_url('uploads/' . $media['image']) ?> 2x">
                                                <source type="image/jpeg" media="(min-width: 361px)"
                                                    srcset="<?= base_url('uploads/' . $media['image']) ?>, <?= base_url('uploads/' . $media['image']) ?> 2x">
                                                <source type="image/webp" media="(min-width: 321px)"
                                                    srcset="h<?= base_url('uploads/' . $media['image']) ?>, <?= base_url('uploads/' . $media['image']) ?> 2x">
                                                <source type="image/jpeg" media="(min-width: 321px)"
                                                    srcset="<?= base_url('uploads/' . $media['image']) ?>, <?= base_url('uploads/' . $media['image']) ?> 2x">
                                                <source type="image/webp" media="(min-width: 300px)"
                                                    srcset="<?= base_url('uploads/' . $media['image']) ?>, <?= base_url('uploads/' . $media['image']) ?> 2x">
                                                <source type="image/jpeg" media="(min-width: 300px)"
                                                    srcset="<?= base_url('uploads/' . $media['image']) ?>, <?= base_url('uploads/' . $media['image']) ?> 2x">
                                                <img src="<?= base_url('uploads/' . $media['image']) ?>"
                                                    alt="<?= $media['title'] ?>">
                                            </picture>
                                        </noscript>
                                    </figure>
                                    <h3 class="content_item_title"><?= $media['title'] ?></h3>
                                </a>
                            </article>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div id="sas_289_s" class="bloc_center_full"></div>
                <div class="block_fleuve_line icon_middle" id="bloc_duo_small_rubrique_fleuve_1579094843273">
                    <?php foreach ($replays as $replay): ?>
                        <article class="content_item content_type content_type_video"><a
                                href="../replay-emissions/tech-and-co/pierre-emmanuel-dumouchel-dess-ia-l-avenir-de-l-ingenierie-face-a-l-ia-03-02_VN-202502030978.html"
                                title="">
                                <picture class="content_item_cover with-js">
                                    <source media="(min-width: 441px)" width="16" height="9"
                                        srcset="<?=base_url('uploads/'.$replay['Media_Image_4'])?>, <?=base_url('uploads/'.$replay['Media_Image_4'])?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9"
                                        srcset="<?=base_url('uploads/'.$replay['Media_Image_4'])?>, <?=base_url('uploads/'.$replay['Media_Image_4'])?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9"
                                        srcset="<?=base_url('uploads/'.$replay['Media_Image_4'])?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9"
                                        srcset="<?=base_url('uploads/'.$replay['Media_Image_4'])?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9"
                                        srcset="<?=base_url('uploads/'.$replay['Media_Image_4'])?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9"
                                        srcset="<?=base_url('uploads/'.$replay['Media_Image_4'])?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9"
                                        srcset="<?=base_url('uploads/'.$replay['Media_Image_4'])?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9"
                                        srcset="<?=base_url('uploads/'.$replay['Media_Image_4'])?> 2x"
                                        type="image/jpeg"><img width="16" height="9"
                                        src="<?=base_url('uploads/'.$replay['Media_Image_4'])?>"
                                        alt="<?=$replay['Title_2']?>">
                                </picture>
                                <div class="content_item_description">
                                    <h3 class="content_item_title"><?=$replay['Title_2']?></h3>
                                    <p class="item_chapo item_chapo_une"><?=$replay['Description_3']?></p>
                                </div>
                            </a>
                        </article>

                    <?php endforeach; ?>
                    <script>
                        window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {}));
                    </script>
            </article>
            <ul class="pagination">
                <li class="active">1</li>
                <li><a href="page2/index.html" title="Page 2">2</a></li>
                <li><a href="page3/index.html" title="Page 3">3</a></li>
                <li><a href="page4/index.html" title="Page 4">4</a></li>
                <li><a href="page5/index.html" title="Page 5">5</a></li>
                <li><a href="page10/index.html" title="Page 10">10</a></li>
                <li><a href="page20/index.html" title="Page 20">20</a></li>
                <li class="pagination-btn"><a href="page2/index.html" title="Page suivante" rel="next">&gt;</a></li>
            </ul>
            <div class="block_ordered_parent" id="block_ordered_parent"></div>
            <script>
                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                    resizeDisplayBlock("block_ordered_parent", ".block_ordered_article",
                        "top_contenus_right", "afterbegin");
                    if (window.deviceSize === "L") {
                        lazyload.update();
                        document.querySelector(".display_ads_mobile").remove()
                    }
                }));
            </script>
            <div class="breadcrumb_parent grid_column_abc" id="breadcrumb_parent"></div>
        </div>
        <div class="grid_column grid_column_c aside_column">
            <div class="mise_en_avant_droite" id="mise_en_avant_droite"></div>
            <div id="sas_pave1_l" class="sticky_zone publicite bloc_center_full" style="height: 2550px;">
                <div id="sas_120870_container" class="sticky_elt">
                    <div id="sas_120870" class="display_ad"></div>
                    <script type="application/javascript">
                        if (smartInit) {
                            didomiNextConsent(45, (function() {
                                Hubvisor("ready", null, (function() {
                                    sas.cmd.push((function() {
                                        sas.render("120870")
                                    }))
                                }))
                            }))
                        }
                    </script>
                </div>
            </div>
            <div id="top_contenus_right">
                <section class="block block_ordered_article">
                    <h2 class="block_top_title">Les plus lus</h2>
                    <div class="slider_wrapper">
                        <ol class="ordered_list" id="top_contenus_manuel_1579100906659">
                            <li><a href="../../police-justice/une-graduation-dans-l-horreur-eric-larcheveque-raconte-l-enlevement-de-son-associe-david-belland-et-la-demande-de-rancon_AV-202502040208.html"
                                    title="&quot;Un choc très fort&quot;: Éric Larchevêque raconte l'enlèvement de son associé David Balland et la demande de rançon">
                                    <article class="content_item_ordered content_type content_type_video">
                                        <picture class="content_item_cover with-js">
                                            <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                                srcset="https://images.bfmtv.com/iI4c5tGmga2TZnS2FiXSByc6i9w=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.webp, https://images.bfmtv.com/likNsjbZKqOFMZzH-qjo1TOklY0=/11x1:1659x928/600x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x"
                                                type="image/webp">
                                            <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                                srcset="https://images.bfmtv.com/XtgDdaAKchVMtijJYBnDMxatcLE=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.jpg, https://images.bfmtv.com/mutJK_bGZ4YSsSRWhn9bx22kClI=/11x1:1659x928/600x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x"
                                                type="image/jpeg">
                                            <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                                srcset="https://images.bfmtv.com/aEjZ0VxQfoz_we8lEKnd2fh2MFE=/11x1:1659x928/840x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x"
                                                type="image/webp">
                                            <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                                srcset="https://images.bfmtv.com/_apFRsshWIGhdtws-ICJHSq6OuU=/11x1:1659x928/840x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x"
                                                type="image/jpeg">
                                            <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                                srcset="https://images.bfmtv.com/meoiPzdEuVYzool1hMRmA_JXL8k=/11x1:1659x928/736x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x"
                                                type="image/webp">
                                            <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                                srcset="https://images.bfmtv.com/AQ4KaeN20Kz--ukxMMcMwaus2pg=/11x1:1659x928/736x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x"
                                                type="image/jpeg">
                                            <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                                srcset="https://images.bfmtv.com/1sWGousnAI_IijKwjA33BDIqegI=/11x1:1659x928/640x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x"
                                                type="image/webp">
                                            <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                                srcset="https://images.bfmtv.com/czdZC5yLxjmISxCF3JgWWI1oEaQ=/11x1:1659x928/640x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x"
                                                type="image/jpeg"><img width="16" height="9"
                                                class="lozad entered loaded"
                                                data-srcset="https://images.bfmtv.com/XtgDdaAKchVMtijJYBnDMxatcLE=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.jpg"
                                                src="https://images.bfmtv.com/XtgDdaAKchVMtijJYBnDMxatcLE=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.jpg"
                                                alt="Eric Larchevêque, cofondateur de Ledger."
                                                data-ll-status="loaded"
                                                srcset="https://images.bfmtv.com/XtgDdaAKchVMtijJYBnDMxatcLE=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.jpg">
                                        </picture><noscript>
                                            <picture class="content_item_cover">
                                                <source type="image/webp" media="(min-width: 441px)"
                                                    srcset="https://images.bfmtv.com/iI4c5tGmga2TZnS2FiXSByc6i9w=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.webp, https://images.bfmtv.com/likNsjbZKqOFMZzH-qjo1TOklY0=/11x1:1659x928/600x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x">
                                                <source type="image/jpeg" media="(min-width: 441px)"
                                                    srcset="https://images.bfmtv.com/XtgDdaAKchVMtijJYBnDMxatcLE=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.jpg, https://images.bfmtv.com/mutJK_bGZ4YSsSRWhn9bx22kClI=/11x1:1659x928/600x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x">
                                                <source type="image/webp" media="(min-width: 361px)"
                                                    srcset="https://images.bfmtv.com/Jl3cpU-P85PlP2HNVTebA04nxXI=/11x1:1659x928/420x0/images/Eric-Larcheveque-Ledger-2026852.webp, https://images.bfmtv.com/aEjZ0VxQfoz_we8lEKnd2fh2MFE=/11x1:1659x928/840x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x">
                                                <source type="image/jpeg" media="(min-width: 361px)"
                                                    srcset="https://images.bfmtv.com/Xj0sT3MqqRS228ZfbZz4izkkQtw=/11x1:1659x928/420x0/images/Eric-Larcheveque-Ledger-2026852.jpg, https://images.bfmtv.com/_apFRsshWIGhdtws-ICJHSq6OuU=/11x1:1659x928/840x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x">
                                                <source type="image/webp" media="(min-width: 321px)"
                                                    srcset="https://images.bfmtv.com/cPjeUc_5h2tP1k7fQ1P4K48McrE=/11x1:1659x928/368x0/images/Eric-Larcheveque-Ledger-2026852.webp, https://images.bfmtv.com/meoiPzdEuVYzool1hMRmA_JXL8k=/11x1:1659x928/736x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x">
                                                <source type="image/jpeg" media="(min-width: 321px)"
                                                    srcset="https://images.bfmtv.com/nJdENB_Xrh7BvNyCwVjijwIyrpc=/11x1:1659x928/368x0/images/Eric-Larcheveque-Ledger-2026852.jpg, https://images.bfmtv.com/AQ4KaeN20Kz--ukxMMcMwaus2pg=/11x1:1659x928/736x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x">
                                                <source type="image/webp" media="(min-width: 300px)"
                                                    srcset="https://images.bfmtv.com/uuH303kgnTR8auw4owwXek7M8FE=/11x1:1659x928/320x0/images/Eric-Larcheveque-Ledger-2026852.webp, https://images.bfmtv.com/1sWGousnAI_IijKwjA33BDIqegI=/11x1:1659x928/640x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x">
                                                <source type="image/jpeg" media="(min-width: 300px)"
                                                    srcset="https://images.bfmtv.com/XxkJNKyAbbStGT321ZKi4LJnOCs=/11x1:1659x928/320x0/images/Eric-Larcheveque-Ledger-2026852.jpg, https://images.bfmtv.com/czdZC5yLxjmISxCF3JgWWI1oEaQ=/11x1:1659x928/640x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x">
                                                <img src="https://images.bfmtv.com/XtgDdaAKchVMtijJYBnDMxatcLE=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.jpg"
                                                    alt="Eric Larchevêque, cofondateur de Ledger.">
                                            </picture>
                                        </noscript>
                                        <h3 class="content_item_title"><span>"Un choc très fort": Éric Larchevêque
                                                raconte l'enlèvement de son associé David Balland et la demande de
                                                rançon</span></h3>
                                    </article>
                                </a></li>
                            <li><a href="../../sante/aspartame-une-petition-europeenne-pour-interdire-le-produit-potentiellement-cancerogene_AN-202502040025.html"
                                    title="Cancer: faut-il interdire l'aspartame? Une pétition européenne lancée face à des &quot;risques inacceptables&quot;">
                                    <article class="content_item_ordered">
                                        <h3 class="content_item_title"><span>Cancer: faut-il interdire l'aspartame?
                                                Une pétition européenne lancée face à des "risques
                                                inacceptables"</span></h3>
                                    </article>
                                </a></li>
                            <li><a href="../../environnement/chaleur-secheresse-pluies-intenses-les-eboulements-vont-ils-devenir-plus-frequents-avec-le-changement-climatique_AN-202502030730.html"
                                    title="Chaleur, sécheresse, pluies intenses... Les éboulements vont-ils devenir plus fréquents avec le changement climatique?">
                                    <article class="content_item_ordered">
                                        <h3 class="content_item_title"><span>Chaleur, sécheresse, pluies intenses...
                                                Les éboulements vont-ils devenir plus fréquents avec le changement
                                                climatique?</span></h3>
                                    </article>
                                </a></li>
                            <li><a href="../../international/europe/angleterre/il-n-avait-aucune-chance-un-britannique-tue-sur-le-front-en-ukraine-des-sa-premiere-mission_AN-202502030919.html"
                                    title="&quot;Il n'avait aucune chance&quot;: un Britannique de 18 ans tué sur le front en Ukraine dès sa première mission">
                                    <article class="content_item_ordered">
                                        <h3 class="content_item_title"><span>"Il n'avait aucune chance": un
                                                Britannique de 18 ans tué sur le front en Ukraine dès sa première
                                                mission</span></h3>
                                    </article>
                                </a></li>
                            <li><a href="../../international/europe/grece/nous-sommes-tous-inquiets-des-milliers-d-habitants-fuient-l-ile-de-santorin-touchee-par-des-seismes-a-repetition_AD-202502030603.html"
                                    title="&quot;Nous sommes tous inquiets&quot;: des milliers d'habitants fuient l'île de Santorin, touchée par des séismes à répétition">
                                    <article class="content_item_ordered">
                                        <h3 class="content_item_title"><span>"Nous sommes tous inquiets": des
                                                milliers d'habitants fuient l'île de Santorin, touchée par des
                                                séismes à répétition</span></h3>
                                    </article>
                                </a></li>
                        </ol>
                    </div>
                </section>
            </div>
            <div id="sas_pave2_l" class="bloc_center_full" style="height: 2960px;">
                <div id="sas_289_container" class="sticky_elt">
                    <div id="sas_289" class="display_ad"></div>
                    <script type="application/javascript">
                        if (smartInit) {
                            didomiNextConsent(45, (function() {
                                Hubvisor("ready", null, (function() {
                                    sas.cmd.push((function() {
                                        sas.render("289")
                                    }))
                                }))
                            }))
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="grid_column grid_column_abc">
        </div>
    </div>
    <script>
        if (["S", "M"].includes(window.deviceSize)) {
            const widgetBlocks = document.querySelectorAll(".widget_jo_block");
            const beforeDuoElement = document.getElementById("before_duo");
            if (widgetBlocks.length) {
                widgetBlocks.forEach(bloc => {
                    beforeDuoElement.appendChild(bloc)
                })
            }
        }
    </script>
</main>

<!-- <div class="container">
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
                                    <?php elseif ($media['media_type'] == "Videos") : ?>
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

</div> -->
<?php $this->endSection(); ?>