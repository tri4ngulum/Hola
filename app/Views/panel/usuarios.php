<?= $this->extend('base/base') ?>
<?= $this->section("css") ?>
<?= $this->endSection(); ?>

<?= $this->section("contenido") ?>
       <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <a href="/add_usuario" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
                <div class="card">
                  <div class="card-header">
                    <center>
                      <h3 class="card-title">Lista de Usuarios</h3>
                    </center>
                  </div>
                  <div class="card-body">
                    <table id="table-usuarios" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Usuario</th>
                          <th>Rol</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $usuarios = [ 
                          [
                          'nombre_usuario' => 'Test',
                          'ap_paterno_usuario' =>  'Test',
                          'ap_materno_usuario' => 'Test',
                          'rol' => 'Test',
                          'estatus_usuario' => 1,
                          'id_usuario' => 1
                          ],
                          [
                          'nombre_usuario' => 'Test',
                          'ap_paterno_usuario' =>  'Test',
                          'ap_materno_usuario' => 'Test',
                          'rol' => 'Test',
                          'estatus_usuario' => 1,
                          'id_usuario' => 1
                          ],
                          [
                          'nombre_usuario' => 'Test',
                          'ap_paterno_usuario' =>  'Test',
                          'ap_materno_usuario' => 'Test',
                          'rol' => 'Test',
                          'estatus_usuario' => 1,
                          'id_usuario' => 1
                          ],
                          [
                          'nombre_usuario' => 'Test',
                          'ap_paterno_usuario' =>  'Test',
                          'ap_materno_usuario' => 'Test',
                          'rol' => 'Test',
                          'estatus_usuario' => 1,
                          'id_usuario' => 1
                          ],
                          [
                          'nombre_usuario' => 'Test',
                          'ap_paterno_usuario' =>  'Test',
                          'ap_materno_usuario' => 'Test',
                          'rol' => 'Test',
                          'estatus_usuario' => 1,
                          'id_usuario' => 1
                          ]
                          ];
                      $html = '';
                      if (isset($usuarios) && sizeof($usuarios) > 0) {
                        $num = 0;
                        foreach ($usuarios as $usuario) {
                          $html .= '
                                                <tr>
                                                    <td>' . ++$num . '</td>
                                                    <td>' . $usuario["nombre_usuario"] . ' ' . $usuario["ap_paterno_usuario"] . ' ' . $usuario["ap_materno_usuario"] . '</td>
                                                    <td>' . $usuario["rol"] . '</td>
                                                    <td>';
                          if ($usuario["estatus_usuario"] != 1) {
                            $html .= '<a href="../backend/crud/usuarios/update_estatus.php?id_usuario=' . $usuario["id_usuario"] . '&estatus=2" class="btn btn-info btn-sm">Habilitar</a>';
                          } else {
                            $html .= '<a href="../backend/crud/usuarios/update_estatus.php?id_usuario=' . $usuario["id_usuario"] . '&estatus=1" class="btn btn-primary btn-sm">Deshabilitar</a>';
                          }

                          $html .= '<a href="../backend/crud/usuarios/delete_usuario.php?id_usuario=' . $usuario["id_usuario"] . '" class="btn btn-danger btn-sm">Eliminar</a>
                                                        <a href="./usuario_detalles.php?id_usuario=' . $usuario["id_usuario"] . '" class="btn btn-warning btn-sm">Detalles</a>
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

  <script src="<?= base_url(RECURSOS_ESPECIFICO. '/boleto_nuevo.js'); ?>")></script>
<?= $this->endSection(); ?>

