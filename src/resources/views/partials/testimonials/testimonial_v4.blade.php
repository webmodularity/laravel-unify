<?php
use WebModularity\LaravelUnify\Helpers\UnifyHelper;
?>
        <!-- Testimonials v4 -->
		<div class="bg-color-light">
			<div class="container content-md">
				<div class="headline-center margin-bottom-60">
					<h2>What People Are Saying</h2>
					<p>Here are some of the latest reviews from our
						<a href="{{ $reviewProviders['yelp']->url }}">{{ $reviewProviders['yelp']->provider->name }}</a> and
						<a href="{{ $reviewProviders['google']->url }}">{{ $reviewProviders['google']->provider->name }}</a>
						pages.
					</p>
				</div>
				@foreach ($reviews as $review)
					@if(!isset($colCount) || $colCount == 2)
						<?php $colCount = 0 ?>
						<div class="row margin-bottom-25">
					@endif

					<div class="col-sm-6">
						<div class="testimonials-v4 md-margin-bottom-50">
							<div class="testimonials-v4-in">
								<p>{!! nl2br(trim($review->review)) !!}</p>
                                <p>{!! UnifyHelper::starRating($review->rating) !!}</p>
							</div>
                            <a href="{{ $review->author->url }}">
								<img class="rounded-x" src="{!! $review->author->url_image or UnifyHelper::defaultUserImage() !!}">
							</a>
							<span class="testimonials-author">
                                    <a href="{{ $review->author->url }}">{{ $review->author->name }}</a>
                                <div class="testimonial-source-container">
                                    <em>From <a href="{{ $review->url }}">{{ $review->author->reviewProvider->provider->name }}</a> on {{ $review->review_updated_at->toFormattedDateString() }}</em>
                                </div>
                            </span>
						</div>
					</div>

					<?php $colCount++ ?>
					@if($colCount == 2)
						</div>
					@endif
				@endforeach
			</div><!--/end container-->
		</div>
		<!-- End Testimonials v4 -->