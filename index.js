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


//// Slider

// const slideshow = document.getElementById("hero-container");
// const imageURLs = [
//   'https://static.zara.net/photos///contents/mkt/spots/ss23-north-man-shoes/subhome-xmedia-08//w/3072/IMAGE-landscape-fill-79c1f378-6cf9-4158-8c27-ed9f9e3f3fc3-default_0.jpg?ts=1677244882231',
//   'https://images.unsplash.com/photo-1504593811423-6dd665756598?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80',
//   'https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80'
// ];
// let currentImageIndex = 0;

// function changeBackgroundImage() {
//   slideshow.style.backgroundImage = `url(${imageURLs[currentImageIndex]})`;
//   currentImageIndex = (currentImageIndex + 1) % imageURLs.length;
// }

// setInterval(changeBackgroundImage, 1000);
