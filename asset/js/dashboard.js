var url = ".." + location.href.slice(33);
var list = document.querySelectorAll(".list");
for (var i = 0; i < list.length; i++) {
    var href = list[i].getElementsByTagName("a");
    var url_page = href[0].getAttribute("href");
    if (url == url_page || url == url_page + "/") {
        list[i].className += "active";
    }
}

