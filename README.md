Pagination-PHP-POO-MySQL
========================

Basic Pagination PHP POO and MySQL

<h2>Use</h2>
<p>Instance:</p>
<code>new Pagination(table,countRecord);</code>
<p>Example:</p>
<code>$pagination = new Pagination('Book', 5);</code>
<p>And add Multiple Where in sentence:</p>
<code>$pagination->setWhere(array(array(attribute,condition,value),array(attribute,condition,value),etc));</code>
<p>Example:</p>
<code>$pagination->setWhere(array(array('Status','=',1),array('ID','>',3)));</code>
<p>Query result:</p>
<code>SELECT * FROM Book WHERE Status=1 AND ID>3</code>
<p>And add order by in sentence:</p>
<code>$pagination->setOrderBy(array(attribute,asc or desc));</code>
<p>Example:</p>
<code>$pagination->setOrderBy(array('Pages','DESC'));</code>
<p>Query result:</p>
<code>SELECT * FROM Book ORDER BY Pages DESC</code>

<p>Show list of pages and current page:</p>
<pre>
	for ($i=1; $i &lt;= $pagination->getPages(); $i++) { 
	  $active = ($pagination->getCurrentPage()==$i) ? ' class="active"':'';
	  echo '&lt;li'.$active.'>&lt;a href="#" >'.$i.'&lt;/a>&lt;/li>';
	}
</pre>