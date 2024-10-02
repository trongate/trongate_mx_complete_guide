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
		<h1	>Trongate MX</h1>
		<p class="text-center lg">
			<button mx-get="<?= BASE_URL ?>" 
				            mx-target="#result" 
				            mx-select="main" 
				            mx-indicator=".spinner">Click Me</button>
		</p>
		<div class="spinner mx-indicator"></div>
		<div id="result"></div>
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
</style>

</body>
</html>