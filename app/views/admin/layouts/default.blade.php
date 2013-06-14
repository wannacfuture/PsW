<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Administration
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
        {{ Basset::show('admin.css') }}

		<style>
		@section('styles')
		body {
			padding: 60px 0;
		}
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

	<body>
		<!-- Container -->
		<div class="container">
			<!-- Navbar -->
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li{{ (Request::is('admin') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin') }}}"><i class="icon-home icon-white"></i> Home</a></li>
								<li{{ (Request::is('admin/blogs*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs') }}}"><i class="icon-list-alt icon-white"></i> Blog</a></li>
								<li{{ (Request::is('admin/comments*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/comments') }}}"><i class="icon-bullhorn icon-white"></i> Comments</a></li>
								<li class="dropdown{{ (Request::is('admin/users*|admin/roles*') ? ' active' : '') }}">
									<a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/users') }}}">
										<i class="icon-user icon-white"></i> Users <span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/users') }}}"><i class="icon-user"></i> Users</a></li>
										<li{{ (Request::is('admin/roles*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/roles') }}}"><i class="icon-user"></i> Roles</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav pull-right">
								<li><a href="{{{ URL::to('/') }}}">View Homepage</a></li>
								<li class="divider-vertical"></li>
								<li>
									<div class="btn-group">
										<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
											<i class="icon-user"></i> {{{ Auth::user()->username }}}	<span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="{{{ URL::to('user/settings') }}}"><i class="icon-wrench"></i> Settings</a></li>
											<li class="divider"></li>
											<li><a href="{{{ URL::to('user/logout') }}}"><i class="icon-share"></i> Logout</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
						<!-- ./ nav-collapse -->
					</div>
					<!-- ./ container-fluid -->
				</div>
				<!-- ./ navbar-inner -->
			</div>
			<!-- ./ navbar -->

			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>
		<!-- ./ container -->

		<!-- Javascripts
		================================================== -->
        {{ Basset::show('admin.js') }}

        <script>
            $('.wysihtml5').wysihtml5();
        </script>

        <script type="text/javascript" charset="utf-8">
            $(prettyPrint);
        </script>
	</body>
</html>
