<?= $this->extend('base/base') ?>
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<?= $this->section("contenido") ?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <a href="/add_cancion" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
        <div class="card">
          <div class="card-header">
            <center>
              <h3 class="card-title">Lista de canciones</h3>
            </center>
          </div>
          <div class="card-body">
            <table id="table-cancions" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Agrupación</th>
                  <th>Albúm</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Genero</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $canciones = [
                  [
                    'agrupacion' => 'Test',
                    'album' =>  'Test',
                    'nombre_cancion' => 'Test',
                    'precio_cancion' => 'Test',
                    'genero' => 'Test',
                    'id_cancion' => 1
                  ],
                  [
                    'agrupacion' => 'Test',
                    'album' =>  'Test',
                    'nombre_cancion' => 'Test',
                    'precio_cancion' => 'Test',
                    'genero' => 'Test',
                    'id_cancion' => 1
                  ],
                  [
                    'agrupacion' => 'Test',
                    'album' =>  'Test',
                    'nombre_cancion' => 'Test',
                    'precio_cancion' => 'Test',
                    'genero' => 'Test',
                    'id_cancion' => 1
                  ],
                  [
                    'agrupacion' => 'Test',
                    'album' =>  'Test',
                    'nombre_cancion' => 'Test',
                    'precio_cancion' => 'Test',
                    'genero' => 'Test',
                    'id_cancion' => 1
                  ],
                  [
                    'agrupacion' => 'Test',
                    'album' =>  'Test',
                    'nombre_cancion' => 'Test',
                    'precio_cancion' => 'Test',
                    'genero' => 'Test',
                    'id_cancion' => 1
                  ],
                ];
                $html = '';
                if (isset($canciones) && sizeof($canciones) > 0) {
                  $num = 0;
                  foreach ($canciones as $cancion) {
                    $html .= '
                                                <tr>
                                                    <td>' . ++$num . '</td>
                                                    <td>' . $cancion["agrupacion"] . '</td>
                                                    <td>' . $cancion["album"] . '</td>
                                                    <td>' . $cancion["nombre_cancion"] . '</td>
                                                    <td>' . $cancion["precio_cancion"] . '</td> 
                                                    <td>' . $cancion["genero"] . '</td> 
                                                    <td>';
                    $html .= '<a href="../backend/crud/canciones/delete_cancion.php?id_cancion=' . $cancion["id_cancion"] . '" class="btn btn-danger btn-sm">Eliminar</a>
                                                        <a href="./cancion_detalles.php?id_cancion=' . $cancion["id_cancion"] . '" class="btn btn-warning btn-sm">Detalles</a>
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