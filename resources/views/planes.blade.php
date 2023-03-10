@extends('adminlte::page')

@section('title', 'Planes')

@section('content_header')
    <h1>Planes</h1>
@stop

@section('content')



<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-agregar">
                           Agregar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar - PLan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('planes.store') }}"  method="POST">
                                        @csrf

                                        {{-- NOMBRE --}}
                                        <div class="form-group">
                                            <label for="PLAN_NOMBRE">Nombre</label>
                                            <input type="text" class="form-control" id="PLAN_NOMBRE" placeholder="Ingrese el Nombre del Plan" name="PLAN_NOMBRE">
                                        </div>

                                        {{-- PLAN SUBIDA --}}
                                        <div class="form-group">
                                            <label for="PLAN_SUBIDA">Subida</label>
                                            <input type="TEXT" class="form-control" id="PLAN_SUBIDA" placeholder="Ingrese la Subida del plan" name="PLAN_SUBIDA">
                                        </div>

                                        {{-- PLAN BAJADA --}}
                                        <div class="form-group">
                                          <label for="plan_TELF">Bajada</label>
                                          <input type="text" class="form-control" id="PLAN_BAJADA" placeholder="Ingrese la Bajada del plan" name="PLAN_BAJADA">
                                        </div>

                                        {{-- PLAN_CONTENCION  --}}
                                        <div class="form-group">
                                            <label for="plan_TELF2">Contencion</label>
                                            <input type="text" class="form-control" id="PLAN_CONTENCION" placeholder="Ingrese el telefono secundario del plan" name="PLAN_CONTENCION">
                                          </div>

                                        {{-- COSTO --}}
                                        <div class="form-group">
                                            <label for="PLAN_COSTO">Costo</label>
                                            <input type="text" class="form-control" id="PLAN_COSTO" placeholder="Ingrese el Costo del plan" name="PLAN_COSTO">
                                        </div>

                                        {{-- PRECIO --}}
                                        <div class="form-group">
                                            <label for="PLAN_PRECIO">Precio</label>
                                            <input type="text" class="form-control" id="PLAN_PRECIO" placeholder="Ingrese EL Precio del Plan" name="PLAN_PRECIO">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>


                                    </form>



                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- Tabla de datos --}}
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Subida</th>
                                <th scope="col">Bajada</th>
                                <th scope="col">Contencion</th>
                                <th scope="col">Costo Secundario</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($planes as $plan)
                                    <tr>
                                        <th scope="row">{{ $plan->id  }}</th>

                                        <td>{{ $plan->PLAN_NOMBRE }}</td>
                                        <td>{{ $plan->PLAN_SUBIDA }}</td>
                                        <td>{{ $plan->PLAN_BAJADA }}</td>
                                        <td>{{ $plan->PLAN_CONTENCION }}</td>
                                        <td>{{ $plan->PLAN_COSTO  }}</td>
                                        <td>{{ $plan->PLAN_PRECIO   }}</td>

                                        <td>
                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $plan->id  }}">
                                                Editar
                                            </button>
                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{ $plan->id  }}"        aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar - plan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form  action="{{route('planes.update',$plan->id ) }}"  method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                              {{-- NOMBRE --}}
                                                            <div class="form-group">
                                                                <label for="PLAN_NOMBRE">Nombre</label>
                                                                <input type="text" class="form-control" id="PLAN_NOMBRE" placeholder="Ingrese el Nombre del Plan" name="PLAN_NOMBRE">
                                                            </div>

                                                            {{-- PLAN SUBIDA --}}
                                                            <div class="form-group">
                                                                <label for="PLAN_SUBIDA">Subida</label>
                                                                <input type="text" class="form-control" id="PLAN_SUBIDA" placeholder="Ingrese la Subida del plan" name="PLAN_SUBIDA">
                                                            </div>

                                                            {{-- PLAN BAJADA --}}
                                                            <div class="form-group">
                                                            <label for="plan_TELF">Bajada</label>
                                                            <input type="text" class="form-control" id="PLAN_BAJADA" placeholder="Ingrese la Bajada del plan" name="PLAN_BAJADA">
                                                            </div>

                                                            {{-- PLAN_CONTENCION  --}}
                                                            <div class="form-group">
                                                                <label for="plan_TELF2">Contencion</label>
                                                                <input type="text" class="form-control" id="PLAN_CONTENCION" placeholder="Ingrese el telefono secundario del plan" name="PLAN_CONTENCION">
                                                            </div>

                                                            {{-- COSTO --}}
                                                            <div class="form-group">
                                                                <label for="PLAN_COSTO">Costo</label>
                                                                <input type="text" class="form-control" id="PLAN_COSTO" placeholder="Ingrese el Costo del plan" name="PLAN_COSTO">
                                                            </div>

                                                            {{-- PRECIO --}}
                                                            <div class="form-group">
                                                                <label for="PLAN_PRECIO">Precio</label>
                                                                <input type="text" class="form-control" id="PLAN_PRECIO" placeholder="Ingrese EL Precio del Plan" name="PLAN_PRECIO">
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                                            </div>
                                                        </form>



                                                    </div>
                                                </div>
                                                </div>
                                            </div>


                                            {{-- Eliminar --}}
                                            {{-- form destroy --}}
                                            <form action="{{ route('planes.destroy', $plan) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                               <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>

                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="5">No hay datos</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>




@stop

@section('css')
@stop

@section('js')
    {{-- <script> alert('Hi!'); </script> --}}
@stop
