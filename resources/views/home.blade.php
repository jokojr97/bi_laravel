@php
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
@endphp
@extends ('layouts/mainadmin')

@section('title', 'Home - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-8">
            <a href="/admin/post/create" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add New Post</a>
            <h4><strong>Post</strong></h4>
            <hr class="mt-3">
            <div class="table table-responsive">
              <table class="table table-striped"> 
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th style="width: 20%">Title</th>
                    <th style="width: 50%">Content</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th style="width: 20%">Action</th>
                  </tr> 
                </thead>
                <tbody>
                  @foreach ($post as $result => $hasil)              
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $hasil->title }}</td>
                    <td><?= limit_words($hasil->content, 25); ?></td>
                    <td class="text-center">{{ $hasil->typepost->name }}</td>
                    <td class="text-center">{{ $hasil->category->name }}</td>
                    <td class="text-center">
                      <a href="{{ route('post.show', $hasil->slug) }}" class="btn btn-info btn-sm mt-2" target="_blank"><i class="fas fa-eye"></i></a>
                      <a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-success btn-sm mt-2">Edit</a>
                      <a class="btn btn-danger btn-sm mt-2" href="#" onclick="deletefunc()"> Delete</a>
                      <form method="POST" action="{{ route('post.destroy', $hasil->id) }}" id="del-form" style="display: none;">
                        @csrf
                        @method('delete')Delete</>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>              
            </div>
          </div>            
          <div class="col-md-4">
            <a href="/admin/type/create" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add New Post Type</a>
            <h4><strong>Post Type</strong></h4>
            <hr class="mt-3">

            <table class="table table-striped"> 
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Type</th>
                  <th>Slug</th>
                  <th>Action</th>
                </tr> 
              </thead>
              <tbody>
                @foreach ($type as $result => $hasil)              
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $hasil->name }}</td>
                  <td>{{ $hasil->slug }}</td>
                  <td class="text-center">
                    <form method="POST" action="{{ route('type.destroy', $hasil->id) }}">
                      @csrf
                      @method('delete')
                      <a href="{{ route('type.edit', $hasil->id) }}" class="btn btn-primary  mt-2 btn-sm">Edit</a>
                      <button type="submit" class="btn btn-danger btn-sm mt-2">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            
            <a href="/admin/category/create" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add New Category</a>
            <h4><strong>Category</strong></h4>
            <hr class="mt-3">
            <table class="table table-striped"> 
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Category</th>
                  <th>Slug</th>
                  <th>Action</th>
                </tr> 
              </thead>
              <tbody>
                @foreach ($category as $result => $hasil)              
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $hasil->name }}</td>
                  <td>{{ $hasil->slug }}</td>
                  <td class="text-center">
                    <form method="POST" action="{{ route('category.destroy', $hasil->id) }}">
                      @csrf
                      @method('delete')
                      <a href="{{ route('category.edit', $hasil->id) }}" class="btn btn-primary btn-sm mt-2">Edit</a>
                      <button type="submit" class="btn btn-danger btn-sm mt-1">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>            
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
