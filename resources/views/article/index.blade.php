<x-layout>

    <x-head titolo="Articoli"></x-head>

    <div class="container my-3">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4">
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        {{-- if con il controllo dei tags --}}
                        @if($article->tags->isNotEmpty()){{-- questo metodo mi serve perche le collezione anche se sono vuote ritornano valore true quindi un if avrebbe un problema --}}
                        <div class="mb-3 ">
                            @foreach($article->tags as $tag)
                            <span class="badge text-bg-primary">#{{$tag->name}}</span>
                            @endforeach
                        </div>
                        @endif

                        <a href="{{route('article.show', compact('article'))}}" class="btn p-1 m-1 btn_custom">Vai all'articolo</a>
                        <a href="{{route('article.edit', compact('article'))}}" class="btn p-1 m-1 btn-warning">Modifica articolo</a>
                        <form action="{{ route('article.destroy', compact('article')) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#exampleModal{{$article->id}}">
                                Elimina articolo
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$article->id}}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h5>Sei sicuro di voler eliminare l'articolo?</h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Sono sicuro</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>