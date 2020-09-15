const adminDelBtns = document.querySelectorAll('.admin-product-delete');

adminDelBtns.forEach(function(btn){
    btn.addEventListener('click', function(e){
        if(!confirm("Are you sure you want to delete this product?")) {
            e.preventDefault();
        }
    });
});



//const alertMsg = document.querySelector('.alert-dismiss');
//setTimeout(function(){
//    alertMsg.remove()
//}, 3500);

setTimeout(function(){
    $('.alert-dismiss').fadeOut(1000);
}, 4000);