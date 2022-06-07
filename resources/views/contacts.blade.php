@extends('layouts.main')

@section('container')
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}
  <div class="title-top mb-5">
      <h2 class="fw-bold">Contact Us</h2>
  </div>
  <div class="mb-3">
    <label for="inputname" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputname" placeholder="Nama Anda" name="nama">
  </div>
  <div class="mb-3">
    <label for="inputemail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputemail" placeholder="Email Anda" name="email">
  </div>
  <div class="mb-3">
    <label for="floatingtextarea" class="form-label">Pesan</label>
    <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingtextarea" style="height: 100px;" name="pesan"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>

@endsection