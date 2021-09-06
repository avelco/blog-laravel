@extends('admin.layout')
@section('content')
		<div class="w-full px-4 md:px-0 md:mt-1 mb-16 text-gray-800 leading-normal">
			
			<!--Console Content-->
			
			<div class="container mx-auto px-6">
				
				
				<!-- Tittle -->
				<div class="mx-auto flex">
					<div class="flex float-left">
						<span class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
						All Post
						</span>
					</div>
					<div class="flex flex-row-reverse">
						<button class="modal-open rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300"><i class="fa fa-plus mr-1"></i> Create New Post</button>
					</div>
					</div>
				</div>
				
				<!-- component -->
				<div class="overflow-x-auto">
			        <div class="flex items-center justify-center font-sans overflow-hidden">
			            <div class="w-full lg:w-5/6">
			                <div class="bg-white shadow-md rounded my-6">
			                    <table class="min-w-max w-full table-auto">
			                        <thead>
			                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
			                                <th class="py-3 px-6 text-left">User</th>
			                                <th class="py-3 px-6 text-left">Title</th>
			                                <th class="py-3 px-6 text-left">Published At</th>
			                                <th class="py-3 px-6 text-center">Category</th>
			                                <th class="py-3 px-6 text-center">Actions</th>
			                            </tr>
			                        </thead>
			                        <tbody class="text-gray-600 text-sm font-light">
			   			            	@foreach( $posts as $post)
			                            <tr class="border-b border-gray-200 hover:bg-gray-100">
			                                <td class="py-3 px-6 text-left whitespace-nowrap">
			                                    <div class="flex items-center">
			                                        <div class="mr-2">
			                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
			                                                 width="24" height="24"
			                                                 viewBox="0 0 48 48"
			                                                 style=" fill:#000000;">
			                                                <path fill="#80deea" d="M24,34C11.1,34,1,29.6,1,24c0-5.6,10.1-10,23-10c12.9,0,23,4.4,23,10C47,29.6,36.9,34,24,34z M24,16	c-12.6,0-21,4.1-21,8c0,3.9,8.4,8,21,8s21-4.1,21-8C45,20.1,36.6,16,24,16z"></path><path fill="#80deea" d="M15.1,44.6c-1,0-1.8-0.2-2.6-0.7C7.6,41.1,8.9,30.2,15.3,19l0,0c3-5.2,6.7-9.6,10.3-12.4c3.9-3,7.4-3.9,9.8-2.5	c2.5,1.4,3.4,4.9,2.8,9.8c-0.6,4.6-2.6,10-5.6,15.2c-3,5.2-6.7,9.6-10.3,12.4C19.7,43.5,17.2,44.6,15.1,44.6z M32.9,5.4	c-1.6,0-3.7,0.9-6,2.7c-3.4,2.7-6.9,6.9-9.8,11.9l0,0c-6.3,10.9-6.9,20.3-3.6,22.2c1.7,1,4.5,0.1,7.6-2.3c3.4-2.7,6.9-6.9,9.8-11.9	c2.9-5,4.8-10.1,5.4-14.4c0.5-4-0.1-6.8-1.8-7.8C34,5.6,33.5,5.4,32.9,5.4z"></path><path fill="#80deea" d="M33,44.6c-5,0-12.2-6.1-17.6-15.6C8.9,17.8,7.6,6.9,12.5,4.1l0,0C17.4,1.3,26.2,7.8,32.7,19	c3,5.2,5,10.6,5.6,15.2c0.7,4.9-0.3,8.3-2.8,9.8C34.7,44.4,33.9,44.6,33,44.6z M13.5,5.8c-3.3,1.9-2.7,11.3,3.6,22.2	c6.3,10.9,14.1,16.1,17.4,14.2c1.7-1,2.3-3.8,1.8-7.8c-0.6-4.3-2.5-9.4-5.4-14.4C24.6,9.1,16.8,3.9,13.5,5.8L13.5,5.8z"></path><circle cx="24" cy="24" r="4" fill="#80deea"></circle>
			                                            </svg>
			                                        </div>
			                                        <span class="font-medium">Uusario</span>
			                                    </div>
			                                </td>
			                                <td class="py-3 px-6 text-left">
			                                        {{$post->title}}
			                                </td>
			                                <td class="py-3 px-6 text-center">
			                                    {{ $post->published_at}}
			                                </td>                                
			                                <td class="py-3 px-6 text-center">
			                                    {{ $post->category->name}}
			                                </td>
			                                <td class="py-3 px-6 text-center">
			                                    <div class="flex item-center justify-center">
			                                        <div class="w-4 mr-4 transform hover:scale-110">
			                                        	<a href="{{ route('posts.edit', $post->url) }}" class="text-black-400 py-1 mx-2 hover:text-blue-600 transition duration-200 each-in-out"><i class="fas fa-eye"></i></a>
			                                        </div>
			                                        <div class="w-4 mr-4 transform hover:scale-110">
			                                           	<a href="{{ route('posts.destroy', $post->url) }}" class="text-black-400 py-1 mx-2 hover:text-blue-600 transition duration-200 each-in-out"><i class="fas fa-trash-alt"></i></a>
			                                        </div>
			                                    </div>
			                                </td>
			                            </tr>
			                            @endforeach
			                        </tbody>
			                    </table>
			                </div>
			            </div>
			        </div>
			    </div>
		</div>

		<!--Modal-->
		<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
		    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
		
		    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
		        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
		            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
		                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
		            </svg>
		            <span class="text-sm">(Esc)</span>
		        </div>
		
		        <!-- Add margin if you want to see some of the overlay behind the modal-->
		        <div class="modal-content py-4 text-left px-6">
		            <!--Title-->
		            <div class="flex justify-between items-center pb-3">
		                <p class="text-2xl font-bold">Post  creation</p>
		                <div class="modal-close cursor-pointer z-50">
		                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
		                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
		                    </svg>
		                </div>
		            </div>
		
		            <!--Body-->
	                <form method="POST" action="{{ route('posts.store') }}">
	                	@csrf
	                	<div>
							<div class="col-span-1 ">
								<label class="text-xl text-gray-600">Post title <span class="text-red-500">*</span></label></br>
								<input type="text" class="border-2 rounded {{ $errors->has('title') ? 'border-red-700' : 'border-gray-300' }}  p-2 w-full" name="title" id="title" value="{{ old('title') }}" required>
								{!! $errors->first('title', '<span class="text-red-500"> :message </span>')!!} 
							</div>
						</div>

			            <!--Footer-->
			            <div class="flex justify-end pt-2">
			                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Cancel</button>
			                <button type="submit" class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Create</button>
			            </div>
					</form>
		        </div>
		    </div>
		</div>





</div>
@push('scripts')
  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
     
  </script>
@endpush
@endsection