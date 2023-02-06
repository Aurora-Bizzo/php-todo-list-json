<?php 

    include __DIR__ .'/functions.php';

    $string = file_get_contents('array.json');
    
    $list = json_decode($string, true);
    
    if(isset($_POST['language'])){
        $list = addTodo($list, $_POST);
    }

    if(isset($_POST['delete'])){
        $list = deleteTodo($list, $_POST['delete']);
    }

    header('Content-Type: application/json');
    echo json_encode($list);
?>