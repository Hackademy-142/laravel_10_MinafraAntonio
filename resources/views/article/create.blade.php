<x-layout>

    <x-head titolo="Crea un articolo"></x-head>

    <x-display-message></x-display-message>
    <div class="container">
        <div class="row justify-content-center my-5 ">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <form class=" p-3 shadow rounded bg-secondary-subtle" enctype="multipart/form-data" method="POST" action="{{route('article.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo articolo</label>
                        <input name="title" value="" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body" type="text" class="form-control" id="body" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        @foreach ($tags as $tag)
                        <div class="form-check">
                            <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id}}" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$tag->name}}
                            </label>
                          </div>

                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn_custom">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>