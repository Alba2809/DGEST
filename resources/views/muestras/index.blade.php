<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Muestras registradas') }}
        </h2>
    </x-slot>

    @if (session('success'))
        <div class="bg-clip-border p-6 bg-green-600 border-4 border-green-300 border-dashed mt-10">
            <strong>{{session('success')}}</strong>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        
                        <h1 class="text-lg">Carrera: {{$jefe->carrera}}</h1>
                        <h1 class="text-lg mb-10">Jefe de Carrera: {{$jefe->nombre}}</h1>
                        
                    </div>
                    <div class="mt-4 -mb-3">
                        <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800">
                            <div class="relative rounded-xl overflow-auto">
                                <div class="shadow-sm overflow-hidden my-8">
                                    <table class="border-collapse table-auto w-full text-sm">
                                        <thead>
                                            <tr>
                                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">ID</th>
                                                <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Año</th>
                                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Porcentaje seleccionado</th>
                                                <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Total de egresados</th>
                                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Fecha de registro</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="dark:bg-slate-800">
                                            @if ($muestras)
                                                @foreach ($muestras as $muestra)
                                                    <tr>
                                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                            {{$muestra->id}}
                                                        </td>
                                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                                            {{$muestra->anio}}
                                                        </td>
                                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                            {{$muestra->porc_selec}}
                                                        </td>
                                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                                            {{$muestra->total_selec}}
                                                        </td>
                                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                            {{$muestra->created_at}}
                                                        </td>
                                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                                            <a href="#" class="bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5">Mostrar Detalles</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
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
