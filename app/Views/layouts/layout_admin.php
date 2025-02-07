<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?= $this->renderSection("title") ?>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url("espagnora_assets/images/espagnora_icon_white.png") ?>" type="image/x-icon" />
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <!-- Fonts and icons -->
    <script src="<?= base_url("espagnora_assets/js/plugin/webfont/webfont.min.js") ?>"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url("espagnora_assets/css/fonts.css") ?>']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url("espagnora_assets/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("espagnora_assets/css/atlantis.min.css") ?>">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url("espagnora_assets/plugins/summernote/summernote-bs4.min.css") ?>">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.2.6/js/froala_editor.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/froala-editor@3.2.6/css/froala_editor.pkgd.min.css">

    <script src="https://cdn.tiny.cloud/1/zco9w7vh5zxz6z25ugbn0rq904zprx0wcma8g7oqgbyd8rqo/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <link rel="stylesheet" href="<?= base_url("espagnora_assets/css/demo.css") ?>">

    <style>
        .note-popover.popover {
            max-width: none;
            display: none !important;
        }

        .note-editor.note-frame .note-btn {
            color: #1a2035 !important;
        }

        .copyright a,
        .copyright i {
            color: #b5954a !important;
        }

        .copyright a:hover {
            color: rgba(255, 158, 39, 0.75) !important;
        }

        .pull-left .nav-link {
            color: #575962;
        }

        .pull-left .nav-link:hover {
            color: #b5954a !important;
        }

        .text-danger:hover {
            color: #b5954a !important;
        }

        /* Select code pays */
        .select_wrap {
            width: 96px;
            height: 35px;
            font-size: 14px;
            text-align: left;
        }

        .select_wrap span {
            display: block;
            cursor: pointer;
        }

        .select_wrap ul {
            display: none;
            position: absolute;
            top: 44px;
            margin-left: -8px;
            padding-left: 8px;
            z-index: 18;
            width: 95px;
            height: 200px;
            background: #fff;
            overflow: auto;
            border: 1px solid #ced4da;
        }

        .select_wrap ul li {
            display: block;
            cursor: pointer;
        }

        .select_wrap span img,
        .select_wrap ul li img {
            display: inline-block;
            vertical-align: middle;
            width: 20px;
            margin-top: -4px;
            margin-right: 5px;
        }

        .select_wrap ul li:hover {
            color: #ffc000;
        }

        .table.table-personal th,
        .table.table-personal td {
            border: none;
        }

        .table.table-personal tbody tr:nth-of-type(2n+1) {
            background-color: rgba(0, 0, 0, .05);
        }

        .table.table-personal tbody tr:nth-of-type(2n+1) td table tr,
        .table.table-personal tbody tr:nth-of-type(2n) td table tr {
            background-color: transparent;
        }

        .note-editor.note-frame .note-editing-area .note-editable {
            color: #495057;
        }

        .page-item.active .page-link {
            background-color: #052d66;
            border-color: #052d66;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <?= $this->renderSection("top") ?>

        <?= $this->renderSection("sidebars") ?>

        <div class="main-panel">

            <?= $this->renderSection("page") ?>

            <?= $this->renderSection("bottom") ?>

        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url("espagnora_assets/js/core/jquery.3.2.1.min.js") ?>"></script>
    <script src="<?= base_url("espagnora_assets/js/core/popper.min.js") ?>"></script>
    <script src="<?= base_url("espagnora_assets/js/core/bootstrap.min.js") ?>"></script>


    <!-- jQuery UI -->
    <script src="<?= base_url("espagnora_assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js") ?>"></script>
    <script src="<?= base_url("espagnora_assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js") ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= base_url("espagnora_assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js") ?>"></script>


    <!-- Chart JS -->
    <script src="<?= base_url("espagnora_assets/js/plugin/chart.js/chart.min.js") ?>"></script>

    <!-- jQuery Sparkline -->
    <script src="<?= base_url("espagnora_assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js") ?>"></script>

    <!-- Chart Circle -->
    <script src="<?= base_url("espagnora_assets/js/plugin/chart-circle/circles.min.js") ?>"></script>

    <!-- Datatables -->
    <script src="<?= base_url("espagnora_assets/js/plugin/datatables/datatables.min.js") ?>"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?= base_url("espagnora_assets/js/plugin/jqvmap/jquery.vmap.min.js") ?>"></script>
    <script src="<?= base_url("espagnora_assets/js/plugin/jqvmap/maps/jquery.vmap.world.js") ?>"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url("espagnora_assets/js/plugin/sweetalert/sweetalert.min.js") ?>"></script>

    <!-- Sumernote -->
    <script src="<?= base_url("espagnora_assets/plugins/summernote/summernote-bs4.min.js") ?>"></script>

    <!-- Atlantis JS -->
    <script src="<?= base_url("espagnora_assets/js/atlantis.min.js") ?>"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="<?= base_url("espagnora_assets/js/setting-demo.js") ?>"></script>
    <script src="<?= base_url("espagnora_assets/js/demo.js") ?>"></script>
    <script src="<?= base_url("espagnora_assets/js/espagnora.js") ?>"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            $('#filescustom').on('change', function() {
                var files = $(this)[0].files;
                if (files.length > 0) {
                    $('.filescustom').val(files[0]['name']);
                }
            });

            //ouverture et fermeture liste au click
            $('.select_wrap').click(function() {
                $(this).children('ul').slideToggle(200);
            });

            //fermeture liste au blur
            $('.select_wrap').mouseleave(function() {
                $(this).children('ul').slideUp(200);
            });

            //au click sur un li
            $('.select_wrap ul li').click(function() {
                // on recupere son contenu
                var affichage = $(this).html();
                // on recupere sa valeur
                var valeur = $(this).attr('data-value');
                // on affiche son contenu dans le span 'select_wrap span'
                $(this).parent().parent().children('span').html(affichage);
                // on attribue sa valeur à l'input 'select_wrap input'
                $(this).parent().parent().children('input').val('+' + affichage.split('+')[1]);
            });
        });

        Circles.create({
            id: 'circles-1',
            radius: 45,
            value: 60,
            maxValue: 100,
            width: 7,
            text: 5,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: 70,
            maxValue: 100,
            width: 7,
            text: 36,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-3',
            radius: 45,
            value: 40,
            maxValue: 100,
            width: 7,
            text: 12,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

        var mytotalIncomeChart = new Chart(totalIncomeChart, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                datasets: [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }]
                },
            }
        });

        $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });
        $('#Description_3').summernote({
            height: 200, // Set editor height
            focus: true // Focus on the editor when initialized
        });
        
    </script>
</body>

</html>