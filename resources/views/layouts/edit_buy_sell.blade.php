@extends('./layouts._default',['title'=>'Edit Buy Sell'])

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Edit Buy and Sell</h4>
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
                    <form action="{{ route('update_buy_sell')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$edit_buy_sell->id}}">
                        <label for="email_address1">Titre</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="titre" class="form-control" value="{{$edit_buy_sell->titre}}" name="titre">
                            </div>
                        </div>
                        <label for="password">Text</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="text" class="form-control" value="{{$edit_buy_sell->text}}" name="text">
                            </div>
                        </div>
                        <label for="image">Icon</label>
                        <input type="file" name="file" id="file">
                        <button type="submit" class="btn btn-info waves-effect">Enregistrer</button>
                        <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection