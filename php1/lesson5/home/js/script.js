$(document).ready(() => {
    let printProducts = products => {
        console.log(products);
        if(products.length>0){
            let row = "";
            Object.keys(products[0]).forEach(item => {
                row += `<th>${item}</th>`;
            });
            $("thead tr").html(row);

            row = "";
            products.forEach(item => {
                row += `<tr>
                            <td>${item["anun"]}</td>
                            <td>${item["gin"]}</td>
                            <td>${item["qanak"]}</td>
                        </tr>`;
            });
            $("tbody").html(row);
        }
    };

    $.ajax({
        url: "products.php",
        method: "get",
        dataType: "json",
        success: function(data){
            printProducts(data);
        }
    });
});