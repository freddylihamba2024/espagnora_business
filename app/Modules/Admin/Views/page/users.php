<?= $this->extend("layouts/layout_admin") ?>

<?= $this->Section("title") ?>
<title>Espagnora : Utilisateurs</title>
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
                        <h2 class="text-white pb-2 fw-bold">Gestion utilisateurs</h2>
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
                            <div class="col-md-12">
                                <a href="<?= base_url("admin/page/user") ?>" class="btn btn-info btn-border btn-round btn-sm" style="float:right;">
                                    <span class="btn-label">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                    Utilisateurs
                                </a>
                            </div>
                            <div class="card-head-row">
                                <span class="card-title">Utilisateurs</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-personal">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Rôle</th>
                                            <th>Téléphone</th>
                                            <th>Email</th>
                                            <th>Autorisation</th>
                                            <th>Date</th>
                                            <th>Modifié</th>
                                            <th style="width:120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(count($users) > 0){
                                                $i = 1;
                                                foreach($users as $user){
                                        ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $user->Name_3 ?></td>
                                            <td><?= $user->FirstName_1 ?></td>
                                            <td><?= $user->Role_8 ?></td>
                                            <td><?= $user->Phone_5 ?></td>
                                            <td><?= $user->Email_4 ?></td>
                                            <td><?= ($user->Status_9 == 1)?'Autorisé':'Bloqué' ?></td>
                                            <td>
                                                <?php
                                                    $date = new DateTime($user->Creatime_10);
                                                    echo $date->format('d-m-Y H:i:s');
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if(!is_null($user->Updatime_11)){
                                                        $date = new DateTime($user->Updatime_11);
                                                        echo $date->format('d-m-Y H:i:s');
                                                    }
                                                    else{
                                                        echo 'H : i : s';
                                                    }
                                                ?>
                                            </td>
                                            <td style="padding:0 !important;text-align:center;">
                                                <a href="<?= base_url('admin/page/user')."/".$cryptor->encrypt(json_encode(array('userid' => $user->Id_0))) ?>" class="btn btn-sm text-white" style="margin:2px;font-size:10px;padding: 5px 7px;background:#052d66;"><i class="far fa-edit"></i></a>
                                                <button class="btn btn-sm deleteUser text-white" data-value="<?= $user->Id_0 ?>" style="margin:2px;font-size:10px;padding: 5px 7px;background:#a40e1a;">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                                    $i++;
                                                }
                                            }
                                            else{
                                        ?>
                                        <tr><td colspan="11" style="text-align:center;">Aucun résultats</td></tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            $('.deleteUser').click(function(e) {
                var userid = $(this).attr('data-value');
                swal({
                    title: 'Confirmation',
                    text: "Êtes-vous sûr de supprimer l'utilisateur ?",
                    type: 'warning',
                    buttons:{
                        cancel: {
                            visible: true,
                            text : 'Non',
                            className: 'btn btn-danger'
                        },
                        confirm: {
                            text : 'Oui',
                            className : 'btn btn-info'
                        }
                    }
                }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url:"<?= base_url('admin/save/delete_user') ?>",
                            type:'POST',
                            data:'userid=' + userid,
                            success:function(result,statut){
                                var read = JSON.parse(result);
                                if(read.delete){
                                    swal("Succès","Vous aviez supprimé un utilisateur", {
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
                                                className : 'btn btn-warning'
                                            }
                                        },
                                    });
                                }
                            }
                        });
                    }
                });
            });
        });
    </script>
<?= $this->EndSection() ?>

<?= $this->Section("bottom") ?>
<?= $this->Include("\Modules\Admin\Views\menus\bottom") ?>
<?= $this->EndSection() ?>