// validimi i ngjyrave ne produkt


const firstColor = document.getElementById("firstColor");
const secondColor = document.getElementById("secondColor");
const thirdColor = document.getElementById("thirdColor");
const productImage = document.getElementById("product-image");

firstColor.addEventListener("click", ()=>{
    productImage.style.backgroundImage = "url('images/produkt1.jpg')";
})

secondColor.addEventListener("click", ()=>{
    productImage.style.backgroundImage = "url('images/produkt2.jpg')";
})

thirdColor.addEventListener("click", ()=>{
    productImage.style.backgroundImage = "url('images/produkt3.jpg')";
})


// validimi i formes ne newsletter

const username = document.getElementById("name");
const email = document.getElementById("email");
const submit = document.getElementById("submit");


submit.addEventListener("click", ()=>{

    if(username.value.trim() == "" ){
        username.style.borderColor = 'red';
        username.style.transform = 'scale(1.1)';
    }

    if(!email.value.includes("@") || !email.value.includes(".com") || !email.value.includes(".net") || !email.value.includes(".org")){ 
        email.style.borderColor = "red";
        email.style.transform = "scale(1.1)";               
    }
    
   
})

