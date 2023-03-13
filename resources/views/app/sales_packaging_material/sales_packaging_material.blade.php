<x-app-layout>
    <div class="container h6">
        <div class="row">
            <div class="col-12">
                <h1 class="fs-2 p-3">Cotizador Envios</h1>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    {{-- start-body-card --}}


                    <div class="row mb-4">
                        <div class="col-12 text-start align-self-center fs-2 mls-color">
                            <h2><i class="fa-solid fa-truck-ramp-box icon-menu"></i> VENTA DE MATERIALES DE EMBALAJE</h2>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 text-start mb-3">
                            <button type="button" class="btn btn-outline-primary">Material de
                                empaque</button>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="table-responsive">
                                <table
                                    class="table table-striped
                                            table-hover
                                            table-borderless
                                            table-ligth
                                            align-middle">
                                    <thead class="table-light">
                                        <caption>Lista de materiales seleccionados</caption>
                                        <tr>
                                            <th>Modelo</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                    </tbody>
                                    <tfoot>
                                        <th>Modelo</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Acciones</th>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 text-start">
                            <div class="row order-md-last">
                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-primary">Tu cuenta</span>
                                    <span class="badge bg-primary rounded-pill">3</span>
                                </h4>
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0">Subtotal</h6>
                                            <small class="text-muted">Materiales</small>
                                        </div>
                                        <span class="text-muted">$0.00</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0">Iva:</h6>
                                            <small class="text-muted">Iva total productos</small>
                                        </div>
                                        <span class="text-muted">$0.00</span>
                                    </li>{{--
                                          <li class="list-group-item d-flex justify-content-between lh-sm">
                                            <div>
                                              <h6 class="my-0">Total:</h6>
                                              <small class="text-muted">Total a pagar</small>
                                            </div>
                                            <span class="text-muted">$0.00</span>
                                          </li>
                                          <li class="list-group-item d-flex justify-content-between bg-light">
                                            <div class="text-success">
                                              <h6 class="my-0">Promo code</h6>
                                              <small>EXAMPLECODE</small>
                                            </div>
                                            <span class="text-success">−$5</span>
                                          </li> --}}
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="text-success">Total: (MXN)</span>
                                        <strong>$20</strong>
                                    </li>
                                </ul>

                                <div class="col-12 mb-3">
                                    <label for="" class="form-label">Tipo de
                                        pago</label>
                                    <select name="tipo_pago" id="tipo_pago" class="form-select" required>
                                        <option value="efectivo">Efectivo</option>
                                        <option value="tarjeta">Tarjeta</option>
                                        <option value="transferencia">Transferencia</option>
                                        <option value="qr">QR</option>
                                        <option value="interno">Interno</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <label for="" class="form-label">Monto</label>
                                    <span class="input-group-text">$
                                        <input type="number" class="form-control border border-0"
                                        id="dinero_entregado"
                                        min="0"
                                        name="dinero_entregado" autocomplete="off"
                                        placeholder="Dinero entregado"
                                        required></span>

                                </div>
                                <div class="col-6 mb-4">
                                    <label for="" class="form-label">Cambio</label>
                                    <span class="input-group-text">$
                                    <span class="form-control border border-0" id="cambio" name="cambio"
                                        autocomplete="off" placeholder="Cambio a entregar"
                                        readonly>00.00</span>

                                </div>
                                <div class="col-6 mb-4">
                                    <label for="" class="form-label">Referencia</label>
                                    <input type="text" class="form-control border border-0" id="referencia_pago"
                                        name="referencia_pago" autocomplete="off" placeholder="referencia del pago"
                                        required value="-">
                                </div>

                                <div class="col-sm-12 text-center" id='div_boton_pagar' style="display:none">
                                    <button type="submit"
                                        class="btn btn-outline-primary"><b>Continuar
                                            Pago</b></button>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-12 ">
                                    <input type="checkbox" name="facturacion" class="form-check-input" id="facturacion"
                                        autocomplete="off">
                                    <label class="btn btn-outline-primary" for="facturacion" class="h-3">Facturar
                                        orden</label>
                                </div>
                                <div class="form-group col-12 m_lr_0 facturacion_div" style="display:none;">
                                    <div class="col-6 p_l_0">
                                        <label for="" class="col-sm-12 col-form-label fz_20">Nombre
                                            facturación</label>
                                        <input type="text" class="col-sm-12 input_formulario fz_20 facturacion_input"
                                            id="nombre_facturacion" name="nombre_facturacion" autocomplete="off"
                                            placeholder="Nombre de la facturación">
                                    </div>
                                </div>
                                <div class="form-group col-12 m_lr_0 facturacion_div" style="display:none;">
                                    <div class="col-sm-6 p_l_0">
                                        <label for="" class="col-sm-12 col-form-label fz_20">RFC</label>
                                        <input type="text"
                                            class="col-sm-12 input_formulario fz_20 facturacion_input" id="rfc"
                                            name="rfc" autocomplete="off" placeholder="RFC"
                                            pattern="^[A-Z&Ñ]{3,4}[0-9]{2}(0[1-9]|1[012])(0[1-9]|[12][0-9]|3[01])[A-Z0-9]{2}[0-9A]$"
                                            title="El RFC ingreso no es valido.">
                                        <!-- ^[A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?$ -->
                                    </div>
                                </div>
                                <div class="form-group col-12 m_lr_0 facturacion_div" style="display:none;">
                                    <div class="col-sm-6 p_l_0">
                                        <label for="" class="col-sm-12 col-form-label fz_20">Dirección</label>
                                        <input type="text"
                                            class="col-sm-12 input_formulario fz_20 facturacion_input" id="direccion"
                                            name="direccion" autocomplete="off" placeholder="Dirección facturación">
                                    </div>
                                </div>
                                <div class="form-group col-12 m_lr_0 facturacion_div" style="display:none;">
                                    <div class="col-sm-6 p_l_0">
                                        <label for="" class="col-sm-12 col-form-label fz_20">CDFI</label>
                                        <input type="text"
                                            class="col-sm-12 input_formulario fz_20 facturacion_input" id="cfdi"
                                            name="cfdi" autocomplete="off" placeholder="CFDI">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
    <div class="modal fade" id="materiales_modal" tabindex="-1" aria-labelledby="materiales_modalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="materiales_modalModalLabel">Materiales de empaque</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="materiales_div">

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
</x-app-layout>
