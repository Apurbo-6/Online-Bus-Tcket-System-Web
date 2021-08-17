 $(document).ready(function() {
            $('#user').DataTable( {
                "ajax": "../model/userlist.php",
                "columnDefs": [{
                "targets": -1,
                "render": function (data, type, row) {
                    var hre = '<input type="button" value="Add Balance" onClick="addbalance(\'' + data.User_Name + '\')" >';
                    return hre;
                }
            }],
                "columns": [
                    { "data": "Name" },
                    { "data": "Email" },
                    { "data": "Balance" },
                    { "data": null }]

            } );
        } );
        function addbalance(id){
            $('#usernamebalance').val(id);
          
            console.log(id);
            $('#exampleModalCenter').modal('show');
        }

        $('#exampleModalCenter').on('hidden.bs.modal', function () {
            // do something…
            location.reload();
        });
        function addbalanceid(){
          id = $('#usernamebalance').val();
          bal = $('#balance').val();

           $.ajax
          ({
              type: "POST",
              url: '../model/addbalanceapi.php',
              dataType: 'json',
              async: true,
              //json object to sent to the authentication url
              data: JSON.stringify({ "username": id, "balance" : bal }),
              success: function (data, textStatus, jQxhr) {
                var json = $.parseJSON(data);
                console.log(json.message);
               $('#response').html( json.message );
              }
          });

        }