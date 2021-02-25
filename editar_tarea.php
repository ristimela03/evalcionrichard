<?php
    
if(isset($_POST['actualizar'])){

$id=trim($_POST['id']);
$nombre=trim($_POST['nombre']);
$estado=trim($_POST['estado']);


$consulta = "UPDATE tbl_personal
SET `nombre` = :nombre, `estado` = :estado, `estado` = :estado, 
WHERE `id` = :id";
$sql = $connect->prepare($consulta);
$sql->bindParam(':id',$id,PDO::PARAM_INT);
$sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 25);
$sql->bindParam(':estado',$estado,PDO::PARAM_STR,25);
$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();
echo "<div class='content alert alert-primary' > 

Gracias: $count registro ha sido actualizado  </div>";
}
else{
    echo "<div class='content alert alert-danger'> No se pudo actulizar el registro  </div>";

print_r($sql->errorInfo()); 
}
}
?>