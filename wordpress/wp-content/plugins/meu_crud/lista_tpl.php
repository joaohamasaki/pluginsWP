<div class="wrap">

    <form method="post">
        <h1>Meu CRUD</h1>

        <br><br>

        <table border="1">
            <tr>
                <td>Nome</td>
                <td>WhatsApp</td>
            </tr>

            <?php
            foreach ($contatos as $keys => $value) {


                echo "<tr>
                      <td>{$value->nome}</td>
                      <td>{$value->whatsapp}</td>
                      <td><a href='?page={$_GET['page']}&apagar={$value->id}
                            '>Apagar</a></td>
                 </tr>";
            }
            ?>

            <tr>
                <td><input type="text" name="nome" placeholder="Nome"></td>
                <td><input type="text" name="whatsapp" placeholder="Whatsapp"></td>
                <td><?php submit_button('Gravar'); ?></td>
            </tr>


        </table>
    </form>

</div>