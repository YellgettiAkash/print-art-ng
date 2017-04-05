var app = angular.module("myApp", []);

app.service('printPriceService',printPriceService);

app.controller('home', function($scope, $http,printPriceService) {

    var product_price = 10;
    
    printPriceService.setProductCost(product_price);
    $scope.product_price = printPriceService.getProductCost();
    
    printPriceService.setHeightWidth(5,7.2);
    printPriceService.setPaperCost(0.8);
    $scope.paper_cost = printPriceService.getPaperCost();
    
    var req = $http.get('steps.php');
    req.then(function(data) {
        var res = data.data;
        printPriceService.setTabs(res);
        var tabs = printPriceService.getTabs();
        printPriceService.setDefaultTab(tabs,$scope);

        $scope.tabs = res;
    });
    


    $scope.selectedTab = function(tab) {
        $scope._tab = $scope._tabPanel = tab.id;
    }

    $scope.selectedCategory = function (category) {
        // printPriceService.subcategoryShowHide(category.id,$scope);
        $scope._category = $scope._categoryPanel = category.id;   
    }

    $scope.selectedSubCategory = function (subcategory) {
        $scope._subcategory = $scope._subcategoryPanel = subcategory.id;   
    }

    $scope.selectedCategories = function (categories) {
        $scope._categories = $scope.categoriesPanel = categories.id;   
    }



    

})