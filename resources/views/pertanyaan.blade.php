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
  <table class="table table-bordered">
  <thead>                  
    <tr>
      
      <th>No</th>
      <th>Judul</th>
      <th>Isi</th>
      <th>Jawaba</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($question as $item => $quest)
      <tr>
        <td>{{$item + 1}}</td>
        <td>{{$quest->judul}}</td>
        <td>{{$quest->isi}}</td>
      <td><a href="/jawaban/{{$quest->idpertanyaan}}" class="btn btn-primary">Lihat Jawaban</a></td>
      </tr>    
    @endforeach
  </tbody>
</table>
</div></div></div></section>
@endsection
  <!-- /.content-wrapper -->
  