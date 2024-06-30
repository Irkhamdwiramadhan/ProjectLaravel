<x-layout>
    <x-slot name="title">jenis kendaraan</x-slot>
    <x-slot name="card_title">Daftar jenis kendaraan</x-slot>
    <div>
        <a href="{{ route('jenis.create') }}" class="btn btn-primary">Tambah Jenis</a>
    </div>

    <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Jenis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_jenis as $jenis)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $jenis->jenis }}</td>
                <td class="text center">
                    <form action="{{ route('jenis.destroy', $jenis->id) }}" method="post">
                        <a href="{{route('jenis.detail', $jenis->id)}}" class="btn btn-transparant">
                            <i class="fas fa-eye text-info"></i></a>
                        <a href="{{route('jenis.edit', $jenis->id)}}" class="btn btn-transparant">
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