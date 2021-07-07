$(document).ready(function() {

    $(".show").on("click", function(){
        $.ajax({
            url:"controllers/SelectController.php",
            method:"get",
            dataType:"json",
            success: function(data){
                if(Array.isArray(data)){
                    let img = "";
                    data.forEach((item) => {
                        img += `<div class="item m-3">
                                    <img src="${item.path}">
                                    <input type="checkbox" value="set" class="hidden-check" data-id="${item.id}">
                                    <button class="hidden-del" data-id="${item.id}">Delete</button>
                                </div>`;
                    });
                    $(".show-images").html(img);
                }
                else{
                    $(".show-images").html(`<p>${data}</p>`);
                }

                $(".hidden-check").on("click", function(){
                    $(".hidden-btn").css("display", "inline");
                    $(".hidden-check").css("display", "block");
                });

                $(".hidden-del").on("click", function(){
                    let del_id = $(this).attr("data-id");
                    $.ajax({
                        url: "controllers/DelController.php",
                        method: "get",
                        data: {del_id},
                        success: function(){
                            location.reload();
                            alert("Հաջողությամբ ջնջված է");
                        }
                    });
                });

                $(".hidden-btn").on("click", function(){
                    let arrDel = [];
                    for(let i=0; i<data.length; i++){
                        if($(".hidden-check").eq(i).is(":checked")){
                            arrDel.push($(".hidden-check").eq(i).attr("data-id"));
                        }
                    }

                    if(arrDel.length==0){
                        alert("Դուք չեք ընտրել որևէ նկար");
                    }
                    else{
                        arrDel = JSON.stringify(arrDel);
                        $.ajax({
                            url: "controllers/AllDelController.php",
                            method: "get",
                            data: {arrDel},
                            success: function(data){
                                location.reload();
                                alert("Հաջողությամբ ջնջված են");
                            }
                        });
                    }
                    
                });
            }
        });
    });
});
//<div class="hidden-box"></div>