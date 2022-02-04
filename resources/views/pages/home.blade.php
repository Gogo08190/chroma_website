@extends('layouts.main')

@section('styles')

@endsection

@section('content')
	<section id="slider">
		<div class="titre uk-container uk-text-center">
			<h1>{!! $titre !!}</h1>
		</div>
		<div class="slider" data-uk-slideshow="animation: push; autoplay: true;">
				<ul class="uk-slideshow-items">
					@foreach($slider as $item)
						<li>
								<img src="{{ wp_get_attachment_image_src($item, 'full')[0] }}" alt="Chroma Team" data-uk-cover>
						</li>
					@endforeach
				</ul>
		</div>
		<a href="#team" id='drop-scroll'>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.4 4.01"><g data-name="Calque 2"><path d="m0 .03 4.19 3.98L8.4 0H6.67L4.2 2.35 1.77.03H0z" data-name="Calque 1"/></g></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.4 4.01"><g data-name="Calque 2"><path d="m0 .03 4.19 3.98L8.4 0H6.67L4.2 2.35 1.77.03H0z" data-name="Calque 1"/></g></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.4 4.01"><g data-name="Calque 2"><path d="m0 .03 4.19 3.98L8.4 0H6.67L4.2 2.35 1.77.03H0z" data-name="Calque 1"/></g></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.4 4.01"><g data-name="Calque 2"><path d="m0 .03 4.19 3.98L8.4 0H6.67L4.2 2.35 1.77.03H0z" data-name="Calque 1"/></g></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.4 4.01"><g data-name="Calque 2"><path d="m0 .03 4.19 3.98L8.4 0H6.67L4.2 2.35 1.77.03H0z" data-name="Calque 1"/></g></svg>
    </a>
	</section>

	<section id="team">
		<div class="uk-container uk-text-center">
			<div class="titre">
				<h2>{!! $titre_team !!}</h2>
			</div>

			<div class="list-team">
				<div class="team uk-grid-match uk-flex-center uk-child-width-1-3@m uk-child-width-1-3@s uk-text-center" data-uk-grid>
					@foreach($list_team as $item)
						<div>
							<img class="" src="{{ wp_get_attachment_image_src($item['logo'], 'team')[0] }}" alt="{{ $item['title']}}">
							<h3>{{ $item['title'] }}</h3>
							<p>{!! $item['desc'] !!}</p>
							<div class="team_social uk-flex-center uk-child-width-1-6@m uk-child-width-1-6@s uk-grid-small uk-text-center" data-uk-grid>
								@if($item['youtube'])
								<div><a href="{{ $item['youtube'] }}" target="_blank" class="social_icon"><i class="fab fa-youtube"></i></a></div>
								@endif
								@if($item['twitch'])
								<div><a href="{{ $item['twitch'] }}" target="_blank" class="social_icon"><i class="fab fa-twitch"></i></a></div>
								@endif
							</div>
						</div>
					@endforeach
				</div>
      </div>
		</div>
	</section>

	<section id="modpack">
		<div class="uk-container uk-text-center">
			<div class="titre">
				<h2>{!! $titre_modpack !!}</h2>
			</div>

			<div class="pack uk-grid-match uk-flex-center uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center" data-uk-grid>
				@foreach($content['modpack'] as $item)
					<div>
						<img class="" src="{{ wp_get_attachment_image_src($item['logo'], 'team')[0] }}" alt="{{ $item['title']}}">
						<h3>{{ $item['title'] }}</h3>
						<div class="button">
							<a class="uk-button uk-button-default" href="{{ $item['plus'] }}">{{ $item['btn'] }} <i class="fas fa-chevron-right"></i></a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>

	<section id="partner">
		<div class="uk-container uk-container-xsmall uk-text-center">
			<div class="titre">
				<h2>{!! $titre_partenaire !!}</h2>
			</div>

			<div class="partenaires_slider" data-uk-slider="autoplay: true">
				<div class="uk-position-relative uk-visible-toggle">
					<div class="uk-slider-container">
						<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@m uk-grid">
								<li>
									<img src="{{ wp_get_attachment_image_src($logo_partenaire, 'partenaire')[0] }}" alt="{!! $nom_partenaire !!}">
									<h3>{!! $nom_partenaire !!}</h3>
									<p>{!! $desc_partenaire !!}</p>

									<div class="button">
										<a class="uk-button uk-button-default" target="_blank" href="{{ $link_partenaire }}">{!! $btn_partenaire !!} <i class="fas fa-chevron-right"></i></a>
									</div>
								</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('javascript')

@endsection
