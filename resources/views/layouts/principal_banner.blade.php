@extends('./layouts._default',['title'=>'Principal Banner'])

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Configuration de la Bannier Principale</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Principal</strong> Banner
                        </h2>

                    </div>
                    <div class="body">
                        @if(Session::has('message'))
                        <div class="container col-6 alert alert-success text-center">
                            <h5>Modifications éffecectuées</h5>
                        </div>
                        @endif
                        @foreach($principal_banner as $item)
                        <form action="{{ route('update_principal_banner')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id}}">
                            <div class="row clearfix">
                                <div class="col-sm-6" style="margin-left: 100px;">
                                    <div class="form-group">
                                        <img height="230px" src="{{asset('images')}}/{{$item->image}}" alt="">
                                        <input type="file" name="file">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="titre">Titre Principal</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input name="titre" value="{{ $item->titre}}" type="text" id="titre" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="text">Details</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="text" id="text" class="form-control">{{ $item->text }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <input type="checkbox" id="remember_me_4" class="filled-in">
                                    <button type="SUBMIT" class="btn btn-primary m-t-15 waves-effect">ENREGISTRER LES MODIFICATIONS</button>
                                </div>
                            </div>
                            @endforeach
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection