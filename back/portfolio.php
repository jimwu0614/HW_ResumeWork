<h1 class="mb-5">Portfolio Managment</h1>


<div class="row box">
    <div class="col-12 blur px-3">
        <form  action="./api/edit_portfolio.php" method="post">
            <div class="container">
                <table id="table_id" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 18%;">Project</th>
                            <th style="width: 10%;">Pic</th>
                            <th style="width: 10%;">Img url</th>
                            <th style="width: 21%;">Demo url</th>
                            <th style="width: 21%;">Github</th>
                            <th style="width: 20%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $rows = $Portfolio->all();
                        foreach ($rows as $key => $value) {

                        ?>
                        <tr>
                            <td><input type="text" name="title[]" value="<?=$value['title']?>"></td>
                            <td><img class="img" src="<?=$value['img']?>" alt=""></td>
                            <td><input type="file" name="img[]" value="./img/portfolio/<?=$value['img']?>"></td>
                            <td><input type="text" name="demo[]" value="<?=$value['demo']?>"></td>
                            <td><input type="text" name="github[]" value="<?=$value['github']?>"></td>
                            <td class="warp">
                                <div class="flex">
                                    <span><input type="checkbox" name="show[]" value=""></span><span>Show</span>
                                    <span><input type="checkbox" name="del[]" value=""></span><span>Del</span>
                                </div>
                                <div class="flex">
                                    <button class="act_btn">Up</button>
                                    <button class="act_btn">Dn</button>
                                </div>
                            </td>
                        </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>