<?php
include('contact.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Amrit's Page</title>

    <script src="https://kit.fontawesome.com/8f510dc2d5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="script.js"></script>

    <!--light box-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link href="node_modules/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
    <script src="node_modules/lightbox2/dist/js/lightbox.js"></script>

</head>

<body>


    <!--nav bar-->
    <div class="navbar">
        <div class="logo">
            <img class="img" src="logo.png">
            <h4>Developer Environment</h4>
        </div>
        <ul id="nav-link" class="nav-link">
            <li><a href="#profile">Profile</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
        <!--     <li><button onclick="openSubMenu()">More <i class="fa fa-caret-down"></i></button>
                <ul class="sub_nav_list">
                    <li><a href="#">Achievement</a></li>
                    <li><a href="#">List 1</a></li>
                    <li><a href="#">List 1</a></li>
                </ul>
            </li> -->
        </ul>
        <div id="dropdown" onclick="openclosenavbar()" class="dropdown">
            <a href="#"><i class="fas fa-bars"></i></a>
        </div>
    </div>

    <!-- Profile section-->

    <!--profile section background-->
    <div id="profile" class="profile">
        <div class="left"></div>
        <div class="right"></div>
    </div>

    <!--profile section content (this overlaps above background)-->
    <div class="profiletop">
        <div class="profileinfo">
            <h4>Hi, I am Amrit Kharel.</h4>
            <h5>I am Recent Graduate who specialises in Web Development and Mobile Development.</h5>
            <a href="#contact"><button>Hire Me</button></a>
        </div>
        <div class="profileimg">
            <img src="profilepic2.png">
        </div>
    </div>

    <!-- About -->
    <div id="about" class="block">
        <h4 class="title">About Myself</h4>
        <hr class="title-line" />
        <div class="about-content">
            <img src="profilepic4.jpg">
            <div class="aboutinfo">
                <h5>A graduate student who loves to learn and explore new ideas and concept. Able to adapt and work
                    cooperatively to enhance workflow. An amusing, honest, and charismatic person who enjoys group work
                    and new challenges. Always kept me busy with some project or followed an online tutorial to enhance
                    my skill and build my experience. With all this skill and experience accumulated over the years, I
                    would like to utilise them in your workplace and take opportunities to learn and grow together with
                    your business.</h5>
                <a href="resume_amrit.pdf" target="_blank"><button class="btn-1">Resume</button></a>
                <!-- <a href="resume_amrit.pdf" target="_blank"><button class="btn-1">Cover Letter</button></a> -->
            </div>
        </div>

    </div>



    <!-- Education/certificates-->
    <div class="back-2">
        <div id="education" class="block">
            <h4 class="title">Certificates</h4>
            <hr class="title-line" />

            <!-- add certification here-->
            <div class="grid">
                <div class="card-1">
                    <a href="hsc.JPG" data-lightbox="image-1" data-title="HSC certificated achieved afte complating High School">
                        <img src="hsc.JPG" alt="">
                    </a>

                </div>

                <div class="card-2">
                    <a href="inroads.JPG" data-lightbox="image-1" data-title="In Roads Certificate after completing ABCN Program">
                        <img src="inroads.JPG" alt="">
                    </a>
                </div>

                <div class="card-3">
                    <a href="cert3.jpg" data-lightbox="image-1" data-title="Certificate 3 in IDT from TAFE NSW">
                        <img src="cert3.jpg" alt="">
                    </a>
                </div>

                <div class="card-4">
                    <a href="comingsoon.jpg" data-lightbox="image-1" data-title="Bachelor Certificate in ICT from Western Sydney University">
                        <img src="comingsoon.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- skills-->
    <div id="skills" class="block">
        <h4 class="title">Skills</h4>
        <hr class="title-line" />

        <div class="grid-2">


            <div class="box-1">

                <div class="top-section">
                    <span class="title">Web Development</span>
                    <div class="progress-bar">
                        <div class="progress-completed" style="width: 70%;"></div>
                    </div>
                    <span class="progress-indicator">70%</span>
                    <i onclick="showmore('.detail-skill-1')" class="fas fa-arrow-down show-more"></i>
                </div>

                <div class="detail-skill-1">

                    <div class="skill-item">
                        <span>HTML</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 90%;"></div>
                        </div>
                        <span class="progress-indicator">90%</span>
                    </div>


                    <div class="skill-item">
                        <span>CSS</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 80%;"></div>
                        </div>
                        <span class="progress-indicator">80%</span>
                    </div>

                    <div class="skill-item">
                        <span>PHP</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 70%;"></div>
                        </div>
                        <span class="progress-indicator">70%</span>
                    </div>

                    <div class="skill-item">
                        <span>JavaScript</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 65%;"></div>
                        </div>
                        <span class="progress-indicator">65%</span>
                    </div>

                    <div class="skill-item">
                        <span>XML</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 50%;"></div>
                        </div>
                        <span class="progress-indicator">50%</span>
                    </div>

                </div>

            </div>

            <div class="box-2">

                <div class="top-section">
                    <span class="title">Mobile App Development</span>
                    <div class="progress-bar">
                        <div class="progress-completed" style="width: 60%;"></div>
                    </div>
                    <span class="progress-indicator">60%</span>
                    <i onclick="showmore('.detail-skill-2')" class="fas fa-arrow-down show-more"></i>
                </div>

                <div class="detail-skill-2">

                    <div class="skill-item">
                        <span>Java</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 70%;"></div>
                        </div>
                        <span class="progress-indicator">70%</span>
                    </div>


                    <div class="skill-item">
                        <span>Swift</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 60%;"></div>
                        </div>
                        <span class="progress-indicator">60%</span>
                    </div>

                </div>

            </div>

            <div class="box-3">

                <div class="top-section">
                    <span class="title">Data Analyst</span>
                    <div class="progress-bar">
                        <div class="progress-completed" style="width: 40%;"></div>
                    </div>
                    <span class="progress-indicator">40%</span>
                    <i onclick="showmore('.detail-skill-3')" class="fas fa-arrow-down show-more"></i>
                </div>

                <div class="detail-skill-3">

                    <div class="skill-item">
                        <span>Python</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 50%;"></div>
                        </div>
                        <span class="progress-indicator">50%</span>
                    </div>


                    <div class="skill-item">
                        <span>R</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 50%;"></div>
                        </div>
                        <span class="progress-indicator">50%</span>
                    </div>

                </div>

            </div>


            <div class="box-4">

                <div class="top-section">
                    <span class="title">Programming</span>
                    <div class="progress-bar">
                        <div class="progress-completed" style="width: 70%;"></div>
                    </div>
                    <span class="progress-indicator">70%</span>
                    <i onclick="showmore('.detail-skill-4')" class="fas fa-arrow-down show-more"></i>
                </div>

                <div class="detail-skill-4">

                    <div class="skill-item">
                        <span>C/C++</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 75%;"></div>
                        </div>
                        <span class="progress-indicator">75%</span>
                    </div>


                    <div class="skill-item">
                        <span>JSON</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 40%;"></div>
                        </div>
                        <span class="progress-indicator">40%</span>
                    </div>

                    <div class="skill-item">
                        <span>JAVA</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 70%;"></div>
                        </div>
                        <span class="progress-indicator">70%</span>
                    </div>

                    <div class="skill-item">
                        <span>PHP</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 70%;"></div>
                        </div>
                        <span class="progress-indicator">70%</span>
                    </div>

                    <div class="skill-item">
                        <span>Python</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 50%;"></div>
                        </div>
                        <span class="progress-indicator">50%</span>
                    </div>

                </div>

            </div>

            <div class="box-4">

                <div class="top-section">
                    <span class="title">DBMS</span>
                    <div class="progress-bar">
                        <div class="progress-completed" style="width: 80%;"></div>
                    </div>
                    <span class="progress-indicator">80%</span>
                    <i onclick="showmore('.detail-skill-5')" class="fas fa-arrow-down show-more"></i>
                </div>

                <div class="detail-skill-5">

                    <div class="skill-item">
                        <span>SQLite</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 90%;"></div>
                        </div>
                        <span class="progress-indicator">90%</span>
                    </div>


                    <div class="skill-item">
                        <span>MYSQL</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 80%;"></div>
                        </div>
                        <span class="progress-indicator">80%</span>
                    </div>

                    <div class="skill-item">
                        <span>MS SQL</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 65%;"></div>
                        </div>
                        <span class="progress-indicator">65%</span>
                    </div>

                    <div class="skill-item">
                        <span>MongoDB</span>
                        <div class="progress-bar">
                            <div class="progress-completed" style="width: 40%;"></div>
                        </div>
                        <span class="progress-indicator">40%</span>
                    </div>

                </div>

            </div>

        </div>


    </div>

    <!-- projects-->
    <div class="back-1">
        <div class="overlay-1">

            <div id="projects" class="block">
                <h4 id="info" class="title">Projects</h4>
                <hr class="title-line" />

                <div class="carousel-container">

                    <div class="slide ">
                        <span class="header">Dhaka</span>
                        <img src="dhaka.png">
                        <a href="http://nepaliphosak.com/"><button>VISIT</button></a>
                        <span class="info">An Ecommerce Website targeting Nepalese Consumer. The project is still work in progress. The Website is built using LAMP stack. The Website is Hosted on Apache 2 in my personal Laptop.</span>
                    </div>

                    <div class="slide slide_active">
                        <span class="header">Bulli</span>
                        <img src="bulli.png">
                        <button>VISIT</button>
                        <span class="info">This Website was my uni project. It was a group project and we were tasked with backend and handling of API. MY part in this project mostly included migrating old data into new system and connecting fornt end with with back end using API.</span>
                    </div>

                    <div class="slide ">
                        <span class="header">Mobile App</span>
                        <img src="website_3.jpg">
                        <button  type="button" disabled="disabled">VISIT</button>
                        <span class="info">This is a mobile version of Website. i was working on it. it is currently on hault. I will resume it when i have free time.</span>
                    </div>



                    <div class="carousel_action">
                        <div onclick="moveprev2()" id="prev" class="prev"></div>
                        <div onclick="movenext2()" id="next" class="next"></div>
                    </div>



                </div>




            </div>

        </div>
    </div>

    <!-- contect me-->
    <div class="back-3">
        <div class="block" id="contact">
            <h2>Contact Me</h2>
            <div class="form">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                    <input type="text" name="name" placeholder="NAME" required>
                    <br />
                    <input type="email" name="email" placeholder="EMAIL" required>
                    <br />
                    <textarea style="resize: none;" placeholder="Enter msg here" name="body" required></textarea>
                    <br />
                    <input type="submit" class="submit" name="submit" value="Submit">
                    <br />
                    <span class="feedback">
                        <?php echo $msg ?>
                    </span>
                </form>

            </div>
        </div>
    </div>



    <!--  <div class="popup">
        <div class="content">
            <h4>Confirmation</h4>
            <span>Email Has Been Sent!</span>
            <button>OK</button>
        </div>
    </div> -->



    <div class="footer">
        <span><i class="fa fa-copyright" aria-hidden="true"> Amrit Kharel </i></span>
        <h5>CONNECT WITH ME</h5>
        <a href="https://www.linkedin.com/in/amrit-kharel-3a23331b5/?originalSubdomain=au">
            <i class="fab fa-linkedin icon"></i>
        </a>


        <a href="https://github.com/amrit06">
            <i class="fa fa-github icon" aria-hidden="true"></i>
        </a>
    </div>



    <script>

    </script>

</body>

</html>