
{{--/**
 * Created by PhpStorm.
 * User: ashraful
 * Date: 12/2/18
 * Time: 1:08 PM
 */--}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                {{-- layouts/sidemenu.blade.php --}}
                @include('layouts.sidemenu')
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Mobile App User List</div>
                    <div class="panel-body">
                        <table class="table table-condensed table-bordered table-striped margin-0">
                            <thead>
                            <tr>
                                <th class="wide-10">SL</th>
                                <th class="wide-20">Name</th>
                                <th class="wide-60">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($appUsers as $indexKey =>$appUser)
                                <tr>
                                    <td>{{$indexKey +1}}</td>
                                    <td>{{$appUser->name}}</td>
                                    <td>{{$appUser->email}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
