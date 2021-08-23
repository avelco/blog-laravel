@extends('layout')

@section('content')	
      <div class="mb-4 md:mb-0 w-full  mx-auto relative" style="height: 24em;">
        <div class="absolute left-0 bottom-0 w-full h-full z-10"
          style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
        <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
        <div class="p-4 absolute bottom-0 left-0 z-20">
          <a href="#"
            class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $post->category->name }}</a>
          <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
            {{ $post->title }}
          </h2>
          <div class="flex mt-3">
            <img src="https://randomuser.me/api/portraits/men/97.jpg"
              class="h-10 w-10 rounded-full mr-2 object-cover" />
            <div>
              <p class="font-semibold text-gray-200 text-sm"> Mike Sullivan </p>
              <p class="font-semibold text-gray-400 text-xs"> {{ $post->published_at->format('M d') }} </p>
            </div>
          </div>
        </div>
      </div>

        <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            {!! $post->body  !!}
            <div class="flex items-center justify-start mt-4 mb-4">
                @foreach($post->tags as $tag)
                    <span class="px-2 py-1 bg-red-400 text-white rounded-lg mr-4 text-sm">#{{$tag->name}}</span>
                @endforeach
            </div>
        </div>
        <!--post categories-->
    </main>
    <!-- main ends here -->

@endsection