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

// const username = document.getElementById("name");
// const email = document.getElementById("email").value;
// const submit = document.getElementById("submit");


