<?php
  require 'modules/header.php';
?>
<body class="template page home">
  <header class="site-header">
    <div class="container header-grid">
      <div class="nav-bar">
        <div class="logo">
          <h2>ST</h2>
        </div>
        <nav class="main-menu">
          <ul id="menu-items">
            <li class="menu-item"><a href="../cv/#about-me">About Me</a></li>
            <li class="menu-item"><a href="../cv/#work-experience">Work Experience</a></li>
            <li class="menu-item"><a href="../cv/#education">Education</a></li>
            <li class="menu-item"><a href="../cv/#skills">Skills</a></li>
            <li class="menu-item"><a href="portfolio.php">Portfolio</a></li>
            <li class="menu-item"><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="tagline txt-center">
        <h1>Lets Make Something Great</h1>
        <p>I'm a Web Developer, working with a great company to give services of development to brands as Extralum, Sondel</p>
        <a class="button btn-primary" href="#">Hire Me!</a>
      </div>
    </div>
  </header>
  <main id="portfolio" class="main-info mt-5">
    <div class="container">
      <div class="row">

        <div class="main-info__title pb-5">
          <h2 class="title">Portfolio</h2>
        </div>
        <div class="c-portfolio-grid">
          <div class="col-lg-6 col-md-6 col-xs-12 mb-5">
            <a href="#">
              <img class="c-portfolio-grid__img" src="img/Edsawind-Homepage-1.jpg" alt="">
            </a>
            <div class="c-portfolio-grid__info">
              <h3 class="c-portfolio-grid__title">Edsawind Website</h3>
              <h4 class="c-portfolio-grid__subtitle">Lorem ipsum dolor ameit sit.</h4>
              <a class="c-portfolio-grid__link" href="https://edsawind.com" target="_blank">View project ></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 mb-5">
            <a href="#">
              <img class="c-portfolio-grid__img" src="img/planticas-home.jpg" alt="">
            </a>
            <div class="c-portfolio-grid__info c-portfolio-grid__info--alt">
              <h3 class="c-portfolio-grid__title">Planticas Ecommerce</h3>
              <h4 class="c-portfolio-grid__subtitle">Lorem ipsum dolor ameit sit.</h4>
              <a class="c-portfolio-grid__link" href="https://planticascr.com" target="_blank">View project ></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 mb-5">
            <a href="#">
              <img class="c-portfolio-grid__img" src="img/Edsawind-Homepage-1.jpg" alt="">
            </a>
            <div class="c-portfolio-grid__info c-portfolio-grid__info--darkGray">
              <h3 class="c-portfolio-grid__title">Edsawind Website</h3>
              <h4 class="c-portfolio-grid__subtitle">Lorem ipsum dolor ameit sit.</h4>
              <a class="c-portfolio-grid__link" href="#">View project ></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 mb-5">
            <a href="#">
              <img class="c-portfolio-grid__img" src="img/planticas-home.jpg" alt="">
            </a>
            <div class="c-portfolio-grid__info ">
              <h3 class="c-portfolio-grid__title">Planticas Ecommerce</h3>
              <h4 class="c-portfolio-grid__subtitle">Lorem ipsum dolor ameit sit.</h4>
              <a class="c-portfolio-grid__link" href="#">View project ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php
  require 'modules/contact.php';
  require 'modules/footer.php';
?>
