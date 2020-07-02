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
     
      <th>Isi</th>
      <th>Pertanyaan</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($answer as $item => $quest)
      <tr>
        <td>{{$item + 1}}</td>
        
        <td>{{$quest->isi}}</td>
      <td>{{$quest->judulpertanyaan}}</td>
      </tr>    
    @endforeach

   
  </tbody>
</table>
<a href="/jawaban/create/{{$id}}" class="btn btn-primary">Tambah Jawaban</a>
</div></div></div></section>
@endsection
  <!-- /.content-wrapper -->
  