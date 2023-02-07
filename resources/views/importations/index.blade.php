@extends('master')
 
@section('content')


            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-hearder" style="text-align:center;">
                      <h2>IMPORTATION DE DONNEES CLIENTS</h2>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{url('/importation/index')}}" enctype="multipart/form-data" >
                    {!! csrf_field()!!}
                      <input type="file" name="fichier"/>
                      <button>Importer</button>
                    </form>
                  </div>
                </div>
            </div>

@stop