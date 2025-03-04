function MNuevoControlHerramientas() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/controlherramientas/FNuevoControlHerramientas.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegControlHerramientas() {


  var formData = new FormData($("#FormRegControlHerramientas")[0])


  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrRegControlHerramienta",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Control Herramientas Registrado',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error de Registro!!!',
          timer: 1500
        })
      }
    }
  })

}

function MVerControlHerramienta(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/controlherramientas/MVerControlHerramientas.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEditarControlHerramienta(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/controlherramientas/FEditControlHerramientas.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditControlHerramientas() {

  var formData = new FormData($("#FormEditControlHerramienta")[0])
  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrEditControlHerramienta",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Control Herramienta Actualizado',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error!!!',
          timer: 1500
        })
      }
    }
  })
}

function MEliControlHerramienta(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar este control herramientas?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/controlherramientasControlador.php?ctrEliControlHerramienta",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function MCargarRegistrosControlHerramientas() {
  $("#modal-default").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/controlherramientas/FCargarRegistrosControlHerramientas.php",
    data: obj,
    success: function (data) {
      $("#content-modal-default").html(data)
    }
  })
}

function CargarRegistrosControlHerra() {
  var formData = new FormData($("#FCargarRegistrosControlHerra")[0])


  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrRegRegistrosControlHerramientas",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Registros cargados',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error de carga!!!',
          timer: 1500
        })

      }
    }
  })

}


function cambioEstadoMat(codSegMat) {
  estado = document.getElementById("estadoMat[" + codSegMat + "]").value

  var obj = {
    estado: estado,
    codSegMat: codSegMat
  }
  $.ajax({
    type: "POST",
    url: "controlador/materialControlador.php?ctrCambEstado",
    data: obj,
    /*    cache: false,
      dataType: "json",*/
    success: function (data) {

      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Material Registrado',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error de Registro!!!',
          timer: 1500
        })
      }
    }
  })
}

/* REPORTE DE VENTAS POR PERSONAL */
function reporteHerramienta() {
  var formData = new FormData($("#ReporteDeHerramientas")[0])

  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrRepHerramientas",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      $("#repHerramientas").html(data)
      /* console.log(data); */
    }
  })
}

function impHerramientaSelec() {
  /*  window.open("vista/reportes/repHerramientaSelec.php", '_blank'); */
  $("#modal-xl").modal("show")
  var formData = new FormData($("#FormHerramientaSeleccionado")[0]);

  $.ajax({
    type: "POST",
    url: "vista/reportes/repHerramientaSelec.php",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      /* $("#repHerramientas").html(data) */
      $("#content-xl").html(data)
      console.log(data);

      /* $$('#button').each(function(link) { button.onclick = function(){ window.open("newpage.html",'New Window'); return false; }; }); */
    }
  })
}

function sumarMeses(){
  var periodoMes = document.getElementById('periodocalControlHerramientas').value
  /* var fechaCal = document.getElementById('fechacalControlHerramientas').value */
  
  
  var dateInput = document.getElementById('fechacalControlHerramientas'); // Reemplaza 'myDateInput' con el ID de tu elemento <input>

  if (dateInput.value !== '') {
    console.log('El input de fecha tiene un valor');
  } else {
    console.log('El input de fecha está vacío');
  }
/* s */
  console.log(periodoMes);
  console.log(fechaCal);
  
}

