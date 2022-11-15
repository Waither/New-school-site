function change_color() {
    var checkbox = document.getElementById("checkbox_change");
    var html = document.querySelector("html");
    let asw = document.getElementsByClassName("asw1");
    let txt12 = document.getElementsByClassName("txt12");
    let txt5 = document.getElementsByClassName("txt5");
    let tit3 = document.getElementsByClassName("tit3");
    let przyciskszkola = document.getElementsByClassName("przyciskszkola");
    html.style.transition = "all 700ms ease-in-out"
    if (checkbox.checked) {
        html.style.backgroundColor = "#303030";
        Array.from(asw).forEach(change_colorwhite);
        Array.from(txt5).forEach(change_colorwhite);
        Array.from(txt12).forEach(change_colorwhite);
        Array.from(tit3).forEach(change_colorwhite);
        Array.from(przyciskszkola).forEach(change_colororange);
        Array.from(przyciskszkola).forEach(change_colorbuttonbgblue);
    }
    else {
        html.style.backgroundColor = "white";
        Array.from(asw).forEach(change_colorblack);
        Array.from(txt5).forEach(change_colorblack);
        Array.from(txt12).forEach(change_colorgrey);
        Array.from(tit3).forEach(change_colorblack);
        Array.from(przyciskszkola).forEach(change_colorblue);
        Array.from(przyciskszkola).forEach(change_colorbuttonbgwhite);
    }
}

function change_colorwhite(item) {
    item.style.color = "#fff"
}

function change_colorblack(item) {
    item.style.color = "#000"
}

function change_colorgrey(item) {
    item.style.color = "#777777"
}

function change_colorblue(item) {
    item.style.backgroundColor = "#063970";
    item.style.color = "#063970";
}

function change_colororange(item) {
    item.style.backgroundColor = "#ea6645";
    item.style.color = "#ea6645";
}

function change_colorbuttonbgblue(item) {
    item.style.setProperty("--colorbg", "#063970")
}

function change_colorbuttonbgwhite(item) {
    item.style.setProperty("--colorbg", "#fff")
}

//OGARNĄĆ ZMIANY