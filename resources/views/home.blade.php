@extends("template")
@section("content")
    <h1 style="text-align: center">Tous les Partner</h1>
    <div class="create">
        <div class="create-partner">
            <form action="{{ route("store-partner") }}" method="post">
                @csrf
                <label>Création de partenaire</label>
                <div class="create-row">
                    <div class="create-name">
                        <label for="nom_partner ">Nom</label><br>
                        <input type="text" name="nom_partner"/>
                    </div>

                    <div>
                        <label for="description">Description</label><br>
                        <textarea name="description"></textarea>
                    </div>
                </div>
                <div class="create-row">
                    <div class="create-city">
                        <label for="cp_partner">Code Postal</label><br>
                        <input id="cp_partner" type="text" name="cp_partner">
                    </div>
                    <div class="create-city">
                        <label for="ville_partner">Ville</label><br>
                        <select style="width: 215px; height: 30px" id="ville_partner" type="text" name="ville_partner">
                        </select>
                    </div>
                </div>
                <br>
                <div class="create-row">
                    <div class="create-city">
                        <label for="address_partner">Adresse</label><br>
                        <input id="address_partner" type="text" name="address_partner">
                    </div>
                    <select name="images" style="width: 215px">
                        <option value="0">Pas d'image</option>
                        @foreach($pictures as $picture)
                            <option value="{{$picture->id}}">{{$picture->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <button type="submit">Ajouter</button>
            </form>
        </div>

        <div class="create-picture">
            <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Ajout d'une photo </label>
                    <div>
                        <label for="name">Nom</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <br>
                    <div>
                        <label for="image">Upload</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <br>
                    <div>
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="cards">
        @foreach($partners as $partner)
            <div class="card">
                @if($partner->picture != null)
                    <img src="storage/{{$partner->picture->path}}">
                @else
                    <h4 class="no-picture">Pas d'image</h4>
                @endif
                <div class="container">
                    <h4><b>{{$partner->name}}</b></h4>
                    <p>{{$partner->description}}</p>
                    <p>{{$partner->address}}
                        <br>{{$partner->city}}, {{$partner->cp}}</p>
                    <div id="add-picture-{{$partner->id}}">
                        <form action="{{route('add-picture',$partner->id)}}">
                            <select name="images">
                                @foreach($pictures as $picture)
                                    <option value="{{$picture->id}}">{{$picture->name}}</option>
                                @endforeach
                            </select><br>
                            <button type="submit" class="btn btn-warning">
                                @if($partner->picture != null)
                                    Changer de photo
                                @else
                                    Ajouter une photo
                                @endif
                            </button>
                        </form>
                    </div>
                    <form action="{{route('delete-partner',$partner->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    <div class="votes">
                        <a href="{{route("vote-up-partner",$partner->id)}}" class="up-vote" id="btn-vote"></a>
                        <p>{{$partner->votes}}</p>
                        <a href="{{route("vote-down-partner",$partner->id)}}" class="down-vote" id="btn-vote"> </a>
                    </div>
                    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
                    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js')}}"></script>
                </div>
            </div>

            <br>
        @endforeach
    </div>

@endsection
