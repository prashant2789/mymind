<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print("hello world");
?>

<html>
    <head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function () {
              $("button").click(function () {
                  var text = $(this).text();                    
                  $("input").val(text);
              });
          });
        </script>           
        </head>
        <body>
            <div>
                <button>Vote</button>                
            </div>
            <input type="text" value="click to vote" />
        </body>
    </html>