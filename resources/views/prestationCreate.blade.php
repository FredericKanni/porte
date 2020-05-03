@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">creer une prestation</div>

                <div class="card-body">


                    <form  action="{{ route('mesprestationStore') }}" method="POST">
                            @csrf

                        <div class="form-group">
                          <label for="nom">nom</label>
                          <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
                        </div>

                        <div class="form-group">
                          <label for="description">description</label>
                          <input type="text" class="form-control" id="description"  name="description" placeholder="description">
                        </div>

                        <div class="form-group">
                            <label for="url">url</label>
                            <input type="text" class="form-control" id="url" name="url" placeholder="url">
                          </div>

                          <button type="submit"class="btn btn-primary" >ajouter une prestation</button>  

                      </form>
                </div>
            </div>
        </div>
    </div>
</div>





  @endsection