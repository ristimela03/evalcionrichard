<?php
public function delete($id){
$sql = "DELETE FROM tarea WHERE id=$id";
$res = mysqli_query($this->con, $sql);
if($res){
return true;
}else{
return false;
}
}

public function delete($id){
$sql = "DELETE FROM tarea WHERE id=$id";
$res = mysqli_query($this->con, $sql);
if($res){
return true;
}else{
return false;
}
}


<?php 
if (isset($_GET['id'])){
	include('database.php');
	$tareas = new Database();
	$id=intval($_GET['id']);
	$res = $tareas->delete($id);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>