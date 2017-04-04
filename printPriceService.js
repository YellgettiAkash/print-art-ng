
function printPriceService() {
    
    var tabs = [];

    var _mat_width = 0;
    var _mat_height = 0; 

    var _width = 0; 
    var _height = 0; 

    var _productPrice = 0;

    var _paperCost = 0;
    var _matCost = 0;

    var _frameFrontAndBack = 0;
    var _frameCostHeight = 0;


    var _tab = "";
    var _category = "";
    var _subcategory = "";
    var _option = "";

    
    var setTabs = function (tabs) {
        _tabs = tabs;
    }

    var getTabs = function () {
        return _tabs;
    }

    var setDefault = function () {
        angular.forEach(tab.category,function(value,key){
            if(value.id == 'print_size' ){
                angular.forEach(value.category[0].categories,function(val,k){
                    if(val.active == true){
                        _height = val.height;
                        _width = val.width;
                    }
                    
                })
            }
            
        });
    }
    
    var setProductCost = function (productCost) {
        _productCost = productCost;
    }

    var getProductCost = function () {
        return _productCost;
    } 

    var setHeightWidth = function (height,width) {
        _width = width;
        _height = height;
    } 

    var setPaperCost = function (paperCost) {
        _paperCost = paperCost;
    }
    
    var pictureCost = function () {
        return 0.10 * _productCost;
    }

    var getPaperCost = function () {
        return _height * _width * _paperCost ;
    }

    var matCost = function () {
    
    }

    var frameCost = function () {
    
    }

    return {
        setTabs : setTabs,
        getTabs : getTabs,
        setHeightWidth         : setHeightWidth,
        setProductCost         : setProductCost,
        getProductCost          : getProductCost,
        setPaperCost           : setPaperCost,

        pictureCost         : pictureCost,
        getPaperCost           : getPaperCost,
        matCost             : matCost,
        frameCost           : frameCost
    };
}