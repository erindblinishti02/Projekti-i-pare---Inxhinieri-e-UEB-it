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

const newsletterName = document.getElementById("newsletterName");
const newsletterEmail = document.getElementById("newsletterEmail");
const newsletterSubmit = document.getElementById("newsletterSubmit");
const newsletterForm = document.getElementById("newsletterForm")
const newsletterError = document.getElementById("error");

newsletterForm.addEventListener("submit", (e)=>{
    let messages = [];
    if(newsletterName.value.trim() === '' || newsletterName.value == null){
        messages.push('Name is required');
    }

    if(!newsletterEmail.value.includes('@') || !newsletterEmail.value.endsWith('.com') || !newsletterEmail.value.endsWith('.net') || !newsletterEmail.value.endsWith('.org')){
        messages.push("This isn't a valid email")
    }

    /// kontrollo nese ka errors, nuk lejon me bo submit 
    if(messages.length > 0){
        e.preventDefault();
        newsletterError.innerText = messages.join(', ')
    }
    

})


console.log(newsletterName)
console.log(newsletterEmail)
console.log(newsletterForm)