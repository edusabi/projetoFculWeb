///pega o X
const closeModal = document.querySelector(".closeModal");

const outrasLinguagens = document.querySelector(".outrasLinguagens");

const modalLinguagens = document.querySelector(".modalLinguagens");


outrasLinguagens.addEventListener("click", ()=>{
    modalLinguagens.style.visibility = "visible";
    body.style.overflow = "hidden";
    
    closeModal.addEventListener("click", ()=>{
        body.style.overflow = "auto";
        modalLinguagens.style.visibility = "hidden";

    });
});