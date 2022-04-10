//main.js
//メニュー選択時に起動。

var displayArea = document.getElementById("displayArea");
//ajax起動。post通信でselectのvalueを指定のurlに送る。
//setInterval('tmp()', 1000)
tmp();
function tmp() {
    $.ajax({
        type: "POST",
        url: "getData.php",
        dataType: "json",
    }).done(function (data) {
        for (var item in data) {
            displayArea.insertAdjacentHTML("beforeend", "a");
        }
    }).fail(function (XMLHttpRequest, textStatus, errorThrown) {
        console.log(XMLHttpRequest.status);
        console.log(textStatus);
        console.log(errorThrown.message);
    });
}
