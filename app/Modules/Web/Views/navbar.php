<?php
if (isset($active_data)) {
    if ($active_data['active_status'] == 'home') {
        $active_home = "navbar-active";
    } elseif ($active_data['active_status'] == 'actualites') {
        $active_actualites = "navbar-active";
    } elseif ($active_data['active_status'] == "politique") {
        $active_page_politique = "navbar-active";
    } elseif ($active_data['active_status'] == "international") {
        $active_page_international = "navbar-active";
    } elseif ($active_data['active_status'] == "societe") {
        $active_page_societe = "navbar-active";
    } elseif ($active_data['active_status'] == "economie") {
        $active_page_economie = "navbar-active";
    } elseif ($active_data['active_status'] == "tech") {
        $active_page_tech = "navbar-active";
    } elseif ($active_data['active_status'] == "auto") {
        $active_page_auto = "navbar-active";
    } elseif ($active_data['active_status'] == "sport") {
        $active_page_sport = "navbar-active";
    } elseif ($active_data['active_status'] == "sante") {
        $active_page_sante = "navbar-active";
    } else {
        $active_page = "";
    }
}
?>
<header class="main_header" id="main_header">
    <div class="header_top" id="header_top"><button class="header_menu" id="header_menu_show">Menu</button>
        <h1><a href="<?=base_url()?>" title="ESPAGNORA" class="header_brand"><img src="<?=base_url('espagnora_assets/images/logo.png')?>" alt="ESPAGNORA"
                    title="ESPAGNORA"></a>
        </h1>
        <div class="header_direct"><a class="header_replay"
                href="https://www.rmcbfmplay.com/chaine/bfm-tv?subMenuId=RefMenuItem::rmcgo_home_ESPAGNORA" title="Replay"
                target="_blank">Replay</a> <a class="direct_radio" href="en-direct/bfm-radio/index.html" title="Direct Radio"
                onclick="return tc_events_31(this,'click-navigation',{'clicktype':'click.navigation','clickchapter1':'header', 'clickchapter2':'CTA-direct', 'clickname':'radio_ESPAGNORA'});">
                <div class="direct_radio_bouton"><img width="21" height="20"
                        src="<?=base_url('templates/news/assets/v11/images/radio.dee6a7c951465a8cbb208e64f4c09ff6.svg')?>" alt="Direct Radio"></div>Radio
            </a><a class="direct_tv" href="<?=base_url('web/direct-tv')?>" title="Direct tv"
                onclick="return tc_events_31(this,'click-navigation',{'clicktype':'click.navigation', 'clickchapter1':'header', 'clickchapter2':'CTA-direct', 'clickname':'direct-tv_ESPAGNORA'});">
                <div class="direct_tv_bouton"><img width="16" height="14"
                        src="<?=base_url('templates/news/assets/v11/images/direct_tv.a04f54365fdb12eef5ce900c03db08d4.svg')?>" alt="Direct tv"></div><span
                    class="span_tv">Direct</span>
            </a></div>
    </div>
    <nav role="primary" class="nav_primary">
        <ul>
            <li><a href="videos/index.html" title="Vidéos">Vidéos</a></li>
            <?php foreach ($active_data['categories'] as $category): ?>
                <li><a href="<?= base_url('web/actualites/' . $category['Slug_5']) ?>" class="<?= (isset($active_data['active_status']) && $active_data['active_status'] == $category['Slug_5']) ? "navbar-active" : "" ?>"><?= $category['Description_1'] ?></a></li>
            <?php endforeach; ?>
            <?php
            if (empty($_SESSION["userdata"]["Id_0"])) {
            ?>
                <li><a href="<?= base_url("web/login") ?>"><i class="fa fa-user"></i></a></li>
            <?php
            } else {
            ?>
                <li><a href="<?= base_url("admin/page/media") ?>"><i class="fas fa-cog"></i></a></li>
            <?php
            }
            ?>
            <!-- <li><a href="politique/index.html" title="Politique">Politique</a></li>
            <li><a href="police-justice/index.html" title="Police-Justice">Police-Justice</a></li>
            <li><a href="international/index.html" title="International">International</a></li>
            <li><a href="societe/index.html" title="Société">Société</a></li>
            <li><a href="economie/index.html" title="Économie">Économie</a></li>
            <li><a href="tech/index.html" title="Tech">Tech</a></li>
            <li><a href="auto/index.html" title="Auto">Auto</a></li>
            <li><a href="https://rmcsport.ESPAGNORA.com" title="Sport">Sport</a></li>
            <li><a href="sante/index.html" title="Santé">Santé</a></li>
            <li><a href="people/index.html" title="People">People</a></li>
            <li><a href="regions/index.html" title="Régions">Régions</a></li>
            <li><a href="https://meteo.ESPAGNORA.com/" title="Météo">Météo</a></li>
            <li><a href="newsletters/index.html" title="Newsletters"><span>Newsletters</span></a></li>
            <li class="nav_service"><a href="code-promo/index.html" title="Code promo"><span>Code promo</span></a></li> -->
        </ul>
    </nav>
    <div class="main_menu_nav" id="main_menu_nav">
        <div class="menu_nav">
            <div class="menu_right">
                <div class="menu_center_left">
                    <div class="menu_center_left_radio"><a href="<?=base_url('web/direct-tv')?>" title="Regarder ESPAGNORA"
                            onclick="return tc_events_31(this,'click-navigation',{'clicktype':'click.navigation','clickchapter1':'menu-burger', 'clickchapter2':'CTA-direct', 'clickname':'direct-tv_ESPAGNORA'});">
                            <div class="menu_center_left_radio_img"><img width="32" height="26" src="<?=base_url('espagnora_assets/images/icon_blanc.png')?>"
                                    alt="Regarder ESPAGNORA"></div>
                            <span>Regarder ESPAGNORA TV</span>
                            <div class="menu_center_left_radio_picto"><svg width="10" height="11" fill="#FF2A00">
                                    <use xlink:href="<?=base_url('templates/bfmtv/assets/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg')?>#play"></use>
                                </svg></div>
                        </a><span class="live_wrapper_infos"
                            data-hls-source="https://hls-bfmradio.nextradiotv.com/ssai/master.m3u8" data-epg-chaine="bfm-radio"
                            data-direct-title="LE DIRECT BFM RADIO" data-channel-name="BFMRadio" title="Écouter BFM Radio">
                            <div class="menu_center_left_radio_img"><img width="32" height="20" src="<?=base_url('espagnora_assets/images/icon_blanc.png')?>"
                                    alt="Écouter BFM Radio">
                            </div><span>Écouter la Radio</span>
                            <div class="menu_center_left_radio_picto"><svg width="10" height="11" fill="#051EFF">
                                    <use xlink:href="<?=base_url('templates/bfmtv//assets/v11/images/play.a1d51b9aa213d4bf8f86450c6ce71797.svg#play')?>"></use>
                                </svg></div>
                        </span><a href="https://www.rmcbfmplay.com/chaine/bfm-tv?subMenuId=RefMenuItem::rmcgo_home_ESPAGNORA"
                            title="Replay ESPAGNORA" target="_blank">
                            <div class="menu_center_left_radio_img"><img width="40" height="17" src="<?=base_url('espagnora_assets/images/icon_blanc.png')?>"
                                    alt="Replay ESPAGNORA">
                            </div><span>Replay ESPAGNORA</span>
                            <div class="menu_center_left_radio_picto"><svg width="17" height="17" fill="#FFFF">
                                    <use xlink:href="<?=base_url('templates/bfmtv/assets/v11/images/exit.52706d6bd3ab09a810a87e5603ba51b9.svg#exit')?>"></use>
                                </svg></div>
                        </a></div>
                    <div class="menu_center__title"><span>Parcourir</span></div>
                    <ul id="menu_category_links_left">
                        <li><a href="videos/index.html" title="Vidéos"><span>Vidéos</span></a></li>
                        <li><a href="replay-emissions/index.html" title="Émissions"><span>Magazines</span></a></li>
                        <li><a href="<?=base_url('web/podcasts')?>" title="Podcasts"><span>Podcasts</span></a></li>
                        <li>
                            <div class="menu_label_header">
                                <div class="menu_label">Services</div><span class="show_menu">Voir plus</span>
                            </div>
                            <ul class="sub_menu_list">
                                <li><a href="evenements/jeux-concours/index.html" title="Jeux concours"><span>Jeux concours</span></a>
                                </li>
                                <li><a href="programme-tv/index.html" title="Grille TV"><span>Grille TV</span></a></li>
                                <li><a href="bfmtv-et-vous/index.html" title="BFMTV et vous"><span>BFMTV et vous</span></a></li>
                                <li><a href="temoins/index.html" title="Témoins BFMTV"><span>Témoins BFMTV</span></a></li>
                                <li><a href="bfmtv-et-vous/making-of/l-info-en-vrai/index.html" title="L'info en vrai"><span>L'info en
                                            vrai</span></a></li>
                                <li><a href="pratique/index.html" title="BFM Pratique"><span>BFM Pratique</span></a></li>
                                <li><a href="comparateur/index.html" title="Comparateur"><span>Comparateur</span></a></li>
                                <li><a href="code-promo/index.html" title="Code promo"><span>Code promo</span></a></li>
                                <li><a href="https://www.rmcbfm-ads.com/nos-marques/bfmtv.html" title="Devenir Annonceur"
                                        target="_blank"><span>Devenir Annonceur</span></a></li>
                                <li><a href="https://annonces-legales.bfmtv.com" title="Annonces légales"><span>Annonces
                                            légales</span></a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="menu_center__title">Suivez-nous sur</div>
                    <div class="menu_share_social" id="menu_share_social"><a href="https://www.facebook.com/BFMTV"
                            target="_blank" class="facebook" title="Facebook"><i class="icon_facebook"></i> </a><a
                            href="https://x.com/bfmtv" target="_blank" class="twitter" title="X"></a> <a
                            href="https://www.instagram.com/bfmtv/?hl=fr" target="_blank" class="instagram" title="Instagram"><img
                                src="assets/v11/images/instagram.6a7fd7797c667fbd899cd2a960baf714.svg" alt="Instagram"> </a><a
                            href="https://www.youtube.com/c/Bfmtv-actu/videos" target="_blank" class="youtube" title="Youtube"><i
                                class="icon_youtube"></i> </a><a href="https://fr.linkedin.com/company/bfmtv/" target="_blank"
                            class="linkedin" title="Linkedin"><i class="icon_linkedin"></i> </a><a href="newsletters/index.html"
                            class="newsletters" title="Newsletters"><img
                                src="assets/v11/images/newsletter.3977615e993db64e69a0a169632178b9.svg" alt="Newsletters"> </a><a
                            href="https://app.adjust.com/2dnslix" target="_blank" class="apple" title="IOS"><img
                                src="assets/v11/images/apple.e139f47f38d27653ceffcdd25f755d51.svg" alt="IOS"> </a><a
                            href="https://app.adjust.com/dsokfy1" target="_blank" class="android" title="Android"><img
                                src="assets/v11/images/android.1f1231e1f7b43ca8c61115c3a81a4529.svg" alt="Android"></a></div>
                </div>
            </div>
        </div>

</header>
<!-- <div class="header">
    <div class="header-left">
        <span id="menu-hamburger" class="fa fa-bars"></span>
        <img id="header-logo" src="<?php echo base_url('espagnora_assets/images/logo.png') ?>" />
    </div>

    <div class="header-right">
        <a id="replay" href="<?= base_url('web/replays'); ?>"><i class="fa fa-backward"></i>REPLAY</a>
        <a id="radio" href="#"><i class="fa fa-radio"></i>RADIO</a>
        <a id="directTV" href="<?= base_url('web/direct-tv'); ?>"><i class="fa fa-tv"></i>DIRECT</a>
    </div>
</div>

<div class="nav_bar">
    <ul>

        <li><a href="<?= base_url(); ?>" class="<?= isset($active_home) ? $active_home : "" ?>">Accueil</a></li>
        <li><a href="<?= base_url('web/actualites') ?>" class="<?= isset($active_actualites) ? $active_actualites : "" ?>">Actualités</a></li>
        <li><a href="<?= base_url('web/magazines') ?>" class="<?= (isset($active_data['active_status']) && $active_data['active_status'] == "magazines") ? "navbar-active" : "" ?>">Magazines</a></li>
   
        <?php foreach ($active_data['categories'] as $category): ?>
            <li><a href="<?= base_url('web/actualites/' . $category['Slug_5']) ?>" class="<?= (isset($active_data['active_status']) && $active_data['active_status'] == $category['Slug_5']) ? "navbar-active" : "" ?>"><?= $category['Description_1'] ?></a></li>
        <?php endforeach; ?>
        <?php
        if (empty($_SESSION["userdata"]["Id_0"])) {
        ?>
            <li><a href="<?= base_url("web/login") ?>"><i class="fa fa-user"></i></a></li>
        <?php
        } else {
        ?>
            <li><a href="<?= base_url("admin/page/media") ?>"><i class="fas fa-cog"></i></a></li>
        <?php
        }
        ?>
    </ul>
</div> -->