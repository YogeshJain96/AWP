<script>
    //database later
    var cartItems = [];
    function addToCart(pid, name, price) {
      var product = {
        pid: pid,
        name: name,
        price: price,
        qty: 1
      };
 
      //Adding
      if (cartItems.length != 0) {
        var found = 0;
        cartItems.forEach(validateAndAdd);
        if (!found)
          cartItems.push(product);
      }
      else
        cartItems.push(product);
 
      function validateAndAdd(item) {
        if (item.pid == pid) {
          found = 1;
          item.qty += 1;
        }
      }
 
      //Printing
      console.log("Printing Cart");
      cartItems.forEach(function (item) {
        console.log(item);
      });
    }
  </script>