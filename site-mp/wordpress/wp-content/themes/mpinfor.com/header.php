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
	  <script type="text/scripts.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<header class="main-header">
	    <div class="btn_menu">	</div>
			<div class="barra-topo">
				<div class="container">
					<div class="logo">
             <img src="<?php echo get_template_directory_uri() ?> /img/logo-1.png" >
			  	</div>
					<nav class="menu ">
						<a class="bt_close">x</a>
						<ul>
						 <li id="home"><a href="#home">Home</a></li>
						 <li><a href="#sobr">Empresa</a></li>
						 <li><a href="#l">Serviços</a></li>
						 <li><a href="#palano">Planos</a></li>
						 <li><a href="#supor-te">Suporte</a></li>
						 <li><a href="#conta-to">Contato</a></li>
						</ul>
					</nav>
				</div>				
			</div>	
		</header>
		<section class="banner">
			<div>
				<img src="<?php echo get_template_directory_uri() ?> /img/ban-ner.jpg">
			</div>
		</section>
    <script >
     var menuItens= document.querySelectorAll('.menu a[href^="#"]');

      menuItens.forEach(item =>{
    	item.addEventListener('click', scrollToIdOnClick);
      })
     function scrollToIdOnClick(event){
	   event.preventDefault();
	   const element = event.target;
	   const id = element.getAttribute('href');
	   const to = document.querySelector(id).offsetTop;
		 window.scroll({

		 top: to-38,
				behavior: "smooth",
			});

		}

	</script>
	<script>
		
    const $menu = document.querySelector('.menu')
		const $btn_menu = document.querySelector('.btn_menu')
		const $bt_close = document.querySelector('.bt_close')
		
		
		$btn_menu.addEventListener('click', function(){
			$menu.classList.add('btn_menu')
		})

		$bt_close.addEventListener('click', function(){
			$menu.classList.remove('btn_menu')
		})


		
	</script>
