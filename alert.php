<html>
<head>
<meta charset="utf-8">
<title>JavaScript Alert Box by PHP</title>
<?php  

function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
    return '$message';
}
  
  
// Function call
if(function_alert("Welcome to Geeks for Geeks")=="Welcome to Geeks for Geeks")
{
	echo 'x';
}


?>
</head>

<body>
</body>
</html>