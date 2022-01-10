@if(session("mensaje") && session("tipo"))
    <br>
    @if (session("tipo") == "success")
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <span class='font-medium'>Ingresa a la web:</span> academy.sednaeditorial.com <br>
            <span class='font-medium'>Usuario: </span> {{session('mensaje')->user}} <br>
            <span class='font-medium'>Contraseña: </span> {{ session('mensaje')->code }}
        </div>
    @elseif (session("tipo") == "caution")
        <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
            {{session('mensaje')}}
        </div>
    @else
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            {{session('mensaje')}}
        </div>
    @endif
@endif


