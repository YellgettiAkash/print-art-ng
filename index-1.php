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
                                    <li ng-repeat="tab in tabs"  ng-class="{'active' : tab.active == true }"  ng-click="selectAttribute(tab)"><a >{{tab.name}}</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-12">
                                <div class="stepwizard">
                                    <div class="stepwizard-row" >
                                        <div class="stepwizard-step" ng-repeat="step in steps track by $index">
                                            <button type="button" class="btn btn-default btn-circle"  data-toggle="tooltip" data-placement="bottom" title="A large tooltip.">{{ $index+1 }}</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script type="text/javascript">
$(document).ready(function(){
    alert('hi');
    
});

        var art = angular.module('myArt',[]);
        art.controller("printArtCtrl",function ($scope,$http) {
        	$scope.tabs = [];
            var req = $http.get('index-2.php');
            req.then(function(data){
                // console.log(data.data);
                $scope.tabs = data.data;
            });
            $('[data-toggle="tooltip"]').tooltip();   
            $scope.category  = false;
            $scope.categories  = [];
            $scope.selectAttribute = function(tab) {
                console.log(tab);
                $scope.steps = tab.steps;
            }
        })
        </script>
    </body>
</html>