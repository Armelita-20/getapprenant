
@extends('include.header')

@section('content')

<!-- details card section starts from here -->
<section class="details-card">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="{{asset('storage').'/'.$apprenant->photo}}">
                    </div>
                    <div class="card-desc">
                        <h3>{{$apprenant->nom}}</h3>
                        <h3>{{$apprenant->prenom}}</h3>
                        <h3>{{$apprenant->genre}}</h3>
                        <h3>{{$apprenant->telephone}}</h3>
                        <h3>{{$apprenant->email}}</h3>
                         <br> <br>
                            <a href="{{url('listapprenant')}}" class="btn-card">Retour</a>
                    </div>
                </div>

        </div>
    </div>
</section>
@include('include.footer')
@endsection
<!-- details card section starts from here -->
