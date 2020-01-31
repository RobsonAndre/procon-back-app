<?php
/* TimeZone e SetLocation */

/*
 *  SetLocation
 *      Ajusta da função date para PB-BR
 * 
 */
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
/**
 *  TimeZone
 *  Descricao
 *      Corrige o erro de timeZone da BS2 
 *  data:
 *      13/01/2020 10h07
 */
// resolvido pela bs2 em 22/01/2020 as 16h38 //date_default_timezone_set('America/Fortaleza');