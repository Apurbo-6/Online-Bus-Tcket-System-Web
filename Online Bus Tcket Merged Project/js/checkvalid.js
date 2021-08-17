 $(document).ready(function() {
            $('#user').DataTable( {
                "ajax": "../model/userlist.php",
                "columnDefs": [{
                "targets": -1,
                "render": function (data, type, row) {
                    var hre = '<input type="button" value="Valid Transections" onClick="seetrans(\'' + data.User_Name + '\')" >';
                    return hre;
                }
            }],
                "columns": [
                    { "data": "Name" },
                    { "data": "User_Name" },
                    { "data": "Email" },
                    { "data": "Dob" },
                    { "data": "Gender" },
                    { "data": "Balance" },
                    { "data": null }]

            } );
        } );
         function seetrans(id){
           
            $('#exampleModalCenter').modal('show');
            $('#trans').DataTable( {
                "ajax": "../model/validtrans.php?id="+id,
                
                "columns": [
                    { "data": "Purchase_Date" },
                    { "data": "price" },
                    { "data": "Ticket_Quantity" }]

            } );
        }

        $('#exampleModalCenter').on('hidden.bs.modal', function () {
            // do something…
            location.reload();
        });