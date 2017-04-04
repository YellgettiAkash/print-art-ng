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
  <script src="app.js"></script>
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
            <div class="panel-heading"> Print Art  
              <button class="btn btn-warning">Product Price :-   {{ product_price }}</button>
              <button class="btn btn-warning">Paper Price :-   {{ paper_cost }}</button>
            </div>
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
                                 <div class="col-sm-12" ng-hide="_oneCategory" >
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


</html>
