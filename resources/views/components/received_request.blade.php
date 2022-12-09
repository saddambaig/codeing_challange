@foreach($userRequests as $reque)
  @if($reque->status==0)
<div class="my-2 shadow text-white bg-dark p-1" id="">
  
  <div class="d-flex justify-content-between">
    <table class="ms-1">
    
      <tr>
      <td class="align-middle">{{ $reque->requestUser->name }} </td>
      <td class="align-middle"> - </td>
      <td class="align-middle">{{ $reque->requestUser->email }}</td>
      <td class="align-middle">
</tr>

    </table>
    <div>
      
   
     
        <button id="accept_request_btn_" class="btn btn-primary me-1"
          onclick="acceptRequest({{$reque->id}})">Accept</button>
      
    </div>
  </div>
</div>
@endif
  @endforeach
