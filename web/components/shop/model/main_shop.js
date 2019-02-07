// $template_prod = "
// 	<div class='col-md-3 col-6 s-1'>
// 		<a href='services.html'>
// 			<div class='view view-fifth'>
// 				<i class='fas fa-home'></i>
// 				<div class='mask'>
// 					<h4>%s    %s€</h4>
// 				</div>
// 			</div>
// 		</a>
// 	</div>";

function sprintf(template, values) {
    return template.replace(/%s/g, function () {
        return values.shift();
    });
}
function fillElements(id_arr) {
    console.log(id_arr);
    
    $.ajax({
        data: id_arr,
        url: "components/shop/controller/shop_controller.php?op=autocomplete",
        type: 'POST',
        success: function (data) {
            // console.log(data);
            data = JSON.parse(data);
            $template_prod =
                "<div class='col-md-3 col-6 s-1 product-card'>" +
                "<a href='#!'>" +
                "<div class='view view-fifth'>" +
                "<i class='fas fa-home'></i>" +
                "<div class='mask'>" +
                "<h4>%s    %s€</h4>" +
                "</div>" +
                "</div>" +
                "</a>" +
                "</div>";
            //clear previous elements
            document.getElementById("searched_products").innerHTML = "";

            //append new elements
            for (let i = 0; i < data.length; i++) {
                $("#searched_products").append(sprintf($template_prod, [data[i][1], data[i][4]]));

            }
        }
    })
}
function generateDataToSend(thiss) {
    
    if (typeof thiss === 'string')
        id_val = "*";
    else
        id_val = thiss.id;
        var id_arr = {
            toAutoComplete: id_val,
            fields: {
                brand: {
                    "typed": document.getElementById("brand").value
                },
                product_name: {
                    "typed": document.getElementById("product_name").value
                },
                available_until: {
                    "typed": document.getElementById("available_until").value
                }
            }
        };
    return id_arr;
}

function autocomplete(thiss) {
    var dropdown = "myDropdown1-" + thiss.id;
    var this_obj = $(thiss);
    id_arr = generateDataToSend(thiss);
    // console.log(id_arr);

    // if text input is empty, don't show anything
    // if (!this_obj.val().length == 0) {

    // text typed and the field to serach
    
    $.ajax({
        type: "POST",
        url: "components/shop/controller/shop_controller.php?op=autocomplete",
        data: id_arr,
        success: function (data) {
            console.log(data);
            // show suggestions panel
            var suggestions_panel = document.getElementById(dropdown);
            if (!suggestions_panel.classList.contains("show")) {
                suggestions_panel.classList.toggle("show");
            }
            // console.log(data);
            data = JSON.parse(data);

            // remove previous suggestions
            var myNode = document.getElementById(dropdown);
            while (myNode.firstChild) {
                myNode.removeChild(myNode.firstChild);
            }

            // add the new suggestions
            for (let i = 0; i < data.length; i++) {
                var node = document.createElement("a");
                node.appendChild(document.createTextNode(data[i][0]));
                document.getElementById(dropdown).appendChild(node);

                // new event to each 'a', on click set the value of the suggestion to the input text
                node.addEventListener("click", function () {
                    document.getElementById(this_obj[0].id).value = this.textContent;
                }, false)
            }

        }
    })
}


// ----------------------
// ----- search-bar -----
// ----------------------

$(document).ready(function () {
    //create a url to be able to check the page
    var url = new URL(window.location.href);
    var c = url.searchParams.get("page");
    
    if (c == "shop_controller") {
        //first time fill with no-filters elements
        id_arr = generateDataToSend("*");
        fillElements(id_arr);
    }

    //search-b ar
    $('#brand, #product_name, #available_until').on("keyup", function () {
        var thiss = this;
        autocomplete(thiss);
    });
    //on click search button
    $('#submit_button_searcher').on("click", function () {
        id_arr = generateDataToSend("*");
        fillElements(id_arr); 
    });

    $('#submit_button_searcher_home').on("click", function () {
        console.log("search home button pressed");
        
        // fillElements(id_arr)
        
        var thiss = $(this);
        var typed_arr = generateDataToSend(thiss);
        
        $.ajax({
            data: typed_arr,
            url: "components/shop/controller/shop_controller.php?op=redirect",
            type: 'POST',
            success: function(data){
                console.log(data);
                window.location.href ="index.php?page=shop_controller&op=list";
            }
        })
    });
    // searcher datepicker

    // only allows the days that the queery returns
    // var availableDates = [];

    // function available(date) {
    //     dmy = date.getDate() + "-" + (date.getMonth()+1) + "-" + date.getFullYear();
    //     if ($.inArray(dmy, availableDates) != -1) {
    //         return [true, "","Available"];
    //     } else {
    //         return [false,"","unAvailable"];
    //     }
    // }

    // $(document).ready(function () {
    //     $('#available_until').datepicker({
    //         dateFormat: 'dd/mm/yy', 
    //         changeMonth: true, 
    //         changeYear: true, 
    //         yearRange: '1900:2100',
    //         minDate: -1000000,
    //         beforeShowDay: available,
    //         showOptions: { direction: "up" } // drop datepicker to botside
    //     });
    // });
});
// hide suggestions panel when text input hasn't focus
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}