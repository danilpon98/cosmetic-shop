jQuery(document).ready(function($) {


		/* Search */
		var products = new Bloodhound({
		    datumTokenizer: Bloodhound.tokenizers.whitespace,
		    queryTokenizer: Bloodhound.tokenizers.whitespace,
		    remote: {
		        wildcard: '%QUERY',
		        url: path + '/search/typeahead?query=%QUERY'
		    }
		});

		products.initialize();

		$("#typeahead").typeahead({
		    // hint: false,
		    highlight: true
		},{
		    name: 'products',
		    display: 'title',
		    limit: 10,
		    source: products
		});

		$('#typeahead').bind('typeahead:select', function(ev, suggestion) {
		    // console.log(suggestion);
		    window.location = path + '/search/?s=' + encodeURIComponent(suggestion.title);
		});
		/* end Search */

		/*Cart*/
		$('body').on('click', '.add-to-cart-link', function(e){
		     e.preventDefault();
		     var id = $(this).data('id'),
		         qty = $('.quantity input').val() ? $('.quantity input').val() : 1;
		     $.ajax({
		         url: '/cart/add',
		         data: {id: id, qty: qty},
		         type: 'GET',
		         success: function(res){
		             showCart(res);
		         },
		         error: function(){
		             alert('Ошибка! Попробуйте позже');
		         }
		     });
		});

		$('#cart .modal-body').on('click', '.del-item', function(){
		    var id = $(this).data('id');
		    $.ajax({
		        url: '/cart/delete',
		        data: {id: id},
		        type: 'GET',
		        success: function(res){
		            showCart(res);
		        },
		        error: function(){
		            alert('Error!');
		        }
		    });
		});

		function showCart(cart){
		    if($.trim(cart) == '<h3>Корзина пуста</h3>'){
		        $('#cart .modal-footer a, #cart .modal-footer .btn-danger').css('display', 'none');
		    }else{
		        $('#cart .modal-footer a, #cart .modal-footer .btn-danger').css('display', 'inline-block');
		    }
		    $('#cart .modal-body').html(cart);
		    $('#cart').modal();
		    if($('.cart-sum').text()){
		        $('.simpleCart_total').html("&#8381; " + $('#cart .cart-sum').text());
		    }else{
		        $('.simpleCart_total').text('Корзина пуста');
		    }
		}

		$('#cartclick').on('click', function(event) {
			event.preventDefault();
			getCart();
		});

		$('#cartclear').on('click', function(event) {
			event.preventDefault();
			clearCart();
		});

		function getCart() {
		    $.ajax({
		        url: '/cart/show',
		        type: 'GET',
		        success: function(res){
		            showCart(res);
		        },
		        error: function(){
		            alert('Ошибка! Попробуйте позже');
		        }
		    });
		}

		function clearCart() {
		    $.ajax({
		        url: '/cart/clear',
		        type: 'GET',
		        success: function(res){
		            showCart(res);
		        },
		        error: function(){
		            alert('Ошибка! Попробуйте позже');
		        }
		    });
		}
		/* end Cart*/
		
		/* Tabs */
/*		$('.tab-nav a').on('click', function(event) {
		  event.preventDefault();

		  var navTab = $(this).parent();
		  var navTabIndex = navTab.index();
		  var contentTab = $('.tab-content_item');
		  
		  navTab.addClass('active').siblings().removeClass('active');
		  contentTab.eq(navTabIndex).addClass('visible').siblings().removeClass('visible');
		});*/
		/* end Tabs */

		    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });
});