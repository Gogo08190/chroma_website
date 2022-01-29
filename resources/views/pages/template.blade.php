@extends('layouts.main')

@section('content')
    <div id="top_page">
      <div class="uk-container">
        <div class="uk-text-center">
  				<div class="titre">
  					<h1>{{ Loop::title() }}</h1>
  				</div>
        </div>
        <div class="texte">
          {!! Loop::content() !!}
        </div>
      </div>
    </div>
@endsection
