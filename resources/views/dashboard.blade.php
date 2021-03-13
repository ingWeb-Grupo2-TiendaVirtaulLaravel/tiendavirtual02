@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="d-flex justify-content-center ">
            <section class="container border border-dark m-5  rounded-lg ">
                <p class="h3 mt-3 ">Dashboard</p> 
                <hr class="border-dark">        
                <div class="row">
                    <div class="col-6">
                        Total de Pedidos: <br>
                        <div class="d-flex p-2 bd-highlight border border-dark m-2 rounded-pill">
                            <p class="m-auto">15</p>
                        </div>
                    </div>
                    <div class="col-6">
                        Total de Ventas:
                        <div class="d-flex p-2 bd-highlight border border-dark m-2 rounded-pill">
                            <p class="m-auto">40</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                         Porcentaje de Ventas por Categoría:
                        <div class="d-flex flex-column bd-highlight mb-3 border border-success m-2 rounded-lg">
                                        <div class="progress mb-3">
                                              <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">Lácteos 40%</div>
                                        </div>
                                        <div class="progress mb-3">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Enlatados 50%</div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Bebidas 20%</div>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">Frutas 30%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="d-flex align-items-end flex-column bd-highlight mb-3">
                    <a class="btn btn-dark btn-lg" href="#" role="button">Lista</a>
                </div>   -->
            </section>
        </div>
    </div>
</div>
@endsection
