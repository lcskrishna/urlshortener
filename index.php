<!DOCTYPE html>
<html>
<head>
	<title>URL Shortener Service</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style> 
#main {
    text-align: center;
    color: white;

}

body{
	background-color: #47c747;
}

div.url {
    line-height: 10;
    font-size: large;
}

label{
	color: white;
	display: initial;
	font-size: 30px;
}

.btn-success{
	font-size: -webkit-xxx-large;
}

#urlTextBox{
line-height: normal;
    width: 1000px;
    height: 60px;
}

</style>

</head>
<body>

    <h1 id= "main"> SHORTY URL </h1>

<form action="shorten.php"method="post">
    <div class= "url" align="center">
    	<label for="urlTexBox"> Enter your URL to Shorten : </label> 
    	<br> <input type="url" id="urlTextBox" name="enteredUrl" required />
    	<br><input type="submit" class="btn btn-success" value="Shorten"></input>
    </div>
</form>



</body>
</html>