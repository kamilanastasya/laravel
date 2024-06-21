<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css" />

    <script src="https://kit.fontawesome.com/e19cc4b648.js" crossorigin="anonymous"></script>   

</head>
<body>
    <!-- Header -->
    <header>
        <div class="main-container">
            <div class="nav">
                <span style="color:rgb(247, 245, 245)";>KAMI</span><span style="color:rgb(242, 54, 54)";>LA</span>
                <div class="logo">
                    <nav>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#cercificate">Certificate</a></li>
                            <li><a href="#contact">Contact</a></li>
                            
                        </ul>
                    </nav>
                    <div class="burger"></div>
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>
            </div>
        </div>
        <section id="hero" id="home">
            <div class="hero-left">
                <p>Web Developer</p>
                <h1>Hello There, I'm <span style="color: red;">KAMILA  ANASTASYA</span> From SMK WIKRAMA BOGOR</h1>
            </div>
            <div class="hero-right">
                <img src="img/sapiens.svg" alt="Person-Standing" width="610px" />
            </div>
    </header>
    <!-- End of header-->

    <section id="service">
        <div class="services main-container">
        </div>
    </section>
    <!-- -------About------ -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="img/dump.1.jpg">
                </div>
                <div class="about-col-2"> 
                    <h1 class="sub-title">About Me</h1>
                    <p>im obsessed with making things and even more obsessed with making things better. after graduating from the SMK WIKRAMA BOGOR vocational highschool i've been actively involved in the web design community for the last 2 years. i've been designed website for small bussiness. i also started a design blog, visual swire, where i share inspiration, tutorials, and resources.

                        My speciality is front-end web design and development, smantic HTML & CSS. however, i love helping people with branding and marketing strategy.</p>

                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</a></p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links"onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                            <li><span>Web Developer</span><br>Web App Development</li>
                            <li><span>App Development</span><br>Building Android/iOS apps</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>2021 - Current</span><br>UI/UX Design Training at Electronic Arts</li>
                            <li><span>2022 - 2023</span><br>Team Lead at StarApp LLC.</li>
                            <li><span>2022 - 2023</span><br>UI/UX Design Executive at Shopee International Indonesia</li>
                            <li><span>2022 - 2023</span><br>Internship at ecart eCommerce.</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2021 - Current</span><br>UI/UX Design Training at Electronic Arts</li>
                            <li><span>2022 - 2023</span><br>MBA From PT.Bank Mandiri (TBK)</li>
                            <li><span>2022 - 2023</span><br>BBA from PT.Gojek Indonesia</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -----services---- -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="service-list">
                <div>
                    <i class="fas fa-code"></i>
                    <h2>Web Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo mollitia vitae facere. Quam quo temporibus harum dolore perferendis, ratione omnis inventore sint perspiciatis quae facere maxime a natus accusantium laudantium!</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-crop-simple"></i>                    
                    <h2>UI/UX Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo mollitia vitae facere. Quam quo temporibus harum dolore perferendis, ratione omnis inventore sint perspiciatis quae facere maxime a natus accusantium laudantium!</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store-ios"></i>
                    <h2>App Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo mollitia vitae facere. Quam quo temporibus harum dolore perferendis, ratione omnis inventore sint perspiciatis quae facere maxime a natus accusantium laudantium!</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p>contact@example.com</p>
                <p>08274638291</p>
            </div>
            <div class="contact-right">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>

    <script>


        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname) {
            for(tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents) {
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }

    </script>
</body>
</html>