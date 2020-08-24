<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Data Item Kemkes</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <style type="text/css">
            .preloader {
              position: fixed;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              z-index: 9999;
              background-color: #fff;
            }
            .preloader .loading {
              position: absolute;
              left: 50%;
              top: 50%;
              transform: translate(-50%,-50%);
              font: 14px arial;
            }
            </style>
        <script>
            $(document).ready(function(){
              $(".preloader").fadeOut(5000);
            })
    </script>
      </head>  
      <body>  
           <br />  
           <div class="preloader">
              <div class="loading">
                <img src="kemenkesh.gif" width="250">
                <!-- <p><center>LOADING...</center></p> -->
              </div>
            </div>
            <section>
           <div class="container" style="width:800px;">  
                <h3 align="">Data Item E-Deks Kementrian Kesehatan</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th>No</th>
                               <th>Category Id</th>
                               <th>Name</th>
                               <th>Status</th>
                          </tr>  
                          
                          <?php

                                $curl = curl_init();

                                curl_setopt_array($curl, array(
                                CURLOPT_URL => "http://edesk.farmalkes.kemkes.go.id//api/kategori/item",
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => "",
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 0,
                                CURLOPT_FOLLOWLOCATION => true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => "GET",
                                CURLOPT_HTTPHEADER => array(
                                    'Authorization: Bearer $2y$12$JFTbwOdoOBJNsfqw4j6ElOdVKltvQbidtpKCL5tlSlSCRhgEX4rpa'
                                ),
                                ));

                                $response = curl_exec($curl);

                                curl_close($curl);
                                $resArr = array();
                                $resArr = json_decode($response,true);

                                foreach($resArr['data'] as $row)
                                {
                                    echo '<tr>';
                                    echo '<td>'.$row['id'].'</td>';
                                    echo '<td>'.$row['category_id'].'</td>';
                                    echo '<td>'.$row['name'].'</td>';
                                    echo '<td>'.$row['status'].'</td>';
                                    echo '</tr>';
                                }                  
                             ?>  
                     </table>  
                </div>  
           </div>
           </section>  
           <br />  
      </body>  
 </html>  