<style>
  body {
    background: #f1f1f1;
    margin: 0 20px;
  }

  .message {
    background: #fff;
    color: #444;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
    margin: 150px auto;
    padding: 20px 20px;
    max-width: 700px;
    -webkit-font-smoothing: subpixel-antialiased;
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.13);
    box-shadow: 0 1px 3px rgba(0,0,0,.13);
  }
</style>
<div class="message">
  <?php
    global $smt_settings;
    echo $smt_settings['maintenance-mode-text'];
  ?>
</div>
