<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enviar correos') }}
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
                        
                        <h1 class="text-lg">Carrera: {{$jefe->carrera}}</h1>
                        <h1 class="text-lg mb-10">Jefe de Carrera: {{$jefe->nombre}}</h1>
                        
                        {!! Form::open(['route' => ['jefe.correo.aleatorios'], 'method' => 'post']) !!}
                            <label>
                                Seleccionar año de egreso:
                                {!! Form::select('AnioEgreso', $listaAnio, $anioSelec, ['id' => 'AnioEgreso']) !!}
                            </label>
                            <br><br>
                            <label>
                                Alumnos Egresados:
                                @if (session('total'))
                                    {!! Form::number('TotalEgresados', session('total'), ['disabled','style' => 'width: 60px;', 'id' => 'TotalEgresados']) !!}
                                @else
                                    {!! Form::number('TotalEgresados', 0, ['disabled','style' => 'width: 60px;', 'id' => 'TotalEgresados']) !!}
                                @endif
                            </label> <br><br>
                            <label>
                                Seleccione el porcentaje de muestra deseado:
                                {!! Form::select('PorcentajeM', $listaPorc, $porcSelec, ['id' => 'PorcentajeM']) !!}
                            </label>
                            <br>
                            {!! Form::submit('Generar usuarios aleatorios', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 mb-5 ml-5']) !!}
                            
                        {!! Form::close() !!}
                    </div>
                    <div class="mt-4 -mb-3 basis-1/4">
                        <div class="bg-slate-50 rounded-xl dark:bg-slate-800">
                            <div class="rounded-xl overflow-auto">
                                <div class="shadow-sm overflow-y my-8">
                                    {!! Form::open(['route' => ['jefe.correo.enviar'], 'method' => 'post']) !!}
                                        <div class="overflow-auto h-72 relative max-w-sm mx-auto bg-white dark:bg-slate-800 dark:highlight-white/5 rounded-xl">
                                            <table class="border-collapse table-auto w-full text-sm">
                                                <thead>
                                                    <tr>
                                                        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">No.</th>
                                                        <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-center">Egresado</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="dark:bg-slate-800">
                                                    @if (session('egresados'))
                                                        @foreach (session('egresados') as $egresado)
                                                            <tr>
                                                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                                    {{$loop->index + 1}}
                                                                </td>
                                                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                                                    <input name="NoControl[]" class="border-none dark:bg-slate-800 text-center" type="text" readonly="readonly" value={{$egresado->no_control_egresado}}>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        {!! Form::hidden('Anio', session('anioSelec'), ['id' => 'Anio']) !!}
                                        {!! Form::hidden('Total', session('numEgresados'), ['id' => 'total']) !!}
                                        {!! Form::hidden('Porcentaje', session('porcSelec'), ['id' => 'Porcentaje']) !!}
                                        <div class="grid grid-cols-3 gap-4 place-items-center flex felx-col">
                                            <div></div>
                                            <div>
                                                @if (session('egresados'))
                                                    @if(count(session('egresados')))
                                                        {!! Form::submit('Confirmar y Enviar Correos', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                                    @else
                                                        <br><br>
                                                    @endif
                                                @else
                                                    <br><br>
                                                @endif
                                            </div>
                                            <div></div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
