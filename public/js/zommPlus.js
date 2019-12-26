
$('#pic-1').ezPlus({
    zoomType                : "lens",
    lensShape : "round",
    lensSize    : 200
    });
       function myFunction(imgs) {
          var expandImg = document.getElementById("pic-1");
          var imgText = document.getElementById("imgtext");
    
          $( '.preview-thumbnail' ).find( 'img.active' ).removeClass( 'active' );
    
    
        imgs.className += "active";
    
              expandImg.src = imgs.src+"?w=400&amp;ch=DPR&amp;dpr=2";
              imgText.innerHTML = imgs.alt;
              expandImg.parentElement.style.display = "block";
    
              $("#pic-1").data('zoom-image', imgs.src+"?w=1200&ch=DPR&dpr=2").ezPlus({ zoomType: "lens", lensShape : "round", lensSize: 200 }); 
    
         }