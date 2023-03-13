
$('#total_orden').val(0);
$('#monto').val(0);
$('#cambio').val(0);
$('#btn_pagar').hide();
$('#div_ticket').hide();
$('#ref_tarjeta').hide();
$('.datos_facturar').hide();
$('.div_check_facturar').hide();

$(document).ready(function() {
    $('#tipo_pago').change(function(e) {
        e.preventDefault();
        let tipo = $(this).val();
        if (tipo == 'efectivo') {
            $('#tipo_efectivo').show();
            $('#btn_pagar').hide();
        } else {
            $('#tipo_efectivo').hide();
            $('#monto').val(0);
            $('#cambio').val(0);
            $('#btn_pagar').show();
        }
        if (tipo == 'tarjeta') {
            $('#ref_tarjeta').show();
        } else {
            $('#ref_tarjeta').hide();
        }
    });
    $('#monto').bind('input propertychange', function(e) {
        e.preventDefault();
        let valor = $('#total_orden').val() - $('#monto').val();
        if (valor <= 0) {
            $('#cambio').val(valor * (-1));
            $('#btn_pagar').show();
        } else {
            $('#cambio').val(0);
            $('#btn_pagar').hide();
        }
    });

    $('#buscar_order').submit(function(e) {
        e.preventDefault();
        $('#alert_charging').modal('show');
        $('#btn_pagar').hide();
        let data = $(this).serialize();
        $('#order_table').empty();
        $.ajax({
            type: "post",
            url: "<?= URL('/paqueteria/ordenB2B/costo') ?>",
            data: data,
            dataType: "json",
            success: function(res) {
                $('#input_order').val(res.order);
                $('#total_orden').val(res.precio);
                $('#total_orden').prop('readonly', true);
                $('#monto').val(0);
                $('#cambio').val(res.precio);
                ticket(res.ordenB2B);
                setTimeout(() => {
                    $('#alert_charging').modal('hide')
                }, 2000);
            }
        });
        $.ajax({
            type: "post",
            url: "<?= URL('/paqueteria/ordenB2B/buscar') ?>",
            data: data,
            dataType: "HTML",
            success: function(res) {
                $('#order_table').html(res);
            }
        });
    });
    $('#add_orden_b2b').submit(function(e) {
        e.preventDefault();
        $('#alert_charging').modal('show');
        let data = $(this).serialize();
        $.ajax({
            type: "post",
            url: "<?= URL('/paqueteria/ordenB2B/agregar') ?>",
            data: data,
            dataType: "JSON",
            success: function(res) {
                console.log(res);
                if (res.success) {
                    ticket(res.ordenB2B);
                }
                setTimeout(() => {
                    $('#alert_charging').modal('hide')
                }, 2000);
            }
        });
    });


    function ticket(ordenB2B) {
        if (ordenB2B > 0) {
            $('#btn_ticket').attr('href', "<?= URL('/paqueteria/ordenB2B/ticket') ?>" + "/" + ordenB2B);
            $('#div_ticket').show();
            $('.div_check_facturar').show();
            $('#id_order_b2b').val(ordenB2B);
        } else {
            $('#div_ticket').hide();
        }
    }

    $('#btn_ticket').click(function(e) {
        e.preventDefault();
        let url = $(this).attr('href');
        let dato = $('#fac_datos').serialize();
        if ($('#rfc_fac').val() != '' || $('#rfc_fac').val() != null && $('#check_facturar').is(
                ':checked')) {
            $.ajax({
                type: "post",
                url: "<?= URL('/paqueteria/ordenB2B/guarda_fac') ?>",
                data: dato,
                dataType: "json",
                success: function(res) {
                    window.open(url, "PDF", "width=600, height=600");
                }
            });
        } else {
            window.open(url, "PDF", "width=600, height=600");
        }

    });

    $('#check_facturar').change(function(e) {
        e.preventDefault();
        let id = $('#id_order_b2b').val();
        if ($(this).is(':checked')) {
            $.ajax({
                type: "get",
                url: "<?= URL('/paqueteria/ordenB2B/datos_fac') ?>" + "/" + id,
                dataType: "JSON",
                success: function(res) {
                    if (res.success) {
                        $('#nombre_fac').val(res.datos.nombre);
                        $('#email_fac').val(res.datos.email);
                        $('#direccion_fac').val(res.datos.direccion);
                        $('#rfc_fac').val(res.datos.rfc);
                        $('#cfdi_fac').val(res.datos.cfdi);
                    }
                }
            });
            $('.datos_facturar').show();
        } else {
            $('.datos_facturar').hide();
        }

    });
});
