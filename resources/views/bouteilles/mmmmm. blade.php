@extends('master')

@section('content')
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-hearder" style="text-align:center">
            <h2>ENREGISTREMENT DES BOUTEILLES</h2>
        </div>
        <div class="card-body">
            <form action="{{url('bouteille')}}" method="post">
                {!! csrf_field()!!}
                <div class="table-responsive">
                    <div style="text-align:right">
                        <button class=" btn btn-info btn-sm" style="width:90px">Enregistrer </button>
                        <a href="{{url('/bouteille')}} " class=" btn btn-info btn-sm" style="width:90px">Retour </a>
                    </div>
                    <br />
                    <table class="table table-striped" width="px" border="0">
                        <thead>
                            <tr>
                                <td width="80px">
                                    <label for="" class="col-sm-3 col-form-label"
                                        style="text-align:left; padding: 0rem;">Référence:&nbsp;</label>
                                </td>
                                <td width="200px">
                                    <input type="text" name="referenceBouteilles"
                                        style="width: 200px; height:1.4rem; padding: 0rem;" id="referenceBouteilles"
                                        class="form-control" placeholder="Référence" required>
                                </td>
                                <td width="60px">
                                    <label for="" class="col-sm-3 col-form-label"
                                        style="text-align:right; padding: 0rem;">&nbsp;&nbsp;Famille:&nbsp;</label>
                                </td>
                                <td width="100px">
                                    <input type="text" name="familles_id"
                                        style="width: px; height:1.4rem; padding: 0rem;" id="familles_id"
                                        class="form-control" placeholder="familles_id" required>
                                </td>
                                <td width="80px">
                                    <input type="text" name=" " value=" "
                                        style="width: 80px; height:1.4rem; padding: 0rem;" id="" class="form-control"
                                        placeholder="Référence">
                                </td>
                                <td width="60px">
                                    <label for="" class="col-sm-3 col-form-label"
                                        style="text-align:right; padding: 0rem;">&nbsp;&nbsp;Format:&nbsp;</label>
                                </td>
                                <td width="100px">
                                    <input type="text" name="format_id" style="width: px; height:1.4rem; padding: 0rem;"
                                        id="format_id" class="form-control" placeholder="Désignation" required>
                                </td>
                                <td width="80px">
                                    <input type="text" name=" " style="width: 80px; height:1.4rem; padding: 0rem;"
                                        for="numeroorigineBouteilles" class="form-control" placeholder=" " required>
                                </td>
                                <td width="80px">
                                    <label for="" class="col-sm-3 col-form-label"
                                        style="text-align:right; padding: 0rem;">&nbsp;&nbsp;Désignation:&nbsp;</label>
                                </td>
                                <td width="200px">
                                    <input type="text" name="designationBouteilles"
                                        style="width: 200px; height:1.4rem; padding: 0rem;" id="designationBouteilles"
                                        class="form-control" placeholder="Désignation" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="10" height="10px"></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="" class="col-sm-3 col-form-label"
                                        style="text-align:left; padding: 0rem;">N° Bouteille:&nbsp;</label>
                                </td>
                                <td>
                                    <input type="text" name="numeroBouteilles"
                                        style="width: 200px; height:1.4rem; padding: 0rem;" id="numeroBouteilles"
                                        class="form-control" placeholder="Numéro bouteille" required>
                                </td>
                                <td>
                                    <label for="" class="col-sm-3 col-form-label"
                                        style="text-align:left; padding: 0rem;">&nbsp;&nbsp;N° Origine:&nbsp;</label>
                                </td>
                                <td colspan="2">
                                    <input type="text" name="numeroorigineBouteilles"
                                        style="width: 180px; height:1.4rem; padding: 0rem;" id="numeroorigineBouteilles"
                                        class="form-control" placeholder="Numéro origine">
                                </td>
                                <td>
                                    <label for="" class="col-sm-3 col-form-label"
                                        style="text-align:left; padding: 0rem;">&nbsp;&nbsp;Date épreuve:&nbsp;</label>
                                </td>
                                <td colspan="2">
                                    <input type="date" name="dateepreuveBouteilles"
                                        style="width: 180px; height:1.4rem; padding: 0rem;" id="dateepreuveBouteilles"
                                        class="form-control" placeholder=" " required>
                                </td>
                                <td>
                                    <label for="" class="col-sm-3 col-form-label"
                                        style="text-align:left; padding: 0rem;">&nbsp;&nbsp;Fin épreuve:&nbsp;</label>
                                </td>
                                <td>
                                    <input type="date" name="finepreuveBouteilles"
                                        style="width: 200px; height:1.4rem; padding: 0rem;" id="finepreuveBouteilles"
                                        class="form-control" placeholder=" " required>
                                </td>
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