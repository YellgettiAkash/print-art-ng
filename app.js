var app = angular.module("myApp", []);

app.service('printPriceService',printPriceService);

app.controller('home', function($scope, $http,printPriceService) {

	//initialing the product price
	var product_cost = 100;

    printPriceService.setProductCost(product_cost);
    $scope.product_cost = printPriceService.getProductCost();
    $scope.picture_cost = printPriceService.getPictureCost();
    $scope.paper_cost = 0;
    $scope.frame_cost = 0;
    $scope.mat_cost = 0;

    //Getting the Tabs
    var req = $http.get('category.php');
    req.then(function(data) {

        var res = data.data;
        printPriceService.setTabs(res);
        $scope.tabs = res;

    });


    $scope.selectedTab = function(tab) {
    	printPriceService.setTab(tab,$scope);
    }
    
    $scope.selectedCategory = function (key,category) {
        printPriceService.setCategory(key,category,$scope);
        // printPriceService.subcategoryShowHide(category.id,$scope);
        // $scope._category = $scope._categoryPanel = category.id;   
    }

    $scope.selectedSubCategory = function (subcategory) {
        $scope._subcategory = $scope._subcategoryPanel = subcategory.id;   
    }

    $scope.selectedCategories = function (categories) {
        $scope._categories = $scope.categoriesPanel = categories.id;   
    }


});