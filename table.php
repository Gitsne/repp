<html>
    <head>
        <title>Table</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="table.css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bjavascript.js"></script>
        <script type="text/javascript" src="bootstrap431.js"></script>
    </head>
    <body>
        <div>
            <ul>
                <li onclick="document.getElementById('update').style.display='block'">Update</li>
            </ul>
        </div>
        <div id="update" class="modal">
            <form class="modal-content " action="#">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('update').style.display='none'" class="close" title="Close">&times;</span>
                            <h5 >Displaying Results</h5> 
                            <br/>
                <div class="container">
                                <table class="table table-hover table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Score</th>
                                        <th class="text-right">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td class="text-right">
                                            <button class="btn btn-primary badge-pill" style="size:80px;">EDIT</button>
                                            <button class="btn btn-danger badge-pill"style="size:80px;">DELETE</button>
                                        </td>     
                                        </tr>
                                    </tbody>
                                </table>
                </div>
            </form>
    </body>  
   <script>
        var modal = document.getElementById('update');
                window.onclick = function(event) {
                if (event.target == modal) {
                modal.style.display = 'none';
                } 
                }
    </script>
    
</html>