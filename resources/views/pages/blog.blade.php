@extends('layouts.master')






@section('blog')
    <!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Recent Blog</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="#" class="more">View All Posts</a>
					</div>
				</div>

				<div class="row">

					@for ($i=0;$i<3;$i++)
                        @include('components.cardBlog')
                    @endfor

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	
@endsection