<?php include('header.php');?>

<section id="page">

<div class="container-page">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Proyecciones</h2>
  </div>
  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/futuro.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>

                        <table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
                      		<thead>
                      			<tr>
                      				<th>Institución</th>
                              <th>Grado Académico</th>
                      				<th>Título Profesional</th>
                      				<th>Empleabilidad</th>
                      				<th>Ingreso promedio al cuarto año</th>
                      				</tr>
                      		</thead>
                      		<tbody>

                      			<?php for($a = 0; $a < $total = count($csv); $a++){?>

                      			<tr>
                      				<td><?php echo($csv[$a]["institucion"])?></td>
                              <td><?php echo($csv[$a]["grado"])?></td>
                      				<td><?php echo($csv[$a]["titulo_profesional"])?></td>
                      				<td><?php echo($csv[$a]["empleabilidad"]);?></td>
                      				<td><?php echo($csv[$a]["ingreso_promedio_4to_año"])?></td>
                      			</tr>

                      			<?php };?>

                      		</tbody>
                      	</table>
                        <button id="export" data-export="export" class="btn btn-primary">Exportar base de datos</button>

                        <p><sub>Información extraída de <a href="http://www.mifuturo.cl/">mifuturo.cl</a> del Ministerio de Educación y de las respectivas páginas web informativas de cada programa de estudio.</sub></p>
                        </div>

  </div>
</div>
</div>

</section>

<?php include('footer.php');?>
