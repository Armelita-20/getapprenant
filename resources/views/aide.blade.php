
@extends('include.header')

@section('content')

<br>

<div class="container" style="letter-spacing:3px; font-weight:800;font-size: 15px;">
<center><h1> COMMENT UTILISER SIMPLISTE </h1> </center> <br>

  <div class="colomn">


    <div class="col align-self-center">

    <!-- <div class="col align-self-center" style="height:25vh;" media="height:25vh;"> -->
    <h2 class="text-danger"> Menu </h2>
  <p> Le menu  constituer de la page <span class="text-danger">Nouveau Enregistrement</span>, de la
  <span class="text-danger">liste des etudiants</span>" et de la page <span class="text-danger">Aide</span>
   vous permet d’accéder aux differentes fonctionalités  de l'application simpliste. Il s’agit
   d’un menu contrôlable à la fois à la souris, au clavier et au doigt pour les écrans tactiles.</p>

    </div>
    <br><br>

    <div class="col align-self-center">
      <h2 class="text-danger">La barre de recherche</h2>
<p>le moteur de recherche est un champ qui permet de faire des recherches. Par exemple, vous pouvez avoir des informations sur un seul apprenant en saisaissant dans la barre de recherche le nom et prenom de l'apprenant.
lorsque vous effectuez des recherches, cela vous renvoie à la pages qui correspondent le mieux à vos attentes.</p>


    </div>
    <br><br>

    <div class="col align-self-center">
      <h2 class="text-danger"> Comment enregistrer un nouveau apprenant</h2>
     <p> pour enregistrer un nouveau apprenant sur l'appliplication simpliste, il faut tout simplement remplir tous les champs de renseignement sur la page NOUVEAU ENREGISTREMENT et valider.


    </div>

    <br><br>
    <div class="col align-self-center">

         <h2 class="text-danger">  Liste des Apprenants</h2>
        <p> pour consulter la liste de tous les apprenants, il suffit de cliquer sur le bouton liste des apprenants, ou de taper dans la barre de recherche <span class="text-danger"> Liste des Apprenants</span>, ce qui renvoie directement à la page contenant la liste de tous les apprenants.

    </div>

    <br><br>
    <div class="col align-self-center">
    <h2 class="text-danger"> Detail</h2>
        <p> la page detail renvoie à la fiche de renseignement sur un seul apprenant.elle contient toutes les informations aussi bien sur lui que sur son tuteur.pour acceder aux information sur un seul apprenant, il suffit d'un clip sur le lien detail dans la liste des apprenants, ou plus simplement de saisir le nom et prenom de l'apprenant dans la barre de recherhe et lancer la recherche.
    </div>
      <br><br>

    <div class="col align-self-center" >
      <h2 class="text-danger" > Impression</h2>
      <p>Vous avez la possibilité d’imprimer la liste de tous les apprenants, mais aussi la fiche de reseignement sur un seul apprenants. pour cela il suffit d'afficher la page souhaitée et cliquer sur impression.</p>
    </div>

    <br><br>


  </div>


</div>












    <!-- <div class="col align-self-center">
      One of three columns
    </div>
    <div class="col align-self-end">
      One of three columns
    </div> -->









    @include('include.footer')
@endsection



