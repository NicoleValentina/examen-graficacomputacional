<?php include('header.php');?>

<section id="page">

<div class="container-page">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Aranceles</h2>
  </div>
  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/arancel.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>
                        <table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
                      		<thead>
                      			<tr>
                      				<th>Institución / Carrera</th>
                              <th>Duración formal</th>
                      				<th>Duración real</th>
                      				<th>Arancel anual</th>
                      				<th>Arancel total formal</th>

                      			</tr>
                      		</thead>
                      		<tbody>

                      			<?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                  			<tr>
                      				<td><?php echo($csv[$a]["escuela"])?> / <?php echo($csv[$a]["carrera"])?></td>
                      				<td><?php echo($csv[$a]["duracion_formal"])?></td>
                      				<td><?php echo($csv[$a]["duracion_real"]);?></td>
                      				<td>$<?php echo($csv[$a]["arancel"]);?></td>
                      				<td>$<?php echo(($csv[$a]["duracion_formal"]*$csv[$a]["arancel"])/2);?></td>

                      			</tr>

                      			<?php };?>

                      		</tbody>
                      	</table>
                        <button id="export" data-export="export" class="btn btn-primary">Exportar base de datos</button>

                        <p><sub>Información extraída de <a href="http://www.mifuturo.cl/">mifuturo.cl</a>, del Ministerio de Educación.</sub></p>
  </div>
</div>
</div>

</section>

<?php include('footer.php');?>
