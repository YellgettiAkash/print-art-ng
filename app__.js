var app = angular.module("myApp", []);

app.service('printPriceService',printPriceService);



app.controller('home', function($scope, $http) {

    var product_price = 10;
    $scope.product_price = product_price;
    $scope.paper_cost = 0;
    // alert('hi');
    $scope.panel = '';
    $scope.step_panel = '';
    $scope.tabs = [];
    $scope.steps = [];
    $scope.category = [];
    $scope.options = [];

    $scope.process = [];
    $scope.process_steps = [];

    var req = $http.get('steps.php');
    req.then(function(data) {
        var res = data.data;
        $scope.tabs = res;
    });

    $scope.selectedTab = function(tab) {
        $scope.panel = $scope._tab = tab.id;
        $scope.steps = [];
        $scope.category = [];
        $scope.options = [];
        $scope.process = [];
        $scope.steps = tab.steps;

        angular.forEach(tab.steps,function(value,key){
            if(value.id == 'print_size' ){
                angular.forEach(value.category[0].categories,function(val,k){
                    if(val.active == true){
                        $scope._default_height = val.height;
                        $scope._default_width = val.width;
                    }
                    
                })
            }
            
        })

    }
    $scope._oneCategory = false;
    $scope.selectedStep = function(key, step) {
        $scope._oneCategory = false;
        $scope.step_panel = $scope._step = step.id;
        $scope._key = key;

        if ($scope.process[$scope._key] != undefined) {

            var step = $scope.process[$scope._key];
            if($scope.process[$scope._key]._category == 'information'){
               $scope._oneCategory = true; 
            };

            $scope._category = $scope.cat_panel = step._category;
            $scope._option = step._option;

        } else {
            $scope.process[key] = {
                _step: step.id,
                _category: '',
                _option: ''
            };
            $scope.options = [];
            $scope.category = step.category;
        }
        
        if (step.category != undefined && step.category.length == 1) {
            $scope.process[key]._category = 'information';
            $scope._oneCategory = true;


            $scope._category = $scope.cat_panel = step.category[0].id;
            $scope._option = step._option;


            // $scope.category = step.category;  
        }



    }



    $scope.selectedCategory = function(category, index) {
        $scope.cat_panel = $scope._category = category.id;
        $scope.process[$scope._key]._category = category.id;
        if ( category.id == 'none') {
            $scope.process[$scope._key]._option = "none";
        };
        $scope.options = category.categories;
    }
        

    $scope.selectedOption = function(option) {
        $scope.process[$scope._key]._option = option.id;
        $scope._option = option.id;

        console.log($scope._step +"__"+option.price);
        if ($scope._step == 'paper_type') {
            var paper_cost =paper_price(option.price);
            $scope.paper_cost = paper_cost;

            $scope.cal_product_price(paper_cost);
        };

        if ($scope._step == 'print_size') {
            var print_size = $scope.cal_print_size(option.height,option.width);
            var paper_cost = paper_price($scope.paper_cost);
            $scope.cal_product_price(paper_cost);
        };

        if ($scope._step == 'mat') {
            var print_size = $scope.cal_print_size(option.height,option.width);
            var paper_cost = paper_price($scope.paper_cost);
            $scope.cal_product_price(paper_cost);
        };
            

        
    }

    

    $scope.cal_print_size = function cal_print_size(_height,_width){
        $scope._default_height =  _height; 
        $scope._default_width =  _width ;
    }

    function paper_price(_paper_cost){
        var paper_cost = $scope._default_height * $scope._default_width * _paper_cost ;
        
        
        return paper_cost; 
    }
    $scope.cal_product_price = function(paper_cost){
        $scope.product_price  = product_price+ paper_cost;
    }



    $scope.next = function() {
        // console.log($scope._step);
        var key = $scope._key;
        var steps = $scope.steps;
        var next_step = key == $scope.steps.length - 1 ? 0 : key + 1;

        angular.forEach(steps, function(value, key) {
            if (key == next_step)
                $scope.selectedStep(key, value)
        });
    }

    $scope.previous = function() {
        console.log($scope._step);
        var key = $scope._key;
        var steps = $scope.steps;

        console.log(key);
        console.log($scope.steps.length);

        var next_step = key > $scope.process_size ? 0 : key - 1;


        angular.forEach(steps, function(value, key) {
            if (key == next_step)
                $scope.selectedStep(key, value)
        });
        // $scope.selectedStep(steps['selectedStep'])

    }

})