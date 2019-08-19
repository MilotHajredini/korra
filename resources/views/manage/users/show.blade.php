@extends('layouts.manage')

@section('content')
    <div class="container">
        <div class="columns m-t-10 m-r-10 m-l-10">
                    <div class="column is-6" style="height:100px">
                        <h1 class="title">Hello</h1>
                    </div>
                    
        </div>
        <hr>

        @if (session()->has('status'))

            <div class="card">
                <div class="card-body">
                        <div class="notification is-danger">
                                <button class="delete"></button>
                                    {{ session()->get('status') }}
                        </div>
                </div>
            </div>
               
        @endif
        
    </div>
@endsection