@extends('site')

@section('title', ' Tytuł strony')

@section('sitebar')
    @parent
    <p>Dołączone do głównego paska bocznego</p> 
@endsection

@section('content')
    <p>Treść strony</p>
@endsection