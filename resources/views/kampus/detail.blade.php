<x-layout>
    <x-slot name="title">Detail jenis</x-slot>
    <x-slot name="card_title"></x-slot>
    <table class="table table-striped table-sm">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>latitude</th>
            <th>Longitude</th>
            <th>Dibuat Pada Tanggal</th>
            <th>Diupdate Pada Tanggal</th>
        </tr>
        <tr>
            <td>{{ $kampus->id}}</td>
            <td>{{ $kampus->nama }}</td>
            <td>{{ $kampus->alamat }}</td>
            <td>{{ $kampus->latitude }}</td>
            <td>{{ $kampus->longitude }}</td>
            <td>{{ $kampus->created_at}}</td>
            <td>{{ $kampus->updated_at}}</td>
        </tr>

    </table>
    <div>
        <a href="{{ route('kampus.show') }}" class="btn btn-success mt-2">Kembali</a>
    </div>
</x-layout>