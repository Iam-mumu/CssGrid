<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Css Grid</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style type="text/css">
		
		.grid-container {
		  display: grid;
		  grid-template-columns: auto auto auto auto;
		  grid-gap: 10px;
		  background-color: #252525;
		  padding: 10px;
		  color: #fff;
		}

		.grid-container > div {
		  text-align: center;
		  padding: 20px 0;
		  transition: 1s;
		}

		.grid-container div:hover{
		    background-color: #e00980 !important;
		}

		.icons{
			height: 150px;
			width: 150px;
			max-width: 150px;
			max-height: 150px;
			margin: auto;
		}
		.custom-bg p{
			padding: 25px 0px;
		}
		.custom-bg:nth-child(1){
			padding: 150px 0;
		}
		.custom-bg:nth-child(6){
			padding: 150px 0;
		}

		.item1 {
		  grid-row: 1 / span 8;
		}
		.item2 {
		  grid-column: 2 / span 2;
		}
		.item4 {
		  grid-row: 2 / span 7;
		}
		.item5 {
		  grid-row: 2 / span 7;
		}
		.item6 {
		  grid-row: 2 / span 8;
		}
		.item7 {
		  grid-column: 1 / span 3;
		}

		
		@media only screen and (max-width: 992px) {
			.icons{
				height: 100px;
				width: 100px;
				max-width: 100px;
				max-height: 100px;
				margin: auto;
			}
		}
		@media only screen and (max-width: 800px) {
			.icons{
				height: 120px;
				width: 120px;
				max-width: 120px;
				max-height: 120px;
				margin: auto;
			}
			.grid-container{
			    display: block;
			  }
			.grid-container > div{
				margin: 10px;
				padding: 50px 0;
			}
		  	.custom-bg:nth-child(1){
				padding: 50px 0;
			}
			.custom-bg:nth-child(6){
				padding: 50px 0;
			}
		}
	</style>
</head>
<body>

<div class="grid-container">
  <div class="item1 bg-dark custom-bg">
  	<img src="icon/heart.png" class="img-responsive img-rounded icons">
		<p>I love me &#128521;</p>
  </div>
  <div class="item2 bg-dark custom-bg">
  	<img src="icon/internet.png" class="img-responsive img-rounded icons">
		<p>Developer &#128187;</p>
  </div>
  <div class="item3 bg-dark custom-bg">
  	<img src="icon/fashion.png" class="img-responsive img-rounded icons">
		<p>My love for life &#10084;</p>
  </div>  
  <div class="item4 bg-dark custom-bg">
  	<img src="icon/environment.png" class="img-responsive img-rounded icons">
		<p>Love nature &#127757;</p>
  </div>
  <div class="item5 bg-dark custom-bg">
  	<img src="icon/code.png" class="img-responsive img-rounded icons">
		<p>I love Programming & Development &#123; 	&#125;</p>
  </div>
  <div class="item6 bg-dark custom-bg">
  	<img src="icon/apple.png" class="img-responsive img-rounded icons">
		<p>Foodie <i class='fas fa-pizza-slice' style='color:wheat'></i></p>
  </div>
  <div class="item7 bg-dark custom-bg">
  	<img src="icon/cat.png" class="img-responsive img-rounded icons">
		<p>Cat Lover &#128525;</p>
  </div>
</div>
</body>
</html>