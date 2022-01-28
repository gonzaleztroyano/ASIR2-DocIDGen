<?php
print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ASIR2 ID Generator</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="header">
            <h1>Nomenclatura Elementos ASIR</h1>
            <pre class="code-style"> <span>ASIR2.{MÓDULO}.T{#}.[#].{CONCEPTO}.PabloGonzález.{ext}</span></pre>
        </div>
        <div id="data-intro">
        <form action="index.php" method="post">
                <label for="modulo" class="need-vertical-margin">Módulo: &nbsp;&nbsp;&nbsp;</label>
                <select id="modulo" name="modulo" tabindex="1" class="need-vertical-margin>
                    <option value="ASGBD">ASGBD</option>
                    <option value="ASO">ASO</option>
                    <option value="IAW">IAW</option>
                    <option value="SRI">SRI</option>
                    <option value="SYAD">SYAD</option>
                </select>
                <fieldset class="need-vertical-margin">
                    <legend>Tema o Trimestre</legend>
                    <label for="modulo">Módulo: &nbsp;&nbsp;&nbsp;</label>
                    <select id="t_o_trim" name="t_o_trim" tabindex="2">
                        <option value="T">Tema</option>
                        <option value="Trim">Trimestre</option>
                    </select>
                    <label for="numero">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Número: &nbsp;&nbsp;&nbsp;</label>
                    <input name="numero" id="numero" type="number" tabindex="3" min="0"/>    
                </fieldset>
                <label for="titulo" class="need-vertical-margin">Título: &nbsp;&nbsp;&nbsp;</label>
                <input name="titulo" id="titulo" type="text" tabindex="4" class="need-vertical-margin"/>    
                    </br>
                <input type="submit" name="enviar" value="Generar" id="submit-button">
            </form>
    </div>
    <?php
        if(isset($_POST["enviar"])){  ?>
            <div id="gen-result">
                <pre class="code-style"> <span>ASIR2.<?=$_POST["t_o_trim"]?><?$_POST["numero"]?>.[#].{CONCEPTO}.PabloGonzález.{ext}</span></pre>
            </div>
        <?php }
    ?>
    </body>
</html>