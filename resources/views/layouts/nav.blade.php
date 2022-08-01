<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">



                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <ul class="admin-option">
                        <li><a class="btn btn-primary" href="{{route('category.create')}}">Thêm danh mục sách </a></li>
                        <li><a class="btn btn-primary" href="{{route('category.index')}}">Liệt kê danh mục sách</a></li>
                        <li><a class="btn btn-success" href="{{route('post.create')}}">Thêm sách</a></li>
                        <li><a class="btn btn-success" href="{{route('post.index')}}">Liệt kê sách</a></li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>