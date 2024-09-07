@extends('template')
@section('content')
    

<!-- content -->
<div class="container-fluid py-4">
<h2>Whatsapp Notifikasi</h2>

<div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
  <span class="mask  bg-gradient-primary  opacity-6"></span>
</div>
<br></br>
<form action="{{ route('send.whatsapp.notification') }}" method="POST">
  @csrf
  <button type="submit" class="btn btn-primary">Kirim Notifikasi Group</button>
</form>


  </div>
  <!-- end content -->
  @endsection