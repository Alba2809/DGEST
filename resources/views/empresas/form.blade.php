<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0; 
    }
</style>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
<script type="text/javascript">
    
    function otraTexto() {
        if (document.getElementById('OtraActividad').checked) {
            document.getElementById('ActividadTexto').classList.remove("hidden");
        }
        else document.getElementById('ActividadTexto').classList.add("hidden");

    }

    function OtroMando(){
        
        if(document.getElementById('mando1').checked){
            document.getElementById('mandootra1').removeAttribute('disabled');
        }
        else document.getElementById('mandootra1').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando2').checked){
            document.getElementById('mandootra2').removeAttribute('disabled');
        }
        else document.getElementById('mandootra2').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando3').checked){
            document.getElementById('mandootra3').removeAttribute('disabled');
        }
        else document.getElementById('mandootra3').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando4').checked){
            document.getElementById('mandootra4').removeAttribute('disabled');
        }
        else document.getElementById('mandootra4').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando5').checked){
            document.getElementById('mandootra5').removeAttribute('disabled');
        }
        else document.getElementById('mandootra5').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando6').checked){
            document.getElementById('mandootra6').removeAttribute('disabled');
        }
        else document.getElementById('mandootra6').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando7').checked){
            document.getElementById('mandootra7').removeAttribute('disabled');
        }
        else document.getElementById('mandootra7').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando8').checked){
            document.getElementById('mandootra8').removeAttribute('disabled');
        }
        else document.getElementById('mandootra8').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando9').checked){
            document.getElementById('mandootra9').removeAttribute('disabled');
        }
        else document.getElementById('mandootra9').setAttribute("disabled", "");
        
        
        if(document.getElementById('mando10').checked){
            document.getElementById('mandootra10').removeAttribute('disabled');
        }
        else document.getElementById('mandootra10').setAttribute("disabled", "");
        
    }

</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulario de Empresa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        @if ($modulo == 'd')
                            <h1 class="text-xl">
                                Ya ha contestado el formulario, le agradecemos su tiempo empleado.
                            </h1>
                        @else
                            @switch($modulo)
                                @case('a')
                                    <div class="divide-y-4 divide-slate-400/25">
                                        <div class="mb-5">
                                            <h1 class="text-2xl">Instrucciones</h1>
                                            <p class="text-lg">
                                                Por favor lea cuidadosamente y conteste este cuestionario de la siguiente manera, seg??n sea el caso: <br>
                                                <br>
                                                <ol class="list-decimal ml-10 text-lg">
                                                    <li>
                                                        En el caso de preguntas cerradas, seleccione la que considere apropiada.
                                                    </li>
                                                    <li>
                                                        En las preguntas de valoraci??n se utiliza la escala del 1 al 5 en la que 1 es ???muy malo??? y 5 es ???muy bueno???.
                                                    </li>
                                                    <li>
                                                        En los casos de preguntas abiertas dejamos un campo de texto para que usted escriba con may??sculas una respuesta.
                                                    </li>
                                                    <li>
                                                        Al final anexamos un inciso para comentarios y sugerencias, le agradeceremos anote ah?? lo que considere prudente para mejorar nuestro sistema educativo o bien los temas que, a su juicio, omitimos en el cuestionario.
                                                    </li>
                                                    <li>
                                                        Cuando de clic en Siguiente se guardar??n los datos ingresos del modulo en que se encuentre, y no podr?? volver a ingresarlos, verifique los datos que ingres?? antes de dar clic en Siguiente.
                                                    </li>
                                                </ol><br>
                                            </p>
                                            <span class="text-lg">
                                                Gracias por su gentil colaboraci??n.
                                            </span>
                                        </div>
                                        <div> <br>
                                            <span class="text-2xl">Instituto Tecnol??gico Superior de Xalapa</span> <br> <br>
                                            <p class="text-lg text-justify">
                                                Fecha: {{$fecha_actual->day}} de {{$fecha_actual->monthName}} del {{$fecha_actual->year}} <br> <br>
                                                Estimado empresario: <br> <br>
                                                El Seguimiento de Egresados es "el conjunto de acciones realizadas??? por la instituci??n tendientes a mantener una comunicaci??n constante con los sectores de empleadores, con el prop??sito de conocer la pertinencia y la formaci??n obtenida por nuestros egresados en su formaci??n acad??mica y su competencia laboral, para que a partir de ello se instrumenten las estrategias de mejora continua. <br> <br>
                                                Por lo antes expuesto agradecemos de antemano su valioso apoyo al respecto y le solicitamos de la manera m??s atenta, tenga a bien contestar el cuestionario adjunto, lo que nos permitir?? retroalimentar la pertinencia de las carreras que se ofrecen y coadyuvar a constituir una estrategia que logre, con base en la situaci??n laboral de los egresados adecuar los planes y programas de estudio que ofertamos. <br> <br>
                                                La informaci??n que nos proporcione ser?? estrictamente confidencial y con fines ??nicamente estad??sticos. <br> <br>
                                                Con nuestro agradecimiento por su amable cooperaci??n, reciba un cordial saludo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-10">
                                        <div>
                                            <h1 class="text-xl">A. DATOS GENERALES DE LA EMPRESA U ORGANISMO</h1>
                                            {!! Form::open(['route' => ['empresa.form.moduloa'], 'method' => 'post']) !!}
                                                <div class="grid grid-cols-4 gap-4">
                                                    <span class="col-span-4 grid grid-cols-4 gap-4 flex place-items-center">
                                                        <strong>1. Nombre Comercial de la Empresa:</strong>
                                                        {!! Form::text('nombre', '', ['placeholder' => ''.($errors->get('nombre') ? ''.implode(' | ',$errors->get('nombre')) : ''), 'class' => 'col-span-3 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('nombre') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                    </span>
                                                    <span class="col-span-4 flex place-items-center">
                                                        Domicilio:
                                                        {!! Form::text('domicilio', $datos_egresado->domicilio, ['placeholder' => ''.($errors->get('domicilio') ? ''.implode(' | ',$errors->get('domicilio')) : 'Calle No. Colonia C.P'), 'class' => 'ml-5 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('domicilio') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                    </span>

                                                    <div class="col-span-4 grid grid-cols-3 gap-3">
                                                        <div class="grid grid-cols-5 gap-5 place-items-center">
                                                            <span class="col-span-1">Ciudad:</span>
                                                            {!! Form::text('ciudad', $datos_egresado->ciudad, ['placeholder' => ''.($errors->get('ciudad') ? ''.implode(' | ',$errors->get('ciudad')) : ''), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('ciudad') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                        </div>
                                                        <div class="grid grid-cols-5 gap-5 place-items-center">
                                                            <span class="col-span-1">Municipio:</span>
                                                            {!! Form::text('municipio', $datos_egresado->municipio, ['placeholder' => ''.($errors->get('municipio') ? ''.implode(' | ',$errors->get('municipio')) : ''), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('municipio') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                        </div>
                                                        <div class="grid grid-cols-5 gap-5 place-items-center">
                                                            <span class="col-span-1">Estado:</span>
                                                            {!! Form::text('estado', $datos_egresado->estado, ['placeholder' => ''.($errors->get('estado') ? ''.implode(' | ',$errors->get('estado')) : ''), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('estado') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                        </div>
                                                    </div>
                                                    <span class="col-span-2 flex place-items-center">
                                                        Telefono:
                                                        {!! Form::number('telefono', $datos_egresado->telefono, ['placeholder' => ''.($errors->get('telefono') ? ''.implode(' | ',$errors->get('telefono')) : ''), 'class' => 'ml-5 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('telefono') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                    </span>
                                                    <span class="col-span-2 flex place-items-center">
                                                        Correo electr??nico:
                                                        {!! Form::text('email_empresa', Auth::user()->email, ['disabled', 'class' => 'disabled:opacity-75 w-full ml-5 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}
                                                    </span>
                                                    
                                                    <div class="col-span-4">
                                                        <strong class="mr-10">2. Su empresa u organismo es:</strong>
                                                        <span class="col-span-1"><label for="P??blico">P??blico</label>{!! Form::radio('organismo', 'P??blico', $datos_egresado->organismo == 'P??blico' ? true : false , ['class' => 'mr-7 ml-3', 'id' => 'P??blico']) !!}</span>
                                                        <span class="col-span-1"><label for="Privado">Privado</label>{!! Form::radio('organismo', 'Privado', $datos_egresado->organismo == 'Privado' ? true : false, ['class' => 'mr-7 ml-3', 'id' => 'Privado']) !!}</span>
                                                        <span class="col-span-1"><label for="Social">Social</label>{!! Form::radio('organismo', 'Social', $datos_egresado->organismo == 'Social' ? true : false, ['class' => 'mr-7 ml-3', 'id' => 'Social']) !!}</span>
                                                    </div>
                                                    
                                                    <div class="col-span-4">
                                                        <strong class="mr-10">3. Tama??o de la empresa:</strong>
                                                        <span class="col-span-1"><label for="Microempresa">Microempresa (1-30)</label>{!! Form::radio('tamanio_empresa', 'Microempresa (1-30)', $datos_egresado->tamanio_empresa == 'Microempresa (1-30)' ? true : false , ['class' => 'mr-7 ml-3', 'id' => 'Microempresa']) !!}</span>
                                                        <span class="col-span-1"><label for="Peque??a">Peque??a (31-100)</label>{!! Form::radio('tamanio_empresa', 'Peque??a (31-100)', $datos_egresado->tamanio_empresa == 'Peque??a (31-100)' ? true : false, ['class' => 'mr-7 ml-3', 'id' => 'Peque??a']) !!}</span>
                                                        <span class="col-span-1"><label for="Mediana">Mediana (101-500)</label>{!! Form::radio('tamanio_empresa', 'Mediana (101-500)', $datos_egresado->tamanio_empresa == 'Mediana (101-500)' ? true : false, ['class' => 'mr-7 ml-3', 'id' => 'Mediana']) !!}</span>
                                                        <span class="col-span-1"><label for="Grande">Grande (m??s de 500)</label>{!! Form::radio('tamanio_empresa', 'Grande (m??s de 500)', $datos_egresado->tamanio_empresa == 'Grande (m??s de 500)' ? true : false, ['class' => 'mr-7 ml-3', 'id' => 'Grande']) !!}</span>
                                                    </div>
                                                    <div class="col-span-4">
                                                        <strong class="mr-10">4. Actividad econ??mica de la empresa u organismo. Indique a cual clasificaci??n corresponde su empresa:</strong>
                                                    </div>
                                                    <div class="col-span-4">
                                                        <div class="grid grid-cols-2 gap-2 divide-x">
                                                            <div class="grid grid-cols-1 divide-y -mr-2">
                                                                <span class="mb-3 mt-3"><label for="Agro-industrial">Agro-industrial</label>{!! Form::radio('actividad_economica', 'Agro-industrial', true , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Agro-industrial']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Silvicultura">Silvicultura</label>{!! Form::radio('actividad_economica', 'Silvicultura', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Silvicultura']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Pesca y acuacultura">Pesca y acuacultura</label>{!! Form::radio('actividad_economica', 'Pesca y acuacultura', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Pesca y acuacultura']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Miner??a">Miner??a</label>{!! Form::radio('actividad_economica', 'Miner??a', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Miner??a']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Alimentos, bebidas y tabaco">Alimentos, bebidas y tabaco</label>{!! Form::radio('actividad_economica', 'Alimentos, bebidas y tabaco', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Alimentos, bebidas y tabaco']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Textiles, vestido y cuero">Textiles, vestido y cuero</label>{!! Form::radio('actividad_economica', 'Textiles, vestido y cuero', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Textiles, vestido y cuero']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Madera y sus productos">Madera y sus productos</label>{!! Form::radio('actividad_economica', 'Madera y sus productos', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Madera y sus productos']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Papel, imprenta y editoriales">Papel, imprenta y editoriales</label>{!! Form::radio('actividad_economica', 'Papel, imprenta y editoriales', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Papel, imprenta y editoriales']) !!}</span>
                                                                <span class="mb-3 mt-3"><label for="Qu??mica">Qu??mica</label>{!! Form::radio('actividad_economica', 'Qu??mica', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Qu??mica']) !!}</span>
                                                                <span><label for="Caucho y Pl??stico">Caucho y Pl??stico</label>{!! Form::radio('actividad_economica', 'Caucho y Pl??stico', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Caucho y Pl??stico']) !!}</span>
                                                            </div>
                                                            <div class="grid grid-cols-1 divide-y">
                                                                <span class="mb-3 mt-3 pl-3"><label for="Minerales no met??licos">Minerales no met??licos</label>{!! Form::radio('actividad_economica', 'Minerales no met??licos', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Minerales no met??licos']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Industrias met??licas b??sicas">Industrias met??licas b??sicas</label>{!! Form::radio('actividad_economica', 'Industrias met??licas b??sicas', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Industrias met??licas b??sicas']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Productos met??licos, maquinaria y equipo">Productos met??licos, maquinaria y equipo</label>{!! Form::radio('actividad_economica', 'Productos met??licos, maquinaria y equipo', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Productos met??licos, maquinaria y equipo']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Construcci??n">Construcci??n</label>{!! Form::radio('actividad_economica', 'Construcci??n', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Construcci??n']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Electricidad, gas y agua">Electricidad, gas y agua</label>{!! Form::radio('actividad_economica', 'Electricidad, gas y agua', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Electricidad, gas y agua']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Comercio y turismo">Comercio y turismo</label>{!! Form::radio('actividad_economica', 'Comercio y turismo', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Comercio y turismo']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Transporte, almacenaje y comunicaciones">Transporte, almacenaje y comunicaciones</label>{!! Form::radio('actividad_economica', 'Transporte, almacenaje y comunicaciones', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Transporte, almacenaje y comunicaciones']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Servicios financieros, seguros">Servicios financieros, seguros, actividades inmobiliarias y de alquiler</label>{!! Form::radio('actividad_economica', 'Servicios financieros, seguros, actividades inmobiliarias y de alquiler', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Servicios financieros, seguros']) !!}</span>
                                                                <span class="mb-3 mt-3 pl-3"><label for="Educaci??n">Educaci??n</label>{!! Form::radio('actividad_economica', 'Educaci??n', false , ['class' => 'mr-7 ml-3', 'onclick' => 'otraTexto()', 'id' => 'Educaci??n']) !!}</span>
                                                                <span class="flex place-items-center pl-3"><label for="OtraActividad">Otra</label>{!! Form::radio('actividad_economica', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'OtraActividad', 'onclick' => 'otraTexto()']) !!}
                                                                    {!! Form::text('actividad_economicaotra', '', ['id' => 'ActividadTexto', 'placeholder' => ''.($errors->get('actividad_economicaotra') ? ''.implode(' | ',$errors->get('actividad_economicaotra')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('actividad_economicaotra') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'hidden border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                @break
                                
                                @case('b')
                                    <div>
                                        <div>
                                            <h1 class="text-xl">B. UBICACI??N LABORAL DE LOS EGRESADOS</h1>
                                            {!! Form::open(['route' => ['empresa.form.modulob'], 'method' => 'post']) !!}
                                                <div class="grid grid-cols-4 gap-4">
                                                    <strong class="col-span-4">5. N??mero de profesionistas con nivel de licenciatura que laboran en la empresa u organismo:</strong>
                                                    <div class="col-span-4">
                                                        <div class="grid grid-cols-5 gap-5">
                                                            <span class="col-span-1"><label for="Profesionista1">1</label>{!! Form::radio('no_profesionistas', '1', true, ['class' => 'mr-7 ml-3', 'id' => 'Profesionista1']) !!}</span>
                                                            <span class="col-span-1"><label for="Profesionista25">De 2 a 5</label>{!! Form::radio('no_profesionistas', 'De 2 a 5', false, ['class' => 'mr-7 ml-3', 'id' => 'Profesionista25']) !!}</span>
                                                            <span class="col-span-1"><label for="Profesionista68">De 6 a 8</label>{!! Form::radio('no_profesionistas', 'De 6 a 8', false, ['class' => 'mr-7 ml-3', 'id' => 'Profesionista68']) !!}</span>
                                                            <span class="col-span-1"><label for="Profesionista910">De 9 a 10</label>{!! Form::radio('no_profesionistas', 'De 9 a 10', false, ['class' => 'mr-7 ml-3', 'id' => 'Profesionista910']) !!}</span>
                                                            <span class="col-span-1"><label for="ProfesionistaMas10">M??s de 10</label>{!! Form::radio('no_profesionistas', 'M??s de 10', false, ['class' => 'mr-7 ml-3', 'id' => 'ProfesionistaMas10']) !!}</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <strong class="col-span-4">6. N??mero de egresados del Instituto Tecnol??gico y nivel jer??rquico que ocupan en su organizaci??n:</strong>
                                                    <div class="col-span-4">
                                                        <table>
                                                            <thead>
                                                                <tr><th>Carrera</th><th>Cantidad</th><th>Mando</th></tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras1', 'Industrial', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad1', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="IndustrialSuperior">Mando superior</label>{!! Form::radio('mando1', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'id' => 'IndustrialSuperior', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="IndustrialInterm">Mando intermedio</label>{!! Form::radio('mando1', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'id' => 'IndustrialInterm', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="IdustrialSup">Supervisor o equivalente</label>{!! Form::radio('mando1', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'id' => 'IdustrialSup', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="IndustrialAxu">T??cnico o auxiliar</label>{!! Form::radio('mando1', 'T??cnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'id' => 'IndustrialAxu', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <div><label for="mando1">Otro</label>{!! Form::radio('mando1', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando1', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra1', '', [''.($errors->get('mandootra1') ? '' : 'disabled'), 'id' => 'mandootra1', 'placeholder' => ''.($errors->get('mandootra1') ? ''.implode(' | ',$errors->get('mandootra1')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('mandootra1') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras2', 'Gesti??n Empresarial', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-2 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad2', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GesSup">Mando superior</label>{!! Form::radio('mando2', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'id' => 'GesSup', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GesInt">Mando intermedio</label>{!! Form::radio('mando2', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'id' => 'GesInt', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GesEqu">Supervisor o equivalente</label>{!! Form::radio('mando2', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'id' => 'GesEqu', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GesAux">T??cnico o auxiliar</label>{!! Form::radio('mando2', 'T??cnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'id' => 'GesAux', 'onclick' => 'OtroMando()']) !!}</span>
                                                                        <div><label for="mando2">Otro</label>{!! Form::radio('mando2', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando2', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra2', '', [''.($errors->get('mandootra2') ? '' : 'disabled'), 'id' => 'mandootra2', 'placeholder' => ''.($errors->get('mandootra2') ? ''.implode(' | ',$errors->get('mandootra2')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('mandootra2') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras3', 'Sistemas Computacionales', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad3', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="SisSup">Mando superior</label>{!! Form::radio('mando3', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'SisSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="SisInt">Mando intermedio</label>{!! Form::radio('mando3', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'SisInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="SisEqu">Supervisor o equivalente</label>{!! Form::radio('mando3', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'SisEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="SisAux">T??cnico o auxiliar</label>{!! Form::radio('mando3', 'T??cnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'SisAux']) !!}</span>
                                                                        <div><label for="mando3">Otro</label>{!! Form::radio('mando3', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando3', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra3', '', [''.($errors->get('mandootra3') ? '' : 'disabled'), 'id' => 'mandootra3', 'placeholder' => ''.($errors->get('mandootra3') ? ''.implode(' | ',$errors->get('mandootra3')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('mandootra3') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras4', 'Electr??nica', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad4', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElecSup">Mando superior</label>{!! Form::radio('mando4', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElecSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElecInt">Mando intermedio</label>{!! Form::radio('mando4', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElecInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElecEqu">Supervisor o equivalente</label>{!! Form::radio('mando4', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElecEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElecAux">T??cnico o auxiliar</label>{!! Form::radio('mando4', 'T??cnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElecAux']) !!}</span>
                                                                        <div><label for="mando4">Otro</label>{!! Form::radio('mando4', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando4', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra4', '', [''.($errors->get('mandootra4') ? '' : 'disabled'), 'id' => 'mandootra4', 'placeholder' => ''.($errors->get('mandootra4') ? ''.implode(' | ',$errors->get('mandootra4')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('mandootra4') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras5', 'Gastronom??a', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad5', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GasSup">Mando superior</label>{!! Form::radio('mando5', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'GasSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GasInt">Mando intermedio</label>{!! Form::radio('mando5', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'GasInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GasEqu">Supervisor o equivalente</label>{!! Form::radio('mando5', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'GasEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="GasAux">T??cnico o auxiliar</label>{!! Form::radio('mando5', 'T??cnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'GasAux']) !!}</span>
                                                                        <div><label for="mando5">Otro</label>{!! Form::radio('mando5', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando5', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra5', '', [''.($errors->get('mandootra5') ? '' : 'disabled'), 'id' => 'mandootra5', 'placeholder' => ''.($errors->get('mandootra5') ? ''.implode(' | ',$errors->get('mandootra5')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('mandootra5') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras6', 'Electromec??nica', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad6', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElectroSup">Mando superior</label>{!! Form::radio('mando6', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElectroSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElectroInt">Mando intermedio</label>{!! Form::radio('mando6', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElectroInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElectroEqu">Supervisor o equivalente</label>{!! Form::radio('mando6', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElectroEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="ElectroAux">T??cnico o auxiliar</label>{!! Form::radio('mando6', 'T??cnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'ElectroAux']) !!}</span>
                                                                        <div><label for="mando6">Otro</label>{!! Form::radio('mando6', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando6', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra6', '', [''.($errors->get('mandootra6') ? '' : 'disabled'), 'id' => 'mandootra6', 'placeholder' => ''.($errors->get('mandootra6') ? ''.implode(' | ',$errors->get('mandootra6')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('mandootra6') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras7', 'Industrias Alimentarias', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad7', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="AlimSup">Mando superior</label>{!! Form::radio('mando7', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'AlimSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="AlimInt">Mando intermedio</label>{!! Form::radio('mando7', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'AlimInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="AlimEqu">Supervisor o equivalente</label>{!! Form::radio('mando7', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'AlimEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="AlimAux">T??cnico o auxiliar</label>{!! Form::radio('mando7', 'T??cnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'AlimAux']) !!}</span>
                                                                        <div><label for="mando7">Otro</label>{!! Form::radio('mando7', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando7', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra7', '', [''.($errors->get('mandootra7') ? '' : 'disabled'), 'id' => 'mandootra7', 'placeholder' => ''.($errors->get('mandootra7') ? ''.implode(' | ',$errors->get('mandootra7')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('mandootra7') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras8', 'Bioqu??mica', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad8', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="BioSup">Mando superior</label>{!! Form::radio('mando8', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'BioSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="BioInt">Mando intermedio</label>{!! Form::radio('mando8', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'BioInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="BioEqu">Supervisor o equivalente</label>{!! Form::radio('mando8', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'BioEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="BioAux">T??cnico o auxiliar</label>{!! Form::radio('mando8', 'T??cnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'BioAux']) !!}</span>
                                                                        <div><label for="mando8">Otro</label>{!! Form::radio('mando8', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando8', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra8', '', [''.($errors->get('mandootra8') ? '' : 'disabled'), 'id' => 'mandootra8', 'placeholder' => ''.($errors->get('mandootra8') ? ''.implode(' | ',$errors->get('mandootra8')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('mandootra8') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras9', 'Mecatr??nica', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad9', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="MecaSup">Mando superior</label>{!! Form::radio('mando9', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'MecaSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="MecaInt">Mando intermedio</label>{!! Form::radio('mando9', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'MecaInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="MecaEqu">Supervisor o equivalente</label>{!! Form::radio('mando9', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'MecaEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="MecaAux">T??cnico o auxiliar</label>{!! Form::radio('mando9', 'T??cnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'MecaAux']) !!}</span>
                                                                        <div><label for="mando9">Otro</label>{!! Form::radio('mando9', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando9', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra9', '', [''.($errors->get('mandootra9') ? '' : 'disabled'), 'id' => 'mandootra9', 'placeholder' => ''.($errors->get('mandootra9') ? ''.implode(' | ',$errors->get('mandootra9')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('mandootra9') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{!! Form::text('carreras10', 'Civil', ['disabled', 'class' => 'col-span-2 px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="w-24">{!! Form::number('cantidad10', '', ['placeholder' => 'Cantidad', 'class' => 'px-3 py-2 bg-white border shadow-sm border-slate-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 contrast-more:border-slate-400 contrast-more:placeholder-slate-500']) !!}</td>
                                                                    <td class="grid grid-cols-5 gap-5">
                                                                        <span class="mb-3 mt-3 pl-3"><label for="CivSup">Mando superior</label>{!! Form::radio('mando10', 'Mando superior', true , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'CivSup']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="CivInt">Mando intermedio</label>{!! Form::radio('mando10', 'Mando intermedio', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'CivInt']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="CivEqu">Supervisor o equivalente</label>{!! Form::radio('mando10', 'Supervisor o equivalente', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'CivEqu']) !!}</span>
                                                                        <span class="mb-3 mt-3 pl-3"><label for="CivAux">T??cnico o auxiliar</label>{!! Form::radio('mando10', 'T??cnico o auxiliar', false , ['class' => 'mr-7 ml-3', 'onclick' => 'OtroMando()', 'id' => 'CivAux']) !!}</span>
                                                                        <div><label for="mando10">Otro</label>{!! Form::radio('mando10', 'Otra', false , ['class' => 'mr-7 ml-3', 'id' => 'mando10', 'onclick' => 'OtroMando()']) !!}
                                                                            {!! Form::text('mandootra10', '', [''.($errors->get('mandootra10') ? '' : 'disabled'), 'id' => 'mandootra10', 'placeholder' => ''.($errors->get('mandootra10') ? ''.implode(' | ',$errors->get('mandootra10')) : 'Especifique'), 'class' => 'col-span-4 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('mandootra10') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    
                                                    <strong class="col-span-4">7. Congruencia entre perfil profesional y funci??n que desarrollan los egresados del Instituto Tecnol??gico en su empresa u organizaci??n. Del total de egresados seleccione el porcentaje que corresponda:</strong>
                                                    <div class="col-span-4">
                                                        <div class="grid grid-cols-4 gap-4">
                                                            <span class="col-span-1"><label for="Completamente">Completamente</label>{!! Form::radio('funcion_prefil', 'Completamente', true, ['class' => 'mr-7 ml-3', 'id' => 'Completamente']) !!}</span>
                                                            <span class="col-span-1"><label for="Medianamente">Medianamente</label>{!! Form::radio('funcion_prefil', 'Medianamente', false, ['class' => 'mr-7 ml-3', 'id' => 'Medianamente']) !!}</span>
                                                            <span class="col-span-1"><label for="Ligeramente">Ligeramente</label>{!! Form::radio('funcion_prefil', 'Ligeramente', false, ['class' => 'mr-7 ml-3', 'id' => 'Ligeramente']) !!}</span>
                                                            <span class="col-span-1"><label for="Ninguna relaci??n">Ninguna relaci??n</label>{!! Form::radio('funcion_prefil', 'Ninguna relaci??n', false, ['class' => 'mr-7 ml-3', 'id' => 'Ninguna relaci??n']) !!}</span>
                                                        </div>
                                                    </div>

                                                    <strong class="col-span-4">
                                                        8. Requisitos que establece su empresa u organizaci??n para la contrataci??n de personal con nivel de licenciatura:
                                                        <x-input-error :messages="$errors->get('requisitos')"/>
                                                    </strong>
                                                    <div class="col-span-4 grid grid-cols-2 gap-2">
                                                        <span><label for="??rea o campo de estudio">??rea o campo de estudio</label>
                                                            {!! Form::checkbox('requisitos[]', '??rea o campo de estudio', false, ['id' => '??rea o campo de estudio']) !!}
                                                        </span>
                                                        <span><label for="Titulaci??n">Titulaci??n</label>
                                                            {!! Form::checkbox('requisitos[]', 'Titulaci??n', false, ['id' => 'Titulaci??n']) !!}
                                                        </span>
                                                        <span><label for="Experiencia laboral">Experiencia laboral/pr??ctica</label>
                                                            {!! Form::checkbox('requisitos[]', 'Experiencia laboral/pr??ctica', false, ['id' => 'Experiencia laboral']) !!}
                                                        </span>
                                                        <span><label for="Posicionamiento">Posicionamiento de la Instituci??n de Egreso</label>
                                                            {!! Form::checkbox('requisitos[]', 'Posicionamiento de la Instituci??n de Egreso', false, ['id' => 'Posicionamiento']) !!}
                                                        </span>
                                                        <span><label for="Conocimiento de idiomas">Conocimiento de idiomas extranjeros</label>
                                                            {!! Form::checkbox('requisitos[]', 'Conocimiento de idiomas extranjeros', false, ['id' => 'Conocimiento de idiomas']) !!}
                                                        </span>
                                                        <span><label for="Recomendaciones">Recomendaciones/Referencias</label>
                                                            {!! Form::checkbox('requisitos[]', 'Recomendaciones/Referencias', false, ['id' => 'Recomendaciones']) !!}
                                                        </span>
                                                        <span><label for="Personalidad">Personalidad/actitudes</label>
                                                            {!! Form::checkbox('requisitos[]', 'Personalidad/actitudes', false, ['id' => 'Personalidad']) !!}
                                                        </span>
                                                        <span><label for="Capacidad de liderazgo">Capacidad de liderazgo</label>
                                                            {!! Form::checkbox('requisitos[]', 'Capacidad de liderazgo', false, ['id' => 'Capacidad de liderazgo']) !!}
                                                        </span>
                                                        <span class="col-span-2 flex items-center">
                                                            Otro: 
                                                            {!! Form::text('requisitostexto', '', ['placeholder' => ''.($errors->get('requisitostexto') ? ''.implode(' | ',$errors->get('requisitostexto')) : 'Especifique'), 'id'=> 'RequisitoTexto', 'class' => 'ml-5 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-[45%] rounded-md sm:text-sm focus:ring-1 '.($errors->get('requisitostexto') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                        </span>
                                                    </div>

                                                    <strong class="col-span-4">
                                                        9. Carreras que demanda preferentemente su empresa u organismo:
                                                        <x-input-error :messages="$errors->get('carreras')"/>
                                                    </strong>
                                                    <div class="col-span-4 grid grid-cols-2 gap-2">
                                                        <span>
                                                            <label for="Ingenier??a Industrial">Ingenier??a Industrial</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingenier??a Industrial', false, ['id' => 'Ingenier??a Industrial']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingenier??a en Gesti??n Empresarial">Ingenier??a en Gesti??n Empresarial</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingenier??a en Gesti??n Empresarial', false, ['id' => 'Ingenier??a en Gesti??n Empresarial']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingenier??a en Sistemas Computacionales">Ingenier??a en Sistemas Computacionales</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingenier??a en Sistemas Computacionales', false, ['id' => 'Ingenier??a en Sistemas Computacionales']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingenier??a en Electr??nica">Ingenier??a en Electr??nica</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingenier??a en Electr??nica', false, ['id' => 'Ingenier??a en Electr??nica']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingenier??a Electromec??nica">Ingenier??a Electromec??nica</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingenier??a Electromec??nica', false, ['id' => 'Ingenier??a Electromec??nica']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingenier??a en Industrias Alimentarias">Ingenier??a en Industrias Alimentarias</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingenier??a en Industrias Alimentarias', false, ['id' => 'Ingenier??a en Industrias Alimentarias']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingenier??a Bioqu??mica">Ingenier??a Bioqu??mica</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingenier??a Bioqu??mica', false, ['id' => 'Ingenier??a Bioqu??mica']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingenier??a Mecatr??nica">Ingenier??a Mecatr??nica</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingenier??a Mecatr??nica', false, ['id' => 'Ingenier??a Mecatr??nica']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Ingenier??a Civil">Ingenier??a Civil</label>
                                                            {!! Form::checkbox('carreras[]', 'Ingenier??a Civil', false, ['id' => 'Ingenier??a Civil']) !!}
                                                        </span>
                                                        <span>
                                                            <label for="Licenciatura en Gastronom??a">Licenciatura en Gastronom??a</label>
                                                            {!! Form::checkbox('carreras[]', 'Licenciatura en Gastronom??a', false, ['id' => 'Licenciatura en Gastronom??a']) !!}
                                                        </span>
                                                    </div>
                                                </div>
                                                {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                @break
                                
                                @case('c')
                                    <div>
                                        <div>
                                            <h1 class="text-xl">C. COMPETENCIAS LABORALES</h1>
                                            {!! Form::open(['route' => ['empresa.form.moduloc'], 'method' => 'post']) !!}
                                                <div class="grid grid-cols-5 gap-5">
                                                    <strong class="col-span-5">10. En su opini??n ??qu?? competencias considera deben desarrollar los egresados del Instituto Tecnol??gico, para desempe??arse eficientemente en sus actividades laborales?</strong>
                                                    <strong class="col-span-5">Por favor eval??e conforme a la tabla siguiente: <span class="text-sm font-normal">Califique del 1 (menor) al 5 (mayor):</span> </strong>
                                                </div>
                                                
                                                <div class="overflow-auto h-[75%] relative shadow-md sm:rounded-lg mt-5 mb-5">
                                                    <table class="w-full text-sm text-justify text-gray-500 dark:text-gray-400">
                                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                            <tr>
                                                                <th scope="col" class="py-3 px-6">
                                                                    Competencia Laboral
                                                                </th>
                                                                <th scope="col" class="py-3 px-6">
                                                                    1
                                                                </th>
                                                                <th scope="col" class="py-3 px-6">
                                                                    2
                                                                </th>
                                                                <th scope="col" class="py-3 px-6">
                                                                    3
                                                                </th>
                                                                <th scope="col" class="py-3 px-6">
                                                                    4
                                                                </th>
                                                                <th scope="col" class="py-3 px-6">
                                                                    5
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 text-left whitespace-nowrap dark:text-white">
                                                                    Habilidad para resolver conflictos
                                                                </th>
                                                                <td class="py-4 px-6 items-start">
                                                                    {!! Form::radio('resolver_conflictos', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('resolver_conflictos', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('resolver_conflictos', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('resolver_conflictos', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('resolver_conflictos', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Ortograf??a y redacci??n de documentos
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('ortografia', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('ortografia', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('ortografia', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('ortografia', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('ortografia', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Mejora de procesos
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('mejora_procesos', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('mejora_procesos', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('mejora_procesos', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('mejora_procesos', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('mejora_procesos', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Trabajo en equipo
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('trabajo_equipo', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('trabajo_equipo', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('trabajo_equipo', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('trabajo_equipo', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('trabajo_equipo', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Habilidad para administrar tiempo
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('administrar_tiempo', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('administrar_tiempo', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('administrar_tiempo', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('administrar_tiempo', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('administrar_tiempo', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Seguridad personal
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('seguridad_personal', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('seguridad_personal', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('seguridad_personal', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('seguridad_personal', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('seguridad_personal', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Facilidad de palabra
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('facilidad_palabra', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('facilidad_palabra', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('facilidad_palabra', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('facilidad_palabra', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('facilidad_palabra', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Gesti??n de Proyectos
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('gestion_proyectos', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('gestion_proyectos', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('gestion_proyectos', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('gestion_proyectos', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('gestion_proyectos', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Puntualidad y Asistencia
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('puntualidad', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('puntualidad', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('puntualidad', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('puntualidad', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('puntualidad', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Cumplimiento de las normas
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('cumplimiento_normas', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('cumplimiento_normas', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('cumplimiento_normas', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('cumplimiento_normas', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('cumplimiento_normas', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Integraci??n al trabajo
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('integracion_trabajo', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('integracion_trabajo', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('integracion_trabajo', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('integracion_trabajo', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('integracion_trabajo', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Creatividad e innovaci??n
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('innovacion', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('innovacion', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('innovacion', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('innovacion', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('innovacion', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Capacidad de negociaci??n
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('negociacion', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('negociacion', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('negociacion', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('negociacion', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('negociacion', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Capacidad de abstracci??n, an??lisis y s??ntesis
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('analisis', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('analisis', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('analisis', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('analisis', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('analisis', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Liderazgo y toma de decisiones
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('liderazgo', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('liderazgo', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('liderazgo', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('liderazgo', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('liderazgo', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Adaptaci??n al cambio
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('adaptacion', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('adaptacion', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('adaptacion', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('adaptacion', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('adaptacion', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    <div class="flex items-center">
                                                                        Otra: {!! Form::text('otra_competencia', '', ['placeholder' => ''.($errors->get('otra_competencia') ? ''.implode(' | ',$errors->get('otra_competencia')) : 'Especifique'), 'class' => 'dark:text-black text-white ml-2 px-3 py-2 bg-white border shadow-sm focus:outline-none block w-full rounded-md sm:text-sm focus:ring-1 '.($errors->get('otra_competencia') ? 'border-red-200 placeholder-red-400 focus:border-red-500 focus:ring-red-500 contrast-more:border-red-400 contrast-more:placeholder-red-500':'border-slate-200 placeholder-slate-400 focus:border-sky-500 focus:ring-sky-500 contrast-more:border-slate-400 contrast-more:placeholder-slate-500')]) !!}
                                                                    </div>
                                                                </th>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('otras', '1', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('otras', '2', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('otras', '3', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('otras', '4', false, ['']) !!}
                                                                </td>
                                                                <td class="py-4 px-6">
                                                                    {!! Form::radio('otras', '5', true, ['']) !!}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                                <div class="grid grid-cols-4 gap-4">
                                                    <strong class="col-span-4">11. Con base al desempe??o laboral as?? como a las actividades laborales que realiza el egresado ??C??mo considera su desempe??o laboral respecto a su formaci??n acad??mica? Del total de egresados seleccione el porcentaje que corresponda.</strong>
                                                    <span><label for="CompletamenteC">Completamente</label>{!! Form::radio('desempe??o_laboral', 'Completamente', true, ['class' => 'mr-7 ml-3', 'id' => 'CompletamenteC']) !!}</span>
                                                    <span><label for="MedianamenteC">Medianamente</label>{!! Form::radio('desempe??o_laboral', 'Medianamente', false, ['class' => 'mr-7 ml-3', 'id' => 'MedianamenteC']) !!}</span>
                                                    <span><label for="LigeramenteC">Ligeramente</label>{!! Form::radio('desempe??o_laboral', 'Ligeramente', false, ['class' => 'mr-7 ml-3', 'id' => 'LigeramenteC']) !!}</span>
                                                    <span><label for="Ninguna relaci??nC">Ninguna relaci??n</label>{!! Form::radio('desempe??o_laboral', 'Ninguna relaci??n', false, ['class' => 'mr-7 ml-3', 'id' => 'Ninguna relaci??nC']) !!}</span>
                                                </div>

                                                <div class="mt-5">
                                                    <strong>
                                                        12.  De acuerdo con las necesidades de su empresa u organismo, ??qu?? sugiere para mejorar la formaci??n de los egresados del Instituto Tecnol??gico?
                                                        <x-input-error :messages="$errors->get('sugerencias_instituto')"/>
                                                    </strong>
                                                    {!! Form::textarea('sugerencias_instituto', '', ['placeholder' => 'Escriba sus sugerencias aqu??...', 'class' => 'block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none']) !!}
                                                </div>
                                                
                                                <div class="mt-5">
                                                    <strong>
                                                        13.  Comentarios y sugerencias:
                                                        <x-input-error :messages="$errors->get('comentarios_sugerencias')"/>
                                                    </strong>
                                                    {!! Form::textarea('comentarios_sugerencias', '', ['placeholder' => 'Escriba sus comentarios y sugerencias aqu??...', 'class' => 'block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none']) !!}
                                                </div>
                                                {!! Form::submit('Siguiente', ['class' => 'bg-sky-500 hover:bg-sky-700 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white mt-5 ml-5']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                @break
                                
                                @default
                                <h1 class="text-xl">
                                    Ya ha contestado el formulario, le agradecemos su tiempo empleado.
                                </h1>
                            @endswitch
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
