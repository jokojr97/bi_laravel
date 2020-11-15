@extends ('layouts/mainadmin')

@section('title', 'Pages - Bojonegoro Institute')
@section('metadeskription', '')
@section('metakeywords', '')

@section('container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Pages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pages</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <hr>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <a href="/admin/page/create" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Page</a>
        <!-- Small boxes (Stat box) -->
        <div class="row mt-3">
          <div class="col">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
            @endif
            @if(session('failed'))
            <div class="alert alert-danger" role="alert">
              {{ session('failed') }}
            </div>
            @endif
            <table class="table table-striped"> 
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th style="width: 20%">Action</th>
                </tr> 
              </thead>
              <tbody>
                @foreach ($pages as $result => $hasil)              
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $hasil->name }}</td>
                  <td>{{ $hasil->title }}</td>
                  <td>{{ $hasil->description }}</td>
                  <td class="text-center">
                    <form method="POST" action="{{ route('admin.page.destroy', $hasil->id) }}">
                      @csrf
                      @method('delete')
                      <a href="{{ route('admin.page.show', $hasil->id) }}" class="btn btn-info btn-sm" target="_blank"><i class="fas fa-eye"></i></a>
                      <a href="{{ route('admin.page.edit', $hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $pages->links() }}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
