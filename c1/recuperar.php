<?php include 'extend/header.php'; ?>

<section class="container">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card card-panel center bgAlfabetizacion white-text hoverable">
        <div class="row">
          <div class="col s12 m10 l0"><br>
            <p><b style="font-size: 20px;">Recupera información y contenidos digitales desde diferentes dispositivos a través de herramientas digitales.</b></p>
          </div>
          <div class="col s12 m2 l2">
            <img src="../img/c1/buscar.png" alt="Icono buscar" class="responsive-img" width="80px">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="row">
  <div class="col s12 m12 l12">
    <div class="card card-panel">
      <div class="row">
        <h5 class="center flow-text"><b>Lecciones</b>
          <hr>
        </h5>
        <ul class="collapsible">

          <li>
            <div class="collapsible-header hover_item"><i class="material-icons blue-text tyni">menu_book</i>1.) Herramientas para recuperar información.</div>
            <div class="collapsible-body">
              <div class="row">
                <div class="col s12 m4 l4">
                  <ul>
                    <li class="hover_lecciones"><a class="flow-text teal-text" href="#!" onclick="MostrarUnidadContenido(Contenido1_l1)"><i class="material-icons teal-text">play_circle_outline</i> Ver lección</a>
                    </li>
                    <li>
                      <div class="divider"></div>
                    </li>
                    <li class="hover_lecciones"><a class="flow-text teal-text" href="#!" onclick="MostrarUnidadContenido(Contenido1_l2)"><i class=" material-icons teal-text">library_books</i> Leer lección</a>
                    </li>
                    <li>
                      <div class="divider"></div>
                    </li>
                  </ul>
                </div>

                <div class="col s12 m8 l8">
                  <div id="Contenido1_l1" class="UnidadContenido video-container responsive-video" controls>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lvQclqkeg1U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div id="Contenido1_l2" class="UnidadContenido">
                    <embed src=" ../docs/Ayuda.pdf" type="application/pdf" width="100%" height="480px" />
                  </div>
                </div>

              </div>
            </div>
          </li>

          <li>
            <div class="collapsible-header hover_item"><i class="material-icons blue-text tyni">menu_book</i>2.) Restauración de información.</div>
            <div class="collapsible-body">
              <div class="row">
                <div class="col s12 m4 l4">
                  <ul>
                    <li class="hover_lecciones"><a class="flow-text teal-text" href="#!" onclick="MostrarUnidadContenido(Contenido2_l1)"><i class="material-icons teal-text">play_circle_outline</i> Ver lección</a>
                    </li>
                    <li>
                      <div class="divider"></div>
                    </li>
                    <li class="hover_lecciones"><a class="flow-text teal-text" href="#!" onclick="MostrarUnidadContenido(Contenido2_l2)"><i class=" material-icons teal-text">library_books</i> Leer lección</a>
                    </li>
                    <li>
                      <div class="divider"></div>
                    </li>
                  </ul>
                </div>

                <div class="col s12 m8 l8">
                  <div id="Contenido2_l1" class="UnidadContenido video-container responsive-video" controls>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/unJ36UZtKYE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div id="Contenido2_l2" class="UnidadContenido">
                    <embed src=" ../docs/Ayuda.pdf" type="application/pdf" width="100%" height="480px" />
                  </div>
                </div>

              </div>
            </div>
          </li>

          <li>
            <div class="collapsible-header hover_item"><i class="material-icons blue-text tyni">menu_book</i>3.) Gestión tipos de información.</div>
            <div class="collapsible-body">
              <div class="row">
                <div class="col s12 m4 l4">
                  <ul>
                    <li class="hover_lecciones"><a class="flow-text teal-text" href="#!" onclick="MostrarUnidadContenido(Contenido3_l1)"><i class="material-icons teal-text">play_circle_outline</i> Ver lección</a>
                    </li>
                    <li>
                      <div class="divider"></div>
                    </li>
                    <li class="hover_lecciones"><a class="flow-text teal-text" href="#!" onclick="MostrarUnidadContenido(Contenido3_l2)"><i class=" material-icons teal-text">library_books</i> Leer lección</a>
                    </li>
                    <li>
                      <div class="divider"></div>
                    </li>
                  </ul>
                </div>

                <div class="col s12 m8 l8">
                  <div id="Contenido3_l1" class="UnidadContenido video-container responsive-video" controls>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/unJ36UZtKYE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div id="Contenido3_l2" class="UnidadContenido">
                    <embed src=" ../docs/Ayuda.pdf" type="application/pdf" width="100%" height="480px" />
                  </div>
                </div>

              </div>
            </div>
          </li>

        </ul>
      </div>

      <div class="row">
        <a class="waves-effect waves-red btn-large right" href="filtrar.php">Continuar con evidencia N°4<i class="material-icons right white-text">last_page</i></a>
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

<?php include '../footer.php'; ?>