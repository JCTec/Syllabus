@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form>

                    <script>
                        $(document).ready(function () {
                            $('#sidebarCollapse').click();

                        });
                    </script>

                    <div class="row">
                        <div class="col">
                            <h6 id="nombre">Nombre de la carrera</h6>
                        </div>
                        <div class="col">
                            <select id='carrera' name='carrera' class="form-control" required>
                                <option value='1'>Ingenieria en Informatica y ND</option>
                                <option value='1'>Ingenieria Civil</option>
                                <option value='1'>Diseño</option>
                            </select>
                        </div>
                        <div class="col">
                            <h6>ID de carrera: ######</h6>
                        </div>
                        <div class="col">
                            <h6>Campus: Universidad Anahuac Mayab</h6>
                        </div>
                        <div class="col">
                            <h6>Semestres: 0</h6>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px">
                        <div class="col-2">
                            <div class="row competenciaLabel">
                                <label>Competencias</label>
                            </div>
                            <div class="row">
                                <div class="pre-scrollable rowCompetencia" style="width: 100%">
                                    <div class="competencia"><h6>Competencia</h6></div>
                                    <div class="competencia"><h6>Competencia</h6></div>
                                    <div class="competencia"><h6>Competencia</h6></div>
                                    <div class="competencia"><h6>Competencia</h6></div>
                                    <div class="competencia"><h6>Competencia</h6></div>
                                    <div class="competencia"><h6>Competencia</h6></div>
                                    <div class="competencia"><h6>Competencia</h6></div>

                                </div>
                            </div>
                        </div>

                        <div class="col" style="background-color: whitesmoke;">

                        </div>

                        <div class="col-2">
                            <div class="row competenciaLabel">
                                <label>Materias</label>
                            </div>
                            <div class="row">
                                <div class="pre-scrollable rowCompetencia" style="width: 100%">
                                    <div class="competencia"><h6>Materia</h6></div>
                                    <div class="competencia"><h6>Materia</h6></div>
                                    <div class="competencia"><h6>Materia</h6></div>
                                    <div class="competencia"><h6>Materia</h6></div>
                                    <div class="competencia"><h6>Materia</h6></div>
                                    <div class="competencia"><h6>Materia</h6></div>
                                    <div class="competencia"><h6>Materia</h6></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button class="buttonIC">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
