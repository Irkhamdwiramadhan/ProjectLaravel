<x-layout>
    <x-slot name="title">Detail kendaraan</x-slot>
    <x-slot name="card_title"></x-slot>
    <table class="table table-striped table-sm">

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
            <th>Dibuat Pada Tanggal</th>
            <th>Diupdate Pada Tanggal</th>
        </tr>
        <tr>
            <td>{{ $kendaraan->id }}</td>
            <td>{{ $kendaraan->merk }}</td>
            <td>{{ $kendaraan->pemilik }}</td>
            <td>{{ $kendaraan->nopol }}</td>
            <td>{{ $kendaraan->thn_beli}}</td>
            <td>{{ $kendaraan->deskripsi }}</td>
            <td>{{ $kendaraan->jenis_kendaraan->jenis }}</td>
            <td>{{ $kendaraan->kapasitas_kursi }}</td>
            <td>{{ $kendaraan->rating }}</td>
            <td>{{ $kendaraan->created_at}}</td>
            <td>{{ $kendaraan->updated_at}}</td>
        </tr>

    </table>
    <div>
        <a href="{{ route('kendaraan.show') }}" class="btn btn-success mt-2">Kembali</a>
    </div>
</x-layout>