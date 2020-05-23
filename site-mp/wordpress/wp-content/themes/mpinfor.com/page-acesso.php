 <?php
 	if (have_posts()) : while ( have_posts()) : the_post(); 
 ?>
<!DOCTYPE html>
<html>
<head>
 <title><?php wp_title('name'); ?> - <?php bloginfo('description'); ?></title>
  	<meta charset="<?php bloginfo('charset'); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"media="all" type="text/css"/>
  	<link rel="alternate" type="application/rss+xml" title="RSS 2.0"href="<?php bloginfo('rss2_url');?>"/>
	  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url');?>" />
	  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
<div class="page5">
		<div class="container">
			<img src="<?php echo get_template_directory_uri() ?> /img/controle-acesso.jpg" >
			<h1>Controle de acesso</h1>
			<p> A MPINFOR.COM junto com o  controle de acesso ira trazer para sua empresa segurança, em fluxos de grande
         numeros de pessoras, podendo assim controlar o acesso.
			</p>
			<p>O controlador de acesso cuida da segurança de prédios, estabelecimentos comerciais, indústrias, condomínios, entre outros lugares. Ele faz a gestão do controle de acesso externo e geralmente fica do lado de fora do condomínio, identificando, orientando e encaminhando as pessoas para os lugares desejados
			</p>
			<h2>Objetivo</h2>
			<p>O objetivo do controle de acesso físico não é proibir ou dificultar o acesso, mas controlá-lo. ... Um bom sistema de controle de acesso físico deve ser capaz de assegurar a entrada fácil e simplificada, das pessoas devidamente autorizadas, e detectar e/ou impedir o acesso de pessoas não autorizadas.
			</p>
			<br>
			<a class="btn" href="http://localhost/site-mp/wordpress/#">voltar</a>
		</div>
	</div>
		
 <?php the_content();?>
 <h1></h1>
 <?php  endwhile; else: ?>

 <?php
 	endif;


 ?>\