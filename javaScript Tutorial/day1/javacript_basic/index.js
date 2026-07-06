var a = 10;
const pi = 3.1416;
var a = 20;
console.log(a);



function printValue() {
    console.log(a);


    if (true) {
        var b = 20;
        //let b=20;
    }

    console.log("value of B is " + b);
}

printValue();

let num1 = 20;
let num2 = 20;

// if (num1 < num2) {
//     console.log("num1 is less than num2");
// }

// else {
//     console.log("num2 is less than num1");
// }

console.log((num1 < num2) ? 'num1 is less than num2' : (num1 == num2) ? "num 1 and num 2 is equal" : "num2 is less than num1");


for (let i = 0; i < 5; i++) {
    console.log("bangladesh");
}

let j = 0;
while (j < 5) {
    console.log("moew");
    j++;
}

let arr = [1, "meow", 2.7, []];
console.log(arr);
console.log(typeof arr);
console.log(arr.length);
arr.push(87);
console.log(arr.length);

arr.forEach(function (element) {
    console.log(element);
});

for (element in arr) {
    console.log(arr[element])
}

let val1 = 10;
let val2 = 20.5;
let val3 = 1;
console.log(typeof val1)
console.log(typeof val2)
console.log(typeof val3)

console.log(typeof "meow");
console.log(typeof 'm');

let testVal;
console.log(typeof testVal);

let nullTest = null;
console.log(typeof nullTest);

let boolTest = true;
console.log(typeof boolTest)

let bigIntTest = 10n;
console.log(typeof bigIntTest);


let n1 = 10;
let n2 = 20;
let n3 = "30a";

console.log(n1 + n2);
console.log(n1 - n2);
console.log(n1 + n3);
console.log(n1 - n3);


console.log(10 == "10");
console.log(10 === "10");

function sayMeow() {
    console.log("moew meow");
}


function greet(name = "Abc") {
    console.log("hi " + name);
}

function sum(a, b) {
    return a + b;
}
sayMeow();
greet("john");
console.log(sum(10, 20));
console.log(typeof sayMeow);

const fun = function (name) {
    console.log("doing fun " + name);
}


const arrowTest = () => {
    console.log("hi");
}

const arrowTest2 = (name) => {
    console.log("hi " + name);
}

const arrowTest3 = name => "hi" + name;

fun("john");
arrowTest();

arrowTest2("john");
console.log(arrowTest3("abv"));






