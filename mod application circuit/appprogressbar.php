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
                  $sql = "SELECT ALCChap1, ALCChap2, ALCChap3, ALCChap4 FROM users where email = '{$_SESSION['valid_user']}'";
                  $result = mysqli_query($conn, $sql);
                 
            
                  if (mysqli_num_rows($result) > 0) {
                  
                    if($row = mysqli_fetch_assoc($result)) {
                      $ALCchap1_status = $row['ALCChap1'];
                        $ALCchap2_status = $row['ALCChap2'];
                        $ALCchap3_status = $row['ALCChap3'];
                        $ALCchap4_status = $row['ALCChap4'];


                      if($ALCchap1_status == '0'){
                        if($ALCchap2_status == '0'){
                            if($ALCchap3_status == '0'){
                              if($ALCchap4_status == '0'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }

                                if($ALCchap4_status == '1'){
                                  echo '<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                  echo '<br>';
                                  }
                            }

                            if($ALCchap3_status == '1'){
                              if($ALCchap4_status == '0'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }

                                if($ALCchap4_status == '1'){
                                  echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                  echo '<br>';
                                  }
                                }
                        }

                        if($ALCchap2_status == '1'){
                          if($ALCchap3_status == '0'){
                            if($ALCchap4_status == '0'){
                              echo '<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                              echo '<br>';
                              }

                              if($ALCchap4_status == '1'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }
                          }

                          if($ALCchap3_status == '1'){
                            if($ALCchap4_status == '0'){
                              echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                              echo '<br>';
                              }

                              if($ALCchap4_status == '1'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }
                              }
                        }
                      }

                      if($ALCchap1_status == '1'){
                        if($ALCchap2_status == '0'){
                            if($ALCchap3_status == '0'){
                              if($ALCchap4_status == '0'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }

                                if($ALCchap4_status == '1'){
                                  echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                  echo '<br>';
                                  }
                            }

                            if($ALCchap3_status == '1'){
                              if($ALCchap4_status == '0'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }

                                if($ALCchap4_status == '1'){
                                  echo '<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                  echo '<br>';
                                  }
                                }
                        }

                        if($ALCchap2_status == '1'){
                          if($ALCchap3_status == '0'){
                            if($ALCchap4_status == '0'){
                              echo '<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                              echo '<br>';
                              }

                              if($ALCchap4_status == '1'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }
                          }

                          if($ALCchap3_status == '1'){
                            if($ALCchap4_status == '0'){
                              echo '<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                              echo '<br>';
                              }

                              if($ALCchap4_status == '1'){
                                echo '<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
                                echo '<br>';
                                }
                              }
                        }
                      }
                    }
                  }
                ?>


