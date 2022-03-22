<div>
    @foreach($pictures as $picture)
        <img src="storage/{{$picture->path}}">
    @endforeach
</div>
