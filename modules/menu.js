
$(document).ready(function(){
  // var str = false;

  $("#starter").click(function(){
    let value= $(this).attr('data-filter');
    
    $("#f li button").removeClass('ative');
    $("#filter li button").removeClass('ative');
    $("#filter li button").not('.'+value).hide(200);
    $("#filter li button").filter('.'+value).show(200);
    
     $('.crd').not('.'+value).hide(200);
     $('.crd').filter('.'+value).show(200);
     
    }); 
  
    $("#side").click(function(){
      let value= $(this).attr('data-filter');
      
      $("#f li button").removeClass('ative');
      $("#filter li button").removeClass('ative');
      $("#filter li button").not('.'+value).hide(200);
      $("#filter li button").filter('.'+value).show(200);

       $('.crd').not('.'+value).hide(200);
       $('.crd').filter('.'+value).show(200);
       
      }); 
  
      $("#mcourse").click(function(){
        let value= $(this).attr('data-filter');
        
        $("#f li button").removeClass('ative');
        $("#filter li button").removeClass('ative');
        $("#filter li button").not('.'+value).hide(200);
        $("#filter li button").filter('.'+value).show(200);

         $('.crd').not('.'+value).hide(200);
         $('.crd').filter('.'+value).show(200);
         
        }); 
  
        $("#dest").click(function(){
          let value= $(this).attr('data-filter');
          
          $("#f li button").removeClass('ative');
          $("#filter li button").removeClass('ative');
          $("#filter li button").not('.'+value).hide(200);
          $("#filter li button").filter('.'+value).show(200);

           $('.crd').not('.'+value).hide(200);
           $('.crd').filter('.'+value).show(200);
           
          }); 
  
          $("#bvg").click(function(){
            let value= $(this).attr('data-filter');
            
            $("#f li button").removeClass('ative');
            $("#filter li button").removeClass('ative');
            $("#filter li button").not('.'+value).hide(200);
            $("#filter li button").filter('.'+value).show(200);

             $('.crd').not('.'+value).hide(200);
             $('.crd').filter('.'+value).show(200);
             
            }); 
  
   $("#f li button").click(function(){
   let value= $(this).attr('data-filter');
  
  $("#f li button").removeClass('ative');
  $("#filter li button").removeClass('ative');
  $(this).addClass('ative');

  
  $('.crd').not('.'+value).hide(200);
  $('.crd').filter('.'+value).show(200);
  
    $('.crd').not('.'+value).hide(200);
    $('.crd').filter('.starter'+value, '.'+value+'.starter').show(200);
 

  });
  
  
  $("#filter li button").click(function(){
  let value= $(this).attr('data-filter');
   
  $("#f li button").removeClass('ative');
  $("#filter li button").removeClass('ative');
  $(this).addClass('ative');
   $('.crd').not('.'+value).hide(200);
   $('.crd').filter('.'+value).show(200);
  
  });
  
  
  
  $("#all").click(function(){
    
  $("#f li button").removeClass('ative');
  $(this).addClass('ative');
  $("#filter li button").show();
  $('.crd').show(200);
  

});

});


/*  
$(document).ready(function(){
let str = false;
let sid = false;
let mc = false;
let dst = false;
let bvg = false; 
let vg = false;
let nvg = false;

$("#starter").click(function(){
  str = true;
  sid = false;
  mc = false;
  dst = false;
  bvg = false; 
  let value= $(this).attr('data-filter');
  
  $("#f li button").removeClass('ative');
  $("#filter li button").removeClass('ative');
  $("#filter li button").not('.'+value).hide(200);
  $("#filter li button").filter('.'+value).show(200);

   $('.crd').not('.'+value).hide(200);
   $('.crd').filter('.'+value).show(200);
   
  }); 

  $("#side").click(function(){
    sid = true;
    str = false;
    mc = false;
    dst = false;
    bvg = false; 
    let value= $(this).attr('data-filter');
    
    $("#f li button").removeClass('ative');
    $("#filter li button").removeClass('ative');
    
    $("#filter li button").not('.'+value).hide(200);
    $("#filter li button").filter('.'+value).show(200);
    
     $('.crd').not('.'+value).hide(200);
     $('.crd').filter('.'+value).show(200);
     
    }); 

    $("#mcourse").click(function(){
      str = false;
      sid = false;
      mc = true;
      dst = false;
      bvg = false; 
      let value= $(this).attr('data-filter');
      
      $("#f li button").removeClass('ative');
      $("#filter li button").removeClass('ative');
      $("#filter li button").not('.'+value).hide(200);
      $("#filter li button").filter('.'+value).show(200);

       $('.crd').not('.'+value).hide(200);
       $('.crd').filter('.'+value).show(200);
       
      }); 

      $("#dest").click(function(){
        str = false;
        sid = false;
        mc = false;
        dst = true;
        bvg = false; 
        let value= $(this).attr('data-filter');
        
        $("#f li button").removeClass('ative');
        $("#filter li button").removeClass('ative');
        $("#filter li button").not('.'+value).hide(200);
        $("#filter li button").filter('.'+value).show(200);
        
         $('.crd').not('.'+value).hide(200);
         $('.crd').filter('.'+value).show(200);
         
        }); 

        $("#bvg").click(function(){
          str = false;
          sid = false;
          mc = false;
          dst = false;
          bvg = true; 
          let value= $(this).attr('data-filter');
          
          $("#f li button").removeClass('ative');
          $("#filter li button").removeClass('ative');
          $("#filter li button").not('.'+value).hide(200);
          $("#filter li button").filter('.'+value).show(200);
          
           $('.crd').not('.'+value).hide(200);
           $('.crd').filter('.'+value).show(200);
           
          }); 

 $("#veg").click(function(){
    let val = $(this).attr('data-filter');
    if(str=true){
      $("#f li button").removeClass('ative');
      $("#filter li button").removeClass('ative');
      $(this).addClass('ative');
   $('.crd').not(('.'+val)||('.starter')).hide(200);
   $('.crd').filter('.starter'+val, '.'+val+'.starter').show(200);
   return;
  } else if(sid=true){ 
      $("#f li button").removeClass('ative');
      $("#filter li button").removeClass('ative');
      $(this).addClass('ative');
   $('.crd').not('.sides'||'.'+val).hide(200);
   $('.crd').filter('.sides'+val, '.'+val+'.sides').show(200);
   sid=true;
   return; 
} else if(mc=true){ 
  $("#f li button").removeClass('ative');
  $("#filter li button").removeClass('ative');
  $(this).addClass('ative');
$('.crd').not(('.'+val)||('.mcourse')).hide(200);
$('.crd mcourse veg').show(200);
return; 
}
else if(dst=true){ 
  $("#f li button").removeClass('ative');
  $("#filter li button").removeClass('ative');
  $(this).addClass('ative');
$('.crd').not(('.'+val)||('.dest')).hide(200);
$('.crd').filter(('.dest'+val, '.'+val+'.dest')).show(200);
return; 
}
else if(bvg=true){ 
  $("#f li button").removeClass('ative');
  $("#filter li button").removeClass('ative');
  $(this).addClass('ative');
$('.crd').not(('.'+val)||('.dest')).hide(200);
$('.crd').filter(('.bvg'+val, '.'+val+'.bvg')).show(200);
return; 
}
else{
 $("#f li button").removeClass('ative');
$("#filter li button").removeClass('ative');
$(this).addClass('ative');

$('.crd').not('.veg').hide(200);
$('.crd').filter('.veg').show(200);
  }

});



$("#nveg").click(function(){
  let val = $(this).attr('data-filter');
  if(str=true){
    $("#f li button").removeClass('ative');
    $("#filter li button").removeClass('ative');
    $(this).addClass('ative');
 $('.crd').not(('.'+val)||('.starter')).hide(200);
 $('.crd').filter('.starter '+val, '.'+val+' .starter').show(200);
 return;
} else if(sid=true){ 
    $("#f li button").removeClass('ative');
    $("#filter li button").removeClass('ative');
    $(this).addClass('ative');
 $('.crd').not('.sides'||'.'+val).hide(200);
 $('.crd').filter('.sides '+val, '.'+val+' .sides ').show(200);
 sid=true;
 return; 
} else if(mc=true){ 
$("#f li button").removeClass('ative');
$("#filter li button").removeClass('ative');
$(this).addClass('ative');
$('.crd').not(('.'+val)||('.mcourse')).hide(200);
$('.crd mcourse nveg').show(200);
return; 
}
else{
$("#f li button").removeClass('ative');
$("#filter li button").removeClass('ative');
$(this).addClass('ative');

$('.crd').not('.nveg').hide(200);
$('.crd').filter('.nveg').show(200);
}

});



$("#filter li button").click(function(){
let value= $(this).attr('data-filter');
 
$("#f li button").removeClass('ative');
$("#filter li button").removeClass('ative');
$(this).addClass('ative');
 $('.crd').not('.'+value).hide(200);
 $('.crd').filter('.'+value).show(200);

});



$("#all").click(function(){
  str=false;
sid = false;
mc = false;
dst = false;
bvg = false; 
$("#f li button").removeClass('ative');
$(this).addClass('ative');
$("#filter li button").show();
$('.crd').show(200);

});

});


*/