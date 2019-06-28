@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3">
		@if (!$product->images()->get()->isEmpty())
		<img src="{{ asset('/img/'.$product->images()->get()[0]->image_src) }}" style="width: 200px; height: 200px">
		@endif
		</div>
		<div class="col-md-9">
			<h3>
				{{ $product->name }}
			</h3>
			<h4>
				{{ $product->price }}
			</h4>
			<h3>
				<?php 
                      ($rating);

                    for ($x = 1; $x <= $rating; $x++) {
                        echo '<span><i class="text-warning fa fa-star"></i></span>';
                        
                    }
                    if (strpos($rating, ',')) {
                        echo '<span><i class="text-warning fa fa-star-half-o"></i></span>';
                       
                        $x++;
                    }
                    while ($x <= 5) {
                        echo '<span><i class="text-warning fa fa-star-o"></i></span>';
                      
                        $x++;
                    }
                    ?>
			</h3>
			<h5>
                <i class="text-warning fa fa-eye"></i>{{$product['view_count']}}
            </h5>
			<div class="mt-4">
				<a href="{{ route('carts.add', ['id' => $product['id']]) }}" class="btn btn-primary">Beli</a>
			</div>

			<div class="mt-2">
                <a href=https://www.facebook.com/sharer/sharer.php??u={{ route('products.show', ['id' => $product['id']]) }}&display=popup" class="social-button" target="_blank"><span class="fa fa-facebook-official"></span>&nbsp;Share Facebook</a>
                |
                <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ route('products.show', ['id' => $product['id']]) }}" class="social-button" target="_blank"><span class="fa fa-twitter"></span>&nbsp;Share Twitter</a>
                |
                <a href="https://wa.me/?text={{ route('products.show', ['id' => $product['id']]) }}" class="social-button" target="_blank"><span class="fa fa-whatsapp"></span>&nbsp;Share Whatsapp</a>
            </div>

			<div class="mt-4">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#description" role="tab" data-toggle="tab">Deskripsi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#review" role="tab" data-toggle="tab">Review</a>
					</li>
				</ul>

{{-- tab panes --}}
				<div class="tab-content mt-2">
					<div role="tabpanel" class="tab-pane fade in active show" id="description">
						{!! $product->description !!}
					</div>
					<div role="tabpanel" class="tab-pane fade" id="review">
						<form action="{{ route('posts.review') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="text" name="product_id" value="{{ $product['id'] }}" hidden>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <input class="form-control" type="text" name="description" placeholder="Product Description" id="ckview">
                            </div>
                            <script src="{{url('js/jquery.tinymce.min.js')}}"></script>
                            <script src="{{url('js/tinymce.min.js')}}"></script>
                            <script>
                                tinymce.init({
                                    selector: '#ckview'
                                });
                            </script>
                            
                            <div class="form-group">
                                <label for="nama">Rating</label>
                                <input class="form-control" type="text" name="rating" placeholder="Rating 1-5" id="nama">
                            </div>                         

                            <button type="submit" class="btn btn-primary">Submit</button>                           
                        </form>
						<br/>
						<br/>
						@foreach ($descriptions as $item)
							
						<div class="container">
								<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-2">
													<img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
												<p class="text-secondary text-center">{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</p>
												</div>
												<div class="col-md-10">
													<p>
													<a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$item->name}}</strong></a>
														<span class="float-right"><i class="text-warning fa fa-star"></i></span>
														<span class="float-right"><i class="text-warning fa fa-star"></i></span>
														<span class="float-right"><i class="text-warning fa fa-star"></i></span>
														<span class="float-right"><i class="text-warning fa fa-star"></i></span>
								
												   </p>
												   <div class="clearfix"></div>
												<p>{!!$item->description!!}</p>
													<p>
														<a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
														<a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
												   </p>
												</div>
											</div>
						</div>
						@endforeach
						
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection