
function printPriceService() {
    
    

    var _mat_width = 0;
    var _mat_height = 0; 

    var _width = 0; 
    var _height = 0; 

    var _productPrice = 0;

    var _paperCost = 0;
    var _matCost = 0;

    var _frameFrontAndBack = 0;
    var _frameCostHeight = 0;


    var tabs = [];
    var _process = [];

    var _key = "";
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
        var category = tab.category;
        _process = [];
        for (var i = 0; i < category.length; i++) {
            // console.log(category[i]);
            _process[i] = {
                _category : '',
                _subcategory : '',
                _categories : ''
            };
            _process[i]._category  = category[i].id;
            var subcategory = category[i].subcategory;

                for (var j = 0; j < subcategory.length; j++) {
                    if(j==0){
                        _process[i]._subcategory = subcategory[j].id;
                    
                        var categories = subcategory[j].categories;   
                        
                        if (subcategory[j].id == "none") {
                                    _process[i]._categories = "none";
                        }else{
                            for (var k = 0; k < categories.length; k++) {
                                if(k==0){
                                    _process[i]._categories = categories[k].id;
                                }
                            }    
                        }
                    }

                    
                }
        }
        console.log(_process);
        
        // setCategory(tab.category,scope);
    }
    
    var setCategory = function (key,category,scope) {
        scope._category = scope._categoryPanel = _category = category.id;
        _key = key;
        
        var subcategory = category.subcategory;
        var id = 0;
        for (var i = 0; i < subcategory.length; i++) {
            if(subcategory[i].id == _process[_key]._subcategory){
                id = i;
            }
        };

        setSubCategory(subcategory[id],scope);        
        
    }

    var setSubCategory = function (subcategory,scope) {
        scope._subcategory = scope._subcategoryPanel = _subcategory = subcategory.id; 
        subcategoryShowHide(subcategory.id,scope);
        
        if (_process[_key]._subcategory != _subcategory) {
            _process[_key]._subcategory = _subcategory;
        };
        console.log(_process);
        var categories = subcategory.categories;
        var id = 0;
        for (var i = 0; i < categories.length; i++) {
            if(categories[i].id == _process[_key]._categories){
                id = i; 
            }
        };
        if (_subcategory == "none" ) {
            scope._categories = scope._categoriesPanel = _categories = categories.id;   
        }else{
            setCategories(categories[id],scope);        
        };
    }

    var setCategories = function (categories,scope) {
        scope._categories = scope._categoriesPanel = _categories = categories.id;   
        if (_process[_key]._categories != _categories) {
            _process[_key]._categories = _categories;
        };
        console.log(_process);
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
    
    var getPictureCost = function () {
        return 0.10 * _productCost;
    }

    var getPaperCost = function () {
        return _height * _width * _paperCost ;
    }

    var matCost = function () {
        return (_width+(_mat_width * 2)) + (_height*(_mat_width*2)) * 2 * _frame_cost_height +(_width+(_mat_width * 2)) * (_height+(_mat_width*2))  * 2 * _frame_back_front_price ;
    }

    var frameCost = function () {
        _mat_width = 0;
        return (_width+(_mat_width * 2)) + (_height*(_mat_width*2)) * 2 * _frame_cost_height +(_width+(_mat_width * 2)) * (_height+(_mat_width*2))  * 2 * _frame_back_front_price ;
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

        getPictureCost         : getPictureCost,
        getPaperCost           : getPaperCost,
        matCost             : matCost,
        frameCost           : frameCost
    };
}