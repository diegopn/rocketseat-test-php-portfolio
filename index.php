<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PHP Test - Personal Portfolio</title>

    <!--
      - favicon
    -->
    <link href="./assets/images/logo.ico" rel="shortcut icon" type="image/x-icon">

    <!--
      - custom css link
    -->
    <link href="./assets/css/style.css" rel="stylesheet">

    <!--
      - google font link
    -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

<!--
  - #MAIN
-->

<main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

        <div class="sidebar-info">

            <figure class="avatar-box">
                <img alt="Richard hanrick" src="./assets/images/my-avatar.png" width="80">
            </figure>

            <div class="info-content">
                <h1 class="name" title="Richard hanrick">Diego Pereira</h1>

                <p class="title">Wordpress Developer</p>
            </div>

            <button class="info_more-btn" data-sidebar-btn>
                <span>Show Contacts</span>

                <ion-icon name="chevron-down"></ion-icon>
            </button>

        </div>

        <div class="sidebar-info_more">

            <div class="separator"></div>

            <ul class="contacts-list">

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Email</p>

                        <a class="contact-link" href="mailto:diego@teologico.club">diego@teologico.club</a>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Birthday</p>

                        <time datetime="1982-06-23">June 07, 1996</time>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Location</p>

                        <address>Passo Fundo, RS, Brazil</address>
                    </div>

                </li>

            </ul>

            <div class="separator"></div>

            <ul class="social-list">

                <li class="social-item">
                    <a class="social-link" href="https://github.com/diegopn">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                </li>

                <li class="social-item">
                    <a class="social-link" href="https://www.linkedin.com/in/diegopn/">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>

                <li class="social-item">
                    <a class="social-link" href="https://instagram.com.br/diegopn_pereira/">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

            </ul>

        </div>

    </aside>


    <!--
      - #main-content
    -->

    <div class="main-content">

        <!--
          - #NAVBAR
        -->

        <nav class="navbar">

            <ul class="navbar-list">

                <li class="navbar-item">
                    <button class="navbar-link  active" data-nav-link>About</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Resume</button>
                </li>

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Portfolio</button>
                </li>

                <!--
                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Blog</button>
                </li>
                -->

                <li class="navbar-item">
                    <button class="navbar-link" data-nav-link>Contact</button>
                </li>

            </ul>

        </nav>


        <!--
          - #ABOUT
        -->

        <article class="about  active" data-page="about">

            <header>
                <h2 class="h2 article-title">About me</h2>
            </header>

            <section class="about-text">
                <p>
                    I have extensive experience in SEO and developing websites and blogs in Wordpress. I have completed
                    over 50 projects. I have worked with large companies such as Neon, Dootax, CTG Brasil and Café
                    Jaguari.
                </p>

                <p>
                    My job is to build your website so that it is functional and user-friendly but at the same time
                    attractive.
                    My aim is to bring across your message and identity in the most creative way. I created web design
                    for many famous brand companies.
                </p>
            </section>


            <!--
              - service
            -->

            <section class="service">

                <h3 class="h3 service-title">What i'm doing</h3>

                <ul class="service-list">

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img alt="Web development icon" src="./assets/images/icon-dev.svg" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Web development</h4>

                            <p class="service-item-text">
                                High-quality development of sites at the professional level.
                            </p>
                        </div>

                    </li>

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img alt="design icon" src="./assets/images/icon-design.svg" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">SEO</h4>

                            <p class="service-item-text">
                                Make sure your website is seen in search engines.
                            </p>
                        </div>

                    </li>

                    <li class="service-item">

                        <div class="service-icon-box">
                            <img alt="design icon" src="./assets/images/icon-design.svg" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">Hosting</h4>

                            <p class="service-item-text">
                                I manage hosting and ensure the security of your website.
                            </p>
                        </div>

                    </li>

                </ul>

            </section>


            <!--
              - testimonials
            -->

            <section class="testimonials">

                <h3 class="h3 testimonials-title">Testimonials</h3>

                <ul class="testimonials-list has-scrollbar">

                    <?php
                    require_once "./components/testimonials.php";

                    foreach (showTestimonials() as $testimonial) {
                        ?>
                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img alt="Jessica miller" data-testimonials-avatar src="<?= $testimonial["img"] ?>"
                                         width="60">
                                </figure>

                                <h4 class="h4 testimonials-item-title"
                                    data-testimonials-title><?= $testimonial["name"] ?></h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        <?= $testimonial["description"] ?>
                                    </p>
                                </div>

                            </div>
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </section>


            <!--
              - testimonials modal
            -->

            <div class="modal-container" data-modal-container>

                <div class="overlay" data-overlay></div>

                <section class="testimonials-modal">

                    <button class="modal-close-btn" data-modal-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                    <div class="modal-img-wrapper">
                        <figure class="modal-avatar-box">
                            <img alt="Daniel lewis" data-modal-img src="./assets/images/avatar-1.png" width="80">
                        </figure>

                        <img alt="quote icon" src="./assets/images/icon-quote.svg">
                    </div>

                    <div class="modal-content">

                        <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

                        <!--<time datetime="2021-06-14">14 June, 2021</time>-->

                        <div data-modal-text>
                            <p></p>
                        </div>

                    </div>

                </section>

            </div>


            <!--
              - clients
            -->

            <section class="clients">

                <h3 class="h3 clients-title">Clients</h3>

                <ul class="clients-list has-scrollbar">

                    <?php
                    require_once "./components/clients.php";

                    foreach (showClients() as $client) {
                        echo '
                            <li class="clients-item">
                                <a target="_blank" href="' . $client["url"] . '">
                                    <img alt="' . $client["name"] . '" src="' . $client["img"] . '">
                                </a>
                            </li>';
                    }
                    ?>

                </ul>

            </section>

        </article>


        <!--
          - #RESUME
        -->

        <article class="resume" data-page="resume">

            <header>
                <h2 class="h2 article-title">Resume</h2>
            </header>

            <section class="timeline">

                <div class="title-wrapper">
                    <div class="icon-box">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>

                    <h3 class="h3">Experience</h3>
                </div>

                <ol class="timeline-list">

                    <?php
                    require_once "./components/experience.php";

                    foreach (showExperiences() as $experience) {
                        ?>
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title"><?= $experience["job"] ?></h4>

                            <span><?= $experience["date-start"] ?> - <?= $experience["date-finish"] ?></span>

                            <p class="timeline-text">
                                <?= $experience["description"] ?>
                            </p>
                        </li>
                        <?php
                    }
                    ?>

                </ol>

            </section>

            <section class="timeline">

                <div class="title-wrapper">
                    <div class="icon-box">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>

                    <h3 class="h3">Education</h3>
                </div>

                <ol class="timeline-list">

                    <?php
                    require_once "./components/education.php";

                    foreach (showEducation() as $item) {
                        ?>
                        <li class="timeline-item">
                            <h4 class="h4 timeline-item-title"><?= $item["name"] ?></h4>
                            <span><?= $item["date-start"] ?> — <?= $item["date-finish"] ?></span>
                            <p class="timeline-text">
                                <?= $item["description"] ?>
                            </p>
                        </li>
                        <?php
                    }
                    ?>


                </ol>

            </section>

            <section class="skill">

                <h3 class="h3 skills-title">My skills</h3>

                <ul class="skills-list content-card">

                    <li class="skills-item">
                        <div class="title-wrapper">
                            <h5 class="h5">PHP</h5>
                            <data value="80">80%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 80%;"></div>
                        </div>
                    </li>

                    <li class="skills-item">
                        <div class="title-wrapper">
                            <h5 class="h5">SEO</h5>
                            <data value="70">70%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 70%;"></div>
                        </div>
                    </li>

                    <li class="skills-item">
                        <div class="title-wrapper">
                            <h5 class="h5">WordPress</h5>
                            <data value="90">90%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 90%;"></div>
                        </div>
                    </li>

                    <li class="skills-item">
                        <div class="title-wrapper">
                            <h5 class="h5">SCRUM</h5>
                            <data value="50">50%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 50%;"></div>
                        </div>
                    </li>

                </ul>

            </section>

        </article>


        <!--
          - #PORTFOLIO
        -->

        <article class="portfolio" data-page="portfolio">

            <header>
                <h2 class="h2 article-title">Portfolio</h2>
            </header>

            <section class="projects">

                <ul class="filter-list">

                    <li class="filter-item">
                        <button class="active" data-filter-btn>All</button>
                    </li>

                    <li class="filter-item">
                        <button data-filter-btn>Web design</button>
                    </li>

                    <li class="filter-item">
                        <button data-filter-btn>Applications</button>
                    </li>

                    <li class="filter-item">
                        <button data-filter-btn>Web development</button>
                    </li>

                </ul>

                <div class="filter-select-box">

                    <button class="filter-select" data-select>

                        <div class="select-value" data-selecct-value>Select category</div>

                        <div class="select-icon">
                            <ion-icon name="chevron-down"></ion-icon>
                        </div>

                    </button>

                    <ul class="select-list">

                        <li class="select-item">
                            <button data-select-item>All</button>
                        </li>

                        <li class="select-item">
                            <button data-select-item>Web design</button>
                        </li>

                        <li class="select-item">
                            <button data-select-item>Applications</button>
                        </li>

                        <li class="select-item">
                            <button data-select-item>Web development</button>
                        </li>

                    </ul>

                </div>

                <ul class="project-list">

                    <li class="project-item  active" data-category="web development" data-filter-item>
                        <a href="#">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img alt="finance" loading="lazy" src="./assets/images/project-1.jpg">
                            </figure>

                            <h3 class="project-title">Finance</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>

                    <li class="project-item  active" data-category="web development" data-filter-item>
                        <a href="#">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img alt="orizon" loading="lazy" src="./assets/images/project-2.png">
                            </figure>

                            <h3 class="project-title">Orizon</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>

                    <li class="project-item  active" data-category="web design" data-filter-item>
                        <a href="#">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img alt="fundo" loading="lazy" src="./assets/images/project-3.jpg">
                            </figure>

                            <h3 class="project-title">Fundo</h3>

                            <p class="project-category">Web design</p>

                        </a>
                    </li>

                    <li class="project-item  active" data-category="applications" data-filter-item>
                        <a href="#">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img alt="brawlhalla" loading="lazy" src="./assets/images/project-4.png">
                            </figure>

                            <h3 class="project-title">Brawlhalla</h3>

                            <p class="project-category">Applications</p>

                        </a>
                    </li>

                    <li class="project-item  active" data-category="web design" data-filter-item>
                        <a href="#">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img alt="dsm." loading="lazy" src="./assets/images/project-5.png">
                            </figure>

                            <h3 class="project-title">DSM.</h3>

                            <p class="project-category">Web design</p>

                        </a>
                    </li>

                    <li class="project-item  active" data-category="web design" data-filter-item>
                        <a href="#">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img alt="metaspark" loading="lazy" src="./assets/images/project-6.png">
                            </figure>

                            <h3 class="project-title">MetaSpark</h3>

                            <p class="project-category">Web design</p>

                        </a>
                    </li>

                    <li class="project-item  active" data-category="web development" data-filter-item>
                        <a href="#">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img alt="summary" loading="lazy" src="./assets/images/project-7.png">
                            </figure>

                            <h3 class="project-title">Summary</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>

                    <li class="project-item  active" data-category="applications" data-filter-item>
                        <a href="#">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img alt="task manager" loading="lazy" src="./assets/images/project-8.jpg">
                            </figure>

                            <h3 class="project-title">Task Manager</h3>

                            <p class="project-category">Applications</p>

                        </a>
                    </li>

                    <li class="project-item  active" data-category="web development" data-filter-item>
                        <a href="#">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img alt="arrival" loading="lazy" src="./assets/images/project-9.png">
                            </figure>

                            <h3 class="project-title">Arrival</h3>

                            <p class="project-category">Web development</p>

                        </a>
                    </li>

                </ul>

            </section>

        </article>


        <!--
          - #BLOG
        -->

        <!--
        <article class="blog" data-page="blog">

            <header>
                <h2 class="h2 article-title">Blog</h2>
            </header>

            <section class="blog-posts">

                <ul class="blog-posts-list">

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img alt="Design conferences in 2022" loading="lazy" src="./assets/images/blog-1.jpg">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                                <p class="blog-text">
                                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img alt="Best fonts every designer" loading="lazy" src="./assets/images/blog-2.jpg">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                                <p class="blog-text">
                                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img alt="Design digest #80" loading="lazy" src="./assets/images/blog-3.jpg">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Design digest #80</h3>

                                <p class="blog-text">
                                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam
                                    corporis suscipit.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img alt="UI interactions of the week" loading="lazy" src="./assets/images/blog-4.jpg">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                                <p class="blog-text">
                                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco
                                    laboris nisi.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img alt="The forgotten art of spacing" loading="lazy" src="./assets/images/blog-5.jpg">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                                <p class="blog-text">
                                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>

                            </div>

                        </a>
                    </li>

                    <li class="blog-post-item">
                        <a href="#">

                            <figure class="blog-banner-box">
                                <img alt="Design digest #79" loading="lazy" src="./assets/images/blog-6.jpg">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">Design</p>

                                    <span class="dot"></span>

                                    <time datetime="2022-02-23">Fab 23, 2022</time>
                                </div>

                                <h3 class="h3 blog-item-title">Design digest #79</h3>

                                <p class="blog-text">
                                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                                </p>

                            </div>

                        </a>
                    </li>

                </ul>

            </section>

        </article>
        -->


        <!--
          - #CONTACT
        -->

        <article class="contact" data-page="contact">

            <header>
                <h2 class="h2 article-title">Contact</h2>
            </header>

            <section class="contact-form">
                <ul class="contacts-list">

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Email</p>

                            <a class="contact-link" href="mailto:diego@teologico.club">diego@teologico.club</a>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Phone</p>

                            <a class="contact-link" href="tel:+55000000000">+55 (00) 00000-0000</a>
                        </div>

                    </li>

                </ul>
                <br/>
            </section>

            <section class="mapbox" data-mapbox>
                <figure>
                    <iframe
                            height="300"
                            loading="lazy"
                            src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Passo%20Fundo,%20RS+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            width="400"></iframe>
                </figure>
            </section>

            <!--
            <section class="contact-form">

                <h3 class="h3 form-title">Contact Form</h3>

                <form action="#" class="form" data-form>

                    <div class="input-wrapper">
                        <input class="form-input" data-form-input name="fullname" placeholder="Full name" required
                               type="text">

                        <input class="form-input" data-form-input name="email" placeholder="Email address" required
                               type="email">
                    </div>

                    <textarea class="form-input" data-form-input name="message" placeholder="Your Message"
                              required></textarea>

                    <button class="form-btn" data-form-btn disabled type="submit">
                        <ion-icon name="paper-plane"></ion-icon>
                        <span>Send Message</span>
                    </button>

                </form>

            </section>
            -->

        </article>

    </div>

</main>


<!--
  - custom js link
-->
<script src="./assets/js/script.js"></script>

<!--
  - ionicon link
-->
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>