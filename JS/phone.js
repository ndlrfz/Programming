// histing harga hp - with loop
// setelah di tambah, tambahkan tax dan print total
// check available money in the bank
// constant for tax, phone price, accesories price, and spending treshold
// tax and price formatted with $ as dollar and two decimal (float)

//const phonePrice = 500;
//const accPrice = 100;
//const treshold = 1000;
//const taxPrice = 5;
//const taxTotal = (phonePrice / taxPrice) * 100;

//let BankAcc = prompt("How much money do you have");
//console.log(`I've ${BankAcc} in my bank account.`);
//

let cost = function calcMoney(phone, acc, tax = 5.0) {
  phone = parseFloat(prompt("How much phone price?"));
  acc = parseFloat(prompt("How much accesoris price?"));
  bankMoney = parseFloat(prompt("How much money you have?"));
  totalTax = (tax / 100) * phone;
  totalPrice = phone + acc + totalTax;
  remMoney = bankMoney - totalPrice;

  if (totalPrice > bankMoney) {
    console.log("You don't have enough money");
  } else {
    console.log(
      `Total price of the phone is $${totalPrice}.\nYour remaining money is $${remMoney}`,
    );
  }
};

cost();
