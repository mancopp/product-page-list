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
        case "dvd":
            showCont(dvd);
            hideCont(furniture);
            hideCont(book);
            break;
        case "furniture":
            showCont(furniture);
            hideCont(dvd);
            hideCont(book);
            break;
        case "book":
            showCont(book);
            hideCont(furniture);
            hideCont(dvd);
            break;
    }
}