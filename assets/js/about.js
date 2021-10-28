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

window.onresize = function () {
    console.log("resize");
    if (window.screen.availWidth <= 425) {
        var element = document.getElementById("categories");
        console.log(element.classList);
        element.classList.remove('offset-1')

        var element = document.getElementById("categories1");
        console.log(element.classList);
        element.classList.remove('offset-1')
    }
}

window.onresize()

// $(window).bind("resize", function () {
//     console.log($(this).width())
//     if ($(this).width() <= 425) {
//         var element = document.getElementById("categories");
//         console.log(element.id);
//         element.classList.remove('offset-1')

//     }

// })
