@extends('layouts.app', ['view_type' => 'chapter-home'])

@section('content')
<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/1/fnd-home.jpg') }});background-position:50% 50%;">
    <div class="banner-content-wrapper negro">
        <div class="container">
        	<h2 class="banner-chapter-number">@lang("Chapter") 1</h2>
			<h1 class="banner-title">@lang("Chopard maison")</h1>
			<h3 class="banner-subtitle">@lang("History, core values, assets<br> and passions")</h3>
			<p class="banner-txt">@lang('Read the <a href="#" class="modal-open pdf" data-modal="#modal-pdf">reference material</a> and complete<br> the activities of this chapter to discover<br> the world of Chopard, a family business ran<br> by passions with more than 160 years of history.')</p>
			<a href="#" role="button" class="btn btn-default modal-open pdf" data-modal="#modal-pdf">@lang("Let's go!")</a>
        </div>
    </div>
</div>
@include('partials.pdfmodal')
@endsection

@push('scripts')
window.pdf_src = "{{ route('pdfviewer', ['chapter' => $current_activity->chapter, 'activity_id' => $current_activity->id]) }}";
window.first_activity = "{{ route('chapter', ['chapter' => $current_activity->chapter, 'activity' => $first_activity_chapter]) }}";
dlw.base();
dlw.chapter_home();
@endpush