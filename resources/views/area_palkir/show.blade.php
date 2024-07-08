<x-layout>
    <x-slot name="title">Data area Palkir</x-slot>
    <x-slot name="card_title">Daftar kendaraan</x-slot>
    <div>
    <a href="{{ route('area_palkir.create') }}" class="btn btn-primary">Tambah area palkir</a>
</div>
    <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kapasitas</th>
                <th>Keterangan</th>
                <th>Kampus</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach($list_area_palkir as $area_palkir)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $area_palkir->nama }}</td>
                <td>{{ $area_palkir->kapasitas }}</td>
                <td>{{ $area_palkir->keterangan }}</td>
                <td>{{ $area_palkir->kampus->nama}}</td>
                <td class="text center">
                    <form action="{{ route('area_palkir.destroy', $area_palkir->id) }}" method="post">
                        <a href="{{route('area_palkir.detail', $area_palkir->id)}}" class="btn btn-transparant">
                            <i class="fas fa-eye text-info"></i></a>
                        <a href="{{route('area_palkir.edit', $area_palkir->id)}}" class="btn btn-transparant">
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