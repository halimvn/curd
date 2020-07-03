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
     <th>Judul Pertanyaan</th>
      <th>Isi Pertanyaan</th>

      <th>Jawaban</th>
      <th>Tanggal Update</th>
      <th>Tanggal Dibuat</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($answer as $item => $quest)
    
      <tr>
        <td>{{$item + 1}}</td>
        <td>{{$quest->judulpertanyaan}}</td>
        <td>{{$quest->isi}}</td>
        <td>{{$quest->isipertanyaan}}</td>
      <td>{{$quest->update}}</td>
      <td>{{$quest->create}}</td>
        
       
     
      </tr>    
    @endforeach

   
  </tbody>
</table>
<a href="/jawaban/create/{{$id}}" class="btn btn-primary">Tambah Jawaban</a>
</div></div></div></section>
@endsection
  <!-- /.content-wrapper -->
  