<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="text" name="" id="tex1" placeholder="enter no." >
	<br>
	<input type="text" name="" id="tex2" placeholder="enter no.">
<br>
<input type="button" value="add" onclick="add()" name="">
<input type="button" value="sub" onclick="sub()" name="">
<p id="p"></p>
<script type="text/javascript">
	function add(){
		var a=document.getElementById('tex1').value;
		var b=document.getElementById('tex2').value;
		var c=a+b;
		document.getElementById('p').innerHTML=c;
	}
</script>
</body>
</html>