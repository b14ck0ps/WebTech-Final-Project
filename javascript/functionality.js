function showItems() {
    document.getElementById("dropdown").classList.toggle("show");
}
userId = undefined;

function getIdbyClick(clicked_btn) {
    userId = clicked_btn.id;
}
window.onload = function () {
    const filter = document.getElementById('filter');
    if (filter) {
        filter.addEventListener('change', function () {
            load('admins_views/usersList.php', 'filter=' + filter.value, function (http) {
                document.getElementById('userTable').innerHTML = http.responseText;
            });
        });
    }
    const del = document.getElementById('delAcc');
    if (del) {
        del.addEventListener('click', function () {
            load('../controllers/Delete.php', 'id=' + parseInt(userId), function (http) {
                document.getElementById(userId).parentElement.parentElement.parentElement.parentElement.remove();
            });
        });
    }

};
document.getElementById("smallScreen").innerHTML = ("<h1><strong> SCREEN IS TOO SMALL <br> MOBILE VERSION IS NOT SUPPORTED </strong><h1>");