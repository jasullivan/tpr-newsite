// console.log('test');
// $(document).ready(function () {
    $(".btn-primary:first").click(function () {
        // $(this).button('toggle');
        $("p").toggleClass("tester-color");
    });
// });

/******************************* 
// gallery
********************************/
filterSelection("all");

function filterSelection(c) {
    var x, i;
    // puts all column2 classes into an array
    x = document.getElementsByClassName("column2");
    
    // if arguement is 'all' then sets it to no value
    if (c == "all") {c = "";}

    // run loop through x (array) and for each item remove the class show
    for (i = 0; i < x.length; i++) {
        
        //on each index run w3RemoveClass
        w3RemoveClass(x[i], "show");
        
        // says if an index from the column2 class name array contains (c) then add class show. Others dont bother.
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}
function w3AddClass(element, name) {
    var i, arr1, arr2;
    
    // creates an array of 2 strings from the classes in the element. It splits by the space " " which creates the 2. 
    arr1 = element.className.split(" ");
    
    // creates a string from the name arguement (show). As there are no spaces it creates an array of 1 item.
    arr2 = name.split(" ");
    
    // runs once and if it doesn't contain arr2[i] show then add it with a space in between.
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}
function w3RemoveClass(element, name) {
    var i, arr1, arr2;

    // creates an array of 2 strings from the classes in the element. It splits by the space " " which creates the 2. 
    arr1 = element.className.split(" ");

    // creates a string from the name arguement (show). As there are no spaces it creates an array of 1 item.
    arr2 = name.split(" ");

    // while loop runs once as arr2.length array (show) has 1 item. If arr2[i] is found in arr1 array then remove it.
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }

    // puts class names back having removed show. Joins them with a space inbetween
    element.className = arr1.join(" ");
    
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
/******************************* 
// gallery  ends
********************************/
