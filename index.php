<?php 


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.1/axios.min.js" integrity="sha512-NbjaUHU8g0+Y8tMcRtIz0irSU3MjLlEdCvp82MqciVF4R2Ru/eaXHDjNSOvS6EfhRYbmQHuznp/ghbUvcC0NVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div id="app" class="mt-5">
            <div class="container w-50">
                <div class="row">
                    <div class="col-12  d-flex justify-content-center">
                        <h1 class="text-secondary display-1">Todo List</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-unstyled">
                            <li class="py-3 px-2" v-for="(todo, index) in todoList">
                                <form class="search-wrapper cf">
                                    <input class="absolute" type="text" v-model="todo.language" :placeholder="(errorMessage != '') ? errorMessage : 'Linguaggio'" class="form-control">
                                    <button class="relative m-1 btn btn-square btn-danger" @click="deleteTodo(index)">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input class="absolute" type="text" v-model="language" :placeholder="(errorMessage != '') ? errorMessage : 'Linguaggio'" class="form-control">
                        <button class="relative btn btn-primary" @click="addTodo">Inserisci</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="./js/script.js"></script>
    </body>
</html>