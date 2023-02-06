<?php 

    function addTodo($list, $language){
        
        $list[] = $language;

        file_put_contents('array.json', json_encode($list, JSON_PRETTY_PRINT));

        return $list;

    }
    
    function deleteTodo($list, $index){
        
        unset($list[$index]);

        file_put_contents('array.json', json_encode($list, JSON_PRETTY_PRINT));

        return $list;
    }
    
?>