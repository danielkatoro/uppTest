@extends('./layouts._default',['title'=>'Edit Crypto-Slide'])

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Edit Crypto-Slide</h4>
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
                    <form action="{{ route('update_testimonials')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$testimonials->id}}">
                        <label for="name">Nom</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="name" class="form-control" value="{{$testimonials->name}}" name="name">
                            </div>
                        </div>
                        <label for="name">Titre</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre" class="form-control" value="{{$testimonials->titre}}" name="titre">
                            </div>
                        </div>
                        <label for="detail">Description</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="detail" class="form-control" value="{{$testimonials->detail}}" name="detail">
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