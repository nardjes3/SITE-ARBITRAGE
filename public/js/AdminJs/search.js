function searchTable() {
let search = document.querySelector('.input-group input').value.toupperCase();
    let arbi_list = document.querySelectorAll('.list');
    let arbi = document.querySelectorAll('.content');
    let arbiName = document.getElementByTagName('h4');

// 1. Searching for specific data of HTML table
// search.addEventListener('input', searchTable);

// function searchTable() {
//     table_rows.forEach((row, i) => {
//         let table_data = row.textContent.toLowerCase(),
//             search_data = search.value.toLowerCase();

//         row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
//         row.style.setProperty('--delay', i / 25 + 's');
//     })

//     document.querySelectorAll('.list:not(.hide)').forEach((visible_row, i) => {
//         visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
//     });
// }

for (let i=0; i<arbiName.length; i++){
    if(arbiName[i].innerHTML.toupperCase().indexOf(search)>=0){
        box[i].style.display="";
    }
    else{
        box[i].style.display="none";
    }

}
}