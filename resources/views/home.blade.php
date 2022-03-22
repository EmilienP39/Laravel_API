@extends("template")
@section("content")
<h1>Tous les Partner</h1>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Adresse</th>
            <th>Ville</th>
        </tr>
    </thead>
    <tbody>
    @foreach($partners as $partner)
        <tr>
            <td>{{ $partner->name }}</td>
            <td>{{ $partner->description }}</td>
            <td>{{$partner->address}}</td>
            <td>{{$partner->city}}</td>
            @if($partner->picture != null)
                <td><img src="storage/{{$partner->picture->path}}" class="partner-picture" style="width: 480px;"></td>
            @endif
        </tr>
    @endforeach
        <br>
        <a href="{{route("upload-image")}}">Ajouter une image</a>
    <br>
    <a href="{{route("create-partner")}}">Ajouter un partenaire</a>
    </tbody>
</table>
@endsection
