jQuery(document).ready(function($) { 
	let printTable = data_table => {
		if(data_table.length > 0) {
			let row = "";
			data_table.forEach( (item, index) => {
				row += `
					<tr>
						<td>${ (index + 1) }</td>
						<td class="first-name" contenteditable>${item.firstname}</td>
						<td class="last-name" contenteditable>${item.lastname}</td>
						<td class="age" contenteditable>${item.age}</td>
						<td class="address" contenteditable>${item.address}</td>
						<td>
							<button data-id = "${item.id}" class='btn btn-danger delete'>Delete</button>
							<button data-id = "${item.id}" class='btn btn-success update'>Update</button>
						</td>
					</tr>	
				`;
			});
			$("#result").html(row);
		}


		//Delete student
		$(".delete").on("click", function() {
			let id = $(this).attr("data-id");
			$.ajax({
				url:"model/delete_student.php",
				method:"get",
				data: {id},
				success:function(){
					alert("Student deleted!");
					location.reload();
				}
			})
		})

		//Update student
		$(".update").on("click", function() {
			let id = $(this).attr("data-id");
			let first_name = $(this).parents("tr").find(".first-name").text();
			let last_name = $(this).parents("tr").find(".last-name").text();
			let age = $(this).parents("tr").find(".age").text();
			let address = $(this).parents("tr").find(".address").text();
			
			$.ajax({
				url:"model/update_student.php",
				method:"get",
				data: {id, first_name, last_name, age, address},
				success:function(){  
					alert("Row updated");
					location.reload();
				}
			})
		})
	}
		$.ajax({
			url:"model/select_students.php",
			method:"get",
			dataType:"json",
			success:function(data) {
				printTable(data); 
			}
		})

		$("#new-student").on("click", function() {
			$("#banner").slideToggle(50);
		})



		$(".add").on("click", function() {
			let first_name = $("#new-student input").eq(0).val();
			let last_name = $("#new-student input").eq(1).val();
			let age = $("#new-student input").eq(2).val();
			let address = $("#new-student input").eq(3).val();
			$.ajax({
				url:"model/insert_student.php",
				method:"post",
				data: {first_name, last_name, age, address},
				success:function(){   
					location.reload();
					alert("inserted")
				},
				error:function(er) {
					console.log(er)
				}
			})

		})






})