@extends('layout')

@section('content')			

		<!--Lead Card-->
		<div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
			<a href="{{ route('blog.show', $post[0]->url)}}" class="flex flex-wrap no-underline hover:no-underline">
				<div class="w-full md:w-2/3 rounded-t">	
					<img src="https://source.unsplash.com/collection/494263/800x600" class="h-full w-full shadow">
				</div>

				<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
					<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
						<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">{{ $post[0]->published_at->format('M d') }}</p>
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[0]->category->name }}</p>
						<div class="w-full font-bold text-xl text-gray-900 px-6">{{ $post[0]->title }}</div>
						<p class="text-gray-800 font-serif text-base px-6 mb-5">
							{{ $post[0]->excerpt }}
						</p>
					</div>

					<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
						<div class="flex items-center justify-between">
							<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
							<span class="text-gray-600 text-xs md:text-sm">
								@foreach($post[0]->tags as $tag)
									#{{ $tag->name }}
								@endforeach
							</span>
						</div>
					</div>
				</div>

			</a>
		</div>
		<!--/Lead Card-->


		<!--Posts Container-->
		<div class="flex flex-wrap justify-between pt-12 -mx-6">

			<!--1/3 col -->
			<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
					<a href="{{ route('blog.show', $post[1]->url)}}" class="flex flex-wrap no-underline hover:no-underline">
						<img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[1]->published_at->format('M d') }}</p>
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[1]->category->name }}</p>
						<div class="w-full font-bold text-xl text-gray-900 px-6">{{ $post[1]->title }}</div>
						<p class="text-gray-800 font-serif text-base px-6 mb-5">
							{{ $post[1]->excerpt }} 
						</p>
					</a>
				</div>
				<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
					<div class="flex items-center justify-between">
						<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
							<span class="text-gray-600 text-xs md:text-sm">
								@foreach($post[0]->tags as $tag)
									#{{ $tag->name }}
								@endforeach
							</span>
					</div>
				</div>
			</div>
		
			
			<!--1/3 col -->
			<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
					<a href="{{ route('blog.show', $post[2]->url)}}" class="flex flex-wrap no-underline hover:no-underline">
						<img src="https://source.unsplash.com/collection/3106804/800x600" class="h-64 w-full rounded-t pb-6">
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[2]->published_at->format('M d') }}</p>
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[2]->category->name }}</p>
						<div class="w-full font-bold text-xl text-gray-900 px-6">{{ $post[2]->title }}</div>
						<p class="text-gray-800 font-serif text-base px-6 mb-5">
							{{ $post[2]->excerpt }}
						</p>
					</a>
					</div>
				<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
					<div class="flex items-center justify-between">
						<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
							<span class="text-gray-600 text-xs md:text-sm">
								@foreach($post[2]->tags as $tag)
									#{{ $tag->name }}
								@endforeach
							</span>
					</div>
				</div>
			</div>

			<!--1/3 col -->
			<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
					<a href="{{ route('blog.show', $post[3]->url)}}" class="flex flex-wrap no-underline hover:no-underline">
						<img src="https://source.unsplash.com/collection/539527/800x600" class="h-64 w-full rounded-t pb-6">
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[3]->published_at->format('M d') }}</p>
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[3]->category->name }}</p>
						<div class="w-full  font-bold text-xl text-gray-900 px-6">{{ $post[3]->title }}</div>
						<p class="text-gray-800 font-serif text-base px-6 mb-5">
							{{ $post[3]->excerpt }}
						</p>
					</a>
				</div>
				<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
					<div class="flex items-center justify-between">
						<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
							<span class="text-gray-600 text-xs md:text-sm">
								@foreach($post[3]->tags as $tag)
									#{{ $tag->name }}
								@endforeach
							</span>
					</div>
				</div>
			</div>


			<!--1/2 col -->
			<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
					<a href="{{ route('blog.show', $post[4]->url)}}" class="flex flex-wrap no-underline hover:no-underline">
						<img src="https://source.unsplash.com/collection/3657445/800x600" class="h-full w-full rounded-t pb-6">
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[4]->published_at->format('M d') }}</p>
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[4]->category->name }}</p>
						<div class="w-full font-bold text-xl text-gray-900 px-6">{{ $post[4]->title }}</div>
						<p class="text-gray-800 font-serif text-base px-6 mb-5">
							{{ $post[4]->excerpt }}
						</p>
					</a>
				</div>
				<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
					<div class="flex items-center justify-between">
						<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
							<span class="text-gray-600 text-xs md:text-sm">
								@foreach($post[4]->tags as $tag)
									#{{ $tag->name }}
								@endforeach
							</span>
					</div>
				</div>
			</div>

			<!--1/2 col -->
			<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
					<a href="{{ route('blog.show', $post[5]->url)}}" class="flex flex-wrap no-underline hover:no-underline">	
						<img src="https://source.unsplash.com/collection/764827/800x600" class="h-full w-full rounded-t pb-6">
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[5]->published_at->format('M d') }}</p>
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[5]->category->name }}</p>
						<div class="w-full font-bold text-xl text-gray-900 px-6">{{ $post[5]->title }}</div>
						<p class="text-gray-800 font-serif text-base px-6 mb-5">
							{{ $post[5]->excerpt }}
						</p>
					</a>
				</div>
				<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
					<div class="flex items-center justify-between">
						<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
							<span class="text-gray-600 text-xs md:text-sm">
								@foreach($post[5]->tags as $tag)
									#{{ $tag->name }}
								@endforeach
							</span>
					</div>
				</div>
			</div>



			<!--2/3 col -->
			<div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
					<a href="{{ route('blog.show', $post[6]->url)}}" class="flex flex-wrap no-underline hover:no-underline">	
						<img src="https://source.unsplash.com/collection/325867/800x600" class="h-full w-full rounded-t pb-6">
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[6]->published_at->format('M d') }}</p>
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[6]->category->name }}</p>
						<div class="w-full font-bold text-xl text-gray-900 px-6">{{ $post[6]->title }}</div>
						<p class="text-gray-800 font-serif text-base px-6 mb-5">
							{{ $post[6]->excerpt }}
						</p>
					</a>
				</div>
				<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
					<div class="flex items-center justify-between">
						<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
							<span class="text-gray-600 text-xs md:text-sm">
								@foreach($post[6]->tags as $tag)
									#{{ $tag->name }}
								@endforeach
							</span>
					</div>
				</div>
			</div>

			<!--1/3 col -->
			<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
				<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
					<a href="{{ route('blog.show', $post[7]->url)}}" class="flex flex-wrap no-underline hover:no-underline">
						<img src="https://source.unsplash.com/collection/1118905/800x600" class="h-full w-full rounded-t pb-6">
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[7]->published_at->format('M d') }}</p>
						<p class="w-full text-gray-600 text-xs md:text-sm px-6">{{ $post[7]->category->name }}</p>
						<div class="w-full font-bold text-xl text-gray-900 px-6">{{ $post[7]->title }}</div>
						<p class="text-gray-800 font-serif text-base px-6 mb-5">
							{{ $post[7]->excerpt }}
						</p>
					</a>
				</div>
				<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
					<div class="flex items-center justify-between">
						<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
							<span class="text-gray-600 text-xs md:text-sm">
								@foreach($post[7]->tags as $tag)
									#{{ $tag->name }}
								@endforeach
							</span>
					</div>
				</div>
			</div>

		</div>
		<!--/ Post Content-->
		
		<a href="{{ route('blog.category_all', Request::segment(3)) }}" class="text-center flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider py-4 rounded shadow hover:bg-green-400">Ver todos los post</a>
		
	</div>
	
@endsection