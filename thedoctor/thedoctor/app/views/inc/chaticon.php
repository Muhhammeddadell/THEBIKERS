<button  onclick="window.location='contact'" id="chatBtn" title="Chat"> 
                <span class="visually-hidden">Contact Us</span></button>

<button onclick="topFunction()" id="toTop" title="Go to top">Top Of Page</button>
<script>

var chatBtn = document.getElementById("chatBtn");

window.onscroll = function() {scrollFunction()};

</script>



<script>

var toTopbutton = document.getElementById("toTop");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    toTopbutton.style.display = "block";
  } else {
    toTopbutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>