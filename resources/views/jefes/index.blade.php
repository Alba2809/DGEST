<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enviar correos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-2 gap-2">
                    <div class="basis-1/2">
                        <h1 class="text-lg">Carrera: {{$jefe->carrera}}</h1>
                        <h1 class="text-lg mb-10">Jefe de Carrera: {{$jefe->nombre}}</h1>
                        {!! Form::open(['route' => ['jefe.correo.buscar'], 'method' => 'post']) !!}
                            <label>
                                Seleccionar año de egreso:
                                @if (session('anioSelec'))
                                    {!! Form::select('AnioEgreso', $listaAnio, session('anioSelec'), ['id' => 'AnioEgreso']) !!}
                                @else
                                    {!! Form::select('AnioEgreso', $listaAnio, $anioSelec, ['id' => 'AnioEgreso']) !!}
                                @endif
                            </label>
                            {!! Form::submit('Buscar Egresados', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 mb-5 ml-5']) !!}
                        {!! Form::close() !!}
    
                        {!! Form::open() !!}
                            <label>
                                Alumnos Egresados:
                                @if (session('total'))
                                    {!! Form::number('TotalEgresados', session('total'), ['disabled','style' => 'width: 60px;']) !!}
                                @else
                                    {!! Form::number('TotalEgresados', 0, ['disabled','style' => 'width: 60px;']) !!}
                                @endif
                            </label>
                        {!! Form::close() !!}
                        
                        {!! Form::open(['route' => ['jefe.correo.aleatorios'], 'method' => 'post']) !!}
                            <label>
                                Seleccione el porcentaje de muestra deseado:
                                {!! Form::select('PorcentajeM', $listaPorc, $porcSelec, ['id' => 'PorcentajeM']) !!}
                            </label>
                            <br>
                            {!! Form::submit('Generar usuarios aleatorios', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 mb-5 ml-5']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="mt-4 -mb-3 basis-1/4">
                        <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800">
                            <div class="relative rounded-xl overflow-auto">
                                <div class="shadow-sm overflow-hidden my-8">
                                    <table class="border-collapse table-auto w-80 text-sm">
                                        <thead>
                                            <tr>
                                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">ID</th>
                                                <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Egresado</th>
                                            </tr>
                                        </thead>
                                        <tbody class="dark:bg-slate-800">
                                            <tr>
                                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">1</td>
                                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">Malcolm Lockyer</td>
                                            </tr>
                                            <tr>
                                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">2</td>
                                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">The Eagles</td>
                                            </tr>
                                            <tr>
                                                <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-slate-500 dark:text-slate-400">3</td>
                                                <td class="border-b border-slate-200 dark:border-slate-600 p-4 text-slate-500 dark:text-slate-400">Earth, Wind, and Fire</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
