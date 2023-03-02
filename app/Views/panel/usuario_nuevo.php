<?= $this->extend('base/base') ?>
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<?= $this->section("contenido") ?>
     <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Formulario de usuario nuevo</h3>
                </div>

                <!-- <form id="form-usuario" action="../backend/crud/usuarios/insert_usuario.php" method="post" -->

                  <?= form_open('form-usuario', ['id' => 'form-usuario']);?>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre(s)</label>
                          <!-- <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre(s)"> -->
                          <?php 
                    $data = [
                      'name' => 'nombre',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'nombre',
                      'placeholder' => 'Nombre(s)'
                    ];
                    echo form_input($data);
                  ?>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Apellido Paterno</label>
                          <!-- <input type="text" name="apellido_paterno" class="form-control" id="apellido_paterno" -->
                            <?php 
                    $data = [
                      'name' => 'apellido_paterno',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'apellido_paterno',
                      'placeholder' => 'Apellido Paterno'
                    ];
                    echo form_input($data);
                  ?>

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Apellido Materno</label>
                          <!-- <input type="text" name="apellido_materno" class="form-control" id="apellido_materno" -->
                            <!-- placeholder="Apelldio Materno"> -->
                            <?php 
                    $data = [
                      'name' => 'apellido_materno',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'apellido_materno',
                      'placeholder' => 'Apellido Materno'
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
                            <!-- <input class="form-check-input" type="radio" name="sexo" value="2"> -->
                            <?php 
                    $data = [
                      'name' => 'sexo',
                      'class' => 'form-check-input',
                      'type' => 'radio',
                      'id' => 'radio',
                    ];
                    echo form_input($data);
                  ?>

                            <label class="form-check-label">Femenino</label>
                          </div>
                          <div class="form-check">
                            <!-- <input class="form-check-input" type="radio" name="sexo" value="1"> -->
                            <?php 
                    $data = [
                      'name' => 'sexo',
                      'class' => 'form-check-input',
                      'type' => 'radio',
                      'id' => 'sexo',
                    ];
                    echo form_input($data);
                  ?>

                            <label class="form-check-label">Masculino</label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Rol</label>
                          <select class="form-control" name="rol">
                            <option value="">Seleccionar un rol</option>
                            <option value="777">Administrador</option>
                            <option value="888">Operador</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Correo electrónico</label>
                          <!-- <input type="email" name="email" class="form-control" id="email" -->
                            <!-- placeholder="Correo electrónico"> -->
                            <?php 
                    $data = [
                      'name' => 'email',
                      'class' => 'form-control',
                      'type' => 'email',
                      'id' => 'email',
                      'placeholder' => 'Correo electrónico'
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
                          <!-- <input type="password" name="password" class="form-control" id="password" -->
                            <!-- placeholder="***********"> -->
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
                          <!-- <input type="password" name="repassword" class="form-control" id="repassword" -->
                            <!-- placeholder="***********"> -->
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
                    <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->
                    <?= form_submit('Registrar', 'Registrar', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>
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
