<?php include "topbit.php"; ?>

        <main>
            <table>
            
                <tr>
                
                    <td><span class="poemtype">Acrostic</span></td>
                    
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
                        An acrostic poem is one where the first letter of each line spells out a word or a phrase.  These poems don’t have to rhyme. 
                    </p>
                    <p>
                        Source: <a href="https://wonderopolis.org/wonder/what-is-an-acrostic-poem">https://wonderopolis.org/wonder/what-is-an-acrostic-poem</a> 
                    </p>
                
                </div>  <!-- / info box -->    
            
            </div>      <!-- / hidden -->
            
            <article>
            
                <h3>Dance Invitation</h3>

                <p>
                    <span class="firstletter">J</span>oy - where rhythm and motion meet<br />
                    <span class="firstletter">O</span>pen hearts embrace the beat<br />
                    <span class="firstletter">I</span>n an instant - on your feet<br />
                    <span class="firstletter">N</span>othing ever felt this sweet<br />
                </p>
                <p>
                    <span class="firstletter">T</span>urn, turn and turn some more<br />
                    <span class="firstletter">H</span>appiness comes to the fore<br />
                    <span class="firstletter">E</span>xuberance is at its core<br />
                </p>
                <p>
                    <span class="firstletter">M</span>uscle memory smooths the way<br />
                    <span class="firstletter">O</span>nly love is felt today<br />
                    <span class="firstletter">V</span>ivid colours all around<br />
                    <span class="firstletter">E</span>nergy - fuelled by sound<br />
                    <span class="firstletter">M</span>usic expands to fill the space<br />
                    <span class="firstletter">E</span>xcitement now on every face<br />
                    ‘<span class="firstletter">N</span>ow’ is a gift, come out to play<br />
                    <span class="firstletter">T</span>ake time to dance your stress away.<br />

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
                  xmlhttp.open("GET","polls/acrostic_vote.php?vote="+int,true);
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
                
                    <img class="allround" src="images/sm_sq_acrostic_shoes.jpg" alt="Acrostic Shoes" width="250" height="250" />
                
                </div>  <!-- / image centering -->
                
            </div>  <!-- / end poll -->

        </aside>

<?php include "bottombit.php"; ?>

        











