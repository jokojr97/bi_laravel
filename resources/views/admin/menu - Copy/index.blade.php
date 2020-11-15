@extends ('layouts/mainadmin')

@section('title', 'Menu - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">All Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu</li>
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
        <a href="/admin/menu/create" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Menu</a>
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
                  <th>Menu</th>
                  <th>Slug</th>
                  <th>Url</th>
                  <th>Action</th>
                </tr> 
              </thead>
              <tbody>
                @foreach ($menu as $result => $hasil)              
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $hasil->name }}</td>
                  <td>{{ $hasil->slug }}</td>
                  <td>{{ $hasil->url }}</td>
                  <td class="text-center">
                    <form method="POST" action="{{ route('admin.menu.destroy', $hasil->id) }}">
                      @csrf
                      @method('delete')
                      <a href="/admin/submenu/{{ $hasil->id }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> &nbsp; sub menu</a>
                      <a href="{{ route('admin.menu.edit', $hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $menu->links() }}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
