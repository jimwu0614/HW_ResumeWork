<?php
session_start();
date_default_timezone_set("Asia/Taipei");

class DB{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=resume";
    protected $user = "root";
    protected $pw = "";
    // protected $dsn = "mysql:host=localhost;charset=utf8;dbname=s1110205";
    // protected $user = "s1110205";
    // protected $pw = "s1110205";
    protected $table;
    protected $pdo;

    function __construct($table)
    {
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->user,$this->pw);
    }

    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    function all(...$arg){
        $sql="SELECT * FROM $this->table ";
        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key=>$value){
                    $tmp[] =" `$key` = '$value' ";
                }
                $sql.= " WHERE ". join(" AND ",$tmp);
            }else{
                $sql.=$arg[0];
            }
        }

        if (isset($arg[1])) {
            $sql.=$arg[1];
        }

        // echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC) ;
    }


    function find($id){
        $sql="SELECT * FROM $this->table WHERE";

            if(is_array($id)){
                foreach($id as $key=>$value){
                    $tmp[] =" `$key` = '$value' ";
                }
                $sql.=  join(" AND ",$tmp);
            }else{
                $sql.=" `id` =  `$id` ";
            }


        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC) ;
    }


    function del($id){
        $sql="DELETE FROM $this->table WHERE";

            if(is_array($id)){
                foreach($id as $key=>$value){
                    $tmp[] =" `$key` = '$value' ";
                }
                $sql.=  join(" AND ",$tmp);
            }else{
                $sql.=" `id` =  `$id` ";
            }


        // echo $sql;
        return $this->pdo->exec($sql);
    }

    
    function safe($array){
        

            if(isset($array['id'])){
                foreach($array as $key=>$value){
                    $tmp[] =" `$key` = '$value' ";
                }
                $sql="UPDATE $this->table SET ". join(",",$tmp) ."WHERE  `id` = '". $array['id'] ."'";
            }else{
                // INSERT INTO `b_quiz_2_title` (`id`, `img`, `text`, `sh`) VALUES (NULL, '圖', '文', '999')
                $key=join("`, `",array_keys($array));
                $value=join("', '",$array);
                $sql="INSERT INTO `$this->table` (`$key`) VALUES ('$value')";
            }


        // echo $sql;
        return $this->pdo->exec($sql);
    }

    






}

$Portfolio=new DB('resume_portfolio')

?>
