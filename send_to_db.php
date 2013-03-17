<?php
//Connecting to sql db.
//$connect = mysqli_connect("my host","my user","my passwrod","my db");
//Sending form data to sql db.

//categories sql input fields
$first=true; 
$categories="";
$input[0]=false;
$input[1]=false;
$input[2]=false;

$input[0]=($_POST['cat1']);
$input[1]=($_POST['cat2']);
$input[2]=($_POST['cat3']);


//$input[0]=false;
//$input[1]=true;
//$input[2]=true;
echo "Categories";

for($i=0; $i<3; $i++) 
{
	if($input[$i])
	{			
		if($first)
		{
			$categories.=$i;
			$first=false;
		}
		else
		{
			$categories=$categories.",".$i;
		}

	}
	var_dump($categories);
}

var_dump($categories);
////
////

//university sql input fields
//$first=true; 
$first=true;
$universities="";
$input[0]=false;
$input[1]=false;

$input[0]=($_POST['wpunj']);
$input[1]=($_POST['tcnj']);
echo "UNIVERSITIES";
for($i=0; $i<2; $i++) 
{
	if($input[$i])
	{			
		if($first)
		{
			$universities.=$i;
			$first=false;
		}
		else
		{
			$universities=$universities.",".$i;
		}

	}
	var_dump($universities);
}

var_dump($universities);
//mysqli_query($connect,"INSERT INTO posts (category, title, contents, tags)
//VALUES ('$_POST[post_category]', '$_POST[post_title]', '$_POST[post_contents]', '$_POST[post_tags]')";
?>