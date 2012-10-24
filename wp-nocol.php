<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="<?php language_attributes() ?>" class="">
<!--<![endif]-->
<!--pelo Dreamweaver CS rola...-->
<!--glu, glu, yeah, yeah!!-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if (is_home () ) { bloginfo('name'); } elseif (is_category() || is_tag()) { single_cat_title(); echo ' &bull; ' ; bloginfo('name'); } elseif (is_single() || is_page()) { single_post_title(); } else { wp_title('',true); } ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon" />
<link href="<?php bloginfo('template_url'); ?>/css/boilerplate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
<!--<link rel="stylesheet" type="text/css" href="<?php //bloginfo('template_url'); ?>/css/login.css" /> para o login-->

<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
  
  	<div id="logo"></div>
    <div id="nav-topo">
   	  <!--<div id="busca">This is the content for Layout Div Tag "busca"</div>-->
     
      	<ul id="navegacao-principal">
            <li>
            	<a href="#" class="btn-ativo" title="Menu 1">Home</a>
            </li>
            <li>
            	<a href="#" title="Menu 2">Servi&ccedil;os</a>
            </li>
            <li>
            	<a href="#" title="Menu 3">Onononono</a>
            </li>
            <li>
            	<a href="#" title="Menu 4">Orçamento</a>
            </li>
            <li>
            	<a href="#" title="Menu 5">Contato</a>
            </li>
        </ul>
     
    </div><!--Fim do NAVEGACAO-PRINCIPAL-->
	<div id="slider">
   	  <div id="conteudo-slider">
      	<div id="legenda">
        	<div id="leg">
        		<h1>This is the content for Layout Div Tag "legenda".</h1>
            	<p>This is the content for Layout Div Tag "legenda". This is the content for Layout Div Tag "legenda".</p> 
            </div>       
        </div>
        <div id="imagem"><img class="imargem" src="img/monitor.png" alt="monitor" /></div>
      </div>
      <div id="nav-slider">This is the content for Layout Div Tag "nav-slider"</div>
    </div><!--fim do SLIDER-->
  
    <div id="corpo">
      <div class="home-cols">
      		<h1 class="h1-homecol">Mobile & Desktop</h1>
          	<img src="img/col1.png" alt="onon 1" class="img-homecol" />
            <p class="txt-homecol">
            	PEXCIL™ designs and develops websites for all browsers and devices, from desktop to tablet and mobile.
            </p>
      </div><!--fim das home-cols-->
      
      <div class="home-cols">
      		<h1 class="h1-homecol">Tempo</h1>
          	<img src="img/col2.png" alt="onon 2" class="img-homecol" />
         	 <p class="txt-homecol">
            	PEXCIL™ designs and develops websites for all browsers and devices, from desktop to tablet and mobile.
           	 </p>
      </div><!--fim das home-cols-->
      
      <div class="home-cols">
      		<h1 class="h1-homecol">Boas Pr&aacute;ticas</h1>
          	<img src="img/col3.png" alt="onon 3" class="img-homecol" />
            <p class="txt-homecol">
            	PEXCIL™ designs and develops websites for all browsers and devices, from desktop to tablet and mobile.
           	 </p>
      </div><!--fim das home-cols-->
        
      <div class="home-cols">
      		<h1 class="h1-homecol">Design e Gest&atilde;o</h1>
          	<img src="img/col4.png" alt="onon 4" class="img-homecol" />
            <p class="txt-homecol">
            	PEXCIL™ designs and develops websites for all browsers and devices, from desktop to tablet and mobile.
           	 </p>
      </div><!--fim das home-cols-->
    </div><!--fim do CORPO-->
  
  <div id="rodape">This is the content for Layout Div Tag "rodape"</div>
</div>
</body>
</html>