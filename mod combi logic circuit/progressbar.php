
 <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "opetella";
            
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                    die("Connection failed: ".mysqli_connect_error());
                  }
                  $sql = "SELECT CLCchap1, CLCchap2, CLCchap3, CLCchap4 FROM users where email = '{$_SESSION['valid_user']}'";
                  $result = mysqli_query($conn, $sql);
                 
            
                  if (mysqli_num_rows($result) > 0) {
                  
                    if($row = mysqli_fetch_assoc($result)) {
                      $CLCchap1_status = $row['CLCchap1'];
                      $CLCchap2_status = $row['CLCchap2'];
                      $CLCchap3_status = $row['CLCchap3'];
                      $CLCchap4_status = $row['CLCchap4'];


                      if($CLCchap1_status == '0'){
                        if($CLCchap2_status == '0'){
                            if($CLCchap3_status == '0'){
                              if($CLCchap4_status == '0'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }

                                if($CLCchap4_status == '1'){
                                  echo '<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                  echo '<br>';
                                  }
                            }

                            if($CLCchap3_status == '1'){
                              if($CLCchap4_status == '0'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }

                                if($CLCchap4_status == '1'){
                                  echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                  echo '<br>';
                                  }
                                }
                        }

                        if($CLCchap2_status == '1'){
                          if($CLCchap3_status == '0'){
                            if($CLCchap4_status == '0'){
                              echo '<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                              echo '<br>';
                              }

                              if($CLCchap4_status == '1'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }
                          }

                          if($CLCchap3_status == '1'){
                            if($CLCchap4_status == '0'){
                              echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                              echo '<br>';
                              }

                              if($CLCchap4_status == '1'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }
                              }
                        }
                      }

                      if($CLCchap1_status == '1'){
                        if($CLCchap2_status == '0'){
                            if($CLCchap3_status == '0'){
                              if($CLCchap4_status == '0'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }

                                if($CLCchap4_status == '1'){
                                  echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                  echo '<br>';
                                  }
                            }

                            if($CLCchap3_status == '1'){
                              if($CLCchap4_status == '0'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }

                                if($CLCchap4_status == '1'){
                                  echo '<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                  echo '<br>';
                                  }
                                }
                        }

                        if($CLCchap2_status == '1'){
                          if($CLCchap3_status == '0'){
                            if($CLCchap4_status == '0'){
                              echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                              echo '<br>';
                              }

                              if($CLCchap4_status == '1'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }
                          }

                          if($CLCchap3_status == '1'){
                            if($CLCchap4_status == '0'){
                              echo '<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                              echo '<br>';
                              }

                              if($CLCchap4_status == '1'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }
                              }
                        }
                      }
                    }
                  }
                ?>



