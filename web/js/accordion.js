$('.catalog1').dcAccordion();

$(function() {
	$('#signup-phone_number').mask("(999) 999-9999");
});
function showCart(cart){
    $('#cart').html(cart);

}

function getCart(){
	$.ajax({
		url: '/cart/show',
		type: 'GET',
		success: function(res){
            if(!res) alert('Ошибка!');
            count = res['cart_count'];
            $('#cartCount').attr('data-count', count);
			showCart(res['html']);
		},
		error: function(){
			alert('Error!');
		}
	});
	return false;
}

$('#cart').on('click', '.del-item', function(){
	var id = $(this).data('id');
	$.ajax({
		url: '/cart/del-item',
		data: {id: id},
		type: 'GET',
		success: function(res){
            if(!res) alert('Ошибка!');
            count = res['cart_count'];
            $('#cartCount').attr('data-count', count);
			showCart(res['html']);
		},
		error: function(){
			alert('Error!');
		}
	});
});

function clearCart(){
	$.ajax({
		url: '/cart/clear',
		type: 'GET',
		success: function(res){
            if(!res) alert('Ошибка!');
            count = res['cart_count'];
            $('#cartCount').attr('data-count', count);
			showCart(res['html']);
		},
		error: function(){
			alert('Error!');
		}
	});
}

$('.add-to-cart').on('click', function (e) {
	e.preventDefault();
	var id = $(this).data('id'),
	qty = $('#qty').val();
	$.ajax({
		url: '/cart/add',
        data: {id: id, qty: qty},
		type: 'GET',
		success: function(res){
            if(!res) alert('Ошибка!');   
            count = res['cart_count'];
            $('#cartCount').attr('data-count', count);
			showCart(res['html']);
		},
		error: function(){
			alert('Error!');
		}
	});
});

$('.add-to-cart1').on('click', function (e) {
	e.preventDefault();
	var id = $(this).data('id');
	$.ajax({
		url: '/cart/add',
        data: {id: id},
		type: 'GET',
		success: function(res){
            if(!res) alert('Ошибка!');   
            count = res['cart_count'];
            $('#cartCount').attr('data-count', count);
			showCart(res['html']);
		},
		error: function(){
			alert('Error!');
		}
	});
});

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {stickyFunc()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyFunc() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

function snackFunc() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 1000);
  }