//--------------------------------------------------Interviewer---------------------------------------------------------
var dropdownName = '';
$('#tblApplicants tbody tr').click(function () {
    setToTable(this);
    if ($('#txtId').val() != '') {
        $('.txtMarks').attr('disabled', false);
        $('#txtReport').attr('disabled', false);
        $('#submitBtn').attr('disabled', false);
        getMarksAndComments($(this).children('td:nth-child(1)').text(), dropdownName);
    }
})

$('.txtMarks').bind('keyup mouseup', function () {
    var total = 0;
    for (var j = 0; j < $("#tblMarks tr").length - 3; j++) {
        if (!isNaN(parseInt($('#txtMarks' + (j + 1) + '').val()))) {
            total += parseInt($('#txtMarks' + (j + 1) + '').val());
            if (total > 100) {
                // demo.showSwal('marks-exceeded')
                $('#' + $(this).attr('id')).val(parseInt($('#' + $(this).attr('id')).val()) - (total - 100))
                total -= total - 100;
            }
        }
    }
    $('#txtTotal').val(total + ' / 100');
})

// $('#submitBtn').click(function () {
//     if ($('#txtCount').val() != 0 && $('#txtCount').val() != '') {
//         $('#formSubmit').submit(function (e) {
//             e.preventDefault();
//         });
//         // demo.showSwal('submit-data', $('#txtCount').val(), $('#txtTotal').val(), $('#txtId').val())
//     } else {
//         // demo.showSwal('interviewers-count');
//     }
// });

$(document).ready(function () {
    $('.txtMarks').attr('disabled', true);
    $('#txtReport').attr('disabled', true);
    $('#submitBtn').attr('disabled', true);
    $('#btnSubmitAppId').attr('disabled', true);
    $('#dropdownName').val($('#sel1').val());
    dropdownName = $('#sel1').val();
});

function setToTable(that) {
    $('#txtId').val($(that).children('td:nth-child(1)').text());
    $('#txtName').val($(that).children('td:nth-child(2)').text());
    $('#txtMarks').val($(that).children('td:nth-child(4)').text().split(" / ")[0]);
    $('#txtTotal').val($(that).children('td:nth-child(4)').text());
    // $('#txtCount').val(applicants[$(that).attr('id').substring(2, $(that).attr('id').length)].interviewers_count);
    // $('#AppId').attr('value', $(that).children('td:nth-child(1)').text());
}

$('#sel1').on('change', function () {
    $('#dropdownName').val(this.value);
    dropdownName = this.value;
});

$('#sel1').on('click', function () {
    $('#dropdownName').val(this.value);
    dropdownName = this.value;
});