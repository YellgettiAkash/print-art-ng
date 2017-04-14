<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/angular-js/angular.min.js"></script>
  
<script src="printPriceService.js"></script>
  <script src="app.js"></script>
  
  <style type="text/css">
    .btn-space{
       margin-right: 10px;
    }
  </style>
</head>

<body ng-app="myApp" ng-controller="home">


  <div ng-repeat="tab in tabs" > 
    <!-- Tabs Start  -->
        
        <!-- Tabs Start Header -->
            <button class="btn" 
            ng-click="selectedTab(tab)"
            ng-class="{'btn-primary' : tab.id == _tab,'btn-default' : tab.id != _tab }">{{ tab.name }}</button>
        <!-- Tabs End Header -->
        <hr>
        <!-- Tabs Start Content -->
            <div ng-if="tab.id == _tabPanel" >
                

                <!-- Category Start -->
                  <div ng-repeat="category in tab.category" >

                  <!-- Category Start Header -->
                      <button class="btn" ng-class="{'btn-primary' : category.id == _category,'btn-default' : category.id != _category }">{{ category.name }}</button>
                  <!-- Category End Header -->

                  <!-- Category Start Content -->
                      <div ng-repeat="category in tab.category" > 
                        
                      </div> 
                  <!-- Category End Content -->
                  </div>
                <!-- Category End -->  


            </div>
        <!-- Tabs End Content -->



    <!-- Tabs Ends  -->
  </div>

</body>


</html>
