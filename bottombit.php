        <footer>
            &copy; Miss Gottschalk 2019
        </footer>
    
        
    </div>

<!-- Javascript to show / hide content -->

<script>
function hideContent() {
  var x = document.getElementById("hidden");
          
    /* hides content */
  if (x.style.display != "block") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} /* end hideContent function */

    

function swapSource() {
    var y = document.getElementById("showhide");
    
    /* swaps text on Sources page*/
    
    if (y.innerHTML === "Hide Sources") {
    y.innerHTML = "View Sources";
  } else {
    y.innerHTML = "Hide Sources";
  }
    
}   /* end swap source */
    
function swapPoem() {
    var y = document.getElementById("showhide");
    
    /* swaps text on Sources page*/
    
    if (y.innerHTML === "Show Less") {
    y.innerHTML = "Show More";
  } else {
    y.innerHTML = "Show Less";
  }
    
}   /* end swap 'show more / show less */
    
</script>
    
</body>
    
</html>