<?php include('header.php');?>

<section id="page">

<div class="container-page">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Ubicaciones</h2>
    </div>

  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/contacta.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>

                        <table id="tablesorter" class="tablesorter" border="0" cellpadding="1" cellspacing="1">
                          <thead>
                            <tr>
                              <th>Carrera</th>
                              <th>Escuela</th>
                              <th>Dirección</th>
                              <th>Página Web</th>
                              <th>Teléfono</th>

                            </tr>
                          </thead>
                          <tbody>

                            <?php for($a = 0; $a < $total = count($csv); $a++){?>

                            <tr>
                              <td><?php echo($csv[$a]["carrera"])?></td>
                              <td><?php echo($csv[$a]["escuela"])?></td>
                              <td><?php echo($csv[$a]["direccion"]);?> <a href="<?php echo($csv[$a]["maps"])?>" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i></a></td>
                              <td><a href="<?php echo($csv[$a]["pagina_web"])?>" target="_blank"><?php echo($csv[$a]["pagina_web"])?></a></td>
                              <td><?php echo($csv[$a]["telefono"]);?></td>
                            </tr>

                            <?php };?>

                          </tbody>
                        </table>
                      </table>
<button id="export" data-export="export" class="btn btn-primary">Exportar base de datos</button>

 <p><sub>Información extraída de las respectivas páginas web informativas de cada programa de estudio.</sub></p>

  </div>
</div>
</div>
</section>

<?php include('footer.php');?>
