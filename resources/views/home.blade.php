@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Details</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $dt)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$dt->name}}</td>
                            <td>{{$dt->email}}</td>
                            <td>@mdo</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>
@endsection