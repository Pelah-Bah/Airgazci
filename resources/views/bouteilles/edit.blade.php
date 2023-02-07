@extends('master')
 
@section('content')

<div class="col-12 grid-margin">
  <div class="card">
    <form action="{{url('/bouteille/'. $bouteilles->id)}}" method="post">
      <div class="card-hearder" style="text-align:center">
        <h2>EDITION DE LA BOUTEILLE DE GAZ N°:{{($bouteilles->numeroBouteilles)}}</h2>
      </div>
      <div class="card-body">  
        {!! csrf_field()!!} 
        @method("PATCH")
          <div class="row">

            <div class="col-md-6">
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Numero Bouteilles:</label>
                <div class="col-sm-9">
                  <input type="text" value="{{($bouteilles->numeroBouteilles)}}" name="numeroBouteilles" id="numeroBouteilles" class="form-control" placeholder="Numéro bouteilles" required>    
                </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="" class="col-sm-3 col-form-label" style="text-align:right">Numero Origine:</label>
                  <div class="col-sm-9">
                    <input type="text" value="{{($bouteilles->numeroorigineBouteilles)}}" name="numeroorigineBouteilles" id="numeroorigineBouteilles" class="form-control" placeholder="numero origine Bouteilles" required>    
                  </div>
                </div>
            </div>

            <div class="col-md-6">
              @php ($options = [
                [ "cat" => "7m3", "id" => "1"],
                [ "cat" => "5m3", "id" => "2"],
                [ "cat" => "1,5m3", "id" => "3"],
              ])
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Conditionnement:</label>
                <div class="col-sm-9">
                    <select class="form-control">
                      @foreach ($options as $option)
                          <option value="{{ $option['id'] }}" name="cat">{{ $option['cat'] }}</option>
                      @endforeach
                    </select> 
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
                  <input type="date" name="dateepreuveBouteilles" id="dateepreuveBouteilles" class="form-control" placeholder="Date d'épreuve bouteilles " required />       
                </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group row">
                  <label for="" class="col-sm-3 col-form-label" style="text-align:right">Fin Epreuve:</label>
                  <div class="col-sm-9">
                    <input type="date" name="finepreuveBouteilles" id="finepreuveBouteilles" class="form-control" placeholder="date de fin épreuve bouteilles" required />       
                  </div>
                </div>
            </div>
                          
            <div class="col-md-6">
              <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                  <button type="submit" value="" class="btn btn-success btn-sm" style="width:90px" >Créer</button>
                  <a class="btn btn-danger" style="width:90px" href="{{url('/bouteille')}}"> Annuler</a>                                  
                </div>
              </div>
            </div>

          </div>
      </div>
    </form>
  </div>
</div>
                
@stop