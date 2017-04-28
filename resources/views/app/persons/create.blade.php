@if(isset($name))
    <div>Vardas buvo pridėtas: {{ $name }}</div>
@endif

{!! Form::open(['url' => route('app.persons.create')]) !!}


{{ Form::label('name', 'Your Name') }}
    {{ Form::text('name') }}

{{ Form::label('city_id', 'City') }}
{{ Form::select('city_id', $cities) }}

{{ Form::submit('Submit') }}

{!! Form::close() !!}