<x-app-layout>
    <div class="container h6">
        <div class="row">
            <div class="col-12">
                <h1 class="fs-2 p-3">Orden de productos Eccomerce</h1>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <div class="row mb-3">
                    <div class="col-12 col-sm-6">
                        <form method="POST" action="">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Número de la orden"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="button-addon2">Buscar</button>

                            </div>
                            <div class="input-group mb-3" id="div_boton_calculando">
                                <a class="btn btn-primary" href=""><b>Carga Manual</b></a>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-sm-6">
                        <form id="add_orden_b2b">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6   mb-3">
                                    <input type="hidden" id="input_order" name="order">
                                    <div class="form-group">
                                        <label for="total_orden">Total:</label>
                                        <span class="input-group-text">$
                                            <input type="text" class="form-control border border-0" autocomplete="off"
                                                id="total_orden" name="total"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6  mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="">Tipo de pago </label>
                                        <select name="tipo_pago" id="tipo_pago" class="form-control " required>
                                            <option value="efectivo">Efectivo</option>
                                            <option value="tarjeta">Tarjeta</option>
                                            <option value="transferencia">Transferencia</option>
                                            <option value="qr">QR</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="tipo_efectivo" class="col-12 col-md-6  mb-3">
                                    <div class="form-group">
                                        <label for="monto" class="">Monto:</label>
                                        <span class="input-group-text">$
                                            <input type="text" autocomplete="off" class="form-control border border-0"  name="monto"
                                                id="monto"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6  mb-3">
                                    <div class="form-group">
                                        <label for="cambio" class="">Cambio:</label>
                                        <span class="input-group-text">$
                                            <input type="text" autocomplete="off" class="form-control border border-0" name="cambio"
                                                id="cambio"></span>
                                    </div>
                                </div>
                                <div class="col-12 mb-3" id="ref_tarjeta">
                                    <div class="form-group">
                                        <label for="referencia" class="">Referencia </label>
                                        <input type="text" autocomplete="off" class="form-control "
                                            name="referencia" id="referencia">
                                    </div>
                                </div>
                                <div class="col-12 mb-3" id='div_boton_pagar'>
                                    <button type="submit" class="btn btn-outline-primary"
                                        id="btn_pagar">Continuar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped
                table-hover
                table-borderless
                table-ligth
                align-middle">
                                <thead class="table-light">
                                    <caption>Tabla Orden De Productos</caption>
                                    <tr>
                                        <th>Id</th>
                                        <th>Cantidad</th>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr class="table-primary">
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <th>Id</th>
                                    <th>Cantidad</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row  div_check_facturar">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="checkbox" class="form-check-input" id="check_facturar">
                                    <label class="form-check-label" for="check_facturar">Facturar</label>
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-3 datos_facturar">
                            <form id="fac_datos">
                                @csrf
                                <input type="hidden" name="id_order" id="id_order_b2b">
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" autocomplete="off" class="form-control" name="nombre"
                                            id="nombre_fac">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" autocomplete="off" class="form-control" name="email"
                                            id="email_fac">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="nombre">Dirección</label>
                                        <input type="text" autocomplete="off" class="form-control" name="direccion"
                                            id="direccion_fac">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="nombre">RFC</label>
                                        <input type="text" autocomplete="off" class="form-control" name="rfc"
                                            id="rfc_fac">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="nombre">CFDI</label>
                                        <input type="text" autocomplete="off" class="form-control" name="cfdi"
                                            id="cfdi_fac">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                    <div class="row justify-content-center" style="margin: 2em 0%;">
                        <div class="col-4" id="div_ticket">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="button" class="btn btn-outline-success btn-lg"
                                        id="btn_ticket"><i class="fa fa-print" aria-hidden="true"></i>
                                            Imprimir ticket</button>
                                </div>
                                <div class="col-12 text-center" style="margin-top:1em">
                                    <div class="alert alert-success text-center " role="alert">
                                        Compra realizada
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end-body-card --}}
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/custom/functions-ecommercer.js')}}"></script>
</x-app-layout>
