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
<div class="page1">
		<div class="container">
			<img src="<?php echo get_template_directory_uri() ?> /img/back.JPG">
			<h1>Backups de Dados </h1>
			<h2>Sua empresa precisa ter serviços de confiança</h2>
			<p>Nós trabalhamos com o que há de melhor em termos de backup, somando os benefícios do backup interno com backup externo, garantindo assim a redundância e a segurança necessária para sua empresa garantir a tranquilidade necessária e a continuidade dos negócios.
			</p>
			<p>Através de um software de última geração, nosso sistema de backup na nuvem realiza backups agendados de pastas e aplicações especificados. A interface é intuitiva, o que permite que qualquer pessoa realize as configurações, sem a necessidade de muitos conhecimentos técnicos.
			</p>
			<p>Além disso, as informações ficam armazenadas em datacenter de alta-disponibilidade, com a velocidade e a segurança que as informações da sua empresa necessitam.
			</p>
			<p>Para garantir ainda mais segurança, o backup também pode ser realizado de forma interna, em um servidor na sua própria empresa – tudo isso através de uma única solução de backup! Descarte qualquer hipótese de backups manuais ou através de fita, que despendem tempo e dinheiro e colocam sua empresa em risco.
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