<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
  <style type="text/css">
    .btn-space{
       margin-right: 10px;
    }
  </style>
</head>

<body ng-app="myApp" ng-controller="home">
   <div class="container">
   <div class="row">
      <div class="col-sm-12" >
         <div class="panel panel-default">
            <div class="panel-heading"> Print Art </div>
            <div class="panel-body">
               <div class="col-sm-12" >
                  <button class="btn  btn-space "  
                     ng-class="{'btn-primary' : tab.id == _tab,'btn-default' : tab.id != _tab }"
                     ng-repeat="(key, tab) in tabs" 
                     ng-click="selectedTab(tab)" 
                     >  {{ tab.name }}  </button>     
                  <hr>
               </div>
               <div class="col-sm-12" ng-repeat="(key, tab) in tabs" ng-if="tab.id == panel">
                  <div class="panel panel-default">
                     <div class="panel-heading">{{tab.name}}</div>
                     <div class="panel-body">
                        <div class="col-sm-12" >
                           <button class="btn  btn-space"  
                              ng-class="{'btn-primary' : step.id == _step,'btn-default' : step.id != _step }"
                              ng-repeat="(key, step) in tab.steps" 
                              ng-click="selectedStep(key,step)" 
                              >  {{ step.name }}  </button>    
                           <hr>
                        </div>
                        <div class="col-sm-12" ng-repeat="(key, step) in tab.steps" ng-if="step.id == step_panel" >
                           <div class="panel panel-default">
                              <div class="panel-heading">{{step.name}}</div>
                              <div class="panel-body">
                                 <div class="col-sm-12" >
                                    <button class="btn   btn-space"  
                                       ng-class="{'btn-primary' : cate.id == _category,'btn-default' : cate.id != _category }"
                                       ng-repeat="(key, cate) in step.category" 
                                       ng-click="selectedCategory(cate, $index)" 
                                       >  {{ cate.name }}  </button>    
                                    <hr>
                                 </div>
                                 <div class="col-sm-12"  ng-repeat="(key, cate) in step.category"  ng-if="cate.id == cat_panel && cate.id != 'none'">
                                    <div class="panel panel-default">
                                       <div class="panel-heading">{{cate.name}}</div>
                                       <div class="panel-body">
                                          <div class="col-sm-12" >
                                             <button class="btn btn-default  btn-space"  
                                                ng-repeat="(key, cat) in cate.categories" 
                                                ng-class="{'btn-primary' : cat.id == _option,'btn-default' : cat.id != _option }"
                                                ng-click="selectedOption(cat)" 
                                                >  {{ cat.name }}  </button>    
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <hr>

                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-info" ng-click="previous()">Previous</button>
                            <button class="btn btn-info pull-right" ng-click="next()">Next</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</body>
<script>
var app = angular.module("myApp", []);
app.controller('home',function($scope,$http) {
    alert('hi');
    $scope.panel ='';
    $scope.step_panel = '';
    $scope.tabs = [];
    $scope.steps = [];
    $scope.category = [];
    $scope.options = [];

    $scope.process = [];
    $scope.process_steps = [];

    var req = $http.get('steps.php') ;
    req.then(function (data) {
        var res = data.data;
        $scope.tabs = res;
    });

    $scope.selectedTab = function (tab) {
        $scope.panel = $scope._tab = tab.id;
        $scope.steps = [];
        $scope.category = [];
        $scope.options = [];
        $scope.process = [];
        $scope.steps = tab.steps;
        
    }

    $scope.selectedStep = function (key,step) {
        $scope.step_panel = $scope._step = step.id;
        $scope._key = key;
        
        if($scope.process[$scope._key] != undefined){
           
            var step =  $scope.process[$scope._key] ;
            $scope._category = $scope.cat_panel = step._category;
            $scope._option = step._option;
            
        }else{
          $scope.process[key] = {
            _step : step.id,
            _category : '',
            _option : ''
        };
          $scope.options = [];  
        }
        

        $scope.category = step.category;
        
    }
    $scope.selectedCategory = function (category, index) {
        $scope.cat_panel = $scope._category = category.id;
        $scope.process[$scope._key]._category = category.id;
        $scope.options = category.categories;
    }

    $scope.selectedOption = function (option) {
        $scope.process[$scope._key]._option = option.id;
        $scope._option = option.id;
    }



    $scope.next = function () {
        // console.log($scope._step);
        var key = $scope._key  ;
        var steps = $scope.steps  ;
        var next_step = key == $scope.steps.length-1 ? 0 : key+1;
        
        angular.forEach(steps, function(value, key){
            if(key == next_step)
                $scope.selectedStep(key,value)    
        });
    }

    $scope.previous = function () {
        console.log($scope._step);
        var key = $scope._key  ;
        var steps = $scope.steps  ;

        console.log(key);
        console.log($scope.steps.length);

        var next_step = key > $scope.process_size ? 0 : key-1;
        $('.nav-pills-steps li:eq('+next_step+') a').tab('show')

        angular.forEach(steps, function(value, key){
            if(key == next_step)
                $scope.selectedStep(key,value)    
        });
        // $scope.selectedStep(steps['selectedStep'])

    }

})

</script>


</html>
