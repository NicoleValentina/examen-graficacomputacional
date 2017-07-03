<footer class="text-center">
<div class="footer-above">
  <div class="container">
    <div class="row">
      <div class="footer-col col-md-8 col-md-offset-2 text-center"><p>Esta sitio fue desarrollado por estudiantes de Seminario de Computación Gráfica II, de la carrera de Diseño Gráfico de la Universidad de Chile. Es publicado bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a>.</p></div>
    </div>
  </div>
</div>
<div class="footer-below">
  <div class="container">
    <div class="row">
      <div class="col-lg-12"><strong>ENEDI17<strong> · Encuentro Nacional de Escuelas de Diseño 2017</div>
    </div>
  </div>
</div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<script src="js/creative.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/jquery.tabletoCSV.js" type="text/javascript" charset="utf-8"></script>



<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
$(function() {
  $("#tablesorter").tablesorter({sortList:[[0,0]], widgets: ['zebra']});
  $("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
});
</script>

<script>
        $(function(){
            $("#export").click(function(){
                $("#export_table").tableToCSV();
            });
        });
</script>
</body>
</html>
