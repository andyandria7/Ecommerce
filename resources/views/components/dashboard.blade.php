@extends("layouts.master")
@section('title')
    Dashboard
@endsection
@section('content')
<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12"> 
                <div class="user-sidebar">
                    <ul>
                    <a href="dashboard.php"><button class="btn btn-danger">Tableau de bord</button></a>
                    <a href="customer-profile-update.php"><button class="btn btn-danger">profil à jour</button></a>
                        <a href="customer-billing-shipping-update.php"><button class="btn btn-danger">commande à jour</button></a>
                        <a href="customer-password-update.php"><button class="btn btn-danger">Modifier mot de pass</button></a>
                        <a href="customer-order.php"><button class="btn btn-danger">Modifier Commande</button></a>
                        <a href="{{ route('logout') }}"><button class="btn btn-danger">Deconnexion</button></a>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="user-content">
                    <h3 class="text-center">
                       test
                    </h3>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection