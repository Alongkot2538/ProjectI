
@extends('layout')
@section('content')

<h1>Profile1</h1>
<ul>
    @foreach($master as @master)
        <li>{{ $master }}</li>
    @endforeach
</ul>
@endsection






<ul>
    <li><a href="/home">Home</a></li>
    <li><a href="profile">Porfile</a></li>
    <li><a href="create">File</a></li>
    <li><a href="http://" target="_blank" rel="noopener noreferrer"></a></li>
</ul>
