<?= $this->extend("layouts/layout_admin") ?>

<?= $this->Section("title") ?>
<title>Espagnora : Paramètre</title>
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
                        <h2 class="text-white pb-2 fw-bold">Paramètre</h2>
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
                            <form method="POST" id="form-setting-info" action="<?= $_SERVER["PHP_SELF"] ?>">
                                <h3 class="subtitle ml-0 mb-4">Mot de passe</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group float-label active">
                                            <label for="password" class="form-control-label">Mot de passe</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group float-label active">
                                            <label for="newpassword" class="form-control-label">Nouveau</label>
                                            <input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="Nouveau">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group float-label active">
                                            <label for="confpassword" class="form-control-label">Confirmation</label>
                                            <input type="password" name="confpassword" id="confpassword" class="form-control" placeholder="Confirmation">
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer" style="border-top:1px solid rgba(255,255,255,0.035);margin-right:-4px;">
                                    <button type="reset" class="btn text-white" style="background:#be0916;">Effacer</button>
                                    <button type="submit" name="parametre" class="btn text-white" id="parametre" style="background:#052d66;">
                                        <i class="fa fa-spin fa-spinner" id="loader-setting-info" style="display:none;"></i> Modifier
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
            $('#form-setting-info').on('submit',function(e){
                e.preventDefault();
                var password = $('#password').val(),newpass = $('#newpassword').val(),confirm = $('#confpassword').val();
                $('#loader-setting-info').show();
                if(password.length == 0 || newpass.length == 0 || confirm.length == 0){
                    swal("Alert","Veuillez compléter le formulaire", {
                        icon : "error",
                        buttons: {
                            confirm: {
                                className : 'btn btn-danger'
                            }
                        },
                    }).then((value) => {
                        $('#loader-setting-info').hide();
                    });
                }
                else{
                    $.ajax({
                        url:'<?= base_url("admin/save/param") ?>',
                        type:'POST',
                        data:'password=' + password + '&newpass=' + newpass + '&confirm=' + confirm,
                        dataType :'html',
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
                                    $('#loader-setting-info').hide();
                                    $('#password').val('');
                                    $('#newpassword').val('');
                                    $('#confpassword').val('');
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
                                    $('#loader-setting-info').hide();
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
<?= $this->EndSection() ?>

<?= $this->Section("bottom") ?>
<?= $this->Include("\Modules\Admin\Views\menus\bottom") ?>
<?= $this->EndSection() ?>