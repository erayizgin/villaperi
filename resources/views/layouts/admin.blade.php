<!DOCTYPE html>
<html>
<head>@include('includes.adminhead')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		@include('includes.adminbodyheader')
		<!-- Left side column. contains the logo and sidebar -->
		@include('includes.adminsidebar')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>@yield('title')</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
					<li class="active">@yield('title')</li>
				</ol>
			</section>
			
			<!-- Main content -->
			<section class="content">
				<div class="row">@yield('content')</div>
				<!-- ./row -->
			</section>
			<!-- /.content -->
		</div>

		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.4.0
			</div>
			<strong>Copyright &copy; 2018.</strong> All rights reserved.
		</footer>

		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	@include('includes.adminjstemplate')
</body>
</html>
