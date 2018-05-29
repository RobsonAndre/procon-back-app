<form action="./valida_nome.php" method="post">
    <br>Digite&nbsp;o&nbsp;nomes separados por virgula:<br />
    <textarea type="text" name="arr" cols="120" rows="30"></textarea><br />&nbsp;
    <input type="submit" value="Validar" />
</form>
<?php

$ini = time();
$arr = explode(',',filter_input(INPUT_POST, 'arr', FILTER_SANITIZE_STRING));
    
if(count($arr)){
    include('../config/config.php');
    
    echo '<table>';
    for($i=0;$i<count($arr);$i++){
        echo '<tr>'; 
        echo '<td>'; 
        echo $i+1; 
        echo '</td>'; 
        echo '<td>'; 
        echo $arr[$i]; 
        echo '</td>'; 
        echo '<td>'; 
        echo validaNome($arr[$i])?'<label style="color:#00F">OK</label>':'<label style="color:#F00">Invalido</label>'; 
        echo '</td>'; 
        echo '</tr>'; 
    }
    echo '<tr>'; 
    echo '<td>'; 
    echo 'Resultado:'; 
    echo '</td>'; 
    echo '</tr>'; 
        
    echo '<tr>'; 
    echo '<td>';
    echo 'Qtde:' . count($arr) .' nomes'; 
    echo '</td>'; 
    echo '</tr>'; 
    echo '<tr>'; 
    echo '<td>';
    $fin = time();
    echo 'Tempo de execução:' . ($fin-$ini) .' seg.'; 
    echo '</td>'; 
    echo '</tr>'; 
    
    echo '</table>';

}