<?php
include "../base.php";

$id = $_POST['id']??'';
$table = $_POST['table'];






switch ($table) {
    case 'portfolio':
        $data = [];
        $data['title'] = $_POST['title'];
        $data['demo'] = $_POST['demo'];
        $data['github'] = $_POST['github'];
        $data['sh'] = $_POST['sh'];
        $data['del'] = $_POST['del'];
        $data['rank'] = $_POST['rank'];

        $img = $_FILES['img'];

        if(!empty($img['tmp_name'])){
            $data['img']=$img['name'];
            move_uploaded_file($img['tmp_name'],'../upload/'.$img['name']);
        }else{
            $data['img']=$Portfolio->find($id)['img'];
        }
        
        
        dd($data);



        // to("back.php?do=portfolio");
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