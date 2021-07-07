$(document).ready(function() {
    $.ajax({
        url:"controllers/CategorieController.php",
        method:"get",
        dataType:"json",
        success: function(data){
            if(data.length > 0){
                let categ = `<option selected disabled> -- Select Categorie -- </option>`;
                data.forEach(item => {
                    categ += `<option value="${item.id}">${item.name}</option>`;
                });
                $("select").html(categ);
            }
        }
    });

    $("select").on("change", function() {
        let cat_id = $("select").val();
        $.ajax({
            url:"controllers/ProductController.php",
            method:"post",
            data:{cat_id},
            dataType:"json",
            success: function(data){
                if(data.length > 0 && Array.isArray(data)){
                    let prod = "";
                    data.forEach((item, index) => {
                        prod += `<p>
                                    ${index+1}. ${item.product_name}, ${item.price}, ${item.description}
                                </p>`;
                    });
                    $("div").html(prod);
                }
                else{
                    $("div").html(`<p>${data}</p>`);
                }
            }
        });
    });
});