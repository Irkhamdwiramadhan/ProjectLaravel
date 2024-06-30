<x-layout>
    <x-slot name="title">Detail jenis</x-slot>
    <x-slot name="card_title"></x-slot>
    <table class="table table-striped table-sm">
        
        <tr>
            <th>No</th>
            <th>Jenis Kendaraan</th>
            <th>Dibuat Pada Tanggal</th>
            <th>Diupdate Pada Tanggal</th>
        </tr>
        <tr>
            <td>{{ $jenis->id}}</td>
            <td>{{ $jenis->jenis }}</td>
            <td>{{ $jenis->created_at}}</td>
            <td>{{ $jenis->updated_at}}</td>
        </tr>
        
    </table>
    <div>
        <a href="{{ route('jenis.show') }}" class="btn btn-success mt-2">Kembali</a>
    </div>
</x-layout>