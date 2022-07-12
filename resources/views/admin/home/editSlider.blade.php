@extends('admin.admin_master')

@section('admin_content')
<div class="row justify-content-center mt-3">
	<div class="col-md-8">
        @if (session('success'))
                 
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>{{ session('success') }}</strong> 
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>

         </button>
       </div>
        @endif
		<div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Edit Slider</h2>
			</div>

			<div class="card-body">
				<form action={{ url('slider/update/'.$sliders->id) }} method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="form-group">
						<label for="exampleFormControlInput1">Title</label>
						<input type="text" name="title" class="form-control" value={{ $sliders->title }}>
					</div>
	<div>

            @error('title')
                <span class="text-danger my-3">{{ $message }}</span>
            @enderror

    </div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">description</label>
						<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{ $sliders->description }}</textarea>
					</div>
                    @error('description')
                    <span class="text-danger my-3">{{ $message }}</span>
                @enderror
					<div class="form-group">
						<label for="exampleFormControlFile1">Image</label>
						<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" >
						<input type="hidden" name="old_image" class="form-control-file" id="exampleFormControlFile1" value={{ $sliders->image }} >
                        <img src="{{ asset($sliders->image) }} " class="img-thumbnail my-3"  alt="">
					</div>
                    @error('image')
                    <span class="text-danger my-3">{{ $message }}</span>
                @enderror
					<div class="form-footer pt-4 pt-5 mt-4 border-top">
						<button type="submit" class="btn btn-primary btn-default">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	
</div>





      </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
    
@endsection
