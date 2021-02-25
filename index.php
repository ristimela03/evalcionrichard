<?php
if(isset($_POST['insertar'])){

$ids=$_POST['id'];
$nombres=$_POST['nombre'];
$estado=$_POST['estado'];



$sql="insert into tbl_personal(nombres,apellidos,profesion,estado,fregis) values(:nombres,:apellidos,:profesion,:estado,:fregis)";

$sql = $connect->prepare($sql);

$sql->bindParam(':id',$id,PDO::PARAM_INT);
$sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 25);
$sql->bindParam(':estado',$estado,PDO::PARAM_STR,25);
$sql->execute();

$lastInsertId = $connect->lastInsertId();
if($lastInsertId>0){

echo "<div class='content alert alert-primary' > Gracias .. Tu id es : $nombres </div>";
}
else{
echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el administrador </div>";

print_r($sql->errorInfo()); 
}
}
?>