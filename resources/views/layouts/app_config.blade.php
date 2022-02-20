@extends('./layouts._default',['title'=>'App_Config'])

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Basic Form</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index.html">
                                <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item bcrumb-2">
                            <a href="#" onClick="return false;">Forms</a>
                        </li>
                        <li class="breadcrumb-item active">Basic</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Settins</strong> application
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu float-end">
                                    <li>
                                        <a href="#" onClick="return false;">Action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form action="{{ route('Save_app_config')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $app_config->id }}">
                            <label for="name">Nom de l'application</label>
                            <input type="text" name="name" id="name" value="{{ $app_config->name }}">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="name" {{ $app_config->description }}>
                            <label for="image">Logo de l'application</label>
                            <input type="file" name="file" id="image">
                            <input type="submit" value="Enregistrer les modifications">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->

    </div>
</section>
@endsection
<script src="{{ asset('admin/js/app.min.js') }}"></script>
<script src="{{ asset('admin/js/form.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('admin/js/admin.js') }}"></script>
<script src="{{ asset('admin/js/pages/forms/basic-form-elements.js') }}"></script>
<script>
    function previewfile(input){
        var file = $("input[type=file]").get(0).files[0];
        if(file)
        {
            var reader = new FileReader();
            reader.onload = function(){
                $('#previewImg').attr("scr",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>