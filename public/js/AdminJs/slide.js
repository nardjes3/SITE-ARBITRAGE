var pro_list = document.querySelectorAll('.box div div');
var card = document.querySelector('.card');
var pro_pic = document.querySelector('.pro_pic');
var pro_title = document.querySelector('.pro_title h1');
var pro_Description = document.querySelector('.pro_description');
var card2 = document.querySelector('.card_inner');



pro_list.forEach(function(pro_listSingle) {
    pro_listSingle.addEventListener('click',function(){
        BgImg = this.style.backgroundImage;
        DataTitle = this.getAttribute("data-title");
        DataDescription = this.getAttribute("data-description");
        DataName = this.getAttribute("data-name");


        
        card.classList = "card card_animated"
        setTimeout(function(){
            pro_pic.style.backgroundImage = BgImg;
            pro_title.innerHTML = DataTitle;
            pro_Description.innerHTML = DataDescription;
            pro_name.innerHTML = DataName;

        },700);
        setTimeout(function(){
            card.classList.remove("card_animated");
        },1500)
    });
});

const buttons = document.querySelectorAll(".card-buttons button");
const sections = document.querySelectorAll(".card-section");


const handleButtonClick = e => {
    const targetSection = e.target.getAttribute("data-section");
    const section = document.querySelector(targetSection);
    targetSection !== "#about" ?
    card.classList.add("is-active") :
    card.classList.remove("is-active");
    card.setAttribute("data-state", targetSection);
    card2.classList.add("is-active") ;
    card2.classList.remove("is-active");
    card2.setAttribute("data-state", targetSection);
    sections.forEach(s => s.classList.remove("is-active"));
    buttons.forEach(b => b.classList.remove("is-active"));
    e.target.classList.add("is-active");
    section.classList.add("is-active");
};

buttons.forEach(btn => {
    btn.addEventListener("click", handleButtonClick);
});



const form = document.querySelector("form"),
nextBtn = form.querySelector(".nextBtn"),
backBtn = form.querySelector(".backBtn"),
allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
allInput.forEach(input => {
if(input.value != ""){
    form.classList.add('secActive');
}else{
    form.classList.remove('secActive');
}
})
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));