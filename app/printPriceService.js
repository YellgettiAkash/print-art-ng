function printPriceService() {



    var _mat_width = 0;
    var _mat_height = 0;

    var _width = 0;
    var _height = 0;

    var _productPrice = 0;

    var _categoryCalCost = 0;
    var _categoryCost = 0;
    var _paperCost = 0;
    var _frameCost = 0;
    var _matCost = 0;
    var _paperTypeCost = 0;
    var _canvasTypeCost = 0;
    var _wrapCost = 0;
    var _hanging = 0;

    var _frameFrontAndBack = 0.2;
    var _frameCostHeight = 0.5;


    var _tabs = [];
    var _tabCategory = [];
    var _process = [];

    var _variables = "";
    var _key = "";
    var _tab = "";
    var _category = "";
    var _subcategory = "";
    var _categories = "";
    var _subcategories = "";


    var setTabs = function(tabs) {
        _tabs = tabs;
    }

    var getTabs = function() {
        return _tabs;
    }

    var total=function(tab) {
        switch (tab) {
            case 'paper_photo':
                var paperCost = _height * _width * getPaperTypeCost();
                var matCost = getMatCost();
                var frameCost = getFrameCost();
                var total = paperCost+matCost+frameCost;
                return twoDecimal(total);
            break;
            case 'canvas_photo':
                var canvasTypeCost =  _height * _width * getCanvasTypeCost();
                var wrap = getWrapCost();
                var frameCost = getFrameCost();
                var total = canvasTypeCost+wrap+frameCost;
                return twoDecimal(total);
            break;
            case 'canvas_min_photo':
                var categoryCalCost = getCategoryCalCost();
                var total = categoryCalCost;
                return twoDecimal(total);
            break;
            case 'acrylic_photo':
                var categoryCalCost = getCategoryCalCost();
                var hanging = getHangingCost();
                var total = categoryCalCost+hanging;
                return twoDecimal(total);
            break;
            case 'acrylic_block_photo':
                var total = _variables._height * _variables._width * _variables._categoryCost;
                return twoDecimal(total);
            break;
              
            default:
                var total = _variables._height * _variables._width * _variables._categoryCost;
                return twoDecimal(total);
            break;
        }
    }

    var setTab = function(tab, scope, val) {
        
        setImageFrameClass('',scope);
        setImageMatColorClass('',scope);
        setImageMatHeightWidthClass('',scope);
        setMatHeightWidth(0,0);
        // reCalculate(scope);
        // resetCosts(scope);

        scope._tab = scope._tabPanel = _tab = tab.id;

        scope.variables = _variables =  tab.variables;
        _variables._categoryCost = tab.price; 
        
        var category = _tabCategory = tab.category;
        _process = [];
        _process.variables = tab.variables; 

        for (var i = 0; i < category.length; i++) {
            // console.log(category[i]);
            _process[i] = {
                _category: '',
                _subcategory: '',
                _categories: '',
                _subcategories: '',
                
            };
            _process[i]._category = category[i].id;
            var subcategory = category[i].subcategory;

            var subcategories = category[i].subcategories;

            for (var j = 0; j < subcategory.length; j++) {
                if (j == 0) {
                    _process[i]._subcategory = subcategory[j].id;

                    var categories = subcategory[j].categories;

                    if (subcategory[j].id == "none") {
                        _process[i]._categories = "none";
                    } else {
                        for (var k = 0; k < categories.length; k++) {
                            if (k == 0) {
                                _process[i]._categories = categories[k].id;
                                setGlobalValues(category[i].id,subcategory[j].id,categories[k],scope);
                            }
                        }
                    }
                }
            }
        }
        
        var id = 0;
        setCategory(id, category[id], scope);
    }
    var setVaribales = function (variables,scope) {
        scope.variables = variables;
    }
    var setGlobalValues = function (category,subcategory,categories,scope) {
        scope.pins == false;

        if (category == "paper_type" && subcategory == "information") {
            _variables._paperTypeCost = categories.price;
            setPaperTypeCost(categories.price);   
        }
        
        if (category == "canvas_type" && subcategory == "information") {
            _variables._canvasTypeCost = categories.price;
            setCanvasTypeCost(categories.price);   
        }

        if (category == "print_size" && subcategory == "information") {
            _variables._height = categories.height
            _variables._width = categories.width
            setHeightWidth(categories.height,categories.width);   
        }
        if (category == "frame" && subcategory != "none") {
             _variables._frameCost = categories.price;
             setFrameCost(categories.price); 
             setImageFrameClass(categories.class,scope); 
        }
        
        if (category == "wrap" && subcategory != "none") {
            _variables._wrap = categories.price;
            setWrapCost(categories.price);   
            setImageFrameClass(categories.class,scope); 
        }

        if (category == "hanging" && subcategory != "none") {
            _variables._hanging = categories.price;
            setHangingCost(categories.price);  
            if(categories.id == "4_pins"){
                scope.pins = _variables._4pins = true;
            }else{
                scope.pins = _variables._4pins = false;
            }
        }

        if (category == "mat" && (subcategory == "color" || subcategory == "archivable" || subcategory == "regular" )) {
            _variables._matCost = categories.price;
            setImageMatColorClass(categories.class,scope);   
        }
        scope.productCost = _productCost;
        scope.total = total(_tab);

        // reCalculate(scope);


    }

    var setCategory = function(key, category, scope) {
        scope._category = scope._categoryPanel = _category = category.id;
        scope._category_name =  category.name;
        _key = key;

        var subcategory = category.subcategory;
        var id = 0;
        for (var i = 0; i < subcategory.length; i++) {
            if (subcategory[i].id == _process[_key]._subcategory) {
                id = i;
            }
        };
        setSubCategory(subcategory[id], scope);

       

        

    }

    var setSubCategory = function(subcategory, scope) {
        scope._subcategory = scope._subcategoryPanel = _subcategory = subcategory.id;
        subcategoryShowHide(subcategory.id, scope);

        if (_process[_key]._subcategory != _subcategory) {
            _process[_key]._subcategory = _subcategory;
        };
        // console.log(_process);
        var categories = subcategory.categories;
        var id = 0;
        for (var i = 0; i < categories.length; i++) {
            if (categories[i].id == _process[_key]._categories) {
                id = i;
            }
        };

        if (_subcategory == "none") {
            scope._categories = scope._categoriesPanel = _categories = categories.id;
            if (_category == "frame") {
                setImageFrameClass('',scope);
            }
            if (_category == "mat") {
                setImageMatColorClass('',scope);
                setImageMatHeightWidthClass('',scope);
                setMatHeightWidth(0,0);
                reCalculate(scope);
            }
            
        } else {
            setCategories(categories[id], scope);
        };

        var subcategories = subcategory.subcategories;
        if(subcategories != undefined){
            var id = 0;
            for (var i = 0; i < subcategories.length; i++) {
                if (subcategories[i].id == _process[_key]._subcategories) {
                    id = i;
                }
            };

            setSubCategories(subcategories[id], scope);   
        }
    }

    var setCategories = function(categories, scope) {
       

        scope._categories = scope._categoriesPanel = _categories = categories.id;
        if (_process[_key]._categories != _categories) {
            _process[_key]._categories = _categories;
        };
        // console.log(_process);
        setGlobalValues(_category,_subcategory,categories,scope);
    }

    var setSubCategories = function(subcategories, scope) {
       
        scope._subcategories = scope._subcategoriesPanel = _subcategories = subcategories.id;
        if (_process[_key]._subcategories != _subcategories) {
            _process[_key]._subcategories = _subcategories;
        };

        if (_category == 'mat') {
            setMatHeightWidth(subcategories.height,subcategories.width)
            _variables._mat_height = subcategories.height
            _variables._mat_width = subcategories.width

            setImageMatHeightWidthClass(_subcategories,scope);  
            scope.productCost = _productCost;
            scope.total = total(_tab);
        }
        
        
    }

    var reCalculate = function (scope) {
        scope.paperCost =  getPaperCost();
        scope.paperTypeCost =  getPaperTypeCost();
        scope.canvasTypeCost =  getCanvasTypeCost();
        scope.wrapCost =  getWrapCost();
        scope.matCost =  getMatCost();
        scope.frameCost =  getFrameCost();  
    }

    var resetCosts = function (scope) {
        scope.paperCost = 0;
        scope.frameCost = 0;
        scope.matCost = 0;
        scope.paperTypeCost = 0;
        scope.canvasTypeCost =0;
        scope.wrapCost = 0;
    }

    var subcategoryShowHide = function(categoryId, scope) {
        if (categoryId == 'information') {
            scope._oneCategory = true;
        } else {
            scope._oneCategory = false;
        }

    }

    var getNext = function(scope) {
        var index = _key == _process.length - 1 ? 0 : _key + 1;
        setCategory(index, _tabCategory[index], scope);
    }

    var getPrevious = function(scope) {
        var index = _key == 0 ? _process.length - 1 : _key - 1;
        setCategory(index, _tabCategory[index], scope);
    }

    var setProductCost = function(productCost) {
        _productCost = productCost;
    }

    var getProductCost = function() {
        return _productCost;
    }
    var setImageFrameClass = function(classes,scope){
        scope.imageFrameClass = classes;
    } 
    
    var setImageMatColorClass = function(classes,scope){
        scope.imageMatColorClass = classes;
    }

    var setImageMatHeightWidthClass = function(classes,scope){
        scope.imageMatHeightWidthClass = classes;
    }

    
    var setHeightWidth = function(height, width) {
        _width = width;
        _height = height;
    }
    var setMatHeightWidth = function(height, width) {
        _mat_height = height;
        _mat_width = width;
    }

    var setFrameCost = function (frameCostHeight) {
        _frameCost = _frameCostHeight = frameCostHeight;
    }

    var setPaperCost = function(paperCost) {
        // console.log(paperCost);
        _paperCost = paperCost;
    }

    
    var setCategoryCalCost = function() {
        _categoryCalCost = _variables._height * _variables._width * categoryCost;
    }

    var getCategoryCalCost = function() {
        return _categoryCalCost = _variables._height * _variables._width * _variables._categoryCost;
    }
    
    var setPaperTypeCost = function(paperTypeCost) {
        _paperTypeCost = paperTypeCost;
    }

    var getPaperTypeCost = function() {
        return _paperTypeCost;
    }





    var setCanvasTypeCost = function(canvasTypeCost) {
        _canvasTypeCost = canvasTypeCost;
    }

    var getCanvasTypeCost = function() {
        return _canvasTypeCost;
    }




    var setWrapCost = function(wrapCost) {
        _wrapCost = wrapCost;
    }

    var getWrapCost = function() {
        return _wrapCost;
    }



    var setHangingCost = function(hanging) {
        _hanging = hanging;
    }

    var getHangingCost = function() {
        return _hanging;
    }





    var getPictureCost = function() {
        return 0.10 * _productCost;
    }

    var getPaperCost = function() {
        var cost = _height * _width * _paperCost;
        return twoDecimal(cost);;
    }
    var twoDecimal = function (value) {
        return Math.round(value*100)/100
    }
    var getMatCost = function() {
        var cost = (_width + (_mat_width * 2)) + (_height * (_mat_width * 2)) * 2 * _frameCostHeight + (_width + (_mat_width * 2)) * (_height + (_mat_width * 2)) * 2 * _frameFrontAndBack;
        return twoDecimal(cost);
    }

    var getFrameCost = function() {
        _mat_width = 0;
        var cost = (_width + (_mat_width * 2)) + (_height * (_mat_width * 2)) * 2 * _frameCostHeight + (_width + (_mat_width * 2)) * (_height + (_mat_width * 2)) * 2 * _frameFrontAndBack;
        return twoDecimal(cost);
    }

    return {
        setTabs: setTabs,
        getTabs: getTabs,
        resetCosts: resetCosts,


        getNext: getNext,
        getPrevious: getPrevious,

        setTab: setTab,
        setCategory: setCategory,
        setSubCategory: setSubCategory,
        setCategories: setCategories,
        setSubCategories : setSubCategories,
       

        setImageFrameClass : setImageFrameClass,
        setImageMatColorClass : setImageMatColorClass,
        setImageMatHeightWidthClass : setImageMatHeightWidthClass ,

        subcategoryShowHide: subcategoryShowHide,

        setHeightWidth: setHeightWidth,
        setMatHeightWidth : setMatHeightWidth,

        setProductCost: setProductCost,
        getProductCost: getProductCost,
        setPaperCost: setPaperCost,

        getPictureCost: getPictureCost,
        getPaperCost: getPaperCost,
        getMatCost: getMatCost,
        getFrameCost: getFrameCost
    };
}