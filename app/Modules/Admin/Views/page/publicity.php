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
                        <h2 class="text-white pb-2 fw-bold">Gestion images publicité</h2>
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
                                <a href="<?= base_url("admin/page/newpublicity") ?>" class="btn btn-info btn-border btn-round btn-sm" style="float:right;">
                                    <span class="btn-label">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    Publicité
                                </a>
                            </div>
                            <div class="card-head-row">
                                <span class="card-title">Publicité</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-personal">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Type</th>
                                            <th>Image publicité</th>
                                            <th>Date crée</th>
                                            <th style="width:120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(count($publicity) > 0){
                                                $i = 1;
                                                foreach($publicity as $pub){
                                        ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $pub->Type_1 ?></td>
                                            <td><img src="<?= base_url("uploads") ?>/<?= $pub->Image_2 ?>" style="width:50px;" id="img"></td>
                                            <td>
                                                <?php
                                                    $date = new DateTime($pub->Creatime_3);
                                                    echo $date->format('d-m-Y à H:i:s');
                                                ?>
                                            </td>
                                            <td style="padding:0 !important;text-align:center;">
                                                <a href="<?= base_url('admin/page/newpublicity')."/".$cryptor->encrypt(json_encode(array('pubkey' => $pub->Id_0))) ?>" class="btn btn-sm text-white" style="margin:2px;font-size:10px;padding: 5px 7px;background:#052d66;"><i class="far fa-edit"></i></a>
                                                <button class="btn btn-sm deletePublicity text-white" data-value="<?= $pub->Id_0 ?>" style="margin:2px;font-size:10px;padding: 5px 7px;background:#a40e1a;">
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
                                        <tr><td colspan="11" style="text-align:center;">Aucun image publicité</td></tr>
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

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', (event) => {
            $('#basic-datatables').DataTable({
                "pageLength": 10,
            });

            $('.deletePublicity').click(function(e) {
                var pubkey = $(this).attr('data-value');
                swal({
                    title: 'Confirmation',
                    text: "Êtes-vous sûr de supprimer cette publicité ?",
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
                            url:"<?= base_url('admin/save/delete_publicity') ?>",
                            type:'POST',
                            data:'pubkey=' + pubkey,
                            success:function(result,statut){
                                var read = JSON.parse(result);
                                if(read.delete){
                                    swal("Succès","Vous aviez supprimé une publicité", {
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