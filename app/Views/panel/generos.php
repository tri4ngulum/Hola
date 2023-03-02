<?= $this->extend('base/base') ?>
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<?= $this->section("contenido") ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <a href="/add_genero" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
        <div class="card">
          <div class="card-header">
            <center>
              <h3 class="card-title">Lista de Géneros</h3>
            </center>
          </div>
          <div class="card-body">
            <table id="table-generos" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Género</th>
                  <th>Descripción</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $generos = [
                  [
                    'genero' => 'Test',
                    'descripcion' =>  'Test',
                    'id_genero' => 1
                  ],
                  [
                    'genero' => 'Test',
                    'descripcion' =>  'Test',
                    'id_genero' => 1
                  ],
                  [
                    'genero' => 'Test',
                    'descripcion' =>  'Test',
                    'id_genero' => 1
                  ],
                  [
                    'genero' => 'Test',
                    'descripcion' =>  'Test',
                    'id_genero' => 1
                  ],
                  [
                    'genero' => 'Test',
                    'descripcion' =>  'Test',
                    'id_genero' => 1
                  ],
                ];
                $html = '';

                if (isset($generos) && sizeof($generos) > 0) {
                  $num = 0;
                  foreach ($generos as $genero) {
                    $html .= '
                              <tr>
                                  <td>' . ++$num . '</td>
                                  <td>' . $genero["genero"] . '</td>
                                  <td>' . ($genero["descripcion"] == NULL ? "Sin descripción..." : $genero["descripcion"]) . '</td>
                                  <td>';
                    $html .= '<a href="../backend/crud/generos/delete_genero.php?id_genero=' . $genero["id_genero"] . '" class="btn btn-danger btn-sm">Eliminar</a>
                                      <a href="./genero_detalles.php?id_genero=' . $genero["id_genero"] . '" class="btn btn-warning btn-sm">Detalles</a>
                                  </td>
                              </tr>
                            ';
                  }
                }
                echo $html;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>

<?= $this->section("recursos") ?>

<script src="<?= base_url(RECURSOS_ESPECIFICO . '/boleto_nuevo.js'); ?>" )></script>
<?= $this->endSection(); ?>