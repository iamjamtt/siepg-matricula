<div class="row">
    <div class="col-12 animate__animated animate__fadeIn">
        <x-page-title title="Mis Matriculas">
            <x-page-title.item :href="route('inicio.index')">
                Inicio
            </x-page-title.item>
            <x-page-title.item active>
                Mis Matriculas
            </x-page-title.item>
        </x-page-title>
    </div>
    <div class="col-12 animate__animated animate__fadeIn">
        <div class="row g-4">
            <div class="col-12">
                <!-- Info Alert -->
                <div class="alert alert-info border border-2 border-opacity-25 border-info alert-label-icon label-arrow material-shadow m-0" role="alert">
                    <i class="ti ti-info-square-rounded label-icon"></i><strong>Información</strong> - Las matriculas realizadas se listan a continuación. En caso de no encontrar ninguna matricula, puede generar una nueva matricula.
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end mb-3">
                    <button type="button" class="btn btn-success fs-11">
                        <i class="ti ti-folder-plus fs-5 me-2 align-middle"></i>
                        <span class="align-middle">
                            Generar Matricula
                        </span>
                    </button>
                </div>
                <!-- Listado de Matriculas -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action" aria-current="true">
                                <i class="ti ti-school fs-4 align-middle me-2"></i>
                                <span class="align-middle">
                                    <b>Matricula N° 1</b>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- No se encontraron matriculas -->
                <div class="card">
                    <div class="card-body py-4">
                        <div class="d-flex flex-column align-items-center justify-content-center gap-3">
                            <div class="border border-info border-opacity-50 rounded d-flex align-items-center justify-content-center bg-light" style="min-width: 40px; min-height: 40px;">
                                <i class="ti ti-folder-off fs-5 text-info"></i>
                            </div>
                            <div class="text-muted">
                                No se encontraron matriculas
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Detalle de Matricula -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="ti ti-school fs-3 align-middle me-2"></i>
                            <span class="align-middle fs-5">
                                <b>Matricula N° 1</b>
                            </span>
                        </div>
                        <table class="w-100 mb-1">
                            <tbody>
                                <!-- Periodo -->
                                <tr>
                                    <td style="width: 35%;">
                                        <b>Periodo</b>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        2021-II
                                    </td>
                                </tr>
                                <!-- Modalidad -->
                                <tr>
                                    <td>
                                        <b>Modalidad</b>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        Distancia
                                    </td>
                                </tr>
                                <!-- Grupo -->
                                <tr>
                                    <td>
                                        <b>Grupo</b>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        A
                                    </td>
                                </tr>
                                <!-- Fecha de Matricula -->
                                <tr>
                                    <td>
                                        <b>Fecha de Matricula</b>
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        25 de Agosto de 2021
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <a href="javascript:void(0);" class="link-secondary">
                            <span class="align-middle">
                                Ver Ficha de Matricula
                            </span>
                            <i class="ti ti-chevron-right align-middle ms-1 lh-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
