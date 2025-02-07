<?php $this->extend('layouts/layout_web') ?>

<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="direct-container">
                <!-- <iframe
                    src="<?= $media[0]['Media_Link_5'] ?>"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe> -->
                <iframe src="<?= $media[0]['Media_Link_5'] ?>" width="100%" style="aspect-ratio: 16/9; min-height: 340px;" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen  webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                <div class="direct-container-title">
                    <div>
                        <div class="direct-icon"></div>&nbsp;<span>En direct</span>
                    </div>
                    <!-- <p>Demande de procès pour corruption: Rachida Dati dénonce le "réquisitoire infamant" du PNF</p> -->
                     <p><?= $media[0]['Title_2'] ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="direct-container-news">
                <span class="direct-container-news-title">NEWS 24/7</span>
                <ul class="direct-container-news-list">
                    <li><a href="">Demande de procès pour corruption: Rachida Dati dénonce le "réquisitoire infamant" du PNF</a></li>
                    <li><a href="">Demande de procès pour corruption: Rachida Dati dénonce le "réquisitoire infamant" du PNF</a></li>
                    <li><a href="">Demande de procès pour corruption: Rachida Dati dénonce le "réquisitoire infamant" du PNF</a></li>
                    <li><a href="">Demande de procès pour corruption: Rachida Dati dénonce le "réquisitoire infamant" du PNF</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="see-also-container">
        <div class="see-also-header">
            <span class="see-also-header-title">
                Nos dernières vidéos
            </span>
        </div>
        <div class="see-also-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="see-also-box">
                            <img src="<?php echo base_url('espagnora_assets/images/barack_obama.jpg') ?>" class="image" />
                            <p class="see-also-box-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <span>Sponsorisé par espagnora </span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="see-also-box">
                            <img src="<?php echo base_url('espagnora_assets/images/barack_obama.jpg') ?>" class="image" />
                            <p class="see-also-box-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <span>Sponsorisé par espagnora </span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="see-also-box">
                            <img src="<?php echo base_url('espagnora_assets/images/barack_obama.jpg') ?>" class="image" />
                            <p class="see-also-box-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <span>Sponsorisé par espagnora </span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="see-also-box">
                            <img src="<?php echo base_url('espagnora_assets/images/barack_obama.jpg') ?>" class="image" />
                            <p class="see-also-box-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <span>Sponsorisé par espagnora </span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="see-also-box">
                            <img src="<?php echo base_url('espagnora_assets/images/barack_obama.jpg') ?>" class="image" />
                            <p class="see-also-box-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <span>Sponsorisé par espagnora </span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="see-also-box">
                            <img src="<?php echo base_url('espagnora_assets/images/barack_obama.jpg') ?>" class="image" />
                            <p class="see-also-box-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <span>Sponsorisé par espagnora </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $this->endSection() ?>