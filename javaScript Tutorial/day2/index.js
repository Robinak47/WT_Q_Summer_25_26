let str = "meow is mow";
console.log(str);

let str2 = 'my car name is "lamborgini"';
console.log(str2);

let str3 = `my car name is "lamborgini"`;
console.log(str3);

let carName = "Toyota";
console.log("My car name is " + carName)

let carName2 = "BmWm";
console.log(`My car name is ${carName2}`);

console.log(carName2.length);
console.log(carName2.toUpperCase());
console.log(carName2.toLowerCase());
console.log(carName2.charAt(1));
console.log(carName2.indexOf("m"));
console.log(carName2.concat(" ", "meow"));

let str4 = "My country is Bangladesh";
console.log(str4.slice(3, 10));
console.log(str4.slice(-9, -3));
console.log(str4.slice(3));
console.log("I,am,not,a,football,fan".split(","))


console.log(str4.substring(3, 10));
console.log(str4.substring(-9, -3));
//console.log(str4.substr());

console.log(str4.includes("Bangladesh"));
console.log(str4.match(/a/));

console.log("             bangladesh".trim());

let str5 = "c";
console.log(str5.padStart(4, "0"));


let st6 = "My name is meow meow meow";
console.log(st6.replaceAll("meow", "John"));


let arr = [1, 2, 3];
console.log(arr.length);
console.log(arr[0]);
console.log(arr[1]);
console.log(arr[2]);
arr[3] = "meow";
console.log(arr[3]);

arr.push("banana");
arr.unshift("mango");

console.log("printing full array");
for (ele of arr) {
    console.log(ele);
}

arr.pop();
arr.shift();


console.log("printing full array after removing ele");
for (ele of arr) {
    console.log(ele);
}


//javascipt object

let person = {
    id: "123",
    name: "mr. meow",
    age: 20
}

console.log(typeof person);
console.log(person.id);
console.log(person.name);
console.log(person.age);

console.log(person["id"]);

let booklist = [
    {
        bookId: "b1",
        title: "abc Book"

    },
    {
        bookId: "b2",
        title: "abc Book2"

    }
];

console.log(booklist);


let teacher = {
    name: "Mr. Meow",
    specializtion: "Ml",

    sayName: function () {
        console.log(this.name);
    }
}

teacher.role = "teaching";
teacher.name = "Mr. tom";

console.log(teacher);
teacher.sayName();
