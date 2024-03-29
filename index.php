<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.png" type="image/x-icon">
    <title>吳佳駿_Chia-Chun,Wu_Portfolio</title>



    <!-- 連結Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 內文用字形 -->
    <link href="http://fonts.cdnfonts.com/css/cadman" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/cat-frankendeutsch" rel="stylesheet">

    <!-- 引入JQ -->
    <!-- <link rel="stylesheet" href="./js/jquery-3.6.0.min.js"> -->
    <script src="./js/jquery-3.6.0.min.js"></script>

    <!-- 通用的CSS -->
    <link rel="stylesheet" href="./css/main.css">

    <!-- 頁首圖片用的CSS -->
    <link rel="stylesheet" href="./css/Head_Pic.css">

    <!-- 履歷表時間線用的CSS -->
    <link rel="stylesheet" href="./css/timeline.css">

    <!-- 作品集card用的CSS -->
    <link rel="stylesheet" href="./css/hovercard.css">
</head>

<body>
    <!-- 頁首區 -->
    <!-- 導覽列 -->
    <nav class="navbar navbar-expand-md navbar-light bg-light " id="top_nav_bar">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" id="nav_about" href="#about">About Me <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="nav_experience" href="#experience">Experience</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="nav_portfolio" href="#portfolio">Portfolio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="nav_skill" href="#skill">Skill</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="nav_design" href="#design">Design</a>
                </li>

                <li class="nav-item" id="loginbtn">
        <?php
                if(isset($_SESSION['admin'])){
                    echo '<a href="./back.php" class="nav-link" id="nav_"   >Back Stage</a>';
                }else{
                    echo '<a class="nav-link" id="nav_" type="button" data-toggle="modal" data-target="#loginModal">Admin Login</a>';
                }
        ?>
                </li>
                
            </ul>
        </div>
    </nav>
    <!-- 導覽列 END -->


    <!-- 登入用 Modal -->
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="./chk.php" method="post" class="text-center">
                        <input type="text" class="form-control w-50 m-auto" name="acc" placeholder="Account">
                        <input type="password" class="form-control w-50 m-auto" name="pw" placeholder="Password" >
                        <hr>
                        
                        <button type="submit" class="btn btn-success" >Submit</button>
                        <button type="reset" class="btn btn-info" >Reset</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 登入用 Modal END -->

    <!-- 捲動式圖片 -->
    <section class="col-md HeadPic">

        <img src="./img/bg.jpg" id="bg" alt="">
        <img src="./img/moon.png" id="moon" alt="">
        <img src="./img/mountain.png" id="montain" alt="">
        <img src="./img/road.png" id="road" class="road" alt="">
        <h1 class="text" id="text">Hello, I'm Chia-Chun.</h1>
        <br>
        <h2 id="text2">Keep <span class="auto-type"></span></h2>

    </section>
    <!-- 捲動式圖片END -->



    <!-- 內文主體 -->
    
    <!-- 自我介紹 -->
    <article class="container mt-5">
        <div class="row row1">
            <div class="col-12 col-md-12" id="about">
                <h1 class="display-2 section_title">About Me</h1>
            </div>
            <div class="col-12 col-md-12 trigger" id="trigger_About"></div>
            <div class="col-12 col-md-4 ">
                <img class="mypic" id="mypic" src="./img/myPic.jpg" alt="mypic">
            </div>
            <div class="col-12 col-md-8 profile" id="profile">
                <h4>Hello,I'm Chia-Chun<a href="https://github.com/jimwu0614" target="_blank" class="github"><i
                            class="fa-brands fa-github"></i></a></h4>
                <p>
                    A newbie web developer since 2022 , <br>
                    with passion to learn and challenge new things. <br>
                    I'm an communicative and organized person. <br>
                    And here is my portfolio. <br>
                </p>
            </div>

        </div>
    </article>
    <!-- 自我介紹END -->


    <!-- 過場圖片 -->
    <article class="m-5 rollImg rollImg1">
        <div class="row connect connect1">
            <img src="./img/connpic1.jpg" alt="">
        </div>
    </article>
    <!-- 過場圖片END -->


    <!-- 經歷 -->
    <article class="container" id="experience">
        <div class="row">
            <div class="col-12 col-md-12">
                <h1 class="display-3 sm-display-2 col-12 col-md-12 section_title">Experience</h1>
            </div>

            <div class="col-12 col-md-12 trigger" id="trigger_Experience"></div>

            <div class="col-12">
                <div class="experance_container">
                    <div class="top-section">
                        <h1>Learning Timeline</h1>
                    </div>


                    <div class="timeline">
                        <div class="line"></div>

                        <div class="section">
                            <div class="bead"><span class="odd_icon"><i class="fa-solid fa-graduation-cap"></i></span>
                            </div>
                            <div class="content">
                                <h3 class="timeline_header">Workforce Development Agency,Taiwan</h3>
                                <h4 class="timeline_subheader">2022/03/28~2022/09/15</h4>
                                <p>
                                    Learning basic front-end and back-end web page skill. <br>
                                    Training hours : 936Hrs
                                </p>
                            </div>
                        </div>


                        <div class="section">
                            <div class="bead"><span class="even_icon"><i class="fa-solid fa-briefcase"></i></span></div>
                            <div class="content">
                                <h2 class="timeline_header">Bakesi Wine Group Co., Ltd.</h2>
                                <h4 class="timeline_subheader">2021/06~2021/10</h4>

                                <p style="color: lightgreen;">Customer Service and Sales Team Leader </p>
                                <p>Selling and introducing product <br>
                                    After-sales service <br>
                                    Customer complaint handling
                                </p>
                            </div>
                        </div>


                        <div class="section">
                            <div class="bead"><span class="odd_icon"><i class="fa-solid fa-graduation-cap"></i></span>
                            </div>
                            <div class="content">
                                <h2 class="timeline_header">Chinese Culture University</h2>
                                <h4 class="timeline_subheader">2011/09~2013/01</h4>

                            </div>
                        </div>


                    </div>
                </div>
            </div>


    </article>
    <!-- 經歷END -->


    <!-- 過場圖片 -->
    <article class="m-5 rollImg rollImg2">
        <div class="row connect connect2">
            <img src="./img/connpic2.jpg" alt="">
        </div>
    </article>
    <!-- 過場圖片END -->


    <!-- web作品集 -->
    <article class="container" id="portfolio">

        <div class="row" >
            <div class="col-12 col-md-12">
                <h1 class="display-2 section_title">Portfolio</h1>
            </div>
            <div class="col-12 col-md-12 trigger" id="trigger_Portfolio"></div>
        </div>

        <div class="row" id="portfolioBox">
            



        </div>
    </article>
    <!-- web作品集END -->


    <!-- 過場圖片 -->
    <article class="m-5 rollImg rollImg3">
        <div class="row connect connect3">
            <img src="./img/connpic3.jpg" alt="">
        </div>
    </article>
    <!-- 過場圖片END -->


    <!-- 技能 -->
    <article class="container" id="skill">
        <div class="row">
            <div class="col-12 col-md-12">
                <h1 class="display-2 section_title">Skill</h1>
            </div>
            <div class="col-12 col-md-12 trigger" id="trigger_Skill"></div>
            <div class="row col mx-4 justify-content-center">
                <h1 class="col-12">Back-End</h1>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/PHP.png" alt="PHP"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/PhpMyAdmin.png" alt="PhpMyAdmin"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/MySQL.png" alt="MySQL"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/Laravel.png" alt="Laravel"></div>
            </div>
            <div class="row col mx-4 justify-content-center">
                <h1 class="col-12 ">General Skill</h1>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/AJAX.png" alt="AJAX"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/git.png" alt="git"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/XAMPP.png" alt="XAMPP"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/Illustrator.png" alt="Illustrator"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/photoshop.png" alt="Photoshop"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/FileZilla.png" alt="FileZilla"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/figma.png" alt="Figma"></div>
            </div>
            <div class="row col mx-4 justify-content-center">
                <h1 class="col-12 ">Front-End</h1>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/HTML.png" alt="HTML"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/CSS.png" alt="CSS"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/Javascript.png" alt="Javascript"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/jquery.png" alt="Jquery"></div>
                <div class="col-6 mb-4 skill_img_box"><img class="skill_img" src="./img/skill/bootstrap.png" alt="Bootstrap"></div>
            </div>
        </div>
    </article>
    <!-- 技能END -->


    <!-- 過場圖片 -->
    <article class="m-5 rollImg rollImg4">
        <div class="row connect connect4">
            <img src="./img/connpic4.jpg" alt="">
        </div>
    </article>
    <!-- 過場圖片END -->


    <!-- 視覺作品集 -->
    <article class="container" id="design">
        <div class="row">
            <div class="col-12 col-md-12">
                <h1 class="display-2 section_title">Design</h1>
            </div>
            <div class="col-12 col-md-12 trigger" id="trigger_Design"></div>

            <div class="col-12 col-md-12">
                <h1 class="display-4">Illustrator Logos design</h1>
            </div>
            <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                    src="./img/heart_line.png" alt=""></div>
            <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                    src="./img/ball.png" alt=""></div>
            <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                    src="./img/REDPOINT.png" alt=""></div>
            <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                    src="./img/mountainAI.png" alt=""></div>
            <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                    src="./img/rocket.png" alt=""></div>



            <div class="col-12 col-md-12">
                <h1 class="display-4">30 Animal Challenge</h1>
            </div>
            <div class="col-12 col-md-12">
                <h1 class="display-6">Use golden ratio to drow Animal</h1>
            </div>
            <div class="row col-12 animal_row">
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/001.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/002.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/003.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/004.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/005.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/006.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/007.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/008.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/009.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/010.png" alt=""></div>
            </div>
            <div class="row col-12 animal_row">
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/011.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/012.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/013.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/014.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/015.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/016.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/017.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/018.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/019.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/020.png" alt=""></div>
            </div>
            <div class="row col-12 mb-4 animal_row">
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/021.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/022.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/023.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/024.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/025.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/026.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/027.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/028.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/029.png" alt=""></div>
                <div class="col p-0 mt-3"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                        src="./img/animal/030.png" alt=""></div>
            </div>

            <div class="col-12 col-md-12">
                <h1 class="display-4">Photoshop design</h1>
            </div>
            <div class="col p-0 mt-3 mb-4"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                    src="./img/PSbanner.jpg" alt=""></div>
            <div class="col p-0 mt-3 mb-4"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                    src="./img/PScalender.jpg" alt=""></div>
            <div class="col p-0 mt-3 mb-4"><img type="button" data-toggle="modal" data-target="#myModal" class="animal"
                    src="./img/PSposter.jpg" alt=""></div>

        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-header">

                </div>
            </div>
        </div>
    </article>
    <!-- 視覺作品集END -->



    <!-- 內文主體END -->


    <footer class="footer ">
        Made By Chia-Chun,Wu <br>
        <div>
            <a href="https://github.com/jimwu0614" target="_blank">
                <i class="fa-brands fa-github mr-2"></i>
            </a>
            <a href="mailto:a0283137@gmail.com" target="_blank">
                <i class="fas fa-lg fa-envelope mr-2"></i>
            </a>
            <a href="tel:+886-920520614" target="_blank">
                <i class="fas fa-lg fa-mobile-alt mr-2"></i>
            </a>
        </div>
    </footer>




    <!-- 返回最上面的按鈕 -->
    <div id="go_top_page">
        <a href="#" class="animate__animated animate__bounceIn animate__slower animate__infinite"><i
                class="fas fa-chevron-up"></i></a>
    </div>
    <!-- 返回最上面的按鈕END -->

    <!-- 打字效果的引入 -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- 頁首圖片用的JS -->
    <script src="./js/pic.js"></script>
    <!-- 回頁首按鈕及nav_bar用的JS -->
    <script src="./js/top_button.js"></script>
    <!-- 滾軸事件相關用的JS -->
    <script src="./js/scroll.js"></script>
    <!-- PS&AI圖片MODAL用的JS -->
    <script src="./js/img.js"></script>
    <!-- 履歷表時間線用的CSS -->
    <script src="./js/timeline.js"></script>


    <script>
        $( document ).ready(function() {
            $.post("./api/portfolio.php",(work)=>{
                $("#portfolioBox").html(work);
            })


        });
    </script>
</body>

</html>