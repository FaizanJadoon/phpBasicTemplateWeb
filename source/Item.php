<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "templatedb";

	@mysql_connect($host, $user, $password) or die(mysql_error());
	mysql_select_db($database);


	$types = mysql_query("SELECT type FROM items") or die(mysql_error());
	$itemTypes =array();
	while ($itemType = mysql_fetch_array($types)) 
	{
		array_push($itemTypes, $itemType[0]);
	}


	$temp = '<form method="post" action="Item.php"> <select name="options" class="select">';
	foreach ($itemTypes as $key) 
	{
		$temp .= '<option value='.$key. '>' . $key . '</option>';
	}
	$temp .= '</select> <input style="height: 30px; width: 40px;" type="submit" name="submit" value="Go"/>';


	if (isset($_POST["options"])) 
	{

		$query = "SELECT * FROM items WHERE type LIKE  " ;
		$query .="'";
		$query .=$_POST["options"];
		$query .="'";
	}
	else
	{
		$query = "SELECT * FROM items WHERE type LIKE '%' ";
	}

	$title = "Item Overview";
	

	
	$result = mysql_query($query) or die(mysql_error());
	 $items = array();
	while ($row = mysql_fetch_array($result)) 
	{
		array_push($items, $row);
	}
		mysql_close();
		$temp1='  

	<table>
	<tr >
			<td >'.'<img class="imgLeft" src='.'../'.$items[0][6].'> </td>
		</tr>
		<tr>
			<th>Name: </th> 
			<td>'. $items[0][1]. '</td>
		</tr>
		<tr>
			<th>Type: </th>
			<td>'. $items[0][2] .'</td>
		</tr>
		<tr>
			<th>Price: </th>
			<td>' . $items[0][3]. ' </td>
		</tr>
		<tr>
			<th>Roast: </th>
			<td>' . $items[0][4]. ' </td>
		</tr>
		<tr>
			<th>Country: </th>
			<td>' . $items[0][5]. ' </td>
		</tr>
		<tr>
			<th>Review: </th>
			<td>' . $items[0][7]. ' </td>
		</tr>






	</table>
</form>';





	 $content = $temp;
	 $content .= $temp1;


	 $sidebar="
	 Maids table how learn drift but purse stand yet set. 
	 Music me house could among oh as their. Piqued our sister shy nature almost his wicket. 
	 Hand dear so we hour to. He we be hastily offence effects he service. Sympathize it projection 
	 ye insipidity celebrated my pianoforte indulgence. Point his truth put style. Elegance exercise 
	 as laughing proposal mistaken if. We up precaution an it solicitude acceptance invitation. 
	 <br/> <br/>
	 Greatly cottage thought fortune no mention he. Of mr certainty arranging am smallness 
	 by conveying. 
	 Him plate you allow built grave. Sigh sang nay sex high yet door game. 

	 ";

include 'template.php';
 

 ?>