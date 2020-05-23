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
	<div class="page3">
		<div class="container">
			<img src="<?php echo get_template_directory_uri() ?> /img/sit.jpg" >
			<h1>Site responsivo</h1>
			<p>Criamos o seu site, de forma Profissional, tendo como objetivo de trazer informação através
         do seu site, podendo acessar de qualquer dispositivo. juntamente com uma equipe altamente 
         capacitada.
			</p>
			<p>Site ou layout responsivo, ou também conhecido como site flexível é quando o site automaticamente se encaixa no dispositivo do usuário (PC, celular, tablet, etc). Um site responsivo muda a sua aparência e disposição com base no tamanho da tela em que o site é exibido
			</p>
			<a class="btn" href="http://localhost/site-mp/wordpress/#">voltar</a>
		</div>
	</div>
 <?php the_content();?>
 <h1></h1>
 <?php  endwhile; else: ?>
 <?php
 	endif;
 ?>