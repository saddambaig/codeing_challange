var skeletonId = 'skeleton';
var contentId = 'content';
var skipCounter = 0;
var takeAmount = 10;


function getRequests(mode) {
  // your code here...
}

function getMoreRequests(mode) {
  // Optional: Depends on how you handle the "Load more"-Functionality
  // your code here...
}

function getConnections() {
  // your code here...
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })
  $.ajax({
    url:'/get-connection',
    type:'get',
    data:{},
    success:function(response){
      // alert(response)
      if(response.data){
        $('#content').html(response.data)
      }else{
        $('#content').html('<p class="text-center">Not  Found</p>')
      }
    }
  })
}

function getMoreConnections() {
  // Optional: Depends on how you handle the "Load more"-Functionality
  // your code here...
}

function getConnectionsInCommon(userId, connectionId) {
  // your code here...
}

function getMoreConnectionsInCommon(userId, connectionId) {
  // Optional: Depends on how you handle the "Load more"-Functionality
  // your code here...
}

function getSuggestions() {
  // your code here...
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })
  $.ajax({
    url:'/get-suggestions',
    type:'get',
    data:{},
    success:function(response){
      // alert(response)
      if(response.data){
        $('#content').html(response.data)
      }else{
        $('#content').html('<p class="text-center">Not  Found</p>')
      }
    }
  })
}
function getSentRequests() {
  // your code here...
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })
  $.ajax({
    url:'/get-sent-requests',
    type:'get',
    data:{},
    success:function(response){
      // alert(response)
      if(response.data){
        $('#content').html(response.data)
      }else{
        $('#content').html('<p class="text-center">Not Request Found</p>')
      }
    }
  })
}
function getReceiveRequests() {
  // your code here...
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })
  $.ajax({
    url:'/get-receive-requests',
    type:'get',
    data:{},
    success:function(response){
      // alert(response)
      if(response.data){
        $('#content').html(response.data)
      }else{
        $('#content').html('<p class="text-center">Not Request Found</p>')
      }
    }
  })
}

function getMoreSuggestions() {
  alert('d')
  // Optional: Depends on how you handle the "Load more"-Functionality
  // your code here...
  
}

function sendRequest(userId, suggestionId) {
  // your code here...
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })
  $.ajax({
    url:'/send-request',
    type:'post',
    data:{userId:userId,suggestionId:suggestionId},
    success:function(response){
      // alert(response)
      location.reload()
    }
  })
  
}

function deleteRequest(requestId) {
  // your code here...
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })
  $.ajax({
    url:'/delete-request',
    type:'post',
    data:{requestId:requestId},
    success:function(response){
      // alert(response)
      location.reload()
    }
  })
  
}

function acceptRequest(requestId) {

  // your code here...
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })
  $.ajax({
    url:'/accept-request',
    type:'post',
    data:{requestId:requestId},
    success:function(response){
      // alert(response)
      location.reload()
    }
  })
}

function removeConnection(userId, connectionId) {
  // your code here...
}

$(function () {
  //getSuggestions();
});