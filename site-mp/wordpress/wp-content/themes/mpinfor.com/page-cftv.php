
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
	<div class="page4">
		<div class="container">
			<img src="<?php echo get_template_directory_uri() ?> /img/camera.jpg" >
			<h1>Sistemas de Monitoramento CFTV </h1>
			<p>O sistema registra e armazena as imagens em nuvem ou em gravador local, permitindo acesso em tempo real por meio de computador, tablet ou smartphone, 24h por dia. Sistemas de Monitoramento CFTV estão passando por um constante estado de evolução, sempre crescente em termos tecnológicos e aplicativos tais como gravadores digital câmeras de segurança com maior resolução e etc. Hoje é possível ter o sistema todo formalizado digitalmente e usufruir mais uma facilidade da era cibernética. Já o perímetro interno de televisão não é mais apenas um simples conjunto de monitoramento CFTV
			</p>
			<p>A fim de proporcionar soluções de segurança confiável e com equipamentos de ponta, a EraInfo realiza desde o projeto até a implantação do sistema de CFTV agregando segurança, valor e confiabilidade ao seu negócio.
			</p>
			<p>Nossa empresa de CFTV possui profissionais especializados em Circuito Fechado de Televisão e desenvolve projetos para o sistema de câmeras de acordo com cada cliente, pensando estrategicamente nos pontos onde as câmeras serão localizadas.
			</p>
			<ul>
				<li>Proteger patrimônio contra atos de vandalismo;</li>
				<li>*Controlar o acesso às áreas de uso comum;</li>
				<li>*Identificar pessoas e veículos que entram e saem do empreendimento diariamente;</li>
				<li>Vigiar os pontos de possível acesso de meliantes ao interior do empreendimento;</li>
				<li>*Zelar pelo correto funcionamento de guaritas e recepções;</li>
				<li>*Possibilitar que as imagens anteriormente citadas sejam perfeitamente nítidas 24 horas por dia, 7 dias por semana, 365 dias por anos, seja dia, seja noite.</li>
				<li>*Possibilitar que os equipamentos responsáveis pelo monitoramento das imagens estejam protegidos contra vandalismo, quebra proposital ou roubo (assalto), manipulação de imagens e ação de deterioração (poeira excessiva, umidade, altas temperaturas, entre outros);</li>
				<li>*Por último e não menos importante, possibilitar que o sistema funcione por no mínimo 1(uma) hora em caso de falta de energia elétrica convencional.</li>
			</ul>
			<a class="btn" href="http://localhost/site-mp/wordpress/#">voltar</a>
		</div>
	</div>
 <?php the_content();?>
 <h1></h1>
 <?php  endwhile; else: ?>

 <?php
 	endif;


 ?>