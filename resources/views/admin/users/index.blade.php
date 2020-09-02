@extends('layouts.templateback')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body ">
               <table>
                   <th colspan="2" style="padding:10px;">
                       name </th>
                   <th colspan="5" style="padding:10px;" >email</th>
                   <th colspan="2" style="padding:10px;">role</th>
                      <th  style="padding:10px;"> Edit
                      </th><th style="padding:10px;"> DELETE  </th>
               <tbody>
                      @foreach ($users as $user)
               <tr>
               <td colspan="2" style="padding:10px;">{{$user->name}} </td><td colspan="5" style="padding:10px;">{{$user->email}}</td><td colspan="2" style="padding:10px;"> {{ implode(' , ' ,$user->roles()->get()->pluck('name')->toArray() ) }} 
               </td><td style="padding:10px;">       <a href="{{route('admin.users.edit',$user->id )}}"  > <button type="button" class="btn btn-outline-primary">Edit </button></a>
               </td><td style="padding:10px;">    <form action="{{ route('admin.users.destroy',$user) }}" method="POST" > 
                @csrf
                {{method_field( 'DELETE')  }}
                <button class="btn btn-outline-primary" type="submit">Delete</button>  
                
                </form> </div>
            </td></tr>
                @endforeach
                 </tbody></table>
                </div></div>
                         
            </div>
        </div>
    </div>
</div>
@endsection
