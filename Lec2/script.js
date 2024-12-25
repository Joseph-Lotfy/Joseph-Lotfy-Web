let Tds = document.querySelectorAll('td')
Tds.forEach((Td) =>{
    if(Td.firstChild){
        Td.classList.add('active')
    }
})
let bigTable =document.querySelector('.bigTable')
bigTable.addEventListener('click', (e) => {
    if(document.querySelector('.active2'))document.querySelector('.active2').classList.remove('active2')
    if(e.target.closest('td') && e.target.closest('td').firstChild && !e.target.closest('td').firstElementChild){
        let td = e.target.closest('td')
        console.log(td)
        td.classList.add('active2')
    }
})