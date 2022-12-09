<!-- @if($userRequests) -->

@if($connections)
@foreach($connections as $con)
        <x-connection  :connection="$con" />
@endforeach
@endif
        <!-- @endif -->