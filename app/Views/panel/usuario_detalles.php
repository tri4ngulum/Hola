<?= $this->extend('base/base') ?>
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<?= $this->section("contenido") ?>
 <?php
                        $usuario = [ 'nombre_usuario' => 'Test',
                          'ap_paterno_usuario' =>  'Test',
                          'ap_materno_usuario' => 'Test',
                          'rol' => 'Test',
                          'estatus_usuario' => 1,
                          'id_usuario' => 1,
                          'imagen_usuario' => NULL,
                          'sexo_usuario' => 2,
                          'id_rol' => 888,
                          'email_usuario' => 'test@test.com'
                          ];
?>
     <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Formulario de usuario detalles</h3>
                </div>

                  <?= form_open('form-usuario', ['id' => 'form-usuario']);?>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <center>
                          <img
                            src="<?php echo ($usuario['imagen_usuario'] == NULL) ? '../img/icono-usuario.png' : '../img/' . $usuario['imagen_usuario']; ?>"
                            class="img-rounded" alt="" id="img-preview" width="10%">
                        </center>
                      </div>
                    </div>
                    <input type="hidden" value="<?php echo $usuario['imagen_usuario']; ?>" name="imagen usuario">
                    <input type="hidden" value="<?php echo $usuario['id_usuario']; ?>" name="id_usuario">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre(s)</label>

       <?php 
                    $data = [
                      'name' => 'nombre',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'nombre',
                      'placeholder' => 'Nombre(s)',
                      'value' => $usuario['nombre_usuario']
                    ];
                    echo form_input($data);
                  ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Apellido Paterno</label>
           <?php 
                    $data = [
                      'name' => 'apellido_paterno',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'apellido_paterno',
                      'placeholder' => 'Apellido Paterno',
                      'value' => $usuario['ap_paterno_usuario']
                    ];
                    echo form_input($data);
                  ?>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Apellido Materno</label>

       <?php 
                    $data = [
                      'name' => 'apellido_materno',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'apellido_materno',
                      'placeholder' => 'Apellido Materno',
                      'value' => $usuario['ap_materno_usuario']
                    ];
                    echo form_input($data);
                  ?>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Sexo</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" value="2" <?php echo
                              ($usuario['sexo_usuario']==2) ? 'checked' : ''; ?>>
                            <label class="form-check-label">Femenino</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" value="1" <?php echo
                              ($usuario['sexo_usuario']==1) ? 'checked' : ''; ?>>
                            <label class="form-check-label">Masculino</label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Rol</label>
                          <select class="form-control" name="rol">
                            <option value="">Seleccionar un rol</option>
                            <option value="795" <?php echo ($usuario['id_rol']==795) ? 'selected' : ''; ?>>Administrador
                            </option>
                            <option value="888" <?php echo ($usuario['id_rol']==888) ? 'selected' : ''; ?>>Operador
                            </option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Correo electrónico</label>
          <?php 
                    $data = [
                      'name' => 'email',
                      'class' => 'form-control',
                      'type' => 'email',
                      'id' => 'email',
                      'placeholder' => 'Correo electrónico',
                      'value' => $usuario['email_usuario']
                    ];
                    echo form_input($data);
                  ?>


                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Contraseña</label>

       <?php 
                    $data = [
                      'name' => 'password',
                      'class' => 'form-control',
                      'type' => 'password',
                      'id' => 'password',
                      'placeholder' => '*********'
                    ];
                    echo form_input($data);
                  ?>


                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Repetir Contraseña</label>
           <?php 
                    $data = [
                      'name' => 'repassword',
                      'class' => 'form-control',
                      'type' => 'password',
                      'id' => 'repassword',
                      'placeholder' => '*********'
                    ];
                    echo form_input($data);
                  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">

                    <?= form_submit('Editar', 'Editar', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>
                    <a href="/usuarios" class="btn btn-danger">Cancelar</a>
                  </div>

                <?= form_close(); ?>
              </div>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </section>


<?= $this->endSection(); ?>

<?= $this->section("recursos") ?>

  <script src="<?= base_url(RECURSOS_ESPECIFICO. '/usuario_nuevo.js'); ?>")></script>
<?= $this->endSection(); ?>
