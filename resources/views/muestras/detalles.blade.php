<script type="text/javascript">
    function imprimir(){
        window.print();
    }
</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Muestras registradas') }}
        </h2>
    </x-slot>

    @if (session('success'))
        <div class="py-none -mb-5 mt-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                    <span class="font-medium">{{session('success')}}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-2 gap-2">
                    <div class="basis-1/2">
                        <h1 class="text-xl">Datos Generales</h1>
                        <h1 class="text-base mt-5">Año: {{$muestra->anio}}</h1>
                        <h1 class="text-base mt-5">Egresados seleccionados: {{$muestra->total_selec}} de {{$total}}</h1>
                        <h1 class="text-base mt-5">Muestreo seleccionado: {{$muestra->porc_selec}} %</h1>
                        <h1 class="text-base mt-5">Muestreo obtenido: {{$porc_obtenido}} %</h1>
                        <h1 class="text-base mt-5">Muestreo faltante: {{$muestra->porc_selec - $porc_obtenido}} %</h1>
                        @if ($dias_transcurridos >= 60 && $muestra->porc_selec != $porc_obtenido)
                            <h1 class="text-base underline decoration-red-500 mt-5 mb-5">Días transcurridos: {{$dias_transcurridos}}</h1>
                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                <a href="{{route('jefe.muestra.edit', $muestra)}}" class="bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5">Reeseleccionar egresados</a>
                            </td>
                            <p class="mt-5">
                                Nota: Reeseleccionar nuevos egresados significa quitar los egresados que no han contestado y reemplararlos por otro, dependiendo del nuevo de egresados, los nuevos egresados seleccionados podrán ser los mismos que antes.
                            </p>
                        @else
                            <h1 class="text-base underline decoration-green-500 mt-5">Días transcurridos: {{$dias_transcurridos}}</h1>
                        @endif
                    </div>

                    <div class="mt-4 -mb-3 basis-1/4">
                        <div class="bg-slate-50 rounded-xl dark:bg-slate-800">
                            <div class="rounded-xl overflow-auto">
                                <div class="shadow-sm overflow-y my-8">
                                    <div class="overflow-auto h-72 relative max-w-sm mx-auto bg-white dark:bg-slate-800 dark:highlight-white/5 rounded-xl">
                                        <table class="border-collapse table-auto w-full text-sm">
                                            <thead>
                                                <tr>
                                                    <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Egresado</th>
                                                    <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody class="dark:bg-slate-800">
                                                @foreach ($egresados as $egresado)
                                                    <tr>
                                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                            {{$egresado->no_control}}
                                                        </td>
                                                        @if ($egresado->formulario)
                                                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                                                {{-- <a href="{{route('jefe.muestra.show', $egresado)}}" class="bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5">Ver Formulario</a> --}}
                                                                <div class="text-xl font-extrabold">
                                                                    <span class="bg-clip-text text-transparent bg-[#4ade80]">
                                                                        Finalizado
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        @endif
                                                        @if ($egresado->form_hecho && !$egresado->formulario)
                                                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                                                {{-- <a href="{{route('jefe.muestra.show', $egresado)}}" class="bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5">Ver Formulario</a> --}}
                                                                <div class="text-xl font-extrabold">
                                                                    <span class="bg-clip-text text-transparent bg-[#fde047]">
                                                                        En proceso
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        @endif
    
                                                        @if (!$egresado->form_hecho && !$egresado->formulario)
                                                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                                                {{-- <a href="{{route('jefe.muestra.show', $egresado)}}" class="bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5">Ver Formulario</a> --}}
                                                                <div class="text-xl font-extrabold">
                                                                    <span class="bg-clip-text text-transparent bg-[#ef4444]">
                                                                        Sin empezar
                                                                    </span>
                                                                </div>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-span-2 divide-y divide-dashed">
                        {{-- Se muestran las gráficas si se ha obtenido al menos una respuesta --}}
                        <div class="grid grid-cols-2 gap-2 p-4">
                            <div>
                                {!! $progreso_egresados->container() !!}
                            </div>
                            <div>
                                {!! $progreso_empresas->container() !!}
                            </div>
                        </div>
                        @if ($finalizados)
                        <div class="grid grid-cols-2 gap-2 p-4">
                            <span class="text-xl col-span-2">Apartado de egresados</span>
                            @foreach ($egresado_charts as $chart)
                                <div>
                                    {!! $chart->container() !!}
                                </div>
                                {!! $chart->script() !!}
                            @endforeach
                        </div>
                        @else
                            <h1 class="text-base underline">Sin respuestas de egresados.</h1>
                        @endif
                        
                        @if ($empresa_terminados)
                        <div class="grid grid-cols-2 gap-2 p-4">
                            <span class="text-xl col-span-2">Apartado de empresas</span>
                            @foreach ($empresa_charts as $chart)
                                <div>
                                    {!! $chart->container() !!}
                                </div>
                                {!! $chart->script() !!}
                            @endforeach
                        </div>
                        @else
                            <h1 class="text-base underline">Sin respuestas de empreesas.</h1>
                        @endif

                    </div>
                    <div class="col-span-2">
                        @if ($finalizados || $empresa_terminados)
                            <button onclick="imprimir()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Imprimir Datos
                            </button>
                        @endif

                    </div>

                </div>
                {!! $progreso_egresados->script() !!}
                {!! $progreso_empresas->script() !!}
            </div>
        </div>
    </div>
</x-app-layout>
