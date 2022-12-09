<!-- @if($userRequests) -->
        <x-received_request :mode="'receive'" :userRequests="$userRequests" />
        <!-- @endif -->