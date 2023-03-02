<?= $this->extend('base/base') ?>
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<?= $this->section("contenido") ?>
<?php
$cancion = [
                    'agrupacion' => 'Test',
                    'album' =>  'Test',
                    'nombre_cancion' => 'Test',
                    'precio_cancion' => 3333,
                    'genero' => 'Test',
                    'id_cancion' => 1
                  ];
?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulario de la cancion detalles</h3>
              </div>


                  <?= form_open('form-cancion', ['id' => 'form-cancion']);?>
                <div class="card-body">
                 <?php 
                    $data = [
                      'name' => 'id_cancion',
                      'class' => 'form-control',
                      'type' => 'hide',
                      'id' => 'id_cancion',
                      'value' => $cancion['id_cancion']
                    ];
                    echo form_input($data);
                  ?>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la agrupación</label>
                           <?php 
                    $data = [
                      'name' => 'agrupacion',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'agrupacion',
                      'placeholder' => 'Nombre',
                      'value' => $cancion['agrupacion']
                    ];
                    echo form_input($data);
                  ?>


                      </div>
                     
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Album de la agrupación</label>
                    <?php 
                    $data = [
                      'name' => 'album',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'album',
                      'placeholder' => 'Nombre del album',
                      'value' => $cancion['album']
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
                      'placeholder' => 'Nombre de la cancion',
                      'value' => $cancion['nombre_cancion']
                    ];
                    echo form_input($data);
                  ?>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Precio</label>

              <?php 
                    $data = [
                      'name' => 'precio_cancion',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'precio_cancion',
                      'placeholder' => '$00000',
                      'value' => $cancion['precio_cancion']
                    ];
                    echo form_input($data);
                  ?>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Genero</label>
                        <!-- <input type="text" value="<?php echo $cancion['genero']; ?>" name="genero" class="form-control" -->
                          <!-- id="genero" placeholder="Genero"> -->
              <?php 
                    $data = [
                      'name' => 'genero',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'genero',
                      'placeholder' => 'Genero de la canción',
                      'value' => $cancion['genero']
                    ];
                    echo form_input($data);
                  ?>

                      </div>
                    </div>
                  </div>

                  <div class="card-footer">
                    <!-- <button type="submit" class="btn btn-primary">Guardar</button> -->

                    <?= form_submit('Guardar', 'Guardar', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>

                    <a href="/canciones" class="btn btn-danger">Cancelar</a>
                  </div>
              <!-- </form> -->

                <?= form_close(); ?>
            </div>

            </form>
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

