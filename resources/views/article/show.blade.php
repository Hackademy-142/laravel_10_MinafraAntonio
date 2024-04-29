<x-layout>
    <x-head titolo="dettaglio articolo"></x-head>

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-5 text-center fw-bold">{{$article->title}}</h1>
                </div>
            </div>
            <div class="row py-5 align-items-center justify-content-center">
                <div class="col-12 col-md-6">
                    <p class="col-md-8 mx-5 fs-4">{{$article->body}}</p>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{Storage::url($article->img)}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center ">
                    <a href="{{route('index')}}">
                        <button class="btn btn_custom btn-lg" type="button">Ritorna agli articoli</button>
                    </a>
                </div>
            </div>
        </div>
    </div>




</x-layout>