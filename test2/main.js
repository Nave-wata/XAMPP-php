//main.js
//メニュー選択時に起動。

var displayArea = document.getElementById("displayArea");
//ajax起動。post通信でselectのvalueを指定のurlに送る。
setInterval('tmp()', 1000)
function tmp() {
    $.ajax({
        type: "POST",
        url: "getData.php",
        dataType: "json",
    }).done(function (data) {
        displayArea.innerHTML = data["time"];
    }).fail(function (XMLHttpRequest, textStatus, errorThrown) {
        console.log(XMLHttpRequest.status);
        console.log(textStatus);
        console.log(errorThrown.message);
    });
}
