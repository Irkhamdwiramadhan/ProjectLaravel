<x-layout>
    <x-slot name="title">Data transaksi</x-slot>
    <x-slot name="card_title">Daftar data transaksi kendaraan</x-slot>
    <div>
        <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a>
    </div>
    <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Mulai</th>
                <th>Akhir</th>
                <th>Keterangan</th>
                <th>Biaya</th>
                <th>Pemilik Kendaraan</th>
                <th>Area Palkir</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach($list_transaksi as $transaksi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaksi->tanggal }}</td>
                <td>{{ $transaksi->mulai }}</td>
                <td>{{ $transaksi->akhir }}</td>
                <td>{{ $transaksi->keterangan}}</td>
                <td>{{ $transaksi->biaya }}</td>
                <td>{{ $transaksi->kendaraan->pemilik }}</td>
                <td>{{ $transaksi->area_palkir->nama }}</td>
                <td class="text center">
                    <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="post">
                        <a href="{{route('transaksi.detail', $transaksi->id)}}" class="btn btn-transparant">
                            <i class="fas fa-eye text-info"></i></a>
                        <a href="{{route('transaksi.edit', $transaksi->id)}}" class="btn btn-transparant">
                            <i class="fas fa-edit text-warning"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-transparant">
                            <i class="fas fa-trash text-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if (session('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('pesan')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
</x-layout>