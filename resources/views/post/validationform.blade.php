<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
		<form action="validationform.php" method="POST" enctype="multipart/form-data">
    		    @csrf
    		    <div class="form-group has-error">
    		        <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
    		        <input type="text" class="form-control" name="slug" value="{{old('slug')}}"/>
            
                    @error('slug')
                    <span class="text_danger">{{ $message}}</span>
                    @enderror
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}" />
                    @error('title')
                    <span class="text_danger">{{ $message}}</span>
                    @enderror
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Description</label>
                    <textarea rows="5" class="form-control" name="description" value="{{old('description')}}" ></textarea>
                    @error('description')
                    <span class="text_danger">{{ $message}}</span>
                    @enderror
				</div>
				<div class="form-group">
                    <label for="description">Description</label>
                    <br>
    		        <select class="custom-select" name="categories[]" multiple style="width: 100%;">
						<option value="1" {{ old('categories') && in_array(1, old('categories')) ? 'selected' : '' }}>PHP</option>
						<option value="2" {{ old('categories') && in_array(2, old('categories')) ? 'selected' : '' }}>JAVA</option>
                      </select>
                      @error('categories')
                    <span class="text_danger">{{ $message}}</span>
                    @enderror
    		    </div>
    		    <div class="form-group">
                    <label for="description">Image</label>
                    <br>
    		        <input type="file"
							id="image" name="image"
                            accept="image/png, image/jpeg"  value="{{old('image')}}">
                    @error('image')
                    <span class="text_danger">{{ $message}}</span>
                    @enderror
    		    </div>
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>