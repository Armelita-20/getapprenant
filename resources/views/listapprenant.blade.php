@extends('include.header')

@section('content')

<div class="container">
    <div class="row col-md-12 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="{{url('formapprenant')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Nouveau enregistrement</a>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Fomation</th>
            <th>Etablissement</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Genre</th>
            <th>Projet</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach($apprenants as $apprenant)
            <tr>
                <td>{{$apprenant->id}} </td>
                <td>{{$apprenant->nom}}</td>
                <td>{{$apprenant->prenom}}</td>
                <td>{{$apprenant->formation}}</td>
                <td>{{$apprenant->etablissement}}</td>
                <td>{{$apprenant->telephone}}</td>
                <td>{{$apprenant->email}}</td>
                <td>{{$apprenant->genre}}</td>
                <td>{{$apprenant->projet}}</td>

                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Imprimer</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>


    @endforeach
    </table>
    </div>
</div>
@include('include.footer')
@endsection
