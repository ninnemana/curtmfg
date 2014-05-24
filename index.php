<!DOCTYPE html>
<html>
<head>
<title>Curt MFG test</title>
<script type="text/javascript">
	function getNumbers() {
		var xmlhttp;
		if (window.XMLHttpRequest) {
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
				
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("results").innerHTML=xmlhttp.responseText;
			}
		}
		
		xmlhttp.open("GET", "script.php", true);
		xmlhttp.send();
			
	}

</script>

<style type="text/css">
table
{
	border-collapse:collapse;
} 

td 
{
	padding: 10px;
	text-align: center;
	border: 1px solid black;
}

#results 
{
	margin-top: 15px;
}

</style>

</head>
<body>
	
<h4>First 1000 Prime Numbers</h4>

<button type="button" onclick="getNumbers()">Display Numbers</button>

<div id="results">
</div>		

</body>
</html> 
	

