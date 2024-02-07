const btn = document.getElementById('btn-mobile');
const navbar = document.getElementsByClassName('navbar-collapse')[0];

btn.addEventListener('click',function(){
    console.log('hello');
    navbar.classList.toggle('collapse');
})