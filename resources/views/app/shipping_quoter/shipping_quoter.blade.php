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
                           <h2><i class="fa-solid fa-truck-fast icon-menu"></i> 1.- Cotizar envio</h2>
                            <span class="fs-4">Cotiza y crea un
                                envío</span>
                        </div>
                    </div>
                    <div class="row">
                    <form >
                        <div class="col-12 text-start mb-3" id='div_boton_sobre'>
                            <button type="button"
                                class="btn btn-outline-primary">Sobre
                                    carta</button>
                        </div>
                        <div id="div_cotizacion" class="col-12">
                            <div class="row mb-3">
                                <div class="col-12 col-md-2">
                                    <label for="" class="form-label">PAIS</label>
                                    <select class="form-select" data-show-content="true"
                                        name="pais" id="pais" required="">
                                    </select>
                                </div>
                                <div class="col-12  col-md-2 mb-3">
                                    <label for="" class="form-label">C.P. DE ORIGEN</label>
                                    <select class="form-select" data-show-content="true"
                                        name="cp_origen" id="cp_origen" required="">
                                        <option value="otro">Otro</option>
                                    </select>
                                    <input type="hidden" class="form-control" id="cp_origen_input"
                                        name="cp_origen_input" autocomplete="off" placeholder="Codigo postal del origen"
                                        maxlength="5" minlength="4">
                                </div>
                                <div class="col-12 col-md-2 mb-3">
                                    <label for="" class="form-label">C.P. DE DESTINO</label>
                                    <input type="number" class="form-control" id="cp_destino"
                                        name="cp_destino" autocomplete="off" placeholder="Codigo postal del destino"
                                        maxlength="5" minlength="4" required>
                                </div>
                                <div class="col-12 col-md-1 mb-3">
                                    <label for="" class="form-label">PESO</label>
                                    <input type="number" class="form-control" id="peso_0"
                                        name="peso_0" autocomplete="off" placeholder="Kg" required>
                                </div>
                                <div class="col-12 col-md-1 mb-3">
                                    <label for="" class="form-label">LARGO</label>
                                    <input type="number" class="form-control" id="largo_0"
                                        name="largo_0" autocomplete="off" placeholder="Cm" required>
                                </div>
                                <div class="col-12 col-md-1 mb-3">
                                    <label for="" class="form-label">ANCHO</label>
                                    <input type="number" class="form-control" id="ancho_0"
                                        name="ancho_0" autocomplete="off" placeholder="Cm" required>
                                </div>
                                <div class="col-12 col-md-1 mb-3">
                                    <label for="" class="form-label">ALTO</label>
                                    <input type="number" class="form-control" id="alto_0"
                                        name="alto_0" autocomplete="off" placeholder="Cm" required>
                                </div>
                                <div class="col-12 col-md-1 mb-3">
                                    <label for="" class="form-label">CANTIDAD</label>
                                    <input type="number" class="form-control" id="cantidad_0"
                                        name="cantidad_0" autocomplete="off" required>
                                </div>

                                <div class="col-12 col-md-1 mb-3">
                                    <label for="" class="form-label">VALOR</label>
                                    <input type="number" class="form-control" id="valor_0"
                                        name="valor_0" autocomplete="off" required placeholder="$">
                                </div>
                            </div>
                            </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mb-3">
                                <button type="button"
                                    class="btn btn-outline-primary"><b>+</b></button>
                                <button type="button"
                                    class="btn btn-outline-danger"><b>-</b></button>
                            </div>
                            <div class="col-12 col-md-4 mb-3" id='div_boton_cotizar'>
                                <button type="submit"
                                    class="btn btn-outline-primary"><b>COTIZAR</b></button>
                            </div>
                            <div class="col-12 col-md-4 mb-3" id="div_boton_calculando" style="display:none">
                                <button type="submit" class="btn btn-outline-primary"
                                    disabled> <i class="fa fa-spinner fa-spin"></i><b> Calculando</b></button>
                            </div>
                            <div class="col-12 col-md-4 mb-3" id="div_boton_calculando">
                                <a class="btn btn-outline-primary"
                                    href="#">Carga de paqueteria</a>
                            </div>
                        </form>
                        </div>


                    <div class="row mb-4">
                        <div class="col-12 text-start align-self-center fs-2 mls-color">
                            <h2><i class="fa-solid fa-truck-fast icon-menu"></i> 2.- Servicios disponibles</h2>
                         </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table
                                    class="table table-striped
                                         table-hover
                                         table-borderless
                                         table-ligth
                                         align-middle">
                                    <thead class="table-light">
                                        <caption>Lista de paqueterias</caption>
                                        <tr>
                                            <th>PAQUETERIA</th>
                                            <th>DÍAS DE ENTREGA</th>
                                            <th>PRECIO</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                    </tbody>
                                    <tfoot>
                                        <th>PAQUETERIA</th>
                                        <th>DÍAS DE ENTREGA</th>
                                        <th>PRECIO</th>
                                        <th>ACCIONES</th>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- end-body-card --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
