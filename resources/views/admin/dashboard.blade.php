<x-layout>

    <x-head titolo="Richieste nuovi locatori"></x-head>

    <div class="container my-5 ">
        <div class="row">
            @foreach ($pendings as $user)
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                      {{$user -> name}}
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Email : {{$user -> email}}</h5>
                      <form action="{{route('acceptRequest', compact('user'))}}" method="post">
                        @csrf
                        <button class="btn btn-primary" type="submit">Accetta richiesta</button>
                      </form>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>