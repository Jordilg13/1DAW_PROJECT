function num_products(sel) {
    if (sel.options[sel.selectedIndex].value == 6) {
        window.location.href="index.php?&num=6";
    } else if (sel.options[sel.selectedIndex].value == 8) {
        window.location.href="index.php?&num=8";
    } else {
        window.location.href="index.php";
    }
    
}
// hide suggestions panel when text input hasn't focus
window.onclick = function(event) {
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
$(document).ready(function(){
    //search-bar
    $('#brand, #product_name, #available_until').on("keyup", function(){
        var thiss = this;
        // switch (this.id) {
        //     case 'available_until':
        //         query_type = "";
        //         break;
        //     case 'brand':
            
        //         break;
        //     case 'brand':
            
        //         break;
        
        //     default:
        //         break;
        // }
        autocomplete(thiss);
        
    });
});

function generateDataToSend(thiss) {
    var id_arr = {
        toAutoComplete: thiss.id,
        fields :{
            brand: {
                "typed": document.getElementById("brand").value
            },
            product_name: {
                "typed": document.getElementById("product_name").value           
            },
            available_until:{
                "typed": document.getElementById("available_until").value
            }
        }    
    };
    return id_arr;
}

function autocomplete(thiss) {
    var dropdown = "myDropdown1-"+thiss.id;
        var this_obj = $(thiss);
        id_arr = generateDataToSend(thiss);
        // console.log(id_arr);

    // if text input is empty, don't show anything
    // if (!this_obj.val().length == 0) {


        // text typed and the field to serach
        $.ajax({
            type: "POST",
            url: "module/home/controller/controller_home.php?op=autocomplete",
            data: id_arr,
            success: function(data){
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
                node.addEventListener("click", function(){
                    document.getElementById(this_obj[0].id).value =  this.textContent;
                }, false)
            }
                
            }
        })
    // } else {
    //     // hide suggestions if the textbox have not any letter
    //     var dropdowns = document.getElementsByClassName("dropdown-content");
    //     var i;
    //     for (i = 0; i < dropdowns.length; i++) {
    //         var openDropdown = dropdowns[i];
    //         if (openDropdown.classList.contains('show')) {
    //         openDropdown.classList.remove('show');
    //         }
    //     }
    // }
}

