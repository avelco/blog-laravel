
		<!-- Navbar goes here -->
		<nav class="bg-white shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4 px-2">
								<i class="fas fa-moon text-blue-400 pr-3"></i> Alejo's blog admin panel
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
							<a href="{{route('dashboard')}}" class="py-4 px-2 text-gray-500 hover:text-blue-500 {{ request()->is('admin/dashboard') ? 'border-b-4 border-gray-500 font-semibold ' : ''}} ">Home</a>
							<a href="{{route('posts.index')}}" class="{{ request()->is('admin/posts') ? 'border-b-4 border-gray-500 font-semibold ' : ''}} py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Posts</a>
							<a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Categories</a>
							<a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Tags</a>
							<a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Users</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
					<span href="" class="py-2 px-2 font-medium text-gray-500">Hola {{ Auth::user()->name }}</span>|				
					<form id="frm-logout" action="{{ route('logout') }}" method="POST">
                        @csrf
						<button type="submit" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-gray-900 hover:text-white transition duration-300">Salir</button>
					</form>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-blue-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li><a href="index.html" class="block text-sm px-2 py-4 text-white bg-blue-500 font-semibold">Home</a></li>
					<li><a href="#services" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Posts</a>
					<li><a href="#about" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Categories</a>
					<li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Tags</a>
					<li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">Users</a>
				</ul>
			</div>
		</nav>