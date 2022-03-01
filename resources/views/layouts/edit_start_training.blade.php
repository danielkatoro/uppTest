@extends('./layouts._default',['title'=>'Edit Start Training'])

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Edit Start Training</h4>
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
                    <form action="{{ route('update_start_traiding')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$start_training->id}}" >
                        <label for="name">Nom</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="name" class="form-control" value="{{$start_training->name}}" name="name">
                            </div>
                        </div>
                        <label for="code">code</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="code" class="form-control" value="{{$start_training->code}}" name="code">
                            </div>
                        </div>
                        <label for="status">Status</label>
                        <div class="">
                            <select name="status" id="status">
                                <option value="Trending">Traiding</option>
                                <option value="Stable">Stable</option>
                                <option value="Downing">Downing</option>
                            </select>
                            <input type="text" id="pourcentage" class="form-control" value="{{$start_training->status}}" name="pourcentage">
                        </div>
                        <label for="price">Prix</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="price" class="form-control" value="{{$start_training->price}}" name="price">
                            </div>
                        </div>
                        <label for="evolution">Evolution</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="evolution" class="form-control" value="{{$start_training->evolution}}" name="evolution">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file">Logo</label>
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