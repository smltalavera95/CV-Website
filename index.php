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
              <li class="menu-item"><a href="#about-me">About Me</a></li>
              <li class="menu-item"><a href="#work-experience">Work Experience</a></li>
              <li class="menu-item"><a href="#education">Education</a></li>
              <li class="menu-item"><a href="#skills">Skills</a></li>
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
    <main id="about-me" class="main-info mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="main-info__title">
              <h2 class="title">About Me</h2>
              <div class="line__bottom">
              </div>
            </div>
            <div class="main-info__paragraph">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="main-info__data">
              <ul class="data__list">
                <li class="list__element"><strong>Name:</strong> Samuel Talavera</li>
                <li class="list__element"><strong>Age:</strong> 25</li>
                <li class="list__element"><strong>Email:</strong> <a href="mailto:smltalavera.95@gmail.com" target="_blank">smltalavera.95@gmail.com</a></li>
                <li class="list__element"><strong>Github:</strong> <a href="https://github.com/smltalavera95?tab=repositories" target="_blank"> @smltalavera95</a></li>
                <li class="list__element"><strong>Location:</strong> Costa Rica</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="profile-img"></div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div id="work-experience" class="work-experience">
      <div class="container">
        <div class="row border-top pt-3">
          <div class="title mb-5">
            <h2>Work Experience</h2>
          </div>
          <div class="timeline">
            <div class="timeline__container timeline__container--left">
              <div class="timeline__content">
                <h3 class="timeline__content--title-position">Web Developer <span class="timeline--company">@ My Coder Web </span></h3>
                <h4 class="timeline__content--title-flamenco">June 2018 - Present</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </div>
            <div class="timeline__container timeline__container--right">
              <div class="timeline__content">
                <h3 class="timeline__content--title-position">Freelancer Web Developer</h3>
                <h4 class="timeline__content--title-flamenco">June 2017 - June 2018</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </div>
            <div class="timeline__container timeline__container--left">
              <div class="timeline__content">
                <h3 class="timeline__content--title-position">Technician Support</h3>
                <h4 class="timeline__content--title-flamenco">May 2015 - June 2017</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="education" class="education">
      <div class="container">
        <div class="row border-top pt-3">
          <div class="title mb-5">
            <h2>Education</h2>
          </div>
          <div class="timeline">
            <div class="timeline__container timeline__container--right">
              <div class="timeline__content">
                <h3 class="timeline__content--title-position">Bachelor in Engeneering Information Of Technologies <span class="timeline--company">@ Universidad Tecnica Nacional </span></h3>
                <h4 class="timeline__content--title-flamenco">January 2014 - June 2020 </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </div>
            <div class="timeline__container timeline__container--left">
              <div class="timeline__content">
                <h3 class="timeline__content--title-position">Secondary <span class="timeline--company">@ Liceo Laboratorio de Liberia </span> </h3>
                <h4 class="timeline__content--title-flamenco">2009 - 2013</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="skills" class="skills">
      <div class="container">
        <div class="row">
          <div class="skills__title">
            <h2 class="title">My Skills</h2>
          </div>
          <div class="skills__progress">
            <div class="skills__col">
              <div class="skill__info">
                <h3>User Experience</h3>
                <div class="container__skills-bar">
                  <div class="skill__bar skill__bar--striped">
                    <div class="bar__progress" style="width:80%;">
                    </div>
                  </div>
                  <p class="skill__percent"> 80%
                  </p>
                </div>
              </div>
              <div class="skill__info">
                <h3>User Experience</h3>
                <div class="container__skills-bar">
                  <div class="skill__bar skill__bar--striped">
                    <div class="bar__progress" style="width:80%;">
                    </div>
                  </div>
                  <p class="skill__percent"> 80%
                  </p>
                </div>
              </div>
              <div class="skill__info">
                <h3>User Experience</h3>
                <div class="container__skills-bar">
                  <div class="skill__bar skill__bar--striped">
                    <div class="bar__progress" style="width:80%;">
                    </div>
                  </div>
                  <p class="skill__percent"> 80%
                  </p>
                </div>
              </div>
            </div>

            <div class="skills__col">
              <div class="skill__info">
                <h3>User Experience</h3>
                <div class="container__skills-bar">
                  <div class="skill__bar skill__bar--striped">
                    <div class="bar__progress" style="width:80%;">
                    </div>
                  </div>
                  <p class="skill__percent"> 80%
                  </p>
                </div>
              </div>
              <div class="skill__info">
                <h3>User Experience</h3>
                <div class="container__skills-bar">
                  <div class="skill__bar skill__bar--striped">
                    <div class="bar__progress" style="width:80%;">
                    </div>
                  </div>
                  <p class="skill__percent"> 80%
                  </p>
                </div>
              </div>
              <div class="skill__info">
                <h3>User Experience</h3>
                <div class="container__skills-bar">
                  <div class="skill__bar skill__bar--striped">
                    <div class="bar__progress" style="width:80%;">
                    </div>
                  </div>
                  <p class="skill__percent"> 80%
                  </p>
                </div>
              </div>
            </div>
          </div><!--Skills Progress-->
        </div>
      </div>
    </div> <!--Skills -->


  <?php
  require 'modules/contact.php';
  require 'modules/footer.php';
  ?>
