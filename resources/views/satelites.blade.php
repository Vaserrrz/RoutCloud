@extends('adminlte::page')

@section('title', 'Satelites')

@section('content_header')
    <h1>Satelites</h1>
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
                                <h5 class="modal-title" id="exampleModalLabel">Agregar - Satelite</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('satelites.store') }}"  method="POST">
                                        @csrf
                                        {{-- Nombre --}}
                                        <div class="form-group">
                                          <label for="SAT_NOMBRE">Nombre</label>
                                          <input type="text" class="form-control" id="SAT_NOMBRE" placeholder="Ingrese el Nombre del satelite" name="SAT_NOMBRE">
                                        </div>

                                        {{-- DESCRIPCION --}}
                                        <div class="form-group">
                                            <label for="SAT_DESCRIPCION">Descripcion</label>
                                            <input type="TEXT" class="form-control" id="SAT_DESCRIPCION" placeholder="Ingrese la Descripcion del Satelite" name="SAT_DESCRIPCION">
                                        </div>

                                        {{-- AZNUT --}}
                                        <div class="form-group">
                                            <label for="SAT_AZNUT">AZNUT</label>
                                            <input type="integer" class="form-control" id="SAT_AZNUT" placeholder="Ingrese el AZNUT del satelite" name="SAT_AZNUT">
                                        </div>

                                         {{-- ELEVACION --}}
                                         <div class="form-group">
                                            <label for="SAT_ELEVACION">Elevacion</label>
                                            <input type="text" class="form-control" id="SAT_ELEVACION" placeholder="Ingrese LA Elevacion del satelite" name="SAT_ELEVACION">
                                        </div>

                                        {{-- LNB --}}
                                        <div class="form-group">
                                            <label for="SAT_LNB">LNB</label>
                                            <input type="text" class="form-control" id="SAT_LNB" placeholder="Ingrese el LNB del satelite" name="SAT_LNB">
                                        </div>

                                        {{-- FRECUENCIA --}}
                                        <div class="form-group">
                                            <label for="SAT_LNB">Frecuencia</label>
                                            <input type="text" class="form-control" id="SAT_FRECUENCIA" placeholder="Ingrese el AZNUT del satelite" name="SAT_FRECUENCIA">
                                        </div>

                                        {{-- BANDAS --}}
                                        <div class="form-group">
                                            <label for="SAT_BANDAS">Bandas</label>
                                            <input type="text" class="form-control" id="SAT_BANDAS" placeholder="Ingrese las Bnadas del satelite" name="SAT_BANDAS">
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
                                <th scope="col">NOMBRE</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">AZNUT</th>
                                <th scope="col">Elevacion</th>
                                <th scope="col">LNB</th>
                                <th scope="col">Frecuencia</th>
                                <th scope="col">Bandas</th>

                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($satelites as $satelite)
                                    <tr>
                                        <th scope="row">{{ $satelite->id }}</th>
                                        <td>{{ $satelite->SAT_NOMBRE }}</td>
                                        <td>{{ $satelite->SAT_DESCRIPCION }}</td>
                                        <td>{{ $satelite->SAT_AZNUT }}</td>
                                        <td>{{ $satelite->SAT_ELEVACION }}</td>
                                        <td>{{ $satelite->SAT_LNB }}</td>
                                        <td>{{ $satelite->SAT_FRECUENCIA }}</td>
                                        <td>{{ $satelite->SAT_BANDAS }}</td>
                                        <td>
                                            {{-- Editar  --}}
                                            {{-- Buton editar  --}}
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $satelite->id }}">
                                                Editar
                                            </button>
                                            {{-- modal editar --}}
                                            <div class="modal fade" id="modal-editar-{{ $satelite->id }}"        aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar - satelite</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form  action="{{route('satelites.update',$satelite->id ) }}"  method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            {{-- Nombre --}}
                                                            <div class="form-group">
                                                              <label for="SAT_NOMBRE">Nombre</label>
                                                              <input type="text" class="form-control" id="SAT_NOMBRE" placeholder="Ingrese el Nombre del satelite" name="SAT_NOMBRE">
                                                            </div>

                                                            {{-- DESCRIPCION --}}
                                                            <div class="form-group">
                                                                <label for="SAT_DESCRIPCION">Descripcion</label>
                                                                <input type="TEXT" class="form-control" id="SAT_DESCRIPCION" placeholder="Ingrese la Descripcion del Satelite" name="SAT_DESCRIPCION">
                                                            </div>

                                                            {{-- AZNUT --}}
                                                            <div class="form-group">
                                                                <label for="SAT_AZNUT">AZNUT</label>
                                                                <input type="integer" class="form-control" id="SAT_AZNUT" placeholder="Ingrese el AZNUT del satelite" name="SAT_AZNUT">
                                                            </div>

                                                             {{-- ELEVACION --}}
                                                             <div class="form-group">
                                                                <label for="SAT_ELEVACION">Elevacion</label>
                                                                <input type="text" class="form-control" id="SAT_ELEVACION" placeholder="Ingrese LA Elevacion del satelite" name="SAT_ELEVACION">
                                                            </div>

                                                            {{-- LNB --}}
                                                            <div class="form-group">
                                                                <label for="SAT_LNB">LNB</label>
                                                                <input type="text" class="form-control" id="SAT_LNB" placeholder="Ingrese el LNB del satelite" name="SAT_LNB">
                                                            </div>

                                                            {{-- FRECUENCIA --}}
                                                            <div class="form-group">
                                                                <label for="SAT_LNB">Frecuencia</label>
                                                                <input type="text" class="form-control" id="SAT_FRECUENCIA" placeholder="Ingrese el AZNUT del satelite" name="SAT_FRECUENCIA">
                                                            </div>

                                                            {{-- BANDAS --}}
                                                            <div class="form-group">
                                                                <label for="SAT_BANDAS">Bandas</label>
                                                                <input type="text" class="form-control" id="SAT_BANDAS" placeholder="Ingrese las Bandas del satelite" name="SAT_BANDAS">
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
                                            <form action="{{ route('satelites.destroy', $satelite) }}" method="POST">
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
