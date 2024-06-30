<x-layout>
    <x-slot name="title">Detail kendaraan</x-slot>
    <x-slot name="card_title"></x-slot>
    <table class="table table-striped table-sm">

        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Mulai</th>
            <th>Akhir</th>
            <th>Keterangan</th>
            <th>Biaya</th>
            <th>Pemilik Kendaraan</th>
            <th>Area Palkir</th>
            <th>Dibuat Pada Tanggal</th>
            <th>Diupdate Pada Tanggal</th>
        </tr>
        <tr>
            <td>{{ $transaksi->id }}</td>

            <td>{{ $transaksi->tanggal }}</td>
            <td>{{ $transaksi->mulai }}</td>
            <td>{{ $transaksi->akhir }}</td>
            <td>{{ $transaksi->keterangan}}</td>
            <td>{{ $transaksi->biaya }}</td>
            <td>{{ $transaksi->kendaraan->pemilik }}</td>
            <td>{{ $transaksi->area_palkir->nama }}</td>
            <td>{{ $transaksi->created_at}}</td>
            <td>{{ $transaksi->updated_at}}</td>
        </tr>

    </table>
    <div>
        <a href="{{ route('transaksi.show') }}" class="btn btn-success mt-2">Kembali</a>
    </div>
</x-layout>