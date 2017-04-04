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


  
        <!-- Tabs Start Header -->
            <button class="btn btn-space"
            ng-repeat="tab in tabs" 
            ng-click="selectedTab(tab)"
            ng-class="{'btn-primary' : tab.id == _tab,'btn-default' : tab.id != _tab }">{{ tab.name }}</button>
        <!-- Tabs End Header -->
  
  <hr>
    

    <div ng-repeat="tab in tabs" > 
      <!-- Tabs Start Content -->
        <div ng-if="tab.id == _tabPanel" >
              


                <!-- Category Start -->
                  <div  >
                  <!-- Category Start Header -->
                      <button class="btn btn-space"
                      ng-repeat="category in tab.category"
                      ng-click="selectedCategory(category)" 
                      ng-class="{'btn-primary' : category.id == _category,'btn-default' : category.id != _category }">
                      {{ category.name }}
                      </button>
                      <hr>
                  <!-- Category End Header -->
                  </div>

                  <div ng-repeat="category in tab.category" > 
                  <!-- Category Start Content -->
                    <div ng-if="category.id == _categoryPanel" >
                        <div  >
                        <!-- SubCategory Start Header -->
                            <button class="btn btn-space"
                            ng-repeat="subcategory in category.subcategory"
                            ng-click="selectedSubCategory(subcategory)" 
                            ng-class="{'btn-primary' : subcategory.id == _subcategory,'btn-default' : subcategory.id != _subcategory }">
                            {{ subcategory.name }}
                            </button>
                            <hr>
                        <!-- SubCategory End Header -->
                        </div>

                        <div ng-repeat="subcategory in category.subcategory" >
                          <!-- SubCategory Start Content -->
                            <div ng-if="subcategory.id == _subcategoryPanel" >
                                <div  >
                                  <!-- Categories Start Header -->
                                      <button class="btn btn-space"
                                      ng-repeat="categories in subcategory.categories"
                                      ng-click="selectedCategories(categories)" 
                                      ng-class="{'btn-primary' : categories.id == _categories,'btn-default' : categories.id != _categories }">
                                      {{ categories.name }}
                                      </button>
                                      <hr>
                                  <!-- Categories End Header -->
                                  </div>

                            </div>
                        <!-- SubCategory End Header -->
                        </div>


                    </div>
                  <!-- Category End Content -->      
                  </div> 
                  
                  
                <!-- Category End -->  

<!-- Tabs End Content -->
            </div>
        </div>



    <!-- Tabs Ends  -->
  </div>

</body>


</html>
