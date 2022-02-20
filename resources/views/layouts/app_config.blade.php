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
                                <strong>Settins</strong> application</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
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
                            <div class="row clearfix">
                            <div class="col-sm-6">
                                    <div class="input-field col s12">
                                        <textarea id="textarea2" class="materialize-textarea"
                                            data-length="120"></textarea>
                                        <label for="textarea2">Nom de l'application</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field col s12">
                                        <textarea id="textarea2" class="materialize-textarea"
                                            data-length="120"></textarea>
                                        <label for="textarea2">Description</label>
                                    </div>
                                </div>
                            </div>
                            
                            <h2 class="card-inside-title">Logo</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <form action="#">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <form action="#">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file" multiple>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text"
                                                    placeholder="Upload one or more files">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">ENREGISTRER</button>
                            </div>
                            
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