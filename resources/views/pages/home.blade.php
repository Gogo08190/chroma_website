@extends('layouts.main')

@section('styles')

@endsection

@section('content')
	<section id="slider">
		<div class="uk-container uk-text-center">
		</div>
		<div uk-slideshow>
				<ul class="uk-slideshow-items">
					@foreach($slider as $item)
						<li>
								<img src="{{ wp_get_attachment_image_src($item, 'full')[0] }}" alt="Chroma Team">
						</li>
					@endforeach
				</ul>
		</div>
	</section>
@endsection

@section('javascript')

@endsection
