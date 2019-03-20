$(function(){
    $("#tableProduct").bootstrapTable({
        columns: [
            {
                title: 'No',
                align: 'center'
            }, {
                title: 'Nama Product',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Keterangan',
                halign: 'center',
                align: 'left'
            }, {
                title: 'Gambar',
                align: 'center'
            }, {
                title: 'Action',
                align: 'center'
            }
        ]
    });
});