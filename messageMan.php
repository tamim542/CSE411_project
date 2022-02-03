   <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Send Message To Departments</title>  
           <link rel="stylesheet" href="bootstrap.min.css" />  
            <script type = "text/javascript" src="bootstrap.min.js"></script>  
            <script type = "text/javascript" src="jquery-3.4.1.min.js"></script>


      </head>  
      <body> 
      <a href="managerprof.php"><h1><u> << Home</h1></u></a> 
        <h2><fornt color="red"><Center>Send Message To Departments >> </fornt></h2>
           <br /><br />  
           <div class="container" style="width:500px;"> 

                <form id="submit_form" action="insertmessageMan.php" method="POST" onsubmit="return formSubmit();">  
                     <label>Department:</label>  
                    <select style = "width:200px" name="department" id="dept">
                      <option value ="Administration">Administration</option>
                      <option value ="Sampling">Sampling</option>
                      <option value ="Merchandising">Merchandising</option>
                      <option value ="Sewing">Sewing</option>
                      <option value ="Finishing and Packaging">Finishing and Packaging</option>
                      +
                    </select>


                      <br>
                     <br />  
                     <label>Message:</label>  
                     <textarea name="message" id="message" class="form-control"></textarea>  
                     <br />  
                     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> 
                     <h3 id="success"></h3> 
                     
                </form>  
           </div>

 <script>
  function formSubmit(){
        $.ajax({
            type: 'POST',
            url: 'insertmesaageMan.php',
            data: {department:department, message:message},
            success:function(response){
                $('#success').html(response);
            }
        });
        var form = document.getElementById('#submit_form').reset();
        return false;

      }
  
  </script>
      </body>  
 </html>  
 