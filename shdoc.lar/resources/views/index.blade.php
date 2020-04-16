<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tasks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            html, body {
                margin-top: 20px;
                background-color: #EEF2F4;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 30px;
                font-weight: 600;
            }

            .search {
                font-size: 20px;
                width: 100%;
            }

            .butons
            {
                margin: 0px 20px;
                width: 50px;
                height: 36px;
                border: 0px;
                box-shadow: 0px 0px 1px 2px #ced4da;
            }

            .taslblock
            {
                background: white;
                padding: 2px 10px;
            }

            .taskHeader{
                background-color: #EEF2F4;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 900;
                font-size: 20px;
                padding: 10px;
            }

            .taskDone
            {
                text-decoration: line-through;
            }

            .inputers
            {
                width: 100%;
                margin: 5px;
            }
            .modal
            {
                position: absolute;
                z-index: 1000;
                display: block;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>
    <body ng-app="myApp" ng-controller="tasksCtrl">
    <div class="container">
        <div class="row">
            <div class="col-3"><span class="title">Мои задачи</span></div>
            <div class="col-6">
                <input type="text" ng-model="searchVal" class="search" placeholder="Фильтр + поиск">
                <!--модалка -->
                <div class="container" style="margin-top: 20px">
                <div class="row">
                    <div class="col-12">
                        <select ng-model="selectedRole" class="inputers">
                            <option ng-repeat="role in roles" value="@{{role.id}}">@{{role.name}}</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <input type="text" ng-model="selectedName" placeholder="Введите название или отобразяться все" class="inputers">
                    </div>
                    <div class="col-6">
                        <input type="button" ng-click="getTasks(selectedRole, selectedName)" value="Найти" class="inputers">
                    </div>
                    <div class="col-6">
                        <input type="button" ng-click="getTasks()" value="Сбросить" class="inputers">
                    </div>
                </div>
                </div>
                <!--модалка конец -->
            </div>
            <div class="col-3">
                <input type="button" class="butons" value="🔧">
                <input type="button" class="butons" value="⚡">
            </div>
            <div class="col-12">
                <hr width="100%">
            </div>
        </div>
        <div class="row taslblock">
            <div class="col-12">
                <hr width="100%">
            </div>
            <div class="col-12">
                <h2 class="taskHeader">Задачи</h2>
            </div>
            <div class="col-12">
                <hr width="100%">
                <div  class="col-12" ng-repeat="task in tasks | filter:{'name' : searchVal}">
                   <span ng-class="[(task.closed>0) ? 'taskDone' : '']"> @{{ task.name }} </span>
                </div>
            </div>

        </div>

        </div>

    <script>
        angular.module('myApp', []).controller('tasksCtrl', function($scope, $http) {
            $scope.tasks = <?=$tasks?>;
            $scope.roles = <?=$roles?>;
            $scope.getTasks= function (selRole, selName) {
                $http({ method: 'post',  url: '/AllTasks', data: {role: selRole, name: selName}})
                    .then(function(data){ $scope.tasks=data.data; })
                    .catch(function(err){ console.log('error: ', err); return; });
            }
        });



    </script>
    </body>
</html>
