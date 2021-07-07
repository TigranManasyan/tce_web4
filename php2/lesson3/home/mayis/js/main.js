$(document).ready(function() {
    //New
    $("form button").on("click", function() {
        let name = $("input").eq(0).val();
        let price = $("input").eq(1).val();
        let desc = $("input").eq(2).val();

        $.ajax({
            url:"../controllers/add_product.php",
            method:"post",
            data: {name, price, desc},
            success:function(){
                alert("Հաջողությամբ ավելացվել է");
            }
        });
    });

    //Select
    $.ajax({
        url:"../controllers/select_product.php",
        method:"get",
        dataType:"json",
        success: function(data){
            if(data.length > 0){
                let row = "";
                data.forEach((item,index) => {
                    row += `<tr>
                                <td>${index+1}</td>
                                <td>${item.name}</td>
                                <td>${item.price}</td>
                                <td>${item.description}</td>
                            </tr>`;
                });
                $("#result").html(row);
            }
        }
    });
});