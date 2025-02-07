<?php $this->extend('layouts/layout_web') ?>

<!-- navbar section -->
<?php $this->section('navbar') ?>
<?php echo view('Modules\Web\Views\navbar') ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-12">
            <div class="post">
                <div class="post-header">
                    <span class="post-header-title"><?= isset($media[0]['Title_2']) ? $media[0]['Title_2'] : "" ?></span>
                    <br />
                    <div class="date_creat">
                        <span><?= isset($media[0]['DateCreat_8']) ? "Le " . date('d/M/Y', strtotime($media[0]['DateCreat_8'])) : "" ?></span>
                    </div>
                </div>
                <div class="post-image">
                    <?php if ($media[0]['Media_type_10'] == "Actualites"): ?>
                        <img src="<?= base_url('uploads/' . $media[0]['Media_Image_4']) ?>" class="image" />
                    <?php elseif ($media[0]['Media_type_10'] == "Audios") : ?>
                        <div class="podcast-container">
                            <div>
                                <img class="podcast-image" src="<?= base_url('uploads/' . $media[0]['Media_Image_4']) ?>" />
                                <span class="podcast-title"><?= $media[0]['Title_2'] ?></span>
                            </div>
                            <div class="podcast-playbutton" onclick="play(event)">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>

                        <div id="audio-player" class="audio-player d-none">
                            <!-- Custom Audio Controls -->
                            <div class="audio-player-tag">
                                <img src="<?= base_url('uploads/' . $media[0]['Media_Image_4']) ?>" class="audio-player-tag-image" />
                                <span class="audio-player-tag-title"><?= $media[0]['Title_2'] ?></span>
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
                            <source src="<?= base_url('uploads/' . $media[0]['Media_Link_5']) ?>" type="audio/mp3">
                            Your browser does not support the audio element.
                        </audio>
                    <?php else: ?>
                        <video autoplay loop controls>
                            <source src="<?= base_url('uploads/' . $media[0]['Media_Link_5']) ?>" type="video/mp4" />
                        </video>
                    <?php endif; ?>
                    <!-- <iframe 
                        src="https://www.youtube.com/embed/l8PMl7tUDIE"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe> -->
                    <!-- <p class="legend">La ministre de la Culture Rachida Dati au Musée du Luxembourg, le 11 mars 2024 à Paris. - Anne-Christine POUJOULAT / AFP</p> -->
                    <div class="post-description">
                        <p>
                            <?= isset($media[0]['Description_3']) ? $media[0]['Description_3'] : "" ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="see-also-container">
                <div class="see-also-header">
                    <span class="see-also-header-title">
                        <?php if ($media[0]['Media_type_10'] == "Audios"): ?>
                            LES PODCASTS
                        <?php else: ?>

                            A LIRE AUSSI
                        <?php endif; ?>
                    </span>
                </div>
                <div class="see-also-body">
                    <div class="container-fluid">
                        <div class="row">
                            <?php if ($media[0]['Media_type_10'] == "Audios"): ?>
                                <?php foreach ($similar_podcasts as $news): ?>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="podcast-grid-item">
                                            <div class="podcast-grid-item-content">
                                                <div class='podcast-grid-item-content-image'>
                                                    <img src="<?= base_url('uploads/' . $news['Media_Image_4']) ?>" />
                                                </div>
                                                <div class='podcast-grid-item-content-text'>
                                                    <p>
                                                        <?= $news['Title_2'] ?>
                                                    </p>
                                                    <a href="<?= base_url('web/article/' . $news['Media_Id_1']) ?>"><span><i class="fa fa-play"></i></span><span>Jouer</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; ?>
                            <?php else: ?>
                                <?php foreach ($similar_medias as $news): ?>

                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <a href="<?= base_url('web/article/' . $news['Media_Id_1']) ?>">
                                            <div class="see-also-box">
                                                <img src="<?php echo base_url('uploads/' . $news['Media_Image_4']) ?>" class="image" />
                                                <p class="see-also-box-title text-overflow"><?= $news['Title_2']; ?></p>
                                                <span>Sponsorisé par espagnora </span>
                                            </div>
                                        </a>
                                    </div>

                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

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
        progressBar.value=`${progress}`;
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