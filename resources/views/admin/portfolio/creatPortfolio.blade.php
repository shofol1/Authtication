@extends('admin.admin_master')

@section('admin_content')
<div class="row justify-content-center mt-3">
	<div class="col-md-8">
		<div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Add Portfolio</h2>
			</div>

			<div class="card-body">
				<form action={{ route('store.portfolio') }} method="POST" enctype="multipart/form-data">
                    @csrf
					
					<div class="form-group">
						<label for="exampleFormControlFile1">Image</label>
						<input type="file" class="form-control-file" name="images[]" multiple="">
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
