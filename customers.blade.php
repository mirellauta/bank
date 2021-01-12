<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/@fortawesome/fontawesome-free@5.12.1/css/all.min.css">
<!-- Styles --><link href="https://unpkg.com/jquery-resizable-columns@0.2.3/dist/jquery.resizableColumns.css" rel="stylesheet">
<link href="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.css" rel="stylesheet">
<link href="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/page-jump-to/bootstrap-table-page-jump-to.min.css" rel="stylesheet">
<link href="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/reorder-rows/bootstrap-table-reorder-rows.css" rel="stylesheet">


	 <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>



    </head>
    <body>

<table id="table"
  data-pagination="true"
  data-show-pagination-switch="true"
  data-search="true"
  data-id-table="advancedTable"
   data-multiple-select-row="true"
  data-click-to-select="true"
   
  data-show-refresh="true"
  data-show-toggle="true"
  data-show-columns="true"
  data-show-export="true"
  data-show-fullscreen="true"
  data-detail-view="true"
  data-toolbar="#toolbar"
  data-export-data-type="all"
  data-show-multi-sort="true"
  data-sort-priority='[{"sortName": "lastName","sortOrder":"desc"},{"sortName":"firstName","sortOrder":"desc"}]'
 
  data-filter-control="true"
  data-show-search-clear-button="true"
  data-show-jump-to="true"
  data-show-print="true"
  data-show-copy-rows="true"
 data-buttons-class="primary bg-navy"


  data-resizable="true"
data-response-handler="responseHandler"
  data-advanced-search="true"
  
>
  <thead>
    <tr>
	<th data-field="state" data-checkbox="true"></th>
	<th data-field="index" data-sortable="true">Index</th>
	<th data-field="lastName" data-sortable="true" data-filter-control="select">lastName</th>
    <th data-field="firstName" data-sortable="true" data-filter-control="select">firstName</th>
     <th data-field="action"
     data-align="center"
     data-formatter="actionFormatter"
     data-events="actionEvents">Actions</th>
    </tr>
  </thead>
</table>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/TableDnD/1.0.3/jquery.tablednd.min.js"></script>
<script src="https://unpkg.com/jquery-resizable-columns@0.2.3/dist/jquery.resizableColumns.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/export/bootstrap-table-export.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/page-jump-to/bootstrap-table-page-jump-to.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/print/bootstrap-table-print.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/reorder-rows/bootstrap-table-reorder-rows.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/resizable/bootstrap-table-resizable.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/copy-rows/bootstrap-table-copy-rows.min.js"></script>
<script>
  var $table = $('#table')

  $(function() {
    var data = {!! $item !!};

         $table.bootstrapTable({data: data})


	 
  }) 

  function responseHandler(res) {
    res.forEach(function (row, i) {
      row.index = i
    })
    return res
  }
  function actionFormatter(value) {
    return [
      '<a class="update btn btn-primary btn-sm" href="javascript:" title="Update Item"><i class="fa fa-edit"></i></a>',
      '<a class="remove btn btn-danger btn-sm" href="javascript:" title="Delete Item"><i class="fa fa-plus"></i></a>'
    ].join('')
  }
 window.actionEvents = {
    'click .update': function (e, value, row) {
     // showModal($(this).attr('title'), row)
	 alert('update');
    },
    'click .remove': function (e, value, row) {
      if (confirm('Are you sure to delete this item?')) { //put swal here
        $.ajax({
          url: API_URL + row.id,
          type: 'delete',
          success: function () {
            $table.bootstrapTable('refresh')
            showAlert('Delete item successful!', 'success')
          },
          error: function () {
            showAlert('Delete item error!', 'danger')
          }
        })
      }
    }
  }
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
