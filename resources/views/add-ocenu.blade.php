@extends("layout")

@section("page-content")

    <div class="row">
        <div class="col-6 mx-auto">
            <h1 class="text-center">Dodaj novu ocenu</h1>
            <form action="/dodaj-novu-ocenu" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="imePredmeta">Ime predmeta</label>
                    <input type="text" class="form-control" name="imePredmeta">
                </div>
                <div class="form-group my-3">
                    <label for="imeProfesora">Ime profesora</label>
                    <input type="text" class="form-control" name="imeProfesora">
                </div>
                <div class="form-group my-3">
                    <label for="ocena">Ocena</label>
                    <input type="number" class="form-control" name="ocena">
                </div>


                <button class="btn btn-primary">Dodaj</button>

            </form>

            @if($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif
        </div>
    </div>




@endsection
