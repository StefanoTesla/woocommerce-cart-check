//da utilizzare se si cerca un ID
 
function check_cart_info() {
?>
    <script>

 
    const cart_id = document.getElementById('cart-icon')  //<- change here the element id where there's the cart icon
    const cartInfoCheck = setInterval(checkCart, 1000);   //<- sampling time, you can adjust as you want 1000 = 1second
 
    if (cart_id === null){                                //<- if the id is not found, destroy the intervall
        clearInterval(cartInfoCheck);
    }
    
    function checkCart() {
        const searchTerm = 'woocommerce_items_in_cart=1';     
        let indexOfFirst = document.cookie.indexOf(searchTerm);   //check if the woocommerce items_in_cart exist
        if (indexOfFirst == -1){
            cart_id.classList.remove("id_cart_info_show")  //<-destroy the class (you can change the name as you want)
        } else {
            cart_id.classList.add("id_cart_info_show")    //<-add the class (you can change the name as you want)
        }
 
    }
    </script>
<?php
}
add_action('wp_footer', 'check_cart_info');

// add this to function.php
