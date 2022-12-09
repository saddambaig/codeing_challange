@if($users)
        @foreach($users as $user)
        <x-suggestion :user="$user"/>
        @endforeach
        @endif