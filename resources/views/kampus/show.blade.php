<x-layout>
    <x-slot name="title">Data Kampus</x-slot>
    <x-slot name="card_title">Daftar Data Kampus</x-slot>
    <div>
        <a href="{{ route('kampus.create') }}" class="btn btn-primary">Tambah Kampus</a>
    </div>
    <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>latitude</th>
                <th>Longitude</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach($list_kampus as $kampus)
            <tr>
                <td>{{ $loop->iteration }}</td>     
                <td>{{ $kampus->nama }}</td>
                <td>{{ $kampus->alamat }}</td>
                <td>{{ $kampus->latitude }}</td>
                <td>{{ $kampus->longitude }}</td>
                <td class="text center">
                    <form action="{{ route('kampus.destroy', $kampus->id) }}" method="post">
                        <a href="{{route('kampus.detail', $kampus->id)}}" class="btn btn-transparant">
                            <i class="fas fa-eye text-info"></i></a>
                        <a href="{{route('kampus.edit', $kampus->id)}}" class="btn btn-transparant">
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