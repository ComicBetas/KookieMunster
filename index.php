<?php include("assets/includes/global-header.php"); ?>
<?php include("assets/includes/main-header.php"); ?>
<div id="homepage" class="container">
  <div id="content">
    <div id="main_content">
      <script>
        function get_cookies_array() {
          var cookies = { };
          var domain = document;
          // var domain = 'http://www.amazon.com';
          console.log(domain)
          if (domain.cookie && domain.cookie != '') {
            var split = domain.cookie.split(';');
            for (var i = 0; i < split.length; i++) {
              var name_value = split[i].split("=");
              name_value[0] = name_value[0].replace(/^ /, '');
              cookies[decodeURIComponent(name_value[0])] = decodeURIComponent(name_value[1]);
            }
          }
          return cookies;
        }
        var cookies = get_cookies_array();
        for(var name in cookies) {
          console.log( name + " : " + cookies[name] + "=" );
        }
      </script>
    </div><!-- #main_content -->
    <?php include("assets/includes/sub-nav.php"); ?>
  </div><!-- #content -->
  <?php include("assets/includes/main-footer.php"); ?>
</div><!-- #homepage -->
<?php include("assets/includes/global-footer.php"); ?>