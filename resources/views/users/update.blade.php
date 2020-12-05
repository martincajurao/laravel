<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<form action="/users/{{$user->id}}" method="POST"  style="width:25%; margin: 100px auto;">
@csrf
{{ method_field('PUT') }}
    <h3>Update Profile</h3>
    <div class="form-group" >
        <input class="form-control" name="Username" type="text" value=" {{$user->Username}} " >
    </div>
    <div class="form-group">
        <input class="form-control" name="Lastname" type="text" value=" {{$user['Lastname']}} ">
    </div>
    <div class="form-group">
        <input class="form-control" name="Firstname" type="text" value=" {{$user['Firstname']}} ">
    </div>
    <div class="form-group">
        <input class="form-control" name="MiddleName" type="text" value=" {{$user['MiddleName']}} ">
    </div>
    <div class="form-group">
        <input class="form-control" name="Email" type="text" value=" {{$user['email']}} ">
    </div>
    <div class="form-group">
        <input class="form-control" name="Telephone" type="text" value=" {{$user['Telephone']}} ">
    </div>
    <div class="form-group">
        <input class="form-control" name="Gender" type="text" value=" {{$user['Gender']}} ">
    </div>
    <div class="form-group">
        <input class="form-control" name="Birthday" type="text" value=" {{$user['Birthday']}} ">
    </div>
    <div class="form-group">
        <input class="form-control" name="Status" type="text" value=" {{$user['Status']}} ">
    </div>
    <div class="form-group">
        <input class="form-control" name="Age" type="text" value=" {{$user['Age']}}">
    </div>
    <button class="btn btn-info px-5 float-right">Update</button>

</form>

<style>
    .form-control{
        border:none;
        outline:none;
       background:transparent;
       border-bottom: solid 1px	#6cd9f9;
       border-radius: 0;

    }
    .form-control:focus{
    
        
    }
</style>
