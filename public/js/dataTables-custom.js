var Table = {
  init: function(){
    this.basic();
    this.serverSide();
  },
  basic: function(){
    $('#basic').DataTable();
  },
  serverSide: function(){
    var url = $('#server-side').data("url");
    $('#server-side').DataTable({
      "bProcessing": true,
      "bServerSide": true,
      "iDisplayLength": 10,
      "bPaginate": true,
      "bInfo": true,
      "aoColumns": [
          {
            "sTitle": '社員番号',
            "mData": "emp_no",
          },
          {
            "sTitle": '名',
            "mData": "first_name",
          },
          {
            "sTitle": '性',
            "mData": "last_name",
          },
          {
            "sTitle": '生年月日',
            "mData": "birth_date",
          },
          {
            "sTitle": '性別',
            "mData": "gender",
          }
      ],
      fnServerData: function( sUrl, aoData, fnCallback ) {
        $.ajax({
          type: "GET",
          url: url,
          data: aoData,
          dataType: 'json',
          success: fnCallback
        })
      }
    });
  }

};

$(document).ready(function() {
	$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
	});

  Table.init();

});