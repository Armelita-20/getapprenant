

@extends('include.header')

@section('content')
      <div class="container">
          <div class="container" style="font-weight:800;">
     <h1 class="armelle">NOUVEL ENREGISTREMENT</h1>
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
              @include('include.footer')
@endsection
