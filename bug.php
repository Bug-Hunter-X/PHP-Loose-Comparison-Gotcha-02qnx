function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

function bar(){
  var x = 10;
  var y = "10";
  console.log(foo(x, y)); //This will return false
}

bar();