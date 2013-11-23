  SLIDES = new slideshow("SLIDES");
  SLIDES.timeout = 5000;
  SLIDES.prefetch = 1;
  s = new slide();
  s.src = "./images/kompetisi.jpg";
  SLIDES.add_slide(s);

  s = new slide();
  s.src = "./images/lapFutsal.jpg";
  SLIDES.add_slide(s);
  
  s = new slide();
  s.src = "./images/alatSport.jpg";
  SLIDES.add_slide(s);
  
  /*s = new slide();
  s.src = "./images/futsal4.jpg";
  SLIDES.add_slide(s);
*/
  SLIDES.image = document.images.SLIDESIMG;
     
 
  SLIDES.pre_update_hook = function() { YAHOO.util.Dom.setStyle('SLIDESIMG','opacity','0.4'); return; }

  SLIDEanim = new YAHOO.util.Anim('SLIDESIMG', { opacity: { to: 1, from:0.4 } }, 1, YAHOO.util.Easing.easeOut);

  SLIDES.post_update_hook = function() { SLIDEanim.animate(); return; }
  
  SLIDES.update();
  
  YAHOO.util.Event.addListener("body", "onload", SLIDES.play());
 