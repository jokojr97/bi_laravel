@extends ('layouts/mainadmin')

@section('title', 'Contact us - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">All Message</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Message</li>
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
        <!-- <a href="/admin/category/create" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Category</a> -->
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
                  <th>name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Subject</th>
                  <th style="width: 30%">Message</th>
                  <th>Action</th>
                </tr> 
              </thead>
              <tbody>
                @foreach ($contact as $result => $hasil)              
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $hasil->name }}</td>
                  <td>{{ $hasil->email }}</td>
                  <td>{{ $hasil->address }}</td>
                  <td>{{ $hasil->subject }}</td>
                  <td>{{ $hasil->message }}</td>
                  <td class="text-center">
                    <form method="POST" action="{{ route('admin.contact.destroy', $hasil->id) }}">
                      @csrf
                      @method('delete')
                      <!-- <a href="{{ route('admin.contact.show', $hasil->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a> -->
                      <a href="{{ route('admin.contact.show', $hasil->id) }}" class="btn btn-success btn-sm">Answer</a>
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $contact->links() }}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
