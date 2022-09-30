var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };
  
  TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];
  
    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }
  
    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
  
    var that = this;
    var delta = 180 - Math.random() * 100; //180 sets the speed of the typing
  
    if (this.isDeleting) { delta /= 2; }
  
    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }
  
    setTimeout(function() {
      that.tick();
    }, delta);
  };
  
  window.onload = function() {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
  };


//sends an alert when the page loads
  //alert('Hello World!');
  


//opens resume in new tab regardless of where in the button the user clicks
let resumeButton = document.getElementById('button');

function newTab() {
    window.open(href="../content/Michael_Thousand_Resume.pdf", "_blank");
};

resumeButton.addEventListener('click', newTab);


window.onload = function() {
  var titleElement = document.getElementById("title");
  var buttonElement = document.getElementById("button");

  /*
  var timer1 = 0;
  var timer2 = 0;

  for (let i = 0; i === 100; i++) {
    return timer1 + i;
    titleElement.style.opacity = `${timer1}%`;
  };

  for (let j = 0; j === 100; j++) {
    return timer2 + j;
    titleElement.style.opacity = `${timer2}%`;
  };
  

  setTimeout(() => {
    titleElement.style.visibility = 'visible';
  }, 2000);

  setTimeout(() => {
    buttonElement.style.visibility = 'visible';
  }, 3000);
  */

};
