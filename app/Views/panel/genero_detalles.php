<?= $this->extend('base/base') ?>
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<?= $this->section("contenido") ?>
                <?php

                $genero = [
                    'genero' => 'Test',
                    'descripcion' =>  'Test',
                    'id_genero' => 1
                  ];
?>
      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">

              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Formulario género detalles</h3>
                </div>

                  <?= form_open('form-genero', ['id' => 'form-genero']);?>

                  <div class="card-body">
                    <h5 class="card-title">Todos los campos marcados con (<font color="red">*</font>) son obligatorios
                    </h5><br>
                    <div class="row">
                      <div class="col-md-12">
                        <center>
                          <img src="../img/icon-img/movies.png" class="img-rounded" alt="" id="img-preview" width="20%">
                        </center>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Género (<font color="red">*</font>)</label>
                        <input type="hidden" value="<?php echo $genero['id_genero']; ?>" name="id_genero">

<?php 
                    $data = [
                      'name' => 'genero',
                      'class' => 'form-control',
                      'type' => 'text',
                      'id' => 'genero',
                      'placeholder' => 'Género',
                      'value' => $genero['genero']
                    ];
                    echo form_input($data);
                  ?>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Descripción (<font color="gray">Opcional</font>)</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="5"
                          placeholder="Ingresa la descripción aquí..."
                          style="resize: none;"><?php echo ($genero["genero"] == NULL) ? '' : $genero["descripcion"]; ?> </textarea>
                      </div>
                    </div>

                  </div>

                  <div class="card-footer">

                    <?= form_submit('Registrar', 'Registrar', ['class' => 'btn btn-primary', 'type' => 'submit']); ?>
                    <a href="/generos" class="btn btn-danger">Cancelar</a>
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

  <script src="<?= base_url(RECURSOS_ESPECIFICO. '/genero_nuevo.js'); ?>")></script>
<?= $this->endSection(); ?>
