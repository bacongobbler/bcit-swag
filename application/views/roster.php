<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * views/homepage.php
 *
 * Present the welcome page body.
 * Yes, I probably should have used CSS, but a table is so easy.
 *
 * @author		JLP
 * ------------------------------------------------------------------------
 */
?>
<div>
    <h1>roster.xml</h1>
    {myxml}
    <hr />
    <h1>roster.dtd</h1>
    {mydtd}
</div>