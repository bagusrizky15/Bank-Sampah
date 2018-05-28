
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Journey Wear Production</title>

	<!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords"
		  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="<?= base_url() ?>vendor/assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="<?= base_url() ?>vendor/assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!-- iconfont -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/assets/icon/icofont/css/icofont.css">

	<!-- simple line icon -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/assets/icon/simple-line-icons/css/simple-line-icons.css">

	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- bash syntaxhighlighter css -->
	<link type="text/css" rel="stylesheet" href="<?= base_url() ?>vendor/assets/plugins/syntaxhighlighter/styles/shCoreDjango.css"/>

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/assets/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/assets/css/responsive.css">

	<!--color css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/assets/css/color/color-1.min.css" id="color"/>

	<!-- Light Box css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/assets/plugins/light-box/css/ekko-lightbox.css">

	<!-- Light Box 2 css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>vendor/assets/plugins/lightbox2/dist/css/lightbox.css">


</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
	<div class="loader-bg">
		<div class="loader-bar">
		</div>
	</div>
	<!-- Navbar-->
	<header class="main-header-top hidden-print">
		<?php include('inc/header.php'); ?>
	</header>
	<!-- Side-Nav-->
	<aside class="main-sidebar hidden-print " >
		<?php include('inc/sidebar.php'); ?>
	</aside>
	<!-- Sidebar chat start -->
	<div id="sidebar" class="p-fixed header-users showChat">
		<?php include('inc/side_chat.php'); ?>
	</div>
	<div class="showChat_inner">
		<?php include('inc/side_chat_inner.php'); ?>
	</div>
	<div class="content-wrapper">
		<?php $this->load->view($view);?>
	</div>

</div>

</body>


<script src="<?= base_url() ?>vendor/assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>vendor/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>vendor/assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="<?= base_url() ?>vendor/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="<?= base_url() ?>vendor/assets/plugins/Waves/waves.min.js"></script>

<!-- Scrollbar JS-->
<script src="<?= base_url() ?>vendor/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?= base_url() ?>vendor/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="<?= base_url() ?>vendor/assets/plugins/classie/classie.js"></script>

<!-- notification -->
<script src="<?= base_url() ?>vendor/assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- Highliter js -->
<script type="text/javascript" src="<?= base_url() ?>vendor/assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
<script type="text/javascript">SyntaxHighlighter.all();</script>

<script type="text/javascript" src="<?= base_url() ?>vendor/assets/pages/accordion.js"></script>
<!-- custom js -->
<script type="text/javascript" src="<?= base_url() ?>vendor/assets/js/main.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>vendor/assets/js/menu.min.js"></script>


<!-- light Box js -->
<script src="<?= base_url() ?>vendor/assets/plugins/light-box/js/ekko-lightbox.js"></script>

<!-- light Box 2 js -->
<script src="<?= base_url() ?>vendor/assets/plugins/lightbox2/dist/js/lightbox.js"></script>

</html>
