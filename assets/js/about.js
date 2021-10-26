// window.onresize = function () {
//     console.log("resize");
//     if (window.screen.availWidth < 992) {
//         var element = document.getElementById("testimonial_card");
//         element.classList.remove("row");
//         element.classList.add("new-cardHeader");


//         var myobj = document.getElementById("blockQuote");
//         console.log(myobj);
//         // myobj.remove();
//     }
// }


$(window).bind("resize", function () {
    console.log($(this).width())
    if ($(this).width() < 425) {
        var element = document.getElementById("categories");
        element.classList.remove('offset-1')

    }

})
