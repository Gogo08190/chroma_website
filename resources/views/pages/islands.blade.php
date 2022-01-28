@extends('layouts.main')

@section('styles')

@endsection

@section('content')
<section id="islands">
	<div class="uk-container">
		<div class="titre uk-text-center">
			<h3>{{ $island['title'] }}<br> <span>{{ $island['creator'] }}</span></h3>
		</div>

		<div class="island_slider" data-uk-slider="autoplay: true">
			<div class="uk-position-relative uk-visible-toggle">
				<div class="uk-slider-container">
					<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@m uk-grid">
						@foreach($island['slider'] as $item)
							<li>
									<img src="{{ wp_get_attachment_image_src($item, 'full')[0] }}" alt="{{ $island['title'] }}">
							</li>
						@endforeach
					</ul>
				</div>
				<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
			</div>
		</div>
	</div>
</section>

<section id="histoire">
	<div class="uk-container">
		<div class="titre">
			<h3>{{ $island['intro'] }}</h3>
		</div>

		<div class="content">
			{!! $island['desc'] !!}
		</div>
	</div>
</section>

@endsection

@section('javascript')

@endsection
