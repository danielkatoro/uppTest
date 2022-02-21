@extends('./layouts._default',['title'=>'Principal Banner'])

@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Edit Employee</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Employee</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Employee</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Principal</strong> Banner</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu float-end">
                                        <li>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Modal
                                        With Form</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="formModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="formModal">Modal title</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <label for="email_address1">Email Address</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="email_address1"
                                                                    class="form-control"
                                                                    placeholder="Enter your email address">
                                                            </div>
                                                        </div>
                                                        <label for="password">Password</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="password" id="password"
                                                                    class="form-control"
                                                                    placeholder="Enter your password">
                                                            </div>
                                                        </div>
                                                        <div class="form-check m-l-10">
                                                            <label class="form-check-label"> <input
                                                                    class="form-check-input" type="checkbox" value="">
                                                                Remember Me <span class="form-check-sign"> <span
                                                                        class="check"></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <button type="button"
                                                            class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                        class="btn btn-info waves-effect">Save</button>
                                                    <button type="button" class="btn btn-danger waves-effect"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            @foreach($principal_banner as $item)
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <label for="">Titre principal</label><br>
                                    <h4>{{ $item->titre}}</h4>
                                    <label for="">Détails</label>
                                    <p>{{ $item->text }}</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <img src="{{asset('images')}}/{{$item->image}}" alt="">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
    