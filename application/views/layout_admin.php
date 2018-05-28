
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bank Sampah</title>

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
	<meta name="author" content="Phoenixcoded">
	<!-- Favicon icon -->
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="<?= base_url('vendor/')?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- iconfont -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/')?>assets/icon/icofont/css/icofont.css">

	<!-- simple line icon -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/')?>assets/icon/simple-line-icons/css/simple-line-icons.css">

	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/')?>assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Date Picker css -->
	<link rel="stylesheet" href="<?= base_url('vendor/')?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />

	<!-- Bootstrap Date-Picker css -->
	<link rel="stylesheet" href="<?= base_url('vendor/')?>assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/')?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />

	<!-- Select 2 css -->
	<link rel="stylesheet" href="<?= base_url('vendor/')?>assets/plugins/select2/dist/css/select2.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/')?>assets/plugins/select2/css/s2-docs.css">

	<!-- Multi Select css -->
	<link rel="stylesheet" href="<?= base_url('vendor/')?>assets/plugins/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="<?= base_url('vendor/')?>assets/plugins/multiselect/css/multi-select.css" />

	<!-- Color Picker css -->
	<link rel="stylesheet" href="<?= base_url('vendor/')?>assets/plugins/spectrum/spectrum.css" />

	<!-- Tags css -->
	<link rel="stylesheet" href="<?= base_url('vendor/')?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" />

	<!-- bash syntaxhighlighter css -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('vendor/')?>assets/plugins/syntaxhighlighter/styles/shCoreDjango.css"/>

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/')?>assets/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/')?>assets/css/responsive.css">

	<!--color css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('vendor/')?>assets/css/color/color-1.min.css" id="color"/>

	<!-- Light Box css -->
	<link rel="stylesheet" type="text/css" href="assets/plugins/light-box/css/ekko-lightbox.css">

	<!-- Light Box 2 css -->
	<link rel="stylesheet" type="text/css" href="assets/plugins/lightbox2/dist/css/lightbox.css">


	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">

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
		<?php include('inc/sidebar_admin.php'); ?>
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

<!-- Required Jqurey -->
<script src="<?= base_url('vendor/')?>assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('vendor/')?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url('vendor/')?>assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="<?= base_url('vendor/')?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="<?= base_url('vendor/')?>assets/plugins/Waves/waves.min.js"></script>

<!-- Scrollbar JS-->
<script src="<?= base_url('vendor/')?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?= base_url('vendor/')?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="<?= base_url('vendor/')?>assets/plugins/classie/classie.js"></script>

<!-- notification -->
<script src="<?= base_url('vendor/')?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- Date picker.js -->
<script src="<?= base_url('vendor/')?>assets/plugins/datepicker/js/moment-with-locales.min.js"></script>
<script src="<?= base_url('vendor/')?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Select 2 js -->
<script src="<?= base_url('vendor/')?>assets/plugins/select2/dist/js/select2.full.min.js"></script>

<!-- Max-Length js -->
<script src="<?= base_url('vendor/')?>assets/plugins/bootstrap-maxlength/src/bootstrap-maxlength.js"></script>

<!-- Multi Select js -->
<script src="<?= base_url('vendor/')?>assets/plugins/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>
<script src="<?= base_url('vendor/')?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/')?>assets/plugins/multi-select/js/jquery.quicksearch.js"></script>

<!-- Tags js -->
<script src="<?= base_url('vendor/')?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>

<!-- Bootstrap Datepicker js -->
<script type="text/javascript" src="<?= base_url('vendor/')?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('vendor/')?>assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>

<!-- bootstrap range picker -->
<script type="text/javascript" src="<?= base_url('vendor/')?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- color picker -->
<script type="text/javascript" src="<?= base_url('vendor/')?>assets/plugins/spectrum/spectrum.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/')?>assets/plugins/jscolor/jscolor.js"></script>

<!-- highlite js -->
<script type="text/javascript" src="<?= base_url('vendor/')?>assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/')?>assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/')?>assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
<script type="text/javascript">SyntaxHighlighter.all();</script>

<!-- custom js -->
<script type="text/javascript" src="<?= base_url('vendor/')?>assets/js/main.min.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/')?>assets/pages/advance-form.js"></script>
<script src="assets/js/menu.min.js"></script>


<!-- light Box js -->
<script src="assets/plugins/light-box/js/ekko-lightbox.js"></script>

<!-- light Box 2 js -->
<script src="assets/plugins/lightbox2/dist/js/lightbox.js"></script>



</html>
