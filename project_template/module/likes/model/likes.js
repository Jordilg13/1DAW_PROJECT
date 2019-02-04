$(document).ready(function () {
    var url = "module/likes/controller/likes_controller.php?op=datatable";  
    // prepare the data
    var source =
    {
        dataType: "json",
        // dataType: "array",
        dataFields: [
            { name: 'product_name', type: 'string' },
            { name: 'brand', type: 'string' },
            { name: 'price', type: 'number' },
            // { name: 'Action', type: 'string' }
        ],
        id: 'id',
        url: url
    };
    var dataAdapter = new $.jqx.dataAdapter(source);
    console.log(dataAdapter);
    $("#dataTable").jqxDataTable(
    {   
        width: $("#dataTable").width(),
        pagerButtonsCount: 10,
        source: dataAdapter,
        sortable: true,
        pageable: true,
        altRows: true,
        filterable: true,
        columnsResize: true,
        theme: "metro",
        pagerMode: 'advanced',
        columns: [
            { text: 'Product', dataField: 'product_name'},
            { text: 'Brand', dataField: 'brand'},
            { text: 'Price', dataField: 'price'},
            // { text: 'Action', dataField: 'Action'},
          ]
    });  
});


