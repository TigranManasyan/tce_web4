jQuery(document).ready(function($) {
	let showImages = dataImages => {
		if(dataImages.length > 0) {
			let row = '';
			dataImages.forEach( (item, index) => {
				row += `
					<div data-id='${item.id}' class="my-4">
						<img src='../images/${item.path}' width="200px">
						<input type='checkbox' class='check'>
						<button class='del'> Delete </button>
					</div>
				 `;
				 $("#images").html(row);
			});
		}

        $(".check").on("change", function(){
			$("#select-all").show();
			$("#delete-all").show();
            let check = $(this).is(":checked");
            let id = $(this).parent().attr("data-id");
            $.ajax({
                url: "../controllers/ImagesController.php",
                method: "get",
                data: {action:"check", check, id},
                success: function(){}
            });
        });

		$(".del").on("click", function(){
			let id = $(this).parent().attr("data-id");
			$.ajax({
                url: "../controllers/ImagesController.php",
                method: "get",
                data: {action:"del", id},
                success: function(){
					location.reload();
					alert("Նկարը հաջողությամբ ջնջվել է");
				}
            });
		});
	}

	$("#show").on("click", function() {
		$.ajax({
			url:'../controllers/ImagesController.php',
			method:'get',
			dataType:'json',
			data:{action:'show'},
			success:function(d) {
				showImages(d);
				selectAll(d);
			}	
		})
	});

    $("#delete-all").on("click", function() {
		$.ajax({
			url:'../controllers/ImagesController.php',
			method:'get',
			data:{action:'delete_checkeds'},
			success:function(){
                location.reload();
				alert("Ընտրված նկարները ջնջված են");
            }	
		});
	});

	function selectAll(data){
		$("#select-all").on("click", function(){
			$("#deselect-all").show();

			for(let i = 0; i < data.length; i++){
				$(".check").eq(i).attr("checked");
			}

			$.ajax({
				url: "../controllers/ImagesController.php",
				method: "get",
				data: {action:"selectAll"},
				success: function(){}
			});
		});

		$("#deselect-all").on("click", function(){
			for(let i=0; i<data.length; i++){
				$(".check").eq(i).prop("checked", false);
			}

			$.ajax({
				url: "../controllers/ImagesController.php",
				method: "get",
				data: {action:"deselectAll"},
				success: function(){}
			});
		});
	}
});