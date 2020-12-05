
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  
    <table class="table" style="width:80%;margin:auto;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Middlename</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthday</th>
      <th scope="col">Status</th>
      <th scope="col">Age</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
    <th scope="col">{{ $user->id }}</th>
      <th scope="col"> {{ $user->Username }}</th>
      <th scope="col"> {{ $user->Firstname }}</th>
      <th scope="col"> {{ $user->Lastname }}</th>
      <th scope="col"> {{ $user->MiddleName }}</th>
      <th scope="col"> {{ $user->email }}</th>
      <th scope="col"> {{ $user->Telephone }}</th>
      <th scope="col"> {{ $user->Gender }}</th>
      <th scope="col"> {{ $user->Birthday }}</th>
      <th scope="col"> {{ $user->Status }}</th>
      <th scope="col"> {{ $user->Age }}</th>
      <th scope="col"> 
       <a href="users/{{$user->id}}"><button class="btn btn-info">Show</button></a>
       <a href="users/{{$user->id}}/edit"><button class="btn btn-primary">Edit</button></a>
       <form action="users/{{$user->id}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">Del</button>
       </form>
      </th>
    </tr>
    @endforeach
   
  </tbody>
  <tbody>
  <tr><td><a href="users/create"> <button class="btn btn-info">Create User</button></a></td></tr>
  </tbody>
 
</table>
<style>
button{
    margin-left:1px;
    margin-right:1px;
    display:inline;
    padding:0;
}
form{
    margin:0;
    padding:0;
    display:inline;
}
</style>




 