$(document).ready(function(){ 
//instead of "$(document).ready" we can also write only "$"
    console.log(" JQuery is used");
    $('h3').click();
    $('var').click();
    
    $('h3').click(function(){
        console.log(" action is taken for h3");
        // document.write(" gaya bhau gaya")
        // $('h3').hide();
        $(this).hide();

    });
    $('var').click(function(){
        console.log(" action is taken for vars");
        // $('vars').hide();
        $(this).hide();
    });
    $('.pack').click(function(){
        console.log(" action is taken for class pack");
        // $('vars').hide();
        $(this).hide();
    });
    $('#pakka').click(function(){
        console.log(" action is taken for id pakka");
        // $('vars').hide();
        $(this).hide();
    });

    // $('#pakka').hide(2000, function(){
    //     console.log("gaya khatam");
    // })
    // $('#pakka').show(2000, function(){
    //     console.log("banaya gaya he apko");
    // })
    
    // $('.pack').hide(2000, function(){
    //     console.log("gaya khatam");
    // })
    // $('.pack').show(2000, function(){
    //     console.log("banaya gaya he apko");
    // })
    $('#togle').click(function(){
        $('#pakka').toggle(2000);
    })
    $('#tgle').click(function(){
        $('.pack').toggle(2000);
    })
});


// ----types of selector----
// { 
//      1. element selector - $('element').action();
//      2. id selector - $('#id').action(); 
//      3. class selector  - $('.class').action();
// }