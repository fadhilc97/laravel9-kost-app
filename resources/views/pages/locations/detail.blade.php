@extends('layout')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Detail Lokasi</h1>
</div>

<div class="row">
  <label for="name" class="col-sm-2 col-form-label">Nama Lokasi</label>
  <div class="col-sm-3">
    <input class="form-control-plaintext form-control-sm" readonly type="text" id="name" value="{{ old('name', $location->name) }}">
  </div>
</div>
<div class="mb-3 row gap-2">
  <div class="col-form-label">
    <a href="/locations/{{ $location->id }}/edit" class="btn btn-sm btn-warning col-sm-1">Ubah</a>
    <form action="/locations/{{ $location->id }}" class="d-inline" method="post">
      @csrf
      @method('delete')
      <button class="btn btn-sm btn-danger col-sm-1 text-decoration-none" onclick="return confirm('Apakah Anda yakin ingin melanjutkan ?');">Hapus</button>
    </form>
  </div>
</div>
@endsection