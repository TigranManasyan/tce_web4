jQuery(document).ready(function($) {

	let printImages = images_data => {
		if(images_data.length > 0) {
			let itemIMG = "";
			images_data.forEach( (item, index) => {
				itemIMG += `
					<div class='item'>
						<img src="${item.path}">
					</div>
				`;
			});
			$("#images").html(itemIMG);
		}
	}


	$.ajax({
		url:"models/select_images.php",
		method:"get",
		dataType:"json",
		success:function(data) {
			printImages(data);
			console.log(data); 
		},
		error:function(er) {
			console.log(er)
		}
	})

})