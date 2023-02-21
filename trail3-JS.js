// ----- Arrays----
// {
// let shivFreindsList = ["Ajay", "Ankush", "Riham", "ketki", "hussain", "rahul", "shubham"];
// shivFreindsList[2] = "GangaDhar";
// for (i = 0; i <= 5; i++) {
//     document.write(shivFreindsList[i] + "<br>");
// }
// }

// const cars = ["Saab", "Volvo", "BMW"];
// cars[0] = "Toyota";
// cars.push("Audi");
// cars.push("Ferrari");
// document.getElementById("demo").innerHTML = cars;
// for (i = 0; i < cars.length; i++)
//     document.write(cars[i] + "<br>");

// -----if-----if else-------if else if-----------

// {
// let a = 20;  
// if(a>10){  
// document.write("Jai Shree Rama");  
// }  
// }

// {
// let x = 20, y = 25;
// if(x>y){
//     document.write("20 is larger number");
// }
// else{
//     document.write("25 is larger number");
// }
// }

// {
// let x = 20, y = 25;
// if(x>y){
//     document.write("x is larger number");
// }
// else if(x=y){
//     document.write("x and y are Equal numbers");
// }
// else{
//     document.write("y is larger number");   
// }
// }

// ---------------switch case----------------

// {
//     let day = 'Wednesday';
//     var numDay;
//     switch (day) {
//         case 'Monday':
//             numDay = "1st day";
//             break;
//         case 'Tuesday':
//             numDay = "2nd Day";
//             break;
//         case 'Wednesday':
//             numDay = "3rd day";
//             break;
//         case 'Wednesday':
//             numDay = "3rd day";
//             break;
//         case 'Thursday':
//             numDay = "4th day";
//             break;
//         case 'Saturday':
//             numDay = "5th day";
//             break;
//         default:
//             numDay = "Sunday";
//     }
//     document.write(numDay);
// }


// -------------for------while-----------do while-----------

// {
//     for (i=1; i<=10; i++)  
// {  
// document.write("Jai Shree Rama" + "<br/>");
//     i+=1;   //i = i + 1     1,3,5,7,9
// }
// }

// {
//     let sh = 2;
//     while(sh < 25){
//         document.write("Jai Shree Rama" + " " + "<br>");
        
//         sh = sh * 2;
//     }
// }

// {
//     let sh = 5;
//     do{
//         document.write("Jai Shree Rama" + " " + "<br>");
        
//         sh = sh * 2;
//     }
//     while(sh < 25);
// }

// ------------prompt--------

// let a = prompt("What's your age?");
// a=Number.parseInt(a);
// if(a>=18){
//     document.write("You can Vote");
// }

// let ShivAge = 26;
// let b = ShivAge>18 ? "you can vote" : "you cannot vote";
// document.write(b);


// {
// let compare = (a,b) =>{
//     return a-b
// }
// let a = [6,7,54,32,7,8,5,432];
// document.write("Unsorted: " + a);
// document.write("<br>");
// a.sort(compare);
// document.write("sorted: " + a);
// document.write("<br>");
// a.splice(3,2,321,322,323);
// document.write("Values changed: " + a);
// document.write("<br>");
// let a1 = a.slice(3,6);
// document.write("Only limited values: " + a1);
// document.write("<br>");

// a.forEach((e1)=>{
//     document.write(e1 * e1)
//     document.write("<br>");
// })
// }

//  ---------------OOPS--------------

// ---class---

// {
// class Student  
//   {    
//     constructor(S_id,S_name)  
//     {  
//       this.S_id=S_id;  
//       this.S_name=S_name;  
//     }    
//     Solace()  
//     {  
//   document.writeln(this.S_id+" "+this.S_name+"<br>")  
//     }  
//   }     
// let s1=new Student("S011","Shivam Yadav");
// let s2=new Student("S012","Shiv");    
// let s3=new Student("S013","Shivaav");
// let s4=new Student("S014","ShivaYadav");    


// s1.Solace(); 
// s2.Solace(); 
// s3.Solace();
// s4.Solace();
// // s1.Solace();
// }

// ---Object---
// {
//     Student={id:"S01",name:"Shivam Yadav",salary:40000}  
// document.write(Student.id+" "+Student.name+" "+Student.salary);
// }

// {
// let emp=new Object();  
// emp.id=101;  
// emp.name="Shivam Yadav";  
// emp.salary=50000;  
// document.write(emp.id+" "+emp.name+" "+emp.salary);
// }
