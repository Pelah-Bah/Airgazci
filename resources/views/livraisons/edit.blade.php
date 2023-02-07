@extends('master')

@section('content')

            <div class="col-12 grid-margin">
                <div class="card">
                    <form action="{{url('/livraison/'. $livraisons->id)}}" method="post">
                    <div class="card-hearder" style="text-align:center">
                        <h2>EDITER DE LA LA LIVRAISON N°:{{($livraisons->id)}}</h2>
                    </div>
                    <div class="card-body">
                    {!! csrf_field()!!}
                    @method("PATCH")

                      <div class="col-md-6">
                            <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label" style="text-align:right">Livraison N°:</label>
                              <div class="col-sm-9">
                                <input type="text" value="{{($livraisons->numeroLivraison)}}" name="numeroLivraison" id="numeroLivraison" class="form-control" placeholder="numéro Livraison " required>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label" style="text-align:right">Emis le:</label>
                              <div class="col-sm-9">
                                <input type="date" value="{{($livraisons->dateemissionLivraison)}}" name="dateemissionLivraison" id="dateemissionLivraison" class="form-control" placeholder="Date de emission du bon de livraison" required>
                              </div>
                            </div>
                          </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label" style="text-align:right">A livré le:</label>
                              <div class="col-sm-9">
                                <input type="date"  value="{{($livraisons->dateprevuLivraison)}}" name="dateprevuLivraison" id="dateprevuLivraison" class="form-control" placeholder="Date de prévu pour la livraison" required>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label" style="text-align:right">Montant:</label>
                              <div class="col-sm-9">
                                <input type="number" min="0" max="999999999999.99" step="0.01" value="{{($livraisons->MontantLivraison)}}"  name="MontantLivraison" id="MontantLivraison" class="form-control" placeholder="Montant " required />
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                          <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label" style="text-align:right">Client:</label>
                              <div class="col-sm-9">
                              <select name="nomclientLivraison" id="nomclientLivraison" class="form-control" placeholder="Nom du client ">
                                  <option value="{{($livraisons->nomclientLivraison)}}">value="{{($livraisons->nomclientLivraison)}}"</option>
                                  <option value="CHU-Treichville">CHU-Treichville</option>
                                  <option value="SUCCAFCI">SUCCAFCI</option>
                                  <option value="Koffi Marc">Koffi Marc</option>
                              </select>
                              </div>
                          </div>
                          </div>

                          <div class="col-md-6">
                          <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label" style="text-align:right">Client:</label>
                              <div class="col-sm-9">
                              <select name="lieuLivraison" id="lieuLivraison" class="form-control" placeholder="lieu Livraison">
                                  <option value="{{($livraisons->lieuLivraison)}}">value="{{($livraisons->lieuLivraison)}}"</option>
                                  <option value="CHU-Treichville">CHU-Treichville</option>
                                  <option value="SUCCAFCI">SUCCAFCI</option>
                              </select>
                              </div>
                          </div>
                          </div>

                          <div class="col-md-6">
                              <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">contact client:</label>
                                <div class="col-sm-9">
                                  <input type="text" value="{{($livraisons->contactclientLivraison)}}"  name="contactclientLivraison" id="contactclientLivraison" class="form-control" placeholder="contact client ">
                                </div>
                              </div>
                          </div>


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                              <input type="submit" value="Modifier" class="btn btn-success btn-sm" style="width:90px" >
                              <a class="btn btn-primary" style="width:90px" href="{{url('/livraison')}}"> Annuler</a>
                            </div>
                          </div>
                        </div>

                    </div>
                  </form>
                  </div>
                </div>
            </div>

@stop
