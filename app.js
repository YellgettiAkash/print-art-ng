var app = angular.module("myApp", []);

app.service('printPriceService',printPriceService);

app.controller('home', function($scope, $http,printPriceService) {

	//initialing the product price
	var product_cost = 100;

    printPriceService.setProductCost(product_cost);
    
    
    $scope.productCost = printPriceService.getProductCost();
    $scope.pictureCost = printPriceService.getPictureCost();
    $scope.matCost = 0;
    $scope.paperCost = 0;
    $scope.frameCost = 0;

    printPriceService.setImageFrameClass('',$scope);
    printPriceService.setImageMatColorClass('',$scope);
    printPriceService.setImageMatHeightWidthClass('',$scope);
    
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
    }

    $scope.selectedSubCategory = function (subcategory) {
        printPriceService.setSubCategory(subcategory,$scope);
    }

    $scope.selectedCategories = function (categories) {
        printPriceService.setCategories(categories,$scope);
    }

    $scope.selectedSubCategories = function (subcategories) {
        printPriceService.setSubCategories(subcategories,$scope);
    }
    $scope.next = function() {
        printPriceService.getNext($scope);
    }
    $scope.previous = function(){
        printPriceService.getPrevious($scope);
    }


});