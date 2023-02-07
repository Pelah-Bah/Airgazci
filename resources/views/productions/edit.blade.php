@extends('master')

@section('content')
<!--
            <div class="col-12 grid-margin">
                <div class="card">
                    <form action="{{url('/production/'. $productions->id)}}" method="post">
                    <div class="card-hearder" style="text-align:center">
                        <h2>EDITER DE LA PRODUCTION N°:{{($productions->id)}}</h2>
                    </div>
                    <div class="card-body">
                    {!! csrf_field()!!}
                    @method("PATCH")

                    <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">ProductionN°:</label>
                            <div class="col-sm-9">
                              <input type="text" value="{{($productions->numeroProductions)}}" name="numeroProductions" id="numeroProductions" class="form-control" placeholder="Numero de production " required>
                            </div>
                          </div>
                        </div>

                      <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Date:</label>
                            <div class="col-sm-9">
                              <input type="date" value="{{($productions->dateProductions)}}" name="dateProductions" id="dateProductions" class="form-control" placeholder="Date de production" required>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Gaz:</label>
                            <div class="col-sm-9">
                            <select name="gazProductions" id="gazProductions" class="form-control" placeholder="Gaz Productions">
                                <option value="{{($productions->gazProductions)}}">{{($productions->gazProductions)}}</option>
                                <option value="Acétylène">Acétylène</option>
                                <option value="Azote">Azote</option>
                                <option value="Oxygène">Oxygène</option>
                            </select>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Quantité:</label>
                            <div class="col-sm-9">
                              <input type="number" value="{{($productions->quaniteProductions)}}" name="quaniteProductions" id="quaniteProductions" class="form-control" placeholder="quanite produit " required />
                            </div>
                          </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label" style="text-align:right">Observation:</label>
                              <div class="col-sm-9">
                                <textarea value="{{($productions->observationProductions)}}" name="observationProductions" id="observationProductions" class="form-control" placeholder="observation lors de la production" cols="30" rows="3"></textarea>
                              </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                              <input type="submit" value="Modifier" class="btn btn-success btn-sm" style="width:90px" >
                              <a class="btn btn-danger" style="width:90px" href="{{url('/production')}}"> Annuler</a>
                            </div>
                          </div>
                        </div>

                    </div>
                  </form>
                  </div>
                </div>
            </div>
        -->
@stop
