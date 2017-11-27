<!doctype html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<title>Atleta.co</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width">
		<?php
		foreach ($controller->getCss() as $css)
		{
			echo '<link type="text/css" rel="stylesheet" href="'.(isset($css['remote']) && $css['remote'] ? NULL : PJ_INSTALL_URL).$css['path'].$css['file'].'" />';
		}
		
		foreach ($controller->getJs() as $js)
		{
			echo '<script src="'.(isset($js['remote']) && $js['remote'] ? NULL : PJ_INSTALL_URL).$js['path'].$js['file'].'"></script>';
		}
		?>
	</head>
	<body>
	<div class ="div_teste">
	
		<div  class="container-fluid">
		<div class="row">
		
				<div id="logo">
    				<a href="" target="_blank" rel="nofollow">Atleta.co</a>
					<span>v<?php echo PJ_SCRIPT_VERSION;?></span>
    			</div>
			
			
				<div id="login-content">
				<?php require $content_tpl; ?>
				</div>
			 <!-- middle -->
		 <!-- container -->
      
        </div>
		 
		</div>

		</div>
		

	</body>
</html>