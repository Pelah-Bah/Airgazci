@extends('master')

@section('content')
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-hearder" style="text-align:center">
                      <h2>ENREGISTREMENT DES FORMATS</h2>
                  </div>
                  <div class="card-body">
                  <form action="{{url('format')}}" method="post">
                    {!! csrf_field()!!}

                        <div class="table-responsive">
                            <div style="text-align:right">

                               <button class=" btn btn-info btn-sm"  style="width:90px">Enregistrer </button>
                              <a href="{{url('/format')}} " class=" btn btn-info btn-sm"  style="width:90px">Retour </a>
                            </div>
                            <table class="table table-striped" width=" ">
                                <thead>
                                <tr>
                                    <td width="30px">
                                        <label for="" class="col-sm-3 col-form-label" style="text-align:left">Format:</label>
                                    </td>
                                    <td width="200px">
                                        <input type="text" name="libelleformat" id="libelleformat" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="format " required>
                                    </td>
                                    <td width="60px">
                                        <label for="" class="col-sm-3 col-form-label" style="text-align:right">capacité:</label>
                                    </td>
                                    <td width="200px">
                                        <input type="number"min="0" max="999999999999.99" step="0.01" name="capaciteformat" id="capaciteformat" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="capacité "/>
                                    </td>
                                    <td width="60px">
                                        <label for="" class="col-sm-3 col-form-label" style="text-align:right">Unité:</label>
                                    </td>
                                    <td width="600px">
                                        <input type="text" name="uniteformat" id="uniteformat" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="unité "/>
                                    </td>

                                    <td width="60px"> &nbsp;</td>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                  </form>
                  </div>
                </div>
            </div>
@stop
