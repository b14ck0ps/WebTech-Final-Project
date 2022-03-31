window.onload = function () {
    const filter = document.getElementById('filter');
    filter.addEventListener('change', function () {
        var url = 'Dashboard.php?userType=' + filter.value;
        window.location.href = url;
    });
};

function showItems() {
    document.getElementById("dropdown").classList.toggle("show");
}


document.getElementById("smallScreen").innerHTML = ("<h1><strong> SCREEN IS TOO SMALL <br> MOBILE VERSION IS NOT SUPPORTED </strong><h1>");