@if(isset($name))
    <div>Įrašas buvo sukurtas: {{ $name }}</div>
@endif

{!! Form::open(['url' => route('app.hobbies.create')]) !!}


{{ Form::label('name', 'Hobby') }}
{{ Form::text('name') }}

{{ Form::submit('Submit') }}

{!! Form::close() !!}