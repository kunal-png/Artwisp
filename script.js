<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" ></script>

$(document).ready(function(){


$('#Search-normal').on("click",function(){
   $('#Search-normal').removeClass('visible');
   $('#Search-normal').addClass('invisible');
   $('#Search-expanded').addClass('visible');
   $('#Search-expanded').removeClass('invisible');
});
$('#userIcon').on("click",function(){
   $('#signup-popup').removeClass('d-none');
   $('#signup-popup').addClass('d-block');
});
$('.close-btn').on("click",function(){
   $('#signup-popup').addClass('d-none');
   $('#signup-popup').removeClass('d-block');
});
})