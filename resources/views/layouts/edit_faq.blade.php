@extends('./layouts._default',['title'=>'Edit FAQ'])

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Edit a Frenquetly asked question</h4>
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
                    <form action="{{ route('update_faq')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$faq->id}}">
                        <label for="titre">Titre</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre" class="form-control" placeholder="titre" name="titre"  value="{{$faq->titre}}">
                            </div>
                        </div>
                        <label for="details">Details</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="details" class="form-control" name="details" value="{{$faq->details}}">
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