

function slide(src,link,text,target,attr) {
  
  this.src = src;


  this.link = link;

  
  this.text = text;


  this.target = target;


  this.attr = attr;


  if (document.images) {
    this.image = new Image();
  }

 
  this.loaded = false;

  //--------------------------------------------------
  this.load = function() {
    

    if (!document.images) { return; }

    if (!this.loaded) {
      this.image.src = this.src;
      this.loaded = true;
    }
  }

  //--------------------------------------------------
  this.hotlink = function() {


    var mywindow;

    
    if (!this.link) return;

 
    if (this.target) {

      // If window attributes are specified,
      // use them to open the new window
      if (this.attr) {
        mywindow = window.open(this.link, this.target, this.attr);
  
      } else {
        // If window attributes are not specified, do not use them
        // (this will copy the attributes from the originating window)
        mywindow = window.open(this.link, this.target);
      }

      // Pop the window to the front
      if (mywindow && mywindow.focus) mywindow.focus();

    } else {
      // Open the link in the current window
      location.href = this.link;
    }
  }
}

//==================================================
// slideshow object
//==================================================
function slideshow( slideshowname ) {

  this.name = slideshowname;

  this.repeat = true;

  
  this.prefetch = -1;

 
  this.image;

  
  this.textid;


  this.textarea;

  
  this.timeout = 500;

 
  this.slides = new Array();
  this.current = 0;
  this.timeoutid = 0;


  this.add_slide = function(slide) {
  
  
    var i = this.slides.length;
  
    
    if (this.prefetch == -1) {
      slide.load();
    }

    this.slides[i] = slide;
  }

  //--------------------------------------------------
  this.play = function(timeout) {
    
    this.pause();
  
   
    if (timeout) {
      this.timeout = timeout;
    }
  
   
    if (typeof this.slides[ this.current ].timeout != 'undefined') {
      timeout = this.slides[ this.current ].timeout;
    } else {
      timeout = this.timeout;
    }

   
    this.timeoutid = setTimeout( this.name + ".loop()", timeout);
  }

  //--------------------------------------------------
  this.pause = function() {
  
    if (this.timeoutid != 0) {

      clearTimeout(this.timeoutid);
      this.timeoutid = 0;

    }
  }

  //--------------------------------------------------
  this.update = function() {
 
    if (! this.valid_image()) { return; }
  
    if (typeof this.pre_update_hook == 'function') {
      this.pre_update_hook();
    }

   
    var slide = this.slides[ this.current ];


    
    slide.load();
  
   
    this.image.src = slide.image.src;

  
    this.display_text();

    
    if (typeof this.post_update_hook == 'function') {
      this.post_update_hook();
    }

    
    if (this.prefetch > 0) {

      var next, prev, count;

   
      next = this.current;
      prev = this.current;
      count = 0;
      do {

      
        if (++next >= this.slides.length) next = 0;
        if (--prev < 0) prev = this.slides.length - 1;

        
        this.slides[next].load();
        this.slides[prev].load();

    

      } while (++count < this.prefetch);
    }
  }

  //--------------------------------------------------
  this.next = function() {
    
    if (this.current < this.slides.length - 1) {
      this.current++;
    } else if (this.repeat) {
      this.current = 0;
    }

    this.update();
  }


  //--------------------------------------------------
  this.previous = function() {
    
    if (this.current > 0) {
      this.current--;
    } else if (this.repeat) {
      this.current = this.slides.length - 1;
    }
  
    this.update();
  }

  //--------------------------------------------------
  this.get_text = function() {
  
    return(this.slides[ this.current ].text);
  }


  //--------------------------------------------------
  this.get_all_text = function(before_slide, after_slide) {
 
  
    all_text = "";
  
    
    for (i=0; i < this.slides.length; i++) {
  
      slide = this.slides[i];
    
      if (slide.text) {
        all_text += before_slide + slide.text + after_slide;
      }
  
    }
  
    return(all_text);
  }


  //--------------------------------------------------
  this.display_text = function(text) {
    
    if (!text) {
      text = this.slides[ this.current ].text;
    }
  

    if (this.textarea && typeof this.textarea.value != 'undefined') {
      this.textarea.value = text;
    }

    
    if (this.textid) {

      r = this.getElementById(this.textid);
      if (!r) { return false; }
      if (typeof r.innerHTML == 'undefined') { return false; }

     
      r.innerHTML = text;
    }
  }

  
  
  this.loop = function() {
    
    if (this.current < this.slides.length - 1) {
      next_slide = this.slides[this.current + 1];
      if (next_slide.image.complete == null || next_slide.image.complete) {
        this.next();
      }
    } else { 
      this.next();
    }
    
    
    this.play( );
  }


  //--------------------------------------------------
  this.valid_image = function() {
    
  
    if (!this.image)
    {
      return false;
    }
    else {
      return true;
    }
  }

  //--------------------------------------------------
  this.getElementById = function(element_id) {
    

    if (document.getElementById) {
      return document.getElementById(element_id);
    }
    else if (document.all) {
      return document.all[element_id];
    }
    else if (document.layers) {
      return document.layers[element_id];
    } else {
      return undefined;
    }
  }
  
}
