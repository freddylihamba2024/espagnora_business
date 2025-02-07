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
                        <h2 class="text-white pb-2 fw-bold">Gestion Media</h2>
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
                                <a href="<?= base_url("admin/page/newmedia") ?>" class="btn btn-info btn-border btn-round btn-sm" style="float:right;">
                                    <span class="btn-label">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    Media
                                </a>
                            </div>
                            <div class="card-head-row">
                                <span class="card-title">Media</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-personal">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Titre</th>
                                            <th>Categorie</th>
                                            <th>Type Media</th>
                                            <th>Ajouté par </th>
                                            <th>Date crée</th>
                                            <th style="width:120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(count($medias) > 0){
                                                $i = 1;
                                                foreach($medias as $media){
                                        ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $media->Title_2 ?></td>
                                            <td><?= $category[$media->Media_Category_7] ?></td>
                                            <td><?= $media->Media_type_10 ?></td>
                                            <td><?= $author[$media->Author_Id_6] ?></td>
                                            <td>
                                                <?php
                                                    $date = new DateTime($media->DateCreat_8 );
                                                    echo $date->format('d-m-Y à H:i:s');
                                                ?>
                                            </td>
                                            <td style="padding:0 !important;text-align:center;">
                                                <a href="<?= base_url('admin/page/newmedia')."/".$cryptor->encrypt(json_encode(array('media' => $media->Id_0))) ?>" class="btn btn-sm text-white" style="margin:2px;font-size:10px;padding: 5px 7px;background:#052d66;"><i class="far fa-edit"></i></a>
                                                <button class="btn btn-sm deleteMedia text-white" data-value="<?= $media->Id_0 ?>" style="margin:2px;font-size:10px;padding: 5px 7px;background:#a40e1a;">
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
                                        <tr><td colspan="11" style="text-align:center;">Aucun categorie</td></tr>
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

            $('.deleteMedia').click(function(e) {
                var media = $(this).attr('data-value');
                swal({
                    title: 'Confirmation',
                    text: "Êtes-vous sûr de supprimer ce categorie ?",
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
                            url:"<?= base_url('admin/save/delete_media') ?>",
                            type:'POST',
                            data:'media=' + media,
                            success:function(result,statut){
                                var read = JSON.parse(result);
                                if(read.delete){
                                    swal("Succès","Vous aviez supprimé un media", {
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