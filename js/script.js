let navbar = document.querySelector('.navbar');
let burger = document.querySelector('#menu-btn');

burger.onclick = () =>{
    navbar.classList.toggle('active');
}

let infoStadium = document.querySelector('.info-stadium');
let moreInfo = document.querySelector('#more-info');

moreInfo.onclick = () =>{
    infoStadium.classList.toggle('active');
}
