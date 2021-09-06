@extends('admin.layout')
@section('content')
		<div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
			
			<!--Console Content-->
			
			<div class="container mx-auto px-6">
				
				
				<!-- Tittle -->
				<div class="lg:flex lg:items-center lg:justify-between">
					<div class="flex-1 min-w-0">
						<h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
						Create new POST
						</h2>
					</div>
				</div>

				<div class="py-12">
				    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
				        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				            <div class="p-6 bg-white border-b border-gray-200">
				                <form method="POST" action="{{ route('posts.update', $post) }}">
				                	@csrf
				                	@method('put')
				                	<div class="grid grid-rows-2 grid-flow-col gap-4">
										<div class="col-span-1 ">
											<label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
											<input type="text" class="border-2 rounded {{ $errors->has('title') ? 'border-red-700' : 'border-gray-300' }}  p-2 w-full" name="title" id="title" value="{{ old('title', $post->title) }}">
											{!! $errors->first('title', '<span class="text-red-500"> :message </span>')!!} 
										</div>
										<div class="row-span-1 col-span-2">
											<label class="text-xl text-gray-600">Excerpt<span class="text-red-500">*</span></label></br>
											<input type="text" class="border-2 rounded {{ $errors->has('excerpt') ? 'border-red-700' : 'border-gray-300' }}  p-2 w-full" name="excerpt" value="{{ old('excerpt', $post->excerpt) }}">
											{!! $errors->first('excerpt', '<span class="text-red-500"> :message </span>')!!} 
										</div>
										<div class="row-span-2">
											<label class="block text-left" style="max-width: 300px;">
											<span class="text-gray-700">Tags<span class="text-red-500">*</span></span>
											<select class="border-2 form-multiselect block w-full mt-1 text-gray rounded {{ $errors->has('tags') ? 'border-red-700' : 'border-gray-300' }}" multiple name="tags[]">
												@foreach($tags as $tag)
												<option value="{{ $tag->id }}" {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
												@endforeach
											</select>
											</label>
											{!! $errors->first('category', '<span class="text-red-500"> :message </span>')!!} 
										</div>
									</div>

									<div class="grid grid-cols-2 gap-4 mt-3">
					                    <div class="mb-3">
											<label class="text-xl text-gray-600">Category<span class="text-red-500">*</span></label></br>
											<select id="vehicle_id" class="border-2 rounded {{ $errors->has('title') ? 'border-red-700' : 'border-gray-300' }}  p-2 w-full" name="category">
												<option value="">-- Select Category --</option>
												@foreach($categories as $category)
													<option value="{{ $category->id }}" {{ old('category', $post->category_id) == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>	
												@endforeach
											</select>
											{!! $errors->first('category', '<span class="text-red-500"> :message </span>')!!} 
					                    </div>					                    
					                    <div class="mb-3">
					                        <label class="text-xl text-gray-600">Published at<span class="text-red-500">*</span></label></br>
					                        <input type="date" class="border-2 rounded {{ $errors->has('title') ? 'border-red-700' : 'border-gray-300' }} p-2 w-full" name="published_at" value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d'): null) }}">
					                        {!! $errors->first('published_at', '<span class="text-red-500"> :message </span>')!!} 
					                    </div>
				                    </div>
				                    <div class="mb-3">
				                        <label class="text-xl rounded text-gray-600">Content <span class="text-red-500">*</span></label></br>
				                        <textarea id="editor" name="content" class="border-2 rounded border-gray-500">{{ old('content'), $post->body}}</textarea>
				                         {!! $errors->first('content', '<span class="text-red-500"> :message </span>')!!} 
				                    </div>
				                   
				                    <div class="flex p-1">
										<button type="submit" class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
										Save & Publish
										</button>
					                </div>
					            </form>
					        </div>
					    </div>
					</div>
				</div>
            </div>
								
			<!--/ Console Content-->
					
		</div>
		
@push('wysiwyg')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

	<script>
	    ClassicEditor
	        .create( document.querySelector( '#editor' ) )
	        .catch( error => {
	            console.error( error );
	        } );
	</script>
@endpush

@endsection