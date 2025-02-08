<?php $this->extend('layouts/layout_web') ?>

<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<!-- Content section -->
<?php $this->section('content') ?>

<main class="main_wrapper" id="main_wrapper">
    <div class="grid_wrapper"></div>
    <div class="grid_wrapper">
        <div class="grid_column grid_column_abc" id="grid_column_abc">
            <nav role="breadcrumb" class="breadcrumb" id="breadcrumb">
                <ul class="list_inbl">
                    <li class="breadcrumb_item breadbrumb_home"><a href="<?=base_url()?>" title="BFMTV"><span>Espagnora</span></a>
                    </li>
                    <li class="breadcrumb_item breadcrumb_last_item"><span>Podcasts</span></li>
                </ul>
            </nav>
            <h1 class="content_title">Podcasts</h1>
            <section class="block" data="initCarousel" id="block_podcasts_a_la_une_1679924454066">
                <div class="block_header" id="block_header_podcasts_a_la_une_1679924454066"></div>
                <div class="slider_wrapper">
                    <div class="slider_container podcasts_a_la_une big_slide">
                        <?php foreach($caroussel_podcasts as $caroussel_podcast): ?>
                        <article class="content_item carousel_item">
                            <div class="item_container">
                                <div class="item_container_bg" style="background: transparent;">
                                    <picture>
                                        <source media="(min-width: 992px)"
                                            srcset="https://images.bfmtv.com/7rAL8RDhr4PmMHUKomCJ_cL96bM=/0x0:0x0/392x0/podcast/podcasts/fond-15_1.png, https://images.bfmtv.com/fR5NhWm1xxjRMLfCjgkiO2hbliI=/0x0:0x0/784x0/podcast/podcasts/fond-15_1.png 2x">
                                        <source media="(min-width: 641px)"
                                            srcset="https://images.bfmtv.com/19iIpzD12I6-99Piq4cl2h0pxqQ=/0x0:0x0/364x0/podcast/podcasts/fond-15_1.png, https://images.bfmtv.com/R4CY0Fhq_oAmQosIO7QsZOCslDI=/0x0:0x0/728x0/podcast/podcasts/fond-15_1.png 2x">
                                        <img
                                            src="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?>"
                                            srcset="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?>, <?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?> 2x"
                                            alt="<?=$caroussel_podcast['Title_2']?>"
                                            title="<?=$caroussel_podcast['Title_2']?>">
                                    </picture>
                                </div><a
                                    href="le-titre-a-la-une/affaire-adele-haenel-le-realisateur-christophe-ruggia-condamne-pour-agressions-sexuelles-sur-mineure_EN-202502030832.html"
                                    class="content_item_picture"
                                    title="<?=$caroussel_podcast['Title_2']?>">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="1" height="1"
                                            srcset="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?>,<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 441px)" width="1" height="1"
                                            srcset="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?>, <?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 361px)" width="1" height="1"
                                            srcset="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 361px)" width="1" height="1"
                                            srcset="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 321px)" width="1" height="1"
                                            srcset="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 321px)" width="1" height="1"
                                            srcset="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 300px)" width="1" height="1"
                                            srcset="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 300px)" width="1" height="1"
                                            srcset="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?> 2x"
                                            type="image/jpeg">
                                            <img width="1" height="1"
                                            src="<?php echo base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?>"
                                            alt="<?=$caroussel_podcast['Title_2']?>">
                                    </picture>
                                </a>
                                <div class="content_item_info">
                                    <h3 class="content_item_title"><a
                                            href="le-titre-a-la-une/affaire-adele-haenel-le-realisateur-christophe-ruggia-condamne-pour-agressions-sexuelles-sur-mineure_EN-202502030832.html"
                                            title="Affaire Adèle Haenel: le réalisateur Christophe Ruggia condamné pour agressions sexuelles sur mineure">
                                            <?=$caroussel_podcast['Title_2']?></a></h3>
                                    <div class="podcast_item_infos podcast_wrapper_infos"
                                        data-audio-src="<?=base_url('uploads/'.$caroussel_podcast['Media_Link_5'])?>"
                                        data-img-src="<?=base_url('uploads/'.$caroussel_podcast['Media_Image_4'])?>"
                                        data-title="<?=$caroussel_podcast['Title_2']?>"
                                        data-id="202502030832" data-podcast-nom="<?=$caroussel_podcast['Title_2']?>">
                                        <div class="podcast_item_picto" listener="true">
                                            <img viewbox="-12 -11 38 38" width="26"
                                                height="26" src="<?=base_url('templates/news/assets/v11/images/play-btn.1a28abfc6c80bad6e43c8359ba7c0ced.svg')?>"
                                                class="pausing" alt="Play"> <img viewbox="-12 -11 38 38" width="26" height="26"
                                                src="<?=base_url('templates/news/assets/v11/images/pause-btn.ec70b36a959235207a12a42211b8c701.svg')?>" class="playing"
                                                alt="Pause">
                                            <h3 class="btn_text">Écouter</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endforeach; ?>
                                               
                    </div>
                    <div class="nav_holder" id="list_slider_podcasts_a_la_une_1679924454066"></div>
                </div>
            </section>
            <script>
                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                    carouselItem("block_podcasts_a_la_une_1679924454066", ".carousel_item", 3)
                }));
            </script>
            <section class="last_replay_block">
                <h2 class="section_title">Les podcasts originaux</h2>
                <?php foreach($original_podcasts as $podcast): ?>
                <div class="replay_wrapper">
                    <article class="replay_item"><a href="le-titre-a-la-une/index.html" title="<?=$podcast['Title_2']?>">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1"
                                        srcset="<?=base_url('uploads/'.$podcast['Media_Image_4'])?>, <?=base_url('uploads/'.$podcast['Media_Image_4'])?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="1" height="1"
                                        srcset="<?=base_url('uploads/'.$podcast['Media_Image_4'])?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="1" height="1"
                                        srcset="<?=base_url('uploads/'.$podcast['Media_Image_4'])?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="1" height="1"
                                        srcset="<?=base_url('uploads/'.$podcast['Media_Image_4'])?> 2x"
                                        type="image/jpeg"><img width="1" height="1"
                                        src="<?=base_url('uploads/'.$podcast['Media_Image_4'])?>"
                                        alt="<?=$podcast['Title_2']?>">
                                </picture>
                            </figure>
                            <h3 class="replay_item_title"><?=$podcast['Title_2']?></h3>
                        </a>
                    </article>
                   <?php endforeach; ?>
                </div>
            </section>
            <!-- <section class="block block_selection_slider" data="initCarousel" id="block_selection_slider">
                <div class="block_header" id="block_header_slider_selection">
                    <h2 class="block_title">La sélection BFMTV</h2>
                </div>
                <div class="slider_wrapper">
                    <div class="slider_container podcasts_selection_slider big_slide">
                        <article class="content_item carousel_item">
                            <div class="item_container"><a
                                    href="la-question-info/culture-agriculture-enseignement-que-contient-le-budget-2025_EN-202502030841.html"
                                    class="content_item_picture"
                                    title="Culture, agriculture, enseignement… Que contient le budget 2025?">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="1" height="1"
                                            srcset="https://images.bfmtv.com/1LVQqLrNx-VHmBHl4I83yJPjQA8=/341x0:1706x1365/101x0/images/Francois-Bayrou-2026448.webp, https://images.bfmtv.com/-mGN1EaojhP_msc03W_k0ZPaQvs=/341x0:1706x1365/202x0/images/Francois-Bayrou-2026448.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 441px)" width="1" height="1"
                                            srcset="https://images.bfmtv.com/z14zamXfHox4xtD_4e9IIlMvOl8=/341x0:1706x1365/101x0/images/Francois-Bayrou-2026448.jpg, https://images.bfmtv.com/57I9IIMM5OFUZ0YepcE0xRDc9Vw=/341x0:1706x1365/202x0/images/Francois-Bayrou-2026448.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 361px)" width="1" height="1"
                                            srcset="https://images.bfmtv.com/-mGN1EaojhP_msc03W_k0ZPaQvs=/341x0:1706x1365/202x0/images/Francois-Bayrou-2026448.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 361px)" width="1" height="1"
                                            srcset="https://images.bfmtv.com/57I9IIMM5OFUZ0YepcE0xRDc9Vw=/341x0:1706x1365/202x0/images/Francois-Bayrou-2026448.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 321px)" width="1" height="1"
                                            srcset="https://images.bfmtv.com/-mGN1EaojhP_msc03W_k0ZPaQvs=/341x0:1706x1365/202x0/images/Francois-Bayrou-2026448.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 321px)" width="1" height="1"
                                            srcset="https://images.bfmtv.com/57I9IIMM5OFUZ0YepcE0xRDc9Vw=/341x0:1706x1365/202x0/images/Francois-Bayrou-2026448.jpg 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 300px)" width="1" height="1"
                                            srcset="https://images.bfmtv.com/-mGN1EaojhP_msc03W_k0ZPaQvs=/341x0:1706x1365/202x0/images/Francois-Bayrou-2026448.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 300px)" width="1" height="1"
                                            srcset="https://images.bfmtv.com/57I9IIMM5OFUZ0YepcE0xRDc9Vw=/341x0:1706x1365/202x0/images/Francois-Bayrou-2026448.jpg 2x"
                                            type="image/jpeg"><img width="1" height="1"
                                            src="https://images.bfmtv.com/z14zamXfHox4xtD_4e9IIlMvOl8=/341x0:1706x1365/101x0/images/Francois-Bayrou-2026448.jpg"
                                            alt="Culture, agriculture, enseignement… Que contient le budget 2025?">
                                    </picture>
                                </a>
                                <div class="content_item_info"><a
                                        href="la-question-info/culture-agriculture-enseignement-que-contient-le-budget-2025_EN-202502030841.html"
                                        title="Culture, agriculture, enseignement… Que contient le budget 2025?">
                                        <h3 class="content_item_title">Culture, agriculture, enseignement… Que contient le budget 2025?
                                        </h3>
                                    </a>
                                    <div class="podcast_item_infos podcast_wrapper_infos"
                                        data-audio-src="https://altice.simplecastaudio.com/d5c49a09-d2c9-4bd6-936c-564b5af336d7/episodes/144f5c49-fd5f-473d-8612-f6ce09a83717/audio/128/default.mp3?awCollectionId=d5c49a09-d2c9-4bd6-936c-564b5af336d7&amp;awEpisodeId=144f5c49-fd5f-473d-8612-f6ce09a83717&amp;category=News&amp;episode_published_at=2025-02-03T18%3A06%3A33&amp;episode_title=Culture%2C+agriculture%2C+enseignement%E2%80%A6+Que+contient+le+budget+2025%3F&amp;network=228028218708&amp;podcast_title=La+question+info"
                                        data-img-src="https://images.bfmtv.com/sy5tSQpKAaOwsKEmZMUXjWqsTrs=/0x0:0x0/180x0/podcast/podcasts/principale-24_1.png"
                                        data-title="Culture, agriculture, enseignement… Que contient le budget 2025?"
                                        data-id="202502030841" data-podcast-nom="La question info">
                                        <div class="podcast_item_picto" listener="true"><svg viewBox="-12 -10 32 32" width="31"
                                                height="31" fill="#FFF" class="pausing">
                                                <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                            </svg> <svg viewBox="-12 -10 36 36" width="31" height="31" fill="#FFF" class="playing">
                                                <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                            </svg></div><span class="podcast_item_duration">3:08</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item_container"><a
                                    href="la-question-eco/taxe-soda-a-quelle-augmentation-doit-on-s-attendre_EN-202502030842.html"
                                    class="content_item_picture" title="Taxe soda: à quelle augmentation doit-on s'attendre?">
                                    <picture class="content_item_cover">
                                        <source media="(min-width: 992px)"
                                            srcset="https://images.bfmtv.com/JYlFct2Y4RGO86w4J4hFbmBvQWc=/0x0:0x0/101x0/podcast/podcasts/principale-26_1.png, https://images.bfmtv.com/0AOjlSqrtU7DCK_l03AF2-cXJsw=/0x0:0x0/202x0/podcast/podcasts/principale-26_1.png 2x">
                                        <source media="(min-width: 641px)"
                                            srcset="https://images.bfmtv.com/JYlFct2Y4RGO86w4J4hFbmBvQWc=/0x0:0x0/101x0/podcast/podcasts/principale-26_1.png, https://images.bfmtv.com/0AOjlSqrtU7DCK_l03AF2-cXJsw=/0x0:0x0/202x0/podcast/podcasts/principale-26_1.png 2x">
                                        <img
                                            src="https://images.bfmtv.com/JYlFct2Y4RGO86w4J4hFbmBvQWc=/0x0:0x0/101x0/podcast/podcasts/principale-26_1.png"
                                            srcset="https://images.bfmtv.com/JYlFct2Y4RGO86w4J4hFbmBvQWc=/0x0:0x0/101x0/podcast/podcasts/principale-26_1.png, https://images.bfmtv.com/0AOjlSqrtU7DCK_l03AF2-cXJsw=/0x0:0x0/202x0/podcast/podcasts/principale-26_1.png 2x"
                                            alt="Taxe soda: à quelle augmentation doit-on s'attendre?"
                                            title="Taxe soda: à quelle augmentation doit-on s'attendre?">
                                    </picture>
                                </a>
                                <div class="content_item_info"><a
                                        href="la-question-eco/taxe-soda-a-quelle-augmentation-doit-on-s-attendre_EN-202502030842.html"
                                        title="Taxe soda: à quelle augmentation doit-on s'attendre?">
                                        <h3 class="content_item_title">Taxe soda: à quelle augmentation doit-on s'attendre?</h3>
                                    </a>
                                    <div class="podcast_item_infos podcast_wrapper_infos"
                                        data-audio-src="https://altice.simplecastaudio.com/b1116d2c-044a-4ebc-a3cb-6472bad39c1b/episodes/97a49c8a-f808-4510-869c-89e89acdf1fc/audio/128/default.mp3?awCollectionId=b1116d2c-044a-4ebc-a3cb-6472bad39c1b&amp;awEpisodeId=97a49c8a-f808-4510-869c-89e89acdf1fc&amp;category=News%2CBusiness&amp;episode_published_at=2025-02-03T18%3A07%3A39&amp;episode_title=Taxe+soda%3A+%C3%A0+quelle+augmentation+doit-on+s%27attendre%3F&amp;network=228028218708&amp;podcast_title=La+question+%C3%A9co"
                                        data-img-src="https://images.bfmtv.com/Ae4nYI8YzttO-aARBTn4tvtUhco=/0x0:0x0/180x0/podcast/podcasts/principale-26_1.png"
                                        data-title="Taxe soda: à quelle augmentation doit-on s'attendre?" data-id="202502030842"
                                        data-podcast-nom="La question éco">
                                        <div class="podcast_item_picto" listener="true"><svg viewBox="-12 -10 32 32" width="31"
                                                height="31" fill="#FFF" class="pausing">
                                                <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                            </svg> <svg viewBox="-12 -10 36 36" width="31" height="31" fill="#FFF" class="playing">
                                                <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                            </svg></div><span class="podcast_item_duration">2:59</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="content_item carousel_item">
                            <div class="item_container"><a
                                    href="../replay-emissions/l-interview/face-a-face-laurent-wauquiez-04-02_EN-202502040256.html"
                                    class="content_item_picture" title="Face à Face : Laurent Wauquiez - 04/02">
                                    <picture class="content_item_cover">
                                        <source media="(min-width: 992px)"
                                            srcset="https://images.bfmtv.com/8mf3uP-aiC9y_YdspibkowJCI-4=/0x0:0x0/101x0/podcast/podcasts/principale-44_2.jpg, https://images.bfmtv.com/xYutlSeLy1vRJYu8JT7qLsqmzPc=/0x0:0x0/202x0/podcast/podcasts/principale-44_2.jpg 2x">
                                        <source media="(min-width: 641px)"
                                            srcset="https://images.bfmtv.com/8mf3uP-aiC9y_YdspibkowJCI-4=/0x0:0x0/101x0/podcast/podcasts/principale-44_2.jpg, https://images.bfmtv.com/xYutlSeLy1vRJYu8JT7qLsqmzPc=/0x0:0x0/202x0/podcast/podcasts/principale-44_2.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/8mf3uP-aiC9y_YdspibkowJCI-4=/0x0:0x0/101x0/podcast/podcasts/principale-44_2.jpg"
                                            srcset="https://images.bfmtv.com/8mf3uP-aiC9y_YdspibkowJCI-4=/0x0:0x0/101x0/podcast/podcasts/principale-44_2.jpg, https://images.bfmtv.com/xYutlSeLy1vRJYu8JT7qLsqmzPc=/0x0:0x0/202x0/podcast/podcasts/principale-44_2.jpg 2x"
                                            alt="Face à Face : Laurent Wauquiez - 04/02" title="Face à Face : Laurent Wauquiez - 04/02">
                                    </picture>
                                </a>
                                <div class="content_item_info"><a
                                        href="../replay-emissions/l-interview/face-a-face-laurent-wauquiez-04-02_EN-202502040256.html"
                                        title="Face à Face : Laurent Wauquiez - 04/02">
                                        <h3 class="content_item_title">Face à Face : Laurent Wauquiez - 04/02</h3>
                                    </a>
                                    <div class="podcast_item_infos podcast_wrapper_infos"
                                        data-audio-src="https://altice.simplecastaudio.com/758a36a0-c188-43d5-a887-6d2a055fd5fe/episodes/5640dfcd-aaaa-44d9-ae56-90ebf941c7e9/audio/128/default.mp3?awCollectionId=758a36a0-c188-43d5-a887-6d2a055fd5fe&amp;awEpisodeId=5640dfcd-aaaa-44d9-ae56-90ebf941c7e9&amp;category=News&amp;episode_published_at=2025-02-04T07%3A56%3A39&amp;episode_title=Face+%C3%A0+Face+%3A+Laurent+Wauquiez+-+04%2F02&amp;network=243043218706&amp;podcast_title=Face+%C3%A0+Face+"
                                        data-img-src="https://images.bfmtv.com/ArP91FRPJwwIJvvICfnsyiELxco=/0x0:0x0/180x0/podcast/podcasts/principale-44_2.jpg"
                                        data-title="Face à Face : Laurent Wauquiez - 04/02" data-id="202502040256"
                                        data-podcast-nom="Face à Face">
                                        <div class="podcast_item_picto" listener="true"><svg viewBox="-12 -10 32 32" width="31"
                                                height="31" fill="#FFF" class="pausing">
                                                <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                            </svg> <svg viewBox="-12 -10 36 36" width="31" height="31" fill="#FFF" class="playing">
                                                <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                            </svg></div><span class="podcast_item_duration">20:24</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item_container"><a
                                    href="../replay-emissions/focus-premiere/des-actions-symboliques-partout-en-france-18-11_EN-202411180277.html"
                                    class="content_item_picture" title="Des actions symboliques partout en France - 18/11">
                                    <picture class="content_item_cover">
                                        <source media="(min-width: 992px)"
                                            srcset="https://images.bfmtv.com/XdTLZ6-F-R-jDqWQvvBA-bf4qJU=/0x0:0x0/101x0/podcast/podcasts/principale-49_3.png, https://images.bfmtv.com/8532_WVNL5AqI0f3fEzkpqh3bxU=/0x0:0x0/202x0/podcast/podcasts/principale-49_3.png 2x">
                                        <source media="(min-width: 641px)"
                                            srcset="https://images.bfmtv.com/XdTLZ6-F-R-jDqWQvvBA-bf4qJU=/0x0:0x0/101x0/podcast/podcasts/principale-49_3.png, https://images.bfmtv.com/8532_WVNL5AqI0f3fEzkpqh3bxU=/0x0:0x0/202x0/podcast/podcasts/principale-49_3.png 2x">
                                        <img
                                            src="https://images.bfmtv.com/XdTLZ6-F-R-jDqWQvvBA-bf4qJU=/0x0:0x0/101x0/podcast/podcasts/principale-49_3.png"
                                            srcset="https://images.bfmtv.com/XdTLZ6-F-R-jDqWQvvBA-bf4qJU=/0x0:0x0/101x0/podcast/podcasts/principale-49_3.png, https://images.bfmtv.com/8532_WVNL5AqI0f3fEzkpqh3bxU=/0x0:0x0/202x0/podcast/podcasts/principale-49_3.png 2x"
                                            alt="Des actions symboliques partout en France - 18/11"
                                            title="Des actions symboliques partout en France - 18/11">
                                    </picture>
                                </a>
                                <div class="content_item_info"><a
                                        href="../replay-emissions/focus-premiere/des-actions-symboliques-partout-en-france-18-11_EN-202411180277.html"
                                        title="Des actions symboliques partout en France - 18/11">
                                        <h3 class="content_item_title">Des actions symboliques partout en France - 18/11</h3>
                                    </a>
                                    <div class="podcast_item_infos podcast_wrapper_infos"
                                        data-audio-src="https://altice.simplecastaudio.com/03c12730-eff7-4a0c-ac1d-d7a541c52ab4/episodes/e0babca2-82e6-4c9b-87ae-aeedae7e016e/audio/128/default.mp3?awCollectionId=03c12730-eff7-4a0c-ac1d-d7a541c52ab4&amp;awEpisodeId=e0babca2-82e6-4c9b-87ae-aeedae7e016e&amp;category=News&amp;episode_published_at=2024-11-18T07%3A28%3A12&amp;episode_title=Des+actions+symboliques+partout+en+France+-+18%2F11&amp;network=228028218708&amp;podcast_title=7+minutes+pour+comprendre"
                                        data-img-src="https://images.bfmtv.com/1HaFmIFQCVJe-Y1Xw67K-J_nRek=/0x0:0x0/180x0/podcast/podcasts/principale-49_3.png"
                                        data-title="Des actions symboliques partout en France - 18/11" data-id="202411180277"
                                        data-podcast-nom="7 minutes pour comprendre">
                                        <div class="podcast_item_picto" listener="true"><svg viewBox="-12 -10 32 32" width="31"
                                                height="31" fill="#FFF" class="pausing">
                                                <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                            </svg> <svg viewBox="-12 -10 36 36" width="31" height="31" fill="#FFF" class="playing">
                                                <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                            </svg></div><span class="podcast_item_duration">11:28</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="content_item carousel_item">
                            <div class="item_container"><a
                                    href="../replay-emissions/politique-premiere/gouvernement-bayrou-ca-peut-durer-04-02_EN-202502040177.html"
                                    class="content_item_picture" title="Gouvernement Bayrou : ça peut durer ! - 04/02">
                                    <picture class="content_item_cover">
                                        <source media="(min-width: 992px)"
                                            srcset="https://images.bfmtv.com/_pQgPPpNdykw2nfRrY3C5PcEiRs=/0x0:0x0/101x0/podcast/podcasts/principale-59_2.jpg, https://images.bfmtv.com/EOhcUrYO2Y9EzmQuPH8rTEVR05g=/0x0:0x0/202x0/podcast/podcasts/principale-59_2.jpg 2x">
                                        <source media="(min-width: 641px)"
                                            srcset="https://images.bfmtv.com/_pQgPPpNdykw2nfRrY3C5PcEiRs=/0x0:0x0/101x0/podcast/podcasts/principale-59_2.jpg, https://images.bfmtv.com/EOhcUrYO2Y9EzmQuPH8rTEVR05g=/0x0:0x0/202x0/podcast/podcasts/principale-59_2.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/_pQgPPpNdykw2nfRrY3C5PcEiRs=/0x0:0x0/101x0/podcast/podcasts/principale-59_2.jpg"
                                            srcset="https://images.bfmtv.com/_pQgPPpNdykw2nfRrY3C5PcEiRs=/0x0:0x0/101x0/podcast/podcasts/principale-59_2.jpg, https://images.bfmtv.com/EOhcUrYO2Y9EzmQuPH8rTEVR05g=/0x0:0x0/202x0/podcast/podcasts/principale-59_2.jpg 2x"
                                            alt="Gouvernement Bayrou : ça peut durer ! - 04/02"
                                            title="Gouvernement Bayrou : ça peut durer ! - 04/02">
                                    </picture>
                                </a>
                                <div class="content_item_info"><a
                                        href="../replay-emissions/politique-premiere/gouvernement-bayrou-ca-peut-durer-04-02_EN-202502040177.html"
                                        title="Gouvernement Bayrou : ça peut durer ! - 04/02">
                                        <h3 class="content_item_title">Gouvernement Bayrou : ça peut durer ! - 04/02</h3>
                                    </a>
                                    <div class="podcast_item_infos podcast_wrapper_infos"
                                        data-audio-src="https://altice.simplecastaudio.com/21b14608-e9bc-43e0-a72c-ae2e6d80b261/episodes/b7f5167a-5ebf-4908-a3bf-abe9296fea25/audio/128/default.mp3?awCollectionId=21b14608-e9bc-43e0-a72c-ae2e6d80b261&amp;awEpisodeId=b7f5167a-5ebf-4908-a3bf-abe9296fea25&amp;category=TV+%26+Film&amp;episode_published_at=2025-02-04T06%3A57%3A10&amp;episode_title=Gouvernement+Bayrou+%3A+%C3%A7a+peut+durer+%21+-+04%2F02&amp;network=228028218708&amp;podcast_title=Politique+Premi%C3%A8re"
                                        data-img-src="https://images.bfmtv.com/Uv5gsU-3Rax2wjU5bxmhq_k5KAU=/0x0:0x0/180x0/podcast/podcasts/principale-59_2.jpg"
                                        data-title="Gouvernement Bayrou : ça peut durer ! - 04/02" data-id="202502040177"
                                        data-podcast-nom="Politique Première">
                                        <div class="podcast_item_picto" listener="true"><svg viewBox="-12 -10 32 32" width="31"
                                                height="31" fill="#FFF" class="pausing">
                                                <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                            </svg> <svg viewBox="-12 -10 36 36" width="31" height="31" fill="#FFF" class="playing">
                                                <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                            </svg></div><span class="podcast_item_duration">2:54</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item_container"><a
                                    href="../replay-emissions/la-chronique-eco-nicolas-doze/budget-quels-changements-au-quotidien-04-02_EN-202502040071.html"
                                    class="content_item_picture" title="Budget : quels changements au quotidien ? - 04/02">
                                    <picture class="content_item_cover">
                                        <source media="(min-width: 992px)"
                                            srcset="https://images.bfmtv.com/puX5WK7tIbT9RsSr2RcvdlslFfo=/0x0:0x0/101x0/podcast/podcasts/principale-51_2.jpg, https://images.bfmtv.com/80G72PVRmDLN7oGjyd-IhCWaYyI=/0x0:0x0/202x0/podcast/podcasts/principale-51_2.jpg 2x">
                                        <source media="(min-width: 641px)"
                                            srcset="https://images.bfmtv.com/puX5WK7tIbT9RsSr2RcvdlslFfo=/0x0:0x0/101x0/podcast/podcasts/principale-51_2.jpg, https://images.bfmtv.com/80G72PVRmDLN7oGjyd-IhCWaYyI=/0x0:0x0/202x0/podcast/podcasts/principale-51_2.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/puX5WK7tIbT9RsSr2RcvdlslFfo=/0x0:0x0/101x0/podcast/podcasts/principale-51_2.jpg"
                                            srcset="https://images.bfmtv.com/puX5WK7tIbT9RsSr2RcvdlslFfo=/0x0:0x0/101x0/podcast/podcasts/principale-51_2.jpg, https://images.bfmtv.com/80G72PVRmDLN7oGjyd-IhCWaYyI=/0x0:0x0/202x0/podcast/podcasts/principale-51_2.jpg 2x"
                                            alt="Budget : quels changements au quotidien ? - 04/02"
                                            title="Budget : quels changements au quotidien ? - 04/02">
                                    </picture>
                                </a>
                                <div class="content_item_info"><a
                                        href="../replay-emissions/la-chronique-eco-nicolas-doze/budget-quels-changements-au-quotidien-04-02_EN-202502040071.html"
                                        title="Budget : quels changements au quotidien ? - 04/02">
                                        <h3 class="content_item_title">Budget : quels changements au quotidien ? - 04/02</h3>
                                    </a>
                                    <div class="podcast_item_infos podcast_wrapper_infos"
                                        data-audio-src="https://altice.simplecastaudio.com/52cda22f-e018-47e4-b2f8-1444c9446059/episodes/efd2b66b-a0e9-4e26-907c-6559c2a3d159/audio/128/default.mp3?awCollectionId=52cda22f-e018-47e4-b2f8-1444c9446059&amp;awEpisodeId=efd2b66b-a0e9-4e26-907c-6559c2a3d159&amp;category=Business&amp;episode_published_at=2025-02-04T05%3A35%3A30&amp;episode_title=Budget+%3A+quels+changements+au+quotidien+%3F+-+04%2F02&amp;network=228028218708&amp;podcast_title=Doze+d%27%C3%A9co"
                                        data-img-src="https://images.bfmtv.com/mOcdT1DA7f0VbUdDqgHItEjGrFs=/0x0:0x0/180x0/podcast/podcasts/principale-51_2.jpg"
                                        data-title="Budget : quels changements au quotidien ? - 04/02" data-id="202502040071"
                                        data-podcast-nom="Doze d'éco">
                                        <div class="podcast_item_picto" listener="true"><svg viewBox="-12 -10 32 32" width="31"
                                                height="31" fill="#FFF" class="pausing">
                                                <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                            </svg> <svg viewBox="-12 -10 36 36" width="31" height="31" fill="#FFF" class="playing">
                                                <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                            </svg></div><span class="podcast_item_duration">3:30</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section> -->
            <!-- <section class="last_replay_block">
                <h2 class="section_title">Les podcasts replay</h2>
                <div class="replay_wrapper">
                    <article class="replay_item"><a href="../replay-emissions/l-interview/podcast/index.html"
                            title="Face à Face">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/ZTmqfIBFWOWUOUpU0TymTVMApBs=/0x0:1400x1400/187x0/podcast/podcasts/principale-44_2.jpg, https://images.bfmtv.com/SFmxuIjCXoBnLn28loMYWfmDbfc=/0x0:1400x1400/374x0/podcast/podcasts/principale-44_2.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/9XMNKfd_j7pLZUoN7BRmBVbJfTo=/0x0:1400x1400/288x0/podcast/podcasts/principale-44_2.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/9XMNKfd_j7pLZUoN7BRmBVbJfTo=/0x0:1400x1400/288x0/podcast/podcasts/principale-44_2.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/9XMNKfd_j7pLZUoN7BRmBVbJfTo=/0x0:1400x1400/288x0/podcast/podcasts/principale-44_2.jpg 2x"
                                        type="image/jpeg"><img width="1" height="1"
                                        src="https://images.bfmtv.com/ZTmqfIBFWOWUOUpU0TymTVMApBs=/0x0:1400x1400/187x0/podcast/podcasts/principale-44_2.jpg"
                                        alt="Face à Face">
                                </picture>
                            </figure>
                            <h3 class="replay_item_title">Face à Face</h3>
                        </a></article>
                    <article class="replay_item"><a href="../replay-emissions/la-chronique-eco-nicolas-doze/podcast/index.html"
                            title="Doze d'éco">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/RL4WGmXR9qGm9Xi-FirV9xxCIHs=/0x0:1400x1400/187x0/podcast/podcasts/principale-51_2.jpg, https://images.bfmtv.com/IHV5_QmuTD05YVCv4WOsCDxuceE=/0x0:1400x1400/374x0/podcast/podcasts/principale-51_2.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/hik3O9eykn1-p68CWmxVDiEElBI=/0x0:1400x1400/288x0/podcast/podcasts/principale-51_2.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/hik3O9eykn1-p68CWmxVDiEElBI=/0x0:1400x1400/288x0/podcast/podcasts/principale-51_2.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/hik3O9eykn1-p68CWmxVDiEElBI=/0x0:1400x1400/288x0/podcast/podcasts/principale-51_2.jpg 2x"
                                        type="image/jpeg"><img width="1" height="1"
                                        src="https://images.bfmtv.com/RL4WGmXR9qGm9Xi-FirV9xxCIHs=/0x0:1400x1400/187x0/podcast/podcasts/principale-51_2.jpg"
                                        alt="Doze d'éco">
                                </picture>
                            </figure>
                            <h3 class="replay_item_title">Doze d'éco</h3>
                        </a></article>
                    <article class="replay_item"><a href="../replay-emissions/politique-premiere/podcast/index.html"
                            title="Politique Première">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Mpn8ijbyp0mKb23GfApshcMP1yI=/0x0:1400x1400/187x0/podcast/podcasts/principale-59_2.jpg, https://images.bfmtv.com/0DEdiJwKOIhQC0r9JPSeTG_lpZM=/0x0:1400x1400/374x0/podcast/podcasts/principale-59_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/HAcguMI0emCJNN-vixUrscNDmiA=/0x0:1400x1400/288x0/podcast/podcasts/principale-59_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/HAcguMI0emCJNN-vixUrscNDmiA=/0x0:1400x1400/288x0/podcast/podcasts/principale-59_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/HAcguMI0emCJNN-vixUrscNDmiA=/0x0:1400x1400/288x0/podcast/podcasts/principale-59_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/Mpn8ijbyp0mKb23GfApshcMP1yI=/0x0:1400x1400/187x0/podcast/podcasts/principale-59_2.jpg"
                                        src="https://images.bfmtv.com/Mpn8ijbyp0mKb23GfApshcMP1yI=/0x0:1400x1400/187x0/podcast/podcasts/principale-59_2.jpg"
                                        alt="Politique Première" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/Mpn8ijbyp0mKb23GfApshcMP1yI=/0x0:1400x1400/187x0/podcast/podcasts/principale-59_2.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/Mpn8ijbyp0mKb23GfApshcMP1yI=/0x0:1400x1400/187x0/podcast/podcasts/principale-59_2.jpg, https://images.bfmtv.com/0DEdiJwKOIhQC0r9JPSeTG_lpZM=/0x0:1400x1400/374x0/podcast/podcasts/principale-59_2.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/Dl1kiqXwYzMdItZrzsxow9pcLLo=/0x0:1400x1400/144x0/podcast/podcasts/principale-59_2.jpg, https://images.bfmtv.com/HAcguMI0emCJNN-vixUrscNDmiA=/0x0:1400x1400/288x0/podcast/podcasts/principale-59_2.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/Dl1kiqXwYzMdItZrzsxow9pcLLo=/0x0:1400x1400/144x0/podcast/podcasts/principale-59_2.jpg, https://images.bfmtv.com/HAcguMI0emCJNN-vixUrscNDmiA=/0x0:1400x1400/288x0/podcast/podcasts/principale-59_2.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/Dl1kiqXwYzMdItZrzsxow9pcLLo=/0x0:1400x1400/144x0/podcast/podcasts/principale-59_2.jpg, https://images.bfmtv.com/HAcguMI0emCJNN-vixUrscNDmiA=/0x0:1400x1400/288x0/podcast/podcasts/principale-59_2.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/Mpn8ijbyp0mKb23GfApshcMP1yI=/0x0:1400x1400/187x0/podcast/podcasts/principale-59_2.jpg"
                                            alt="Politique Première">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Politique Première</h3>
                        </a></article>
                    <article class="replay_item"><a href="../replay-emissions/apolline-de-9-a-10/podcast/index.html"
                            title="Apolline de 9 à 10">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Ucbu55wMtFKm-RaqXS4QG_IxDBA=/0x0:1400x1400/187x0/podcast/podcasts/principale-473_1.jpg, https://images.bfmtv.com/KF3nH2f1N7CYRVajRgHajqPWJZo=/0x0:1400x1400/374x0/podcast/podcasts/principale-473_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/28C3brdi9e-IpES-Ta_bV3ZoFpY=/0x0:1400x1400/288x0/podcast/podcasts/principale-473_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/28C3brdi9e-IpES-Ta_bV3ZoFpY=/0x0:1400x1400/288x0/podcast/podcasts/principale-473_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/28C3brdi9e-IpES-Ta_bV3ZoFpY=/0x0:1400x1400/288x0/podcast/podcasts/principale-473_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/Ucbu55wMtFKm-RaqXS4QG_IxDBA=/0x0:1400x1400/187x0/podcast/podcasts/principale-473_1.jpg"
                                        src="https://images.bfmtv.com/Ucbu55wMtFKm-RaqXS4QG_IxDBA=/0x0:1400x1400/187x0/podcast/podcasts/principale-473_1.jpg"
                                        alt="Apolline de 9 à 10" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/Ucbu55wMtFKm-RaqXS4QG_IxDBA=/0x0:1400x1400/187x0/podcast/podcasts/principale-473_1.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/Ucbu55wMtFKm-RaqXS4QG_IxDBA=/0x0:1400x1400/187x0/podcast/podcasts/principale-473_1.jpg, https://images.bfmtv.com/KF3nH2f1N7CYRVajRgHajqPWJZo=/0x0:1400x1400/374x0/podcast/podcasts/principale-473_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/GI81rgmSZcfkXFdU152GOrqjcOc=/0x0:1400x1400/144x0/podcast/podcasts/principale-473_1.jpg, https://images.bfmtv.com/28C3brdi9e-IpES-Ta_bV3ZoFpY=/0x0:1400x1400/288x0/podcast/podcasts/principale-473_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/GI81rgmSZcfkXFdU152GOrqjcOc=/0x0:1400x1400/144x0/podcast/podcasts/principale-473_1.jpg, https://images.bfmtv.com/28C3brdi9e-IpES-Ta_bV3ZoFpY=/0x0:1400x1400/288x0/podcast/podcasts/principale-473_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/GI81rgmSZcfkXFdU152GOrqjcOc=/0x0:1400x1400/144x0/podcast/podcasts/principale-473_1.jpg, https://images.bfmtv.com/28C3brdi9e-IpES-Ta_bV3ZoFpY=/0x0:1400x1400/288x0/podcast/podcasts/principale-473_1.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/Ucbu55wMtFKm-RaqXS4QG_IxDBA=/0x0:1400x1400/187x0/podcast/podcasts/principale-473_1.jpg"
                                            alt="Apolline de 9 à 10">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Apolline de 9 à 10</h3>
                        </a></article>
                    <article class="replay_item"><a href="../replay-emissions/bfm-story/podcast/index.html" title="BFM Story">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/JZ8cEaPb3FhrYniFL2eZhzhacbE=/0x0:1400x1400/187x0/podcast/podcasts/principale-260_3.jpg, https://images.bfmtv.com/BKPgvq7ZMq1o8--t0T3b3DfmdDI=/0x0:1400x1400/374x0/podcast/podcasts/principale-260_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/YI-HJvr7hyzq8DXVE7P7rXKHI1g=/0x0:1400x1400/288x0/podcast/podcasts/principale-260_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/YI-HJvr7hyzq8DXVE7P7rXKHI1g=/0x0:1400x1400/288x0/podcast/podcasts/principale-260_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/YI-HJvr7hyzq8DXVE7P7rXKHI1g=/0x0:1400x1400/288x0/podcast/podcasts/principale-260_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/JZ8cEaPb3FhrYniFL2eZhzhacbE=/0x0:1400x1400/187x0/podcast/podcasts/principale-260_3.jpg"
                                        src="https://images.bfmtv.com/JZ8cEaPb3FhrYniFL2eZhzhacbE=/0x0:1400x1400/187x0/podcast/podcasts/principale-260_3.jpg"
                                        alt="BFM Story" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/JZ8cEaPb3FhrYniFL2eZhzhacbE=/0x0:1400x1400/187x0/podcast/podcasts/principale-260_3.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/JZ8cEaPb3FhrYniFL2eZhzhacbE=/0x0:1400x1400/187x0/podcast/podcasts/principale-260_3.jpg, https://images.bfmtv.com/BKPgvq7ZMq1o8--t0T3b3DfmdDI=/0x0:1400x1400/374x0/podcast/podcasts/principale-260_3.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/Sh_hdqZc_4rzBxwGhdmH2DF-T9c=/0x0:1400x1400/144x0/podcast/podcasts/principale-260_3.jpg, https://images.bfmtv.com/YI-HJvr7hyzq8DXVE7P7rXKHI1g=/0x0:1400x1400/288x0/podcast/podcasts/principale-260_3.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/Sh_hdqZc_4rzBxwGhdmH2DF-T9c=/0x0:1400x1400/144x0/podcast/podcasts/principale-260_3.jpg, https://images.bfmtv.com/YI-HJvr7hyzq8DXVE7P7rXKHI1g=/0x0:1400x1400/288x0/podcast/podcasts/principale-260_3.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/Sh_hdqZc_4rzBxwGhdmH2DF-T9c=/0x0:1400x1400/144x0/podcast/podcasts/principale-260_3.jpg, https://images.bfmtv.com/YI-HJvr7hyzq8DXVE7P7rXKHI1g=/0x0:1400x1400/288x0/podcast/podcasts/principale-260_3.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/JZ8cEaPb3FhrYniFL2eZhzhacbE=/0x0:1400x1400/187x0/podcast/podcasts/principale-260_3.jpg"
                                            alt="BFM Story">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">BFM Story</h3>
                        </a></article>
                    <article class="replay_item"><a href="../replay-emissions/tout-le-monde-veut-savoir/podcast/index.html"
                            title="Tout le monde veut savoir">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Gy53pgd-XUwWMs6a6lDFkSoqoE0=/0x0:1400x1400/187x0/podcast/podcasts/principale-421_3.jpg, https://images.bfmtv.com/ndOBzJPnKHdPj_x73zfs4qQHPXg=/0x0:1400x1400/374x0/podcast/podcasts/principale-421_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/QSNnQWHT0jQjEJ3Ex5iVd0WTz4w=/0x0:1400x1400/288x0/podcast/podcasts/principale-421_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/QSNnQWHT0jQjEJ3Ex5iVd0WTz4w=/0x0:1400x1400/288x0/podcast/podcasts/principale-421_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/QSNnQWHT0jQjEJ3Ex5iVd0WTz4w=/0x0:1400x1400/288x0/podcast/podcasts/principale-421_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/Gy53pgd-XUwWMs6a6lDFkSoqoE0=/0x0:1400x1400/187x0/podcast/podcasts/principale-421_3.jpg"
                                        src="https://images.bfmtv.com/Gy53pgd-XUwWMs6a6lDFkSoqoE0=/0x0:1400x1400/187x0/podcast/podcasts/principale-421_3.jpg"
                                        alt="Tout le monde veut savoir" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/Gy53pgd-XUwWMs6a6lDFkSoqoE0=/0x0:1400x1400/187x0/podcast/podcasts/principale-421_3.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/Gy53pgd-XUwWMs6a6lDFkSoqoE0=/0x0:1400x1400/187x0/podcast/podcasts/principale-421_3.jpg, https://images.bfmtv.com/ndOBzJPnKHdPj_x73zfs4qQHPXg=/0x0:1400x1400/374x0/podcast/podcasts/principale-421_3.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/jPaXwsEkdQe2Z5o0RTXHNouumuQ=/0x0:1400x1400/144x0/podcast/podcasts/principale-421_3.jpg, https://images.bfmtv.com/QSNnQWHT0jQjEJ3Ex5iVd0WTz4w=/0x0:1400x1400/288x0/podcast/podcasts/principale-421_3.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/jPaXwsEkdQe2Z5o0RTXHNouumuQ=/0x0:1400x1400/144x0/podcast/podcasts/principale-421_3.jpg, https://images.bfmtv.com/QSNnQWHT0jQjEJ3Ex5iVd0WTz4w=/0x0:1400x1400/288x0/podcast/podcasts/principale-421_3.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/jPaXwsEkdQe2Z5o0RTXHNouumuQ=/0x0:1400x1400/144x0/podcast/podcasts/principale-421_3.jpg, https://images.bfmtv.com/QSNnQWHT0jQjEJ3Ex5iVd0WTz4w=/0x0:1400x1400/288x0/podcast/podcasts/principale-421_3.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/Gy53pgd-XUwWMs6a6lDFkSoqoE0=/0x0:1400x1400/187x0/podcast/podcasts/principale-421_3.jpg"
                                            alt="Tout le monde veut savoir">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Tout le monde veut savoir</h3>
                        </a></article>
                    <article class="replay_item"><a href="../replay-emissions/22h-max/podcast/index.html"
                            title="Perrine jusqu'à minuit">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/jDNYY3UHQShwUu3tVEiURrrS9BU=/0x0:1400x1400/187x0/podcast/podcasts/principale-70_4.jpg, https://images.bfmtv.com/lTHLPiM1R3ovP-bMKo5wuV7uLrI=/0x0:1400x1400/374x0/podcast/podcasts/principale-70_4.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/0RaSdZrGTdqGwuDbM4WqdgXZPdY=/0x0:1400x1400/288x0/podcast/podcasts/principale-70_4.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/0RaSdZrGTdqGwuDbM4WqdgXZPdY=/0x0:1400x1400/288x0/podcast/podcasts/principale-70_4.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/0RaSdZrGTdqGwuDbM4WqdgXZPdY=/0x0:1400x1400/288x0/podcast/podcasts/principale-70_4.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/jDNYY3UHQShwUu3tVEiURrrS9BU=/0x0:1400x1400/187x0/podcast/podcasts/principale-70_4.jpg"
                                        src="https://images.bfmtv.com/jDNYY3UHQShwUu3tVEiURrrS9BU=/0x0:1400x1400/187x0/podcast/podcasts/principale-70_4.jpg"
                                        alt="Perrine jusqu'à minuit" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/jDNYY3UHQShwUu3tVEiURrrS9BU=/0x0:1400x1400/187x0/podcast/podcasts/principale-70_4.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/jDNYY3UHQShwUu3tVEiURrrS9BU=/0x0:1400x1400/187x0/podcast/podcasts/principale-70_4.jpg, https://images.bfmtv.com/lTHLPiM1R3ovP-bMKo5wuV7uLrI=/0x0:1400x1400/374x0/podcast/podcasts/principale-70_4.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/uh_6YnsJ9EeOh2sw608UqeMrwDw=/0x0:1400x1400/144x0/podcast/podcasts/principale-70_4.jpg, https://images.bfmtv.com/0RaSdZrGTdqGwuDbM4WqdgXZPdY=/0x0:1400x1400/288x0/podcast/podcasts/principale-70_4.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/uh_6YnsJ9EeOh2sw608UqeMrwDw=/0x0:1400x1400/144x0/podcast/podcasts/principale-70_4.jpg, https://images.bfmtv.com/0RaSdZrGTdqGwuDbM4WqdgXZPdY=/0x0:1400x1400/288x0/podcast/podcasts/principale-70_4.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/uh_6YnsJ9EeOh2sw608UqeMrwDw=/0x0:1400x1400/144x0/podcast/podcasts/principale-70_4.jpg, https://images.bfmtv.com/0RaSdZrGTdqGwuDbM4WqdgXZPdY=/0x0:1400x1400/288x0/podcast/podcasts/principale-70_4.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/jDNYY3UHQShwUu3tVEiURrrS9BU=/0x0:1400x1400/187x0/podcast/podcasts/principale-70_4.jpg"
                                            alt="Perrine jusqu&#39;à minuit">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Perrine jusqu'à minuit</h3>
                        </a></article>
                    <article class="replay_item"><a href="../replay-emissions/20h-bfm/podcast/index.html" title="20H BFM">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/tmr1zDpT4nFrjAzB5pCURhP8g4M=/0x0:1400x1400/187x0/podcast/podcasts/principale-472_1.jpg, https://images.bfmtv.com/bzO6bGicHcRyclk9TgaMi9cnaJc=/0x0:1400x1400/374x0/podcast/podcasts/principale-472_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/OLsIS826SCqK1AXfDQrEX9sFBQ0=/0x0:1400x1400/288x0/podcast/podcasts/principale-472_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/OLsIS826SCqK1AXfDQrEX9sFBQ0=/0x0:1400x1400/288x0/podcast/podcasts/principale-472_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/OLsIS826SCqK1AXfDQrEX9sFBQ0=/0x0:1400x1400/288x0/podcast/podcasts/principale-472_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/tmr1zDpT4nFrjAzB5pCURhP8g4M=/0x0:1400x1400/187x0/podcast/podcasts/principale-472_1.jpg"
                                        src="https://images.bfmtv.com/tmr1zDpT4nFrjAzB5pCURhP8g4M=/0x0:1400x1400/187x0/podcast/podcasts/principale-472_1.jpg"
                                        alt="20H BFM" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/tmr1zDpT4nFrjAzB5pCURhP8g4M=/0x0:1400x1400/187x0/podcast/podcasts/principale-472_1.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/tmr1zDpT4nFrjAzB5pCURhP8g4M=/0x0:1400x1400/187x0/podcast/podcasts/principale-472_1.jpg, https://images.bfmtv.com/bzO6bGicHcRyclk9TgaMi9cnaJc=/0x0:1400x1400/374x0/podcast/podcasts/principale-472_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/VXedQ5eFyfi_LJ7VCrckbbw_VwY=/0x0:1400x1400/144x0/podcast/podcasts/principale-472_1.jpg, https://images.bfmtv.com/OLsIS826SCqK1AXfDQrEX9sFBQ0=/0x0:1400x1400/288x0/podcast/podcasts/principale-472_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/VXedQ5eFyfi_LJ7VCrckbbw_VwY=/0x0:1400x1400/144x0/podcast/podcasts/principale-472_1.jpg, https://images.bfmtv.com/OLsIS826SCqK1AXfDQrEX9sFBQ0=/0x0:1400x1400/288x0/podcast/podcasts/principale-472_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/VXedQ5eFyfi_LJ7VCrckbbw_VwY=/0x0:1400x1400/144x0/podcast/podcasts/principale-472_1.jpg, https://images.bfmtv.com/OLsIS826SCqK1AXfDQrEX9sFBQ0=/0x0:1400x1400/288x0/podcast/podcasts/principale-472_1.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/tmr1zDpT4nFrjAzB5pCURhP8g4M=/0x0:1400x1400/187x0/podcast/podcasts/principale-472_1.jpg"
                                            alt="20H BFM">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">20H BFM</h3>
                        </a></article>
                    <article class="replay_item"><a href="../replay-emissions/face-a-duhamel/podcast/index.html"
                            title="Face à Duhamel">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/mXQRelWu70FG1bjChOWbPhvE3N0=/0x0:1400x1400/187x0/podcast/podcasts/principale-84_4.jpg, https://images.bfmtv.com/wKMivbi56B7E8XY87l6grtYar80=/0x0:1400x1400/374x0/podcast/podcasts/principale-84_4.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Xad1yFEjVJkCb-16BTTxxvcYRt4=/0x0:1400x1400/288x0/podcast/podcasts/principale-84_4.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Xad1yFEjVJkCb-16BTTxxvcYRt4=/0x0:1400x1400/288x0/podcast/podcasts/principale-84_4.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Xad1yFEjVJkCb-16BTTxxvcYRt4=/0x0:1400x1400/288x0/podcast/podcasts/principale-84_4.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/mXQRelWu70FG1bjChOWbPhvE3N0=/0x0:1400x1400/187x0/podcast/podcasts/principale-84_4.jpg"
                                        src="https://images.bfmtv.com/mXQRelWu70FG1bjChOWbPhvE3N0=/0x0:1400x1400/187x0/podcast/podcasts/principale-84_4.jpg"
                                        alt="Face à Duhamel" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/mXQRelWu70FG1bjChOWbPhvE3N0=/0x0:1400x1400/187x0/podcast/podcasts/principale-84_4.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/mXQRelWu70FG1bjChOWbPhvE3N0=/0x0:1400x1400/187x0/podcast/podcasts/principale-84_4.jpg, https://images.bfmtv.com/wKMivbi56B7E8XY87l6grtYar80=/0x0:1400x1400/374x0/podcast/podcasts/principale-84_4.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/MgE4J4vT4FnQogx_NUOgy6_eVhI=/0x0:1400x1400/144x0/podcast/podcasts/principale-84_4.jpg, https://images.bfmtv.com/Xad1yFEjVJkCb-16BTTxxvcYRt4=/0x0:1400x1400/288x0/podcast/podcasts/principale-84_4.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/MgE4J4vT4FnQogx_NUOgy6_eVhI=/0x0:1400x1400/144x0/podcast/podcasts/principale-84_4.jpg, https://images.bfmtv.com/Xad1yFEjVJkCb-16BTTxxvcYRt4=/0x0:1400x1400/288x0/podcast/podcasts/principale-84_4.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/MgE4J4vT4FnQogx_NUOgy6_eVhI=/0x0:1400x1400/144x0/podcast/podcasts/principale-84_4.jpg, https://images.bfmtv.com/Xad1yFEjVJkCb-16BTTxxvcYRt4=/0x0:1400x1400/288x0/podcast/podcasts/principale-84_4.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/mXQRelWu70FG1bjChOWbPhvE3N0=/0x0:1400x1400/187x0/podcast/podcasts/principale-84_4.jpg"
                                            alt="Face à Duhamel">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Face à Duhamel</h3>
                        </a></article>
                    <article class="replay_item"><a href="../replay-emissions/bfm-politique/podcast/index.html"
                            title="BFM Politique">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/_VLyAu4iYzwKhRNt7QLIPEv-0zg=/0x0:1400x1400/187x0/podcast/podcasts/principale-88_3.jpg, https://images.bfmtv.com/9BQlxfuEbjzGx9NL79OzYJc8MOc=/0x0:1400x1400/374x0/podcast/podcasts/principale-88_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/IOPJVnNdLxMru6wx5hE62VRvQEI=/0x0:1400x1400/288x0/podcast/podcasts/principale-88_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/IOPJVnNdLxMru6wx5hE62VRvQEI=/0x0:1400x1400/288x0/podcast/podcasts/principale-88_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/IOPJVnNdLxMru6wx5hE62VRvQEI=/0x0:1400x1400/288x0/podcast/podcasts/principale-88_3.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/_VLyAu4iYzwKhRNt7QLIPEv-0zg=/0x0:1400x1400/187x0/podcast/podcasts/principale-88_3.jpg"
                                        src="https://images.bfmtv.com/_VLyAu4iYzwKhRNt7QLIPEv-0zg=/0x0:1400x1400/187x0/podcast/podcasts/principale-88_3.jpg"
                                        alt="BFM Politique" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/_VLyAu4iYzwKhRNt7QLIPEv-0zg=/0x0:1400x1400/187x0/podcast/podcasts/principale-88_3.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/_VLyAu4iYzwKhRNt7QLIPEv-0zg=/0x0:1400x1400/187x0/podcast/podcasts/principale-88_3.jpg, https://images.bfmtv.com/9BQlxfuEbjzGx9NL79OzYJc8MOc=/0x0:1400x1400/374x0/podcast/podcasts/principale-88_3.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/VXfNZ1-KrliLgcV9xpLPec6vibs=/0x0:1400x1400/144x0/podcast/podcasts/principale-88_3.jpg, https://images.bfmtv.com/IOPJVnNdLxMru6wx5hE62VRvQEI=/0x0:1400x1400/288x0/podcast/podcasts/principale-88_3.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/VXfNZ1-KrliLgcV9xpLPec6vibs=/0x0:1400x1400/144x0/podcast/podcasts/principale-88_3.jpg, https://images.bfmtv.com/IOPJVnNdLxMru6wx5hE62VRvQEI=/0x0:1400x1400/288x0/podcast/podcasts/principale-88_3.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/VXfNZ1-KrliLgcV9xpLPec6vibs=/0x0:1400x1400/144x0/podcast/podcasts/principale-88_3.jpg, https://images.bfmtv.com/IOPJVnNdLxMru6wx5hE62VRvQEI=/0x0:1400x1400/288x0/podcast/podcasts/principale-88_3.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/_VLyAu4iYzwKhRNt7QLIPEv-0zg=/0x0:1400x1400/187x0/podcast/podcasts/principale-88_3.jpg"
                                            alt="BFM Politique">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">BFM Politique</h3>
                        </a></article>
                    <article class="replay_item"><a href="../replay-emissions/affaire-suivante/podcast/index.html"
                            title="Affaire suivante">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/EdtJJX55xklK3Rhnxx82wz5kYtE=/0x0:1400x1400/187x0/podcast/podcasts/principale-103_2.jpg, https://images.bfmtv.com/HcxQ76d9Uz7yMlYwKXjVvYVDy10=/0x0:1400x1400/374x0/podcast/podcasts/principale-103_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Gi5Mn6ZsDpZ-HwBDvE68EgIHulA=/0x0:1400x1400/288x0/podcast/podcasts/principale-103_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Gi5Mn6ZsDpZ-HwBDvE68EgIHulA=/0x0:1400x1400/288x0/podcast/podcasts/principale-103_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Gi5Mn6ZsDpZ-HwBDvE68EgIHulA=/0x0:1400x1400/288x0/podcast/podcasts/principale-103_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/EdtJJX55xklK3Rhnxx82wz5kYtE=/0x0:1400x1400/187x0/podcast/podcasts/principale-103_2.jpg"
                                        src="https://images.bfmtv.com/EdtJJX55xklK3Rhnxx82wz5kYtE=/0x0:1400x1400/187x0/podcast/podcasts/principale-103_2.jpg"
                                        alt="Affaire suivante" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/EdtJJX55xklK3Rhnxx82wz5kYtE=/0x0:1400x1400/187x0/podcast/podcasts/principale-103_2.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/EdtJJX55xklK3Rhnxx82wz5kYtE=/0x0:1400x1400/187x0/podcast/podcasts/principale-103_2.jpg, https://images.bfmtv.com/HcxQ76d9Uz7yMlYwKXjVvYVDy10=/0x0:1400x1400/374x0/podcast/podcasts/principale-103_2.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/zZ2VVG5VgvAr37paZVVOVsLb-bs=/0x0:1400x1400/144x0/podcast/podcasts/principale-103_2.jpg, https://images.bfmtv.com/Gi5Mn6ZsDpZ-HwBDvE68EgIHulA=/0x0:1400x1400/288x0/podcast/podcasts/principale-103_2.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/zZ2VVG5VgvAr37paZVVOVsLb-bs=/0x0:1400x1400/144x0/podcast/podcasts/principale-103_2.jpg, https://images.bfmtv.com/Gi5Mn6ZsDpZ-HwBDvE68EgIHulA=/0x0:1400x1400/288x0/podcast/podcasts/principale-103_2.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/zZ2VVG5VgvAr37paZVVOVsLb-bs=/0x0:1400x1400/144x0/podcast/podcasts/principale-103_2.jpg, https://images.bfmtv.com/Gi5Mn6ZsDpZ-HwBDvE68EgIHulA=/0x0:1400x1400/288x0/podcast/podcasts/principale-103_2.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/EdtJJX55xklK3Rhnxx82wz5kYtE=/0x0:1400x1400/187x0/podcast/podcasts/principale-103_2.jpg"
                                            alt="Affaire suivante">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Affaire suivante</h3>
                        </a></article>
                    <article class="replay_item"><a
                            href="../replay-emissions/c-est-pas-tous-les-jours-dimanche/podcast/index.html"
                            title="C'est pas tous les jours dimanche">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/F4EWTpo0XJlptNaIw_Vu35cVNJg=/0x0:1400x1400/187x0/podcast/podcasts/principale-338_1.jpg, https://images.bfmtv.com/YCoaKPPOb22XcS3uXUNAgf2mLg4=/0x0:1400x1400/374x0/podcast/podcasts/principale-338_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/FfODCD9qwMiFtGGZDO6yv3eL4pk=/0x0:1400x1400/288x0/podcast/podcasts/principale-338_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/FfODCD9qwMiFtGGZDO6yv3eL4pk=/0x0:1400x1400/288x0/podcast/podcasts/principale-338_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/FfODCD9qwMiFtGGZDO6yv3eL4pk=/0x0:1400x1400/288x0/podcast/podcasts/principale-338_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/F4EWTpo0XJlptNaIw_Vu35cVNJg=/0x0:1400x1400/187x0/podcast/podcasts/principale-338_1.jpg"
                                        src="https://images.bfmtv.com/F4EWTpo0XJlptNaIw_Vu35cVNJg=/0x0:1400x1400/187x0/podcast/podcasts/principale-338_1.jpg"
                                        alt="C'est pas tous les jours dimanche" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/F4EWTpo0XJlptNaIw_Vu35cVNJg=/0x0:1400x1400/187x0/podcast/podcasts/principale-338_1.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/F4EWTpo0XJlptNaIw_Vu35cVNJg=/0x0:1400x1400/187x0/podcast/podcasts/principale-338_1.jpg, https://images.bfmtv.com/YCoaKPPOb22XcS3uXUNAgf2mLg4=/0x0:1400x1400/374x0/podcast/podcasts/principale-338_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/5dp9E64H7bj0DlVYb9teegdgQrc=/0x0:1400x1400/144x0/podcast/podcasts/principale-338_1.jpg, https://images.bfmtv.com/FfODCD9qwMiFtGGZDO6yv3eL4pk=/0x0:1400x1400/288x0/podcast/podcasts/principale-338_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/5dp9E64H7bj0DlVYb9teegdgQrc=/0x0:1400x1400/144x0/podcast/podcasts/principale-338_1.jpg, https://images.bfmtv.com/FfODCD9qwMiFtGGZDO6yv3eL4pk=/0x0:1400x1400/288x0/podcast/podcasts/principale-338_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/5dp9E64H7bj0DlVYb9teegdgQrc=/0x0:1400x1400/144x0/podcast/podcasts/principale-338_1.jpg, https://images.bfmtv.com/FfODCD9qwMiFtGGZDO6yv3eL4pk=/0x0:1400x1400/288x0/podcast/podcasts/principale-338_1.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/F4EWTpo0XJlptNaIw_Vu35cVNJg=/0x0:1400x1400/187x0/podcast/podcasts/principale-338_1.jpg"
                                            alt="C&#39;est pas tous les jours dimanche">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">C'est pas tous les jours dimanche</h3>
                        </a></article>
                </div>
            </section> -->
            <!-- <section class="last_replay_block">
                <h2 class="section_title">Les podcasts Régions</h2>
                <div class="replay_wrapper">
                    <article class="replay_item"><a href="../lyon/replay-emissions/lyon-politiques/podcast/index.html"
                            title="Lyon Politiques">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/HTYr1CVmfb08PUw11s-k4NAeXHA=/0x0:1400x1400/187x0/podcast/podcasts/principale-187_1.jpg, https://images.bfmtv.com/09GcwRRQYtB1mCGyQHk2W74ANIk=/0x0:1400x1400/374x0/podcast/podcasts/principale-187_1.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/pnsPf8GjvJ87EaQTagEPc-bzkMI=/0x0:1400x1400/288x0/podcast/podcasts/principale-187_1.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/pnsPf8GjvJ87EaQTagEPc-bzkMI=/0x0:1400x1400/288x0/podcast/podcasts/principale-187_1.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/pnsPf8GjvJ87EaQTagEPc-bzkMI=/0x0:1400x1400/288x0/podcast/podcasts/principale-187_1.jpg 2x"
                                        type="image/jpeg"><img width="1" height="1"
                                        src="https://images.bfmtv.com/HTYr1CVmfb08PUw11s-k4NAeXHA=/0x0:1400x1400/187x0/podcast/podcasts/principale-187_1.jpg"
                                        alt="Lyon Politiques">
                                </picture>
                            </figure>
                            <h3 class="replay_item_title">Lyon Politiques</h3>
                        </a></article>
                    <article class="replay_item"><a href="../paris/replay-emissions/capitale-2020/podcast/index.html"
                            title="Île-de-France Politiques">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/NzFLMWTVY_blVGiE7rptwUF7ReA=/0x0:1400x1400/187x0/podcast/podcasts/principale-193.jpg, https://images.bfmtv.com/y1MYCQIN47a-Hc63TsoBwq1fm7I=/0x0:1400x1400/374x0/podcast/podcasts/principale-193.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/HoNJPKhmQVUi6sSC7UDFnT-I9i4=/0x0:1400x1400/288x0/podcast/podcasts/principale-193.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/HoNJPKhmQVUi6sSC7UDFnT-I9i4=/0x0:1400x1400/288x0/podcast/podcasts/principale-193.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/HoNJPKhmQVUi6sSC7UDFnT-I9i4=/0x0:1400x1400/288x0/podcast/podcasts/principale-193.jpg 2x"
                                        type="image/jpeg"><img width="1" height="1"
                                        src="https://images.bfmtv.com/NzFLMWTVY_blVGiE7rptwUF7ReA=/0x0:1400x1400/187x0/podcast/podcasts/principale-193.jpg"
                                        alt="Île-de-France Politiques">
                                </picture>
                            </figure>
                            <h3 class="replay_item_title">Île-de-France Politiques</h3>
                        </a></article>
                    <article class="replay_item"><a href="../grand-lille/replay-emissions/lille-politiques/podcast/index.html"
                            title="Nord Politiques">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/v85QV6vJbhVPej2X5fV1MqcKsH8=/0x0:1400x1400/187x0/podcast/podcasts/principale-197.jpg, https://images.bfmtv.com/N13qUG8XoMABKdg65A4ipOCHzk0=/0x0:1400x1400/374x0/podcast/podcasts/principale-197.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/pj6rvGt99z1TOcpmnQDbZKiUPQg=/0x0:1400x1400/288x0/podcast/podcasts/principale-197.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/pj6rvGt99z1TOcpmnQDbZKiUPQg=/0x0:1400x1400/288x0/podcast/podcasts/principale-197.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/pj6rvGt99z1TOcpmnQDbZKiUPQg=/0x0:1400x1400/288x0/podcast/podcasts/principale-197.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/v85QV6vJbhVPej2X5fV1MqcKsH8=/0x0:1400x1400/187x0/podcast/podcasts/principale-197.jpg"
                                        src="https://images.bfmtv.com/v85QV6vJbhVPej2X5fV1MqcKsH8=/0x0:1400x1400/187x0/podcast/podcasts/principale-197.jpg"
                                        alt="Nord Politiques" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/v85QV6vJbhVPej2X5fV1MqcKsH8=/0x0:1400x1400/187x0/podcast/podcasts/principale-197.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/v85QV6vJbhVPej2X5fV1MqcKsH8=/0x0:1400x1400/187x0/podcast/podcasts/principale-197.jpg, https://images.bfmtv.com/N13qUG8XoMABKdg65A4ipOCHzk0=/0x0:1400x1400/374x0/podcast/podcasts/principale-197.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/m_G8RRGi56Lz71JT-7GaTHItSog=/0x0:1400x1400/144x0/podcast/podcasts/principale-197.jpg, https://images.bfmtv.com/pj6rvGt99z1TOcpmnQDbZKiUPQg=/0x0:1400x1400/288x0/podcast/podcasts/principale-197.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/m_G8RRGi56Lz71JT-7GaTHItSog=/0x0:1400x1400/144x0/podcast/podcasts/principale-197.jpg, https://images.bfmtv.com/pj6rvGt99z1TOcpmnQDbZKiUPQg=/0x0:1400x1400/288x0/podcast/podcasts/principale-197.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/m_G8RRGi56Lz71JT-7GaTHItSog=/0x0:1400x1400/144x0/podcast/podcasts/principale-197.jpg, https://images.bfmtv.com/pj6rvGt99z1TOcpmnQDbZKiUPQg=/0x0:1400x1400/288x0/podcast/podcasts/principale-197.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/v85QV6vJbhVPej2X5fV1MqcKsH8=/0x0:1400x1400/187x0/podcast/podcasts/principale-197.jpg"
                                            alt="Nord Politiques">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Nord Politiques</h3>
                        </a></article>
                    <article class="replay_item"><a href="../cote-d-azur/replay-emissions/azur-politiques/podcast/index.html"
                            title="Azur Politiques">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/KOvyhOs63ixcgSUVIeh4_HtCuTo=/0x0:1400x1400/187x0/podcast/podcasts/principale-390_2.jpg, https://images.bfmtv.com/Zqd5PSkJYuiQMW4n01Gk3tBBKy8=/0x0:1400x1400/374x0/podcast/podcasts/principale-390_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/YApLR9x4QUZDYKkTO2pG3yETKlk=/0x0:1400x1400/288x0/podcast/podcasts/principale-390_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/YApLR9x4QUZDYKkTO2pG3yETKlk=/0x0:1400x1400/288x0/podcast/podcasts/principale-390_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/YApLR9x4QUZDYKkTO2pG3yETKlk=/0x0:1400x1400/288x0/podcast/podcasts/principale-390_2.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/KOvyhOs63ixcgSUVIeh4_HtCuTo=/0x0:1400x1400/187x0/podcast/podcasts/principale-390_2.jpg"
                                        src="https://images.bfmtv.com/KOvyhOs63ixcgSUVIeh4_HtCuTo=/0x0:1400x1400/187x0/podcast/podcasts/principale-390_2.jpg"
                                        alt="Azur Politiques" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/KOvyhOs63ixcgSUVIeh4_HtCuTo=/0x0:1400x1400/187x0/podcast/podcasts/principale-390_2.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/KOvyhOs63ixcgSUVIeh4_HtCuTo=/0x0:1400x1400/187x0/podcast/podcasts/principale-390_2.jpg, https://images.bfmtv.com/Zqd5PSkJYuiQMW4n01Gk3tBBKy8=/0x0:1400x1400/374x0/podcast/podcasts/principale-390_2.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/WFVyohBTE_a6cLazU9uaO2ZVDZo=/0x0:1400x1400/144x0/podcast/podcasts/principale-390_2.jpg, https://images.bfmtv.com/YApLR9x4QUZDYKkTO2pG3yETKlk=/0x0:1400x1400/288x0/podcast/podcasts/principale-390_2.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/WFVyohBTE_a6cLazU9uaO2ZVDZo=/0x0:1400x1400/144x0/podcast/podcasts/principale-390_2.jpg, https://images.bfmtv.com/YApLR9x4QUZDYKkTO2pG3yETKlk=/0x0:1400x1400/288x0/podcast/podcasts/principale-390_2.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/WFVyohBTE_a6cLazU9uaO2ZVDZo=/0x0:1400x1400/144x0/podcast/podcasts/principale-390_2.jpg, https://images.bfmtv.com/YApLR9x4QUZDYKkTO2pG3yETKlk=/0x0:1400x1400/288x0/podcast/podcasts/principale-390_2.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/KOvyhOs63ixcgSUVIeh4_HtCuTo=/0x0:1400x1400/187x0/podcast/podcasts/principale-390_2.jpg"
                                            alt="Azur Politiques">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Azur Politiques</h3>
                        </a></article>
                    <article class="replay_item"><a href="../alsace/replay-emissions/alsace-politiques/podcast/index.html"
                            title="Alsace Politiques">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/yzA0RS-UpqnTGxaBlgTRikpLGVI=/0x0:1400x1400/187x0/podcast/podcasts/principale-199.jpg, https://images.bfmtv.com/UXFNDz0PJ3XSnBzgMNaDYx6Mq5g=/0x0:1400x1400/374x0/podcast/podcasts/principale-199.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/h36qeFIrJpm-eRUg1UusM9xGrCw=/0x0:1400x1400/288x0/podcast/podcasts/principale-199.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/h36qeFIrJpm-eRUg1UusM9xGrCw=/0x0:1400x1400/288x0/podcast/podcasts/principale-199.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/h36qeFIrJpm-eRUg1UusM9xGrCw=/0x0:1400x1400/288x0/podcast/podcasts/principale-199.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/yzA0RS-UpqnTGxaBlgTRikpLGVI=/0x0:1400x1400/187x0/podcast/podcasts/principale-199.jpg"
                                        src="https://images.bfmtv.com/yzA0RS-UpqnTGxaBlgTRikpLGVI=/0x0:1400x1400/187x0/podcast/podcasts/principale-199.jpg"
                                        alt="Alsace Politiques" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/yzA0RS-UpqnTGxaBlgTRikpLGVI=/0x0:1400x1400/187x0/podcast/podcasts/principale-199.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/yzA0RS-UpqnTGxaBlgTRikpLGVI=/0x0:1400x1400/187x0/podcast/podcasts/principale-199.jpg, https://images.bfmtv.com/UXFNDz0PJ3XSnBzgMNaDYx6Mq5g=/0x0:1400x1400/374x0/podcast/podcasts/principale-199.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/ZBdOHosnhjNy09FgeVi3Wc8EBIM=/0x0:1400x1400/144x0/podcast/podcasts/principale-199.jpg, https://images.bfmtv.com/h36qeFIrJpm-eRUg1UusM9xGrCw=/0x0:1400x1400/288x0/podcast/podcasts/principale-199.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/ZBdOHosnhjNy09FgeVi3Wc8EBIM=/0x0:1400x1400/144x0/podcast/podcasts/principale-199.jpg, https://images.bfmtv.com/h36qeFIrJpm-eRUg1UusM9xGrCw=/0x0:1400x1400/288x0/podcast/podcasts/principale-199.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/ZBdOHosnhjNy09FgeVi3Wc8EBIM=/0x0:1400x1400/144x0/podcast/podcasts/principale-199.jpg, https://images.bfmtv.com/h36qeFIrJpm-eRUg1UusM9xGrCw=/0x0:1400x1400/288x0/podcast/podcasts/principale-199.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/yzA0RS-UpqnTGxaBlgTRikpLGVI=/0x0:1400x1400/187x0/podcast/podcasts/principale-199.jpg"
                                            alt="Alsace Politiques">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Alsace Politiques</h3>
                        </a></article>
                    <article class="replay_item"><a href="../marseille/replay-emissions/marseille-politiques/podcast/index.html"
                            title="Marseille Politiques">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/9e25sdBrLwoTwArABsN_V0K1wtw=/0x0:1400x1400/187x0/podcast/podcasts/principale-207.jpg, https://images.bfmtv.com/Marv3Hoc6UMbsmygrEN9Mtesrqc=/0x0:1400x1400/374x0/podcast/podcasts/principale-207.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/wzzkAjB_mprPwphl7go7JfDilew=/0x0:1400x1400/288x0/podcast/podcasts/principale-207.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/wzzkAjB_mprPwphl7go7JfDilew=/0x0:1400x1400/288x0/podcast/podcasts/principale-207.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/wzzkAjB_mprPwphl7go7JfDilew=/0x0:1400x1400/288x0/podcast/podcasts/principale-207.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/9e25sdBrLwoTwArABsN_V0K1wtw=/0x0:1400x1400/187x0/podcast/podcasts/principale-207.jpg"
                                        src="https://images.bfmtv.com/9e25sdBrLwoTwArABsN_V0K1wtw=/0x0:1400x1400/187x0/podcast/podcasts/principale-207.jpg"
                                        alt="Marseille Politiques" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/9e25sdBrLwoTwArABsN_V0K1wtw=/0x0:1400x1400/187x0/podcast/podcasts/principale-207.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/9e25sdBrLwoTwArABsN_V0K1wtw=/0x0:1400x1400/187x0/podcast/podcasts/principale-207.jpg, https://images.bfmtv.com/Marv3Hoc6UMbsmygrEN9Mtesrqc=/0x0:1400x1400/374x0/podcast/podcasts/principale-207.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/arOkox7T_AkEILv-zrikE86sCjA=/0x0:1400x1400/144x0/podcast/podcasts/principale-207.jpg, https://images.bfmtv.com/wzzkAjB_mprPwphl7go7JfDilew=/0x0:1400x1400/288x0/podcast/podcasts/principale-207.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/arOkox7T_AkEILv-zrikE86sCjA=/0x0:1400x1400/144x0/podcast/podcasts/principale-207.jpg, https://images.bfmtv.com/wzzkAjB_mprPwphl7go7JfDilew=/0x0:1400x1400/288x0/podcast/podcasts/principale-207.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/arOkox7T_AkEILv-zrikE86sCjA=/0x0:1400x1400/144x0/podcast/podcasts/principale-207.jpg, https://images.bfmtv.com/wzzkAjB_mprPwphl7go7JfDilew=/0x0:1400x1400/288x0/podcast/podcasts/principale-207.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/9e25sdBrLwoTwArABsN_V0K1wtw=/0x0:1400x1400/187x0/podcast/podcasts/principale-207.jpg"
                                            alt="Marseille Politiques">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Marseille Politiques</h3>
                        </a></article>
                    <article class="replay_item"><a href="../normandie/replay-emissions/normandie-politiques/podcast/index.html"
                            title="Normandie Politiques">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/MBja2XoH0UzncXnCwxdMDBYdixM=/0x0:1400x1400/187x0/podcast/podcasts/principale-384_1.jpg, https://images.bfmtv.com/VSwuv_EIKlY1cL9sikzTSd9mQrw=/0x0:1400x1400/374x0/podcast/podcasts/principale-384_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/7LTXtXBs19UK7WzwmxBm8CmrUOI=/0x0:1400x1400/288x0/podcast/podcasts/principale-384_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/7LTXtXBs19UK7WzwmxBm8CmrUOI=/0x0:1400x1400/288x0/podcast/podcasts/principale-384_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/7LTXtXBs19UK7WzwmxBm8CmrUOI=/0x0:1400x1400/288x0/podcast/podcasts/principale-384_1.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/MBja2XoH0UzncXnCwxdMDBYdixM=/0x0:1400x1400/187x0/podcast/podcasts/principale-384_1.jpg"
                                        src="https://images.bfmtv.com/MBja2XoH0UzncXnCwxdMDBYdixM=/0x0:1400x1400/187x0/podcast/podcasts/principale-384_1.jpg"
                                        alt="Normandie Politiques" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/MBja2XoH0UzncXnCwxdMDBYdixM=/0x0:1400x1400/187x0/podcast/podcasts/principale-384_1.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/MBja2XoH0UzncXnCwxdMDBYdixM=/0x0:1400x1400/187x0/podcast/podcasts/principale-384_1.jpg, https://images.bfmtv.com/VSwuv_EIKlY1cL9sikzTSd9mQrw=/0x0:1400x1400/374x0/podcast/podcasts/principale-384_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/utNZtFbNp7CG5gYA9ys7NthE67E=/0x0:1400x1400/144x0/podcast/podcasts/principale-384_1.jpg, https://images.bfmtv.com/7LTXtXBs19UK7WzwmxBm8CmrUOI=/0x0:1400x1400/288x0/podcast/podcasts/principale-384_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/utNZtFbNp7CG5gYA9ys7NthE67E=/0x0:1400x1400/144x0/podcast/podcasts/principale-384_1.jpg, https://images.bfmtv.com/7LTXtXBs19UK7WzwmxBm8CmrUOI=/0x0:1400x1400/288x0/podcast/podcasts/principale-384_1.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/utNZtFbNp7CG5gYA9ys7NthE67E=/0x0:1400x1400/144x0/podcast/podcasts/principale-384_1.jpg, https://images.bfmtv.com/7LTXtXBs19UK7WzwmxBm8CmrUOI=/0x0:1400x1400/288x0/podcast/podcasts/principale-384_1.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/MBja2XoH0UzncXnCwxdMDBYdixM=/0x0:1400x1400/187x0/podcast/podcasts/principale-384_1.jpg"
                                            alt="Normandie Politiques">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Normandie Politiques</h3>
                        </a></article>
                    <article class="replay_item"><a href="../grand-lille/replay-emissions/kop-nord/podcast/index.html"
                            title="Kop Nord">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Glcnw_CT4QMihr3gBYSv-UpgMj0=/0x0:1400x1400/187x0/podcast/podcasts/principale-212.jpg, https://images.bfmtv.com/Xe3C0yel-R-KpG-KstzFv2aRRmI=/0x0:1400x1400/374x0/podcast/podcasts/principale-212.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/wgivMweLAesaN0DrM7R10rOgW78=/0x0:1400x1400/288x0/podcast/podcasts/principale-212.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/wgivMweLAesaN0DrM7R10rOgW78=/0x0:1400x1400/288x0/podcast/podcasts/principale-212.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/wgivMweLAesaN0DrM7R10rOgW78=/0x0:1400x1400/288x0/podcast/podcasts/principale-212.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/Glcnw_CT4QMihr3gBYSv-UpgMj0=/0x0:1400x1400/187x0/podcast/podcasts/principale-212.jpg"
                                        src="https://images.bfmtv.com/Glcnw_CT4QMihr3gBYSv-UpgMj0=/0x0:1400x1400/187x0/podcast/podcasts/principale-212.jpg"
                                        alt="Kop Nord" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/Glcnw_CT4QMihr3gBYSv-UpgMj0=/0x0:1400x1400/187x0/podcast/podcasts/principale-212.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/Glcnw_CT4QMihr3gBYSv-UpgMj0=/0x0:1400x1400/187x0/podcast/podcasts/principale-212.jpg, https://images.bfmtv.com/Xe3C0yel-R-KpG-KstzFv2aRRmI=/0x0:1400x1400/374x0/podcast/podcasts/principale-212.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/LJowZHheBxfMrYiPSHoqcC6rEu0=/0x0:1400x1400/144x0/podcast/podcasts/principale-212.jpg, https://images.bfmtv.com/wgivMweLAesaN0DrM7R10rOgW78=/0x0:1400x1400/288x0/podcast/podcasts/principale-212.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/LJowZHheBxfMrYiPSHoqcC6rEu0=/0x0:1400x1400/144x0/podcast/podcasts/principale-212.jpg, https://images.bfmtv.com/wgivMweLAesaN0DrM7R10rOgW78=/0x0:1400x1400/288x0/podcast/podcasts/principale-212.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/LJowZHheBxfMrYiPSHoqcC6rEu0=/0x0:1400x1400/144x0/podcast/podcasts/principale-212.jpg, https://images.bfmtv.com/wgivMweLAesaN0DrM7R10rOgW78=/0x0:1400x1400/288x0/podcast/podcasts/principale-212.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/Glcnw_CT4QMihr3gBYSv-UpgMj0=/0x0:1400x1400/187x0/podcast/podcasts/principale-212.jpg"
                                            alt="Kop Nord">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Kop Nord</h3>
                        </a></article>
                    <article class="replay_item"><a href="../marseille/replay-emissions/virage-marseille/podcast/index.html"
                            title="Virage Marseille">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/XdXqpX9bf2UE-77pYv1m0QOVacE=/0x0:2047x2048/187x0/podcast/podcasts/principale-216_1.png, https://images.bfmtv.com/k3iLgGmy9rJGZXyC83fKsbWMDVA=/0x0:2047x2048/374x0/podcast/podcasts/principale-216_1.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Qn98hhWOq13_n75-vgQPh_lQTDk=/0x0:2047x2048/288x0/podcast/podcasts/principale-216_1.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Qn98hhWOq13_n75-vgQPh_lQTDk=/0x0:2047x2048/288x0/podcast/podcasts/principale-216_1.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Qn98hhWOq13_n75-vgQPh_lQTDk=/0x0:2047x2048/288x0/podcast/podcasts/principale-216_1.png 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/XdXqpX9bf2UE-77pYv1m0QOVacE=/0x0:2047x2048/187x0/podcast/podcasts/principale-216_1.png"
                                        src="https://images.bfmtv.com/XdXqpX9bf2UE-77pYv1m0QOVacE=/0x0:2047x2048/187x0/podcast/podcasts/principale-216_1.png"
                                        alt="Virage Marseille" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/XdXqpX9bf2UE-77pYv1m0QOVacE=/0x0:2047x2048/187x0/podcast/podcasts/principale-216_1.png">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/XdXqpX9bf2UE-77pYv1m0QOVacE=/0x0:2047x2048/187x0/podcast/podcasts/principale-216_1.png, https://images.bfmtv.com/k3iLgGmy9rJGZXyC83fKsbWMDVA=/0x0:2047x2048/374x0/podcast/podcasts/principale-216_1.png 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/tixFzUf0iTIV9D7qefOcq4IpEHs=/0x0:2047x2048/144x0/podcast/podcasts/principale-216_1.png, https://images.bfmtv.com/Qn98hhWOq13_n75-vgQPh_lQTDk=/0x0:2047x2048/288x0/podcast/podcasts/principale-216_1.png 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/tixFzUf0iTIV9D7qefOcq4IpEHs=/0x0:2047x2048/144x0/podcast/podcasts/principale-216_1.png, https://images.bfmtv.com/Qn98hhWOq13_n75-vgQPh_lQTDk=/0x0:2047x2048/288x0/podcast/podcasts/principale-216_1.png 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/tixFzUf0iTIV9D7qefOcq4IpEHs=/0x0:2047x2048/144x0/podcast/podcasts/principale-216_1.png, https://images.bfmtv.com/Qn98hhWOq13_n75-vgQPh_lQTDk=/0x0:2047x2048/288x0/podcast/podcasts/principale-216_1.png 2x">
                                        <img
                                            src="https://images.bfmtv.com/XdXqpX9bf2UE-77pYv1m0QOVacE=/0x0:2047x2048/187x0/podcast/podcasts/principale-216_1.png"
                                            alt="Virage Marseille">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Virage Marseille</h3>
                        </a></article>
                    <article class="replay_item"><a href="../alsace/replay-emissions/kop-racing/podcast/index.html"
                            title="Kop Racing ">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/czZSIaxBbJXwnTx71Q2ZZ5vMV7I=/0x0:1400x1400/187x0/podcast/podcasts/principale-227.png, https://images.bfmtv.com/v5XWBcy5qT9N4-rFRib-V8L5QUo=/0x0:1400x1400/374x0/podcast/podcasts/principale-227.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/NXNs476yYZpcQLKF4lBAKnR3YPs=/0x0:1400x1400/288x0/podcast/podcasts/principale-227.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/NXNs476yYZpcQLKF4lBAKnR3YPs=/0x0:1400x1400/288x0/podcast/podcasts/principale-227.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/NXNs476yYZpcQLKF4lBAKnR3YPs=/0x0:1400x1400/288x0/podcast/podcasts/principale-227.png 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/czZSIaxBbJXwnTx71Q2ZZ5vMV7I=/0x0:1400x1400/187x0/podcast/podcasts/principale-227.png"
                                        src="https://images.bfmtv.com/czZSIaxBbJXwnTx71Q2ZZ5vMV7I=/0x0:1400x1400/187x0/podcast/podcasts/principale-227.png"
                                        alt="Kop Racing " data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/czZSIaxBbJXwnTx71Q2ZZ5vMV7I=/0x0:1400x1400/187x0/podcast/podcasts/principale-227.png">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/czZSIaxBbJXwnTx71Q2ZZ5vMV7I=/0x0:1400x1400/187x0/podcast/podcasts/principale-227.png, https://images.bfmtv.com/v5XWBcy5qT9N4-rFRib-V8L5QUo=/0x0:1400x1400/374x0/podcast/podcasts/principale-227.png 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/nIzp4TqUkSTYW6OCRzHXyythgZ0=/0x0:1400x1400/144x0/podcast/podcasts/principale-227.png, https://images.bfmtv.com/NXNs476yYZpcQLKF4lBAKnR3YPs=/0x0:1400x1400/288x0/podcast/podcasts/principale-227.png 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/nIzp4TqUkSTYW6OCRzHXyythgZ0=/0x0:1400x1400/144x0/podcast/podcasts/principale-227.png, https://images.bfmtv.com/NXNs476yYZpcQLKF4lBAKnR3YPs=/0x0:1400x1400/288x0/podcast/podcasts/principale-227.png 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/nIzp4TqUkSTYW6OCRzHXyythgZ0=/0x0:1400x1400/144x0/podcast/podcasts/principale-227.png, https://images.bfmtv.com/NXNs476yYZpcQLKF4lBAKnR3YPs=/0x0:1400x1400/288x0/podcast/podcasts/principale-227.png 2x">
                                        <img
                                            src="https://images.bfmtv.com/czZSIaxBbJXwnTx71Q2ZZ5vMV7I=/0x0:1400x1400/187x0/podcast/podcasts/principale-227.png"
                                            alt="Kop Racing ">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Kop Racing</h3>
                        </a></article>
                    <article class="replay_item"><a href="../cote-d-azur/replay-emissions/kop-aiglons/podcast/index.html"
                            title="Kop Aiglons">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/L9DAuxqeFw77FOUJgI0LGmVgFDU=/0x0:1400x1400/187x0/podcast/podcasts/principale-228.png, https://images.bfmtv.com/E6izd7ndRJyHa_lNpUijBj6d8zQ=/0x0:1400x1400/374x0/podcast/podcasts/principale-228.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/y4UbxxvUF-8UlESfvXljGuV5mcg=/0x0:1400x1400/288x0/podcast/podcasts/principale-228.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/y4UbxxvUF-8UlESfvXljGuV5mcg=/0x0:1400x1400/288x0/podcast/podcasts/principale-228.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/y4UbxxvUF-8UlESfvXljGuV5mcg=/0x0:1400x1400/288x0/podcast/podcasts/principale-228.png 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/L9DAuxqeFw77FOUJgI0LGmVgFDU=/0x0:1400x1400/187x0/podcast/podcasts/principale-228.png"
                                        src="https://images.bfmtv.com/L9DAuxqeFw77FOUJgI0LGmVgFDU=/0x0:1400x1400/187x0/podcast/podcasts/principale-228.png"
                                        alt="Kop Aiglons" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/L9DAuxqeFw77FOUJgI0LGmVgFDU=/0x0:1400x1400/187x0/podcast/podcasts/principale-228.png">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/L9DAuxqeFw77FOUJgI0LGmVgFDU=/0x0:1400x1400/187x0/podcast/podcasts/principale-228.png, https://images.bfmtv.com/E6izd7ndRJyHa_lNpUijBj6d8zQ=/0x0:1400x1400/374x0/podcast/podcasts/principale-228.png 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/BuzOCuP4JBTaikms-6OyqMDbBis=/0x0:1400x1400/144x0/podcast/podcasts/principale-228.png, https://images.bfmtv.com/y4UbxxvUF-8UlESfvXljGuV5mcg=/0x0:1400x1400/288x0/podcast/podcasts/principale-228.png 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/BuzOCuP4JBTaikms-6OyqMDbBis=/0x0:1400x1400/144x0/podcast/podcasts/principale-228.png, https://images.bfmtv.com/y4UbxxvUF-8UlESfvXljGuV5mcg=/0x0:1400x1400/288x0/podcast/podcasts/principale-228.png 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/BuzOCuP4JBTaikms-6OyqMDbBis=/0x0:1400x1400/144x0/podcast/podcasts/principale-228.png, https://images.bfmtv.com/y4UbxxvUF-8UlESfvXljGuV5mcg=/0x0:1400x1400/288x0/podcast/podcasts/principale-228.png 2x">
                                        <img
                                            src="https://images.bfmtv.com/L9DAuxqeFw77FOUJgI0LGmVgFDU=/0x0:1400x1400/187x0/podcast/podcasts/principale-228.png"
                                            alt="Kop Aiglons">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Kop Aiglons</h3>
                        </a></article>
                    <article class="replay_item"><a href="../paris/replay-emissions/100-pourcent-sports/podcast/index.html"
                            title="Kop Paris">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/yl41GA5IcSjEAu1ktMxNJkDSzn4=/0x0:1400x1400/187x0/podcast/podcasts/principale-229.png, https://images.bfmtv.com/TjAoa8G2VM013AHf4Npcxmt2ipU=/0x0:1400x1400/374x0/podcast/podcasts/principale-229.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/35XpwlD5AL9-RvK6hNh0fhP5IQY=/0x0:1400x1400/288x0/podcast/podcasts/principale-229.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/35XpwlD5AL9-RvK6hNh0fhP5IQY=/0x0:1400x1400/288x0/podcast/podcasts/principale-229.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/35XpwlD5AL9-RvK6hNh0fhP5IQY=/0x0:1400x1400/288x0/podcast/podcasts/principale-229.png 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/yl41GA5IcSjEAu1ktMxNJkDSzn4=/0x0:1400x1400/187x0/podcast/podcasts/principale-229.png"
                                        src="https://images.bfmtv.com/yl41GA5IcSjEAu1ktMxNJkDSzn4=/0x0:1400x1400/187x0/podcast/podcasts/principale-229.png"
                                        alt="Kop Paris" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/yl41GA5IcSjEAu1ktMxNJkDSzn4=/0x0:1400x1400/187x0/podcast/podcasts/principale-229.png">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/yl41GA5IcSjEAu1ktMxNJkDSzn4=/0x0:1400x1400/187x0/podcast/podcasts/principale-229.png, https://images.bfmtv.com/TjAoa8G2VM013AHf4Npcxmt2ipU=/0x0:1400x1400/374x0/podcast/podcasts/principale-229.png 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/sUE-YWrlZiOEIIPvRkP86_RQ_I0=/0x0:1400x1400/144x0/podcast/podcasts/principale-229.png, https://images.bfmtv.com/35XpwlD5AL9-RvK6hNh0fhP5IQY=/0x0:1400x1400/288x0/podcast/podcasts/principale-229.png 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/sUE-YWrlZiOEIIPvRkP86_RQ_I0=/0x0:1400x1400/144x0/podcast/podcasts/principale-229.png, https://images.bfmtv.com/35XpwlD5AL9-RvK6hNh0fhP5IQY=/0x0:1400x1400/288x0/podcast/podcasts/principale-229.png 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/sUE-YWrlZiOEIIPvRkP86_RQ_I0=/0x0:1400x1400/144x0/podcast/podcasts/principale-229.png, https://images.bfmtv.com/35XpwlD5AL9-RvK6hNh0fhP5IQY=/0x0:1400x1400/288x0/podcast/podcasts/principale-229.png 2x">
                                        <img
                                            src="https://images.bfmtv.com/yl41GA5IcSjEAu1ktMxNJkDSzn4=/0x0:1400x1400/187x0/podcast/podcasts/principale-229.png"
                                            alt="Kop Paris">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Kop Paris</h3>
                        </a></article>
                    <article class="replay_item"><a href="../var/replay-emissions/tribune-mayol/podcast/index.html"
                            title="Tribune Mayol">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/4lUXr1mCplNP6PQbHlN2fw753Ok=/0x0:1400x1400/187x0/podcast/podcasts/principale-80.png, https://images.bfmtv.com/mTVBfSZQxBvuJXU7D0rOqipuhPU=/0x0:1400x1400/374x0/podcast/podcasts/principale-80.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Nam2Lrkx7Q8L5twDPhk-Nh8Pyxw=/0x0:1400x1400/288x0/podcast/podcasts/principale-80.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Nam2Lrkx7Q8L5twDPhk-Nh8Pyxw=/0x0:1400x1400/288x0/podcast/podcasts/principale-80.png 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Nam2Lrkx7Q8L5twDPhk-Nh8Pyxw=/0x0:1400x1400/288x0/podcast/podcasts/principale-80.png 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/4lUXr1mCplNP6PQbHlN2fw753Ok=/0x0:1400x1400/187x0/podcast/podcasts/principale-80.png"
                                        src="https://images.bfmtv.com/4lUXr1mCplNP6PQbHlN2fw753Ok=/0x0:1400x1400/187x0/podcast/podcasts/principale-80.png"
                                        alt="Tribune Mayol" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/4lUXr1mCplNP6PQbHlN2fw753Ok=/0x0:1400x1400/187x0/podcast/podcasts/principale-80.png">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/4lUXr1mCplNP6PQbHlN2fw753Ok=/0x0:1400x1400/187x0/podcast/podcasts/principale-80.png, https://images.bfmtv.com/mTVBfSZQxBvuJXU7D0rOqipuhPU=/0x0:1400x1400/374x0/podcast/podcasts/principale-80.png 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/iV_nloJiFI-WWKl7QF2SQJUsPgs=/0x0:1400x1400/144x0/podcast/podcasts/principale-80.png, https://images.bfmtv.com/Nam2Lrkx7Q8L5twDPhk-Nh8Pyxw=/0x0:1400x1400/288x0/podcast/podcasts/principale-80.png 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/iV_nloJiFI-WWKl7QF2SQJUsPgs=/0x0:1400x1400/144x0/podcast/podcasts/principale-80.png, https://images.bfmtv.com/Nam2Lrkx7Q8L5twDPhk-Nh8Pyxw=/0x0:1400x1400/288x0/podcast/podcasts/principale-80.png 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/iV_nloJiFI-WWKl7QF2SQJUsPgs=/0x0:1400x1400/144x0/podcast/podcasts/principale-80.png, https://images.bfmtv.com/Nam2Lrkx7Q8L5twDPhk-Nh8Pyxw=/0x0:1400x1400/288x0/podcast/podcasts/principale-80.png 2x">
                                        <img
                                            src="https://images.bfmtv.com/4lUXr1mCplNP6PQbHlN2fw753Ok=/0x0:1400x1400/187x0/podcast/podcasts/principale-80.png"
                                            alt="Tribune Mayol">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Tribune Mayol</h3>
                        </a></article>
                    <article class="replay_item"><a href="../normandie/replay-emissions/kop-normandie/podcast/index.html"
                            title="Kop Normandie">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/1PDGtUxGq6f-sjrqoUKd-kFsqQA=/0x0:1400x1400/187x0/podcast/podcasts/principale-82.jpg, https://images.bfmtv.com/U9fxLt-QYXQlbYanun9yTO50YAo=/0x0:1400x1400/374x0/podcast/podcasts/principale-82.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 361px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Xk67NpjCF0s1AlKJ2CqgFS2U0rI=/0x0:1400x1400/288x0/podcast/podcasts/principale-82.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Xk67NpjCF0s1AlKJ2CqgFS2U0rI=/0x0:1400x1400/288x0/podcast/podcasts/principale-82.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="1" height="1" class="lozad entered exited"
                                        srcset="https://images.bfmtv.com/Xk67NpjCF0s1AlKJ2CqgFS2U0rI=/0x0:1400x1400/288x0/podcast/podcasts/principale-82.jpg 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="1" height="1" class="lozad entered loaded"
                                        data-srcset="https://images.bfmtv.com/1PDGtUxGq6f-sjrqoUKd-kFsqQA=/0x0:1400x1400/187x0/podcast/podcasts/principale-82.jpg"
                                        src="https://images.bfmtv.com/1PDGtUxGq6f-sjrqoUKd-kFsqQA=/0x0:1400x1400/187x0/podcast/podcasts/principale-82.jpg"
                                        alt="Kop Normandie" data-ll-status="loaded"
                                        srcset="https://images.bfmtv.com/1PDGtUxGq6f-sjrqoUKd-kFsqQA=/0x0:1400x1400/187x0/podcast/podcasts/principale-82.jpg">
                                </picture><noscript>
                                    <picture>
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/1PDGtUxGq6f-sjrqoUKd-kFsqQA=/0x0:1400x1400/187x0/podcast/podcasts/principale-82.jpg, https://images.bfmtv.com/U9fxLt-QYXQlbYanun9yTO50YAo=/0x0:1400x1400/374x0/podcast/podcasts/principale-82.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/mDbz64WKh43Y6XNB76V1l75KYlI=/0x0:1400x1400/144x0/podcast/podcasts/principale-82.jpg, https://images.bfmtv.com/Xk67NpjCF0s1AlKJ2CqgFS2U0rI=/0x0:1400x1400/288x0/podcast/podcasts/principale-82.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/mDbz64WKh43Y6XNB76V1l75KYlI=/0x0:1400x1400/144x0/podcast/podcasts/principale-82.jpg, https://images.bfmtv.com/Xk67NpjCF0s1AlKJ2CqgFS2U0rI=/0x0:1400x1400/288x0/podcast/podcasts/principale-82.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/mDbz64WKh43Y6XNB76V1l75KYlI=/0x0:1400x1400/144x0/podcast/podcasts/principale-82.jpg, https://images.bfmtv.com/Xk67NpjCF0s1AlKJ2CqgFS2U0rI=/0x0:1400x1400/288x0/podcast/podcasts/principale-82.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/1PDGtUxGq6f-sjrqoUKd-kFsqQA=/0x0:1400x1400/187x0/podcast/podcasts/principale-82.jpg"
                                            alt="Kop Normandie">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="replay_item_title">Kop Normandie</h3>
                        </a></article>
                </div>
            </section> -->
            <section class="last_replay_block">
                <h2 class="section_title">Les podcasts Partenaires</h2>
                <div class="replay_wrapper">
                    <article class="replay_item"><a href="connecte-ta-boite-ils-l-ont-fait/index.html"
                            title="Connecte ta boîte : ils l'ont fait !">
                            <figure class="content_item_cover">
                                <picture>
                                    <source media="(min-width: 441px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/9oFEdsaFCgQ6PY07Nnzp-wD3azs=/0x0:1400x1400/187x0/podcast/podcasts/principale-32.jpg, https://images.bfmtv.com/_zYFgMxcb5ckKKcuUwtQcAGtUzM=/0x0:1400x1400/374x0/podcast/podcasts/principale-32.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/g6IVn-LWsizIRHeS4XbozX2VY3w=/0x0:1400x1400/288x0/podcast/podcasts/principale-32.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/g6IVn-LWsizIRHeS4XbozX2VY3w=/0x0:1400x1400/288x0/podcast/podcasts/principale-32.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="1" height="1"
                                        srcset="https://images.bfmtv.com/g6IVn-LWsizIRHeS4XbozX2VY3w=/0x0:1400x1400/288x0/podcast/podcasts/principale-32.jpg 2x"
                                        type="image/jpeg"><img width="1" height="1"
                                        src="https://images.bfmtv.com/9oFEdsaFCgQ6PY07Nnzp-wD3azs=/0x0:1400x1400/187x0/podcast/podcasts/principale-32.jpg"
                                        alt="Connecte ta boîte : ils l'ont fait !">
                                </picture>
                            </figure>
                            <h3 class="replay_item_title">Connecte ta boîte : ils l'ont fait !</h3>
                        </a></article>
                </div>
            </section>
            <script>
                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                    carouselItem("block_selection_slider", ".carousel_item", 3)
                }));
            </script>
        </div>
    </div>
    <div class="breadcrumb_parent grid_column_abc" id="breadcrumb_parent"></div>
</main>

<?php $this->endSection(); ?>