@extends('client.layout_client.master_client')
@section('content')

<section id="content">
	<div class="content-wrap">
		<div class="container">
			@if(isset($tourdiadiem))
				<div class="row">
					<?php $j = 0; ?>
					@foreach($tourdiadiem as $tdd)
						<?php $j += 0.1; ?>
						<div class="col-md-3 col-sm-4 wow zoomIn" data-wow-delay="<?php echo $j ?>s">
							<div class="tour_container">
								<div class="img_container">
									<a href="">
										<img src="upload/{{$tdd->hinhanh}}" width="360" height="250" class="img-responsive">
										<span class="price">{{number_format($tdd->giatour)}}<sup>VND</sup></span>
									</a>
								</div>
								<div class="tour_title">
									<h3>{{$tdd->tentour}}</h3>
									<div class="rating">
										
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="row text-center paginate">{{$tourdiadiem->links()}}</div>
			@endif
		</div>
	</div>
</section>

@endsection