

@extends('include.header')

@section('content')
      <div class="container">
          <div class="container" style="font-weight:800;">
     <h1 class="armelle">NOUVEL ENREGISTREMENT</h1>
     <h2 class="ar">Apprenant</h2> <br>
              <form method="post" action="{{url('formapprenant')}}" enctype="multipart/form-data" data-toggle="validator">
              @csrf
              <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Nom</label>
                      <input type="text" name="nom" class="form-control" id="inputnom" required>

                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Prenom</label>
                      <input type="text" name="prenom" class="form-control" id="inputprenom" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Date de naissance</label>
                      <input type="date"name="date" class="form-control" id="inputdate_de_naissance" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Ville d'origine</label>
                      <input type="text" name="ville" class="form-control" id="inputville" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Formation suivie</label>
                      <input type="text" name="formation"class="form-control" id="inputprenom" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Etablissement précédent</label>
                      <input type="text"name="etablissement" class="form-control" id="inputprenom" required>
                    </div>

                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="phone">Téléphone</label>
                      <input type="tel" name="telephone" maxlength="8" class="form-control" id="inputtext"   pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                    </div>
                  <div class="form-group col-md-6">
                    <label for="inputCity">Email</label>
                    <input type="email"name="email" class="form-control" id="inputtext" required>
                  </div>
                    </div>
                    <div class="form-row">
                      <label class="" for="tuteur">Tuteur</label>
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="tuteurs_id" required>
                        @foreach($tuteur as $armelle)
                        <option value="{{$armelle->id}}">{{$armelle->nom_tuteur}}</option>
                        @endforeach
                      </select>

                    </div> <br>
                    <div class="form-row">
                      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="genre" required>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Autre">Autre</option>
                      </select>

                    </div> <br>
                    <div class="form-row">
                      <div class="custom-file">
                        <input type="file" name="photo"class="custom-file-input" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Photo</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Projet pesonnel</label>
                      <textarea class="form-control"name="projet" id="exampleFormControlTextarea1" rows="6" required></textarea>
                    </div> <br>
                    <button class="btn btn-primary1" id="coleur" type="submit">Valider</button>
                    <button class="btn btn-primary2" id="coleur" type="submit">Annuler</button>
                  </div>
                </form> <br> <br> <br>




                <form method="post" action="{{url('formulairetuteur')}}" enctype="multipart/form-data" data-toggle="validator">
                @csrf
                    <h2 class="ar">Tuteur</h2> <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Nom</label>
                          <input type="text"name="nom_tuteur" class="form-control" id="inputnom" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Prenom</label>
                          <input type="text"name="prenom_tuteur" class="form-control" id="inputprenom" required>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">Téléphone</label>
                            <input type="tel" name="telephone_tuteur" maxlength="8" class="form-control" id="inputtext"   pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
                          </div>
                        <div class="form-group col-md-6">
                          <label for="inputCity">Profession</label>
                          <input type="texte"name="profession_tuteur"  class="form-control" id="inputtext" required>
                        </div>
                          </div>
                    <button class="btn btn-primary1" id="coleur" type="submit">Valider</button>
                    <button class="btn btn-primary2" id="coleur" type="submit">Annuler</button>
                  </div>
                </form>
              </div> <br> <br>
              </div> <br> <br>
              @include('include.footer')
@endsection
