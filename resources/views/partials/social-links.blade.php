    <!--social buttons-->
    <div class="flex items-center justify-center space-x-3">
        <a title="Compartir en Facebook" class="flex justify-center items-center content-center bg-gradient-to-br from-blue-300 to-blue-600 shadow-md hover:shadow-lg h-10 w-10 rounded-full fill-current text-white" href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }}&title={{$post->title}}">
            <i class="fab fa-facebook-f"></i>
        </a>        
        <a title="Compartir en Twiiter"  class="flex justify-center items-center content-center bg-gradient-to-br from-blue-200 to-blue-400 shadow-md hover:shadow-lg h-10 w-10 rounded-full fill-current text-white" href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{$post->title}}&via=Avelco Blog">
            <i class="fab fa-twitter"></i>
        </a>        
        <a title="Compartir en Linkedin"  class="flex justify-center items-center content-center bg-gradient-to-br from-blue-300 to-blue-600 shadow-md hover:shadow-lg h-10 w-10 rounded-full fill-current text-white" href="https://www.linkedin.com/sharing/share-offsite/?url={{ request()->fullUrl() }}">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </div>