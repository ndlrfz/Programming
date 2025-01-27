let c = 0;
const count = document.getElementById("count");

function inc() {
  c++;
  count.textContent = c;
}

function dec() {
  // prevent minus number
  // if c greater than 0
  // if true c minus 1
  // if false keep the value 0
  c = c > 0 ? c - 1 : 0;
  count.textContent = c;
}

function reset() {
  count.textContent = 0;
}
