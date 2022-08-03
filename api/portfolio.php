<?php
include_once "../base.php";

// $dsn = "mysql:host=localhost;charset=utf8;dbname=resume";
// $pdo = new PDO($dsn, 'root', '');
// $sql = "SELECT * FROM `resume_portfolio` WHERE `sh` = '1' LIMIT 5";
// $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$rows = $Portfolio->all(['sh'=>"1"],'LIMIT 5');

// echo "<pre>";
// print_r($rows);
// echo "</pre>";

foreach ($rows as $key => $value) {
    // echo "<pre>";
    // print_r ($key);
    // echo "</pre>";
    // echo $key;


    // echo "<pre>";
    // print_r ($value);
    // echo "</pre>";
?>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="work">
            <div class="card cardNo_<?= $key ?>">
                <div class="content">
                    <div class="imgBx">
                        <img src="<?= $value['img'] ?>">
                    </div>
                    <div class="contentBx">
                        <h3 class="cardName" id="cardName"><?= $value['title'] ?></h3>
                    </div>
                </div>
                <ul class="sci">
                    <li>
                        <a href="<?= $value['demo'] ?>" class="demo" id="demo" target="_blank">Demo</a>
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

<div class="col-12 col-md-6 col-lg-4  mb-4">
    <div class="work" data-work="">
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="./img/plus.png">
                </div>
                <div class="contentBx">
                    <h3 class="cardName" id="cardName">See more</h3>
                </div>
            </div>
            <ul class="sci">
                <li>
                    <a href="" class="demo" id="demo">Go</a>
                </li>

            </ul>
        </div>
    </div>
</div>