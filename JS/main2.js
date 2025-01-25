// create function luas_persegi with argument
const luas_persegi = function (x) {
  return x * x;
};

// call function luas_persegi
console.log(luas_persegi(20));

// create function makeNoise without arg
const makeNoise = function () {
  console.log("Hello guys!");
};

// call makeNoise function
makeNoise();

const roundTo = function (x, step) {
  let remainder = x % step;
  // ternary operator - shorthand dari if else
  // kondisi ? outputTrue : outputFalse
  // Jika remainder lebih kecil dari step dibagi dua
  // maka output 0, else output step
  // https://kodealgo.com/javascript/operator-ternary/
  return x - remainder + (remainder < step / 2 ? 0 : step);
};

// sisa bagi 40 % 20 = 0
// 40 - 0 + (0 < 20 /2 ? 0)
console.log(roundTo(40, 20));

// 20
// 20 - 20 + (20 < 30/2 ? 30 )
console.log(roundTo(20, 30));

// sisa bagi 15 % 12 = 3
// 15 - 3 + (3 < 12/2 ? 0)
console.log(roundTo(15, 12));

// global
let x = 15;

if (true) {
  // local and you cant access outside
  let y = 20;

  // var global can access outside
  var z = 30;
}

// return x
console.log(x);

// return z because var global
console.log(z);

// error y is not defined - y is local variable inside function
// console.log(y);

// argument factor created within hummus function
const hummus = function (factor) {
  // add ingredient function inside hummus function
  const ingredient = function (amount, unit, name) {
    // access factor through nested function
    let ingredientAmount = amount * factor;
    // if ingredientAmout is bigger that 1, add an 's' to the unit
    // So Chiken become Chikens
    if (ingredientAmount > 1) {
      unit += "s";
    }
    console.log("The ingredient is: " + `${ingredientAmount} ${unit} ${name}`);
  };

  // access ingredient function through hummus function
  ingredient(5, "slice", "Roti");
  ingredient(1, "cup", "Tea");
  ingredient(2, "chiken", "Ayam Bakar");
};

// call hummus with argument factor 1
console.log(hummus(1));

// declare function square
function square(x) {
  return x * x;
}
// then call the square function
console.log(square(5));

// call the future() function first
console.log("Return dulu baru function. ", future());

// then declare the future() and still working
function future() {
  return "This message from the future function, which defined after the console.log.";
}

function greet(person) {
  console.log("Selamat datang", `${person}`);
}

// This code runs like this:
// 1. call the greet function
// 2. print "Selamat datang Person"
// 3. Kembali ke function greet()
// 4. Baru execute console.log("bye")
greet("Reina");
console.log("bye");

// return higher number
console.log(Math.max(5, 10));

// return smaller number
console.log(Math.min(20, 50));

// return smaller number
// 5 + 100 or 10 + 100
// return 105
console.log(Math.min(5, 10) + 100);

// luasPersegi hanya punya satu argument
function luasPersegi(sisi) {
  return sisi * sisi;
}
// luasPersegi di panggil dg 3 argumen
// yang 2 otomatis di abaikan oleh JavaScript
console.log(luasPersegi(6, 90, "asdf"));

function bulatKan(angka, step = 1) {
  let sisaBagi = angka % step;
  return angka - sisaBagi + (sisaBagi < step / 2 ? 0 : step);
}

// angka 4.5 dan step 1
// sisaBagi = 4.5 % 1 adalah 0.5
// 4.5 - 0.5 + (0.5 < 0.5 ? false jadi step 1)
// 4.5 - 0.5 + 1 = 5
console.log(bulatKan(4.5));

// angka 6.7 dan step 2
// sisaBagi = 6.7 % 2 adalah 0.7
// 6.7 - 0.7 + (0.7 < 1 adalah True jadi 0)
// 6.7 - 0.7 + 0 = 6
console.log(bulatKan(6.7, 2));

// arrow function - replace the function definition with arrow =>
const myRound = (number, step) => {
  let myRemainder = number % step;
  return number - myRemainder + (myRemainder < step / 2 ? 0 : step);
};

myRound(8.7, 3);

// another arrow function
const square1 = (sisi) => {
  return sisi * sisi;
};

// another arrow function
const square2 = (sisi) => sisi * sisi;

console.log(square1(5));
console.log(square2(20));

// arrow function without argument
const horn = () => {
  console.log("Teeeeeet");
};

horn();

//closure - using function as a value
//define multiplier fuction with one argument
function multiplier(factor) {
  return (nomor) => nomor + factor;
}

//bind the twice variable to multiplier function
//print twice by passing new value.
// 4 is factor
// 2 is nomor
let twice = multiplier(4);
console.log(twice(2));

// TODO: Recursion is JavaScript
function power(base, exponent) {
  if (exponent === 0) {
    return 1;
  } else {
    return base * power(base, exponent - 1);
  }
}

console.log(power(2, 5));

// TODO:  Recursion
function solveTarget(target) {
  function find(current, history) {
    if (current == target) {
      return history;
    } else if (current > target) {
      return null;
    } else {
      return (
        find(current + 5, `(${history}+5)`) ??
        find(current * 3, `(${history} *3)`)
      );
    }
  }
  return find(1, "1");
}

console.log(solveTarget(13));

// TODO: First try creating function
function printFarmInventory(cows, chikens) {
  // convert the input to string
  let cowString = String(cows);
  // while string.length smaller than 3
  // add the 0 at front
  // 8 become 008
  // 10 become 010
  while (cowString.length < 3) {
    cowString = "0" + cowString;
  }
  console.log("We have the following:\n", `${cowString} Cows`);

  let chikenString = String(chikens);
  while (chikenString.length < 3) {
    chikenString = "0" + chikenString;
  }
  console.log(` ${chikenString} Chikens`);
}

printFarmInventory(8, 500);

// TODO: change the code
// Same logic with the code before
// but each item will have a label
function printZeroPaddedWithLabel(number, label) {
  let numString = String(number);
  while (numString.length < 3) {
    numString = "0" + numString;
  }
  console.log(`${numString} ${label}`);
}

// pass the logic to the new function
function showFarmInventory(cows, chikens, goats) {
  //each item have a label
  //cows will be passing to the number argument in printZeroPaddedWithLabel function
  //"Cows" or the label is hard coded in the second function
  printZeroPaddedWithLabel(cows, "Cows");
  printZeroPaddedWithLabel(chikens, "Chikens");
  printZeroPaddedWithLabel(goats, "Goats");
}

showFarmInventory(10, 20, 5);
showFarmInventory(4, 150, 60);

// HACK: Improve the code
// The logic stil the same,
// but instead of hard coded the max length,
// we pass it via width parameter
function zeroPad(number, width) {
  let string = String(number);
  while (string.length < width) {
    string = "0" + string;
  }
  return string;
}

// this will pass the number of cows, chikens, and goats
function checkFarmInventory(cows, chikens, goats) {
  // cows is the number
  // 3 is the width
  console.log(`${zeroPad(cows, 3)} Cows`);
  console.log(`${zeroPad(chikens, 3)} Chikens`);
  console.log(`${zeroPad(goats, 3)} Goats`);
}

checkFarmInventory(20, 2000, 100);
checkFarmInventory(100, 30, 9);

const testMin = (num1, num2) => {
  if (num1 < num2) {
    console.log(`The minimum number is: ${num1}`);
  } else if (num2 < num1) {
    console.log(`The minimum number is: ${num2}`);
  } else {
    console.log(`Both numbers are same: ${num1}`);
  }
};

testMin(2, 10);
testMin(50, 10);
testMin(2000, 2000);

function isEven(number) {
  if (number % 2 === 0) {
    return true;
  } else if (number % 2 !== 0) {
    return false;
  } else if (number < 0) {
    return isEven(-number);
  } else {
    return isEven(number - 2);
  }
}

console.log(isEven(10));
console.log(isEven(50));
console.log(isEven(75));
console.log(isEven(-1));
console.log(isEven(-10));
