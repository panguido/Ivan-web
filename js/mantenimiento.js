$(document).ready(function() {

var parentsData = {
  "success": true,
  "parents": [{
    "id": 1531,
    "Firstname": "Austin",
    "Surname": "Ana\u00eblle",
    "schoolId": "046039",
    "schoolName": "ARCAMBAL",
    "commune": "ARCAMBAL"
  }, {
    "id": 2032,
    "Firstname": "Ramos",
    "Surname": "L\u00e8i",
    "schoolId": "046043",
    "schoolName": "J CALVET",
    "commune": "CAHORS"
  }, {
    "id": 3036,
    "Firstname": "Baker",
    "Surname": "Salom\u00e9",
    "schoolId": "046043",
    "schoolName": "Z LAFAGE",
    "commune": "CAHORS"
  }, {
    "id": 1724,
    "Firstname": "Berry",
    "Surname": "Marl\u00e8ne",
    "schoolId": "046044",
    "schoolName": "J CALVET",
    "commune": "CAHORS"
  }]
};

var $table = $('.js-table');

$table.find('.js-view-parents').on('click', function(e) {
  e.preventDefault();
  var $btn = $(e.target), $row = $btn.closest('tr'), $nextRow = $row.next('tr.expand-child');
  
  $btn.toggleClass('glyphicon-eye-close glyphicon-eye-open');
  // if .expand-chid row exist already, toggle
  if ($nextRow.length) {
      $nextRow.toggle($btn.hasClass('glyphicon-eye-open'));
  // if not, create .expand-child row
  } else {
    /*$.ajax({
        url: '/echo/json/',
        dataType: "json",
        data: parentsData,
        success: function (parentsData) {*/
    var newRow = '<tr class="expand-child" id="collapse' + $btn.data('id') + '">' +
      '<td colspan="12">' +
      '<table class="table table-condensed table-bordered" width=100% >' +
      '<thead>' +
      '<tr>' +
      '<th>Surname</th>' +
      '<th>FirstName</th>' +
      '<th>School Id</th>' +
      '<th>School name</th>' +
      '</tr>' +
      '</thead>' +
      '<tbody>';

    if (parentsData.parents) {
      $.each(parentsData.parents, function(i, parent) {
        newRow += '<tr>' +
          '<td>' + parent.Firstname + '</td>' +
          '<td>' + parent.Surname + '</td>' +
          '<td>' + parent.schoolId + '</td>' +
          '<td>' + parent.schoolName + ' ' + parent.commune + '</td>' +
          '</tr>';
      });
    }
    newRow += '</tbody></table></td></tr>';
    // set next row
    $nextRow = $(newRow).insertAfter($row);
    
    
    /*}
        });*/
  }
});

});
