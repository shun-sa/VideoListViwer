<div id=navbar>
			<nav class="navbar navbar-default banner">
				<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation </span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="."><i class="glyphicon glyphicon-align-justify"></i> VideoListViwer</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php $main_frag = (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false);?>
				<?php if ($main_frag) : ?>
				<form class="navbar-form navbar-right" method="get" action="." >
					<div class="input-group">
					<input type="hidden" name="s_key", value="title">
					<input type="text" class="form-control" placeholder="Search" name="s_word" value=<?php echo (array_key_exists("title",(array)getKeySearchQuery()))?getKeySearchQuery()["title"] :"" ; ?> >
					<div class="input-group-btn">
					<button class="btn btn-default" type="submit">
						<i class="glyphicon glyphicon-search"></i>
					</button>
					</ul>
					</div>
					</div>
				</form>
				<?php endif; ?>
				<ul class="nav navbar-nav navbar-left navbar-nav-primary">
					<li class="active"><a href=".">Home </a></li>
					<li ><a href="setting.php">Setting</a></li>
					<li><a href="#">Downloading <span class="badge ">2 </span></a></li>
				</ul>
				</div>
				<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>
		</div>