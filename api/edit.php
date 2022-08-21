<?php
include "../base.php";

$id = $_POST['id']??'';
$table = $_POST['table'];






switch ($table) {
    case 'value':
        $title = $_POST['title'];
        $img = $_FILES['img'];
        $demo = $_POST['demo'];
        $github = $_POST['github'];
        $sh = $_POST['sh'];
        $del = $_POST['del'];
        $rank = $_POST['rank'];

        if(!empty($img['tmp_name'])){
            $_POST['img']=$img['name'];
            move_uploaded_file($img['tmp_name'],'../upload/'.$img['name']);
        }else{
            $_POST['img']=$Portfolio->find($id)['img'];
        }
        
        




        
    break;
    case 'value':
            
            
            




            
    break;
    case 'value':
            
            
            




            
    break;
    case 'value':
            
            
            




            
    break;
    case 'value':
            
            
            




            
    break;
    case 'value':
            
            
            




            
    break;
    case 'value':
            
            
            




            
    break;
    case 'value':
            
            
            




        
    break;

}