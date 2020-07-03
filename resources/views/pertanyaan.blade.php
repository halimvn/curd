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
      <th colspan="3">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($question as $item => $quest)
      <tr>
        <td>{{$item + 1}}</td>
        <td>{{$quest->judul}}</td>
        <td>{{$quest->isi}}</td>
      <td><a href="/pertanyaan/{{$quest->idpertanyaan}}" class="btn btn-primary">Lihat Jawaban</a>
     <a href="/pertanyaan/{{$quest->idpertanyaan}}/edit" class="btn btn-success">Edit Soal</a>
      <form style="display: inline;" action="pertanyaan/{{$quest->idpertanyaan}}/" method="POST">
        @csrf
        @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button></td>
      </form>
      </tr>    
    @endforeach
  </tbody>
</table>
</div></div></div></section>
@endsection
  <!-- /.content-wrapper -->
  