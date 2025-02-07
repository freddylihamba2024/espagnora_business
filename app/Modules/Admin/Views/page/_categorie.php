<?= $this->extend("layouts/layout_admin") ?>

<?= $this->Section("title") ?>
<title>Espagnora : Categorie</title>
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
                        <h2 class="text-white pb-2 fw-bold"><?= (!empty($categorie))?$categorie->Description_1:'Nouveau Categorie' ?></h2>
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
                            <span class="card-title">Categorie</span>
                        </div>
                        <div class="card-body">
                            <form action="<?= $_SERVER['PHP_SELF'] ?>" id="<?= (!empty($categorie))?$categorie->Id_0:0; ?>" class="form-categorie" method="POST" enctype="multipart/form-data">
                                <h3 class="subtitle ml-0 mb-4">Information sur categorie</h3>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group float-label active">
                                            <label for="Parent_4" class="form-control-label">Parent categorie</label>
                                            <select name="Parent_4" id="Parent_4" class="form-control">
                                                <option value="0">Selectionner</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group float-label active">
                                            <label for="Description_1" class="form-control-label">Description</label>
                                            <input type="text" name="Description_1" id="Description_1" value="<?= (!empty($categorie))?$categorie->Description_1:"" ?>" class="form-control" placeholder="Description">
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer" style="border-top:1px solid rgba(255,255,255,0.035);margin-right:-4px;">
                                    <button type="reset" class="btn text-white" style="background:#be0916;">Effacer</button>
                                    <button type="submit" class="btn text-white" style="background:#052d66;">
                                        <i class="fa fa-spin fa-spinner" id="loader-categ" style="display:none;"></i> Enregistrer
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
            $('.form-categorie').on('submit',function(e){
                e.preventDefault();
                $('#loader-categ').show();
                var form = $(this)[0],data = new FormData(form);
                data.append("id",$(this).attr("id"));
                if($("#Description_1").val().length > 0)
                {
                    $.ajax({
                        url:"<?= base_url("admin/save/categorie") ?>",
                        type:"POST",
                        enctype:"multipart/form-data",
                        data:data,
                        processData:false,
                        contentType:false,
                        success:function(result){
                            var read = JSON.parse(result);
                            if(read.save){
                                swal("Succès","Enregistrement effectué", {
                                    icon : "success",
                                    buttons: {
                                        confirm: {
                                            className : 'btn btn-success'
                                        }
                                    },
                                }).then((value) => {
                                    window.location = self.location;
                                });
                            }
                            else{
                                swal("Alert",read.info, {
                                    icon : "warning",
                                    buttons: {
                                        confirm: {
                                            className : 'btn btn-warning text-white'
                                        }
                                    },
                                }).then((value) => {
                                    $('#loader-categ').hide();
                                });
                            }
                        }
                    });
                }
                else{
                    swal("Alert","Veuillez compléter le formulaire", {
                        icon : "error",
                        buttons: {
                            confirm: {
                                className : 'btn btn-danger'
                            }
                        },
                    }).then((value) => {
                        $('#loader-categ').hide();
                    });
                }
            });
        });
    </script>
<?= $this->EndSection() ?>

<?= $this->Section("bottom") ?>
<?= $this->Include("\Modules\Admin\Views\menus\bottom") ?>
<?= $this->EndSection() ?>