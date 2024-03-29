<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </head>
    <body>
        @if(session('mensagem'))
            <div class="alert alert-info m-3 text-center">
                <p>{{ session('mensagem') }}</p>
            </div>

        @elseif($errors->any())
            <div class="alert alert-danger m-3 text-center">
                @foreach($errors->all() as $erro)
                    <p>{{ $erro }}</p>
                @endforeach
                
            </div>

        @endif
        
        <main class="container-fluid">
            @yield('conteudo-principal')
        </main>

        @yield("scripts")
    </body>
</html>
