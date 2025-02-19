<?php $this->extend('layouts/layout_web') ?>

<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<link rel="stylesheet" href="<? base_url('templates/news/assets/v11/css/content_article.700eed5262df09d44d9e.css') ?>">

<main class="main_wrapper article_page" id="main_wrapper">
    <div class="grid_wrapper">
        <div class="grid_column grid_column_ab">
            <article class="content content_article">
                <div id="content_progress">
                    <header class="content_header" id="content_header">
                        <nav role="breadcrumb" class="breadcrumb" id="breadcrumb">
                            <ul class="list_inbl">
                                <li class="breadbrumb_home"><a href="<?= base_url() ?>" title="Espagnora"><span>Espagnora</span></a></li>
                                <li><a href="<?= base_url('web/actualites/' . $media[0]['Media_Id_1']) ?>" title="<?= $media[0]['Title_2'] ?>" id="breadcrumb_last_item"><span></span></a></li>
                            </ul>
                        </nav><span class="header_surtitre"><a href="index.html" title="<?= $media[0]['Title_2'] ?>"><span><?= $media[0]['Title_2'] ?></span></a></span>
                        <div class="contain_title_btn">
                            <div class="flag_article flag_color">Alerte info</div>
                            <h1 class="content_title" id="contain_title"><?= $media[0]['Title_2'] ?></h1>
                        </div>
                        <div class="signatures_date" id="signatures_date">
                            <!-- <div class="block_signature signature_marque">
                                <div class="author_wrapper"><span class="author_name">Alexandra Gonzalez avec Fanny Rocher</span>
                                </div>
                            </div> -->
                            <div class="content_datetime scroll_step" id="content_scroll_start"><time
                                    datetime="2025-02-04T14:14:48+01:00">Publié le <?= date('d/M/Y', strtotime($media[0]['DateCreat_8'])) ?></time></div>
                        </div>
                        <ul class="social_media" id="contain_social_media_fixed">
                            <li class="facebook"><a
                                    href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url('web/actualites/' . $media[0]['Media_Id_1']) ?>"
                                    class="icon_facebook btn_share" title="Partager">Partager</a></li>
                            <li class="twitter"><a
                                    href="https://x.com/intent/tweet?text=<?= base_url('web/actualites/' . $media[0]['Media_Id_1']) ?>&amp;via=Espagnora"
                                    class="icon_twitter btn_share" title="Partager">Partager</a></li>
                            <li class="whatsapp"><a
                                    href="https://wa.me/?text=<?= base_url('web/actualites/' . $media[0]['Media_Id_1']) ?>"
                                    data-action="share/whatsapp/share" class="icon_whatsapp" title="Whatsapp">Whatsapp</a></li>
                            <li class="linkedin"><a
                                    href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?= base_url('web/actualites/' . $media[0]['Media_Id_1']) ?>&amp;source=Espagnora"
                                    class="icon_linkedin btn_share" title="LinkedIn">LinkedIn</a></li>
                            <li class="mail"><a
                                    href="mailto:?subject=BFM Paris - à lire : Paris: un homme tente de prendre l'arme d'un policier devant la préfecture de police, deux agents légèrement blessés&amp;body=L'homme a essayé de prendre l'arme d'un policier qui se trouvait devant la préfecture de police. Il a été maîtrisé et placé en garde à vue.%0D%0A%0D%0Ahttps://www.bfmtv.com%2Fparis%2Fparis-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police_AN-202502040518.html"
                                    class="icon_envelop" title="Partager par mail">Mail</a></li>
                            <li class="messenger"><a
                                    href="fb-messenger://share/?link=<?= base_url('web/actualites/' . $media[0]['Media_Id_1']) ?>"
                                    class="icon_messenger" title="Partager via Messenger">messenger</a></li>
                        </ul>
                    </header>
                    <div class="article_cover">
                        <div class="ArticleVideo">
                            <div class="video_block vjs-pip-container pip-article" id="video_player_6368243685112">
                                <!-- <video-js id="player_6368243685112" data-embed="default" data-application-id="article_ouverture"
                                    data-autoplay="true" data-account="876450610001" adjustplayer="x2nrA7kdI"
                                    data-video-id="6368243685112" data-video-type="vod" pip="true" disablevisibilityhandler="false"
                                    adjustfrommediasize="false" preload="auto" position="article_ouverture" playsinline="" tags=""
                                    poster="<?= base_url('uploads/' . $media[0]['Media_Image_4']) ?>"> -->
                                <img
                                    fetchpriority="high"
                                    src="<?= base_url('uploads/' . $media[0]['Media_Image_4']) ?>" width="800"
                                    height="450" alt="placeholder video">
                                <!-- </video-js> -->
                            </div>
                        </div>
                    </div>
                    <div class="top_banner">
                        <!-- <a href="transports/index.html">
                            <picture>
                                <source width="1600" height="100" media="(min-width: 992px)"
                                    srcset="<?= base_url('uploads/' . $media[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $media[0]['Media_Image_4']) ?> 2x">
                                <source width="1280" height="160" media="(min-width: 641px)"
                                    srcset="<?= base_url('uploads/' . $media[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $media[0]['Media_Image_4']) ?> 2x">
                                <img width="1280" height="160"
                                    src="<?= base_url('uploads/' . $media[0]['Media_Image_4']) ?>"
                                    srcset="<?= base_url('uploads/' . $media[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $media[0]['Media_Image_4']) ?> 2x"
                                    alt="">
                            </picture>
                        </a> -->
                    </div>

                    <div class="content_body" style="margin-top: 15px;">
                        <div class="content_body_wrapper">
                            <div class="chapo"><?= $media[0]['Title_2'] ?></div>
                            <div id="sas_98_s" class="bloc_center_full"></div>
                            <p><?= $media[0]['Description_3'] ?></p>

                            <div id="sas_120870_s" class="bloc_center_full" style="margin-top:100px;padding:20px 23px 0;">
                                <div id="bloc_center_full">
                                    <?php
                                        foreach($publicity as $pub){
                                            if($pub->Type_1 == "Centre"){
                                    ?>
                                    <img src="<?= base_url("uploads") ?>/<?= $pub->Image_2 ?>" style="width:100%;" id="img">
                                    <br/>
                                    <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>

                            <!--<div id="sas_76194_s" class="bloc_center_full">
                                <div id="sas_76194_container">
                                    <div id="sas_76194" class="display_ad"></div>
                                    <script type="application/javascript">
                                        if (smartInit) {
                                            didomiNextConsent(45, (function() {
                                                Hubvisor("ready", null, (function() {
                                                    sas.cmd.push((function() {
                                                        sas.render("76194")
                                                    }))
                                                }))
                                            }))
                                        }
                                    </script>
                                </div>
                            </div>-->
                            <br/>
                            <!-- <h2 class="subheading" id="bbmu2">Une enquête ouverte</h2>
                        <p>L'homme a été conduit en garde à vue, et les policiers blessés ont été pris en charge pour des soins.
                            L'homme a été conduit au commissariat du centre, où il sera examiné par un psychiatre.&nbsp;Il se
                            déclare de nationalité soudanaise, son identité est en cours de vérification. Le parquet de Paris a
                            confié l'enquête à la direction de la police judiciaire. Le parquet antiterroriste est en évaluation
                            de la procédure, comme il l'a annoncé à BFMTV.</p>
                        <div class="block_signature_parent" id="block_signature_parent">
                            <div class="block_signature signature_marque">
                                <div class="author_wrapper"><span class="author_name">Alexandra Gonzalez avec Fanny Rocher</span>
                                </div>
                            </div>
                        </div>
                            <script>
                                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                                    if (window.deviceSize === "L") {
                                        document.querySelector(".display_ads_mobile").remove()
                                    }
                                }));
                            </script>-->
                        </div>
                    </div>
                </div>
            </article>
            <div class="content_body" id="content_body_bottom">
                <!-- <div class="OUTBRAIN"
                    data-src="https://www.bfmtv.com/paris/paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police_AN-202502040518.html"
                    data-widget-id="AR_1" data-ob-template="BFMtv"></div>
                <div class="block_ordered_parent" id="block_ordered_parent"></div>
                <div class="breadcrumb_parent grid_column_abc" id="breadcrumb_parent"></div> -->
            </div>
            </article>
        </div>
        <!--<script>
            window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                resizeDisplayBlock("block_ordered_parent", ".block_ordered_article", "top_contenus_right",
                    "afterbegin");
                if (window.deviceSize === "L") {
                    lazyload.update()
                }
            }));
        </script>-->
        <div class="grid_column grid_column_c aside_column">
            <div class="live_box block">
                <h2 class="live_button">A la Une</h2>
                <br/>
                <p>
                    <a href="<?= base_url('web/actualites/' . $media[0]['Media_Id_1']) ?>"
                        title="<?= $media[0]['Title_2'] ?>"><?= $media[0]['Title_2'] ?>
                    </a>
                </p>
            </div>
            <div id="sas_pave2_l" class="bloc_center_full" style="padding:35px;">
                <?php
                    foreach($publicity as $pub){
                        if($pub->Type_1 == "Droite"){
                ?>
                <img src="<?= base_url("uploads") ?>/<?= $pub->Image_2 ?>" style="width:100%;" id="img">
                <br/>
                <?php
                        }
                    }
                ?>
            </div>
            <!--<div id="sas_pave1_l" class="sticky_zone publicite bloc_center_full" style="height: 2550px;">
                <div id="sas_98_container" class="sticky_elt">
                    <div id="sas_98" class="display_ad">
                        <div id="pave-1"></div>
                    </div>
                    <script type="application/javascript">
                        if (smartInit) {
                            didomiNextConsent(45, (function() {
                                Hubvisor("ready", null, (function() {
                                    sas.cmd.push((function() {
                                        sas.render("98")
                                    }))
                                }))
                            }))
                        }
                    </script>
                </div>
            </div>-->
            <!-- <div id="top_contenus_right">
                <section class="block block_ordered_article">
                    <h2 class="block_top_title">Les plus lus</h2>
                    <div class="slider_wrapper">
                        <ol class="ordered_list" id="top_contenus_manuel_1579100800868">
                            <li><a
                                    href="../police-justice/une-graduation-dans-l-horreur-eric-larcheveque-raconte-l-enlevement-de-son-associe-david-belland-et-la-demande-de-rancon_AV-202502040208.html"
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
                                                type="image/jpeg"><img width="16" height="9" class="lozad entered loaded"
                                                data-srcset="https://images.bfmtv.com/XtgDdaAKchVMtijJYBnDMxatcLE=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.jpg"
                                                src="https://images.bfmtv.com/XtgDdaAKchVMtijJYBnDMxatcLE=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.jpg"
                                                alt="Eric Larchevêque, cofondateur de Ledger." data-ll-status="loaded"
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
                                                <img
                                                    src="https://images.bfmtv.com/XtgDdaAKchVMtijJYBnDMxatcLE=/11x1:1659x928/300x0/images/Eric-Larcheveque-Ledger-2026852.jpg"
                                                    alt="Eric Larchevêque, cofondateur de Ledger.">
                                            </picture>
                                        </noscript>
                                        <h3 class="content_item_title"><span>"Un choc très fort": Éric Larchevêque raconte l'enlèvement de
                                                son associé David Balland et la demande de rançon</span></h3>
                                    </article>
                                </a></li>
                            <li><a
                                    href="../sante/aspartame-une-petition-europeenne-pour-interdire-le-produit-potentiellement-cancerogene_AN-202502040025.html"
                                    title="Cancer: faut-il interdire l'aspartame? Une pétition européenne lancée face à des &quot;risques inacceptables&quot;">
                                    <article class="content_item_ordered">
                                        <h3 class="content_item_title"><span>Cancer: faut-il interdire l'aspartame? Une pétition
                                                européenne lancée face à des "risques inacceptables"</span></h3>
                                    </article>
                                </a></li>
                            <li><a
                                    href="../environnement/chaleur-secheresse-pluies-intenses-les-eboulements-vont-ils-devenir-plus-frequents-avec-le-changement-climatique_AN-202502030730.html"
                                    title="Chaleur, sécheresse, pluies intenses... Les éboulements vont-ils devenir plus fréquents avec le changement climatique?">
                                    <article class="content_item_ordered">
                                        <h3 class="content_item_title"><span>Chaleur, sécheresse, pluies intenses... Les éboulements
                                                vont-ils devenir plus fréquents avec le changement climatique?</span></h3>
                                    </article>
                                </a></li>
                            <li><a
                                    href="../international/europe/angleterre/il-n-avait-aucune-chance-un-britannique-tue-sur-le-front-en-ukraine-des-sa-premiere-mission_AN-202502030919.html"
                                    title="&quot;Il n'avait aucune chance&quot;: un Britannique de 18 ans tué sur le front en Ukraine dès sa première mission">
                                    <article class="content_item_ordered">
                                        <h3 class="content_item_title"><span>"Il n'avait aucune chance": un Britannique de 18 ans tué sur
                                                le front en Ukraine dès sa première mission</span></h3>
                                    </article>
                                </a></li>
                            <li><a
                                    href="../international/europe/grece/nous-sommes-tous-inquiets-des-milliers-d-habitants-fuient-l-ile-de-santorin-touchee-par-des-seismes-a-repetition_AD-202502030603.html"
                                    title="&quot;Nous sommes tous inquiets&quot;: des milliers d'habitants fuient l'île de Santorin, touchée par des séismes à répétition">
                                    <article class="content_item_ordered">
                                        <h3 class="content_item_title"><span>"Nous sommes tous inquiets": des milliers d'habitants fuient
                                                l'île de Santorin, touchée par des séismes à répétition</span></h3>
                                    </article>
                                </a></li>
                        </ol>
                    </div>
                </section>
            </div> -->
            <!--<div id="outbrain_right">
                <div class="OUTBRAIN"
                    data-src="https://www.bfmtv.com/paris/paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police_AN-202502040518.html"
                    data-ob-template="BFMtv" data-widget-id="SB_1"></div>
            </div>
            <script>
                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                    if (window.deviceSize === "L" && document.querySelector(".obHolder")) {
                        document.querySelector(".obHolder").classList.add("OUTBRAIN");
                        document.querySelector(".obHolder").classList.remove("obHolder");
                        document.querySelector(".aside_column .OUTBRAIN").setAttribute("data-widget-id", "SB_1")
                    }
                }));
            </script>-->
        </div>
    </div>
    <!--<template id="controlPanel_VOD_Desktop">
        <div class="controlPanel">
            <div class="playlistArea"><button class="scrollLeft"></button>
                <div class="movingScroller"></div><button class="scrollRight"></button>
            </div>
            <div class="thumbnailPrevious"></div>
            <div class="thumbnailNext"></div>
            <div class="bottomBar">
                <div class="volumePanel"></div>
                <div class="centeredButtons"><button
                        class="irisBackward vjs-control vjs-button icon-play-previous-button disableButton"
                        disabled="disabled"></button> <button class="rewindButton vjs-control vjs-button icon-retour"></button>
                    <button class="forwardButton vjs-control vjs-button icon-avance"></button> <button
                        class="irisForward vjs-control vjs-button icon-play-next-button"></button>
                </div>
                <div class="rightButtons"></div>
            </div>
        </div>
        <div class="topRightButton"></div>
    </template>
    <template id="previewBlock_Desktop">
        <div class="previewBlock"><a class="jumpToVideo" target="_blank">
                <div class="thumbnailContainer"><img class="thumbnailPreview"></div>
            </a>
            <div class="descriptionArea">
                <p class="descriptionPreview"></p>
            </div>
        </div>
    </template>
    <template id="controlPanel_VOD_Mobile">
        <div class="controlPanel">
            <div class="VOD_Mobile_Controls">
                <div class="centeredButtons"><button
                        class="irisBackward vjs-control vjs-button icon-play-previous-button disableButton"
                        disabled="disabled"></button> <button class="rewindButton vjs-control vjs-button icon-retour"></button>
                    <button class="forwardButton vjs-control vjs-button icon-avance"></button> <button
                        class="irisForward vjs-control vjs-button icon-play-next-button"></button>
                </div>
            </div>
            <div class="bottomControls"></div>
        </div>
        <div class="topRightButton"></div>
        <div class="topLeftButton"><button class="close"
                data-pagename="paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police_AN-202502040518"></button>
        </div>
    </template>
    <template id="controlPanel_LIVE_Desktop">
        <div class="controlPanel">
            <div class="bottomBar">
                <div class="directHolder">
                    <div class="directIcon"></div><span class="directText">DIRECT</span>
                </div>
                <div class="volumePanel"></div>
                <div class="rightButtons"></div>
            </div>
        </div>
        <div class="topRightButton"></div>
    </template>
    <template id="controlPanel_LIVE_Mobile">
        <div class="controlPanel">
            <div class="bottomBar">
                <div class="directHolder">
                    <div class="directIcon"></div><span class="directText">DIRECT</span>
                </div>
                <div class="rightButtons"></div>
            </div>
        </div>
        <div class="topRightButton"></div>
    </template>
    <template id="errorTemplate">
        <div class="ErrorContainer"><span class="ErrorMessage"></span></div>
    </template>-->
</main>

<script type="text/javascript">
    // Get elements
    const audio = document.getElementById('audio');
    const audioPlayer = document.getElementById('audio-player');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const progressBar = document.getElementById('progressBar');
    const muteBtn = document.getElementById('muteBtn');
    const volumeControl = document.getElementById('volumeControl');
    const closePlayer = document.getElementById('close-player');

    // Play/Pause functionality
    playPauseBtn.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            playPauseBtn.textContent = '❚❚'; // Change to Pause icon
        } else {
            audio.pause();
            playPauseBtn.textContent = '▶'; // Change to Play icon
        }
    });

    closePlayer.addEventListener('click', () => {
        audioPlayer.classList.add('d-none');
        audio.pause();
    });

    function play(e) {
        audioPlayer.classList.remove('d-none');
        if (audio.paused) {
            audio.play();
            playPauseBtn.textContent = '❚❚'; // Change to Pause icon
        } else {
            audio.pause();
            playPauseBtn.textContent = '▶'; // Change to Play icon
        }
    }

    // Update progress bar as the audio plays
    audio.addEventListener('timeupdate', () => {
        const progress = (audio.currentTime / audio.duration) * 100;
        progressBar.value = `${progress}`;
    });

    // Seek the audio based on progress bar change
    progressBar.addEventListener('click', (e) => {
        const clickX = e.offsetX;
        const progressWidth = progressBar.clientWidth;
        const seekTime = (clickX / progressWidth) * audio.duration;
        audio.currentTime = seekTime;
    });

    // Mute/Unmute functionality
    muteBtn.addEventListener('click', () => {
        audio.muted = !audio.muted;
        muteBtn.textContent = audio.muted ? '🔇' : '🔊'; // Change icon based on mute state
    });

    // Volume control functionality
    volumeControl.addEventListener('input', () => {
        audio.volume = volumeControl.value;
    });
</script>

<?php $this->endSection(); ?>