var taxRate=.125,shippingRate=65,discountRate=.15,currencySign="$";function recalculateCart(){var e=0;Array.from(document.getElementsByClassName("product")).forEach((function(t){Array.from(t.getElementsByClassName("product-line-price")).forEach((function(t){e+=parseFloat(t.innerHTML)}))}));var t=e*taxRate,n=e*discountRate,r=e>0?shippingRate:0,c=e+t+r-n;document.getElementById("cart-subtotal").innerHTML=currencySign+e.toFixed(2),document.getElementById("cart-tax").innerHTML=currencySign+t.toFixed(2),document.getElementById("cart-shipping").innerHTML=currencySign+r.toFixed(2),document.getElementById("cart-total").innerHTML=currencySign+c.toFixed(2),document.getElementById("cart-discount").innerHTML="-"+currencySign+n.toFixed(2)}function updateQuantity(e){var t,n=e.closest(".product");if((n||n.getElementsByClassName("product-price"))&&Array.from(n.getElementsByClassName("product-price")).forEach((function(e){t=parseFloat(e.innerHTML)})),e.previousElementSibling&&e.previousElementSibling.classList.contains("product-quantity"))var r=e.previousElementSibling.value;else if(e.nextElementSibling&&e.nextElementSibling.classList.contains("product-quantity"))r=e.nextElementSibling.value;var c=t*r;Array.from(n.getElementsByClassName("product-line-price")).forEach((function(e){e.innerHTML=c.toFixed(2),recalculateCart()}))}var removeProduct=document.getElementById("removeItemModal");removeProduct&&removeProduct.addEventListener("show.bs.modal",(function(e){document.getElementById("remove-product").addEventListener("click",(function(t){e.relatedTarget.closest(".product").remove(),document.getElementById("close-modal").click(),recalculateCart()}))}));
