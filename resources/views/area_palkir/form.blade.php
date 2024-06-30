<x-layout>
    <form method="POST" action="{{ route('area_palkir.store' )}}">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$area_palkir->nama}}">
        </div>
        <div class="mb-3">
            <label for="kapasitas" class="form-label">Kapasitas</label>
            <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="{{$area_palkir->kapasitas}}">
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$area_palkir->keterangan}}">
        </div>

        <div class="mb-3">
            <label for="kampus" class="form-label">Kampus</label>
            <select name="kampus_id" id="kampus" class="form-control" value="{{$area_palkir->kampus_id}}">
                @foreach ($list_kampus as $kampus)
                    <option value="{{ $kampus->id }}">{{ $kampus->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>