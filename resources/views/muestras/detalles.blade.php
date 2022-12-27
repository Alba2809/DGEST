<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Muestras registradas') }}
        </h2>
    </x-slot>

    @if (session('success'))
        <div class="py-none">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-clip-border p-6 bg-green-600 border-4 border-green-300 border-dashed mt-5">
                    <strong>{{session('success')}}</strong>
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
                        @if ($dias_transcurridos >= 0)
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
                        <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800">
                            <div class="relative rounded-xl overflow-auto">
                                <div class="shadow-sm overflow-hidden my-8">
                                    <table class="border-collapse table-auto w-full text-sm">
                                        <thead>
                                            <tr>
                                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Egresado</th>
                                                <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left"></th>
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
                                                            <a href="{{route('jefe.muestra.show', $egresado)}}" class="bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5">Ver Formulario</a>
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
            </div>
        </div>
    </div>
</x-app-layout>
