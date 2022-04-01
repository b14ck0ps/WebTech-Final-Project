function showItems() {
    document.getElementById("dropdown").classList.toggle("show");
}
userId = undefined;

function getIdbyClick(clicked_btn) {
    userId = parseInt(clicked_btn.id);
}
window.onload = function () {
    const filter = document.getElementById('filter');
    if (filter) {
        filter.addEventListener('change', function () {
            var url = 'Dashboard.php?userType=' + filter.value;
            window.location.href = url;
        });
    }
    const del = document.getElementById('delAcc');
    if (del) {
        del.addEventListener('click', function () {
            var url = '../controllers/Delete.php?id=' + userId;
            window.location.href = url;
        });
    }

};
document.getElementById("smallScreen").innerHTML = ("<h1><strong> SCREEN IS TOO SMALL <br> MOBILE VERSION IS NOT SUPPORTED </strong><h1>");