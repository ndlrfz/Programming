// escape characters:
// \' or \" to escape single or double quote
// \t for tab and \n for new line
console.log("Hello JavaScript \tI\'am learning JS \n Be curious.");

// concatenation: joining two string together
// In JS: use +
console.log("Hello" + " " + "373"); // with space " "
console.log("Foo" + "Bar"); // FooBar

// interpolation: putting variable content into strings
// define the firstName and lastName variables - make it one = interpolation
// Variable is camelCase
let firstName = "Nadlir";
let lastName = "Na";
console.log(firstName + " " + lastName);

// using backtick `` to interpolate strings
console.log(`My first name is "${firstName}" and the last name "${lastName}"`);

// you dont need space when using backtick
console.log(`${firstName} ${lastName}`);

// NOTE: Excercise
// BOTH will error - Identifier `firstName` has already been declared
// let firstName = "Joko";
//var firstName = "Arda";

// create city and state variables and print out with interpolation via backtick
let city = "Sleman";
let state = "DIY";

console.log(`Saya tinggal di ${city}, ${state}`);
console.log(`Saya tinggal di ${city} \t ${state}`); // trying backting with escape /t or tab

// property in JS: use dot to access ex: "hello".length
console.log("Hello".length);

// frame that you're the best person for that
// database administrator
// vpn
// need to understand the different
// need article based on published article
// attach to
