<!-- @if($userRequests) -->
        <x-request :mode="'sent'" :userRequests="$userRequests" />
        <!-- @endif -->