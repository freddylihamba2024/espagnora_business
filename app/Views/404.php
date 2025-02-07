<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
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

		<div class="container container-login animated fadeIn col-md-5">
			<h3 class="text-center">
				<a href="<?= base_url() ?>"><img src="<?= base_url("espagnora_assets/images/logo.png") ?>" alt="Logo espagnora" style="height:80px;"  class="navbar-brand"></a><br/>
                <img src="<?= base_url("espagnora_assets/images/404-error.png") ?>" style="width:65%;"><br/>
                <a href="<?= base_url() ?>" class="btn col-md-4 mt-3 mt-sm-0 fw-bold" style="background:#052d66;color:#fff;">Retourner à l'accueil</a>
			</h3>
		</div>

	</div>
	<script src="<?= base_url("espagnora_assets/js/core/jquery.3.2.1.min.js") ?>"></script>
	<script src="<?= base_url("espagnora_assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js") ?>"></script>
	<script src="<?= base_url("espagnora_assets/js/core/popper.min.js") ?>"></script>
	<script src="<?= base_url("espagnora_assets/js/core/bootstrap.min.js") ?>"></script>
	<script src="<?= base_url("espagnora_assets/js/ready.js") ?>"></script>
</body>
</html>