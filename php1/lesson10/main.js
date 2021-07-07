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

    let printCategories = data_category => {
        if(data_category.length > 0) {
            let select_row = "<option selected>Select category</option>";
            data_category.forEach( (item, index) => {
                select_row += `<option value="${item.id}">${item.name}</option>`
            });
            $(".form-select").html(select_row);
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

    $("#save-product").on("click", function() {
        let categ = $(".form-select").val();
        let name = $("#exampleFormControlInput2").val();
        let price = $("#exampleFormControlInput3").val();
        let description = $("#exampleFormControlTextarea1").val();
        console.log(categ, name, price, description);
        $.ajax({
            url:"new_product.php",
            method:"post",
            data: { categ, name, price, description },
            success:function() {
                // location.reload()
            },
            error:function(er) {
                console.log(er);
            }
        })
    })

    $.ajax({
        url:"select_category.php",
        method:"get",
        dataType:"json",
        success:function(dataCateg) {
            printCategories(dataCateg);
            console.log(dataCateg);
        }
    })




})