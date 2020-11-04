<div class="wrap">
    <h1>Configurações do Meu Plug-in</h1>

    <br><br>
    <form method="post" action="options.php">

        <label for="">Token da API</label>
        <input type="text" name="token_da_api">
        <br><br>
        <label for="">URL da API</label>
        <input type="text" id="url_da_api" name="url_da_api">
        <br><br>

        <?php submit_button(); ?>
    </form>
</div>