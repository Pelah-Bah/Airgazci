@extends('master')

@section('content')
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-hearder" style="text-align:center">
                      <h2>ENREGISTREMENT DES FAMILLES</h2>
                  </div>
                  <div class="card-body">
                  <form action="{{url('famille')}}" method="post">
                    {!! csrf_field()!!}

                        <div class="table-responsive">
                            <div style="text-align:right">

                               <button class=" btn btn-info btn-sm"  style="width:90px">Enregistrer </button>
                              <a href="{{url('/famille')}} " class=" btn btn-info btn-sm"  style="width:90px">Retour </a>
                            </div>
                            <table class="table table-striped" width="1200px">
                                <thead>
                                <tr>
                                    <td width="30px">
                                        <label for="" class="col-sm-3 col-form-label" style="text-align:left">Famille:</label>
                                    </td>
                                    <td width="200px">
                                        <input type="text" name="libellefamille" id="libellefamille" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Famille " required>
                                    </td>
                                    <td width="60px">
                                        <label for="" class="col-sm-3 col-form-label" style="text-align:right">Nature:</label>
                                    </td>
                                    <td width="200px">
                                            <select name="typefamille" id="typefamille" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Nature">
                                            <option value="INDUSTRIEL">INDUSTRIEL</option>
                                            <option value="MEDICAL">MEDICAL</option>
                                            <option value="AUTRES">AUTRES</option>
                                            </select>
                                    </td>
                                    <td width="60px">
                                        <label for="" class="col-sm-3 col-form-label" style="text-align:right">Abréviation:</label>
                                    </td>
                                    <td width="200px">
                                        <input type="text" name="appelationfamille" id="appelationfamille" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Abréviation famille " required />
                                    </td>
                                    <td width="60px">
                                        <label for="" class="col-sm-3 col-form-label" style="text-align:right">Description:</label>
                                    </td>
                                    <td width="600px">
                                        <textarea name="descriptionfamille" id="descriptionfamille" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Description famille" cols="30" rows="3"></textarea>
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
