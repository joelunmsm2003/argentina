<?php include('head.php'); ?>

<body class="<?= 's_'.SECCION ?>">

<header class="cabecera" id="home">
  <div class="cont">
    <a href="<?=url('home')?>" class="anim-suave">
      <h1>Solutions RD</h1>
      <img class="logo" src="images/solutions-rd.svg" alt="<?= Config::obtener('empresa')->nombre ?>">  
    </a>  
    <button class="hamburger hamburger-efecto">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <div class="navegaciones">
      <nav class="nav-principal">
        <ul>
          <li><a href="<?=url('quienes-somos')?>" class=" <?= SECCION == 'quienes-somos' ? 'activo' : '' ?> "><?=  __('nav quienes'); ?></a></li>
          <li><a href="<?=url('telecomunicaciones')?>" class=" <?= SECCION == 'telecomunicaciones' ? 'activo' : '' ?> "><?=  __('nav telecomunicaciones'); ?></a></li>
          <li><a href="<?=url('automatizacion')?>" class=" <?= SECCION == 'automatizacion' ? 'activo' : '' ?> "><?=  __('nav automatizacion'); ?></a></li>
          <li class="visible-mobile">
            <a href="<?=url('novedades')?>" class=" <?= SECCION == 'novedades' ? 'activo' : '' ?> ">
              <?=  __('nav novedades'); ?>                    
            </a>
          </li>
          <li><a href="<?=url('contacto')?>" class=" <?= SECCION == 'contacto' ? 'activo' : '' ?> "><?=  __('nav contacto'); ?></a></li>
        </ul>
      </nav>
      <nav class="nav-secundaria">
        <ul>
          <li>
            <a class="home" href="<?=url('home')?>" class=" <?= SECCION == 'home' ? 'activo' : '' ?> ">
              <i class="icon-home"></i>                  
            </a>
          </li>
          <li class="visible-desktop">
            <a href="<?=url('novedades')?>" class=" <?= SECCION == 'novedades' ? 'activo' : '' ?> ">
              <?=  __('nav novedades'); ?>                    
            </a>
          </li>
          <li class="idioma">
            <a href="<?=url(SECCION, null, ((IDIOMA == 'es') ? 'en' : 'es'))?>">
              <?=(IDIOMA == 'es') ? 'es' : '<span>es</span>'?>
            </a> |
            <a href="<?=url(SECCION, null, ((IDIOMA == 'en') ? 'es' : 'en'))?>">
              <?=(IDIOMA == 'en') ? 'en' : '<span>en</span>'?>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

</header>

<main>