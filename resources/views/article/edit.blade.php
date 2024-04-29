<x-layout>

    <x-head  titolo="modica articolo"></x-head>

        {{-- condizione per il prondotto creato con successo --}}
        <x-display-message/>

        {{-- CODICE PER MOSTRARE L ERRORE DI NON AVER SCRITTO NEL CAMPO DEL FORM --}}
        <x-display-errors/>

        {{-- FORM DEGLI ARTICOLI --}}
    <div class="container">
        <div class="row justify-content-center my-5 ">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <form class=" p-3 shadow rounded bg-secondary-subtle" enctype="multipart/form-data"
                method="POST"
                action="{{route('article.update', compact('article'))}}">
                    @method('PUT') {{-- override del metodo del form post --}}
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo articolo</label>
                        <input name="title" value="{{$article->title}}" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body" type="text" class="form-control" id="body" cols="30" rows="10">{{$article->body}}</textarea>
                    </div>
                    <div class="mb-3">
                        <span class="form-label">Immagine attuale:</span>
                        <img src="{{Storage::url($article->img)}}" alt="{{$article->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn_custom">Modifica articolo</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>