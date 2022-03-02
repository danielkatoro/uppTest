@extends('./layouts._default',['title'=>'Edit Last-news'])

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Edit Last news</h4>
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
                    <form action="{{ route('update_last_news')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$last_news->id}}">
                        <label for="date">Date Publication</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="date" id="date" class="form-control" value="{{$last_news->date}}" name="date">
                            </div>
                        </div>
                        <label for="titre">Titre</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre" class="form-control" value="{{$last_news->titre}}" name="titre">
                            </div>
                        </div>

                        <label for="text">Details</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="text" class="form-control" value="{{$last_news->text}}" name="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input id="file" type="file" name="file"><br>
                        </div>
                        <button type="submit" class="btn btn-info waves-effect">Enregistrer</button>
                        <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection