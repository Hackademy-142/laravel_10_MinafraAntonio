<x-layout>

    <x-head titolo='Diventa un locatore'></x-head>
    <x-display-message/>

    <div class="container my-5 ">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6">
                <form
                class="p-3 shadow rounded-5 bg-secondary"
                method="POST"
                action="{{route('becomeLessorSubmit')}}"
                >
                @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email Utente</label>
                      <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="nameInput" class="form-label">Nome Utente</label>
                      <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" id="nameInput" >
                    </div>
                    <div class="mb-3">
                      <label for="textMessage" class="form-label">Perchè vuoi diventare un locatore?</label>
                      <textarea name="textMessage" class="form-control " id="textMessage" cols="30" rows="10"></textarea>

                    </div>
                    <button type="submit" class="btn btn-primary">Invia richiesta</button>
                  </form>
            </div>
        </div>
    </div>

</x-layout>