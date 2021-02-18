<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>
@extends ('layouts/mainadmin')

@section('title', 'Posts - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">All Posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
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
        <a href="/admin/post/create" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Post</a>
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
                  <th style="width: 20%">Title</th>
                  <th style="width: 50%">Content</th>
                  <th>Type</th>
                  <th>Category</th>
                  <th style="width: 20%">Action</th>
                </tr> 
              </thead>
              <tbody>
                @foreach ($posts as $result => $hasil)              
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $hasil->title }}</td>
                  <td><?= limit_words($hasil->content, 25); ?></td>
                  <td class="text-center">{{ $hasil->typepost->name }}</td>
                  <td class="text-center">{{ $hasil->category->name }}</td>
                  <td class="text-center">
                    <a href="{{ route('post.show', $hasil->slug) }}" class="btn btn-info btn-sm mt-2" target="_blank"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('admin.post.edit', $hasil->id) }}" class="btn btn-success btn-sm mt-2">Edit</a>
                    <a class="btn btn-danger btn-sm mt-2" href="#" onclick="deletefunc()"> Delete</a>
                    <form method="POST" action="{{ route('admin.post.destroy', $hasil->id) }}" id="del-form" style="display: none;">
                      @csrf
                      @method('delete')Delete</>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $posts->links() }}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
