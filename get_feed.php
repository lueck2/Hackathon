<?php 
$con=//connection
$username=//username, stored in a cookie most likely
$query="SELECT schools FROM User WHERE name= ".'\''.$username.'\''; 
$university=mysql_query($query,$con);
$query="SELECT categories FROM User WHERE name= ".'\''.$username.'\'';
$categories=mysql_query($query,$con);
$uni_index=explode(",",$universities); 
$cat_index=explode(",", $categories);
//-------------------------------------------------------------------------------
$first=true;
//var_dump(sizeof($uni_index));
for($i=0; $i<sizeof($uni_index); $i++)
{
	if($first)
	{	
		$query.=" school LIKE " . '\'' .$uni_index[$i].'\'';
		$first=false;
	}
	else	
		$query.=" OR school LIKE ". '\''.$uni_index[$i].'\'';
}
//var_dump($query);

$query.=" AND (";
$first=true;
for($i=0; $i<sizeof($cat_index); $i++)
{
	if($first==false)
		$query.=" OR";
	var_dump($first);
	$query.=" categories LIKE  ".'\''.$cat_index[$i]. '\'';
	$query.=" OR categories LIKE  ".'\''.$cat_index[$i]. ',%\'';
	$query.=" OR categories LIKE  ".'\'%,'.$cat_index[$i]. ',%\'';
	$query.=" OR categories LIKE  ".'\'%,'.$cat_index[$i]. '\'';
	
	$first=false;
}
$query.=")";
//var_dump($query);
//----------------------------------------------------------------------------------------------------------------------------------
$event_table=mysql_query($query, $con);
$event_html=array();
$i=0;
while($row=mysql_fetch_array($event_table)) 
		{ 
			//Need to make this look pretty, this is how events are displaye in the app
			$event_html[$i]=$row['name']."  ".$row['school'].$row['location']+$row['time']$row['date'];
			$i++;
		}
echo json_encode(array('events'=>$event_html));

	
}?>