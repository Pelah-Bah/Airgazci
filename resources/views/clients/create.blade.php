@extends('master')
 
@section('content')


            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-hearder" style="text-align:center;">
                      <h2>ENREGISTREMENT DES CLIENTS</h2>
                  </div>
                  <div class="card-body">
                  <form action="{{url('client')}}" method="post">
                    {!! csrf_field()!!}
                    <div class="row">
                      
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Compte:</label>
                            <div class="col-sm-9">
                              <input type="text" name="compteclient" id="compteclient" class="form-control" placeholder="Compte client" required>    
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Catégorie:</label>
                            <div class="col-sm-9">
                              <select name="categorieclient" id="categorieclient" class="form-control" placeholder="Catégorie client">
                                <option value="ENTREPRISE">ENTREPRISE</option>
                                <option value="PATICULIER">PATICULIER</option>
                                <option value="CHU">CHU</option>
                                <option value="CHU">CHR</option>
                                <option value="HOPITAL">HOPITAL</option>
                                <option value="CENTRE DE SANTE">CENTRE DE SANTE</option>
                                <option value="CENTRE DE SANTE">CLINIQUE</option>
                                <option value="CENTRE DE SANTE">DEPOTS</option>
                                <option value="AUTRES">AUTRES</option>
                              </select>    
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" style="text-align:right">Libellé:</label>
                            <div class="col-sm-9">
                              <input type="text" name="libelleclient" id="libelleclient" class="form-control" placeholder="Libellé client" required />       
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label" style="text-align:right">Appelation:</label>
                              <div class="col-sm-9">
                                <input type="text" name="appelationclient" id="appelationclient" class="form-control" placeholder="Appelation client">       
                              </div>
                            </div>
                        </div>

                          <div class="col-md-6">
                              <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Interlocuteur:</label>
                                <div class="col-sm-9">
                                  <input type="text" name="interlocuteurclient" id="interlocuteurclient" class="form-control" placeholder="Interlocuteur client" required>       
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Cel. interlocuteur:</label>
                                <div class="col-sm-9">
                                  <input type="text" name="celinterlocuteurclient" id="celinterlocuteurclient" class="form-control" placeholder="Cellulaire interlocuteur client" required>       
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label for="" class="col-sm-3 col-form-label" style="text-align:right">Pays:</label>
                                  <div class="col-sm-9">
                                    <select name="paysclient" id="paysclient" class="form-control" placeholder="Pays client">
                                      <option value="ENTREPRISE">CÔTE D'IVOIRE</option>
                                      <option value="SENEGAL">SENEGAL</option>
                                      <option value="GHANA">GHANA</option>
                                    </select>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label for="" class="col-sm-3 col-form-label" style="text-align:right">Ville:</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="villeclient" id="villeclient" class="form-control" placeholder="Ville client" required>       
                                  </div>
                                </div>
                              </div>


                              <div class="col-md-6">
                                    <div class="form-group row">
                                      <label for="" class="col-sm-3 col-form-label" style="text-align:right">Contact 1:</label>
                                      <div class="col-sm-9">
                                        <input type="text" name="contact1client" id="contact1client" class="form-control" placeholder="Contact 1 client" required>       
                                      </div>
                                    </div>
                                </div>
                                
                                  <div class="col-md-6">
                                    <div class="form-group row">
                                      <label for="" class="col-sm-3 col-form-label" style="text-align:right">Contact 2:</label>
                                      <div class="col-sm-9">
                                        <input type="text" name="contact2client" id="contact2client" class="form-control" placeholder="Contact 2 client">       
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-md-6">
                                      <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label" style="text-align:right">E-mail:</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="faxclient" id="faxclient" class="form-control" placeholder="Fax client">       
                                        </div>
                                      </div>
                                    </div>


                                    <div class="col-md-6">
                                      <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label" style="text-align:right">Fixe:</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="telephoneclient" id="telephoneclient" class="form-control" placeholder="Téléphone client">       
                                        </div>
                                      </div>
                                    </div>
                                    

                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label" style="text-align:right">Adresse géo:</label>
                                    <div class="col-sm-9">
                                      <textarea name="adressegeoclient" id="adressegeoclient" class="form-control" placeholder="Adresse géo client" cols="30" rows="3" required></textarea>       
                                    </div>
                                  </div>
                                </div>
                                
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label for="" class="col-sm-3 col-form-label" style="text-align:right">Observation:</label>
                                  <div class="col-sm-9">
                                    <textarea name="observationclient" id="observationclient" class="form-control" placeholder="Observation client" cols="30" rows="3"></textarea>       
                                  </div>
                                </div>
                              </div>

                          <div class="col-md-6">
                              <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label" style="text-align:right">Adresse postale:</label>
                                <div class="col-sm-9">
                                  <input type="text" name="adressepostaleclient" id="adressepostaleclient" class="form-control" placeholder="Adresse postale client">       
                                </div>
                              </div>
                            </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                              <button type="submit" value="" class="btn btn-success btn-sm" style="width:90px" >Créer</button>
                              <a class="btn btn-danger" style="width:90px" href="{{url('/client')}}"> Annuler</a>                                  
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