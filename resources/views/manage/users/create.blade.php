@extends('layouts.manage')

@section('content')
    <div class="container">
        <div class="columns m-t-10 m-r-10 m-l-10">
                    <div class="column is-6" style="height:100px">
                        <h1 class="title">Create New User</h1>
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

                        

        <div class="columns m-t-10 m-r-10 m-l-10">
            <div class="column">
                    <form action="{{route('users.store')}}" method="POST">
                            @csrf
                            <div class="field">
                                <label for="name" class="label">Name</label>
                                <p class="control">
                                    <input type="text" class="input" name="name" id="name" placeholder="Name">
                                </p>
                            </div>

                            <div class="field">
                                <label for="email" class="label">Email:</label>
                                <p class="control has-icons-left">
                                    <input type="email" class="input" name="email" id="email" placeholder="Email">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <p class="control has-icons-left">
                                    <input type="password" class="input" name="password" id="password" placeholder="password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </p>
                            </div>

                            <button class="button is-success">Create User</button>
                    </form>
            </div>
        </div>
        
    </div>
@endsection