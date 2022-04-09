//main.js
//メニュー選択時に起動。
$(document).on('change', '#select', function () {
    var displayArea = document.getElementById("displayArea");
    //ajax起動。post通信でselectのvalueを指定のurlに送る。
    $.ajax({
        type: 'POST',
        url: 'getData.php',
        dataType: 'json',
    }).done(function (data) {
        alert('success!!');
    }).fail(function (XMLHttpRequest, textStatus, errorThrown) {
        console.log(XMLHttpRequest.status);
        console.log(textStatus);
        console.log(errorThrown.message);
    });
});
