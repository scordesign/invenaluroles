<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre o Codigo Producto') }}
            {{ Form::select('name_id', $codigos , $producto->name_id, ['class' => 'form-control' . ($errors->has('name_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre o Codigo']) }}
            {!! $errors->first('name_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Bodega') }}
            {{ Form::select('bodega_id', $bodegas , $producto->bodega_id, ['class' => 'form-control' . ($errors->has('bodega_id') ? ' is-invalid' : ''), 'placeholder' => 'Bodega']) }}
            {!! $errors->first('bodega_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Grupo') }}
            {{ Form::select('grupo_id', $grupos , $producto->grupo_id, ['class' => 'form-control' . ($errors->has('grupo_id') ? ' is-invalid' : ''), 'placeholder' => 'Grupo']) }}
            {!! $errors->first('grupo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Unidad') }}
            {{ Form::select('unidad_id', $unidad , $producto->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Unidad']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ubicación') }}
            {{ Form::select('ubicacion_id', $ubicaciones , $producto->ubicacion_id, ['class' => 'form-control' . ($errors->has('ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Ubicación']) }}
            {!! $errors->first('ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Registro Conteo 1') }}
            {{ Form::text('conteo1', $producto->conteo1, ['class' => 'form-control' . ($errors->has('conteo1') ? ' is-invalid' : ''), 'placeholder' => 'Conteo 1' , 'id' => 'co1']) }}
            {!! $errors->first('conteo1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Registro Conteo 2') }}
            {{ Form::text('conteo2', $producto->conteo2, ['class' => 'form-control' . ($errors->has('conteo2') ? ' is-invalid' : ''), 'placeholder' => 'Conteo 2',   'id' => 'co2' , 'onkeyup' => 'calculate()']) }}
            {!! $errors->first('conteo2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diferencia Conteo 1 VS Conteo 2') }}
            {{ Form::text('deferencia12', $producto->deferencia12, ['class' => 'form-control' . ($errors->has('deferencia12') ? ' is-invalid' : ''), 'placeholder' => 'Diferencia' ,'Disabled' =>'disabled' , 'id' => 'co1y2']) }}
            {!! $errors->first('deferencia12', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Conteo 3') }}
            {{ Form::text('conteo3', $producto->conteo3, ['class' => 'form-control' . ($errors->has('conteo3') ? ' is-invalid' : ''), 'placeholder' => 'Conteo 3' , 'id' => 'co13']) }}
            {!! $errors->first('conteo3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <script>

        function calculate() {
            var con1 = document.getElementById("co1").value;
            var con2 = document.getElementById("co2").value;
            var con3 = document.getElementById("co3");
            var calculo = con2 - con1;
            var con1y2 = document.getElementById("co1y2").setAttribute("value", calculo);
            if (calculo == 0) {
                con3.setAttribute("Disabled", "Disabled");
            } else {
                con3.removeAttribute('disabled');
            }
        }

    </script>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>