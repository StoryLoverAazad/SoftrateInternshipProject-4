$(document).ready(function () {
    $('#data_table').Tabledit({
        columns: {
            identifier: [0, 'id'],
            editable: [[2, 'Name'], [3, 'Mobile'], [4, 'email'], [5, 'PresentAddress'], [6, 'PremanentAddress'],
            [7, 'BloodGroup'], [8, 'EmergencyContactName'], [9, 'EmergencyContactMobile'], [10, 'EmergencyContactRelationShip']]
        },
        hideIdentifier: true,
        onSuccess: function (data, textStatus, jqXHR) {
            console.log('onSuccess(data, textStatus, jqXHR)');
            console.log(data);
            console.log(textStatus);
            console.log(jqXHR);
        },
        onFail: function (jqXHR, textStatus, errorThrown) {
            console.log('onFail(jqXHR, textStatus, errorThrown)');
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        url: 'VolunteerEdit.php',
        //deleteButton: false,
        buttons: {
            edit: {
              class: 'btn btn-sm btn-default',
                html: '<i class="fa fa-pencil" aria-hidden="true"></i>',
              action: 'edit'
            },
            delete: {
              class: 'btn btn-sm btn-default',
                html: '<i class="fa fa-trash" aria-hidden="true"></i>',
              action: 'delete'
            }
        }
    });
});