// {
//     console.log("Ajax by Shivam");

//     let rBtn = document.getElementById("rBtn");
//     rBtn.addEventListener(`click`, bch);

//     let bBtn = document.getElementById("bBtn");

//     function bch() {
//         console.log(`you click for restore`)
//         const x = new XMLHttpRequest();

//         x.open(`GET`, `shivam.txt`, true);
//         x.onprogress = function () {
//             console.log(`Load hora hai`);
//         }
//         x.onload = function () {
//             console.log(this.responseText);
//         }
//         x.send();
//     }
//     bBtn.addEventListener(`click`, b);
//     function b() {
//         console.log(`you click for backup`)
//         const y = new XMLHttpRequest();

//         y.open(`GET`, `shiva.txt`, true);
//         y.onprogress = function () {
//             console.log(`Load hora hai`);
//         }
//         y.onload = function () {
//             console.log(this.responseText);
//         }
//         y.send();
//     }
// }

//import data from 'json1.json' assert { type: 'JSON' };
//console.log(data);

//   $(function() {


//     var people = [];

//     $.getJSON('json1.json', function(data) {
//         $.each(data.person, function(i, f) {
//             $(tblRow).appendTo("#userdata tbody");
//       });

//     });

//  });
// {
//     document.getElementById("demo").innerHTML = JSON.parse(json1.name);
// }

// {
//     $(document).ready(function () {

//         // FETCHING DATA FROM JSON FILE
//         $.getJSON("json1.json",
//             function (data) {
//                 {
//                     var student = '';

//                     // ITERATING THROUGH OBJECTS
//                     $.each(data, function (key, value) {

//                         //CONSTRUCTION OF ROWS HAVING
//                         // DATA FROM JSON OBJECT

//                         document.write(value.name);

//                         document.write(value.age);


//                     });

//                     //INSERTING ROWS INTO TABLE
//                     // $('#table').append(student);
//                 }
//             });
//     });
// }



// ---fetch---

fetch('json1.json')
.then(function (response) {
    return response.json();
}
).then(function (object) {
    // console.log(object);
    // document.write(object);
    document.getElementById("demo").innerHTML= 
    object.name + "<br>" +  object.age;

// document.getElementById("demo").innerHTML=add + " " + minus + " " + into ;
// document.getElementById("demo").innerHTML=add;
// document.getElementById("demo1").innerHTML=minus;
// document.getElementById("demo2").innerHTML=into;
}
).catch(function (error) {
    console.log("Something went wrong!!");
    console.error(error);
})


// {
//     var json1 = {
//         "name" : "Shivam",
//         " age " : 26,
//         "Isprogrammer" : true,
//         "fav food": ["veg", "non-veg"],
//         "favPlace": {
//             "relax" : "treks",
//             "holiday" : "beaches"
//         }
//     }

//     var obj = JSON.parse(json1);

// console.log(obj.name);
// console.log(obj.age);
// console.log(obj.Isprogrammer);
// }
