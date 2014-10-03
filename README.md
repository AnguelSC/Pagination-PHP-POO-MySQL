Pagination-PHP-POO-MySQL
========================

Basic Pagination PHP POO and MySQL

<h2>Use</h2>
<p>Instance:</p>
<code>$pagination = new Pagination('Book', 5);</code>
<p>And add order by in sentence:</p>
<code>$pagination->setOrderBy(array('Pages','DESC'));</code>
<p>And add Where in sentence:</p>
<code>$pagination->setWhere(array('Title','Title demo'));</code>
<p>Show list of pages and current page:</p>
<pre>
	for ($i=1; $i &lt;= $pagination->getPages(); $i++) { 
	  $active = ($pagination->getCurrentPage()==$i) ? ' class="active"':'';
	  echo '&lt;li'.$active.'>&lt;a href="#" >'.$i.'&lt;/a>&lt;/li>';
	}
</pre>