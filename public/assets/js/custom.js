$(".VideoPopup").on('hidden.bs.modal', function (e) {
     $(".VideoPopup iframe").attr("src",   $(".VideoPopup iframe").attr("src"));
});


$(document).ready(function () {

   $(".client_slider_wrp").owlCarousel({
     loop:true,
     margin:10,
     nav:true,
     dots:false,
     smartSpeed: 1000,
     navText:['<div class="icon-prev"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>','<div class="icon-next"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>'],
     responsive:{
          0:{ 
               loop:true,
               autoplay:true,
               stagePadding: 0,
               center:false,
               nav:true,
               items:1
          },
          767:{
               stagePadding: 0,
               center:true,
               items:2   
          },
          1000:{
               stagePadding: 100,
               items:3.1
          },
          1440:{
               stagePadding: 100,
               items:3.1
          },
       1920:{
           items:4,
       }
     }
})

    $(".services_slide").owlCarousel({
     loop:true,
     margin:10,
     nav:true,
     dots:false,
     smartSpeed: 1000,
     navText:['<div class="icon-prev"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>','<div class="icon-next"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>'],
     responsive:{
          0:{ 
               loop:true,
               autoplay:true,
               stagePadding: 0,
               center:false,
               nav:true,
               items:1
          },
          767:{
               stagePadding: 0,
               center:true,
               items:2   
          },
          1000:{
               stagePadding: 100,
               items:3.1
          },
          1440:{
               stagePadding: 100,
               items:3
          },
       1920:{
           items:4,
       }
     }
})
 });