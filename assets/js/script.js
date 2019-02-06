console.log('test');
// $(document).ready(function () {
    $(".btn-primary:first").click(function () {
        // $(this).button('toggle');
        $("p").toggleClass("tester-color");
    });
// });


// gallery
filterSelection("all");

function filterSelection(c) {
    var x, i;

    // puts all cols into an array
    x = document.getElementsByClassName("column2");
    
    // if arguement is 'all' then set to no value
    if (c == "all") c = "";

    // run loop through x array and for each remove class show
    for (i = 0; i < x.length; i++) {
        console.log(x[i]);
        
        // each index run w3RemoveClass
        w3RemoveClass(x[i], "show");
        
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}
function w3AddClass(element, name) {
    var i, arr1, arr2;
    // console.log(element.className);
    
    arr1 = element.className.split(" ");
    
    arr2 = name.split(" ");
    
    
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}
function w3RemoveClass(element, name) {
    var i, arr1, arr2;

    arr1 = element.className.split(" ");
    // console.log(arr1);

    arr2 = name.split(" ");
    // console.log(arr2);

    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
    console.log(element.className);
    
}
// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn2");
        for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active2");
        current[0].className = current[0].className.replace(" active2", "");
        this.className += " active2";
    });
}
// gallery
