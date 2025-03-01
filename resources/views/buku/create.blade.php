@include('layout.header')
<h3>Buat Buku</h3>
<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Judul Buku</label>
        <input type="text" name="judul" id="" placeholder="Masukkan Judul Buku">
    </div>
    <div class="form-group">
        <label for="">Pengarang</label>
        <input type="text" name="pengarang" id="" placeholder="Masukkan Nama Pengarang">
    </div>
    <div class="form-group">
        <label for="">Tahun Terbit</label>
        <input type="text" name="tahun_terbit" id="" placeholder="Masukkan Tahun Terbit">
    </div>
    <div class="form-group">
        <label for="">Penerbit</label>
        <select name="penerbit_id" id="">
            @foreach ($penerbit as $p)
            <option value="{{ $p->id }}">{{ $p->nama_penerbit}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Kategori</label>
        <select name="kategori_id" id="">
            @foreach ($kategori as $k)
            <option value="{{ $k->id }}">{{ $k->nama_kategori}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>


@include('layout.footer')
