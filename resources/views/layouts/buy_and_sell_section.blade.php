@extends('./layouts._default',['title'=>'App_Config'])

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">Buy and Sell Section</h4>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- #START# Modal Form Example -->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModal">Nouveau Buy and Sell</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('store_buy_sell')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <br>
                                <label for="email_address1">Titre</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="titre" class="form-control" placeholder="Le titre" name="titre">
                                    </div>
                                </div>
                                <label for="password">Text</label>
                                <div class="form-group">
                                <div class="form-line">
                                        <input type="text" id="text" class="form-control" placeholder="le details" name="text">
                                    </div>
                                </div>
                                <label for="image">Icon</label>    
                                <input type="file" name="file" id="file">
                                <button type="submit" class="btn btn-info waves-effect">Enregistrer</button>
                                <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Annuler</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Modal Form Example -->

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">

                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example contact_list">
                                <thead>
                                    <tr>
                                        <th class="center"> Icon </th>
                                        <th class="center"> Titre </th>
                                        <th class="center"> Text </th>
                                        <th class="center"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($buy_and_sell as $item)
                                    <tr class="odd gradeX">
                                        <td class="">
                                            <img style="height: 50px!important;" src="{{asset('images')}}/{{$item->icon}}" alt="">
                                        </td>
                                        <td class="center">{{$item->titre}}</td>
                                        <td class="center">{{$item->text}}</td>
                                        <td class="center">
                                            <a href="/@dmin/edit_buy_sell/{{$item->id}}" class="btn btn-tbl-edit">
                                                <i class="material-icons">create</i>
                                            </a>
                                            <a href="/@dmin/buy_sell_destroy/{{$item->id}}" class="btn btn-tbl-delete">
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="center"> Icon </th>
                                        <th class="center"> Titre </th>
                                        <th class="center"> Text </th>
                                        <th class="center"> Action </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection