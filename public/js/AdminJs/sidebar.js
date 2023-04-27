let menuToggle = document.querySelector('.menuToggle');
let navigation = document.querySelector('.navigation');
let table = document.querySelector('main-table');
menuToggle.onclick = function(){
    navigation.classList.toggle('active');
	table.classList.toggle('active')
}

let list = document.querySelectorAll('.li');
function activeLink(){
    list.forEach((item) =>
        item.classList.remove('active'));
        this.classList.add('active');
    }
    list.forEach((item) =>
    item.addEventListener('click', activeLink));

 

            function menuT(){
                const toggleMenu = document.querySelector('.menu');
                toggleMenu.classList.toggle('active')
            }
			function menuT2(){
                const toggleMenu = document.querySelector('.menu2');
                toggleMenu.classList.toggle('active')
            }
            function menuT3(){
                const toggleMenu = document.querySelector('.menu3');
                toggleMenu.classList.toggle('active')
            }

