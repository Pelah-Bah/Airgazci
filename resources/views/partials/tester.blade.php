@extends('categories.layout')
 
@section('content')

   
<form action="{{ route('chauffeurs.store') }}" method="POST">
    @csrf
  <table>
        <thead>
            <tr class="col-lg-12 margin-tb">
                <td class="pull-left"><h2>AJOUTER CHAUFFEUR</h2></td>
            </tr>
        </thead>
        <tbody> 
            <tr>
                <td>
                    <strong>MATRICULE:</strong>
                </td>
                <td>
                    <input type="text" id="matriculeChauffeur" name="matriculeChauffeur" class="form-control" placeholder="Matricule Chauffeur">                
                    @error('matriculeChauffeur') 
                    <span>{{ $message }}</span>
                    @enderror
                </td>
            </tr> 
            <tr>
                <td>
                    <strong>NOM:</strong>
                </td>
                <td>
                    <input type="text" id="nomControleur" name="nomChauffeur" class="form-control" placeholder="Nom Chauffeur">                
                    @error('nomChauffeur') 
                    <span>{{ $message }}</span>
                    @enderror
                </td>
            </tr>  
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <strong>PRENOMS:</strong>
                </td>
                <td>
                    <input type="text" id="prenomChauffeur" name="prenomChauffeur" class="form-control" placeholder="Prenoms Chauffeur">                
                    @error('prenomChauffeur') 
                    <span>{{ $message }}</span>
                    @enderror
                </td>
            </tr> 
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <strong>FONCTION:</strong>
                </td>
                <td>
                    <input type="text" id="functionChauffeur" name="functionChauffeur" class="form-control" placeholder="Function Chauffeur">                
                    @error('functionChauffeur') 
                    <span>{{ $message }}</span>
                    @enderror
                </td>
            </tr> 
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <strong>SEXE:</strong>
                </td>
                <td>
                    <input type="text" id="sexeChauffeur" name="sexeChauffeur" class="form-control" placeholder="Sexe Chauffeur">                
                    @error('sexeChauffeur') 
                    <span>{{ $message }}</span>
                    @enderror
                </td>
            </tr> 
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">
                        <button type="submit" class="btn btn-primary">Créer</button>
                        <a class="btn btn-danger" href=" chauffeurs.index"> Annuler</a>
                </td>
            </tr>
    </tbody>
  </table>
</form>



@endsection