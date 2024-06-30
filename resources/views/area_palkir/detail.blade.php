<x-layout>
    <x-slot name="title">Detail Area Palkir</x-slot>
    <x-slot name="card_title"></x-slot>
    <table class="table table-striped table-sm">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kapasitas</th>
            <th>Keterangan</th>
            <th>Kampus</th>
            <th>Dibuat Pada Tanggal</th>
            <th>Diupdate Pada Tanggal</th>
        </tr>
        <tr>
            <td>{{ $area_palkir->id }}</td>
            <td>{{ $area_palkir->nama }}</td>
            <td>{{ $area_palkir->kapasitas }}</td>
            <td>{{ $area_palkir->keterangan }}</td>
            <td>{{ $area_palkir->kampus->nama}}</td>
            <td>{{ $area_palkir->created_at}}</td>
            <td>{{ $area_palkir->updated_at}}</td>
        </tr>

    </table>
    <div>
        <a href="{{ route('area_palkir.show') }}" class="btn btn-success mt-2">Kembali</a>
    </div>
</x-layout>