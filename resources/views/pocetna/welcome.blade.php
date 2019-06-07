<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tabela uzoraka</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="row">
                <a href="/create"><button>Dodaj uzorak</button></a>
            </div>

            <div class="row">
                <div class="table-responsive">
                    <table border="1" id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col" style="width: 180px">Naziv<i style="margin-left: 10px" class="fas fa-arrows-alt-v"></i></th>
                            <th scope="col" style="width: 220px">Vreme prikupljanja<i style="margin-left: 10px" class="fas fa-arrows-alt-v"></i></th>
                            <th scope="col" style="width: 220px">Sirina<i style="margin-left: 10px" class="fas fa-arrows-alt-v"></i></th>
                            <th scope="col" style="width: 220px">Visina<i style="margin-left: 10px" class="fas fa-arrows-alt-v"></i></th>
                            <th scope="col" style="width: 220px">Status<i style="margin-left: 10px" class="fas fa-arrows-alt-v"></i></th>
                            <th scope="col">Izmeni</th>
                            <th scope="col">Obrisi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($uzorci as $uzorak)
{{--                            @if($uzorak->vreme_prikupljanja < 2)--}}
                                <tr>
                                    <td>{{$uzorak->naziv}}</td>
                                    <td>{{$uzorak->vreme_prikupljanja}}</td>
                                    <td>{{$uzorak->sirina}}</td>
                                    <td>{{$uzorak->visina}}</td>
                                    <td>{{$uzorak->status}}</td>
                                    <td><a href="/edit/{{$uzorak->id}}"><button>Izmeni</button></a></td>
                                    <td>
                                        <form method="post" action="/destroy/{{$uzorak->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Obrisi</button>
                                        </form>

                                    </td>
                                </tr>
{{--                            @endif--}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
