
<?php 
if (isset($_POST['formInsertar'])){?>
    <div class="col-12 col-md-12"> 
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="id">id</label>
      <input name="id" type="text" class="form-control" placeholder="id">
    </div>
    <div class="form-group col-md-6">
      <label for="nombre">nombre</label>
      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="nombre">
    </div>
  </div>

  <div class="form-group col-md-6">
    <label for="estado">estado</label>
    <select required name="estado" class="form-control" id="Estado">
    <option value=""><< >></option>
    <option value="haciendo">haciendo</option>
    <option value="finalizado">finalizado</option>
    
    </select>
  </div>

</div>
<div class="form-group">
  <button name="insertar" type="submit" class="btn btn-primary  btn-block">Guardar</button>
</div>
</form>
    </div> 
<?php }  ?>
