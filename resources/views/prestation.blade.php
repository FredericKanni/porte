@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">listes de mes prestations</div>

                <div class="card-body">


                  page accueil profil

                  <a href="{{route('mesprestationCreate')}}"><button
                    class="btn btn-primary">creer une prestation</button></a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection