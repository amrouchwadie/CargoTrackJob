@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card" style="margin-left: 86px;">
            <div class="card-body">
                <h3 class="card-titl">Editer L'Utilisateur </h3>
                <hr>
                    <form action="{{route('users.update',$users->id)}}" method="post" enctype="multipart/form-data">  
                    @csrf  
                    @method('PUT')    
                               
                        <div class="form-group">
                            <label for="first_name"><b> First Name</b></label>
                            <input type="text" class="form-control" placeholder="First name" id="first_name"  name="first_name" value="{{$users->first_name}}">
                            <input type="hidden" name="_token" value="{{Session::token()}}">         
                        </div>
                  
                        <div class="form-group">
                            <label >Last Name</label>
                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{$users->last_name}}" placeholder="Your Last Name" required autocomplete="last_name" autofocus/>
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label >Phone</label>
                            <input id="phone" type="text" class="form-control" name="phone" value="{{$users->phone}}" required autocomplete="phone"/>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="email"><b> E-mail*</b></label>
                            <input type="text" class="form-control" placeholder="E-mail" id="email"  name="email" value="{{$users->email}}">                   
                        </div>
                        <div class="form-group">
                            <label for="password"><b> Mot de passe*</b></label>
                            <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control" placeholder="New Password" id="password"  name="password" > 
                            <div class="input-group-append">	<a href="javascript:;" class="input-group-text bg-transparent border-left-0"><i class='bx bx-hide'></i></a>
                            </div>
                        </div>            
                        </div>
                        <div class="form-group">
                            
                            <input type="hidden" class="form-control" placeholder="Status Of User" id="status"  name="status" value="{{$users->status}}">                   
                        </div>
                       <div class="form-group">
								<label><b>Role*</b></label>
								<select name="group_id" class="form-control" id="group_id">
                                    @foreach($groups as $group)
                                        <option value="{{$group->id}}"{{ $group->id == $users->id ? 'selected' : '' }}>{{$group->name}}</option>
                                    @endforeach
                                </select>    
                                </div>
                        
                        <button type="submit" class="btn btn-success">Editer</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>
<script src="assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
</script>


@endsection