                                                                                                                                                                                                                                                                                                                                                                                     @extends('layouts.principal')

@section('style')

    <style>
        .cargando{
            font-size: 16px;
        }
    </style>

@endsection

@section('content')
<!---->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{route("home")}}">Inicio</a></li>
        <li class="active">Registro</li>
    </ol>

</div>
<!---->
@endsection

@section('scripts')

    <script>

        $(function(){

        });

    </script>



@endsection