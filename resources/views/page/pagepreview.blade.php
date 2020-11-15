@extends ('layouts/main')

@section('title'){{ $page->title }} - Bojonegoro Institute @endsection
@section('metadeskription'){{ $page->description }} - Bojonegoro Institute @endsection
@section('metakeywords'){{ $page ->keywords }} - Bojonegoro Institute @endsection

@section('container')
<?= $page->content ?>
@endsection()
