@extends('template.admin')
@section('content')



  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

  <!-- Content Wrapper. Contains page content -->
          <form role="form" action="/pertanyaan/{{$item->idpertanyaan}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Judul</label>
      <input type="text" class="form-control" value="{{$item->judul}}" id="exampleInputEmail1" name="judul" placeholder="Judul">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Isi</label>
        <input type="text" class="form-control" value="{{$item->isi}}" id="exampleInputEmail1" name="isi" placeholder="Judul">
      </div>
      
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div></div></div></section>
@endsection
  <!-- /.content-wrapper -->
  