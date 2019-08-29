@extends('layouts.template')

@section('content')
<!-- Page Content -->
<section id="page-content" class="m-0 p-0">
    <div class="m-0">
        <div class="row">
            <!-- Sidebar,  ******************remplacer ceci par la parge évènement****************-->
            <div class="sidebar sticky-sidebar col-lg-3 p-30" style="background-color: #4a4a4e;">
                <h3 class="text-light">Gestion des publications</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Mes publications</a>
                    <a href="#" class="list-group-item list-group-item-action active">Créer une publication</a>
                    <a href="#" class="list-group-item list-group-item-action">Mes suivis en cours</a>
                    <a href="#" class="list-group-item list-group-item-action">Mes suivis terminés</a>
                </div>
            </div>
            <!-- content -->

            <!------------------------------------------------------------------------------------------- -->
            <div class="content col-lg-8 p-t-10">
                <h2>Consulter les anciennes Réunions</h2>
                <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Date des réunions</th>
                            <th>Adresse du lieu</th>
                            <th>Plage horaire</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2019-08-16</td>
                            <td>2390, route de l'église</td>
                            <td>16h00 - 17h30 </td>
                            <td>Consulter rapport </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Pagination -->
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
                <!-- end: Pagination -->
            </div>
            <!-- end: content -->
        </div>
    </div>
</section>
<!-- end: Page Content -->
@endsection