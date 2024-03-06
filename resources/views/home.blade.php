@extends("layout")

@section("page-content")
    <div class="row">
        <div class="col-6 mx-auto">
            <h1>{{$title}}</h1>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Ime predmeta</th>
                        <th>Ime profesora</th>
                        <th>Ocena predmeta</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($allOcene as $ocena)
                            <tr>
                                <td>{{$ocena->imePredmeta}}</td>
                                <td>{{$ocena->imeProfesora}}</td>
                                <td>{{$ocena->ocena}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


        </div>
    </div>




@endsection
