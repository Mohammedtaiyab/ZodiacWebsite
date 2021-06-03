 <?php
    require("include/head.php");
    require("include/style.php");
    ?>
 <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
 <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <!-- END PAGE LEVEL STYLES -->
 <?php
    require("include/header.php");
    require("include/sidebar.php");
    $aboutus = $home->getcontact();
    ?>

 <!--  BEGIN CONTENT AREA  -->
 <div id="content" class="main-content">
     <div class="layout-px-spacing">

         <div class="page-header">
             <div class="page-title">
                 <h3>Enquires</h3>
             </div>
         </div>

         <div class="row" id="cancel-row">

             <div class="col-xl-8 col-lg-8 col-sm-8  layout-spacing">
                 <div class="widget-content widget-content-area br-6">
                     <div class="table-responsive mb-4 mt-4">
                         <table id="zero-config" class="table table-hover" style="width:100%">
                             <thead>
                                 <tr>
                                     <th>Sr No: </th>

                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Phone</th>
                                     <th>Subject</th>
                                     <th>Action</th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $i = 1;
                                    foreach ($aboutus as $expet) { ?>
                                     <tr>
                                         <td><?php echo $i; ?></td>
                                         <td><?php echo $expet["Name"]; ?></td>
                                         <td><?php echo $expet["Email"]; ?></td>
                                         <td><?php echo $expet["Phone"]; ?></td>
                                         <td><?php echo $expet["Subject"]; ?></td>
                                         <td><a href="javascript:void(0)" onclick="viewdata(<?php echo $expet["ID"]; ?>)" class="btn">View</td>
                                         <!-- <td>

                                             <a href="editaboutus.php?id=<?php echo $expet["ID"]; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                     <path d="M12 20h9"></path>
                                                     <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                 </svg></a>

                                         </td> -->

                                     </tr>

                                 <?php $i++;
                                    } ?>




                             </tbody>

                         </table>
                     </div>
                 </div>
             </div>
             <div class="col-xl-4 col-lg-4 col-sm-4  layout-spacing" id="dataview" style="display: none;">

                 <div class="card component-card_9">



                     <div class="card-body">


                         <h3 class="card-title"> <span id="title"></span> </h3>
                         <h5><span id="description"></span></h5>

                         <div class="meta-info" id="paragraph">

                         </div>

                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>
 <!--  END CONTENT AREA  -->

 </div>
 <!-- END MAIN CONTAINER -->
 <script src="plugins/table/datatable/datatables.js"></script>
 <script>
     $('#zero-config').DataTable({
         "oLanguage": {
             "oPaginate": {
                 "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                 "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
             },
             "sInfo": "Showing page _PAGE_ of _PAGES_",
             "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
             "sSearchPlaceholder": "Search...",
             "sLengthMenu": "Results :  _MENU_",
         },
         "stripeClasses": [],
         "lengthMenu": [7, 10, 20, 50],
         "pageLength": 7
     });


     function viewdata(id) {
         $.ajax({
             url: "function.php",
             type: "POST",
             data: 'contact=' + id,
             dataType: 'json',
             success: function(data) {
                 $("#dataview").show();


                 $("#description").html(data[0].Message);


             }
         });
     }
 </script>
 <?php
    require("include/script.php");
    require("include/footer.php");
    ?>