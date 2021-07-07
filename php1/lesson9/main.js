jQuery(document).ready(function($) {
    let printProducts = dataList => {
        if(dataList.length > 0) {
            let row = '';
            dataList.forEach( (item, index) => {
                row += `
                    <tr>
                        <td>${item.id}</td>
                        <td>${item.product_name}</td>
                        <td>${item.price}</td>
                        <td>${item.description}</td>
                        <td>${item.img}</td>
                        <td>${item.name}</td>
                    </tr>
                `;
            });
            $("#products").html(row);
        } else {
            $("#products").html("Empty list");
        }
    }

    $.ajax({
        url:"products.php",
        method:"get",
        dataType:"json",
        success:function(data) {
            printProducts(data);
            console.log(data)
        }
    })



    $("#save").on("click", function() {
        let categ = $("#exampleFormControlInput1").val();
        $.ajax({
            url:"new_category.php",
            method:"post",
            data: { categ },
            success:function() {
                location.reload()
            }
        })
    })



})