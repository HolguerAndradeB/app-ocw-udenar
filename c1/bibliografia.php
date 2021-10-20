<?php include 'header.php'; ?>

<div class="row">
  <div class="col s12 m12 l12">
    <div class="card card-panel bgAlfabetizacion">

      <h1>BIBLIOGRAFIA</h1>

      <div class="row">
        <a class="waves-effect waves-red btn-large right" href="../index.html">Inicio<i class="material-icons right white-text">home</i></a>
      </div>

    </div>
  </div>
</div>

<script>
  function OcultarUnidadContenido() {
    var els = document.getElementsByClassName("UnidadContenido");
    Array.prototype.forEach.call(els, function(el) {
      var uni = el.id;
      var element = document.getElementById(uni);
      element.classList.add("mystyle");
    });
  }

  document.addEventListener('DOMContentLoaded', function() {
    OcultarUnidadContenido();
    M.AutoInit();
  });
</script>

<script>
  function MostrarUnidadContenido(id_Unidad) {
    OcultarUnidadContenido();
    id_Unidad.classList.toggle("mystyle");
  }
</script>



<?php include 'footer.php'; ?>