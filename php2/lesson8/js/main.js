jQuery(document).ready(function($) {
	let showImages = dataImages => {
		if(dataImages.length > 0) {
			let row = '';
			dataImages.forEach( (item, index) => {
				row += `
					<div data-id='${item.id}'>
						<img style='width:200px' src = '../images/${item.name}'> 
						<input type='checkbox' class='check'>
						<button class='del'> Delete </button>
					</div>	 
				 `;
				 $("#images").html(row);
			});
		}

		$(".check").on("change", function(){
			let check = $(this).is(":checked");
			let id = $(this).parent().attr('data-id');
			$.ajax({
				url:'../controllers/ImagesController.php',
				method:'get', 
				data:{action:'check', check, id},
				success:function(d) {
					console.log(d)
				}	
			})
		})
	}
	$("#show").on("click", function() {
		$.ajax({
			url:'../controllers/ImagesController.php',
			method:'get',
			dataType:'json',
			data:{action:'show'},
			success:function(d) {
				showImages(d);
			}	
		})
	})

	$("#delete-all").on("click", function() {
		$.ajax({
			url:'../controllers/ImagesController.php',
			method:'get', 
			data:{action:'delete_checkeds'},
			success:function() { 
			}	
		})
	})
})