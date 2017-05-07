<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="col-sm-12">
		<div class="form-group">
		    <label for="usr">Name:</label>
			<select name="category" class="form-control" id="category">
				<option value="paper_photo">Paper Photo</option>
				<option value="canvas_photo">Canvas Photo</option>
				<option value="canvas_mini_photo">canvas_mini_photo</option>
				<option value="mdf_photo">mdf_photo</option>
				<option value="acrylic_photo">acrylic_photo</option>
				<option value="acrylic_block_photo">acrylic_block_photo</option>
			</select>
		</div>
	</div>
	<div class="col-sm-12" id="category_div">
		
	</div>
</div>
<script type="text/javascript">
	$('#category').on('change',function() {
		console.log('Change '+this.value);
		post('index-2.php',{category : this.value },function(data){
			$('#category_div').html(data);
		})
	})


	function post(url,params,callback) {
		$.post(url,params,function(data){
			callback(data);
		})
	}
</script>

</body>
</html>