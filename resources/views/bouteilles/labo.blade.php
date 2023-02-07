@extends('master')
 
@section('content')


            <div class="col-12 grid-margin">
                <div class="card">
                    <form action="{{url('/bouteille/'. $bouteilles->id)}}" method="post">
                    <div class="card-hearder" style="text-align:center">
                        <h2>EDITER LA BOUTEILLE DE GAZ N°:{{($bouteilles->id)}}</h2>
                    </div>
                    <div class="card-body">
                    {!! csrf_field()!!}
                    @method("PATCH")
                    <div class="row">   
                      
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Bouteilles N°:</label>
                            <div class="col-sm-9">
                            </div>
                          </div>
                        </div>
                      
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Libellé:</label>
                            <div class="col-sm-9">
                              <input type="text" value="{{($bouteilles->libelleBouteilles)}}" name="libelleBouteilles" id="libelleBouteilles" class="form-control" placeholder="Libellé bouteilles bouteilles" required>    
                            </div>
                          </div>
                        </div>
                      
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Origine N°:</label>
                            <div class="col-sm-9">
                            </div>
                          </div>
                        </div>
                      
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Volume:</label>
                            <div class="col-sm-9">
                              <input type="number"min="0" max="999999999999.99" step="0.01" value="{{($bouteilles->volumeBouteilles)}}" name="volumeBouteilles" id="volumeBouteilles" class="form-control" placeholder="Volume bouteilles en décimale svp!" required>    
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Unité:</label>
                            <div class="col-sm-9">
                              <select name="uniteBouteilles" id="uniteBouteilles" class="form-control" placeholder="Unité bouteilles">
                                <option value="{{($bouteilles->uniteBouteilles)}}">{{($bouteilles->uniteBouteilles)}}</option>
                                <option value="m3">m3</option>
                              </select>    
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Servie le:</label>
                            <div class="col-sm-9">
                            <input type="date" value="{{($bouteilles->datemiseenserviceBouteilles)}}" name="datemiseenserviceBouteilles" id="datemiseenserviceBouteilles" class="form-control" placeholder="Date de mise en service bouteilles " required />       
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Epreuve le:</label>
                            <div class="col-sm-9">
                            <input type="date" value="{{($bouteilles->dateepreuveBouteilles)}}" name="dateepreuveBouteilles" id="dateepreuveBouteilles" class="form-control" placeholder="Date d'épreuve bouteilles " required />       
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Fin épreuve le:</label>
                            <div class="col-sm-9">
                            <input type="date" value="{{($bouteilles->finepreuveBouteilles)}}" name="finepreuveBouteilles" id="finepreuveBouteilles" class="form-control" placeholder="date de fin épreuve bouteilles" required />       
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Etat:</label>
                            <div class="col-sm-9">
                            <select name="etatBouteilles" id="etatBouteilles" class="form-control" placeholder="Etat Bouteille">
                                <option value="{{($bouteilles->etatBouteilles)}}">{{($bouteilles->etatBouteilles)}}</option>
                                <option value="En service">En service</option>
                                <option value="Hors service">Hors service</option>
                                <option value="Maintenace">Maintenace</option>
                            </select>    
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Statut:</label>
                            <div class="col-sm-9">
                            <select name="statutBouteilles" id="statutBouteilles" class="form-control" placeholder="Statut bouteille">
                                <option value="{{($bouteilles->statutBouteilles)}}">{{($bouteilles->statutBouteilles)}}</option>
                                <option value="Vide">Vide</option>
                                <option value="Chargé">Chargé</option>
                            </select>    
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Position:</label>
                            <div class="col-sm-9">
                            <select name="positionsBouteilles" id="positionsBouteilles" class="form-control" placeholder="Position bouteille">
                                <option value="{{($bouteilles->positionsBouteilles)}}">{{($bouteilles->positionsBouteilles)}}</option>
                                <option value="AIRGAZ-CI">AIRGAZ-CI</option>
                            </select>    
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Famille:</label>
                            <div class="col-sm-9">
                            <select name="familleBouteilles" id="familleBouteilles" class="form-control" placeholder="famille bouteille">
                                <option value="{{($bouteilles->familleBouteilles)}}">{{($bouteilles->familleBouteilles)}}</option>
                                <option value="Acétylène">Acétylène</option>
                                <option value="Azote">Azote</option>
                                <option value="Oxygène">Oxygène</option>
                            </select>    
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">ID Famille:</label>
                            <div class="col-sm-9">
                                <input type="text" value="2" value="{{($bouteilles->Familles_id)}}" name="Familles_id" id="Familles_id" class="form-control" placeholder=" ">   
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Description:</label>
                            <div class="col-sm-9">
                                <textarea name="descriptionBouteilles" id="descriptionBouteilles" class="form-control" placeholder="Description bouteilles" cols="30" rows="3">{{($bouteilles->descriptionBouteilles)}}</textarea>       
                            </div>
                            </div>
                        </div> 
                      


                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                              <input type="submit" value="Modifier" class="btn btn-success btn-sm" style="width:90px" >
                              <a class="btn btn-danger" style="width:90px" href="{{url('/bouteille')}}"> Annuler</a>                                  
                            </div>
                          </div>
                        </div>
                        
                      </div>

                    </div>
                  </form>
                  </div>
                </div>
            </div>

@stop