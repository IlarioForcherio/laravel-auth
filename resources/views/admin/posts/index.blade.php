@extends('layouts.dashboard')
{{-- yield del contenuto in dashboard - main --}}
{{-- creare la connessione un web.php --}}
@section('content')
<div class="text-center" >
 <h1>Pagina dei post</h1>
</div>


@foreach ($posts as $item)

<div class="d-flex justify-content-center" >
   <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$item->title}}</h5>
      <p class="card-text">{{$item->id}}</p>
      <p class="card-text">{{$item->body}}</p>
      <a href="{{route('admin.posts.show', $item->id)}}" class="btn btn-primary">Visualizza Post</a>
    </div>
  </div>
</div>

@endforeach
{{-- link che fa funzionare il paginate --}}
<div class="d-flex justify-content-center">
    <div>
      {{ $posts->links() }}
    </div>

</div>


@endsection
