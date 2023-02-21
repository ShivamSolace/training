// ----object----

// {
// let text = '{"employees":[' +
//     '{"firstName":"John","lastName":"Doe" },' +
//     '{"firstName":"Anna","lastName":"Smith" },' +
//     '{"firstName":"Peter","lastName":"Jones" },' +
//     '{"firstName":"shivam","lastName":"Yadav" }]}';

// const obj = JSON.parse(text);
// document.getElementsById("demo").innerHTML =
//     obj.employees[3].firstName + " " + obj.employees[3].lastName;
// }

// {
//     const p1 = {};
// p1.fName = "ganga";
// p1.lName = "dhar";
// p1.age = 35;

// document.getElementById("demo").innerHTML =
// p1.fName + " " + p1.lName + " is " + p1.age + " years old";
// }

// {
// let p2 = new object();
// p2.fName = "Shiva";
// p2.lName = "Shambho";
// p2.age = 30;

// document.getElementById("show").innerHTML =
// p2.fName + " " + p2.lName + " is " + p2.age + " years old";
// }

// ---add property---
// {const person = {
//     firstname: "John",
//     lastname: "Doe",
//     age: 50,
//     eyecolor: "blue"
//   };

//   person.Language="Hindi";

//   document.getElementById("show").innerHTML =
//   person.firstname + " knows " + person.Language;
// }
//   ---delete property---
// {
//     const person1 = {
//         firstname: "John",
//         lastname: "Doe",
//         age: 50,
//         eyecolor: "blue"
//       };

//       delete person1["age"];

//       document.getElementById("show").innerHTML =
//       person1.firstname + " is " + person1.age + " years old.";
// }

// ---nested objects---
// {
// let p1 = new Object();
// p1.name = "Shivam";
// p1.age = 26;
// p1.language = {
//     language1: "hindi",
//     language2: "Marathi",
//     language3: "English"
// };

// document.getElementById("show").innerHTML=p1.name + " knows " +
//     p1.language.language1 + " & " + p1.language.language3;
// }

// ---object to array---
// {
//     let p3 = {
//     name: "Solace",
//     age: 15,
//     city: "Nashik",
//     today: new Date()
//   };
// var arr1 = ["Shivam", "Ankush", "Ajay"];

// //   document.getElementById("show").innerHTML = Object.values(p3);
// //   document.getElementById("show").innerHTML = JSON.stringify(p3);
//   document.getElementById("show").innerHTML = JSON.stringify(arr1);
// }

// ---getter & setter---

// {
//     let p4 = {
//         name: "Solace",
//         age: 15,
//         language: { language1: "hin", language2: "eng", language3: "marathi" },
//         city: "Nashik",
//         today: new Date(),
//         get lang() {
//             return this.language.language2 , this.language.language3
//         }
//     };
//     document.getElementById("show").innerHTML = p4.name + " knows " + p4.lang + " & " + p4.language.language1;
// }

// {
//     let p5 = {
//         name: "Solace",
//         age: 15,
//         language: " ",
//         city: "Nashik",
//         today: new Date(),
//         set lang(value) {
//             this.language = value.toUpperCase(); // inbuilt function
//         }
//     };
//     p5.lang = "English";
//     document.getElementById("show").innerHTML = p5.language;
// }

// {
//     function f1(dos) {
//         document.getElementById("show").innerHTML = dos;
//     }

//     function myCal(num1, num2) {
//         let sum = num1 + num2;
//         f1(sum);
//     }

//     myCal(15, 10);
// }

// {
//     function a(task1, task2, task3){
//         document.getElementById("shiv").innerHTML = task1 + " & " + task2 +  " & "  + task3;
//     }
//     function b(n1, n2, n3, n4){
//         let n5 = n1 + n2;
//         let n6 = n3 - n4;
//         let n7 = n5 * n6;
//         a(n6, n7, n5);
//     }

//     b(24, 35, 18, 47);
// }

// ---constructor---
// {
// function p6(name, number, age, gender, place) {
//     this.name = name;
//     this.number = number;
//     this.age = age;
//     this.gender = gender;
//     this.place = place;
// }

// var man = new p6("Shivam", 9860985557, 26, "Male", "Nashik");
// var man2 = new p6("Sanju", 9855576098, 62, "Male", "Nava Nashik");

// document.getElementById("show").innerHTML =
//     man.name + " is just " + man.age + " years old." + "<br>" + man2.name + " is just " + man2.age + " years old."; 
// }

// ---set---
// {
//     const a2 = new set();
//     a2.add("Shivam");
//     a2.add("yadav")

//     document.getElementById("show").innerHTML = a2.size;
// }

// {
//     let a3 = new Set();

//     // Add Values to the Set
//     a3.add("Shivam");
//     a3.add("Yadav");
//     a3.add("Solace");
//     a3.add("Spartan");
//     a3.add("shivam");
//     // Display set.size
//     document.getElementById("show").innerHTML = a3.size;
//     // document.getElementById("show").innerHTML = a3.values();

// }

// ---maps---

// {
//     const emp = new Map();

//     emp.set(01, "Solace");
//     emp.set(02, "wns");
//     emp.set(03, "winjit");
//     emp.set(04, "soma");
//     emp.set(04, "suma");
//     let text = "";
//     emp.forEach(function (value, key) {
//         text += key + ' = ' + value + "<br>"
//     })
//     let tex1t = "";
//     for (const x of emp.entries()) {
//         tex1t += x + "<br>";
//     }

//     document.getElementById("show").innerHTML =
//         emp.size + " " + emp.get(03) + " " + emp.has(0) + " " + typeof emp + "<br>" + text + "<br>" + tex1t;
//     emp.delete(03);
//     emp.clear();
//     // document.getElementById("show").innerHTML = emp.get(03);
// }

// ---class---

// {
// class c3 {
//     constructor(name, year) {
//       this.name = name;
//       this.year = year;
//     }
//   }
  
//   const persona1 = new c3("Shivam", 1996);
//   const persona2 = new c3("Yadav", 1998);
//   document.getElementById("show").innerHTML =
//   persona1.name + " " + persona1.year  + "<br>" + persona2.name + " " + persona2.year;
// }

// ---delay---
/* <h3> do you know? </h3> */
// {
//     setTimeout(myFunction, 3000);

// function myFunction() {
//   document.getElementById("show").innerHTML = "Gangadhar he Saktimaan HAI!!!!!!";
// }
// }

// {
//     setInterval(myFunction, 1000);
//     function myFunction() {
//         let d = new Date();
//         document.getElementById("show").innerHTML=
//         d.getHours() + ":" +
//         d.getMinutes() + ":" +
//         d.getSeconds();
//       }
// }

{
    let a = 100;
    let b = 50;
    let sum = a + b;
    document.getElementById("show").innerHTML = "Addition of " + a + " & " + b + " is " + sum;
}