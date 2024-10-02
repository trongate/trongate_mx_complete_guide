<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?= BASE_URL ?>">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/trongate.css">
	<script src="js/trongate-mx.js"></script>
	<title>Document</title>
</head>
<body>
	<div class="container">
		<h1>Dynamic Sort</h1>

        <div class="mt-3 mb-3 text-center">
			<select mx-get="products/browse/${this.value}" 
	            		   mx-target="#result" 
	            		   mx-select="table" 
	            		   mx-indicator=".spinner" 
	            		   mx-trigger="change">
				<option value="id">id</option>
				<option value="name">name</option>
				<option value="price">price</option>
				<option value="price_desc">price desc</option>
				<option value="rating">rating</option>
				<option value="rating_desc">rating desc</option>
			</select>        	
        </div>

		<div class="spinner mx-indicator"></div>
		<div id="result"  mx-get="products/browse" 
				            		   mx-target="#result" 
				            		   mx-select="table" 
				            		   mx-indicator=".spinner" 
				            		   mx-trigger="load"></div>
	</div>

<style>
body {
	background-color: steelblue;
}

.container {
	background-color: white;
	min-height: 100vh;
}

h1 {
	text-align: center;
}

select {
	max-width: 360px;
}
</style>

</body>
</html>