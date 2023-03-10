@extends('adminlte::page')

@section('title', 'Remotas')

@section('content_header')
    <h1>Remotas Satelital</h1>
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
                                <h5 class="modal-title" id="exampleModalLabel">Agregar - Proveedor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('remotas.store') }}"  method="POST">
                                        @csrf

                                        {{-- NODO --}}
                                        <div class="form-group">
                                            <label for="REMOTA_NODO">NODO</label>
                                            <input type="text" class="form-control" id="REMOTA_NODO" placeholder="Ingrese el Nodo de la Remota" name="REMOTA_NODO">
                                          </div>

                                          {{-- EQUIPO --}}
                                          <div class="form-group">
                                              <label for="REMOTA_EQUIPO">Equipo</label>
                                              <input type="text" class="form-control" id="REMOTA_LNB_SERIAL" placeholder="Ingrese el Equipo de la Remota" name="REMOTA_EQUIPO">
                                          </div>

                                          {{-- SERIAL --}}
                                          <div class="form-group">
                                              <label for="descripcion">Serial</label>
                                              <input type="text" class="form-control" id="REMOTA_SERIAL" placeholder="Ingrese el Serial de la Remota" name="REMOTA_SERIAL">
                                          </div>

                                        {{-- COORDENADAS --}}
                                        <div class="form-group">
                                          <label for="REMOTA_COORDENADA">Coordenadas</label>
                                          <input type="text" class="form-control" id="REMOTA_COORDENADA" placeholder="Ingrese las Coordenadas de la Remota" name="REMOTA_COORDENADA">
                                        </div>

                                        {{-- BUC --}}
                                        <div class="form-group">
                                            <label for="REMOTA_BUC">BUC</label>
                                            <input type="text" class="form-control" id="REMOTA_BUC" placeholder="Ingrese el Buc de la Remota" name="REMOTA_BUC">
                                        </div>

                                        {{-- BUC SERIAL --}}
                                        <div class="form-group">
                                            <label for="REMOTA_BUC_SERIAL">BUC Serial</label>
                                            <input type="text" class="form-control" id="REMOTA_BUC_SERIAL" placeholder="Ingrese una descripcion" name="REMOTA_BUC_SERIAL">
                                        </div>

                                        {{-- LNB --}}
                                        <div class="form-group">
                                            <label for="REMOTA_LNB">LNB</label>
                                            <input type="text" class="form-control" id="REMOTA_LNB" placeholder="Ingrese el LNB de la Remota" name="REMOTA_LNB">
                                          </div>

                                          {{-- LNB SERIAL --}}
                                          <div class="form-group">
                                              <label for="REMOTA_LNB_SERIAL">Serial LNB</label>
                                              <input type="text" class="form-control" id="REMOTA_LNB_SERIAL" placeholder="Ingrese el Serial del LNB" name="REMOTA_LNB_SERIAL">
                                          </div>

                                          {{-- PLANDOWN --}}
                                          <div class="form-group">
                                              <label for="REMOTA_PLANDOWN">Plandown</label>
                                              <input type="text" class="form-control" id="REMOTA_PLANDOWN" placeholder="Ingrese el PLANDOWN de la Remota" name="REMOTA_PLANDOWN">
                                          </div>

                                        {{-- PLANUP --}}
                                        <div class="form-group">
                                          <label for="REMOTA_PLANUP">PlanUp</label>
                                          <input type="text" class="form-control" id="REMOTA_PLANUP" placeholder="Ingrese el PLANUP de la Remota" name="REMOTA_PLANUP">
                                        </div>

                                        {{-- COSTO PLAN --}}
                                        <div class="form-group">
                                            <label for="REMOTA_COSTO_PLAN">Costo del Plan</label>
                                            <input type="text" class="form-control" id="REMOTA_COSTO_PLAN" placeholder="Ingrese el Buc de la Remota" name="REMOTA_COSTO_PLAN">
                                        </div>

                                        {{-- RENTA --}}
                                        <div class="form-group">
                                            <label for="REMOTA_RENTA">Renta</label>
                                            <input type="text" class="form-control" id="REMOTA_RENTA" placeholder="Ingrese una descripcion" name="REMOTA_RENTA">
                                        </div>

                                         {{-- crear un calendario para escoger la fecha --}}
                                         {{-- DIA CORTE --}}
                                         <div class="form-group">
                                            <label for="REMOTA_DIA_CORTE">Dia de Corte</label>
                                            <input type="text" class="form-control" id="REMOTA_DIA_CORTE" placeholder="Ingrese el dia de corte de la Remota" name="REMOTA_DIA_CORTE">
                                          </div>

                                          {{-- DIA ACTIVACION --}}
                                          <div class="form-group">
                                              <label for="REMOTA_DIA_ACTIVACION">Dia Activacion</label>
                                              <input type="text" class="form-control" id="REMOTA_DIA_ACTIVACION" placeholder="Ingrese el Buc de la Remota" name="REMOTA_DIA_ACTIVACION">
                                          </div>

                                          {{-- DETALLE --}}
                                          <div class="form-group">
                                              <label for="REMOTA_RENTA">Detalle</label>
                                              <input type="text" class="form-control" id="REMOTA_RENTA" placeholder="Ingrese una descripcion" name="REMOTA_RENTA">
                                          </div>

                                            {{-- PLATO --}}
                                            <div class="form-group">
                                                <label for="REMOTA_PLATO">Plato</label>
                                                <input type="text" class="form-control" id="REMOTA_PLATO" placeholder="Ingrese el Plato de la Remota" name="REMOTA_PLATO">
                                            </div>

                                            {{-- IP MODEM --}}
                                            <div class="form-group">
                                                <label for="REMOTA_IP_MODEM">IP Modem</label>
                                                <input type="text" class="form-control" id="REMOTA_IP_MODEM" placeholder="Ingrese el Plato de la Remota" name="REMOTA_IP_MODEM">
                                            </div>

                                            {{-- IP GESTION --}}
                                            <div class="form-group">
                                                <label for="REMOTA_IP_GESTION">IP Gestion</label>
                                                <input type="text" class="form-control" id="REMOTA_IP_GESTION" placeholder="Ingrese el IP de Gestion de la Remota" name="REMOTA_IP_GESTION">
                                            </div>

                                            {{-- STATUS --}}
                                            <div class="form-group">
                                                <label for="REMOTA_STATUS">Status</label>
                                                <input type="text" class="form-control" id="REMOTA_STATUS" placeholder="Ingrese el Status de la Remota" name="REMOTA_STATUS">
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
                                <th scope="col">IP</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Status</th>
                                <th scope="col">IP</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($remotas as $remota)
                                    <tr>
                                        <th scope="row">{{ $remota->id }}</th>
                                        <td>
                                            <a href="">   {{ $remota->nombre }}</a>
                                        </td>
                                        <td>{{ $remota->email }}</td>
                                        <td>{{ $remota->descripcion }}</td>
                                        <td>
                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $proveedor->id }}">
                                                Editar
                                            </button>
                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{ $proveedor->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Agregar - proveedor</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        //Agregar
                                                        <form  action="{{ route('remotas.update', $proveedor->id) }}"  method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            {{-- Nombre --}}
                                                            <div class="form-group">
                                                              <label for="nombre">Nombre</label>
                                                              <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre" name="nombre" value="{{ $proveedor->nombre }}">
                                                            </div>

                                                            {{-- Email --}}
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email" placeholder="Ingrese el email" name="email" value="{{ $proveedor->email }}">
                                                            </div>

                                                            {{-- Descripcion --}}
                                                            <div class="form-group">
                                                                <label for="descripcion">Descripcion</label>
                                                                <input type="descripcion" class="form-control" id="descripcion" placeholder="Ingrese una descripcion" name="descripcion" value="{{ $proveedor->descripcion }}">
                                                            </div>



                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-primary">Editar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>


                                            {{-- Eliminar --}}
                                            {{-- form destroy --}}
                                            <form action="{{ route('remotas.destroy', $remota) }}" method="POST">
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
