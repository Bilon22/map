<html>
	<head>
		<meta charset="utf-8">
		<style>
			body{
				background: black;
				margin: 0 auto;
				color: white;
			}
			.box{
				width: 500px;
				height: 505px;
				border: solid orange 5px;
				float: left;
				border-radius: 10px;
			}
			
			.water{
				width: 5px;
				height: 5px;
				background: blue;
				float: left;
			}
			.sand{
				width:5px;
				height:5px;
				background-color:yellow;
				float: left;		
			}
			.dirt{
				width:5px;
				height:5px;
				background-color:green;
				float: left;		
			}
			.stone{
				width:5px;
				height:5px;
				background-color:grey;
				float: left;	
			}
			#form{
				width: 600px;
				height: 505px;
				float: left;
				border: solid white 5px;
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
	<?
		$size=101;
		if(empty($_GET['reapet'])){$reapet=7;} else {$reapet=$_GET['reapet'];}
		
		if(empty($_GET['waterlevel'])){$waterlevel=12;} else {$waterlevel=$_GET['waterlevel'];}
		if(empty($_GET['sandlevel'])){$sandlevel=3;} else {$sandlevel=$_GET['sandlevel'];}
		if(empty($_GET['dirtlevel'])){$dirtlevel=13;} else {$dirtlevel=$_GET['dirtlevel'];}
		if(empty($_GET['watersand'])){$watersand=12;} else {$watersand=$_GET['watersand'];}

		if(empty($_GET['waterproportion'])){$waterproportion=30;} else {$waterproportion=$_GET['waterproportion'];}
		if(empty($_GET['sandproportion'])){$sandproportion=4;} else {$sandproportion=$_GET['sandproportion'];}
		if(empty($_GET['dirtproportion'])){$dirtproportion=10;} else {$dirtproportion=$_GET['dirtproportion'];}		
		
		$x=1;
		$y=1;
		
		for($x;$x<=$size;$x++){
			$rand=rand(1,100);
				if($rand<=$waterproportion){
					$map[$x][$y]=1;
				}
				elseif($rand>=$waterproportion+1&&$rand<=$waterproportion+$sandproportion){
					$map[$x][$y]=2;
				}
				elseif($rand>=$waterproportion+$sandproportion+1&&$rand<=$waterproportion+$sandproportion+$dirtproportion){
					$map[$x][$y]=3;
				}
				else{
					$map[$x][$y]=4;
				}
				
				
				if($x==$size){
					$y++;
					$x=1;
				}
				
				if($y==$size+1){
					break;
				}
				}
			
		
		
		$z=1;
		
		for($z;$z<=$reapet;$z++){
			$x=1;
			$y=1;
			
			for($x;$x<=$size;$x++){
			$water=0;
			$sand=0;
			$dirt=10;
			
			if($map[$x-1][$y-1]==1){
				$water=$water+$waterlevel;
				$sand=$sand+$watersand;
			}
			elseif($map[$x-1][$y-1]==2){
				$sand=$sand+$sandlevel;
			}
			if($map[$x-1][$y-1]==3){
				$dirt=$dirt+$dirtlevel;
			}
			if($map[$x][$y-1]==1){
				$water=$water+$waterlevel;
				$sand=$sand+$watersand;
			}
			elseif($map[$x][$y-1]==2){
				$sand=$sand+$sandlevel;
			}
			if($map[$x][$y-1]==3){
				$dirt=$dirt+$dirtlevel;
			}			
			if($map[$x+1][$y-1]==1){
				$water=$water+$waterlevel;
				$sand=$sand+$watersand;
			}
			elseif($map[$x+1][$y-1]==2){
				$sand=$sand+$sandlevel;
			}
			if($map[$x+1][$y-1]==3){
				$dirt=$dirt+$dirtlevel;
			}
			if($map[$x-1][$y]==1){
				$water=$water+$waterlevel;
				$sand=$sand+$watersand;
			}
			elseif($map[$x-1][$y]==2){
				$sand=$sand+$sandlevel;
			}
			if($map[$x-1][$y]==3){
				$dirt=$dirt+$dirtlevel;
			}
			if($map[$x+1][$y]==1){
				$water=$water+$waterlevel;
				$sand=$sand+$watersand;
			}
			elseif($map[$x+1][$y]==2){
				$sand=$sand+$sandlevel;
			}
			if($map[$x+1][$y-1]==3){
				$dirt=$dirt+$dirtlevel;
			}
			if($map[$x-1][$y+1]==1){
				$water=$water+$waterlevel;
				$sand=$sand+$watersand;
			}
			elseif($map[$x-1][$y+1]==2){
				$sand=$sand+$sandlevel;
			}
			if($map[$x-1][$y+1]==3){
				$dirt=$dirt+$dirtlevel;
			}
			if($map[$x][$y+1]==1){
				$water=$water+$waterlevel;
				$sand=$sand+$watersand;
			}
			elseif($map[$x][$y+1]==2){
				$sand=$sand+$sandlevel;
			}
			if($map[$x][$y+1]==3){
				$dirt=$dirt+$dirtlevel;
			}
			if($map[$x+1][$y+1]==1){
				$water=$water+$waterlevel;
				$sand=$sand+$watersand;
			}
			elseif($map[$x+1][$y+1]==2){
				$sand=$sand+$sandlevel;
			}
			if($map[$x+1][$y+1]==3){
				$dirt=$dirt+$dirtlevel;
			}
			
			
			$ratio=rand(1,$water+$sand+$dirt);
				
			if($ratio<=$water){
				$map[$x][$y]=1;
			}
			elseif($ratio>$water&&$ratio<=($water+$sand)){
				$map[$x][$y]=2;
			}
			else{
				$map[$x][$y]=3;
			}
			
			if($map[$x-1][$y]==$map[$x+1][$y]){
				$map[$x][$y]=$map[$x-1][$y];
			}
			
			if($map[$x][$y-1]==$map[$x][$y+1]){
				$map[$x][$y]=$map[$x][$y-1];
			}
			
			
			
			if($x==$size){
					$y++;
					$x=1;
				}
				
			if($y==$size+1){
					break;
				}
			
			}
		}
		
		
			echo "<div class=\"box\">";
		$x=1;
		$y=1;
		
		for($x;$x<=$size;$x++){
			

			if($map[$x][$y]==1){
				echo "<div class=\"water\"></div>";
			}
			if($map[$x][$y]==2){
				echo "<div class=\"sand\"></div>";				
			}			
			if($map[$x][$y]==3){
				echo "<div class=\"dirt\"></div>";			
			}			
			if($map[$x][$y]==4){
				echo "<div class=\"stone\"></div>";			
			}			
			
			
			if($x==$size){
				$y++;
				$x=0;
			}
				
			if($y==$size+1){
				break;
			}
		}
		echo"</div>";
	?>
	
	
	<div id="form">
			<form action="index.php" method="GET">
			<table>
			<tr><td><h1>Częstotliwość tworzenia się:</h1></td></tr>
			<tr><td>Woda:</td><td> <input type=text name="waterlevel" value="12"/></td></td>
			<tr><td>Piasek:</td><td> <input type=text name="sandlevel" value="3"/></td></tr>
			<tr><td>Ziemia:</td><td> <input type=text name="dirtlevel" value="13"/></td></tr>
			<tr><td>Plaże:</td><td> <input type=text name="watersand" value="10"/></td></tr>
				
			<tr><td>Gładkość:</td><td> <input type=text name="reapet" value="7"/></td></tr>
			  
			<tr><td><h1>Gęstość występowania: </h1></td></tr>
			
			<tr><td>	Woda:</td><td> <input type=text name="waterproportion" value="30"/></td></tr>
			<tr><td>	Piasek:</td><td> <input type=text name="sandproportion" value="4"/></td></tr>
			<tr><td>	Ziemia:</td><td> <input type=text name="dirtproportion" value="10"/></td></tr>		  
			</table>
			  <input type=submit value="Generuj!"/>
		  </form>
	</div>
	
	</body>
</html>