<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        @if(auth()->check())
            <p>Welcome {{auth()->user()->name}}</p>
        @else
            <p>guest</p>
        @endif
    </div>
</div>