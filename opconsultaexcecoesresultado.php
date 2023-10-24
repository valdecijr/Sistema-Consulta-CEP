<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script language="JavaScript">
    function protegercodigo() {
    if (event.button==2||event.button==3){
        alert('Sai fora curioso ;)!');}
    }
    document.onmousedown=protegercodigo
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Áea de Cobertura</title>
	<link rel="icon" type="image/png" href="deacts.png" />

	<link rel="stylesheet" href="assets/css/main.css" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	
</head>

<body>
 <?php
$connect = mysql_connect('127.0.0.1:3306','root','');
$db = mysql_select_db('fibranetbr');
$tt = mysql_query("SELECT * FROM clientes");

?>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    position: center;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: ;
}

</style>
</head>
				<br>
				<h1><a href="index.html">VOLTAR AO SITE</span></a></h1>
			</header>
<body>
  <br>
  <br>

<table width="200" border="1" id="clientes">
  <tr>
    <td>CEP</td>
  </tr>
  <?php while ($row = mysql_fetch_assoc($tt)): ?>
  <tr>
    <td><?php echo $row['cep']; ?></td>
 <?php 
endwhile ; 
 ?>   
</table>

</body>
</html>