<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafeez Ullah</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
    <link rel="stylesheet" href="{{asset('assets/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/ajax/libs/remixicon/3.6.0/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/boostrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/media_query.css')}}">
</head>

<body>
    <!-- ====================================== Preloader ===================================== -->
    <div class="wrapper">
        <div id="loader-wrapper">
            <div id="loader">
                <svg viewBox="0 0 1320 300">
                    <text x="50%" y="50%" dy=".35em" text-anchor="middle">Hafeez Ullah</text>
                </svg>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- ====================================== Preloader End ===================================== -->
    <!-- ====================================== Background Animation ===================================== -->
    <div id="particles-js"></div>
    <!-- ====================================== Background Animation End ===================================== -->
    <!-- ====================================== Cursor ===================================== -->
    <div class="cursor"></div>
    <!-- ====================================== Cursor End ===================================== -->
    <!-- ====================================== Dark Light Mode ===================================== -->
    <div class="dark_toggle">
        <div class="ul-header">
            <a class="mode" onclick="myFunction()" title="Toggle Mode">
                <div class="icon-container">
                    <i id="sunIcon" class="fa-solid fa-sun fa-spin icon"></i>
                    <i id="moonIcon" class="fa-solid fa-moon icon hidden"></i>
                </div>
            </a>
        </div>
    </div>
    <!-- ====================================== Dark Light Mode End===================================== -->
    <header>
        <!-- ====================================== Fix Icon Menu ===================================== -->
        <div class="sidebar close">
            <ul class="nav-links icetab-container" id="icetab-container">
                <li class="icetab current-tab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/home_icon.svg"
                            alt="home_icon">
                    </a>
                    <ul class="sub-menu blank">
                        <li class=""><a class="link_name" href="javascript:void(0)">Home</a></li>
                    </ul>
                </li>
                <li class="icetab menu-btn">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/about_icon.svg"
                            alt="about_icon">
                    </a>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="javascript:void(0)">About Me</a></li>
                    </ul>
                </li>
                <li class="icetab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/resume_icon.svg"
                            alt="resume_icon">
                    </a>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="javascript:void(0)">Resume</a></li>
                    </ul>
                </li>
                <li class="icetab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/services_icon.svg"
                            alt="services_icon">
                    </a>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="javascript:void(0)">Services</a></li>
                    </ul>
                </li>
                <li class="icetab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/skills_icon.svg"
                            alt="skills_icon">
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="javascript:void(0)">Skills</a></li>
                    </ul>
                </li>
                <li class="icetab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/portfolio_icon.svg"
                            alt="portfolio_icon">
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="javascript:void(0)">Portfolio</a></li>
                    </ul>
                </li>
               <!--  <li class="icetab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/testimonial_icon.svg"
                            alt="testimonial_icon">
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="javascript:void(0)">Testimonials</a></li>
                    </ul>
                </li>
                <li class="icetab">
                    <a class="nav_menu_icon_line" href="javascript:void(0)">
                        <img class="nav_menu_icon"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/blog_icon.svg"
                            alt="blog_icon">
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="javascript:void(0)">Blogs</a></li>
                    </ul>
                </li> -->
                <li class="icetab">
                    <a class="" href="javascript:void(0)">
                        <img class="nav_menu_icon"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/contact_icon.svg"
                            alt="contact_icon">
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="javascript:void(0)">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- ====================================== Fix Icon Menu End ===================================== -->
        <!-- ======================================= Side Menu ================================== -->
        <div class="toggle" onclick="openNav()">
            <img class="line-menu" src="../assets/images/line-menu.png" alt="line-menu">
        </div>
        <div id="mySidenav" class="sidenav">
            <div class="closebtn" onclick="closeNav()">&times;</div>
            <img class="logo" src="{{asset('assets/images/hafeez.png')}}" alt="logo">
            <ul class="sidescreen_sub icetab-container" id="icetab-container2">
                <li class="icetab current-tab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/home_icon.svg"
                            alt="home_icon">Home
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/about_icon.svg"
                            alt="about_icon">About Me
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/resume_icon.svg"
                            alt="resume_icon">Resume
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/services_icon.svg"
                            alt="services_icon.svg">Services
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/skills_icon.svg"
                            alt="skills_icon">Skills
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/portfolio_icon.svg"
                            alt="portfolio_icon">Portfolio
                    </a>
                </li>
             <!--    <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/testimonial_icon.svg"
                            alt="testimonial_icon">Testimonials
                    </a>
                </li>
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/blog_icon.svg"
                            alt="blog_icon">Blogs
                    </a>
                </li> -->
                <li class="icetab" onclick="openNav()">
                    <a class="icons2" href="javascript:void(0)">
                        <img class="nav_menu_icon sidenav_img"
                            src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/contact_icon.svg"
                            alt="contact_icon">Contact
                    </a>
                </li>
            </ul>
        </div>
        <!-- ======================================= Side Menu End ================================== -->
    </header>
    <div class="all_page" id="page">
        <section class="card_section" id="card_main">
            <div class="olivia_bio" id="oliva_details">
                <div class="imgBox">
                    <img class="olivia-img" src="{{asset('assets/images/profile.jpg')}}" alt="olivia-img">
                </div>
                <div class="bio_contain">
                    <h1 class="olivia_moswa">Hafeez Ullah</h1>
                    <h2 class="designer font_w_font_s1 overflow-hidden"></h2>
                    <a href="https://api.whatsapp.com/send?phone=+923088396356&text=Hello%20Hafeez%20Ullah" target="_blank">
                    <button class="download_cv hire_me font_w_font_s">
                        <i class="ri-at-line"></i> Hire Me
                    </button>
                </a>
                </div>
            </div>
            <div class="right_card_main icetab-content" id="icetab-content">
                <!-- ======================================= Home Section ================================== -->
                <section class="oliva-intro tabcontent tab-active" id="home">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">intro</h2>
                    </div>
                    <h2 class="moswa font_w_font_s fade_up">Full Stack Developer (Laravel)</h2>
                    <h3 class="passionate font_w_font_s1 fade_up" style="text-align: justify;">Experienced Full Stack
                        Developer with 2 years of dedicated Laravel
                        development expertise. Skilled in creating robust web applications for various
                        industries such as schools, retail, transportation, and housing societies.
                        Proficient in Bootstrap, jQuery, AJAX, and SQL, with a focus on delivering
                        efficient and user-friendly solutions.
                    </h3>
                    <div class="button_circle_group">
                        <div>
                            <a href="{{asset('assets/hafeez.pdf')}}" target="_blank">
                            <button class="download_cv font_w_font_s">
                                <i class="ri-download-cloud-2-line"></i>Download CV
                            </button>
                            </a>
                        </div>
                        <div class="circular_text_main ">
                            <a href="javascript:void(0)" class="down_arrow_main position-relative">
                                <img class="circular_text" src="../assets/images/circular_text.png" alt="circular_text">
                                <img class="down_arrow"
                                    src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/down_arrow.svg"
                                    alt="down_arrow">
                            </a>
                        </div>
                    </div>
                </section>
                <!-- ======================================= About Section ================================== -->
                <section class="oliva-intro tabcontent" id="about">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">about me</h2>
                    </div>
                    <h2 class="moswa font_w_font_s fade_up">Crafting Solutions through Code and Innovation</h2>
                    <h3 class="passionate font_w_font_s1 fade_up" style="text-align: justify;">Since beginning my
                        journey as a software developer five years ago, I've built a diverse portfolio of business
                        solutions, including Inventory Management Systems, School Management Systems, Transportation
                        Software, Point of Sale Systems, Accounting Software, and Online Seat Reservation Systems. My
                        experience spans both freelance projects and full-time positions, allowing me to collaborate
                        with a variety of clients and teams to create robust digital products tailored to their needs.
                        Additionally, I've shared my expertise by teaching web technologies at various institutes. I'm
                        quietly confident, naturally curious, and always striving to enhance my skills, one coding
                        challenge at a time.
                    </h3>
                    <div class="about_counter fade_up">
                        <div class="counter">
                            <h3 class="counter2 count font_w_font_s" data-count="5">5+</h3>
                            <h3 class="experince font_w_font_s1 ">YEARS OF EXPERIENCE</h3>
                        </div>
                        <div class="counter">
                            <h3 class="counter2 count font_w_font_s" data-count="50">50+</h3>
                            <h3 class="experince">PROJECTS COMPLETED</h3>
                        </div>
                    </div>
                </section>
                <!-- ======================================= Resume Section ================================== -->
                <section class="oliva-intro tabcontent" id="resume">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">Resume</h2>
                    </div>
                    <h2 class="moswa font_w_font_s fade_up">Education</h2>
                    <h3 class="passionate font_w_font_s1 fade_up">I hold a Master's degree in Arts, and while I don't
                        have a formal degree in Computer Science, my passion for software development has driven me to
                        become a self-taught and experienced developer. Over the past five years, I've honed my skills
                        through practical projects, continuous learning, and hands-on experience in various domains of
                        software development. My journey is a testament to the power of dedication and the pursuit of
                        knowledge beyond traditional educational paths.
                    </h3>
                    <div class="education position-relative education_space">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <h3 class="bachelor font_w_font_s1">MASTERS IN ARTS (MA)</h3>
                            <h4 class="university font_w_font_s1">University of Balochistan, Quetta / 2023 - 2024</h4>
                            <!--  <h5 class="cursus font_w_font_s1">Cursus ut consectetur rhoncus ut nibh. Bibendum at sit a
                                tempor, laoreet varius et. Sed ut egestas vitae dolor nulla non Ullamcorper amet nibh.
                            </h5> -->
                        </div>
                    </div>
                    <div class="education position-relative education_space">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <h3 class="bachelor font_w_font_s1">BACHELOR IN ARTS (BA) </h3>
                            <h4 class="university font_w_font_s1">University of Balochistan, Quetta / 2019 - 2021</h4>
                            <!--  <h5 class="cursus font_w_font_s1">Porttitor euismod at semper ut massa. Lorem varius magna
                                volutpat nunc. Et faucibus scelerisque donec augue eleifenda morbi dolor lorem semper.
                            </h5> -->
                        </div>
                    </div>
                    <!-- <div class="education position-relative">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <h3 class="bachelor font_w_font_s1">phd of Science in Information Technology</h3>
                            <h4 class="university font_w_font_s1">Cambridge University / 2016 - 2018</h4>
                            <h5 class="cursus font_w_font_s1">Adipiscing sed magna tempus arcu morbi. Ipsum pellentesque
                                lorem suscipit in. Hendrerit rhoncus quis tempor urna pharetra ut erat.</h5>
                        </div>
                    </div> -->
                    <h2 class="moswa experience_main_text font_w_font_s fade_up">Experience</h2>
                    <h3 class="passionate font_w_font_s1 fade_up" style="text-align: justify;">With over five years of
                        hands-on experience in
                        software development, I've successfully designed and implemented a wide range of business
                        solutions. From Inventory Management Systems to Online Seat Reservation Systems, my work spans
                        across various industries and applications. My professional journey includes both freelance
                        projects and full-time roles, allowing me to collaborate with diverse teams and clients.
                        Additionally, I've imparted my knowledge by teaching web technologies at different institutes,
                        further solidifying my expertise and commitment to the field.
                    </h3>
                    <div class="education position-relative education_space">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <div class="envato_group_main">
                                <div>
                                    <h3 class="bachelor font_w_font_s1">Laravel Developer</h3>
                                    <h4 class="company font_w_font_s1">Diamond Softwares, Quetta / 2023 - Current</h4>
                                </div>
                                <!--  <img class="company_logo" style="width:100px;" src="../assets/images/diamond1.png"
                                    alt="Diamond Softwares"> -->
                            </div>
                            <h5 class="cursus font_w_font_s1" style="text-align: justify;">
                                <strong>Contributed to the development and maintenance of robustweb applications across
                                    various industries</strong>
                                <ul>
                                    <li>Developed, tested, and deployed web applications using Laravel framework,
                                        adhering to coding standards and best practices.</li>
                                    <li>Collaborated with cross-functional teams including project managers,
                                        designers, and fellow developers to conceptualize and implement scalable
                                        software solutions.</li>
                                    <li>
                                        Designed and optimized database schemas, ensuring efficient data
                                        storage and retrieval.</li>
                                    <li>
                                        Implemented front-end interfaces using HTML, CSS, JavaScript, and
                                        popular libraries/frameworks like Bootstrap and jQuery.</li>
                                    <li>
                                        Integrated third-party APIs and services to extend application
                                        functionality.</li>
                                    <li>
                                        Conducted code reviews and performance optimizations to enhance
                                        application performance and maintainability.</li>
                                    <li>
                                        Supported and maintained existing applications by troubleshooting issues
                                        and implementing bug fixes.</li>
                                    <li>
                                        Stayed updated with the latest industry trends and technologies,
                                        incorporating relevant advancements into project workflows.</li>
                                </ul>
                            </h5>
                        </div>
                    </div>
                    <div class="education position-relative education_space">
                        <div class="side_circle_ring fade_up">
                            <div class="small_yellow_border">
                                <div class="small_yellow_circle"></div>
                            </div>
                        </div>
                        <div class="small_yellow_border_main fade_up">
                            <div class="envato_group_main">
                                <div>
                                    <h3 class="bachelor font_w_font_s1">IT Co-ordinator</h3>
                                    <h4 class="company font_w_font_s1">Pearl Institute, Quetta / 2020 - 2023</h4>
                                </div>

                                <!--  <img class="company_logo" src="../assets/images/pearl.png" style="width: 100px;" alt="Pearl Institute Quetta"> -->
                            </div>
                            <h5 class="cursus font_w_font_s1">
                                <strong>Supervising the IT department, managing a team of professionals, and delivering
                                    high-quality instruction in web development and other IT courses.</strong>
                                <ul>
                                    <li>Supervised the IT department, overseeing day-to-day operations and
                                        ensuring smooth functioning of IT infrastructure.</li>
                                    <li>
                                        Managed a team of IT professionals, providing leadership, guidance, and
                                        support to achieve departmental goals.</li>
                                    <li>
                                        Developed and delivered curriculum for web development and other IT
                                        courses, ensuring engaging and informative instruction.</li>
                                    <li>
                                        Conducted training sessions and workshops for staff and students to
                                        enhance technical skills and proficiency.</li>
                                    <li>
                                        Collaborated with stakeholders to assess training needs and develop
                                        customized learning programs.</li>
                                    <li>
                                        Provided technical support and troubleshooting assistance to resolve IT
                                        issues effectively.</li>
                                </ul>
                            </h5>
                        </div>
                    </div>
                </section>
                <!-- ======================================= Services Section ================================== -->
                <section class="oliva-intro tabcontent" id="services">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">my services</h2>
                    </div>
                    <h2 class="moswa font_w_font_s fade_up">Empowering Businesses with Precision and Passion</h2>
                    <h3 class="passionate font_w_font_s1 fade_up">Experience the difference of tailored solutions designed to elevate your business. With expertise in full-stack development, Trust in my commitment to excellence and let's collaborate to drive your business forward with confidence.
                    </h3>
                    <div class="services_box_main">
                        <div class="service_box fade_up">
                            <img class="services_icon" style="width:50px;" src="{{asset('assets/images/application.svg')}}" alt="Sofware Solutions">
                            <h3 class="ui_ux font_w_font_s">Software Solutions</h3>
                            <h4 class="ui_sub_text font_w_font_s1">Boost your business with tailor-made software solutions. From POS to accounting and travel management, I deliver efficient, bespoke systems to drive growth.
                            </h4>
                        </div>
                        <div class="service_box fade_up">
                            <img class="services_icon" style="width:50px;" src="{{asset('assets/images/web.png')}}" alt="web development">
                            <h3 class="ui_ux font_w_font_s">Web Development</h3>
                            <h4 class="ui_sub_text font_w_font_s1">Unlock your digital potential with bespoke web solutions. From stunning websites to dynamic web applications, I deliver tailored solutions that captivate audiences and drive results.
                            </h4>
                        </div>
                        <div class="service_box fade_up">
                            <img class="services_icon" style="width:50px;" src="{{asset('assets/images/help-customer-support-1.svg')}}" alt="Maintenance and Support">
                            <h3 class="ui_ux font_w_font_s">Maintenance and Support</h3>
                            <h4 class="ui_sub_text font_w_font_s1">Stay ahead with reliable maintenance and support services. I provide ongoing assistance to ensure your digital assets remain secure, up-to-date, and optimized for peak performance.
                            </h4>
                        </div>
                        
                        <div class="service_box fade_up">
                            <img class="services_icon" style="width:50px;" src="{{asset('assets/images/training.svg')}}" alt="marketing">
                            <h3 class="ui_ux font_w_font_s">Training</h3>
                            <h4 class="ui_sub_text font_w_font_s1">Empower your team with expert-led training sessions. From mastering new technologies to enhancing coding skills, I offer tailored training programs to help your team stay ahead in the rapidly evolving digital landscape.
                            </h4>
                        </div>
                    </div>
                </section>
                <!-- ======================================= Skills Section ================================== -->
                <section class="oliva-intro tabcontent" id="skill">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">my skills</h2>
                    </div>
                    <h2 class="moswa font_w_font_s fade_up">Building Solutions with Precision and Innovation</h2>
                    <h3 class="passionate font_w_font_s1 ">Transforming ideas into reality through expertise in full stack development. Combining robust back-end functionality with seamless front-end experiences to deliver comprehensive, high-performance solutions tailored to your needs.
                    </h3>
                    <!-- <h3 class="lan_skill font_w_font_s fade_up">Language Skills</h3>
                    <div class="skill_circle_main">
                        <div>
                            <div class="circlechart" data-percentage="90"></div>
                            <h2 class="subject">English</h2>
                        </div>
                        <div>
                            <div class="circlechart" data-percentage="75"></div>
                            <h2 class="subject">French</h2>
                        </div>
                        <div>
                            <div class="circlechart" data-percentage="60"></div>
                            <h2 class="subject">Spanish</h2>
                        </div>
                        <div>
                            <div class="circlechart" data-percentage="40"></div>
                            <h2 class="subject">German</h2>
                        </div>
                    </div> -->
                   <!--  <h3 class="lan_skill hard_skill font_w_font_s fade_up">Hard Skills</h3> -->
                    <div class="skill_circle_main">
                       
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" style="width: 70px;" src="{{asset('assets/images/laravel.svg')}}" alt="PHP">
                                <h4 class="hard_skill_counter font_w_font_s1">80%</h4>
                            </div>
                            <h4 class="subject font_w_font_s1">laravel</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" style="width: 70px;" src="{{asset('assets/images/jquery.svg')}}" alt="PHP">
                                <h4 class="hard_skill_counter font_w_font_s1">80%</h4>
                            </div>
                            <h4 class="subject font_w_font_s1">JQuery</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" style="width: 70px;" src="{{asset('assets/images/php.svg')}}" alt="PHP">
                                <h4 class="hard_skill_counter font_w_font_s1">90%</h4>
                            </div>
                            <h4 class="subject font_w_font_s1">PHP</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" style="width: 70px;" src="{{asset('assets/images/mysqltwo.svg')}}" alt="PHP">
                                <h4 class="hard_skill_counter font_w_font_s1">85%</h4>
                            </div>
                            <h4 class="subject font_w_font_s1">My SQL</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" style="width: 70px;" src="{{asset('assets/images/github.svg')}}" alt="PHP">
                                <h4 class="hard_skill_counter font_w_font_s1">70%</h4>
                            </div>
                            <h4 class="subject font_w_font_s1">GIT</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" style="width: 70px;" src="{{asset('assets/images/bootstrap.svg')}}" alt="bootstrap">
                                <h4 class="hard_skill_counter font_w_font_s1">95%</h4>
                            </div>
                            <h4 class="subject font_w_font_s1">Bootstrap</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" style="width: 70px;" src="{{asset('assets/images/css3.svg')}}" alt="css">
                                <h4 class="hard_skill_counter font_w_font_s1">85%</h4>
                            </div>
                            <h4 class="subject font_w_font_s1">CSS</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" style="width: 70px;" src="{{asset('assets/images/html-5.svg')}}" alt="html">
                                <h4 class="hard_skill_counter font_w_font_s1">97%</h4>
                            </div>
                            <h4 class="subject font_w_font_s1">HTML</h4>
                        </div>
                        <div class="skill_circle fade_up">
                            <div class="hard_skill_group">
                                <img class="figma" style="width: 100px;" src="{{asset('assets/images/social-wordpress-variant.svg')}}" alt="wordpress">
                                <h4 class="hard_skill_counter font_w_font_s1">50%</h4>
                            </div>
                            <h4 class="subject font_w_font_s1">WordPress</h4>
                        </div>
                    </div>
                </section>
                <!-- ======================================= Portfolio Section  ================================== -->
                <section class="oliva-intro tabcontent" id="portfolio">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">portfolio</h2>
                    </div>
                    <h2 class="moswa font_w_font_s fade_up">Crafting Excellence in Every Line of Code</h2>
                    <h3 class="passionate font_w_font_s1 fade_up">Explore a selection of my completed projects, each crafted with precision and dedication. From robust business applications to dynamic web solutions, these projects demonstrate my commitment to delivering high-quality results tailored to meet diverse client needs.</h3>
                    <div class="content_main">
                        <div class="content_main1">
                            <div class="fade_up">
                                <div class="content_portfolio pop-up">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{asset('assets/images/nippon.png')}}" alt="content_img">
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">Comprehensive Business Management System</h3>
                                        <p class="content-text">LARAVEL</p>
                                    </div>
                                </div>
                                <h4 class="project_name font_w_font_s">Comprehensive Business Management System</h4>
                                <p class="project_name_sub font_w_font_s1">LARAVEL</p>
                            </div>
                            
                           <!--  <div class="">
                                <div class="content_portfolio" id="youtube">
                                    <a href="https://youtu.be/OZzoAw9QHXY?si=j32q8VFU2u2_WkfW">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="../assets/images/food_app.jpg" alt="food_app">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">Food App Development</h3>
                                            <p class="content-text">youtube video</p>
                                        </div>
                                    </a>
                                </div>
                                <h4 class="project_name font_w_font_s">Food App Development</h4>
                                <p class="project_name_sub font_w_font_s1">youtube video</p>
                            </div> -->
                           <!--  <div class="">
                                <div class="content_portfolio link">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="../assets/images/pocket_fm.jpg" alt="pocket_fm">
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">Pocket FM Radio</h3>
                                        <p class="content-text">sound cloud</p>
                                    </div>
                                </div>
                                <h4 class="project_name font_w_font_s">Pocket FM Radio</h4>
                                <p class="project_name_sub font_w_font_s1">sound cloud</p>
                            </div> -->
                        </div>
                        <div class="content_main2">
                            <div class="fade_up">
                                <div class="content_portfolio pop-up1">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{asset('assets/images/tickets.png')}}" alt="bank_app">
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">Bus Seats Reservation System</h3>
                                        <p class="content-text">LARAVEL</p>
                                    </div>
                                </div>
                                <h4 class="project_name font_w_font_s">Bus Seats Reservation System</h4>
                                <p class="project_name_sub font_w_font_s1">LARAVEL</p>
                            </div>
                            <!-- <div class="fade_up">
                                <div class="content_portfolio" id="vimeo">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="../assets/images/crypto_app_img.jpg"
                                        alt="crypto_app_img">
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title">Crypto App UI Design</h3>
                                        <p class="content-text">vimeo video</p>
                                    </div>
                                </div>
                                <h4 class="project_name font_w_font_s">Crypto App UI Design</h4>
                                <p class="project_name_sub font_w_font_s1">vimeo video</p>
                            </div>
                            <div class="">
                                <a href="#popup1">
                                    <div class="content_portfolio">
                                        <div class="content-overlay"></div>
                                        <img class="content-image" src="../assets/images/city_3Dview.jpg"
                                            alt="city_3Dview">
                                        <div class="content-details fadeIn-bottom">
                                            <h3 class="content-title">City 3D View</h3>
                                            <p class="content-text">gallery</p>
                                        </div>
                                    </div>
                                </a>
                                <h4 class="project_name font_w_font_s">City 3D View</h4>
                                <p class="project_name_sub font_w_font_s1">gallery</p>
                            </div> -->
                            
                        </div>
                    </div>
                </section>
                <!-- ======================================= Portfolio Section End  ================================== -->
                <!-- ======================================= Testimonials Section  ================================== -->
                <!-- <section class="oliva-intro tabcontent" id="testimonials">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">testimonials</h2>
                    </div>
                    <h2 class="moswa font_w_font_s fade_up">Trusted By Hundred Clients</h2>
                    <h3 class="passionate font_w_font_s1 fade_up">Aliquam aenean quis massa sagittis quis. Aliquam metus
                        vel curabitur est bibendum scelerisque urna semper.
                    </h3>
                    <div class="testimonials_card">
                        <div>
                            <div class="slider_contain_main">
                                <div class="img_text">
                                    <img class="client_img" src="../assets/images/testimonial_img.png"
                                        alt="testimonial_img">
                                    <div>
                                        <h4 class="client_name font_w_font_s">John Doe</h4>
                                        <p class="client_roll font_w_font_s1">CEO of AAC Intra</p>
                                    </div>
                                </div>
                                <img class="collan" src="../assets/images/collan.png" alt="collan">
                            </div>
                            <div class="rating_main">
                                <img src="../assets/images/rating.png" alt="rating">
                            </div>
                            <h3 class="placerat font_w_font_s1">Volutpat placerat pellentesque sed ut donec. Massa et
                                quam pellentesque lorem at dolor dui a et. Nullam aliquet pharetra eu odio egestas nunc
                                bibendum porttitor in. Nunc magna nunc nunc amet id sed sed platea elementum. Feugiat
                                pharetra eleifend fringilla volutpat arcu. Dolor eget ut mi cursus faucibus risus
                                tristique sit. Vitae pellentesque ac cras nisi tempus orci.
                            </h3>
                        </div>
                        <div>
                            <div class="slider_contain_main">
                                <div class="img_text">
                                    <img class="client_img" src="../assets/images/testimonial_img2.png"
                                        alt="testimonial_img2">
                                    <div>
                                        <h4 class="client_name font_w_font_s">Mark Daly</h4>
                                        <p class="client_roll font_w_font_s1">CEO</p>
                                    </div>
                                </div>
                                <img class="collan" src="../assets/images/collan.png" alt="collan">
                            </div>
                            <div class="rating_main">
                                <img src="../assets/images/rating.png" alt="rating">
                            </div>
                            <h3 class="placerat font_w_font_s1">Volutpat placerat pellentesque sed ut donec. Massa et
                                quam pellentesque lorem at dolor dui a et. Nullam aliquet pharetra eu odio egestas nunc
                                bibendum porttitor in. Nunc magna nunc nunc amet id sed sed platea elementum. Feugiat
                                pharetra eleifend fringilla volutpat arcu. Dolor eget ut mi cursus faucibus risus
                                tristique sit. Vitae pellentesque ac cras nisi tempus orci.
                            </h3>
                        </div>
                        <div>
                            <div class="slider_contain_main">
                                <div class="img_text">
                                    <img class="client_img" src="../assets/images/testimonial_img3.png"
                                        alt="testimonial_img3">
                                    <div>
                                        <h4 class="client_name font_w_font_s">Dan Sawyer</h4>
                                        <p class="client_roll font_w_font_s1">Manager</p>
                                    </div>
                                </div>
                                <img class="collan" src="../assets/images/collan.png" alt="collan">
                            </div>
                            <div class="rating_main">
                                <img src="../assets/images/rating.png" alt="rating">
                            </div>
                            <h3 class="placerat font_w_font_s1">Volutpat placerat pellentesque sed ut donec. Massa et
                                quam pellentesque lorem at dolor dui a et. Nullam aliquet pharetra eu odio egestas nunc
                                bibendum porttitor in. Nunc magna nunc nunc amet id sed sed platea elementum. Feugiat
                                pharetra eleifend fringilla volutpat arcu. Dolor eget ut mi cursus faucibus risus
                                tristique sit. Vitae pellentesque ac cras nisi tempus orci.
                            </h3>
                        </div>
                        <div>
                            <div class="slider_contain_main">
                                <div class="img_text">
                                    <img class="client_img" src="../assets/images/testimonial_img4.png"
                                        alt="testimonial_img4">
                                    <div>
                                        <h4 class="client_name font_w_font_s">Andrew Lewis</h4>
                                        <p class="client_roll font_w_font_s1">Developer</p>
                                    </div>
                                </div>
                                <img class="collan" src="../assets/images/collan.png" alt="collan">
                            </div>
                            <div class="rating_main">
                                <img src="../assets/images/rating.png" alt="rating">
                            </div>
                            <h3 class="placerat font_w_font_s1">Volutpat placerat pellentesque sed ut donec. Massa et
                                quam pellentesque lorem at dolor dui a et. Nullam aliquet pharetra eu odio egestas nunc
                                bibendum porttitor in. Nunc magna nunc nunc amet id sed sed platea elementum. Feugiat
                                pharetra eleifend fringilla volutpat arcu. Dolor eget ut mi cursus faucibus risus
                                tristique sit. Vitae pellentesque ac cras nisi tempus orci.
                            </h3>
                        </div>
                        <div>
                            <div class="slider_contain_main">
                                <div class="img_text">
                                    <img class="client_img" src="../assets/images/testimonial_img5.png"
                                        alt="testimonial_img4">
                                    <div>
                                        <h4 class="client_name font_w_font_s">Lewi Andrew </h4>
                                        <p class="client_roll font_w_font_s1">Developer</p>
                                    </div>
                                </div>
                                <img class="collan" src="../assets/images/collan.png" alt="collan">
                            </div>
                            <div class="rating_main">
                                <img src="../assets/images/rating.png" alt="rating">
                            </div>
                            <h3 class="placerat font_w_font_s1">Volutpat placerat pellentesque sed ut donec. Massa et
                                quam pellentesque lorem at dolor dui a et. Nullam aliquet pharetra eu odio egestas nunc
                                bibendum porttitor in. Nunc magna nunc nunc amet id sed sed platea elementum. Feugiat
                                pharetra eleifend fringilla volutpat arcu. Dolor eget ut mi cursus faucibus risus
                                tristique sit. Vitae pellentesque ac cras nisi tempus orci.
                            </h3>
                        </div>
                    </div>
                </section> -->
                <!-- ======================================= Testimonials Section End ================================== -->
                <!-- ======================================= Blog Section  ================================== -->
                <!-- <section class="oliva-intro tabcontent" id="blog">
                    <div class="intro_main">
                        <h2 class="intro font_w_font_s fade_up">Blogs</h2>
                    </div>
                    <h2 class="moswa font_w_font_s fade_up">Recent Blogs And Articles</h2>
                    <h3 class="passionate font_w_font_s1 fade_up">Massa in ornare pharetra vitae et. Nunc lobortis
                        cursus risus bibendum sed. Viverra tempus amet nibh id ipsum gravida mus.
                    </h3>
                    <div class="blog_section_main ">
                        <div class="blog_img_top fade_up">
                            <div class="blog_img trigger">
                                <div class="blog_date">
                                    <h4 class="date font_w_font_s">20 <span class="month">DEC</span></h4>
                                </div>
                            </div>
                            <h3 class="become font_w_font_s">Become a Frontend Developer in 5 Simple Steps</h3>
                            <p class="web_development font_w_font_s1">web development</p>
                        </div>
                        <div class="fade_up">
                            <div class="blog_img blog_img2 trigger">
                                <div class="blog_date">
                                    <h4 class="date font_w_font_s">18 <span class="month">DEC</span></h4>
                                </div>
                            </div>
                            <h3 class="become font_w_font_s">11 Best Logo Design Online & Offline Courses</h3>
                            <p class="web_development font_w_font_s1">graphic design</p>
                        </div>
                        <div class="fade_up">
                            <div class="blog_img blog_img3 trigger">
                                <div class="blog_date">
                                    <h4 class="date font_w_font_s">8 <span class="month">DEC</span></h4>
                                </div>
                            </div>
                            <h3 class="become font_w_font_s">12 Best Branding Design Online and Offline Courses</h3>
                            <p class="web_development font_w_font_s1">graphic design</p>
                        </div>
                        <div class="fade_up">
                            <div class="blog_img blog_img4 trigger">
                                <div class="blog_date">
                                    <h4 class="date font_w_font_s">02 <span class="month">DEC</span></h4>
                                </div>
                            </div>
                            <h3 class="become font_w_font_s">10 Content Proofreading Tips to Catch More Goofs</h3>
                            <p class="web_development font_w_font_s1">seo</p>
                        </div>
                        <div class="fade_up">
                            <div class="blog_img blog_img5 trigger">
                                <div class="blog_date">
                                    <h4 class="date font_w_font_s">28 <span class="month">NOV</span></h4>
                                </div>
                            </div>
                            <h3 class="become font_w_font_s">Play to Strengths and Supercharge Your Business</h3>
                            <p class="web_development font_w_font_s1">web development</p>
                        </div>
                        <div class="fade_up">
                            <div class="blog_img blog_img6 trigger">
                                <div class="blog_date">
                                    <h4 class="date font_w_font_s">22 <span class="month">NOV</span></h4>
                                </div>
                            </div>
                            <h3 class="become font_w_font_s">5 Steps to Create an Outstanding Marketing Plan</h3>
                            <p class="web_development font_w_font_s1">digital marketing</p>
                        </div>
                    </div>
                    <div id="text">
                        <div class="view_more">
                            <div class="fade_up">
                                <div class="blog_img blog_img7 trigger">
                                    <div class="blog_date">
                                        <h4 class="date font_w_font_s">22 <span class="month">NOV</span></h4>
                                    </div>
                                </div>
                                <h3 class="become font_w_font_s">5 Steps to Create an Outstanding Marketing Plan</h3>
                                <p class="web_development font_w_font_s1">digital marketing</p>
                            </div>
                            <div class="fade_up">
                                <div class="blog_img blog_img8 trigger">
                                    <div class="blog_date">
                                        <h4 class="date font_w_font_s">22 <span class="month">NOV</span></h4>
                                    </div>
                                </div>
                                <h3 class="become font_w_font_s">5 Steps to Create an Outstanding Marketing Plan</h3>
                                <p class="web_development font_w_font_s1">digital marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="view_more_main fade_up">
                        <button class="download_cv font_w_font_s" id="toggle">View More</button>
                    </div>
                </section> -->
                <!-- ======================================= Blog Section End  ================================== -->
                <!-- ======================================= Contact us Section  ================================== -->
                <section class="oliva-intro tabcontent" id="contact">
                    <div class="intro_main">
                        <h2 class="intro fade_up">contact us</h2>
                    </div>
                    <h2 class="moswa fade_up">Let's Work Together!</h2>
                    <div class="container1">
                        <div class="form form__1">
                            <label for="name" class="form__label">What’s Your Name*</label>
                            <input type="text" class="form__input" placeholder="" id="name" required autocomplete="off">
                        </div>
                        <div class="form form__2">
                            <label for="email" class="form__label">Your Email*</label>
                            <input type="email" class="form__input" placeholder="" id="email" required
                                autocomplete="off">
                        </div>
                        <div class="form form__1">
                            <label for="name" class="form__label">Your Phone Number*</label>
                            <input type="text" class="form__input" placeholder="" id="phone" required
                                autocomplete="off">
                        </div>
                        <div class="form form__1">
                            <label for="name" class="form__label">Subject*</label>
                            <input type="text" class="form__input" placeholder="" id="subject" required
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="btn_message">
                        <div class="form form__3">
                            <label for="name" class="form__label">Tell us about your project*</label>
                            <input type="text" class="form__input message2" placeholder="" id="project" required>
                        </div>
                        <div class="send_message_form">
                            <button class="download_cv form__btn">
                                <i class="fa-regular fa-paper-plane material-icons"></i>Send Message
                            </button>
                        </div>
                    </div>
                    <div>
                        <h3 class="moswa touch">Get in touch!</h3>
                        <div class="contact_number_main">
                            <img src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/contact.svg"
                                alt="contact">
                            <h4 class="contact_number"><a href="tel:+923088396356">+92 308 8396356</a></h4>
                        </div>
                        <div class="contact_number_main">
                            <img src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/gmail.svg"
                                alt="gmail">
                            <h4 class="contact_number"><a href="mailto:hellohafeezullah@gmail.com">Hellohafeezullah@gmail.com</a></h4>
                        </div>
                        <div class="contact_number_main">
                            <img src="https://up2client.com/envato/olivia/preview/one_page_design/assets/images/map.svg"
                                alt="map">
                            <h4 class="contact_number">
                                <a href="javascript:void;">Diamond Software House, Opposite Rahat Nursery, Prince Road, Quetta, Pakistan</a>
                            </h4>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.6753580735676!2d67.01208607506688!3d30.18926631169545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ed2df69b45a3cd9%3A0x5ad564f9a01f1d07!2sDiamond%20Software!5e0!3m2!1sen!2s!4v1716117861064!5m2!1sen!2s"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <!-- <h5 class="copyright">© Hafeez Ullah 2024. All rights reserved by
                        <a class="krishna" href="#"
                            target="_blank">Hafeez Ullah.</a>
                    </h5> -->
                </section>
                <!-- ======================================= Contact us Section End ================================== -->
            </div>
        </section>
        <!-- ======================================= Social Media Right Side  ================================== -->
        <div class="social_media_main" id="social_media_main">
            <ul class="social_media">
                <li><a href="https://www.facebook.com/hafeez.ullah.902604/" title="Facebook" target="blank">FB</a></li>
                <!-- <li><a href="https://twitter.com/" target="blank">TW</a></li> -->
                <li><a href="https://www.linkedin.com/in/hafeez-ullah-aa3a73195/" title="linkedin" target="blank">IN</a></li>
                <li><a href="https://github.com/HafeezUllah886" target="blank" title="Github">GH</a></li>
               <!--  <li><a href="https://dribbble.com/" target="blank">DR</a></li> -->
            </ul>
        </div>
        <!-- ======================================= Social Media Right Side End ================================== -->
        <!-- ======================================= Portfolio PopUp Window  ================================== -->
        <div class="overlay" id="nippon">
            <div class="content2">
                <div id="close">
                    <i class="ri-close-fill"></i>
                </div>
                <img class="pop-up-video" src="{{asset('assets/images/nippon.png')}}" style="width:100%;" alt="portfolio_big_img">
                <div class="corporate_main">
                    <div class="corporate_sub">
                        <h3 class="project_name corp font_w_font_s">Comprehensive Business Management System</h3>
                        <p class="project_name_sub font_w_font_s1">Laravel</p>
                    </div>
                    <div class="cuberto_main">
                        <p class="created_by">Created Using:</p>
                        <p class="cuberto">Laravel, Boostrap, Jquery, MySQLI</p>
                    </div>
                    <div class="cuberto_main">
                        <p class="created_by">Date:</p>
                        <p class="cuberto">05/01/2024</p>
                    </div>
                    <div class="cuberto_main">
                        <p class="created_by">Client:</p>
                        <p class="cuberto">Multiple</p>
                    </div>
                    <div class="cuberto_main">
                        <p class="created_by">Categories:</p>
                        <p class="cuberto">Web App</p>
                    </div>
                </div>
                <p class="blandit_text font_w_font_s1" style="text-align: justify;">
                    This powerful business management system, built with Laravel, Bootstrap, jQuery, and MySQLI, is designed to streamline and enhance various aspects of business operations. It efficiently tracks and manages inventory levels, product details, and inventory movements. The accounting module simplifies financial management by handling transactions, ledgers, and financial reports. The HR component allows for seamless management of employee attendance, payroll processing, and advance payments. Invoicing capabilities enable easy generation and management of invoices, ensuring accurate billing and payment tracking.
                    <br/>
                    Additionally, the system provides comprehensive reporting on sales, purchases, inventory, and employee performance, offering valuable insights for decision-making. The purchase and sales management features facilitate effective handling of procurement and sales, with detailed tracking and management. Product management ensures organized and up-to-date information on product details, categories, and pricing. The system also allows businesses to set and monitor targets, ensuring objectives are met efficiently. Task and reminder features help keep track of important activities and deadlines, ensuring that nothing is overlooked.
                    <br/>
                    Overall, this system provides a holistic solution for managing various business functions, ensuring improved efficiency, accuracy, and productivity.
                </p>

               <!--  <div class="pop-up-footer">
                    <button class="download_cv view_project font_w_font_s"
                        onClick="window.open('https://themeforest.net/item/personal-portfolio-cv-html-template-nairobi/48662175');">
                        <i class="ri-eye-line"></i> View Project
                    </button>
                    <div class="share-button share">
                        <i class="ri-share-line share-btn"></i>
                        <div class="social top center networks-5 ">
                            <a class="fbtn facebook" href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a class="fbtn instagram" href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a class="fbtn whatsapp" href="https://wa.me/+12345678899" target="_blank">
                                <i class="ri-whatsapp-line"></i>
                            </a>
                            <a class="fbtn linkedin" href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="overlay" id="ticket">
            <div class="content2">
                <div id="close" class="closeticket">
                    <i class="ri-close-fill"></i>
                </div>
                <img class="pop-up-video" src="{{asset('assets/images/tickets1.png')}}" style="width:100%;" alt="portfolio_big_img">
                <div class="corporate_main">
                    <div class="corporate_sub">
                        <h3 class="project_name corp font_w_font_s">Bus Seats Reservation System</h3>
                        <p class="project_name_sub font_w_font_s1">Laravel</p>
                    </div>
                    <div class="cuberto_main">
                        <p class="created_by">Created Using:</p>
                        <p class="cuberto">Laravel, Boostrap, Jquery, MySQLI</p>
                    </div>
                    <div class="cuberto_main">
                        <p class="created_by">Date:</p>
                        <p class="cuberto">15/05/2024</p>
                    </div>
                    <div class="cuberto_main">
                        <p class="created_by">Client:</p>
                        <p class="cuberto">Super Sadabahar, Qta</p>
                    </div>
                    <div class="cuberto_main">
                        <p class="created_by">Categories:</p>
                        <p class="cuberto">Web App</p>
                    </div>
                </div>
                <p class="blandit_text font_w_font_s1" style="text-align: justify;">
                    Developed using Laravel, Bootstrap, jQuery, and MySQLI, this bus seats reservation system offers a comprehensive solution for managing bus bookings and operations. The system features two distinct roles: admin and operator.
                    <br/>
                    The admin role allows for robust management of users, routes, terminals, fares, schedules, and other administrative tasks, ensuring seamless operation and efficient resource allocation. Admins have full control over the system settings and can generate detailed reports to monitor and optimize the service.
                    <br/>
                    Operators, on the other hand, are equipped to handle bookings, vouchers, and other counter desk-related tasks. They can efficiently manage daily operations, ensuring smooth and quick service for passengers. The application displays a live map of buses, categorized into different classes such as Exclusive Class (2 x 2), Business Class (2 x 1), and Sleepers. This feature provides a visual representation of booked and available seats, with seats displayed in different colors to indicate the status: male, female, paid, and unpaid bookings. This real-time update enhances the user experience by providing clear and immediate information on seat availability.
                    <br/>
                    This system is designed to streamline the reservation process, improve operational efficiency, and provide a superior booking experience for both administrators and passengers.
                </p>

               <!--  <div class="pop-up-footer">
                    <button class="download_cv view_project font_w_font_s"
                        onClick="window.open('https://themeforest.net/item/personal-portfolio-cv-html-template-nairobi/48662175');">
                        <i class="ri-eye-line"></i> View Project
                    </button>
                    <div class="share-button share">
                        <i class="ri-share-line share-btn"></i>
                        <div class="social top center networks-5 ">
                            <a class="fbtn facebook" href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a class="fbtn instagram" href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a class="fbtn whatsapp" href="https://wa.me/+12345678899" target="_blank">
                                <i class="ri-whatsapp-line"></i>
                            </a>
                            <a class="fbtn linkedin" href="https://www.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- ======================================= Portfolio PopUp Window End ================================== -->
        <!-- ======================================= Blog PopUp Window  ================================== -->
      <!--   <div class="modal-wrapper">
            <div class="modal">
                <div class="content3">
                    <h3 class="logo_design">11 Best Logo Design Online & Offline Courses</h3>
                    <h4 class="graphic font_w_font_s1">graphic design | December 18, 2023</h4>
                    <div class="blog_pop_up_main">
                        <img class="blog_pop_up " src="../assets/images/blog_pop_up.png" alt="blog_pop_up">
                    </div>
                    <h4 class="nunc font_w_font_s1">
                        Mi fames nunc donec diam mi arcu. Vitae justo consequat blandit proin tellus feugiat dignissim.
                        Nibh fames cursus amet tempor pharetra. Sit nulla aliquam adipiscing auctor non id adipiscing
                        dictum non. Augue id eleifend facilisi ac egestas dui quis. Sit a viverra tristique volutpat
                        amet odio. Molestie blandit et donec convallis rhoncus.
                    </h4>
                    <h4 class="nunc font_w_font_s1">Non tincidunt pulvinar nunc enim pulvinar purus pellentesque est
                        felis. Et quam rhoncus egestas in sed at pellentesque faucibus. Diam sollicitudin non et
                        placerat odio sed nunc. Faucibus tempor nunc eu volutpat auctor cursus quis. Scelerisque nisi
                        turpis in lorem magna ultrices.
                    </h4>
                    <div class="blog-pop-up-list-main">
                        <ul class="blog-pop-up-list">
                            <li>Mi fames nunc donec diam mi arcu. Vitae justo consequat blandit proin tellus
                                feugiat dignissim.</li>
                            <li>Nibh fames cursus amet tempor pharetra.</li>
                            <li>Sit nulla aliquam adipiscing auctor non id adipiscing dictum non.</li>
                            <li>Augue id eleifend facilisi ac egestas dui quis. Sit a viverra tristique
                                volutpat amet odio.</li>
                            <li>Molestie blandit et donec convallis rhoncus.</li>
                            <li>Non tincidunt pulvinar nunc enim pulvinar purus pellentesque est felis.</li>
                            <li>Et quam rhoncus egestas in sed at pellentesque faucibus. Diam sollicitudin
                                non et placerat odio sed nunc.</li>
                        </ul>
                    </div>
                    <div class="small_blog ">
                        <h5 class="integer font_w_font_s1">Vel augue ullamcorper integer risus cras aliquet nisl.
                            Consequat ipsum dui orci adipiscing egestas molestie non. Et tristique ipsum gravida pretium
                            massa curabitur ac auctor adipiscing. Sit odio tellus hendrerit suspendisse non.
                        </h5>
                        <div class="line_client">
                            <div class="line"></div>
                            <h5 class="jordon font_w_font_s">By Jordon Smith</h5>
                        </div>
                    </div>
                    <h5 class="viverra font_w_font_s">Viverra habitasse nunc praesent enim bibendum. Lectus ornare in
                        facilisis.</h5>
                    <h5 class="integer vel font_w_font_s1">
                        Vel augue ullamcorper integer risus cras aliquet nisl. Consequat ipsum dui orci adipiscing
                        egestas molestie non. Et tristique ipsum gravida pretium massa curabitur ac auctor adipiscing.
                        Sit odio tellus hendrerit suspendisse non. Phasellus aenean tellus in nisl fusce orci tristique
                        augue eget. Commodo lacus volutpat libero mauris pulvinar id pellentesque est. Habitant
                        habitasse nunc commodo odio lectus ipsum.
                    </h5>
                    <div class="blog_pop_up_slider">
                        <div class="blog_img_main">
                            <img class="blog_slider_img" src="../assets/images/blog_slider_img1.png"
                                alt="blog_slider_img1">
                        </div>
                        <div class="blog_img_main">
                            <img class="blog_slider_img" src="../assets/images/blog_slider_img2.png"
                                alt="blog_slider_img2">
                        </div>
                        <div class="blog_img_main">
                            <img class="blog_slider_img" src="../assets/images/blog_slider_img3.png"
                                alt="blog_slider_img3">
                        </div>
                        <div class="blog_img_main">
                            <img class="blog_slider_img" src="../assets/images/blog_slider_img4.png"
                                alt="blog_slider_img4">
                        </div>
                    </div>
                    <h5 class="integer eget font_w_font_s1">
                        Non vel eget pharetra vestibulum orci amet feugiat mi cras. Neque ac duis sed viverra volutpat.
                        Natoque habitasse sit in interdum ut in pharetra proin amet. Non id egestas tellus enim nisi
                        proin. Vel neque gravida sed nunc. Scelerisque vulputate sit tellus dui. Sollicitudin id nec
                        amet porttitor id. In condimentum id id phasellus eu lobortis quis porta nisi.
                    </h5>
                    <div class="next_prev_share  position-relative">
                        <div class="next_prev_arrow">
                            <i class="fa-solid fa-arrow-left"></i>
                            <h5 class="blog_next_prev font_w_font_s1">Prev</h5>
                        </div>
                        <div class="share-button share share2">
                            <i class="ri-share-line share-btn share-btn2"></i>
                            <div class="social top center networks-5 ">
                                <a class="fbtn facebook" href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a class="fbtn instagram" href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                                <a class="fbtn whatsapp" href="https://wa.me/+12345678899" target="_blank">
                                    <i class="ri-whatsapp-line"></i>
                                </a>
                                <a class="fbtn linkedin" href="https://www.linkedin.com/" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </div>
                        </div>
                        <div class="next_prev_arrow">
                            <h5 class="blog_next_prev font_w_font_s1">Next</h5>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="page-wrapper trigger">
                        <div class="circle-wrapper">
                            <div class="warning circle_close"></div>
                            <div class="close-btn font_w_font_s1">CLOSE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- ======================================= Portfolio gallery ================================== -->
 <!--    <div id="popup1" class="overlay_gallery">
        <div class="popup_gallery">
            <h2 class="city_gallery">City 3D View Gallery</h2>
            <a class="close" href="#">&times;</a>
            <div id="cbwrap">
                <div class="gallery">
                    <img src="../assets/images/gallery_img1.png" alt="gallery_img1">
                    <img src="../assets/images/gallery_img2.png" alt="gallery_img2">
                    <img src="../assets/images/gallery_img3.png" alt="gallery_img3">
                    <img src="../assets/images/gallery_img4.png" alt="gallery_img4">
                    <img src="../assets/images/gallery_img5.png" alt="gallery_img5">
                    <img src="../assets/images/gallery_img1.png" alt="gallery_img1">
                    <img src="../assets/images/gallery_img4.png" alt="gallery_img4">
                    <img src="../assets/images/gallery_img2.png" alt="gallery_img2">
                    <img src="../assets/images/gallery_img5.png" alt="gallery_img5">
                </div>
            </div>
        </div>
    </div> -->
    <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
    <script src="{{asset('assets/javascript/magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/javascript/progresscircle.js')}}"></script>
    <script src="{{asset('assets/javascript/cursor.js')}}"></script>
    <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/javascript/slick.min.js')}}"></script>
    <script src="{{asset('assets/javascript/hexagon_animation/particles.min.js')}}"></script>
    <script src="{{asset('assets/javascript/spider_animation/spider_animation.js')}}"></script>
    <script src="{{asset('assets/javascript/script.js')}}"></script>
</body>
</html>