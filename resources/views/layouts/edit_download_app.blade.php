@extends('./layouts._default',['title'=>'Edit download_app Section'])

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Edit Download App</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">

                <div class="body">
                    <form action="{{ route('update_download_app')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$download_app->id}}">
                        <div class="form-group">
                            <label for="file">Video</label>
                            <input id="file" type="file" name="file"><br>
                        </div>
                        <label for="titre1">Pargraphe 1</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre1" class="form-control" value="{{$download_app->titre1}}" name="titre1">
                            </div>
                        </div>
                        <label for="prix">Details 1</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="text1" class="form-control" value="{{$download_app->text1}}" name="text1">
                            </div>
                        </div>

                        <label for="titre1">Pargraphe 2</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre2" class="form-control" value="{{$download_app->titre2}}" name="titre2">
                            </div>
                        </div>
                        <label for="prix">Details 2</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="text2" class="form-control" value="{{$download_app->text2}}" name="text2">
                            </div>
                        </div>

                        <label for="titre1">Pargraphe 3</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre3" class="form-control" value="{{$download_app->titre3}}" name="titre3">
                            </div>
                        </div>
                        <label for="prix">Details 3</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="text3" class="form-control" value="{{$download_app->text3}}" name="text3">
                            </div>
                        </div>

                        <label for="titre1">Pargraphe 4</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre4" class="form-control" value="{{$download_app->titre4}}" name="titre4">
                            </div>
                        </div>
                        <label for="prix">Details 4</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="text1" class="form-control" value="{{$download_app->text1}}" name="text4">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-info waves-effect">Enregistrer</button>
                        <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection