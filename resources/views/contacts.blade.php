@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<div class="mb-3">
  <label for="inputname" class="form-label">Nama</label>
  <input type="text" class="form-control" id="inputname" placeholder="Nama Anda">
</div>
<div class="mb-3">
  <label for="inputemail" class="form-label">Email</label>
  <input type="email" class="form-control" id="inputemail" placeholder="Email Anda">
</div>
<div class="mb-3">
  <label for="floatingtextarea" class="form-label">Pesan</label>
  <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingtextarea" style="height: 100px;"></textarea>
</div>

@endsection