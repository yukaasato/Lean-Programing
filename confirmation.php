<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
 
<body>
 
<h2>�⍇�����e</h2>    
 
<form action="mailto.php" method="post">
 
<table border="1">
<tr>
<td>���O</td>
<td><?php echo $_POST["name"]; ?></td>
</tr>
<tr>
<td>���[���A�h���X</td>
<td><?php echo $_POST["mail"]; ?></td>
</tr>
<tr>
<td>�₢���킹���e</td>
<td><?php echo $_POST["inquiry"]; ?></td>
</tr>
</table>
 
<input type="submit" value="���M" />
</form>
 
</body>
    
</html>