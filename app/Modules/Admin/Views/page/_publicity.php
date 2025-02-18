<?= $this->extend("layouts/layout_admin") ?>

<?= $this->Section("title") ?>
<title>Espagnora : Publicité</title>
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
                    <h2 class="text-white pb-2 fw-bold">Publicité</h2>
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
                            <h4 class="card-title">Publicité</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST" id="formServiceAddPost" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="my-4 col-md-12" style="padding:0;margin-top:1rem !important;margin-bottom:1rem !important;">
                                        <div class="get_import_img" style="border:1px solid rgba(0,0,0,.05);background:rgba(0,0,0,.15);">
                                            <?php
                                            if (!empty($publicity) && !is_null($publicity->Image_2)) {
                                            ?>
                                                <img src="<?= base_url("uploads") ?>/<?= $publicity->Image_2 ?>" style="width:100%;" id="img">
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
                                        <input type="file" name="Image_2" id="import_img" style="display:none;">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="Media_type_10" class="form-control-label">Emplancement image</label>
                                        <select class="form-control" name="Type_1" id="Type_1">
                                            <option value="">Selectionner</option>
                                            <option value="Droite" <?= (!empty($publicity) && $publicity->Type_1 == "Droite") ? "selected" : "" ?>>Droite</option>
                                            <option value="Centre" <?= (!empty($publicity) && $publicity->Type_1 == "Centre") ? "selected" : "" ?>>Centre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer no-bd form-group">
                                <input type="hidden" id="Id_0" name="Id_0" value="<?= (!empty($publicity)) ? $publicity->Id_0 : "0" ?>" />
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

        $('#formServiceAddPost').on('submit', function(e) {
            e.preventDefault();
            var type = $('#Type_1').val(), files = $('#import_img')[0].files;

            $('#loader').show();

            if (type.length != 0 && files.length != 0) {
                var form = $(this)[0], data = new FormData(form);

                $.ajax({
                    url: "<?= base_url("admin/save/publicity") ?>",
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

    });
</script>
<?= $this->EndSection() ?>

<?= $this->Section("bottom") ?>
<?= $this->Include("\Modules\Admin\Views\menus\bottom") ?>
<?= $this->EndSection() ?>