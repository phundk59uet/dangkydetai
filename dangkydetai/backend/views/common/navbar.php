 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="vi" />
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header" style="height: 60px;>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="admin.php"><i><img style="width: 50px; margin-top:-10px;" src="./pictures/logo.png" /></i> QUẢN LÝ ĐĂNG KÝ ĐỀ TÀI</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php if(isset($user)): ?>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['name'];?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="admin.php?controller=home&amp;action=logout"><i class="glyphicon glyphicon-off"></i> Exit</a></li>
					</ul>
				</li>
			</ul>
			<?php endif; ?>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>