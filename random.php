<html>
	<head>
		<style>
			.water{
				width: 18px;
				height: 18px;
				background: blue;
				display: inline;
				float: left;
			}
			.sand{
				width:18px;
				height:18px;
				background-color:yellow;
				display:inline;
				float: left;				
			}
			.dirt{
				width:18px;
				height:18px;
				background-color:green;
				display:inline;
				float: left;				
			}
		</style>
	</head>
	<body>
		<?
			$x=1;
			
			for($x;$x<=900;$x++){
				
					
			$rand=rand(1,3);
					
			if($rand==1){
				echo "<div class=\"water\"></div>";
			}
			if($rand==2){
				echo "<div class=\"sand\"></div>";				
			}			
			if($rand==3){
				echo "<div class=\"dirt\"></div>";			
			}			
					
			if($x%30==0){	
				echo "</br>";	
			}
			}
		?>
	</body>
</html>