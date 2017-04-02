<!DOCTYPE html>
<html lang="en" ng-app="myArt">
    <head>
        <title>Bootstrap Case</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <!-- ng-libs -->
        <script type="text/javascript" src="assets/angular-js/angular.min.js"></script>
        <script type="text/javascript" src="assets/angular-js/ui-bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container" >
        <div class="row" ng-controller="printArtCtrl">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-4 col-border">
                        <img src="assets/images/sample.jpg" class="img-responsive">
                    </div>
                    <div class="col-sm-8 col-border">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="nav nav-pills nav-pills-header">
                                    <li ng-repeat="tab in tabs"  ng-class="{'active' : tab.active == true }"   data-toggle="tab" data-target="#{{tab.id}}"  ng-click="selectTab(tab)"><a >{{tab.name}}</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-12">
                                <div  >
                                    <div ng-if="_step == 'frame'">
                                        <h3>{{_step}}</h3>
                                        <hr>
                                        <img ng-src="{{cat.id}}" ng-repeat="cat in categories"  class="img-responsive img-custom-frame">
                                    </div>
                                    <div ng-if="_step == 'print_size' || _step == 'print_type'">
                                        <h3>{{_step}}</h3>
                                        <hr>
                                        <ul class="nav nav-pills nav-pills-children">
                                            <li class="" ng-repeat="cat in categories" ng-class="{'active' : cat.active == true }"><a  data-toggle="tab" data-target="#{{cat.id}}" ng-click="selectAttribute(t,cat)"> {{cat.name}}</a></li>
                                        </ul>
                                    </div>
                                    <div ng-if="_step == 'mat' || _step == 'mdf_color'" >
                                            <h3>{{_step}}</h3>
                                        <hr>
                                                <div ng-repeat="cat in categories" class="img-custom-frame {{cat.id}}"></div>
                                            </div>

                                </div>
                            </div>
                            <div class="col-sm-12 top-margins">
                                <div class="stepwizard">
                                    <div class="stepwizard-row" >
                                        <div class="stepwizard-step" ng-repeat="step in steps track by $index">
                                            <button type="button" class="btn btn-default btn-circle"  ng-click="selectAttribute(step)">{{ $index+1 }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script type="text/javascript">


        var art = angular.module('myArt',[]);
        art.controller("printArtCtrl",function ($scope,$http) {
        	$scope.tabs = [];
            var req = $http.get('index-2.php');
            req.then(function(data){
                // console.log(data.data);
                $scope.tabs = data.data;
            });
            $('[data-toggle="tooltip"]').tooltip();   
            $scope.categories  = [];
            $scope._step  = '';
            $scope.selectTab = function(tab) {
                $scope.categories  = [];
                $scope._step  = '';
                $scope.steps = tab.steps;
            }

            $scope.selectAttribute = function(step) {
                $scope.categories  = [];
                $scope._step  = '';
                console.log(step);
                var req = $http.get('index-3.php');
                req.then(function(data){
                    var res = data.data;
                    angular.forEach(res,function(val,key){
                        if(key == step){
                            $scope._step = key;        
                            $scope.categories = val;        
                        }
                    })
                    // console.log(data.data.print_size);
                    // $scope.categories = data
                    // $scope.tabs = data.data;
                });
            }


        })
        </script>
    </body>
</html>