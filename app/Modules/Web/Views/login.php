<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Espagnora : Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon shorticon" href="<?= base_url("espagnora_assets/images/espagnora_icon_white.png") ?>" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= base_url("espagnora_assets/js/plugin/webfont/webfont.min.js") ?>"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['<?= base_url("espagnora_assets/css/fonts.css") ?>']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url("espagnora_assets/css/bootstrap.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("espagnora_assets/css/azzara.min.css") ?>">
</head>
<body class="login page-not-found" style="background:#052d66;">
	<div class="wrapper wrapper-login">

		<div class="container container-login animated fadeIn">
			<h3 class="text-center">
				<a href="<?= base_url("web/page/home") ?>"><img src="<?= base_url("espagnora_assets/images/logo.png") ?>" alt="Logo espagnora" style="height:80px;"  class="navbar-brand"></a>
			</h3>
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" id="login-form">
				<div class="form-group">
					<label for="username" class="placeholder"><b>Email / Identifiant</b></label>
					<input id="username" name="username" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="password" class="placeholder"><b>Mot de passe</b></label>
					<!--<a href="#" class="link float-right">Forget Password ?</a>-->
					<div class="position-relative">
						<input id="password" name="password" type="password" class="form-control">
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
					</div>
				</div>
				<div class="form-group form-action-d-flex mb-3">
					<!--<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="rememberme">
						<label class="custom-control-label m-0" for="rememberme">Remember Me</label>
					</div>-->
                    <a href="<?= base_url() ?>" class="link">Retourner à l'accueil</a>
					<button type="submit" class="btn col-md-5 float-right mt-3 mt-sm-0 fw-bold" style="background:#052d66;color:#fff;"><i class="fa fa-spin fa-spinner" style="display:none;" id="loader-login"></i> Se connecter</button>
				</div>
				<!--<div class="form-action">
					<a href="#" class="btn btn-primary btn-rounded btn-login">Sign In</a>
				</div> -->
				<!--<div class="login-account">
					<span class="msg">Don't have an account yet ?</span>
					<a href="#" id="show-signup" class="link">Sign Up</a>
				</div>-->
			</form>
		</div>

		<!--<div class="container container-signup animated fadeIn">
			<h3 class="text-center">Sign Up</h3>
			<div class="login-form">
				<div class="form-group">
					<label for="fullname" class="placeholder"><b>Fullname</b></label>
					<input  id="fullname" name="fullname" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email" class="placeholder"><b>Email</b></label>
					<input  id="email" name="email" type="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="passwordsignin" class="placeholder"><b>Password</b></label>
					<div class="position-relative">
						<input  id="passwordsignin" name="passwordsignin" type="password" class="form-control" required>
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="confirmpassword" class="placeholder"><b>Confirm Password</b></label>
					<div class="position-relative">
						<input  id="confirmpassword" name="confirmpassword" type="password" class="form-control" required>
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agree" id="agree">
						<label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
					</div>
				</div>
				<div class="row form-action">
					<div class="col-md-6">
						<a href="#" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Cancel</a>
					</div>
					<div class="col-md-6">
						<a href="#" class="btn btn-primary w-100 fw-bold">Sign Up</a>
					</div>
				</div>
			</div>
		</div>-->
	</div>
	<script src="<?= base_url("espagnora_assets/js/core/jquery.3.2.1.min.js") ?>"></script>
	<script src="<?= base_url("espagnora_assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js") ?>"></script>
	<script src="<?= base_url("espagnora_assets/js/core/popper.min.js") ?>"></script>
	<script src="<?= base_url("espagnora_assets/js/core/bootstrap.min.js") ?>"></script>
	<script src="<?= base_url("espagnora_assets/js/ready.js") ?>"></script>
	<script src="<?= base_url("espagnora_assets/js/plugin/sweetalert/sweetalert.min.js") ?>"></script>

	<script type="text/javascript">
        document.addEventListener('DOMContentLoaded', (event) => {
            $('#login-form').on('submit',function(e){
                e.preventDefault();
                var username = $('#username').val(),password = $('#password').val();
                $('#loader-login').show();
                if(username.length == 0 || password.length == 0){
                    swal("Alert","Veuillez compléter le formulaire", {
                        icon : "error",
                        buttons: {
                            confirm: {
                                className : 'btn btn-danger'
                            }
                        },
                    }).then((value) => {
                        $('#loader-login').hide();
                    });
                }
                else{
                    $.ajax({
                        url:'<?= base_url("admin/save/login") ?>',
                        type:'POST',
                        data:'username=' + username + '&password=' + password,
                        dataType :'html',
                        success:function(result){
                            var read = JSON.parse(result);
                            if(read.login){
                                window.location = read.redirect;
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
                                    $('#loader-login').hide();
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>

</body>
</html>