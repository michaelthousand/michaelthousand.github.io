let slideshowText = document.getElementById('slideshowText');
let slideshowImage = document.getElementById('slideshowImage');
let slideshowArrow = document.getElementById('arrowButton');
let slideshowBackArrow = document.getElementById('backArrowButton');
let slideshowArrowTwo = document.getElementById('arrowButtonTwo');
let slideshowBackArrowTwo = document.getElementById('backArrowButtonTwo');

function arrowClick() {
    slideshowImage.src = "../content/wedding_parents.jpg";
    slideshowText.innerHTML = "I owe my love of technology to my parents who owned their own software sales company when I was growing up.<br><br>With their help, I took apart my first computer at 7 years old.";
    slideshowArrow.style.display = 'none';
    slideshowBackArrow.style.display = 'inline-flex';
    slideshowArrowTwo.style.display = 'inline-flex';
    slideshowBackArrowTwo.style.display = 'none';
};

function arrowClickTwo() {
    slideshowImage.src = "../content/wedding_Ashley.jpg";
    slideshowText.innerHTML = "My wife, Ashley, and I spend most of our free time playing video games together, closely monitored by our two pugs (Tuukka & Plato).";
    slideshowBackArrow.style.display = 'none';
    slideshowArrowTwo.style.display = 'none';
    slideshowBackArrowTwo.style.display = 'inline-flex';
}

function backArrow() {
    slideshowImage.src = "../content/wedding_solo.jpg";
    slideshowText.innerHTML = "I am currently a healthcare supervisor working on a transition to tech. I am studying software development and programming at the University of California-Berkeley.<br><br>In addition, I have a master's degree in philosophy and formerly taught full-time at the university level.";
    slideshowBackArrow.style.display = 'none';
    slideshowArrowTwo.style.display = 'none';
    slideshowArrow.style.display = 'inline-flex';
};

slideshowArrow.addEventListener('click', arrowClick);
slideshowBackArrow.addEventListener('click', backArrow);
slideshowArrowTwo.addEventListener('click', arrowClickTwo);
slideshowBackArrowTwo.addEventListener('click', arrowClick);