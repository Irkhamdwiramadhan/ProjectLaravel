<x-layout>
    <form method="POST" action="{{ route('jenis.store') }}">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis</label>
            <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $jenis->jenis}}">
        </div>
        <a href="{{ route('jenis.show') }}" class="btn btn-success mr-2">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>