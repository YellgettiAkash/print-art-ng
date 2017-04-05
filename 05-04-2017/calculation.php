<!DOCTYPE html>
<html>
<head>
	<title>Sample Calculation</title>
</head>
<body>

<button onclick="result()">Result</button>

<script type="text/javascript">
//value of the product
var _product_cost = 100;

//glossy papper cost 3 
var _paper_type = 0.3;

//what are is this varibales i didn't understand
var _frame_cost_height = 2;
var _frame_back_front_price = 5;

//print size 
var _height = 5;
var _width = 3.7;

//mat size
var _mat_height = 1;
var _mat_width = 1.7;


var picture_cost = 0.10 * _product_cost;

var paper_cost = _height * _width * _paper_cost ;


//frame_cost is same as mat but mat width would be 0
var frame_cost = (_width+(_mat_width * 2)) + 
(_height*(_mat_width*2)) * 2 * 
_frame_cost_height +
(_width+(_mat_width * 2))
 * (_height+(_mat_width*2)) 
 * 2 * 
 _frame_back_front_price ;


var mat_cost = (_width+(_mat_width * 2)) + 
(_height*(_mat_width*2)) * 2 * 
_frame_cost_height +
(_width+(_mat_width * 2))
 * (_height+(_mat_width*2)) 
 * 2 * 
 _frame_back_front_price ;


//frame_cost is same as mat but mat width would be 0


function result() {
	// body...
	console.log("Picture Cost :-"+picture_cost)
	console.log("Paper Cost :-"+paper_cost)
	console.log("Mat Cost :-"+mat_cost)
}

</script>
</body>
</html>
