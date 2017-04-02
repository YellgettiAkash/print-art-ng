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
                        <div class="tab-content">
                            <ul class="nav nav-pills nav-pills-header">
                                <li ng-repeat="tab in tabs"  ng-class="{'active' : tab.active == true }" ><a data-toggle="tab" data-target="#{{tab.id}}">{{tab.name}}</a></li>
                            </ul>
                            <div ng-repeat="tab in tabs" id="{{tab.id}}" class="tab-pane fade " ng-class="{'in active' : tab.active == true }">
                                <div class="row tab-row" ng-repeat="t in tab.properties">
                                    <h3>{{t.name}}</h3>
                                    <hr>
                                    <ul class="nav nav-pills nav-pills-children">
                                        <li class="" ng-repeat="attr in t.attributes" ng-class="{'active' : attr.active == true }"><a  data-toggle="tab" data-target="#{{attr.id}}" ng-click="selectAttribute(t,attr)"> {{attr.name}}</a>

                                        </li>
                                    </ul>
                                    <div ng-show="t.category" ng-repeat="cat in t.categories">
                                        <div ng-repeat="subcat in cat.subcategory">
                                            <div ng-if="cat.id == 'mdf-frame'">
                                                <img ng-src="{{subcat.id}}"  class="img-responsive img-custom-frame">
                                            </div>
                                            <div ng-if="cat.id == 'color-frame'">
                                                <div class="img-custom-frame {{subcat.id}}"></div>
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
        </div>
        <script type="text/javascript">
        var art = angular.module('myArt',[]);
        art.controller("printArtCtrl",function ($scope,$http) {
        	$scope.tabs = [];
            var req = $http.get('data__.json');
            req.then(function(data){
                // console.log(data.data);
                $scope.tabs = data.data;
            });

            $scope.category  = false;
            $scope.categories  = [];
            $scope.selectAttribute = function(tab,attributes) {
                // console.log(attributes.category);
                tab.category = attributes.category;
                tab.categories = attributes.categories;
                $scope.tab = tab;
                console.log(tab);
            }
        })
        </script>
    </body>
</html>