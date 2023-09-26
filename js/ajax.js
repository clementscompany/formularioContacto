

const form = document.querySelector(".form"),
sendBtn = form.querySelector('.form button');
const text = document.getElementById('cardError');
const textInner = document.getElementById('error');
form.onsubmit = (e) =>{
e.preventDefault();

}
sendBtn.onclick = () =>{
   let xhr = new XMLHttpRequest();
   xhr.open("POST", "php/enviar.php", true);
   xhr.onload = () =>{
    if(xhr.readyState ===  XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
           if(data == "Mensagem enviada com sucesso"){
            textInner.style = "color:green";
           }
           else{
            textInner.textContent = data;
            text.classList.add('oppenText');
           }
        }
    }
   }
   let formData = new FormData(form);

   xhr.send(formData);
}

const close = document.getElementById('close');
close.onclick = () =>{
    document.getElementById('cardError').style =" display:none";
    location.reload(); 
}



const prevent = document.getElementById('form');
prevent.addEventListener('submit', (event) =>{
event.preventDefault();
loadingShow();

} );

function loadingShow(){
    const oppen = document.getElementById('reload');
    oppen.classList.add('oppen');

    setTimeout(() => closeLoad(), 2000);
}
function closeLoad(){
   
 const remove = document.getElementById('reload');
 remove.classList.remove('oppen');

}

