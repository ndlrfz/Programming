let fname = "John";
let lname = "Doe";

console.log(fname);
console.log(lname);

let num = 20;
console.log(num);

// With `let` you can reassign the num variable because it is delcared on top
// reassign num with value 50 - NO ERROR
num = 50;
console.log(num);

// const cannot reassgn and will throw you an error when double
// const pi = 3.14;
// pi = 20;
//
// console.log(pi);

console.log((3 + 2) - 76 * (1 + 1))

let name = "John";
let admin = name;

console.log(admin);

// excercise
console.log(23 + 23);
console.log((4 + 6 + 9) / 77);

let a = 10;
console.log(a);

console.log(9 * a);

let max = 57;
let actual = max - 13;
let percentage = actual / max;


// JavaScript using + for arithmatic and string concatenation
// other cases:
// 30 + "20" or number + string will result concatenation
// "30" + 20 or string + number will result concatenation
//
let x = 20;
let y = 40;

let z = x + y;
console.log(z);

let fnum = "20";
let lnum = "40";

let znum = fnum + lnum;
console.log(znum);


// JavaScript running from left side. So the operation here is
// 30 + 40 = 70
// 70 + "50" (str > concatenation) = 7050
let xnum = 30;
let ynum = 40;
let wnum = "50";

console.log(xnum + ynum + wnum);

//JavaScript wil convert the data type from str to number automatically 
// within the operations such as bagi, kali, kurang
console.log("50" / 2); // 25
console.log("30" * 10); // 300
console.log("100" - "80") // 20

// NaN pr Not a Number is an ilegeal number in JS
let xtest = 100 / "Apple"; // output NaN
console.log(xtest);

let ytest = 300 / "30"; // output will be number because str "30" converted to number
console.log(ytest);

console.log(isNaN(xtest)); // true because xtest is NaN
console.log(isNaN(ytest)); // false becaise ytest is number or not NaN

typeof NaN // NaN is still return type as number

console.log(1 + 1 == 2 && 10 * 10 > 50);

let theNumber = Number(prompt("Input your number: "));

if (!Number.isNaN(theNumber)) {
  console.log("Your number square root of " + theNumber * theNumber);
} else {
  console.log("Please input only number");
}

let guess = Number(prompt("Enter your guess: "));

// if num is smaller than 10 -> Too Small
if (guess < 10) {
  console.log("Your guess is " + guess + ". It is too SMALL.");
} else if (guess < 100) {
  console.log("Your guess is " + guess + ". It is MEDIUM, between 10 to 100");
} else {
  console.log("Your guess is too HIGH, " + guess + " is greater than 100.");
}

// while loop JavaScript
let myNumber = 0;

while (myNumber <= 10) {
  console.log(myNumber);
  myNumber = myNumber + 1;
}

// while loop JS
// 2 ** 10
let result = 1;
let counter = 0;

while (counter < 10) {
  result = result * 2;
  counter = counter + 1;
}

console.log(result);
console.log(2 ** 10);

// Another loop in JS with `do while`
// the difference is eveything under `do` will always be executed
// you can create infinite loop with do
let yourName;
do {
  yourName = prompt("What is your name? "); // the code loop here if you not giving an input because !yourName is false
} while (!yourName); // ! or NOT (logical) operator in JS - return false
console.log("Hello " + yourName);

// using ! or NOT logical operator will return false
let xyNum = "hakase";
console.log(xyNum);
console.log(!xyNum);

// loop with for in JS
// xNumber++ is to increament
// xNumber-- is to decreament
for (let xNumber = 0; xNumber <= 12; xNumber++) {
  console.log(xNumber);
}

// using for loop to egenrate 2 ** 10
let myResult = 1;
for (let counter = 0; counter < 10; counter = counter + 1) {
  myResult = myResult * 2;
}

console.log(myResult);

for (let current = 20; ; current = current + 1) {
  if (current % 7 == 0) {
    console.log(current);
    break;
  }
}


// create dash balnk value
let myDash = "";

for (let index = 0; index < 7; index++) {
  // concatination of myDash + #
  console.log(myDash = myDash + "#");
}

for (let myBuzz = 1; myBuzz <= 100; myBuzz++) {
  //  const element = array[myBuzz];
  // console.log(myBuzz);
  // if else executed when false, so you must put
  // && logical operator on top
  if (myBuzz % 3 === 0 && myBuzz % 5 === 0) {
    console.log(myBuzz + " FizzBuz");
  } else if (myBuzz % 3 === 0) {
    console.log(myBuzz + " Fizz");
  } else if (myBuzz % 5 === 0) {
    console.log(myBuzz + " Buzz");
  }
}

let boardWhite = " ";
let boardBlack = "#";

for (let chess = 0; chess <= 8; chess++) {
  // const element = array[index];
  console.log(chess = boardBlack + " ");
}
