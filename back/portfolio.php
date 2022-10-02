<h1 class="mb-5">Portfolio Managment</h1>


<div class="row box">
    <div class="col-12 blur px-3">
        <form action="./api/edit.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <table id="table_id" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 18%;">Project</th>
                            <th style="width: 10%;">Pic</th>
                            <th style="width: 10%;">Demo url</th>
                            <th style="width: 21%;">Github</th>
                            <th style="width: 21%;">Action</th>
                            <th style="width: 20%;">Edit</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $rows = $Portfolio->all("order by rank");
                        foreach ($rows as $key => $value) {
                            $rank = str_pad($value['rank'], 2, "0", STR_PAD_LEFT);
                            $prev = (isset($rows[$key - 1])) ? $rows[$key - 1]['id'] : $value['id'];
                            $next = (isset($rows[$key + 1])) ? $rows[$key + 1]['id'] : $value['id'];
                        ?>
                            <tr>
                                <td><p><?= $value['title'] ?></p>
                                <button id="title<?= $value['id'] ?>">Edit</button>
                                </td>
                                <td><img class="img" src="<?= $value['img'] ?>" alt=""></td>
                                <td><textarea name="demo[]" cols="25" rows="2"><?= $value['demo'] ?></textarea></td>
                                <td><textarea name="github[]" cols="25" rows="2"><?= $value['github'] ?></textarea></td>
                                <td class="flex">
                                    
                                    <div class="flexcol">
                                        <span><input type="checkbox" name="sh[]" value="<?= $value['id']; ?>" <?=($value['sh']==1)?'checked':'';?>></span><span>Show</span>
                                        <span><input type="checkbox" name="del[]" value="<?= $value['id']; ?>"></span><span>Del</span>
                                    </div>
                                    <div class="flexcol">
                                        <button class="act_btn" type="button" data-rank="<?= $value['rank']; ?>" data-id="<?= $value['id']; ?>" onclick="sw('resume_portfolio',[<?= $value['id']; ?>,<?= $prev; ?>])">Up</button>
                                        <button class="act_btn" type="button" data-rank="<?= $value['rank']; ?>" data-id="<?= $value['id']; ?>" onclick="sw('resume_portfolio',[<?= $value['id']; ?>,<?= $next; ?>])">Dn</button>
                                    </div>
                                    <div>
                                        <div> Now</div>
                                        <textarea name="rank[]" cols="2" rows="1"><?= $rank ?></textarea>
                                    </div>

                                </td>
                                <td><input class="inputfile " type="file" name="img[]" value="./img/portfolio/<?= $value['img'] ?>"></td>

                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div>
                    <input type="hidden" name="table" value="portfolio">
                    <input class="btn btn-success" type="submit" value="Submit">
                    <input class="btn btn-primary" type="button" value="Add" data-toggle="modal" data-target="#Modal">
                    <input class="btn btn-warning" type="reset" value="Reset">
                </div>
            </div>
        </form>
    </div>
</div>

<!-- 新增檔案用的MODAL -->
<div class="modal fade" id="Modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <form action="./api/add.php" method="post" class="text-center">
                    <input type="text" class="form-control w-50 m-auto" name="title" placeholder="Title"><br>
                    <textarea name="" name="demo" cols="30" rows="2" placeholder="Demo Url"></textarea><br>
                    <textarea name="" name="github" cols="30" rows="2" placeholder="github Url"></textarea><br>
                    <input type="file" class="form-control w-50 m-auto" name="img">
                    <hr>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-info">Reset</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- 新增檔案用的MODAL 結束 -->

<script>
    function sw(table, id) {
        $.post("./api/switch.php", {table,id}, () => {

            location.reload();
        })
    }
</script>