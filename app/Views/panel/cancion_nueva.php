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
                  <h3 class="card-title">Formulario de canción nueva</h3>
                </div>

                <!-- <form id="form-usuario" action="../backend/crud/canciones/insert_cancion.php" method="post" -->
                  <!-- enctype="multipart/form-data"> -->

                  <?= form_open('form-cancion', ['id' => 'form-cancion']);?>

                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre de la agrupación</label>

                          <!-- <input type="text" name="agrupacion" class="form-control" id="agrupacion" -->
                            <!-- placeholder="Nombre de la agrupación"> -->
                          <?php 
                    $data = [
                      'name' => 'agrupacion',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'agrupacion',
                      'placeholder' => 'Nombre'
                    ];
                    echo form_input($data);
                  ?>


                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre del album</label>
                          <!-- <input type="text" name="album" class="form-control" id="album" -->
                            <!-- placeholder="Nombre del album"> -->
                               <?php 
                    $data = [
                      'name' => 'album',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'album',
                      'placeholder' => 'Nombre del album'
                    ];
                    echo form_input($data);
                  ?>
                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre de la canción</label>
                               <?php 
                    $data = [
                      'name' => 'nombre_cancion',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'nombre_cancion',
                      'placeholder' => 'Nombre de la cancion'
                    ];
                    echo form_input($data);
                  ?>
                          <!-- <input type="text" name="nombre_cancion" class="form-control" id="nombre_cancion" -->
                            <!-- placeholder="Nombre de la cancion"> -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Precio de la cancion</label>
                                 <?php 
                    $data = [
                      'name' => 'precio_cancion',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'precio_cancion',
                      'placeholder' => 'Precio de la cancion'
                    ];
                    echo form_input($data);
                  ?>
                          <!-- <input type="text" name="precio_cancion" class="form-control" id="precio_cancion" -->
                            <!-- placeholder="Precio de la cancion"> -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Genero</label>
                                 <?php 
                    $data = [
                      'name' => 'genero',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'genero',
                      'placeholder' => 'Genero de la canción'
                    ];
                    echo form_input($data);
                  ?>
                          <!-- <input type="text" name="genero" class="form-control" id="genero" -->
                            <!-- placeholder="Genero de la canción"> -->
                        </div>
                      </div>
                    </div>

                    <div class="card-footer">
                      <!-- <button type="submit" class="btn btn-primary">Guardar</button> -->

                    <?= form_submit('Registrar', 'Registrar', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>
                      <a href="/canciones" class="btn btn-danger">Cancelar</a>
                    </div>
                
                <?= form_close(); ?>
                  <!-- </form> -->
              </div>

            </div>

            <div class="col-md-6">

            </div>

          </div>

        </div>
      </section>


<?= $this->endSection(); ?>

<?= $this->section("recursos") ?>

  <script src="<?= base_url(RECURSOS_ESPECIFICO. '/cancion_nueva.js'); ?>")></script>
<?= $this->endSection(); ?>

