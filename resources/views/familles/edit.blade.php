@extends('master')
 
@section('content')

            <div class="col-12 grid-margin">
                <div class="card">
                    <form action="{{url('/famille/'. $familles->id)}}" method="post">
                    <div class="card-hearder" style="text-align:center">
                        <h2>EDITER DE LA FAMILLE N°:{{($familles->id)}}</h2>
                    </div>
                    <div class="card-body">
                    {!! csrf_field()!!}
                    @method("PATCH")

                    
                    <div class="row">    
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Libellé:</label>
                            <div class="col-sm-9">
                              <input type="text" name="libellefamille" id="libellefamille" value="{{($familles->libellefamille)}}" class="form-control" placeholder="Libellé famille " required>    
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Type:</label>
                            <div class="col-sm-9">
                              <select name="typefamille" id="typefamille" class="form-control" placeholder="Type famille">
                                <option value="{{($familles->typefamille)}}">{{($familles->typefamille)}}</option>
                                <option value="INDUSTRIEL">INDUSTRIEL</option>
                                <option value="MEDICAL">MEDICAL</option>
                                <option value="AUTRES">AUTRES</option>
                              </select>    
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Abréviation:</label>
                            <div class="col-sm-9">
                              <input type="text" name="appelationfamille" id="appelationfamille" value="{{($familles->appelationfamille)}}" class="form-control" placeholder="Abréviation famille " required />       
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label" style="text-align:right">Appelation:</label>
                              <div class="col-sm-9">
                                <textarea name="descriptionfamille" id="descriptionfamille" class="form-control" placeholder="Description famille" cols="30" rows="3">{{($familles->descriptionfamille)}}</textarea>       
                              </div>
                            </div>
                        </div>
                      

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                              <input type="submit" value="Modifier" class="btn btn-success btn-sm" style="width:90px" >
                              <a class="btn btn-danger" style="width:90px" href="{{url('/famille')}}"> Annuler</a>                                  
                            </div>
                          </div>
                        </div>

                        </div>
                      </div>
                    </form>
                  </div>
            </div>

@stop