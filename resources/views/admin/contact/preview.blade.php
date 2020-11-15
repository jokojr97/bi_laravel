@extends ('layouts/mainadmin')

@section('title', 'Preview Massage - Bojonegoro Institute')
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
            <h1 class="m-0 text-dark">Preview Message</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active"><a href="/admin/contact">Message</a></li>
              <li class="breadcrumb-item active">Preview</li>
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
        <div class="row">
          <div class="col-md-8">
              <div class="media p-2 border">
                <img src="/img/user-icon.png" class="mr-2" width="80" alt="...">
                <div class="media-body">
                  <h5 class="mt-0">{{ $contact->name}} - <span>({{ $contact->email }})</span></h5>
                  <p style="margin-bottom: 0px"><b>Subject: </b>{{$contact->subject}}</p>
                  {{$contact->message}}
                </div>
              </div><!-- end media -->
              <br>
              <div class="border p-2 mt-1">
                <form method="POST" action="/admin/contact">
                  @csrf                  
                  <div class="form-group">
                    <label for="answer">Answer: </label>
                    <textarea id="answer" placeholder="Answer Message ..." rows="8" class="form-control"></textarea>
                  </div>
                  <button type="submit" class="btn btn-success float-right">Answer</button>
                  <a href="/admin/contact" class="btn btn-secondary float-right mr-2">Cancel</a>
                  
                </form>
              </div>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection()
