let navbarToggler = document.querySelector('.navbar-toggler');
let row           = document.querySelector('.summary .row');
navbarToggler.addEventListener('click',async () => {
    let landing = document.querySelector('.landing');
    row.classList.toggle('open');
    landing.classList.toggle('auto');

});
// Start Progress
window.onload = () => {
    let allProgress = document.querySelectorAll(".progress-bar");
    allProgress.forEach(prog => {
        let relWidth = (prog.parentElement.clientWidth * prog.getAttribute('aria-valuenow'))  / 100;
        prog.style.width = relWidth + 'px'//prog.getAttribute('aria-valuenow') + 'px';
    });
    check_landing();
}
// Function check landing section
function check_landing() {
    let landing = document.querySelector('.landing');
    let navbar = document.querySelector('.landing nav');
    let sum = document.querySelector('.landing .summary');
    if ((navbar.clientHeight + sum.clientHeight) > landing.clientHeight) {
        landing.classList.add('auto');
    }else {
        landing.classList.remove('auto')
    }
}
window.onresize = check_landing;