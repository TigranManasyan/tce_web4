jQuery(document).ready(function($) {
	let printProducts = data_product => {
		if(data_product.length > 0) {
			let row = '';
			data_product.forEach( (item, index) => {
				row += `<div>
					<h2>${item.name}</h2>
					<p>${item.price}</p>
					<button class='to-cart'>To cart</button>	
				</div>`;
				$("#products").html(row);
			})
		}

		$(".to-cart").on('click', function() {
			let prod = {name:'', price:0};
			prod.name = $(this).parent().find('h2').text();
			prod.price = $(this).parent().find('p').text();
			prod = JSON.stringify(prod);
			$.ajax({
				url:'cart/cart.php',
				method:'post',
				data:{ prod },
				success:function(d) {
					// location.reload()
					console.log(d)
				}
			})
		})
	}

	$.ajax({
		url:"controllers/ProductController.php",
		method:'get',
		dataType:'json',
		success:function(data) {
			printProducts(data);
		}
	})


})