@extends('admin.layout')
@section('content')
		<div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
			
			<!--Console Content-->
			
			<div class="container mx-auto px-6">

				<table id="table-list" class="display" style="width:100%">
			        <thead>
			            <tr>
			                <th>Title</th>
			                <th>Published At</th>
			                <th>Category</th>
			                <th>Actions</th>
			            </tr>
			        </thead>
			        <tbody>
			            @foreach( $posts as $post)
			            <tr>
			                <td> {{$post->title}} </td>
			                <td>{{ $post->published_at}}</td>
			                <td>{{ $post->category->name}}</td>
			                <td>
			                	<button type="button" class="bg-blue-500 text-white px-4 py-1 rounded-lg font-medium mx-2 hover:bg-blue-600 transition duration-200 each-in-out"><i class="fas fa-pencil-alt"></i></button>
			                </td>
			                
			            </tr>
			            @endforeach
			        </tbody>
			        <tfoot>
			            <tr>
			                <th>Title</th>
			                <th>Published At</th>
			                <th>Category</th>
			                <th>Actions</th>
			            </tr>
			        </tfoot>
			    </table>

            </div>
								
			<!--/ Console Content-->
					
		</div>
@endsection