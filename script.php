
<html>
<script>
function myFunction() {
    alert("I am an alert box!");
}
</script>
<body bgcolor = "#00ffff"><?php 
	
	$con = mysql_connect("localhost","test","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("test", $con);

	$sql="INSERT INTO teste (id, nome,idade, email)
	VALUES
	(NULL,'$_POST[nome]','$_POST[idade]','$_POST[email]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con);
	
	
?>

	<form action = "index.php">
	<tr>
	<td colspan=3 align=right><input type="submit" value="Voltar"></td>
	</tr>
	</form>
	</body>
	</html>
