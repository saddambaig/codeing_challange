@foreach($userRequests as $reque)
  @if($reque->status==0)
<div class="my-2 shadow text-white bg-dark p-1" id="">
  
  <div class="d-flex justify-content-between">
    <table class="ms-1">
    
      <tr>
      <td class="align-middle">{{ $reque->receiverRequest->name }} </td>
      <td class="align-middle"> - </td>
      <td class="align-middle">{{ $reque->receiverRequest->email }}</td>
      <td class="align-middle">
</tr>

    </table>
    <div>
      
   
      @if ($mode == 'sent')
        <button id="cancel_request_btn_" class="btn btn-danger me-1"
          onclick="deleteRequest({{$reque->id}})">Withdraw Request</button>
      @else
        <button id="accept_request_btn_" class="btn btn-primary me-1"
          onclick="">Accept</button>
      @endif
    </div>
  </div>
</div>
@endif
  @endforeach
