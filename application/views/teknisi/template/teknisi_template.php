<!DOCTYPE html>
<html>
<?php echo $page["head"]; ?>
<style type="text/css">
<?php if(isset($css)){ echo $css; } ?> 
</style>
<body>
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div id="main-wrapper">
        <?php echo $page["header"]; ?>
        <?php echo $page["sidebar"]; ?>
        <div class="content-body">
          <?php echo $content;?>
        </div>
        <?php echo $page["footer"]; ?>  
    </div>
    <?php echo $page['main_js'];?>
    <script type="text/javascript">
        <?php if(isset($javascript)){ echo $javascript; } ?>
    </script>
</body>
</html>