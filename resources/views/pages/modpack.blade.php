@extends('layouts.main')

@section('styles')

@endsection

@section('content')
	<section id="modpack">
		<div class="uk-container">
			<div class="list_modpacks">
				<div class="uk-child-width-expand@s uk-text-center" data-uk-grid>
					<div>
						<img src="{{ wp_get_attachment_image_src($modpacks['logo'], 'modpack')[0] }}" alt="{!! $modpacks['title'] !!}">
					</div>
					<div>
						<h1>{{ $modpacks['title'] }}<br> <span>{{ $modpacks['titre'] }}</span></h1>
						<div class="categories uk-flex-center uk-child-width-1-4@m uk-child-width-1-2@s uk-text-center" data-uk-grid>
							@foreach($modpacks['categorie'] as $key => $value)
								<div><h3>{{ $value }}</h3></div>
							@endforeach
						</div>
						<p>{!! $modpacks['desc'] !!}</p>
						<div class="button">
							<a class="uk-button uk-button-default" target="_blank" href="{{$modpacks['url']}}">{{ $modpacks['btn'] }} <i class="fas fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('javascript')

@endsection
