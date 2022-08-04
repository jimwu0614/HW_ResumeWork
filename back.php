<?php
include_once "./base.php";
if (!isset($_SESSION['admin'])) {
    header("./index.html");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BackStage</title>

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
    <link rel="stylesheet" href="./css/back.css">

</head>

<body>

<!-- 左邊導覽列 -->
    <div class="side-nav">
        <a href="#" class="logo">
            <img src="./logo.png" alt="" class="logo-img">
            <img src="./logo-icon.png" alt="" class="logo-icon">
        </a>

        <ul class="nav_links">
            <li>
                <a href=""><i class="fa-solid fa-pen-nib"></i><p>About</p></a>
            </li>
            <li>
                <a href=""><i class="fa-solid fa-graduation-cap"></i><p>Experience</p></a>
            </li>
            <li>
                <a href=""><i class="fa-solid fa-code"></i><p>Portfolio</p></a>
            </li>
            <li>
                <a href=""><i class="fa-solid fa-book-skull"></i><p>Skill</p></a>
            </li>
            <li>
                <a href=""><i class="fa-solid fa-paintbrush"></i><p>Design</p></a>
            </li>
            <li>
                <a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i><p>Logout</p></a>
            </li>
            <div class="active"></div>
        </ul>
    </div>
<!-- 左邊導覽列 END-->

<div class="container">
<?php
// $_GET['do']??
?>
</div>


</body>

</html>