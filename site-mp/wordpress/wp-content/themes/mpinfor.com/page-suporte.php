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
<div class="page2">
		<div class="container">
			<img src="<?php echo get_template_directory_uri() ?> /img/suport.JPG">
			<h1>Suporte</h1>
			<p>Sua empresa precisa ter serviços de confiança

       O objetivo do Contrato de Suporte é essencialmente utilizar e apoiar à todos os problemas e incidentes em uma organização. Um processo simples e eficiente para qualquer tipo de organização.
     </p>
     <p>O contrato de suporte com a MPINFOR.COM, é a garantia de suporte para solução rápida dos problemas, por, On Line ou On Site, os atendimentos são realizados por profissionais qualificados, o nosso contrato de suporte visa a redução de custos com manutenção, agregando novas soluções na estrutura de TI de nossos clientes.
     </p>
     <p>A vantagem é que sua empresa sempre contará com uma consultoria permanente na área de infraestrutura de TI , manter especialistas em várias áreas de tecnologia dentro da empresa é injustificável pelo custo, a equipe de HelpDesk da Erainfo é treinada e especializada nas multiplas plataformas tecnológicas de mercado e nos diferentes segmentos de clientes atendidos, o que garante especialidade e qualidade no atendimento.
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