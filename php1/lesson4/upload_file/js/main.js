jQuery(document).ready(function($) {
	let printImages = imgData => {
		console.log(imgData)
		if(imgData.length > 0) {
			let row = "";
			imgData.forEach( (item, index) => {
				row += `
					<p>
						<a href="images/${item}" target="blank">${item}</a>
					</p>
				`;
			});
			$("#result").html(row);
		}
	}

	$.ajax({
		url:"images.php",
		method:"get",
		dataType:"json",
		success:function(data) {
			printImages(data)
		}
	})
})