//da utilizzare se si cerca una classe
 
function check_cart_info() {
    ?>
    <script>
    const cart_class = document.getElementsByClassName('cart-icon');  //<- change here the element class where there's the cart icon
    const cartInfoCheck = setInterval(checkCart, 1000);               //<- sampling time, you can adjust as you want 1000 = 1second

    if(cart_class === null ){                                         //<- if the class is not found, destroy the intervall
        clearInterval(cartInfoCheck);
    }
    
    function checkCart() {
        const searchTerm = 'woocommerce_items_in_cart=1';
        let indexOfFirst = document.cookie.indexOf(searchTerm);     //check if the woocommerce items_in_cart exist
        if (indexOfFirst == -1){
            cart_class[0].classList.remove('class_cart_info')       //<-destroy the class (you can change the name as you want)
        } else {
            cart_class[0].classList.add('class_cart_info')          //<-add the class (you can change the name as you want)
        }
    }
  </script>
    <?php
}
add_action('wp_footer', 'check_cart_info');

// add this to function.php
// add the style you want in your style.css
