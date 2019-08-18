@extends('layouts.manage')

@section('content')

            <div class="container">
                <div class="columns is-multiline m-t-10 m-r-10 m-l-10">
                        <div class="column is-6" style="height:100px">
                                <h1 class="title">Manage Users</h1>
                            </div>
                            <div class="column is-6" style="height:100px">
                                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fas fa-user-plus"></i>Create User</a>
                            </div>
                
                            <hr/>                           
                                    
                                                <table class="table is-fullwidth">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Date Created</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{$user->id}}</td>
                                                                <td>{{$user->name}}</td>
                                                                <td>{{$user->email}}</td>
                                                                <td>{{$user->created_at->toFormattedDateString()}}</td>
                                                                <td><a href="{{route('users.edit', $user->id)}}" class="button is-outlined">Edit</a></td>
                                                            </tr>
                                                                
                                                            @endforeach
                                                        </tbody>
                                                </table>
                                        
                                    
                            {{$users->links()}}
                </div>
                    
            </div>
            
            
@endsection