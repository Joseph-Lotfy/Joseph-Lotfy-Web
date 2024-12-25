let calc = document.getElementById('calc');
calc.addEventListener('click', function(e){
    if(e.target.closest('.num')){
        let num = e.target.closest('.num');
        let val = num.innerHTML;
        let head = document.getElementById('head');
        console.log(val)
        if(val != '=' && val != 'x' && val != "Π"){
            head.innerHTML += val;
            console.log(val)
        }
        else if(val === "="){
            head.innerHTML = eval(head.innerHTML)
        }
        else if(val == 'x'){
            head.innerHTML= head.innerHTML.slice(0,-1);
        }
        else if(val == 'Π'){
            head.innerHTML += '3.14';
        }
    }
})