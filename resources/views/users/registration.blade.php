<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<form action="/users" method="POST" style="width:25%; margin: 100px auto;">
@csrf
    <h3>Create new user</h3>
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->
    <div class="form-group" >
        <input class="form-control" name="Username" type="text" placeholder="Username">
        @error('Username')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" name="Lastname" type="text" placeholder="Last Name">
        @error('Lastname')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" name="Firstname" type="text" placeholder="First Name">
        @error('Firstname')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" name="MiddleName" type="text" placeholder="Middle Name">
        @error('MiddleName')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" name="Email" type="text" placeholder="E-mail">
        @error('Email')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" name="Telephone" type="text" placeholder="Telephone">
        @error('Telephone')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" name="Gender" type="text" placeholder="Gender">
        @error('Gender')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        
    <input name="Birthday" id="datepicker" width="276" />
    @error('Birthday')
            <small class="text-danger">{{$message}}</small>
    @enderror
    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });
    </script>

    </div>
    <div class="form-group">
        <input class="form-control" name="Status" type="text" placeholder="Status">
        @error('Status')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <input class="form-control" name="Age" type="text" placeholder="Age">
        @error('Age')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <button class="btn btn-info px-5 float-right">Register</button>

</form>



<style>
    .form-control{
        border:none;
        outline:none;
       background:transparent;
       border-bottom: solid 1px	#6cd9f9;
       border-radius: 0;

    }

</style>
