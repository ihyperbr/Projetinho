<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<title>Projeto Básico</title>	
	<meta charset="utf-8" />
	<meta name="author" content="Bruno Costa C. ( iHyperBR )">
    <meta name="description" content="Um projeto para meu portfólio">
    <meta name="keywords" content="sites, web, desenvolvimento">
    <meta http-equiv="content-language" content="pt-br, en-US," />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
	<script src="<?php echo INCLUDE_PATH; ?>js/functions.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>	
</head>
<body>
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
	?>
<header>
	<div class="container">
	<div class="logo"><a href="/"></a></div><!--logo-->
	<nav class="desktop">
		<ul>
			<li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
			<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
			<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
		</ul>
	</nav>

	<nav class="mobile">
		<ul>
			<li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
			<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
			<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
		</ul>
	</nav>	
	<div class="clear"></div><!--clear-->
	</div><!--container-->
</header>


<?php
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
		if($url != '' && $url != ''){
			$pagina404 = true;
			include('pages/404.php');
		}else{
			include('pages/home.php');
		}
	}

?>

<footer>
	<div class="container">
		<p>Todos os direitos reservados</p>
		<p>hyperbrr@gmail.com</p>
		<div class="clear"></div>
	</div><!--container-->
</footer>
</body>
</html>