<div class="wrap">
    
    <h1>Config do meu Plugin</h1>
    
    <form action="options.php" method="post">
        <?php
            settings_fields('configs-exemplo');
            do_settings_sections('configs-exemplo');
        ?>
        <br><br>
        <label for="api-token">Token da Api:</label>
        <input type="text" name="api-token" id="api-token" 
        
        value="<?php echo get_option('api-token'); ?>"> 
        
        <br><br>

        <label for="api-url">URL da Api:</label>
        <input type="text" name="api-url" id="api-url" 
        
        value="<?php echo get_option('api-url'); ?>">

        <br><br>

        <?php submit_button('Salvar Configuração');?>

    </form>
</div>