<?php include "topbit.php"; ?>

        <main>
            <table>
            
                <tr>
                
                    <td><span class="poemtype">Free Verse</span></td>
                    
                    <td>
                        <button onclick="hideContent(); swapPoem()" id="showhide">
                            Learn More
                        </button>
                    </td>
                    
                </tr>
            
            </table>
            
            <div id="hidden">
                <div class="info">
                    <p>
                   According to the Wikipedia, <a href="https://en.wikipedia.org/wiki/Free_verse">free verse</a> is where a poem does not have to rhyme or have a specific structure / beat.  In free verse it is still common to use various poetic techniques such as alliteration, onomatopoeia and repetition.
                    </p>
                    
                    <p>
                    Source:<a href="https://en.wikipedia.org/wiki/Free_verse">https://en.wikipedia.org/wiki/Free_verse</a>
                    </p>
                
                </div>  <!-- / info box -->    
            
            </div>      <!-- / hidden -->
            
            
            <article>
            
                <h3>Choreographed Grace</h3>
                
                <p>
                    Don't believe that dancers are awkward?<br />
                    dancers are graceful beyond belief.<br />
                    Are you upset by how liquid they are?<br />
                    Does it tear you apart to see the dancers so gracious?<br />
                    Don't believe that the waltz is rugged?<br />
                    the waltz is delicate beyond belief.<br />
                    Does the waltz make you shiver?<br />
                    does it?<br />
                    Pay attention to the choreography,<br />
                    the choreography is the most little dancing of all.<br />
                    Down, down, down into the darkness of the choreography,<br />
                    Gently it goes - the wee, the smaller, the short.<br />
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
                  xmlhttp.open("GET","polls/freeverse_vote.php?vote="+int,true);
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
                
                    <img class="allround" src="images/sm_sq_freeverse_dancer.jpg" alt="Free Verse Shoes" width="250" height="250" />
                
                </div>  <!-- / image centering -->
                
            </div>  <!-- / poll -->

        </aside>

<?php include "bottombit.php"; ?>

        











