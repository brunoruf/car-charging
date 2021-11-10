
/* MODALS */

function abreMenu(){
    var div = document.getElementById("menu-mobile");
    div.style.display = "block";
}

function fechaMenu(){
    var div = document.getElementById("menu-mobile");
    div.style.display = "none";
}

/* IMG GALLERY */

function showImage(img) {
    const imgBig = document.getElementById("product-page-galery-image-big");
    imgBig.src=img.src;
}