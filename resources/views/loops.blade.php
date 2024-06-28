@forelse ($user as $user )
    <li>{{$user->name}}</li>
@empty
<p>No Users</p>
    
@endforelse