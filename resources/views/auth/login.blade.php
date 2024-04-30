<x-layout>

  <x-head titolo="Accedi"></x-head>


    <div class="container my-5 ">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6">
                <form
                class="p-3 shadow rounded-5 bg-secondary"
                method="POST"
                action="{{route('login')}}"
                >
                @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email Utente</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                  </form>
            </div>
        </div>
    </div>

</x-layout>