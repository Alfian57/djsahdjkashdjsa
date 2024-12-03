<form action="/save-upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo" id="photo">
    <button type="submit">Submit</button>
</form>

@foreach ($photos as $photo)
    <img src="{{ asset('storage/' . $photo->nama) }}" alt="" width="200">
    <a href="/delete/photo/{{ $photo->id }}">Hapus</a>
@endforeach
