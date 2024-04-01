<x-index>
    <br>
    <div class="row">
        <div class="col-lg-12">
            @foreach($blogs as $blog)
            <div class="card">
                <div class="card-header">
                    <h2>{{ $blog->title }}</h2>
                    @if($blog->author === 1)
                        <i>posted by <b>Admin</b></i>
                    @else
                        <i>posted by <b>User</b></i>
                    @endif
                </div>
                <div class="card-body">
                <img src="{{ asset( $blog->hero) }}" width="100%" height="400px" alt="">

                </div>
                <div class="card-footer">
                    <h4>{{ $blog->description }}</h4>
                    @php echo "<p> $blog->body </p>"; @endphp

                </div>
                
            </div>
            @endforeach
        </div>
    </div>
    <br>
</x-index>