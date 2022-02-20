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
						@if($modpacks['cd'])
						<div class="countdown" data-uk-countdown="date: {{ $modpacks['cd'] }}">
						    <span class="uk-countdown-number uk-countdown-days"></span>
						    <span class="uk-countdown-separator">:</span>
						    <span class="uk-countdown-number uk-countdown-hours"></span>
						    <span class="uk-countdown-separator">:</span>
						    <span class="uk-countdown-number uk-countdown-minutes"></span>
						    <span class="uk-countdown-separator">:</span>
						    <span class="uk-countdown-number uk-countdown-seconds"></span>
						</div>
						@endif
						<div class="button">
							<a class="uk-button uk-button-default" target="_blank" href="{{$modpacks['url']}}">{{ $modpacks['btn'] }} <i class="fas fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@if($modpacks['online'] == "on")
		<section id="islands">
			<div class="uk-container">
				<div class="titre">
					<h3>{!! $modpacks['island_title'] !!}</h3>
				</div>

				<div class="list_island">
					<div class="ile uk-grid-match uk-flex-center uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center" data-uk-grid>
						@foreach($content['islands'] as $item)
							<div>
								<img class="" src="{{ wp_get_attachment_image_src($item['logo'], 'team')[0] }}" alt="{{ $item['title']}}">
								<h3>{{ $item['title'] }}</h3>
								<div class="button">
									<a class="uk-button uk-button-default" target="_blank" href="{{ $item['url'] }}">{{ $item['btn'] }} <i class="fas fa-chevron-right"></i></a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	@endif
@endsection

@section('javascript')

@endsection
