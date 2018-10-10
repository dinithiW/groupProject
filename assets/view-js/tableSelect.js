$('#tblApplicants').click(function () {
    $('#txtName').val($('#tblApplicants tbody tr td:nth-child(2)').html());
    $('#txtMarks').val($('#tblApplicants tbody tr td:nth-child(4)').html());
    $('#txtTotal').val($('#tblApplicants tbody tr td:nth-child(4)').html());
    $('#txtAvg').val(parseInt($('#tblApplicants tbody tr td:nth-child(4)').html()) / 4);
})