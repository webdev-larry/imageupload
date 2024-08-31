<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wedding</title>
    <!--=================== Google Fonts ====================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">


    <!--=================== Remixicons ====================-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- AJAX  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--=================== SwiperJS CSS ====================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


    <!--=================== Main CSS ====================-->
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>

    <!--=================== Header ====================-->
    <header id="header" class="header">
        <div class="container">
            <nav class="nav">
                <a href="index.php" class="nav__brand">
                    <i class="fa-solid fa-scissors"></i>AMINN
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#hero" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="photogallery.php" class="nav__link">Anniversary Album</a>
                        </li>
                        <li class="nav__item">
                            <a href="#service" class="nav__link">Services</a>
                        </li>
                        <!-- <li class="nav__item">
                            <a href="#project" class="nav__link">Projects</a>
                        </li> -->
                        <li class="nav__item">
                            <a href="#contact"  class="nav__link">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="nav__toggle">
                    <i id="nav-toggle" class="ri-menu-3-line"></i>
                </div>
            </nav>
        </div>
    </header>
    <!--=================== main ====================-->
    <main class="main">
        <!--=================== Hero ====================-->
        <section id="hero" class="hero">
            <div class="container">
                <div class="d-grid hero__wrapper">
                    <div class="hero__content">
                        <h1 class="hero__title"><br>AAMIN</h1>
                        <p class="hero__description">A driven and dedicated Fashion designing and Bead making that brings your imaginaion to life.
                        </p>
                        <div class="hero__info">
                            <div class="hero__info-wrapper">
                                <p class="hero__info-number">25+</p>
                                <h2 class="hero__info-title">Years<br>Experience</h2>
                            </div>
                            <div class="hero__info-wrapper">
                                <p class="hero__info-number">10,000+</p>
                                <h2 class="hero__info-title">Projects<br>Completed</h2>
                            </div>
                            <div class="hero__info-wrapper">
                                <p class="hero__info-number">50+</p>
                                <h2 class="hero__info-title">Companies<br> Colaborated with</h2>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/CEO.jpg" alt="CEO" class="hero__img">
                </div>
            </div>
        </section>

        <!--=================== About ====================-->
        <section id="about" class="section about">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">About Us</h2>
                    <span class="section__subtitle">Who are we</span>
                </div>
                <div class="d-grid about__wrapper">
                    <div class="about__content">
                        <h3 class="about__title">We are Professional and Experienced in Fashion Designing and Bead Making.</h3>
                        <p class="about__description">We a strong focus on creating intuitive and efficient designs to meet the needs of clients and end-users.
                            We love to stay up-to-date with the latest design trends and imporiving our skills.
                            We always eager to take new challenges and work with a team to deliver exceptional results.
                        </p>
                        <!-- <a href="#project" class="btn btn--primary">Know More</a> -->
                    </div>
                    <div class="skills">
                        <h3 class="skills__title">Machines we I've been working with:</h3>
                        <div class="skills__wrapper">
                            <div class="skills__content">
                                <h4 class="skills__subtitle">Machines</h4>
                                <ul class="skills__list">
                                    <!-- <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        Python</li> -->
                                    <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        weeping machine</li>
                                    <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        industrial maching</li>
                                    <!-- <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        Firebase</li> -->
                                    <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        Pressing maching</li>
                                    <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        domestic sewing maching</li>
                                </ul>
                            </div>
                            <div class="skills__content">
                                <h4 class="skills__subtitle">Dealing/selling:</h4>
                                <ul class="skills__list">
                                    <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        Sewing Machines</li>
                                    <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        Beading materials</li>
                                    <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        Sewing Materials</li>
                                    <!-- <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        Bootstrap</li>
                                    <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        React</li>
                                    <li class="skills__item"><i class="ri-arrow-right-s-fill"></i>
                                        Github</li> -->
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=================== Qualification ====================-->
        <!-- <section id="qualification" class="section qualification">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Qualification</h2>
                    <span class="section__subtitle">Experience & Education</span>
                </div> -->
                <!--============== Professional Experience ============-->
                <!-- <div class="qualification__wrapper">
                    <h3 class="qualification__name">
                        <i class="ri-briefcase-fill"></i>
                        Professional Experience
                    </h3>
                    <div class="d-grid qualification__content"> -->
                        <!-- Experience 1-->
                        <!-- <div class="qualification__item">
                            <h3 class="qualification__title">Freelance software Developer</h3>
                            <p class="qualification__description">As a freelance software developer, I am passionate about creating innovative and effective software solutions thats meet the unique needs of my clients.
                                Whether it's building a custom web application or automating business processes, I bring expertise and creativity to every project, 
                                and I am always looking for new and challenging projects to tackle.
                            </p>
                            <span class="qualification__date">2021 - Present</span>
                        </div> -->
                        <!-- Experience 2-->
                        <!-- <div class="qualification__item">
                            <h3 class="qualification__title">Full Stack Developer Tutor</h3>
                            <p class="qualification__description">Taught at damson tech 
                                Front-end development (Hybrid).</p>
                            <span class="qualification__date">2022 - 2023</span>
                        </div> -->
                        <!-- Experience 3-->
                        <!-- <div class="qualification__item">
                            <h3 class="qualification__title">UI/UX Designer at Pinterest</h3>
                            <p class="qualification__description">Lorem ipsum dolor sit amet consectetur.
                                Facilisi vitae bibendum praesent sodales
                                urna vel molestie neque augue.</p>
                            <span class="qualification__date">2017 - 2019</span>
                        </div> -->
                    <!-- </div>
                </div> -->
                <!--============== Education ============-->
                <!-- <div class="qualification__wrapper">
                    <h3 class="qualification__name">
                        <i class="ri-booklet-fill"></i>
                        Education
                    </h3>
                    <div class="d-grid qualification__content"> -->
                        <!-- Education 1-->
                        <!-- <div class="qualification__item">
                            <h3 class="qualification__title">Computer Science</h3>
                            <p class="qualification__description">As a computer science student, I have a strong foundation in algorithms, data structures, software design and Development.
                                My coursework has provided me with a deep understanding of the principles and practices of computer science,
                                and I have honed my programming skills through various projects and assignments.
                            </p>
                            <span class="qualification__date">2023 - 2024</span>
                        </div> -->
                        <!-- Education 2-->
                        <!-- <div class="qualification__item">
                            <h3 class="qualification__title">Full Stack Developer</h3>
                            <p class="qualification__description">I was in the LIS software developer training program, 
                                where I was gaining hands-on experience in developing and designing software solutions. 
                                This intensive training provides me with a solid foundation in software development , 
                                learning the fundamentals of software development and building projects using PHP, Laravel MySQL.
                            </p>
                            <span class="qualification__date">2022 - 2023</span>
                        </div> -->
                        <!-- Education 3-->
                        <!-- <div class="qualification__item">
                            <h3 class="qualification__title">Software Engineer</h3>
                            <p class="qualification__description">Lorem ipsum dolor sit amet consectetur.
                                Facilisi vitae bibendum praesent sodales
                                urna vel molestie neque augue.</p>
                            <span class="qualification__date">2010 - 2014</span>
                        </div> -->
                    <!-- </div>
                </div> -->
                <!-- <div class="qualification__footer">
                    <p class="qualification__footer-text">See my full resume</p>
                    <a href="./assets/Abdulraman Quamdeen .pdf" download class="btn btn--primary">Resume</a>
                </div> -->
            <!-- </div>
        </section> -->

        <!--=================== services ====================-->
        <section id="service" class="section service">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Services</h2>
                    <span class="section__subtitle">What we do</span>
                </div>
                <div class="d-grid service__wrapper">
                    <!--========= service card 1 =========-->
                    <div class="service__card">
                        <div class="service__icon">
                            <i class="ri-layout-4-fill"></i>
                        </div>
                        <h3 class="service__title">Fashion<br>Designing</h3>
                        <!-- <a href="https://www.coursera.org/articles/front-end-developer#:~:text=A%20front%2Dend%20developer%20creates,by%20a%20front%2Dend%20developer." target="_blank" class="service__link">Know More</a> -->
                    </div>
                    <!--========= service card 2 =========-->
                    <div class="service__card">
                        <div class="service__icon">
                            <i class="ri-code-s-slash-line"></i>
                        </div>
                        <h3 class="service__title">Bead<br> Making</h3>
                        <!-- <a href="https://www.coursera.org/articles/back-end-developer" target="_blank" class="service__link">Know More</a> -->
                    </div>
                    <!--========= service card 3 =========-->
                    <div class="service__card">
                        <div class="service__icon">
                            <i class="ri-pen-nib-fill"></i>
                        </div>
                        <h3 class="service__title">Dealers in all kinds of <br> Beading & Sewing machines and materials</h3>
                        <!-- <a href="https://www.coursera.org/articles/full-stack-developer" target="_blank" class="service__link">Know More</a> -->
                    </div>
                </div>
            </div>
        </section>

        <!--=================== Projects ====================-->
        <!-- <section id="project" class="section project">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Projects</h2>
                    <span class="section__subtitle">My recent work</span>
                </div>
                <div class="d-grid project__wrapper"> -->
                    <!--============== project 1 =============-->
                    <!-- <div class="project__content">
                        <img src="assets/img/meetupfr.JPG" alt="E-meetup Website" class="project__img">
                        <h3 class="project__title">On-Going E-commerce Website</h3>
                        <p class="project__description">E-commerce Website website is adaptable to all devices, with 
                        ui components and animated interactions.</p>
                        <a href="#" class="project__link">View Project
                            <i class="ri-arrow-right-line"></i></a>
                    </div>
                    ============== project 2 =============-->
                    <!-- <div class="project__content">
                        <img src="assets/img/landing page.JPG" alt="Ecommerce Website " class="project__img">
                        <h3 class="project__title">Website Landing Page</h3>
                        <p class="project__description">virtual sim Landing page adaptable to all devices, 
                        with ui components and animated interactions.</p>
                        <a href="https://newriley.vercel.app/"  target="_blank" class="project__link">View Project
                            <i class="ri-arrow-right-line"></i></a>
                    </div> -->
                    <!--============== project 3 =============-->
                    <!-- <div class="project__content">
                        <img src="assets/img/chatappp.JPG" alt="Chat Web-app" class="project__img">
                        <h3 class="project__title">On-going Chat Web-app</h3>
                        <p class="project__description">Website dashboard adaptable to all devices, 
                        with ui components and animated interactions.</p>
                        <a href="#" target="_blank" class="project__link">View Project
                            <i class="ri-arrow-right-line"></i></a>
                    </div> -->
                    <!-- ============== project 4 ============= -->
                    <!-- <div class="project__content">
                        <img src="assets/img/audiooo.JPG" alt="Audio Story Application " class="project__img">
                        <h3 class="project__title">Audio Story app</h3>
                        <p class="project__description">Audio Story app responsive to all devices, 
                        with ui components and smooth scroll.</p>
                        <a href="https://webdev-larry.github.io/PROJECT-X/" target="_blank" class="project__link">View Project
                            <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </section> --> 

        <!--=================== Testimonials ====================-->
        <!-- <section id="testimonial" class="section testimonial">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Testimonials</h2>
                    <span class="section__subtitle">What my clients say</span>
                </div>
                <div class="testimonial__wrapper swiper">
                    <div class="swiper-wrapper"> -->
                        <!--========= testimonial 1 ============ -->
                        <!-- <div class="testimonial__card swiper-slide">
                            <img src="assets/img/testimonial1.jpg" alt="Natasha Smith" class="testimonial__img">
                            <div class="testimonial__content">
                                <p class="testimonial__description">Lorem ipsum dolor sit amet consectetur. Dignissim
                                    tincidunt egestas vitae porttitor nulla gravida commodo.</p>
                                <h3 class="testimonial__name">Natasha Smith</h3>
                                <span class="testimonial__occupation">UI/UX Designer at Dribbble</span>
                            </div>
                        </div> -->
                        <!--========= testimonial 2 ============ -->
                        <!-- <div class="testimonial__card swiper-slide">
                            <img src="assets/img/testimonial2.jpg" alt="John Clarke" class="testimonial__img">
                            <div class="testimonial__content">
                                <p class="testimonial__description">Lorem ipsum dolor sit amet consectetur. Dignissim
                                    tincidunt egestas vitae porttitor nulla gravida commodo.</p>
                                <h3 class="testimonial__name">John Clarke</h3>
                                <span class="testimonial__occupation">Web Developer at Facebook</span>
                            </div>
                        </div> -->
                        <!--========= testimonial 3 ============ -->
                        <!-- <div class="testimonial__card swiper-slide">
                            <img src="assets/img/testimonial3.jpg" alt="Emily Walker" class="testimonial__img">
                            <div class="testimonial__content">
                                <p class="testimonial__description">Lorem ipsum dolor sit amet consectetur. Dignissim
                                    tincidunt egestas vitae porttitor nulla gravida commodo.</p>
                                <h3 class="testimonial__name">Emily Walker</h3>
                                <span class="testimonial__occupation">Backend Developer at Google
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!--=================== Contact ====================-->
        <!-- <section id="contact" class="section contact">
            <div class="container">
                <div class="d-grid contact__wrapper">
                    <div class="contact__content">
                        <h2 class="contact__title">Interested in working together? Let's talk</h2>
                        <p class="contact__description">
                            Ready to work together on your next software project? I'd love to hear from you! 
                            Feel free to get in touch using the contact information below.
                            Whether you have a specific project in mind or just want to chat about your software development needs , I am here to help.
                            I will respond to your message as quickly as possible and look forward to connecting with you soon.
                        </p>
                    </div>
                    <div class="contact__btn">
                        <a href="#contact" class="btn btn--secondary">Get in touch</a>
                    </div>
                </div>
            </div>
        </section>
    </main> -->
    <!--=================== footer ====================-->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="d-grid footer__wrapper">
                <div class="footer__content">
                    <h4 class="footer__title">Follow Me</h4>
                    <ul class="footer__social-list">
                        <li class="footer__social-item">
                            <a href="https://api.whatsapp.com/send?phone=2349121417646&text=Hello" target="_blank" class="footer__social-link">
                                <i class="ri-whatsapp-fill"></i>
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a href="https://www.instagram.com/larry.qam" target="_blank" class="footer__social-link">
                                <i class="ri-instagram-fill"></i>
                            </a>
                        </li>
                        <!-- <li class="footer__social-item">
                            <a href="https://www.linkedin.com/in/calvin-munene-918761233/" target="_blank" class="footer__social-link">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li> -->
                        <!-- <li class="footer__social-item">
                            <a href="https://github.com/webdev-larry" target="_blank" class="footer__social-link">
                                <i class="ri-github-fill"></i>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <div class="footer__content">
                    <h4 class="footer__title">Email Me</h4>
                    <a href="#" class="footer__contact">adeshinaquamdeen@gmail.com</a>
                </div>
                <div class="footer__content">
                    <h4 class="footer__title">Call Me</h4>
                    <a href="#" class="footer__contact">+(234)803 392 1088</a>
                </div>
            </div>
            <p class="footer__copyright">&copy; 2023 webdev. All Rights Reserved</p>
        </div>
    </footer>

    <!--=================== SwiperJS  ====================-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!--=================== ScrollReveal ==================-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--=================== Main JS ====================-->
    <script src="assets/js/main.js"></script>
</body>

</html>

