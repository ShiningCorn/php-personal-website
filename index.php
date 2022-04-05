<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="css/general.css">
      <link rel="stylesheet" href="css/index_style.css">

      <!-- IONIC ICONS -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <!-- connect to data base  -->
      <php require 'database/connect.php'?> 
    
      <title>Minh Mike Ngo</title>

  </head>
  <body>
  <?php include 'components/header.php'?>
    <main>
      <section class="section-intro">
          <div class="intro">
            <div class="intro-description">
              <h1>
                I am passionate about technology,<br> innovation and automation.
              </h1>
              <a class="btn btn--full margin-right-sm"" href="index.php#section-aboutme">About Minh</a>
              <a class="btn btn--full margin-right-sm" href="index.php#contact">Contact Minh<a>
            </div>
          </div>
          
      </section>

      <section class="section-about-me" id="section-aboutme">
          <h2>About me</h2>
          <div class="container grid grid--2-cols grid--center-v margin-bottom-md">
              <div class="about-me-text">              
                  <h4>Creative thinking never ends...</h4>
                  <p>Graduated with my Bachelor's in Computer Science with a concentration in Software Development. I also have Adobe Certified Professional in Visual Design Using Adobe Photoshop and advanced HTML5/CSS3 certifications.<br><br>While in school, I was the member of our tech club where we did projects using Unity, React, Angular and so much more. In 2018-2019, me and my team were the winner's of Game Development Tournament and Software Design Cup in University of Houston.  
                  </p>
                  
              </div>

              <div class="container grid grid--3-cols gallery">
                  <figure class="gallery-item">
                      <img
                      src="img/team-up.jpg"
                      alt="team-up"
                      />
                  </figure>
                  <figure class="gallery-item">
                      <img
                      src="img/design.jpg"
                      alt="design"
                      />
                  </figure>
                  <figure class="gallery-item">
                      <img
                      src="img/workplace.jpg"
                      alt="workplace"
                      />
                  </figure>
                  <figure class="gallery-item">
                      <img
                      src="img/agile-model.png"
                      alt="agile-model"
                      />
                  </figure>
                  <figure class="gallery-item">
                      <img
                      src="img/v-diagram.jpg"
                      alt="v-diagram"
                      />
                  </figure>
                  <figure class="gallery-item">
                      <img
                      src="img/software-diagram.jpg"
                      alt="software-diagram"
                      />
                  </figure>
                  <figure class="gallery-item">
                      <img
                      src="img/adobe.png"
                      alt="adobe"
                      />
                  </figure>
                  <figure class="gallery-item">
                      <img
                      src="img/web-design.png"
                      alt="web-design"
                      />
                  </figure>
                  <figure class="gallery-item">
                      <img
                      src="img/web-design-2.png"
                      alt="web-design-2"
                      />
                  </figure>
              </div>
          </div>

      </section>

      <section class="section-skill" id="section-skill">
          <div class="row">
              <h2> My Skills</h2>
              <div class="container grid grid--1-cols grid--center-v">
                  <ul class="work-skill">
                      <li>Fast learner.</li>
                      <li>Fresh-minded ideas. </li>
                      <li>Ability to focus and learn new technology.</li>
                      <li>Take ideas and turn into Innovative Software.</li>
                      <li>Creative graphic design and UI applications.</li>
                      <li>Ability to work in high-pressure environments.</li>

                  </ul>
              </div>
          </div>
          <div class="container grid grid--4-cols grid--center-v">
            <div class="feature">
              <ion-icon class= "icon-big" name="code-slash-outline"></ion-icon>
              <h3>Frontend</h3>
              <ul class="programming-skill">
                  <li>HTML5, CSS3, SASS.</li>
                  <li>Bootstrap, Foundation.</li>
                  <li>JavaScript, JQuerry, AJAX.</li>
                  <li>React, Angular.</li>
              </ul>
              </p>
            </div>
            <div class="feature">
              <ion-icon class= "icon-big" name="file-tray-stacked-outline"></ion-icon>
              <h3>Backend</h3>
                  <ul class="programming-skill">
                      <li>Python, Java, TDD.</li>
                      <li>PHP/MySQL, PHPMyAdmin.</li>
                      <li>MERN Stack, LAMP Stack.</li>
                      <li>Express.js, Feathersjs.</li>
                  </ul>
              </p>
            </div>
            <div class="feature">
              <ion-icon class= "icon-big" name="desktop-outline" ></ion-icon>
              <h3>Technologies</h3>
                  <ul class="programming-skill">
                      <li>Visual Studio, VS Code.</li>
                      <li>IntelliJ, PyCharm.</li>
                      <li>Unity, Microsoft Office.</li>
                      <li>Photoshop, Adobe Creative Cloud, Illutrator.</li>
                  </ul>
            </div>
            <div class="feature">
              <ion-icon class= "icon-big" name="trending-up-outline" ></ion-icon>
              <h3>Development</h3>
                  <ul class="programming-skill">
                      <li>Agile Software Development</li>
                      <li>Azure, DevOps, Azure Repo</li>
                      <li>Cpanel, WHM, Azure Portal.</li>
                      <li>SourceTree, Git, Github, TortoiseSVN, FileZilla.</li>
                  </ul>
            </div>
          </div>
          </div>
      </section>
    
      <section class="section-portfolio" id="section-portfolio">
        <h2>Portfolio</h2>        
        <div class="container grid grid--3-cols margin-bottom-md">
          <div class="experience">
            <img
              src="img/personal-website.png"
              alt="Personal Website"
            />
            <div class="experience-content">
              <div class="experience-tags">
                <span class="tag tag--frontend">HTML5</span>
                <span class="tag tag--frontend">CSS3</span>
                <span class="tag tag--frontend">JavaScript</span>
                <span class="tag tag--backend">PHP</span>
                <span class="tag tag--mix">MySQL</span>
              </div>
              <p class="experience-title">Personal Website</p>
              <ul class="experience-attributes">
                <li>Designed and built website from scratch using HTML5, CCS3 and vanilla JavaScript.</li>
                <li>Used XAMPP, PHP, PHPMyAdmin and MySQL to host up a dynamic website.</li>
                <li>Created Contact Form with AJAX jQuery, Bootstrap, PHP and MySql </li>
                <li>Deployed project from GitHub Repo into Azure App Services</li>
              </ul>
            </div>
          </div>

        <div class="experience">
            <img
              src="img/campzia.png"
              alt="Campzia"
            />
            <div class="experience-content">
              <div class="experience-tags">
                <span class="tag tag--frontend">HTML5</span>
                <span class="tag tag--frontend">CSS3</span>
                <span class="tag tag--frontend">JavaScript</span>
                <span class="tag tag--frontend">Bootstrap</span>
              </div>
              <p class="experience-title">Junior Software Engineer at Campzia</p>
              <ul class="experience-attributes">
              </ul>
            </div>
          </div>

          <div class="experience">
            <img
              src="img/mean.jpg"
              alt="MEAN Stack"
            />
            <div class="experience-content">
              <div class="experience-tags">
                <span class="tag tag--frontend">Angular</span>
                <span class="tag tag--backend">NodeJS</span>
                <span class="tag tag--mix">TDD</span>
                <span class="tag tag--mix">Git</span>
                <span class="tag tag--mix">MongoDB</span>
              </div>
              <p class="experience-title">MEAN Stack Project</p>
              <ul class="experience-attributes">
                <li>Implemented web UI and back-end logic. </li>
                <li>Created and design data structure on MongoDB Atlas. </li>
                <li>Discussed with team members three times a week about project architecture and quality of code design. </li>
                <li>Maintained unit test 100% code coverage to ensure all components work as expected. </li>
                <li>Communicated with project sponsor from Halliburton two times a week to discuss requirements, report project progress and get feedback </li>
              </ul>
            </div>
          </div>

          <div class="experience">
            <img
              src="img/java.jpg"
              alt="Java Projects"
            />
            <div class="experience-content">
              <div class="experience-tags">
                <span class="tag tag--backend">Java</span>
                <span class="tag tag--mix">Test Driven Development</span>
                <span class="tag tag--mix">Svg SVN</span>
                <span class="tag tag--mix">Git</span>
              </div>
              <p class="experience-title">Java Projects</p>
              <ul class="experience-attributes">
                <li>Mastermind Game: the program uses JFrames and JButton from Java with Test First Development process. </li>
                <li>Fibocani Calculator: Four implementations of a function to compute the Fibonacci number at a given position. </li>
                <li>Find Net Stock Value: the program reads a text file with stock symbols then goes to the internet, gets its price, and prints the highest price, lowest price. </li>
              </ul>
            </div>
          </div>

        </div>
        <div class="github-link">
          
          <a class="link" href="https://github.com/ShiningCorn/" target="_blank" ><ion-icon class="logo-github" name="logo-github"></ion-icon>&nbsp Visit My Github &rarr;</a>
          
        </div>
      </section>
    </main>
    <?php include 'components/footer.php';?> 
  </body>
</html>
