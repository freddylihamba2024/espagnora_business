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
                        <ul class="slider_container">
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
                        </ul>
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
                        href="paris/paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police_AN-202502040518.html"
                        title="Paris: un homme tente de prendre l&#39;arme d&#39;un policier devant la préfecture de police, deux agents légèrement blessés">
                        <div class="flag_article flag_color">Alerte info</div>
                        <picture class="content_item_cover with-js">
                            <source media="(min-width: 441px)" width="2" height="1"
                                srcset="https://images.bfmtv.com/AF-kAB2ASUb-MwCeFHrrvZHjnjs=/0x170:1024x682/800x0/images/-198707.jpg, https://images.bfmtv.com/0CkJh56iKmZ6vVX-MYxVby7opnA=/0x170:1024x682/1600x0/images/-198707.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 361px)" width="4" height="3"
                                srcset="https://images.bfmtv.com/jpPovUMlT8QeXCfUD5IvzED1zA8=/58x0:966x681/840x0/images/-198707.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 321px)" width="4" height="3"
                                srcset="https://images.bfmtv.com/r8JCWgW2Aqx7zrMImpfLc0UVW4Y=/58x0:966x681/736x0/images/-198707.jpg 2x"
                                type="image/jpeg">
                            <source media="(min-width: 300px)" width="4" height="3"
                                srcset="https://images.bfmtv.com/3tjw5SRVssBWRF9WdJKdwkWgB2Y=/58x0:966x681/640x0/images/-198707.jpg 2x"
                                type="image/jpeg"><img width="2" height="1"
                                src="https://images.bfmtv.com/AF-kAB2ASUb-MwCeFHrrvZHjnjs=/0x170:1024x682/800x0/images/-198707.jpg"
                                alt="Un fourgon de police devant la préfecture de police de Paris (photo d&#39;illustration)">
                        </picture>
                        <div class="une_caption">
                            <h2 class="title_une_item">Paris: un homme tente de prendre l&#39;arme d&#39;un policier devant la
                                préfecture de police, deux agents légèrement blessés</h2>
                        </div>
                    </a></article>
                <p class="content_description"><span class="item_chapo item_chapo_une">L&#39;homme a essayé de prendre
                        l&#39;arme d&#39;un policier qui se trouvait devant la préfecture de police. Il a été maîtrisé et placé en
                        garde à vue.</span></p>
            </div>
            <div id="before_duo"></div>
            <div class="block_fleuve icon_middle" id="bloc_duo_home_fleuve_1579094701695">
                <article class="duo_liste content_item content_type content_type_video"><a
                        href="international/europe/suede-cinq-personnes-touchees-par-des-tirs-dans-une-ecole_AD-202502040509.html"
                        title="Suède: cinq personnes touchées par des tirs lors d&#39;une fusillade dans une école">
                        <figure class="duo_caption">
                            <div class="flag_article flag_color">Alerte info</div>
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/9nfe6CqdB4KnPkMmAdLtdrBUgw8=/0x53:1024x629/385x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp, https://images.bfmtv.com/x9GBjIzrhpn2akREdrzkHdCeN_M=/0x53:1024x629/770x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/yv9I2PooTGp3A5fs2m4H9YjbDLo=/0x53:1024x629/385x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg, https://images.bfmtv.com/m5wFDtklr42zJpyPP0aBMYU-80U=/0x53:1024x629/770x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/mDO8EItoO4kVAocICqDe1ePqkJI=/0x53:1024x629/840x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/yfdbQnuUO2PY-GN1JJQW5ADwzz8=/0x53:1024x629/840x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Nx9XOaYUdxk43SSx3___oyBTtrk=/0x53:1024x629/736x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/12yK3IaoONDOg1Kwgt0zBO4GS3k=/0x53:1024x629/736x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/M6oazldBFnV9nBBQ-w5OGzMn-sE=/0x53:1024x629/640x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/jbI2avhCtS73rUekRCC1wLB2mDM=/0x53:1024x629/640x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="https://images.bfmtv.com/yv9I2PooTGp3A5fs2m4H9YjbDLo=/0x53:1024x629/385x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg"
                                    src="https://images.bfmtv.com/yv9I2PooTGp3A5fs2m4H9YjbDLo=/0x53:1024x629/385x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg"
                                    alt="Un officier de police délimite une zone près de l&#39;école Risbergska à Orebro, Suède, où a eu lieu une fusillade le 4 février 2025.">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/9nfe6CqdB4KnPkMmAdLtdrBUgw8=/0x53:1024x629/385x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp, https://images.bfmtv.com/x9GBjIzrhpn2akREdrzkHdCeN_M=/0x53:1024x629/770x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/yv9I2PooTGp3A5fs2m4H9YjbDLo=/0x53:1024x629/385x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg, https://images.bfmtv.com/m5wFDtklr42zJpyPP0aBMYU-80U=/0x53:1024x629/770x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/3LsoCo5WRCTZFL3K83YeGpDrU8w=/0x53:1024x629/420x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp, https://images.bfmtv.com/mDO8EItoO4kVAocICqDe1ePqkJI=/0x53:1024x629/840x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/z5oAVF4V2_vF7zzaHJDEbDNcrrI=/0x53:1024x629/420x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg, https://images.bfmtv.com/yfdbQnuUO2PY-GN1JJQW5ADwzz8=/0x53:1024x629/840x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/QXN5hNFZyxSZ873QzR9vvW99ssY=/0x53:1024x629/368x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp, https://images.bfmtv.com/Nx9XOaYUdxk43SSx3___oyBTtrk=/0x53:1024x629/736x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/voRHY4UCpz-BBW074_69U-69xHs=/0x53:1024x629/368x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg, https://images.bfmtv.com/12yK3IaoONDOg1Kwgt0zBO4GS3k=/0x53:1024x629/736x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/I2753ZwryvgieBP-y-lS9LFfUrk=/0x53:1024x629/320x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp, https://images.bfmtv.com/M6oazldBFnV9nBBQ-w5OGzMn-sE=/0x53:1024x629/640x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/n2RSDi6-Ds9RHCWkXYTPLZGpTdw=/0x53:1024x629/320x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg, https://images.bfmtv.com/jbI2avhCtS73rUekRCC1wLB2mDM=/0x53:1024x629/640x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/yv9I2PooTGp3A5fs2m4H9YjbDLo=/0x53:1024x629/385x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg"
                                        alt="Un officier de police délimite une zone près de l&#39;école Risbergska à Orebro, Suède, où a eu lieu une fusillade le 4 février 2025.">
                                </picture>
                            </noscript>
                        </figure>
                        <h3 class="content_item_title">Suède: cinq personnes touchées par des tirs lors d&#39;une fusillade dans
                            une école</h3>
                    </a></article>
                <article class="duo_liste content_item content_type content_type_article"><a
                        href="international/le-francais-serge-atlaoui-condamne-a-mort-en-indonesie-attendu-a-paris-mercredi_AN-202502040539.html"
                        title="Le Français Serge Atlaoui, condamné à mort en Indonésie, attendu à Paris mercredi">
                        <figure class="duo_caption">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/YwcSyCcd5aujrsE7hlyv9GxrF-A=/4x3:1252x705/385x0/images/1242081.jpg, https://images.bfmtv.com/7OAoHAShiuffUenff3R1ERt9UC4=/4x3:1252x705/770x0/images/1242081.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/__WbKSqonR1Mh9INBPUmV38ao2k=/4x3:1252x705/840x0/images/1242081.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/b5hDn12iIcutTMQdDnqlge_LHaY=/4x3:1252x705/736x0/images/1242081.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/zZ44XHV4LF32Z2GmeVPmEA3Jj3M=/4x3:1252x705/640x0/images/1242081.jpg 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="https://images.bfmtv.com/YwcSyCcd5aujrsE7hlyv9GxrF-A=/4x3:1252x705/385x0/images/1242081.jpg"
                                    src="https://images.bfmtv.com/YwcSyCcd5aujrsE7hlyv9GxrF-A=/4x3:1252x705/385x0/images/1242081.jpg"
                                    alt="Serge Atlaoui, à son arrivée au tribunal le 1er avril dernier.">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/YwcSyCcd5aujrsE7hlyv9GxrF-A=/4x3:1252x705/385x0/images/1242081.jpg, https://images.bfmtv.com/7OAoHAShiuffUenff3R1ERt9UC4=/4x3:1252x705/770x0/images/1242081.jpg 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/-vPvF2PvktbeXb31X8L2ago670I=/4x3:1252x705/420x0/images/1242081.jpg, https://images.bfmtv.com/__WbKSqonR1Mh9INBPUmV38ao2k=/4x3:1252x705/840x0/images/1242081.jpg 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/wgzaVTGNuJhGz92sj9PE7IhtUIY=/4x3:1252x705/368x0/images/1242081.jpg, https://images.bfmtv.com/b5hDn12iIcutTMQdDnqlge_LHaY=/4x3:1252x705/736x0/images/1242081.jpg 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/7036H8JVnFcKpCN3koRThc_hX54=/4x3:1252x705/320x0/images/1242081.jpg, https://images.bfmtv.com/zZ44XHV4LF32Z2GmeVPmEA3Jj3M=/4x3:1252x705/640x0/images/1242081.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/YwcSyCcd5aujrsE7hlyv9GxrF-A=/4x3:1252x705/385x0/images/1242081.jpg"
                                        alt="Serge Atlaoui, à son arrivée au tribunal le 1er avril dernier.">
                                </picture>
                            </noscript>
                        </figure>
                        <h3 class="content_item_title">Le Français Serge Atlaoui, condamné à mort en Indonésie, attendu à Paris
                            mercredi</h3>
                    </a></article>
                <div id="sas_120870_s" class="bloc_center_full">
                    <div id="sas_120870_container">
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
                <article class="duo_liste content_item content_type content_type_video"><a
                        href="economie/entreprises/ni-entente-ni-connivence-macron-nie-avoir-autorise-nestle-a-commercialiser-des-eaux-non-conformes_AD-202502040523.html"
                        title="&quot;Ni entente ni connivence&quot;: Macron nie avoir autorisé Nestlé à commercialiser des eaux non conformes">
                        <figure class="duo_caption">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/5wrotqKAEgIckQeB96KYLqUFgpE=/14x31:2046x1174/385x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp, https://images.bfmtv.com/9FYUgp7MJiA8bE2wPfdlV57Ir7Y=/14x31:2046x1174/770x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/yzWKLNxN95c-tigLELVmRHYXpQg=/14x31:2046x1174/385x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg, https://images.bfmtv.com/bFIp689pKQKPGE53onookZuuWzA=/14x31:2046x1174/770x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/rnelHiHJLhC7FGGlj5Td1gB0TW0=/14x31:2046x1174/840x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/-td5nsWeOgowxfjJUQg_JxrrGPg=/14x31:2046x1174/840x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Iv6oZ_yzpEynLWocER0lnd7ec3w=/14x31:2046x1174/736x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/GDqMIWSI-CoJrQ9xB9VMbKy7Vz0=/14x31:2046x1174/736x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/MNSX2zyrDn5DvOBZn_HjuKY5Sx4=/14x31:2046x1174/640x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/ll7A3_tpIMBLbHDXBgwIIllVFpw=/14x31:2046x1174/640x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="https://images.bfmtv.com/yzWKLNxN95c-tigLELVmRHYXpQg=/14x31:2046x1174/385x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg"
                                    src="https://images.bfmtv.com/yzWKLNxN95c-tigLELVmRHYXpQg=/14x31:2046x1174/385x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg"
                                    alt="Le président Emmanuel Macron à l&#39;Élysée le 23 octobre 2024 ">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/5wrotqKAEgIckQeB96KYLqUFgpE=/14x31:2046x1174/385x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp, https://images.bfmtv.com/9FYUgp7MJiA8bE2wPfdlV57Ir7Y=/14x31:2046x1174/770x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/yzWKLNxN95c-tigLELVmRHYXpQg=/14x31:2046x1174/385x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg, https://images.bfmtv.com/bFIp689pKQKPGE53onookZuuWzA=/14x31:2046x1174/770x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/tsCkEmHBWJVhg8hU3IdHWFHrq3Y=/14x31:2046x1174/420x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp, https://images.bfmtv.com/rnelHiHJLhC7FGGlj5Td1gB0TW0=/14x31:2046x1174/840x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/HDu8eqfHsCbLb2N32ZyJUtWSXUI=/14x31:2046x1174/420x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg, https://images.bfmtv.com/-td5nsWeOgowxfjJUQg_JxrrGPg=/14x31:2046x1174/840x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/Q7qiZ_fXnSkk_Vx7tbwFqYTebf4=/14x31:2046x1174/368x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp, https://images.bfmtv.com/Iv6oZ_yzpEynLWocER0lnd7ec3w=/14x31:2046x1174/736x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/I9kdBouOQOHpXKWNOc_p1nLH0t0=/14x31:2046x1174/368x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg, https://images.bfmtv.com/GDqMIWSI-CoJrQ9xB9VMbKy7Vz0=/14x31:2046x1174/736x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/R-zGeCKSAnxAVP1JJ1ilB940ibY=/14x31:2046x1174/320x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp, https://images.bfmtv.com/MNSX2zyrDn5DvOBZn_HjuKY5Sx4=/14x31:2046x1174/640x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/8W7uqTJxPvI1oxPPkfOHTkbfA20=/14x31:2046x1174/320x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg, https://images.bfmtv.com/ll7A3_tpIMBLbHDXBgwIIllVFpw=/14x31:2046x1174/640x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/yzWKLNxN95c-tigLELVmRHYXpQg=/14x31:2046x1174/385x0/images/Le-president-Emmanuel-Macron-a-l-Elysee-le-23-octobre-2024-2015160.jpg"
                                        alt="Le président Emmanuel Macron à l&#39;Élysée le 23 octobre 2024 ">
                                </picture>
                            </noscript>
                        </figure>
                        <h3 class="content_item_title">&quot;Ni entente ni connivence&quot;: Macron nie avoir autorisé Nestlé à
                            commercialiser des eaux non conformes</h3>
                    </a>
                    <div class="item_related_block">
                        <h3 class="item_related content_type"><a
                                href="economie/consommation/eaux-minerales-traitees-nestle-a-t-il-ete-autorise-a-utiliser-des-filtres-illegaux-par-l-executif_AD-202502040394.html"
                                title="
    Eaux minérales traitées: Nestlé a-t-il été autorisé à utiliser des filtres illégaux par l&#39;exécutif?
  ">Eaux minérales traitées: Nestlé a-t-il été autorisé à utiliser des filtres illégaux par l&#39;exécutif?</a></h3>
                    </div>
                </article>
                <div class="bloc_evenement_haut_mobile" id="bloc_evenement_haut_mobile"></div>
                <article class="duo_liste content_item content_type content_type_article"><a href="single_video.html"
                        title="Affaire Abbé Pierre: aucune enquête ne sera ouverte en raison de la prescription des faits">
                        <figure class="duo_caption">
                            <div class="flag_article flag_color">Alerte info</div>
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/kdeaCie4m5Sowd3vmi8DFMNGpjs=/0x0:1920x1080/385x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp, https://images.bfmtv.com/VnfKa2fETXBoUFs_p4snRuzcRf0=/0x0:1920x1080/770x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/rJc_3w-JYQBnak9buEVRMnm_ZJg=/0x0:1920x1080/385x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg, https://images.bfmtv.com/4xGJdTzKl0zq5CUDGa4ozvrRKRU=/0x0:1920x1080/770x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Q2-pM_nWuSh1hBtj4WyLU8yfCJ8=/0x0:1920x1080/840x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/EJBaGW7TrfnEuCzMu3FYI1e7Zew=/0x0:1920x1080/840x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/KKm0518blo-6vDxGe0yA6rQr-PM=/0x0:1920x1080/736x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/VCG2amPFSI89prOiQOIMMIbflQ8=/0x0:1920x1080/736x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/0sPYR8FfFxyp9LuNefzjuqb6UWg=/0x0:1920x1080/640x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/ltkruGcIfSmWduD36zV23NLFXHo=/0x0:1920x1080/640x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="https://images.bfmtv.com/rJc_3w-JYQBnak9buEVRMnm_ZJg=/0x0:1920x1080/385x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg"
                                    src="https://images.bfmtv.com/rJc_3w-JYQBnak9buEVRMnm_ZJg=/0x0:1920x1080/385x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg"
                                    alt="La figure de l&#39;abbé Pierre effacée de la devanture de la fondation Emmaüs de Villeurbanne, le 7 janvier 2025.">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/kdeaCie4m5Sowd3vmi8DFMNGpjs=/0x0:1920x1080/385x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp, https://images.bfmtv.com/VnfKa2fETXBoUFs_p4snRuzcRf0=/0x0:1920x1080/770x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/rJc_3w-JYQBnak9buEVRMnm_ZJg=/0x0:1920x1080/385x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg, https://images.bfmtv.com/4xGJdTzKl0zq5CUDGa4ozvrRKRU=/0x0:1920x1080/770x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/XuySACijhLElt2BO9NYarOiMyCs=/0x0:1920x1080/420x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp, https://images.bfmtv.com/Q2-pM_nWuSh1hBtj4WyLU8yfCJ8=/0x0:1920x1080/840x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/5Mny3KFCo63LWNe_sAo0kccXP2A=/0x0:1920x1080/420x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg, https://images.bfmtv.com/EJBaGW7TrfnEuCzMu3FYI1e7Zew=/0x0:1920x1080/840x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/63bmLgnTOm0XidgilOonYOItvyo=/0x0:1920x1080/368x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp, https://images.bfmtv.com/KKm0518blo-6vDxGe0yA6rQr-PM=/0x0:1920x1080/736x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/uYZV8z-4bNcTI5OKxpPiC_gE1Yg=/0x0:1920x1080/368x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg, https://images.bfmtv.com/VCG2amPFSI89prOiQOIMMIbflQ8=/0x0:1920x1080/736x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/qpMIn4q29PXK8h4dUPCyfDNIjnc=/0x0:1920x1080/320x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp, https://images.bfmtv.com/0sPYR8FfFxyp9LuNefzjuqb6UWg=/0x0:1920x1080/640x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/AuBsHGsH7V2quJQjIJQPv14KOBw=/0x0:1920x1080/320x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg, https://images.bfmtv.com/ltkruGcIfSmWduD36zV23NLFXHo=/0x0:1920x1080/640x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/rJc_3w-JYQBnak9buEVRMnm_ZJg=/0x0:1920x1080/385x0/images/La-figure-de-l-abbe-Pierre-effacee-de-la-devanture-de-la-fondation-Emmaues-de-Villeurbanne-le-7-janvier-2025-2009019.jpg"
                                        alt="La figure de l&#39;abbé Pierre effacée de la devanture de la fondation Emmaüs de Villeurbanne, le 7 janvier 2025.">
                                </picture>
                            </noscript>
                        </figure>
                        <h3 class="content_item_title">Affaire Abbé Pierre: aucune enquête ne sera ouverte en raison de la
                            prescription des faits</h3>
                    </a></article>
                <article class="duo_liste content_item content_type content_type_article"><a
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
                </article>
                <article class="duo_liste content_item content_type content_type_video"><a
                        href="sante/aspartame-une-petition-europeenne-pour-interdire-le-produit-potentiellement-cancerogene_AN-202502040025.html"
                        title="Cancer: faut-il interdire l&#39;aspartame? Une pétition européenne lancée face à des &quot;risques inacceptables&quot;">
                        <figure class="duo_caption">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/7GCxA4_DdQ5cgZvPIVIwNJAofOU=/0x106:2048x1258/385x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp, https://images.bfmtv.com/GmixjHI3GaapxzUEWDxnTbzAlig=/0x106:2048x1258/770x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/1vWBGtZVbPmJBH2l1pMaz1tq_Vg=/0x106:2048x1258/385x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg, https://images.bfmtv.com/f0W_-3sckd2IZibJdaEMilFh5Ls=/0x106:2048x1258/770x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/NYPSNDSrtR5l6JGUaiBHxvAyDkI=/0x106:2048x1258/840x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Zj0kIC6T7rQLY2U-GJlaNnnNsjw=/0x106:2048x1258/840x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/k1kBm6QDZKlbvaPQMbw-xdVdhlw=/0x106:2048x1258/736x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Z410gYuKRz1tqmD_9FHlIjPkkSk=/0x106:2048x1258/736x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/C1iVD4QHU3fbkAD-EJN5tlP7eyk=/0x106:2048x1258/640x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/rho_HxZaWk0JPTmFzwzgo3kqLiA=/0x106:2048x1258/640x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="https://images.bfmtv.com/1vWBGtZVbPmJBH2l1pMaz1tq_Vg=/0x106:2048x1258/385x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg"
                                    src="https://images.bfmtv.com/1vWBGtZVbPmJBH2l1pMaz1tq_Vg=/0x106:2048x1258/385x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg"
                                    alt="Des produits alimentaires contenant l&#39;édulcorant artificiel aspartame, dont Equal, Crystal Light, Diet Coke et Royal Jello, sont exposés le 14 juillet 2023 à New York. ">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/7GCxA4_DdQ5cgZvPIVIwNJAofOU=/0x106:2048x1258/385x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp, https://images.bfmtv.com/GmixjHI3GaapxzUEWDxnTbzAlig=/0x106:2048x1258/770x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/1vWBGtZVbPmJBH2l1pMaz1tq_Vg=/0x106:2048x1258/385x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg, https://images.bfmtv.com/f0W_-3sckd2IZibJdaEMilFh5Ls=/0x106:2048x1258/770x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/ML5z3FDudDz4iuenoIZEQRC5rKQ=/0x106:2048x1258/420x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp, https://images.bfmtv.com/NYPSNDSrtR5l6JGUaiBHxvAyDkI=/0x106:2048x1258/840x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/YHaWCxxsUYYcFckC1UxTvXEOUUA=/0x106:2048x1258/420x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg, https://images.bfmtv.com/Zj0kIC6T7rQLY2U-GJlaNnnNsjw=/0x106:2048x1258/840x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/Qi5Ugz6fst8qlOoqTwUCf0D4giY=/0x106:2048x1258/368x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp, https://images.bfmtv.com/k1kBm6QDZKlbvaPQMbw-xdVdhlw=/0x106:2048x1258/736x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/rcun6v-SmRnmiLiTraJcQvXkY9Y=/0x106:2048x1258/368x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg, https://images.bfmtv.com/Z410gYuKRz1tqmD_9FHlIjPkkSk=/0x106:2048x1258/736x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/sxap2hRSQgZ-JX3afWuQqvr5mqY=/0x106:2048x1258/320x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp, https://images.bfmtv.com/C1iVD4QHU3fbkAD-EJN5tlP7eyk=/0x106:2048x1258/640x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/ZnH9w8vNtqjh4epdsL8XjErLVdc=/0x106:2048x1258/320x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg, https://images.bfmtv.com/rho_HxZaWk0JPTmFzwzgo3kqLiA=/0x106:2048x1258/640x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/1vWBGtZVbPmJBH2l1pMaz1tq_Vg=/0x106:2048x1258/385x0/images/Des-produits-alimentaires-contenant-l-edulcorant-artificiel-aspartame-dont-Equal-Crystal-Light-Diet-Coke-et-Royal-Jello-sont-exposes-le-14-juillet-2023-a-New-York-2026348.jpg"
                                        alt="Des produits alimentaires contenant l&#39;édulcorant artificiel aspartame, dont Equal, Crystal Light, Diet Coke et Royal Jello, sont exposés le 14 juillet 2023 à New York. ">
                                </picture>
                            </noscript>
                        </figure>
                        <h3 class="content_item_title">Cancer: faut-il interdire l&#39;aspartame? Une pétition européenne lancée
                            face à des &quot;risques inacceptables&quot;</h3>
                    </a></article>

                <article class="content_item content_item_small content_type content_type_article"><a
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
                    </a></article>
            </div>
        </div>
        <div class="grid_column grid_column_c grid_aside">
            <div class="mise_en_avant_droite" id="mise_en_avant_droite"></div>
            <div class="block block_direct block_direct_video" id="direct_home_video_1697216323610"><a
                    title="Regarder le direct"
                    onclick="return tc_events_31(this,'click-navigation',{'clicktype':'click.navigation', 'clickchapter1':'home', 'clickchapter2':'video', 'clickname':'direct-tv_bfmtv'});"
                    href="en-direct/index.html"><span class="block_direct_title">Le direct</span>
                    <div class="direct_video_hover"><span>Regarder le direct</span></div>
                    <div class="video_block" id="video_player_6321040605112">
                        <video-js id="player_6321040605112" data-embed="default" data-application-id="undefined"
                            data-autoplay="true" data-account="876450610001" adjustplayer="ddff4JxPe" data-video-id="6321040605112"
                            data-video-type="live" pip="false" disablevisibilityhandler="false" adjustfrommediasize="false"
                            preload="none" position="home_droite" playsinline tags=""><img fetchpriority="high"
                                src="assets/v11/images/BFMTV_placeholder_direct.e94f748ec9b56a41f0d4f8c0fa86253a.webp" width="800"
                                height="450" alt="placeholder video"></video-js>
                    </div>
                </a></div>
            <script>
                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                    cutText("#direct_home_video_1697216323610", ".direct_home_title", 30);
                    if (window.deviceSize === "L") {
                        onTagCoReady(() => {
                            initPlayerVideo(document.querySelector("#direct_home_video_1697216323610").querySelector(
                                ".video_block"), "876450610001", "ddff4JxPe", "6321040605112", options = {
                                isMuted: true,
                                avinsightPosition: "home_droite"
                            })
                        })
                    }
                }));
            </script>
            <script>
                window.nextScriptsToExecute && window.nextScriptsToExecute.push((function() {
                    carouselItem("block_mea_live_1673534397371", ".carousel_item", 1)
                }));
            </script>
            <div id="sas_pave1_l" class="publicite bloc_center_full"></div>
            <section class="block block_simple block_news" id="block_news24_home">
                <h2 class="block_simple_title">News 24/7</h2>
                <h3 class="block_simple_footer" id="block_news24_simple_footer"><a href="news-24-7/index.html"
                        title="toute l&#39;actualité">toute l&#39;actualité</a></h3>
                <div class="list_news_wrapper" id="list_news_wrapper_fil_info_1579613800738">
                    <div class="list_news">
                        <article class="content_item"><a
                                href="economie/entreprises/tout-comprendre-eaux-en-bouteille-nestle-derriere-l-affaire-le-lobbying-de-l-entreprise-aupres-de-l-elysee-et-matignon-questionne_AN-202502040608.html"
                                title="TOUT COMPRENDRE. Eaux en bouteille Nestlé: derrière l&#39;affaire, le lobbying de l&#39;entreprise auprès de l&#39;Élysée et Matignon questionné">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T16:15:34+01:00">16h15</time></div>
                                <h3 class="content_item_title">TOUT COMPRENDRE. Eaux en bouteille Nestlé: derrière l&#39;affaire, le
                                    lobbying de l&#39;entreprise auprès de l&#39;Élysée et Matignon questionné</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/FkYZpXMb-FmMnyhnLJVO7RyxP6g=/0x66:1280x786/316x0/images/Macron-Nestle-2027085.webp, https://images.bfmtv.com/GB7B_sLuZD8qf5962b81OKD26ro=/0x66:1280x786/632x0/images/Macron-Nestle-2027085.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/7m0dMHG6uiJ_-frFKWbqv7uSoPU=/0x66:1280x786/316x0/images/Macron-Nestle-2027085.jpg, https://images.bfmtv.com/47dpnHvmDyecMIxXuaaiJ_NpAPM=/0x66:1280x786/632x0/images/Macron-Nestle-2027085.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/pqXAeRPR9YBmuOmFVwRuqY-7vyE=/0x66:1280x786/640x0/images/Macron-Nestle-2027085.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/JVr3szrFhHFxHLxisQrHh6lsACY=/0x66:1280x786/640x0/images/Macron-Nestle-2027085.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/VkMz7kAsJU8pSUfc96zUc69kAKw=/0x66:1280x786/240x0/images/Macron-Nestle-2027085.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/CSiWB03q8ITzGIB6cF7KOdxmGAQ=/0x66:1280x786/240x0/images/Macron-Nestle-2027085.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/VkMz7kAsJU8pSUfc96zUc69kAKw=/0x66:1280x786/240x0/images/Macron-Nestle-2027085.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/CSiWB03q8ITzGIB6cF7KOdxmGAQ=/0x66:1280x786/240x0/images/Macron-Nestle-2027085.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/7m0dMHG6uiJ_-frFKWbqv7uSoPU=/0x66:1280x786/316x0/images/Macron-Nestle-2027085.jpg"
                                        src="https://images.bfmtv.com/7m0dMHG6uiJ_-frFKWbqv7uSoPU=/0x66:1280x786/316x0/images/Macron-Nestle-2027085.jpg"
                                        alt="Emmanuel Macron après une visite à l&#39;Institut Gustave Roussy (IGR), centre régional de lutte contre le cancer, à l&#39;occasion de la Journée mondiale contre le cancer, à Villejuif, près de Paris, le 4 février 2025.">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/FkYZpXMb-FmMnyhnLJVO7RyxP6g=/0x66:1280x786/316x0/images/Macron-Nestle-2027085.webp, https://images.bfmtv.com/GB7B_sLuZD8qf5962b81OKD26ro=/0x66:1280x786/632x0/images/Macron-Nestle-2027085.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/7m0dMHG6uiJ_-frFKWbqv7uSoPU=/0x66:1280x786/316x0/images/Macron-Nestle-2027085.jpg, https://images.bfmtv.com/47dpnHvmDyecMIxXuaaiJ_NpAPM=/0x66:1280x786/632x0/images/Macron-Nestle-2027085.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/BaF80rYYRshOhGYXqo0iIF26dFM=/0x66:1280x786/320x0/images/Macron-Nestle-2027085.webp, https://images.bfmtv.com/pqXAeRPR9YBmuOmFVwRuqY-7vyE=/0x66:1280x786/640x0/images/Macron-Nestle-2027085.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/k9ldHSPPxLbRN-p1bxKdCg30NrQ=/0x66:1280x786/320x0/images/Macron-Nestle-2027085.jpg, https://images.bfmtv.com/JVr3szrFhHFxHLxisQrHh6lsACY=/0x66:1280x786/640x0/images/Macron-Nestle-2027085.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/tWQG_AvYuxqLcxpJn4n-h6o2ZeE=/0x66:1280x786/120x0/images/Macron-Nestle-2027085.webp, https://images.bfmtv.com/VkMz7kAsJU8pSUfc96zUc69kAKw=/0x66:1280x786/240x0/images/Macron-Nestle-2027085.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/onn1fI5oDrAar97tL80BxB9b6TI=/0x66:1280x786/120x0/images/Macron-Nestle-2027085.jpg, https://images.bfmtv.com/CSiWB03q8ITzGIB6cF7KOdxmGAQ=/0x66:1280x786/240x0/images/Macron-Nestle-2027085.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/tWQG_AvYuxqLcxpJn4n-h6o2ZeE=/0x66:1280x786/120x0/images/Macron-Nestle-2027085.webp, https://images.bfmtv.com/VkMz7kAsJU8pSUfc96zUc69kAKw=/0x66:1280x786/240x0/images/Macron-Nestle-2027085.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/onn1fI5oDrAar97tL80BxB9b6TI=/0x66:1280x786/120x0/images/Macron-Nestle-2027085.jpg, https://images.bfmtv.com/CSiWB03q8ITzGIB6cF7KOdxmGAQ=/0x66:1280x786/240x0/images/Macron-Nestle-2027085.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/7m0dMHG6uiJ_-frFKWbqv7uSoPU=/0x66:1280x786/316x0/images/Macron-Nestle-2027085.jpg"
                                            alt="Emmanuel Macron après une visite à l&#39;Institut Gustave Roussy (IGR), centre régional de lutte contre le cancer, à l&#39;occasion de la Journée mondiale contre le cancer, à Villejuif, près de Paris, le 4 février 2025.">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">Mise au jour début 2024, cette affaire pointe les agissements de Nestlé Waters
                                    qui a utilisé des procédés non conformes pour &quot;laver&quot; certaines de ses eaux impropres à la
                                    consommation. Selon Le Monde et Radio France, sous la pression de l&#39;Élysée, Matignon aurait
                                    accepté des dérogations dans l&#39;usage de certains procédés de microfiltration pour maintenir
                                    l&#39;activité.</p>
                            </a></article>
                        <article class="content_item"><a
                                href="people/cinema/les-4-fantastiques-une-bande-annonce-mysterieuse-pour-l-adaptation-du-comics-marvel_AN-202502040607.html"
                                title="&quot;Les 4 Fantastiques&quot;: une bande-annonce mystérieuse pour l&#39;adaptation du comics Marvel">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T16:15:15+01:00">16h15</time></div>
                                <h3 class="content_item_title">&quot;Les 4 Fantastiques&quot;: une bande-annonce mystérieuse pour
                                    l&#39;adaptation du comics Marvel</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/z3WDiMq4g15IIvchlEwKIY3FbAI=/161x2:1553x785/316x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp, https://images.bfmtv.com/uJn3DdVvRbLs3Pl1yGfPUnMGWyY=/161x2:1553x785/632x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/mdB-iAsAbpC0Vnsn8-E3xGmNUy4=/161x2:1553x785/316x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg, https://images.bfmtv.com/zeO2yng_YVsgUeww8K6Fx2WJy9s=/161x2:1553x785/632x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/O8mwHAg4AbfOJk4qBhYUFSlNarI=/161x2:1553x785/640x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/hwbdRvhaXgu36KNU-WZisn3SYes=/161x2:1553x785/640x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/dwMBlW29M206otyRQsUTUf_AFJY=/161x2:1553x785/240x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/GuuBpGZyli4L65ib0HoM0ufHh2w=/161x2:1553x785/240x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/dwMBlW29M206otyRQsUTUf_AFJY=/161x2:1553x785/240x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/GuuBpGZyli4L65ib0HoM0ufHh2w=/161x2:1553x785/240x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/mdB-iAsAbpC0Vnsn8-E3xGmNUy4=/161x2:1553x785/316x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg"
                                        src="https://images.bfmtv.com/mdB-iAsAbpC0Vnsn8-E3xGmNUy4=/161x2:1553x785/316x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg"
                                        alt="Une scène du film &quot;Les Quatre Fantastiques : Premiers pas&quot;">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/z3WDiMq4g15IIvchlEwKIY3FbAI=/161x2:1553x785/316x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp, https://images.bfmtv.com/uJn3DdVvRbLs3Pl1yGfPUnMGWyY=/161x2:1553x785/632x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/mdB-iAsAbpC0Vnsn8-E3xGmNUy4=/161x2:1553x785/316x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg, https://images.bfmtv.com/zeO2yng_YVsgUeww8K6Fx2WJy9s=/161x2:1553x785/632x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/TqLcPBLIUhooekz87bG0gQfhJng=/161x2:1553x785/320x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp, https://images.bfmtv.com/O8mwHAg4AbfOJk4qBhYUFSlNarI=/161x2:1553x785/640x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/2DPwA6wSoUt5lceHEY45nypLMTo=/161x2:1553x785/320x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg, https://images.bfmtv.com/hwbdRvhaXgu36KNU-WZisn3SYes=/161x2:1553x785/640x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/sBZ3kYsVrRsVbT7y-OaDSV9Xocs=/161x2:1553x785/120x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp, https://images.bfmtv.com/dwMBlW29M206otyRQsUTUf_AFJY=/161x2:1553x785/240x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/_mcJaM4Ij9pUKtfCkwJBcAFaPBk=/161x2:1553x785/120x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg, https://images.bfmtv.com/GuuBpGZyli4L65ib0HoM0ufHh2w=/161x2:1553x785/240x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/sBZ3kYsVrRsVbT7y-OaDSV9Xocs=/161x2:1553x785/120x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp, https://images.bfmtv.com/dwMBlW29M206otyRQsUTUf_AFJY=/161x2:1553x785/240x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/_mcJaM4Ij9pUKtfCkwJBcAFaPBk=/161x2:1553x785/120x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg, https://images.bfmtv.com/GuuBpGZyli4L65ib0HoM0ufHh2w=/161x2:1553x785/240x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/mdB-iAsAbpC0Vnsn8-E3xGmNUy4=/161x2:1553x785/316x0/images/Une-scene-du-film-Les-Quatre-Fantastiques-Premiers-pas-2027099.jpg"
                                            alt="Une scène du film &quot;Les Quatre Fantastiques : Premiers pas&quot;">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">L&#39;adaptation du célèbre comics Marvel, avec Pedro Pascal et Vanessa Kirby
                                    dans les rôles principaux, a dévoilé ce mardi 4 février sa première bande-annonce.</p>
                            </a></article>
                        <article class="content_item"><a
                                href="paris/paris/lutte-contre-la-consommation-de-crack-en-ile-de-france-plus-de-1-100-interpellations-en-2024_AN-202502040602.html"
                                title="Lutte contre la consommation de crack en Île-de-France: plus de 1.100 interpellations en 2024">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T16:10:17+01:00">16h10</time></div>
                                <h3 class="content_item_title">Lutte contre la consommation de crack en Île-de-France: plus de 1.100
                                    interpellations en 2024</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/43-WHPsufBiiwFnpvZZzGFzh-hA=/0x40:768x472/316x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg, https://images.bfmtv.com/RP9gFBxvxD0-1ojxy74_jziQ7uE=/0x40:768x472/632x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/HryK7fkrmbrhKlAjeqH0eJRu2SE=/0x40:768x472/640x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/FTFZvvwTdACb83HY_XKFqie1WsI=/0x40:768x472/240x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/FTFZvvwTdACb83HY_XKFqie1WsI=/0x40:768x472/240x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/43-WHPsufBiiwFnpvZZzGFzh-hA=/0x40:768x472/316x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg"
                                        src="https://images.bfmtv.com/43-WHPsufBiiwFnpvZZzGFzh-hA=/0x40:768x472/316x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg"
                                        alt="Un fumeur de crack allume sa pipe artisanale place Stalingrad à Paris, le 2 décembre 2020.">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/43-WHPsufBiiwFnpvZZzGFzh-hA=/0x40:768x472/316x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg, https://images.bfmtv.com/RP9gFBxvxD0-1ojxy74_jziQ7uE=/0x40:768x472/632x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/ve7tGrNj0RNRX4AWDX9W2vh2CcI=/0x40:768x472/320x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg, https://images.bfmtv.com/HryK7fkrmbrhKlAjeqH0eJRu2SE=/0x40:768x472/640x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/a7s1wVCWPCts2K2nRa5ZST2YxXs=/0x40:768x472/120x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg, https://images.bfmtv.com/FTFZvvwTdACb83HY_XKFqie1WsI=/0x40:768x472/240x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/a7s1wVCWPCts2K2nRa5ZST2YxXs=/0x40:768x472/120x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg, https://images.bfmtv.com/FTFZvvwTdACb83HY_XKFqie1WsI=/0x40:768x472/240x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/43-WHPsufBiiwFnpvZZzGFzh-hA=/0x40:768x472/316x0/images/Un-fumeur-de-crack-allume-sa-pipe-artisanale-place-Stalingrad-a-Paris-le-2-decembre-2020-This-drug-of-the-poor-has-been-wreaking-havoc-in-the-north-east-of-the-capital-for-thirty-years-Over-the-past-18-months-the-authorities-have-been-stepping-up-initiatives-to-try-to-curb-the-use-of-this-smokable-derivative-of-cocaine-reinforced-police-patrols-arrests-of-traffickers-accommodation-for-drug-addicts-but-these-efforts-have-so-far-been-largely-unsuccessful-495151.jpg"
                                            alt="Un fumeur de crack allume sa pipe artisanale place Stalingrad à Paris, le 2 décembre 2020.">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">Les chiffres de la deuxième phase du &quot;plan crack&quot; ont été dévoilés ce
                                    mardi 4 février, un an après sa mise en œuvre. Les autorités tirent un bilan positif.</p>
                            </a></article>
                        <article class="content_item content_item_flash content_type content_type_video"><a
                                href="international/europe/suede-cinq-personnes-touchees-par-des-tirs-dans-une-ecole_AD-202502040509.html"
                                title="Suède: cinq personnes touchées par des tirs lors d&#39;une fusillade dans une école">
                                <div class="content_item_time"><time class="content_live_time"
                                        datetime="2025-02-04T16:09:17+01:00">16h09</time></div>
                                <h3 class="content_item_title">Suède: cinq personnes touchées par des tirs lors d&#39;une fusillade
                                    dans une école</h3>
                                <p class="item_chapo">Cinq personnes ont été blessées par des tirs dans une école à Örebro, en Suède,
                                    ce mardi 4 février.</p>
                            </a></article>
                        <article class="content_item content_item_flash"><a
                                href="police-justice/affaire-abbe-pierre-aucune-enquete-ouverte-en-raison-de-la-prescription-des-faits_AD-202502040600.html"
                                title="Affaire Abbé Pierre: aucune enquête ne sera ouverte en raison de la prescription des faits">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T16:05:32+01:00">16h05</time></div>
                                <h3 class="content_item_title">Affaire Abbé Pierre: aucune enquête ne sera ouverte en raison de la
                                    prescription des faits</h3>
                                <p class="item_chapo">Aucune enquête ne sera ouverte en France concernant l&#39;affaire Abbé Pierre,
                                    la prescription couvrant tous les faits, y compris ceux de non-dénonciation.</p>
                            </a></article>
                        <article class="content_item content_item_flash"><a
                                href="politique/parlement/le-senat-adopte-la-proposition-de-loi-contre-le-narcotrafic-a-la-quasi-unanimite_AD-202502040597.html"
                                title="Le Sénat adopte la proposition de loi contre le narcotrafic à la quasi-unanimité">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T16:01:15+01:00">16h01</time></div>
                                <h3 class="content_item_title">Le Sénat adopte la proposition de loi contre le narcotrafic à la
                                    quasi-unanimité</h3>
                                <p class="item_chapo">Adopté avec 338 voix pour et une voix contre, le texte est désormais transmis à
                                    l&#39;Assemblée nationale. Il prévoit notamment la création d&#39;un parquet spécialisé et complète
                                    l&#39;arsenal répressif contre le trafic de drogue.</p>
                            </a></article>
                        <article class="content_item content_type content_type_video"><a
                                href="var/on-est-un-peu-habitues-l-eau-toujours-non-potable-dans-plusieurs-communes-du-pays-de-fayence_AV-202502040596.html"
                                title="&quot;On est un peu habitués&quot;: l&#39;eau toujours non potable dans plusieurs communes du pays de Fayence">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T16:00:52+01:00">16h00</time></div>
                                <h3 class="content_item_title">&quot;On est un peu habitués&quot;: l&#39;eau toujours non potable dans
                                    plusieurs communes du pays de Fayence</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/QvY4IBzLqmrNiVTKaTPZfqPeeN8=/0x176:2048x1328/316x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg, https://images.bfmtv.com/AofdLt29rxoccTgqigsSjjMwqvY=/0x176:2048x1328/632x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/Qlwwnpx44M3wb5y4JnPGqGoCVD8=/0x176:2048x1328/640x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/kQkjLmJGR_jvrx38J8aJp3dYFds=/0x176:2048x1328/240x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/kQkjLmJGR_jvrx38J8aJp3dYFds=/0x176:2048x1328/240x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/QvY4IBzLqmrNiVTKaTPZfqPeeN8=/0x176:2048x1328/316x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg"
                                        src="https://images.bfmtv.com/QvY4IBzLqmrNiVTKaTPZfqPeeN8=/0x176:2048x1328/316x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg"
                                        alt="De l&#39;eau du robinet (illustration).">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/QvY4IBzLqmrNiVTKaTPZfqPeeN8=/0x176:2048x1328/316x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg, https://images.bfmtv.com/AofdLt29rxoccTgqigsSjjMwqvY=/0x176:2048x1328/632x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/82nkpY2WozNOiHoaEDKOGN_mraw=/0x176:2048x1328/320x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg, https://images.bfmtv.com/Qlwwnpx44M3wb5y4JnPGqGoCVD8=/0x176:2048x1328/640x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/VkkfyavjHzfFM92uRe0g8a1sgJQ=/0x176:2048x1328/120x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg, https://images.bfmtv.com/kQkjLmJGR_jvrx38J8aJp3dYFds=/0x176:2048x1328/240x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/VkkfyavjHzfFM92uRe0g8a1sgJQ=/0x176:2048x1328/120x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg, https://images.bfmtv.com/kQkjLmJGR_jvrx38J8aJp3dYFds=/0x176:2048x1328/240x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/QvY4IBzLqmrNiVTKaTPZfqPeeN8=/0x176:2048x1328/316x0/images/5-manieres-de-filtrer-son-eau-du-robinet-pour-l-assainir-1838197.jpg"
                                            alt="De l&#39;eau du robinet (illustration).">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">Depuis plusieurs jours, l&#39;eau du robinet est impropre à la consommation dans
                                    des communes du Pays de Fayence (Var). Pour les personnes vulnérables, une distribution de
                                    bouteilles d&#39;eau est organisée.</p>
                            </a></article>
                        <article class="content_item content_type content_type_tag_edito"><a
                                href="paris/mort-de-lilibelle-en-essonne-le-parquet-fait-appel-de-la-condamnation-de-l-accuse_AD-202502040594.html"
                                title="Mort de Lilibelle en Essonne: le parquet fait appel de la condamnation de l&#39;accusé">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:59:05+01:00">15h59</time></div>
                                <h3 class="content_item_title">Mort de Lilibelle en Essonne: le parquet fait appel de la condamnation
                                    de l&#39;accusé</h3>
                                <p class="item_chapo">L&#39;auteur du coup de couteau fatal à Lilibelle, 14 ans, tuée lors d&#39;une
                                    rixe à Saint-Chéron en février 2021, a été condamné à 10 ans de réclusion criminelle. Le parquet
                                    fait appel de la condamnation.</p>
                            </a></article>
                        <article class="content_item content_type content_type_video"><a
                                href="police-justice/cambriolages-gare-aux-feuilles-blanches-qui-depassent-des-boites-aux-lettres_AV-202502040592.html"
                                title="Cambriolages: gare aux feuilles blanches qui dépassent des boîtes aux lettres">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:56:55+01:00">15h56</time></div>
                                <h3 class="content_item_title">Cambriolages: gare aux feuilles blanches qui dépassent des boîtes aux
                                    lettres</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/WjXb-XjahhFJm_YK3FWfXRnvnBU=/0x0:1920x1080/316x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp, https://images.bfmtv.com/lgEjSogNipRHuETI_yFJc-UbXIk=/0x0:1920x1080/632x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/dX3MB38_rW0V6TAEP5UYPZKNvDo=/0x0:1920x1080/316x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg, https://images.bfmtv.com/315ZhF0R_F1Ea26tchrGZlCMYeM=/0x0:1920x1080/632x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/-OAsA3QF9rl-Qwi_GUdVkLOx7UQ=/0x0:1920x1080/640x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/iVCoHe2wIE_TvRg_u9bMcd-B2iM=/0x0:1920x1080/640x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/LNXUF1DOr7tWI17dAdcKzUCmAcA=/0x0:1920x1080/240x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/n6fsu2UxbpR2TPo0ozDjsiJa35U=/0x0:1920x1080/240x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/LNXUF1DOr7tWI17dAdcKzUCmAcA=/0x0:1920x1080/240x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/n6fsu2UxbpR2TPo0ozDjsiJa35U=/0x0:1920x1080/240x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/dX3MB38_rW0V6TAEP5UYPZKNvDo=/0x0:1920x1080/316x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg"
                                        src="https://images.bfmtv.com/dX3MB38_rW0V6TAEP5UYPZKNvDo=/0x0:1920x1080/316x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg"
                                        alt="Attention aux cambriolages, une feuille blanche dans votre boîte aux lettres peut signaler une maison inoccupée.">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/WjXb-XjahhFJm_YK3FWfXRnvnBU=/0x0:1920x1080/316x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp, https://images.bfmtv.com/lgEjSogNipRHuETI_yFJc-UbXIk=/0x0:1920x1080/632x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/dX3MB38_rW0V6TAEP5UYPZKNvDo=/0x0:1920x1080/316x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg, https://images.bfmtv.com/315ZhF0R_F1Ea26tchrGZlCMYeM=/0x0:1920x1080/632x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/o8AR5lusUDJxs-mjGFcEoQIqRZI=/0x0:1920x1080/320x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp, https://images.bfmtv.com/-OAsA3QF9rl-Qwi_GUdVkLOx7UQ=/0x0:1920x1080/640x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/dIC6VEM0EdLpQycS9v8eU8MnBEw=/0x0:1920x1080/320x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg, https://images.bfmtv.com/iVCoHe2wIE_TvRg_u9bMcd-B2iM=/0x0:1920x1080/640x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/HWUFCHaDSCm_JFChJCfQc0pKEEk=/0x0:1920x1080/120x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp, https://images.bfmtv.com/LNXUF1DOr7tWI17dAdcKzUCmAcA=/0x0:1920x1080/240x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/LR4di8_cTdqtDgiXhzLfBvpE990=/0x0:1920x1080/120x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg, https://images.bfmtv.com/n6fsu2UxbpR2TPo0ozDjsiJa35U=/0x0:1920x1080/240x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/HWUFCHaDSCm_JFChJCfQc0pKEEk=/0x0:1920x1080/120x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp, https://images.bfmtv.com/LNXUF1DOr7tWI17dAdcKzUCmAcA=/0x0:1920x1080/240x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/LR4di8_cTdqtDgiXhzLfBvpE990=/0x0:1920x1080/120x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg, https://images.bfmtv.com/n6fsu2UxbpR2TPo0ozDjsiJa35U=/0x0:1920x1080/240x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/dX3MB38_rW0V6TAEP5UYPZKNvDo=/0x0:1920x1080/316x0/images/Cambriolages-une-feuille-blanche-dans-votre-boite-aux-lettres-peut-signaler-une-maison-inoccupee-2027109.jpg"
                                            alt="Attention aux cambriolages, une feuille blanche dans votre boîte aux lettres peut signaler une maison inoccupée.">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">De l&#39;ouest à l&#39;est de la France, des signalements de feuilles blanches
                                    dépassant de boîtes aux lettres se multiplient. Les gendarmes craignent que cela soit une nouvelle
                                    technique des cambrioleurs pour repérer les absences.</p>
                            </a></article>
                        <article class="content_item content_type content_type_video"><a
                                href="tech/tiktok/si-nous-concluons-le-bon-accord-nous-le-ferons-donald-trump-evoque-desormais-un-fonds-souverain-pour-racheter-tiktok_AV-202502040590.html"
                                title="&quot;Si nous concluons le bon accord, nous le ferons&quot;: Donald Trump évoque désormais un fonds souverain pour racheter Tiktok">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:53:35+01:00">15h53</time></div>
                                <h3 class="content_item_title">&quot;Si nous concluons le bon accord, nous le ferons&quot;: Donald
                                    Trump évoque désormais un fonds souverain pour racheter Tiktok</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/pmPJZddetSbS_54HEHV_DKOpppg=/0x81:2048x1233/316x0/images/Tiktok-2014617.webp, https://images.bfmtv.com/mumkkz5gb-bTjPmZP3iMfylmrGA=/0x81:2048x1233/632x0/images/Tiktok-2014617.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/-rJPeDUDt168jebbAdjsHeeqAck=/0x81:2048x1233/316x0/images/Tiktok-2014617.jpg, https://images.bfmtv.com/IQwNRIlnqembWE5D1lJEsaOM23M=/0x81:2048x1233/632x0/images/Tiktok-2014617.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/XIJyEJw6ILEWaY-GSFqnE-tyumM=/0x81:2048x1233/640x0/images/Tiktok-2014617.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/Id82efzYQvSgnzXO-EbDRgwXrvY=/0x81:2048x1233/640x0/images/Tiktok-2014617.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/rv8FZt-9N5iFcGrxBwMZq2Rk1IQ=/0x81:2048x1233/240x0/images/Tiktok-2014617.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/Xf26DAp0kI5xh2cwEAV-AdtnY90=/0x81:2048x1233/240x0/images/Tiktok-2014617.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/rv8FZt-9N5iFcGrxBwMZq2Rk1IQ=/0x81:2048x1233/240x0/images/Tiktok-2014617.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/Xf26DAp0kI5xh2cwEAV-AdtnY90=/0x81:2048x1233/240x0/images/Tiktok-2014617.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/-rJPeDUDt168jebbAdjsHeeqAck=/0x81:2048x1233/316x0/images/Tiktok-2014617.jpg"
                                        src="https://images.bfmtv.com/-rJPeDUDt168jebbAdjsHeeqAck=/0x81:2048x1233/316x0/images/Tiktok-2014617.jpg"
                                        alt="Le réseau social Tiktok">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/pmPJZddetSbS_54HEHV_DKOpppg=/0x81:2048x1233/316x0/images/Tiktok-2014617.webp, https://images.bfmtv.com/mumkkz5gb-bTjPmZP3iMfylmrGA=/0x81:2048x1233/632x0/images/Tiktok-2014617.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/-rJPeDUDt168jebbAdjsHeeqAck=/0x81:2048x1233/316x0/images/Tiktok-2014617.jpg, https://images.bfmtv.com/IQwNRIlnqembWE5D1lJEsaOM23M=/0x81:2048x1233/632x0/images/Tiktok-2014617.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/IPs5vgaDDWwrGaq0Nz6LR79slts=/0x81:2048x1233/320x0/images/Tiktok-2014617.webp, https://images.bfmtv.com/XIJyEJw6ILEWaY-GSFqnE-tyumM=/0x81:2048x1233/640x0/images/Tiktok-2014617.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/Xo4CH4bqmDR5Rf6l7S-81jZR09E=/0x81:2048x1233/320x0/images/Tiktok-2014617.jpg, https://images.bfmtv.com/Id82efzYQvSgnzXO-EbDRgwXrvY=/0x81:2048x1233/640x0/images/Tiktok-2014617.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/lo9KO_Lh12eIAuQx2vmWm2sfPfY=/0x81:2048x1233/120x0/images/Tiktok-2014617.webp, https://images.bfmtv.com/rv8FZt-9N5iFcGrxBwMZq2Rk1IQ=/0x81:2048x1233/240x0/images/Tiktok-2014617.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/WzCSHvDvGWQco3LCzRMsnsJW2RU=/0x81:2048x1233/120x0/images/Tiktok-2014617.jpg, https://images.bfmtv.com/Xf26DAp0kI5xh2cwEAV-AdtnY90=/0x81:2048x1233/240x0/images/Tiktok-2014617.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/lo9KO_Lh12eIAuQx2vmWm2sfPfY=/0x81:2048x1233/120x0/images/Tiktok-2014617.webp, https://images.bfmtv.com/rv8FZt-9N5iFcGrxBwMZq2Rk1IQ=/0x81:2048x1233/240x0/images/Tiktok-2014617.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/WzCSHvDvGWQco3LCzRMsnsJW2RU=/0x81:2048x1233/120x0/images/Tiktok-2014617.jpg, https://images.bfmtv.com/Xf26DAp0kI5xh2cwEAV-AdtnY90=/0x81:2048x1233/240x0/images/Tiktok-2014617.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/-rJPeDUDt168jebbAdjsHeeqAck=/0x81:2048x1233/316x0/images/Tiktok-2014617.jpg"
                                            alt="Le réseau social Tiktok">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">Le président américain a signé un décret pour mettre en place un fonds souverain
                                    d&#39;Etat. Il pourrait être utilisé pour racheter Tiktok.</p>
                            </a></article>
                        <article class="content_item content_type content_type_video"><a
                                href="https://rmcsport.bfmtv.com/football/transferts/mercato-ibrahimovic-justifie-le-depart-de-bennacer-a-l-om_AV-202502040583.html"
                                title="Mercato: Ibrahimovic justifie le départ de Bennacer à l&#39;OM">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:46:59+01:00">15h46</time></div>
                                <h3 class="content_item_title">Mercato: Ibrahimovic justifie le départ de Bennacer à l&#39;OM</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/rTZXr_zEZdhrg381qtQIszPw2Vo=/0x137:1392x920/316x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp, https://images.bfmtv.com/jcjKT-T_ezNIPxk3K_CY2rLlDPU=/0x137:1392x920/632x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/CNNuxXFfpYyElFhQFb7PGCmZYtw=/0x137:1392x920/316x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg, https://images.bfmtv.com/nrCc4BjBCKtJNH5CepeL6uNnHSc=/0x137:1392x920/632x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/8a2XX-DevqdNHsp8_RU5IbwQ4yQ=/0x137:1392x920/640x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/emDxwkNyU-iTElKlm1KSyNQQDos=/0x137:1392x920/640x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/utVUIxCffu8e_xyUK48Gr63OIfk=/0x137:1392x920/240x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/yI5Ht43gaBvMNugur_i5KiNhZd8=/0x137:1392x920/240x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/utVUIxCffu8e_xyUK48Gr63OIfk=/0x137:1392x920/240x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/yI5Ht43gaBvMNugur_i5KiNhZd8=/0x137:1392x920/240x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/CNNuxXFfpYyElFhQFb7PGCmZYtw=/0x137:1392x920/316x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg"
                                        src="https://images.bfmtv.com/CNNuxXFfpYyElFhQFb7PGCmZYtw=/0x137:1392x920/316x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg"
                                        alt="Zlatan Ibrahimovic lors d&#39;un match de l&#39;AC Milan à Zagreb en Ligue des champions, le 29 janvier 2025">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/rTZXr_zEZdhrg381qtQIszPw2Vo=/0x137:1392x920/316x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp, https://images.bfmtv.com/jcjKT-T_ezNIPxk3K_CY2rLlDPU=/0x137:1392x920/632x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/CNNuxXFfpYyElFhQFb7PGCmZYtw=/0x137:1392x920/316x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg, https://images.bfmtv.com/nrCc4BjBCKtJNH5CepeL6uNnHSc=/0x137:1392x920/632x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/EMKsu53evvwvqOWI0FGIuN9trFY=/0x137:1392x920/320x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp, https://images.bfmtv.com/8a2XX-DevqdNHsp8_RU5IbwQ4yQ=/0x137:1392x920/640x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/joen6IdJ5PjdohYsvL967sftCkA=/0x137:1392x920/320x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg, https://images.bfmtv.com/emDxwkNyU-iTElKlm1KSyNQQDos=/0x137:1392x920/640x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/5lN6VTQgcnvl3wRg17veQLCkXw4=/0x137:1392x920/120x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp, https://images.bfmtv.com/utVUIxCffu8e_xyUK48Gr63OIfk=/0x137:1392x920/240x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/tYHO8u1iisU2L4SRF4MWpN59Cq0=/0x137:1392x920/120x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg, https://images.bfmtv.com/yI5Ht43gaBvMNugur_i5KiNhZd8=/0x137:1392x920/240x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/5lN6VTQgcnvl3wRg17veQLCkXw4=/0x137:1392x920/120x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp, https://images.bfmtv.com/utVUIxCffu8e_xyUK48Gr63OIfk=/0x137:1392x920/240x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/tYHO8u1iisU2L4SRF4MWpN59Cq0=/0x137:1392x920/120x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg, https://images.bfmtv.com/yI5Ht43gaBvMNugur_i5KiNhZd8=/0x137:1392x920/240x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/CNNuxXFfpYyElFhQFb7PGCmZYtw=/0x137:1392x920/316x0/images/Zlatan-Ibrahimovic-lors-d-un-match-de-l-AC-Milan-a-Zagreb-en-Ligue-des-champions-le-29-janvier-2025-2027120.jpg"
                                            alt="Zlatan Ibrahimovic lors d&#39;un match de l&#39;AC Milan à Zagreb en Ligue des champions, le 29 janvier 2025">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">Zlatan Ibrahimovic a livré mardi son ressenti sur le départ d&#39;Ismaël
                                    Bennacer à l&#39;Olympique de Marseille pendant le dernier jour du mercato hivernal. Le dirigeant de
                                    l&#39;AC Milan n&#39;a pas semblé en vouloir au milieu algérien mais a jugé que son départ était
                                    devenu nécessaire.</p>
                            </a></article>
                        <article class="content_item content_type content_type_video"><a
                                href="tech/vie-numerique/les-salaries-etaient-filmes-en-permanence-une-entreprise-epinglee-pour-surveillance-disproportionnee_AV-202502040581.html"
                                title="&quot;Les salariés étaient filmés en permanence&quot;: une entreprise épinglée pour &quot;surveillance disproportionnée&quot;">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:46:40+01:00">15h46</time></div>
                                <h3 class="content_item_title">&quot;Les salariés étaient filmés en permanence&quot;: une entreprise
                                    épinglée pour &quot;surveillance disproportionnée&quot;</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/kb55ggxHHPPkoExPPLSUUi-HCxw=/0x142:2048x1294/316x0/images/Employe-travail-2027009.webp, https://images.bfmtv.com/SjZ01BL0ktQabXKEaNkmxSZ7tbo=/0x142:2048x1294/632x0/images/Employe-travail-2027009.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/ZEVf2X1za2xEtTEO0J5cAAuyD4o=/0x142:2048x1294/316x0/images/Employe-travail-2027009.jpg, https://images.bfmtv.com/MvVrZeP64QROMq6aNly0AkGbnqc=/0x142:2048x1294/632x0/images/Employe-travail-2027009.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/vigzvML2iSZFkDxOjV_s-6D0AGE=/0x142:2048x1294/640x0/images/Employe-travail-2027009.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/tWKs5Xt_ebaMETEWAuxAGN56ciI=/0x142:2048x1294/640x0/images/Employe-travail-2027009.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/ejTO11zNwIWa6-peIVrPb-qNh48=/0x142:2048x1294/240x0/images/Employe-travail-2027009.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/03woCYlhkghfD_0fqZD5aHe3p_k=/0x142:2048x1294/240x0/images/Employe-travail-2027009.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/ejTO11zNwIWa6-peIVrPb-qNh48=/0x142:2048x1294/240x0/images/Employe-travail-2027009.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/03woCYlhkghfD_0fqZD5aHe3p_k=/0x142:2048x1294/240x0/images/Employe-travail-2027009.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/ZEVf2X1za2xEtTEO0J5cAAuyD4o=/0x142:2048x1294/316x0/images/Employe-travail-2027009.jpg"
                                        src="https://images.bfmtv.com/ZEVf2X1za2xEtTEO0J5cAAuyD4o=/0x142:2048x1294/316x0/images/Employe-travail-2027009.jpg"
                                        alt="Un employé au bureau.">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/kb55ggxHHPPkoExPPLSUUi-HCxw=/0x142:2048x1294/316x0/images/Employe-travail-2027009.webp, https://images.bfmtv.com/SjZ01BL0ktQabXKEaNkmxSZ7tbo=/0x142:2048x1294/632x0/images/Employe-travail-2027009.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/ZEVf2X1za2xEtTEO0J5cAAuyD4o=/0x142:2048x1294/316x0/images/Employe-travail-2027009.jpg, https://images.bfmtv.com/MvVrZeP64QROMq6aNly0AkGbnqc=/0x142:2048x1294/632x0/images/Employe-travail-2027009.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/SgcGnIhC55zaafhiaBdr_RcruJg=/0x142:2048x1294/320x0/images/Employe-travail-2027009.webp, https://images.bfmtv.com/vigzvML2iSZFkDxOjV_s-6D0AGE=/0x142:2048x1294/640x0/images/Employe-travail-2027009.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/GeyR6ow3g04_6V6pd1M0j-D0F8U=/0x142:2048x1294/320x0/images/Employe-travail-2027009.jpg, https://images.bfmtv.com/tWKs5Xt_ebaMETEWAuxAGN56ciI=/0x142:2048x1294/640x0/images/Employe-travail-2027009.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/VWm29Q_YPHPZMP3fCTo00Ynh9Uc=/0x142:2048x1294/120x0/images/Employe-travail-2027009.webp, https://images.bfmtv.com/ejTO11zNwIWa6-peIVrPb-qNh48=/0x142:2048x1294/240x0/images/Employe-travail-2027009.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/LjL1d_3UKa_hD3Pxkpd4ObUAYp0=/0x142:2048x1294/120x0/images/Employe-travail-2027009.jpg, https://images.bfmtv.com/03woCYlhkghfD_0fqZD5aHe3p_k=/0x142:2048x1294/240x0/images/Employe-travail-2027009.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/VWm29Q_YPHPZMP3fCTo00Ynh9Uc=/0x142:2048x1294/120x0/images/Employe-travail-2027009.webp, https://images.bfmtv.com/ejTO11zNwIWa6-peIVrPb-qNh48=/0x142:2048x1294/240x0/images/Employe-travail-2027009.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/LjL1d_3UKa_hD3Pxkpd4ObUAYp0=/0x142:2048x1294/120x0/images/Employe-travail-2027009.jpg, https://images.bfmtv.com/03woCYlhkghfD_0fqZD5aHe3p_k=/0x142:2048x1294/240x0/images/Employe-travail-2027009.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/ZEVf2X1za2xEtTEO0J5cAAuyD4o=/0x142:2048x1294/316x0/images/Employe-travail-2027009.jpg"
                                            alt="Un employé au bureau.">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">Intervenant dans le secteur immobilier, l&#39;entreprise, qui n&#39;est pas
                                    nommée par la Cnil, surveillait ses employés à l&#39;aide d&#39;un logiciel et d&#39;un système de
                                    vidéosurveillance.</p>
                            </a></article>
                        <article class="content_item"><a
                                href="international/europe/allemagne/allemagne-l-ancien-chancelier-gerhard-schroder-hospitalise-pour-burnout_AN-202502040576.html"
                                title="Allemagne: l&#39;ancien chancelier Gerhard Schroder hospitalisé pour burnout">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:40:36+01:00">15h40</time></div>
                                <h3 class="content_item_title">Allemagne: l&#39;ancien chancelier Gerhard Schroder hospitalisé pour
                                    burnout</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/ClSFZTNy2KyduXEhtCRNlO9rkZo=/0x106:2048x1258/316x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp, https://images.bfmtv.com/3qrv4hAivV0QX-OUn3mtVoJ47kA=/0x106:2048x1258/632x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/pGjmz01YIPpY2ZSs250tpvh91r0=/0x106:2048x1258/316x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg, https://images.bfmtv.com/JyfeZ5KNoMieEoVAUQAgRaodY5E=/0x106:2048x1258/632x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/rbn3dfKbA_CVJOeO9992vfMxNiw=/0x106:2048x1258/640x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/wfwjTXpRo6FDA3nX3hskYFonKdI=/0x106:2048x1258/640x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/1xs5lzas7q1uwmidqDqkypxNV7c=/0x106:2048x1258/240x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/y0j1TyhywrO6KVOkpDpCCuYH7QA=/0x106:2048x1258/240x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/1xs5lzas7q1uwmidqDqkypxNV7c=/0x106:2048x1258/240x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/y0j1TyhywrO6KVOkpDpCCuYH7QA=/0x106:2048x1258/240x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/pGjmz01YIPpY2ZSs250tpvh91r0=/0x106:2048x1258/316x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg"
                                        src="https://images.bfmtv.com/pGjmz01YIPpY2ZSs250tpvh91r0=/0x106:2048x1258/316x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg"
                                        alt="Gerhard Schröder à Vienne en Autriche le 31 octobre 2024">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/ClSFZTNy2KyduXEhtCRNlO9rkZo=/0x106:2048x1258/316x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp, https://images.bfmtv.com/3qrv4hAivV0QX-OUn3mtVoJ47kA=/0x106:2048x1258/632x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/pGjmz01YIPpY2ZSs250tpvh91r0=/0x106:2048x1258/316x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg, https://images.bfmtv.com/JyfeZ5KNoMieEoVAUQAgRaodY5E=/0x106:2048x1258/632x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/2_5yRl_8y0DqDdKMMe4NV60cWCU=/0x106:2048x1258/320x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp, https://images.bfmtv.com/rbn3dfKbA_CVJOeO9992vfMxNiw=/0x106:2048x1258/640x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/dF4gmKwIM5CVLtCe2RClfezORxw=/0x106:2048x1258/320x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg, https://images.bfmtv.com/wfwjTXpRo6FDA3nX3hskYFonKdI=/0x106:2048x1258/640x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/nB4AW9nbvnJuLDEXGEg8H9u7DW0=/0x106:2048x1258/120x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp, https://images.bfmtv.com/1xs5lzas7q1uwmidqDqkypxNV7c=/0x106:2048x1258/240x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/VLQtZLXSn5IqaoYxnmXjrUXwJYE=/0x106:2048x1258/120x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg, https://images.bfmtv.com/y0j1TyhywrO6KVOkpDpCCuYH7QA=/0x106:2048x1258/240x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/nB4AW9nbvnJuLDEXGEg8H9u7DW0=/0x106:2048x1258/120x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp, https://images.bfmtv.com/1xs5lzas7q1uwmidqDqkypxNV7c=/0x106:2048x1258/240x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/VLQtZLXSn5IqaoYxnmXjrUXwJYE=/0x106:2048x1258/120x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg, https://images.bfmtv.com/y0j1TyhywrO6KVOkpDpCCuYH7QA=/0x106:2048x1258/240x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/pGjmz01YIPpY2ZSs250tpvh91r0=/0x106:2048x1258/316x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg"
                                            alt="Gerhard Schröder à Vienne en Autriche le 31 octobre 2024">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">L&#39;ancien chancelier allemand Gerhard Schröder, au pouvoir entre 1998 et
                                    2005, a été hospitalisé après avoir montré des signes d&#39;épuisement professionnel.</p>
                            </a></article>
                        <article class="content_item content_item_flash"><a
                                href="marseille/faits-divers/marseille-andre-cermolacce-figure-du-grand-banditisme-connue-sous-le-nom-de-gros-dede-tue-par-balles_AN-202502040527.html"
                                title="Marseille: André Cermolacce, figure du grand banditisme connue sous le nom de &quot;Gros Dédé&quot;, tué par balles">
                                <div class="content_item_time"><time class="content_live_time"
                                        datetime="2025-02-04T15:40:03+01:00">15h40</time></div>
                                <h3 class="content_item_title">Marseille: André Cermolacce, figure du grand banditisme connue sous le
                                    nom de &quot;Gros Dédé&quot;, tué par balles</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/bPTwybUHfMuVNVRcZbfAlR0HtEE=/6x15:1766x1005/316x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp, https://images.bfmtv.com/vX4a9iSo8CQpYFv69fBcfwEv_IQ=/6x15:1766x1005/632x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/gvCYzEeFGgO6oC3L_7WICU35hyg=/6x15:1766x1005/316x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg, https://images.bfmtv.com/NaHpCo5x54ZxvZSIBk_xxkVhLkA=/6x15:1766x1005/632x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/co2pIiAoIFKSFkmRcbTcHj8nmeE=/6x15:1766x1005/640x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/PtdhPINORgsrYwm7oRb-omd6nsk=/6x15:1766x1005/640x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/a0oH1Ojh0VPqBpk2ge5DdVPyfkE=/6x15:1766x1005/240x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/JXoFLjknlpEKDHQd2YTnYGT4zdw=/6x15:1766x1005/240x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/a0oH1Ojh0VPqBpk2ge5DdVPyfkE=/6x15:1766x1005/240x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/JXoFLjknlpEKDHQd2YTnYGT4zdw=/6x15:1766x1005/240x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/gvCYzEeFGgO6oC3L_7WICU35hyg=/6x15:1766x1005/316x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg"
                                        src="https://images.bfmtv.com/gvCYzEeFGgO6oC3L_7WICU35hyg=/6x15:1766x1005/316x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg"
                                        alt="André Cermolacce le 25 avril 2000.">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/bPTwybUHfMuVNVRcZbfAlR0HtEE=/6x15:1766x1005/316x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp, https://images.bfmtv.com/vX4a9iSo8CQpYFv69fBcfwEv_IQ=/6x15:1766x1005/632x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/gvCYzEeFGgO6oC3L_7WICU35hyg=/6x15:1766x1005/316x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg, https://images.bfmtv.com/NaHpCo5x54ZxvZSIBk_xxkVhLkA=/6x15:1766x1005/632x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/jquw3xvVh1ztKLLi4ggCH1xP_r8=/6x15:1766x1005/320x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp, https://images.bfmtv.com/co2pIiAoIFKSFkmRcbTcHj8nmeE=/6x15:1766x1005/640x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/85u_B3mj6ukYx3SaX5-R4rghow4=/6x15:1766x1005/320x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg, https://images.bfmtv.com/PtdhPINORgsrYwm7oRb-omd6nsk=/6x15:1766x1005/640x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/KIxMUmQDP3_f3xGHf12JCSSxnNo=/6x15:1766x1005/120x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp, https://images.bfmtv.com/a0oH1Ojh0VPqBpk2ge5DdVPyfkE=/6x15:1766x1005/240x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/TLBdEqyGMe1PX3TpxiHXeAybZQ0=/6x15:1766x1005/120x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg, https://images.bfmtv.com/JXoFLjknlpEKDHQd2YTnYGT4zdw=/6x15:1766x1005/240x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/KIxMUmQDP3_f3xGHf12JCSSxnNo=/6x15:1766x1005/120x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp, https://images.bfmtv.com/a0oH1Ojh0VPqBpk2ge5DdVPyfkE=/6x15:1766x1005/240x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/TLBdEqyGMe1PX3TpxiHXeAybZQ0=/6x15:1766x1005/120x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg, https://images.bfmtv.com/JXoFLjknlpEKDHQd2YTnYGT4zdw=/6x15:1766x1005/240x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/gvCYzEeFGgO6oC3L_7WICU35hyg=/6x15:1766x1005/316x0/images/Andre-Cermolacce-surnomme-le-Gros-Dede-a-ete-tue-par-balles-a-Marseille-2027082.jpg"
                                            alt="André Cermolacce le 25 avril 2000.">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">Le septuagénaire a été abattu dans le 14e arrondissement de Marseille ce mardi 4
                                    février.</p>
                            </a></article>
                        <article class="content_item content_type content_type_tag_edito"><a
                                href="sciences/les-ossements-de-la-celebre-australopitheque-lucy-vont-etre-exposes-pour-la-premiere-fois-en-europe_AD-202502040573.html"
                                title="Les ossements de la célèbre australopithèque Lucy vont être exposés pour la première fois en Europe">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:39:04+01:00">15h39</time></div>
                                <h3 class="content_item_title">Les ossements de la célèbre australopithèque Lucy vont être exposés
                                    pour la première fois en Europe</h3>
                                <p class="item_chapo">Les ossements de la célèbre australopithèque Lucy, découverts il y a cinquante
                                    ans en Éthiopie, vont être exposés au Musée national de Prague l&#39;été prochain. Longtemps décrite
                                    comme &quot;la grand-mère de l&#39;Humanité&quot;, Lucy est aujourd&#39;hui plutôt considérée comme
                                    une tante ou une cousine, sa filiation directe avec l&#39;Homme étant contestée.</p>
                            </a></article>
                        <article class="content_item"><a
                                href="var/var-un-accident-de-personne-en-gare-d-ollioules-le-trafic-interrompu-entre-aubagne-et-toulon_AN-202502040566.html"
                                title="Var: un accident de personne à Ollioules, le trafic interrompu entre Aubagne et Toulon">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:26:59+01:00">15h26</time></div>
                                <h3 class="content_item_title">Var: un accident de personne à Ollioules, le trafic interrompu entre
                                    Aubagne et Toulon</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/2zRpKtI9WEchTG1mosvNmhdBSlA=/24x4:1288x715/316x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp, https://images.bfmtv.com/i59MnF5ydw7hQgqHjnF7GTbPcQ8=/24x4:1288x715/632x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/QP1tyctwGOmuKBJmAWF5W_tSmg0=/24x4:1288x715/316x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg, https://images.bfmtv.com/kN3y5r6nHQMzAW8514FA28uuSf8=/24x4:1288x715/632x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/Eodh7ilDQ9ep480Mv4QCzvLi8cg=/24x4:1288x715/640x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/jCDU9OlMlt71dXACtU5evr8vQig=/24x4:1288x715/640x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/7DnMgeZDjV36qUY68AjyY8eZMQU=/24x4:1288x715/240x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/Nw_CZ6tZ_BhK75XrerpxevX-ZWs=/24x4:1288x715/240x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/7DnMgeZDjV36qUY68AjyY8eZMQU=/24x4:1288x715/240x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/Nw_CZ6tZ_BhK75XrerpxevX-ZWs=/24x4:1288x715/240x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/QP1tyctwGOmuKBJmAWF5W_tSmg0=/24x4:1288x715/316x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg"
                                        src="https://images.bfmtv.com/QP1tyctwGOmuKBJmAWF5W_tSmg0=/24x4:1288x715/316x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg"
                                        alt="La gare d&#39;Ollioules-Sanary-sur-Mer">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/2zRpKtI9WEchTG1mosvNmhdBSlA=/24x4:1288x715/316x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp, https://images.bfmtv.com/i59MnF5ydw7hQgqHjnF7GTbPcQ8=/24x4:1288x715/632x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/QP1tyctwGOmuKBJmAWF5W_tSmg0=/24x4:1288x715/316x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg, https://images.bfmtv.com/kN3y5r6nHQMzAW8514FA28uuSf8=/24x4:1288x715/632x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/Mynsew12VQQGyULBc9NB23ajZ6Q=/24x4:1288x715/320x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp, https://images.bfmtv.com/Eodh7ilDQ9ep480Mv4QCzvLi8cg=/24x4:1288x715/640x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/PZSOj89GIJ_yyzYejsc-F4xc5wU=/24x4:1288x715/320x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg, https://images.bfmtv.com/jCDU9OlMlt71dXACtU5evr8vQig=/24x4:1288x715/640x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/HUl519jwWoR_3r4Ma_nO-_1Ctiw=/24x4:1288x715/120x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp, https://images.bfmtv.com/7DnMgeZDjV36qUY68AjyY8eZMQU=/24x4:1288x715/240x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/YgCHByffRrGNAVzsPhq4acNcras=/24x4:1288x715/120x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg, https://images.bfmtv.com/Nw_CZ6tZ_BhK75XrerpxevX-ZWs=/24x4:1288x715/240x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/HUl519jwWoR_3r4Ma_nO-_1Ctiw=/24x4:1288x715/120x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp, https://images.bfmtv.com/7DnMgeZDjV36qUY68AjyY8eZMQU=/24x4:1288x715/240x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/YgCHByffRrGNAVzsPhq4acNcras=/24x4:1288x715/120x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg, https://images.bfmtv.com/Nw_CZ6tZ_BhK75XrerpxevX-ZWs=/24x4:1288x715/240x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/QP1tyctwGOmuKBJmAWF5W_tSmg0=/24x4:1288x715/316x0/images/La-gare-d-Ollioules-Sanary-sur-Mer-2027083.jpg"
                                            alt="La gare d&#39;Ollioules-Sanary-sur-Mer">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">Sur la X, la SNCF fait état d&#39;un accident de personne à Ollioules,
                                    perturbant fortement le trafic ferroviaire sur la ligne.</p>
                            </a></article>
                        <article class="content_item"><a
                                href="https://rmcsport.bfmtv.com/football/national/national-l-ancien-president-du-fc-rouen-charles-maarek-juge-prochainement_AN-202502040562.html"
                                title="National: l&#39;ancien président du FC Rouen, Charles Maarek, jugé prochainement">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:15:20+01:00">15h15</time></div>
                                <h3 class="content_item_title">National: l&#39;ancien président du FC Rouen, Charles Maarek, jugé
                                    prochainement</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/bwgDMAB8Op5pUzEkbJhPMLGhTHc=/0x118:2048x1270/316x0/images/Charles-MAAREK-2023591.webp, https://images.bfmtv.com/gE8xwvz-K0i-zwB4xtzMv1r3zFY=/0x118:2048x1270/632x0/images/Charles-MAAREK-2023591.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/CQZr0E1XBhQ9Ts7_ZHsjlWp9X1I=/0x118:2048x1270/316x0/images/Charles-MAAREK-2023591.jpg, https://images.bfmtv.com/ft7tGwxSHVa_b_j4oBEKJWyqkwI=/0x118:2048x1270/632x0/images/Charles-MAAREK-2023591.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/dJdfTbLEdWQNw-LFmChL-otsYaU=/0x118:2048x1270/640x0/images/Charles-MAAREK-2023591.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/W2hcpmlf_LaR3DvbwxQf0JwBYjw=/0x118:2048x1270/640x0/images/Charles-MAAREK-2023591.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/X07XpUwWWahLRzCV87C1Nr_rimg=/0x118:2048x1270/240x0/images/Charles-MAAREK-2023591.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/P0fgwVYHIYfdMlB80rvdnIHuFNc=/0x118:2048x1270/240x0/images/Charles-MAAREK-2023591.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/X07XpUwWWahLRzCV87C1Nr_rimg=/0x118:2048x1270/240x0/images/Charles-MAAREK-2023591.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/P0fgwVYHIYfdMlB80rvdnIHuFNc=/0x118:2048x1270/240x0/images/Charles-MAAREK-2023591.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/CQZr0E1XBhQ9Ts7_ZHsjlWp9X1I=/0x118:2048x1270/316x0/images/Charles-MAAREK-2023591.jpg"
                                        src="https://images.bfmtv.com/CQZr0E1XBhQ9Ts7_ZHsjlWp9X1I=/0x118:2048x1270/316x0/images/Charles-MAAREK-2023591.jpg"
                                        alt="Charles MAAREK">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/bwgDMAB8Op5pUzEkbJhPMLGhTHc=/0x118:2048x1270/316x0/images/Charles-MAAREK-2023591.webp, https://images.bfmtv.com/gE8xwvz-K0i-zwB4xtzMv1r3zFY=/0x118:2048x1270/632x0/images/Charles-MAAREK-2023591.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/CQZr0E1XBhQ9Ts7_ZHsjlWp9X1I=/0x118:2048x1270/316x0/images/Charles-MAAREK-2023591.jpg, https://images.bfmtv.com/ft7tGwxSHVa_b_j4oBEKJWyqkwI=/0x118:2048x1270/632x0/images/Charles-MAAREK-2023591.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/5zdd7NqIfAEkgArqZdbFkBhFhHE=/0x118:2048x1270/320x0/images/Charles-MAAREK-2023591.webp, https://images.bfmtv.com/dJdfTbLEdWQNw-LFmChL-otsYaU=/0x118:2048x1270/640x0/images/Charles-MAAREK-2023591.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/MHW-LM7RX-B9i48-VwcrT2O6A8o=/0x118:2048x1270/320x0/images/Charles-MAAREK-2023591.jpg, https://images.bfmtv.com/W2hcpmlf_LaR3DvbwxQf0JwBYjw=/0x118:2048x1270/640x0/images/Charles-MAAREK-2023591.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/IFPoV1e2gMFDE2aJw79rDzsZOxI=/0x118:2048x1270/120x0/images/Charles-MAAREK-2023591.webp, https://images.bfmtv.com/X07XpUwWWahLRzCV87C1Nr_rimg=/0x118:2048x1270/240x0/images/Charles-MAAREK-2023591.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/8rz00-w3TxkhWH8nuJzFMsUNe4Y=/0x118:2048x1270/120x0/images/Charles-MAAREK-2023591.jpg, https://images.bfmtv.com/P0fgwVYHIYfdMlB80rvdnIHuFNc=/0x118:2048x1270/240x0/images/Charles-MAAREK-2023591.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/IFPoV1e2gMFDE2aJw79rDzsZOxI=/0x118:2048x1270/120x0/images/Charles-MAAREK-2023591.webp, https://images.bfmtv.com/X07XpUwWWahLRzCV87C1Nr_rimg=/0x118:2048x1270/240x0/images/Charles-MAAREK-2023591.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/8rz00-w3TxkhWH8nuJzFMsUNe4Y=/0x118:2048x1270/120x0/images/Charles-MAAREK-2023591.jpg, https://images.bfmtv.com/P0fgwVYHIYfdMlB80rvdnIHuFNc=/0x118:2048x1270/240x0/images/Charles-MAAREK-2023591.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/CQZr0E1XBhQ9Ts7_ZHsjlWp9X1I=/0x118:2048x1270/316x0/images/Charles-MAAREK-2023591.jpg"
                                            alt="Charles MAAREK">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">Charles Maarek comparaîtra devant la justice en septembre 2025. L&#39;ancien
                                    président du FC Rouen est notamment poursuivi pour abus de biens sociaux et escroquerie.</p>
                            </a></article>
                        <article class="content_item content_item_flash"><a
                                href="police-justice/viols-de-mazan-le-proces-en-appel-se-tiendra-a-partir-du-6-octobre-2025_AN-202502040561.html"
                                title="INFO BFMTV. Viols de Mazan: le procès en appel se tiendra à partir du 6 octobre 2025">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:11:31+01:00">15h11</time></div>
                                <h3 class="content_item_title">INFO BFMTV. Viols de Mazan: le procès en appel se tiendra à partir du 6
                                    octobre 2025</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/0GPxcM_W5v9DjLCM-N84iIw68MY=/0x39:768x471/316x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp, https://images.bfmtv.com/pKeJGP_FYEr1J1BOUUVpVAJecxw=/0x39:768x471/632x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/ako_1yCXoSdzhhhtxysIbX75eu0=/0x39:768x471/316x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg, https://images.bfmtv.com/-Xdd1RKklWUs-giDGhY08aKv5WM=/0x39:768x471/632x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/NFQzl2I83xew4-x4WPSvuPaDINA=/0x39:768x471/640x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/7XdQoI2Wrb7pX8EZDkKOpAvKy6s=/0x39:768x471/640x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/KTRRcK3VgBEIGMj7kp7k0o_-nQ4=/0x39:768x471/240x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/iEOtDt0hdtZfFDAMhwGW-AWg7s4=/0x39:768x471/240x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/KTRRcK3VgBEIGMj7kp7k0o_-nQ4=/0x39:768x471/240x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/iEOtDt0hdtZfFDAMhwGW-AWg7s4=/0x39:768x471/240x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/ako_1yCXoSdzhhhtxysIbX75eu0=/0x39:768x471/316x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg"
                                        src="https://images.bfmtv.com/ako_1yCXoSdzhhhtxysIbX75eu0=/0x39:768x471/316x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg"
                                        alt="Des coaccusés arrivent au tribunal d&#39;Avignon pour le procès des viols de Mazan, le 10 septembre 2024 ">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/0GPxcM_W5v9DjLCM-N84iIw68MY=/0x39:768x471/316x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp, https://images.bfmtv.com/pKeJGP_FYEr1J1BOUUVpVAJecxw=/0x39:768x471/632x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/ako_1yCXoSdzhhhtxysIbX75eu0=/0x39:768x471/316x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg, https://images.bfmtv.com/-Xdd1RKklWUs-giDGhY08aKv5WM=/0x39:768x471/632x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/e4u3vzwoceIGlJpuOiX8Uc19c5w=/0x39:768x471/320x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp, https://images.bfmtv.com/NFQzl2I83xew4-x4WPSvuPaDINA=/0x39:768x471/640x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/8tMzCHil1l1LWqUY46-kQj8gIoE=/0x39:768x471/320x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg, https://images.bfmtv.com/7XdQoI2Wrb7pX8EZDkKOpAvKy6s=/0x39:768x471/640x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/5uMKoTQwALjnuEg2o8Tba5LJpjQ=/0x39:768x471/120x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp, https://images.bfmtv.com/KTRRcK3VgBEIGMj7kp7k0o_-nQ4=/0x39:768x471/240x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/BXjKBMgRJ8skO-Ad6K0pQHdRlmw=/0x39:768x471/120x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg, https://images.bfmtv.com/iEOtDt0hdtZfFDAMhwGW-AWg7s4=/0x39:768x471/240x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/5uMKoTQwALjnuEg2o8Tba5LJpjQ=/0x39:768x471/120x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp, https://images.bfmtv.com/KTRRcK3VgBEIGMj7kp7k0o_-nQ4=/0x39:768x471/240x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/BXjKBMgRJ8skO-Ad6K0pQHdRlmw=/0x39:768x471/120x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg, https://images.bfmtv.com/iEOtDt0hdtZfFDAMhwGW-AWg7s4=/0x39:768x471/240x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/ako_1yCXoSdzhhhtxysIbX75eu0=/0x39:768x471/316x0/images/Des-coaccuses-arrivent-au-tribunal-d-Avignon-pour-le-proces-des-viols-de-Mazan-le-10-septembre-2024-1970525.jpg"
                                            alt="Des coaccusés arrivent au tribunal d&#39;Avignon pour le procès des viols de Mazan, le 10 septembre 2024 ">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">À ce stade, 13 accusés ont fait appel de leur condamnation le 19 décembre
                                    dernier dans le procès des viols de Mazan. Ils seront rejugés du 6 octobre au 21 novembre 2025.</p>
                            </a></article>
                        <article class="content_item"><a
                                href="people/apres-le-faux-brad-pitt-sandra-bullock-alerte-ses-fans-sur-de-faux-profils_AN-202502040560.html"
                                title="Après le faux Brad Pitt, Sandra Bullock alerte ses fans sur de faux profils">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:10:24+01:00">15h10</time></div>
                                <h3 class="content_item_title">Après le faux Brad Pitt, Sandra Bullock alerte ses fans sur de faux
                                    profils</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/onR4HXgI4Sxqy4xCkFySY37VIpk=/0x76:2032x1219/316x0/images/Sandra-Bullock-2026997.webp, https://images.bfmtv.com/fWugT-OcVzI4ti4Z0K7Ce_0gwew=/0x76:2032x1219/632x0/images/Sandra-Bullock-2026997.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/QfzJFVG38A0q6Aunelns6Z_8l6w=/0x76:2032x1219/316x0/images/Sandra-Bullock-2026997.jpg, https://images.bfmtv.com/slRc7FXLVJaWo-FACIL-IlwTGhE=/0x76:2032x1219/632x0/images/Sandra-Bullock-2026997.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/96ApvM5feUlXJJp8AcsCqirIKL4=/0x76:2032x1219/640x0/images/Sandra-Bullock-2026997.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/tEtW1roSI7RUIZllxkCSdbOU7w4=/0x76:2032x1219/640x0/images/Sandra-Bullock-2026997.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/bv36qWaK4jMxw7jB3gslDlzaOYA=/0x76:2032x1219/240x0/images/Sandra-Bullock-2026997.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/SiYrQGSXV3yyWbMP9kAJsmtGzzM=/0x76:2032x1219/240x0/images/Sandra-Bullock-2026997.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/bv36qWaK4jMxw7jB3gslDlzaOYA=/0x76:2032x1219/240x0/images/Sandra-Bullock-2026997.webp 2x"
                                        type="image/webp">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/SiYrQGSXV3yyWbMP9kAJsmtGzzM=/0x76:2032x1219/240x0/images/Sandra-Bullock-2026997.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/QfzJFVG38A0q6Aunelns6Z_8l6w=/0x76:2032x1219/316x0/images/Sandra-Bullock-2026997.jpg"
                                        src="https://images.bfmtv.com/QfzJFVG38A0q6Aunelns6Z_8l6w=/0x76:2032x1219/316x0/images/Sandra-Bullock-2026997.jpg"
                                        alt="Sandra Bullock lors d&#39;une avant-première à Los Angeles le 21 mars 2022.">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/webp" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/onR4HXgI4Sxqy4xCkFySY37VIpk=/0x76:2032x1219/316x0/images/Sandra-Bullock-2026997.webp, https://images.bfmtv.com/fWugT-OcVzI4ti4Z0K7Ce_0gwew=/0x76:2032x1219/632x0/images/Sandra-Bullock-2026997.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/QfzJFVG38A0q6Aunelns6Z_8l6w=/0x76:2032x1219/316x0/images/Sandra-Bullock-2026997.jpg, https://images.bfmtv.com/slRc7FXLVJaWo-FACIL-IlwTGhE=/0x76:2032x1219/632x0/images/Sandra-Bullock-2026997.jpg 2x">
                                        <source type="image/webp" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/bKw8nFvchjillSzruDHP_hmkU80=/0x76:2032x1219/320x0/images/Sandra-Bullock-2026997.webp, https://images.bfmtv.com/96ApvM5feUlXJJp8AcsCqirIKL4=/0x76:2032x1219/640x0/images/Sandra-Bullock-2026997.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/lp6-7aySEsUjNH7FNjp6pJBWS7A=/0x76:2032x1219/320x0/images/Sandra-Bullock-2026997.jpg, https://images.bfmtv.com/tEtW1roSI7RUIZllxkCSdbOU7w4=/0x76:2032x1219/640x0/images/Sandra-Bullock-2026997.jpg 2x">
                                        <source type="image/webp" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/ew-Q5L9kl2ee3Xe53mGBjWGKRKI=/0x76:2032x1219/120x0/images/Sandra-Bullock-2026997.webp, https://images.bfmtv.com/bv36qWaK4jMxw7jB3gslDlzaOYA=/0x76:2032x1219/240x0/images/Sandra-Bullock-2026997.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/wU9OF_xhmCGPteE3IFCaCCFtVDA=/0x76:2032x1219/120x0/images/Sandra-Bullock-2026997.jpg, https://images.bfmtv.com/SiYrQGSXV3yyWbMP9kAJsmtGzzM=/0x76:2032x1219/240x0/images/Sandra-Bullock-2026997.jpg 2x">
                                        <source type="image/webp" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/ew-Q5L9kl2ee3Xe53mGBjWGKRKI=/0x76:2032x1219/120x0/images/Sandra-Bullock-2026997.webp, https://images.bfmtv.com/bv36qWaK4jMxw7jB3gslDlzaOYA=/0x76:2032x1219/240x0/images/Sandra-Bullock-2026997.webp 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/wU9OF_xhmCGPteE3IFCaCCFtVDA=/0x76:2032x1219/120x0/images/Sandra-Bullock-2026997.jpg, https://images.bfmtv.com/SiYrQGSXV3yyWbMP9kAJsmtGzzM=/0x76:2032x1219/240x0/images/Sandra-Bullock-2026997.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/QfzJFVG38A0q6Aunelns6Z_8l6w=/0x76:2032x1219/316x0/images/Sandra-Bullock-2026997.jpg"
                                            alt="Sandra Bullock lors d&#39;une avant-première à Los Angeles le 21 mars 2022.">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">Après l&#39;arnaque au faux Brad Pitt, l&#39;actrice met en garde ses fans. De
                                    faux profils usurpent son identité et celle de ses proches pour tenter d&#39;escroquer des
                                    internautes.</p>
                            </a></article>
                        <article class="content_item content_type content_type_video"><a
                                href="https://rmcsport.bfmtv.com/jeux-olympiques/jo-2030-alphand-en-chef-de-meute-c-est-justement-la-meute-qui-me-fait-peur_AV-202502040559.html"
                                title="JO 2030: Alphand en chef de meute? &quot;C&#39;est justement la meute qui me fait peur&quot;">
                                <div class="content_item_time"><time class="content_live_time" itemprop="pubdate" pubdate="pubdate"
                                        datetime="2025-02-04T15:09:36+01:00">15h09</time></div>
                                <h3 class="content_item_title">JO 2030: Alphand en chef de meute? &quot;C&#39;est justement la meute
                                    qui me fait peur&quot;</h3>
                                <picture class="content_item_cover_small with-js">
                                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/1nQYH6DwP9WIkws3sRPBVNP6-ko=/0x0:2048x1152/316x0/images/Luc-Alphand-991021.jpg, https://images.bfmtv.com/3LclegUm51lALHMxL7bGVEcH_1w=/0x0:2048x1152/632x0/images/Luc-Alphand-991021.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/nNX8ql4zkE2I-NfFo4HTn-RmlBA=/0x0:2048x1152/640x0/images/Luc-Alphand-991021.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/XWkIyqseHmXN-254IZjDnOac8sI=/0x0:2048x1152/240x0/images/Luc-Alphand-991021.jpg 2x"
                                        type="image/jpeg">
                                    <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                        srcset="https://images.bfmtv.com/XWkIyqseHmXN-254IZjDnOac8sI=/0x0:2048x1152/240x0/images/Luc-Alphand-991021.jpg 2x"
                                        type="image/jpeg"><img width="16" height="9" class="lozad"
                                        data-srcset="https://images.bfmtv.com/1nQYH6DwP9WIkws3sRPBVNP6-ko=/0x0:2048x1152/316x0/images/Luc-Alphand-991021.jpg"
                                        src="https://images.bfmtv.com/1nQYH6DwP9WIkws3sRPBVNP6-ko=/0x0:2048x1152/316x0/images/Luc-Alphand-991021.jpg"
                                        alt="Luc Alphand">
                                </picture><noscript>
                                    <picture class="content_item_cover_small">
                                        <source type="image/jpeg" media="(min-width: 441px)"
                                            srcset="https://images.bfmtv.com/1nQYH6DwP9WIkws3sRPBVNP6-ko=/0x0:2048x1152/316x0/images/Luc-Alphand-991021.jpg, https://images.bfmtv.com/3LclegUm51lALHMxL7bGVEcH_1w=/0x0:2048x1152/632x0/images/Luc-Alphand-991021.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 361px)"
                                            srcset="https://images.bfmtv.com/02mt9RaAcHDSwNFj9cA7TA3WTr0=/0x0:2048x1152/320x0/images/Luc-Alphand-991021.jpg, https://images.bfmtv.com/nNX8ql4zkE2I-NfFo4HTn-RmlBA=/0x0:2048x1152/640x0/images/Luc-Alphand-991021.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 321px)"
                                            srcset="https://images.bfmtv.com/9jtncUckYcQvYbGGsZX5fvtFU-M=/0x0:2048x1152/120x0/images/Luc-Alphand-991021.jpg, https://images.bfmtv.com/XWkIyqseHmXN-254IZjDnOac8sI=/0x0:2048x1152/240x0/images/Luc-Alphand-991021.jpg 2x">
                                        <source type="image/jpeg" media="(min-width: 300px)"
                                            srcset="https://images.bfmtv.com/9jtncUckYcQvYbGGsZX5fvtFU-M=/0x0:2048x1152/120x0/images/Luc-Alphand-991021.jpg, https://images.bfmtv.com/XWkIyqseHmXN-254IZjDnOac8sI=/0x0:2048x1152/240x0/images/Luc-Alphand-991021.jpg 2x">
                                        <img
                                            src="https://images.bfmtv.com/1nQYH6DwP9WIkws3sRPBVNP6-ko=/0x0:2048x1152/316x0/images/Luc-Alphand-991021.jpg"
                                            alt="Luc Alphand">
                                    </picture>
                                </noscript>
                                <p class="item_chapo">L&#39;ancien vainqueur de la Coupe du monde de ski, Luc Alphand, s&#39;est
                                    exprimé au micro de RMC Sport au lendemain du retrait de Martin Fourcade dans la course à la
                                    présidence du COJO d&#39;Alpes 2030. Il affirme comprendre la décision de l&#39;ancien biathlète et
                                    milite pour que ce soit un sportif qui soit à la tête des JO 2030. Lui-même? &quot;J&#39;aimerais
                                    travailler sur l&#39;organisation des JO, mais ça me fait peur de devoir tout gérer et pas juste le
                                    sport&quot;</p>
                            </a></article>
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
            <div id="sas_pave2_l" class="bloc_center_full"></div>
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
            const sliderTopic = document.querySelector(".slider_topic");
            const megaMax = document.querySelector("#megamax_parent");
            const scoringBlock = document.querySelector(".block_scoring");
            if (scoringBlock) {
                if (sliderTopic) sliderTopic.before(scoringBlock);
                else if (megaMax) megaMax.after(scoringBlock)
            }
        }
    </script>
    <div class="grid_column grid_column_abc">
        <section class="block block_ordered_five icon_middle" id="ordered_list_top_contenus_manuel_1583490815722">
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
        </section>
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
                    <article class="content_item carousel_item content_type content_type_video"><a href="single_video.html"
                            title="Paris: deux policiers légèrement blessés par un homme devant la préfecture de police">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/0rQEg6z4JTzuZcphmf69cuuvcmg=/0x0:1280x720/285x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp, https://images.bfmtv.com/EhKHaHEt7qNn8Ny1s7GVezYiI4Y=/0x0:1280x720/570x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/3_4yIiwlfWzgacHwgjVtS7FZIvs=/0x0:1280x720/285x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg, https://images.bfmtv.com/Wsi8OEU2RIz15hzhlZtNtDhOgLI=/0x0:1280x720/570x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/HJhNOXPPWuhJNiN6utpSei3qmdU=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/Ln8Uex7RHXLf--EgErrET_VSBao=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/HJhNOXPPWuhJNiN6utpSei3qmdU=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/Ln8Uex7RHXLf--EgErrET_VSBao=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/HJhNOXPPWuhJNiN6utpSei3qmdU=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/Ln8Uex7RHXLf--EgErrET_VSBao=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered"><img width="16" height="9" class="lozad entered loaded"
                                    data-srcset="https://images.bfmtv.com/3_4yIiwlfWzgacHwgjVtS7FZIvs=/0x0:1280x720/285x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg"
                                    src="https://images.bfmtv.com/3_4yIiwlfWzgacHwgjVtS7FZIvs=/0x0:1280x720/285x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg"
                                    alt="Paris: deux policiers légèrement blessés par un homme devant la préfecture de police"
                                    data-ll-status="loaded"
                                    srcset="https://images.bfmtv.com/3_4yIiwlfWzgacHwgjVtS7FZIvs=/0x0:1280x720/285x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/0rQEg6z4JTzuZcphmf69cuuvcmg=/0x0:1280x720/285x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp, https://images.bfmtv.com/EhKHaHEt7qNn8Ny1s7GVezYiI4Y=/0x0:1280x720/570x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/3_4yIiwlfWzgacHwgjVtS7FZIvs=/0x0:1280x720/285x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg, https://images.bfmtv.com/Wsi8OEU2RIz15hzhlZtNtDhOgLI=/0x0:1280x720/570x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/-NsAaWVxCzh-5G7rV1YGdmUGozE=/0x0:1280x720/214x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp, https://images.bfmtv.com/HJhNOXPPWuhJNiN6utpSei3qmdU=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/eCHvmCGQsJxmAAdUrgPxDnOoLhs=/0x0:1280x720/214x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg, https://images.bfmtv.com/Ln8Uex7RHXLf--EgErrET_VSBao=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/-NsAaWVxCzh-5G7rV1YGdmUGozE=/0x0:1280x720/214x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp, https://images.bfmtv.com/HJhNOXPPWuhJNiN6utpSei3qmdU=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/eCHvmCGQsJxmAAdUrgPxDnOoLhs=/0x0:1280x720/214x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg, https://images.bfmtv.com/Ln8Uex7RHXLf--EgErrET_VSBao=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/-NsAaWVxCzh-5G7rV1YGdmUGozE=/0x0:1280x720/214x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp, https://images.bfmtv.com/HJhNOXPPWuhJNiN6utpSei3qmdU=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/eCHvmCGQsJxmAAdUrgPxDnOoLhs=/0x0:1280x720/214x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg, https://images.bfmtv.com/Ln8Uex7RHXLf--EgErrET_VSBao=/0x0:1280x720/428x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/3_4yIiwlfWzgacHwgjVtS7FZIvs=/0x0:1280x720/285x0/images/Paris-deux-policiers-legerement-blesses-par-un-homme-devant-la-prefecture-de-police-2027137.jpg"
                                        alt="Paris: deux policiers légèrement blessés par un homme devant la préfecture de police">
                                </picture>
                            </noscript>
                            <h3 class="content_item_title">Paris: deux policiers légèrement blessés par un homme devant la
                                préfecture de police</h3>
                        </a></article>
                    <article class="content_item carousel_item content_type content_type_video"><a
                            href="economie/replay-emissions/bfm-bourse/culture-bourse-st-micro-faut-il-profiter-de-la-correction-par-antoine-larigaudrie-04-02_VN-202502040604.html"
                            title="Culture Bourse : &quot;ST Micro, faut-il profiter de la correction ?&quot;, par Antoine Larigaudrie - 04/02">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/GN4H_ofTfltCS3_Sa0yeZ035Fi4=/0x0:1280x720/285x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp, https://images.bfmtv.com/Up99kKnF5abvhNCOiyVTf5YhUVE=/0x0:1280x720/570x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/v27334eN6A7hYoE-Ph-5szad04I=/0x0:1280x720/285x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg, https://images.bfmtv.com/fboSl3lAsZQj2jZ_CkdqE_ZE46A=/0x0:1280x720/570x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/aoRwszu5Ri5UJRj3EOw0IMWTjhE=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/vaGwGpPk3VW9NxH422YdEb-uq0Q=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/aoRwszu5Ri5UJRj3EOw0IMWTjhE=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/vaGwGpPk3VW9NxH422YdEb-uq0Q=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/aoRwszu5Ri5UJRj3EOw0IMWTjhE=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/vaGwGpPk3VW9NxH422YdEb-uq0Q=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered"><img width="16" height="9" class="lozad entered loaded"
                                    data-srcset="https://images.bfmtv.com/v27334eN6A7hYoE-Ph-5szad04I=/0x0:1280x720/285x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg"
                                    src="https://images.bfmtv.com/v27334eN6A7hYoE-Ph-5szad04I=/0x0:1280x720/285x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg"
                                    alt="Culture Bourse : &quot;ST Micro, faut-il profiter de la correction ?&quot;, par Antoine Larigaudrie - 04/02"
                                    data-ll-status="loaded"
                                    srcset="https://images.bfmtv.com/v27334eN6A7hYoE-Ph-5szad04I=/0x0:1280x720/285x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/GN4H_ofTfltCS3_Sa0yeZ035Fi4=/0x0:1280x720/285x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp, https://images.bfmtv.com/Up99kKnF5abvhNCOiyVTf5YhUVE=/0x0:1280x720/570x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/v27334eN6A7hYoE-Ph-5szad04I=/0x0:1280x720/285x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg, https://images.bfmtv.com/fboSl3lAsZQj2jZ_CkdqE_ZE46A=/0x0:1280x720/570x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/1mmwerxIXcc2b7Shz5Wtl3eZ3AE=/0x0:1280x720/214x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp, https://images.bfmtv.com/aoRwszu5Ri5UJRj3EOw0IMWTjhE=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/bTGTABmGrdd62xXS-qwevU0iD00=/0x0:1280x720/214x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg, https://images.bfmtv.com/vaGwGpPk3VW9NxH422YdEb-uq0Q=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/1mmwerxIXcc2b7Shz5Wtl3eZ3AE=/0x0:1280x720/214x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp, https://images.bfmtv.com/aoRwszu5Ri5UJRj3EOw0IMWTjhE=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/bTGTABmGrdd62xXS-qwevU0iD00=/0x0:1280x720/214x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg, https://images.bfmtv.com/vaGwGpPk3VW9NxH422YdEb-uq0Q=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/1mmwerxIXcc2b7Shz5Wtl3eZ3AE=/0x0:1280x720/214x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp, https://images.bfmtv.com/aoRwszu5Ri5UJRj3EOw0IMWTjhE=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/bTGTABmGrdd62xXS-qwevU0iD00=/0x0:1280x720/214x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg, https://images.bfmtv.com/vaGwGpPk3VW9NxH422YdEb-uq0Q=/0x0:1280x720/428x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/v27334eN6A7hYoE-Ph-5szad04I=/0x0:1280x720/285x0/images/Culture-Bourse-ST-Micro-faut-il-profiter-de-la-correction-par-Antoine-Larigaudrie-04-02-2027136.jpg"
                                        alt="Culture Bourse : &quot;ST Micro, faut-il profiter de la correction ?&quot;, par Antoine Larigaudrie - 04/02">
                                </picture>
                            </noscript>
                            <h3 class="content_item_title">Culture Bourse : "ST Micro, faut-il profiter de la correction ?", par
                                Antoine Larigaudrie - 04/02</h3>
                        </a></article>
                    <article class="content_item carousel_item content_type content_type_video"><a
                            href="economie/une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite_VN-202502040599.html"
                            title="Une fois les quotas atteints, les politiques de mixité seront elles encore une priorité ?">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/jcwNKv70129U8OQ2MfGSKuD9C4c=/0x0:1280x720/285x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp, https://images.bfmtv.com/kObLgQnSNPBa8VCVPOMYOjtb8Kg=/0x0:1280x720/570x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/38tRnXyA7H-oqe_sbj4JUAu2UgA=/0x0:1280x720/285x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg, https://images.bfmtv.com/-To3q4dcd2ccQyVnLmMA6GaEdIg=/0x0:1280x720/570x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/AiKUQQ6zsU3Y_mma0ChGwa6vGLM=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/4JLP2rMrZtpWwwM8g8JO7Tif9ow=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/AiKUQQ6zsU3Y_mma0ChGwa6vGLM=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/4JLP2rMrZtpWwwM8g8JO7Tif9ow=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/AiKUQQ6zsU3Y_mma0ChGwa6vGLM=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/4JLP2rMrZtpWwwM8g8JO7Tif9ow=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered"><img width="16" height="9" class="lozad entered loaded"
                                    data-srcset="https://images.bfmtv.com/38tRnXyA7H-oqe_sbj4JUAu2UgA=/0x0:1280x720/285x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg"
                                    src="https://images.bfmtv.com/38tRnXyA7H-oqe_sbj4JUAu2UgA=/0x0:1280x720/285x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg"
                                    alt="Une fois les quotas atteints, les politiques de mixité seront elles encore une priorité ?"
                                    data-ll-status="loaded"
                                    srcset="https://images.bfmtv.com/38tRnXyA7H-oqe_sbj4JUAu2UgA=/0x0:1280x720/285x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/jcwNKv70129U8OQ2MfGSKuD9C4c=/0x0:1280x720/285x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp, https://images.bfmtv.com/kObLgQnSNPBa8VCVPOMYOjtb8Kg=/0x0:1280x720/570x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/38tRnXyA7H-oqe_sbj4JUAu2UgA=/0x0:1280x720/285x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg, https://images.bfmtv.com/-To3q4dcd2ccQyVnLmMA6GaEdIg=/0x0:1280x720/570x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/z4hzfmiyP2TfM5TLwpjDWyzBMtc=/0x0:1280x720/214x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp, https://images.bfmtv.com/AiKUQQ6zsU3Y_mma0ChGwa6vGLM=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/J-JGyxDVTO7YWxCwiFuYef4ggjc=/0x0:1280x720/214x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg, https://images.bfmtv.com/4JLP2rMrZtpWwwM8g8JO7Tif9ow=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/z4hzfmiyP2TfM5TLwpjDWyzBMtc=/0x0:1280x720/214x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp, https://images.bfmtv.com/AiKUQQ6zsU3Y_mma0ChGwa6vGLM=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/J-JGyxDVTO7YWxCwiFuYef4ggjc=/0x0:1280x720/214x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg, https://images.bfmtv.com/4JLP2rMrZtpWwwM8g8JO7Tif9ow=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/z4hzfmiyP2TfM5TLwpjDWyzBMtc=/0x0:1280x720/214x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp, https://images.bfmtv.com/AiKUQQ6zsU3Y_mma0ChGwa6vGLM=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/J-JGyxDVTO7YWxCwiFuYef4ggjc=/0x0:1280x720/214x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg, https://images.bfmtv.com/4JLP2rMrZtpWwwM8g8JO7Tif9ow=/0x0:1280x720/428x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/38tRnXyA7H-oqe_sbj4JUAu2UgA=/0x0:1280x720/285x0/images/Une-fois-les-quotas-atteints-les-politiques-de-mixite-seront-elles-encore-une-priorite-2027131.jpg"
                                        alt="Une fois les quotas atteints, les politiques de mixité seront elles encore une priorité ?">
                                </picture>
                            </noscript>
                            <h3 class="content_item_title">Une fois les quotas atteints, les politiques de mixité seront elles
                                encore une priorité ?</h3>
                        </a></article>
                    <article class="content_item carousel_item content_type content_type_video"><a
                            href="economie/replay-emissions/bfm-bourse/usa-today-palantir-s-envole-une-nouvelle-fois-par-eric-lafreniere-04-02_VN-202502040589.html"
                            title="USA Today : &quot;Palantir s'envole une nouvelle fois !&quot; par Éric Lafrenière - 04/02">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/7EvFaC6Ww3OT-2SNyx6s9gi4mkQ=/0x0:1280x720/285x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp, https://images.bfmtv.com/BwVHZQJZwHLehzIaOyFzbjn4KAQ=/0x0:1280x720/570x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/80kdgM5OyH6GhCu_c78DrXHg9sM=/0x0:1280x720/285x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg, https://images.bfmtv.com/CECw5tnxZCgqI4ENWF7kZY6eK2o=/0x0:1280x720/570x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/ZXoOTdz8ZhpqlLH0UsHpWJCQtTM=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/jItKr1gu3SnI5x5hJ9KvUR5g2JE=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/ZXoOTdz8ZhpqlLH0UsHpWJCQtTM=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/jItKr1gu3SnI5x5hJ9KvUR5g2JE=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/ZXoOTdz8ZhpqlLH0UsHpWJCQtTM=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x"
                                    type="image/webp" data-ll-status="entered">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad entered"
                                    srcset="https://images.bfmtv.com/jItKr1gu3SnI5x5hJ9KvUR5g2JE=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x"
                                    type="image/jpeg" data-ll-status="entered"><img width="16" height="9" class="lozad entered loaded"
                                    data-srcset="https://images.bfmtv.com/80kdgM5OyH6GhCu_c78DrXHg9sM=/0x0:1280x720/285x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg"
                                    src="https://images.bfmtv.com/80kdgM5OyH6GhCu_c78DrXHg9sM=/0x0:1280x720/285x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg"
                                    alt="USA Today : &quot;Palantir s'envole une nouvelle fois !&quot; par Éric Lafrenière - 04/02"
                                    data-ll-status="loaded"
                                    srcset="https://images.bfmtv.com/80kdgM5OyH6GhCu_c78DrXHg9sM=/0x0:1280x720/285x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/7EvFaC6Ww3OT-2SNyx6s9gi4mkQ=/0x0:1280x720/285x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp, https://images.bfmtv.com/BwVHZQJZwHLehzIaOyFzbjn4KAQ=/0x0:1280x720/570x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/80kdgM5OyH6GhCu_c78DrXHg9sM=/0x0:1280x720/285x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg, https://images.bfmtv.com/CECw5tnxZCgqI4ENWF7kZY6eK2o=/0x0:1280x720/570x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/sdRsjllb0k31qEE1y3NDwIbXWXE=/0x0:1280x720/214x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp, https://images.bfmtv.com/ZXoOTdz8ZhpqlLH0UsHpWJCQtTM=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/Tmxl_gS6x3r55oFAyaubpRlr0g0=/0x0:1280x720/214x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg, https://images.bfmtv.com/jItKr1gu3SnI5x5hJ9KvUR5g2JE=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/sdRsjllb0k31qEE1y3NDwIbXWXE=/0x0:1280x720/214x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp, https://images.bfmtv.com/ZXoOTdz8ZhpqlLH0UsHpWJCQtTM=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/Tmxl_gS6x3r55oFAyaubpRlr0g0=/0x0:1280x720/214x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg, https://images.bfmtv.com/jItKr1gu3SnI5x5hJ9KvUR5g2JE=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/sdRsjllb0k31qEE1y3NDwIbXWXE=/0x0:1280x720/214x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp, https://images.bfmtv.com/ZXoOTdz8ZhpqlLH0UsHpWJCQtTM=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/Tmxl_gS6x3r55oFAyaubpRlr0g0=/0x0:1280x720/214x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg, https://images.bfmtv.com/jItKr1gu3SnI5x5hJ9KvUR5g2JE=/0x0:1280x720/428x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/80kdgM5OyH6GhCu_c78DrXHg9sM=/0x0:1280x720/285x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg"
                                        alt="USA Today : &quot;Palantir s&#39;envole une nouvelle fois !&quot; par Éric Lafrenière - 04/02">
                                </picture>
                            </noscript>
                            <h3 class="content_item_title">USA Today : "Palantir s'envole une nouvelle fois !" par Éric Lafrenière -
                                04/02</h3>
                        </a></article>
                    <article class="content_item carousel_item content_type content_type_video"><a
                            href="police-justice/policiers-blesses-a-paris-l-identite-de-l-auteur-presume-en-cours-de-verification_VN-202502040585.html"
                            title="Policiers blessés à Paris: l'identité de l'auteur présumé en cours de vérification">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Y8TN-Pmg6yPuIwy7EBMIn8E04Ms=/0x0:1280x720/285x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp, https://images.bfmtv.com/_MOGgZUhQepHsW6FluoqpHmL2Bc=/0x0:1280x720/570x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/LIKVKOQqPK--XmQ8bKZiCVfLHyE=/0x0:1280x720/285x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg, https://images.bfmtv.com/8Mw0VRx_VqXLXNoBXAUW4E4JojI=/0x0:1280x720/570x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/bJtidDOMVuTkSjt0gwPdfPQy4k8=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Qw_ymBR48h4wgr4p0VjVLtal7MQ=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/bJtidDOMVuTkSjt0gwPdfPQy4k8=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Qw_ymBR48h4wgr4p0VjVLtal7MQ=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/bJtidDOMVuTkSjt0gwPdfPQy4k8=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/Qw_ymBR48h4wgr4p0VjVLtal7MQ=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="https://images.bfmtv.com/LIKVKOQqPK--XmQ8bKZiCVfLHyE=/0x0:1280x720/285x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg"
                                    src="https://images.bfmtv.com/LIKVKOQqPK--XmQ8bKZiCVfLHyE=/0x0:1280x720/285x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg"
                                    alt="Policiers blessés à Paris: l'identité de l'auteur présumé en cours de vérification">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/Y8TN-Pmg6yPuIwy7EBMIn8E04Ms=/0x0:1280x720/285x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp, https://images.bfmtv.com/_MOGgZUhQepHsW6FluoqpHmL2Bc=/0x0:1280x720/570x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/LIKVKOQqPK--XmQ8bKZiCVfLHyE=/0x0:1280x720/285x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg, https://images.bfmtv.com/8Mw0VRx_VqXLXNoBXAUW4E4JojI=/0x0:1280x720/570x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/hCYkQYpbCDcs1Gx6Ii0aH7FSEZg=/0x0:1280x720/214x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp, https://images.bfmtv.com/bJtidDOMVuTkSjt0gwPdfPQy4k8=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/lBLsiofTOCspPTWU01BA_Du6vGA=/0x0:1280x720/214x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg, https://images.bfmtv.com/Qw_ymBR48h4wgr4p0VjVLtal7MQ=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/hCYkQYpbCDcs1Gx6Ii0aH7FSEZg=/0x0:1280x720/214x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp, https://images.bfmtv.com/bJtidDOMVuTkSjt0gwPdfPQy4k8=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/lBLsiofTOCspPTWU01BA_Du6vGA=/0x0:1280x720/214x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg, https://images.bfmtv.com/Qw_ymBR48h4wgr4p0VjVLtal7MQ=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/hCYkQYpbCDcs1Gx6Ii0aH7FSEZg=/0x0:1280x720/214x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp, https://images.bfmtv.com/bJtidDOMVuTkSjt0gwPdfPQy4k8=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/lBLsiofTOCspPTWU01BA_Du6vGA=/0x0:1280x720/214x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg, https://images.bfmtv.com/Qw_ymBR48h4wgr4p0VjVLtal7MQ=/0x0:1280x720/428x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/LIKVKOQqPK--XmQ8bKZiCVfLHyE=/0x0:1280x720/285x0/images/Policiers-blesses-a-Paris-l-identite-de-l-auteur-presume-en-cours-de-verification-2027122.jpg"
                                        alt="Policiers blessés à Paris: l&#39;identité de l&#39;auteur présumé en cours de vérification">
                                </picture>
                            </noscript>
                            <h3 class="content_item_title">Policiers blessés à Paris: l'identité de l'auteur présumé en cours de
                                vérification</h3>
                        </a></article>
                    <article class="content_item carousel_item content_type content_type_video"><a
                            href="https://rmcsport.bfmtv.com/football/om-ibrahimovic-detaille-les-coulisses-du-depart-de-bennacer_VN-202502040580.html"
                            title="OM : Ibrahimovic détaille les coulisses du départ de Bennacer">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/O9PvbPa-XtR3ozR3afNTV4ZgTOQ=/0x0:1280x720/285x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp, https://images.bfmtv.com/hv0MKFXIx3IlJW2fwBTcL73iCQA=/0x0:1280x720/570x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/jvi1IGf0HL5hPyvlMEbrWaGZz1E=/0x0:1280x720/285x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg, https://images.bfmtv.com/fDPbNZk-ExviHvyA5oYM8Wc82hU=/0x0:1280x720/570x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/mqVFY2zM86I0zjYC3MsrEdz_Xxk=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/YVuGhEyQSuWghEe8p9L3eTH1FSA=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/mqVFY2zM86I0zjYC3MsrEdz_Xxk=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/YVuGhEyQSuWghEe8p9L3eTH1FSA=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/mqVFY2zM86I0zjYC3MsrEdz_Xxk=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/YVuGhEyQSuWghEe8p9L3eTH1FSA=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="https://images.bfmtv.com/jvi1IGf0HL5hPyvlMEbrWaGZz1E=/0x0:1280x720/285x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg"
                                    src="https://images.bfmtv.com/jvi1IGf0HL5hPyvlMEbrWaGZz1E=/0x0:1280x720/285x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg"
                                    alt="OM : Ibrahimovic détaille les coulisses du départ de Bennacer">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/O9PvbPa-XtR3ozR3afNTV4ZgTOQ=/0x0:1280x720/285x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp, https://images.bfmtv.com/hv0MKFXIx3IlJW2fwBTcL73iCQA=/0x0:1280x720/570x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/jvi1IGf0HL5hPyvlMEbrWaGZz1E=/0x0:1280x720/285x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg, https://images.bfmtv.com/fDPbNZk-ExviHvyA5oYM8Wc82hU=/0x0:1280x720/570x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/Gvvpfz-fQC9OMYkvJgoGIY6dyzU=/0x0:1280x720/214x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp, https://images.bfmtv.com/mqVFY2zM86I0zjYC3MsrEdz_Xxk=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/WjwNWPrMVBFHFBPvg-UMECwirro=/0x0:1280x720/214x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg, https://images.bfmtv.com/YVuGhEyQSuWghEe8p9L3eTH1FSA=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/Gvvpfz-fQC9OMYkvJgoGIY6dyzU=/0x0:1280x720/214x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp, https://images.bfmtv.com/mqVFY2zM86I0zjYC3MsrEdz_Xxk=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/WjwNWPrMVBFHFBPvg-UMECwirro=/0x0:1280x720/214x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg, https://images.bfmtv.com/YVuGhEyQSuWghEe8p9L3eTH1FSA=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/Gvvpfz-fQC9OMYkvJgoGIY6dyzU=/0x0:1280x720/214x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp, https://images.bfmtv.com/mqVFY2zM86I0zjYC3MsrEdz_Xxk=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/WjwNWPrMVBFHFBPvg-UMECwirro=/0x0:1280x720/214x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg, https://images.bfmtv.com/YVuGhEyQSuWghEe8p9L3eTH1FSA=/0x0:1280x720/428x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/jvi1IGf0HL5hPyvlMEbrWaGZz1E=/0x0:1280x720/285x0/images/OM-Ibrahimovic-detaille-les-coulisses-du-depart-de-Bennacer-2027119.jpg"
                                        alt="OM : Ibrahimovic détaille les coulisses du départ de Bennacer">
                                </picture>
                            </noscript>
                            <h3 class="content_item_title">OM : Ibrahimovic détaille les coulisses du départ de Bennacer</h3>
                        </a></article>
                    <article class="content_item carousel_item content_type content_type_video"><a
                            href="international/amerique-nord/etats-unis/jean-noel-barrot-il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines_VN-202502040574.html"
                            title="Jean-Noël Barrot: &quot;Il faut garder notre sang froid&quot; face aux craintes de taxes douanières américaines">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/W9f1srfDMpPMK5q5yawpXgQvXTo=/0x0:1280x720/285x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp, https://images.bfmtv.com/P0sh2hh8CssFi08WRx9GGyrLnIA=/0x0:1280x720/570x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/WUgXz8JvAl16QVXfEe-4SFOtg0U=/0x0:1280x720/285x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg, https://images.bfmtv.com/RgdQHq5i3PAkSfSAQiCBZDHJ1XE=/0x0:1280x720/570x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/_-piGdoCJt5DuRLg3OxYFj3ElEo=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/klFgScsQRKV2xsr5pCTjMQpLzZE=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/_-piGdoCJt5DuRLg3OxYFj3ElEo=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/klFgScsQRKV2xsr5pCTjMQpLzZE=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/_-piGdoCJt5DuRLg3OxYFj3ElEo=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/klFgScsQRKV2xsr5pCTjMQpLzZE=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="https://images.bfmtv.com/WUgXz8JvAl16QVXfEe-4SFOtg0U=/0x0:1280x720/285x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg"
                                    src="https://images.bfmtv.com/WUgXz8JvAl16QVXfEe-4SFOtg0U=/0x0:1280x720/285x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg"
                                    alt="Jean-Noël Barrot: &quot;Il faut garder notre sang froid&quot; face aux craintes de taxes douanières américaines">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/W9f1srfDMpPMK5q5yawpXgQvXTo=/0x0:1280x720/285x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp, https://images.bfmtv.com/P0sh2hh8CssFi08WRx9GGyrLnIA=/0x0:1280x720/570x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/WUgXz8JvAl16QVXfEe-4SFOtg0U=/0x0:1280x720/285x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg, https://images.bfmtv.com/RgdQHq5i3PAkSfSAQiCBZDHJ1XE=/0x0:1280x720/570x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/sA5-pVGqyfOlkSQjZRCvILBXH6E=/0x0:1280x720/214x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp, https://images.bfmtv.com/_-piGdoCJt5DuRLg3OxYFj3ElEo=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/mGAwG4NMsND98zXtBT6MB_tNprA=/0x0:1280x720/214x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg, https://images.bfmtv.com/klFgScsQRKV2xsr5pCTjMQpLzZE=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/sA5-pVGqyfOlkSQjZRCvILBXH6E=/0x0:1280x720/214x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp, https://images.bfmtv.com/_-piGdoCJt5DuRLg3OxYFj3ElEo=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/mGAwG4NMsND98zXtBT6MB_tNprA=/0x0:1280x720/214x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg, https://images.bfmtv.com/klFgScsQRKV2xsr5pCTjMQpLzZE=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/sA5-pVGqyfOlkSQjZRCvILBXH6E=/0x0:1280x720/214x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp, https://images.bfmtv.com/_-piGdoCJt5DuRLg3OxYFj3ElEo=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/mGAwG4NMsND98zXtBT6MB_tNprA=/0x0:1280x720/214x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg, https://images.bfmtv.com/klFgScsQRKV2xsr5pCTjMQpLzZE=/0x0:1280x720/428x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/WUgXz8JvAl16QVXfEe-4SFOtg0U=/0x0:1280x720/285x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg"
                                        alt="Jean-Noël Barrot: &quot;Il faut garder notre sang froid&quot; face aux craintes de taxes douanières américaines">
                                </picture>
                            </noscript>
                            <h3 class="content_item_title">Jean-Noël Barrot: "Il faut garder notre sang froid" face aux craintes de
                                taxes douanières américaines</h3>
                        </a></article>
                    <article class="content_item carousel_item content_type content_type_video"><a
                            href="economie/replay-emissions/bfm-crypto-le-club/bfm-crypto-le-club-web3-feuille-de-route-de-l-adan-04-02_VN-202502040577.html"
                            title="BFM Crypto, le Club : Web3, feuille de route de l'ADAN - 04/02">
                            <picture class="content_item_cover with-js">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/CI02mb08lbiTite447zK5BzZjIk=/0x0:1280x720/285x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp, https://images.bfmtv.com/n_aurYPKrcxTT3NHiL21JaKgXUU=/0x0:1280x720/570x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/wsRi-VBoiftMNuhSoi2wDu25yQE=/0x0:1280x720/285x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg, https://images.bfmtv.com/yzwKrcjKM3uWKIfnQSniaum0vpo=/0x0:1280x720/570x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/tM6HTtQqBL3uqxdV1gASBK7yPhg=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/qraQdP2IMldKZ3t_ymTLkuANs-4=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/tM6HTtQqBL3uqxdV1gASBK7yPhg=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/qraQdP2IMldKZ3t_ymTLkuANs-4=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/tM6HTtQqBL3uqxdV1gASBK7yPhg=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                                    srcset="https://images.bfmtv.com/qraQdP2IMldKZ3t_ymTLkuANs-4=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg 2x"
                                    type="image/jpeg"><img width="16" height="9" class="lozad"
                                    data-srcset="https://images.bfmtv.com/wsRi-VBoiftMNuhSoi2wDu25yQE=/0x0:1280x720/285x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg"
                                    src="https://images.bfmtv.com/wsRi-VBoiftMNuhSoi2wDu25yQE=/0x0:1280x720/285x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg"
                                    alt="BFM Crypto, le Club : Web3, feuille de route de l'ADAN - 04/02">
                            </picture><noscript>
                                <picture class="content_item_cover">
                                    <source type="image/webp" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/CI02mb08lbiTite447zK5BzZjIk=/0x0:1280x720/285x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp, https://images.bfmtv.com/n_aurYPKrcxTT3NHiL21JaKgXUU=/0x0:1280x720/570x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 441px)"
                                        srcset="https://images.bfmtv.com/wsRi-VBoiftMNuhSoi2wDu25yQE=/0x0:1280x720/285x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg, https://images.bfmtv.com/yzwKrcjKM3uWKIfnQSniaum0vpo=/0x0:1280x720/570x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg 2x">
                                    <source type="image/webp" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/0USiscxcYz5D5KNNNuiJ1qzQy2k=/0x0:1280x720/214x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp, https://images.bfmtv.com/tM6HTtQqBL3uqxdV1gASBK7yPhg=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 361px)"
                                        srcset="https://images.bfmtv.com/aB6Ic1zOAjabYsArbtT9qlFong4=/0x0:1280x720/214x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg, https://images.bfmtv.com/qraQdP2IMldKZ3t_ymTLkuANs-4=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg 2x">
                                    <source type="image/webp" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/0USiscxcYz5D5KNNNuiJ1qzQy2k=/0x0:1280x720/214x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp, https://images.bfmtv.com/tM6HTtQqBL3uqxdV1gASBK7yPhg=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 321px)"
                                        srcset="https://images.bfmtv.com/aB6Ic1zOAjabYsArbtT9qlFong4=/0x0:1280x720/214x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg, https://images.bfmtv.com/qraQdP2IMldKZ3t_ymTLkuANs-4=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg 2x">
                                    <source type="image/webp" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/0USiscxcYz5D5KNNNuiJ1qzQy2k=/0x0:1280x720/214x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp, https://images.bfmtv.com/tM6HTtQqBL3uqxdV1gASBK7yPhg=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.webp 2x">
                                    <source type="image/jpeg" media="(min-width: 300px)"
                                        srcset="https://images.bfmtv.com/aB6Ic1zOAjabYsArbtT9qlFong4=/0x0:1280x720/214x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg, https://images.bfmtv.com/qraQdP2IMldKZ3t_ymTLkuANs-4=/0x0:1280x720/428x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg 2x">
                                    <img
                                        src="https://images.bfmtv.com/wsRi-VBoiftMNuhSoi2wDu25yQE=/0x0:1280x720/285x0/images/BFM-Crypto-le-Club-Web3-feuille-de-route-de-l-ADAN-04-02-2027118.jpg"
                                        alt="BFM Crypto, le Club : Web3, feuille de route de l&#39;ADAN - 04/02">
                                </picture>
                            </noscript>
                            <h3 class="content_item_title">BFM Crypto, le Club : Web3, feuille de route de l'ADAN - 04/02</h3>
                        </a></article>
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
        id="block_slider_multi_podcasts_1691749734161">
        <div class="block_header" id="block_header_slider_multi_podcasts_1691749734161">
            <h2 class="block_title">PODCASTS</h2>
            <ul class="block_links" id="slider_links_slider_multi_podcasts_1691749734161">
                <li><a href="podcasts.html" title="Tous les podcasts">Tous les podcasts</a></li>
            </ul>
            <div class="carousel_arrow">
                <button class="slider_arrow slider_prev">Précédent</button>
                <button class="slider_arrow slider_next">Suivant</button>
            </div>
        </div>
        <div class="slider_wrapper_podcast">
            <div class="slider_container small-slide">
                <article class="content_item carousel_item">
                    <div class="content_top_episode"><a
                            href="podcasts/le-titre-a-la-une/affaire-adele-haenel-le-realisateur-christophe-ruggia-condamne-pour-agressions-sexuelles-sur-mineure_EN-202502030832.html"
                            title="Affaire Adèle Haenel: le réalisateur Christophe Ruggia condamné pour agressions sexuelles sur mineure">
                            <picture class="content_item_picture with-js">
                                <source media="(min-width: 441px)" width="1" height="1"
                                    srcset="https://images.bfmtv.com/25-_DEba_bWlDV8gsNZGGkCoBTc=/0x0:1400x1400/90x0/images/Le-titre-a-la-une-2026561.webp, https://images.bfmtv.com/UQbUM3H_xTZELFML8ImKdt3Y0Zo=/0x0:1400x1400/180x0/images/Le-titre-a-la-une-2026561.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 441px)" width="1" height="1"
                                    srcset="https://images.bfmtv.com/wZ6GBHNjE0Q9U2Xd1o-lPQ6vwCo=/0x0:1400x1400/90x0/images/Le-titre-a-la-une-2026561.jpg, https://images.bfmtv.com/AsAlee3RfcXJmaiVM3Mn5XBjyw4=/0x0:1400x1400/180x0/images/Le-titre-a-la-une-2026561.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 361px)" width="1" height="1"
                                    srcset="https://images.bfmtv.com/UQbUM3H_xTZELFML8ImKdt3Y0Zo=/0x0:1400x1400/180x0/images/Le-titre-a-la-une-2026561.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 361px)" width="1" height="1"
                                    srcset="https://images.bfmtv.com/AsAlee3RfcXJmaiVM3Mn5XBjyw4=/0x0:1400x1400/180x0/images/Le-titre-a-la-une-2026561.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 321px)" width="1" height="1"
                                    srcset="https://images.bfmtv.com/4Q7PPOwGbCw22Z_y-1Qkeglu63E=/0x0:1400x1400/456x0/images/Le-titre-a-la-une-2026561.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 321px)" width="1" height="1"
                                    srcset="https://images.bfmtv.com/Zek9om14sqYP2L-JXjVO-77gHf0=/0x0:1400x1400/456x0/images/Le-titre-a-la-une-2026561.jpg 2x"
                                    type="image/jpeg">
                                <source media="(min-width: 300px)" width="1" height="1"
                                    srcset="https://images.bfmtv.com/4Q7PPOwGbCw22Z_y-1Qkeglu63E=/0x0:1400x1400/456x0/images/Le-titre-a-la-une-2026561.webp 2x"
                                    type="image/webp">
                                <source media="(min-width: 300px)" width="1" height="1"
                                    srcset="https://images.bfmtv.com/Zek9om14sqYP2L-JXjVO-77gHf0=/0x0:1400x1400/456x0/images/Le-titre-a-la-une-2026561.jpg 2x"
                                    type="image/jpeg"><img width="1" height="1"
                                    src="https://images.bfmtv.com/wZ6GBHNjE0Q9U2Xd1o-lPQ6vwCo=/0x0:1400x1400/90x0/images/Le-titre-a-la-une-2026561.jpg"
                                    alt="">
                            </picture>
                        </a>
                        <div class="content_picto">
                            <div class="podcast_item_infos podcast_wrapper_infos"
                                data-audio-src="https://altice.simplecastaudio.com/bfb6c6be-eeaf-454f-884e-13f3561bb06d/episodes/a2322e3f-0f09-41a1-8d76-9c471cf98031/audio/128/default.mp3?awCollectionId=bfb6c6be-eeaf-454f-884e-13f3561bb06d&amp;awEpisodeId=a2322e3f-0f09-41a1-8d76-9c471cf98031&amp;category=News&amp;episode_published_at=2025-02-03T17%3A57%3A18&amp;episode_title=Affaire+Ad%C3%A8le+Haenel%3A+le+r%C3%A9alisateur+Christophe+Ruggia+condamn%C3%A9+pour+agressions+sexuelles+sur+mineure&amp;network=228028218708&amp;podcast_title=Le+titre+%C3%A0+la+une"
                                data-img-src="https://images.bfmtv.com/AsAlee3RfcXJmaiVM3Mn5XBjyw4=/0x0:1400x1400/180x0/images/Le-titre-a-la-une-2026561.jpg"
                                data-title="Affaire Adèle Haenel: le réalisateur Christophe Ruggia condamné pour agressions sexuelles sur mineure"
                                data-id="202502030832" data-podcast-nom="Le titre à la une">
                                <div class="podcast_item_picto" listener="true"><svg viewBox="-11 -10 32 32" width="40" height="40"
                                        fill="#FFF" class="pausing">
                                        <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                    </svg> <svg viewBox="-13 -12 40 40" width="40" height="40" fill="#FFF" class="playing">
                                        <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                    </svg></div>
                                <div class="podcast_item_duration">19:31</div><a
                                    href="podcasts/le-titre-a-la-une/affaire-adele-haenel-le-realisateur-christophe-ruggia-condamne-pour-agressions-sexuelles-sur-mineure_EN-202502030832.html"
                                    class="podcast_title_container"
                                    title="Affaire Adèle Haenel: le réalisateur Christophe Ruggia condamné pour agressions sexuelles sur mineure">
                                    <h3 class="content_item_title episode_title">Affaire Adèle Haenel: le réalisateur Christophe Ruggia
                                        condamné pour agressions sexuelles sur mineure</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="content_item carousel_item">
                    <div class="content_top_episode"><a
                            href="podcasts/la-question-info/culture-agriculture-enseignement-que-contient-le-budget-2025_EN-202502030841.html"
                            title="Culture, agriculture, enseignement… Que contient le budget 2025?">
                            <picture class="content_item_picture">
                                <source media="(min-width: 992px)"
                                    srcset="https://images.bfmtv.com/hg6obA4Nnwk832yBZHdMyC8ezOc=/0x0:0x0/90x0/podcast/podcasts/principale-24_1.png, https://images.bfmtv.com/sy5tSQpKAaOwsKEmZMUXjWqsTrs=/0x0:0x0/180x0/podcast/podcasts/principale-24_1.png 2x">
                                <source media="(min-width: 641px)"
                                    srcset="https://images.bfmtv.com/hg6obA4Nnwk832yBZHdMyC8ezOc=/0x0:0x0/90x0/podcast/podcasts/principale-24_1.png, https://images.bfmtv.com/sy5tSQpKAaOwsKEmZMUXjWqsTrs=/0x0:0x0/180x0/podcast/podcasts/principale-24_1.png 2x">
                                <img
                                    src="https://images.bfmtv.com/nqeWWXgCQ6EgMMAp31D_NmXayEQ=/0x0:0x0/228x0/podcast/podcasts/principale-24_1.png"
                                    srcset="https://images.bfmtv.com/nqeWWXgCQ6EgMMAp31D_NmXayEQ=/0x0:0x0/228x0/podcast/podcasts/principale-24_1.png, https://images.bfmtv.com/p40sScHhi9L5cu4RiqPpcnaMTdo=/0x0:0x0/456x0/podcast/podcasts/principale-24_1.png 2x"
                                    alt="Culture, agriculture, enseignement… Que contient le budget 2025?"
                                    title="Culture, agriculture, enseignement… Que contient le budget 2025?">
                            </picture>
                        </a>
                        <div class="content_picto">
                            <div class="podcast_item_infos podcast_wrapper_infos"
                                data-audio-src="https://altice.simplecastaudio.com/d5c49a09-d2c9-4bd6-936c-564b5af336d7/episodes/144f5c49-fd5f-473d-8612-f6ce09a83717/audio/128/default.mp3?awCollectionId=d5c49a09-d2c9-4bd6-936c-564b5af336d7&amp;awEpisodeId=144f5c49-fd5f-473d-8612-f6ce09a83717&amp;category=News&amp;episode_published_at=2025-02-03T18%3A06%3A33&amp;episode_title=Culture%2C+agriculture%2C+enseignement%E2%80%A6+Que+contient+le+budget+2025%3F&amp;network=228028218708&amp;podcast_title=La+question+info"
                                data-img-src="https://images.bfmtv.com/sy5tSQpKAaOwsKEmZMUXjWqsTrs=/0x0:0x0/180x0/podcast/podcasts/principale-24_1.png"
                                data-title="Culture, agriculture, enseignement… Que contient le budget 2025?" data-id="202502030841"
                                data-podcast-nom="La question info">
                                <div class="podcast_item_picto" listener="true"><svg viewBox="-11 -10 32 32" width="40" height="40"
                                        fill="#FFF" class="pausing">
                                        <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                    </svg> <svg viewBox="-13 -12 40 40" width="40" height="40" fill="#FFF" class="playing">
                                        <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                    </svg></div>
                                <div class="podcast_item_duration">3:08</div><a
                                    href="podcasts/la-question-info/culture-agriculture-enseignement-que-contient-le-budget-2025_EN-202502030841.html"
                                    class="podcast_title_container"
                                    title="Culture, agriculture, enseignement… Que contient le budget 2025?">
                                    <h3 class="content_item_title episode_title">Culture, agriculture, enseignement… Que contient le
                                        budget 2025?</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="content_item carousel_item">
                    <div class="content_top_episode"><a
                            href="podcasts/la-question-eco/taxe-soda-a-quelle-augmentation-doit-on-s-attendre_EN-202502030842.html"
                            title="Taxe soda: à quelle augmentation doit-on s'attendre?">
                            <picture class="content_item_picture">
                                <source media="(min-width: 992px)"
                                    srcset="https://images.bfmtv.com/DPCn7u4ROJzOAF1ebxkXscKjSow=/0x0:0x0/90x0/podcast/podcasts/principale-26_1.png, https://images.bfmtv.com/Ae4nYI8YzttO-aARBTn4tvtUhco=/0x0:0x0/180x0/podcast/podcasts/principale-26_1.png 2x">
                                <source media="(min-width: 641px)"
                                    srcset="https://images.bfmtv.com/DPCn7u4ROJzOAF1ebxkXscKjSow=/0x0:0x0/90x0/podcast/podcasts/principale-26_1.png, https://images.bfmtv.com/Ae4nYI8YzttO-aARBTn4tvtUhco=/0x0:0x0/180x0/podcast/podcasts/principale-26_1.png 2x">
                                <img
                                    src="https://images.bfmtv.com/Z-zoTDeYBi92432VbSP1zdrTrdk=/0x0:0x0/228x0/podcast/podcasts/principale-26_1.png"
                                    srcset="https://images.bfmtv.com/Z-zoTDeYBi92432VbSP1zdrTrdk=/0x0:0x0/228x0/podcast/podcasts/principale-26_1.png, https://images.bfmtv.com/Z5er-com65m7sF71u320ZsQGIZ4=/0x0:0x0/456x0/podcast/podcasts/principale-26_1.png 2x"
                                    alt="Taxe soda: à quelle augmentation doit-on s'attendre?"
                                    title="Taxe soda: à quelle augmentation doit-on s'attendre?">
                            </picture>
                        </a>
                        <div class="content_picto">
                            <div class="podcast_item_infos podcast_wrapper_infos"
                                data-audio-src="https://altice.simplecastaudio.com/b1116d2c-044a-4ebc-a3cb-6472bad39c1b/episodes/97a49c8a-f808-4510-869c-89e89acdf1fc/audio/128/default.mp3?awCollectionId=b1116d2c-044a-4ebc-a3cb-6472bad39c1b&amp;awEpisodeId=97a49c8a-f808-4510-869c-89e89acdf1fc&amp;category=News%2CBusiness&amp;episode_published_at=2025-02-03T18%3A07%3A39&amp;episode_title=Taxe+soda%3A+%C3%A0+quelle+augmentation+doit-on+s%27attendre%3F&amp;network=228028218708&amp;podcast_title=La+question+%C3%A9co"
                                data-img-src="https://images.bfmtv.com/Ae4nYI8YzttO-aARBTn4tvtUhco=/0x0:0x0/180x0/podcast/podcasts/principale-26_1.png"
                                data-title="Taxe soda: à quelle augmentation doit-on s'attendre?" data-id="202502030842"
                                data-podcast-nom="La question éco">
                                <div class="podcast_item_picto" listener="true"><svg viewBox="-11 -10 32 32" width="40" height="40"
                                        fill="#FFF" class="pausing">
                                        <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                    </svg> <svg viewBox="-13 -12 40 40" width="40" height="40" fill="#FFF" class="playing">
                                        <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                    </svg></div>
                                <div class="podcast_item_duration">2:59</div><a
                                    href="podcasts/la-question-eco/taxe-soda-a-quelle-augmentation-doit-on-s-attendre_EN-202502030842.html"
                                    class="podcast_title_container" title="Taxe soda: à quelle augmentation doit-on s'attendre?">
                                    <h3 class="content_item_title episode_title">Taxe soda: à quelle augmentation doit-on s'attendre?
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="content_item carousel_item">
                    <div class="content_top_episode"><a
                            href="replay-emissions/face-a-duhamel/face-a-duhamel-segolene-royal-budget-le-ps-fait-il-le-bon-choix-03-02_EN-202502030816.html"
                            title="Face à Duhamel: Ségolène Royal - Budget, le PS fait-il le bon choix ? – 03/02">
                            <picture class="content_item_picture">
                                <source media="(min-width: 992px)"
                                    srcset="https://images.bfmtv.com/Rmm_7D6z7g1DY5ieT5y9-GuZ9Y0=/0x0:0x0/90x0/podcast/podcasts/principale-84_4.jpg, https://images.bfmtv.com/3YJvjLYvJcbbsEY5J3ARQl-CXLQ=/0x0:0x0/180x0/podcast/podcasts/principale-84_4.jpg 2x">
                                <source media="(min-width: 641px)"
                                    srcset="https://images.bfmtv.com/Rmm_7D6z7g1DY5ieT5y9-GuZ9Y0=/0x0:0x0/90x0/podcast/podcasts/principale-84_4.jpg, https://images.bfmtv.com/3YJvjLYvJcbbsEY5J3ARQl-CXLQ=/0x0:0x0/180x0/podcast/podcasts/principale-84_4.jpg 2x">
                                <img
                                    src="https://images.bfmtv.com/wZGteFnbXLhjRBuCboHEMruDdsM=/0x0:0x0/228x0/podcast/podcasts/principale-84_4.jpg"
                                    srcset="https://images.bfmtv.com/wZGteFnbXLhjRBuCboHEMruDdsM=/0x0:0x0/228x0/podcast/podcasts/principale-84_4.jpg, https://images.bfmtv.com/3PHu8l3gjQMH01Y0d9U5N48uMQ8=/0x0:0x0/456x0/podcast/podcasts/principale-84_4.jpg 2x"
                                    alt="Face à Duhamel: Ségolène Royal - Budget, le PS fait-il le bon choix ? – 03/02"
                                    title="Face à Duhamel: Ségolène Royal - Budget, le PS fait-il le bon choix ? – 03/02">
                            </picture>
                        </a>
                        <div class="content_picto">
                            <div class="podcast_item_infos podcast_wrapper_infos"
                                data-audio-src="https://altice.simplecastaudio.com/e249d7ed-eefb-4f15-bcd9-adfcec238e21/episodes/ff0a9828-4200-438d-8716-ff26462f1641/audio/128/default.mp3?awCollectionId=e249d7ed-eefb-4f15-bcd9-adfcec238e21&amp;awEpisodeId=ff0a9828-4200-438d-8716-ff26462f1641&amp;category=News&amp;episode_published_at=2025-02-03T17%3A49%3A51&amp;episode_title=Face+%C3%A0+Duhamel%3A+S%C3%A9gol%C3%A8ne+Royal+-+Budget%2C+le+PS+fait-il+le+bon+choix+%3F+%E2%80%93+03%2F02&amp;network=228028218708&amp;podcast_title=Face+%C3%A0++Duhamel"
                                data-img-src="https://images.bfmtv.com/3YJvjLYvJcbbsEY5J3ARQl-CXLQ=/0x0:0x0/180x0/podcast/podcasts/principale-84_4.jpg"
                                data-title="Face à Duhamel: Ségolène Royal - Budget, le PS fait-il le bon choix ? – 03/02"
                                data-id="202502030816" data-podcast-nom="Face à Duhamel">
                                <div class="podcast_item_picto" listener="true"><svg viewBox="-11 -10 32 32" width="40" height="40"
                                        fill="#FFF" class="pausing">
                                        <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                    </svg> <svg viewBox="-13 -12 40 40" width="40" height="40" fill="#FFF" class="playing">
                                        <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                    </svg></div>
                                <div class="podcast_item_duration">16:04</div><a
                                    href="replay-emissions/face-a-duhamel/face-a-duhamel-segolene-royal-budget-le-ps-fait-il-le-bon-choix-03-02_EN-202502030816.html"
                                    class="podcast_title_container"
                                    title="Face à Duhamel: Ségolène Royal - Budget, le PS fait-il le bon choix ? – 03/02">
                                    <h3 class="content_item_title episode_title">Face à Duhamel: Ségolène Royal - Budget, le PS fait-il
                                        le bon choix ? – 03/02</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="content_item carousel_item">
                    <div class="content_top_episode"><a
                            href="replay-emissions/focus-premiere/des-actions-symboliques-partout-en-france-18-11_EN-202411180277.html"
                            title="Des actions symboliques partout en France - 18/11">
                            <picture class="content_item_picture">
                                <source media="(min-width: 992px)"
                                    srcset="https://images.bfmtv.com/4NMeNjX22_SmZtK51kuauuWOocw=/0x0:0x0/90x0/podcast/podcasts/principale-49_3.png, https://images.bfmtv.com/1HaFmIFQCVJe-Y1Xw67K-J_nRek=/0x0:0x0/180x0/podcast/podcasts/principale-49_3.png 2x">
                                <source media="(min-width: 641px)"
                                    srcset="https://images.bfmtv.com/4NMeNjX22_SmZtK51kuauuWOocw=/0x0:0x0/90x0/podcast/podcasts/principale-49_3.png, https://images.bfmtv.com/1HaFmIFQCVJe-Y1Xw67K-J_nRek=/0x0:0x0/180x0/podcast/podcasts/principale-49_3.png 2x">
                                <img
                                    src="https://images.bfmtv.com/ftNOszcmYa0IpxEreS_6pra4ZHk=/0x0:0x0/228x0/podcast/podcasts/principale-49_3.png"
                                    srcset="https://images.bfmtv.com/ftNOszcmYa0IpxEreS_6pra4ZHk=/0x0:0x0/228x0/podcast/podcasts/principale-49_3.png, https://images.bfmtv.com/hS9vdWwyT4QgKOHPNW911t0ipck=/0x0:0x0/456x0/podcast/podcasts/principale-49_3.png 2x"
                                    alt="Des actions symboliques partout en France - 18/11"
                                    title="Des actions symboliques partout en France - 18/11">
                            </picture>
                        </a>
                        <div class="content_picto">
                            <div class="podcast_item_infos podcast_wrapper_infos"
                                data-audio-src="https://altice.simplecastaudio.com/03c12730-eff7-4a0c-ac1d-d7a541c52ab4/episodes/e0babca2-82e6-4c9b-87ae-aeedae7e016e/audio/128/default.mp3?awCollectionId=03c12730-eff7-4a0c-ac1d-d7a541c52ab4&amp;awEpisodeId=e0babca2-82e6-4c9b-87ae-aeedae7e016e&amp;category=News&amp;episode_published_at=2024-11-18T07%3A28%3A12&amp;episode_title=Des+actions+symboliques+partout+en+France+-+18%2F11&amp;network=228028218708&amp;podcast_title=7+minutes+pour+comprendre"
                                data-img-src="https://images.bfmtv.com/1HaFmIFQCVJe-Y1Xw67K-J_nRek=/0x0:0x0/180x0/podcast/podcasts/principale-49_3.png"
                                data-title="Des actions symboliques partout en France - 18/11" data-id="202411180277"
                                data-podcast-nom="7 minutes pour comprendre">
                                <div class="podcast_item_picto" listener="true"><svg viewBox="-11 -10 32 32" width="40" height="40"
                                        fill="#FFF" class="pausing">
                                        <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                    </svg> <svg viewBox="-13 -12 40 40" width="40" height="40" fill="#FFF" class="playing">
                                        <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                    </svg></div>
                                <div class="podcast_item_duration">11:28</div><a
                                    href="replay-emissions/focus-premiere/des-actions-symboliques-partout-en-france-18-11_EN-202411180277.html"
                                    class="podcast_title_container" title="Des actions symboliques partout en France - 18/11">
                                    <h3 class="content_item_title episode_title">Des actions symboliques partout en France - 18/11</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="content_item carousel_item">
                    <div class="content_top_episode"><a
                            href="podcasts/les-dents-et-dodo/le-refuge-des-reptiles_EN-202502030752.html"
                            title="Le refuge des reptiles">
                            <picture class="content_item_picture">
                                <source media="(min-width: 992px)"
                                    srcset="https://images.bfmtv.com/CkA8O9YUtTkwOB0nf30AKY_MwVo=/0x0:0x0/90x0/podcast/podcasts/principale-20.png, https://images.bfmtv.com/8ziFm2rb200YcFbls0xoyUcnrl0=/0x0:0x0/180x0/podcast/podcasts/principale-20.png 2x">
                                <source media="(min-width: 641px)"
                                    srcset="https://images.bfmtv.com/CkA8O9YUtTkwOB0nf30AKY_MwVo=/0x0:0x0/90x0/podcast/podcasts/principale-20.png, https://images.bfmtv.com/8ziFm2rb200YcFbls0xoyUcnrl0=/0x0:0x0/180x0/podcast/podcasts/principale-20.png 2x">
                                <img
                                    src="https://images.bfmtv.com/S8rPrKOyxsNb510Yh_7x3caR3E4=/0x0:0x0/228x0/podcast/podcasts/principale-20.png"
                                    srcset="https://images.bfmtv.com/S8rPrKOyxsNb510Yh_7x3caR3E4=/0x0:0x0/228x0/podcast/podcasts/principale-20.png, https://images.bfmtv.com/CYXG9c9wwwx9NVjUFg_dJeYDnwc=/0x0:0x0/456x0/podcast/podcasts/principale-20.png 2x"
                                    alt="Le refuge des reptiles" title="Le refuge des reptiles">
                            </picture>
                        </a>
                        <div class="content_picto">
                            <div class="podcast_item_infos podcast_wrapper_infos"
                                data-audio-src="https://altice.simplecastaudio.com/bf002fcb-4d79-4baa-8587-0a6e30243f85/episodes/9cd7e82c-1476-4d21-a7bb-3b707fa2743c/audio/128/default.mp3?awCollectionId=bf002fcb-4d79-4baa-8587-0a6e30243f85&amp;awEpisodeId=9cd7e82c-1476-4d21-a7bb-3b707fa2743c&amp;category=Education%2CKids+%26+Family&amp;episode_published_at=2025-02-03T17%3A00%3A02&amp;episode_title=Le+refuge+des+reptiles&amp;network=228028218708&amp;podcast_title=Les+dents+et+dodo"
                                data-img-src="https://images.bfmtv.com/8ziFm2rb200YcFbls0xoyUcnrl0=/0x0:0x0/180x0/podcast/podcasts/principale-20.png"
                                data-title="Le refuge des reptiles" data-id="202502030752" data-podcast-nom="Les dents et dodo">
                                <div class="podcast_item_picto" listener="true"><svg viewBox="-11 -10 32 32" width="40" height="40"
                                        fill="#FFF" class="pausing">
                                        <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                    </svg> <svg viewBox="-13 -12 40 40" width="40" height="40" fill="#FFF" class="playing">
                                        <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                    </svg></div>
                                <div class="podcast_item_duration">2:53</div><a
                                    href="podcasts/les-dents-et-dodo/le-refuge-des-reptiles_EN-202502030752.html"
                                    class="podcast_title_container" title="Le refuge des reptiles">
                                    <h3 class="content_item_title episode_title">Le refuge des reptiles</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="content_item carousel_item">
                    <div class="content_top_episode"><a
                            href="podcasts/le-podcast-royal/pourquoi-l-ex-famille-royale-grecque-a-t-elle-retrouve-sa-nationalite-30-ans-apres-l-avoir-perdue_EN-202502010046.html"
                            title="Pourquoi l'ex-famille royale grecque a-t-elle retrouvé sa nationalité, 30 ans après l'avoir perdue?">
                            <picture class="content_item_picture">
                                <source media="(min-width: 992px)"
                                    srcset="https://images.bfmtv.com/-UpMxL8P391680ttt5f4U9OxWoY=/0x0:0x0/90x0/podcast/podcasts/principale-255_2.png, https://images.bfmtv.com/PZqlCdxroB-AXUpX_stGvQLmyUg=/0x0:0x0/180x0/podcast/podcasts/principale-255_2.png 2x">
                                <source media="(min-width: 641px)"
                                    srcset="https://images.bfmtv.com/-UpMxL8P391680ttt5f4U9OxWoY=/0x0:0x0/90x0/podcast/podcasts/principale-255_2.png, https://images.bfmtv.com/PZqlCdxroB-AXUpX_stGvQLmyUg=/0x0:0x0/180x0/podcast/podcasts/principale-255_2.png 2x">
                                <img
                                    src="https://images.bfmtv.com/dVZ_TgF9gJ3PfYYd5QzIACJ-cVE=/0x0:0x0/228x0/podcast/podcasts/principale-255_2.png"
                                    srcset="https://images.bfmtv.com/dVZ_TgF9gJ3PfYYd5QzIACJ-cVE=/0x0:0x0/228x0/podcast/podcasts/principale-255_2.png, https://images.bfmtv.com/t2NRWX_HLkpj-UIY8st8XowBCZs=/0x0:0x0/456x0/podcast/podcasts/principale-255_2.png 2x"
                                    alt="Pourquoi l'ex-famille royale grecque a-t-elle retrouvé sa nationalité, 30 ans après l'avoir perdue?"
                                    title="Pourquoi l'ex-famille royale grecque a-t-elle retrouvé sa nationalité, 30 ans après l'avoir perdue?">
                            </picture>
                        </a>
                        <div class="content_picto">
                            <div class="podcast_item_infos podcast_wrapper_infos"
                                data-audio-src="https://altice.simplecastaudio.com/64014c94-7808-471c-b37f-af4280cca6ff/episodes/22c394cb-132b-49eb-8292-1d7ddddfcafd/audio/128/default.mp3?awCollectionId=64014c94-7808-471c-b37f-af4280cca6ff&amp;awEpisodeId=22c394cb-132b-49eb-8292-1d7ddddfcafd&amp;category=News&amp;episode_published_at=2025-02-01T05%3A00%3A01&amp;episode_title=Pourquoi+l%27ex-famille+royale+grecque+a-t-elle+retrouv%C3%A9+sa+nationalit%C3%A9%2C+30+ans+apr%C3%A8s+l%27avoir+perdue%3F&amp;network=228028218708&amp;podcast_title=Le+podcast+royal"
                                data-img-src="https://images.bfmtv.com/PZqlCdxroB-AXUpX_stGvQLmyUg=/0x0:0x0/180x0/podcast/podcasts/principale-255_2.png"
                                data-title="Pourquoi l'ex-famille royale grecque a-t-elle retrouvé sa nationalité, 30 ans après l'avoir perdue?"
                                data-id="202502010046" data-podcast-nom="Le podcast royal">
                                <div class="podcast_item_picto" listener="true"><svg viewBox="-11 -10 32 32" width="40" height="40"
                                        fill="#FFF" class="pausing">
                                        <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                    </svg> <svg viewBox="-13 -12 40 40" width="40" height="40" fill="#FFF" class="playing">
                                        <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                    </svg></div>
                                <div class="podcast_item_duration">18:47</div><a
                                    href="podcasts/le-podcast-royal/pourquoi-l-ex-famille-royale-grecque-a-t-elle-retrouve-sa-nationalite-30-ans-apres-l-avoir-perdue_EN-202502010046.html"
                                    class="podcast_title_container"
                                    title="Pourquoi l'ex-famille royale grecque a-t-elle retrouvé sa nationalité, 30 ans après l'avoir perdue?">
                                    <h3 class="content_item_title episode_title">Pourquoi l'ex-famille royale grecque a-t-elle retrouvé
                                        sa nationalité, 30 ans après l'avoir perdue?</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="content_item carousel_item">
                    <div class="content_top_episode"><a
                            href="podcasts/washington-briefing/froid-glacial-popcorn-et-decrets-les-coulisses-de-l-investiture-de-trump-racontees-par-nos-journalistes_EN-202501210898.html"
                            title="Froid glacial, popcorn et décrets: les coulisses de l’investiture de Trump racontées par nos journalistes">
                            <picture class="content_item_picture">
                                <source media="(min-width: 992px)"
                                    srcset="https://images.bfmtv.com/PtAiV2A_yXP3J5wrBsiVQNuggTg=/0x0:0x0/90x0/podcast/podcasts/principale-357_1.jpg, https://images.bfmtv.com/qwPTQ39ukCsNUSn_N5_ZtJx_u0I=/0x0:0x0/180x0/podcast/podcasts/principale-357_1.jpg 2x">
                                <source media="(min-width: 641px)"
                                    srcset="https://images.bfmtv.com/PtAiV2A_yXP3J5wrBsiVQNuggTg=/0x0:0x0/90x0/podcast/podcasts/principale-357_1.jpg, https://images.bfmtv.com/qwPTQ39ukCsNUSn_N5_ZtJx_u0I=/0x0:0x0/180x0/podcast/podcasts/principale-357_1.jpg 2x">
                                <img
                                    src="https://images.bfmtv.com/n7rYORv5POaN3P9PdqGyPoYUOJ4=/0x0:0x0/228x0/podcast/podcasts/principale-357_1.jpg"
                                    srcset="https://images.bfmtv.com/n7rYORv5POaN3P9PdqGyPoYUOJ4=/0x0:0x0/228x0/podcast/podcasts/principale-357_1.jpg, https://images.bfmtv.com/1eaqwtnFy55G_XpomGTS3B3ODkE=/0x0:0x0/456x0/podcast/podcasts/principale-357_1.jpg 2x"
                                    alt="Froid glacial, popcorn et décrets: les coulisses de l’investiture de Trump racontées par nos journalistes"
                                    title="Froid glacial, popcorn et décrets: les coulisses de l’investiture de Trump racontées par nos journalistes">
                            </picture>
                        </a>
                        <div class="content_picto">
                            <div class="podcast_item_infos podcast_wrapper_infos"
                                data-audio-src="https://altice.simplecastaudio.com/238ab467-9d04-47c8-8556-66adf1897c18/episodes/db44fc14-6630-4ea0-bddb-cd07429018d7/audio/128/default.mp3?awCollectionId=238ab467-9d04-47c8-8556-66adf1897c18&amp;awEpisodeId=db44fc14-6630-4ea0-bddb-cd07429018d7&amp;category=News&amp;episode_published_at=2025-01-21T19%3A36%3A03&amp;episode_title=Froid+glacial%2C+popcorn+et+d%C3%A9crets%3A+les+coulisses+de+l%E2%80%99investiture+de+Trump+racont%C3%A9es+par+nos+journalistes&amp;network=228028218708&amp;podcast_title=Washington+Briefing"
                                data-img-src="https://images.bfmtv.com/qwPTQ39ukCsNUSn_N5_ZtJx_u0I=/0x0:0x0/180x0/podcast/podcasts/principale-357_1.jpg"
                                data-title="Froid glacial, popcorn et décrets: les coulisses de l’investiture de Trump racontées par nos journalistes"
                                data-id="202501210898" data-podcast-nom="Washington Briefing">
                                <div class="podcast_item_picto" listener="true"><svg viewBox="-11 -10 32 32" width="40" height="40"
                                        fill="#FFF" class="pausing">
                                        <use xlink:href="/assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play"></use>
                                    </svg> <svg viewBox="-13 -12 40 40" width="40" height="40" fill="#FFF" class="playing">
                                        <use xlink:href="/assets/v11/images/pause.b0abca00b2a9fbdac6cebd299fbdea88.svg#pause"></use>
                                    </svg></div>
                                <div class="podcast_item_duration">19:14</div><a
                                    href="podcasts/washington-briefing/froid-glacial-popcorn-et-decrets-les-coulisses-de-l-investiture-de-trump-racontees-par-nos-journalistes_EN-202501210898.html"
                                    class="podcast_title_container"
                                    title="Froid glacial, popcorn et décrets: les coulisses de l’investiture de Trump racontées par nos journalistes">
                                    <h3 class="content_item_title episode_title">Froid glacial, popcorn et décrets: les coulisses de
                                        l’investiture de Trump racontées par nos journalistes</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
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
    <section class="block block_topic topic_simple" id="blockrubrique_1579614195569">
        <div class="block_header" id="block_header_rubrique_1579614195569">
            <h2 class="block_title">Économie</h2>
        </div>
        <article class="une_topic icon_big"><a
                href="economie/consommation/eaux-minerales-traitees-nestle-a-t-il-ete-autorise-a-utiliser-des-filtres-illegaux-par-l-executif_AD-202502040394.html"
                title="Eaux minérales traitées: Nestlé a-t-il été autorisé à utiliser des filtres illégaux par l&#39;exécutif?">
                <picture class="content_item_cover with-js">
                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                        srcset="https://images.bfmtv.com/IFxIirWD7ey4YVN-eD3fUVVes-g=/0x40:768x472/590x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg, https://images.bfmtv.com/KG1x6Nv7ToqX7vD-7PAEQFH01go=/0x40:768x472/1180x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg 2x"
                        type="image/jpeg">
                    <source media="(min-width: 361px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/UVbepB1MWW5_O47iCozmrli49zk=/44x1:724x511/840x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg 2x"
                        type="image/jpeg">
                    <source media="(min-width: 321px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/vRYL4ig_s1AudCaW-woxBC7ppyA=/44x1:724x511/736x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg 2x"
                        type="image/jpeg">
                    <source media="(min-width: 300px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/8JzZeUMZKpHsyOCVRhWccPQQjag=/44x1:724x511/640x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg 2x"
                        type="image/jpeg"><img width="16" height="9" class="lozad"
                        data-srcset="https://images.bfmtv.com/IFxIirWD7ey4YVN-eD3fUVVes-g=/0x40:768x472/590x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg"
                        src="https://images.bfmtv.com/IFxIirWD7ey4YVN-eD3fUVVes-g=/0x40:768x472/590x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg"
                        alt="Des bouteilles d&#39;eau minérale de marques appartenant au groupe Nestlé Waters, le 21 février 2024 à Paris">
                </picture><noscript>
                    <picture class="content_item_cover">
                        <source type="image/jpeg" media="(min-width: 441px)"
                            srcset="https://images.bfmtv.com/IFxIirWD7ey4YVN-eD3fUVVes-g=/0x40:768x472/590x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg, https://images.bfmtv.com/KG1x6Nv7ToqX7vD-7PAEQFH01go=/0x40:768x472/1180x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg 2x">
                        <source type="image/jpeg" media="(min-width: 361px)"
                            srcset="https://images.bfmtv.com/fH5zPAVpno6d8CSlBPVrKmwmZy4=/44x1:724x511/420x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg, https://images.bfmtv.com/UVbepB1MWW5_O47iCozmrli49zk=/44x1:724x511/840x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg 2x">
                        <source type="image/jpeg" media="(min-width: 321px)"
                            srcset="https://images.bfmtv.com/5JdHzKdNm9l5P0pa608y9VHVgxo=/44x1:724x511/368x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg, https://images.bfmtv.com/vRYL4ig_s1AudCaW-woxBC7ppyA=/44x1:724x511/736x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg 2x">
                        <source type="image/jpeg" media="(min-width: 300px)"
                            srcset="https://images.bfmtv.com/3nrPfbdWPWaxjRZfMRRSOl9GwAE=/44x1:724x511/320x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg, https://images.bfmtv.com/8JzZeUMZKpHsyOCVRhWccPQQjag=/44x1:724x511/640x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg 2x">
                        <img
                            src="https://images.bfmtv.com/IFxIirWD7ey4YVN-eD3fUVVes-g=/0x40:768x472/590x0/images/Des-bouteilles-d-eau-minerale-de-marques-appartenant-au-groupe-Nestle-Waters-le-21-fevrier-2024-a-Paris-1838405.jpg"
                            alt="Des bouteilles d&#39;eau minérale de marques appartenant au groupe Nestlé Waters, le 21 février 2024 à Paris">
                    </picture>
                </noscript>
                <div class="une_caption">
                    <h3 class="content_item_title">Eaux minérales traitées: Nestlé a-t-il été autorisé à utiliser des filtres
                        illégaux par l&#39;exécutif?</h3>
                </div>
            </a></article>
        <div class="list_topic">
            <article class="content_item content_item_small content_type content_type_video"><a
                    href="economie/patrimoine/impots-fiscalite/il-ne-faut-pas-qu-on-revienne-en-arriere-emmanuel-macron-oppose-aux-augmentations-d-impots-prevues-dans-le-budget-2025_AV-202502040522.html"
                    title="&quot;Il ne faut pas qu&#39;on revienne en arrière&quot;: Emmanuel Macron opposé aux augmentations d&#39;impôts prévues dans le Budget 2025">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/DKss1xGWBz2JoWVVhs3ME1zQmIE=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp, https://images.bfmtv.com/39j7X1OLH0W04eSoaKfdhKi4VEA=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/MNi9IhjNVQcuj6yBZTQLoWLHfDM=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg, https://images.bfmtv.com/yPw7KhArL363enVH6ftmKgZ15ys=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/39j7X1OLH0W04eSoaKfdhKi4VEA=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/yPw7KhArL363enVH6ftmKgZ15ys=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/39j7X1OLH0W04eSoaKfdhKi4VEA=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/yPw7KhArL363enVH6ftmKgZ15ys=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/39j7X1OLH0W04eSoaKfdhKi4VEA=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/yPw7KhArL363enVH6ftmKgZ15ys=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/MNi9IhjNVQcuj6yBZTQLoWLHfDM=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg"
                            src="https://images.bfmtv.com/MNi9IhjNVQcuj6yBZTQLoWLHfDM=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg"
                            alt="Le président de la République, Emmanuel Macron, à l&#39;Élysée le 6 janvier 2025 ">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/DKss1xGWBz2JoWVVhs3ME1zQmIE=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp, https://images.bfmtv.com/39j7X1OLH0W04eSoaKfdhKi4VEA=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/MNi9IhjNVQcuj6yBZTQLoWLHfDM=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg, https://images.bfmtv.com/yPw7KhArL363enVH6ftmKgZ15ys=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/DKss1xGWBz2JoWVVhs3ME1zQmIE=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp, https://images.bfmtv.com/39j7X1OLH0W04eSoaKfdhKi4VEA=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/MNi9IhjNVQcuj6yBZTQLoWLHfDM=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg, https://images.bfmtv.com/yPw7KhArL363enVH6ftmKgZ15ys=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/DKss1xGWBz2JoWVVhs3ME1zQmIE=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp, https://images.bfmtv.com/39j7X1OLH0W04eSoaKfdhKi4VEA=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/MNi9IhjNVQcuj6yBZTQLoWLHfDM=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg, https://images.bfmtv.com/yPw7KhArL363enVH6ftmKgZ15ys=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/DKss1xGWBz2JoWVVhs3ME1zQmIE=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp, https://images.bfmtv.com/39j7X1OLH0W04eSoaKfdhKi4VEA=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/MNi9IhjNVQcuj6yBZTQLoWLHfDM=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg, https://images.bfmtv.com/yPw7KhArL363enVH6ftmKgZ15ys=/0x62:2048x1214/224x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/MNi9IhjNVQcuj6yBZTQLoWLHfDM=/0x62:2048x1214/112x0/images/Le-president-de-la-Republique-Emmanuel-Macron-a-l-Elysee-le-6-janvier-2025-2008597.jpg"
                                alt="Le président de la République, Emmanuel Macron, à l&#39;Élysée le 6 janvier 2025 ">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">&quot;Il ne faut pas qu&#39;on revienne en arrière&quot;: Emmanuel Macron
                            opposé aux augmentations d&#39;impôts prévues dans le Budget 2025</h3>
                    </div>
                </a></article>
            <article class="content_item content_item_small content_type content_type_article"><a
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
                </a></article>
            <article class="content_item content_item_small content_type content_type_video"><a
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
                </a></article>
            <div id="list_rubrique_1579614195569" class="block_links_container">
                <ul class="block_links" id="block_linksrubrique_1579614195569">
                    <li><a href="economie/index.html" title="Toute l&#39;éco">Toute l&#39;éco</a></li>
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
    <div class="OUTBRAIN lozad" data-src="https://www.bfmtv.com" data-widget-id="SF_1"
        data-lazy-function="callOutbrainJS"></div>
    <section class="block block_topic topic_simple" id="blockrubrique_1579614813850">
        <div class="block_header" id="block_header_rubrique_1579614813850">
            <h2 class="block_title">Sport</h2>
        </div>
        <article class="une_topic icon_big"><a
                href="https://rmcsport.bfmtv.com/football/transferts/mercato-cherki-a-demande-a-quitter-l-ol-pour-dortmund-avec-une-lettre-redigee-par-ses-avocats_AV-202502040495.html"
                title="Mercato: Cherki a demandé à quitter l’OL pour Dortmund avec une lettre rédigée par ses avocats">
                <picture class="content_item_cover with-js">
                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                        srcset="https://images.bfmtv.com/WSKKNQaSYxT4MrH1fIkEenVvhv4=/0x172:2048x1324/590x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp, https://images.bfmtv.com/bMX11KlV0VsHdVvrfJccjU1ZO2w=/0x172:2048x1324/1180x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp 2x"
                        type="image/webp">
                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                        srcset="https://images.bfmtv.com/qJuYUB35iFQrasy4Z8gL0qYbvTU=/0x172:2048x1324/590x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg, https://images.bfmtv.com/sq2vwUcgDB94pwNm-h2tfLHBFmE=/0x172:2048x1324/1180x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg 2x"
                        type="image/jpeg">
                    <source media="(min-width: 361px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/H9EPA0SsRNtosXKhUk9ihq8kros=/189x0:2009x1365/840x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp 2x"
                        type="image/webp">
                    <source media="(min-width: 361px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/2rFMf4UslKGEd9mD9VEPvNxUxBE=/189x0:2009x1365/840x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg 2x"
                        type="image/jpeg">
                    <source media="(min-width: 321px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/V3hc2JzAiR8QvLOAcNodGswTscM=/189x0:2009x1365/736x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp 2x"
                        type="image/webp">
                    <source media="(min-width: 321px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/kr-FvBs6z625Ca0lHcLsJ81lUKI=/189x0:2009x1365/736x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg 2x"
                        type="image/jpeg">
                    <source media="(min-width: 300px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/2uM-Vj8WVkJbsHNsqDGu-TPbDsU=/189x0:2009x1365/640x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp 2x"
                        type="image/webp">
                    <source media="(min-width: 300px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/7j9pN-zY6bwd7uErZKker1oq82g=/189x0:2009x1365/640x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg 2x"
                        type="image/jpeg"><img width="16" height="9" class="lozad"
                        data-srcset="https://images.bfmtv.com/qJuYUB35iFQrasy4Z8gL0qYbvTU=/0x172:2048x1324/590x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg"
                        src="https://images.bfmtv.com/qJuYUB35iFQrasy4Z8gL0qYbvTU=/0x172:2048x1324/590x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg"
                        alt="Rayan Cherki lors du match OM-OL (3-2, L1), le 2 février 2025">
                </picture><noscript>
                    <picture class="content_item_cover">
                        <source type="image/webp" media="(min-width: 441px)"
                            srcset="https://images.bfmtv.com/WSKKNQaSYxT4MrH1fIkEenVvhv4=/0x172:2048x1324/590x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp, https://images.bfmtv.com/bMX11KlV0VsHdVvrfJccjU1ZO2w=/0x172:2048x1324/1180x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp 2x">
                        <source type="image/jpeg" media="(min-width: 441px)"
                            srcset="https://images.bfmtv.com/qJuYUB35iFQrasy4Z8gL0qYbvTU=/0x172:2048x1324/590x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg, https://images.bfmtv.com/sq2vwUcgDB94pwNm-h2tfLHBFmE=/0x172:2048x1324/1180x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg 2x">
                        <source type="image/webp" media="(min-width: 361px)"
                            srcset="https://images.bfmtv.com/8v2K0q_kpVmZa9upDSbcTP2M5NA=/189x0:2009x1365/420x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp, https://images.bfmtv.com/H9EPA0SsRNtosXKhUk9ihq8kros=/189x0:2009x1365/840x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp 2x">
                        <source type="image/jpeg" media="(min-width: 361px)"
                            srcset="https://images.bfmtv.com/87K-qOGT3DcXBExK6O_F2oDgSJM=/189x0:2009x1365/420x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg, https://images.bfmtv.com/2rFMf4UslKGEd9mD9VEPvNxUxBE=/189x0:2009x1365/840x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg 2x">
                        <source type="image/webp" media="(min-width: 321px)"
                            srcset="https://images.bfmtv.com/d7HyHNHg788DTSTp7yMl_dunPD8=/189x0:2009x1365/368x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp, https://images.bfmtv.com/V3hc2JzAiR8QvLOAcNodGswTscM=/189x0:2009x1365/736x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp 2x">
                        <source type="image/jpeg" media="(min-width: 321px)"
                            srcset="https://images.bfmtv.com/7BVxfRh7W-l4ExCZCGhL7tWZNFE=/189x0:2009x1365/368x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg, https://images.bfmtv.com/kr-FvBs6z625Ca0lHcLsJ81lUKI=/189x0:2009x1365/736x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg 2x">
                        <source type="image/webp" media="(min-width: 300px)"
                            srcset="https://images.bfmtv.com/inxF8ycQ0P2parko3cB90T9sfCA=/189x0:2009x1365/320x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp, https://images.bfmtv.com/2uM-Vj8WVkJbsHNsqDGu-TPbDsU=/189x0:2009x1365/640x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.webp 2x">
                        <source type="image/jpeg" media="(min-width: 300px)"
                            srcset="https://images.bfmtv.com/-rSgAjbvtKhpdGBVrF12rcosORA=/189x0:2009x1365/320x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg, https://images.bfmtv.com/7j9pN-zY6bwd7uErZKker1oq82g=/189x0:2009x1365/640x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg 2x">
                        <img
                            src="https://images.bfmtv.com/qJuYUB35iFQrasy4Z8gL0qYbvTU=/0x172:2048x1324/590x0/images/Rayan-Cherki-lors-du-match-OM-OL-3-2-L1-le-2-fevrier-2025-2027057.jpg"
                            alt="Rayan Cherki lors du match OM-OL (3-2, L1), le 2 février 2025">
                    </picture>
                </noscript>
                <div class="une_caption">
                    <h3 class="content_item_title">Mercato: Cherki a demandé à quitter l’OL pour Dortmund avec une lettre
                        rédigée par ses avocats</h3>
                </div>
            </a></article>
        <div class="list_topic">
            <article class="content_item content_item_small content_type content_type_video"><a
                    href="https://rmcsport.bfmtv.com/sports-d-hiver/ski-alpin/direct-mondiaux-de-ski-alpin-suivez-en-live-l-epreuve-de-slalom-parallele-par-equipes-a-saalbach_LN-202502040529.html"
                    title="DIRECT. Mondiaux de ski alpin: la France en quarts du slalom parallèle par équipes de Saalbach">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/rgLGq3dvqIKcrwDrXFsfzUWaMS8=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp, https://images.bfmtv.com/_qSDWwG1bQoYJW7GA3ZHRQXw9g0=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/JBb2DEk_jxIvtoLSV3wNthBW4Sw=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg, https://images.bfmtv.com/DuzvmLiBc3GuEFz4K1JsyaHNSdA=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/_qSDWwG1bQoYJW7GA3ZHRQXw9g0=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/DuzvmLiBc3GuEFz4K1JsyaHNSdA=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/_qSDWwG1bQoYJW7GA3ZHRQXw9g0=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/DuzvmLiBc3GuEFz4K1JsyaHNSdA=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/_qSDWwG1bQoYJW7GA3ZHRQXw9g0=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/DuzvmLiBc3GuEFz4K1JsyaHNSdA=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/JBb2DEk_jxIvtoLSV3wNthBW4Sw=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg"
                            src="https://images.bfmtv.com/JBb2DEk_jxIvtoLSV3wNthBW4Sw=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg"
                            alt="Le skieur français Léo Anguenot lors du slalom géant d&#39;Adelboden">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/rgLGq3dvqIKcrwDrXFsfzUWaMS8=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp, https://images.bfmtv.com/_qSDWwG1bQoYJW7GA3ZHRQXw9g0=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/JBb2DEk_jxIvtoLSV3wNthBW4Sw=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg, https://images.bfmtv.com/DuzvmLiBc3GuEFz4K1JsyaHNSdA=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/rgLGq3dvqIKcrwDrXFsfzUWaMS8=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp, https://images.bfmtv.com/_qSDWwG1bQoYJW7GA3ZHRQXw9g0=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/JBb2DEk_jxIvtoLSV3wNthBW4Sw=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg, https://images.bfmtv.com/DuzvmLiBc3GuEFz4K1JsyaHNSdA=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/rgLGq3dvqIKcrwDrXFsfzUWaMS8=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp, https://images.bfmtv.com/_qSDWwG1bQoYJW7GA3ZHRQXw9g0=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/JBb2DEk_jxIvtoLSV3wNthBW4Sw=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg, https://images.bfmtv.com/DuzvmLiBc3GuEFz4K1JsyaHNSdA=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/rgLGq3dvqIKcrwDrXFsfzUWaMS8=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp, https://images.bfmtv.com/_qSDWwG1bQoYJW7GA3ZHRQXw9g0=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/JBb2DEk_jxIvtoLSV3wNthBW4Sw=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg, https://images.bfmtv.com/DuzvmLiBc3GuEFz4K1JsyaHNSdA=/0x47:2048x1199/224x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/JBb2DEk_jxIvtoLSV3wNthBW4Sw=/0x47:2048x1199/112x0/images/Le-skieur-francais-Leo-Anguenot-lors-du-slalom-geant-d-Adelboden-2027071.jpg"
                                alt="Le skieur français Léo Anguenot lors du slalom géant d&#39;Adelboden">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">DIRECT. Mondiaux de ski alpin: la France en quarts du slalom parallèle
                            par équipes de Saalbach</h3>
                    </div>
                </a></article>
            <article class="content_item content_item_small content_type content_type_video"><a
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
                </a></article>
            <div id="list_rubrique_1579614813850" class="block_links_container">
                <ul class="block_links" id="block_linksrubrique_1579614813850">
                    <li><a href="https://rmcsport.bfmtv.com/" title="Tout le sport">Tout le sport</a></li>
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
    <section class="block block_topic topic_simple" id="blockrubrique_1698250268555">
        <div class="block_header" id="block_header_rubrique_1698250268555">
            <h2 class="block_title">International</h2>
        </div>
        <article class="une_topic icon_big"><a
                href="international/europe/suede-cinq-personnes-touchees-par-des-tirs-dans-une-ecole_AD-202502040509.html"
                title="Suède: cinq personnes touchées par des tirs lors d&#39;une fusillade dans une école">
                <div class="flag_article flag_color">Alerte info</div>
                <picture class="content_item_cover with-js">
                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                        srcset="https://images.bfmtv.com/SBW_S2rgKxk2dp9xSRnycikVKqE=/0x53:1024x629/590x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp, https://images.bfmtv.com/sUAl_2xAjOWcEaHvsL2uNjjbxK0=/0x53:1024x629/1180x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x"
                        type="image/webp">
                    <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                        srcset="https://images.bfmtv.com/uGWIVKx4JeiWcmJhjE1E5dCFkjs=/0x53:1024x629/590x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg, https://images.bfmtv.com/Ovi9yhZlkuwXwkZK7vgTd3dmLZc=/0x53:1024x629/1180x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x"
                        type="image/jpeg">
                    <source media="(min-width: 361px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/-puz44S9njSbtRLCEsMTzVH4JxQ=/58x0:966x681/840x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x"
                        type="image/webp">
                    <source media="(min-width: 361px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/qadAhiiTlbqcNJ0oAMKS_WEu83Y=/58x0:966x681/840x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x"
                        type="image/jpeg">
                    <source media="(min-width: 321px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/pKawfgsd231JGlCRD5yRb-xPSDE=/58x0:966x681/736x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x"
                        type="image/webp">
                    <source media="(min-width: 321px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/z_vV00aO3o1O8qbsz9v1uS6w8VM=/58x0:966x681/736x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x"
                        type="image/jpeg">
                    <source media="(min-width: 300px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/SKTxVBL7oX98aVcwuxe6_tr1ViI=/58x0:966x681/640x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x"
                        type="image/webp">
                    <source media="(min-width: 300px)" width="4" height="3" class="lozad"
                        srcset="https://images.bfmtv.com/QJWwk4wC3MPN-N5knLhUaFdbqj8=/58x0:966x681/640x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x"
                        type="image/jpeg"><img width="16" height="9" class="lozad"
                        data-srcset="https://images.bfmtv.com/uGWIVKx4JeiWcmJhjE1E5dCFkjs=/0x53:1024x629/590x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg"
                        src="https://images.bfmtv.com/uGWIVKx4JeiWcmJhjE1E5dCFkjs=/0x53:1024x629/590x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg"
                        alt="Un officier de police délimite une zone près de l&#39;école Risbergska à Orebro, Suède, où a eu lieu une fusillade le 4 février 2025.">
                </picture><noscript>
                    <picture class="content_item_cover">
                        <source type="image/webp" media="(min-width: 441px)"
                            srcset="https://images.bfmtv.com/SBW_S2rgKxk2dp9xSRnycikVKqE=/0x53:1024x629/590x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp, https://images.bfmtv.com/sUAl_2xAjOWcEaHvsL2uNjjbxK0=/0x53:1024x629/1180x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x">
                        <source type="image/jpeg" media="(min-width: 441px)"
                            srcset="https://images.bfmtv.com/uGWIVKx4JeiWcmJhjE1E5dCFkjs=/0x53:1024x629/590x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg, https://images.bfmtv.com/Ovi9yhZlkuwXwkZK7vgTd3dmLZc=/0x53:1024x629/1180x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x">
                        <source type="image/webp" media="(min-width: 361px)"
                            srcset="https://images.bfmtv.com/lCMLNmxBvRix9ZWblc1yowD7c58=/58x0:966x681/420x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp, https://images.bfmtv.com/-puz44S9njSbtRLCEsMTzVH4JxQ=/58x0:966x681/840x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x">
                        <source type="image/jpeg" media="(min-width: 361px)"
                            srcset="https://images.bfmtv.com/a9ZJNwmlIP6Q0xw8zeKHnjxvdzc=/58x0:966x681/420x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg, https://images.bfmtv.com/qadAhiiTlbqcNJ0oAMKS_WEu83Y=/58x0:966x681/840x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x">
                        <source type="image/webp" media="(min-width: 321px)"
                            srcset="https://images.bfmtv.com/S_0xbSpoO3v5ugTQheT0OfhkgYk=/58x0:966x681/368x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp, https://images.bfmtv.com/pKawfgsd231JGlCRD5yRb-xPSDE=/58x0:966x681/736x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x">
                        <source type="image/jpeg" media="(min-width: 321px)"
                            srcset="https://images.bfmtv.com/1lmlOvgxrnAAYRXHpcd5zInFN2I=/58x0:966x681/368x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg, https://images.bfmtv.com/z_vV00aO3o1O8qbsz9v1uS6w8VM=/58x0:966x681/736x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x">
                        <source type="image/webp" media="(min-width: 300px)"
                            srcset="https://images.bfmtv.com/mjK6aHXtf18vYPaLKP0AYd6G4QM=/58x0:966x681/320x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp, https://images.bfmtv.com/SKTxVBL7oX98aVcwuxe6_tr1ViI=/58x0:966x681/640x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.webp 2x">
                        <source type="image/jpeg" media="(min-width: 300px)"
                            srcset="https://images.bfmtv.com/6SWwurTFP-DXBDelFgOU4TcMx1Y=/58x0:966x681/320x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg, https://images.bfmtv.com/QJWwk4wC3MPN-N5knLhUaFdbqj8=/58x0:966x681/640x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg 2x">
                        <img
                            src="https://images.bfmtv.com/uGWIVKx4JeiWcmJhjE1E5dCFkjs=/0x53:1024x629/590x0/images/Un-officier-de-police-delimite-une-zone-pres-de-l-ecole-Risbergska-a-Orebro-Suede-ou-a-eu-lieu-une-fusillade-le-4-fevrier-2025-2027086.jpg"
                            alt="Un officier de police délimite une zone près de l&#39;école Risbergska à Orebro, Suède, où a eu lieu une fusillade le 4 février 2025.">
                    </picture>
                </noscript>
                <div class="une_caption">
                    <h3 class="content_item_title">Suède: cinq personnes touchées par des tirs lors d&#39;une fusillade dans
                        une école</h3>
                </div>
            </a></article>
        <div class="list_topic">
            <article class="content_item content_item_small content_type content_type_video"><a
                    href="tech/tiktok/si-nous-concluons-le-bon-accord-nous-le-ferons-donald-trump-evoque-desormais-un-fonds-souverain-pour-racheter-tiktok_AV-202502040590.html"
                    title="&quot;Si nous concluons le bon accord, nous le ferons&quot;: Donald Trump évoque désormais un fonds souverain pour racheter Tiktok">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/Rc5T5LgkUZss1GYpA7-t-LMnhxs=/0x81:2048x1233/112x0/images/Tiktok-2014617.webp, https://images.bfmtv.com/1qogTKf_UP5VP_XJZyQTlVen-_w=/0x81:2048x1233/224x0/images/Tiktok-2014617.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/hkU4Qf2xXD1IUP3rP8qJnWhuIh8=/0x81:2048x1233/112x0/images/Tiktok-2014617.jpg, https://images.bfmtv.com/gUr0CIq2GM4vbP5xmeCNgqwpJfg=/0x81:2048x1233/224x0/images/Tiktok-2014617.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/1qogTKf_UP5VP_XJZyQTlVen-_w=/0x81:2048x1233/224x0/images/Tiktok-2014617.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/gUr0CIq2GM4vbP5xmeCNgqwpJfg=/0x81:2048x1233/224x0/images/Tiktok-2014617.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/1qogTKf_UP5VP_XJZyQTlVen-_w=/0x81:2048x1233/224x0/images/Tiktok-2014617.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/gUr0CIq2GM4vbP5xmeCNgqwpJfg=/0x81:2048x1233/224x0/images/Tiktok-2014617.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/1qogTKf_UP5VP_XJZyQTlVen-_w=/0x81:2048x1233/224x0/images/Tiktok-2014617.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/gUr0CIq2GM4vbP5xmeCNgqwpJfg=/0x81:2048x1233/224x0/images/Tiktok-2014617.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/hkU4Qf2xXD1IUP3rP8qJnWhuIh8=/0x81:2048x1233/112x0/images/Tiktok-2014617.jpg"
                            src="https://images.bfmtv.com/hkU4Qf2xXD1IUP3rP8qJnWhuIh8=/0x81:2048x1233/112x0/images/Tiktok-2014617.jpg"
                            alt="Le réseau social Tiktok">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/Rc5T5LgkUZss1GYpA7-t-LMnhxs=/0x81:2048x1233/112x0/images/Tiktok-2014617.webp, https://images.bfmtv.com/1qogTKf_UP5VP_XJZyQTlVen-_w=/0x81:2048x1233/224x0/images/Tiktok-2014617.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/hkU4Qf2xXD1IUP3rP8qJnWhuIh8=/0x81:2048x1233/112x0/images/Tiktok-2014617.jpg, https://images.bfmtv.com/gUr0CIq2GM4vbP5xmeCNgqwpJfg=/0x81:2048x1233/224x0/images/Tiktok-2014617.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/Rc5T5LgkUZss1GYpA7-t-LMnhxs=/0x81:2048x1233/112x0/images/Tiktok-2014617.webp, https://images.bfmtv.com/1qogTKf_UP5VP_XJZyQTlVen-_w=/0x81:2048x1233/224x0/images/Tiktok-2014617.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/hkU4Qf2xXD1IUP3rP8qJnWhuIh8=/0x81:2048x1233/112x0/images/Tiktok-2014617.jpg, https://images.bfmtv.com/gUr0CIq2GM4vbP5xmeCNgqwpJfg=/0x81:2048x1233/224x0/images/Tiktok-2014617.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/Rc5T5LgkUZss1GYpA7-t-LMnhxs=/0x81:2048x1233/112x0/images/Tiktok-2014617.webp, https://images.bfmtv.com/1qogTKf_UP5VP_XJZyQTlVen-_w=/0x81:2048x1233/224x0/images/Tiktok-2014617.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/hkU4Qf2xXD1IUP3rP8qJnWhuIh8=/0x81:2048x1233/112x0/images/Tiktok-2014617.jpg, https://images.bfmtv.com/gUr0CIq2GM4vbP5xmeCNgqwpJfg=/0x81:2048x1233/224x0/images/Tiktok-2014617.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/Rc5T5LgkUZss1GYpA7-t-LMnhxs=/0x81:2048x1233/112x0/images/Tiktok-2014617.webp, https://images.bfmtv.com/1qogTKf_UP5VP_XJZyQTlVen-_w=/0x81:2048x1233/224x0/images/Tiktok-2014617.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/hkU4Qf2xXD1IUP3rP8qJnWhuIh8=/0x81:2048x1233/112x0/images/Tiktok-2014617.jpg, https://images.bfmtv.com/gUr0CIq2GM4vbP5xmeCNgqwpJfg=/0x81:2048x1233/224x0/images/Tiktok-2014617.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/hkU4Qf2xXD1IUP3rP8qJnWhuIh8=/0x81:2048x1233/112x0/images/Tiktok-2014617.jpg"
                                alt="Le réseau social Tiktok">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">&quot;Si nous concluons le bon accord, nous le ferons&quot;: Donald Trump
                            évoque désormais un fonds souverain pour racheter Tiktok</h3>
                    </div>
                </a></article>
            <article class="content_item content_item_small content_type content_type_video"><a
                    href="economie/replay-emissions/bfm-bourse/usa-today-palantir-s-envole-une-nouvelle-fois-par-eric-lafreniere-04-02_VN-202502040589.html"
                    title="USA Today : &quot;Palantir s&#39;envole une nouvelle fois !&quot; par Éric Lafrenière - 04/02">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/WohwnK0sW6lkzhiwGm2vMgrIs1g=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp, https://images.bfmtv.com/hvOXs-2dKZ9OSZQ8_BufIp3u8ns=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/jv4u-j9PYJ17gJ_VcLvO2J_kBWI=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg, https://images.bfmtv.com/n8BmuBcBjFiJzhZ8MgYxtllVp20=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/hvOXs-2dKZ9OSZQ8_BufIp3u8ns=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/n8BmuBcBjFiJzhZ8MgYxtllVp20=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/hvOXs-2dKZ9OSZQ8_BufIp3u8ns=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/n8BmuBcBjFiJzhZ8MgYxtllVp20=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/hvOXs-2dKZ9OSZQ8_BufIp3u8ns=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/n8BmuBcBjFiJzhZ8MgYxtllVp20=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/jv4u-j9PYJ17gJ_VcLvO2J_kBWI=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg"
                            src="https://images.bfmtv.com/jv4u-j9PYJ17gJ_VcLvO2J_kBWI=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg"
                            alt="USA Today : &quot;Palantir s&#39;envole une nouvelle fois !&quot; par Éric Lafrenière - 04/02">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/WohwnK0sW6lkzhiwGm2vMgrIs1g=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp, https://images.bfmtv.com/hvOXs-2dKZ9OSZQ8_BufIp3u8ns=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/jv4u-j9PYJ17gJ_VcLvO2J_kBWI=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg, https://images.bfmtv.com/n8BmuBcBjFiJzhZ8MgYxtllVp20=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/WohwnK0sW6lkzhiwGm2vMgrIs1g=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp, https://images.bfmtv.com/hvOXs-2dKZ9OSZQ8_BufIp3u8ns=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/jv4u-j9PYJ17gJ_VcLvO2J_kBWI=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg, https://images.bfmtv.com/n8BmuBcBjFiJzhZ8MgYxtllVp20=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/WohwnK0sW6lkzhiwGm2vMgrIs1g=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp, https://images.bfmtv.com/hvOXs-2dKZ9OSZQ8_BufIp3u8ns=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/jv4u-j9PYJ17gJ_VcLvO2J_kBWI=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg, https://images.bfmtv.com/n8BmuBcBjFiJzhZ8MgYxtllVp20=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/WohwnK0sW6lkzhiwGm2vMgrIs1g=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp, https://images.bfmtv.com/hvOXs-2dKZ9OSZQ8_BufIp3u8ns=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/jv4u-j9PYJ17gJ_VcLvO2J_kBWI=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg, https://images.bfmtv.com/n8BmuBcBjFiJzhZ8MgYxtllVp20=/0x0:1280x720/224x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/jv4u-j9PYJ17gJ_VcLvO2J_kBWI=/0x0:1280x720/112x0/images/USA-Today-Palantir-s-envole-une-nouvelle-fois-par-Eric-Lafreniere-04-02-2027125.jpg"
                                alt="USA Today : &quot;Palantir s&#39;envole une nouvelle fois !&quot; par Éric Lafrenière - 04/02">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">USA Today : &quot;Palantir s&#39;envole une nouvelle fois !&quot; par
                            Éric Lafrenière - 04/02</h3>
                    </div>
                </a></article>
            <article class="content_item content_item_small content_type content_type_article"><a
                    href="international/europe/allemagne/allemagne-l-ancien-chancelier-gerhard-schroder-hospitalise-pour-burnout_AN-202502040576.html"
                    title="Allemagne: l&#39;ancien chancelier Gerhard Schroder hospitalisé pour burnout">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/HthsVDwj3Y1DeN_VZcS6VlJQ7oI=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp, https://images.bfmtv.com/e2y2AkGgpPWoF66w9WMraoWeO_s=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/AkWhTtBuOwi3PHgKteH9xHdFcv8=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg, https://images.bfmtv.com/wIuvNAnw2lkeUtUzBwiKnX9khhM=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/e2y2AkGgpPWoF66w9WMraoWeO_s=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/wIuvNAnw2lkeUtUzBwiKnX9khhM=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/e2y2AkGgpPWoF66w9WMraoWeO_s=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/wIuvNAnw2lkeUtUzBwiKnX9khhM=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/e2y2AkGgpPWoF66w9WMraoWeO_s=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/wIuvNAnw2lkeUtUzBwiKnX9khhM=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/AkWhTtBuOwi3PHgKteH9xHdFcv8=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg"
                            src="https://images.bfmtv.com/AkWhTtBuOwi3PHgKteH9xHdFcv8=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg"
                            alt="Gerhard Schröder à Vienne en Autriche le 31 octobre 2024">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/HthsVDwj3Y1DeN_VZcS6VlJQ7oI=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp, https://images.bfmtv.com/e2y2AkGgpPWoF66w9WMraoWeO_s=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/AkWhTtBuOwi3PHgKteH9xHdFcv8=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg, https://images.bfmtv.com/wIuvNAnw2lkeUtUzBwiKnX9khhM=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/HthsVDwj3Y1DeN_VZcS6VlJQ7oI=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp, https://images.bfmtv.com/e2y2AkGgpPWoF66w9WMraoWeO_s=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/AkWhTtBuOwi3PHgKteH9xHdFcv8=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg, https://images.bfmtv.com/wIuvNAnw2lkeUtUzBwiKnX9khhM=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/HthsVDwj3Y1DeN_VZcS6VlJQ7oI=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp, https://images.bfmtv.com/e2y2AkGgpPWoF66w9WMraoWeO_s=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/AkWhTtBuOwi3PHgKteH9xHdFcv8=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg, https://images.bfmtv.com/wIuvNAnw2lkeUtUzBwiKnX9khhM=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/HthsVDwj3Y1DeN_VZcS6VlJQ7oI=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp, https://images.bfmtv.com/e2y2AkGgpPWoF66w9WMraoWeO_s=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/AkWhTtBuOwi3PHgKteH9xHdFcv8=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg, https://images.bfmtv.com/wIuvNAnw2lkeUtUzBwiKnX9khhM=/0x106:2048x1258/224x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/AkWhTtBuOwi3PHgKteH9xHdFcv8=/0x106:2048x1258/112x0/images/Gerhard-Schroeder-a-Vienne-en-Autriche-le-31-octobre-2024-2027104.jpg"
                                alt="Gerhard Schröder à Vienne en Autriche le 31 octobre 2024">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">Allemagne: l&#39;ancien chancelier Gerhard Schroder hospitalisé pour
                            burnout</h3>
                    </div>
                </a></article>
            <article class="content_item content_item_small content_type content_type_video"><a
                    href="international/amerique-nord/etats-unis/jean-noel-barrot-il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines_VN-202502040574.html"
                    title="Jean-Noël Barrot: &quot;Il faut garder notre sang froid&quot; face aux craintes de taxes douanières américaines">
                    <picture class="content_item_cover with-js">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/CTw0_WTYxoPX4ite_HH2mRN_ggA=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp, https://images.bfmtv.com/WumghNbLWo449X0XfkqNbFQBtak=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 441px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/khfsERF8RIpr5IRq_gdirc1CyUE=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg, https://images.bfmtv.com/G48F5Eeag1m-7jCyy29K2RJlwW0=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/WumghNbLWo449X0XfkqNbFQBtak=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 361px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/G48F5Eeag1m-7jCyy29K2RJlwW0=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/WumghNbLWo449X0XfkqNbFQBtak=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 321px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/G48F5Eeag1m-7jCyy29K2RJlwW0=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x"
                            type="image/jpeg">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/WumghNbLWo449X0XfkqNbFQBtak=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x"
                            type="image/webp">
                        <source media="(min-width: 300px)" width="16" height="9" class="lozad"
                            srcset="https://images.bfmtv.com/G48F5Eeag1m-7jCyy29K2RJlwW0=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x"
                            type="image/jpeg"><img width="16" height="9" class="lozad"
                            data-srcset="https://images.bfmtv.com/khfsERF8RIpr5IRq_gdirc1CyUE=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg"
                            src="https://images.bfmtv.com/khfsERF8RIpr5IRq_gdirc1CyUE=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg"
                            alt="Jean-Noël Barrot: &quot;Il faut garder notre sang froid&quot; face aux craintes de taxes douanières américaines">
                    </picture><noscript>
                        <picture class="content_item_cover">
                            <source type="image/webp" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/CTw0_WTYxoPX4ite_HH2mRN_ggA=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp, https://images.bfmtv.com/WumghNbLWo449X0XfkqNbFQBtak=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x">
                            <source type="image/jpeg" media="(min-width: 441px)"
                                srcset="https://images.bfmtv.com/khfsERF8RIpr5IRq_gdirc1CyUE=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg, https://images.bfmtv.com/G48F5Eeag1m-7jCyy29K2RJlwW0=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x">
                            <source type="image/webp" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/CTw0_WTYxoPX4ite_HH2mRN_ggA=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp, https://images.bfmtv.com/WumghNbLWo449X0XfkqNbFQBtak=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x">
                            <source type="image/jpeg" media="(min-width: 361px)"
                                srcset="https://images.bfmtv.com/khfsERF8RIpr5IRq_gdirc1CyUE=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg, https://images.bfmtv.com/G48F5Eeag1m-7jCyy29K2RJlwW0=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x">
                            <source type="image/webp" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/CTw0_WTYxoPX4ite_HH2mRN_ggA=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp, https://images.bfmtv.com/WumghNbLWo449X0XfkqNbFQBtak=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x">
                            <source type="image/jpeg" media="(min-width: 321px)"
                                srcset="https://images.bfmtv.com/khfsERF8RIpr5IRq_gdirc1CyUE=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg, https://images.bfmtv.com/G48F5Eeag1m-7jCyy29K2RJlwW0=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x">
                            <source type="image/webp" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/CTw0_WTYxoPX4ite_HH2mRN_ggA=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp, https://images.bfmtv.com/WumghNbLWo449X0XfkqNbFQBtak=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.webp 2x">
                            <source type="image/jpeg" media="(min-width: 300px)"
                                srcset="https://images.bfmtv.com/khfsERF8RIpr5IRq_gdirc1CyUE=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg, https://images.bfmtv.com/G48F5Eeag1m-7jCyy29K2RJlwW0=/0x0:1280x720/224x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg 2x">
                            <img
                                src="https://images.bfmtv.com/khfsERF8RIpr5IRq_gdirc1CyUE=/0x0:1280x720/112x0/images/Jean-Noel-Barrot-Il-faut-garder-notre-sang-froid-face-aux-craintes-de-taxes-douanieres-americaines-2027117.jpg"
                                alt="Jean-Noël Barrot: &quot;Il faut garder notre sang froid&quot; face aux craintes de taxes douanières américaines">
                        </picture>
                    </noscript>
                    <div>
                        <h3 class="content_item_title">Jean-Noël Barrot: &quot;Il faut garder notre sang froid&quot; face aux
                            craintes de taxes douanières américaines</h3>
                    </div>
                </a></article>
            <div id="list_rubrique_1698250268555" class="block_links_container">
                <ul class="block_links" id="block_linksrubrique_1698250268555">
                    <li><a href="international/index.html" title="Tout l&#39;international">Tout l&#39;international</a></li>
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
    <div class="display_ads_mobile">
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
    </script>
</main>
<div id="sas_291_s" class="bloc_center_full bloc_center_full_bottom">
    <div id="sas_291_container">
        <div id="sas_291" class="display_ad"></div>
        <script type="application/javascript">
            if (smartInit) {
                didomiNextConsent(45, (function() {
                    Hubvisor("ready", null, (function() {
                        sas.cmd.push((function() {
                            sas.render("291")
                        }))
                    }))
                }))
            }
        </script>
    </div>
</div>
<?php $this->endSection() ?>