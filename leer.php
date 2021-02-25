
<table class="table table-bordered table-striped">
<thead class="thead-dark">
    <th width="18%">id</th>
    <th width="22%">nombre</th>
    <th width="22%">estado</th>
    
    <th width="13%" colspan="2"></th>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM tbl_personal"; 
$query = $connect -> prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ); 

if($query -> rowCount() > 0)   { 
foreach($results as $result) { 
echo "<tr>
<td>".$result -> id."</td>
<td>".$result -> nombre."</td>
<td>".$result -> estado."</td>

<td>
<form method='POST' action='".$_SERVER['PHP_SELF']."'>
<input type='hidden' name='id' value='".$result -> id."'>
<button name='editar'>Editar</button>
</form>
</td>

<td>
<form  onsubmit=\"return confirm('Realmente desea eliminar el registro?');\" method='POST' action='".$_SERVER['PHP_SELF']."'>
<input type='hidden' name='id' value='".$result -> id."'>
<button name='eliminar'>Eliminar</button>
</form>
</td>
</tr>";

   }
 }
?>
</tbody>
</table>