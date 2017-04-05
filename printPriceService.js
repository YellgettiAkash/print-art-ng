
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
    var _categories = "";

    
    var setTabs = function (tabs) {
        _tabs = tabs;
    }

    var getTabs = function () {
        return _tabs;
    }

    var setDefault = function (tabs,scope) {
        
        // angular.forEach(tabs,function(values,keys){
        //     // console.log(values);
        //     if(values.active != undefined && values.active == true){
        //         scope._tab = scope._tabPanel = _tab = values.id;
        //     }
        //     angular.forEach(values.category,function(value,key){
        //         if(value.active != undefined && values.active == true){
        //             scope._category = scope._categoryPanel = _category = value.id;   
        //         }
        //         angular.forEach(value.subcategory,function(v,k){
        //             if(v.active != undefined && v.active == true){
        //                 scope._subcategory = scope._subcategoryPanel = _subcategory = v.id;   
        //             }
                    
        //             angular.forEach(v.categories,function(va,ke){
        //                 if(va.active != undefined && va.active == true){
        //                     scope._categories = scope._categoriesPanel = _categories = va.id;   
        //                 }  
        //             });
        //         });
        //     });
        // });
    }
    
    var setDefaultTab = function (tabs,scope,val) {
        angular.forEach(tabs,function(values,keys){
            if(values.active != undefined && values.active == true || values.id == val){
                scope._tab = scope._tabPanel = _tab = values.id; 
                setCategory(values.category,scope);
            }
        });
    }

    var setTab = function (tab,scope,val) {
        scope._tab = scope._tabPanel = _tab = tab.id; 
        setCategory(tab.category,scope);
    }
    
    var setCategory = function (category,scope,val) {
        angular.forEach(category,function(value,key){
            if(value.active != undefined && value.active == true){
                scope._category = scope._categoryPanel = _category = value.id;   
                setSubCategory(value.subcategory,scope);
            } 
        });
    }

    var setSubCategory = function (subcategory,scope,val) {
        scope._oneCategory = false;
            
        angular.forEach(subcategory,function(v,k){
            if(v.active != undefined && v.active == true){
                scope._subcategory = scope._subcategoryPanel = _subcategory = v.id; 
                subcategoryShowHide(v.id,scope);
                  
                setCategories(v.categories,scope);
            }
        });
    }

    var setCategories = function (categories,scope,val) {
        angular.forEach(categories,function(va,ke){
            if(va.active != undefined && va.active == true){
                scope._categories = scope._categoriesPanel = _categories = va.id;   
            }  
        });
    }

    var subcategoryShowHide = function (categoryId,scope) {
        if(categoryId == 'information'){
            scope._oneCategory = true;
        }else{
            scope._oneCategory = false;    
        }
        
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

        setTab : setTab,
        setCategory : setCategory,
        setSubCategory : setSubCategory,
        setCategories : setCategories,
        
        subcategoryShowHide : subcategoryShowHide,
        
        setDefault : setDefault,
        setDefaultTab : setDefaultTab,
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