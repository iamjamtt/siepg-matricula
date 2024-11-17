<div>
    <div class="col-12 animate__animated animate__fadeIn">
        <x-page-title title="Generar Matricula">
            <x-page-title.item :href="route('inicio.index')">
                Inicio
            </x-page-title.item>
            <x-page-title.item :href="route('matricula.index')">
                Mis Matriculas
            </x-page-title.item>
            <x-page-title.item active>
                Generar Matricula
            </x-page-title.item>
        </x-page-title>
    </div>
    <div class="col-12 animate__animated animate__fadeIn">
        <div class="row g-4">
            <div class="col-6">
                <div class="fs-6 mb-2">
                    Seleccione un pago <span class="text-danger">*</span>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">Concepto Pago</th>
                                        <th scope="col">Nro de Operación</th>
                                        <th scope="col">Monto</th>
                                        <th scope="col">Fecha Pago</th>
                                        <th scope="col">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Matricula 2022
                                        </td>
                                        <td>1234</td>
                                        <td>S/. 200.00</td>
                                        <td>01/01/2022</td>
                                        <td>
                                            <span class="badge bg-success">Pagado</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
