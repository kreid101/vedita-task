function hiderow($id)
{
    $row=document.querySelector('#row'+$id);
    $row.style.display="none";
    httpGet("?row="+$id)
  .then(
    response => console.log(`ok`),
    error => console.log(`Rejected: ${error}`)
  );
}

   
    function httpGet(url) {

        return new Promise(function(resolve, reject) {
      
          var xhr = new XMLHttpRequest();
          xhr.open('GET', url, true);
      
          xhr.onload = function() {
            if (this.status == 200) {
              resolve(this.response);
            } else {
              var error = new Error(this.statusText);
              error.code = this.status;
              reject(error);
            }
          };
      
          xhr.onerror = function() {
            reject(new Error("Network Error"));
          };
      
          xhr.send();
        });
      
      }

      function minusqnt($id) 
      {
        var elem=document.querySelector('#span'+$id);
        var num=parseInt(elem.innerHTML)-1;
        if(num >= 0){
            elem.innerHTML=num;
            httpGet("?id="+$id+'&qnt='+num)
            .then(
              response => console.log(`ok`),
              error => console.log(`Rejected: ${error}`)
            );
        }
        

      }
      function plusqnt($id)
      {
        var elem=document.querySelector('#span'+$id);
        var num=parseInt(elem.innerHTML)+1;
    
        elem.innerHTML=num;
        httpGet("?id="+$id+'&qnt='+num)
            .then(
              response => console.log(`ok`),
              error => console.log(`Rejected: ${error}`)
            );
        
      }