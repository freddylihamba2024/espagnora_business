<?php

use Faker\Provider\Base;

$this->extend('layouts/layout_web') ?>



<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<!-- Content section -->
<?php $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url('templates/news/assets/v11/css/episode.48066c08400e5193b767.css') ?>">
<main class="main_wrapper episode_page" id="main_wrapper">
    <div class="grid_wrapper">
        <div class="grid_column grid_column_ab">
            <article class="content content_episode"><span class="header_surtitre">
                    <div class="podcast_surtitre podcast_item_container">
                        <div class="picto_radio podcast_item_picto"><img
                                src="<?= base_url('templates/news/assets/v11/images/radio.dee6a7c951465a8cbb208e64f4c09ff6.svg') ?>"
                                alt="Podcast radio"></div>
                        <h3 class="podcast_title">Podcast</h3>
                    </div>
                </span>
                <div id="content_progress">
                    <header class="content_header" id="content_header">
                        <nav role="breadcrumb" class="breadcrumb" id="breadcrumb">
                            <ul class="list_inbl">
                                <li class="breadbrumb_home"><a href="<?= base_url() ?>"
                                        title="Espagnora"><span>Espagnora</span></a></li>
                                <li><a href="<?= base_url('web/podcasts') ?>" title="Podcasts"><span>Podcasts</span></a></li>
                                <li><a href="#" title="Le titre à la une"
                                        id="breadcrumb_last_item"><span><?= $podcasts[0]['Title_2'] ?></span></a></li>
                            </ul>
                        </nav>
                        <div class="contain_title_btn">
                            <h1 class="content_title" id="contain_title"><?= $podcasts[0]['Title_2'] ?></h1>
                        </div>
                        <div class="content_datetime scroll_step" id="content_scroll_start"><time
                                datetime="2025-02-03T18:57:18+01:00">Hier à 18h57</time></div>
                        <ul class="social_media" id="contain_social_media_fixed">
                            <li class="facebook"><a
                                    href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url('web/podcasts/' . $podcasts[0]['Media_Id_1']) ?>"
                                    class="icon_facebook btn_share" title="Partager">Partager</a></li>
                            <li class="twitter"><a
                                    href="https://x.com/intent/tweet?text=<?= base_url('web/podcasts/' . $podcasts[0]['Media_Id_1']) ?>&amp;via=Espagnora"
                                    class="icon_twitter btn_share" title="Partager">Partager</a></li>
                            <li class="whatsapp"><a
                                    href="https://wa.me/?text=<?= base_url('web/podcasts/' . $podcasts[0]['Media_Id_1']) ?>"
                                    data-action="share/whatsapp/share" class="icon_whatsapp"
                                    title="Whatsapp">Whatsapp</a></li>
                            <li class="linkedin"><a
                                    href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?= base_url('web/podcasts/' . $podcasts[0]['Media_Id_1']) ?>&amp;source=Espagnora"
                                    class="icon_linkedin btn_share" title="LinkedIn">LinkedIn</a></li>
                            <li class="mail"><a
                                    href="mailto:?subject=Espagnora - à lire : <?= $podcasts[0]['Title_2']?>&amp;body=<?= $podcasts[0]['Description_3']?>%0D%0A%0D%0A<?=base_url('web/podcasts/'.$podcasts[0]['Media_Id_1'])?>"
                                    class="icon_envelop" title="Partager par mail">Mail</a></li>
                            <li class="messenger"><a
                                    href="fb-messenger://share/?link=<?= base_url('web/podcasts/' . $podcasts[0]['Media_Id_1']) ?>"
                                    class="icon_messenger" title="Partager via Messenger">messenger</a></li>
                        </ul>
                    </header>
                    <div class="content_body">
                        <div class="content_body_wrapper">
                            <div class="episode_block">
                                <div class="episode_box">
                                    <div class="episode_picture">
                                        <picture>
                                            <source media="(min-width: 441px)" width="1" height="1"
                                                srcset="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?> 2x"
                                                type="image/webp">
                                            <source media="(min-width: 441px)" width="1" height="1"
                                                srcset="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?> 2x"
                                                type="image/jpeg">
                                            <source media="(min-width: 361px)" width="1" height="1"
                                                srcset="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?> 2x"
                                                type="image/webp">
                                            <source media="(min-width: 361px)" width="1" height="1"
                                                srcset="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?> 2x"
                                                type="image/jpeg">
                                            <source media="(min-width: 321px)" width="1" height="1"
                                                srcset="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?> 2x"
                                                type="image/webp">
                                            <source media="(min-width: 321px)" width="1" height="1"
                                                srcset="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?> 2x"
                                                type="image/jpeg">
                                            <source media="(min-width: 300px)" width="1" height="1"
                                                srcset="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?> 2x"
                                                type="image/webp">
                                            <source media="(min-width: 300px)" width="1" height="1"
                                                srcset="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?> 2x"
                                                type="image/jpeg"><img width="1" height="1"
                                                src="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?>"
                                                alt="<?= $podcasts[0]['Title_2'] ?>">
                                        </picture>
                                    </div>
                                    <div class="episode_description">
                                        <h3 class="multiline-ellipsis"><?= $podcasts[0]['Description_3'] ?></h3>
                                        <div class="podcast_item">
                                            <div class="podcast_item_infos podcast_wrapper_infos"
                                                data-audio-src="https://altice.simplecastaudio.com/bfb6c6be-eeaf-454f-884e-13f3561bb06d/episodes/a2322e3f-0f09-41a1-8d76-9c471cf98031/audio/128/default.mp3?awCollectionId=bfb6c6be-eeaf-454f-884e-13f3561bb06d&amp;awEpisodeId=a2322e3f-0f09-41a1-8d76-9c471cf98031&amp;category=News&amp;episode_published_at=2025-02-03T17%3A57%3A18&amp;episode_title=Affaire+Ad%C3%A8le+Haenel%3A+le+r%C3%A9alisateur+Christophe+Ruggia+condamn%C3%A9+pour+agressions+sexuelles+sur+mineure&amp;network=228028218708&amp;podcast_title=Le+titre+%C3%A0+la+une"
                                                data-img-src="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?>"
                                                data-title="<?= $podcasts[0]['Title_2'] ?>"
                                                data-id="202502030832" data-podcast-nom="<?= $podcasts[0]['Title_2'] ?>">
                                                <div class="podcast_item_picto" listener="true">
                                                    <div class="podcast-playbutton" onclick="play(event)">
                                                        <i class="fa fa-play" style="color: white;"></i>
                                                    </div>

                                                    <div id="audio-player" class="audio-player d-none">
                                                        <!-- Custom Audio Controls -->
                                                        <div class="audio-player-tag">
                                                            <img src="<?= base_url('uploads/' . $podcasts[0]['Media_Image_4']) ?>" class="audio-player-tag-image" />
                                                            <span class="audio-player-tag-title"><?= $podcasts[0]['Title_2'] ?></span>
                                                        </div>
                                                        <div class="audio-manager">
                                                            <button id="playPauseBtn"><i class="fa fa-play"></i></button>
                                                            <input type="range" id="progressBar" class="progress" value="0" max="100">
                                                            <span>Volume</span>
                                                            <input type="range" id="volumeControl" class="volume" value="100" max="100">
                                                        </div>
                                                        <button type="button" id="close-player" class="close-player"><i class="fa fa-close"></i></button>
                                                    </div>

                                                    <audio id="audio" preload="auto">
                                                        <source src="<?= base_url('uploads/' . $podcasts[0]['Media_Link_5']) ?>" type="audio/mp3">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                    <!-- <svg
                                                        viewBox="-11 -9 30 30" width="44" height="44" fill="#FFF"
                                                        class="pausing">
                                                        <use
                                                            xlink:href="<?= base_url('templates/news/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play') ?>">
                                                        </use>
                                                    </svg>
                                                    <svg viewBox="-11 -9 34 34" width="44" height="44"
                                                        fill="#FFF" class="playing">
                                                        <use
                                                            xlink:href="<?= base_url('templates/news/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause') ?>">
                                                        </use>
                                                    </svg> -->
                                                </div>
                                                <p>19:31</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chapo"><?= $podcasts[0]['Description_3'] ?></div>
                            </div>
                        </div>
                        <div class="fleuve_podcast_mobile">
                            <h3 class="fleuve_title">Autres épisodes</h3>

                            <div class="podcasts_wrapper" id="episode_fleuve_1679583731956">
                                <?php foreach ($similar_podcasts as $podcast): ?>
                                    <?php if ($podcasts[0]['Media_Id_1'] != $podcast['Media_Id_1']): ?>
                                        <article class="podcast_item">
                                            <div class="podcast_item_infos podcast_wrapper_infos"
                                                data-audio-src="https://altice.simplecastaudio.com/bfb6c6be-eeaf-454f-884e-13f3561bb06d/episodes/aee55a13-3ad2-4ebc-97ba-5004e32cec7f/audio/128/default.mp3?awCollectionId=bfb6c6be-eeaf-454f-884e-13f3561bb06d&amp;awEpisodeId=aee55a13-3ad2-4ebc-97ba-5004e32cec7f&amp;category=News&amp;episode_published_at=2025-01-31T17%3A07%3A03&amp;episode_title=Derri%C3%A8re+le+terrible+crash+a%C3%A9rien+%C3%A0+Washington%2C+des+failles+humaines%3F&amp;network=228028218708&amp;podcast_title=Le+titre+%C3%A0+la+une"
                                                data-img-src="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?>"
                                                data-title="<?= $podcast['Title_2'] ?>"
                                                data-id="202501310824" data-podcast-nom="Le titre à la une">
                                                <div class="podcast_item_infos_container">
                                                    <div class="podcast_item_picto" listener="true">
                                                        <svg
                                                            viewBox="-12 -10 32 32" width="40" height="40" fill="#FFF"
                                                            id="pausing">
                                                            <use
                                                                xlink:href="<?= base_url('templates/news/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play') ?>">
                                                            </use>
                                                        </svg> <svg viewBox="-12 -10 36 36" width="40" height="40"
                                                            fill="#FFF" id="playing">
                                                            <use
                                                                xlink:href="<?= base_url('templates/news/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause') ?>">
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <a
                                                        href="<?= base_url('web/podcasts/' . $podcast['Media_Id_1']) ?>"
                                                        title="<?= $podcast['Title_2'] ?>">
                                                        <div class="podcast_title_container">
                                                            <h3><?= $podcast['Title_2'] ?></h3><time class="podcast_item_time"
                                                                datetime="2025-01-31T18:07:03+01:00">Publié le 31/01
                                                            </time>
                                                            <!-- <span class="podcast_item_duration_s">Durée :
                                                            16:07</span> -->
                                                        </div>
                                                        </>
                                                </div><span class="podcast_item_duration_l">16:07</span>
                                            </div>
                                            <div class="podcast_item_desc"><?= $podcast['Description_3'] ?></div><span class="see_more">Voir
                                                plus</span>
                                        </article>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <script>
                                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                                    initMultipleSeeMore("#episode_fleuve_1679583731956",
                                        ".podcast_item", ".podcast_item .podcast_item_desc")
                                }));
                            </script>
                        </div>
                    </div>
                    <div id="sas_120870_s" class="bloc_center_full"></div>
                </div>
                <div class="content_body" id="content_body_bottom">
                    <div class="block_ordered_parent" id="block_ordered_parent"></div>
                    <script>
                        window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                            resizeDisplayBlock("breadcrumb_parent", ".breadcrumb", "content_header",
                                "afterbegin");
                            resizeDisplayBlock("block_ordered_parent", ".bloc_top_podcasts",
                                "top_podcasts_right", "afterbegin");
                            if (window.deviceSize === "L") {
                                lazyload.update()
                            }
                        }));
                    </script>
                    <div class="breadcrumb_parent grid_column_abc" id="breadcrumb_parent"></div>
                </div>
            </article>
        </div>
        <div class="grid_column grid_column_c aside_column">
            <!-- <div id="sas_pave1_l" class="publicite bloc_center_full">
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
            </div> -->
            <div id="top_podcasts_right">
                <section class="block bloc_top_podcasts" id="ordered_list_top_podcasts_1679583703907">
                    <h2 class="block_top_title">Les plus écoutés</h2>
                    <article class="podcast_item">
                        <a
                            href="#"
                            title="Une lycéenne tuée, 26 blessés: la sortie de route mortelle d'un car scolaire en Eure-et-Loir">
                            <picture>
                                <source media="(min-width: 441px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/PMSULzln-4No_AIlgcDWgn1RFqY=/341x0:1706x1365/212x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp, https://images.bfmtv.com/Ddx0oF1G2Up6Xsq3pyXB_N2UEHQ=/341x0:1706x1365/424x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 441px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/6hXxJFgUY8Jv4ttDwC0azlVl8cA=/341x0:1706x1365/212x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg, https://images.bfmtv.com/O34bOXhvQZdAPVXjtZ7JebToWwQ=/341x0:1706x1365/424x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/HxhEOyCkZW66XWeSC0P-N8Fowoc=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/1J3FN8YDmTy_q8g_XrtqyAqCSdI=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/HxhEOyCkZW66XWeSC0P-N8Fowoc=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/1J3FN8YDmTy_q8g_XrtqyAqCSdI=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/HxhEOyCkZW66XWeSC0P-N8Fowoc=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/1J3FN8YDmTy_q8g_XrtqyAqCSdI=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered"><img width="1" height="1"
                                    class="lozad entered loaded"
                                    data-srcset="https://images.bfmtv.com/6hXxJFgUY8Jv4ttDwC0azlVl8cA=/341x0:1706x1365/212x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg"
                                    src="https://images.bfmtv.com/6hXxJFgUY8Jv4ttDwC0azlVl8cA=/341x0:1706x1365/212x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg"
                                    alt="Un car scolaire renversé après un accident mortel à Jallans (Eure-et-Loir)  le 30 janvier 2025"
                                    data-ll-status="loaded"
                                    srcset="https://images.bfmtv.com/6hXxJFgUY8Jv4ttDwC0azlVl8cA=/341x0:1706x1365/212x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg">
                            </picture><noscript>
                                <picture>
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/PMSULzln-4No_AIlgcDWgn1RFqY=/341x0:1706x1365/212x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp, https://images.bfmtv.com/Ddx0oF1G2Up6Xsq3pyXB_N2UEHQ=/341x0:1706x1365/424x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/6hXxJFgUY8Jv4ttDwC0azlVl8cA=/341x0:1706x1365/212x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg, https://images.bfmtv.com/O34bOXhvQZdAPVXjtZ7JebToWwQ=/341x0:1706x1365/424x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/ureev2aGAPDa9OIHrOYJCvyQbIo=/341x0:1706x1365/215x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp, https://images.bfmtv.com/HxhEOyCkZW66XWeSC0P-N8Fowoc=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/pfzJSugjJMLFyhMuHbOmeO7NZMs=/341x0:1706x1365/215x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg, https://images.bfmtv.com/1J3FN8YDmTy_q8g_XrtqyAqCSdI=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/ureev2aGAPDa9OIHrOYJCvyQbIo=/341x0:1706x1365/215x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp, https://images.bfmtv.com/HxhEOyCkZW66XWeSC0P-N8Fowoc=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/pfzJSugjJMLFyhMuHbOmeO7NZMs=/341x0:1706x1365/215x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg, https://images.bfmtv.com/1J3FN8YDmTy_q8g_XrtqyAqCSdI=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/ureev2aGAPDa9OIHrOYJCvyQbIo=/341x0:1706x1365/215x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp, https://images.bfmtv.com/HxhEOyCkZW66XWeSC0P-N8Fowoc=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/pfzJSugjJMLFyhMuHbOmeO7NZMs=/341x0:1706x1365/215x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg, https://images.bfmtv.com/1J3FN8YDmTy_q8g_XrtqyAqCSdI=/341x0:1706x1365/430x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg 2x">
                                    <img src="https://images.bfmtv.com/6hXxJFgUY8Jv4ttDwC0azlVl8cA=/341x0:1706x1365/212x0/images/Un-car-scolaire-renverse-apres-un-accident-mortel-a-Jallans-Eure-et-Loir-le-30-janvier-2025-2024041.jpg"
                                        alt="Un car scolaire renversé après un accident mortel à Jallans (Eure-et-Loir)  le 30 janvier 2025">
                                </picture>
                            </noscript>
                        </a>
                        <div class="podcast_wrapper_infos"
                            data-audio-src="https://altice.simplecastaudio.com/bfb6c6be-eeaf-454f-884e-13f3561bb06d/episodes/d828d2ee-9169-4455-8ec4-b7778237aff9/audio/128/default.mp3?awCollectionId=bfb6c6be-eeaf-454f-884e-13f3561bb06d&amp;awEpisodeId=d828d2ee-9169-4455-8ec4-b7778237aff9&amp;category=News&amp;episode_published_at=2025-01-30T17%3A06%3A22&amp;episode_title=Une+lyc%C3%A9enne+tu%C3%A9e%2C+26+bless%C3%A9s%3A+la+sortie+de+route+mortelle+d%27un+car+scolaire+en+Eure-et-Loir&amp;network=228028218708&amp;podcast_title=Le+titre+%C3%A0+la+une"
                            data-img-src="https://images.bfmtv.com/YkvUhzXXSRKisNTZYCoDJUsRTrk=/0x0:1400x1400/180x0/images/Le-titre-a-la-une-2024305.jpg"
                            data-title="Une lycéenne tuée, 26 blessés: la sortie de route mortelle d'un car scolaire en Eure-et-Loir"
                            data-id="202501300784" data-podcast-nom="Le titre à la une">
                            <a
                                href="#"
                                title="Une lycéenne tuée, 26 blessés: la sortie de route mortelle d'un car scolaire en Eure-et-Loir">
                                <h3 class="podcast_title_container">Une lycéenne tuée, 26 blessés: la sortie de
                                    route mortelle d'un car scolaire en Eure-et-Loir</h3>
                            </a>
                            <div class="podcast_item_picto" listener="true"><svg viewBox="-12 -10 32 32" width="40"
                                    height="40" fill="#FFF" class="pausing">
                                    <use
                                        xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play">
                                    </use>
                                </svg> <svg viewBox="-12 -10 36 36" width="40" height="40" fill="#FFF"
                                    class="playing">
                                    <use
                                        xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause">
                                    </use>
                                </svg></div>
                        </div>
                    </article>
                    <article class="podcast_item">
                        <a
                            href="#"
                            title="Pourquoi la grippe s'intensifie-t-elle encore en France?">
                            <picture>
                                <source media="(min-width: 441px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/zvHTgDseqxLL5Hu97xZ2C38e348=/341x0:1706x1365/212x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp, https://images.bfmtv.com/vwcbqb6lMjcWw8pmNmcGd6pm5u4=/341x0:1706x1365/424x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 441px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/p2_nmFsuYftWUQH-_xFGQ86Wg7Y=/341x0:1706x1365/212x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg, https://images.bfmtv.com/cSs4kZrfsFDISSRwHm5oBU0ARhE=/341x0:1706x1365/424x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/CeHvCjfy91pEs30BoBy7mNIKlaM=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/uIk7yLxipv-pNlwbNqvbgqoDF_k=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/CeHvCjfy91pEs30BoBy7mNIKlaM=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/uIk7yLxipv-pNlwbNqvbgqoDF_k=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/CeHvCjfy91pEs30BoBy7mNIKlaM=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/uIk7yLxipv-pNlwbNqvbgqoDF_k=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered"><img width="1" height="1"
                                    class="lozad entered loaded"
                                    data-srcset="https://images.bfmtv.com/p2_nmFsuYftWUQH-_xFGQ86Wg7Y=/341x0:1706x1365/212x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg"
                                    src="https://images.bfmtv.com/p2_nmFsuYftWUQH-_xFGQ86Wg7Y=/341x0:1706x1365/212x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg"
                                    alt="L'épidémie de grippe hivernale s'est intensifiée en ville dans l'Hexagone et a généré une &quot;activité hospitalière très élevée&quot; et une &quot;nette augmentation des décès&quot; la deuxième semaine de l'année."
                                    data-ll-status="loaded"
                                    srcset="https://images.bfmtv.com/p2_nmFsuYftWUQH-_xFGQ86Wg7Y=/341x0:1706x1365/212x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg">
                            </picture><noscript>
                                <picture>
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/zvHTgDseqxLL5Hu97xZ2C38e348=/341x0:1706x1365/212x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp, https://images.bfmtv.com/vwcbqb6lMjcWw8pmNmcGd6pm5u4=/341x0:1706x1365/424x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/p2_nmFsuYftWUQH-_xFGQ86Wg7Y=/341x0:1706x1365/212x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg, https://images.bfmtv.com/cSs4kZrfsFDISSRwHm5oBU0ARhE=/341x0:1706x1365/424x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/HVjA2-ryU05BUIPXl3rNvemE5Ro=/341x0:1706x1365/215x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp, https://images.bfmtv.com/CeHvCjfy91pEs30BoBy7mNIKlaM=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/-wx5dQWV2vdp0gwqAljVoChicoI=/341x0:1706x1365/215x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg, https://images.bfmtv.com/uIk7yLxipv-pNlwbNqvbgqoDF_k=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/HVjA2-ryU05BUIPXl3rNvemE5Ro=/341x0:1706x1365/215x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp, https://images.bfmtv.com/CeHvCjfy91pEs30BoBy7mNIKlaM=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/-wx5dQWV2vdp0gwqAljVoChicoI=/341x0:1706x1365/215x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg, https://images.bfmtv.com/uIk7yLxipv-pNlwbNqvbgqoDF_k=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/HVjA2-ryU05BUIPXl3rNvemE5Ro=/341x0:1706x1365/215x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp, https://images.bfmtv.com/CeHvCjfy91pEs30BoBy7mNIKlaM=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/-wx5dQWV2vdp0gwqAljVoChicoI=/341x0:1706x1365/215x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg, https://images.bfmtv.com/uIk7yLxipv-pNlwbNqvbgqoDF_k=/341x0:1706x1365/430x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg 2x">
                                    <img src="https://images.bfmtv.com/p2_nmFsuYftWUQH-_xFGQ86Wg7Y=/341x0:1706x1365/212x0/images/L-epidemie-de-grippe-hivernale-s-est-intensifiee-en-ville-dans-l-Hexagone-et-a-genere-une-activite-hospitaliere-tres-elevee-et-une-nette-augmentation-des-deces-la-deuxieme-semaine-de-l-annee-2014214.jpg"
                                        alt="L&#39;épidémie de grippe hivernale s&#39;est intensifiée en ville dans l&#39;Hexagone et a généré une &quot;activité hospitalière très élevée&quot; et une &quot;nette augmentation des décès&quot; la deuxième semaine de l&#39;année.">
                                </picture>
                            </noscript>
                        </a>
                        <div class="podcast_wrapper_infos"
                            data-audio-src="https://altice.simplecastaudio.com/d5c49a09-d2c9-4bd6-936c-564b5af336d7/episodes/60745e9a-a741-466c-a2c2-df0b09811f02/audio/128/default.mp3?awCollectionId=d5c49a09-d2c9-4bd6-936c-564b5af336d7&amp;awEpisodeId=60745e9a-a741-466c-a2c2-df0b09811f02&amp;category=News&amp;episode_published_at=2025-01-30T16%3A06%3A12&amp;episode_title=Pourquoi+la+grippe+s%27intensifie-t-elle+encore+en+France%3F&amp;network=228028218708&amp;podcast_title=La+question+info"
                            data-img-src="https://images.bfmtv.com/sy5tSQpKAaOwsKEmZMUXjWqsTrs=/0x0:0x0/180x0/podcast/podcasts/principale-24_1.png"
                            data-title="Pourquoi la grippe s'intensifie-t-elle encore en France?"
                            data-id="202501300695" data-podcast-nom="La question info">
                            <a
                                href="#"
                                title="Pourquoi la grippe s'intensifie-t-elle encore en France?">
                                <h3 class="podcast_title_container">Pourquoi la grippe s'intensifie-t-elle encore en
                                    France?</h3>
                            </a>
                            <div class="podcast_item_picto" listener="true"><svg viewBox="-12 -10 32 32" width="40"
                                    height="40" fill="#FFF" class="pausing">
                                    <use
                                        xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play">
                                    </use>
                                </svg> <svg viewBox="-12 -10 36 36" width="40" height="40" fill="#FFF"
                                    class="playing">
                                    <use
                                        xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause">
                                    </use>
                                </svg></div>
                        </div>
                    </article>
                    <article class="podcast_item">
                        <a
                            href="#"
                            title="La ville de Los Angeles va-t-elle devenir inhabitable?">
                            <picture>
                                <source media="(min-width: 441px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/jaC712jvieVAsju04JXWszE2dl4=/341x0:1706x1365/212x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp, https://images.bfmtv.com/_iVqeRDpYqgPbrYMb1SZhMnb9Po=/341x0:1706x1365/424x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 441px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/QJc1nIKCKR1i0fMEMo31VVyxKfw=/341x0:1706x1365/212x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg, https://images.bfmtv.com/WlN43Xa6dj_kyA61CyXTm8GViNk=/341x0:1706x1365/424x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/5yGUPGJtlM73YnczuFKQfLVR_Js=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/jfaWba1VOxT6NZbSOMwhUUxpblc=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/5yGUPGJtlM73YnczuFKQfLVR_Js=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/jfaWba1VOxT6NZbSOMwhUUxpblc=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/5yGUPGJtlM73YnczuFKQfLVR_Js=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/jfaWba1VOxT6NZbSOMwhUUxpblc=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered"><img width="1" height="1"
                                    class="lozad entered loaded"
                                    data-srcset="https://images.bfmtv.com/QJc1nIKCKR1i0fMEMo31VVyxKfw=/341x0:1706x1365/212x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg"
                                    src="https://images.bfmtv.com/QJc1nIKCKR1i0fMEMo31VVyxKfw=/341x0:1706x1365/212x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg"
                                    alt="Un pompier passe devant une maison en flammes suite à l'incendie de Palisades lors d'une puissante tempête de vent le 8 janvier 2025 dans le quartier de Pacific Palisades à Los Angeles, en Californie."
                                    data-ll-status="loaded"
                                    srcset="https://images.bfmtv.com/QJc1nIKCKR1i0fMEMo31VVyxKfw=/341x0:1706x1365/212x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg">
                            </picture><noscript>
                                <picture>
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/jaC712jvieVAsju04JXWszE2dl4=/341x0:1706x1365/212x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp, https://images.bfmtv.com/_iVqeRDpYqgPbrYMb1SZhMnb9Po=/341x0:1706x1365/424x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/QJc1nIKCKR1i0fMEMo31VVyxKfw=/341x0:1706x1365/212x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg, https://images.bfmtv.com/WlN43Xa6dj_kyA61CyXTm8GViNk=/341x0:1706x1365/424x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/iehkLe9seTxl6lucPLiGzL4ELVc=/341x0:1706x1365/215x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp, https://images.bfmtv.com/5yGUPGJtlM73YnczuFKQfLVR_Js=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/wmAZAUSiDwlknTmo1R_-4s32Dio=/341x0:1706x1365/215x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg, https://images.bfmtv.com/jfaWba1VOxT6NZbSOMwhUUxpblc=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/iehkLe9seTxl6lucPLiGzL4ELVc=/341x0:1706x1365/215x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp, https://images.bfmtv.com/5yGUPGJtlM73YnczuFKQfLVR_Js=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/wmAZAUSiDwlknTmo1R_-4s32Dio=/341x0:1706x1365/215x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg, https://images.bfmtv.com/jfaWba1VOxT6NZbSOMwhUUxpblc=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/iehkLe9seTxl6lucPLiGzL4ELVc=/341x0:1706x1365/215x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp, https://images.bfmtv.com/5yGUPGJtlM73YnczuFKQfLVR_Js=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/wmAZAUSiDwlknTmo1R_-4s32Dio=/341x0:1706x1365/215x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg, https://images.bfmtv.com/jfaWba1VOxT6NZbSOMwhUUxpblc=/341x0:1706x1365/430x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg 2x">
                                    <img src="https://images.bfmtv.com/QJc1nIKCKR1i0fMEMo31VVyxKfw=/341x0:1706x1365/212x0/images/Un-pompier-passe-devant-une-maison-en-flammes-suite-a-l-incendie-de-Palisades-lors-d-une-puissante-tempete-de-vent-le-8-janvier-2025-dans-le-quartier-de-Pacific-Palisades-a-Los-Angeles-en-Californie-2009339.jpg"
                                        alt="Un pompier passe devant une maison en flammes suite à l&#39;incendie de Palisades lors d&#39;une puissante tempête de vent le 8 janvier 2025 dans le quartier de Pacific Palisades à Los Angeles, en Californie.">
                                </picture>
                            </noscript>
                        </a>
                        <div class="podcast_wrapper_infos"
                            data-audio-src="https://altice.simplecastaudio.com/542430b5-dc26-421d-892a-d58f8d7e0f8d/episodes/4fa9f99d-6880-4be3-85ce-38332a3777d9/audio/128/default.mp3?awCollectionId=542430b5-dc26-421d-892a-d58f8d7e0f8d&amp;awEpisodeId=4fa9f99d-6880-4be3-85ce-38332a3777d9&amp;category=Society+%26+Culture&amp;episode_published_at=2025-01-30T05%3A00%3A03&amp;episode_title=La+ville+de+Los+Angeles+va-t-elle+devenir+inhabitable%3F&amp;network=228028218708&amp;podcast_title=La+question+m%C3%A9t%C3%A9o+climat"
                            data-img-src="https://images.bfmtv.com/shFtOYWro3LiPVS9sydiADGr8Y0=/0x0:0x0/180x0/podcast/podcasts/principale-474_2.png"
                            data-title="La ville de Los Angeles va-t-elle devenir inhabitable?"
                            data-id="202501300063" data-podcast-nom="La question météo climat">
                            <a
                                href="#"
                                title="La ville de Los Angeles va-t-elle devenir inhabitable?">
                                <h3 class="podcast_title_container">La ville de Los Angeles va-t-elle devenir
                                    inhabitable?</h3>
                            </a>
                            <div class="podcast_item_picto" listener="true"><svg viewBox="-12 -10 32 32" width="40"
                                    height="40" fill="#FFF" class="pausing">
                                    <use
                                        xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play">
                                    </use>
                                </svg> <svg viewBox="-12 -10 36 36" width="40" height="40" fill="#FFF"
                                    class="playing">
                                    <use
                                        xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause">
                                    </use>
                                </svg></div>
                        </div>
                    </article>
                    <article class="podcast_item"><a
                            href="#"
                            title="L'économie française est-elle à l'arrêt?">
                            <picture>
                                <source media="(min-width: 992px)"
                                    srcset="https://images.bfmtv.com/qN94MluKXlTzX82CY9aSBjR-r9A=/0x0:0x0/60x0/podcast/podcasts/principale-26_1.png, https://images.bfmtv.com/CW4gVvOeSSP6yqZWxHmWyj-M86M=/0x0:0x0/120x0/podcast/podcasts/principale-26_1.png 2x">
                                <source media="(min-width: 641px)"
                                    srcset="https://images.bfmtv.com/qN94MluKXlTzX82CY9aSBjR-r9A=/0x0:0x0/60x0/podcast/podcasts/principale-26_1.png, https://images.bfmtv.com/CW4gVvOeSSP6yqZWxHmWyj-M86M=/0x0:0x0/120x0/podcast/podcasts/principale-26_1.png 2x">
                                <img src="https://images.bfmtv.com/qN94MluKXlTzX82CY9aSBjR-r9A=/0x0:0x0/60x0/podcast/podcasts/principale-26_1.png"
                                    srcset="https://images.bfmtv.com/qN94MluKXlTzX82CY9aSBjR-r9A=/0x0:0x0/60x0/podcast/podcasts/principale-26_1.png, https://images.bfmtv.com/CW4gVvOeSSP6yqZWxHmWyj-M86M=/0x0:0x0/120x0/podcast/podcasts/principale-26_1.png 2x"
                                    alt="L'économie française est-elle à l'arrêt?"
                                    title="L'économie française est-elle à l'arrêt?">
                            </picture>
                        </a>
                        <div class="podcast_wrapper_infos"
                            data-audio-src="https://altice.simplecastaudio.com/b1116d2c-044a-4ebc-a3cb-6472bad39c1b/episodes/97ac9416-fc7c-458c-aca8-6ef14cb19296/audio/128/default.mp3?awCollectionId=b1116d2c-044a-4ebc-a3cb-6472bad39c1b&amp;awEpisodeId=97ac9416-fc7c-458c-aca8-6ef14cb19296&amp;category=News%2CBusiness&amp;episode_published_at=2025-01-30T16%3A06%3A35&amp;episode_title=L%27%C3%A9conomie+fran%C3%A7aise+est-elle+%C3%A0+l%27arr%C3%AAt%3F&amp;network=228028218708&amp;podcast_title=La+question+%C3%A9co"
                            data-img-src="https://images.bfmtv.com/Ae4nYI8YzttO-aARBTn4tvtUhco=/0x0:0x0/180x0/podcast/podcasts/principale-26_1.png"
                            data-title="L'économie française est-elle à l'arrêt?" data-id="202501300697"
                            data-podcast-nom="La question éco"><a
                                href="#"
                                title="L'économie française est-elle à l'arrêt?">
                                <h3 class="podcast_title_container">L'économie française est-elle à l'arrêt?</h3>
                            </a>
                            <div class="podcast_item_picto" listener="true">
                                <svg viewBox="-12 -10 32 32" width="40"
                                    height="40" fill="#FFF" class="pausing">
                                    <use
                                        xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play">
                                    </use>
                                </svg> <svg viewBox="-12 -10 36 36" width="40" height="40" fill="#FFF"
                                    class="playing">
                                    <use
                                        xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause">
                                    </use>
                                </svg>
                            </div>
                        </div>
                    </article>
                    <article class="podcast_item"><a
                            href="#"
                            title="Pourquoi Meghan Markle est-elle si détestée?">
                            <picture>
                                <source media="(min-width: 441px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/76cWgpFGGbnnNEecwpLCvGjDCzo=/0x112:1570x1682/212x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp, https://images.bfmtv.com/7H8vQB7xCSGcxHnqBAY0auKAp-o=/0x112:1570x1682/424x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 441px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/BJsAi43XKyeiSf-e4PwEwmXR8vU=/0x112:1570x1682/212x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg, https://images.bfmtv.com/-TKL1ulvczkA2LxpuFG2yOLeNio=/0x112:1570x1682/424x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/BkHF4Pt14ZNzV8y45qSd8H6uRj4=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/G3O8IRwlUZKN2PRo_QW-H8FRIBY=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/BkHF4Pt14ZNzV8y45qSd8H6uRj4=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/G3O8IRwlUZKN2PRo_QW-H8FRIBY=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/BkHF4Pt14ZNzV8y45qSd8H6uRj4=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="1" height="1" class="lozad entered"
                                    srcset="https://images.bfmtv.com/G3O8IRwlUZKN2PRo_QW-H8FRIBY=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered"><img width="1" height="1"
                                    class="lozad entered loaded"
                                    data-srcset="https://images.bfmtv.com/BJsAi43XKyeiSf-e4PwEwmXR8vU=/0x112:1570x1682/212x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg"
                                    src="https://images.bfmtv.com/BJsAi43XKyeiSf-e4PwEwmXR8vU=/0x112:1570x1682/212x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg"
                                    alt="Meghan et Harry lors d'une visite officielle à Dublin, le 11 juillet 2018. "
                                    data-ll-status="loaded"
                                    srcset="https://images.bfmtv.com/BJsAi43XKyeiSf-e4PwEwmXR8vU=/0x112:1570x1682/212x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg">
                            </picture><noscript>
                                <picture>
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/76cWgpFGGbnnNEecwpLCvGjDCzo=/0x112:1570x1682/212x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp, https://images.bfmtv.com/7H8vQB7xCSGcxHnqBAY0auKAp-o=/0x112:1570x1682/424x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/BJsAi43XKyeiSf-e4PwEwmXR8vU=/0x112:1570x1682/212x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg, https://images.bfmtv.com/-TKL1ulvczkA2LxpuFG2yOLeNio=/0x112:1570x1682/424x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/gA5LMfV4BS6Pnn_8AT7FAYT-pNE=/0x112:1570x1682/215x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp, https://images.bfmtv.com/BkHF4Pt14ZNzV8y45qSd8H6uRj4=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/qDx0PqnlITBV6DQlxaZ567sIlGI=/0x112:1570x1682/215x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg, https://images.bfmtv.com/G3O8IRwlUZKN2PRo_QW-H8FRIBY=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/gA5LMfV4BS6Pnn_8AT7FAYT-pNE=/0x112:1570x1682/215x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp, https://images.bfmtv.com/BkHF4Pt14ZNzV8y45qSd8H6uRj4=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/qDx0PqnlITBV6DQlxaZ567sIlGI=/0x112:1570x1682/215x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg, https://images.bfmtv.com/G3O8IRwlUZKN2PRo_QW-H8FRIBY=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/gA5LMfV4BS6Pnn_8AT7FAYT-pNE=/0x112:1570x1682/215x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp, https://images.bfmtv.com/BkHF4Pt14ZNzV8y45qSd8H6uRj4=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/qDx0PqnlITBV6DQlxaZ567sIlGI=/0x112:1570x1682/215x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg, https://images.bfmtv.com/G3O8IRwlUZKN2PRo_QW-H8FRIBY=/0x112:1570x1682/430x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg 2x">
                                    <img src="https://images.bfmtv.com/BJsAi43XKyeiSf-e4PwEwmXR8vU=/0x112:1570x1682/212x0/images/Meghan-et-Harry-lors-d-une-visite-officielle-a-Dublin-le-11-juillet-2018-1937853.jpg"
                                        alt="Meghan et Harry lors d&#39;une visite officielle à Dublin, le 11 juillet 2018. ">
                                </picture>
                            </noscript>
                        </a>
                        <div class="podcast_wrapper_infos"
                            data-audio-src="https://altice.simplecastaudio.com/64014c94-7808-471c-b37f-af4280cca6ff/episodes/615aee99-53e9-4761-94a3-72795e15c441/audio/128/default.mp3?awCollectionId=64014c94-7808-471c-b37f-af4280cca6ff&amp;awEpisodeId=615aee99-53e9-4761-94a3-72795e15c441&amp;category=News&amp;episode_published_at=2025-01-25T05%3A00%3A02&amp;episode_title=Pourquoi+Meghan+Markle+est-elle+si+d%C3%A9test%C3%A9e%3F&amp;network=228028218708&amp;podcast_title=Le+podcast+royal"
                            data-img-src="https://images.bfmtv.com/PZqlCdxroB-AXUpX_stGvQLmyUg=/0x0:0x0/180x0/podcast/podcasts/principale-255_2.png"
                            data-title="Pourquoi Meghan Markle est-elle si détestée?" data-id="202501250053"
                            data-podcast-nom="Le podcast royal">
                            <a
                                href="#"
                                title="Pourquoi Meghan Markle est-elle si détestée?">
                                <h3 class="podcast_title_container">Pourquoi Meghan Markle est-elle si détestée?
                                </h3>
                            </a>
                            <div class="podcast_item_picto" listener="true"><svg viewBox="-12 -10 32 32" width="40"
                                    height="40" fill="#FFF" class="pausing">
                                    <use
                                        xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play">
                                    </use>
                                </svg> <svg viewBox="-12 -10 36 36" width="40" height="40" fill="#FFF"
                                    class="playing">
                                    <use
                                        xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause">
                                    </use>
                                </svg></div>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
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
            playPauseBtn.textContent = '❚❚'; 
            e.textContent="❚❚";// Change to Pause icon
        } else {
            audio.pause();
            playPauseBtn.textContent = '▶';
            e.textContent="▶"; // Change to Play icon
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