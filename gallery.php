<?php

include_once "./base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.png" type="image/x-icon">
    <title>Portfolio_Gallery</title>


    <!-- 連結Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 內文用字形 -->
    <link href="http://fonts.cdnfonts.com/css/cadman" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/cat-frankendeutsch" rel="stylesheet">

    <!-- 引入JQ -->
    <!-- <link rel="stylesheet" href="./js/jquery-3.6.0.min.js"> -->
    <script src="./js/jquery-3.6.0.min.js"></script>

    <!-- 通用的CSS -->
    <link rel="stylesheet" href="./css/main.css">

    <!-- 作品集card用的CSS -->
    <link rel="stylesheet" href="./css/hovercard.css">

    <link rel="stylesheet" href="./css/gallery.css">

</head>

<body>
    <h1 class="pt-5">PORTFOLIO</h1>

    <div class="container">
        <div class="row">
            <?php
            $rows = $Portfolio->all(['sh' => "1"], 'ORDER BY `rank`');

            foreach ($rows as $key => $value) {

            ?>

                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <div class="work">
                        <div class="card cardNo_<?= $key ?>">
                            <div class="content">
                                <div class="imgBx">
                                    <img src="<?= $value['img'] ?>">
                                </div>
                                <div class="contentBx">
                                    <h3 class="cardName" id="cardName_<?= $key ?>"><?= $value['title'] ?></h3>
                                </div>
                            </div>
                            <ul class="sci">
                                <li>
                                    <a href="<?= $value['demo'] ?>" class="demo" target="_blank">Demo</a>
                                </li>
                                <li>
                                    <a href="<?= $value['github'] ?>" target="_blank"><i class="fa-brands fa-github"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="work">
                    <div class="card cardNo_<?= $key ?>">
                        <div class="content">
                            <div class="imgBx">
                                <img src="./img/go-back.png">
                            </div>
                            <div class="contentBx">
                                <h3 class="cardName" >Back</h3>
                            </div>
                        </div>
                        <ul class="sci">
                            <li>
                                <a href="./index.php" class="demo" >Back</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>