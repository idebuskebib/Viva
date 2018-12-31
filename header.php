<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|',true ,'right');?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<?php wp_head();?>
</head>
<body>
	
	<nav class="navbar navbar-expand-lg">
		  <a class="navbar-brand" href="#"> <img src="<?php echo get_template_directory_uri().'/image/logo.png';?>" class="img-responsive"> </a>
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
				      <li class="nav-item active">
				        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        	<a class="nav-link" href="#">Link</a>
				      </li>
				      <li class="nav-item dropdown">
				        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Dropdown
				        	</a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">Action</a>
					          <a class="dropdown-item" href="#">Another action</a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="#">Something else here</a>
				        	</div>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				      </li>
			    </ul>
		    
		  </div>
</nav>
