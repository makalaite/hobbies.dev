@if(isset($name))
    <div>Įrašas buvo sukurtas: {{ $name }}</div>
@endif


{!! Form::open(['url' => route('app.cities.create')]) !!}

{{  Form::label('name', 'City name') }}
{{  Form::text('name') }}

{{ Form::submit('Submit') }}

{!! Form::close() !!}