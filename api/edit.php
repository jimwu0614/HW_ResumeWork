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

        
        $data['img'] = $_FILES['img'];
        
        // dd($data['img']['tmp_name']);
        dd($_FILES['img']);

        
        if(!empty($data['img']['tmp_name'])){
            $data['img']=$data['img']['name'];
            move_uploaded_file($data['img']['tmp_name'],'../img/portfolio/'.$data['img']['name']);
        }else{
            $data['img']=$Portfolio->find($id)['img'];
        }
        
        



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