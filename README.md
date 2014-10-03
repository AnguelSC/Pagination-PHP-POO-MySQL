Pagination-PHP-POO-MySQL
========================

Basic Pagination PHP POO and MySQL

<h2>Use</h2>
<p>Instance:</p>
<code>
<?php
	$pagination = new Pagination('Book', 5);
?>
</code>
<p>And add order by in sentence:</p>
<code>
<?php
  	$pagination->setOrderBy('Pages');
?>
</code>
<p>And add Where in sentence:</p>
<code>
<?php
	$pagination->setWhere(array('Title','Title demo'));
?>
</code>