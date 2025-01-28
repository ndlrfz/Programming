// create an array sequence
let sequence = [1, 2, 3, 4, 5];

// push method add element to an array and return the length
sequence.push(6);
sequence.push(7);
console.log(sequence);

// pop method remove last element from array
console.log(sequence.pop());
console.log(sequence);

// create an object day1
// remeber that object uses : not =
let day1 = {
  squirrel: false,
  events: ["work", "touched tree", "eat pizza", "running"],
};

// access day1 all or specify the properties
console.log(day1);
console.log(day1.squirrel);
console.log(day1.events);

// access day1.wolf property return undefined
console.log(day1.wolf);

// create day1.wolf to false on the fly
// access day1.wolf and return the data
day1.wolf = false;
console.log(day1.wolf);

let descriptions = {
  title: "How to work",
  id: "Where is my id?",
};

console.log(descriptions);

// replace the id with new value through =
descriptions.id = 124567;
console.log(descriptions.id);

// create object myObj
let myObj = { left: "Im left", right: "Im right" };
console.log(myObj);
console.log(typeof myObj);

// delete left property from myObj
// console.log return undefined
delete myObj.left;
console.log(myObj.left);

// check if left in myObj return false
// check if right in myObj return true
console.log("left" in myObj);
console.log("right" in myObj);

// check list properties of object with Object.keys
console.log(Object.keys(myObj));

// create objectA
let objectA = { a: 1, b: 2, c: 3 };
console.log(objectA);

// copies the object to the objectA
// the c : 3 is replaced with the c : 8
Object.assign(objectA, { c: 8, d: 9, e: 10 });
console.log(objectA);

// create new object squirrelNote
let squirrelNote = [
  {
    events: ["work", "touched grass", "touch tree", "eat pizza"],
    squirrel: false,
  },
  {
    events: ["play football", "play basketball", "play volleyball"],
    squirrel: false,
  },
  {
    events: ["watch movie", "playing games"],
    squirrel: true,
  },
];

// check and print squirrelNote
console.log(typeof squirrelNote);
console.log(squirrelNote);

// create object obj1 obj2 and obj3
let obj1 = { value: 10 };
let obj2 = obj1;
let obj3 = { value: 20 };

// return true because obj2 pointed to obj1
console.log(obj1 == obj2);

// return false even the same value, but not the place
console.log(obj1 == obj3);

// replace the obj1.value with 100
// obj2 value also changed because pointed to obj1
obj1.value = 100;
console.log(obj2);
console.log(obj1);

// create empty object journal
let journal = [];
console.log(typeof journal);

// create function addEntry to add value to journal object
function addEntry(event, status) {
  journal.push({ event, status });
}

// adding data to journal with the addEntry function
addEntry(["eat grass", "walking"], true);
addEntry(["play piano", "listen to music"], false);
addEntry(["watching movies", "playing games"], true);

// print journal
console.log(journal);

// prompt to prompt user a question
// alert to alert to the browser
//let myName = prompt("What is your name?");
//alert(`Hello ${myName}`);

// import JS file (work on Node.js only)
import { JOURNAL } from "./journal.js";

// TODO: Computing Correlation
function tableFor(event, journal) {
  let table = [0, 0, 0, 0];
  for (let i = 0; i < journal.length; i++) {
    let entry = journal[i],
      index = 0;
    if (entry.events.includes(event)) index += 1;
    if (entry.squirrel) index += 2;
    table[index] += 1;
  }
  return table;
}

console.log(tableFor("pizza", JOURNAL));
console.log(JOURNAL.length);

// loop over array with for
// show the length of `events` with in the JOURNAL
for (let entry of JOURNAL) {
  console.log(`${entry.events.length} events`);
}

// phi function
function phi(table) {
  return (
    (table[3] * table[0] - table[2] * table[1]) /
    Math.sqrt(
      (table[2] + table[3]) *
        (table[0] + table[1]) *
        (table[1] + table[3]) *
        (table[0] + table[2]),
    )
  );
}
console.log(phi([76, 9, 4, 1]));

// create function journalEvents
// find available event in the JOURNAL
function journalEvents(journal) {
  let events = [];
  for (let entry of journal) {
    for (let event of entry.events) {
      // find available event i the JOURNAL
      // put events in the events object
      if (!events.includes(event)) {
        events.push(event);
      }
    }
  }
  return events;
}

console.log(journalEvents(JOURNAL));

// find the correlation of available events in the JOURNAL with phi function
for (let event of journalEvents(JOURNAL)) {
  // console.log(event + ":", phi(tableFor(event, JOURNAL)));

  let correlation = phi(tableFor(event, JOURNAL));
  if (correlation > 0.1 || correlation < -0.1) {
    console.log(event + ":", correlation);
  }
}

for (let entry of JOURNAL) {
  if (
    entry.events.includes("peanuts") &&
    !entry.events.includes("brushed teeth")
  ) {
    entry.events.push("peanut teeth");
  }
}

console.log(phi(tableFor("peanut teeth", JOURNAL)));

console.log(journalEvents(JOURNAL));

let todoList = [];

function addTask(task) {
  todoList.push(task);
}

function getTask() {
  return todoList.shift();
}

function addUrgentTask(task) {
  todoList.unshift(task);
}

addTask("Eat salak");
console.log(todoList);

console.log(getTask());

addUrgentTask("Sholat Maghrib");
console.log(todoList);

addTask("Makan malam");
console.log(todoList);
console.log(getTask());

// indexOf method - search for array and return the index before
// indexOf(4); return 3
// indexOf(10); return -1
// indexOf(7); return 6
// when out of index, return -1
console.log([1, 2, 3, 4, 5, 6, 7, 8, 9].indexOf(7));

// slicing through array
// slice(1,3); return "eat" and 3, which means array[1] and array[2]
// remember array start from 0
// slice(2, 5); return 3, 'array', 5
// when out of index, return empty array
console.log(
  [1, "eat", 3, "array", 5, "games", "dota2", 8, "orbit"].slice(10, 12),
);

// check length of array
let myArr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
console.log(myArr.length);
console.log(myArr.concat(10, 11, 12, 13));

function removeArr(array, index) {
  return array.slice(0, index).concat(index + 1);
}

console.log(removeArr([1, 2, 3, 4, 5], 20));

// Use concat method to add new item to array
// You can add single item such as '10'
// You can also add new array such as [100, 101, 'myitemx']
console.log(myArr.concat(["newitem1", "newitem2", 1000]));

// NOTE: String are immutable, but you can use some useful its properties to manipulate string.
let State = "magelang";

// make it string uppercase
console.log(State.toUpperCase());
// check length of string
console.log(State.length);
// show index of 3, 4, and 5
console.log(State.slice(3, 6));
// check which index of given value
// print the first "g"
console.log(State.indexOf("g"));

// trim used to remove whitespace new line etc
console.log("    swooop \t".trim());

let todoMine = "I walk to sho and buy milk";

// split words with split method
// the example, split with " "
let wordSplit = todoMine.split(" ");

// splitted word become array object
// you can access the index of array
console.log(wordSplit);
console.log(typeof wordSplit);
console.log(wordSplit[4]);

// join the splitted word or array with the join method
console.log(wordSplit.join(" "));

// copy of string in x times
console.log("ho".repeat(10));

// TODO:
// 1. Rest Parameter: accept to any number of arguments with the three dots ...
//  You can create a function that accept any number of arguments
//  function (...arguments) {..};
// 2. The Math object
//  Math.min to find lowest number
//  Math.max to find highest number
//  Math.sqrt to find squere root

// JSON.stringify convert JSON data to String
let myMessage = JSON.stringify({
  squirrel: true,
  events: ["eat pizza", "brush teeth", "play games"],
});

console.log(myMessage);
console.log(typeof myMessage);

// JSON.parse convert string to array data
let myMessageJson = JSON.parse(myMessage);
console.log(myMessageJson);
console.log(typeof myMessageJson);

// create function range to generate range number (similar to `range ()` in Python)
// then output as an array
function range(start, end) {
  // create empty array
  let genArray = [];
  for (let i = start; i <= end; i++) {
    // add each number from loop to array with push(); method
    genArray.push(i);
  }
  // return the array
  return genArray;
}

// generate array of number 1, 100
console.log(range(1, 100));

// reverse an array with the reverse(); method
let revArray = range(1, 100);
console.log(revArray.reverse());

// create function reverseArray to reverse array via reverse();
function reveseArray(array) {
  return array.reverse();
}

console.log(reveseArray([1, 2, 3, 4, 5, "Mangga", "Pisang", "Jambu"]));
