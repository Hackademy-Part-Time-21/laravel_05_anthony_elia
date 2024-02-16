<x-main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <h1 class= "text-center display-1">{{$title}}</h1>
            </div>
        </div>
    </div>
</x-main>
