<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">

    <title>Chercher un film</title>

    <link rel="stylesheet" type="text/css" href="main.css">
	
	<script>
	function showfilm(str) {
	  if (str=="") {
		document.getElementById("txtHint").innerHTML="";
		return;
	  }
	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else {  // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
		  document.getElementById("txtHint").innerHTML=this.responseText;
		}
	  }
	  xmlhttp.open("GET","getfilm.php?q="+str,true);
	  xmlhttp.send();
	}
	</script>

  </head>

	<body>

	<main>
		<form>
		Choisissez une année,  pour voir notre sélection de film : <br>
		<select name="films" onchange="showfilm(this.value)">
		<option value="">Choisi un film :</option>
		<option value="2006">2006</option>
		<option value="2007">2007</option>
		<option value="2008">2008</option>
		<option value="2009">2009</option>
		</select>
		</form>
		<div id="txtHint"><b>voir la selection des film en ...</b></div>
	</main>

	</body>

</html>