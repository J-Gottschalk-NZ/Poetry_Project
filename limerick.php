<?php include "topbit.php"; ?>

        <main>
              <table>
            
                <tr>
                
                    <td><span class="poemtype">Limerick</span></td>
                    

                    <td>
                        <button onclick="hideContent(); swapPoem()" id="showhide">
                            Learn More...
                        </button>
                    </td>
                    
                </tr>
            
            </table>
            
            <div id="hidden">
                <div class="info">
                    <p>
                        Limericks are five line poems in the form AABBA.  They are often humorous and the name ‘Limerick’ is generally assumed to refer to the County of Limerick (in Ireland).
                    </p>
                    <p>
                        <a href="Source: https://en.wikipedia.org/wiki/Limerick_(poetry)">Source: https://en.wikipedia.org/wiki/Limerick_(poetry)</a>
                    </p>
                
                </div>  <!-- / info box -->    
            
            </div>      <!-- / hidden -->
            
            <article>
            
                <h3>There once was a dancer...</h3>

                <p>
                    There once was a dancer called Ray<br />
                    He never knew quite what to say<br />
                    But man could he move<br />
                    He’d jive and he’d groove<br />
                    As long as the music did play
                </p>
            
            </article>

        </main>
        
        <aside>
            
            <script>
                function getVote(int) {
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                      document.getElementById("poll").innerHTML=this.responseText;
                    }
                  }
                  xmlhttp.open("GET","polls/limerick_vote.php?vote="+int,true);
                  xmlhttp.send();
                }
                </script>
            
            <div id="poll">
                <h3>Was this poem created by a human?</h3>
                
                <form>
                    Yes:
                    <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                    <br>No:
                    <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                </form>
                
                <br /><br />
                
                <div class="centered">
                
                    <img class="allround" src="images/sm_sq_limerick_dancer.jpg" alt="Limerick Dancer" width="250" height="250" />
                
                </div>  <!-- / image centering -->
                
            </div>  <!-- / poll -->

        </aside>

<?php include "bottombit.php"; ?>

        











