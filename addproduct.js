const dvd = document.querySelector(".dvd");
const furniture = document.querySelector(".furniture");
const book = document.querySelector(".book");

const sel = document.getElementById("productType");

showCont = (cont) => {
    cont.style.display = "block";
}
hideCont = (cont) => {
    cont.style.display = "none";
}

selectFunc = () => {
    switch (sel.value) {
        case "DVD":
            showCont(dvd);
            hideCont(furniture);
            hideCont(book);
            break;
        case "Furniture":
            showCont(furniture);
            hideCont(dvd);
            hideCont(book);
            break;
        case "Book":
            showCont(book);
            hideCont(furniture);
            hideCont(dvd);
            break;
    }
}