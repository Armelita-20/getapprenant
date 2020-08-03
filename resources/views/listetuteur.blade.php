@extends('include.header')

@section('content')

<div class="container">
    <div class="row col-md-12 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Profession</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach($tuteurs as $tuteur)
            <tr>
                <td>{{$tuteur->id}} </td>
                <td>{{$tuteur->nom_tuteur}}</td>
                <td>{{$tuteur->prenom_tuteur}}</td>
                <td>{{$tuteur->telephonet_tuteur}}</td>
                <td>{{$tuteur->profession_tuteur}}</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Imprimer</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>


    @endforeach
    </table>
    </div>
</div>
@include('include.footer')
@endsection
