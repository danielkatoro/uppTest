@extends('./layouts._default',['title'=>'Edit Amazing Features'])

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Edit Amazing Features</h4>
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
                    <form action="{{ route('update_amazing_features')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$amazing_features->id}}">
                        <div class="form-group">
                            <label for="file">Image1</label>
                            <input id="file1" type="file" name="file1"><br>
                        </div>
                        <label for="titre1">Pargraphe 1</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre1" class="form-control" value="{{$amazing_features->titre1}}" name="titre1">
                            </div>
                        </div>
                        <label for="prix">Details 1</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="text1" class="form-control" value="{{$amazing_features->text1}}" name="text1">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="file">Image2</label>
                            <input id="file2" type="file" name="file2"><br>
                        </div>
                        <label for="titre1">Pargraphe 2</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre2" class="form-control" value="{{$amazing_features->titre2}}" name="titre2">
                            </div>
                        </div>
                        <label for="prix">Details 2</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="text2" class="form-control" value="{{$amazing_features->text2}}" name="text2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="file">Image3</label>
                            <input id="file3" type="file" name="file3"><br>
                        </div>
                        <label for="titre1">Pargraphe 3</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre3" class="form-control" value="{{$amazing_features->titre3}}" name="titre3">
                            </div>
                        </div>
                        <label for="prix">Details 3</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="text3" class="form-control" value="{{$amazing_features->text3}}" name="text3">
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