// array reduce reducing your array to single number
const numbers = [3, 6, 2, 9, 1];
const sum = numbers.reduce((p, c) => {
  return p + c;
}, 0);

console.log(sum);

// 0 + 3 + 6

// objects
const people = [
  { name: "Dom Perry", age: 35 },
  { name: "Andrew Wilkinson", age: 47 },
  { name: "Brian Walker", age: 27 },
];

const oldestAge = people.reduce((p, c) => {
  if (c.age > p) {
    return c.age;
  }
  
  return p;
}, 0);
