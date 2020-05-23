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
<div class="page">
		<div class="container">
			<img src="<?php echo get_template_directory_uri() ?> /img/índice.JFIF" >
		<h1>Rede de Computadores e Servidores </h1>
		<p>Sua empresa precisa ter serviços de confiança
				Nada como ter na empresa uma infraestrutura de redes baseada em organização e padrões de rede, de seus equipamentos e do cabeamento, visando não somente performance e confiabilidade, mas também a integração de serviços de dados e voz.
				Com o cabeamento estruturado, sua empresa pode usufruir destes benefícios e de tantos outros. Contar com uma empresa com anos de experiência na instalação de cabeamento estruturado só lhe trás garantias de que os benefícios listados acima serão integralmente aproveitados.
			</p>
			<p>
				A Erainfo utiliza mão de obra especializada na implantação de projetos de cabeamento estruturado, instalações e reparos de infraestrutura para rede de computadores. Todo cabeamento realizado por nós passa por processos de identificação, mapeamento e certificação, garantindo padronização, confiança e segurança na transmissão de dados.

				Serviços oferecidos em cabeamento estruturado:
				<br>
				• Elaboração e execução de projetos de cabeamento estruturado com entrega de "As Built";
				<br>
				• Dimensionamento de equipamentos, estrutura e sua viabilidade técnica;
				<br>
				• Projeto, instalação e conectorização de redes em fibra óptica;
				<br>
				• Projeto, instalação e manutenção de redes elétricas estabilizadas para Informática;
				<br>
				• Projeto, instalação e manutenção de redes para telefonia;
				<br>
				• Projetos físicos e lógicos;
				<br>
				• Cabeamento UTP e STP nas categorias 5, 5e e 6 e cabeamento óptico;
				<br>
				• Passagem de cabeamento;
				<br>
				• Instalação de pontos de redes adicionais;
				<br>
				• Mapeamento de rede e de cabeamento estruturado;
				<br>
				• Identificação, certificação e mapeamento de redes Cat5e, Cat6 e fibra óptica;
				<br>
				• Montagem de racks com projeto de otimização empregando Switches KVM e mesa de controle;
				<br>
				• Organização de CPDs e racks;
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