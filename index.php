<?php
#print_r($_POST);
if(isset($_POST["enviar"])) {
    $modulo   = $_POST["modulo"];
    $t_o_t    = $_POST["t_o_t"];
    $n_t_o_t  = $_POST["n_t_o_t"];
    $n_doc    = $_POST["n_doc"];
    $titulo   = $_POST["titulo"];
}
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
                    <option value="ING">ING</option>
                    <option value="SRI">SRI</option>
                    <option value="SYAD">SYAD</option>
                </select>
                <fieldset class="need-vertical-margin">
                    <legend>Tema o Trimestre</legend>
                    <label for="modulo">Módulo: </label>
                    <select id="t_o_t" name="t_o_t" tabindex="2">
                        <option value="T">Tema</option>
                        <option value="Trim">Trimestre</option>
                    </select>
                    <label class="mid-center" for="n_t_o_t">&nbsp;&nbsp;Número: </label>
                    <input class="number-input" name="n_t_o_t" id="n_t_o_t" type="number" tabindex="3" min="0" required value="<?=$n_t_o_t?>"/>    
                </fieldset>
                <fieldset class="need-vertical-margin">
                    <legend>Datos del documento</legend>
                    <label for="n_doc">Número: </label>
                    <input class="number-input" name="n_doc" id="n_doc" type="number" tabindex="3" min="0" value="<?=$n_doc?>"/>    
                    <label class="mid-center" for="titulo" class="need-vertical-margin">Título: </label>
                    <input name="titulo" id="titulo" type="text" tabindex="4" value="<?=$titulo?>"/>    
                        </br>
                </fieldset>
                <input type="submit" name="enviar" value="Generar" id="submit-button">
            </form>
    </div>
    <?php
        if(isset($_POST["enviar"])){  ?>
            <div id="gen-result">
                <table>
                        <th>Formato</th>
                        <th>Generado</th>
                    <tr>
                        <td>Inicio</td>
                        <td><pre class="code-style"> <span>ASIR2.<?=$modulo?>.</span></pre></td>
                    </tr>
                    <tr>
                        <td>Sin número de documento</td>
                        <td><pre class="code-style"> <span>ASIR2.<?=$modulo?>.<?=$t_o_t?><?=$n_t_o_t?>.</span></pre></td>
                    </tr>
                    <tr>
                        <td>Con número y título</td>
                        <td><pre class="code-style"> <span>ASIR2.<?=$modulo?>.<?=$t_o_t?><?=$n_t_o_t?>.<?=$n_doc?>.<?=$titulo?>.</span></pre></td>
                    </tr>
                    <tr>
                        <td>Sin extención</td>
                        <td><pre class="code-style"> <span>ASIR2.<?=$modulo?>.<?=$t_o_t?><?=$n_t_o_t?>.<?=$n_doc?>.<?=$titulo?>.PabloGonzález</span></pre></td>
                    </tr>
                    <tr>
                        <td>Tipo PDF</td>
                        <td><pre class="code-style"> <span>ASIR2.<?=$modulo?>.<?=$t_o_t?><?=$n_t_o_t?>.<?=$n_doc?>.<?=$titulo?>.PabloGonzález.pdf</span></pre></td>
                    </tr>
<!--                    <pre class="code-style"> <span>ASIR2.<?=$t_o_t?><?=$n_t_o_t?>.<?=$n_doc?>.<?=$titulo?>.PabloGonzález.{ext}</span></pre> -->
                </table>
            </div>
        <?php }
    ?>
    <footer>
        <p>Creative Commons BY 4.0 International </br>2022, Pablo González Troyano</p>
        <p></p>
    </footer>
    </body>
</html>