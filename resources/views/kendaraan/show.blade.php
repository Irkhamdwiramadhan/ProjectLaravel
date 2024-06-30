<x-layout>
    <x-slot name="title">Data kendaraan</x-slot>
    <x-slot name="card_title">Daftar kendaraan</x-slot>
    <div>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Jenis</a>
    </div>
    <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Merk</th>
                <th>Pemilik</th>
                <th>Nopol</th>
                <th>Tahun Beli</th>
                <th>Deskripsi</th>
                <th>Jenis kendaraan</th>
                <th>Kapasitas Kursi</th>
                <th>Rating</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_kendaraan as $kendaraan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kendaraan->merk }}</td>
                <td>{{ $kendaraan->pemilik }}</td>
                <td>{{ $kendaraan->nopol }}</td>
                <td>{{ $kendaraan->thn_beli}}</td>
                <td>{{ $kendaraan->deskripsi }}</td>
                <td>{{ $kendaraan->jenis_kendaraan->jenis }}</td>
                <td>{{ $kendaraan->kapasitas_kursi }}</td>
                <td>{{ $kendaraan->rating }}</td>
                <td class="text center">
                    <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="post">
                        <a href="{{route('kendaraan.detail', $kendaraan->id)}}" class="btn btn-transparant">
                            <i class="fas fa-eye text-info"></i></a>
                        <a href="{{route('kendaraan.edit', $kendaraan->id)}}" class="btn btn-transparant">
                            <i class="fas fa-edit text-warning"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-transparant">
                            <i class="fas fa-trash text-danger"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>