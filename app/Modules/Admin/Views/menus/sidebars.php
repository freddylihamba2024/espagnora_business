            <!-- Sidebar -->
            <div class="sidebar sidebar-style-2">
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <div class="user">
                            <div class="avatar-sm float-left mr-2">
                                <img src="<?php echo base_url("espagnora_assets/images/admin/avatar/default.png");// (!is_null($user->url_img_profile))?base_url().'/'.$user->url_img_profile:base_url().'/public/assets/img/avatar/default.png' ?>" alt="..." class="avatar-img rounded-circle">
                            </div>
                            <div class="info">
                                <a href="<?= base_url("admin/page/basic") ?>">
                                    <span style="color:rgba(255,255,255,.75);">
                                        <?= $_SESSION['userdata']['FirstName_1']." ".$_SESSION['userdata']['Name_3'] ?>
                                        <span class="user-level" style="color:rgba(255,255,255,.35);"><?php echo "Utilisateur" ?></span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <ul class="nav nav-primary">
                            <li class="nav-item <?= ($activeLink == 'dashboards')?'active':'' ?>">
                                <a href="<?= base_url('admin/page/dashboards') ?>">
                                    <i class="fas fa-home"></i>
                                    <p>Accueil</p>
                                </a>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Components</h4>
                            </li>
                            <li class="nav-item <?= ($activeLink == 'media')?'active':'' ?>">
                                <a href="<?= base_url('admin/page/media') ?>">
                                    <i class="fas fa-desktop"></i>
                                    <p>Media</p>
                                </a>
                            </li>
                            <li class="nav-item <?= ($activeLink == 'users')?'active':'' ?>">
                                <a href="<?= base_url('admin/page/users') ?>">
                                    <i class="fas fa-users"></i>
                                    <p>Utilisateurs</p>
                                </a>
                            </li>
                            <li class="nav-item <?= ($activeLink == 'categorie')?'active':'' ?>">
                                <a href="<?= base_url('admin/page/categorie') ?>">
                                    <i class="fas fa-tasks"></i>
                                    <p>Categorie</p>
                                </a>
                            </li>
                            <li class="nav-item <?= ($activeLink=='profile')?'active':'' ?>">
                                <a data-toggle="collapse" href="#profile">
                                    <i class="fas fa-user-cog"></i>
                                    <p>Profile</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="profile">
                                    <ul class="nav nav-collapse" style="padding-bottom:0;margin-bottom:2px;">
                                        <li>
                                            <a href="<?= base_url('admin/page/basic') ?>">
                                                <span class="sub-item">Basic</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('admin/page/param') ?>">
                                                <span class="sub-item">Paramètre</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('web/page/logout') ?>">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <p>Déconnexion</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->