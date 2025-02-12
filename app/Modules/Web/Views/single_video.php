<?php $this->extend('layouts/layout_web') ?>



<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<!-- Content section -->
<?php $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url('templates/news/assets/v11/css/global.0d6d846e67d093b09245.css') ?>">
<link rel="stylesheet" href="<?= base_url('templates/news/assets/v11/css/smartadserver.46fde1b8c71a46ead3e8.css') ?>">
<link rel="stylesheet" href="<?= base_url('templates/news/assets/v11/css/home.09a6da4e980ef8d762a1.css') ?>">
<link rel="stylesheet" href="<?= base_url('templates/news/assets/v11/css/rubrique.7f0323db7055666601f6.css') ?>">
<link rel="stylesheet" href="<?= base_url('templates/news/assets/v11/css/podcasts_mosaique.ec77eb141c9eeddb830d.css') ?>">
<link rel="stylesheet" href="<?= base_url('templates/news/assets/v11/css/video.9c67b71645d75f2ab425.css') ?>">
<main class="main_wrapper video_wrapper" id="main_wrapper">
    <div class="grid_wrapper">
        <div class="grid_column grid_column_ab">
            <article class="content">
                <header class="content_header" id="content_header">
                    <nav role="breadcrumb" class="breadcrumb" id="breadcrumb">
                        <ul class="list_inbl">
                            <li class="breadbrumb_home"><a href="<?= base_url() ?>" title="Espagnora"><span>Espagnora</span></a>
                            </li>
                            <li><a href="<?= base_url('web/videos') ?>" title="Police-Justice"
                                    id="breadcrumb_last_item"><span>Vidéos</span></a></li>
                        </ul>
                    </nav>
                    <div class="video_block vjs-pip-container" id="video_player_6368249797112">
                        <video autoplay loop controls style="width: 100%;">
                            <source src="<?= base_url('uploads/' . $video[0]['Media_Link_5']) ?>" type="video/mp4" />
                        </video>
                        <div class="title_description">
                            <h1 class="content_title" id="contain_title"><?= $video[0]['Title_2'] ?></h1>
                            <div class="content_description" id="content_description"><span
                                    class="content_description_text clamp" style="margin-bottom: 0px;"><?= $video[0]['Description_3'] ?></span><span class="see_more_text">Voir
                                    plus</span></div>
                        </div>
                        <div class="video_time_share">
                            <div class="content_datetime scroll_step date_bottom" id="content_scroll_start"><time
                                    datetime="2025-02-04T16:13:39+01:00"><?= $video[0]['DateCreat_8'] ?></time> | Durée : 1:36</div>
                            <ul class="social_media" id="contain_social_media">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url('web/videos/' . $video[0]['Media_Id_1']) ?>"
                                        class="icon_facebook btn_share">Partager</a></li>
                                <li><a href="https://x.com/intent/tweet?text=<?= base_url('web/videos/' . $video[0]['Media_Id_1']) ?>&amp;via=Espagnora"
                                        class="icon_twitter btn_share">X</a></li>
                            </ul>
                        </div>
                </header>
            </article>
        </div>
        <div class="grid_column grid_column_c aside_column">
            <aside class="video_list_c">
                <h2 class="mvm_title">Les plus vues</h2>
                <div class="mvm_list" id="liste_simple_droite_1579100668494">
                    <div class="mvm_scroll_zone">
                        
                        <!-- <article class="content_item content_item_small"><a
                                href="/politique/gouvernement/francois-bayrou-declenche-le-49-3-pour-faire-adopter-le-budget_VN-202502030680.html"
                                title="François Bayrou déclenche le 49.3 pour faire adopter le budget">
                                <figure class="videos_plus_vues">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/ITvIvLLKQJZ24ybtwEoX6e1hnYU=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp, https://images.bfmtv.com/Ezk4JPl_v0asHyW4DO6qjvI3mYU=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/kPfnNoDxJ6I4qCntRCwbStoZpWI=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg, https://images.bfmtv.com/Yiq6OOzmKuuTTngxmomgekNHgWg=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/Ezk4JPl_v0asHyW4DO6qjvI3mYU=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/Yiq6OOzmKuuTTngxmomgekNHgWg=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/Ezk4JPl_v0asHyW4DO6qjvI3mYU=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/Yiq6OOzmKuuTTngxmomgekNHgWg=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/Ezk4JPl_v0asHyW4DO6qjvI3mYU=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/Yiq6OOzmKuuTTngxmomgekNHgWg=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/kPfnNoDxJ6I4qCntRCwbStoZpWI=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg"
                                            src="https://images.bfmtv.com/kPfnNoDxJ6I4qCntRCwbStoZpWI=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg"
                                            alt="François Bayrou déclenche le 49.3 pour faire adopter le budget"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/kPfnNoDxJ6I4qCntRCwbStoZpWI=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/ITvIvLLKQJZ24ybtwEoX6e1hnYU=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp, https://images.bfmtv.com/Ezk4JPl_v0asHyW4DO6qjvI3mYU=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/kPfnNoDxJ6I4qCntRCwbStoZpWI=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg, https://images.bfmtv.com/Yiq6OOzmKuuTTngxmomgekNHgWg=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/ITvIvLLKQJZ24ybtwEoX6e1hnYU=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp, https://images.bfmtv.com/Ezk4JPl_v0asHyW4DO6qjvI3mYU=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/kPfnNoDxJ6I4qCntRCwbStoZpWI=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg, https://images.bfmtv.com/Yiq6OOzmKuuTTngxmomgekNHgWg=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/ITvIvLLKQJZ24ybtwEoX6e1hnYU=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp, https://images.bfmtv.com/Ezk4JPl_v0asHyW4DO6qjvI3mYU=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/kPfnNoDxJ6I4qCntRCwbStoZpWI=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg, https://images.bfmtv.com/Yiq6OOzmKuuTTngxmomgekNHgWg=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/ITvIvLLKQJZ24ybtwEoX6e1hnYU=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp, https://images.bfmtv.com/Ezk4JPl_v0asHyW4DO6qjvI3mYU=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/kPfnNoDxJ6I4qCntRCwbStoZpWI=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg, https://images.bfmtv.com/Yiq6OOzmKuuTTngxmomgekNHgWg=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg 2x">
                                            <img src="https://images.bfmtv.com/kPfnNoDxJ6I4qCntRCwbStoZpWI=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-pour-faire-adopter-le-budget-2026436.jpg"
                                                alt="François Bayrou déclenche le 49.3 pour faire adopter le budget">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:36</span></figcaption>
                                </figure>
                                <h3 class="content_item_title">François Bayrou déclenche le 49.3 pour faire adopter
                                    le budget</h3>
                            </a></article>
                        <article class="content_item content_item_small"><a
                                href="/politique/gouvernement/francois-bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-securite-sociale_VN-202502030697.html"
                                title="François Bayrou déclenche le 49.3 sur une partie du projet de loi de financement de la Sécurité sociale">
                                <figure class="videos_plus_vues">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/StRbk_vFx42f5gVzF4qkIRWCvfA=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp, https://images.bfmtv.com/5t6B0aXF6VUJweo7Egppz9oNy_4=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/42r1T_k-_HhxfLd6VOijEMqwgdo=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg, https://images.bfmtv.com/s4AonEl-s1M03PKMqsX_z-_-LDw=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/5t6B0aXF6VUJweo7Egppz9oNy_4=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/s4AonEl-s1M03PKMqsX_z-_-LDw=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/5t6B0aXF6VUJweo7Egppz9oNy_4=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/s4AonEl-s1M03PKMqsX_z-_-LDw=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/5t6B0aXF6VUJweo7Egppz9oNy_4=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/s4AonEl-s1M03PKMqsX_z-_-LDw=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/42r1T_k-_HhxfLd6VOijEMqwgdo=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg"
                                            src="https://images.bfmtv.com/42r1T_k-_HhxfLd6VOijEMqwgdo=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg"
                                            alt="François Bayrou déclenche le 49.3 sur une partie du projet de loi de financement de la Sécurité sociale"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/42r1T_k-_HhxfLd6VOijEMqwgdo=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/StRbk_vFx42f5gVzF4qkIRWCvfA=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp, https://images.bfmtv.com/5t6B0aXF6VUJweo7Egppz9oNy_4=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/42r1T_k-_HhxfLd6VOijEMqwgdo=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg, https://images.bfmtv.com/s4AonEl-s1M03PKMqsX_z-_-LDw=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/StRbk_vFx42f5gVzF4qkIRWCvfA=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp, https://images.bfmtv.com/5t6B0aXF6VUJweo7Egppz9oNy_4=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/42r1T_k-_HhxfLd6VOijEMqwgdo=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg, https://images.bfmtv.com/s4AonEl-s1M03PKMqsX_z-_-LDw=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/StRbk_vFx42f5gVzF4qkIRWCvfA=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp, https://images.bfmtv.com/5t6B0aXF6VUJweo7Egppz9oNy_4=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/42r1T_k-_HhxfLd6VOijEMqwgdo=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg, https://images.bfmtv.com/s4AonEl-s1M03PKMqsX_z-_-LDw=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/StRbk_vFx42f5gVzF4qkIRWCvfA=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp, https://images.bfmtv.com/5t6B0aXF6VUJweo7Egppz9oNy_4=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/42r1T_k-_HhxfLd6VOijEMqwgdo=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg, https://images.bfmtv.com/s4AonEl-s1M03PKMqsX_z-_-LDw=/0x0:1280x720/264x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg 2x">
                                            <img src="https://images.bfmtv.com/42r1T_k-_HhxfLd6VOijEMqwgdo=/0x0:1280x720/132x0/images/Francois-Bayrou-declenche-le-49-3-sur-une-partie-du-projet-de-loi-de-financement-de-la-Securite-sociale-2026452.jpg"
                                                alt="François Bayrou déclenche le 49.3 sur une partie du projet de loi de financement de la Sécurité sociale">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">3:50</span></figcaption>
                                </figure>
                                <h3 class="content_item_title">François Bayrou déclenche le 49.3 sur une partie du
                                    projet de loi de financement de la Sécurité sociale</h3>
                            </a></article>
                        <article class="content_item content_item_small"><a
                                href="/politique/front-national/refus-du-ps-de-voter-la-censure-ils-ont-trahi-leur-programme-affirme-jean-philippe-tanguy-rn_VN-202502030875.html"
                                title="Refus du PS de voter la censure: &quot;Ils ont trahi leur programme&quot;, affirme Jean-Philippe Tanguy (RN)">
                                <figure class="videos_plus_vues">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/UI22t64yfy9nToVukD3vhqGnlR8=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp, https://images.bfmtv.com/ssG-6CD2t9alYHHjYJp_ntZ0GwY=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/2VnpBwgGarsyO-QqfAACB4ouR80=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg, https://images.bfmtv.com/1t80NY8Q0mzoP54_tffzp-LJRKg=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/ssG-6CD2t9alYHHjYJp_ntZ0GwY=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/1t80NY8Q0mzoP54_tffzp-LJRKg=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/ssG-6CD2t9alYHHjYJp_ntZ0GwY=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/1t80NY8Q0mzoP54_tffzp-LJRKg=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/ssG-6CD2t9alYHHjYJp_ntZ0GwY=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/1t80NY8Q0mzoP54_tffzp-LJRKg=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/2VnpBwgGarsyO-QqfAACB4ouR80=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg"
                                            src="https://images.bfmtv.com/2VnpBwgGarsyO-QqfAACB4ouR80=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg"
                                            alt="Refus du PS de voter la censure: &quot;Ils ont trahi leur programme&quot;, affirme Jean-Philippe Tanguy (RN)"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/2VnpBwgGarsyO-QqfAACB4ouR80=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/UI22t64yfy9nToVukD3vhqGnlR8=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp, https://images.bfmtv.com/ssG-6CD2t9alYHHjYJp_ntZ0GwY=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/2VnpBwgGarsyO-QqfAACB4ouR80=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg, https://images.bfmtv.com/1t80NY8Q0mzoP54_tffzp-LJRKg=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/UI22t64yfy9nToVukD3vhqGnlR8=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp, https://images.bfmtv.com/ssG-6CD2t9alYHHjYJp_ntZ0GwY=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/2VnpBwgGarsyO-QqfAACB4ouR80=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg, https://images.bfmtv.com/1t80NY8Q0mzoP54_tffzp-LJRKg=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/UI22t64yfy9nToVukD3vhqGnlR8=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp, https://images.bfmtv.com/ssG-6CD2t9alYHHjYJp_ntZ0GwY=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/2VnpBwgGarsyO-QqfAACB4ouR80=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg, https://images.bfmtv.com/1t80NY8Q0mzoP54_tffzp-LJRKg=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/UI22t64yfy9nToVukD3vhqGnlR8=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp, https://images.bfmtv.com/ssG-6CD2t9alYHHjYJp_ntZ0GwY=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/2VnpBwgGarsyO-QqfAACB4ouR80=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg, https://images.bfmtv.com/1t80NY8Q0mzoP54_tffzp-LJRKg=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg 2x">
                                            <img src="https://images.bfmtv.com/2VnpBwgGarsyO-QqfAACB4ouR80=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-Ils-ont-trahi-leur-programme-affirme-Jean-Philippe-Tanguy-RN-2026586.jpg"
                                                alt="Refus du PS de voter la censure: &quot;Ils ont trahi leur programme&quot;, affirme Jean-Philippe Tanguy (RN)">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:02</span></figcaption>
                                </figure>
                                <h3 class="content_item_title">Refus du PS de voter la censure: "Ils ont trahi leur
                                    programme", affirme Jean-Philippe Tanguy (RN)</h3>
                            </a></article>
                        <article class="content_item content_item_small"><a
                                href="/politique/parti-socialiste/refus-du-ps-de-voter-la-censure-du-gouvernement-on-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-jerome-guedj-ps_VN-202502030867.html"
                                title="Refus du PS de voter la censure du gouvernement: &quot;On a fait bouger 6 milliards d'euros sur ce budget&quot;, défend Jérôme Guedj (PS)">
                                <figure class="videos_plus_vues">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/znDOZUuGgzzptgdeZ6pQnUKyEU4=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp, https://images.bfmtv.com/yUQZcJbIf8r-JToWZkxKk_kOLAI=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/VWjM4bwB0c0g6SauVPXhqOX_Buo=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg, https://images.bfmtv.com/IDsEnyQJ0TAE4vjEiZh0dYQqVRU=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/yUQZcJbIf8r-JToWZkxKk_kOLAI=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/IDsEnyQJ0TAE4vjEiZh0dYQqVRU=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/yUQZcJbIf8r-JToWZkxKk_kOLAI=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/IDsEnyQJ0TAE4vjEiZh0dYQqVRU=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/yUQZcJbIf8r-JToWZkxKk_kOLAI=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/IDsEnyQJ0TAE4vjEiZh0dYQqVRU=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/VWjM4bwB0c0g6SauVPXhqOX_Buo=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg"
                                            src="https://images.bfmtv.com/VWjM4bwB0c0g6SauVPXhqOX_Buo=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg"
                                            alt="Refus du PS de voter la censure du gouvernement: &quot;On a fait bouger 6 milliards d'euros sur ce budget&quot;, défend Jérôme Guedj (PS)"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/VWjM4bwB0c0g6SauVPXhqOX_Buo=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/znDOZUuGgzzptgdeZ6pQnUKyEU4=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp, https://images.bfmtv.com/yUQZcJbIf8r-JToWZkxKk_kOLAI=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/VWjM4bwB0c0g6SauVPXhqOX_Buo=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg, https://images.bfmtv.com/IDsEnyQJ0TAE4vjEiZh0dYQqVRU=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/znDOZUuGgzzptgdeZ6pQnUKyEU4=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp, https://images.bfmtv.com/yUQZcJbIf8r-JToWZkxKk_kOLAI=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/VWjM4bwB0c0g6SauVPXhqOX_Buo=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg, https://images.bfmtv.com/IDsEnyQJ0TAE4vjEiZh0dYQqVRU=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/znDOZUuGgzzptgdeZ6pQnUKyEU4=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp, https://images.bfmtv.com/yUQZcJbIf8r-JToWZkxKk_kOLAI=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/VWjM4bwB0c0g6SauVPXhqOX_Buo=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg, https://images.bfmtv.com/IDsEnyQJ0TAE4vjEiZh0dYQqVRU=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/znDOZUuGgzzptgdeZ6pQnUKyEU4=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp, https://images.bfmtv.com/yUQZcJbIf8r-JToWZkxKk_kOLAI=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/VWjM4bwB0c0g6SauVPXhqOX_Buo=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg, https://images.bfmtv.com/IDsEnyQJ0TAE4vjEiZh0dYQqVRU=/0x0:1280x720/264x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg 2x">
                                            <img src="https://images.bfmtv.com/VWjM4bwB0c0g6SauVPXhqOX_Buo=/0x0:1280x720/132x0/images/Refus-du-PS-de-voter-la-censure-du-gouvernement-On-a-fait-bouger-6-milliards-d-euros-sur-ce-budget-defend-Jerome-Guedj-PS-2026581.jpg"
                                                alt="Refus du PS de voter la censure du gouvernement: &quot;On a fait bouger 6 milliards d&#39;euros sur ce budget&quot;, défend Jérôme Guedj (PS)">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:31</span></figcaption>
                                </figure>
                                <h3 class="content_item_title">Refus du PS de voter la censure du gouvernement: "On
                                    a fait bouger 6 milliards d'euros sur ce budget", défend Jérôme Guedj (PS)</h3>
                            </a></article>
                        <article class="content_item content_item_small"><a
                                href="/politique/la-france-insoumise/motion-de-censure-l-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-mathilde-panot-lfi_VN-202502030723.html"
                                title="Motion de censure: &quot;L'extrême droite joue le rôle d'assurance-vie du système&quot;, affirme Mathilde Panot (LFI)">
                                <figure class="videos_plus_vues">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/NcViukF29ehHe9WamJVOTZdl8fM=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp, https://images.bfmtv.com/3QZC7NyjvoqUilw-1iviP18s49I=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/My7dnA0AMRtuWCMFnSxO5odHYNQ=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg, https://images.bfmtv.com/ayaqH7ZQJH1J_lZMb2HFjQweRQE=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/3QZC7NyjvoqUilw-1iviP18s49I=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/ayaqH7ZQJH1J_lZMb2HFjQweRQE=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/3QZC7NyjvoqUilw-1iviP18s49I=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/ayaqH7ZQJH1J_lZMb2HFjQweRQE=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/3QZC7NyjvoqUilw-1iviP18s49I=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/ayaqH7ZQJH1J_lZMb2HFjQweRQE=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/My7dnA0AMRtuWCMFnSxO5odHYNQ=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg"
                                            src="https://images.bfmtv.com/My7dnA0AMRtuWCMFnSxO5odHYNQ=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg"
                                            alt="Motion de censure: &quot;L'extrême droite joue le rôle d'assurance-vie du système&quot;, affirme Mathilde Panot (LFI)"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/My7dnA0AMRtuWCMFnSxO5odHYNQ=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/NcViukF29ehHe9WamJVOTZdl8fM=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp, https://images.bfmtv.com/3QZC7NyjvoqUilw-1iviP18s49I=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/My7dnA0AMRtuWCMFnSxO5odHYNQ=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg, https://images.bfmtv.com/ayaqH7ZQJH1J_lZMb2HFjQweRQE=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/NcViukF29ehHe9WamJVOTZdl8fM=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp, https://images.bfmtv.com/3QZC7NyjvoqUilw-1iviP18s49I=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/My7dnA0AMRtuWCMFnSxO5odHYNQ=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg, https://images.bfmtv.com/ayaqH7ZQJH1J_lZMb2HFjQweRQE=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/NcViukF29ehHe9WamJVOTZdl8fM=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp, https://images.bfmtv.com/3QZC7NyjvoqUilw-1iviP18s49I=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/My7dnA0AMRtuWCMFnSxO5odHYNQ=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg, https://images.bfmtv.com/ayaqH7ZQJH1J_lZMb2HFjQweRQE=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/NcViukF29ehHe9WamJVOTZdl8fM=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp, https://images.bfmtv.com/3QZC7NyjvoqUilw-1iviP18s49I=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/My7dnA0AMRtuWCMFnSxO5odHYNQ=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg, https://images.bfmtv.com/ayaqH7ZQJH1J_lZMb2HFjQweRQE=/0x0:1280x720/264x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg 2x">
                                            <img src="https://images.bfmtv.com/My7dnA0AMRtuWCMFnSxO5odHYNQ=/0x0:1280x720/132x0/images/Motion-de-censure-L-extreme-droite-joue-le-role-d-assurance-vie-du-systeme-affirme-Mathilde-Panot-LFI-2026482.jpg"
                                                alt="Motion de censure: &quot;L&#39;extrême droite joue le rôle d&#39;assurance-vie du système&quot;, affirme Mathilde Panot (LFI)">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">0:59</span></figcaption>
                                </figure>
                                <h3 class="content_item_title">Motion de censure: "L'extrême droite joue le rôle
                                    d'assurance-vie du système", affirme Mathilde Panot (LFI)</h3>
                            </a></article>
                        <article class="content_item content_item_small"><a
                                href="/politique/chauffeur-secretariat-les-anciens-presidents-et-premiers-ministres-garderont-finalement-leurs-avantages_VN-202502030678.html"
                                title="Chauffeur, secrétariat...Les anciens présidents et Premiers ministres garderont finalement leurs avantages">
                                <figure class="videos_plus_vues">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/6TehnwUsVh1KnSFS-as0h9MXL0Q=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp, https://images.bfmtv.com/hSr6JocrywP1wrMt6_3KQd7gAEs=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/HM7GDIat2q_sgCg53VidLeowFJI=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg, https://images.bfmtv.com/hFuo2tQqmbZpaynYZD-wWQx8bZg=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/hSr6JocrywP1wrMt6_3KQd7gAEs=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/hFuo2tQqmbZpaynYZD-wWQx8bZg=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/hSr6JocrywP1wrMt6_3KQd7gAEs=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/hFuo2tQqmbZpaynYZD-wWQx8bZg=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/hSr6JocrywP1wrMt6_3KQd7gAEs=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered"
                                            srcset="https://images.bfmtv.com/hFuo2tQqmbZpaynYZD-wWQx8bZg=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/HM7GDIat2q_sgCg53VidLeowFJI=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg"
                                            src="https://images.bfmtv.com/HM7GDIat2q_sgCg53VidLeowFJI=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg"
                                            alt="Chauffeur, secrétariat...Les anciens présidents et Premiers ministres garderont finalement leurs avantages"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/HM7GDIat2q_sgCg53VidLeowFJI=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/6TehnwUsVh1KnSFS-as0h9MXL0Q=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp, https://images.bfmtv.com/hSr6JocrywP1wrMt6_3KQd7gAEs=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/HM7GDIat2q_sgCg53VidLeowFJI=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg, https://images.bfmtv.com/hFuo2tQqmbZpaynYZD-wWQx8bZg=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/6TehnwUsVh1KnSFS-as0h9MXL0Q=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp, https://images.bfmtv.com/hSr6JocrywP1wrMt6_3KQd7gAEs=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/HM7GDIat2q_sgCg53VidLeowFJI=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg, https://images.bfmtv.com/hFuo2tQqmbZpaynYZD-wWQx8bZg=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/6TehnwUsVh1KnSFS-as0h9MXL0Q=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp, https://images.bfmtv.com/hSr6JocrywP1wrMt6_3KQd7gAEs=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/HM7GDIat2q_sgCg53VidLeowFJI=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg, https://images.bfmtv.com/hFuo2tQqmbZpaynYZD-wWQx8bZg=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/6TehnwUsVh1KnSFS-as0h9MXL0Q=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp, https://images.bfmtv.com/hSr6JocrywP1wrMt6_3KQd7gAEs=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/HM7GDIat2q_sgCg53VidLeowFJI=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg, https://images.bfmtv.com/hFuo2tQqmbZpaynYZD-wWQx8bZg=/0x0:1280x720/264x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg 2x">
                                            <img src="https://images.bfmtv.com/HM7GDIat2q_sgCg53VidLeowFJI=/0x0:1280x720/132x0/images/Chauffeur-secretariat-Les-anciens-presidents-et-Premiers-ministres-garderont-finalement-leurs-avantages-2026434.jpg"
                                                alt="Chauffeur, secrétariat...Les anciens présidents et Premiers ministres garderont finalement leurs avantages">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:36</span></figcaption>
                                </figure>
                                <h3 class="content_item_title">Chauffeur, secrétariat...Les anciens présidents et
                                    Premiers ministres garderont finalement leurs avantages</h3>
                            </a></article>
                        <article class="content_item content_item_small"><a
                                href="/societe/poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-a-vitry-une-boucherie-clandestine-a-ciel-ouvert_VN-202502030419.html"
                                title="Poulets stockés dans des caddies, viande découpée sur le trottoir...À Vitry, une boucherie clandestine à ciel ouvert ">
                                <figure class="videos_plus_vues">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/azXZjvpmIZSCKsoClcOQ9zZpQTk=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp, https://images.bfmtv.com/4VMMbFZSygBi8WFERzCHp175NXw=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/bejumm7hilROnCVUSRFQ-huEpPY=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg, https://images.bfmtv.com/tUvE8aFoUvqUzSj9d1W5w5oTW-Y=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/4VMMbFZSygBi8WFERzCHp175NXw=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/tUvE8aFoUvqUzSj9d1W5w5oTW-Y=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/4VMMbFZSygBi8WFERzCHp175NXw=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/tUvE8aFoUvqUzSj9d1W5w5oTW-Y=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/4VMMbFZSygBi8WFERzCHp175NXw=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/tUvE8aFoUvqUzSj9d1W5w5oTW-Y=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg 2x"
                                            type="image/jpeg"><img width="16" height="9" class="lozad"
                                            data-srcset="https://images.bfmtv.com/bejumm7hilROnCVUSRFQ-huEpPY=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg"
                                            src="https://images.bfmtv.com/bejumm7hilROnCVUSRFQ-huEpPY=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg"
                                            alt="Poulets stockés dans des caddies, viande découpée sur le trottoir...À Vitry, une boucherie clandestine à ciel ouvert ">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/azXZjvpmIZSCKsoClcOQ9zZpQTk=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp, https://images.bfmtv.com/4VMMbFZSygBi8WFERzCHp175NXw=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/bejumm7hilROnCVUSRFQ-huEpPY=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg, https://images.bfmtv.com/tUvE8aFoUvqUzSj9d1W5w5oTW-Y=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/azXZjvpmIZSCKsoClcOQ9zZpQTk=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp, https://images.bfmtv.com/4VMMbFZSygBi8WFERzCHp175NXw=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/bejumm7hilROnCVUSRFQ-huEpPY=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg, https://images.bfmtv.com/tUvE8aFoUvqUzSj9d1W5w5oTW-Y=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/azXZjvpmIZSCKsoClcOQ9zZpQTk=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp, https://images.bfmtv.com/4VMMbFZSygBi8WFERzCHp175NXw=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/bejumm7hilROnCVUSRFQ-huEpPY=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg, https://images.bfmtv.com/tUvE8aFoUvqUzSj9d1W5w5oTW-Y=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/azXZjvpmIZSCKsoClcOQ9zZpQTk=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp, https://images.bfmtv.com/4VMMbFZSygBi8WFERzCHp175NXw=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/bejumm7hilROnCVUSRFQ-huEpPY=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg, https://images.bfmtv.com/tUvE8aFoUvqUzSj9d1W5w5oTW-Y=/0x0:1280x720/264x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg 2x">
                                            <img src="https://images.bfmtv.com/bejumm7hilROnCVUSRFQ-huEpPY=/0x0:1280x720/132x0/images/Poulets-stockes-dans-des-caddies-viande-decoupee-sur-le-trottoir-A-Vitry-une-boucherie-clandestine-a-ciel-ouvert-2026250.jpg"
                                                alt="Poulets stockés dans des caddies, viande découpée sur le trottoir...À Vitry, une boucherie clandestine à ciel ouvert ">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:21</span></figcaption>
                                </figure>
                                <h3 class="content_item_title">Poulets stockés dans des caddies, viande découpée sur
                                    le trottoir...À Vitry, une boucherie clandestine à ciel ouvert</h3>
                            </a></article>
                        <article class="content_item content_item_small"><a
                                href="agressions-sexuelles-sur-adele-haenel-christophe-ruggia-condamne-a-4-ans-de-prison_VN-202502030574.html"
                                title="Agressions sexuelles sur Adèle Haenel: Christophe Ruggia condamné à 4 ans de prison">
                                <figure class="videos_plus_vues">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/K9wcYbbWTRdzqRFymq_4InQIXR0=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp, https://images.bfmtv.com/LIbhwQ4QN8L5ACIodSd8DtQe1Hk=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/OeeDeQOZd6CnEOla4ohg5fsL2a4=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg, https://images.bfmtv.com/3HlmFjEiuTyOKR8sB5UkmyH53N8=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/LIbhwQ4QN8L5ACIodSd8DtQe1Hk=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/3HlmFjEiuTyOKR8sB5UkmyH53N8=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/LIbhwQ4QN8L5ACIodSd8DtQe1Hk=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/3HlmFjEiuTyOKR8sB5UkmyH53N8=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/LIbhwQ4QN8L5ACIodSd8DtQe1Hk=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/3HlmFjEiuTyOKR8sB5UkmyH53N8=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg 2x"
                                            type="image/jpeg"><img width="16" height="9" class="lozad"
                                            data-srcset="https://images.bfmtv.com/OeeDeQOZd6CnEOla4ohg5fsL2a4=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg"
                                            src="https://images.bfmtv.com/OeeDeQOZd6CnEOla4ohg5fsL2a4=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg"
                                            alt="Agressions sexuelles sur Adèle Haenel: Christophe Ruggia condamné à 4 ans de prison">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/K9wcYbbWTRdzqRFymq_4InQIXR0=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp, https://images.bfmtv.com/LIbhwQ4QN8L5ACIodSd8DtQe1Hk=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/OeeDeQOZd6CnEOla4ohg5fsL2a4=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg, https://images.bfmtv.com/3HlmFjEiuTyOKR8sB5UkmyH53N8=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/K9wcYbbWTRdzqRFymq_4InQIXR0=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp, https://images.bfmtv.com/LIbhwQ4QN8L5ACIodSd8DtQe1Hk=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/OeeDeQOZd6CnEOla4ohg5fsL2a4=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg, https://images.bfmtv.com/3HlmFjEiuTyOKR8sB5UkmyH53N8=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/K9wcYbbWTRdzqRFymq_4InQIXR0=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp, https://images.bfmtv.com/LIbhwQ4QN8L5ACIodSd8DtQe1Hk=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/OeeDeQOZd6CnEOla4ohg5fsL2a4=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg, https://images.bfmtv.com/3HlmFjEiuTyOKR8sB5UkmyH53N8=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/K9wcYbbWTRdzqRFymq_4InQIXR0=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp, https://images.bfmtv.com/LIbhwQ4QN8L5ACIodSd8DtQe1Hk=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/OeeDeQOZd6CnEOla4ohg5fsL2a4=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg, https://images.bfmtv.com/3HlmFjEiuTyOKR8sB5UkmyH53N8=/0x0:1280x720/264x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg 2x">
                                            <img src="https://images.bfmtv.com/OeeDeQOZd6CnEOla4ohg5fsL2a4=/0x0:1280x720/132x0/images/Agressions-sexuelles-sur-Adele-Haenel-Christophe-Ruggia-condamne-a-4-ans-de-prison-2026347.jpg"
                                                alt="Agressions sexuelles sur Adèle Haenel: Christophe Ruggia condamné à 4 ans de prison">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:00</span></figcaption>
                                </figure>
                                <h3 class="content_item_title">Agressions sexuelles sur Adèle Haenel: Christophe
                                    Ruggia condamné à 4 ans de prison</h3>
                            </a></article>
                        <article class="content_item content_item_small"><a
                                href="/international/europe/espagne/baiser-force-sur-jenni-hermoso-le-proces-de-luis-rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-espagne_VN-202502031018.html"
                                title="Baiser forcé sur Jenni Hermoso: le procès de Luis Rubiales pour agression sexuelle s'est ouvert ce lundi en Espagne">
                                <figure class="videos_plus_vues">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/Od9ui9lXIXmhVK7uixkBnwgHHdY=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp, https://images.bfmtv.com/ux9_3mlYYpHifX9JSLGy-e7GnMU=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/Cy084LFTdpYBRtkpClftYyMt_9E=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg, https://images.bfmtv.com/_SApFm4Q354mIZ3kAzCE6MAjdkI=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/ux9_3mlYYpHifX9JSLGy-e7GnMU=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/_SApFm4Q354mIZ3kAzCE6MAjdkI=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/ux9_3mlYYpHifX9JSLGy-e7GnMU=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/_SApFm4Q354mIZ3kAzCE6MAjdkI=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/ux9_3mlYYpHifX9JSLGy-e7GnMU=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/_SApFm4Q354mIZ3kAzCE6MAjdkI=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x"
                                            type="image/jpeg"><img width="16" height="9" class="lozad"
                                            data-srcset="https://images.bfmtv.com/Cy084LFTdpYBRtkpClftYyMt_9E=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg"
                                            src="https://images.bfmtv.com/Cy084LFTdpYBRtkpClftYyMt_9E=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg"
                                            alt="Baiser forcé sur Jenni Hermoso: le procès de Luis Rubiales pour agression sexuelle s'est ouvert ce lundi en Espagne">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/Od9ui9lXIXmhVK7uixkBnwgHHdY=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp, https://images.bfmtv.com/ux9_3mlYYpHifX9JSLGy-e7GnMU=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/Cy084LFTdpYBRtkpClftYyMt_9E=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg, https://images.bfmtv.com/_SApFm4Q354mIZ3kAzCE6MAjdkI=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/Od9ui9lXIXmhVK7uixkBnwgHHdY=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp, https://images.bfmtv.com/ux9_3mlYYpHifX9JSLGy-e7GnMU=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/Cy084LFTdpYBRtkpClftYyMt_9E=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg, https://images.bfmtv.com/_SApFm4Q354mIZ3kAzCE6MAjdkI=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/Od9ui9lXIXmhVK7uixkBnwgHHdY=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp, https://images.bfmtv.com/ux9_3mlYYpHifX9JSLGy-e7GnMU=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/Cy084LFTdpYBRtkpClftYyMt_9E=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg, https://images.bfmtv.com/_SApFm4Q354mIZ3kAzCE6MAjdkI=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/Od9ui9lXIXmhVK7uixkBnwgHHdY=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp, https://images.bfmtv.com/ux9_3mlYYpHifX9JSLGy-e7GnMU=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/Cy084LFTdpYBRtkpClftYyMt_9E=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg, https://images.bfmtv.com/_SApFm4Q354mIZ3kAzCE6MAjdkI=/0x0:1280x720/264x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x">
                                            <img src="https://images.bfmtv.com/Cy084LFTdpYBRtkpClftYyMt_9E=/0x0:1280x720/132x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg"
                                                alt="Baiser forcé sur Jenni Hermoso: le procès de Luis Rubiales pour agression sexuelle s&#39;est ouvert ce lundi en Espagne">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:19</span></figcaption>
                                </figure>
                                <h3 class="content_item_title">Baiser forcé sur Jenni Hermoso: le procès de Luis
                                    Rubiales pour agression sexuelle s'est ouvert ce lundi en Espagne</h3>
                            </a></article>
                        <article class="content_item content_item_small"><a
                                href="/replay-emissions/culture-et-vous/gojira-beyonce-lady-gaga-le-palmares-de-la-ceremonie-des-grammy-awards_VN-202502030356.html"
                                title="Gojira, Beyoncé, Lady Gaga…Le palmarès de la cérémonie des Grammy Awards">
                                <figure class="videos_plus_vues">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/kdXBReFWuolMZR0UvHVzrUuMfh0=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp, https://images.bfmtv.com/d0jHZOahJMQOJBxC6Jt4JlAhN8k=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/TqBYi8SqQw6CcItXtCwX7aXdxZs=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg, https://images.bfmtv.com/fu5UGlca9HRF7suMgstxkatre_0=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/d0jHZOahJMQOJBxC6Jt4JlAhN8k=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/fu5UGlca9HRF7suMgstxkatre_0=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/d0jHZOahJMQOJBxC6Jt4JlAhN8k=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/fu5UGlca9HRF7suMgstxkatre_0=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/d0jHZOahJMQOJBxC6Jt4JlAhN8k=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/fu5UGlca9HRF7suMgstxkatre_0=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg 2x"
                                            type="image/jpeg"><img width="16" height="9" class="lozad"
                                            data-srcset="https://images.bfmtv.com/TqBYi8SqQw6CcItXtCwX7aXdxZs=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg"
                                            src="https://images.bfmtv.com/TqBYi8SqQw6CcItXtCwX7aXdxZs=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg"
                                            alt="Gojira, Beyoncé, Lady Gaga…Le palmarès de la cérémonie des Grammy Awards">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/kdXBReFWuolMZR0UvHVzrUuMfh0=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp, https://images.bfmtv.com/d0jHZOahJMQOJBxC6Jt4JlAhN8k=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/TqBYi8SqQw6CcItXtCwX7aXdxZs=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg, https://images.bfmtv.com/fu5UGlca9HRF7suMgstxkatre_0=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/kdXBReFWuolMZR0UvHVzrUuMfh0=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp, https://images.bfmtv.com/d0jHZOahJMQOJBxC6Jt4JlAhN8k=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/TqBYi8SqQw6CcItXtCwX7aXdxZs=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg, https://images.bfmtv.com/fu5UGlca9HRF7suMgstxkatre_0=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/kdXBReFWuolMZR0UvHVzrUuMfh0=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp, https://images.bfmtv.com/d0jHZOahJMQOJBxC6Jt4JlAhN8k=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/TqBYi8SqQw6CcItXtCwX7aXdxZs=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg, https://images.bfmtv.com/fu5UGlca9HRF7suMgstxkatre_0=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/kdXBReFWuolMZR0UvHVzrUuMfh0=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp, https://images.bfmtv.com/d0jHZOahJMQOJBxC6Jt4JlAhN8k=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/TqBYi8SqQw6CcItXtCwX7aXdxZs=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg, https://images.bfmtv.com/fu5UGlca9HRF7suMgstxkatre_0=/0x0:1280x720/264x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg 2x">
                                            <img src="https://images.bfmtv.com/TqBYi8SqQw6CcItXtCwX7aXdxZs=/0x0:1280x720/132x0/images/Gojira-Beyonce-Lady-Gaga-Le-palmares-de-la-ceremonie-des-Grammy-Awards-2026205.jpg"
                                                alt="Gojira, Beyoncé, Lady Gaga…Le palmarès de la cérémonie des Grammy Awards">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:33</span></figcaption>
                                </figure>
                                <h3 class="content_item_title">Gojira, Beyoncé, Lady Gaga…Le palmarès de la
                                    cérémonie des Grammy Awards</h3>
                            </a>
                        </article> -->
                    </div>
                </div>
            </aside>
        </div> 
    </div>
    <div class="grid_wrapper" style="margin-top: 30px;">
        <div class="grid_column grid_column_abc">
            <section class="block_video_section" id="liste_simple_outbrain_1579100960768">
                <h2 class="section_title">Sur le même sujet</h2>
                <div class="last_videos_wrapper">
                    <!-- <article class="last_videos_item active"><a
                                href="paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police_VN-202502040606.html"
                                title="Paris: deux policiers légèrement blessés par un homme devant la préfecture de police">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/lwBNwChrI52U4iMn8OEhWezwS-A=/0x0:1280x720/283x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp, https://images.bfmtv.com/ya5hbrFtALiG7zhs_40qbBu12XI=/0x0:1280x720/566x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/2OheOY2-6kzPxH7SqL5l7aen7qs=/0x0:1280x720/283x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg, https://images.bfmtv.com/Dc8pQWf9VSAhRdswQzhpHojdpGU=/0x0:1280x720/566x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/VMsfWNVjKWD3hXfdATYhiGswO6E=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/o0FkGtVRVJHgmSxDUAfy6BX0mSg=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/VMsfWNVjKWD3hXfdATYhiGswO6E=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/o0FkGtVRVJHgmSxDUAfy6BX0mSg=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/VMsfWNVjKWD3hXfdATYhiGswO6E=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/o0FkGtVRVJHgmSxDUAfy6BX0mSg=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/2OheOY2-6kzPxH7SqL5l7aen7qs=/0x0:1280x720/283x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg"
                                            src="https://images.bfmtv.com/2OheOY2-6kzPxH7SqL5l7aen7qs=/0x0:1280x720/283x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg"
                                            alt="Paris: deux policiers légèrement blessés par un homme devant la préfecture de police"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/2OheOY2-6kzPxH7SqL5l7aen7qs=/0x0:1280x720/283x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/lwBNwChrI52U4iMn8OEhWezwS-A=/0x0:1280x720/283x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp, https://images.bfmtv.com/ya5hbrFtALiG7zhs_40qbBu12XI=/0x0:1280x720/566x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/2OheOY2-6kzPxH7SqL5l7aen7qs=/0x0:1280x720/283x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg, https://images.bfmtv.com/Dc8pQWf9VSAhRdswQzhpHojdpGU=/0x0:1280x720/566x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/oQ89ZUpczKUZauApKsRYvMBwY1A=/0x0:1280x720/63x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp, https://images.bfmtv.com/VMsfWNVjKWD3hXfdATYhiGswO6E=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/-uHnv5iFU4SgU3RWuZxkP-812k4=/0x0:1280x720/63x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg, https://images.bfmtv.com/o0FkGtVRVJHgmSxDUAfy6BX0mSg=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/oQ89ZUpczKUZauApKsRYvMBwY1A=/0x0:1280x720/63x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp, https://images.bfmtv.com/VMsfWNVjKWD3hXfdATYhiGswO6E=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/-uHnv5iFU4SgU3RWuZxkP-812k4=/0x0:1280x720/63x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg, https://images.bfmtv.com/o0FkGtVRVJHgmSxDUAfy6BX0mSg=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/oQ89ZUpczKUZauApKsRYvMBwY1A=/0x0:1280x720/63x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp, https://images.bfmtv.com/VMsfWNVjKWD3hXfdATYhiGswO6E=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/-uHnv5iFU4SgU3RWuZxkP-812k4=/0x0:1280x720/63x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg, https://images.bfmtv.com/o0FkGtVRVJHgmSxDUAfy6BX0mSg=/0x0:1280x720/126x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x">
                                            <img src="https://images.bfmtv.com/2OheOY2-6kzPxH7SqL5l7aen7qs=/0x0:1280x720/283x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg"
                                                alt="Paris: deux policiers légèrement blessés par un homme devant la préfecture de police">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_en_cours">en lecture</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">Paris: deux policiers légèrement blessés par un homme
                                    devant la préfecture de police</h3>
                            </a></article>
                    <div class="OUTBRAIN"
                        data-src="https://www.bfmtv.com/police-justice/paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police_VN-202502040606.html"
                        data-widget-id="AR_3"></div> -->
                    <?php foreach ($similar_videos as $video): ?>
                        <article class="last_videos_item">
                            <a
                                href="<?= base_url('web/videos/' . $video['Media_Id_1']) ?>"
                                title="<?= $video['Title_2'] ?>">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>"
                                            src="<?= base_url('uploads/' . $video['Media_Image_4']) ?>"
                                            alt="Policiers blessés à Paris: l'identité de l'auteur présumé en cours de vérification"
                                            data-ll-status="loaded"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                            <img src="<?= base_url('uploads/' . $video['Media_Image_4']) ?>"
                                                alt="<?= $video['Title_2'] ?>">
                                        </picture>
                                    </noscript>
                                    <!-- <figcaption><span class="video_time_zone">1:52</span></figcaption> -->
                                </figure>
                                <h3 class="last_videos_item_title"><?= $video['Title_2'] ?></h3>
                            </a>
                        </article>
                    <?php endforeach; ?>
                    <!-- <article class="last_videos_item"><a
                                href="les-policiers-sont-les-premieres-cibles-eric-henry-delegue-national-alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-paris_VN-202502040563.html"
                                title="&quot;Les policiers sont les premières cibles&quot;: Eric Henry, délégué national Alliance police, réagit aux deux policiers blessés par un homme devant la préfecture de police de Paris">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/Wbrf8goUIS_aXDz3mLZdNUG1Bqk=/0x0:1280x720/283x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp, https://images.bfmtv.com/gS11AoQ5_7ZSvAHFzpczcZETS64=/0x0:1280x720/566x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/u7OHaUSPIa7S5PT2F4sNvo6W8Oc=/0x0:1280x720/283x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg, https://images.bfmtv.com/_8MH-VQFE7RUthzQyEIKRT0kH2k=/0x0:1280x720/566x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/caVkQBeKx6ivwbXVjTBudSu_poo=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/WUUznmYNF8nJdhU7jff_3M4VZLk=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/caVkQBeKx6ivwbXVjTBudSu_poo=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/WUUznmYNF8nJdhU7jff_3M4VZLk=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/caVkQBeKx6ivwbXVjTBudSu_poo=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                            srcset="https://images.bfmtv.com/WUUznmYNF8nJdhU7jff_3M4VZLk=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/u7OHaUSPIa7S5PT2F4sNvo6W8Oc=/0x0:1280x720/283x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg"
                                            src="https://images.bfmtv.com/u7OHaUSPIa7S5PT2F4sNvo6W8Oc=/0x0:1280x720/283x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg"
                                            alt="&quot;Les policiers sont les premières cibles&quot;: Eric Henry, délégué national Alliance police, réagit aux deux policiers blessés par un homme devant la préfecture de police de Paris"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/u7OHaUSPIa7S5PT2F4sNvo6W8Oc=/0x0:1280x720/283x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/Wbrf8goUIS_aXDz3mLZdNUG1Bqk=/0x0:1280x720/283x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp, https://images.bfmtv.com/gS11AoQ5_7ZSvAHFzpczcZETS64=/0x0:1280x720/566x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/u7OHaUSPIa7S5PT2F4sNvo6W8Oc=/0x0:1280x720/283x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg, https://images.bfmtv.com/_8MH-VQFE7RUthzQyEIKRT0kH2k=/0x0:1280x720/566x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/MLyopxLYunXEv3vdLQMNrYx60-w=/0x0:1280x720/63x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp, https://images.bfmtv.com/caVkQBeKx6ivwbXVjTBudSu_poo=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/aWu0K3X4Nta21A74RABLo0oV0xg=/0x0:1280x720/63x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg, https://images.bfmtv.com/WUUznmYNF8nJdhU7jff_3M4VZLk=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/MLyopxLYunXEv3vdLQMNrYx60-w=/0x0:1280x720/63x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp, https://images.bfmtv.com/caVkQBeKx6ivwbXVjTBudSu_poo=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/aWu0K3X4Nta21A74RABLo0oV0xg=/0x0:1280x720/63x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg, https://images.bfmtv.com/WUUznmYNF8nJdhU7jff_3M4VZLk=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/MLyopxLYunXEv3vdLQMNrYx60-w=/0x0:1280x720/63x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp, https://images.bfmtv.com/caVkQBeKx6ivwbXVjTBudSu_poo=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/aWu0K3X4Nta21A74RABLo0oV0xg=/0x0:1280x720/63x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg, https://images.bfmtv.com/WUUznmYNF8nJdhU7jff_3M4VZLk=/0x0:1280x720/126x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg 2x">
                                            <img src="https://images.bfmtv.com/u7OHaUSPIa7S5PT2F4sNvo6W8Oc=/0x0:1280x720/283x0/images/Les-policiers-sont-les-premieres-cibles-Eric-Henry-delegue-national-Alliance-police-reagit-aux-deux-policiers-blesses-par-un-homme-devant-la-prefecture-de-police-de-Paris-2027103.jpg"
                                                alt="&quot;Les policiers sont les premières cibles&quot;: Eric Henry, délégué national Alliance police, réagit aux deux policiers blessés par un homme devant la préfecture de police de Paris">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:07</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">"Les policiers sont les premières cibles": Eric
                                    Henry, délégué national Alliance police, réagit aux deux policiers blessés par un
                                    homme devant la préfecture de police de Paris</h3>
                            </a></article>
                        <article class="last_videos_item"><a
                                href="policiers-blesses-a-paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle_VN-202502040543.html"
                                title="Policiers blessés à Paris: l'homme qui a tenté de s'en prendre à un des fonctionnaires a été interpellé">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/3dCxW8IFlbHIQcsaO5oaE-IcpL8=/0x0:1280x720/283x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp, https://images.bfmtv.com/8TKr3X8MSNungtYhnWtVv9tAo4M=/0x0:1280x720/566x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/mUxrfMkyERXLPAmkvbQa6iDkplM=/0x0:1280x720/283x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg, https://images.bfmtv.com/I6d4l5BEoYoTOsj2bKpXH2gLBQk=/0x0:1280x720/566x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/fLhwIkZbL-KXLJ05sdxf-i4eG9s=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/QIbg36FMsG2M97HJ2FuYCbW-Wew=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/fLhwIkZbL-KXLJ05sdxf-i4eG9s=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/QIbg36FMsG2M97HJ2FuYCbW-Wew=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/fLhwIkZbL-KXLJ05sdxf-i4eG9s=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/QIbg36FMsG2M97HJ2FuYCbW-Wew=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/mUxrfMkyERXLPAmkvbQa6iDkplM=/0x0:1280x720/283x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg"
                                            src="https://images.bfmtv.com/mUxrfMkyERXLPAmkvbQa6iDkplM=/0x0:1280x720/283x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg"
                                            alt="Policiers blessés à Paris: l'homme qui a tenté de s'en prendre à un des fonctionnaires a été interpellé"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/mUxrfMkyERXLPAmkvbQa6iDkplM=/0x0:1280x720/283x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/3dCxW8IFlbHIQcsaO5oaE-IcpL8=/0x0:1280x720/283x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp, https://images.bfmtv.com/8TKr3X8MSNungtYhnWtVv9tAo4M=/0x0:1280x720/566x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/mUxrfMkyERXLPAmkvbQa6iDkplM=/0x0:1280x720/283x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg, https://images.bfmtv.com/I6d4l5BEoYoTOsj2bKpXH2gLBQk=/0x0:1280x720/566x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/CZgqRhxAncd_bbCTOSseXaaoyHk=/0x0:1280x720/63x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp, https://images.bfmtv.com/fLhwIkZbL-KXLJ05sdxf-i4eG9s=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/_mvk9GcseJb5tNrm-FMqhjHqFqo=/0x0:1280x720/63x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg, https://images.bfmtv.com/QIbg36FMsG2M97HJ2FuYCbW-Wew=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/CZgqRhxAncd_bbCTOSseXaaoyHk=/0x0:1280x720/63x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp, https://images.bfmtv.com/fLhwIkZbL-KXLJ05sdxf-i4eG9s=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/_mvk9GcseJb5tNrm-FMqhjHqFqo=/0x0:1280x720/63x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg, https://images.bfmtv.com/QIbg36FMsG2M97HJ2FuYCbW-Wew=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/CZgqRhxAncd_bbCTOSseXaaoyHk=/0x0:1280x720/63x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp, https://images.bfmtv.com/fLhwIkZbL-KXLJ05sdxf-i4eG9s=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/_mvk9GcseJb5tNrm-FMqhjHqFqo=/0x0:1280x720/63x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg, https://images.bfmtv.com/QIbg36FMsG2M97HJ2FuYCbW-Wew=/0x0:1280x720/126x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg 2x">
                                            <img src="https://images.bfmtv.com/mUxrfMkyERXLPAmkvbQa6iDkplM=/0x0:1280x720/283x0/images/Policiers-blesses-a-Paris-l-homme-qui-a-tente-de-s-en-prendre-a-un-des-fonctionnaires-a-ete-interpelle-2027095.jpg"
                                                alt="Policiers blessés à Paris: l&#39;homme qui a tenté de s&#39;en prendre à un des fonctionnaires a été interpellé">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">3:48</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">Policiers blessés à Paris: l'homme qui a tenté de
                                    s'en prendre à un des fonctionnaires a été interpellé</h3>
                            </a></article>
                        <article class="last_videos_item"><a
                                href="prefecture-de-police-de-paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires_VN-202502040541.html"
                                title="Préfecture de police de Paris: des policiers blessés après qu'un homme a tenté de s'emparer de l'arme d'un des fonctionnaires">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/YxnkL3uvFiGsWdxaOFwvRnF0zXI=/0x0:1280x720/283x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp, https://images.bfmtv.com/wzfXh7Ou_06K-2IdxRJMvYiJzKg=/0x0:1280x720/566x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/OCwTt1yqU-TWWLD_sK7o2MrhxMw=/0x0:1280x720/283x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg, https://images.bfmtv.com/9hXkycgy-ZHYQxOetptyFxkuDtE=/0x0:1280x720/566x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/eh5IecKW6aHD5colw4k9ZzK10nY=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/okD0rZMi6A1sqQoItVRE87Dwf5c=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/eh5IecKW6aHD5colw4k9ZzK10nY=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/okD0rZMi6A1sqQoItVRE87Dwf5c=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/eh5IecKW6aHD5colw4k9ZzK10nY=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/okD0rZMi6A1sqQoItVRE87Dwf5c=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/OCwTt1yqU-TWWLD_sK7o2MrhxMw=/0x0:1280x720/283x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg"
                                            src="https://images.bfmtv.com/OCwTt1yqU-TWWLD_sK7o2MrhxMw=/0x0:1280x720/283x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg"
                                            alt="Préfecture de police de Paris: des policiers blessés après qu'un homme a tenté de s'emparer de l'arme d'un des fonctionnaires"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/OCwTt1yqU-TWWLD_sK7o2MrhxMw=/0x0:1280x720/283x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/YxnkL3uvFiGsWdxaOFwvRnF0zXI=/0x0:1280x720/283x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp, https://images.bfmtv.com/wzfXh7Ou_06K-2IdxRJMvYiJzKg=/0x0:1280x720/566x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/OCwTt1yqU-TWWLD_sK7o2MrhxMw=/0x0:1280x720/283x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg, https://images.bfmtv.com/9hXkycgy-ZHYQxOetptyFxkuDtE=/0x0:1280x720/566x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/VBKhgMWEZoeGmyvAohlIq9g05s8=/0x0:1280x720/63x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp, https://images.bfmtv.com/eh5IecKW6aHD5colw4k9ZzK10nY=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/tHriDvThyPrfRunEgAQ89sTyLTk=/0x0:1280x720/63x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg, https://images.bfmtv.com/okD0rZMi6A1sqQoItVRE87Dwf5c=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/VBKhgMWEZoeGmyvAohlIq9g05s8=/0x0:1280x720/63x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp, https://images.bfmtv.com/eh5IecKW6aHD5colw4k9ZzK10nY=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/tHriDvThyPrfRunEgAQ89sTyLTk=/0x0:1280x720/63x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg, https://images.bfmtv.com/okD0rZMi6A1sqQoItVRE87Dwf5c=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/VBKhgMWEZoeGmyvAohlIq9g05s8=/0x0:1280x720/63x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp, https://images.bfmtv.com/eh5IecKW6aHD5colw4k9ZzK10nY=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/tHriDvThyPrfRunEgAQ89sTyLTk=/0x0:1280x720/63x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg, https://images.bfmtv.com/okD0rZMi6A1sqQoItVRE87Dwf5c=/0x0:1280x720/126x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg 2x">
                                            <img src="https://images.bfmtv.com/OCwTt1yqU-TWWLD_sK7o2MrhxMw=/0x0:1280x720/283x0/images/Prefecture-de-police-de-Paris-des-policiers-blesses-apres-qu-un-homme-a-tente-de-s-emparer-de-l-arme-d-un-des-fonctionnaires-2027092.jpg"
                                                alt="Préfecture de police de Paris: des policiers blessés après qu&#39;un homme a tenté de s&#39;emparer de l&#39;arme d&#39;un des fonctionnaires">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">4:26</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">Préfecture de police de Paris: des policiers blessés
                                    après qu'un homme a tenté de s'emparer de l'arme d'un des fonctionnaires</h3>
                            </a></article>
                        <div class="OUTBRAIN"
                            data-src="https://www.bfmtv.com/police-justice/paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police_VN-202502040606.html"
                            data-widget-id="AR_4"></div>
                        <article class="last_videos_item"><a
                                href="immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023_VN-202502040524.html"
                                title="Immigration: une hausse de 26.7% du nombre de clandestins expulsés par rapport à 2023">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/LUBrsLyMJoGo2G9HZlIljJBifkA=/0x0:1280x720/283x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp, https://images.bfmtv.com/-OofqCiSVmqB3CEM_5-PGsyJ7LU=/0x0:1280x720/566x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/lDYJXmnapYXc-be-OQW4JD7BPXI=/0x0:1280x720/283x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg, https://images.bfmtv.com/HYaOcq_5MYnHxjF9vExOyDVUIgE=/0x0:1280x720/566x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/2obZgyb9iPbBpmwWLauO1aLOLNU=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/V92RzVU1OpeZYJTsorWdnIMrPag=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/2obZgyb9iPbBpmwWLauO1aLOLNU=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/V92RzVU1OpeZYJTsorWdnIMrPag=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/2obZgyb9iPbBpmwWLauO1aLOLNU=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/V92RzVU1OpeZYJTsorWdnIMrPag=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/lDYJXmnapYXc-be-OQW4JD7BPXI=/0x0:1280x720/283x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg"
                                            src="https://images.bfmtv.com/lDYJXmnapYXc-be-OQW4JD7BPXI=/0x0:1280x720/283x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg"
                                            alt="Immigration: une hausse de 26.7% du nombre de clandestins expulsés par rapport à 2023"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/lDYJXmnapYXc-be-OQW4JD7BPXI=/0x0:1280x720/283x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/LUBrsLyMJoGo2G9HZlIljJBifkA=/0x0:1280x720/283x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp, https://images.bfmtv.com/-OofqCiSVmqB3CEM_5-PGsyJ7LU=/0x0:1280x720/566x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/lDYJXmnapYXc-be-OQW4JD7BPXI=/0x0:1280x720/283x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg, https://images.bfmtv.com/HYaOcq_5MYnHxjF9vExOyDVUIgE=/0x0:1280x720/566x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/n8rw05Qffui294XBg0i_FzzlUwE=/0x0:1280x720/63x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp, https://images.bfmtv.com/2obZgyb9iPbBpmwWLauO1aLOLNU=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/ZDbCQq1-fO5ppwiKCGR3kxMatnM=/0x0:1280x720/63x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg, https://images.bfmtv.com/V92RzVU1OpeZYJTsorWdnIMrPag=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/n8rw05Qffui294XBg0i_FzzlUwE=/0x0:1280x720/63x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp, https://images.bfmtv.com/2obZgyb9iPbBpmwWLauO1aLOLNU=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/ZDbCQq1-fO5ppwiKCGR3kxMatnM=/0x0:1280x720/63x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg, https://images.bfmtv.com/V92RzVU1OpeZYJTsorWdnIMrPag=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/n8rw05Qffui294XBg0i_FzzlUwE=/0x0:1280x720/63x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp, https://images.bfmtv.com/2obZgyb9iPbBpmwWLauO1aLOLNU=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/ZDbCQq1-fO5ppwiKCGR3kxMatnM=/0x0:1280x720/63x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg, https://images.bfmtv.com/V92RzVU1OpeZYJTsorWdnIMrPag=/0x0:1280x720/126x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg 2x">
                                            <img src="https://images.bfmtv.com/lDYJXmnapYXc-be-OQW4JD7BPXI=/0x0:1280x720/283x0/images/Immigration-une-hausse-de-26-7-du-nombre-de-clandestins-expulses-par-rapport-a-2023-2027081.jpg"
                                                alt="Immigration: une hausse de 26.7% du nombre de clandestins expulsés par rapport à 2023">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">2:08</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">Immigration: une hausse de 26.7% du nombre de
                                    clandestins expulsés par rapport à 2023</h3>
                            </a></article>
                        <article class="last_videos_item"><a
                                href="/politique/bruno-retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget_VN-202502040442.html"
                                title="Bruno Retailleau à la rencontre des policiers qui manifestent devant l'Assemblée nationale pour réclamer une hausse de leur budget">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/kKSq2y9J4cKF_4PQ99RKyd6LRZY=/0x0:1280x720/283x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp, https://images.bfmtv.com/nqlgilYirzyhoBc-8Q8ibldkhQk=/0x0:1280x720/566x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/8R8yYyrpNUBk0ZHQUzxTU-DFf18=/0x0:1280x720/283x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg, https://images.bfmtv.com/i2gjpHPAY4-2pkKMztPGg3Of-Zs=/0x0:1280x720/566x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/CdltHF5gRVHAyMmSy8PymQFQ7s4=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/BLQnqVLMut6tCFGz2miXa4i2TgY=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/CdltHF5gRVHAyMmSy8PymQFQ7s4=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/BLQnqVLMut6tCFGz2miXa4i2TgY=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/CdltHF5gRVHAyMmSy8PymQFQ7s4=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/BLQnqVLMut6tCFGz2miXa4i2TgY=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/8R8yYyrpNUBk0ZHQUzxTU-DFf18=/0x0:1280x720/283x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg"
                                            src="https://images.bfmtv.com/8R8yYyrpNUBk0ZHQUzxTU-DFf18=/0x0:1280x720/283x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg"
                                            alt="Bruno Retailleau à la rencontre des policiers qui manifestent devant l'Assemblée nationale pour réclamer une hausse de leur budget"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/8R8yYyrpNUBk0ZHQUzxTU-DFf18=/0x0:1280x720/283x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/kKSq2y9J4cKF_4PQ99RKyd6LRZY=/0x0:1280x720/283x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp, https://images.bfmtv.com/nqlgilYirzyhoBc-8Q8ibldkhQk=/0x0:1280x720/566x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/8R8yYyrpNUBk0ZHQUzxTU-DFf18=/0x0:1280x720/283x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg, https://images.bfmtv.com/i2gjpHPAY4-2pkKMztPGg3Of-Zs=/0x0:1280x720/566x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/Fx-KdKZEmayK75IJUXOf20IkxQA=/0x0:1280x720/63x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp, https://images.bfmtv.com/CdltHF5gRVHAyMmSy8PymQFQ7s4=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/87PEWiZBuamm07JbDeDB41ICVLQ=/0x0:1280x720/63x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg, https://images.bfmtv.com/BLQnqVLMut6tCFGz2miXa4i2TgY=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/Fx-KdKZEmayK75IJUXOf20IkxQA=/0x0:1280x720/63x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp, https://images.bfmtv.com/CdltHF5gRVHAyMmSy8PymQFQ7s4=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/87PEWiZBuamm07JbDeDB41ICVLQ=/0x0:1280x720/63x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg, https://images.bfmtv.com/BLQnqVLMut6tCFGz2miXa4i2TgY=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/Fx-KdKZEmayK75IJUXOf20IkxQA=/0x0:1280x720/63x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp, https://images.bfmtv.com/CdltHF5gRVHAyMmSy8PymQFQ7s4=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/87PEWiZBuamm07JbDeDB41ICVLQ=/0x0:1280x720/63x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg, https://images.bfmtv.com/BLQnqVLMut6tCFGz2miXa4i2TgY=/0x0:1280x720/126x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg 2x">
                                            <img src="https://images.bfmtv.com/8R8yYyrpNUBk0ZHQUzxTU-DFf18=/0x0:1280x720/283x0/images/Bruno-Retailleau-a-la-rencontre-des-policiers-qui-manifestent-devant-l-Assemblee-nationale-pour-reclamer-une-hausse-de-leur-budget-2027028.jpg"
                                                alt="Bruno Retailleau à la rencontre des policiers qui manifestent devant l&#39;Assemblée nationale pour réclamer une hausse de leur budget">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:16</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">Bruno Retailleau à la rencontre des policiers qui
                                    manifestent devant l'Assemblée nationale pour réclamer une hausse de leur budget
                                </h3>
                            </a></article>
                        <article class="last_videos_item"><a
                                href="notre-principale-revendication-est-l-augmentation-du-budget-2025-des-policiers-manifestent-devant-l-assemblee-a-l-appel-du-syndicat-alliance-police-nationale_VN-202502040418.html"
                                title=" &quot;Notre principale revendication est l'augmentation du budget 2025&quot;: Des policiers manifestent devant l'Assemblée à l'appel du syndicat Alliance police nationale">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/1h0vtufMu95k3jjKazs2C25k3jI=/0x0:1280x720/283x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp, https://images.bfmtv.com/4e4aA6oDFcsvLv_bMLDqQfQXyxY=/0x0:1280x720/566x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/F3FMqXvcMekAFCMJ-VyaJGWRp5k=/0x0:1280x720/283x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg, https://images.bfmtv.com/MEY6vUj0q8PznE67d8KUqnebYwA=/0x0:1280x720/566x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/-mTUQtQADXsG_VaLnd4YEvINNXQ=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/-3saoDxxim4Awf1V6a_BnkBcECM=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/-mTUQtQADXsG_VaLnd4YEvINNXQ=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/-3saoDxxim4Awf1V6a_BnkBcECM=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/-mTUQtQADXsG_VaLnd4YEvINNXQ=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/-3saoDxxim4Awf1V6a_BnkBcECM=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/F3FMqXvcMekAFCMJ-VyaJGWRp5k=/0x0:1280x720/283x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg"
                                            src="https://images.bfmtv.com/F3FMqXvcMekAFCMJ-VyaJGWRp5k=/0x0:1280x720/283x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg"
                                            alt=" &quot;Notre principale revendication est l'augmentation du budget 2025&quot;: Des policiers manifestent devant l'Assemblée à l'appel du syndicat Alliance police nationale"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/F3FMqXvcMekAFCMJ-VyaJGWRp5k=/0x0:1280x720/283x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/1h0vtufMu95k3jjKazs2C25k3jI=/0x0:1280x720/283x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp, https://images.bfmtv.com/4e4aA6oDFcsvLv_bMLDqQfQXyxY=/0x0:1280x720/566x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/F3FMqXvcMekAFCMJ-VyaJGWRp5k=/0x0:1280x720/283x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg, https://images.bfmtv.com/MEY6vUj0q8PznE67d8KUqnebYwA=/0x0:1280x720/566x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/VC6XtAz-DgZqG8G3uWjc_rtlj44=/0x0:1280x720/63x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp, https://images.bfmtv.com/-mTUQtQADXsG_VaLnd4YEvINNXQ=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/GMp2yBU5R9tzDI7jZMsBckwELX0=/0x0:1280x720/63x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg, https://images.bfmtv.com/-3saoDxxim4Awf1V6a_BnkBcECM=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/VC6XtAz-DgZqG8G3uWjc_rtlj44=/0x0:1280x720/63x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp, https://images.bfmtv.com/-mTUQtQADXsG_VaLnd4YEvINNXQ=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/GMp2yBU5R9tzDI7jZMsBckwELX0=/0x0:1280x720/63x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg, https://images.bfmtv.com/-3saoDxxim4Awf1V6a_BnkBcECM=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/VC6XtAz-DgZqG8G3uWjc_rtlj44=/0x0:1280x720/63x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp, https://images.bfmtv.com/-mTUQtQADXsG_VaLnd4YEvINNXQ=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/GMp2yBU5R9tzDI7jZMsBckwELX0=/0x0:1280x720/63x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg, https://images.bfmtv.com/-3saoDxxim4Awf1V6a_BnkBcECM=/0x0:1280x720/126x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg 2x">
                                            <img src="https://images.bfmtv.com/F3FMqXvcMekAFCMJ-VyaJGWRp5k=/0x0:1280x720/283x0/images/Notre-principale-revendication-est-l-augmentation-du-budget-2025-Des-policiers-manifestent-devant-l-Assemblee-a-l-appel-du-syndicat-Alliance-police-nationale-2027010.jpg"
                                                alt=" &quot;Notre principale revendication est l&#39;augmentation du budget 2025&quot;: Des policiers manifestent devant l&#39;Assemblée à l&#39;appel du syndicat Alliance police nationale">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">2:23</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">"Notre principale revendication est l'augmentation du
                                    budget 2025": Des policiers manifestent devant l'Assemblée à l'appel du syndicat
                                    Alliance police nationale</h3>
                            </a></article>
                        <article class="last_videos_item"><a
                                href="/politique/les-republicains/laurent-wauquiez-lr-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale_VN-202502040269.html"
                                title="Laurent Wauquiez (LR) souhaite une &quot;loi d'urgence&quot; pour répondre à  &quot;un problème de sous-capacité carcérale&quot;">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/eHfolPFdIXxGTZatKZmF7or13i0=/0x0:1280x720/283x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp, https://images.bfmtv.com/eSw4tYIT606WsWar1w7xU7Xu8wM=/0x0:1280x720/566x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/Z8R96Kq0T5iwDZ9HuGeryKTp4yU=/0x0:1280x720/283x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg, https://images.bfmtv.com/y5Hfvvtn8QmnotmlKTY0yMS7ad0=/0x0:1280x720/566x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/hrPjtYTE7FOsbT-Al02zn4drs9E=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/-6OWzOATQqpYtaUFQDmiP9hAtn4=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/hrPjtYTE7FOsbT-Al02zn4drs9E=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/-6OWzOATQqpYtaUFQDmiP9hAtn4=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/hrPjtYTE7FOsbT-Al02zn4drs9E=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/-6OWzOATQqpYtaUFQDmiP9hAtn4=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/Z8R96Kq0T5iwDZ9HuGeryKTp4yU=/0x0:1280x720/283x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg"
                                            src="https://images.bfmtv.com/Z8R96Kq0T5iwDZ9HuGeryKTp4yU=/0x0:1280x720/283x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg"
                                            alt="Laurent Wauquiez (LR) souhaite une &quot;loi d'urgence&quot; pour répondre à  &quot;un problème de sous-capacité carcérale&quot;"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/Z8R96Kq0T5iwDZ9HuGeryKTp4yU=/0x0:1280x720/283x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/eHfolPFdIXxGTZatKZmF7or13i0=/0x0:1280x720/283x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp, https://images.bfmtv.com/eSw4tYIT606WsWar1w7xU7Xu8wM=/0x0:1280x720/566x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/Z8R96Kq0T5iwDZ9HuGeryKTp4yU=/0x0:1280x720/283x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg, https://images.bfmtv.com/y5Hfvvtn8QmnotmlKTY0yMS7ad0=/0x0:1280x720/566x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/gly6ls9KP52S5EF3M-eCQJCdu6M=/0x0:1280x720/63x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp, https://images.bfmtv.com/hrPjtYTE7FOsbT-Al02zn4drs9E=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/KEvHr4n9J44RLGj4DDFKLaqvE10=/0x0:1280x720/63x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg, https://images.bfmtv.com/-6OWzOATQqpYtaUFQDmiP9hAtn4=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/gly6ls9KP52S5EF3M-eCQJCdu6M=/0x0:1280x720/63x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp, https://images.bfmtv.com/hrPjtYTE7FOsbT-Al02zn4drs9E=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/KEvHr4n9J44RLGj4DDFKLaqvE10=/0x0:1280x720/63x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg, https://images.bfmtv.com/-6OWzOATQqpYtaUFQDmiP9hAtn4=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/gly6ls9KP52S5EF3M-eCQJCdu6M=/0x0:1280x720/63x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp, https://images.bfmtv.com/hrPjtYTE7FOsbT-Al02zn4drs9E=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/KEvHr4n9J44RLGj4DDFKLaqvE10=/0x0:1280x720/63x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg, https://images.bfmtv.com/-6OWzOATQqpYtaUFQDmiP9hAtn4=/0x0:1280x720/126x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg 2x">
                                            <img src="https://images.bfmtv.com/Z8R96Kq0T5iwDZ9HuGeryKTp4yU=/0x0:1280x720/283x0/images/Laurent-Wauquiez-LR-souhaite-une-loi-d-urgence-pour-repondre-a-un-probleme-de-sous-capacite-carcerale-2026896.jpg"
                                                alt="Laurent Wauquiez (LR) souhaite une &quot;loi d&#39;urgence&quot; pour répondre à  &quot;un problème de sous-capacité carcérale&quot;">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:43</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">Laurent Wauquiez (LR) souhaite une "loi d'urgence"
                                    pour répondre à "un problème de sous-capacité carcérale"</h3>
                            </a></article>
                        <article class="last_videos_item"><a
                                href="ils-sont-marques-eric-larcheveque-associe-de-david-balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-bfmtv_VN-202502040199.html"
                                title="&quot;Ils sont marqués&quot;:  Éric Larchevêque, associé de David Balland, enlevé à son domicile avec sa compagne le 21 janvier, témoigne sur BFMTV">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/CBT7pGV9dG9ejJasB5HYpdWzpgs=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp, https://images.bfmtv.com/qqboN4g1IAxpKIg2WqjkiN1501U=/0x0:1280x720/566x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/4gZD_T4U9XZT-7PySJTU-GX-jVs=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg, https://images.bfmtv.com/lL7k3jncBUUw6YFrn4vGZK6HWfk=/0x0:1280x720/566x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/eMy7UVRKDIL_vqtuks1LsbZ7wGA=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/Pb7tsbe2utfOHfI3Fbn67bxxyys=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/eMy7UVRKDIL_vqtuks1LsbZ7wGA=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/Pb7tsbe2utfOHfI3Fbn67bxxyys=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/eMy7UVRKDIL_vqtuks1LsbZ7wGA=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/Pb7tsbe2utfOHfI3Fbn67bxxyys=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/4gZD_T4U9XZT-7PySJTU-GX-jVs=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg"
                                            src="https://images.bfmtv.com/4gZD_T4U9XZT-7PySJTU-GX-jVs=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg"
                                            alt="&quot;Ils sont marqués&quot;:  Éric Larchevêque, associé de David Balland, enlevé à son domicile avec sa compagne le 21 janvier, témoigne sur BFMTV"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/4gZD_T4U9XZT-7PySJTU-GX-jVs=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/CBT7pGV9dG9ejJasB5HYpdWzpgs=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp, https://images.bfmtv.com/qqboN4g1IAxpKIg2WqjkiN1501U=/0x0:1280x720/566x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/4gZD_T4U9XZT-7PySJTU-GX-jVs=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg, https://images.bfmtv.com/lL7k3jncBUUw6YFrn4vGZK6HWfk=/0x0:1280x720/566x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/kUB99cslzrn9lD4aSPbh425Y6Ro=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp, https://images.bfmtv.com/eMy7UVRKDIL_vqtuks1LsbZ7wGA=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/jNSpaxSBfmPLlA5KGqT9-4N92WA=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg, https://images.bfmtv.com/Pb7tsbe2utfOHfI3Fbn67bxxyys=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/kUB99cslzrn9lD4aSPbh425Y6Ro=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp, https://images.bfmtv.com/eMy7UVRKDIL_vqtuks1LsbZ7wGA=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/jNSpaxSBfmPLlA5KGqT9-4N92WA=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg, https://images.bfmtv.com/Pb7tsbe2utfOHfI3Fbn67bxxyys=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/kUB99cslzrn9lD4aSPbh425Y6Ro=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp, https://images.bfmtv.com/eMy7UVRKDIL_vqtuks1LsbZ7wGA=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/jNSpaxSBfmPLlA5KGqT9-4N92WA=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg, https://images.bfmtv.com/Pb7tsbe2utfOHfI3Fbn67bxxyys=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg 2x">
                                            <img src="https://images.bfmtv.com/4gZD_T4U9XZT-7PySJTU-GX-jVs=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026848.jpg"
                                                alt="&quot;Ils sont marqués&quot;:  Éric Larchevêque, associé de David Balland, enlevé à son domicile avec sa compagne le 21 janvier, témoigne sur BFMTV">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:28</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">"Ils sont marqués": Éric Larchevêque, associé de
                                    David Balland, enlevé à son domicile avec sa compagne le 21 janvier, témoigne sur
                                    BFMTV</h3>
                            </a></article>
                        <article class="last_videos_item"><a
                                href="cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-chateaudun_VN-202502040049.html"
                                title="Cars scolaires: des contrôles de stupéfiants réalisés massivement après l'accident mortel à Châteaudun">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/x02JSCVw2Cfw3VlzPG9w_pM_Pqc=/0x0:1280x720/283x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp, https://images.bfmtv.com/sOX5UlkFTx2-k88fJ9p2sUU1amU=/0x0:1280x720/566x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/865uQRtuuJXlQQ0xelJ66ZsrQ4I=/0x0:1280x720/283x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg, https://images.bfmtv.com/1zPUFyrqy4AhujlM_1ua9cydk6I=/0x0:1280x720/566x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/26d_TgXpuAb7S2qoLI-YeuSWGGY=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/BLyQG6a3l_CkJIzZkmgc1Qw3Z7E=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/26d_TgXpuAb7S2qoLI-YeuSWGGY=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/BLyQG6a3l_CkJIzZkmgc1Qw3Z7E=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/26d_TgXpuAb7S2qoLI-YeuSWGGY=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/BLyQG6a3l_CkJIzZkmgc1Qw3Z7E=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/865uQRtuuJXlQQ0xelJ66ZsrQ4I=/0x0:1280x720/283x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg"
                                            src="https://images.bfmtv.com/865uQRtuuJXlQQ0xelJ66ZsrQ4I=/0x0:1280x720/283x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg"
                                            alt="Cars scolaires: des contrôles de stupéfiants réalisés massivement après l'accident mortel à Châteaudun"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/865uQRtuuJXlQQ0xelJ66ZsrQ4I=/0x0:1280x720/283x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/x02JSCVw2Cfw3VlzPG9w_pM_Pqc=/0x0:1280x720/283x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp, https://images.bfmtv.com/sOX5UlkFTx2-k88fJ9p2sUU1amU=/0x0:1280x720/566x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/865uQRtuuJXlQQ0xelJ66ZsrQ4I=/0x0:1280x720/283x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg, https://images.bfmtv.com/1zPUFyrqy4AhujlM_1ua9cydk6I=/0x0:1280x720/566x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/lUvVd43uMrdyPl_2gg4lEbWzlVo=/0x0:1280x720/63x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp, https://images.bfmtv.com/26d_TgXpuAb7S2qoLI-YeuSWGGY=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/aeG9AzT5scppUV8hgcAOq8GuPH0=/0x0:1280x720/63x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg, https://images.bfmtv.com/BLyQG6a3l_CkJIzZkmgc1Qw3Z7E=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/lUvVd43uMrdyPl_2gg4lEbWzlVo=/0x0:1280x720/63x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp, https://images.bfmtv.com/26d_TgXpuAb7S2qoLI-YeuSWGGY=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/aeG9AzT5scppUV8hgcAOq8GuPH0=/0x0:1280x720/63x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg, https://images.bfmtv.com/BLyQG6a3l_CkJIzZkmgc1Qw3Z7E=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/lUvVd43uMrdyPl_2gg4lEbWzlVo=/0x0:1280x720/63x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp, https://images.bfmtv.com/26d_TgXpuAb7S2qoLI-YeuSWGGY=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/aeG9AzT5scppUV8hgcAOq8GuPH0=/0x0:1280x720/63x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg, https://images.bfmtv.com/BLyQG6a3l_CkJIzZkmgc1Qw3Z7E=/0x0:1280x720/126x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg 2x">
                                            <img src="https://images.bfmtv.com/865uQRtuuJXlQQ0xelJ66ZsrQ4I=/0x0:1280x720/283x0/images/Cars-scolaires-des-controles-de-stupefiants-realises-massivement-apres-l-accident-mortel-a-Chateaudun-2026742.jpg"
                                                alt="Cars scolaires: des contrôles de stupéfiants réalisés massivement après l&#39;accident mortel à Châteaudun">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:06</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">Cars scolaires: des contrôles de stupéfiants réalisés
                                    massivement après l'accident mortel à Châteaudun</h3>
                            </a></article>
                        <article class="last_videos_item"><a
                                href="ils-sont-marques-eric-larcheveque-associe-de-david-balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-bfmtv_VN-202502040039.html"
                                title="&quot;Ils sont marqués&quot;:  Éric Larchevêque, associé de David Balland, enlevé à son domicile avec sa compagne le 21 janvier, témoigne sur BFMTV">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/YI1qz6aGI8mCoywtV6aDoW-OYkY=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp, https://images.bfmtv.com/IZYC4a4lq8IIvTesCKZOVeHvtlQ=/0x0:1280x720/566x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/CuENE92qQPLzZSEtFI3Ht16ZmHg=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg, https://images.bfmtv.com/F_sfC1gRsv7HfhPblo7cwySAmWE=/0x0:1280x720/566x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/eMnpeMH7wIUO4OycsLynFWUk958=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/CLGCSHj3Gdpwq7ugS4WANvRQ_xY=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/eMnpeMH7wIUO4OycsLynFWUk958=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/CLGCSHj3Gdpwq7ugS4WANvRQ_xY=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/eMnpeMH7wIUO4OycsLynFWUk958=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/CLGCSHj3Gdpwq7ugS4WANvRQ_xY=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/CuENE92qQPLzZSEtFI3Ht16ZmHg=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg"
                                            src="https://images.bfmtv.com/CuENE92qQPLzZSEtFI3Ht16ZmHg=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg"
                                            alt="&quot;Ils sont marqués&quot;:  Éric Larchevêque, associé de David Balland, enlevé à son domicile avec sa compagne le 21 janvier, témoigne sur BFMTV"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/CuENE92qQPLzZSEtFI3Ht16ZmHg=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/YI1qz6aGI8mCoywtV6aDoW-OYkY=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp, https://images.bfmtv.com/IZYC4a4lq8IIvTesCKZOVeHvtlQ=/0x0:1280x720/566x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/CuENE92qQPLzZSEtFI3Ht16ZmHg=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg, https://images.bfmtv.com/F_sfC1gRsv7HfhPblo7cwySAmWE=/0x0:1280x720/566x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/T5jHJIR-0MaP3-_ioaUZQrfn0MY=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp, https://images.bfmtv.com/eMnpeMH7wIUO4OycsLynFWUk958=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/jCMBKI2HjzrlA4y6hJ7HeO-d9k4=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg, https://images.bfmtv.com/CLGCSHj3Gdpwq7ugS4WANvRQ_xY=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/T5jHJIR-0MaP3-_ioaUZQrfn0MY=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp, https://images.bfmtv.com/eMnpeMH7wIUO4OycsLynFWUk958=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/jCMBKI2HjzrlA4y6hJ7HeO-d9k4=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg, https://images.bfmtv.com/CLGCSHj3Gdpwq7ugS4WANvRQ_xY=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/T5jHJIR-0MaP3-_ioaUZQrfn0MY=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp, https://images.bfmtv.com/eMnpeMH7wIUO4OycsLynFWUk958=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/jCMBKI2HjzrlA4y6hJ7HeO-d9k4=/0x0:1280x720/63x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg, https://images.bfmtv.com/CLGCSHj3Gdpwq7ugS4WANvRQ_xY=/0x0:1280x720/126x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg 2x">
                                            <img src="https://images.bfmtv.com/CuENE92qQPLzZSEtFI3Ht16ZmHg=/0x0:1280x720/283x0/images/Ils-sont-marques-Eric-Larcheveque-associe-de-David-Balland-enleve-a-son-domicile-avec-sa-compagne-le-21-janvier-temoigne-sur-BFMTV-2026734.jpg"
                                                alt="&quot;Ils sont marqués&quot;:  Éric Larchevêque, associé de David Balland, enlevé à son domicile avec sa compagne le 21 janvier, témoigne sur BFMTV">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:26</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">"Ils sont marqués": Éric Larchevêque, associé de
                                    David Balland, enlevé à son domicile avec sa compagne le 21 janvier, témoigne sur
                                    BFMTV</h3>
                            </a></article>
                        <article class="last_videos_item"><a
                                href="/international/europe/espagne/baiser-force-sur-jenni-hermoso-le-proces-de-luis-rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-espagne_VN-202502031018.html"
                                title="Baiser forcé sur Jenni Hermoso: le procès de Luis Rubiales pour agression sexuelle s'est ouvert ce lundi en Espagne">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/CI5CFfTPkATn7xb3hBUVLMuLTbc=/0x0:1280x720/283x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp, https://images.bfmtv.com/bsb7HptrpH-JwdrCvQlfvlK3DlI=/0x0:1280x720/566x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/mHYZX0R87YqPlSvBjNkcMLk84Sg=/0x0:1280x720/283x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg, https://images.bfmtv.com/MEbDmyE9n3h0QL5u4ZY4anDZiu0=/0x0:1280x720/566x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/X_pZ87EcDVzEoGp8QNL0CIuL400=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/r1isDfzIFs5TGwbVCT60tGTt6qg=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/X_pZ87EcDVzEoGp8QNL0CIuL400=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/r1isDfzIFs5TGwbVCT60tGTt6qg=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/X_pZ87EcDVzEoGp8QNL0CIuL400=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/r1isDfzIFs5TGwbVCT60tGTt6qg=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/mHYZX0R87YqPlSvBjNkcMLk84Sg=/0x0:1280x720/283x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg"
                                            src="https://images.bfmtv.com/mHYZX0R87YqPlSvBjNkcMLk84Sg=/0x0:1280x720/283x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg"
                                            alt="Baiser forcé sur Jenni Hermoso: le procès de Luis Rubiales pour agression sexuelle s'est ouvert ce lundi en Espagne"
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/mHYZX0R87YqPlSvBjNkcMLk84Sg=/0x0:1280x720/283x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/CI5CFfTPkATn7xb3hBUVLMuLTbc=/0x0:1280x720/283x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp, https://images.bfmtv.com/bsb7HptrpH-JwdrCvQlfvlK3DlI=/0x0:1280x720/566x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/mHYZX0R87YqPlSvBjNkcMLk84Sg=/0x0:1280x720/283x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg, https://images.bfmtv.com/MEbDmyE9n3h0QL5u4ZY4anDZiu0=/0x0:1280x720/566x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/RG2O-I_Mu81aEmY3XTKuZ7NsGEs=/0x0:1280x720/63x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp, https://images.bfmtv.com/X_pZ87EcDVzEoGp8QNL0CIuL400=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/pd-Il_fOUMAblITvxQEfcMMNN-Y=/0x0:1280x720/63x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg, https://images.bfmtv.com/r1isDfzIFs5TGwbVCT60tGTt6qg=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/RG2O-I_Mu81aEmY3XTKuZ7NsGEs=/0x0:1280x720/63x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp, https://images.bfmtv.com/X_pZ87EcDVzEoGp8QNL0CIuL400=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/pd-Il_fOUMAblITvxQEfcMMNN-Y=/0x0:1280x720/63x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg, https://images.bfmtv.com/r1isDfzIFs5TGwbVCT60tGTt6qg=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/RG2O-I_Mu81aEmY3XTKuZ7NsGEs=/0x0:1280x720/63x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp, https://images.bfmtv.com/X_pZ87EcDVzEoGp8QNL0CIuL400=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/pd-Il_fOUMAblITvxQEfcMMNN-Y=/0x0:1280x720/63x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg, https://images.bfmtv.com/r1isDfzIFs5TGwbVCT60tGTt6qg=/0x0:1280x720/126x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg 2x">
                                            <img src="https://images.bfmtv.com/mHYZX0R87YqPlSvBjNkcMLk84Sg=/0x0:1280x720/283x0/images/Baiser-force-sur-Jenni-Hermoso-le-proces-de-Luis-Rubiales-pour-agression-sexuelle-s-est-ouvert-ce-lundi-en-Espagne-2026696.jpg"
                                                alt="Baiser forcé sur Jenni Hermoso: le procès de Luis Rubiales pour agression sexuelle s&#39;est ouvert ce lundi en Espagne">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">1:19</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">Baiser forcé sur Jenni Hermoso: le procès de Luis
                                    Rubiales pour agression sexuelle s'est ouvert ce lundi en Espagne</h3>
                            </a></article>
                        <article class="last_videos_item"><a
                                href="eboulement-la-course-contre-la-montre-des-stations_VN-202502030977.html"
                                title="Eboulement : la course contre la montre des stations ">
                                <figure class="meme_sujet_picture">
                                    <picture class="last_videos_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/5JH20UDW4AY1N21eRo2T_hb2Us4=/0x0:1280x720/283x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp, https://images.bfmtv.com/WASOK7wCBBQVc6kOGJv86c_FObg=/0x0:1280x720/566x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 441px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/GOYYOMn25ivORbbaxmubnHvrzfo=/0x0:1280x720/283x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg, https://images.bfmtv.com/AR49mrcFMi2cZLYmgTpbFUUQgyU=/0x0:1280x720/566x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/2nX9HVvi7jojErsLu9-GV4oGS-Q=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 361px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/4DvVKXqHwjOlD5n-aQ9fbfQMBfk=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/2nX9HVvi7jojErsLu9-GV4oGS-Q=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 321px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/4DvVKXqHwjOlD5n-aQ9fbfQMBfk=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/2nX9HVvi7jojErsLu9-GV4oGS-Q=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp 2x"
                                            type="image/webp" data-ll-status="entered">
                                        <source media="(min-width: 300px)" width="16" height="9"
                                            class="lozad entered exited"
                                            srcset="https://images.bfmtv.com/4DvVKXqHwjOlD5n-aQ9fbfQMBfk=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg 2x"
                                            type="image/jpeg" data-ll-status="entered"><img width="16" height="9"
                                            class="lozad entered loaded"
                                            data-srcset="https://images.bfmtv.com/GOYYOMn25ivORbbaxmubnHvrzfo=/0x0:1280x720/283x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg"
                                            src="https://images.bfmtv.com/GOYYOMn25ivORbbaxmubnHvrzfo=/0x0:1280x720/283x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg"
                                            alt="Eboulement : la course contre la montre des stations "
                                            data-ll-status="loaded"
                                            srcset="https://images.bfmtv.com/GOYYOMn25ivORbbaxmubnHvrzfo=/0x0:1280x720/283x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg">
                                    </picture><noscript>
                                        <picture class="last_videos_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/5JH20UDW4AY1N21eRo2T_hb2Us4=/0x0:1280x720/283x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp, https://images.bfmtv.com/WASOK7wCBBQVc6kOGJv86c_FObg=/0x0:1280x720/566x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="https://images.bfmtv.com/GOYYOMn25ivORbbaxmubnHvrzfo=/0x0:1280x720/283x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg, https://images.bfmtv.com/AR49mrcFMi2cZLYmgTpbFUUQgyU=/0x0:1280x720/566x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/Tp1x40zEDoo1JfkIe6R3k9EGdzs=/0x0:1280x720/63x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp, https://images.bfmtv.com/2nX9HVvi7jojErsLu9-GV4oGS-Q=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="https://images.bfmtv.com/ZwFrFSAMKgddDVAfFAlsurf3fL4=/0x0:1280x720/63x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg, https://images.bfmtv.com/4DvVKXqHwjOlD5n-aQ9fbfQMBfk=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/Tp1x40zEDoo1JfkIe6R3k9EGdzs=/0x0:1280x720/63x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp, https://images.bfmtv.com/2nX9HVvi7jojErsLu9-GV4oGS-Q=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="https://images.bfmtv.com/ZwFrFSAMKgddDVAfFAlsurf3fL4=/0x0:1280x720/63x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg, https://images.bfmtv.com/4DvVKXqHwjOlD5n-aQ9fbfQMBfk=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/Tp1x40zEDoo1JfkIe6R3k9EGdzs=/0x0:1280x720/63x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp, https://images.bfmtv.com/2nX9HVvi7jojErsLu9-GV4oGS-Q=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.webp 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="https://images.bfmtv.com/ZwFrFSAMKgddDVAfFAlsurf3fL4=/0x0:1280x720/63x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg, https://images.bfmtv.com/4DvVKXqHwjOlD5n-aQ9fbfQMBfk=/0x0:1280x720/126x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg 2x">
                                            <img src="https://images.bfmtv.com/GOYYOMn25ivORbbaxmubnHvrzfo=/0x0:1280x720/283x0/images/Eboulement-la-course-contre-la-montre-des-stations-2026672.jpg"
                                                alt="Eboulement : la course contre la montre des stations ">
                                        </picture>
                                    </noscript>
                                    <figcaption><span class="video_time_zone">3:15</span></figcaption>
                                </figure>
                                <h3 class="last_videos_item_title">Eboulement : la course contre la montre des stations
                                </h3>
                            </a></article> -->
                </div>
            </section>
            <div class="breadcrumb_parent grid_column_abc" id="breadcrumb_parent"></div>
        </div>
    </div><template id="controlPanel_VOD_Desktop">
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
                        disabled="disabled"></button> <button
                        class="rewindButton vjs-control vjs-button icon-retour"></button> <button
                        class="forwardButton vjs-control vjs-button icon-avance"></button> <button
                        class="irisForward vjs-control vjs-button icon-play-next-button"></button></div>
                <div class="rightButtons"></div>
            </div>
        </div>
        <div class="topRightButton"></div>
    </template><template id="previewBlock_Desktop">
        <div class="previewBlock"><a class="jumpToVideo" target="_blank">
                <div class="thumbnailContainer"><img class="thumbnailPreview"></div>
            </a>
            <div class="descriptionArea">
                <p class="descriptionPreview"></p>
            </div>
        </div>
    </template><template id="controlPanel_VOD_Mobile">
        <div class="controlPanel">
            <div class="VOD_Mobile_Controls">
                <div class="centeredButtons"><button
                        class="irisBackward vjs-control vjs-button icon-play-previous-button disableButton"
                        disabled="disabled"></button> <button
                        class="rewindButton vjs-control vjs-button icon-retour"></button> <button
                        class="forwardButton vjs-control vjs-button icon-avance"></button> <button
                        class="irisForward vjs-control vjs-button icon-play-next-button"></button></div>
            </div>
            <div class="bottomControls"></div>
        </div>
        <div class="topRightButton"></div>
        <div class="topLeftButton"><button class="close"
                data-pagename="paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police_VN-202502040606"></button>
        </div>
    </template><template id="controlPanel_LIVE_Desktop">
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
    </template><template id="controlPanel_LIVE_Mobile">
        <div class="controlPanel">
            <div class="bottomBar">
                <div class="directHolder">
                    <div class="directIcon"></div><span class="directText">DIRECT</span>
                </div>
                <div class="rightButtons"></div>
            </div>
        </div>
        <div class="topRightButton"></div>
    </template><template id="errorTemplate">
        <div class="ErrorContainer"><span class="ErrorMessage"></span></div>
    </template>
</main>
<?php $this->endSection(); ?>