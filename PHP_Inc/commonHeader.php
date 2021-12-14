<!-- Favicon -->
<link href="favicon_io/favicon.ico" rel="icon">

<script src="https://kit.fontawesome.com/dfbe093ab6.js" crossorigin="anonymous"></script>
<style>
/* Center the loader */
#loader {
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 1;
    width: 120px;
    height: 120px;
    margin: -76px 0 0 -76px;
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
    }
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

/* Add animation to "page content" */
.animate-bottom {
    position: relative;
    -webkit-animation-name: animatebottom;
    -webkit-animation-duration: 1s;
    animation-name: animatebottom;
    animation-duration: 1s
}

@-webkit-keyframes animatebottom {
    from {
        bottom: -100px;
        opacity: 0
    }

    to {
        bottom: 0px;
        opacity: 1
    }
}

@keyframes animatebottom {
    from {
        bottom: -100px;
        opacity: 0
    }

    to {
        bottom: 0;
        opacity: 1
    }
}

#myDiv {
    display: none;
    text-align: center;
}
</style>

<style>
.navbarmenuitem {
    color: white;
    border-bottom: 1px solid white;
}

.navbarmenuitem:hover {
    color: white;
    background-color: #fc8003;
}
</style>
<script>
//   $('.navbar .nav-link').hover(function() {
//   $(this).find('.dropdown-menu').first().stop(true, true).delay(350).slideDown();
// }, function() {
//   $(this).find('.dropdown-menu').first().stop(true, true).delay(200).slideUp()
// });
</script>
<!-- 
<style>
 .dropdown-menu.collapsing {
  display:block;
}
.dropdown-menu {
    height:auto!important;
    transition: transform .35s ease!important;
  }
  .dropdown-menu.collapse, .dropdown-menu.sliding {

 transform: translate(0,-100%);
  }
  .dropdown-menu.collapse:not(.show) {
    display:block;
  }
  .dropdown-menu.collapse.show {
    transform: translate(0,0);
  }
 

    </style>
<script>
// $(function(){
// $('.dropdown').on('show.bs.dropdown', function(e){
//     $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
//   });

//   // ADD SLIDEUP ANIMATION TO DROPDOWN //
//   $('.dropdown').on('hide.bs.dropdown', function(e){
//     e.preventDefault();
//     $(this).find('.dropdown-menu').first().stop(true, true).slideUp(400, function(){
//     	$('.dropdown').removeClass('open');
//       	$('.dropdown').find('.dropdown-toggle').attr('aria-expanded','false');
//     });
    
//   });
// });


$(".dropdown").on("hide.bs.collapse", function() {
  $(this).find(".dropdown-menu").first().addClass( "sliding" )
});
$(".dropdown").on("hidden.bs.collapse", function() {
  $(this).find(".dropdown-menu").first().removeClass( "sliding" )
});
$(document).click(function() {
  $(".dropdown-menu.collapse.show").collapse("hide");
});
</script> -->