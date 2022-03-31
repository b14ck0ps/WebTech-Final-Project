function showItems() {
    document.getElementById("dropdown").classList.toggle("show");
}

// function replaceEmptySrc(image) {
//     if (image.complete && image.naturalHeight == 0) {
//         image.src = '../assets/default/profile_picture.jpg';
//     }
// }
document.getElementById("smallScreen").innerHTML = ("<h1><strong> SCREEN IS TOO SMALL <br> MOBILE VERSION IS NOT SUPPORTED </strong><h1>");
// replaceEmptySrc(document.getElementById("profile_picture"));