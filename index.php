<!DOCTYPE html>
<html>
	<head>
		<title>Ecommerce</title>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/css/mobile.css">

		<script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>

		<link type="image/x-icon" href="/images/logo.png" rel="shortcut icon" />
		<style type="text/css">
			.productDiv {
				width: 200px;
				height: auto;
				border: 1px solid gray;
				border-radius: 5px;
				padding: 10px;
			}
			.productImage {
				border: 0px solid red;
				width: 100%;
				height: 200px;
			}
			.productName {
				font-size: 14pt;
				font-weight: bold;
				color: darkblue;
			}
			.productPrice {
				font-size: 14pt;
				font-weight: bold;
			}
			.myBtn {
				width: 100%;
				height: auto;
				padding: 5px;
				border: 1px solid darkblue;
				background: darkblue;
				color: white;
				border-radius: 5px;
			}
			.myBtn:hover {
				background: blue;
				font-weight: bold;
				font-style: italic;
			}

		</style>
	</head>
	<body>
		<h2>Products</h2>
		<div class="productDiv">
			<center><img src="/img/products/008.jpg" class="productImage"></center>
			<center><span class="productName">Iphone X</span></center>
			<center><span class="productPrice">$ 250.00</span></center>
			<center><button class="myBtn">Add to Cart</button></center>

		</div>
	</body>
</html>