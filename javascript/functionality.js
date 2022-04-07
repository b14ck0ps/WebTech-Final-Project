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
    const s_fin = document.getElementById('student-fin');
    s_fin.addEventListener("click", function (evt) {
        var id = evt.target.id;
        load('../controllers/getStudentPayHistory.php', 'id=' + parseInt(id), function (http) {
            document.getElementById('paytable').innerHTML = http.responseText;
        })
    });
};
document.getElementById("smallScreen").innerHTML = ("<h1><strong> SCREEN IS TOO SMALL <br> MOBILE VERSION IS NOT SUPPORTED </strong><h1>");