var pro_list = document.querySelectorAll('.box div div');
var card = document.querySelector('.card');
var pro_pic = document.querySelector('.pro_pic');
var pro_title = document.querySelector('.pro_title h1');
var pro_Description = document.querySelector('.pro_description');
var card2 = document.querySelector('.card_inner');
var fname = document.querySelector('.fname');
var lname = document.querySelector('.lname');
var mail = document.querySelector('.mail');
var genre = document.querySelector('.gen');
var role = document.querySelector('.role');
var pays = document.querySelector('.pays');
var tsport = document.querySelector('.tsport');
var etat = document.querySelector('.etat');
var role2 = document.querySelector('.role2');
var niv = document.querySelector('.niv');
var id = document.querySelector('.id');





pro_list.forEach(function(pro_listSingle) {
    pro_listSingle.addEventListener('click',function(){
        BgImg = this.style.backgroundImage;
        DataTitle = this.getAttribute("data-title");
        Firstname = this.getAttribute("nom");
        Lastname = this.getAttribute("prenom");
        Login = this.getAttribute("email");
        Gender = this.getAttribute("genre");
        ol = this.getAttribute("role");
        Country = this.getAttribute("pays");
        TypeSpot = this.getAttribute("tsport");
        Statut = this.getAttribute("etat");
        Ro2 = this.getAttribute("role2");
        Niveau = this.getAttribute("niv");
        ID = this.getAttribute("id");

        // DataName = this.getAttribute("data-name");


        
        card.classList = "card card_animated"
        setTimeout(function(){
            pro_pic.style.backgroundImage = BgImg;
            pro_title.innerHTML = DataTitle;
            
            fname.innerHTML = Firstname;
            lname.innerHTML = Lastname;
            mail.innerHTML = Login;
            genre.innerHTML = Gender;
            role.innerHTML = ol;
            pays.innerHTML = Country;
            tsport.innerHTML = TypeSpot;
            etat.innerHTML = Statut;
            role2.innerHTML = Ro2;
            niv.innerHTML = Niveau;
            id.innerHTML = ID;


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