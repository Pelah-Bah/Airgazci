
                    <tr>
                        <td></td>
                        <tr>
                            <td width="60px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:left">N° Production: </label>
                            </td>
                            <td width="130px" colspan=" ">
                                <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="N° Production" required>
                            </td>
                            <td width="60px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:left">N° Production: </label>
                            </td>
                            <td width="130px" colspan=" ">
                                <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="N° Production" required>
                            </td>
                            <td width="80px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Gaz produit: </label>
                            </td>
                            <td width="130px" colspan=" ">
                                <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Gaz produit" required>
                            </td>
                            <td width="80px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Gaz produit: </label>
                            </td>
                            <td width="130px" colspan=" ">
                                <input type="text" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Gaz produit" required>
                            </td>
                            <td width="80px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Date production: </label>
                            </td>
                            <td width="100px" colspan=" ">
                                <input type="date" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Opérateur 3" required>
                            </td>
                            <td width="80px">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Quantité: </label>
                            </td>
                            <td width="100px" colspan=" ">
                                <input type="number" name="numeroBouteilles" id="numeroBouteilles" class="form-control" style="height:1.4rem; padding: 0rem;" placeholder="Opérateur 3" required>
                            </td>

                            <td width="60px"> &nbsp;</td>

                        </tr>
                    </tr>



@extends('master')

@section('content')

<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-hearder" style="text-align:center">
      <h2>ENREGISTREMENT DE LA PRODUCTION</h2>
    </div>
    <div class="card-body">
      <form action="{{url('production')}}" method="post">
      {!! csrf_field()!!}
        <div class="row">

          <div class="col-md-6">
            <div class="form-group row">
              <label for="" class="col-sm-3 col-form-label" style="text-align:right">Production N°</label>
              <div class="col-sm-9">
                <input type="text" name="numeroProductions" id="numeroProductions" class="form-control" placeholder="Numero de production " required>
              </div>
            </div>
          </div>

          <div class="col-md-6">
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Date:</label>
                <div class="col-sm-9">
                  <input type="date" name="dateProductions" id="dateProductions" class="form-control" placeholder="Date de production" required>
                </div>
              </div>
          </div>

          <div class="col-md-6">
            @php ($options = [
              [ "gaz" => "Acétylène", "id" => "1"],
              [ "gaz" => "Azote", "id" => "2"],
              [ "gaz" => "Oxygène", "id" => "3"]
            ])
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Famille gaz:</label>
                <div class="col-sm-9">
                  <select class="form-control">
                    @foreach ($options as $option)
                        <option value="{{ $option['id'] }}" name="gaz">{{ $option['gaz'] }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
          </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label for="" class="col-sm-3 col-form-label" style="text-align:right">Date Epreuve:</label>
              <div class="col-sm-9">
                <textarea name="observationProductions" id="observationProductions" class="form-control" placeholder="observation lors de la production" cols="30" rows="3"></textarea>
              </div>
              </div>
          </div>


          <div class="col-md-6">
            <div class="form-group row">
              <label for="" class="col-sm-3 col-form-label"></label>
              <div class="col-sm-9">
                <button type="submit" value="" class="btn btn-success btn-sm" style="width:90px" >Créer</button>
                <a class="btn btn-danger" style="width:90px" href="{{url('/production ')}}"> Annuler</a>
              </div>
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>

@stop
