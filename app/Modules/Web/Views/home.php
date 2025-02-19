<?php $this->extend('layouts/layout_web') ?>
<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar', $active_data) ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<main class="main_wrapper home_page" id="main_wrapper">
    <div class="grid_wrapper">
        <div class="grid_column grid_column_abc home_header">
            <div class="slider_topic_desktop" id="slider_topic_desktop">
                <section class="slider_topic" id="slider_topic"><button
                        class="slider_arrow_top_category slider_prev carousel_arrow">Précédent</button>
                    <div class="slider_wrapper">
                        <!-- <ul class="slider_container">
                            <li class="slider_topic__item"><a class="slider_topic__link"
                                    href="politique/gouvernement/bugdet-le-ps-a-acte-la-non-censure-du-gouvernement-de-francois-bayrou_AP-202502030630.html"
                                    title="Budgets et 49.3"><span>Budgets et 49.3</span></a></li>
                            <li class="slider_topic__item"><a class="slider_topic__link"
                                    href="paris/paris/arme-factice-tags-de-croix-gammees-ce-que-l-on-sait-des-tirs-de-la-surete-ferroviaire-sur-un-homme-a-la-gare-d-austerlitz_AN-202502030741.html"
                                    title="Tirs gare d&#39;Austerlitz à Paris"><span>Tirs gare d&#39;Austerlitz à Paris</span></a></li>
                            <li class="slider_topic__item"><a class="slider_topic__link"
                                    href="societe/eboulement-en-savoie-est-ce-que-la-route-de-tignes-val-d-isere-ou-la-plagne-sera-rouverte-pour-le-debut-des-vacances_AV-202502030388.html"
                                    title="Éboulement en Savoie"><span>Éboulement en Savoie</span></a></li>
                            <li class="slider_topic__item"><a class="slider_topic__link"
                                    href="international/amerique-nord/etats-unis/donald-trump/index.html"
                                    title="Donald Trump "><span>Donald Trump</span></a></li>
                            <li class="slider_topic__item"><a class="slider_topic__link"
                                    href="international/moyen-orient/israel/gaza-une-nouvelle-phase-la-treve-israel-hamas-s-ouvre-donald-trump-optimiste-sur-les-negociations_AD-202502030084.html"
                                    title="Trêve à Gaza"><span>Trêve à Gaza</span></a></li>
                            <li class="slider_topic__item"><a class="slider_topic__link"
                                    href="culture/festival-de-cannes-2025-l-actrice-juliette-binoche-choisie-pour-presider-le-jury_VN-202502040054.html"
                                    title="Festival de Cannes"><span>Festival de Cannes</span></a></li>
                        </ul> -->
                    </div><button class="slider_arrow_top_category slider_next carousel_arrow">Suivant</button>
                </section>
                <script>
                    window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                        const blocothequeSliderTopicParent = document.getElementById("slider_topic_desktop");
                        const megamaxParent = document.getElementById("megamax_parent");
                        if (window.deviceSize !== "L" && blocothequeSliderTopicParent && megamaxParent) {
                            megamaxParent.insertAdjacentHTML("afterend", blocothequeSliderTopicParent.innerHTML);
                            blocothequeSliderTopicParent.remove()
                        }
                        cutText("#slider_topic", ".slider_topic__item .slider_topic__link", 40);
                        carouselTopic("slider_topic", ".slider_topic__item")
                    }));
                </script>
            </div>
        </div>
        <div class="grid_column grid_column_ab">
            <div class="block_une" id="block_une_home_fleuve_1579094701695">
                <article class="une_item icon_big content_item"><a
                        href="<?= base_url('web/article/' . $latest_news[0]['Media_Id_1']) ?>"
                        title="Paris: un homme tente de prendre l&#39;arme d&#39;un policier devant la préfecture de police, deux agents légèrement blessés">
                        <div class="flag_article flag_color">Alerte info</div>
                        <picture class="content_item_cover with-js">
                            <source media="(min-width: 441px)" width="2" height="1"
                                srcset="<?= base_url('uploads/' . $latest_news[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $latest_news[0]['Media_Image_4']) ?> 2x"
                                type="image/jpeg">
                            <source media="(min-width: 361px)" width="4" height="3"
                                srcset="<?= base_url('uploads/' . $latest_news[0]['Media_Image_4']) ?> 2x"
                                type="image/jpeg">
                            <source media="(min-width: 321px)" width="4" height="3"
                                srcset="<?= base_url('uploads/' . $latest_news[0]['Media_Image_4']) ?> 2x"
                                type="image/jpeg">
                            <source media="(min-width: 300px)" width="4" height="3"
                                srcset="<?= base_url('uploads/' . $latest_news[0]['Media_Image_4']) ?> 2x"
                                type="image/jpeg"><img width="2" height="1"
                                src="<?= base_url('uploads/' . $latest_news[0]['Media_Image_4']) ?>"
                                alt="Un fourgon de police devant la préfecture de police de Paris (photo d&#39;illustration)">
                        </picture>
                        <div class="une_caption">
                            <h2 class="title_une_item"><?= $latest_news[0]['Title_2'] ?></h2>
                        </div>
                    </a></article>
                <p class="content_description"><span class="item_chapo item_chapo_une"><?= $latest_news[0]['Title_2'] ?></span></p>
            </div>
            <div id="before_duo"></div>
            <div class="block_fleuve icon_middle" id="bloc_duo_home_fleuve_1579094701695">
                <?php foreach ($latest_news as $news): ?>
                    <?php if ($news['Media_type_10'] == "Videos"): ?>
                        <article class="duo_liste content_item content_type content_type_video">
                            <a
                                href="<?= base_url('web/videos/' . $news['Media_Id_1']) ?>"
                                title="<?= $news['Title_2'] ?>">
                                <figure class="duo_caption">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>,<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="https://images.bfmtv.com/MNSX2zyrDn5DvOBZn_HjuKY5Sx4=/14x31:2046x1174/640x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp 2x"
                                            type="image/webp">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg"><img width="16" height="9" class="lozad"
                                            data-srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                            src="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                            alt="Le président Emmanuel Macron à l&#39;Élysée le 23 octobre 2024 ">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>,<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <img
                                                src="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                                alt="<?= $news['Title_2'] ?>">
                                        </picture>
                                    </noscript>
                                </figure>
                                <h3 class="content_item_title"><?= $news['Title_2'] ?></h3>
                            </a>
                            <div class="item_related_block">
                                <h3 class="item_related content_type">
                                    <a
                                        href="<?= base_url('web/videos/' . $news['Media_Id_1']) ?>"
                                        title="
                                        <?= $news['Title_2'] ?>"><?= $news['Title_2'] ?></a>
                                </h3>
                            </div>
                        </article>
                    <?php elseif ($news['Media_type_10'] == "Actualites") : ?>
                        <article class="duo_liste content_item content_type content_type_article">
                            <a
                                href="<?= base_url('web/article/' . $news['Media_Id_1']) ?>"
                                title="<?= $news['Title_2'] ?>">
                                <figure class="duo_caption">
                                    <picture class="content_item_cover with-js">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg"><img width="16" height="9" class="lozad"
                                            data-srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                            src="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                            alt="<?= $news['Title_2'] ?>">
                                    </picture><noscript>
                                        <picture class="content_item_cover">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <img
                                                src="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                                alt="<?= $news['Title_2'] ?>">
                                        </picture>
                                    </noscript>
                                </figure>
                                <h3 class="content_item_title"><?= $news['Title_2'] ?></h3>
                            </a>
                        </article>
                    <?php endif; ?>
                <?php endforeach ?>

                <!-- <article class="duo_liste content_item content_type content_type_article"><a
                        href="police-justice/viols-de-mazan-le-proces-en-appel-se-tiendra-a-partir-du-6-octobre-2025_AN-202502040561.html"
                        title="INFO BFMTV. Viols de Mazan: le procès en appel se tiendra à partir du 6 octobre 2025">
                        <figure class="duo_caption">
                            <div class="flag_article flag_color">Alerte info</div>
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Gxfyo62WItEc5t1sqBPnKPIgy5E=/0x39:768x471/385x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp, https://images.bfmtv.com/UmA1Jv85teq5ANbiLvwcQTFh21g=/0x39:768x471/770x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Jaj-fEhPauOfJyBUJhzOA0lOjfY=/0x39:768x471/385x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg, https://images.bfmtv.com/F7lmymKxwU7EkYo9YH0y57lw-eo=/0x39:768x471/770x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Fv8dB_Bnz3J-8mx2G_pWPgz7dAo=/0x39:768x471/840x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Vs1WBLClAoXgaPx2Qso7HFVIpZQ=/0x39:768x471/840x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Iu5-v-AM_ZCPb19WEOX2pD0qoFQ=/0x39:768x471/736x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/PDirFgo_e6CcE_C6kpyI_KVH42E=/0x39:768x471/736x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/NFQzl2I83xew4-x4WPSvuPaDINA=/0x39:768x471/640x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/7XdQoI2Wrb7pX8EZDkKOpAvKy6s=/0x39:768x471/640x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="https://images.bfmtv.com/Jaj-fEhPauOfJyBUJhzOA0lOjfY=/0x39:768x471/385x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg"
                                    src="https://images.bfmtv.com/Jaj-fEhPauOfJyBUJhzOA0lOjfY=/0x39:768x471/385x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg"
                                    alt="Des coaccusés arrivent au tribunal d&#39;Avignon pour le procès des viols de Mazan, le 10 septembre 2024 ">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/Gxfyo62WItEc5t1sqBPnKPIgy5E=/0x39:768x471/385x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp, https://images.bfmtv.com/UmA1Jv85teq5ANbiLvwcQTFh21g=/0x39:768x471/770x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/Jaj-fEhPauOfJyBUJhzOA0lOjfY=/0x39:768x471/385x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg, https://images.bfmtv.com/F7lmymKxwU7EkYo9YH0y57lw-eo=/0x39:768x471/770x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/_YkpgldAi246lgmfKc6ubS4tpjc=/0x39:768x471/420x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp, https://images.bfmtv.com/Fv8dB_Bnz3J-8mx2G_pWPgz7dAo=/0x39:768x471/840x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/kiH3AO0IZDhwPyZi9gx_v3Yuqxk=/0x39:768x471/420x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg, https://images.bfmtv.com/Vs1WBLClAoXgaPx2Qso7HFVIpZQ=/0x39:768x471/840x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/GJQ2zR-oKCYQfJoEv59F7xRuLjs=/0x39:768x471/368x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp, https://images.bfmtv.com/Iu5-v-AM_ZCPb19WEOX2pD0qoFQ=/0x39:768x471/736x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/sSKBGWu-HKBS65ZWPHcE8Le6fVg=/0x39:768x471/368x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg, https://images.bfmtv.com/PDirFgo_e6CcE_C6kpyI_KVH42E=/0x39:768x471/736x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/e4u3vzwoceIGlJpuOiX8Uc19c5w=/0x39:768x471/320x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp, https://images.bfmtv.com/NFQzl2I83xew4-x4WPSvuPaDINA=/0x39:768x471/640x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/8tMzCHil1l1LWqUY46-kQj8gIoE=/0x39:768x471/320x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg, https://images.bfmtv.com/7XdQoI2Wrb7pX8EZDkKOpAvKy6s=/0x39:768x471/640x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/Jaj-fEhPauOfJyBUJhzOA0lOjfY=/0x39:768x471/385x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg"
                                        alt="Des coaccusés arrivent au tribunal d&#39;Avignon pour le procès des viols de Mazan, le 10 septembre 2024 ">
                                </picture>
                            </noscript>
                        </figure>
                        <h3 class="content_item_title">INFO BFMTV. Viols de Mazan: le procès en appel se tiendra à partir du 6
                            octobre 2025</h3>
                    </a>
                </article> -->
                <?php foreach ($lat_videos as $news): ?>
                    <article class="duo_liste content_item content_type content_type_video">
                        <a
                            href="<?= base_url('web/videos/' . $news['Media_Id_1']) ?>"
                            title="<?= $news['Title_2'] ?>">
                            <figure class="duo_caption">
                                <picture class="content_item_cover with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                        src="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                        alt="<?= $news['Title_2'] ?>">
                                </picture><noscript>
                                    <picture class="content_item_cover">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                        <img
                                            src="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                            alt="<?= $news['Title_2'] ?> ">
                                    </picture>
                                </noscript>
                            </figure>
                            <h3 class="content_item_title"><?= $news['Title_2'] ?></h3>
                        </a>
                    </article>
                <?php endforeach; ?>

                <!-- <article class="content_item content_item_small content_type content_type_article"><a
                        href="societe/immigration-titres-de-sejour-expulsions-demande-d-asile-les-chiffres-pour-2024-devoiles_AD-202502040450.html"
                        title="Immigration: titres de séjour, expulsions, demande d&#39;asile... Les chiffres pour 2024 dévoilés">
                        <picture class="content_item_cover with-js">
                            <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/Zc9wf3g5HdYLFDnPESfLngAHRkw=/0x53:2048x1205/132x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp, https://images.bfmtv.com/el0cynua_ziBWbj_MsuxiWQx9_s=/0x53:2048x1205/264x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/V58zQLTiB_6T2dMxTEl8qH7jExU=/0x53:2048x1205/132x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg, https://images.bfmtv.com/2YXvi-OW9Vbl5RWjbGkt99eaDeg=/0x53:2048x1205/264x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/8zWd4RTlj_eskOys5g8r_OyfPlg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/WnWvUcmKA18GuA3opExORgDghZg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/8zWd4RTlj_eskOys5g8r_OyfPlg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/WnWvUcmKA18GuA3opExORgDghZg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/8zWd4RTlj_eskOys5g8r_OyfPlg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/WnWvUcmKA18GuA3opExORgDghZg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg 2x"
                                type="image/jpeg"><img width="16" height="9" class="lozad"
                                data-srcset="https://images.bfmtv.com/V58zQLTiB_6T2dMxTEl8qH7jExU=/0x53:2048x1205/132x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg"
                                src="https://images.bfmtv.com/V58zQLTiB_6T2dMxTEl8qH7jExU=/0x53:2048x1205/132x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg"
                                alt="Un demandeur d&#39;asile secouru par l&#39;Aquarius arrive à Paris en 2018 (image d&#39;illustration)">
                        </picture><noscript>
                            <picture class="content_item_cover">
                                <source type="image/webp" media="(min-width: 441px)"
                                    srcset="https://images.bfmtv.com/Zc9wf3g5HdYLFDnPESfLngAHRkw=/0x53:2048x1205/132x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp, https://images.bfmtv.com/el0cynua_ziBWbj_MsuxiWQx9_s=/0x53:2048x1205/264x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp 2x">
                                <source type="image/jpeg" media="(min-width: 441px)"
                                    srcset="https://images.bfmtv.com/V58zQLTiB_6T2dMxTEl8qH7jExU=/0x53:2048x1205/132x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg, https://images.bfmtv.com/2YXvi-OW9Vbl5RWjbGkt99eaDeg=/0x53:2048x1205/264x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg 2x">
                                <source type="image/webp" media="(min-width: 361px)"
                                    srcset="https://images.bfmtv.com/kwX3YVCs4hHuqGi1XuYoIX1dGSY=/0x53:2048x1205/125x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp, https://images.bfmtv.com/8zWd4RTlj_eskOys5g8r_OyfPlg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp 2x">
                                <source type="image/jpeg" media="(min-width: 361px)"
                                    srcset="https://images.bfmtv.com/ehpgZs-JORgiTq9DQSWBFQSdgms=/0x53:2048x1205/125x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg, https://images.bfmtv.com/WnWvUcmKA18GuA3opExORgDghZg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg 2x">
                                <source type="image/webp" media="(min-width: 321px)"
                                    srcset="https://images.bfmtv.com/kwX3YVCs4hHuqGi1XuYoIX1dGSY=/0x53:2048x1205/125x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp, https://images.bfmtv.com/8zWd4RTlj_eskOys5g8r_OyfPlg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp 2x">
                                <source type="image/jpeg" media="(min-width: 321px)"
                                    srcset="https://images.bfmtv.com/ehpgZs-JORgiTq9DQSWBFQSdgms=/0x53:2048x1205/125x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg, https://images.bfmtv.com/WnWvUcmKA18GuA3opExORgDghZg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg 2x">
                                <source type="image/webp" media="(min-width: 300px)"
                                    srcset="https://images.bfmtv.com/kwX3YVCs4hHuqGi1XuYoIX1dGSY=/0x53:2048x1205/125x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp, https://images.bfmtv.com/8zWd4RTlj_eskOys5g8r_OyfPlg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.webp 2x">
                                <source type="image/jpeg" media="(min-width: 300px)"
                                    srcset="https://images.bfmtv.com/ehpgZs-JORgiTq9DQSWBFQSdgms=/0x53:2048x1205/125x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg, https://images.bfmtv.com/WnWvUcmKA18GuA3opExORgDghZg=/0x53:2048x1205/250x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg 2x">
                                <img
                                    src="https://images.bfmtv.com/V58zQLTiB_6T2dMxTEl8qH7jExU=/0x53:2048x1205/132x0/images/Un-demandeur-d-asile-secouru-par-l-Aquarius-a-Paris-en-2018-image-d-illustration-2027033.jpg"
                                    alt="Un demandeur d&#39;asile secouru par l&#39;Aquarius arrive à Paris en 2018 (image d&#39;illustration)">
                            </picture>
                        </noscript>
                        <div class="content_item_title">
                            <h3>Immigration: titres de séjour, expulsions, demande d&#39;asile... Les chiffres pour 2024 dévoilés
                            </h3>
                        </div>
                    </a></article>
                <article class="content_item content_item_small content_type content_type_video"><a
                        href="https://rmcsport.bfmtv.com/football/transferts/mercato-neymar-duran-rashford-les-dix-transferts-les-plus-fous-du-mercato-d-hiver_AV-202502040346.html"
                        title="Mercato: Neymar, Duran, Rashford... les dix transferts les plus fous du mercato d’hiver">
                        <picture class="content_item_cover with-js">
                            <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/5n8m6hqv3BIaB7tYiH9vVk0-Nnw=/7x0:2039x1143/132x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp, https://images.bfmtv.com/0XbGDKNoYCdM1ntK3vEk_R7GgKY=/7x0:2039x1143/264x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/QyHHNGJvSAn19FB2U8j6ayzTJ5g=/7x0:2039x1143/132x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg, https://images.bfmtv.com/4dSr1AKhIIwjjXWxEAuKWbdBHok=/7x0:2039x1143/264x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/51QRA02_LIoMIl2uS3upO3IJl8k=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/N8sPdC_1mSsUaBy6wCJc7INGJMM=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/51QRA02_LIoMIl2uS3upO3IJl8k=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/N8sPdC_1mSsUaBy6wCJc7INGJMM=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/51QRA02_LIoMIl2uS3upO3IJl8k=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/N8sPdC_1mSsUaBy6wCJc7INGJMM=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg 2x"
                                type="image/jpeg"><img width="16" height="9" class="lozad"
                                data-srcset="https://images.bfmtv.com/QyHHNGJvSAn19FB2U8j6ayzTJ5g=/7x0:2039x1143/132x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg"
                                src="https://images.bfmtv.com/QyHHNGJvSAn19FB2U8j6ayzTJ5g=/7x0:2039x1143/132x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg"
                                alt="Jhon Duran avec Aston Villa en décembre 2024">
                        </picture><noscript>
                            <picture class="content_item_cover">
                                <source type="image/webp" media="(min-width: 441px)"
                                    srcset="https://images.bfmtv.com/5n8m6hqv3BIaB7tYiH9vVk0-Nnw=/7x0:2039x1143/132x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp, https://images.bfmtv.com/0XbGDKNoYCdM1ntK3vEk_R7GgKY=/7x0:2039x1143/264x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp 2x">
                                <source type="image/jpeg" media="(min-width: 441px)"
                                    srcset="https://images.bfmtv.com/QyHHNGJvSAn19FB2U8j6ayzTJ5g=/7x0:2039x1143/132x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg, https://images.bfmtv.com/4dSr1AKhIIwjjXWxEAuKWbdBHok=/7x0:2039x1143/264x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg 2x">
                                <source type="image/webp" media="(min-width: 361px)"
                                    srcset="https://images.bfmtv.com/Zm1kCRK6m-5R-HdP2HsgRc8q4m8=/7x0:2039x1143/125x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp, https://images.bfmtv.com/51QRA02_LIoMIl2uS3upO3IJl8k=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp 2x">
                                <source type="image/jpeg" media="(min-width: 361px)"
                                    srcset="https://images.bfmtv.com/63AUtLzmoVfScVS28_1shuoqwQs=/7x0:2039x1143/125x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg, https://images.bfmtv.com/N8sPdC_1mSsUaBy6wCJc7INGJMM=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg 2x">
                                <source type="image/webp" media="(min-width: 321px)"
                                    srcset="https://images.bfmtv.com/Zm1kCRK6m-5R-HdP2HsgRc8q4m8=/7x0:2039x1143/125x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp, https://images.bfmtv.com/51QRA02_LIoMIl2uS3upO3IJl8k=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp 2x">
                                <source type="image/jpeg" media="(min-width: 321px)"
                                    srcset="https://images.bfmtv.com/63AUtLzmoVfScVS28_1shuoqwQs=/7x0:2039x1143/125x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg, https://images.bfmtv.com/N8sPdC_1mSsUaBy6wCJc7INGJMM=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg 2x">
                                <source type="image/webp" media="(min-width: 300px)"
                                    srcset="https://images.bfmtv.com/Zm1kCRK6m-5R-HdP2HsgRc8q4m8=/7x0:2039x1143/125x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp, https://images.bfmtv.com/51QRA02_LIoMIl2uS3upO3IJl8k=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.webp 2x">
                                <source type="image/jpeg" media="(min-width: 300px)"
                                    srcset="https://images.bfmtv.com/63AUtLzmoVfScVS28_1shuoqwQs=/7x0:2039x1143/125x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg, https://images.bfmtv.com/N8sPdC_1mSsUaBy6wCJc7INGJMM=/7x0:2039x1143/250x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg 2x">
                                <img
                                    src="https://images.bfmtv.com/QyHHNGJvSAn19FB2U8j6ayzTJ5g=/7x0:2039x1143/132x0/images/Jhon-Duran-avec-Aston-Villa-en-decembre-2024-2011037.jpg"
                                    alt="Jhon Duran avec Aston Villa en décembre 2024">
                            </picture>
                        </noscript>
                        <div class="content_item_title">
                            <h3>Mercato: Neymar, Duran, Rashford... les dix transferts les plus fous du mercato d’hiver</h3>
                        </div>
                    </a></article>
                <article class="content_item content_item_small content_type content_type_video"><a
                        href="https://rmcsport.bfmtv.com/football/kylian-mbappe/real-madrid-mbappe-blesse-au-mollet-et-forfait-en-coupe-du-roi_AV-202502040466.html"
                        title="Real Madrid: Mbappé blessé au mollet et forfait en Coupe du Roi">
                        <picture class="content_item_cover with-js">
                            <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/G5IUAQ3RIA_FDeAgTJdy20B0DEI=/0x61:2048x1213/132x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp, https://images.bfmtv.com/eqbUQRgN8zHlNn_D4vWHSe-slgI=/0x61:2048x1213/264x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/anafEn-MUc-JePnjESNnqQ0DvhM=/0x61:2048x1213/132x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg, https://images.bfmtv.com/xeT5UgPFgU5G-Mof6nWcou6Xo80=/0x61:2048x1213/264x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/jDCP0ExJjfFgyzEnbB451Wsgv04=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/dLDMraR38SUoIdVGMTGvaIQ-7a0=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/jDCP0ExJjfFgyzEnbB451Wsgv04=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/dLDMraR38SUoIdVGMTGvaIQ-7a0=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/jDCP0ExJjfFgyzEnbB451Wsgv04=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x"
                                type="image/webp">
                            <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                srcset="https://images.bfmtv.com/dLDMraR38SUoIdVGMTGvaIQ-7a0=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x"
                                type="image/jpeg"><img width="16" height="9" class="lozad"
                                data-srcset="https://images.bfmtv.com/anafEn-MUc-JePnjESNnqQ0DvhM=/0x61:2048x1213/132x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg"
                                src="https://images.bfmtv.com/anafEn-MUc-JePnjESNnqQ0DvhM=/0x61:2048x1213/132x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg"
                                alt="Kylian Mbappé lors de Brest-Real Madrid, le 29/01/2025">
                        </picture><noscript>
                            <picture class="content_item_cover">
                                <source type="image/webp" media="(min-width: 441px)"
                                    srcset="https://images.bfmtv.com/G5IUAQ3RIA_FDeAgTJdy20B0DEI=/0x61:2048x1213/132x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp, https://images.bfmtv.com/eqbUQRgN8zHlNn_D4vWHSe-slgI=/0x61:2048x1213/264x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x">
                                <source type="image/jpeg" media="(min-width: 441px)"
                                    srcset="https://images.bfmtv.com/anafEn-MUc-JePnjESNnqQ0DvhM=/0x61:2048x1213/132x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg, https://images.bfmtv.com/xeT5UgPFgU5G-Mof6nWcou6Xo80=/0x61:2048x1213/264x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x">
                                <source type="image/webp" media="(min-width: 361px)"
                                    srcset="https://images.bfmtv.com/AQvhDWY5jOff6WGTD8cLHDkDMmk=/0x61:2048x1213/125x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp, https://images.bfmtv.com/jDCP0ExJjfFgyzEnbB451Wsgv04=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x">
                                <source type="image/jpeg" media="(min-width: 361px)"
                                    srcset="https://images.bfmtv.com/eay6G4WF8Sx_L3U3Yaq7pfkcrzo=/0x61:2048x1213/125x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg, https://images.bfmtv.com/dLDMraR38SUoIdVGMTGvaIQ-7a0=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x">
                                <source type="image/webp" media="(min-width: 321px)"
                                    srcset="https://images.bfmtv.com/AQvhDWY5jOff6WGTD8cLHDkDMmk=/0x61:2048x1213/125x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp, https://images.bfmtv.com/jDCP0ExJjfFgyzEnbB451Wsgv04=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x">
                                <source type="image/jpeg" media="(min-width: 321px)"
                                    srcset="https://images.bfmtv.com/eay6G4WF8Sx_L3U3Yaq7pfkcrzo=/0x61:2048x1213/125x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg, https://images.bfmtv.com/dLDMraR38SUoIdVGMTGvaIQ-7a0=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x">
                                <source type="image/webp" media="(min-width: 300px)"
                                    srcset="https://images.bfmtv.com/AQvhDWY5jOff6WGTD8cLHDkDMmk=/0x61:2048x1213/125x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp, https://images.bfmtv.com/jDCP0ExJjfFgyzEnbB451Wsgv04=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x">
                                <source type="image/jpeg" media="(min-width: 300px)"
                                    srcset="https://images.bfmtv.com/eay6G4WF8Sx_L3U3Yaq7pfkcrzo=/0x61:2048x1213/125x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg, https://images.bfmtv.com/dLDMraR38SUoIdVGMTGvaIQ-7a0=/0x61:2048x1213/250x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x">
                                <img
                                    src="https://images.bfmtv.com/anafEn-MUc-JePnjESNnqQ0DvhM=/0x61:2048x1213/132x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg"
                                    alt="Kylian Mbappé lors de Brest-Real Madrid, le 29/01/2025">
                            </picture>
                        </noscript>
                        <div class="content_item_title">
                            <h3>Real Madrid: Mbappé blessé au mollet et forfait en Coupe du Roi</h3>
                        </div>
                    </a></article>-->
            </div>
            <div id="sas_120870_s" class="bloc_center_full">
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
        </div>

        <div class="grid_column grid_column_c grid_aside">
            <div class="mise_en_avant_droite" id="mise_en_avant_droite"></div>
            <div class="block block_direct block_direct_video" id="direct_home_video_1697216323610">
                <a
                    title="Regarder le direct"
                    onclick="return tc_events_31(this,'click-navigation',{'clicktype':'click.navigation', 'clickchapter1':'home', 'clickchapter2':'video', 'clickname':'direct-tv_bfmtv'});"
                    href="<?= base_url('web/direct-tv') ?>"><span class="block_direct_title">Le direct</span>
                    <div class="direct_video_hover"><span>Regarder le direct</span></div>
                    <div class="video_block" id="video_player_6321040605112">
                        <video-js id="player_6321040605112" data-embed="default" data-application-id="undefined"
                            data-autoplay="true" data-account="876450610001" adjustplayer="ddff4JxPe" data-video-id="6321040605112"
                            data-video-type="live" pip="false" disablevisibilityhandler="false" adjustfrommediasize="false"
                            preload="none" position="home_droite" playsinline tags="">
                            <img fetchpriority="high"
                                src="<?= base_url('uploads/' . $direct_tv[0]['Media_Image_4']) ?>" width="800"
                                height="450" alt="placeholder video">
                        </video-js>
                    </div>
                </a>
            </div>
            <script>
                // window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                //     cutText("#direct_home_video_1697216323610", ".direct_home_title", 30);
                //     if (window.deviceSize === "L") {
                //         onTagCoReady(() => {
                //             initPlayerVideo(document.querySelector("#direct_home_video_1697216323610").querySelector(
                //                 ".video_block"), "876450610001", "ddff4JxPe", "6321040605112", options = {
                //                 isMuted: true,
                //                 avinsightPosition: "home_droite"
                //             })
                //         })
                //     }
                // }));
            </script>
            <script>
                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                    carouselItem("block_mea_live_1673534397371", ".carousel_item", 1)
                }));
            </script>
             <br/>
             <br/>
             <br/>
             <br/>
            <section class="block block_simple block_news" id="block_news24_home">
                <h2 class="block_simple_title">News 24/7</h2>
                <br/>
                <br/>

                <h3 class="block_simple_footer" id="block_news24_simple_footer"><a href="news-24-7/index.html"
                        title="toute l&#39;actualité">toute l&#39;actualité</a></h3>
                <div class="list_news_wrapper" id="list_news_wrapper_fil_info_1579613800738">
                    <div class="list_news">
                        <?php foreach ($news_list as $news): ?>
                            <article class="content_item">
                                <a href="<?= base_url('web/article/' . $news['Media_Id_1']) ?>" title="<?= $news['Title_2'] ?>">
                                    <div style="width:60%;float:right;">
                                        <h3 class="content_item_title" style="font-size:14px;margin:0;"><?= $news['Title_2'] ?></h3>
                                        <div class="content_item_time">
                                            <time class="content_live_time" itemprop="pubdate" pubdate="pubdate" datetime="2025-02-04T16:15:34+01:00"><?= date('h:i', strtotime($news['DateCreat_8'])) ?></time>
                                        </div>
                                    </div>
                                    <picture class="content_item_cover_small with-js" style="width:80px;margin:0;">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/webp">
                                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                            srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x"
                                            type="image/jpeg"><img width="16" height="9" class="lozad"
                                            data-srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                            src="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                            alt="<?= $news['Title_2'] ?>">
                                    </picture>
                                    <noscript>
                                        <picture class="content_item_cover_small">
                                            <source type="image/webp" media="(min-width: 441px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 441px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/webp" media="(min-width: 361px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 361px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/webp" media="(min-width: 321px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 321px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/webp" media="(min-width: 300px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <source type="image/jpeg" media="(min-width: 300px)"
                                                srcset="<?= base_url('uploads/' . $news['Media_Image_4']) ?>, <?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                            <img
                                                src="<?= base_url('uploads/' . $news['Media_Image_4']) ?>"
                                                alt="<?= $news['Title_2'] ?>">
                                        </picture>
                                    </noscript>
                                </a>
                            </article>
                        <?php endforeach; ?>

                    </div>
                </div>
            </section>
            <script>
                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                    if (window.deviceSize == "L") {
                        cutText("#list_news_wrapper_fil_info_1579613800738",
                            "article:not(.content_type_tag_edito):not(.content_item_flash) .item_chapo", 200);
                        resizeDisplayBlock("block_news24_home", "#block_news24_simple_footer",
                            "list_news_wrapper_fil_info_1579613800738", "afterend")
                    }
                }));
            </script>
            <div id="sas_pave2_l" class="bloc_center_full" style="padding:25px;">
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
        </div>
    </div>
    <!--<script>
        if (["S", "M"].includes(window.deviceSize)) {
            const widgetBlocks = document.querySelectorAll(".widget_jo_block");
            const beforeDuoElement = document.getElementById("before_duo");
            if (widgetBlocks.length) {
                widgetBlocks.forEach(bloc => {
                    beforeDuoElement.appendChild(bloc)
                })
            }
            const sliderTopic = document.querySelector(".slider_topic");
            const megaMax = document.querySelector("#megamax_parent");
            const scoringBlock = document.querySelector(".block_scoring");
            if (scoringBlock) {
                if (sliderTopic) sliderTopic.before(scoringBlock);
                else if (megaMax) megaMax.after(scoringBlock)
            }
        }
    </script>-->
    <div class="grid_column grid_column_abc">
        <!-- <section class="block block_ordered_five icon_middle" id="ordered_list_top_contenus_manuel_1583490815722">
            <div class="block_header">
                <h2 class="block_title">Les plus lus</h2>
            </div>
            <div class="slider_wrapper">
                <ol class="ordered_list slider_container">
                    <li><a
                            href="police-justice/une-graduation-dans-l-horreur-eric-larcheveque-raconte-l-enlevement-de-son-associe-david-belland-et-la-demande-de-rancon_AV-202502040208.html"
                            title="&quot;Un choc très fort&quot;: Éric Larchevêque raconte l&#39;enlèvement de son associé David Balland et la demande de rançon">
                            <article class="content_item content_item_ordered content_type content_type_video">
                                <h3 class="content_item_title"><span>&quot;Un choc très fort&quot;: Éric Larchevêque raconte
                                        l&#39;enlèvement de son associé David Balland et la demande de rançon</span></h3>
                            </article>
                        </a></li>
                    <li><a
                            href="sante/aspartame-une-petition-europeenne-pour-interdire-le-produit-potentiellement-cancerogene_AN-202502040025.html"
                            title="Cancer: faut-il interdire l&#39;aspartame? Une pétition européenne lancée face à des &quot;risques inacceptables&quot;">
                            <article class="content_item content_item_ordered content_type content_type_video">
                                <h3 class="content_item_title"><span>Cancer: faut-il interdire l&#39;aspartame? Une pétition
                                        européenne lancée face à des &quot;risques inacceptables&quot;</span></h3>
                            </article>
                        </a></li>
                    <li><a
                            href="environnement/chaleur-secheresse-pluies-intenses-les-eboulements-vont-ils-devenir-plus-frequents-avec-le-changement-climatique_AN-202502030730.html"
                            title="Chaleur, sécheresse, pluies intenses... Les éboulements vont-ils devenir plus fréquents avec le changement climatique?">
                            <article class="content_item content_item_ordered content_type content_type_article">
                                <h3 class="content_item_title"><span>Chaleur, sécheresse, pluies intenses... Les éboulements vont-ils
                                        devenir plus fréquents avec le changement climatique?</span></h3>
                            </article>
                        </a></li>
                    <li><a
                            href="international/europe/angleterre/il-n-avait-aucune-chance-un-britannique-tue-sur-le-front-en-ukraine-des-sa-premiere-mission_AN-202502030919.html"
                            title="&quot;Il n&#39;avait aucune chance&quot;: un Britannique de 18 ans tué sur le front en Ukraine dès sa première mission">
                            <article class="content_item content_item_ordered content_type content_type_article">
                                <h3 class="content_item_title"><span>&quot;Il n&#39;avait aucune chance&quot;: un Britannique de 18
                                        ans tué sur le front en Ukraine dès sa première mission</span></h3>
                            </article>
                        </a></li>
                    <li><a
                            href="international/europe/grece/nous-sommes-tous-inquiets-des-milliers-d-habitants-fuient-l-ile-de-santorin-touchee-par-des-seismes-a-repetition_AD-202502030603.html"
                            title="&quot;Nous sommes tous inquiets&quot;: des milliers d&#39;habitants fuient l&#39;île de Santorin, touchée par des séismes à répétition">
                            <article class="content_item content_item_ordered content_type content_type_video">
                                <h3 class="content_item_title"><span>&quot;Nous sommes tous inquiets&quot;: des milliers
                                        d&#39;habitants fuient l&#39;île de Santorin, touchée par des séismes à répétition</span></h3>
                            </article>
                        </a></li>
                </ol>
            </div>
        </section> -->
        <section class="block block_carousel block_carousel_darker" data="initCarousel"
            id="block_slider_media_1579614731850">
            <div class="block_header" id="block_header_slider_media_1579614731850">
                <h2 class="block_title">Vidéos</h2>
                <ul class="block_links" id="slider_links_slider_media_1579614731850">
                    <li><a href="videos/index.html" title="Toutes les vidéos ">Toutes les vidéos</a></li>
                </ul>
                <div class="carousel_arrow">
                    <button class="slider_arrow slider_prev">Précédent</button>
                    <button class="slider_arrow slider_next">Suivant</button>
                </div>
            </div>
            <div class="slider_wrapper">
                <div class="slider_container">
                    <?php foreach ($latest_videos as $video): ?>
                        <article class="content_item carousel_item content_type content_type_video">
                            <a href="<?= base_url('web/videos/' . $video['Media_Id_1']) ?>"
                                title="<?= $video['Title_2'] ?>">
                                <picture class="content_item_cover with-js">
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
                                        srcset="h<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                        type="image/webp" data-ll-status="entered">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                        srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                        type="image/jpeg" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                        srcset="h<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                        type="image/webp" data-ll-status="entered">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                        srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x"
                                        type="image/jpeg" data-ll-status="entered"><img width="16" height="9" class="lozad entered loaded"
                                        data-srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>"
                                        src="<?= base_url('uploads/' . $video['Media_Image_4']) ?>"
                                        alt="<?= $video['Title_2'] ?>"
                                        data-ll-status="loaded"
                                        srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>">
                                </picture><noscript>
                                    <picture class="content_item_cover">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>,<?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, h<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, h<?= base_url('uploads/' . $news['Media_Image_4']) ?> 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?>2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="<?= base_url('uploads/' . $video['Media_Image_4']) ?>, <?= base_url('uploads/' . $video['Media_Image_4']) ?> 2x">
                                        <img
                                            src="<?= base_url('uploads/' . $video['Media_Image_4']) ?>"
                                            alt="Paris: deux policiers légèrement blessés par un homme devant la préfecture de police">
                                    </picture>
                                </noscript>
                                <h3 class="content_item_title"><?= $video['Title_2'] ?></h3>
                            </a>
                        </article>
                    <?php endforeach; ?>

                </div>
                <div class="nav_holder" id="list_slider_slider_media_1579614731850"></div>
            </div>
        </section>
    </div>
    </div>
    </section>
    <script>
        window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
            resizeDisplayBlock("list_slider_slider_media_1579614731850", "#slider_links_slider_media_1579614731850",
                "block_header_slider_media_1579614731850", "beforeend");
            carouselItem("block_slider_media_1579614731850", ".carousel_item", "")
        }));
    </script>
    <section class="block block_carousel block_carousel_transparent container" data="initCarousel"
        id="block_slider_multi_podcasts_1691749734161" style="width: 100%; padding:0px 100px 0px 140px;">
        <div class="block_header" id="block_header_slider_multi_podcasts_1691749734161">
            <h2 class="block_title">PODCASTS</h2>
            <ul class="block_links" id="slider_links_slider_multi_podcasts_1691749734161">
                <li><a href="<?= base_url('web/podcasts') ?>" title="Tous les podcasts">Tous les podcasts</a></li>
            </ul>
            <div class="carousel_arrow">
                <button class="slider_arrow slider_prev">Précédent</button>
                <button class="slider_arrow slider_next">Suivant</button>
            </div>
        </div>
        <div class="slider_wrapper_podcast">
            <div class="slider_container small-slide">
                <?php foreach ($latest_podcasts as $podcast): ?>
                    <article class="content_item carousel_item">
                        <div class="content_top_episode">
                            <a
                                href="<?= base_url('web/podcasts/' . $podcast['Media_Id_1']) ?>"
                                title="<?= $podcast['Title_2'] ?>">
                                <picture class="content_item_picture with-js">
                                    <source media="(min-width: 441px)" width="1" height="1"
                                        srcset="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?>, <?= base_url('uploads/' . $podcast['Media_Image_4']) ?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="1" height="1"
                                        srcset="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?>, <?= base_url('uploads/' . $podcast['Media_Image_4']) ?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="1" height="1"
                                        srcset="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="1" height="1"
                                        srcset="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="1" height="1"
                                        srcset="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="1" height="1"
                                        srcset="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?> 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="1" height="1"
                                        srcset="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?> 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="1" height="1"
                                        srcset="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?> 2x"
                                        type="image/jpeg"><img width="1" height="1"
                                        src="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?>"
                                        alt="">
                                </picture>
                            </a>
                            <div class="content_picto">

                                <div class="podcast_item_infos podcast_wrapper_infos"
                                    data-audio-src="https://altice.simplecastaudio.com/bfb6c6be-eeaf-454f-884e-13f3561bb06d/episodes/a2322e3f-0f09-41a1-8d76-9c471cf98031/audio/128/default.mp3?awCollectionId=bfb6c6be-eeaf-454f-884e-13f3561bb06d&amp;awEpisodeId=a2322e3f-0f09-41a1-8d76-9c471cf98031&amp;category=News&amp;episode_published_at=2025-02-03T17%3A57%3A18&amp;episode_title=Affaire+Ad%C3%A8le+Haenel%3A+le+r%C3%A9alisateur+Christophe+Ruggia+condamn%C3%A9+pour+agressions+sexuelles+sur+mineure&amp;network=228028218708&amp;podcast_title=Le+titre+%C3%A0+la+une"
                                    data-img-src="<?= base_url('uploads/' . $podcast['Media_Image_4']) ?>"
                                    data-title="<?= $podcast['Title_2'] ?>"
                                    data-id="202502030832" data-podcast-nom="Le titre à la une">
                                    <div class="podcast_item_picto" listener="true">
                                        <svg viewBox="-11 -10 32 32" width="40" height="40"
                                            fill="#FFF" class="pausing">
                                            <use xlink:href="<? base_url('templates/news/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play') ?>"></use>
                                        </svg> <svg viewBox="-13 -12 40 40" width="40" height="40" fill="#FFF" class="playing">
                                            <use xlink:href="<? base_url('templates/news/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause') ?>"></use>
                                        </svg>
                                    </div>
                                    <div class="podcast_item_duration">19:31</div><a
                                        href="<?= base_url('web/podcasts/' . $podcast['Media_Id_1']) ?>"
                                        class="podcast_title_container"
                                        title="<?= $podcast['Title_2'] ?>">
                                        <h3 class="content_item_title episode_title"><?= $podcast['Title_2'] ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>


            </div>
            <div class="nav_holder" id="list_slider_slider_multi_podcasts_1691749734161"></div>
        </div>
    </section>
    <script>
        window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
            resizeDisplayBlock("list_slider_slider_multi_podcasts_1691749734161",
                "#slider_links_slider_multi_podcasts_1691749734161",
                "block_header_slider_multi_podcasts_1691749734161", "beforeend");
            carouselItem("block_slider_multi_podcasts_1691749734161", ".carousel_item", 6)
        }));
    </script>
    <section class="block block_topic topic_simple" id="blockrubrique_1579614195569" style="width: 100%; padding:0px 100px 0px 140px;">
        <div class="block_header" id="block_header_rubrique_1579614195569">
            <h2 class="block_title">Économie</h2>
        </div>
        <article class="une_topic icon_big"><a
                href="<?= base_url('web/article/' . $featured_economie[0]['Media_Id_1']) ?>"
                title="<?= $featured_economie[0]['Title_2'] ?>">
                <picture class="content_item_cover with-js">
                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                        srcset="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?> 2x"
                        type="image/jpeg">
                    <source media="(min-width: 361px)" width="4" height="3" class="lozad"
                        srcset="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?> 2x"
                        type="image/jpeg">
                    <source media="(min-width: 321px)" width="4" height="3" class="lozad"
                        srcset="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?> 2x"
                        type="image/jpeg">
                    <source media="(min-width: 300px)" width="4" height="3" class="lozad"
                        srcset="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?> 2x"
                        type="image/jpeg"><img width="16" height="9" class="lozad"
                        data-srcset="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?>"
                        src="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?>"
                        alt="Des bouteilles d&#39;eau minérale de marques appartenant au groupe Nestlé Waters, le 21 février 2024 à Paris">
                </picture><noscript>
                    <picture class="content_item_cover">
                        <source type="image/jpeg" media="(min-width: 441px)"
                            srcset="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?> 2x">
                        <source type="image/jpeg" media="(min-width: 361px)"
                            srcset="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?> 2x">
                        <source type="image/jpeg" media="(min-width: 321px)"
                            srcset="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?> 2x">
                        <source type="image/jpeg" media="(min-width: 300px)"
                            srcset="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?> 2x">
                        <img
                            src="<?= base_url('uploads/' . $featured_economie[0]['Media_Image_4']) ?>"
                            alt="Des bouteilles d&#39;eau minérale de marques appartenant au groupe Nestlé Waters, le 21 février 2024 à Paris">
                    </picture>
                </noscript>
                <div class="une_caption">
                    <h3 class="content_item_title"><?= $featured_economie[0]['Title_2'] ?></h3>
                </div>
            </a>
        </article>
        <div class="list_topic">
            <?php if (!empty($featured_economie)): ?>
                <?php foreach ($featured_economie as $economie): ?>
                    <article class="content_item content_item_small content_type <?php if ($economie['Media_type_10'] == "Videos"): ?>content_type_video<?php endif; ?>"><a
                            href="<?= base_url(($economie['Media_type_10'] == "Videos") ? 'web/videos/' . $economie['Media_Id_1'] : 'web/article/' . $economie['Media_Id_1']) ?>"
                            title="<?= $economie['Title_2'] ?>">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>, <?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>, <?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>"
                                    src="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>"
                                    alt="Le président de la République, Emmanuel Macron, à l&#39;Élysée le 6 janvier 2025 ">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>, <?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>, <?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>, <?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>, <?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>, <?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>, <?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>, <?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>, <?= base_url('uploads/' . $economie['Media_Image_4']) ?> 2x">
                                    <img
                                        src="<?= base_url('uploads/' . $economie['Media_Image_4']) ?>"
                                        alt="<?= $economie['Title_2'] ?> ">
                                </picture>
                            </noscript>
                            <div>
                                <h3 class="content_item_title"><?= $economie['Title_2'] ?></h3>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
            <!-- <article class="content_item content_item_small content_type content_type_article"><a
                    href="economie/entreprises/agriculture/trois-initiatives-communes-karine-le-marchand-rassemblera-les-patrons-de-la-grande-distribution-au-salon-de-l-agriculture_AD-202502040504.html"
                    title="&quot;Trois initiatives communes&quot;: Karine Le Marchand rassemblera les patrons de la grande distribution au Salon de l&#39;agriculture">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/oi77acD8c49gAlMOhdyaHXjLcB0=/0x106:2048x1258/112x0/images/Carrefour-1800537.jpg, https://images.bfmtv.com/xbkTkIJP3exdEUJ4WhKrjC3Ed00=/0x106:2048x1258/224x0/images/Carrefour-1800537.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/xbkTkIJP3exdEUJ4WhKrjC3Ed00=/0x106:2048x1258/224x0/images/Carrefour-1800537.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/xbkTkIJP3exdEUJ4WhKrjC3Ed00=/0x106:2048x1258/224x0/images/Carrefour-1800537.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/xbkTkIJP3exdEUJ4WhKrjC3Ed00=/0x106:2048x1258/224x0/images/Carrefour-1800537.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/oi77acD8c49gAlMOhdyaHXjLcB0=/0x106:2048x1258/112x0/images/Carrefour-1800537.jpg"
                            src="https://images.bfmtv.com/oi77acD8c49gAlMOhdyaHXjLcB0=/0x106:2048x1258/112x0/images/Carrefour-1800537.jpg"
                            alt="La présence des distributeurs au Salon de l&#39;agriculture est fluctuante. Sur la photo, le stand de Carrefour en 2013.">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/oi77acD8c49gAlMOhdyaHXjLcB0=/0x106:2048x1258/112x0/images/Carrefour-1800537.jpg, https://images.bfmtv.com/xbkTkIJP3exdEUJ4WhKrjC3Ed00=/0x106:2048x1258/224x0/images/Carrefour-1800537.jpg 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/oi77acD8c49gAlMOhdyaHXjLcB0=/0x106:2048x1258/112x0/images/Carrefour-1800537.jpg, https://images.bfmtv.com/xbkTkIJP3exdEUJ4WhKrjC3Ed00=/0x106:2048x1258/224x0/images/Carrefour-1800537.jpg 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/oi77acD8c49gAlMOhdyaHXjLcB0=/0x106:2048x1258/112x0/images/Carrefour-1800537.jpg, https://images.bfmtv.com/xbkTkIJP3exdEUJ4WhKrjC3Ed00=/0x106:2048x1258/224x0/images/Carrefour-1800537.jpg 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/oi77acD8c49gAlMOhdyaHXjLcB0=/0x106:2048x1258/112x0/images/Carrefour-1800537.jpg, https://images.bfmtv.com/xbkTkIJP3exdEUJ4WhKrjC3Ed00=/0x106:2048x1258/224x0/images/Carrefour-1800537.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/oi77acD8c49gAlMOhdyaHXjLcB0=/0x106:2048x1258/112x0/images/Carrefour-1800537.jpg"
                                alt="La présence des distributeurs au Salon de l&#39;agriculture est fluctuante. Sur la photo, le stand de Carrefour en 2013.">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">&quot;Trois initiatives communes&quot;: Karine Le Marchand rassemblera
                            les patrons de la grande distribution au Salon de l&#39;agriculture</h3>
                    </div>
                </a></article>
            <article class="content_item content_item_small content_type content_type_video"><a
                    href="economie/international/petrole-gnl-charbon-la-chine-replique-a-donald-trump-en-taxant-les-hydrocarbures-americains_AD-202502040075.html"
                    title="Pétrole, GNL, charbon: la Chine réplique à Donald Trump en taxant les hydrocarbures américains">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/P_q45ZwV4S-jBxoSrasuIr_qVnc=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.webp, https://images.bfmtv.com/UX96bXd8lMuhREHykknt70k8RZc=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/g8McnbCOlEwJoIJQesra3B2ofHU=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.jpg, https://images.bfmtv.com/EPVQQ22TY5RUb-X0G81IOZ2_pZE=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/UX96bXd8lMuhREHykknt70k8RZc=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/EPVQQ22TY5RUb-X0G81IOZ2_pZE=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/UX96bXd8lMuhREHykknt70k8RZc=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/EPVQQ22TY5RUb-X0G81IOZ2_pZE=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/UX96bXd8lMuhREHykknt70k8RZc=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/EPVQQ22TY5RUb-X0G81IOZ2_pZE=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/g8McnbCOlEwJoIJQesra3B2ofHU=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.jpg"
                            src="https://images.bfmtv.com/g8McnbCOlEwJoIJQesra3B2ofHU=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.jpg"
                            alt="Le drapeau chinois flottant devant un gratte-ciel de la ville de Shanghai (photo d&#39;illustration).">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/P_q45ZwV4S-jBxoSrasuIr_qVnc=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.webp, https://images.bfmtv.com/UX96bXd8lMuhREHykknt70k8RZc=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/g8McnbCOlEwJoIJQesra3B2ofHU=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.jpg, https://images.bfmtv.com/EPVQQ22TY5RUb-X0G81IOZ2_pZE=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/P_q45ZwV4S-jBxoSrasuIr_qVnc=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.webp, https://images.bfmtv.com/UX96bXd8lMuhREHykknt70k8RZc=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/g8McnbCOlEwJoIJQesra3B2ofHU=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.jpg, https://images.bfmtv.com/EPVQQ22TY5RUb-X0G81IOZ2_pZE=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/P_q45ZwV4S-jBxoSrasuIr_qVnc=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.webp, https://images.bfmtv.com/UX96bXd8lMuhREHykknt70k8RZc=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/g8McnbCOlEwJoIJQesra3B2ofHU=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.jpg, https://images.bfmtv.com/EPVQQ22TY5RUb-X0G81IOZ2_pZE=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/P_q45ZwV4S-jBxoSrasuIr_qVnc=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.webp, https://images.bfmtv.com/UX96bXd8lMuhREHykknt70k8RZc=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/g8McnbCOlEwJoIJQesra3B2ofHU=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.jpg, https://images.bfmtv.com/EPVQQ22TY5RUb-X0G81IOZ2_pZE=/0x98:1920x1178/224x0/images/Chine-drapeau-2026752.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/g8McnbCOlEwJoIJQesra3B2ofHU=/0x98:1920x1178/112x0/images/Chine-drapeau-2026752.jpg"
                                alt="Le drapeau chinois flottant devant un gratte-ciel de la ville de Shanghai (photo d&#39;illustration).">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">Pétrole, GNL, charbon: la Chine réplique à Donald Trump en taxant les
                            hydrocarbures américains</h3>
                    </div>
                </a></article> -->
            <!-- <article class="content_item content_item_small content_type content_type_video"><a
                    href="police-justice/une-graduation-dans-l-horreur-eric-larcheveque-raconte-l-enlevement-de-son-associe-david-belland-et-la-demande-de-rancon_AV-202502040208.html"
                    title="&quot;Un choc très fort&quot;: Éric Larchevêque raconte l&#39;enlèvement de son associé David Balland et la demande de rançon">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/qvPS9H8pti_knTyagpR-ADRIO8M=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.webp, https://images.bfmtv.com/BO9t1Y0vxV2JqOdAhXbd4dZs964=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/u7fALVdyUmpPt_GSaREkDW3GylA=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.jpg, https://images.bfmtv.com/xZLQVMs2EZo0yALaVU5WeuTuYBw=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/BO9t1Y0vxV2JqOdAhXbd4dZs964=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/xZLQVMs2EZo0yALaVU5WeuTuYBw=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/BO9t1Y0vxV2JqOdAhXbd4dZs964=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/xZLQVMs2EZo0yALaVU5WeuTuYBw=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/BO9t1Y0vxV2JqOdAhXbd4dZs964=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/xZLQVMs2EZo0yALaVU5WeuTuYBw=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/u7fALVdyUmpPt_GSaREkDW3GylA=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.jpg"
                            src="https://images.bfmtv.com/u7fALVdyUmpPt_GSaREkDW3GylA=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.jpg"
                            alt="Eric Larchevêque, cofondateur de Ledger.">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/qvPS9H8pti_knTyagpR-ADRIO8M=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.webp, https://images.bfmtv.com/BO9t1Y0vxV2JqOdAhXbd4dZs964=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/u7fALVdyUmpPt_GSaREkDW3GylA=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.jpg, https://images.bfmtv.com/xZLQVMs2EZo0yALaVU5WeuTuYBw=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/qvPS9H8pti_knTyagpR-ADRIO8M=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.webp, https://images.bfmtv.com/BO9t1Y0vxV2JqOdAhXbd4dZs964=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/u7fALVdyUmpPt_GSaREkDW3GylA=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.jpg, https://images.bfmtv.com/xZLQVMs2EZo0yALaVU5WeuTuYBw=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/qvPS9H8pti_knTyagpR-ADRIO8M=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.webp, https://images.bfmtv.com/BO9t1Y0vxV2JqOdAhXbd4dZs964=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/u7fALVdyUmpPt_GSaREkDW3GylA=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.jpg, https://images.bfmtv.com/xZLQVMs2EZo0yALaVU5WeuTuYBw=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/qvPS9H8pti_knTyagpR-ADRIO8M=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.webp, https://images.bfmtv.com/BO9t1Y0vxV2JqOdAhXbd4dZs964=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/u7fALVdyUmpPt_GSaREkDW3GylA=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.jpg, https://images.bfmtv.com/xZLQVMs2EZo0yALaVU5WeuTuYBw=/11x1:1659x928/224x0/images/Eric-Larcheveque-Ledger-2026852.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/u7fALVdyUmpPt_GSaREkDW3GylA=/11x1:1659x928/112x0/images/Eric-Larcheveque-Ledger-2026852.jpg"
                                alt="Eric Larchevêque, cofondateur de Ledger.">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">&quot;Un choc très fort&quot;: Éric Larchevêque raconte l&#39;enlèvement
                            de son associé David Balland et la demande de rançon</h3>
                    </div>
                </a></article> -->
            <div id="list_rubrique_1579614195569" class="block_links_container">
                <ul class="block_links" id="block_linksrubrique_1579614195569">
                    <li><a href="<?= base_url('web/actualites/economie') ?>" title="Toute l&#39;éco">Toute l&#39;éco</a></li>
                </ul>
            </div>
        </div>
    </section>
    <script>
        window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
            resizeDisplayBlock("list_rubrique_1579614195569", "#block_linksrubrique_1579614195569",
                "block_header_rubrique_1579614195569", "beforeend")
        }));
    </script>
    <!-- <div class="OUTBRAIN lozad" data-src="https://www.bfmtv.com" data-widget-id="SF_1"
        data-lazy-function="callOutbrainJS"></div> -->
    <section class="block block_topic topic_simple" id="blockrubrique_1579614813850" style="width: 100%; padding:0px 100px 0px 140px;">
        <div class="block_header" id="block_header_rubrique_1579614813850">
            <h2 class="block_title">Sport</h2>
        </div>
        <article class="une_topic icon_big"><a
                href="<?= base_url('web/article/' . $featured_sport[0]['Media_Id_1']) ?>"
                title="<?= $featured_sport[0]['Title_2'] ?>">
                <picture class="content_item_cover with-js">
                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                        srcset="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?> 2x"
                        type="image/jpeg">
                    <source media="(min-width: 361px)" width="4" height="3" class="lozad"
                        srcset="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?> 2x"
                        type="image/jpeg">
                    <source media="(min-width: 321px)" width="4" height="3" class="lozad"
                        srcset="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?> 2x"
                        type="image/jpeg">
                    <source media="(min-width: 300px)" width="4" height="3" class="lozad"
                        srcset="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?> 2x"
                        type="image/jpeg"><img width="16" height="9" class="lozad"
                        data-srcset="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?>"
                        src="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?>"
                        alt="Des bouteilles d&#39;eau minérale de marques appartenant au groupe Nestlé Waters, le 21 février 2024 à Paris">
                </picture><noscript>
                    <picture class="content_item_cover">
                        <source type="image/jpeg" media="(min-width: 441px)"
                            srcset="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?> 2x">
                        <source type="image/jpeg" media="(min-width: 361px)"
                            srcset="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?> 2x">
                        <source type="image/jpeg" media="(min-width: 321px)"
                            srcset="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?> 2x">
                        <source type="image/jpeg" media="(min-width: 300px)"
                            srcset="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?> 2x">
                        <img
                            src="<?= base_url('uploads/' . $featured_sport[0]['Media_Image_4']) ?>"
                            alt="Des bouteilles d&#39;eau minérale de marques appartenant au groupe Nestlé Waters, le 21 février 2024 à Paris">
                    </picture>
                </noscript>
                <div class="une_caption">
                    <h3 class="content_item_title"><?= $featured_sport[0]['Title_2'] ?></h3>
                </div>
            </a>
        </article>
        <div class="list_topic">
            <?php if (!empty($featured_sport)): ?>
                <?php foreach ($featured_sport as $sport): ?>
                    <article class="content_item content_item_small content_type <?php if ($sport['Media_type_10'] == "Videos"): ?>content_type_video<?php endif; ?>"><a
                            href="<?= base_url(($sport['Media_type_10'] == "Videos") ? 'web/videos/' . $sport['Media_Id_1'] : 'web/article/' . $sport['Media_Id_1']) ?>"
                            title="<?= $sport['Title_2'] ?>">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>, <?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>, <?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>"
                                    src="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>"
                                    alt="Le président de la République, Emmanuel Macron, à l&#39;Élysée le 6 janvier 2025 ">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>, <?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>, <?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>, <?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>, <?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>, <?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>, <?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>, <?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>, <?= base_url('uploads/' . $sport['Media_Image_4']) ?> 2x">
                                    <img
                                        src="<?= base_url('uploads/' . $sport['Media_Image_4']) ?>"
                                        alt="<?= $sport['Title_2'] ?> ">
                                </picture>
                            </noscript>
                            <div>
                                <h3 class="content_item_title"><?= $sport['Title_2'] ?></h3>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
            <!-- <article class="content_item content_item_small content_type content_type_video"><a
                    href="https://rmcsport.bfmtv.com/football/transferts/direct-mercato-suivez-en-live-toutes-les-infos-et-rumeurs-du-3-fevrier-2025-derniere-journee-du-marche-d-hiver_LN-202502030177.html"
                    title="DIRECT. Mercato: Milan tient son nouvel attaquant, et il est bien connu">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/sd9xw4tnqzAxvhe53hgDdellp9c=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp, https://images.bfmtv.com/Tsb1QEpPqJwNQ4XRWznPDIbuB7o=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/D4_DhzSf7z3eWrtE-sES9bG7YMg=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg, https://images.bfmtv.com/FW65f72Mb87NoR8hWV9ribozbXA=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/Tsb1QEpPqJwNQ4XRWznPDIbuB7o=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/FW65f72Mb87NoR8hWV9ribozbXA=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/Tsb1QEpPqJwNQ4XRWznPDIbuB7o=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/FW65f72Mb87NoR8hWV9ribozbXA=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/Tsb1QEpPqJwNQ4XRWznPDIbuB7o=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/FW65f72Mb87NoR8hWV9ribozbXA=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/D4_DhzSf7z3eWrtE-sES9bG7YMg=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg"
                            src="https://images.bfmtv.com/D4_DhzSf7z3eWrtE-sES9bG7YMg=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg"
                            alt="Joao Felix avec Chelsea, le 11 janvier 2025">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/sd9xw4tnqzAxvhe53hgDdellp9c=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp, https://images.bfmtv.com/Tsb1QEpPqJwNQ4XRWznPDIbuB7o=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/D4_DhzSf7z3eWrtE-sES9bG7YMg=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg, https://images.bfmtv.com/FW65f72Mb87NoR8hWV9ribozbXA=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/sd9xw4tnqzAxvhe53hgDdellp9c=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp, https://images.bfmtv.com/Tsb1QEpPqJwNQ4XRWznPDIbuB7o=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/D4_DhzSf7z3eWrtE-sES9bG7YMg=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg, https://images.bfmtv.com/FW65f72Mb87NoR8hWV9ribozbXA=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/sd9xw4tnqzAxvhe53hgDdellp9c=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp, https://images.bfmtv.com/Tsb1QEpPqJwNQ4XRWznPDIbuB7o=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/D4_DhzSf7z3eWrtE-sES9bG7YMg=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg, https://images.bfmtv.com/FW65f72Mb87NoR8hWV9ribozbXA=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/sd9xw4tnqzAxvhe53hgDdellp9c=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp, https://images.bfmtv.com/Tsb1QEpPqJwNQ4XRWznPDIbuB7o=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/D4_DhzSf7z3eWrtE-sES9bG7YMg=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg, https://images.bfmtv.com/FW65f72Mb87NoR8hWV9ribozbXA=/0x25:2016x1159/224x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/D4_DhzSf7z3eWrtE-sES9bG7YMg=/0x25:2016x1159/112x0/images/Joao-Felix-avec-Chelsea-le-11-janvier-2025-2021996.jpg"
                                alt="Joao Felix avec Chelsea, le 11 janvier 2025">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">DIRECT. Mercato: Milan tient son nouvel attaquant, et il est bien connu
                        </h3>
                    </div>
                </a></article>
            <article class="content_item content_item_small content_type content_type_video"><a
                    href="https://rmcsport.bfmtv.com/football/transferts/mercato-ibrahimovic-justifie-le-depart-de-bennacer-a-l-om_AV-202502040583.html"
                    title="Mercato: Ibrahimovic justifie le départ de Bennacer à l&#39;OM">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/z1o8DZg0tA2WRw8oDCloMVnjwYU=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp, https://images.bfmtv.com/rxQWFftgeQxRIRvTzbxUvQwoxkg=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/gVxAkZrnnOQA23kmfXRs9OVnPys=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg, https://images.bfmtv.com/XAlMkYAzwbGlyt30krqsUMq1jhU=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/rxQWFftgeQxRIRvTzbxUvQwoxkg=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/XAlMkYAzwbGlyt30krqsUMq1jhU=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/rxQWFftgeQxRIRvTzbxUvQwoxkg=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/XAlMkYAzwbGlyt30krqsUMq1jhU=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/rxQWFftgeQxRIRvTzbxUvQwoxkg=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/XAlMkYAzwbGlyt30krqsUMq1jhU=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/gVxAkZrnnOQA23kmfXRs9OVnPys=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg"
                            src="https://images.bfmtv.com/gVxAkZrnnOQA23kmfXRs9OVnPys=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg"
                            alt="Zlatan Ibrahimovic lors d&#39;un match de l&#39;AC Milan à Zagreb en Ligue des champions, le 29 janvier 2025">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/z1o8DZg0tA2WRw8oDCloMVnjwYU=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp, https://images.bfmtv.com/rxQWFftgeQxRIRvTzbxUvQwoxkg=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/gVxAkZrnnOQA23kmfXRs9OVnPys=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg, https://images.bfmtv.com/XAlMkYAzwbGlyt30krqsUMq1jhU=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/z1o8DZg0tA2WRw8oDCloMVnjwYU=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp, https://images.bfmtv.com/rxQWFftgeQxRIRvTzbxUvQwoxkg=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/gVxAkZrnnOQA23kmfXRs9OVnPys=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg, https://images.bfmtv.com/XAlMkYAzwbGlyt30krqsUMq1jhU=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/z1o8DZg0tA2WRw8oDCloMVnjwYU=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp, https://images.bfmtv.com/rxQWFftgeQxRIRvTzbxUvQwoxkg=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/gVxAkZrnnOQA23kmfXRs9OVnPys=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg, https://images.bfmtv.com/XAlMkYAzwbGlyt30krqsUMq1jhU=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/z1o8DZg0tA2WRw8oDCloMVnjwYU=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp, https://images.bfmtv.com/rxQWFftgeQxRIRvTzbxUvQwoxkg=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/gVxAkZrnnOQA23kmfXRs9OVnPys=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg, https://images.bfmtv.com/XAlMkYAzwbGlyt30krqsUMq1jhU=/0x137:1392x920/224x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/gVxAkZrnnOQA23kmfXRs9OVnPys=/0x137:1392x920/112x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg"
                                alt="Zlatan Ibrahimovic lors d&#39;un match de l&#39;AC Milan à Zagreb en Ligue des champions, le 29 janvier 2025">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">Mercato: Ibrahimovic justifie le départ de Bennacer à l&#39;OM</h3>
                    </div>
                </a></article>
            <article class="content_item content_item_small content_type content_type_video"><a
                    href="https://rmcsport.bfmtv.com/football/kylian-mbappe/real-madrid-mbappe-blesse-au-mollet-et-forfait-en-coupe-du-roi_AV-202502040466.html"
                    title="Real Madrid: Mbappé blessé au mollet et forfait en Coupe du Roi">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/-VF2Fs-x5meJt8CupQx9CMDQZeM=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp, https://images.bfmtv.com/8aef0E9EFa9Bc_X0Lo0kF0_kzQ8=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/KDnbHfuS6IY1hDnK55X7CMDRN7I=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg, https://images.bfmtv.com/DbHyqAwtFxxY9_CNgapXCHGsI1s=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/8aef0E9EFa9Bc_X0Lo0kF0_kzQ8=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/DbHyqAwtFxxY9_CNgapXCHGsI1s=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/8aef0E9EFa9Bc_X0Lo0kF0_kzQ8=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/DbHyqAwtFxxY9_CNgapXCHGsI1s=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/8aef0E9EFa9Bc_X0Lo0kF0_kzQ8=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/DbHyqAwtFxxY9_CNgapXCHGsI1s=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/KDnbHfuS6IY1hDnK55X7CMDRN7I=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg"
                            src="https://images.bfmtv.com/KDnbHfuS6IY1hDnK55X7CMDRN7I=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg"
                            alt="Kylian Mbappé lors de Brest-Real Madrid, le 29/01/2025">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/-VF2Fs-x5meJt8CupQx9CMDQZeM=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp, https://images.bfmtv.com/8aef0E9EFa9Bc_X0Lo0kF0_kzQ8=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/KDnbHfuS6IY1hDnK55X7CMDRN7I=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg, https://images.bfmtv.com/DbHyqAwtFxxY9_CNgapXCHGsI1s=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/-VF2Fs-x5meJt8CupQx9CMDQZeM=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp, https://images.bfmtv.com/8aef0E9EFa9Bc_X0Lo0kF0_kzQ8=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/KDnbHfuS6IY1hDnK55X7CMDRN7I=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg, https://images.bfmtv.com/DbHyqAwtFxxY9_CNgapXCHGsI1s=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/-VF2Fs-x5meJt8CupQx9CMDQZeM=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp, https://images.bfmtv.com/8aef0E9EFa9Bc_X0Lo0kF0_kzQ8=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/KDnbHfuS6IY1hDnK55X7CMDRN7I=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg, https://images.bfmtv.com/DbHyqAwtFxxY9_CNgapXCHGsI1s=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/-VF2Fs-x5meJt8CupQx9CMDQZeM=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp, https://images.bfmtv.com/8aef0E9EFa9Bc_X0Lo0kF0_kzQ8=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/KDnbHfuS6IY1hDnK55X7CMDRN7I=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg, https://images.bfmtv.com/DbHyqAwtFxxY9_CNgapXCHGsI1s=/0x61:2048x1213/224x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/KDnbHfuS6IY1hDnK55X7CMDRN7I=/0x61:2048x1213/112x0/images/Kylian-Mbappe-lors-de-Brest-Real-Madrid-le-29-01-2025-2023638.jpg"
                                alt="Kylian Mbappé lors de Brest-Real Madrid, le 29/01/2025">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">Real Madrid: Mbappé blessé au mollet et forfait en Coupe du Roi</h3>
                    </div>
                </a></article> -->
            <div id="list_rubrique_1579614813850" class="block_links_container">
                <ul class="block_links" id="block_linksrubrique_1579614813850">
                    <li><a href="<?= base_url('web/actualites/sport') ?>" title="Tout le sport">Tout le sport</a></li>
                </ul>
            </div>
        </div>
    </section>
    <script>
        window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
            resizeDisplayBlock("list_rubrique_1579614813850", "#block_linksrubrique_1579614813850",
                "block_header_rubrique_1579614813850", "beforeend")
        }));
    </script>
    <script>
        window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
            resizeDisplayBlock("list_slider_slider_manuel_1651746354738", "#slider_links_slider_manuel_1651746354738",
                "block_header_slider_manuel_1651746354738", "beforeend");
            carouselItem("block_slider_manuel_1651746354738", ".carousel_item", "6")
        }));
    </script>
    <?php if (!empty($featured_international)): ?>
        <section class="block block_topic topic_simple" id="blockrubrique_1698250268555" style="width: 100%; padding:0px 100px 0px 140px;">
            <div class="block_header" id="block_header_rubrique_1698250268555">
                <h2 class="block_title">International</h2>
            </div>

            <article class="une_topic icon_big"><a
                    href="<?= base_url('web/article/' . $featured_international[0]['Media_Id_1']) ?>"
                    title="<?= $featured_international[0]['Title_2'] ?>">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?> 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="4" height="3" class="lozad"
                            srcset="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?> 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="4" height="3" class="lozad"
                            srcset="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?> 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="4" height="3" class="lozad"
                            srcset="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?> 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?>"
                            src="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?>"
                            alt="Des bouteilles d&#39;eau minérale de marques appartenant au groupe Nestlé Waters, le 21 février 2024 à Paris">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?> 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?> 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?> 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?>, <?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?> 2x">
                            <img
                                src="<?= base_url('uploads/' . $featured_international[0]['Media_Image_4']) ?>"
                                alt="Des bouteilles d&#39;eau minérale de marques appartenant au groupe Nestlé Waters, le 21 février 2024 à Paris">
                        </picture>
                    </noscript>
                    <div class="une_caption">
                        <h3 class="content_item_title"><?= $featured_international[0]['Title_2'] ?></h3>
                    </div>
                </a>
            </article>
            <div class="list_topic">

                <?php foreach ($featured_international as $international): ?>
                    <article class="content_item content_item_small content_type <?php if ($international['Media_type_10'] == "Videos"): ?>content_type_video<?php endif; ?>"><a
                            href="<?= base_url(($international['Media_type_10'] == "Videos") ? 'web/videos/' . $international['Media_Id_1'] : 'web/article/' . $international['Media_Id_1']) ?>"
                            title="<?= $sport['Title_2'] ?>">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>, <?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>, <?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>"
                                    src="<?= base_url('uploads/' . $international['Media_Image_4']) ?>"
                                    alt="Le président de la République, Emmanuel Macron, à l&#39;Élysée le 6 janvier 2025 ">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>, <?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>, <?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>, <?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>, <?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>, <?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>, <?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>, <?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="<?= base_url('uploads/' . $international['Media_Image_4']) ?>, <?= base_url('uploads/' . $international['Media_Image_4']) ?> 2x">
                                    <img
                                        src="<?= base_url('uploads/' . $international['Media_Image_4']) ?>"
                                        alt="<?= $international['Title_2'] ?> ">
                                </picture>
                            </noscript>
                            <div>
                                <h3 class="content_item_title"><?= $international['Title_2'] ?></h3>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>

                <div id="list_rubrique_1698250268555" class="block_links_container">
                    <ul class="block_links" id="block_linksrubrique_1698250268555">
                        <li><a href="<?= base_url('web/actualites/international') ?>" title="Tout l&#39;international">Tout l&#39;international</a></li>
                    </ul>
                </div>
            </div>
            <script>
                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                    resizeDisplayBlock("list_rubrique_1579614899441", "#block_linksrubrique_1579614899441",
                        "block_header_rubrique_1579614899441", "beforeend")
                }));
            </script>




        </section>
    <?php endif; ?>
    <script>
        window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
            resizeDisplayBlock("list_slider_slider_media_1599133169099", "#slider_links_slider_media_1599133169099",
                "block_header_slider_media_1599133169099", "beforeend");
            carouselItem("block_slider_media_1599133169099", ".carousel_item", "")
        }));
    </script>

    </div>
    </div>
    </div>
    <!--<div class="display_ads_mobile">
        <div id="sas_135329_s" class="bloc_center_full">
            <div id="sas_135329_container">
                <div id="sas_135329" class="display_ad"></div>
                <script type="application/javascript">
                    if (smartInit) {
                        didomiNextConsent(45, (function() {
                            Hubvisor("ready", null, (function() {
                                sas.cmd.push((function() {
                                    sas.render("135329")
                                }))
                            }))
                        }))
                    }
                </script>
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
</main>
<?php $this->endSection() ?>