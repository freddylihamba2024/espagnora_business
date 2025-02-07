<?= $this->extend("layouts/layout_admin") ?>

<?= $this->Section("title") ?>
<title>Espagnora : Information basic</title>
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
                        <h2 class="text-white pb-2 fw-bold">Information Basic</h2>
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
                            <span class="card-title">Paramètre</span>
                        </div>
                        <div class="card-body">
                            <form action="<?= $_SERVER["PHP_SELF"] ?>" id="form-basic-info" method="POST" enctype="multipart/form-data">
                                <h3 class="subtitle ml-0 mb-4">Information Basic</h3>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group float-label active">
                                            <label for="name" class="form-control-label">Nom</label>
                                            <input type="text" name="name" class="form-control" id="name" value="<?= (!empty($user) && $user->Name_3)?$user->Name_3:"" ?>" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group float-label active">
                                            <label for="last_name" class="form-control-label">Postnom</label>
                                            <input type="text" name="last_name" value="<?= (!empty($user) && $user->LastName_2)?$user->LastName_2:"" ?>" id="last_name" class="form-control" placeholder="Postnom">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group float-label active">
                                            <label for="firt_name" class="form-control-label">Prénom</label>
                                            <input type="text" name="first_name" value="<?= (!empty($user) && $user->FirstName_1)?$user->FirstName_1:"" ?>" id="first_name" class="form-control" placeholder="Prénom">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group float-label active">
                                            <label for="phone" class="form-control-label">Téléphone</label>
                                            <input type="text" name="phone" value="<?= (!empty($user) && $user->Phone_5)?$user->Phone_5:"" ?>" id="phone" class="form-control" placeholder="Téléphone">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group float-label active">
                                            <label for="username" class="form-control-label">Identifiant</label>
                                            <input type="text" name="username" id="username" value="<?= (!empty($user))?$user->Username_6:"" ?>" class="form-control" placeholder="Nom utilisateur">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group float-label active">
                                            <label for="email" class="form-control-label">Email</label>
                                            <input type="email" name="email" value="<?= (!empty($user) && $user->Email_4)?$user->Email_4:"" ?>" id="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer" style="border-top:1px solid rgba(255,255,255,0.035);margin-right:-4px;">
                                    <button type="reset" class="btn text-white" style="background:#be0916;">Effacer</button>
                                    <button type="submit" name="basic" class="btn text-white" id="basic" style="background:#052d66;">
                                        <i class="fa fa-spin fa-spinner" id="loader-basic-info" style="display:none;"></i> Modifier
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            $('#form-basic-info').on('submit',function(e){
                e.preventDefault();
                $('#loader-basic-info').show();
                var form = $(this)[0],data = new FormData(form);

                $.ajax({
                    url:"<?= base_url("admin/save/basic") ?>",
                    type:"POST",
                    enctype:"multipart/form-data",
                    data:data,
                    processData:false,
                    contentType:false,
                    success:function(result){
                        var read = JSON.parse(result);
                        if(read.save){
                            swal("Succès","Modification effectué", {
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
                                $('#loader-basic-info').hide();
                            });
                        }
                    }
                });
            });
        });
    </script>
<?= $this->EndSection() ?>

<?= $this->Section("bottom") ?>
<?= $this->Include("\Modules\Admin\Views\menus\bottom") ?>
<?= $this->EndSection() ?>