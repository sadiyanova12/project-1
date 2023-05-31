<style>
    
    table{
        color: black;
        margin-top:25px;
        margin-left:25px;
    }
    h2{
        color: black;
    }
    /* .pic{
        height:200px ;
        width: 200px;

    } */
    td img{
        height: 60px;
        width: 60px;

    }
.col-12{
padding-left: 2%;
  
  width: 100%;
}

    #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>

<?php

 
  $sql=" SELECT * FROM contact";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <h2 align="center">Contact info</h2>

  <table id= 'myTable' width="95%">
      <tr>
          <th>Serial No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Their Massage</th>
         
         
         



      </tr>
      

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["SerialNo."] ?></td>
                  <td><?php echo $row["Name"] ?></td>
                  <td><?php echo $row["Email"] ?></td>
                  <td><?php echo $row["Subject"] ?></td>
                  <td><?php echo $row["YourMassage"] ?></td>
                  







              </tr>

          <?php


          }
          ?>
  </table>