var App = (function () {
  'use strict';

  App.dataTables = function( ){

    //We use this to apply style to certain elements
    $.extend( true, $.fn.dataTable.defaults, {
      dom:
        "<'row ciuis-body-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
        "<'row ciuis-body-datatable-body'<'col-sm-12'tr>>" +
        "<'row ciuis-body-datatable-footer'<'col-sm-12'p>>"
    } );

    $("#table1").dataTable({
      pageLength: 6,
      dom:  "<'row ciuis-body-datatable-body'<'col-sm-12'tr>>" +
            "<'row ciuis-body-datatable-footer'<'col-sm-12'p>>"
    });

    //Remove search & paging dropdown
    $("#table2").dataTable({
      pageLength: 6,
      dom:  "<'row ciuis-body-datatable-body'<'col-sm-12'tr>>" +
            "<'row ciuis-body-datatable-footer'<'col-sm-12'p>>"
    });

    //Enable toolbar button functions
    $("#table3").dataTable({
      buttons: [
        'copy', 'excel', 'pdf', 'print'
      ],
      "lengthMenu": [[6, 10, 25, 50, -1], [6, 10, 25, 50, "All"]],
      dom:  "<'row ciuis-body-datatable-header'<'col-sm-6'l><'col-sm-6 text-right'B>>" +
            "<'row ciuis-body-datatable-body'<'col-sm-12'tr>>" +
            "<'row ciuis-body-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
    });

  };

  return App;
})(App || {});
