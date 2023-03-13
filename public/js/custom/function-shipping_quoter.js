var cantidad_paquetes = 0;

/*    var node = document.createElement("div");
   node.innerHTML=inputs;
   document.getElementById("inputs_respuestas").appendChild(node);
   numero_opciones++;
   */
$(document).on('click', '.agregar_paquete', function(e) {
 cantidad_paquetes++;
 var inputs = `
 <div class="col-4">
 <label for="" class="col-12 col-form-label fz_20">EXCLUSIVO DE FEDEX </label>
 </div>
 <div class="col-1">
 <label for="" class="col-12 col-form-label fz_20">PESO</label>
 <input type="number" class="col-12 input_formulario fz_20" id="peso_${cantidad_paquetes}" name="peso_${cantidad_paquetes}" autocomplete="off" placeholder="Kg" required>
 </div>
 <div class="col-1">
 <label for="" class="col-12 col-form-label fz_20">LARGO</label>
 <input type="number" class="col-12 input_formulario fz_20" id="largo_${cantidad_paquetes}" name="largo_${cantidad_paquetes}" autocomplete="off" placeholder="Cm" required>
 </div>
 <div class="col-1">
 <label for="" class="col-12 col-form-label fz_20">ANCHO</label>
 <input type="number" class="col-12 input_formulario fz_20" id="ancho_${cantidad_paquetes}" name="ancho_${cantidad_paquetes}" autocomplete="off" placeholder="Cm" required>
 </div>
 <div class="col-1">
 <label for="" class="col-12 col-form-label fz_20">ALTO</label>
 <input type="number" class="col-12 input_formulario fz_20" id="alto_${cantidad_paquetes}" name="alto_${cantidad_paquetes}" autocomplete="off" placeholder="Cm" required>
 </div>
 <div class="col-1">
 <label for="" class="col-12 col-form-label fz_20">CANTIDAD</label>
 <input type="number" class="col-12 input_formulario fz_20" id="cantidad_${cantidad_paquetes}" name="cantidad_${cantidad_paquetes}" autocomplete="off" placeholder="Cm" required>
 </div>
 <div class="col-1">
 <label for="" class="col-12 col-form-label fz_20">VALOR</label>
 <input type="number" class="col-12 input_formulario fz_20" id="valor_${cantidad_paquetes}" name="valor_${cantidad_paquetes}" autocomplete="off" required
 placeholder="$">
 </div>`;
 var node = document.createElement("div");
 node.setAttribute('id','paquete_'+cantidad_paquetes);
 node.className = 'form-group row padding_20';
 node.innerHTML=inputs;
 document.getElementById("div_cotizacion").appendChild(node);
});
$(document).on('click', '.quitar_paquete', function(e) {
  if(cantidad_paquetes > 0 ){
   $('#paquete_'+cantidad_paquetes).remove();
   cantidad_paquetes--;
 }
});



$('#cotizar_envio').submit(function(e) {
 e.preventDefault();
 $('#div_boton_cotizar').css('display','none');
 $('#div_boton_calculando').css('display','block');
 $.ajax({
   type: "post",
   url: "<?php echo URL('/paqueteria/obtener_servicios'); ?>",
   data: $('#cotizar_envio').serialize(),
   dataType: "json",
   success: function(response) {
     $('#div_boton_cotizar').css('display','block');
     $('#div_boton_calculando').css('display','none');
     if(response.estado == 'sin_datos') alert('No hay servicio para el codigo postal indicado');
     if (response.estado == 'error') alert('Busqueda no exitosa Verifique los datos ingresados');
     if(response.estado == 'exitoso'){
       var tabla=`<tr>
       <th>PAQUETERIA</th>
       <th>SERVICIO</th>
       <th>FECHA DE ENTREGA</th>
       <th>PRECIO</th>
       </tr>`;
       var envios = response.envios;
       console.log(response.envios[0].logo_url);
       for (var i =0; i < response.envios.length; i++) {
        tabla += `<tr>
        <td><b>${envios[i].company}</b></td>
        <td><b>${envios[i].serviceName}</b></td>
        <td><b>${envios[i].fecha}</b></td>
        <td>$ ${envios[i].precio_iva} MXN</td>
        <td>
        <button type="button" class="color_p color_st fz_20 boton_formulario boton_paqueteria "
        data-api ="${envios[i].api}"
        data-paqueteriaId ="${envios[i].company_id}"
        data-paqueteria = "${envios[i].company}"
        data-servicio = "${envios[i].serviceType}"
        data-servicio_nombre = "${envios[i].serviceName}"
        data-costo = "${envios[i].costo}"
        data-precio_ganancia = "${envios[i].precio_ganancia}"
        data-precio_iva = "${envios[i].precio_iva}"
        ><b>ELEGIR</b></button>
        </td>
        </tr>
        `
      }
      $('#tabla_envios').html(tabla);
    }
  }
});
});

   /*  data-precio_shipit = "${envios[i].costo}"
            data-precio_original = "${envios[i].costo}"
            data-precio_ganancia = "${envios[i].costo}"*/


$(document).on('click', '.boton_paqueteria', function(e) {
  $.ajax({
   type: "post",
   url: "<?php echo URL('/paqueteria/ir_datos_envio'); ?>",
   data: {
                /* cp_origen : $('#cp_origen').val(), INUTILIZADO*/
    cp : $('#cp_destino').val(),
    pais : $('#pais').val(),
    api : $(this).data('api'),
    paqueteria_id : $(this).data('paqueteriaid'),
    paqueteria : $(this).data('paqueteria'),
    servicio : $(this).data('servicio'),
    servicio_nombre : $(this).data('servicio_nombre'),
    costo : $(this).data('costo'),
    precio_ganancia : $(this).data('precio_ganancia'),
    precio_iva : $(this).data('precio_iva')
  },
  dataType: "json",
  success: function(response) {
   if($('#pais').val() == 'MX'){
    window.location.replace("<?php echo URL('/paqueteria/completar_datos_envio'); ?>");
   }else{
      window.location.replace("<?php echo URL('/paqueteria/completar_datos_envio_internacional'); ?>");
   }
 },
 error: function(response){
   alert('Busqueda no exitosa Verifique los datos ingresados');
 }
});
});

$(document).on('click', '.boton_sobre_carta', function(e) {
  $('#peso_0').val(1);
  $('#largo_0').val(30);
  $('#ancho_0').val(20);
  $('#alto_0').val(1);
  $('#valor_0').val(100);
  $('#cantidad_0').val(1);
});

$(document).on('change', '#cp_origen', function(e) {
  var input_origen = document.getElementById('cp_origen_input');
  var valor = $(this).val();
  if(valor != 'otro'){
   input_origen.type = 'hidden';
   input_origen.removeAttribute("required");
  }else{
   input_origen.type = 'number';
   input_origen.required = true;
  }
});


var tds = function(datos){
  var opciones=``;
  for (var i = 0; i<datos.length; i++) {
    opciones+=`<option value="${datos[i][0]}" ${datos[i][2]}>${datos[i][1]}</option>`;
  }
  return opciones;
}
