@extends('app')
@section('content')

@if ($first == 'John')
    <h1>About me: Hi <?= $first; ?> </h1>

@else
    <h1>About</h1>
    <h3>People I Like:</h3>
@endif
<p>
    Lorem ipsum bla bla....
</p>
    @stop