var slidesIndex = 1;
showSlide(slidesIndex);

// Next/previous controls
function plusSlidess(n) {
  showSlide(slidesIndex += n);
}

// Thumbnail image controls
function currentSlides(n) {
  showSlide(slidesIndex = n);
}

function showSlide() {
    var i;
    var slide = document.getElementsByClassName("mySlide");
    var dotes = document.getElementsByClassName("dote");
    for (i = 0; i < slide.length; i++) {
       slide[i].style.display = "none";  
    }
   
    if (slidesIndex > slide.length) {slidesIndex = 1}    
    for (i = 0; i < dotes.length; i++) {
        dotes[i].className = dotes[i].className.replace(" active", "");
    }
    slide[slidesIndex-1].style.display = "block";  
    dotes[slidesIndex-1].className += " active";
    
}
