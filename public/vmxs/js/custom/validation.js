          function vailname(name){
             var name = $('#name').val().split(/[\s\.\?]+/);
             if(name.length !== 3){
                  var result = false;
             }else if(name[0] === ' ' || name[1] === ' ' || name[2] === ""){
                 var result = false;
             }else{
                 var result = true;
             }
              return result;
          }