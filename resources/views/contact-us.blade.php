<x-main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 clas="text-center display-1">Lasciaci un messaggio</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{route('contact_us_submit')}}">
                  @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Nome Completo:</label>
                      <input name="name" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-floating">
                        <textarea name="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                        <label  for="floatingTextarea2">Lasciaci un messaggio</label>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-main>