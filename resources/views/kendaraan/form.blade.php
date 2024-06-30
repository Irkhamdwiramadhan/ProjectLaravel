<x-layout>
    <form method="POST" action="{{ route('kendaraan.store' )}}">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" class="form-control" id="merk" name="merk" value="{{$kendaraan->merk}}">
        </div>
        <div class="mb-3">
            <label for="pemilik" class="form-label">Pemilik</label>
            <input type="text" class="form-control" id="pemilik" name="pemilik"  value="{{$kendaraan->pemilik}}">
        </div>
        <div class="mb-3">
            <label for="nopol" class="form-label">Nopol</label>
            <input type="text" class="form-control" id="nopol" name="nopol"c value="{{$kendaraan->nopol}}">
        </div>
        <div class="mb-3">
            <label for="thn_beli" class="form-label">Tahun Beli</label>
            <input type="text" class="form-control" id="thn_beli" name="thn_beli"  value="{{$kendaraan->thn_beli}}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi"  value="{{$kendaraan->deskripsi}}">
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Kendaraan</label>
            <select name="jenis_kendaraan_id" id="jenis" class="form-control"  value="{{$kendaraan->jenis_kendaraan_id}}">
                @foreach ($list_jenis as $jenis)
                    <option value="{{ $jenis->id }}">{{ $jenis->jenis }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="kapasitas_kursi" class="form-label">kapasitas_kursi</label>
            <input type="text" class="form-control" id="kapasitas_kursi" name="kapasitas_kursi"  value="{{$kendaraan->kapasitas_kursi }}">
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">rating</label>
            <input type="text" class="form-control" id="rating" name="rating"  value="{{$kendaraan->rating}}">
        </div>
        <a href="{{ route('jenis.show') }}" class="btn btn-success mr-2">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>