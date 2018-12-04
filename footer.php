  <!-- Sidebar -->
<ul class="sidenav indigo darken-4 white-text" id="side-bar" style="width: 60%;">
    <li class='right-align'><i class="fas fa-window-close white-text mr-25 mt-50 sidenav-close"></i></li>
    <!-- Widget area -->
    <?php if(is_active_sidebar('sidebar')): ?>
      <li class='my-2 flow-text overflow-hidden'>
      <?php dynamic_sidebar('sidebar'); ?>
      </li>
    <?php endif; ?>
    <!-- End widget area -->
    </ul>

    <!-- End sidebar -->
  
  <!-- Fixed Action Menu Button -->
  <div class="fixed-action-btn">
    <a href="#" class="btn-floating pulse btn-large indigo darken-4 waves-effect waves-light hoverble sidenav-trigger initfab" data-target="side-bar"><i class="material-icons white-text">email</i>
      </a>
      <ul>
        <!-- Call Btn Sidebar -->
        <li><a href="tel:+1-877-549-1212" class="btn-floating green darken-2 darken-2 waves-effect waves-light show-on-large hoverable" data-target="side-bar" ><i class="material-icons white-text">phone</i>
      </a></li>
      
      </ul>
  </div>

    <!-- Section Footer -->
    
    <footer class="section blue darken-2 white-text center">
      <p class="flow-text sr32">&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name') ?></p>
  </footer>

  <?php wp_footer(); ?>
    <!-- Scroll Reveal -->
    <script  src="https://unpkg.com/scrollreveal@4"></script>

    <script >
        ScrollReveal().reveal('.sr1');
        ScrollReveal().reveal('.sr2');
        ScrollReveal().reveal('.sr3');
        ScrollReveal().reveal('.sr4');
        ScrollReveal().reveal('.sr5');
        ScrollReveal().reveal('.sr6');
        ScrollReveal().reveal('.sr7');
        ScrollReveal().reveal('.sr8');
        ScrollReveal().reveal('.sr9');
        ScrollReveal().reveal('.sr10');
        ScrollReveal().reveal('.sr11');
        ScrollReveal().reveal('.sr12');
        ScrollReveal().reveal('.sr13');
        ScrollReveal().reveal('.sr14');
        ScrollReveal().reveal('.sr15');
        ScrollReveal().reveal('.sr16');
        ScrollReveal().reveal('.sr17');
        ScrollReveal().reveal('.sr18');
        ScrollReveal().reveal('.sr19');
        ScrollReveal().reveal('.sr20');
        ScrollReveal().reveal('.sr21');
        ScrollReveal().reveal('.sr22');
        ScrollReveal().reveal('.sr23');
        ScrollReveal().reveal('.sr24');
        ScrollReveal().reveal('.sr25');
        ScrollReveal().reveal('.sr26');
        ScrollReveal().reveal('.sr27');
        ScrollReveal().reveal('.sr28');
        ScrollReveal().reveal('.sr29');
        ScrollReveal().reveal('.sr30');
        ScrollReveal().reveal('.sr31');
        ScrollReveal().reveal('.sr32');
    </script>
    <!-- Materialize JS -->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // ScrollSpy
        const ss = document.querySelectorAll('.scrollspy');
          M.ScrollSpy.init(ss, {});

    
      // Sidenav
      const sideNav = document.querySelector(".sidenav");
      M.Sidenav.init(sideNav, {
        draggable: true
      });
      // Sidebar
      const sideBar = document.querySelector("#side-bar");
      M.Sidenav.init(sideBar, {
        draggable: true
      });

      // Tabs
      var tabs = document.querySelectorAll('.tabs')
        for (var i = 0; i < tabs.length; i++){
          M.Tabs.init(tabs[i], {
            swipeable: true
          });
        }
        
        // Fixed Action button
        var initfab = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(initfab, {direction: 'left', hover: true});

        // Collapsable
        var collaps = document.querySelectorAll('.collapsible');
        var icolaps = M.Collapsible.init(collaps);
        

        //Dropdown Menu
        var dropdowns = document.querySelectorAll('.dropdown-trigger');
        var ddinstances = M.Dropdown.init(dropdowns, {
            inDuration: 300,
            outDuration: 225,
            constrain_width: true, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        });
        });
    </script>
  </body>
</html>
