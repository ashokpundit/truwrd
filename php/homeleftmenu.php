<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

               <!-- LHS menu Start -->
                <div class="ui vertical menu">
                               <div class="header item">
                                 <i class="globe icon"></i>
                                 Hot Topics
                               </div>
                                   <?php
                                        for($i=0;$i<5;$i++)
                                        {
                                        ?>
                                                 <a class="item">
                                                     Dance
                                                   </a>

                                         <?php
                                        }
                                        ?>
                               <div class="header item">
                                 <i class="user  icon"></i>
                                 Trending Persons
                               </div>
                                          <?php
                                                for($i=0;$i<5;$i++)
                                                {
                                                ?>
                                                         <a class="item">
                                                             Modi
                                                           </a>

                                                 <?php
                                                }
                                                ?>
                              
                             </div>
               <!-- LHS menu End -->