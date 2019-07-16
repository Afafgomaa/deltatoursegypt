
<!--- navigation -->
<div class="container">
<h1 class="mt-5">FAQS</h1>
	<div class="row">
	<div class="col-md-12">

		<div class="accordion pt-5 pb-5" id="accordion">
		@foreach($faqs as $faq)
		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{$faq->question}}" aria-expanded="true">
		                      {{$faq->question}}  <i class="fa fa-arrow-circle-right float-right fa-lg pt-2"></i>     
		</a> 

		<section id="{{$faq->question}}" class="collapse">
		<p>
		{!!$faq->answer!!}
		</p>


		</section>
		@endforeach
		

		</div>




		</div>
	</div>
</div>
