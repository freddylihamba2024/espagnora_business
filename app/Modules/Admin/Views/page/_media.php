<?= $this->extend("layouts/layout_admin") ?>

<?= $this->Section("title") ?>
<title>Espagnora : Media</title>
<?= $this->EndSection() ?>

<?= $this->Section("top") ?>
<?= $this->Include("\Modules\Admin\Views\menus\/top") ?>
<?= $this->EndSection() ?>

<?= $this->Section("sidebars") ?>
<?= $this->Include("\Modules\Admin\Views\menus\sidebars") ?>
<?= $this->EndSection() ?>

<?= $this->Section("page") ?>
<div class="content">
    <div class="panel-header bg-primary-gradient" style="background:#052d66 !important;">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold"><?= (!empty($media)) ? $media->Title_2 : 'Nouveau Media' ?></h2>
                    <h5 class="text-white op-7 mb-2">Espagnora</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <h4 class="card-title">Media</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST" id="formServiceAddPost" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="my-4 col-md-12" style="padding:0;margin-top:1rem !important;margin-bottom:1rem !important;">
                                        <div class="get_import_img" style="border:1px solid rgba(0,0,0,.05);background:rgba(0,0,0,.15);">
                                            <?php
                                            if (!empty($media) && !is_null($media->Media_Image_4)) {
                                            ?>
                                                <img src="<?= base_url("uploads") ?>/<?= $media->Media_Image_4 ?>" style="width:100%;" id="img">
                                            <?php
                                            } else {
                                            ?>
                                                <p class="text-dark text-center" id="text-dark" style="font-weight:500;font-size:40px;padding-top:80px;padding-bottom:80px;"><i class="fas fa-file-image"></i></p>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <button type="button" onclick="$('#import_img').trigger('click');return false;" class="btn btn-icon btn-round btn-default" style="position:absolute;top:10px;left:10px;">
                                            <i class="fa fa-camera"></i>
                                        </button>
                                        <input type="file" name="Media_Image_4" id="import_img" style="display:none;">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="Media_type_10" class="form-control-label">Type Media</label>
                                        <select class="form-control" name="Media_type_10" id="Media_type_10">
                                            <option value="">Selectionner</option>
                                            <option value="Actualites" <?= (!empty($media) && $media->Media_type_10 == "Actualites") ? "selected" : "" ?>>Actualités</option>
                                            <option value="Audios" <?= (!empty($media) && $media->Media_type_10 == "Audios") ? "selected" : "" ?>>Audios</option>
                                            <option value="Videos" <?= (!empty($media) && $media->Media_type_10 == "Videos") ? "selected" : "" ?>>Vidéos</option>
                                            <option value="Magazines" <?= (!empty($media) && $media->Media_type_10 == "Magazines") ? "selected" : "" ?>>Magazines</option>
                                            <option value="Direct Radio" <?= (!empty($media) && $media->Media_type_10 == "Direct Radio") ? "selected" : "" ?>>Direct Radio</option>
                                            <option value="Direct TV" <?= (!empty($media) && $media->Media_type_10 == "Direct TV") ? "selected" : "" ?>>Direct TV</option>
                                            <option value="Replays" <?= (!empty($media) && $media->Media_type_10 == "Replays") ? "selected" : "" ?>>Replays</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="Title_2" class="form-control-label">Titre Media</label>
                                        <input type="text" class="form-control" name="Title_2" id="Title_2" value="<?= (!empty($media)) ? $media->Title_2 : "" ?>" placeholder="Titre Media">
                                    </div>

                                    <div class="form-group">
                                        <label for="Media_Category_7" class="form-control-label">Catégorie</label>
                                        <select class="form-control" name="Media_Category_7" id="Media_Category_7">
                                            <option value="">Selectionner</option>
                                            <?php
                                            foreach ($categories as $categorie) {
                                            ?>
                                                <option value="<?= $categorie->Id_0 ?>" <?= (!empty($media) && $media->Media_Category_7 == $categorie->Id_0) ? "selected" : "" ?>><?= $categorie->Description_1 ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div id="notblog" class="form-group <?= (!empty($media) && !is_null($media->Media_Link_5)) ? "" : "d-none" ?>">
                                        <label for="Media_Link_5" class="form-control-label">Lien de media</label>
                                        <input type="text" class="form-control" name="Media_Link_5" id="Media_Link_5" value="<?= (!empty($media) && !is_null($media->Media_Link_5)) ? $media->Media_Link_5 : "" ?>" placeholder="Lien de media">
                                    </div>

                                    <div class="form-group">
                                        <label for="Description_3" class="form-control-label">Description</label>
                                        <textarea id="Description_3" class="form-control" name="Description_3" rows="7" placeholder="Description ici"><?= (!empty($media)) ? $media->Description_3 : "" ?></textarea>
                                    </div>
                                    <div id="prix_magazine" class="form-group d-none">
                                        <label for="Description_3" class="form-control-label">Prix de la Magazine</label>
                                        <input type="number" name="prix_magazine" step=".2" class="form-control" value="<?= (!empty($media)) ? $media->prix_magazine : "" ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer no-bd form-group">
                                <input type="hidden" id="Id_0" name="Id_0" value="<?= (!empty($media)) ? $media->Id_0 : "0" ?>" />
                                <button type="reset" class="btn btn-default">Effacer</button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-spin fa-spinner" id="loader" style="display:none;"></i> Enregistrer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', (event) => {

        new FroalaEditor('#Description_3', {
            language: 'fr', // Use French language
            fontFamily: ['Arial', 'Helvetica', 'Georgia'],
            fontSize: ['8', '10', '12', '14', '16', '18', '24', '36'],
            pluginsEnabled: ['image', 'video', 'codeView', 'link', 'insertImage', 'emoji'],
            // Image upload configuration
            imageUploadURL: '<?=base_url('/uploads')?>', // URL of the server-side image upload handler
            imageUploadParams: {
                id: 'Description_3' // Optional additional data, for example, editor ID
            },
        });


        $('#formServiceAddPost').on('submit', function(e) {
            e.preventDefault();
            var type = $('#Media_type_10').val(),
                files = $('#import_img')[0].files,
                category = $('#Media_Category_7').val(),
                title = $('#Title_2').val(),
                description = $('#Description_3').val();

            $('#loader').show();

            if (category.length != 0 && type.length != 0 && title.length != 0 && description.length != 0 /*&& files.length != 0*/ ) {
                var form = $(this)[0],
                    data = new FormData(form);


                $.ajax({
                    url: "<?= base_url("admin/save/media") ?>",
                    type: "POST",
                    enctype: "multipart/form-data",
                    dataType: 'json',
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(result) {
                        swal("Succès", "Vous aviez ajouté un media", {
                            icon: "success",
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            },
                        }).then((value) => {
                            window.location = self.location;
                        });
                    },
                    error: function(xhr, status, error) {
                        swal("Alert", "Opération non abouti. veuillez refaire !", {
                            icon: "warning",
                            buttons: {
                                confirm: {
                                    className: 'btn btn-warning'
                                }
                            },
                        }).then((value) => {
                            $('#loader').hide();
                        });
                    }
                });
            } else {
                swal("Alert", "Veuillez compléter le formulaire", {
                    icon: "error",
                    buttons: {
                        confirm: {
                            className: 'btn btn-danger'
                        }
                    },
                }).then((value) => {
                    $('#loader').hide();
                });
            }
        });

        $("#Media_type_10").on("change", function() {
            if ($(this).val() == "Actualites" || $(this).val() == "") {
                if (!$("#notblog").hasClass("d-none")) {
                    $("#notblog").addClass("d-none");
                }
                $("#prix_magazine").addClass('d-none');
            } else if ($(this).val() == "Audios" || $(this).val() == "Videos") {
                $("#notblog").removeClass("d-none");
                $("#Media_Link_5").attr('type', 'file');
                $("#prix_magazine").addClass('d-none');
            } else if ($(this).val() == "Magazines") {
                $("#prix_magazine").removeClass('d-none');
                $("#notblog").removeClass("d-none");
                $("#Media_Link_5").attr('type', 'file');
            } else {
                $("#notblog").removeClass("d-none");
                $("#Media_Link_5").attr('type', 'text');
                $("#prix_magazine").addClass('d-none');
            }
        });
    });
</script>
<?= $this->EndSection() ?>

<?= $this->Section("bottom") ?>
<?= $this->Include("\Modules\Admin\Views\menus\bottom") ?>
<?= $this->EndSection() ?>