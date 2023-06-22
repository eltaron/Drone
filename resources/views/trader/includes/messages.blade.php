<div class="row p-3">
    <div class="col-md-12">
        @if ($errors->any())
        <div class="alert  mt-4 mb-4 p-3 alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button></div>
        @endif
        @if(session()->has('success'))
            <div class="alert  mt-4 mb-4 p-3 alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(session()->has('faild'))
        <div class="alert  mt-4 mb-4 p-3 alert-danger alert-dismissible fade show" role="alert">
            <strong>Faild</strong> {{session('faild')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>    </div>
        @endif
    </div>
</div>
