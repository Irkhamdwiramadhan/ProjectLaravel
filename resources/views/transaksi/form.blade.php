<x-layout>
    <form method="POST" action="{{ route('transaksi.store' )}}">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$transaksi->tanggal}}">
        </div>
        <div class="mb-3">
            <label for="mulai" class="form-label">mulai</label>
            <input type="time" class="form-control" id="mulai" name="mulai" value="{{$transaksi->mulai}}">
        </div>
        <div class="mb-3">
            <label for="akhir" class="form-label">Akhir</label>
            <input type="time" class="form-control" id="akhir" name="akhir" value="{{$transaksi->akhir}}">
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$transaksi->keterangan}}">
        </div>
        <div class="mb-3">
            <label for="biaya" class="form-label">Biaya</label>
            <input type="text" class="form-control" id="biaya" name="biaya" value="{{$transaksi->biaya}}">
        </div>
        <div class="mb-3">
            <label for="kendaraan" class="form-label">Pemilik Kendaraan</label>
            <select name="kendaraan_id" id="kendaraan" class="form-control" value="{{$transaksi->kendaraan_id}}">
                @foreach ($list_kendaraan as $kendaraan)
                    <option value="{{ $kendaraan->id }}">{{ $kendaraan->pemilik }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="area_palkir" class="form-label"> area palkir</label>
            <select name="area_palkir_id" id="area_palkir" class="form-control" value="{{$transaksi->area_palkir}}">
                @foreach ($list_area_palkir as $area_palkir)
                    <option value="{{ $area_palkir->id }}">{{ $area_palkir->nama }}</option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>