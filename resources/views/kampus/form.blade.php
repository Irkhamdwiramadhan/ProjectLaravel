<x-layout>
    <form method="POST" action="{{route('kampus.store')}}">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$kampus->nama}}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat"  value="{{$kampus->alamat}}">
        </div>
        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude"  value="{{$kampus->latitude}}">
        </div>
        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="text" class="form-control" id="longitude" name="longitude"  value="{{$kampus->longitude}}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>