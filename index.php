<html>
<head>
<title> Banco de Dados</title>
</head>
<?php

$myconnection = mysqli_connect("localhost","root","","test");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($myconnection, "SELECT id, nome, idade, email FROM teste")) {
    printf("%d registros encontados.\n", mysqli_num_rows($result));
}

?>
	<body>
		<table border="1" cellpadding = "2" cellspacing="3" summary = "Table" width='600px'>
			<tr>
				<th>id</th>
				<th>nome</th>
				<th>idade</th>
				<th>email</th>
			</tr>
			<?php
			while($obj = $result->fetch_object()){ 
				?>
					<tr>
						<td><?php echo $obj->id; ?></td>
						<td><?php echo $obj->nome; ?></td>
						<td><?php echo $obj->idade; ?></td>
						<td><a href="mailto:<?php echo $obj->email; ?>"><?php echo $obj->email; ?></a></td>
					</tr>
				<?php
			}
			?>
		</table>
		
		Cadastrar novo:
		<table width='600px'>
			<form method="post" action = "script.php">
			<tr>
				<td><input placeholder="Nome" name="nome" size=60 /> </td>
				<td><input placeholder="Idade" name="idade" size=2 /> </td>
				<td><input placeholder="E-mail" name="email" size=25 /> </td>
			</tr>
			<tr>
				<td colspan=3 align=right><input type="submit" value="Cadastrar"></td>
			</tr>
			</form>
		</table>
	</body>
</html>
<?php
	mysqli_free_result($result);
?>