@extends('layouts.app')
@section('title','Software House')
@section('content')
	
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<section class="main_video_wrp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="video_text_wrp">
                    <h1>Book a time to talk <br> for open discussion</h1>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="video_box_wrp">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main_video_wrp">
    <div class="container">
        <form method="post" id="meetingForm" action="arrangeMeeting" enctype="multipart/form-data">
        	@csrf
        	<div class="row align-items-center">
	            <div class="col-lg-6">
	                <div class="video_text_wrp">
	                	<h3>Select Date and Time</h3>
	                    <div class="form-group">
				          <input type="date" class="form-control @if($errors->has('date')) is-invalid @enderror" id="inputDate" name="date">
				          @if($errors->has('date')) 
				           	<div class="error">{{ $errors->first('date') }}</div>
				          @enderror
				        </div>
				        <div class="form-group">
				        	<div class="row">
				        		<div class="col-6">
				        			<div class="form-control">
						        		<input type="radio" name="time" value="09:00:00"> 9:00
						        	</div>
				        			<div class="form-control">
						        		<input type="radio" name="time" value="09:10:00"> 9:10
						        	</div>
				        			<div class="form-control">
						        		<input type="radio" name="time" value="09:20:00"> 9:20
						        	</div>
						        </div>
				        		<div class="col-6">
				        			<div class="form-control">
						        		<input type="radio" name="time" value="09:30:00"> 9:30
						        	</div>
				        			<div class="form-control">
						        		<input type="radio" name="time" value="09:40:00"> 9:40
						        	</div>
				        			<div class="form-control">
						        		<input type="radio" name="time" value="09:50:00"> 9:50
						        	</div>
						        </div>
				        	</div>
				        </div>
				        @if($errors->has('time')) 
				           	<div class="error">{{ $errors->first('time') }}</div>
				        @enderror
	                </div>
	            </div>
	            <div class="col-lg-5">
	                <div class="">
	                	<h3>Purpose for the call</h3>
	                    <div class="form-group">
	                    	<input type="text" name="name" placeholder="Enter your full name"  class="form-control @if($errors->has('name')) is-invalid @enderror">
	                    	@if($errors->has('name'))
							    <div class="error">{{ $errors->first('name') }}</div>
							@endif
	                    </div>
	                    <div class="form-group">
	                    	<input type="text" name="email" placeholder="Email Address"  class="form-control @if($errors->has('email')) is-invalid @enderror">
	                    	@if($errors->has('email')) 
				           		<div class="error">{{ $errors->first('email') }}</div>
				          	@enderror
	                    </div>
	                    <div class="form-group">
	                    	<input type="text" name="cellnumber" placeholder="Cell or landline number"  class="form-control @if($errors->has('cellnumber')) is-invalid @enderror">
	                    	@if($errors->has('cellnumber')) 
				           		<div class="error">{{ $errors->first('cellnumber') }}</div>
				          	@enderror
	                    </div>
	                    <div class="form-group inputDnD">
					        <input type="file" class="form-control-file text-secondary font-weight-bold @if($errors->has('logo')) is-invalid @enderror" id="inputFile" onchange="readUrl(this)" data-title="Drag and drop to upload logo (DOC, PDF, Image, ETC)" name="logo">
					        @if($errors->has('logo')) 
				           		<div class="error">{{ $errors->first('logo') }}</div>
				          	@enderror
					    </div>
	                    <div class="form-group">
	                    	<textarea class="form-control @if($errors->has('note')) is-invalid @enderror" name="note" placeholder="Quick Note About Your Project"></textarea>
	                    	@if($errors->has('note')) 
				           		<div class="error">{{ $errors->first('note') }}</div>
				          	@enderror
	                    </div>
	                    <div class="form-group">
	                    	<button type="submit" class=" form-control btn btn-primary">Book Now</button>
	                    </div>
	                </div>
	            </div>
        	</div>
        </form>
    </div>
</section>
<style type="text/css">
	.inputDnD .form-control-file {
	  position: relative;
	  width: 100%;
	  height: 100%;
	  min-height: 6em;
	  outline: none;
	  visibility: hidden;
	  cursor: pointer;
	  background-color: #c61c23;
	  box-shadow: 0 0 5px solid currentColor;
	}
	.inputDnD .form-control-file:before {
	  content: attr(data-title);
	  position: absolute;
	  left: 0;
	  width: 100%;
	  min-height: 6em;
	  line-height: 2em;
	  padding-top: 1.5em;
	  opacity: 1;
	  visibility: visible;
	  text-align: center;
	  border: 0.25em dashed currentColor;
	  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
	  overflow: visible;
	}
	.inputDnD .form-control-file:hover:before {
	  border-style: solid;
	  box-shadow: inset 0px 0px 0px 0.25em currentColor;
	}
	.error {
	    color: red;
	}
</style>

@endsection
@section('app-js')
<script type="text/javascript">
	// $('#inputDate').datepicker({});
	function readUrl(input) {
	  if (input.files && input.files[0]) {
	    let reader = new FileReader();
	    reader.onload = (e) => {
	      let imgData = e.target.result;
	      let imgName = input.files[0].name;
	      input.setAttribute("data-title", imgName);
	      console.log(e.target.result);
	    }
	    reader.readAsDataURL(input.files[0]);
	  }
	}

	$('#inputDate').change(function(){
		var date = $(this).val();
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
		$.ajax({
          url:'checkTimeAvailability',
          type:'POST',
          data:{'date':date},
          dataType : 'json',
          encode: true,
          success:function(res){
          	console.log(res);
			$("input[type='radio'][name='time']").prop("disabled",false);
          	if (res) {
          		$.each(res, function(key, value) {
		          	var a = value.time;
		          	console.log(a);
					$("input[type='radio'][name='time'][value='" + a + "']").prop("disabled",true);
          		});
          	}
          }
        });
	});
</script>
@endsection
