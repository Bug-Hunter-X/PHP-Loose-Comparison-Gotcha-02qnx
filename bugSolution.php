function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

function bar(){
  var x = 10;
  var y = "10";
  console.log(foo(x, y)); //This will return false because we are using strict comparison
}

bar();
//The solution is to use strict comparison (===) instead of loose comparison (==) to ensure that both the value and type are compared.